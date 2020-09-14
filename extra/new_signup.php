<?php 
session_start();
//Include database configuration file
include('../db/config.php');

$var = test_input($_GET['ver']);

if(isset($var))
{
	$err = '';
	$count = 0;
	$stm = $db->prepare("SELECT link FROM temp_account WHERE link = ?");
	$stm->bind_param("s",$var);
	$stm->execute();
	$stm->store_result();
	$count = $stm->num_rows;
	$stm->free_result();
	
	//if link exist
	if($count == 1)
	{
		//get the temp row	
		$stm = $db->prepare("SELECT * FROM temp_account WHERE link = ?");
		$stm->bind_param("s",$var);
		$stm->execute();
		$res = $stm->get_result();
		$row = $res->fetch_assoc();
		$stm->free_result();
		
		//now check for authid
		$count1 = 0;
		$stm = $db->prepare("SELECT oauth_uid FROM users_login WHERE oauth_uid = ?");
		$stm->bind_param("s",$row['oauth_uid']);
		$stm->execute();
		$stm->store_result();
		$count1 = $stm->num_rows;
		$stm->free_result();
		
		
		//check for email too
		$count2 = 0;
		$stm = $db->prepare("SELECT email FROM users_login WHERE email = ?");
		$stm->bind_param("s",$row['email']);
		$stm->execute();
		$stm->store_result();
		$count2 = $stm->num_rows;
		$stm->free_result();
		
		if($count1 == 0 && $count2 == 0){
			//then just move the temp_account to main database and a profile
			$flag = 0;
			if (($stmt = $db->prepare("INSERT INTO users_login(type,oauth_provider,oauth_uid,password,name,email,gender,created,last_login) VALUES (?,'normal',?,?,?,?,?,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)"))) {
				if ($stmt->bind_param("ssssss",$row['type'],$row['oauth_uid'],$row['password'],$row['name'],$row['email'],$row['gender'])) {
					if ($stmt->execute()) {
						if($row['type'] == 'user'){
							if(($stmtt = $db->prepare("INSERT INTO users_profile(username) VALUES (?) "))){
								if($stmtt->bind_param("s",$row['oauth_uid'])){
									if($stmtt->execute()){
										//now delete the current temp_account
										if(($stmtty = $db->prepare("DELETE FROM temp_account WHERE link = ? "))){
											if($stmtty->bind_param("s",$var)){
												if($stmtty->execute()){
													//deleted the row
													session_unset();
													session_destroy();
												}
												else
													$flag = 1;
											}
											else
												$flag = 1;
										}
										else
											$flag = 1;
									}
									else
										$flag = 1;
								}
								else
									$flag = 1;
							}
							else
								$flag = 1;
						}
						else if($row['type'] == 'recruiter'){
							if(($stmtt = $db->prepare("INSERT INTO recruiter_profile(username) VALUES (?) "))){
								if($stmtt->bind_param("s",$row['oauth_uid'])){
									if($stmtt->execute()){
										//now delte the current temp_account
										if(($stmtty = $db->prepare("DELETE FROM temp_account WHERE link = ? "))){
											if($stmtty->bind_param("s",$var)){
												if($stmtty->execute()){
													//deleted the row
													session_unset();
													session_destroy();
												}
												else
													$flag = 1;
											}
											else
												$flag = 1;
										}
										else
											$flag = 1;
									}
									else
										$flag = 1;
								}
								else
									$flag = 1;
							}
							else
								$flag = 1;
						}				
					}
					else
						$flag = 1;
				}
				else
					$flag = 1;
			}
			else
				$flag = 1;

			if($flag == 1){
				$err = $err . "Sorry Something Went Wrong While Processing Your Request. Please Contact Developer About this Issue !";
			}
		}
		else if($count1 != 0 || $count2 != 0){
			$flag = 0;
			if(($stmtt = $db->prepare("DELETE FROM temp_account WHERE link = ? "))){
				if($stmtt->bind_param("s",$var)){
					if($stmtt->execute()){
						//now delte the current temp_account
						session_unset();
						session_destroy();
					}
					else
						$flag = 1;
				}
				else
					$flag = 1;
			}
			else
				$flag = 1;
			
			if($flag == 1){
				$err = $err . "Sorry Something Went Wrong While Processing Your Request. Please Contact Developer About this Issue !";
			}
		}
		
		if($err != ""){
		echo '<script type="text/javascript">setTimeout(function(){ swal("Error !" ,"'.$err.'", "error");}, 100);</script>';
		}
	
	}
	else{
		// Unset all session variables
		session_unset();
		// Delete all session variables
		session_destroy();
		header("Location: ../index.php");
	}
}
else{
	header("Location: index.php");
}

//function to do validation and triming data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
<!-- Favicon Icon Css
================================================== -->
<link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicons/favicon-16x16.png">
<link rel="manifest" href="../favicons/manifest.json">
<link rel="mask-icon" href="../favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>CareerStairs | Welcome</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/green.css">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->
<header class="sticky-header">
<div class="container">
	<div class="sixteen columns">
	
		<!-- Logo -->
		<div id="logo">
			<h1><a href="../index.html"><img src="../images/logo.png" alt="Career Stairs" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul class="float-right">
				<li><a href="#"><i class="fa fa-external-link-square" aria-hidden="true"></i> Post a Job</a></li>
				<li><a href="../login.php"><i class="fa fa-lock"></i> Log In</a></li>
			</ul>
		</nav>

	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Banner
================================================== -->
<div id="banner" style="opacity:.5;background-image:url(https://elasticemail.com/wp-content/uploads/2016/12/xUntitled-design-2-1-1200x194.jpg.pagespeed.ic.-v89vClzxc.webp); background-position:center top;background-repeat:no-repeat;background-size:cover;left:0;top:0;" class="parallax background" data-img-width="2000" data-img-height="1330" data-diff="400">
	<div class="container">
		<div class="sixteen columns">
			<div class="search-container">
				<h2 align="center">Account Activation !</h2>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<!-- Icon Boxes -->
<div class="section-background top-0">

	<?php if($count1 == 0 && $count2 == 0)
	echo '
		<div class="container" style="font-size: 18px">
			<p>We would like to say</p>
			<h1 style="font-size: 30px"><strong>Thank You!</strong></h1><br/>
			<p>for joining our community of amazing people. You are ready to use your account !</p>
			<div class="divider margin-top-0 padding-reset"></div>
			<a href="../login.php"><button class="button big margin-top-5">Let\'s Get Started <i class="fa fa-arrow-circle-right"></i></button></a>
		</div>
	';
	else if($count1 == 1 && $count2 == 0)
		echo '
			<div class="container" style="font-size: 18px">
				<h1 style="font-size: 30px"><strong>Oops... !</strong></h1><br/>
				<h2>You\'re chosen username has been taken by someone else. Please create a new account and don\'t forget to activate it ASAP !</h2>
				
			</div>
		';
	else if($count1 == 0 && $count2 == 1)
		echo '
			<div class="container" style="font-size: 18px">
				<h1 style="font-size: 30px"><strong>Oops... !</strong></h1><br/>
				<h2>You\'re chosen email has been taken by someone else. Please create a new account and don\'t forget to activate it ASAP !</h2>
				
			</div>
		';
	else if($count1 == 1 && $count2 == 1)
		echo '
			<div class="container" style="font-size: 18px">
				<h1 style="font-size: 30px"><strong>Oops... !</strong></h1><br/>
				<h2>You\'re chosen email and username has been taken by someone else. Please create a new account and don\'t forget to activate it ASAP !</h2>
				
			</div>
		';
	?>
	
	
</div>
<!-- Icon Boxes / End -->

<!-- Footer
================================================== -->
<div class="margin-top-0"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="eight columns" style="padding-right: 50px">
			<h4>About</h4>
			<p style="text-align: justify">CareerStairs is a unique tech-driven platform that aims to revolutionize the way hiring is done. Whether you are a job-seeker or an employer, we help you secure the best of job opportunities and talent. Our unique ranking algorithm helps candidates get noticed by recruiters on one hand while helping recruiters notice the right candidates on the other. Similarly, the ingenious Resume feature enables employers hire wisely while letting candidates showcase the best of their talent.
  			</p>
		</div>
		
	
		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="../about.php">About Us</a></li>
				<li><a href="../careers.php">Careers</a></li>
				<li><a href="www.blog.careerstairs.in">Our Blog</a></li>
				<li><a href="../service.php">Terms of Service</a></li>
				<li><a href="../policy.php">Privacy Policy</a></li>
				<li><a href="../contact.html">Contact Us</a></li>
			</ul>
		</div>
	
		<div class="three columns">
			<h4>Follow Us</h4>
			<ul class="social-icons">
				<li><a target="_blank" class="facebook" href="https://www.facebook.com/careerstairsin-259421891127990/"><i class="icon-facebook"></i></a></li>
				<li><a target="_blank" class="twitter" href="https://twitter.com/CareerstairsI"><i class="icon-twitter"></i></a></li>
				<li><a target="_blank" class="gplus" href="https://plus.google.com/u/0/109522836028901433584"><i class="icon-gplus"></i></a></li>
				<li><a target="_blank" class="linkedin" href="https://www.linkedin.com/company/18031484/"><i class="icon-linkedin"></i></a></li>
			</ul>
			<br/>
			<br/>
			<br/>
			<div class="copyrights">©  Copyright 2018 by <a href="index.php">CareerStairs</a>. All Rights Reserved.</div>
		</div>
		

	</div>

	<!-- Bottom -->

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="../scripts/jquery-2.1.3.min.js"></script>
<script src="../scripts/custom.js"></script>
<script src="../scripts/jquery.superfish.js"></script>
<script src="../scripts/jquery.themepunch.tools.min.js"></script>
<script src="../scripts/jquery.themepunch.revolution.min.js"></script>
<script src="../scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="../scripts/jquery.flexslider-min.js"></script>
<script src="../scripts/chosen.jquery.min.js"></script>
<script src="../scripts/jquery.magnific-popup.min.js"></script>
<script src="../scripts/waypoints.min.js"></script>
<script src="../scripts/jquery.counterup.min.js"></script>
<script src="../scripts/jquery.jpanelmenu.js"></script>
<script src="../scripts/stacktable.js"></script>
<script src="../scripts/headroom.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

</body>
</html>