<?php

include('db/config.php');
session_start();

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
<meta charset="utf-8">
<title>CareerStairs | Mass Recruitment</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/temp.css">
<!--[if lt IE 9]>
	<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <link href="https://www.taxmaro.com/personal/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="https://www.taxmaro.com/personal/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="https://www.taxmaro.com/personal/css/taxmaro.webflow.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
            }
        });

    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);

    </script>
  
    <style>
        .base {
            overflow-x: hidden;
        }

    </style>
    
    

    <link href="https://markups.io/demo/eventoz/style.css" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body class="base">

<div id="wrapper">


<!-- Header
================================================== -->
	
    <div class="navbar w-nav" data-animation="default" data-collapse="small" data-duration="400">
        <div class="header-nav w-container">
            <a class="branding w-nav-brand" href="index.php"><img height="24" src="images/logo.png" alt="Career Stairs">CareerStairs</a>
				
            <nav class="small w-nav-menu" role="navigation">
				<?php
				if(isset($_SESSION['userData']) && !empty($_SESSION['userData']))
					echo '<a class="link--nav w-nav-link" href="login.php"><i class="fa fa-chevron-right"></i> Dashboard</a>';
				else
					echo '<a class="link--nav w-nav-link" href="login.php"><i class="fa fa-lock"></i> Log In</a>';
				?>
            </nav>
            <div class="menu-button w-nav-button">
                <div class="menu-button__icon w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
	
   
    <section class="hero">
        <div class="bg--subtle hero__bg" id="start">
            <div class="hero__bg--row w-container">
				<img class="hero__shape01 shape" data-ix="loadscalein-0-8" src="https://www.taxmaro.com/personal/images/hero__shape01.svg">
				<img class="hero__shape04 shape" data-ix="loadscalein-0-6" src="https://www.taxmaro.com/personal/images/hero__shape04.svg">
				<img class="hero__shape03 shape" data-ix="loadscalein-0-4" src="https://www.taxmaro.com/personal/images/hero__shape03.svg">
				<img class="hero__shape02 shape" data-ix="loadscalein-0-2" src="https://www.taxmaro.com/personal/images/hero__shape02.svg">
            </div>
            <img class="hero__seperator" data-ix="loadmoveuprotate" src="https://www.taxmaro.com/personal/images/seperator.svg">
		</div>    
    </section>
    
    <section id="mu-schedule">
		<div class="container">
			<div class="row">
				<div class="colo-md-12">
					<div class="mu-schedule-area">
						<div class="mu-title-area">
							<h2 class="mu-title">Upcoming Event</h2>
							<!--check for upcoming post-->
							
							<?php
							//we'll make a temp table to store the location
							
							//get time
							$stm = $db->prepare("SELECT happen_date FROM mass_jobs WHERE CURRENT_DATE <= happen_date LIMIT 1 ");
							$stm->execute();
							$upcoming_date = $stm->get_result()->fetch_object()->happen_date;
							$stm->free_result();
							
							//fetch address based on that locations
							
							if(isset($upcoming_date) && !empty($upcoming_date) && $upcoming_date != NULL){
								//start fetching data
								echo '<p>The Next mass recruitment is happeing at these Locations : </p>
										<p align="justify">
											<ol>'
											;
										//create temp table and store these location numbers	
										$stm = $db->prepare("SELECT DISTINCT location FROM mass_jobs WHERE happen_Date = ?");
										$stm->bind_param("s",$upcoming_date);
										$stm->execute();
										$ress = $stm->get_result();
										while($rim = $ress->fetch_assoc())
										{
											echo '<li>'.$rim['location'].'</li><br/>';
										}
										$stm->free_result();
									  echo '</ol>
									  </p>';
								
								//start other stuff
							echo '<div class="mu-schedule-content-area">
									<ul class="nav nav-tabs mu-schedule-menu" role="tablist">
										<li role="presentation" class="active">
											<a href="#first-day" aria-controls="first-day" role="tab" data-toggle="tab" style="padding: 20px;background-color: #E74C3C;">'.dateformat($upcoming_date).'</a>
										</li>
									</ul>
									
									<div class="tab-content mu-schedule-content">
										<div role="tabpanel" class="tab-pane fade mu-event-timeline in active" >
											<ul>
												<li>
													<div class="mu-single-event">
														<p class="mu-event-time">8.00 AM</p>
														<h3>Entry</h3>
													</div>
												</li>';
											
												$stm = $db->prepare("SELECT DISTINCT mass_username FROM mass_jobs WHERE happen_Date = ? ");
												$stm->bind_param("s",$upcoming_date);
												$stm->execute();
												$ress = $stm->get_result();
												while($rim = $ress->fetch_assoc())
												{
													//get company name
													$stmm = $db->prepare("SELECT company_name FROM mass_profile WHERE username = ? ");
													$stmm->bind_param("s",$rim['mass_username']);
													$stmm->execute();
													$company_name = $stmm->get_result()->fetch_object()->company_name;
													$stmm->free_result();
													
													//get company website
													$stmm = $db->prepare("SELECT company_website FROM mass_profile WHERE username = ? ");
													$stmm->bind_param("s",$rim['mass_username']);
													$stmm->execute();
													$company_website = $stmm->get_result()->fetch_object()->company_website;
													$stmm->free_result();
													
													//get photo
													$stmm = $db->prepare("SELECT picture FROM users_login WHERE oauth_uid = ? ");
													$stmm->bind_param("s",$rim['mass_username']);
													$stmm->execute();
													$picture = $stmm->get_result()->fetch_object()->picture;
													$stmm->free_result();
													
													//get phofile count
													$stmm = $db->prepare("SELECT id FROM mass_jobs WHERE mass_username = ? AND happen_date = ?");
													$stmm->bind_param("ss",$rim['mass_username'],$upcoming_date);
													$stmm->execute();
													$stmm->store_result();
													$profile_count = $stmm->num_rows;
													$stmm->free_result();
													
													echo '<li>
															<a target="_blank" href="mass_profile.php?id='.$rim['mass_username'].'"><div class="mu-single-event">
																<img src="dashboard/company_pictures/'.$picture.'">
																<p class="mu-event-time">'.$profile_count.' Profiles</p>
																<h3>'.$company_name.'</h3>
																<span><a target="_blank" href="'.$company_website.'"><i class="fa fa-link"></i>'.$company_website.'</a></span>
															</div></a>
														</li>';
													
												}
												$stm->free_result();
												
												
											echo '<li>
													<div class="mu-single-event">
														<p class="mu-event-time">The End</p>
														<h3>Thank You :)</h3>
													</div>
												</li>
											</ul>
										</div>

									</div>
							
								</div>
							';
								
								
							}
							else{
								echo '<p>Sorry Right Now there is no Upcoming mass recruitment. But Please keep on visiting this section !</p>';
							}
							
							
							
							?>
							
							
						</div>
						<!--data show start -->
						
						<!--data show end -->
					</div>
				</div>
			</div>
		</div>
	</section>
    <div class="clearfix"></div>
    <section class="highlights">
        <div class="row w-container">
            <h2 class="h3">The all-in-one solution for your Company</h2>
            <div class="subtitle">Time to relax</div>
            <div class="w-row">
                <div class="highlights__col w-col w-col-3 w-col-small-6" data-ix="scrollfadeinup"><img class="highlights__col--icons" src="https://www.taxmaro.com/personal/images/features--triangle2x.png" width="60">
                    <h3 class="h5">Time saving up to 80%</h3>
                    <p class="small">Our customers choose CareerStairs Team because they save time every day.</p>
                </div>
                <div class="highlights__col w-col w-col-3 w-col-small-6" data-ix="scrollfadeinup-2"><img class="highlights__col--icons" src="https://www.taxmaro.com/personal/images/features--square2x.png" width="60">
                    <h3 class="h5">Personal Consultant</h3>
                    <p class="small">No workflow can replace a real human. This is why we believe in our personal service.</p>
                </div>
                <div class="highlights__col w-col w-col-3 w-col-small-6" data-ix="scrollfadeinup-4"><img class="highlights__col--icons" src="https://www.taxmaro.com/personal/images/features--circle2x.png" width="60">
                    <h3 class="h5">Simple pricing</h3>
                    <p class="small">Our full-service for recruitment comes at a fixed price.</p>
                </div>
                <div class="highlights__col w-col w-col-3 w-col-small-6" data-ix="scrollfadeinup-6"><img class="highlights__col--icons" src="https://www.taxmaro.com/personal/images/features--polygon2x.png" width="60">
                    <h3 class="h5">Transparency</h3>
                    <p class="small">All data and documents at one place.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg--subtle tradition">
        <div class="tradition__row w-container">
            <div class="tradition__img" data-ix="scrollfadeinright">
                <div class="tradition__img--inner"></div>
            </div>
            <div class="tradition__content" data-ix="scrollfadeinleft">
                <h2 class="h3">We'll help to hire quality students</h2>
                <blockquote class="traditon__quote" style="background-color: #EAECEE;">Our team do everything to get you all the help needed to hire great employees for your buisness. Our team takes care of campaign, marketing, advertising, locations. We got a lot of creative people who'll get stuff done for you so that you get all the quality stuff. </blockquote>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="features__bg">
            <div class="features__bg--row w-container"><img class="features__shape01 shape" data-ix="scrollscalein" src="https://www.taxmaro.com/personal/images/features__shape01.svg"><img class="features__shape04 shape" data-ix="scrollscalein" src="https://www.taxmaro.com/personal/images/features__shape04.svg"><img class="features__shape03 shape" data-ix="scrollscalein" src="https://www.taxmaro.com/personal/images/features__shape03.svg"><img class="features__shape02 shape" data-ix="scrollscalein" src="https://www.taxmaro.com/personal/images/features__shape02.svg"></div>
        </div>
        <div class="row w-container">
            <h2 class="h3 mb--04 t--center">CAREERSTAIRS combines all tools and services you need for perfect employee hiring event</h2>
            <div class="w-tabs" data-duration-in="300" data-duration-out="100">
                <div class="mb--04 t--center w-tab-menu">
                    <a class="tab-link tab-link--first w--current w-inline-block w-tab-link" data-w-tab="Tab 1">
                        <div>Publish Job profiles</div>
                    </a>
                    <!--
          -->
                    <a class="tab-link w-inline-block w-tab-link" data-w-tab="Tab 2">
                        <div>Manage Application</div>
                    </a>
                    <!--
          -->
                    <a class="tab-link tab-link--last w-inline-block w-tab-link" data-w-tab="Tab 3">
                        <div>Tune your selection</div>
                    </a>
                </div>
                <div class="features__tabs-content w-tab-content">
                    <div class="tab-pane w--tab-active w-tab-pane" data-w-tab="Tab 1">
                        <div class="w-row">
                            <div class="w-col w-col-4" data-ix="scrollfadeinleft">
                                <h3 class="features__tabs-content--title">Create Account</h3>
                                <p class="features__tabs-content--text mb--01">Our Team will help you to setup a account. We'll let you personalize your account according to your vive. </p><a class="features__tabs-content--link" href="#">More</a>
                                <h3 class="features__tabs-content--title">Create Job Profiles</h3>
                                <p class="features__tabs-content--text mb--01">Generate individual job profile with a few clicks and submit them directly to your users. You can create any number of profiles.</p><a class="features__tabs-content--link" href="#">More</a>
                                <h3 class="features__tabs-content--title">Get Responses</h3>
                                <p class="features__tabs-content--text">Software collects all application automatically to the dashboard. You can trace any application and can overview any application that you want.</p>
                            </div>
                            <div class="w-col w-col-8" data-ix="scrollfadeinright">
                                <div class="features__tabs--col02-inside"><img class="features__tabs--img" sizes="(max-width: 767px) 89vw, (max-width: 991px) 414.65625px, 555.984375px" src="https://www.taxmaro.com/personal/images/screenshot01b2x.png" srcset="https://www.taxmaro.com/personal/images/screenshot01b2x-p-500.png 500w, https://www.taxmaro.com/personal/images/screenshot01b2x-p-800.png 800w, https://www.taxmaro.com/personal/images/screenshot01b2x.png 1080w">
                                    <div class="bg--01a features__tabs--img-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-tab-pane" data-w-tab="Tab 2">
                        <div class="w-row">
                            <div class="w-col w-col-4">
                                <h3 class="features__tabs-content--title">Personilize Application</h3>
                                <p class="features__tabs-content--text mb--01">All data and documents are stored in digital personnel files. Everything is at your fingertips. View them or save them it's upto you.</p><a class="features__tabs-content--link" href="#">More</a>
                                <h3 class="features__tabs-content--title">Professional service</h3>
                                <p class="features__tabs-content--text mb--01">Our Softwarewill prepares the overview and all required reportings. Don't worry about data handling anymore because it is our job.</p><a class="features__tabs-content--link" href="#">More</a>
                                <h3 class="features__tabs-content--title">Data security</h3>
                                <p class="features__tabs-content--text mb--01">All data and documents are stored in an encrypted form on Virtuals servers. Automated backups provide permanent data security.</p></div>
                            <div class="w-col w-col-8">
                                <div class="features__tabs--col02-inside"><img class="features__tabs--img" sizes="(max-width: 767px) 89vw, (max-width: 991px) 414.65625px, 555.984375px" src="https://www.taxmaro.com/personal/images/screenshot02b2x.png" srcset="https://www.taxmaro.com/personal/images/screenshot02b2x-p-500.png 500w, https://www.taxmaro.com/personal/images/screenshot02b2x-p-800.png 800w, https://www.taxmaro.com/personal/images/screenshot02b2x.png 1080w">
                                    <div class="bg--01a features__tabs--img-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-tab-pane" data-w-tab="Tab 3">
                        <div class="w-row">
                            <div class="w-col w-col-4">
                                <h3 class="features__tabs-content--title">Add new Options</h3>
                                <p class="features__tabs-content--text mb--02">You can choose how to want to select people or how do you want to make the hiring process interesting and helpful for you.</p>
                                <h3 class="features__tabs-content--title">Optimized Services</h3>
                                <p class="features__tabs-content--text mb--02">Save unwanted wage costs  to hire employees for your company. CAREERSTAIRS Team can assist you to optimize your companies employee hiring process.</p>
                                <h3 class="features__tabs-content--title">Hassle free Usage</h3>
                                <p class="features__tabs-content--text">Our software is web based can work on anytype of physical device. Our software is responsive so it will be easy to use on mobile phones too. All you need to have active internet connection.</p>
                            </div>
                            <div class="w-col w-col-8">
                                <div class="features__tabs--col02-inside"><img class="features__tabs--img" sizes="(max-width: 767px) 89vw, (max-width: 991px) 414.65625px, 555.984375px" src="https://www.taxmaro.com/personal/images/screenshot03b2x.png" srcset="https://www.taxmaro.com/personal/images/screenshot03b2x-p-500.png 500w, https://www.taxmaro.com/personal/images/screenshot03b2x-p-800.png 800w, https://www.taxmaro.com/personal/images/screenshot03b2x.png 1080w">
                                    <div class="bg--01a features__tabs--img-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg--subtle testimonials">
        <div class="row w-container">
            <div class="w-tabs" data-duration-in="300" data-duration-out="100">
                <div class="mb--04 t--center w-tab-menu">
                    <a class="tab-link-alt tab-link-alt--first w--current w-inline-block w-tab-link" data-w-tab="Tab 1">
                        <div>Small company</div>
                    </a>
                    <!--
          -->
                    <a class="tab-link-alt w-inline-block w-tab-link" data-w-tab="Tab 2">
                        <div>Middle-sized company</div>
                    </a>
                    <!--
          -->
                    <a class="tab-link-alt tab-link-alt--last w-inline-block w-tab-link" data-w-tab="Tab 3">
                        <div>Large company</div>
                    </a>
                </div>
                <div class="w-tab-content">
                    <div class="w--tab-active w-tab-pane" data-w-tab="Tab 1">
                        <h3 class="h3 t--center" data-ix="scrollfadeinright">CAREERSTAIRS takes care of everything</h3>
                        <blockquote class="testimonial__quote" data-ix="scrollfadeinleft">"The only thing I want to know about payroll is, that it is working correctly. For my company CAREERSTAIRS is the best combination of service and software. My team uses the online services and data management. And I can rely on the professional service of CAREERSTAIRS."</blockquote>
                        <div class="testimonial__author w-clearfix" data-ix="scrollfadeinup">
                            <div class="testimonial__author--avatar"><img class="mu-single-event" style="width: 96px;border-radius: 50%;" src="https://www.atlanticwaterworld.com/wp-content/uploads/2017/07/logo.png" width="96"></div>
                            <div class="testimonial__author--details">
                                <h4 class="h6 mb--00">ATLANTIC WATER WORLD</h4>
                                <p class="mb--00 small">New Delhi<br>~ 20 Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-tab-pane" data-w-tab="Tab 2">
                        <h3 class="h3 t--center">Digital tools for our HR process</h3>
                        <blockquote class="testimonial__quote">"We used several tools for our employee hiring process. And it really got confusing when we had to complete registration sheets and set up work contracts. We were using old templates and had to adjust them manually every time. CAREERSTAIRS helped us to shortcut this process. It is all online now and takes a few clicks instead of hours of paper work."</blockquote>
                        <div class="testimonial__author w-clearfix">
                            <div class="testimonial__author--avatar"><img class="mu-single-event" style="width: 96px;border-radius: 50%;" src="https://www.toodhu.com/img/Toodhu.png" width="96"></div>
                            <div class="testimonial__author--details">
                                <h4 class="h6 mb--00">Toodhu</h4>
                                <p class="mb--00 small">Online Trade Agency<br>~ 50 Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-tab-pane" data-w-tab="Tab 3">
                        <h3 class="h3 t--center">Integration into our company</h3>
                        <blockquote class="testimonial__quote">"The hiring is done by our own HR department. But we were missing a lean and simple onboarding process and the possibility, to manage user data and contracts online. CAREERSTAIRS fits in perfectly. We are still working with our intranet and hiring programm but intergrated CAREERSTAIRS via API. This enables us to use all functions within our own IT environment."</blockquote>
                        <div class="testimonial__author w-clearfix">
                            <div class="testimonial__author--avatar"><img class="mu-single-event" style="width: 96px;border-radius: 50%;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Macys.svg/2000px-Macys.svg.png" width="96"></div>
                            <div class="testimonial__author--details">
                                <h4 class="h6 mb--00">Macy’s, Inc.</h4>
                                <p class="mb--00 small">Large Company Macy's,<br>~ 500 Employees</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing">
        <div class="pricing__bg">
            <div class="pricing__bg--row w-container"><img class="pricing__shape04 shape" data-ix="scrollscalein" src="https://www.taxmaro.com/personal/images/pricing__shape04.svg"><img class="pricing__shape03 shape" data-ix="scrollscalein" src="https://www.taxmaro.com/personal/images/pricing__shape03.svg"><img class="pricing__shape01 shape" data-ix="scrollscalein" src="https://www.taxmaro.com/personal/images/pricing__shape01.svg"><img class="pricing__shape02 shape" data-ix="scrollscalein" src="https://www.taxmaro.com/personal/images/pricing__shape02.svg"></div>
        </div>
        <div class="row w-container">
            <h2 class="h3 mb--04 t--center">Simple Job management Website</h2>
            <div class="w-tabs" data-duration-in="300" data-duration-out="100">
                <div class="mb--03 t--center w-tab-menu">
                    <a class="tab-link tab-link--first w--current w-inline-block w-tab-link" data-w-tab="Tab 1">
                        <div>Offline</div>
                    </a>
                    <!--
          -->
                    <a class="tab-link tab-link--last w-inline-block w-tab-link" data-w-tab="Tab 2">
                        <div>Online</div>
                    </a>
                </div>
                <div class="pricing__tabs--content w-tab-content">
                    <div class="w--tab-active w-tab-pane" data-w-tab="Tab 1">
                        <div class="pricing__row w-row">
                            <div class="w-col w-col-1 w-col-small-6 w-col-tiny-tiny-stack w-hidden-tiny"></div>
                            <div class="bg--01c pricing__col w-col w-col-5 w-col-small-6 w-col-tiny-tiny-stack" data-ix="scrollfadeinright">
                                <h3 class="h5">Stage 1</h3>
                                <ul class="pricing__list">
                                    <li class="pricing__list--item">Can create multiple profile for a Job</li>
                                    <li class="pricing__list--item">The post will be verified by Admin</li>
                                    <li class="pricing__list--item">Time and Location will be fixed on agreement</li>
                                    <li class="pricing__list--item">Event Starts</li>
                                </ul>
                            </div>
                            <div class="bg--01d pricing__col w-col w-col-5 w-col-small-6 w-col-tiny-tiny-stack" data-ix="scrollfadeinleft">
                                <h3 class="h5">Stage 2</h3>
                                <ul class="pricing__list">
                                    <li class="pricing__list--item">Starting the Interview Process</li>
                                    <li class="pricing__list--item">Can judge a applicant and set selection criteria</li>
                                    <li class="pricing__list--item">Can add a new applicant</li>
                                    <li class="pricing__list--item">Document management system</li>
                                    <li class="pricing__list--item">Get list of selected candidates for your company</li>
                                </ul>
                            </div>
                            <div class="w-col w-col-1 w-col-small-6 w-col-tiny-tiny-stack w-hidden-tiny"></div>
                        </div>
                        <div class="pricing__cta t--center" data-ix="scrollfadeinup-2">
                            <h3 class="h5 mb--00">Trial</h3>
                            <div class="mb--02 small">Let's get work done !</div><a class="bg--01a pricing__cta--btn w-button" data-ix="modalclickin" href="#testimonials">Start now!</a></div>
                    </div>
                    <div class="w-tab-pane" data-w-tab="Tab 2">
                        <div class="pricing__row w-row">
                            <div class="w-col w-col-1 w-col-small-6 w-col-tiny-tiny-stack w-hidden-tiny"></div>
                            <div class="bg--01c pricing__col w-col w-col-5 w-col-small-6 w-col-tiny-tiny-stack">
                                <h3 class="h5">Stage 1</h3>
                                <ul class="pricing__list">
                                    <li class="pricing__list--item">Can create multiple profile for a Job</li>
                                    <li class="pricing__list--item">The post will be verified by Admin</li>
                                    <li class="pricing__list--item">Time and event environment will be fixed</li>
                                    <li class="pricing__list--item">Event Starts</li>
                                </ul>
                            </div>
                            <div class="bg--01d pricing__col w-col w-col-5 w-col-small-6 w-col-tiny-tiny-stack">
                                <h3 class="h5">Stage 2</h3>
                                <ul class="pricing__list">
                                    <li class="pricing__list--item">Will get the result</li>
                                    <li class="pricing__list--item">Can individually interview applicants</li>
                                    <li class="pricing__list--item">Account Viewing</li>
                                    <li class="pricing__list--item">Document management system</li>
                                </ul>
                            </div>
                            <div class="w-col w-col-1 w-col-small-6 w-col-tiny-tiny-stack w-hidden-tiny"></div>
                        </div>
                        <div class="pricing__cta t--center">
                            <h3 class="h5 mb--00">Trial</h3>
                            <div class="mb--02 small">Let's get work done !</div><a class="bg--01a pricing__cta--btn w-button" data-ix="modalclickin" href="#testimonials">Start now!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- Testimonials -->
	<div id="testimonials">
		<!-- Slider -->
		<div class="container">
			<div class="sixteen columns">
				<div class="testimonials-slider">
					  
					<div class="announce">
							Enquiry Form for <strong> Recruiters </strong>!
					</div>
					<div class="margin-bottom-40"></div>
							<!-- Form -->
					
					<section id="contact">

						<!-- Success Message -->
						<mark id="message"></mark>

						<form name="contactform" id="contactform" autocomplete="off">

							<fieldset>

								<div class="six columns">
									<input name="name" type="text" id="name" required maxlength="100" pattern="[A-Za-z\s]{10,100}" style="text-transform: capitalize;" placeholder="Enter Your full name" />
								</div>

								<div class="six columns">
									<input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required maxlength="100" style="text-transform: lowercase;" placeholder="Enter your Email" />
								</div>

								<div class="three columns" style="float: right;">
									<select style="padding: 10px" onChange="extra(this.value)" required id="call">
										<option>Request Phone Call ?</option>
										<option value="1">No</option>
										<option value="2">Yes</option>
									</select>
								</div>

								<div style="display: none" class="eight columns" id="number" >
									<input name="mobile" type="text" pattern="^\d{10}$" placeholder="Enter 10 digit Phone number" id="mobile" />
								</div>

								<div class="three columns" style="float: right; display: none;" id="time">
									<select style="padding: 10px" id="call_time">
										<option>Callback Time ?</option>
										<option value="1">1 hour</option>
										<option value="2">2 hour</option>
										<option value="3">3 hour</option>
										<option value="4">4 hour</option>
										<option value="5">5 hour</option>
									</select>
								</div>

								<div class="sixteen columns">
									<textarea name="comment" cols="40" rows="4" id="comment" spellcheck="true" style="resize: none" maxlength="1000" placeholder="Enter your message" required></textarea>
								</div>

							</fieldset>
							<div id="result"></div>
							<input type="button" class="submit" id="submit" value="Send Message" onClick="formsubmit()" />

						</form>

						<div class="clearfix" style="padding-bottom: 80px"></div>

						<div align="center" id="loading"  style="display:none">
							<i id="loading-i"></i>
							<span id="loading-i2" style="color: white" ></span>
						</div>

					</section>
					
				</div>
			</div>
		</div>
	</div>

<!-- Footer
================================================== -->
<div class="margin-top-45"></div>

	<!-- Bottom -->
	<footer id="mu-footer" role="contentinfo">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-footer-top">
					<p style="text-align: justify">CareerStairs is a unique tech-driven platform that aims to revolutionize the way hiring is done. Whether you are a job-seeker or an employer, we help you secure the best of job opportunities and talent. Our unique ranking algorithm helps candidates get noticed by recruiters on one hand while helping recruiters notice the right candidates on the other. Similarly, the ingenious Resume feature enables employers hire wisely while letting candidates showcase the best of their talent.
					</p>
					<div class="mu-social-media">
						<a target="_blank" href="https://www.facebook.com/careerstairsin-259421891127990/"><i class="fa fa-facebook"></i></a>
						<a target="_blank" href="https://twitter.com/CareerstairsI"><i class="fa fa-twitter"></i></a>
						<a target="_blank" href="https://plus.google.com/u/0/109522836028901433584"><i class="fa fa-google-plus"></i></a>
						<a target="_blank" href="https://www.linkedin.com/company/18031484/"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
			<div class="mu-footer-bottom">
			<p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="https://careerstairs.in">CareerStairs.in</a>. All right reserved.</p>
			</div>
			</div>
		</div>
	</footer>

<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
</div>


<!-- Scripts
================================================== -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
    <script src="https://www.taxmaro.com/personal/js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<script type="text/javascript">
	
	function extra(that){
		if(that == 2){
			document.getElementById('number').style.display = 'inline-block';
          	document.getElementById('mobile').required = true;
			document.getElementById('time').style.display = 'inline-block';
          	document.getElementById('call_time').required = true;
		}
		else if(that == 1){
			document.getElementById('number').style.display = 'none';
          	document.getElementById('mobile').required = false;
			document.getElementById('time').style.display = 'none';
          	document.getElementById('call_time').required = false;
		}
	}
	
	function formsubmit(){
		//if all data is valid then submit
		var name = $('#name').val();
		var email = $('#email').val();
		var call = $('#call').val();
		var mobile = $('#mobile').val();
		var time = $('#call_time').val();
		var message = $('#comment').val();
		
		$('#contactform').hide();
		$('#loading').show();
		$("#loading-i").addClass("fa fa-spinner fa-pulse fa-4x fa-fw");
		$("#loading-i2").text('Sending !');
		$.ajax({
                type:'POST',
                url:'extra/ajaxData.php',
                data:{name: name, emails: email, msg_type: 'mass', call: call, mobile: mobile, time: time, message: message },
                success: function(dataParsed){
					console.log(dataParsed);
					if(dataParsed == 'Data')
					{
						$("#loading-i").removeClass();
						$("#loading-i").addClass("fa fa-check fa-4x");
						$("#loading-i").css("color", "green");
						$("#loading-i2").text('Message Sent !');
					}
					else if(dataParsed != 'Data')
					{
						$("#loading-i").removeClass();
						$('#loading').hide();
						$('#contactform').show();
						
						swal(
						  'Error',
						  dataParsed,
						  'error'
						)
					}
				}
		});
	}
	
</script>



</body>

</html>