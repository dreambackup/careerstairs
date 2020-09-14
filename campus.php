<?php

include('db/config.php');
session_start();

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
<title>CareerStairs | Campus Connect</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
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
 <link rel="stylesheet" media="all" href="https://cdn.littlelines.com/assets/application-9221995a61a6387726512f858bbfe32d0649b9b416b698422b35e281383d9279.css" data-turbolinks-track="true" />
 
    <script src="https://cdn.littlelines.com/assets/application-ea8d15950d0ba797d2be9eedb35c9b738dc53c997a80e43aff0612d551a4b70b.js" data-turbolinks-track="true" async="async"></script>
		
<main class="main">
	<div class="hero hero--home b-lazy" data-src="https://cdn.shutterstock.com/shutterstock/videos/6002213/thumb/1.jpg">
	  <div class="hero--home__gradient"></div>
	  <div class="hero__content">
		<h1 class="hero__title" style="color: white">
		  Campus Connect<br class="hero__title-break">
		  <span class="color--subaccent">&</span> development program.
		</h1>
		<h3 class="hero__body" style="color: white">
		  The goal is to build a sustainable partnership with engineering education institutions across India.
		</h3>
	  </div>
	</div>
	
<section>
  <div class="section section--with-border">
    <div class="content content--tall text-align--center">
      <div class="heading">
        <h2 class="heading__title">Campus Connect ?</h2>
        <h5 class="heading__subtitle">
          ‘Campus Connect’ is an online platform providing comprehensive assistance to the recruitment process value chain across students, aspiring professionals, educational institutions and colleges, and hiring organizations. This is a unique Industry-Academia initiative to “architect the education experience and career prospects”. The goal is to build a sustainable partnership with engineering education institutions across India for producing “industry ready” recruits. The program aims to enhance the quality and quantity of the IT talent-pool enabling a sustainable growth of the IT industry itself by increase in the employability of students.Campus Connect shall offer a number of value added features and shall enable optimizing the process of candidate profiling, search, recruitment, besides being an interactive platform.
        </h5>
      </div>
    </div>
  </div>
	
</section>

</main>

<section class="section section--triple-padding section--accent text-align--center background--services" style="background-image: url(https://media.beam.usnews.com/58/1a/f480ca024c2cb430ef1e3b1f31b8/160914-interview-stock.jpg)">
  <div class="content content--tall">
    <div class="heading">
      <h2 class="heading__title heading__title--large color--white">Every student is different <span class="color--subaccent">&</span> requires
      a differnt approach.</h2>
      <h4 class="heading__subtitle color--white">This program shall focus on preparing “Industry-ready IT Professionals” by aligning and enhancing student competencies with the needs of the industry.</h4>
    </div>
  </div>
</section>


<section class="section text-align--center">
  <div class="content content--tall">
    <div class="heading">
      <h2 class="heading__title heading__title--large">
        Take a quick peek under the hood.
      </h2>
    </div>
    <h5 class="heading__subtitle">
      Here are a few Institutes that we have worked for
    </h5>
  </div>
</section>

<div class="container">
	<article class="sixteen columns">
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper"> <!-- Navigation / Left -->
    					<div class="one carousel column alpha">
    						<div id="showbiz_left_63" class="sb-navigation-left-2"><i class="fa fa-angle-left"></i></div>
    					</div>

    					<!-- ShowBiz Carousel -->
    					<div id="our-clients"  data-delay="5000" data-autoplay="on" class="our-clients-run showbiz-container fourteen carousel columns" >

						<!-- Portfolio Entries -->
							<div class="showbiz our-clients" data-left="#showbiz_left_63" data-right="#showbiz_right_63">
								<div class="overflowholder">
									<ul>
										<li><img src="images/colleges/cummins.jpg"></li>
										<li><img src="images/colleges/ghriet_logo.png"></li>
										<li><img src="images/colleges/iit_guwahati-logo.jpg"></li>
										<li><img src="images/colleges/modern college of eng.jpg"></li>
										<li><img src="images/colleges/rgcet logo copy.png"></li>
										<li><img src="images/colleges/roever.png"></li>
										<li><img src="images/colleges/siddhant-college-engineering.png"></li>
										<li><img src="images/colleges/vellore.gif"></li>
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
	</article>
</div>

<!-- Content
================================================== -->
<div class="container">
	

	<section class="section section---with-border text-align--center">
	  <div class="content content--tall">
		<div class="heading">
		  <h2 class="heading__title">Objectives and Activities that Campus Connect will initiate</h2>
		  
		  <div>
  <div class="panel panel--with-border panel--section">
    <strong><h2>Seminars and faculty training</h2></strong>
    <p>Careerstairs Team will provide faculty and administrators with access to rich academics, diverse intercultural experiences, and innovative approaches to learning and problem-solving that enhance syllabi, internationalize curricula, and increase global understanding on campus.This will allow faculty members to present their own three generational genogram. Evaluations revealed the unexpected outcome of increased understanding of faculty colleagues in the work setting.Our Team offers a unique opportunity for researchers, faculty, and graduate/Post Grad students to dialogue with and to develop professional relationships with research administrators, ultimately leading to collaborations with great scientific advances and Developers.</p>
  </div>
  <div class="panel panel--with-border panel--section">
    <strong><h2>Sponsorship of Events</h2></strong>
    <p>We make it easy to find and sponsor events to engage with your brand’s target audience.Gone are the days when sponsors and event hosts were content to bathe a party in logos and consider their work done. Increasingly innovative experiential marketing, new and expanding digital platforms, and stiffer competition for sponsor dollars have given rise to a savvy set of decision makers—at brands and event hosts alike—who intend to elevate sponsors’ return on investment and build symbiotic partnerships. Here's our archive of articles about integrating sponsors and selling event sponsorship.</p>
  </div>
  <div class="panel panel--with-border panel--section">
    <strong><h2>Industry Visits</h2></strong>
    <p>We are your bridge to a larger world. A world full of opportunities and challenges beyond your campus life. We are your connect to corporate world.The focus of the educational institutes is changing the paradigm from input based learning to output based learning (result - oriented), with emphasis on experiential learning. The core idea is to make students experience the corporate culture and hence learn from the industry’s working model. We want students to learn and explore real world, which is beyond the realm of university curriculum.</p>
  </div>
</div>
		  
		</div>
	  </div>
	</section>
	

</div>

<!-- Testimonials -->
	<div id="testimonials">
		<!-- Slider -->
		<div class="container">
			<div class="sixteen columns">
				<div class="testimonials-slider">
					  
					<div class="announce">
							Enquiry Form for <strong> Institute Personals </strong>!
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
							<input type="submit" class="submit" id="submit" value="Send Message" onClick="formsubmit()" />

						</form>

						<div class="clearfix" style="padding-bottom: 100px"></div>

						<div align="center" id="loading" style="display:none">
							<i id="loading-i"></i>
							<span id="loading-i2" style="color: white"></span>
						</div>

					</section>
					
				</div>
			</div>
		</div>
	</div>




<!-- Footer
================================================== -->
<div class="margin-top-40"></div>

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
                data:{name: name, emails: email, msg_type: 'campus', call: call, mobile: mobile, time: time, message: message },
                success: function(dataParsed){
					console.log(dataParsed);
					if(dataParsed == 'Data')
					{
						$("#loading-i").removeClass();
						$("#loading-i").addClass("fa fa-check fa-5x");
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