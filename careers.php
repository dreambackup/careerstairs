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
<title>CareerStairs | Careers</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="CareerStairs is no.1 job &amp; training website for students in India with a lot of jobs Engineering, MBA, media, law, arts &amp; other streams.
" />

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
<div id="titlebar" class="photo-bg" style="background: url(images/workspace_background-wallpaper-1366x768.jpg)">
	<div class="container">

		<div class="sixteen columns">
			<h2>Careers</h2>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Table -->
	<div class="sixteen columns">

		 <hr>
        <p align="center" style="font-size: 20px">We are transforming the lives of millions of college students, one <em>great</em> job at a time.<br> Join us in our quest.</p>
        <p align="center" style="font-weight: bold">
            Why work with us?
        </p>


		<ul id="popular-categories" >
			<li><a ><i class="ln ln-icon-Network"></i>  Work with an incredible team</a></li>
			<li><a ><i class="ln ln-icon-Chemical-3"></i> Lots of Creative Freedom</a></li>
			<li><a ><i class="ln ln-icon-Fluorescent"></i> Make a difference</a></li>
			<li><a ><i class="ln ln-icon-Coins"></i>Very competitive packages</a></li>
			<li><a ><i class="ln ln-icon-Line-Chart"></i> A career path of your choice</a></li>
			<li><a ><i class="ln ln-icon-Hipster-Sunglasses"></i> No cubicles or dress codes</a></li>
			<li><a ><i class="ln ln-icon-Turtle"></i> Flexible work-hours</a></li>
			<li><a ><i class="ln ln-icon-Kangoroo"></i>Fun all the time</a></li>
		</ul>
	

		<div class="clearfix"></div>
		 <p class="margin-top-50" align="center" style="font-weight: bold">
            Currently Available Roles
        </p>
	<hr>
	
	<p class="margin-bottom-25" style="float: left;text-align: justify">
		
		<div class="role">
               
        	<a onClick="display('1')" >Business Development Executive (2-3 years) [Full-Time]</a>
            	<div style="display: none;" id="1">
            	<br/>
					<span style="text-align: justify; display:block;" >The business development executive is a job function that has evolved as part of the transformation of our business world to a global economy. The term conveys a strategic and pivotal role in the growth of a business enterprise. It is both sophisticated and all-encompassing in its meaning of the word "development.".<br/>
					<p>If your calling is to solve complex and real-world problems through elegant digital products & experiences, this role is for you. As a Product Manager, you will take on the challenge of building world-class internship and online training platforms. You will wear multiple hats & work with different teams to deliver high-quality products.</p></span>
					<p>Your responsibilities would include -</p>
						<ol>
							<li>Work with the existing products/services to find new channels and markets for distribution</li>
							<li>Research and Recommend new products/services</li>
							<li>Explore and Negotiate acquisitions of other companies</li>
							<li>Analyze and present joint venture concepts (working with other businesses or brands that may be synergistic)</li>
							<li>Find ways to sell more products/services to new and existing customers by adjusting current systems and marketing approaches</li>
							<li>Explore and stay abreast of competition in an attempt to find and maintain a competitive edge</li>
						</ol>
						<br/>
						<span>
							<p><strong>Location - </strong> Haryana, Delhi, Punjab, U.P, H.P (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 1.8 - 2.1 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'Product Manager - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
               		</div>
            	<br/>   
           <a onClick="display('2')" >Graphic/Web Designer (3-5 years) [Full-Time]</a>
                    <div style="display: none;" id="2" >
                    <br/>
						<span style="text-align: justify; display:block;" >We are urgently looking for a Web & Graphic Designer to create amazing user experiences. The candidate with strong aesthetic sense and graphic designing skills capable to understand design, possess superior user interface design skills and be able to translate high-level requirements into interaction flows and artifacts, and transform them into beautiful, intuitive, and functional designs.</span>
						<p>Your responsibilities would include -</p>
						<ol>
							<li>Execute all visual design stages from concept to final hand-off to engineering</li>
							<li>Conceptualize original ideas that bring simplicity and user friendliness to complex design roadblocks</li>
							<li>Create wireframes, storyboards, user flows, process flows and site maps to effectively communicate interaction and design ideasPresent and defend designs and key milestone deliverables to peers and executive level stakeholders</li>
							<li>Establish and promote design guidelines, best practices, and standards</li>
							<li>Create & Promote content for SMO</li>
						</ol>
						<br/>
						<span>
							<p><strong>Location - </strong> Gurugram (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 3.0 - 4.8 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'Graphic/Web designer - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                  	
                   	<br/>
                <a onClick="display('3')" >Franchise Manager (4-5 years) [Full-Time]</a>
                    <div style="display: none;" id="3" >
                    	<br/>
						<span style="text-align: justify; display:block;" >Franchisee Manager will be responsible for planning and managing the franchising business of Company. They will be responsible for developing franchising opportunities and for offering continuous support to franchisees, to ensure the overall success of the franchisor as well as the franchisee.</span>
						<p>Your responsibilities would include -</p>
						<ol>
							<li>Identify and research potential markets to launch new franchisee and advise CEO/Board of new opportunities.</li>
							<li>Identify and locate potential franchisee in the selected markets: discovering and exploring opportunities.</li>
							<li>Screen potential franchisee by analysing investment requirements, franchisee’s potential, and financials, franchisee experience and vision</li>
							<li>Finalize the deal with franchisee by negotiating terms and conditions of each franchisee agreement</li>
							<li>Responsible for the launch and development of the franchisee as per the agreed terms and conditions.</li>
						</ol>
						<br/>
						<span>
							<p><strong>Location - </strong> Haryana, Delhi, Punjab, U.P, H.P (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 4.2 - 4.5 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'Franchise Manager - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                    
                    <br/>
              <a onClick="display('4')" >Content Writer (2-3 years) [Full-Time]</a>
                    
                    <div style="display: none;" id="4" >
                    	<br/>
						<span style="text-align: justify; display:block;" >Due to the digital nature of the work, Web content writers are often required to know basic design fundamentals and be familiar with digital content management systems. They are also expected to communicate effectively with clients, meet strict deadlines, follow editorial guidelines from different clients and, if they are freelance writers, manage their own time. Freelance Web content writers purchase their own computer and writing equipment to facilitate their digital work environment.</span>
						<p>Your responsibilities would include -</p>
						<ol>
							<li>Succinct, fact-filled content</li>
							<li>An engaging, active tone</li>
							<li>Writing broken up by subheadings</li>
							<li>Embedded links throughout the text</li>
							<li>Knowledge of Web technology is a plus.</li>
						</ol>
						<br/>
						<span>
							<p><strong>Location - </strong> Gurugram (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 1.8 - 2.1 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'Content Writer - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                    
                    <br/>
                    <a onClick="display('5')" >MIS Executive (2-3 years) [Full-Time]</a>
                    
                    <div style="display: none;" id="5" >
                    	<br/>
						<span style="text-align: justify; display:block;" >An MIS Executive – or Management Information System Executive – is responsible for planning, coordinating and directing all computer-related activities within an organization. They help determine the company’s information technology goals, and are responsible for implementing computer systems to meet those goals. MIS Executives typically work in an office setting and spend much of their time working on at a computer station. MIS Executives typically work a traditional 9-to-5 schedule. Their specific job duties and responsibilities are directly related to the size and goals of their employer.</span>
						<p>Your responsibilities would include -</p>
						<ol>
							<li>Development and Design of Computer Systems</li>
							<li>Hardware and Software Management</li>
							<li>Research and Evaluation</li>
							<li>Staff Management</li>
							<li>Digital Security Management</li>
						</ol>
						<br/>
						<p>MIS Executive Skills -</p>
						<ol>
							<li>Analyze problems and discover the best ways to solve them</li>
							<li>Develop and implement strategies to achieve organizational goals</li>
							<li>Communicate clearly to superiors and give understandable instruction to subordinates</li>
							<li>Allocate resources effectively to reach organizational goals</li>
							<li>Lead and motivate teams to promote efficiency and effectiveness</li>
						</ol>
						<br/>
						<span>
							<p><strong>Location - </strong> Gurugram (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 1.2 - 1.5 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'MIS Executive - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                    
                    <br/>
                    <a onClick="display('6')" >HR Executive  (2-3 years) [Full-Time]</a>
                    
                    <div style="display: none;" id="6" >
                    	<br/>
						<span style="text-align: justify; display:block;" >We are looking for an HR assistant to handle a variety of personnel related administrative duties. Your role is to act as the liaison between HR managers and employees, ensuring smooth communication and prompt resolution of all queries. You will also support our daily HR activities and assist in coordinating HR policies, processes and relevant documents.</span>
						<p>Your responsibilities would include -</p>
						<ol>
							<li>Assisting with day to day operations of the HR functions and duties</li>
							<li>Providing clerical and administrative support to Human Resources executives</li>
							<li>Compiling and update employee records (hard and soft copies)</li>
							<li>Process documentation and prepare reports relating to personnel activities (staffing, recruitment, training, grievances, performance evaluations etc)</li>
							<li>Coordinate HR projects (meetings, training, surveys etc) and take minutes</li>
							<li>Assist in payroll preparation by providing relevant data (absences, bonus, leaves, etc)</li>
						</ol>
						<br/>
						<span>
							<p><strong>Location - </strong> Haryana, Delhi, Punjab, U.P, H.P (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 1.5 - 1.8 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'HR Executive - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                    
                    <br/>
                    <a onClick="display('7')" >HR Manager  (3-4 years) [Full-Time]</a>
                    
                    <div style="display: none;" id="7" >
                    	<br/>
						<span style="text-align: justify; display:block;" >HR managers can perform a variety of tasks in fulfilling their main responsibility, which is leading an organization’s HR programs and policies as they apply to employee relations, compensation, benefits, safety, performance and staffing levels. Supporting the company’s strategic goals may help drive the HR manager’s design, planning and implementation of these programs and policies.</span>
						<p>Your responsibilities would include -</p>
						<ol>
							<li>Implement strategic organizational change to increase productivity and employee satisfaction</li>
							<li>Use data and analysis to solve real-world HR problems</li>
							<li>Demonstrate advanced financial management and budgeting skills</li>
							<li>Structure competitive benefits packages, and measure their success</li>
							<li>Leverage advanced knowledge and skills to succeed in HR management</li>
							<li>Assist in payroll preparation by providing relevant data (absences, bonus, leaves, etc)</li>
						</ol>
						<br/>
						<span>
							<p><strong>Location - </strong> Gurugram (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 3.0 - 3.2 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'HR Manager - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                    
                    <br/>
                    <a onClick="display('8')" >Financial Couseller  (2-3 years) [Full-Time]</a>
                    
                    <div style="display: none;" id="8" >
                    	<br/>
						<span style="text-align: justify; display:block;" >A strong, detail oriented mindset and good analytical and math skills help financial counselors determine the best course of action for clients. Financial counselors also must be able to simplify complex concepts when explaining them to customers, which requires excellent communication and interpersonal skills.</span>
						<p>Your responsibilities would include -</p>
						<ol>
							<li>Listening skills</li>
							<li>Sensitivity and empathy</li>
							<li>Patience and a calm manner</li>
							<li>Ability to cope with emotional situations</li>
							<li>Ability to relate to a wide range of people</li>
						</ol>
						<br/>
						<span>
							<p><strong>Location - </strong> Haryana, Delhi, Punjab, U.P, H.P (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 2.0 - 2.2 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'Financial Couseller - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                    
                    <br/>
                    <a onClick="display('9')" >Event Manager  (2-3 years) [Full-Time]</a>
                    
                    <div style="display: none;" id="9" >
                    	<br/>
						<span style="text-align: justify; display:block;" >The role that events play for most brands is rising rapidly, and today's event manager is as likely to find themselves organising conference, events, seminars and exhibition as they are parties and corporate incentive trips.</span>
						<p>Your responsibilities would include -</p>
						<ol>
							<li>Development, production and delivery of projects from proposal right up to delivery.</li>
							<li>Delivering events on time, within budget, that meet (and hopefully exceed)expectations.</li>
							<li>Setting, communicating and maintaining timelines and priorities on every project</li>
							<li>Communicating, maintaining and developing client relationships</li>
							<li>Managing supplier relationships</li>
							<li>Managing operational and administrative functions to ensure specific projects are delivered efficiently</li>
							<li>Providing leadership, motivation, direction and support to your team</li>
							<li>Travelling to on site inspections and project managing events</li>
							<li>Being responsible for all project budgets from start to finish.</li>
							<li>Ensuring excellent customer service and quality delivery</li>
						</ol>
						<br/>
						<span>
							<p><strong>Location - </strong> Haryana, Delhi, Punjab, U.P, H.P (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 2.4 - 2.5 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'Event Manager - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                    
                    <br/>
                    <a onClick="display('10')" >Accounts  (2-3 years) [Full-Time]</a>
                    
                    <div style="display: none;" id="10" >
                    	<br/>
						<span style="text-align: justify; display:block;" >Account manager responsibilities include developing long-term relationships with a portfolio of clients, connecting with key business executives and stakeholders. Account Managers liaise between customers and cross-functional internal teams to ensure the timely and successful delivery of our solutions according to customer needs. Manage and develop client accounts to initiate and maintain favorable relationship with clients. Responsible for leading a team of Account Managers dedicated to meeting the operational needs of assigned client segments.</span>
						<p>Your responsibilities would include -</p>
						<ol>
							<li>Be the primary point of contact and build long-term relationships with customers</li>
							<li>Help customers through email, phone, online presentations, screen-share and in person meetings</li>
							<li>Develop a trusted advisor relationship with key accounts, customer stakeholders and executive sponsors</li>
							<li>Communicate clearly the progress of monthly/quarterly initiatives to internal and external stakeholders</li>
							<li>Ensure the timely and successful delivery of our solutions according to customer needs and objectives</li>
							<li>Forecast and track key account metrics</li>
							<li>Enhance department and organization’s reputation by accepting ownership for accomplishing new and different requests; exploring opportunities to add value to job accomplishments</li>
							<li>Responsible for keeping current clients satisfied and delivering exceptional client service on a day-to-day basis</li>
							<li>Monitor and analyze customer’s usage of our product</li>
							<li>Liaise between the customer and internal teams</li>
						</ol>
						<br/>
						<span>
							<p><strong>Location - </strong> Gurugram (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 1.5 - 1.8 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'Accounts - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                    
                    <br/>
                    <a onClick="display('11')" >Web Developer  (0-1 years) [Full Time]</a>
                    
                    <div style="display: none;" id="11" >
                    	<br/>
						<span style="text-align: justify; display:block;" >The role is responsible for designing, coding and modifying websites, from layout to function and according to a client's specifications. Strive to create visually appealing sites that feature user-friendly design and clear navigation.</span>
						<p>Your responsibilities would include -</p>
						<ol>
							<li>Someone with strong knowledge and experience of web technologies (HTML , CSS, Bootstrap, MySQL,  PHP, Javascript, AJAX, Jquery) and/or mobile technologies (Android, Java, Kotlin). Please apply even if you have knowledge of only one of the domains and not both.</li>
							<li>Someone with passion & flair for teaching, and with prior experience of teaching (preferably in web/mobile domain). Someone who genuinely believes that good education can solve a number of world problems and is excited to lead this change from the front.</li>
							<li>Deep functional knowledge or hands on design experience with Web Services (REST, SOAP, etc ..) is needed to be successful in this position.</li>
							<li>Ensure the timely and successful delivery of our solutions according to customer needs and objectives</li>
							<li>Strong grasp of security principles and how they apply to E-Commerce applications.</li>
							<li>Monitor and analyze customer’s usage of our product</li>
							<li>Keep upgrading yourself with the latest in the
							 field of Web & Mobile (and even newer) technologies and regularly code
							 hobby projects to integrate them into your training content</li>
						</ol>
					 
						<span>
							<p><strong>Location - </strong> Gurugram (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 1.5 - 1.8 LPA . For candidates with experience, it would be as per your experience and current compensation. This is an important position for us and we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'Web Developer - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                    
                    <br/>
                    <a onClick="display('12')" >Front-End Developer  (0-1 years) [Intern]</a>
                    
                    <div style="display: none;" id="12" >
                    	<br/>
						<span style="text-align: justify; display:block;" >We are looking for a Front-End Web Developer who is motivated to combine the art of design with the art of programming. Responsibilities will include translation of the UI/UX design wireframes to actual code that will produce visual elements of the application. You will work with the UI/UX designer and bridge the gap between graphical design and technical implementation, taking an active role on both sides and defining how the application looks as well as how it works.</span>
						<p>Skills And Qualifications -</p>
						<ol>
							<li>Proficient understanding of web markup, including HTML5, CSS3</li>
							<li>Basic understanding of server-side CSS pre-processing platforms, such as LESS and SASS</li>
							<li>Proficient understanding of client-side scripting and JavaScript frameworks, including jQuery</li>
							<li>Good understanding of asynchronous request handling, partial page updates, and AJAX</li>
							<li>Proficient understanding of cross-browser compatibility issues and ways to work around them.</li>
							<li>Good understanding of SEO principles and ensuring that application will adhere to them.</li>
							<li>Proficient understanding of code versioning tools, such as {{Git / Mercurial / SVN}}</li>
						</ol>
					 	<br/>
						<span>
							<p><strong>Location - </strong> Gurugram (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 0.96 - 1.2 LPA . For candidates with experience, we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'Front-End Developer - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                    
                    
                    <br/>
                    <a onClick="display('13')" >Back-End Developer  (0-1 years) [Intern]</a>
                		
                		<div style="display: none;" id="13" >
                    	<br/>
						<span style="text-align: justify; display:block;" >We are looking for a Back-End Web Developer responsible for managing the interchange of data between the server and the users. Your primary focus will be development of all server-side logic, definition and maintenance of the central database, and ensuring high performance and responsiveness to requests from the front-end. You will also be responsible for integrating the front-end elements built by your coworkers into the application. A basic understanding of front-end technologies is therefore necessary as well.</span>
						<p>Skills And Qualifications -</p>
						<ol>
							<li>Understanding accessibility and security compliance {{Depending on a specific project}}</li>
							<li>User authentication and authorization between multiple systems, servers, and environments</li>
							<li>Integration of multiple data sources and databases into one system</li>
							<li>Management of hosting environment, including database administration and scaling an application to support load changes</li>
							<li>Proficient knowledge of a back-end programming language {{Depending on the specific case, a developer should have the knowledge of one or more of PHP, Python, Ruby, Java, .NET, JavaScript etc.}}</li>
							<li>Proficient understanding of code versioning tools, such as Git</li>
							<li>Creating database schemas that represent and support business processes</li>
						</ol>
					 	<br/>
						<span>
							<p><strong>Location - </strong> Gurugram (<a rel="nofollow" target="_blank" href="http://careerstairs.in/contact.html">Address</a>)</p>
							<p><strong>Compensation</strong> - INR 0.96 - 1.2 LPA . For candidates with experience, we intend to make a competitive offer.</p>
							<p><strong>Start date</strong> – Immediately</p>
							<p><strong>How to apply?</strong></p>
							<p>Please write to <a rel="nofollow" target="_blank">career@careerstairs.in</a> </p>
							<p>Kindly keep 'Back-End Developer - Your Name - or Your Current Company Name' as the subject line of the email. Please also mention your current CTC and notice period (if applicable).</p>
						</span>
                	</div>
                
                <!--second-->
                
                
                
            </div>

		
	</p>
		
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
			<div class="copyrights">©  Copyright 2018 by <a href="index.php">CareerStairs</a>. All Rights Reserved.</div>
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

<script>
	function display(that){
		console.log(that);
		$('#'+that+'').toggle();
	}
</script>

</body>

</html>