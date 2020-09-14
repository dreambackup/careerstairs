<?php
session_start();
include('db/config.php');
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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CareerStairs</title>
<meta name="description" content="CareerStairs is a unique tech-driven platform that aims to revolutionize the way hiring is done. Whether you are a job-seeker or an employer, we help you secure the best of job opportunities and talent. Our unique ranking algorithm helps candidates get noticed by recruiters on one hand while helping recruiters notice the right candidates on the other. Similarly, the ingenious Resume feature enables employers hire wisely while letting candidates showcase the best of their talent.">
<meta name="author" content="CarrerStairs">

<meta name="msvalidate.01" content="629DB1DFFCA4B040B5148B45929029A8" />

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<style>
	ul li img{
		max-height: 120px;
		max-width: 150px;
	}	
</style>

</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->
<header class="transparent sticky-header">
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


<!-- Banner
================================================== -->
<div id="banner" class="with-transparent-header parallax background" style="background-image: url(images/banner-home-02.jpg)" data-img-width="2000" data-img-height="1330" data-diff="300">
	<div class="container">
		<div class="sixteen columns">
			<div class="search-container">
				<!-- Form -->
				<h2>Find Job</h2>
				<form method="post" autocomplete="off" action="browse_jobs.php">
					<input type="text" class="ico-01" placeholder="job title, keywords or company name" id="skills" name="skills" />
					<input type="text" class="ico-02" placeholder="city, province or region" id="tags"  name="location" />
					<button type="submit" name="find_job" formtarget="_blank"><i class="fa fa-search"></i></button>
				</form>
				<!-- Announce -->
				<div class="announce">
					Connect directly with and be <strong>discovered</strong> by the employers who want to hire you. 
				</div>

			</div>
		</div>
	</div>
</div>

<!-- Content
================================================== -->

<!-- Categories -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Popular Categories</h3>
		<ul id="popular-categories">
			<li><a target="_blank" href="browse_jobs.php?type=Accounting / Finance"><i class="ln ln-icon-Bar-Chart"></i> Accounting / Finance</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=Software Developer"><i class="ln ln-icon-Coding"></i> Software Developer</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=Marketing & Sales"><i class="ln ln-icon-Speaker"></i> Marketing & Sales</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=Information Technology"><i class="ln ln-icon-Arrow-Right2"></i>Information Technology</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=Healthcare"><i class="ln ln-icon-Medical-Sign"></i> Healthcare</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=Content & digital"><i class="ln ln-icon-Start-3"></i> Content & digital</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=UI / UX Developer"><i class="ln ln-icon-Vector-4"></i> UI / UX Developer</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=BPO & Telecomm"><i class="ln ln-icon-Headset"></i>BPO & Telecomm</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=Management"><i class="ln ln-icon-Management"></i>Management</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=Quality & Testing"><i class="ln ln-icon-Optimization"></i> Quality & Testing</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=Mobile App development"><i class="ln ln-icon-Orientation"></i>Mobile App development</a></li>
			<li><a target="_blank" href="browse_jobs.php?type=Hr & Company"><i class="ln ln-icon-Geek-2"></i>Hr & Company</a></li>
		</ul>

		<div class="clearfix"></div>
		<div class="margin-top-30"></div>

		<div class="margin-bottom-50"></div>
	</div>
</div>


<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">Recent Jobs</h3>
		<ul class="job-list">
			<?php
			
			$stm = $db->prepare("SELECT * FROM jobs WHERE admin_verified = '1' ORDER BY created DESC LIMIT 5 ");
			$stm->execute();
			$ress = $stm->get_result();
			while($rim = $ress->fetch_assoc())
			{
				if($rim['job_type'] == 1){
					$type ='full-time';
					$job_type ='Full Time';
				}
				else if($rim['job_type'] == 2){
					$type ='part-time';
					$job_type = 'Part Time';
				}
				else if($rim['job_type'] == 3){
					$type ='internship';
					$job_type = 'Internship';
				}
				else if($rim['job_type'] == 4){
					$type ='freelance';
					$job_type = 'Freelance';
				}
	
			
				echo '
					<li><a href="job-overview.php?id='.$rim['id'].'" target="_blank">
					<img src="dashboard/company_pictures/'.$rim['company_pic'].'" alt="'.$rim['company_name'].'">
					<div class="job-list-content">
						<h4>'.$rim['job_title'].'<span class="'.$type.'">'.$job_type.'</span></h4>
						<h5 style="padding-bottom: 5px">'.$rim['company_name'].'</h5>
						<div class="job-icons">
							<span><i class="fa fa-calendar"></i>'.$rim['exp'].'+ Years</span>
							<span><i class="fa fa-inr"></i>'.$rim['package_min'].' - '.$rim['package_max'].' LPA</span>
							<span><i class="fa fa-map-marker"></i>'.implode(" , ",json_decode($rim['location'])).'</span>
						</div>
					</div>
					</a>
					<div class="clearfix"></div>
				</li>

				';
			}
			$stm->free_result();
			
			?>
			
		</ul>

		<a href="browse_jobs.php" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">HandPicked Jobs</h3>

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>
		
		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">
					<ul>
					<?php
						//fetch jobs array
						$stm = $db->prepare("SELECT jobs_hand FROM admin WHERE id = 1 ");
						$stm->execute();
						$hand_jobss = $stm->get_result()->fetch_object()->jobs_hand;
						
						$stm->free_result();
						
						$hand_jobs = json_decode($hand_jobss);
						
						$query_one = "SELECT * FROM jobs WHERE id IN (".implode(",", $hand_jobs).")";
						
						$stm = $db->prepare($query_one);
						$stm->execute();
						$ress = $stm->get_result();
						
						while($rim = $ress->fetch_assoc())
						{
							if($rim['job_type'] == 1){
								$type ='full-time';
								$job_type ='Full Time';
							}
							else if($rim['job_type'] == 2){
								$type ='part-time';
								$job_type = 'Part Time';
							}
							else if($rim['job_type'] == 3){
								$type ='internship';
								$job_type = 'Internship';
							}
							else if($rim['job_type'] == 4){
								$type ='freelance';
								$job_type = 'Freelance';
							}
							
							echo '
							
							<li>
								<div class="job-spotlight">
									<a href="job-overview.php?id='.$rim['id'].'" target="_blank"><h4>'.$rim['job_title'].'<span class="'.$type.'">'.$job_type.'</span></h4></a>
									<h5 style="padding-bottom: 5px">'.$rim['company_name'].'</h5>
										<span><i class="fa fa-calendar"></i>'.$rim['exp'].'+ Years</span>
										<span><i class="fa fa-inr"></i>'.$rim['package_min'].' - '.$rim['package_max'].' LPA</span>
										<span><i class="fa fa-map-marker"></i>'.implode(" , ",json_decode($rim['location'])).'</span>
									<p align="justify">'.substr($rim['job_details'],0,200).'...</p>
									<a href="job-overview.php?id='.$rim['id'].'" target="_blank" class="button">Apply For This Job</a>
								</div>
							</li>
							
							';
							
						}
						$stm->free_result();
						
					?>
					
					
					
					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
</div>


<!-- mega recruitements-->

<h3 class="centered-headline">Clients Who Have Trusted Us  <a href="#">
        <span>The list of clients who have put their trust in us includes:</span></a>
</h3>
	<div class="container">
    	<article class="sixteen columns">
        	<div class="vc_row wpb_row vc_row-fluid">
            	<div class="wpb_column vc_column_container vc_col-sm-12">
                	<div class="vc_column-inner">
                    	<div class="wpb_wrapper"> <!-- Navigation / Left -->
    						<div class="one carousel column alpha">
    							<div id="showbiz_left_63" class="sb-navigation-left-2"><i class="fa fa-angle-left"></i>
    							</div>
    						</div>

    						<!-- ShowBiz Carousel -->
    						<div id="our-clients"  data-delay="5000" data-autoplay="on" class="our-clients-run showbiz-container fourteen carousel columns" >

								<!-- Portfolio Entries -->
								<div class="showbiz our-clients" data-left="#showbiz_left_63" data-right="#showbiz_right_63">
									<div class="overflowholder">
										<ul>
											<li><img src="images/clients/Toodhu.png"></li>
											<li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Macys.svg/2000px-Macys.svg.png"></li>
											<li><img src="images/clients/atlantic.png"></li>
											<li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Kohl%27s.svg/2000px-Kohl%27s.svg.png"></li>
											<li><img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8c/Belk_logo_2010.svg/762px-Belk_logo_2010.svg.png"></li>
											<li><img src="images/clients/archies.jpg"></li>
											<li><img src="images/clients/Nike.png"></li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
    						</div>
    						<!-- Navigation / Right -->
    			<div class="one carousel column omega">
    				<div id="showbiz_right_63" class="sb-navigation-right-2">
    					<i class="fa fa-angle-right"></i>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
			
	<footer class="entry-footer"></footer><!-- .entry-footer -->
	
</article>
</div>
<div class="margin-bottom-10"></div>

<!-- Testimonials -->
<div id="testimonials">
	<!-- Slider -->
	<div class="container">
		<div class="sixteen columns">
			<div class="testimonials-slider">
				  <ul class="slides">
				    <li>
						<div class="announce">
							Subscribe to our <strong> Newsletter </strong>!
						</div>
						<div class="margin-bottom-40"></div>
						<div>
						<form autocomplete="off" method="post" action="extra/subscribe_ajax.php">
							<input type="email" id="email" name="email" maxlength="50" title="Enter your email" required placeholder="Enter Email" />
							<br/>
							<button type="submit">Subscribe</button>
						</form>
							<div class="margin-bottom-10"></div>
						</div>
				    </li>
				  </ul>
			</div>
		</div>
	</div>
</div>

<!-- Recent Posts -->



<!-- Footer
================================================== -->
<div class="margin-top-5"></div>

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

<!-- Script for placse -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="scripts/location.js"></script>

</body>
</html>