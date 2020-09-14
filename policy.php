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
<title>CareerStairs | Policy</title>

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
			<h2>Privacy Policy</h2>
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
            Our Privacy Policy !
        </p>
		<div class="clearfix"></div>
		<p align="justify">
			The Privacy Policy (hereinafter "the policy") provided below is with respect to our use and protection of any personal information/data you provide to us through our website. HT Media Limited (HTML) is the sole owner of the website www.careerstairs.in (hereinafter "website"). The Policy is applicable to the website. You may be required to provide personally identifiable information at several different points on our website. By accepting the policy at the time of registration, you expressly approve and consent to our collection, storage, use and disclosure of your personal information as described in this Policy and terms and conditions.
		</p>
		<br>
		<h3 style="color: green">Information Collection</h3>
		<p align="justify">
			When you visit/surf our website, certain personal information about you such as your IP Address, etc. may be automatically stored with us. However, if you choose to avail of certain services on our website, you shall be required to provide certain personal information for the registration and/or access to such services/web pages. Such information may include, without limitation, your name, email address, contact address, mobile/telephone number(s), sex, age, occupation, interests, credit card information, billing information, financial information, content, IP address, standard web log information, information about your computer hardware and software and such other information as may be required for your interaction with the services and from which your identity is discernible. We may also collect demographic information that is not unique to you such as code, preferences, favorites, etc. Further, sometimes you may be asked to provide descriptive, cultural, preferential and social & life style information.<br/>
			In addition to the above we may indirectly also collect information about you when you use certain third party services available on our website. We may also collect certain information about the use of our website by you, such as the services you access/use or areas you visit.
		</p>
		
		<h3 style="color: green">Cookies and Other Tracking Technologies</h3>
		<p align="justify">
			Some of our Web pages utilize "cookies" and other tracking technologies. A "cookie" is a small text file that may be used, for example, to collect information about Web site activity. Some cookies and other technologies may serve to recall Personal Information previously indicated by a Web user. Most browsers allow you to control cookies, including whether or not to accept them and how to remove them.<br/>
			You may set most browsers to notify you if you receive a cookie, or you may choose to block cookies with your browser, but please note that if you choose to erase or block your cookies, you will need to re-enter your original user ID and password to gain access to certain parts of the Web site and App.<br/>
			Tracking technologies may record information such as Internet domain and host names; Internet protocol (IP) addresses; browser software and operating system types; clickstream patterns; and dates and times that our site is accessed. Our use of cookies and other tracking technologies allows us to improve our Web site and your Web experience. We may also analyze information that does not contain Personal Information for trends and statistics.
		</p>
		
		<h3 style="color: green">Use</h3>
		<p align="justify">
			If you choose to provide us with the above mentioned information, you consent to the use, transfer, processing and storage of the information so provided by you on our servers. The information provided by you shall not be given to third parties (third parties for this purpose do not include our group / holding / subsidiary companies and or our service partners / associates) for marketing purposes and other related activities without your prior consent. Though if you choose to make your profile visible, all information pertaining to your profile will be visible to third parties.
		</p>
		The information provided by you shall be used by us to:
		<ul class="list-1">
			<li>Improve our website and enable us to provide you the most user-friendly experience which is safe, smooth and customized;</li>
			<li>Improve and customize our services, content and other commercial / non-commercial features on the website;</li>
			<li>Contact you to get your opinion on our current products and services or possible new products and/or services that may be offered by us.</li>
			<li>Send you information on our products, services, special deals, promotions;</li>
			<li>Ask you to send feedback on any or all of our services;</li>
			<li>Send you marketing/promotional communications (If you do not wish to receive such marketing/promotional communications from us you may indicate your preferences at the time of registration or by following the instructions provided on the website or by providing instructions to this effect);</li>
			<li>Create various surveys and analysis in form of reports;</li>
			<li>Send newsletter(s) to you (Provided you subscribe to the same)</li>
			<li>Send you service-related announcements on rare occasions when it is necessary to do so;</li>
			<li>Provide you the opportunity to participate in contests or surveys on our website (If you participate, we may request certain additional personally identifiable information from you. Moreover, participation in these surveys or contests is shall be completely voluntary and you therefore shall have a choice whether or not to disclose such additional information);</li>
			<li>Contact you or send you e-mail or other communications regarding updates on our website, new job opportunities, services and additional/new job postings/openings which may be of your interest.</li>
			<li>Provide customer support and the services you request;</li>
			<li>Ascertain how many people visit our website, of what kind and what areas they visit,on our website;</li>
			<li>Resolve disputes, if any and troubleshooting;</li>
			<li>Avoid/check illegal and/or potentially prohibited activities and to enforce Agreements</li>
			<li>Provide service updates and promotional offers related to our services/products.</li>
			<li>Comply with any court judgment / decree / order / directive / legal & government authority /applicable law;</li>
			<li>Investigate potential violations or applicable national & international laws;</li>
			<li>Investigate deliberate damage to the website/services or its legitimate operation;</li>
			<li>Detect, prevent, or otherwise address security and/or technical issues;</li>
			<li>Protect the rights, property or safety of HTML and/or its Directors, employees and the general public at large;</li>
			<li>Respond to Claims of third parties;</li>
			<li>The members of our corporate family and group, affiliates, service providers and third parties under a contract to provide joint services, contents and marketing communications;</li>
			<li>Other third parties to whom you explicitly require us to send the information;</li>
		</ul>
		<br/>
		<p align="justify">If you consent to receive information about third party (such as employers, recruiters, data aggregators, marketers or others) opportunities, products or services/job opportunities or you make your profile visible we may disclose your information to such third parties for sending you communications via e-mail or otherwise to inform about new opportunities/services/products and new job postings/openings which may be of your interest. Also we might use your personal information to communicate with you and ascertain if you are interested in third party services.</p>
		<p align="justify">Your information shall be disclosed to our employees/service providers who provide services to us vis-a-vis our website and the services/products therein. These service providers/employees will have access to the information provided by you in order to perform their functions/services efficiently.</p>
		<p align="justify">If you choose to use our referral service to tell a friend about our website or refer a job posting/service, we will ask you for your friend's name and email address. We will automatically send your friend an email inviting him or her to visit the website. However, your friend may contact us to request that he does not require such services/content/email or we remove the information related to him from our database.</p>
		<p align="justify">Based upon the personally identifiable information you provide us, we will send you a welcoming email to verify your username and password. We will also communicate with you in response to your inquiries with respect to our services/content, to provide the services you request, and to manage your account. We will communicate with you by email or telephone, in accordance with your wishes. We will also send you SMS alerts from time to time to update you on new matched jobs and other updates.</p>
		<p align="justify">In order to provide certain services to you, we may on occasion supplement the personal information you submitted to us with information from third party sources (third parties for this purpose may include our group / holding / subsidiary companies and or our service partners /associates). We reserve the right to disclose your personally identifiable information as required by law and when we believe that disclosure is necessary to protect our rights and/or to comply with a judicial proceeding, court order, or legal process served on our website.</p>
		<h3 style="color: green">Resume Information</h3>
		<p align="justify">
			Based on the profile status selected by you, your resume shall be accessible to potential employers. You can store your resume on our servers and make it searchable by third parties/employers/recruiters. You may only use it for applying online though our website and denying access to others.<br/>
			If your profile status is visible, your resume is searchable and you make it non-confidential and visible to all and in such a case anyone can have access to your resume. If you keep your profile status anonymous, you opt to keep the resume confidential and then only those will have access to it to which you have applied for a job/opening.<br/>
			We cannot guarantee that third parties shall gain access to your resume neither we are responsible for the use made of the resume by third parties to who you apply or who have access to our database, while your profile status has been made visible by you. In case of making your profile status visible, we are not responsible for the privacy, secrecy or retention of your resume.<br/>
			You may edit, update and remove your resume at any time but parties who have access to our database (while your resume or profile was visible) may have retained a copy of your resume in their own files. We cannot be held responsible for such retention/storage. You should always remember that once you post your resume on our website with your profile visible, anybody will have access to the same and we do not have any control over such access and use of your resume/information by third parties. In case your profile status is anonymous and you apply for a job on our site, the prospective employer will also be able to retain a copy of your Resume and Profile.

		</p>
		<h3 style="color: green">Changing Your Personal Information</h3>
		<p align="justify">
			You can access and modify your personal information by signing on to the website. We will not modify the information provided by you. However, we recommend that you update your personal information as soon as such changes are necessitated.<br/>
			Where you make a public posting, you may not be able to change or remove it nor shall you be able to close your account. Upon your request, we will close your account and remove your personal information from view as soon as reasonably possible, based on your account activity and in accordance with applicable law(s). However, we will retain your personal information from closed accounts to comply with law, Avoid/check illegal and/or potentially prohibited activities and to enforce User Agreements; Comply with any court judgment / decree / order / directive / legal & government authority /applicable law; Investigate potential violations or applicable national & international laws; Investigate deliberate damage to the website/services or its legitimate operation; Detect, prevent, or otherwise address security and/or technical issues; Protect the rights, property or safety of HTML and/or its Directors, employees and the general public at large; Respond to Claims of third parties; and take such other actions as may be permitted by law.

		</p>
		<h3 style="color: green">Account Protection</h3>
		<p align="justify">Your password is the key to your account. You shall be solely responsible for all the activities happening under your username and you shall be solely responsible for keeping your password secure. Do not disclose your password to anyone. If you share your password or your personal information with others, you shall be solely responsible for all actions taken under your username and you may lose substantial control over your personal information and may be subject to legally binding actions taken on your behalf. Therefore, if your password has been compromised for any reason, you should immediately change your password.</p>
		<h3 style="color: green">Business Transaction:</h3>
		<p align="justify">
			In the event HTML goes through a business transition, such as a merger, acquisition by another company, or sale of all or a portion of its assets, your personally identifiable information will likely be among the assets transferred. Where your information is transferred you will be notified via email/prominent notice on our website for 30 days of any such change in ownership or control of your personal information.
		</p>
		<h3 style="color: green">Security:</h3>
		<p align="justify">
			The security of your personal information is important to us. When you enter your personal information we treat the data as an asset that must be protected and use tools (encryption, passwords, physical security, etc.) to protect your personal information against unauthorized access and disclosure. However, no method of transmission over the Internet, or method of electronic storage, is 100% secure, therefore, while we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security nor can we guarantee that third parties shall not unlawfully intercept or access transmissions or private communications, and that other users may abuse or misuse your personal information that you provide. Therefore, although we work hard to protect your information, we do not promise, and you should not expect, that your personal information or private communications will always remain private.
		</p>
		<h3 style="color: green">Links to Other Sites:</h3>
		<p align="justify">
			The website contains links to other sites that are not owned or controlled by HT Media Limited. Please be aware that we, HT Media Limited and/or the website, are not responsible for the privacy practices of such other sites.<br/>
			We encourage you to be aware when you leave our site and to read the privacy statements of each and every Web site that collects personally identifiable information.<br/>
			This privacy statement applies only to information collected by the website or to our other related websites provided it appears at the footer of the page therein. It does not apply to third party advertisements which appear on our websites and we suggest you read the privacy statements of such advertisers.

		</p>
		<h3 style="color: green">Changes in this Privacy Statement</h3>
		<p align="justify">
			If we decide to change our privacy policy, we will post those changes to this privacy statement and such other places we deem appropriate so that you are updated about the manner we collect information, what information we collect, how we use it and under what circumstances, if any, we disclose it.<br/>
			We reserve the right to modify this privacy statement at any time, so please review it frequently at Careerstairs.in

		</p>
		<h3 style="color: green">DISCLAIMER</h3>
		<p align="justify">HTML does not store or keep credit card data in a location that is accessible via the Internet. Once a credit card transaction has been completed, all credit card data is moved off-line only to ensure that the data/credit card information received is not accessible to anyone after completion of the on-line transaction and to ensure the maximum security. HTML uses the maximum care as is possible to ensure that all or any data / information in respect of electronic transfer of money does not fall in the wrong hands.<br/>
		HTML shall not be liable for any loss or damage sustained by reason of any disclosure (inadvertent or otherwise) of any information concerning the user's account and / or information relating to or regarding online transactions using credit cards / debit cards and / or their verification process and particulars nor for any error, omission or inaccuracy with respect to any information so disclosed and used whether or not in pursuance of a legal process or otherwise.
		</p>
		<h3 style="color: green">Contact Us</h3>
		<p>If you have any questions or suggestions regarding our privacy policy, please contact us at: <a href="mailto:support@careerstairs.in">support@careerstairs.in</a></p>
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