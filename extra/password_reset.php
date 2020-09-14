<?php 
session_start();
//Include database configuration file
include('../db/config.php');

$var = test_input($_GET['ver']);

if(isset($var))
{
	$count = 0;
	$stm = $db->prepare("SELECT link FROM forgot_password WHERE link = ?");
	$stm->bind_param("s",$var);
	$stm->execute();
	$stm->store_result();
	$count = $stm->num_rows;
	$stm->free_result();
	//if we got the link then we'll check the time of 3hr for user
	
	if($count == 1)
	{
		$status = 0;
		$stm = $db->prepare("SELECT link FROM forgot_password WHERE CURRENT_TIMESTAMP > start_time AND CURRENT_TIMESTAMP < end_time AND link = ?");
		$stm->bind_param("s",$var);
		$stm->execute();
		$stm->store_result();
		$status = $stm->num_rows;
		$stm->free_result();
		
	
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
if(isset($_POST["login"]))
{
	$password1 = test_input($_POST["password1"]);
	$password2 = test_input($_POST["password2"]);
	$password = str_replace(" ","",$password2);
	
	$err = '';
	
	//getting hashed password
	$options = [
		'cost' => 11,
	];
	
	if(isset($password1) && !empty($password1) && preg_match("/^[a-zA-Z0-9]*$/",$password1) && (strlen($password1) > 8) && (strlen($password1) < 16) ){
	}
	else
		$err = $err . "There is a problem with password !";
	
	if(isset($password2) && !empty($password2) && ($password1 == $password2)){
	}
	else
		$err = $err . "New Passwords Do not Match !";
		
	$password_hash = password_hash($password, PASSWORD_BCRYPT, $options);
	
	if($err == ''){
		$count = 0;
		
		$stm = $db->prepare("SELECT link FROM forgot_password WHERE link = ? AND CURRENT_TIMESTAMP > start_time AND CURRENT_TIMESTAMP < end_time");
		$stm->bind_param("s",$var);
		$stm->execute();
		$stm->store_result();
		$count = $stm->num_rows;
		$stm->free_result();
		
		//once again check the link
		if($count == 1){
			
			//now get the username and email from this link
			$stm = $db->prepare("SELECT username FROM forgot_password WHERE link = ? ");
			$stm->bind_param("s",$var);
			$stm->execute();
			$username = $stm->get_result()->fetch_object()->username;
			$stm->free_result();
			
			//now get the email
			$stm = $db->prepare("SELECT email FROM forgot_password WHERE link = ? ");
			$stm->bind_param("s",$var);
			$stm->execute();
			$email = $stm->get_result()->fetch_object()->email;
			$stm->free_result();
			
			//now check both the details in the users_login
			$flagg = 0;
			$stm = $db->prepare("SELECT id FROM users_login WHERE oauth_provider = 'normal' AND oauth_uid = ? AND email = ?");
			$stm->bind_param("ss",$username,$email);
			$stm->execute();
			$stm->store_result();
			$flagg = $stm->num_rows;
			$stm->free_result();
			
			if($flagg == 1){
				//update the data and delete this record
				
				$flag = 0;
				if (($stmt = $db->prepare("UPDATE users_login SET password = '".$password_hash."' WHERE oauth_uid = ? "))) {
					if ($stmt->bind_param("s",$username)) {
						if ($stmt->execute()) {
								//now delete the entry
							$flu = 0;
							if (($stmt = $db->prepare("DELETE FROM forgot_password WHERE username = ? AND link = ?"))){
								if ($stmt->bind_param("ss",$username,$var)) {
									if ($stmt->execute()) {
											
											echo '<script type="text/javascript">';
											echo 'setTimeout(function () { swal("Link Sent !","Your password has been successfully ","success");';
											echo '}, 100);</script>';
										
											session_unset();
											session_destroy();

											echo "<script>setTimeout(\"location.href = '../login.php';\",2000);</script>";
									}
									else
										$flu = 1;
								}
								else
									$flu = 1;
							}
							else
								$flu = 1;
							
							if($flu == 1)
								$err = $err . "Sorry Something Went Wrong While Processing Your Request. Please Contact Developer About this Issue !";
								//deleted the result
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
			else
				$err = $err . "There is a problem with the user data";
			
		}
		else
			$err = $err . "There is a problem with the link !";
		
		
	}
	if($err != ""){
		echo '<script type="text/javascript">setTimeout(function(){ swal("Error !" ,"'.$err.'", "error");}, 100);</script>';
	}
	
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
<title>CareerStairs | Password Reset </title>

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
			<h1><a href="../index.php"><img src="../images/logo.png" alt="Career Stairs" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive" >
				<li><a href="../search.php">Connect</a></li>
				<li><a href="#">Services</a>
					<ul>
						<li><a href="../mass_recruitment.php">Mass Recruitment</a></li>
						<li><a href="../freelance.php">Freelance</a></li>
						<li><a href="../campus.php">Campus Support</a></li>
					</ul>
				</li>
			</ul>
			<ul class="responsive float-right">
				<li><a href="../browse_jobs.php"><i class="fa fa-external-link-square" aria-hidden="true"></i> Browse Jobs</a></li>
				<li><a href="../login.php"><i class="fa fa-lock"></i> Log In</a></li>
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


<!-- Banner
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(../images/workspace_background-wallpaper-1366x768.jpg)">
	<div class="container">
		<div class="sixteen columns">
			<h2>Reset Password</h2>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<!-- Icon Boxes -->
<div class="container">

	<?php if($status == 1)
	echo '
	
	<div class="sixteen columns">
		<p class="margin-bottom-25" style="float: left;">Please enter new password !
	</div>
	
	<form autocomplete="off" method="post" >
		<div class="seven columns">
			<input class="input-text" required type="password" name="password1" id="password1" maxlength="15" onFocus="navone()" onChange="passwordone()" placeholder="Enter new password" />
			<div class="margin-bottom-15"></div>
		</div>

		<div class="seven columns">
			<input class="input-text" required type="password" name="password2" id="password2" maxlength="15" onChange="passwordtwo()" placeholder="Repeat Password" />
			<div class="margin-bottom-35"></div>
		</div>

		<div class="two columns">
			<button class="button big margin-top-5" type="submit" name="login">Submit <i class="fa fa-arrow-circle-right"></i></button>
		</div>
	</form>
	
	<div class="sixteen columns form-row form-row-wide"  id="rules" style="display: none">
		<label>Password must follow these rules :</label>
		<ul class="list-1">
			<li>Must contain 1 Uppercase</li>
			<li>Must contain 1 Lowercase</li>
			<li>Must contain 1 Numeric value</li>
			<li>Length must be between 8 - 15 characters</li>
		</ul>
	</div>
	
	<div class="sixteen columns">
		<p class="margin-bottom-25" style="float: left;"><a href="../forgot_password.php">Forgot Password ?</a></p>
	</div>
	
	';
	else if($status == 0)
		echo '
		
		<div class="sixteen columns">
			<div class="container" style="font-size: 18px">
				<h2>You\'re link has been <span style="color:red">expired</span> please generate a new link and don\'t forget to activate it in  hours !</h2>
			</div>
			<p class="margin-bottom-25" style="float: left;"><a href="../forgot_password.php">Forgot Password ?</a></p>
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

<script>
	
	function passwordone(){
		var pass = $("#password1").val();
		if(pass.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/)){
		}
		else if(pass.length != 0){
			swal(
			  'Password Seems Incorrect !',
			  'Password must be between 8 to 15 characters and contain at least one lowercase letter,     one uppercase letter, one numeric digit',
			  'warning'
			)
		}
	}
	
	$("#password1").focusout(function() {
    $('#rules').hide();
  })
	
	function passwordtwo(){
		var original = $("#password1").val();
		var varify = $("#password2").val();
		if(original != varify){
			swal(
			  'Password Match Seems Incorrect !',
			  'Password Do not Match !',
			  'warning'
			)
		}
	}
	
	function navone(){
		$('#rules').show();
	}
	
</script>

</body>
</html>