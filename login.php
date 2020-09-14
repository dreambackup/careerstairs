<?php 
session_start();
//error_reporting(0);

//Include database configuration file
include('db/config.php');

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
//if he is already logged in as admin
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['mass'] == true) {
	header("location: dashboard/mass/index.php");
}

//fresh login
 if(isset($_POST["login"]))
 {
	 $err = '';
	  
	 $user = test_input($_POST["username"]);
	 $username = str_replace(" ","",$user);
	 $username = mb_strtolower($username);
	 $pass = test_input($_POST["password"]);
	 $password = str_replace(" ","",$pass);
	 $count = 0;
  
	 $stm = $db->prepare("SELECT oauth_uid FROM users_login WHERE oauth_uid = ? AND oauth_provider = 'normal' ");
	 $stm->bind_param("s",$username);
	 $stm->execute();
	 $stm->store_result();
	 $count = $stm->num_rows;
	 $stm->free_result();
	
	 if($count == 1){
	
	 //now get password into a variable
		$stm = $db->prepare("SELECT password FROM users_login WHERE oauth_uid = ? ");
		$stm->bind_param("s",$username);
		$stm->execute();
		
		$passworddb = $stm->get_result()->fetch_object()->password;
		$stm->free_result();
		
		//get the user type
		$stm = $db->prepare("SELECT type FROM users_login WHERE oauth_uid = ? ");
		$stm->bind_param("s",$username);
		$stm->execute();
		$type = $stm->get_result()->fetch_object()->type;
		$stm->free_result();
		 
		if (password_verify($password, $passworddb)) {
			
			//update the last login
			$flag = 0;
			if (($stmt = $db->prepare("UPDATE users_login SET last_login = '".date("Y-m-d")."' WHERE oauth_uid = ? "))) {
				if ($stmt->bind_param("s",$username)) {
						if ($stmt->execute()) {
							if($type == 'user'){
								//now redirect it to the user section
								$_SESSION['loggedin'] = true;
								$_SESSION['userData'] = $username;
								$_SESSION['user'] = true;
								$_SESSION['type'] = 'normal';
								header("Location: dashboard/user/index.php");
							}
							else if($type == 'recruiter'){
								//now redirect it to the user section
								$_SESSION['loggedin'] = true;
								$_SESSION['userData'] = $username;
								$_SESSION['recruiter'] = true;
								$_SESSION['type'] = 'normal';
								header("Location: dashboard/recruiter/index.php");
							}
							else if($type == 'mass'){
								//now redirect it to the user section
								$_SESSION['loggedin'] = true;
								$_SESSION['userData'] = $username;
								$_SESSION['mass'] = true;
								$_SESSION['type'] = 'normal';
								header("Location: dashboard/mass/index.php");
							}
							else if($type == 'admin'){
								//now redirect it to the user section
								$_SESSION['loggedin'] = true;
								$_SESSION['userData'] = $username;
								$_SESSION['admin'] = true;
								$_SESSION['type'] = 'normal';
								header("Location: dashboard/admin/index.php");
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

			if($flag == 1)
			{
				  $err = "Sorry Something Went Wrong While Processing Your Request. Please Contact Developer About this Issue !";
			}
			
		 }
		 else
			$err = $err . "<strong>Incorrect Credentials !</strong> Please Verify Your Access Credentials .";
	 }
	 else
		 $err = $err . "<strong>Incorrect Credentials !</strong> Please Verify Your Access Credentials .";
	if($err != ''){
		echo '<script type="text/javascript">setTimeout(function(){ swal("Error !" ,"'.$err.'", "error");}, 100);</script>';
    }
		mysqli_close($db);
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
if(isset($_POST['register']))
{
	//getting hashed password
	$options = [
	'cost' => 11,
	];
	$link = password(10);
	$link_hash = password_hash($link, PASSWORD_BCRYPT, $options);
	
	$err = '';
	$name = test_input(ucname($_POST["name"]));
	$email = test_input(mb_strtolower($_POST["email"]));
	$usernames = test_input(mb_strtolower($_POST["usernames"]));
	$gender = test_input($_POST["gender"]);
	$password1 = test_input($_POST["password1"]);
	$password2 = test_input($_POST["password2"]);
	$account_type = test_input($_POST['account_type']);
	
	if($account_type == 1)
		$types = 'user';
	else if($account_type == 2)
		$types = 'recruiter';
	
	$password_hash = password_hash($password1, PASSWORD_BCRYPT, $options);
	
	//name
	if(isset($name) && !empty($name)  && preg_match("/^[a-zA-Z ]*$/",$name) && (strlen($name) >9) && (strlen($name) < 101)){
	}
	else
		$err = $err . "Only Alphabets and white space allowed </br>";
	
	//email
	if(isset($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && (strlen($email) >10) && (strlen($email) < 255) ){
	}
	else
		$err = $err . "Invalid Email address </br>";
	
	//username
	if(isset($usernames) && !empty($usernames)  && preg_match("/^[a-zA-Z0-9]*$/",$usernames) && (strlen($usernames) > 7) && (strlen($usernames) < 21)){
	}
	else
		$err = $err . "Only Alphanumeric Input is allowed </br>";
	
	//gender
	if(isset($gender) && !empty($gender) && ($gender == 'male' || $gender == 'female')){	
	}
	else
		$err = $err . "Only Male and Female options are allowed </br>";
	
	if(isset($password1) && !empty($password1) && (strlen($password1) > 8) && (strlen($password1) < 16) ){
	}
	else
		$err = $err . "There is a problem with password !";
	
	if(isset($password2) && !empty($password2) && ($password1 == $password2)){
	}
	else
		$err = $err . "Password Do not Match !";
	
	//account
	if(isset($account_type) && !empty($account_type) && ($account_type == '1' || $account_type == '2')){
	}
	else
		$err = $err . "Only JobSeeker and Recruiter options are allowed </br>";
	
	if($err == ''){
		
		//now check for email
		$count1 = 0;
		$stm = $db->prepare("SELECT email FROM users_login WHERE email = ? ");
		$stm->bind_param("s",$email);
		$stm->execute();
		$stm->store_result();
		$count1 = $stm->num_rows;
		$stm->free_result();
		
		//now check for username
		$count2 = 0;
		$stm = $db->prepare("SELECT oauth_uid FROM users_login WHERE oauth_uid = ? ");
		$stm->bind_param("s",$usernames);
		$stm->execute();
		$stm->store_result();
		$count2 = $stm->num_rows;
		$stm->free_result();
		
		if($count1 == 0 && $count2 == 0){
			//lets go for create
			$flag = 0;
			if (($stmt = $db->prepare("INSERT INTO temp_account(type,oauth_uid,link,password,name,email,gender) VALUES (?,?,?,?,?,?,?)"))) {
				if ($stmt->bind_param("sssssss",$types,$usernames,$link_hash,$password_hash,$name,$email,$gender)) {
					if ($stmt->execute()) {
						$_SESSION['new_email'] = true;
						$_SESSION['email'] = $email;
						$_SESSION['name'] = $name;
						$_SESSION['ssl'] = $link_hash;
						header("Location: email/new_account.php");
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
		else if($count1 != 0){
			$err = $err . "Email is already registered !";
		}
		else if($count2 != 0){
			$err = $err . "Username is already registered !";
		}
	}
	else if($err != ''){
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
//function to change the lowercase data to capitalize the first letter of every word
function ucname($string) {
    $string =ucwords(strtolower($string));

    foreach (array('-', '\'') as $delimiter) {
      if (strpos($string, $delimiter)!==false) {
        $string =implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
      }
    }
    return $string;
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
<title>Login</title>
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">

<script src="scripts/errors/sweetalert2.min.js"></script>
<link rel="stylesheet" href="scripts/errors/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="scripts/errors/core.js"></script>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
.errspan {
    float: right;
    margin-right: 6px;
    margin-top: -40px;
    position: relative;
    z-index: 3;
	}
</style>
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
			<h1><a href="index.php"><img src="images/logo.png" alt="CareerStairs" /></a></h1>
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
				<li><a href="#"><i class="fa fa-lock"></i> Browse Companies</a></li>
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


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="my-account">

		<ul class="tabs-nav">
			<li class="active"><a href="#tab1">Login</a></li>
			<li><a href="#tab2">Register</a></li>
		</ul>
		
		<div class="tabs-container">
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form method="post" class="login" autocomplete="off">
					<p class="form-row form-row-wide">
						<label for="username">Username:
							<i class="ln ln-icon-Male"></i>
							<input pattern="[A-Za-z0-9]{5,20}" type="text" class="input-text" name="username" id="username" autofocus />
						</label>
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:
							<i class="ln ln-icon-Lock-2"></i>
							<input class="input-text" type="password" name="password" id="password" />
						</label>
					</p>

					<p class="form-row">
						<input type="submit" class="button border fw margin-top-10" name="login" value="Login" />
					</p>

					<p class="lost_password">
						<a href="forgot_password.php">Lost Your Password?</a>
					</p>
							
				</form>
						<br/>
						<div align="center">Or
							<br/>
							<br/>
							<a href="#small-dialog" class="popup-with-zoom-anim"><span class="loginBtn loginBtn--facebook">Login with Facebook</span></a>
							<a href="#google-dialog" class="popup-with-zoom-anim"><span class="loginBtn loginBtn--google">Login with Google</span></a>
						</div>
						
						<!-- code for a pop up when social button clicks -->
						<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
							<div class="small-dialog-content">
								<div align="center">
									<span><strong>How do you want to login ! </strong></span><br/><br/>	
								</div>
								<div align="left" style="display: inline-block">
										<label>JobSeeker</label>
										<a href="online_logins/facebook/index1.php"><i class="fa fa-user fa-5x" style="padding-right: 40px" aria-hidden="true"></i></a>
								</div>
								<div align="right" style="display: inline-block;float: right">
										<label>Recruiter</label>
										<a href="online_logins/facebook/index2.php"><i class="fa fa-users fa-5x" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						
						<div id="google-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
							<div class="google-dialog-content">
								<div align="center">
									<span><strong>How do you want to login ! </strong></span><br/><br/>	
								</div>
								<div align="left" style="display: inline-block">
										<label>JobSeeker</label>
										<a href="online_logins/google/index1.php"><i class="fa fa-user fa-5x" style="padding-right: 40px" aria-hidden="true"></i></a>
								</div>
								<div align="right" style="display: inline-block;float: right">
										<label>Recruiter</label>
										<a href="online_logins/google/index2.php"><i class="fa fa-users fa-5x" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
			</div>
					
			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">

				<form method="post" class="register" autocomplete="off">
				
				<p class="form-row form-row-wide">
					<label for="username2">Name:
						<i class="ln ln-icon-Male"></i>
						<input pattern="[A-Za-z\s]{5,100}" type="text" required class="input-text" style="text-transform: capitalize;" name="name" placeholder="Enter Your full name" title="Please Use only Alphabets with a Max length of 100 characters" />
					</label>
				</p>
				
				
				<div class="form" >
					<label>Username</label>
					<input class="search-field" type="text" placeholder="Enter a Username" pattern="[A-Za-z0-9]{8,20}" title="Enter a username with numbers and alphabets only" required  id="usernames" name="usernames" onBlur="checkusername()" maxlength="20" />
					<div id="usernames-loading" class="errspan" style="display:none">
						<i id="usernames-i"></i>
					</div>
				</div>
					
				<div class="form" style="padding-top: 15px">
					<label>Your Email</label>
					<input class="search-field" type="email" placeholder="mail@example.com" maxlength="255" id="email" required style="text-transform: lowercase;" onBlur="checkemail()" name="email" />

					<div id="email-loading" class="errspan" style="display: none">
						<i id="email-i"></i>
					</div>
				</div>
				
				<p class="form-row form-row-wide" style="padding-top: 15px">
					<label for="account">Gender:
						<select required class="chosen-select" name="gender">
							<option value="">Select Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</label>
				</p>
				
				<p class="form-row form-row-wide">
					<label for="password1">Password:
						<i class="ln ln-icon-Lock-2"></i>
						<input class="input-text" required type="password" name="password1" id="password1" maxlength="15" onFocus="navone()" onChange="passwordone()" />
					</label>
				</p>
				
				<div class="form-row form-row-wide" id="rules" style="display: none">
					<label>Password must follow these rules :</label>
					<ul class="list-1">
						<li>Must contain 1 Uppercase</li>
						<li>Must contain 1 Lowercase</li>
						<li>Must contain 1 Numeric value</li>
						<li>Length must be between 8 - 15 characters</li>
					</ul>
				</div>
				
				<p class="form-row form-row-wide">
					<label for="password2">Repeat Password:
						<i class="ln ln-icon-Lock-2"></i>
						<input class="input-text" required type="password" name="password2" id="password2" maxlength="15" onChange="passwordtwo()" />
					</label>
				</p>
				
				<p class="form-row form-row-wide">
					<label for="account">Account Type:
						<select required style="padding: 14px" name="account_type">
							<option value="">Select Account type</option>
							<option value="1">JobSeeker</option>
							<option value="2">Recruiter</option>
						</select>
					</label>
				</p>

				<p class="form-row">
					<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
				</p>

				</form>
			</div>
		</div>
	</div>
</div>



<!-- Footer
================================================== -->
<div class="margin-top-30"></div>

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
<script>
	function checkemail() {
		var name = $("#email").val();
		if(name.length > 10 )
		{
			$('#email-loading').show();
			$("#email-i").addClass("fa fa-spinner fa-pulse fa-2x fa-fw");

			jQuery.ajax({
				url: "extra/ajaxData.php",
				data:'email='+$("#email").val(),
				type: "POST",
				success:function(data){
					if(data == 1) {
						$("#email-i").removeClass();
						$("#email-i").addClass("fa fa-close fa-2x");
						$("#email-i").css("color", "red");

					}else{
						$("#email-i").removeClass();
						$("#email-i").addClass("fa fa-check fa-2x");
						$("#email-i").css("color", "green");
					}

				},
				error:function (){}
			});
		}
		else{
			$("#email-loading").hide();
			$("#email-i").removeClass();
			$("#email-i").css("color", "");
			if(name.length != 0)
			swal(
			  'Email Seems Incorrect !',
			  'The length of Email Must be more than 10 characters long ',
			  'warning'
			)
		}
}

//<!-- function to check phone duplicasy -->
	
	function checkusername() {
		var name = $("#usernames").val();
		if(name.length > 7 && name.length < 21)
		{
			if(name.match(/^[0-9a-zA-Z]+$/)){
				$('#usernames-loading').show();
				$("#usernames-i").addClass("fa fa-spinner fa-pulse fa-2x fa-fw");

				jQuery.ajax({
					url: "extra/ajaxData.php",
					data:'username='+$("#usernames").val(),
					type: "POST",
					success:function(data){
						if(data == 1) {
							$("#usernames-i").removeClass();
							$("#usernames-i").addClass("fa fa-close fa-2x");
							$("#usernames-i").css("color", "red");

						}else{
							$("#usernames-i").removeClass();
							$("#usernames-i").addClass("fa fa-check fa-2x");
							$("#usernames-i").css("color", "green");
						}

					},
					error:function (){}
				});
			}
			else{
				swal(
				  'Username Seems Incorrect !',
				  'The Username Must contain Alphabets and Numbers Only',
				  'warning'
				)
			}
		}
		else{
			$("#usernames-loading").hide();
			$("#usernames-i").removeClass();
			$("#usernames-i").css("color", "");
			if(name.length != 0)
			swal(
			  'Username Seems Incorrect !',
			  'The length of Username Must between 8 to 20 characters long ',
			  'warning'
			)
		}
	}
	
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