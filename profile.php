<?php
include('db/config.php');
session_start();
$userid = test_input($_GET['user']);

if (isset($userid) && !empty($userid)) {
	
	//get user or recruiter
	$stmm = $db->prepare("SELECT type FROM users_login WHERE oauth_uid = ? ");
	$stmm->bind_param("s",$userid);
	$stmm->execute();
	$type = $stmm->get_result()->fetch_object()->type;
	$stmm->free_result();
	
	if($type == 'user'){
		//fetch user info according to user
		
		$stm = $db->prepare("SELECT * FROM users_login WHERE oauth_uid = ?");
		$stm->bind_param("s",$userid);
		$stm->execute();
		$ress = $stm->get_result();
		$roww = $ress->fetch_assoc();
		$stm->free_result();
		
		$stm = $db->prepare("SELECT * FROM users_profile WHERE username = ?");
		$stm->bind_param("s",$userid);
		$stm->execute();
		$ress = $stm->get_result();
		$rowws = $ress->fetch_assoc();
		$stm->free_result();

		$url = $rowws['video'];
		preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $videoid);
		
	}
	else if($type == 'recruiter'){
		//fetch recruiter infor according to recruiter
		$stm = $db->prepare("SELECT * FROM users_login WHERE oauth_uid = ?");
		$stm->bind_param("s",$userid);
		$stm->execute();
		$ress = $stm->get_result();
		$roww = $ress->fetch_assoc();
		$stm->free_result();
		
		$stm = $db->prepare("SELECT * FROM recruiter_profile WHERE username = ?");
		$stm->bind_param("s",$userid);
		$stm->execute();
		$ress = $stm->get_result();
		$rowws = $ress->fetch_assoc();
		$stm->free_result();
		
		//fetch jobs
	}
	else{
		header('Location: index.php');
	}

$today = date("Y-m-d");
}
else{
	header('Location: search.php');
}
function dateformat($new) {
	if($new == 'Present')
		return $new;
	else{
	$month_array = ["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
    $month = substr($new, -2);
	$year = substr($new,0,4);
	if($month[0] == '0')
		$month = substr($month,-1);
		$convert_month = $month_array[$month];
	$final = $convert_month . " " . $year;
	return $final;
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
<title>CareerStairs | Profile</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css">
<link rel="stylesheet" href="css/custom.css">

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
				if(isset($_SESSION['userData']) && !empty($_SESSION['userData'])){
				echo '<li><a href="login.php"><i class="fa fa-chevron-right"></i> Dashboard</a></li>';
				}
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

<?php
	
	//user section starts
	if($type == 'user'){
		echo '
		<div id="titlebar" class="resume">
	<div class="container">
		<div class="twelve columns">
			<div class="resume-titlebar">';
		if($roww['oauth_provider'] != 'normal'){
			echo '<img src="'.$roww['picture'].'" alt="'.$roww['name'].'" /> ';
		} 
		else{
			echo '<img src="dashboard/user_pictures/'.$roww['picture'].'" alt="'.$roww['name'].'" /> ';
		}
		echo '<div class="resumes-list-content">
				<h4>'.$roww['name'].'<span>'.$rowws['title'].'</span></h4>';
		if($rowws['city'] != NULL && $rowws['state'] != NULL)
				echo '<span class="icons"><i class="fa fa-map-marker"></i> '.$rowws['city']. ', '.$rowws['state'].'</span>';
		if($roww['phone'] != NULL) echo '<span class="icons"><i class="fa fa-phone"></i> '.str_repeat("x", (strlen($roww['phone']) - 4)).substr($roww['phone'],-4,4).' </span>';
		echo '<span class="icons"><a href="#"><i class="fa fa-envelope"></i>'.$roww['email'].'</a></span>
		<div class="skills">';
		//getting skills as json then decode it in array
		$skills = json_decode($rowws['skills']);
		for($i=0;$i<count($skills);$i++)
			echo '<span>'.$skills[$i].'</span>';
		
		echo '</div>
					<div class="clearfix"></div>

				</div>
			</div>
		</div>
		
		<div class="four columns">
			<div class="two-buttons" align="right">
				<a href="#small-dialog" class="popup-with-zoom-anim"><i class="fa fa-ellipsis-v fa-3x" aria-hidden="true"></i></a>
			
				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-content">
						<!-- doc start -->
						<div id="wrapper">
							<div class="overlay"></div>
							<!-- Sidebar -->
							<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
								<ul class="nav sidebar-nav">
									<div id="threedot" align="center">
									<button'; if(!empty($videoid[0])) echo 'onClick="video()"'; echo ' >Video Resume</button>
									</div>';
		if(!empty($videoid[0])) 
							   echo '<div class="video-container" style="display: none">
										<iframe src="https://www.youtube.com/embed/'.$videoid[0].'?rel=0&showinfo=0&color=white" frameborder="0" allowfullscreen ></iframe>
									</div>';
				
		echo '</ul>
							</nav>
							<!-- /#sidebar-wrapper -->
						</div>
						<!-- /#wrapper -->
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>
		
	<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eight columns">';
		if($rowws['objective'] == NULL && $rowws['acheivements'] == NULL && $rowws['projects'] == NULL && $rowws['work'] == NULL && $rowws['education'] == NULL)
		echo '
		<h1>The user has not filled details !</h1>
		';
		echo '<div class="padding-right">';
		if($rowws['objective'] != NULL){
			echo ' <h3 class="margin-bottom-15" >Objective</h3>
			<p class="margin-reset" align="justify">
			 '.$rowws['objective'].'
		</p>';}
		echo '<br>';
			if($rowws['acheivements'] != NULL){
			echo '<p><strong>Acheivements</strong>:</p>
				  <ul class="list-1" style="text-align: justify">';
				  //getting acheivements as json then decode it in array
					$acheivements = json_decode($rowws['acheivements']);

					for($i=0;$i<count($acheivements);$i++)
					{
						echo '<li>'.$acheivements[$i].'</li>';
					}
			echo '</ul>';
			}
			
	echo '</div>
	</div>';
		
		if($rowws['projects'] != NULL || $rowws['work'] != NULL || $rowws['education'] != NULL)
		echo '<h3 class="margin-bottom-20">Slills & Abilities</h3>
	
	<div class="eight columns">
		
		<!-- Resume Table -->
		<!--projects-->
		<div class="form with-line">';
			 if($rowws['projects'] != NULL){
			echo '
				<div class="form-inside">
				<div class="panel panel-success" data-toggle="collapse">
					<div class="panel-heading">
						<h3 class="panel-title">Total '.count(json_decode($rowws['projects'])).' projects</h3>
						<span class="pull-right clickable"><i class="fa fa-minus-square"></i></span>
					</div>
					<div class="panel-body">';
						
						 $projects = json_decode($rowws['projects']);
							for($i=0;$i<count($projects);$i++)
							{
								echo '<h5>'.$projects[$i][0].'</h5>
									  <div>'.dateformat($projects[$i][2]).' - '.dateformat($projects[$i][3]).'</div>
									  <div><a href = "'.$projects[$i][1].'" target = "_blank">'.$projects[$i][1].'</a></div>
									  <div class="description">'.$projects[$i][4].'</div><br/>';
							}
							
				echo'</div>
				</div>
			</div>
			</div>
			';}
		if($rowws['work'] != NULL){
			echo '
				<div class="form-inside">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Total '.count(json_decode($rowws['work'])).' Work Experiences</h3>
						<span class="pull-right clickable"><i class="fa fa-minus-square"></i></span>
					</div>
					<div class="panel-body">';
					
						 $work = json_decode($rowws['work']);
							for($i=0;$i<count($work);$i++)
							{
								echo '<h5>'.$work[$i][0].'</h5>
									  <div>'.$work[$i][1].'('.$work[$i][2].')</div>
									  <div>'.dateformat($work[$i][3]).' - '.dateformat($work[$i][4]).'</div>
									  <div class="description">'.$work[$i][5].'</div><br/>';
							}

					echo '</div>
				</div>
			</div>
			';}
		if($rowws['work'] != NULL){
			echo '
			<div class="form-inside">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Education</h3>
						<span class="pull-right clickable"><i class="fa fa-minus-square"></i></span>
					</div>
					<div class="panel-body">';
						
						 $education = json_decode($rowws['education']);
							for($i=0;$i<count($education);$i++)
							{
								echo '<h5>'.$education[$i][0].'</h5>
									  <div>'.$education[$i][1].','.$education[$i][2].', '.$education[$i][3].'</div>
									  <div>'.$education[$i][4].' - '.$education[$i][5].'</div></br>';
							}
						
				echo '</div>
				</div>
			</div>
			
			';}
		echo '</div></div>';
	}
	//recruiter section start
	else if($type == 'recruiter'){
		echo '
		<div id="titlebar" class="resume">
	<div class="container">
		<div class="twelve columns">
			<div class="resume-titlebar">';
		if($roww['oauth_provider'] != 'normal'){
			echo '<img src="'.$roww['picture'].'" alt="'.$roww['name'].'" /> ';
		} 
		else{
			echo '<img src="dashboard/user_pictures/'.$roww['picture'].'" alt="'.$roww['name'].'" /> ';
		}
		echo '<div class="resumes-list-content">
				<h4>'.$roww['name'].'<span>'.$rowws['type_name'].'</span></h4>';
		if($rowws['city'] != NULL && $rowws['state'] != NULL)
				echo '<span class="icons"><i class="fa fa-map-marker"></i> '.$rowws['city']. ', '.$rowws['state'].'</span>';
		if($roww['phone'] != NULL) echo '<span class="icons"><i class="fa fa-phone"></i> '.str_repeat("x", (strlen($roww['phone']) - 4)).substr($roww['phone'],-4,4).' </span>';
		echo '<span class="icons"><a href="#"><i class="fa fa-envelope"></i>'.$roww['email'].'</a></span>
		
					<div class="clearfix"></div>


				</div>
			</div>
		</div>
		</div>
		</div>
		<div class="container">
	
	<!-- Recent Jobs -->
	<div class="sixteen columns">';
	
		if($rowws['about'] == NULL)
		echo '
		<h1>Recruiter does not filled any details !</h1>
		
		';
		else
			echo '<p align="justify">'.$rowws['about'].'</p>';
	
	echo '</div>

	<div align="center" style="padding-bottom: 10px"><h2>Posted Jobs</h2></div>
	<table class="manage-table resumes responsive-table">
			<tr>
				<th><i class="fa fa-file-text"></i>Job Title</th>
				<th><i class="fa fa-houzz"></i>Company</th>
				<th><i class="fa fa-calendar"></i>Date Posted</th>
				<th><i class="fa fa-calendar"></i>Date Expires</th>
				<th><i class="fa fa-user"></i>Applications</th>
				<th><i class="fa fa-forumbee "></i> Status</th>
			</tr>
	
	';
		
		$stm = $db->prepare("SELECT * FROM jobs WHERE rec_username = ? ORDER BY created DESC");
		$stm->bind_param("s",$userid);
		$stm->execute();
		$ress = $stm->get_result();
			while($rim = $ress->fetch_assoc())
			{
				echo '
					<tr>
						<td class="title"><a href="job-overview.php?id='.$rim['id'].'" target="_blank">'.$rim['job_title'].'</a></td>
						<td><span class="pending">'.$rim['company_name'].'</span></td>
						<td>'.$rim['created'].'</td>
						<td>'.$rim['expiration'].'</td>
						<td class="centered"><a class="button">'.count(json_decode($rim['applied_id'])).'</a></td>';
					
					if($rim['admin_verified'] == '0' && $rim['email_verified'] == '0')
						echo '<td class="centered">Not Verified</td>';
					else if($rim['admin_verified'] == '0' && $rim['email_verified'] == '1')
						echo '<td class="centered">Not Visible</td>';
					else if($rim['admin_verified'] == '1' && $rim['email_verified'] == '1' && $today <= $rim['expiration'])
						echo '<td class="centered">Visible</td>';
					else if($rim['admin_verified'] == '1' && $rim['email_verified'] == '1' && $today > $rim['expiration'])
						echo '<td class="centered">Expired</td>';
			echo '</tr>
				
				';
			}
		
	
	
	
echo '</table></div>
		
		
		';
	}
	
?>
	

<!-- Footer
================================================== -->
<div class="margin-top-45"></div>

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


<script>
$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.closest('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('fa fa-minus-square').addClass('fa fa-plus-square ');
	} else {
		$this.closest('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('fa fa-plus-square').addClass('fa fa-minus-square');
	}
})
function video(){
	$('#threedot').hide();
	$('.video-container').show();
}
</script>

</body>

</html>
