<?php 
session_start();
//Include database configuration file
include('../db/config.php');

$var = test_input($_GET['ver']);

if(isset($var))
{
	$count = 0;
	$stm = $db->prepare("SELECT code FROM subscribe WHERE code = ?");
	$stm->bind_param("s",$var);
	$stm->execute();
	$stm->store_result();
	$count = $stm->num_rows;
	$stm->free_result();
	//if we got the link then we'll check the status of user
	
	if($count == 1)
	{
		$stm = $db->prepare("SELECT status FROM subscribe WHERE code = ? ");
		$stm->bind_param("s",$var);
		$stm->execute();
		
		$one = $stm->get_result()->fetch_object()->status;
		$stm->free_result();
		
		//if($one == 0)
		//means he has come for the first time
		
		//else if($one > 0)
		//already done it just say the messege
	
	}
	else{
		header("Location: ../index.php");
	}
}
else{
	header("Location: ../index.php");
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
<title>Goodbye!</title>

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
				<?php
				if(isset($_SESSION['userData']) && !empty($_SESSION['userData'])){
				echo '<li><a href="../login.php"><i class="fa fa-chevron-right"></i> Dashboard</a></li>';
				}
				else
					echo '<li><a href="../login.php"><i class="fa fa-lock"></i> Log In</a></li>';
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


<!-- Banner
================================================== -->
<div id="banner" style="opacity:.5;background-image:url(https://elasticemail.com/wp-content/uploads/2016/12/xUntitled-design-2-1-1200x194.jpg.pagespeed.ic.-v89vClzxc.webp); background-position:center top;background-repeat:no-repeat;background-size:cover;left:0;top:0;" class="parallax background" data-img-width="2000" data-img-height="1330" data-diff="400">
	<div class="container">
		<div class="sixteen columns">
			<div class="search-container">
				<h2 align="center">Good Bye !</h2>
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
			<h1 style="font-size: 30px"><strong>Good Bye!</strong></h1><br/>
			<?php 
				if($one == 0)
				{
					echo '<div id="rea">
					<form>
						<p><h1>We\'re sorry to see you go !</h1><br/>
			You will be unsubscribed from our mailing list but before you go we would like to do a quick survey that will help us to serve people more</p>
			<p>Please select the reason <br/><br/>
			<select id="reason" class="chosen-select" name="reason" required>
				<option value = "">Please select a appropriate reason</option>
				<option value = "1">Content was irrelevant</option>
				<option value = "2">Mails were received too frequently</option>
				<option value = "3">Didn’t recall signing up</option>
				<option value = "4">Privacy concerns </option>
			</select>
	
			</form>
			</div>
			';
					echo '<div id="done" style="display: none"><p><h1>We\'re sorry to see you go !</h1><br/>
			You have unsubscribed from our mailing list and won\'t receive any email from now !</p></div>';
					
					echo '<div id="pro" style="display: none"><p><h1>We\'re sorry to see you go !</h1><br/>
			There is some problem while processing your request , you can try  it later when we come with an fix for this issue !</p></div>';
				}
				else{
					echo '<div id="all"><p><h1>We\'re sorry to see you go !</h1><br/>
			You have already unsubscribed from our mailing list and won\'t receive any email from now !</p></div>';
				}
			?>
			
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

</div>s

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

<script>

	$('#reason').on('change',function(){
        var ssr = $(this).val();
		var vas = '<?php echo $var ?>';
        if(ssr){
            $.ajax({
                type:'POST',
                url:'subscribe_ajax.php',
                data:{reasonal: ssr, id: vas},
                success: function(data){
					var dataParsed = $.parseJSON(data);
              		console.log(dataParsed);
					if(dataParsed == 'Data')
					{
						$('#rea').hide();
						$('#done').show();
					}
					else if(dataParsed == 'problem')
					{
						$('#rea').hide();
						$('#pro').show();
					}
                }
            }); 
        }
    });
	
</script>

</body>
</html>