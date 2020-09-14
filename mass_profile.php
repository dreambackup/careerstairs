<?php
include('db/config.php');
session_start();
$id = test_input($_GET['id']);

if (isset($id)) {
	//echo $_SESSION['userData'];
	$stmt = $db->prepare("SELECT name, email, phone, picture,oauth_provider FROM users_login WHERE oauth_uid = ?");
	$stmt->bind_param("s",$id);
	$stmt->execute();
	$res = $stmt->get_result();
	$row = $res->fetch_assoc();
	$stmt->free_result();
	
	$stmt = $db->prepare("SELECT * FROM mass_profile WHERE username = ?");
	$stmt->bind_param("s",$id);
	$stmt->execute();
	$res = $stmt->get_result();
	$roww = $res->fetch_assoc();
	$stmt->free_result();

	$today = date("Y-m-d");
}
else{
	header('Location: login.php');
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function dateformat($new) {
	
	$date = substr($new,-2);
	$new = substr($new,0,-3);
	
	$month_array = ["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
    $month = substr($new, -2);
	$year = substr($new,0,4);
	if($month[0] == '0')
		$month = substr($month,-1);
		$convert_month = $month_array[$month];
	$final = $date. " ". $convert_month . " " . $year;
	return $final;
}
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
<!-- Favicon Icon Css
================================================== -->
<link rel="apple-touch-icon" sizes="180x180" href=" favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href=" favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href=" favicons/favicon-16x16.png">
<link rel="manifest" href=" favicons/manifest.json">
<link rel="mask-icon" href=" favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title><?php echo $roww['company_name'] ?> | Profile</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/custom.css">
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
			<h1><a href="index.php"><img src="images/logo.png" alt="CareerStairs Logo" /></a></h1>
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
<div id="titlebar" class="photo-bg" style="background: url(images/1920-720-876.jpg)">
	<div class="container">
		<div class="sixteen columns">
			<div class="resume-titlebar">
				<?php 
				if($row['oauth_provider'] != 'normal'){
					echo '<img src="'.$row['picture'].'" alt="'.$row['name'].'" /> ';
				} 
				else{
					echo '<img src="dashboard/company_pictures/'.$row['picture'].'" alt="'.$row['name'].'" /> ';
				}
				?>
				<div class="resumes-list-content">
					<h4><?php echo $roww['company_name'] ?><span><?php echo $roww['company_type'] ?></span></h4>
					<?php if($roww['company_location'] != NULL){ 
						echo '<span class="icons"><i class="fa fa-map-marker"></i> '.$roww['company_location']. '</span>';} 
					?>
					<?php if($row['phone'] != NULL) echo '<span class="icons"><i class="fa fa-phone"></i> '.str_repeat("x", (strlen($row['phone']) - 4)).substr($row['phone'],-4,4).' </span>'; ?>
					
					<span class="icons"><a href="#"><i class="fa fa-envelope"></i> <?php echo $row['email'] ?></a></span>
					<div class="clearfix"></div>

				</div>
				<span class="icons"><a href="#"><i class="fa fa-circle-o"></i> <?php echo $roww['company_about'] ?></a></span>
			</div>
			
		</div>
		
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="sixteen columns">
	
		<?php 
				echo '<div id="chartContainer" style="height: 370px; width: 100%;"></div>';
				echo '<hr><br/>';
						
			echo '<p class="margin-top-50">The Job Profile listings are shown in the table below. <strong>Please make sure to apply for a appropriate job profile !</strong></p>
			
			<table class="manage-table resumes responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i>Job Profile</th>
					<th><i class="fa fa-calendar"></i>Date</th>
					<th><i class="fa fa-calendar"></i>Location</th>
					<th><i class="fa fa-user"></i>Applications</th>
					<th><i class="fa fa-forumbee "></i> Status</th>
					<th><i class="fa fa-check-square-o"></i>Action_?</th>
				</tr>';
				
			$stm = $db->prepare("SELECT * FROM mass_jobs WHERE mass_username = ? AND happen_date IS NOT NULL AND location IS NOT NULL ORDER BY created DESC");
			$stm->bind_param("s",$id);
			$stm->execute();
			$ress = $stm->get_result();
			while($rim = $ress->fetch_assoc())
			{
				echo '
				<tr>
				
					<td class="title button"><a href="mass_job_overview.php?id='.$rim['id'].'" target="_blank">'.$rim['job_title'].' <span class="pending"></span></a></td>';
				
					if($rim['happen_date'] == NULL)
						echo '<td>-</td>';
					else
						echo '<td>'.dateformat($rim['happen_date']).'</td>';
				
					if($rim['location'] == NULL)
						echo '<td>-</td>';
					else
						echo '<td>'.$rim['location'].'</td>';
					echo '<td><a target="_blank" class="button">'.count(json_decode($rim['users'])).'</a></td>';
					
					if($rim['location'] == NULL && $rim['happen_date'] == NULL)
						echo '<td>Not Visible</td>';
					else if($rim['location'] != NULL && $rim['happen_date'] != NULL && $today <= $rim['happen_date']){
						echo '<td>Visible</td>
						<td><a href="mass_job_overview.php?id='.$rim['id'].'" target="_blank" class="button">Apply</a></td>
						';
					}
					else if($rim['location'] != NULL && $rim['happen_date'] != NULL && $today > $rim['happen_date']){
						echo '<td>Expired</td>
						<td><a class="button" style="background-color: grey;pointer-events: none;cursor: default;">Expired</a></td>
						';
					}
					
				echo '</tr>';
			}
				
			echo '</table>
			
			';
	?>
	
	</div>
	<!-- Widgets -->
	
</div>


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

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	exportFileName: "Doughnut Chart",
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "Pie View Of All Profiles"
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "doughnut",
		innerRadius: 90,
		showInLegend: true,
		toolTipContent: "<b>{name}</b>: {y} (#percent%)",
		indexLabel: "{name} - #percent% ({total} Candidates)",
		dataPoints: [
			<?php
				$stm = $db->prepare("SELECT job_title,users FROM mass_jobs WHERE mass_username = ? AND happen_date IS NOT NULL AND location IS NOT NULL ORDER BY created ASC");
				$stm->bind_param("s",$id);
				$stm->execute();
				$ress = $stm->get_result();
				while($rim = $ress->fetch_assoc())
				{
					echo '{ y: '.count(json_decode($rim['users'])).', name: "'.$rim['job_title'].'", total: '.count(json_decode($rim['users'])).' },';
				}
			?>
		]
	}]
});
chart.render();
	
function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();
}

}
</script>
</body>

</html>