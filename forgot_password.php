<?php

include('db/config.php');
session_start();
//if he is already logged in as user
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user'] == true) {
	header("location: dashboard/user/index.php");
}
//if he is already logged in as recruiter
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['recruiter'] == true) {
	header("location: dashboard/recruiter/index.php");
}
//if he is already logged in as admin
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['admin'] == true) {
	header("location: dashboard/admin/index.php");
}

if(isset($_POST['search']))
{
	//getting hashed password
	$options = [
	'cost' => 11,
	];
	$link = password(10);
	$link_hash = password_hash($link, PASSWORD_BCRYPT, $options);
	
	$err = "";
	$username = test_input($_POST["username"]);
	$email = test_input(mb_strtolower($_POST["email"]));
	
	if(isset($username) && !empty($username)  && preg_match("/^[a-zA-Z]*$/",$username) && (strlen($username) > 7) && (strlen($username) < 21)){
	}
	else
		$err = $err . "Only Alphanumeric Input is allowed in Username with a Length between 8-20 </br>";
	
	//email
	if(isset($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && (strlen($email) >10) && (strlen($email) < 255) ){
	}
	else
		$err = $err . "Invalid Email address </br>";
	
	if($err == ''){
		//lets create a record in a change password and then send him a mail
		
		//first check does data match or not
		$count = 0;

		$stm = $db->prepare("SELECT id FROM users_login WHERE oauth_provider = 'normal' AND oauth_uid = ? AND email = ?");
		$stm->bind_param("ss",$username,$email);
		$stm->execute();
		$stm->store_result();
		$count = $stm->num_rows;
		$stm->free_result();
		
		if($count == 1){
			//lets create a record in change password
			
			//first check if found then update it and if not then insert record
			$check = 0;

			$stm = $db->prepare("SELECT id FROM forgot_password WHERE username = ? AND email = ? ");
			$stm->bind_param("ss",$username,$email);
			$stm->execute();
			$stm->store_result();
			$check = $stm->num_rows;
			$stm->free_result();
			
			if($check == 1){
				//update record
				$flag = 0;
				
				if (($stmt = $db->prepare("UPDATE forgot_password SET link = ?,start_time = CURRENT_TIMESTAMP, end_time = CURRENT_TIMESTAMP + INTERVAL '6:00' HOUR_MINUTE WHERE username = ? AND email = ? "))) {
					if ($stmt->bind_param("sss",$link_hash,$username,$email)) {
						if ($stmt->execute()) {
							echo '<script type="text/javascript">';
							echo 'setTimeout(function () { swal("Link Sent !","A password reset link has been sent to your mail and will be active for 6 hours from now !","success");';
							echo '}, 100);</script>';
							
							$_SESSION['forgot_password'] = true;
							$_SESSION['email'] = $email;
							$_SESSION['ssl'] = $link_hash;
							$_SESSION['page'] = '../login.php';
							
							echo "<script>setTimeout(\"location.href = 'email/forgot_password.php';\",100);</script>";
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
			else{
				//insert record
				$flag = 0;
						  
				if (($stmt = $db->prepare("INSERT INTO forgot_password(username,email,link,start_time,end_time) VALUES (?,?,?,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP + INTERVAL '6:00' HOUR_MINUTE)"))) {
					if ($stmt->bind_param("sss",$username,$email,$link_hash)) {
						if ($stmt->execute()) {
							
							echo '<script type="text/javascript">';
							echo 'setTimeout(function () { swal("Link Sent !","A password reset link has been sent to your mail and will be active for 6 hours from now !","success");';
							echo '}, 100);</script>';
							$_SESSION['forgot_password'] = true;
							$_SESSION['email'] = $email;
							$_SESSION['ssl'] = $link_hash;
							$_SESSION['page'] = '../login.php';
							
							echo "<script>setTimeout(\"location.href = 'email/forgot_password.php';\",100);</script>";
							
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
		}
		else
			$err = $err . "Details do not match !";
		
	}
	if($err != ''){
		echo '<script type="text/javascript">';
	    echo 'setTimeout(function () { swal("Error !","'.$err.'","error");';
	    echo '}, 100);</script>';
    }
}
//function to do validation and triming data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//function to produce a random number password by using md5 algo
function password($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
  return $str;
}
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
<!-- Favicon Icon Css
================================================== -->
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/manifest.json">
<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>CareerStairs | Forgot Password</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" >
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
			<h1><a href="index.php"><img src="images/logo.png" alt="Career Stairs" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive" >
				<li><a href="search.php">Connect</a></li>
				<li><a href="#">Services</a>
					<ul>
						<li><a href="mass_recruitment.php">Mass Recruitment</a></li>
						<li><a href="freelance.php">Freelance</a></li>
						<li><a href="campus.php">Campus Support</a></li>
					</ul>
				</li>
			</ul>
			<ul class="responsive float-right">
				<li><a href="browse_jobs.php"><i class="fa fa-external-link-square" aria-hidden="true"></i> Browse Jobs</a></li>
				<?php
				if(isset($_SESSION['userData']) && !empty($_SESSION['userData']))
					echo '<li><a href="login.php"><i class="fa fa-chevron-right"></i> Dashboard</a></li>';
				else
					echo '<li><a href="login.php"><i class="fa fa-lock"></i> Log In</a></li>';
				?>
			</ul>
		</nav>
		
		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>
		
	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(images/mac_4-wallpaper-1366x768.jpg)">
	<div class="container">

		<div class="sixteen columns">
			<h2>Reset Password</h2>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Table -->
	<div class="sixteen columns">

		<p class="margin-bottom-25" style="float: left;">Please fill details to reset your password !

	</div>
	
	<form autocomplete="off" method="post" >
		<div class="eight columns">
			<input class="search-field typeahead" type="text" placeholder="Enter Username" name="username" maxlength="20" pattern="[A-Za-z0-9]{8,20}" required >
			<div class="margin-bottom-15"></div>
		</div>

		<div class="seven columns">
			<input class="search-field" type="email" placeholder="Enter Email" name="email" maxlength="255" required>
			<div class="margin-bottom-35"></div>
		</div>
		

		<div class="one columns">
			<button type="submit" name="search"><i class="fa fa-angle-double-right fa-2x"></i></button>
			<div class="margin-bottom-35"></div>
		</div>
	</form>

</div>


<!-- Footer
================================================== -->
<div class="margin-top-60"></div>

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
				<li><a href="about.php">About Us</a></li>
				<li><a href="careers.php">Careers</a></li>
				<li><a href="www.blog.careerstairs.in">Our Blog</a></li>
				<li><a href="service.php">Terms of Service</a></li>
				<li><a href="policy.php">Privacy Policy</a></li>
				<li><a href="contact.html">Contact Us</a></li>
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
			<div class="copyrights">©  Copyright 2017 by <a href="index.php">CareerStairs</a>. All Rights Reserved.</div>
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

<script src="scripts/jquery-2.1.3.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>
<script src="scripts/headroom.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>


</body>

</html>