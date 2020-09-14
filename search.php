<?php
include('db/config.php');
session_start();

if(isset($_POST['search']))
{
	$err = "";
	$query = "";
	$name = test_input($_POST["name"]);
	$username = test_input($_POST["username"]);
	
	if(isset($name) && !empty($name)){
		$query = "SELECT * FROM users_login WHERE name LIKE '%".$name."%'";
	}
	if(isset($username) && !empty($username)){
		$query = "SELECT * FROM users_login WHERE oauth_uid = '".$username."'";
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
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/manifest.json">
<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>CareerStairs | Search</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" >
<link rel="stylesheet" href="css/search.css" type="text/css">
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
				<li><a href="search.php" id="current">Connect</a></li>
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
<div id="titlebar" class="photo-bg" style="background: url(images/testimonials-bg.jpg)">
	<div class="container">

		<div class="sixteen columns">
			<h2>Search Users</h2>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Table -->
	<div class="sixteen columns">

		<p class="margin-bottom-25" style="float: left;">Search Users by Name or Username !

	</div>
	
	<form autocomplete="off" method="post">
		<div class="eight columns">
			<input class="search-field typeahead" type="text" placeholder="Enter Name" id="name" name="name" maxlength="100" >
			<div class="margin-bottom-15"></div>
		</div>

		<div class="seven columns">
			<input class="search-field" type="text" placeholder="Enter Username" name="username" maxlength="20">
			<div class="margin-bottom-35"></div>
		</div>

		<div class="one columns">
			<button type="submit" name="search"><i class="fa fa-search fa-2x"></i></button>
			<div class="margin-bottom-35"></div>
		</div>
	</form>


	<!-- Applications -->
	<div class="sixteen columns">
		
		<?php
		
		if(isset($query) && $query !=""){
			
			$count = 0;
			
			$stm = $db->prepare($query);
			$stm->execute();
			$ress = $stm->get_result();
			while($rim = $ress->fetch_assoc())
			{
				//get data of user
				if($rim['type'] == 'user'){
				
					//now get the skills and title according to oauth_uid
					$stm = $db->prepare("SELECT title,skills,city,state FROM users_profile WHERE username = ?");
					$stm->bind_param("s",$rim['oauth_uid']);
					$stm->execute();
					$stm->bind_result($col1,$col2,$col3,$col4);
					
					while($stm->fetch())
						$title = $col1;
						$skill = $col2;
						$city = $col3;
						$state = $col4;
					
					$stm->free_result();
					
					$skills = json_decode($skill);

					if($rim['oauth_provider'] != 'normal')
						$picture = $rim['picture'];
					else
						$picture = "dashboard/user_pictures/".$rim['picture'];
					//will use counter to show details
					
					
					echo '
				<div class="application">
			<div class="app-content">
				<!-- Name / Avatar -->
				<div class="info">
					<img src="'.$picture.'" alt="'.$rim['name'].'">
					<span id="name'.$rim['oauth_uid'].'">'.$rim['name'].'</span><span  style="font-size: 15px;color:gray;padding-left: 10px">(JobSeeker)</span>
					<ul>';
						if($city != NULL && $state != NULL){
						echo '<li><a href="#"><i class="fa fa-map-marker"></i>'.$city.', '.$state.'</a></li>';
						}
						echo '<li><a href="mailto:'.$rim['email'].'"><i class="fa fa-envelope"></i> Mail</a></li>';
						if($rim['phone'] != NULL){
						echo '<li><a ><i class="fa fa-phone"></i>'.str_repeat("x", (strlen($rim['phone']) - 4)).substr($rim['phone'],-4,4).'</a></li>';
						}
			echo	'</ul>
				</div>
				
				<!-- Buttons -->
				<div class="buttons">
					<a href="profile.php?user='.$rim['oauth_uid'].'" class="button " target="_blank"><i class="fa fa-yelp" aria-hidden="true"></i> View Profile</a>
					<a href="#view-'.$count.'" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
				</div>
				<div class="clearfix"></div>

			</div>

			<!--  Hidden Tabs -->
			<div class="app-tabs">
				<a href="#" class="close-tab button gray"><i class="fa fa-close"></i></a>
			    <!-- Third Tab -->
			    <div class="app-tab-content" id="view-'.$count.'">';
					if($title != NULL){
					echo '<i>Professional Title:</i>
					<span>'.$title.'</span>';
					}
					echo '<i>Email:</i>
					<span>'.$rim['email'].'</span>';
					if($skills != NULL){
		    		echo '<i>Skills:</i>
		    		<div class="skills">';
						for($i=0;$i<count($skills);$i++)
						{
							echo '<span>'.$skills[$i].'</span>';
						}
						echo '</div>';
					}
				echo '
		    		<br/>
			    </div>
			</div>
		</div>
				';
					
					$count++;
				}
				//get data of recruiter
				else if($rim['type'] == 'recruiter'){
					
					
					//now get the skills and title according to oauth_uid
					$stm = $db->prepare("SELECT type,type_name,state,city,about FROM recruiter_profile WHERE username = ?");
					$stm->bind_param("s",$rim['oauth_uid']);
					$stm->execute();
					$stm->bind_result($col1,$col2,$col3,$col4,$col5);
					
					while($stm->fetch())
						$type = $col1;
						$type_name = $col2;
						$state = $col3;
						$city = $col4;
						$about = $col5;
					
					$stm->free_result();
					

					if($rim['oauth_provider'] != 'normal')
						$picture = $rim['picture'];
					else
						$picture = "dashboard/user_pictures/".$rim['picture'];
					//will use counter to show details
					
					
					echo '
				<div class="application">
			<div class="app-content">
				<!-- Name / Avatar -->
				<div class="info">
					<img src="'.$picture.'" alt="'.$rim['name'].'">
					<span id="name'.$rim['oauth_uid'].'">'.$rim['name'].'</span><span  style="font-size: 15px;color:gray;padding-left: 10px">(Recruiter)</span>
					<ul>';
						if($city != NULL && $state != NULL)
						{
							echo '<li><a href="#"><i class="fa fa-map-marker"></i>'.$city.', '.$state.'</a></li>';
						}
					echo	'<li><a href="mailto:'.$rim['email'].'"><i class="fa fa-envelope"></i> Mail</a></li>';
						if($rim['phone'] != NULL){
						echo '<li><a href="tel:'.$rim['phone'].'"><i class="fa fa-phone"></i>'.str_repeat("x", (strlen($rim['phone']) - 4)).substr($rim['phone'],-4,4).'</a></li>';
						}
					echo '</ul>
				</div>
				
				<!-- Buttons -->
				<div class="buttons">
					<a href="profile.php?user='.$rim['oauth_uid'].'" class="button " target="_blank"><i class="fa fa-yelp" aria-hidden="true"></i> View Profile</a>
					<a href="#view-'.$count.'" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
				</div>
				<div class="clearfix"></div>

			</div>

			<!--  Hidden Tabs -->
			<div class="app-tabs">
				<a href="#" class="close-tab button gray"><i class="fa fa-close"></i></a>
			    <!-- Third Tab -->
			    <div class="app-tab-content" id="view-'.$count.'">';
					if($type_name != NULL){
					echo '<i>Company :</i>
					<span>'.$type_name.'</span>';
					}
				echo '<i>Email:</i>
					<span>'.$rim['email'].'</span>';
					if($about != NULL){
		    	echo '<i>About :</i>
		    		<span>'.$about.'</span>';
					}
		    	echo '<br/>
			    </div>
			</div>
		</div>
				';
					
					
					$count++;
				}
			}
		}
		else
			echo '<h2>Start Typing Name or just enter username !</h2>';
		
		?>
		

	</div>
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

<!--typeahead-->
<script src="scripts/typeahead.js"></script>

<script>
    $(document).ready(function () {
        $('#name').typeahead({
			limit: 10,
            source: function (query, result) {
                $.ajax({
                    url: "extra/ajaxData.php",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
</script>

</body>

</html>