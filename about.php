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
<title>CareerStairs | About Us</title>

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
	<div class="hero hero--home b-lazy" data-src="https://cdn.littlelines.com/assets/hero/company-c46e9f610e6c80eec6b9b6f42ddb25b5438728d0222020f75fbc44b4dd9832c7.jpg">
	  <div class="hero--home__gradient"></div>
	  <div class="hero__content">
		<h1 class="hero__title" style="color: white">
		  We're a different kind of<br class="hero__title-break"> web design
		  <span class="color--subaccent">&</span> development company.
		</h1>
		<h3 class="hero__body" style="color: white">
		  Above all, we believe in building exceptional products for our clients.
		</h3>
	  </div>
	</div>
	
<section>
  <div class="section section--with-border">
    <div class="content content--tall text-align--center">
      <div class="heading">
        <h2 class="heading__title">What we're made of</h2>
        <h5 class="heading__subtitle">
          CareerStairs is a unique tech-driven platform that aims to revolutionize the way hiring is done. Whether you are a job-seeker or an employer, we help you secure the best of job opportunities and talent. Our unique ranking algorithm helps candidates get noticed by recruiters on one hand while helping recruiters notice the right candidates on the other. Similarly, the ingenious Resume feature enables employers hire wisely while letting candidates showcase the best of their talent.
        </h5>
      </div>
    </div>
  </div>
	
</main>

<!-- Content
================================================== -->
<div class="container">
	
	<div class="section section--without-padding section--equalizer">
	
		<div class="team-member b-lazy" data-src="https://cdn.littlelines.com/assets/team/Matt-e7f5147f43f52be44289ea4a157b73bab47f28638fa3f65dfee95fa9f0f790bb.jpg">
      		<div class="team-member__wrapper">
        		<div class="team-member__content">
          			<div class="team-member__name">
            			Alondra cooper
          			</div>
          			<div class="team-member__position">
						Chief Executive Officer
					</div>
          			<a title="Alondra cooper&#39; LinkedIn" class="team-member__social" target="_blank" href="https://github.com/mattsears"><i class="fa fa-linkedin"></i></a>          
          		</div>
      		</div>
    	</div>
    	
    	
    	<div class="team-member b-lazy" data-src="images/anshul gupta.jpg">
		  <div class="team-member__wrapper">
			<div class="team-member__content">
			  <div class="team-member__name">
				Anshul gupta
			  </div>
			  <div class="team-member__position">
				Cheif Business Executive
			  </div>
			  <a title="Anshul gupta&#39;s LinkedIn" class="team-member__social" target="_blank" href="https://www.linkedin.com/in/natesowder"><i class="fa fa-linkedin"></i>
			  </a>  	
		  	</div>
		  </div>
		</div>
    	
    	<div class="team-member b-lazy" data-src="https://cdn.littlelines.com/assets/team/Ricardo-37527e9080b6a4be2b8bc97c7291624639eabd5be6e7cb3218e6c3743ae0a138.jpg">
		  <div class="team-member__wrapper">
			<div class="team-member__content">
			  <div class="team-member__name">
				Nikhil Gupta
			  </div>
			  <div class="team-member__position">
				Business Manager
			  </div>
			  <a title="Nikhil Gupta&#39;s Dribbble" class="team-member__social" target="_blank" href=" https://dribbble.com/RicardoThompson"></a>        
			</div>
		  </div>
		</div>

    	<div class="team-member b-lazy" data-src="https://cdn.littlelines.com/assets/team/David-74add111a5a96db59b3be38c1366b7d9261dce38abd3429c150edc9df319204a.jpg">
		  <div class="team-member__wrapper">
			<div class="team-member__content">
			  <div class="team-member__name">
				Mayank Singal
			  </div>
			  <div class="team-member__position">
				Marketing Manager
			  </div>
	  		  <a title="Mayank Singal&#39;s LinkedIn" class="team-member__social" target="_blank" href="http://linkedin.com/in/davidstump"><i class="fa fa-linkedin"></i></a>        
	  		</div>
		  </div>
		</div>

    	<div class="team-member b-lazy" data-src="https://cdn.littlelines.com/assets/team/Dustin-d4777f506ff7b8280ee947acaaa356bdf075ad4ea22e7f981f7f7d494fa139b3.jpg">
		  <div class="team-member__wrapper">
			<div class="team-member__content">
			  <div class="team-member__name">
				Mayank Bhardwaj
			  </div>
			  <div class="team-member__position">
				Advertise Purchasing Manager
			  </div>          
			  <a title="Mayank Bhardwaj&#39;s LinkedIn" class="team-member__social" target="_blank" href="https://www.linkedin.com/in/sunnysharma03/"><i class="fa fa-linkedin"></i></a>   
			</div>
		  </div>
    	</div>

    	<div class="team-member b-lazy" data-src="images/paritoshh.jpg">
		  <div class="team-member__wrapper">
			<div class="team-member__content">
			  <div class="team-member__name">
				Paritosh
			  </div>
			  <div class="team-member__position">
				Graphic designer
			  </div>
			  <a title="Paritosh&#39;s LinkedIn" class="team-member__social" target="_blank" href="https://github.com/jesseherrick"><i class="fa fa-linkedin"></i></a>       
	  		</div>
		  </div>
		</div>

		<div class="team-member b-lazy" data-src="images/sachin_sharma.jpg">
		  <div class="team-member__wrapper">
			<div class="team-member__content">
			  <div class="team-member__name">
				Sachin Sharma
			  </div>
			  <div class="team-member__position">
				Senior Developer / Lead Developer
			  </div>
			  <a title="Sachin Sharma&#39;s Github" class="team-member__social" target="_blank" href="https://github.com/sunnysharma03"><i class="fa fa-github"></i></a>          
			  <a title="Sachin Sharma&#39;s StackOverflow" class="team-member__social" target="_blank" href="https://stackoverflow.com/users/6601667/sachin-sharma"><i class="fa fa-stack-overflow"></i></a>          
			  <a title="Sachin Sharma&#39;s LinkedIn" class="team-member__social" target="_blank" href="https://www.linkedin.com/in/sunnysharma03/"><i class="fa fa-linkedin"></i></a>   
      		  <a title="Sachin Sharma&#39;s Website" class="team-member__social" target="_blank" href="#"><i class="fa fa-chrome"></i></a>  
	      	</div>
		  </div>
		</div>

		<div class="team-member b-lazy" data-src="https://cdn.littlelines.com/assets/team/Josh-1ec02f4b623ddae9b6be72d57ee46140c2a8a373c0d06b3bab6e4abc5cc4b964.jpg">
		  <div class="team-member__wrapper">
			<div class="team-member__content">
			  <div class="team-member__name">
				Raman Mehta
			  </div>
			  <div class="team-member__position">
				Lead Analyst
			  </div>
			  <a title="Raman Mehta&#39; LinkedIn" class="team-member__social" target="_blank" href="https://www.linkedin.com/in/joshsears/"><i class="fa fa-linkedin"></i></a>        
			 </div>
		  </div>
		</div>

		<div class="team-member team-member--filler">
		  <div class="team-member__wrapper team-member__wrapper--static">
			<div class="team-member__content team-member__content--static">
			  <div class="team-member__contact-text">
				We’re always looking for talented individuals to
				join our expert team of designers, developers, and
				project managers to deliver top quality applications
				to successful and aspiring companies.
			  </div>
			  <a class="team-member__contact-link" href="/contact">
				<span class="color--accent font-weight--bold space-right--small">//</span> Drop us a line if this sounds like you</a>        
	  		</div>
		  </div>
		</div>

	</div>
	
	</section>
	<!--about team ends-->
	
	<div class="section section--with-border">
    <div class="content content--tall text-align--center">
      <div class="heading">
        <h2 class="heading__title heading__title--small color--secondary">
          "Each member of our team is here
          not only because they're ridiculously talented but because they
          love what they do."
        </h2>
      </div>
      <p class="space-top--large">
        Alondra cooper <span class="color--accent font-weight--bold space--small">//</span> CEO
      </p>
    </div>
  </div>
	
<section>

  <img class="image image--full-width image--fluid" src="https://cdn.littlelines.com/assets/about/office-collage-dc2afb0ae75e33e38910b1105e032f8ff81dc52fe47166eae49db4bf9a855b48.jpg" alt="Office collage" />

</section>

	<section class="section section---with-border text-align--center">
	  <div class="content content--tall">
		<div class="heading">
		  <h2 class="heading__title">Have a project we can help with?</h2>
		</div>
		<a class="button button--large text-transform--uppercase" href="/contact.html">Get Started</a>
	  </div>
	</section>
	
	
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>


</body>

</html>