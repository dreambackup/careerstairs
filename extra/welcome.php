<?php 
session_start();
error_reporting(0);
if(isset($_SESSION['new_email']) && $_SESSION['new_email'] == true)
{
}
else{
	header("Location: ../index.php");
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
<title>Thank you !</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/green.css" id="colors">

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
			<ul class="float-right">
				<li><a href="my-account.html#tab2"><i class="fa fa-external-link-square" aria-hidden="true"></i> Post a Job</a></li>
				<li><a href="my-account.html"><i class="fa fa-lock"></i> Log In</a></li>
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
				<h2 align="center">Thank you !</h2>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Icon Boxes -->
<div class="section-background top-0">
	<div class="container" style="font-size: 18px">
			<p>We would like to say</p>
			<h1 style="font-size: 30px"><strong>Thank You!</strong></h1><br/>
			
			<p>For joining our list of amazing people!<br/>
			We would love to show you your account but first, we need to do one last step.</p>
			<p>We have just sent you an email.<br>
			Please, make sure you open it and verify your email address.</p>
			
			<p>&nbsp;</p>
			<p>Have a minute? Help us share the love!<br>
			Follow us on <a href="https://linkedin.com/#">LinkedIn</a> or like us on <a href="https://www.facebook.com/#/">Facebook</a>&nbsp;and stay in the loop with all our latest news and tips.</p>
			<p>&nbsp;</p>
	</div>
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


</body>

</html>