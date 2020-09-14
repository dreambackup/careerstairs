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
<title>CareerStairs | Freelance</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="CareerStairs is no.1 job &amp; training website for students in India with a lot of jobs Engineering, MBA, media, law, arts &amp; other streams.
" />


</head>

<body>
<!-- Header
================================================== -->
<header class="header header--primary">
  <nav class="nav nav--primary" id="nav">
    <ul>
      <li class="nav__item nav--primary__item nav--primary__item--logo">
        <a title="careerstairs" data-instant="" class="nav__link nav--primary__link nav--primary__link--logo" href="index.php"><img src="images/logo.png" alt="Career Stairs" /></a>
      </li>
      <li class="nav__item nav--primary__item nav--primary__item--toggle">
        <button class="hamburger hamburger--squeeze nav__link nav--primary__link nav--primary__link--toggle" @click="toggle">
          <span class="hamburger-box">
            <span class="hamburger-inner">Toggle Menu</span>
          </span>
        </button>
      </li>
      <li>
        <ul class="nav--primary__right nav--primary__collapse">
				
         <?php
			if(isset($_SESSION['userData']) && !empty($_SESSION['userData'])){
				echo '<li class="nav__item nav--primary__item">
							<a data-instant="" class="nav--primary__button--primary" @click="close" href="login.php"><i class="fa fa-chevron-right"></i>&nbsp; Dashboard</a>
						  </li>';
			}
				else{
					echo '<li class="nav__item nav--primary__item">
							<a data-instant="" class="nav__link nav--primary__button nav--primary__button--primary" @click="close" href="login.php"><i class="fa fa-lock"></i> &nbsp; Log In</a>
						  </li>';
				}
		 ?>
        </ul>
      </li>
    </ul>
  </nav>
</header>

<!-- Titlebar
================================================== -->
 <link rel="stylesheet" media="all" href="https://cdn.littlelines.com/assets/application-9221995a61a6387726512f858bbfe32d0649b9b416b698422b35e281383d9279.css" data-turbolinks-track="true" />
 
    <script src="https://cdn.littlelines.com/assets/application-ea8d15950d0ba797d2be9eedb35c9b738dc53c997a80e43aff0612d551a4b70b.js" data-turbolinks-track="true" async="async"></script>
		
<main class="main">
	<div class="hero hero--home" data-vide-bg="mp4: https://cdn.littlelines.com/assets/home_smaller-06c111faa0afd90211b64f3e1ddfcfcb5b1d4f909f8a0df3678635f681b8fc1a.mp4, ogv: https://cdn.littlelines.com/assets/home_smaller-3dea4554bc5ceeee0b730d58df0bb6d014758ad0e4ebcd0a40b0848f0f1f05b2.ogv, webm: https://cdn.littlelines.com/assets/home_smaller-f66d027aae2e888c35dfc94ebc608900a19f8ae3d8d4da0fe5b22d20ab5e1006.webm, poster: https://cdn.littlelines.com/assets/home_smaller-b03b454a036e32975aece9848aeb2cf2641d9c88ff4a89a531987d1ef9825fe6.jpg" data-vide-options="posterType: jpg">
		<div class="hero__content">
			<h1 class="heading__title heading__title--large" style="color: white">
				From pixels to programming,<br class="hero__title-break"> we make it work
				<span class="color--subaccent">&amp;</span>
				we make it look good.
		  	</h1>
		  	<h3 class="heading__subtitle heading__subtitle--large color--secondary" style="color: white">
				We never settle for anything less than the best looking sites on the web.
		  	</h3>
	  	</div>
	</div>
	
	<section>
	  <div class="section section--with-border">
		<div class="content content--tall text-align--center">
		  <div class="heading">
			<h2 class="heading__title">We design and develop. And we do both well.</h2>
		  </div>
		  <p class="p">
			We're the little lines that connect the dots. If you're not quite
			sure how your website can get the response you want, leave it to
			us. We've worked with clients of all shapes and sizes, hand-crafting
			applications that consistently turn ideas into profitable and effective
			businesses. Office in Haryana, Delhi, our expert team of designers,
			developers, and project managers offer all the
			<a class="link" href="service.php">services</a>
			you need to start growing your business today.
		  </p>
		</div>
	  </div>
	
	<div class="section section--equalizer section--without-padding">
    <div class="section section--with-border section--half-width">
      <div class="content service">
        <div class="service__icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 890.77 875.89" class="svg svg--service svg--home"><title>strategy</title><g data-name="Ready Icons"><g id="strategy"><path class="svg--secondary" d="M260.05,592.78a33.18,33.18,0,0,1-46.92-.5,33.53,33.53,0,0,1-4-4.9,33.07,33.07,0,0,0-4,7.92,41.1,41.1,0,0,0,31.27,14.95h.45a40.9,40.9,0,0,0,28.79-11.75c.83-.81,1.61-1.65,2.36-2.52a32.79,32.79,0,0,0-3.87-8A33.52,33.52,0,0,1,260.05,592.78Z"></path><path class="svg--secondary" d="M294.55,486.57l-5.66-.06-2.23,2.18-.11,0v.08l-8.89,8.7a81.79,81.79,0,0,0-17.37-7.42l.15-13.72c0-.07,0-.14,0-.21l0-1.8-4-4-37.17-.4-4,4-.17,15.72a81.8,81.8,0,0,0-17.54,7l-11-11.24-5.66-.06-.82.83-24.74,25-1.2,2.81-.37,31.56-11.64-.12-4,4-.4,37.17,4-4,4,0,.31-29.18,7.84.08,0-4.18a4,4,0,0,0,7.81-1.12l.38-32.52,18.48-18.09-.29,27.52a4,4,0,0,0,4,4h0a4,4,0,0,0,4-4l.28-26.37,5.41,5.53,4.9.64A73.86,73.86,0,0,1,215,498l-.15,13.09h0l4-4,4,0,.33-29.17,29.16.31-.16,14.8h0l-.16,14.36,4,0,4,4,.15-13.09a73.83,73.83,0,0,1,15.95,7.46l4.91-.54,5.37-5.26-.27,24.78a4,4,0,0,0,4,4h0a4,4,0,0,0,4-4l.29-27.36,1.66,1.53,16.44,16.79-.38,32.51a4,4,0,0,0,8,.09l.4-34.17-1.14-2.84Z"></path><path class="svg--secondary" d="M607.44,557.36h-.56a51.16,51.16,0,0,1-36.25-15.47,51.93,51.93,0,0,1-6.86-8.71,51.39,51.39,0,0,0-4.28,7.93,60.35,60.35,0,0,0,5.42,6.38,59.11,59.11,0,0,0,41.88,17.87h.64a59.45,59.45,0,0,0,47.17-23.3,50.93,50.93,0,0,0-4.11-8A51.49,51.49,0,0,1,607.44,557.36Z"></path><path class="svg--secondary" d="M749.51,475.63l-17.89-.19.52-48.86L731,423.74l-38.82-39.66-5.66-.06-17.84,17.47a120.16,120.16,0,0,0-28.25-12.06l.27-25-4-4-55.49-.59-4,4-.27,25a120.16,120.16,0,0,0-28.5,11.45L531,382.36l-5.66-.06h0l-39.66,38.82-1.2,2.82-.52,48.85L466,472.6l-4,4-.59,55.49h0l4-4,4,0,.51-47.49,15.06.16v-.87h0l0-3.31,6.9-6.76.47-44.18L524,394.78,523.54,439l1.18-1.16,5.66.06,1.16,1.18.47-44.18L544.89,408l4.9.64a112.15,112.15,0,0,1,27.05-11.58l-.24,22.21,4-4,4,0,.25-23.43h0l.26-24.07,47.49.51-.26,24.07h0l-.25,23.43,4,0,4,4,.24-22.2a112.19,112.19,0,0,1,26.8,12.16l4.91-.54,13.16-12.88-.47,44.18,1.18-1.16,5.66.06,5,5.12-3.85-3.93.47-44.18,30.91,31.57-.47,44.18,6.76,6.9,0,4.19,15.07.16-.51,47.49,4,0,4,4,.59-55.49Z"></path><polygon class="svg--secondary" points="387.44 232.55 339.95 232.04 339.95 232.04 387.44 232.55 387.44 232.55"></polygon><polygon class="svg--secondary" points="477.27 290.65 461.04 274.07 477.27 290.65 477.27 290.65"></polygon><polygon class="svg--secondary" points="282.84 254.99 266.27 271.21 282.84 254.99 282.84 254.99"></polygon><path class="svg--secondary" d="M448.59,205.25l30.91,31.57L479,281l6.76,6.9,0,3.31v1h15.07l-.51,47.49,4,0,4,4,.59-55.49-4-4L487,284.11l.52-48.85-1.14-2.84-38.82-39.66-5.66-.06-17.84,17.47a120.16,120.16,0,0,0-28.23-12.05l.29-26h-1l-3-3-55.49-.59-3,3h-1v1l0,0-.27,25a120.15,120.15,0,0,0-28.5,11.45L286.35,191,280.7,191,241,229.8l-1.2,2.82-.52,48.85-17.89-.19-4,4-.59,55.49,4-4,4,0,.51-47.49H240.4v-.71h0l0-3.31,12.48-12.22-5.58,5.46.47-44.18,31.57-30.91-.47,44.18,1.18-1.16,5.66.06,1.16,1.18.47-44.18,12.88,13.16,4.9.64a112.18,112.18,0,0,1,27.07-11.59L332,228h0l4-4,4,0,.54-47.49,47.46.51-.26,24.07,0,0-.26,23.41,4,0,4,4,.25-22.2a112.17,112.17,0,0,1,26.79,12.15l4.92-.54,13.16-12.88-.47,44.18,1.18-1.16,5.66.06,5,5.12-3.85-3.93Z"></path><path class="svg--secondary" d="M398.84,351.34a51.15,51.15,0,0,1-36,14.7h-.56a51.49,51.49,0,0,1-43.11-24.24,50.93,50.93,0,0,0-4.28,7.93A59.44,59.44,0,0,0,362.18,374h.65a59.1,59.1,0,0,0,41.6-17A60.35,60.35,0,0,0,410,350.8a51.39,51.39,0,0,0-4.1-8A51.93,51.93,0,0,1,398.84,351.34Z"></path><polygon class="svg--secondary" points="332.03 547.5 317.25 547.34 320.16 550.32 320.11 555.38 327.94 555.46 327.63 584.63 331.63 584.68 335.59 588.72 335.99 551.54 332.03 547.5"></polygon><path d="M748.92,531.12l-25-.27a120.16,120.16,0,0,0-11.45-28.5l17.84-17.47.06-5.66-38.82-39.66-5.66-.06L668.08,457a120.13,120.13,0,0,0-28.25-12.06l.27-25-4-4-55.49-.59-4,4-.27,25a120.14,120.14,0,0,0-28.5,11.45l-17.47-17.84-5.66-.06-39.66,38.82-.06,5.66,17.47,17.84a120.15,120.15,0,0,0-12.06,28.25l-25-.27-4,4-.59,55.49,4,4,25,.27a120.15,120.15,0,0,0,11.45,28.5l-17.84,17.47-.06,5.66,38.82,39.66,5.66.06,17.84-17.47a120.14,120.14,0,0,0,28.25,12.06l-.27,25,4,4,55.49.59,4-4,.27-25A120.14,120.14,0,0,0,665.84,667l17.47,17.84,5.66.06,39.66-38.82.06-5.66L711.22,622.6a120.16,120.16,0,0,0,12.06-28.25l25,.27,4-4,.59-55.49Zm-4.59,55.45-24.07-.26-3.92,3a112.19,112.19,0,0,1-13.54,31.73l.54,4.92,16.84,17.2L686.23,676.4l-16.84-17.2-4.9-.64a112.22,112.22,0,0,1-32,12.86l-3.1,3.85-.26,24.07-47.49-.51.26-24.07-3-3.92a112.2,112.2,0,0,1-31.73-13.54l-4.91.54L525,674.68,491.8,640.74,509,623.9l.64-4.9a112.21,112.21,0,0,1-12.86-32l-3.85-3.1-24.07-.26.51-47.49,24.07.26,3.92-3a112.22,112.22,0,0,1,13.54-31.73l-.54-4.92-16.84-17.2,33.94-33.23,16.84,17.2,4.9.64a112.19,112.19,0,0,1,32-12.86l3.1-3.85.26-24.07,47.5.51-.26,24.07,3,3.92a112.2,112.2,0,0,1,31.73,13.54l4.92-.54L688.66,448,721.89,482l-17.2,16.84-.64,4.9a112.22,112.22,0,0,1,12.86,32l3.85,3.1,24.07.26Z"></path><path d="M607.48,501.86h-.64a59.5,59.5,0,0,0-.63,119h.65a59.5,59.5,0,0,0,.62-119Zm35.39,96.29a51.15,51.15,0,0,1-36,14.7h-.56a51.5,51.5,0,0,1,.54-103h.56a51.5,51.5,0,0,1,35.47,88.29Z"></path><path d="M362.86,310.54a59.5,59.5,0,0,0-1.27,119h.64a59.5,59.5,0,0,0,.63-119Zm-.63,111h-.56a51.5,51.5,0,0,1,.53-103h.56a51.5,51.5,0,0,1-.54,103Z"></path><path d="M484.07,449.11,466.6,431.27A120.2,120.2,0,0,0,478.66,403l25,.27,4-4,.59-55.49-4-4-25-.27A120.15,120.15,0,0,0,467.88,311l17.84-17.47.06-5.66L447,248.25l-5.66-.06-17.84,17.47a120.14,120.14,0,0,0-28.25-12.06l.27-25-4-4L336,224l-4,4-.27,25a120.16,120.16,0,0,0-28.5,11.45l-17.47-17.84-5.66-.06-39.66,38.82-.06,5.66,17.47,17.84A120.16,120.16,0,0,0,245.79,337l-25-.27-4,4-.59,55.49,4,4,25,.27A120.14,120.14,0,0,0,256.57,429L238.72,446.5l-.06,5.66,38.82,39.66,5.66.06L301,474.4a120.14,120.14,0,0,0,28.25,12.06l-.27,25,4,4,55.49.59,4-4,.27-25a120.15,120.15,0,0,0,28.5-11.45l17.47,17.84,5.66.06L484,454.77Zm-42.46,36-16.84-17.2-4.9-.64a112.21,112.21,0,0,1-32,12.86l-3.1,3.85L384.5,508,337,507.51l.26-24.07-3-3.92A112.2,112.2,0,0,1,302.52,466l-4.92.54-17.2,16.84-33.23-33.94,17.2-16.84.64-4.9a112.22,112.22,0,0,1-12.86-32l-3.85-3.1-24.07-.26.51-47.49,24.07.26,3.92-3a112.19,112.19,0,0,1,13.54-31.73l-.54-4.92-16.84-17.2L282.84,255l16.84,17.2,4.9.64a112.2,112.2,0,0,1,32-12.86l3.1-3.85.26-24.07,47.49.51-.26,24.07,3,3.92a112.21,112.21,0,0,1,31.73,13.54l4.92-.54L444,256.71l33.23,33.94-17.2,16.84-.64,4.9a112.21,112.21,0,0,1,12.86,32l3.85,3.1,24.07.26-.51,47.49L475.64,395l-3.92,3a112.22,112.22,0,0,1-13.54,31.73l.54,4.92,16.84,17.2Z"></path><path d="M315.91,584.51a81.77,81.77,0,0,0-7-17.54l11.24-11,.06-5.66-26-26.57-5.66-.06-11.23,11a81.81,81.81,0,0,0-17.38-7.42l.17-15.72-4-4-37.17-.4-4,4-.17,15.72a81.78,81.78,0,0,0-17.54,7l-11-11.24-5.66-.06-26.57,26-.06,5.66,11,11.24a81.79,81.79,0,0,0-7.42,17.38l-15.72-.17-4,4-.4,37.17,4,4L157,628a81.79,81.79,0,0,0,7,17.54l-11.24,11-.06,5.66,26,26.57,5.66.06,11.24-11A81.8,81.8,0,0,0,213,685.24L212.85,701l4,4,37.17.4,4-4,.17-15.72a81.77,81.77,0,0,0,17.54-7l11,11.24,5.66.06,26.57-26,.06-5.66-11-11.24a81.79,81.79,0,0,0,7.42-17.38l15.72.17,4-4,.4-37.17-4-4Zm11.32,37.3-14.8-.16-3.92,3a73.85,73.85,0,0,1-8.91,20.88l.54,4.92L310.49,661l-20.85,20.41-10.36-10.58-4.9-.64a73.86,73.86,0,0,1-21.07,8.47l-3.1,3.85-.16,14.8L220.89,697l.16-14.8-3-3.92a73.85,73.85,0,0,1-20.88-8.91l-4.92.54L181.66,680.3l-20.41-20.85,10.58-10.36.64-4.9A73.84,73.84,0,0,1,164,623.12l-3.85-3.1-14.8-.16.31-29.18,14.8.16,3.92-3A73.85,73.85,0,0,1,173.29,567l-.54-4.91L162.4,551.46l20.85-20.41,10.36,10.58,4.9.64a73.86,73.86,0,0,1,21.07-8.47l3.1-3.85.16-14.8,29.18.31-.16,14.8,3,3.92a73.84,73.84,0,0,1,20.88,8.91l4.92-.54,10.58-10.36,20.41,20.85-10.58,10.36-.64,4.9a73.86,73.86,0,0,1,8.47,21.07l3.85,3.1,14.8.16Z"></path><path d="M236.88,565.08a41.18,41.18,0,1,0-.88,82.35h.45a41.18,41.18,0,0,0,.43-82.35ZM259.65,630a33.18,33.18,0,1,1,10-23.35A32.93,32.93,0,0,1,259.65,630Z"></path></g></g></svg>

        </div>
        <div class="service__description">
          <h5 class="service__heading">User Experience</h5>
          <p class="service__body">
            We design applications for the people using them. This means paying close attention to the goals for each user group, and making sure there is a clear path to get there.
          </p>
        </div>
      </div>
    </div>
    <div class="section section--with-border section--half-width">
      <div class="content service">
        <div class="service__icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 890.77 875.89" class="svg svg--service svg--home"><title>design</title><g data-name="Ready Icons"><g id="design"><path class="svg--secondary" d="M638.58,206l-9.34,1.59V196.91L624.57,193l-432,73.5-3.33,3.94V628.89l4.64,3.95,9.37-1.53V641.9l4.64,3.95,10.37-1.69v-8.11l-7,1.14V286.8l424-72.14v8.45l8-1.36V209.92Zm-432,73.5-3.33,3.94V623.2l-6,1V273.78l424-72.13v7.28Z"></path><path class="svg--secondary" d="M590.34,451.58V439.92L585.67,436,468.53,455.91l-3.33,3.94v97.21l4.64,3.95,9.37-1.53v11.59l4.64,3.95,14.24-2.32v-8.11l-10.88,1.78V477.24l109.14-18.57V471.1l8-1.36V453.93L599.68,450Zm-8,1.36-99.8,17-3.33,3.94v77.51l-6,1V463.23l109.14-18.57Z"></path><path class="svg--secondary" d="M474.4,415.26l4.64,3.95,14.23-2.32v-8.11l-10.88,1.78V321.43l109.14-18.57v12.43l8-1.36V298.12l-4.67-3.94-9.34,1.59V284.11l-4.67-3.94L463.72,300.09,460.39,304v97.21L465,405.2l9.37-1.53Zm-6-18.72V307.41l109.14-18.57v8.28l-99.8,17L474.4,318v77.51Z"></path><path class="svg--secondary" d="M394.37,321.76V310.11l-4.67-3.94L272.56,326.09,269.23,330V495.3l4.64,3.95,9.37-1.53v11.59l4.64,3.95,14.23-2.32v-8.11l-10.88,1.78V347.43l109.14-18.57v12.43l8-1.36V324.12l-4.67-3.94Zm-107.8,18.34L283.24,344V489.62l-6,1V333.41l109.14-18.57v8.28Z"></path><path d="M658.26,585.42V223.93L653.59,220l-432,73.5-3.33,3.94V655.91l4.64,3.95,432-70.5Zm-8-3.4-424,69.19V300.81l424-72.13Z"></path><path d="M275.09,559.67a4,4,0,0,0,.64-.05l108-17.47a4,4,0,1,0-1.28-7.9l-108,17.47a4,4,0,0,0,.63,7.95Z"></path><path d="M275.09,578.79a4,4,0,0,0,.64-.05l118.14-19.12a4,4,0,1,0-1.28-7.9L274.46,570.84a4,4,0,0,0,.63,7.95Z"></path><path d="M275.09,597.91a4.09,4.09,0,0,0,.65-.05l88.59-14.46a4,4,0,0,0-1.29-7.9L274.45,590a4,4,0,0,0,.64,7.95Z"></path><path d="M701.28,624.74a16.41,16.41,0,0,0-18.86-13.47l-4.5.75-21.14,3.53L455.13,649.17l-8.54,1.41-26,20.93L452,682.92h0l8.62-1.44h0l210.15-35,15.55-2.59,1.51-.25A16.41,16.41,0,0,0,701.28,624.74ZM450.15,669.38l-3.68,4.1-5.29-1.93a11,11,0,0,0-1.13-6.72l4.37-3.52,4.83,2.69a3.47,3.47,0,0,1,.9,5.39Zm2.51-11.49,0,0v0Zm2.7,16.16,0,0v0Zm.51-.64a10.41,10.41,0,0,0-2.52-15.09l204.83-34.15,2.52,15.09Zm213.48-35.6-2.52-15.09,6.9-1.15,2.52,15.09Zm17-2.84-1.51.25-2.52-15.09,1.51-.25A7.65,7.65,0,1,1,686.37,635Z"></path><path d="M498.09,491.2v97.21l4.64,3.95,117.14-19.12,3.36-3.95v-98l-4.67-3.94L501.42,487.26Zm8,3.38L615.23,476v89.89L506.09,583.7Z"></path><path d="M423.91,511.48l3.36-3.95V341.45l-4.67-3.94L305.45,357.44l-3.33,3.94V526.65l4.64,3.95ZM310.12,364.76l109.14-18.57V504.13L310.12,521.94Z"></path><path d="M615.07,417.43l3.36-3.95v-98l-4.67-3.94L496.61,331.44l-3.33,3.94v97.21l4.64,3.95Zm-106.18,9.22,47.23-47.23,47.63,31.75ZM610.42,406l-48.54-32.36,48.54-48.54Zm-7.71-84.5L555.1,369.12l-47.22-31.48ZM501.28,342.86l48,32-48,48Z"></path></g></g></svg>

        </div>
        <div class="service__description">
          <h5 class="service__heading">Design</h5>
          <p class="service__body">
            Design is more than just pretty pixels. We believe that investing in great design is critical for the success of any product.
          </p>
        </div>
      </div>
    </div>
    <div class="section section--with-border section--half-width">
      <div class="content service">
        <div class="service__icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 890.77 875.89" class="svg svg--service svg--home"><title>ruby</title><g data-name="Ready Icons"><g id="ruby"><path class="svg--secondary" d="M619.42,436.39,631,585.81,552.4,504.32q-3.07,2.59-6.16,5.13l78.33,81.16-159-27q-6,3.18-11.94,6.09l133,22.57,45.77.27,4.63-31L626.72,427.13Q623.16,431.78,619.42,436.39Z"></path><path class="svg--secondary" d="M549.31,496.46l-28.1-163.84,150.46-6.51q1.52-5.53,2.57-10.83l-132-87.95-1.8,8.42,124.06,82.67-143,6.19-1.08,5.05-1.32,2.21-5.35,4.55L541.3,497.09c-12.68-6-40.78-19.41-68.68-32.61-22-10.41-39.58-18.69-52.25-24.6-7.53-3.51-13.38-6.22-17.41-8l-1-.43-4.94,4.2-3.11.92-5-.66c-1.41,4-3.55,10.42-7.07,21.07-4.48,13.52-10.64,32.34-18.32,55.93-8.68,26.66-17.38,53.52-22.28,68.68L296.11,423.67,288,422.6l-1.08-2,48.72,170.27q5.26.46,10.9.44c18.32-56.72,44.07-135.88,50.22-153.51,16.75,7.46,89.75,42.05,142.39,67.13Q544.26,500.77,549.31,496.46Z"></path><path class="svg--secondary" d="M681.83,631.89l-13.17,13.7.68,4.54,6.08,0L688,637c-1.45-1.14-2.89-2.3-4.3-3.51C683.05,633,682.44,632.43,681.83,631.89Z"></path><path class="svg--secondary" d="M747.29,615.29l-2.88.38-7,24.45L735,632.83c-1.61-4.95-3.23-9.9-4.46-13.63l-.55-1.66-4.74.62-.12,0h0l-3.11-.92-4.81-4.09-.18.08c-3.49,1.63-8.11,3.81-12.73,6l-11.45,5.43,4.82-28.12L692.36,592l-.5-.83-.82-1.38h0l-.14-.66-.78-3.63-20.28,2.41,17.42-15.76-1.1-5.16c-1.93.06-3.72.13-5.34.2l-21,19,0,.1,0,.3a48.5,48.5,0,0,0,3.81,10.08l26.45-3.14-5.2,30.3c1.28,1.19,2.6,2.37,4,3.55l1.35,1.13-.09-.08c1.66,1.38,3.33,2.72,5,4,9.7-4.61,21.29-10.1,27.14-12.81,2.12,6.35,6.32,19.27,9.75,29.87.83.11,1.64.19,2.43.24h0c.65,0,1.28.05,1.91.05h.44q.67,0,1.3-.05l.71-.06.69-.08.85-.12.47-.09c.33-.06.65-.13,1-.21l.25-.07c.36-.1.71-.2,1-.32l.1,0h0l6.13-21.43C748.88,624.09,748.2,620,747.29,615.29Z"></path><path class="svg--secondary" d="M242.22,552c1.08-.92,2.14-1.85,3.19-2.79l-9.53-55.55,34.58,4.1q.55-3.65,1.24-7.91l-35.83-4.25-.77,3.61-.14.68h0l-1.32,2.21-5.35,4.55L237.42,550c-5.63-2.68-14-6.64-22.32-10.59-7.34-3.47-14.69-6.94-20.23-9.53l-3.62-1.69-4.85,4.12-3.11.92h0l-.12,0-4.77-.63c-.48,1.43-1.06,3.18-1.78,5.34-2,5.92-4.53,13.79-7.09,21.66-2.19,6.72-4.37,13.44-6.15,18.93l-14.24-49.77-3.22-.42q-1.16,6-2.05,11.07l13.78,48.14a36,36,0,0,0,3.92.55h.07a47.4,47.4,0,0,0,6.14.06l.92-.07C175,568.66,183,544,186.14,534.61c8.72,4,31.18,14.64,49.05,23.15Q238.73,555,242.22,552Z"></path><path class="svg--secondary" d="M274,476.17,247.1,451.86l-4-.12-1.31,6.12,30.59,27.67C272.88,482.59,273.41,479.46,274,476.17Z"></path><path class="svg--secondary" d="M272.39,581.93l-23.89-24.76-1.07.94q-2.53,2.16-5.08,4.2l23.57,24.42-47.26-8q-5.79,3.4-11.49,6.16l20.89,3.54,45.75.26,3.3-22.07a65.64,65.64,0,0,1-7.27-17.68Z"></path><path d="M758.53,634.95h-.08l0-.1h0c-.08-.94-.2-1.92-.37-2.91-.52-3.86-1.71-11.83-3.8-22.21L744,587.38l-1-1.37-24.53-20.78-1.77-.86-26.49-5.54-.11.11c-10.54.18-18.3.8-18.63.83h0c-6.79.35-12.26,2.75-15.84,6.94h0c-.34.4-.65.81-1,1.24l-.19.27q-.4.59-.76,1.2l-.06.1c-2.72,4.81-3.32,11-1.71,18.17l10,67.07,4,3.41,68.25-.4c.77,0,1.52.07,2.26.07h.5a31.85,31.85,0,0,0,4.42-.36l.16,0c.63-.1,1.24-.24,1.84-.38l.44-.1c.58-.15,1.15-.32,1.7-.51l.44-.15c.54-.19,1.05-.4,1.56-.63l.47-.22c.47-.23.93-.46,1.38-.72l.56-.34c.39-.25.78-.49,1.15-.77s.5-.4.75-.6.57-.45.83-.69a17.45,17.45,0,0,0,1.38-1.42l.07-.07h0C757.49,646.83,759,641.34,758.53,634.95ZM714,572l23.08,19.56,7.4,16L725.88,610l-27.3-23.21-4-18.91Zm-44.69,78.15-5.72-38.24a127.64,127.64,0,0,0,44.44,38ZM748,645.64a9.69,9.69,0,0,1-.79.82c-.19.18-.4.34-.61.5l-.25.21a10.85,10.85,0,0,1-.91.6l0,0q-.5.29-1,.54h0c-.34.16-.7.3-1.07.43l-.1,0c-.34.12-.69.22-1,.32l-.25.07c-.31.08-.63.15-1,.21l-.47.09-.85.12-.69.08-.71.06q-.64,0-1.3.05h-.44c-.62,0-1.26,0-1.91-.05h0a44.82,44.82,0,0,1-9-1.59c-11.67-3.2-24.66-10.57-36.56-20.74-16.6-14.19-26.28-29.36-29-40.79l0-.3-.06-.3a25.25,25.25,0,0,1-.67-7c0-.08,0-.16,0-.24s0-.4.06-.6.07-.52.11-.77c0-.1,0-.2,0-.29a13,13,0,0,1,.62-2.23l.05-.13c.12-.3.25-.59.39-.88l.09-.18c.14-.27.3-.53.46-.78l.1-.16a9.44,9.44,0,0,1,.65-.85h0c2.16-2.52,5.62-3.92,10.26-4.14l.13-.07v.06c.07,0,5.87-.47,14.08-.71l4.74,22.14.14.66h0l.82,1.38.5.83,29.7,25.24,3.11.92h0l.12,0,22-2.89c1.58,8.26,2.51,14.55,2.94,17.79l0,.13c.13.79.23,1.56.29,2.29v.07h0C750.89,639.87,750,643.25,748,645.64Z"></path><path d="M676.37,256.54l-.22-.42q-.39-.72-.79-1.42c-.22-.38-.44-.76-.67-1.14s-.41-.69-.62-1q-.69-1.1-1.42-2.17l-.35-.5q-.67-1-1.38-1.89l-.33-.44c-.58-.75-1.18-1.5-1.8-2.22l-.1-.11-2.5-2.93-.1.09c-12.61-13-30.73-20.1-53.93-21.23h0c-.32,0-31.39-2.53-72.87-3.32l-3-.05H536c-.1,0-.07,0,0,0l-1.35.34-94.68,24.09-1.62.84L320.89,343.74l-1,1.29L285.2,416.3c-2.18,10.79-4.15,21-5.92,30.37a51.46,51.46,0,0,0-11-1.71h0c-.13,0-12.5-1-28.9-1.3l-.23-.23L197,452.25l-1.77.86-39,33.05-1,1.37-16,34.63.12.22-.4.17c-3.33,16.48-5.2,29.1-6,35.21-.26,1.52-.45,3-.56,4.42l.06.2h-.07c-.62,7.87.82,14.8,4.18,20.29l-.25.21,2.6,3,.2.22c.28.32.57.64.86.95l.38.38c.26.26.53.52.8.77l.36.32q.46.4.93.78l.28.22q.57.45,1.17.86l.1.07a28.92,28.92,0,0,0,6.09,3.17l.14.05q.7.26,1.42.5l.44.14,1.1.32.75.2.73.18,1.13.25.12,0a47.63,47.63,0,0,0,9.38.89c1.22,0,2.48,0,3.75-.13l108.26.63,4-3.41,2.5-17.67c.59.67,1.19,1.34,1.81,2,.33.34.68.67,1,1,.56.55,1.12,1.1,1.7,1.63.35.32.72.63,1.08.95.6.52,1.2,1,1.82,1.53l1.09.86q1,.75,2,1.47l1.08.76c.71.48,1.44.95,2.18,1.41l1.07.67c.77.46,1.57.9,2.37,1.33.35.19.69.39,1.05.58.85.44,1.73.86,2.61,1.27q1.77.83,3.61,1.57l.52.22c1.11.44,2.24.85,3.38,1.24l.08,0A104.32,104.32,0,0,0,346,599.3q4.69,0,9.61-.32l280.23,1.62,4-3.41L681,321.62C687,295.89,685.42,273.69,676.37,256.54ZM326.73,349.27l116.1-99.57,90.88-23.12.43.48-21.26,99.59L393.24,428.34l-98.59-13.19ZM162.08,491.69l37.55-31.82,35.12-7.35-7.34,34.4L182.58,525l-33.82-4.53Zm5.68,96.42a47.4,47.4,0,0,1-6.14-.06h-.07c-7.4-.6-13-3.07-16.65-7.34s-5.23-10.25-4.64-17.71h0v-.12c.1-1.24.27-2.53.49-3.84l0-.13c.74-5.46,2.34-16.34,5.13-30.61l37.25,4.89.12,0h0l3.11-.92,47.22-40.14,1.32-2.21h0l.14-.68,8-37.5c14.14.36,24.36,1.18,24.48,1.19v-.05l.13.06a42,42,0,0,1,10.07,1.63c-4.37,23.81-7.29,42.11-8.71,52.64-.64,3.76-1.11,7.47-1.41,11l0,.29,0,.15h0c-.24,3-.34,5.87-.35,8.7-6.92,8.44-15.91,16.81-25.08,24.64C216.61,573.91,188.14,587,167.76,588.11Zm106,.58-74.13-.43c15.41-6.42,31.91-16.62,47.75-30.15,7.22-6.17,14.65-12.58,20.56-19.07a69.48,69.48,0,0,0,9,27.41Zm358.66,3.88-234-1.36c50.32-14.19,105.74-45.68,156.27-88.86S645.1,409.27,667,361.73Zm40.82-273-.06.3-.09.58a201.31,201.31,0,0,1-12.73,36.44c-21.22,47-60.6,96.47-110.87,139.42S444.2,570.39,394.51,584A200,200,0,0,1,355.69,591h-1.06a129.85,129.85,0,0,1-18-.1h-.2c-13-1.05-24.09-4.22-33.15-9.44l-.16-.09c-.79-.46-1.56-.93-2.31-1.42l-.49-.32c-.65-.43-1.28-.87-1.91-1.32l-.64-.47c-.58-.43-1.14-.87-1.7-1.32l-.67-.54c-.56-.47-1.1-1-1.64-1.44l-.57-.51q-.93-.87-1.81-1.78l-.27-.27q-1-1.08-2-2.22c-10.61-12.42-15.14-29.37-13.48-50.38v0l0-.32c.28-3.38.73-6.9,1.34-10.48l0-.14c2-14.91,6.52-45.37,14.46-85.3l102.36,13.44.12,0h0l3.11-.92,122-103.72,1.32-2.21h0l.15-.69,21.88-102.15,0-.14.17-.8c39.48.86,68.62,3.2,68.93,3.23V229l.14.07c22.63,1.08,39.78,8.25,51,21.29l.09.11c.56.65,1.09,1.32,1.61,2l.31.4c.41.54.81,1.1,1.2,1.65l.36.51c.41.6.81,1.22,1.19,1.84.26.42.51.84.76,1.27l.32.56C677.19,274.19,678.87,295,673.27,319.54Z"></path></g></g></svg>

        </div>
        <div class="service__description">
          <h5 class="service__heading">Web Applications</h5>
          <p class="service__body">
            Our developer have put in nearly a decade of crafting web applications. Our experience enables us to build your product the right way.
          </p>
        </div>
      </div>
    </div>
    <div class="section section--with-border section--half-width">
      <div class="content service">
        <div class="service__icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 890.77 875.89" class="svg svg--service svg--home"><title>elixir</title><g data-name="Ready Icons"><g id="elixir"><path d="M699.48,506.61A142.65,142.65,0,0,0,587.32,367.39V281.65a27.34,27.34,0,0,0-1.93-10.08h17.43a13.95,13.95,0,0,0,0-27.89H507a13.95,13.95,0,1,0,0,27.89h17.43a27.34,27.34,0,0,0-1.92,10.08v86.71A142.51,142.51,0,0,0,414.41,506.61c0,78.59,63.94,142.53,142.53,142.53S699.48,585.2,699.48,506.61Zm-277.07,0a134.51,134.51,0,0,1,105-131.18l3.13-3.9V281.65a19.79,19.79,0,0,1,3.9-11.72l-3.23-6.36H507a5.95,5.95,0,1,1,0-11.89h95.78a5.95,5.95,0,0,1,0,11.89H578.65l-3.23,6.36a19.78,19.78,0,0,1,3.9,11.72v89l3.24,3.93a134.62,134.62,0,0,1,108.91,132c0,74.18-60.35,134.53-134.54,134.53S422.41,580.79,422.41,506.61Z"></path><path d="M525.31,692.81h0Z"></path><path d="M676.63,660.45a7.55,7.55,0,0,0-8.69-6.17l-33.06,5.6-1.54-9.08-14.87,2.52L620,662.4l-97.05,16.45-.16,0h0l-1,.17-1.28.45a27.62,27.62,0,0,1-8.39,2.68,31,31,0,0,1-7,.44,11.71,11.71,0,0,0-1.77-.2H501.9l-1,.18c-5.71,1-13.28,6.67-12.16,13.3,1,5.8,8,8.72,13.62,8.72a14,14,0,0,0,2.26-.17l1-.17,1.27-.45.06,0a11.82,11.82,0,0,0,1.61-.77,30.84,30.84,0,0,1,6.74-1.89,27.66,27.66,0,0,1,8.81-.23h1.36l1-.17.17,0,97.05-16.45,1.54,9.08,14.87-2.52-1.54-9.08,33.06-5.6a7.55,7.55,0,0,0,6.17-8.69ZM525.47,692.79l-.14,0-.12.16h0l0-.13-.38.07a36.45,36.45,0,0,0-10.81.34,38.63,38.63,0,0,0-8.82,2.54l-.5.26a3.62,3.62,0,0,1-.68.32l-.24.1-.45.08c-2.74.45-6.31-1.11-6.67-2,0-1,2.9-3.64,5.62-4.12l.46-.08.26,0a3.65,3.65,0,0,1,.75.08l.56.08a38.47,38.47,0,0,0,9.16-.51,36.43,36.43,0,0,0,10.32-3.24l.38-.06,0-.13,0,0,.14.1v0h0l.16,0,96.85-16.41,1,6.08Z"></path><path d="M390.16,432.85h0a21.45,21.45,0,0,0-6.4-1.92,157.11,157.11,0,0,0-17.18-2.63c-16.5-1.8-38.4-2.79-61.68-2.79-40.13,0-74,2.89-85,7.22-16.63,2.23-28.36,4.49-28,12.32a8.44,8.44,0,0,0-.63,3.15l.2,1.24,17,51.93a8.48,8.48,0,0,0,4.32,6.68l1.9,133.47a19.68,19.68,0,0,0,18.39,19.65c13.95,3.08,41.14,5,71.13,5s57.2-1.91,71.14-5a19.69,19.69,0,0,0,18.35-19.57L400,448.68v-.13a17,17,0,0,0-5.53-12.76A10.13,10.13,0,0,0,390.16,432.85Zm-168.69,7.74,1.05-.29c7.85-3.38,38.66-6.79,82.38-6.79,37.89,0,65.11,2.58,77,5.16v0L383,439l-1,.24-.32.07-1.06.22-.49.1-1,.19-.55.1-1.2.21-.46.08-1.78.28-.26,0-1.63.24-.66.09-1.39.19-.74.09-1.51.19-.68.08q-2.23.26-4.68.51l-.76.07-1.78.17-.89.08-1.83.16-.87.08-2.36.19-.41,0-2.88.21-.82.06-2.19.15-1,.07-2.12.13-1.06.06-2.48.14-.76,0-3.31.16-.81,0-2.64.11-1.17,0L331,444l-1.24,0-2.66.08-1,0-3.74.09h-.65l-3.18.06-1.32,0-2.65,0-1.45,0-2.76,0h-5.44c-13.34,0-44.07-.3-54.24-.78h-.49l-2.8.21-.26,0-2.41.17-.43,0-2.27.16-.3,0-2.45.16h0c-20.24,1.31-32.89,1.37-37.77.21C203.88,443.63,209.32,442.21,221.47,440.59ZM390.74,488.2c-3.18.91-11,2.35-29.54,2.85l-4,.11.22,8,4-.11A214,214,0,0,0,387,497.14c1.15-.18,2.31-.39,3.45-.63l-.37,11.16c-2.46.73-8,1.83-20,2.51l-4,.23.45,8,4-.23A126,126,0,0,0,389.83,516l-.38,11.46c-3.5.9-11.3,2.16-28.11,2.65l-4,.12.23,8,4-.12a205.05,205.05,0,0,0,25.06-1.93c.85-.14,1.7-.29,2.55-.46l-.37,11.21c-2.66.7-8,1.64-18.29,2.27l-4,.24.48,8,4-.24a128,128,0,0,0,17.54-2l-.37,11.22c-3.24.88-10.68,2.17-27.19,2.71l-4,.13.26,8,4-.13a195.23,195.23,0,0,0,24.15-2c.85-.14,1.69-.3,2.51-.47L387.53,586c-2.52.67-7.48,1.58-17,2.21l-4,.26.53,8,4-.26a120.91,120.91,0,0,0,16.24-1.92l-.36,11c-2.71.83-9.55,2.22-26,2.84l-4,.15.3,8,4-.15a180.29,180.29,0,0,0,22.78-2c.89-.16,1.76-.33,2.62-.52l-.91,27.8v.13a11.69,11.69,0,0,1-11.12,11.67l-.68.09c-13.1,3-40.46,4.87-69.7,4.87s-56.58-1.91-69.69-4.87l-.68-.09a11.7,11.7,0,0,1-11.14-11.73l-1.94-136.39-3.81-3.94a.52.52,0,0,1-.49-.5l-.2-1.24-15.33-46.83q1.33.24,2.95.42l.14,0,.52.05c2.74.27,6,.41,9.93.41,8.64,0,20.35-.64,36.08-1.83,11.15.51,43.07.78,54.37.78,23.28,0,45.18-1,61.68-2.79l2.31-.26.81-.1,1.38-.17L372,449l1.18-.15.88-.12,1.08-.15.86-.13,1-.15.83-.13.91-.15.78-.14.85-.15.74-.14.81-.16.67-.14.79-.17.59-.13.8-.19.49-.12,1.17-.31.3-.09.8-.23.4-.13.61-.2.41-.14.53-.19.38-.15.47-.19.35-.16.42-.19.17-.08a9.67,9.67,0,0,1,.81,3.92Z"></path><path class="svg--secondary" d="M567.24,441.63a16,16,0,1,0,16-16A16,16,0,0,0,567.24,441.63Zm24,0a8,8,0,1,1-8-8A8,8,0,0,1,591.27,441.63Z"></path><path class="svg--secondary" d="M530.37,395.54a14.8,14.8,0,1,0,14.8-14.8A14.82,14.82,0,0,0,530.37,395.54Zm21.6,0a6.8,6.8,0,1,1-6.8-6.8A6.81,6.81,0,0,1,552,395.54Z"></path><path class="svg--secondary" d="M623.29,538.76a14.8,14.8,0,1,0,14.8,14.8A14.82,14.82,0,0,0,623.29,538.76Zm0,21.6a6.8,6.8,0,1,1,6.8-6.8A6.81,6.81,0,0,1,623.29,560.35Z"></path><path class="svg--secondary" d="M534.46,171.81a14.8,14.8,0,1,0-14.8-14.8A14.82,14.82,0,0,0,534.46,171.81Zm0-21.6a6.8,6.8,0,1,1-6.8,6.8A6.81,6.81,0,0,1,534.46,150.21Z"></path><path class="svg--secondary" d="M546.74,226A16,16,0,1,0,577,218.77a18.57,18.57,0,1,0-19.33-8A16,16,0,0,0,546.74,226Zm26.44-35.92a10.55,10.55,0,1,1-10.55,10.55A10.56,10.56,0,0,1,573.18,190.08ZM562.76,218a8,8,0,1,1-8,8A8,8,0,0,1,562.76,218Z"></path><path class="svg--secondary" d="M684.56,509.06h-.09c-.36-4.39-4.86-9.3-39.68-13.29-22.78-2.61-53.82-4.07-85.89-4.16,0-.13,0-.26,0-.39a18.55,18.55,0,0,0-37.09,0c0,.34,0,.66.05,1-19.31.67-38,1.87-52.61,3.55-34.9,4-39.34,8.92-39.68,13.32h-.08l.06.66a7.21,7.21,0,0,0,.11,1.32l.17,2a127.67,127.67,0,0,0,254.37,0l.17-1.94a7.18,7.18,0,0,0,.12-1.36v0ZM540.39,480.67a10.55,10.55,0,1,1-10.55,10.55A10.56,10.56,0,0,1,540.39,480.67Zm-65.8,22.56c14-1.46,31.62-2.5,49.55-3.09a18.52,18.52,0,0,0,32.77-.55H557c30.57,0,59.85,1.29,82.45,3.64s31.69,5,35.24,6.51c-3.55,1.51-12.65,4.16-35.24,6.5s-51.88,3.64-82.45,3.64-59.85-1.29-82.45-3.64-31.69-5-35.24-6.5C442.9,508.24,452,505.58,474.59,503.24Zm163.55,86.71a119.68,119.68,0,0,1-199.7-72c5.79,2,15.28,4,30.84,5.77,23.47,2.69,54.63,4.17,87.76,4.17s64.29-1.48,87.76-4.17c15.56-1.78,25.05-3.75,30.84-5.77A119.27,119.27,0,0,1,638.14,589.95Z"></path><path class="svg--secondary" d="M524.8,700.9h-.7a27.66,27.66,0,0,0-8.81.23,30.87,30.87,0,0,0-6.7,1.87l.91.2c7.68,1.84,10.66,3.93,11.38,4.81-.72.87-3.7,3-11.37,4.81a126.47,126.47,0,0,1-28.18,2.86h-.71l-3.1,6.55a1.47,1.47,0,0,1-.2-.78,1.43,1.43,0,0,1,.2-.77c-1.26,1.69-10.77,5-27,5-14,0-23-2.46-26-4.23,2.29-1.31,8.24-3.28,18.57-4l1.52-7.56a9.08,9.08,0,0,1-2.75-1.89c.73-.88,3.71-3,11.37-4.8a126.47,126.47,0,0,1,28.17-2.86c3.43,0,6.8.12,10.07.33a8.46,8.46,0,0,1-2.68-4.78,8,8,0,0,1,.16-3.36c-2.66-.13-5.22-.19-7.55-.19-17.7,0-47.67,3.3-47.67,15.67a7.37,7.37,0,0,0,.39,2.37c-15.79,2.43-18.4,7.79-18.4,11.06,0,4.3,4,7.56,12,9.69a103.61,103.61,0,0,0,45.68,0c6.55-1.75,10.45-4.27,11.62-7.5,17.88-.43,44-4.06,44-15.62C529,705.19,527.41,702.85,524.8,700.9Z"></path><path class="svg--secondary" d="M378.07,556.64c-2.14.2-4.47.38-7.07.53l-4,.24-.41-6.72c-3.27-.69-7.39-1.33-12.59-1.93a470.1,470.1,0,0,0-50.7-2.41,470.11,470.11,0,0,0-50.7,2.41c-20.37,2.33-24.36,5.33-24.36,9.73a5.91,5.91,0,0,0,.12,1.2h-.12v84.63h8v-4.68c5.49-2.5,30.21-5.65,67.05-5.65,36.45,0,61,3.08,66.86,5.57-5.84,2.49-30.41,5.57-66.86,5.57h-4v8h4a470.1,470.1,0,0,0,50.7-2.41c18.25-2.09,23.35-4.72,24.21-8.4h.15V614.9q-3.61.41-8,.72v15.64A104.28,104.28,0,0,0,354,628.4a470.1,470.1,0,0,0-50.7-2.41,470.11,470.11,0,0,0-50.7,2.41,104.28,104.28,0,0,0-16.36,2.86V565.36a104.28,104.28,0,0,0,16.36,2.86,470.11,470.11,0,0,0,50.7,2.41,470.1,470.1,0,0,0,50.7-2.41,104.28,104.28,0,0,0,16.36-2.86v3.32c3.11-.2,5.76-.42,8-.66V557.69h0A4.94,4.94,0,0,0,378.07,556.64Zm-74.75,6c-29.63,0-51.42-2-61.67-4.14,10.25-2.1,32-4.14,61.67-4.14s51.42,2,61.67,4.14C354.73,560.59,332.95,562.63,303.32,562.63Z"></path><path class="svg--secondary" d="M370.37,588.17h.13c3.08-.2,5.68-.43,7.87-.68V576.06c-2.43.24-5.11.45-8,.63Z"></path><path class="svg--secondary" d="M370.37,596.19V607.6c3.18-.23,5.82-.48,8-.75V595.54c-2.19.23-4.63.43-7.35.61Z"></path></g></g></svg>

        </div>
        <div class="service__description">
          <h5 class="service__heading">Mobile Apps</h5>
          <p class="service__body">
            Staying on top of emerging technologies is
            crucial to any company. No one can deny the power of Mobile Apps.
          </p>
        </div>
      </div>
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
		  Here are a few projects we have in the works. Check out more on our
		  <a class="font-style--italic link link--secondary font-weight--bold" href="#">dribbble</a>
		</h5>

		<div class="dribbble">
			<a target="_blank" class="dribbble__post" href="#">
			  <img class="b-lazy image image--fluid dribbble__image" data-src="https://cdn.dribbble.com/users/32098/screenshots/3734327/e-z_1x.jpg" alt="E z 1x" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
	</a>        <a target="_blank" class="dribbble__post" href="#">
			  <img class="b-lazy image image--fluid dribbble__image" data-src="https://cdn.dribbble.com/users/32098/screenshots/3438882/railsconf2017_1x.gif" alt="Railsconf2017 1x" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
	</a>        <a target="_blank" class="dribbble__post" href="#">
			  <img class="b-lazy image image--fluid dribbble__image" data-src="https://cdn.dribbble.com/users/32098/screenshots/2522388/icon-exploration_1x.gif" alt="Icon exploration 1x" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
	</a>        <a target="_blank" class="dribbble__post" href="#">
			  <img class="b-lazy image image--fluid dribbble__image" data-src="https://cdn.dribbble.com/users/32098/screenshots/2260658/rc-splashpage_1x.jpg" alt="Rc splashpage 1x" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
	</a>        <a target="_blank" class="dribbble__post" href="#">
			  <img class="b-lazy image image--fluid dribbble__image" data-src="https://cdn.dribbble.com/users/32098/screenshots/2212396/traveling-spoon_1x.jpg" alt="Traveling spoon 1x" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
	</a>        <a target="_blank" class="dribbble__post" href="#">
			  <img class="b-lazy image image--fluid dribbble__image" data-src="https://cdn.dribbble.com/users/32098/screenshots/2174516/dashboard_1x.gif" alt="Dashboard 1x" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
	</a>        <a target="_blank" class="dribbble__post" href="#">
			  <img class="b-lazy image image--fluid dribbble__image" data-src="https://cdn.dribbble.com/users/32098/screenshots/2168689/rayo-concept4_1x.jpg" alt="Rayo concept4 1x" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
	</a>        <a target="_blank" class="dribbble__post" href="#">
			  <img class="b-lazy image image--fluid dribbble__image" data-src="https://cdn.dribbble.com/users/32098/screenshots/1961984/rc2015_1x.gif" alt="Rc2015 1x" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
	</a>    </div>
	  </div>
</section>	
	
	
<!-- contact form -->
<section id="contact">
  <div class="section text-align--center">
    <div class="content">
      <div class="heading">
        <h1 class="heading__title heading__title--large">
          Get a response today
        </h1>
      </div>
      <p class="p space-bottom--large">
        We love hearing about exciting new ideas. Your message will be
        confidentially sent to Careerstairs Managing Director, Mayank, and Careerstairs
        Senior Developer, Sachin. It'll be placed to the top of the stack and one
        of them will respond to you today. If you'd prefer to speak to someone
        right away, call us at <a class="link link--accent font-weight--bold display--inline-block" href="tel://+919050167626">+91 90501 67626</a>
      </p>
      <p class="p space-bottom--xlarge">
        <i>
          We currently have <span class="color--accent font-weight--bold ">availability</span> for new client projects.
        </i>
      </p>

      <p class="contact-type space-bottom--xlarge">
        <input type="radio" name="message_toggle" id="message_toggle_quickstart" value="quickstart" class="radio radio--button" checked="checked" />
        <label class="contact-type__button label" @click="quickStart" for="message_toggle_quickstart">Quick Message</label>
        <span class="space--medium">or</span>
        <input type="radio" name="message_toggle" id="message_toggle_kickstart" value="kickstart" class="radio radio--button" />
        <label class="contact-type__button label" @click="kickStart" for="message_toggle_kickstart">Kick Start Project</label>
      </p>

	
    	<!--basic form-->   
        <form class="form form--quick-start form--active" id="basic" accept-charset="UTF-8" autocomplete="off">
			<fieldset class="list">
				<div class="list__item">
					<label class="label" required="required" for="basic_name">Your Name</label>
					<input class="input" type="text" id="basic_name" required maxlength="100" pattern="[A-Za-z\s]{5,100}" style="text-transform: capitalize;" placeholder="Enter Your full name"  />
				</div>

				<div class="list__item">
					<label class="label" required="required" for="basic_email">Your Email</label>
					<input class="input" type="email" id="basic_email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required maxlength="100" style="text-transform: lowercase;" placeholder="Enter your Email" />
				</div>
				
				<div class="list__item">
					<label class="label">Request Callback</label>
					<select class="select" onChange="extra(this.value)" required id="call">
						<option value="1" selected>No</option>
						<option value="2">Yes</option>
					</select>
				</div>
				
				<div class="list__item" style="display: none" id="number">
					<label class="label" for="basicmobile">Mobile Number:</label>
					<input class="input" type="text" pattern="^\d{10}$" placeholder="Enter 10 digit Phone number" id="basicmobile" />
				</div>
				
				<div class="list__item" style="display: none" id="time">
					<label class="label">Callback time</label>
					<select class="select" id="call_time">
						<option value="1" selected>1 hour</option>
						<option value="2">2 hour</option>
						<option value="3">3 hour</option>
						<option value="4">4 hour</option>
						<option value="5">5 hour</option>
					</select>
				</div>
				
				<div class="list__item">
					<label class="label" required="required" for="basic_comments">Message</label>
					<textarea class="input" id="basic_comments" style="resize: none" rows="6" spellcheck="true" maxlength="1000" placeholder="Enter your message" required></textarea>
				</div>

				<input type="submit" value="Send Message" id="basic_submit" class="button text-transform--uppercase" onClick="basicformsubmit()" />
			</fieldset>
		</form>
      
		  <div align="center" id="loading1" style="display:none">
			<i id="loading1-i"></i>
			<span id="loading1-i2"></span>
		  </div>
      	
      	<!--custom form-->
        <form class="form form--kick-start" id="custom" accept-charset="UTF-8" autocomplete="off">
        	<fieldset class="list">
				<div class="list__item">
					<label class="label" required="required" for="custom_name">Your Name</label>
					<input class="input" type="text" id="custom_name" required maxlength="100" pattern="[A-Za-z\s]{5,100}" style="text-transform: capitalize;" placeholder="Enter Your full name"/>
				</div>
				<div class="list__item">
					<label class="label" for="custommobile">Your Phone Number</label>
					<input class="input" name="mobile" type="text" pattern="^\d{10}$" placeholder="Enter 10 digit Phone number" id="custommobile" required />
				</div>
				<div class="list__item" >
					<label class="label" required="required" for="custom_email">Your Email</label>
					<input class="input" type="email" id="custom_email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required maxlength="100" style="text-transform: lowercase;" placeholder="Enter your Email" />
				</div>
				<div class="list__item">
					<label class="label" for="custom_company_name">Company or Organization Name</label>
					<input class="input" type="text" maxlength="255" placeholder="Enter Company Name" id="custom_company_name" />
				</div>
				<div class="list__item">
					<label class="label" required="required" for="custom_description">Describe your project or idea</label>
					<textarea class="textarea" style="resize: none" rows="6" spellcheck="true" maxlength="1000" id="custom_description"></textarea>
				</div>
			</fieldset>

			<fieldset class="list">

			  <div class="list__item">
				<div class="label">What type of project? (You may choose more than one)</div>
					
					<input class="checkbox checkbox--button" type="checkbox" value="Complete Website" id="contact_complete_website" name="contact_complete_type[]" />
					<label class="label" for="contact_complete_website">Complete Website</label>

					<input class="checkbox checkbox--button" type="checkbox" value="Frontend/Backend" id="contact_rails_website" name="contact_complete_type[]" />
					<label class="label" for="contact_rails_website">Frontend/Backend</label>

					<input class="checkbox checkbox--button" type="checkbox" value="Web Design" id="contact_web_design" name="contact_complete_type[]" />
					<label class="label" for="contact_web_design">Web Design</label>

					<input class="checkbox checkbox--button" type="checkbox" value="Code Review" id="contact_code_review" name="contact_complete_type[]" />
					<label class="label" for="contact_code_review">Code Review</label>

					<input class="checkbox checkbox--button" type="checkbox" value="E-commerce" id="contact_e_commerce" name="contact_complete_type[]"/>
					<label class="label" for="contact_e_commerce">E-commerce</label>
					
					<input class="checkbox checkbox--button" type="checkbox" value="other" id="contact_others" name="contact_complete_type[]"/>
            		<label class="label" for="contact_others">Other</label>
			  </div>

			</fieldset>

			<fieldset class="list">

			  <div class="list__item">
				<div class="label">Ideal start date?</div>
				<input class="radio radio--button" type="radio" value="immediately" name="start_date[]" id="contact_start_project_immediately" />
				<label class="label" for="contact_start_project_immediately">Immediately</label>

				<input class="radio radio--button" type="radio" value="this_month" name="start_date[]" id="contact_start_project_this_month" />
				<label class="label" for="contact_start_project_this_month">This Month</label>

				<input class="radio radio--button" type="radio" value="near_future" name="start_date[]" id="contact_start_project_near_future" />
				<label class="label" for="contact_start_project_near_future">Near Future</label>

				<input class="radio radio--button" type="radio" value="this_year" name="start_date[]" id="contact_start_project_this_year" />
				<label class="label" for="contact_start_project_this_year">This Year</label>
			  </div>

			</fieldset>

			<fieldset class="list__item">

			  <div class="list__item">
				<div class="label" required> Ballpark Budget?</div>
				<input class="radio radio--button" type="radio" value="under_25k" name="budget[]" id="contact_budget_under_25k" />
				<label class="label" for="contact_budget_under_25k">Under 25,000</label>

				<input class="radio radio--button" type="radio" value="25k_50k" name="budget[]" id="contact_budget_25k_50k" />
				<label class="label" for="contact_budget_25k_50k">25k - 50k</label>

				<input class="radio radio--button" type="radio" value="50k_100k" name="budget[]" id="contact_budget_50k_100k" />
				<label class="label" for="contact_budget_50k_100k">50k - 100k</label>

				<input class="radio radio--button" type="radio" value="not_sure" name="budget[]" id="contact_budget_not_sure" />
				<label class="label" for="contact_budget_not_sure">Not Sure</label>
			  </div>

			</fieldset>

			<fieldset class="list">

			  <div class="list__item">
				<label class="label" for="custom_comments_user">Anything else we need to know?</label>
				<textarea class="textarea" rows="4" style="resize: none" id="custom_comments_user" spellcheck="true" maxlength="1000"></textarea>
			  </div>

			  <input type="button" onClick="customformsubmit()" value="Send Project Request" class="button text-transform--uppercase" />

			</fieldset>

		</form>
   
   		<div align="center" id="loading2" style="display:none">
			<i id="loading2-i"></i>
			<span id="loading2-i2"></span>
		</div>
    </div>
  </div>

</section>	
    </main>
    
<!-- Footer
================================================== -->

 <footer class="footer footer--primary">

  <div class="content">

    <div class="section footer--primary__offices">

      <div class="footer--primary__address-container">
        <div class="footer--primary__accent"></div>
        <p class="footer--primary__address">
          	10th Floor, Tower B & C,<br/>
			DLF Building No.5, DLF Cyber City,<br/>
			DLF Phase 3, Gurugram, Haryana 122002
        </p>
		</div>
    </div>

    <div class="section footer--primary__information">

      <ul class="nav nav--footer footer--primary__nav">
        <li class="nav__item nav--footer__item nav--footer__item--label">
          Links
        </li>
        <li class="nav__item nav--footer__item">
          <a class="nav__link nav--footer__link" href="about.php">About Us</a>
        </li>
        <li class="nav__item nav--footer__item">
          <a class="nav__link nav--footer__link" href="careers.php">Careers</a>
        </li>
        <li class="nav__item nav--footer__item">
          <a class="nav__link nav--footer__link" href="www.blog.careerstairs.in">Our Blog</a>
        </li>
        <li class="nav__item nav--footer__item">
          <a class="nav__link nav--footer__link" href="service.php">Terms of Service</a>
        </li>
        <li class="nav__item nav--footer__item">
          <a class="nav__link nav--footer__link" href="policy.php">Privacy Policy</a>
        </li
        <li class="nav__item nav--footer__item">
          <a class="nav__link nav--footer__link" href="contact.html">Contact Us</a>
        </li>
        <!--li class="nav__item nav--footer__item">
        </li-->
      </ul>

      <ul class="nav nav--footer footer--primary__nav">
        <li class="nav__item nav--footer__item nav--footer__item--label">
          Connect
        </li>
        <li class="nav__item nav--footer__item">
          <a class="nav__link nav--footer__link" target="_blank" href="https://www.facebook.com/careerstairsin-259421891127990/">Facebook</a>
        </li>
        <li class="nav__item nav--footer__item">
          <a class="nav__link nav--footer__link" target="_blank" href="https://twitter.com/CareerstairsI">Twitter</a>
        </li>
        <li class="nav__item nav--footer__item">
          <a class="nav__link nav--footer__link" target="_blank" href="https://www.linkedin.com/company/18031484/">LinkedIn</a>
        </li>
        <li class="nav__item nav--footer__item">
          <a class="nav__link nav--footer__link" target="_blank" href="https://plus.google.com/u/0/109522836028901433584">Google</a>
        </li>
      </ul>

      <div class="footer--primary__contact">
        <a href="tel:+919050167626" class="link">+91 90501 67626</a> <span class="space--small">//</span> <a href="mailto:team@careerstairs.in" class="link">team@careerstairs.in</a>
      </div>

      <p class="footer--primary__copyright" align="justify">
        CareerStairs is a unique tech-driven platform that aims to revolutionize the way hiring is done. Whether you are a job-seeker or an employer, we help you secure the best of job opportunities and talent. Our unique ranking algorithm helps candidates get noticed by recruiters on one hand while helping recruiters notice the right candidates on the other. Similarly, the ingenious Resume feature enables employers hire wisely while letting candidates showcase the best of their talent.
      </p>
	  <p class="footer--primary__copyright">
        CareerStairs &copy; 2017<span class="space--small">/</span><span class="small mark">We ❤ the details.</span>
      </p>
    </div>
  </div>

</footer>

<!-- Scripts
================================================== -->
<script>
	function extra(that){
			if(that == 2){
				document.getElementById('number').style.display = 'block';
				document.getElementById('basicmobile').required = true;
				document.getElementById('time').style.display = 'block';
				document.getElementById('call_time').required = true;
			}
			else if(that == 1){
				document.getElementById('number').style.display = 'none';
				document.getElementById('basicmobile').required = false;
				document.getElementById('time').style.display = 'none';
				document.getElementById('call_time').required = false;
			}
	}
	
	//basic form submit
	function basicformsubmit(){
		//if all data is valid then submit
		var name = $('#basic_name').val();
		var email = $('#basic_email').val();
		var call = $('#call').val();
		var mobile = $('#basicmobile').val();
		var time = $('#call_time').val();
		var message = $('#basic_comments').val();
		
		$('#basic').hide();
		$('#loading1').show();
		$("#loading1-i").addClass("fa fa-spinner fa-pulse fa-4x fa-fw");
		$("#loading1-i2").text('Sending !');
		$.ajax({
                type:'POST',
                url:'extra/ajaxData.php',
                data:{name: name, emails: email, msg_type: 'project', call: call, mobile: mobile, time: time, message: message },
                success: function(dataParsed){
					//console.log(dataParsed);
					if(dataParsed == 'Data')
					{
						$("#loading1-i").removeClass();
						$("#loading1-i").addClass("fa fa-check fa-4x");
						$("#loading1-i").css("color", "green");
						$("#loading1-i2").text('Message Sent !');
					}
					else if(dataParsed != 'Data')
					{
						$("#loading1-i").removeClass();
						$('#loading1').hide();
						$('#basic').show();
						
						swal(
						  'Error',
						  dataParsed,
						  'error'
						)
					}
				}
		});
	}
	
	//custom form submit
	function customformsubmit(){
		
		//lets see the data in action
		var name = $('#custom_name').val();
		var email = $('#custom_email').val();
		var mobile = $('#custommobile').val();
		var company_name = $('#custom_company_name').val();
		var desc = $('#custom_description').val();
		
		var typee = [];
		$("input[name='contact_complete_type[]']:checked").each(function() {
			typee.push($(this).val());
		});
		
		var time = [];
		$("input[name='start_date[]']:checked").each(function() {
			time.push($(this).val());
		});
		
		var budget = [];
		$("input[name='budget[]']:checked").each(function() {
			budget.push($(this).val());
		});
		
		var comment = $('#custom_comments_user').val();
		
		$('#custom').hide();
		$('#loading2').show();
		$("#loading2-i").addClass("fa fa-spinner fa-pulse fa-4x fa-fw");
		$("#loading2-i2").text('Sending !');
		$.ajax({
                type:'POST',
                url:'extra/ajaxData.php',
                data:{namee: name, emailss: email, msg_typee: 'project', mobilee: mobile, company_name: company_name, desc: desc, typee: JSON.stringify(typee), timee: time.toString(), budget: budget.toString(), comments: comment  },
                success: function(dataParsed){
					//console.log(dataParsed);
					if(dataParsed == 'Data')
					{
						$("#loading2-i").removeClass();
						$("#loading2-i").addClass("fa fa-check fa-4x");
						$("#loading2-i").css("color", "green");
						$("#loading2-i2").text('Message Sent !');
						$('html, body').animate({
							scrollTop: $("#contact").offset().top
						}, 2000);
					}
					else if(dataParsed != 'Data')
					{
						$("#loading2-i").removeClass();
						$('#loading2').hide();
						$('#custom').show();
						
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>


</body>

</html>