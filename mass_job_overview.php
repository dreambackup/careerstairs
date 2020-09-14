<?php
include('db/config.php');
session_start();
//error_reporting(0);
$id = test_input($_GET['id']);

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && isset($id)) {
	
	//if he is logged in then fetch jobs
	$stm = $db->prepare("SELECT type FROM users_login WHERE oauth_uid = ? ");
	$stm->bind_param("s",$_SESSION['userData']);
	$stm->execute();
	$account = $stm->get_result()->fetch_object()->type;
	$stm->free_result();
	
	//fetch user id from users_login
	$stm = $db->prepare("SELECT id FROM users_login WHERE oauth_uid = ? ");
	$stm->bind_param("s",$_SESSION['userData']);
	$stm->execute();
	$userid = $stm->get_result()->fetch_object()->id;
	$stm->free_result();
	
	if($account == 'user'){
		//get the user type
		$stm = $db->prepare("SELECT users FROM mass_jobs WHERE id = ? ");
		$stm->bind_param("s",$id);
		$stm->execute();
		$jobss = $stm->get_result()->fetch_object()->users;
		$stm->free_result();
		$jobs1 = json_decode($jobss);
	}
	
	//lets fetch detail about the expiration of the job
	$exp = 0;
	$stm = $db->prepare("SELECT id FROM mass_jobs WHERE id = ? AND CURRENT_DATE <= happen_date AND location IS NOT NULL ");
	$stm->bind_param("s",$id);
	$stm->execute();
	$stm->store_result();
	$exp = $stm->num_rows;
	$stm->free_result();
	
	//now fetch the job details
	$count = 0;
	$stm = $db->prepare("SELECT id FROM mass_jobs WHERE id = ? AND location IS NOT NULL AND happen_date IS NOT NULL  ");
	$stm->bind_param("s",$id);
	$stm->execute();
	$stm->store_result();
	$count = $stm->num_rows;
	$stm->free_result();
	//if we got the link then we'll check the time of 3hr for user
	
	if($count == 1){
		
		$stm = $db->prepare("SELECT mass_username FROM mass_jobs WHERE id = ? ");
		$stm->bind_param("s",$id);
		$stm->execute();
		$rec_id = $stm->get_result()->fetch_object()->mass_username;
		$stm->free_result();
		
		//fetch job details
		$stm = $db->prepare("SELECT * FROM mass_jobs WHERE id = ?");
		$stm->bind_param("s",$id);
		$stm->execute();
		$res = $stm->get_result();
		$rowwed = $res->fetch_assoc();
		$stm->free_result();
		
		//fetch company details
		$stm = $db->prepare("SELECT mass_profile.company_name, mass_profile.company_website, mass_profile.company_about, mass_profile.company_type, users_login.picture FROM mass_profile INNER JOIN users_login ON users_login.oauth_uid = mass_profile.username WHERE mass_profile.username = ?");
		$stm->bind_param("s",$rec_id);
		$stm->execute();
		$res = $stm->get_result();
		$rowws = $res->fetch_assoc();
		$stm->free_result();
		
	}
	else{
		header("Location: index.php");
	}
}
else if(isset($id)){
	//he is not logged in then show him the message
	
	//lets fetch detail about the expiration of the job
	$exp = 0;
	$stm = $db->prepare("SELECT id FROM mass_jobs WHERE id = ? AND CURRENT_DATE <= happen_date AND location IS NOT NULL ");
	$stm->bind_param("s",$id);
	$stm->execute();
	$stm->store_result();
	$exp = $stm->num_rows;
	$stm->free_result();
	
	//now fetch the job details
	$count = 0;
	$stm = $db->prepare("SELECT id FROM mass_jobs WHERE id = ? AND location IS NOT NULL AND happen_date IS NOT NULL ");
	$stm->bind_param("s",$id);
	$stm->execute();
	$stm->store_result();
	$count = $stm->num_rows;
	$stm->free_result();
	
	//get username
	$stm = $db->prepare("SELECT mass_username FROM mass_jobs WHERE id = ? ");
	$stm->bind_param("s",$id);
	$stm->execute();
	$rec_id = $stm->get_result()->fetch_object()->mass_username;
	$stm->free_result();
	
	//if count is 1 then get the job details
	if($count == 1){
		//fetch job details
		$stm = $db->prepare("SELECT * FROM mass_jobs WHERE id = ?");
		$stm->bind_param("s",$id);
		$stm->execute();
		$res = $stm->get_result();
		$rowwed = $res->fetch_assoc();
		$stm->free_result();
		
		//fetch company details
		$stm = $db->prepare("SELECT mass_profile.company_name, mass_profile.company_website, mass_profile.company_about, mass_profile.company_type, users_login.picture FROM mass_profile INNER JOIN users_login ON users_login.oauth_uid = mass_profile.username WHERE mass_profile.username = ?");
		$stm->bind_param("s",$rec_id);
		$stm->execute();
		$res = $stm->get_result();
		$rowws = $res->fetch_assoc();
		$stm->free_result();
	}
	else{
		header("Location: index.php");
	}
	
}	
else{
	header('Location: browse_jobs.php');
}
if(isset($_POST['apply']))
{
	//lets fetch detail about the expiration of the job
	$expp = 0;
	$stm = $db->prepare("SELECT id FROM mass_jobs WHERE id = ? AND CURRENT_DATE <= happen_date AND location IS NOT NULL AND happen_date IS NOT NULL ");
	$stm->bind_param("s",$id);
	$stm->execute();
	$stm->store_result();
	$expp = $stm->num_rows;
	$stm->free_result();
	
	$err = "";
	
	//the user must be logged in and only a user
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		//he must be a user
		$stm = $db->prepare("SELECT type FROM users_login WHERE oauth_uid = ? ");
		$stm->bind_param("s",$_SESSION['userData']);
		$stm->execute();
		$account = $stm->get_result()->fetch_object()->type;
		$stm->free_result();

		if($account == 'user'){
			//job must be valid
			if($expp == 1){
				//now check the user array
				//now either the user will be posting for the first time or other
				$user_arrays = $jobs1;
				$user_count = count($user_arrays);
				
				for($i=0;$i<$user_count;$i++)
					$user_array[$i] = $user_arrays[$i][0];
				if(!empty($user_arrays)){
					if(!(in_array($userid, $user_array))){
						 //now push a new element
						$idm = [$userid,"Pending","","","","","",""];
						array_push($user_arrays,$idm);
					}
					else
						$err = $err . "You have Already Applied for the Job !";
				}
				else{
					//he is appling for the first time
					$user_arrays[0] = [$userid,"Pending","","","","","",""];
				}

			}
			else
				$err = $err . "The Job is Expired !";
		}
		else
			$err = $err . "Only Jobseeker can apply for a Job !";
	}
	else
		$err = $err . "You Must be Logged In !";
	
	//lets update both
	if($err == ""){
		
		//update both tables 
		$flag = 0;
		/* Prepared statement, stage 1: prepare */
	if (($stmt = $db->prepare("UPDATE mass_jobs SET users = ? WHERE id = ? AND mass_username = ?"))) {
			if ($stmt->bind_param("sss",json_encode($user_arrays),$id,$rec_id)) {
				if ($stmt->execute()){
					header("Location: mass_job_overview.php?id=".$id."");
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
			$err = $err . "Sorry Something Went Wrong While Processing Your Request. Please Contact Developer About this Issue !";
		}
	}
	else
		echo '<script type="text/javascript">setTimeout(function(){ swal("Error !" ,"'.$err.'", "error");}, 100);</script>';
	
}
//function to do validation and triming data
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
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/manifest.json">
<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<!-- Basic Page Needs
================================================== -->

<meta property="og:url"   content="http://careerstairs.in/mass_job_overview.php?id=<?php echo $id ?>" />
<meta property="og:type"  content="website" />
<meta property="og:title" content="<?php echo $rowwed['job_title'] . ' job in ' .  $rowws['company_name']  ?>" />
<meta property="og:description" content="<?php echo $rowwed['job_details']; ?>" />
<meta property="og:image"       content=<?php echo ' "http://careerstairs.in/dashboard/company_pictures/'.$rowws['picture'].'" '; ?> />
<meta property="og:locale" content="en_GB" />

<meta charset="utf-8">
<title><?php echo $rowwed['job_title'] ?> | Job Overview</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '1409416895762461',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
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
				<li><a href="browse_jobs.php" id="current"><i class="fa fa-external-link-square" aria-hidden="true"></i> Browse Jobs</a></li>
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
<div id="titlebar" class="photo-bg" style="background: url(images/all-categories-photo.jpg)">
	<div class="container">
		<div class="ten columns">
			<span><a href="#"><?php echo $rowwed['job_category'] ?></a></span>
			<h2><?php echo $rowwed['job_title'] ?>
			<?php 
				if($rowwed['job_type'] == 1)
					echo '<span class="full-time" >Full Time</span> | <span class="temporary" >Mass Recruitment</span>';
				else if($rowwed['job_type'] == 2)
					echo '<span class="part-time" >Part Time</span> | <span class="temporary" >Mass Recruitment</span>';
				else if($rowwed['job_type'] == 3)
					echo '<span class="internship" >Internship</span> | <span class="temporary" >Mass Recruitment</span>';
				else if($rowwed['job_type'] == 4)
					echo '<span class="temporary" >Freelance</span> | <span class="temporary" >Mass Recruitment</span>';
			?>
			</h2>
		</div>
		<div class="six columns">
			<ul class="social-icons" style="float: right">
				<li><a class="facebook" href="#" id="shareBtn"><i class="icon-facebook"></i></a></li>
			</ul> 
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<?php
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			
		}
		else if($exp == 1)
			echo '
		<div class="notification error closeable">
			<p><span>Warning ! </span> Please Login to apply for this job.</p>
			<a class="close" href="#"></a>
		</div>';
		?>
		
		<!-- Company Info -->
		<div class="company-info">
			<?php echo '<img src="dashboard/company_pictures/'.$rowws['picture'].'" alt="'.$rowws['company_name'].'">'; ?>
			<div class="content">
				<h4><?php echo $rowws['company_name'] ?></h4>
				<span><a href="#"><i class="fa fa-link"></i> <?php echo $rowws['company_website'] ?></a></span>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<h2>About Company</h2>
		<p class="margin-reset" style="text-align: justify">
			<?php echo $rowws['company_about']; ?>
		</p>
		<br/>
		
		<h2>Job Description</h2>
		<p class="margin-reset" style="text-align: justify">
			<?php echo $rowwed['job_details']; ?>
		</p>
		<br/>
		<h4 class="margin-bottom-0">Skills Required</h4>
		<div class="skills margin-top-10">
			<?php 
				//getting skills as json then decode it in array
				$skills = json_decode($rowwed['skills']);
				for($i=0;$i<count($skills);$i++)
				{
					echo '<span>'.$skills[$i].'</span>';
				}
			?>		
		</div>
		<div class="clearfix"></div>
		<br/>
		
		<h4 class="margin-bottom-0">Education</h4>
		<span><?php echo implode(" , ",json_decode($rowwed['education'])) ?></span>
		<div class="clearfix"></div>
		<br/>
		
		<h4 class="margin-bottom-0">Batch</h4>
		<span><?php echo implode(" , ",json_decode($rowwed['batch'])) ?></span>
		<div class="clearfix"></div>
		<br/>
		
		<h4 class="margin-bottom-10">Job Skills and Expertise</h4>

		
		<ul class="list-1" style="text-align: justify">
			<?php $job_description = json_decode($rowwed['job_description']);
			
				for($i=0;$i<count($job_description);$i++)
				{
					echo '<li>'.$job_description[$i].'</li>';
				}
			?>
		</ul>

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview</h4>

			<div class="job-overview">
				
				<ul>
					<li>
						<i class="fa fa-calendar-times-o"></i>
						<div>
							<strong>Last Date :</strong>
							<span><?php echo dateformat($rowwed['happen_date']) ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-sign-in"></i>
						<div>
							<strong>Company Type:</strong>
							<span><?php echo $rowws['company_type'] ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-map-marker"></i>
						<div>
							<strong>Location:</strong>
							<span><?php echo $rowwed['location'] ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-user"></i>
						<div>
							<strong>Job Title:</strong>
							<span><?php echo $rowwed['job_title'] ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-calendar"></i>
						<div>
							<strong>Experience </strong>
							<span><?php echo $rowwed['exp'] ?>+ Years</span>
						</div>
					</li>
					<li>
						<i class="fa fa-inr"></i>
						<div>
							<strong>Salary:</strong>
							<span><?php echo $rowwed['package_min']; echo" - "; echo $rowwed['package_max'] ?> LPA</span>
						</div>
					</li>
				</ul>

				<?php 
				//get job list of the user
				if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
					if($account == 'user'){
						
						$jobs_count = count($jobs1);
							for($i=0;$i<$jobs_count;$i++)
								$job[$i] = $jobs1[$i][0];
						
						//check job expiry
						if($exp == 1)
						{
							//check in array
							if (in_array($userid, $job)) {
								echo '<a style="pointer-events: none;cursor: default;" class="popup-with-zoom-anim button">Applied</a>';
							}
							else
								echo '<form method="post">
										<div align="center">
											<button name="apply" type="submit" >Apply For This Job</button>
										</div>
									</form>
								';
						}
						else
							echo '<a class="button" style="background-color: grey;pointer-events: none;cursor: default;">Expired</a>';
						
					}
					else{
						if($exp == 1)
							echo '<a style="pointer-events: none;cursor: default;" class="popup-with-zoom-anim button">Recruiter Cannot Apply</a>';
						else
							echo '<a class="button" style="background-color: grey;pointer-events: none;cursor: default;">Expired</a>';
					}
					
				}
				else{
					//if not expired
					if($exp == 1)
						echo '<a style="pointer-events: none;cursor: default;" class="popup-with-zoom-anim button">Login to Apply</a>';
					else
						echo '<a class="button" style="background-color: grey;pointer-events: none;cursor: default;">Expired</a>';
				}
				
				?>

			</div>
		</div>

	</div>
	<!-- Widgets / End -->


</div>


<!-- Footer
================================================== -->
<div class="margin-top-50"></div>

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
document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'share',
    mobile_iframe: true,
    href: 'http://careerstairs.in/mass_job_overview.php?id=<?php echo $id ?>',
  }, function(response){});
}
</script>

</body>

</html>