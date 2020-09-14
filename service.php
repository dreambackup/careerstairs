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
<title>CareerStairs | Terms & Service</title>

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
			<h2>Terms & Services</h2>
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
            Our Terms & Services !
        </p>
		<div class="clearfix"></div>
		<p align="justify">
		
This document is published in accordance with the provisions of Rule 3 (1) of the Information Technology (Intermediaries guidelines) Rules, 2011 that require publishing the rules and regulations, privacy policy and Terms of Use for access or usage of www.careerstairs.in website.
The domain name www.careerstairs.in (hereinafter referred to as "Website") is owned by Careerstairs a company incorporated under the Companies Act, 1956 with its registered office at Plot-62, Phase-V, Sector-18, Gurugram- 122015. (here in after referred to as "careerstairs.in").
Your use of the Website and services and tools are governed by the following terms and conditions ("Terms of Use") as applicable to the Website including the applicable policies which are incorporated herein by way of reference. If you transact on the Website, You shall be subject to the policies that are applicable to the Website for such transaction. By mere use of the Website, You shall be contracting with Careerstairs and these terms and conditions including the policies constitute your binding obligations, with Careerstairs.in.
<br/>
For the purpose of these Terms of Use, wherever the context so requires "You" or "User" shall mean any natural or legal person who has agreed to become a user of the Website by providing Registration Data while registering on the Website as Registered User using the computer systems. Careerstairs.in allows the User to surf the Website or making purchases without registering on the Website. The term "We", "Us", "Our" shall mean Careerstairs.in
<br/>
When you use any of the services provided by Us through the Website, including but not limited to job postings, resume services etc. You will be subject to the rules, guidelines, policies, terms, and conditions applicable to such service, and they shall be deemed to be incorporated into this Terms of Use and shall be considered as part and parcel of this Terms of Use. We reserve the right, at our sole discretion, to change, modify, add or remove portions of these Terms of Use, at any time without any prior written notice to You. It is your responsibility to review these Terms of Use periodically for updates / changes. Your continued use of the Website following the posting of changes will mean that you accept and agree to the revisions. As long as you comply with these Terms of Use, we grant you a personal, non-exclusive, non-transferable, limited privilege to enter and use the Website.
<br/>
ACCESSING, BROWSING OR OTHERWISE USING THE SITE INDICATES YOUR AGREEMENT TO ALL THE TERMS AND CONDITIONS UNDER THESETERMS OF USE, SO PLEASE READ THE TERMS OF USE CAREFULLY BEFORE PROCEEDING.
By impliedly or expressly accepting these Terms of Use, You also accept and agree to be bound by Careerstairs.in Policies ((including but not limited to Privacy Policy available on privacy policy) as amended from time to time.
<br/><strong style="color: green">Membership Eligibility</strong><br/>
Use of the Website is available only to persons who can form legally binding contracts under Indian Contract Act, 1872. Persons who are "incompetent to contract" within the meaning of the Indian Contract Act, 1872 including minors, un-discharged insolvents etc. are not eligible to use the Website. If you are a minor i.e. under the age of 18 years, you shall not register as a User of the Careerstairs.in website and shall not transact on or use the website. As a minor if you wish to use or transact on website, such use or transaction may be made by your legal guardian or parents on the Website. Careerstairs.in reserves the right to terminate your membership and / or refuse to provide you with access to the Website if it is brought to Careerstairs.in's notice or if it is discovered that you are under the age of 18 years.
<br/><strong style="color: green">Your Account and Registration Obligations</strong><br/>
If you use the Website, You shall be responsible for maintaining the confidentiality of your Display Name and Password and You shall be responsible for all activities that occur under your Display Name and Password. You agree that if You provide any information that is untrue, inaccurate, not current or incomplete or We have reasonable grounds to suspect that such information is untrue, inaccurate, not current or incomplete, or not in accordance with the this Terms of Use, We shall have the right to indefinitely suspend or terminate or block access of your membership on the Website and refuse to provide You with access to the Website. Such act on your part can accrue legal implications due to violation of laws not limited to criminal liability on your part. Further, the user agrees to indemnify Careerstairs.in for all losses incurred by it due to any false, distorted, manipulated, defamatory, libelous, vulgar, obscene, fraudulent or misleading facts or otherwise objectionable averments made by the user on the network of Careerstairs.in.
<br/><strong style="color: green">Communications</strong><br/>
When You use the Website or send emails or provide other data, information or communication to us, You agree and understand that you are communicating with us through electronic records and You consent to receive communications via electronic records from us periodically and as and when required. We may communicate with you by email or by such other mode of communication, electronic or otherwise.
<br/><strong style="color: green">Platform for Transaction and Communication</strong><br/>
The Website is a platform that Users utilize for taking services with respect to services provided by careerstairs.in and interact with one another for their transactions. Careerstairs.in is not and cannot be a party to or control in any manner any transaction between the Website's Users.
Henceforward:
	<br/>
	<ul class="list-1">
		<li>All commercial/contractual terms are offered by and agreed to between users of the website alone.</li>
		<li>Careerstairs.in does not make any representation or Warranty as to specifics (such as quality, value, salability, etc.) of the services proposed to be sold or offered to be sold or purchased on the Website of the third party. Careerstairs.in accepts no liability for any errors or omissions, whether on behalf of itself or third parties.</li>
		<li>Careerstairs.in platform shall not be utilized to upload, post, email, transmit or otherwise make available either directly or indirectly, any unsolicited bulk e-mail or unsolicited commercial e-mail by the user. Careerstairs.in reserves the right to filter and monitor and block the emails sent by users using the servers maintained by Careerstairs.in to relay emails. All attempts shall be made by Careerstairs.in and the user to abide by International Best Practices in containing and eliminating Spam.</li>
		<li>Users shall not spam the database maintained by careerstairs.in or indiscriminately and repeatedly forward mail that may be considered spam etc. etc. Any conduct of the user in violation of this clause shall entitle careerstairs.in to forthwith terminate all services to the user without notice and to forfeit any amounts paid by him.</li>
		<li>The user shall not upload, post, transmit, publish, or distribute any material or information that is unlawful, or which may potentially be perceived as being harmful, threatening, abusive, harassing, defamatory, libelous, vulgar, obscene, or racially, ethnically, or otherwise objectionable.</li>
		<li>The User is solely responsible for maintaining confidentiality of the User password and user identification and all activities and transmission performed by the User through his user identification and shall be solely responsible for carrying out any online or off-line transaction involving credit cards / debit cards or such other forms of instruments or documents for making such transactions and careerstairs.in assumes no responsibility or liability for their improper use of information relating to such usage of credit cards / debit cards used by the subscriber online / off-line.</li>
		<li>The User/Subscriber/Visitor to careerstairs.in and/or its affiliated websites does hereby specifically agree that he/she shall, at all times, comply with the requirements of the Information Technology Act, 2000 as also rules, regulations, guidelines, bye laws and notifications made thereunder, while assessing or feeding any resume/ insertion or information/data into the computers, computer systems or computer network of careerstairs.in. The said User/ subscriber/ visitor to careerstairs.in and/or its affiliated websites does further unequivocally declare that in case he violates any provisions of the Information Technology Act, 2000 and/or rules, regulations, guidelines, byelaws and notifications made thereunder, he shall alone be responsible for all his acts, deeds and things and that he alone shall be liable for civil and criminal liability there under or under any other law for the time being in force.</li>
		<li>You release and indemnify Careerstairs.in and/or any of its officers and representatives from any cost, damage, liability or other consequence of any of the actions of the Users of the Website and specifically waive any claims that you may have in this behalf under any applicable law. Notwithstanding its reasonable efforts in that behalf, Careerstairs.in cannot take responsibility or control the information provided by other Users which is made available on the Website. You may find other User's information to be offensive, harmful, inconsistent, inaccurate, or deceptive. Please use caution and practice safe trading when using the Website. Please note that there could be risks in dealing with underage persons or people acting under false pretence.</li>
		<li>The user shall not infringe on any intellectual property rights of any person / entity or retain information / download any information from any computer system or otherwise with an intention to do so.</li>
		<li>Careerstairs.in will make best efforts to do so but does not warrant that any of the web sites or any affiliate site(s) or network system linked to it is free of any operational errors nor does it warrant that it will be free of any virus, computer contaminant, worm, or other harmful components.  The subscription of a user shall be subject to Quotas as applicable and as advised. E-Mails provided as part of contact details are expected to be genuine and access to such email accounts is available to authorised personnel only.</li>
		<li>Careerstairs.in shall not be liable for any loss or damage sustained by reason of any disclosure (inadvertent or otherwise) of any information concerning the user's account and / or information relating to or regarding online transactions using credit cards / debit cards and / or their verification process and particulars nor for any error, omission or inaccuracy with respect to any information so disclosed and used whether or not in pursuance of a legal process or otherwise.</li>
		<li>Payments for the services offered by careerstairs.in shall be on a 100% advance basis. Refund if any will be at the sole discretion of Careerstairs.in. Careerstairs.in offers no guarantees whatsoever for the accuracy or timeliness of the refunds reaching the Customers card/bank accounts.  Careerstairs.in gives no guarantees of server uptime or applications working properly. All is on a best effort basis and liability is limited to refund of amount only. Careerstairs.in undertakes no liability for free services.</li>
		<li>In case a person using the world wide web/internet receives a spam or virus which includes a link to careerstairs.in or to any other site maintained, operated or owned by Careerstairs.in, it should not be held responsible for the same. Careerstairs.in assumes no responsibility for such mails.</li>
		<li>Careerstairs.in neither guarantees nor offers any warranty about the credentials bonafides, status or otherwise of the prospective employer/organization which downloads the resume/ insertion or information/data and uses it to contact the user. Careerstairs.in would not be held liable for loss of any data technical or otherwise, or of the resume/ insertion or information/data or particulars supplied by user due to acts of god as well as reasons beyond its control like corruption of data or delay or failure to perform as a result of any cause(s) or conditions that are beyond Careerstairs.in’s reasonable control including but not limited to strikes, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, distributed denial of service attacks, virus attacks, war and natural calamities.</li>
		<li>Careerstairs.in undertakes to take all reasonable precautions at its end to ensure that there is no leakage/misuse of the password granted to the subscriber. It shall be the sole responsibility of the user to ensure that it uses the privacy setting options as it deems fit to debar / refuse access of the data fed by it, to such corporate entities individuals or consultants.</li>
		<li>User further represent that the products/services purchased are not for resale to others.</li>
	</ul>

<br/><strong style="color: green">Use of the Website</strong><br/>
You agree, undertake and confirm that your use of Website shall be strictly governed by the following binding principles:
	<ul class="list-1">
		<li>You shall not host, display, upload, modify, publish, transmit, update or share any information which:</li>
		<li>Belongs to another person and to which You does not have any right to;</li>
		<li>Is grossly harmful, harassing, blasphemous, defamatory, obscene, pornographic, paedophilic, libellous, invasive of another's privacy, hateful, or racially, ethnically objectionable, disparaging, relating or encouraging money laundering or gambling, or otherwise unlawful in any manner whatever; or unlawfully threatening or unlawfully harassing including but not limited to "indecent representation of women" within the meaning of the Indecent Representation of Women (Prohibition) Act, 1986;</li>
		<li>Is misleading in any way;</li>
		<li>Is patently offensive to the online community, such as sexually explicit content, or content that promotes obscenity, paedophilia, racism, bigotry, hatred or physical harm of any kind against any group or individual;</li>
		<li>Harasses or advocates harassment of another person;</li>
		<li>Involves the transmission of "junk mail", "chain letters", or unsolicited mass mailing or "spamming";</li>
		<li>Promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libellous;</li>
		<li>Infringes upon or violates any third party's rights [including, but not limited to, intellectual property rights, rights of privacy (including without limitation unauthorized disclosure of a person's name, email address, physical address or phone number) or rights of publicity];</li>
		<li>Promotes an illegal or unauthorized copy of another person's copyrighted work (see "Copyright complaint" below for instructions on how to lodge a complaint about uploaded copyrighted material), such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files;</li>
		<li>Contains restricted or password-only access pages, or hidden pages or images (those not linked to or from another accessible page);</li>
		<li>Provides material that exploits people in a sexual, violent or otherwise inappropriate manner or solicits personal information from anyone;</li>
		<li>Provides instructional information about illegal activities such as making or buying illegal weapons, violating someone's privacy, or providing or creating computer viruses;</li>
		<li>Contains video, photographs, or images of another person (with a minor or an adult).</li>
		<li>Tries to gain unauthorized access or exceeds the scope of authorized access to the Website or to profiles, blogs, communities, account information, bulletins, friend request, or other areas of the Website or solicits passwords or personal identifying information for commercial or unlawful purposes from other users;</li>
		<li>Engages in commercial activities and/or sales without Our prior written consent such as contests, sweepstakes, barter, advertising and pyramid schemes, or the buying or selling of "virtual" products related to the Website. Throughout this Terms of Use, Careerstairs.in's prior written consent means a communication coming from Careerstairs.in's Legal Department, specifically in response to your request, and specifically addressing the activity or conduct for which you seek authorization;</li>
		<li>solicits gambling or engages in any gambling activity which We, in Our sole discretion, believes is or could be construed as being illegal;</li>
		<li>Interferes with another USER's use and enjoyment of the Website or any other individual's User and enjoyment of similar services;</li>
		<li>Refers to any website or URL that, in Our sole discretion, contains material that is inappropriate for the Website or any other website, contains content that would be prohibited or violates the letter or spirit of these Terms of Use.</li>
		<li>Harm minors in any way;</li>
		<li>Infringes any patent, trademark, copyright or other proprietary rights or third party's trade secrets or rights of publicity or privacy or shall not be fraudulent;</li>
		<li>Violates any law for the time being in force;</li>
		<li>Deceives or misleads the addressee/ users about the origin of such messages or communicates any information which is grossly offensive or menacing innature;</li>
		<li>Impersonate another person;</li>
		<li>Contains software viruses or any other computer code, files or programs designed to interrupt, destroy or limit the functionality of any computer resource; or contains any trojan horses, worms, time bombs, cancel bots, easter eggs or other computer programming routines that may damage, detrimentally interfere with, diminish value of, surreptitiously intercept or expropriate any system, data or personal information;</li>
		<li>Threatens the unity, integrity, defense, security or sovereignty of India, friendly relations with foreign states, or public order or causes incitement to the commission of any cognizable offence or prevents investigation of any offence or is insulting any other nation.</li>
		<li>Shall not be false, inaccurate or misleading;</li>
		<li>Shall not, directly or indirectly, offer, attempt to offer, trade or attempt to trade in any item, the dealing of which is prohibited or restricted in any manner under the provisions of any applicable law, rule, regulation or guideline for the time being in force.</li>
		<li>Shall not create liability for Us or cause Us to lose (in whole or in part) the services of Our internet service provider ("ISPs") or other suppliers;</li>
		<li>You shall not use any "deep-link", "page-scrape", "robot", "spider" or other automatic device, program, algorithm or methodology, or any similar or equivalent manual process, to access, acquire, copy or monitor any portion of the Website or any Content, or in any way reproduce or circumvent the navigational structure or presentation of the Website or any Content, to obtain or attempt to obtain any materials, documents or information through any means not purposely made available through the Website. We reserve Our right to bar any such activity.</li>
		<li>You shall not attempt to gain unauthorized access to any portion or feature of the Website, or any other systems or networks connected to the Website or toany server, computer, network, or to any of the services offered on or through the Website, by hacking, password "mining" or any other illegitimate means.</li>
		<li>You shall not probe, scan or test the vulnerability of the Website or any network connected to the Website nor breach the security or authentication measures on the Website or any network connected to the Website. You may not reverse look-up, trace or seek to trace any information on any other User of or visitor to Website, or any other customer, including any account on the Website not owned by You, to its source, or exploit the Website or any service or information made available or offered by or through the Website, in any way where the purpose is to reveal any information, including but not limited to personal identification or information, other than Your own information, as provided for by the Website.</li>
		<li>You shall not make any negative, denigrating or defamatory statement(s) or comment(s) about Us or the brand name or domain name used by Us including the terms Careerstairs.in, or otherwise engage in any conduct or action that might tarnish the image or reputation, of Careerstairs.in on platform or otherwise tarnish or dilute any Careerstairs.in's trade or service marks, trade name and/or goodwill associated with such trade or service marks, trade name as may be owned or used by us. You agree that You will not take any action that imposes an unreasonable or disproportionately large load on the infrastructure of the Website or Careerstairs.in's systems or networks, or any systems or networks connected to Careerstairs.in.</li>
		<li>You agree not to use any device, software or routine to interfere or attempt to interfere with the proper working of the Website or any transaction being conducted on the Website, or with any other person's use of the Website.</li>
		<li>You may not forge headers or otherwise manipulate identifiers in order to disguise the origin of any message or transmittal You send to Us on or through the Website or any service offered on or through the Website. You may not pretend that You are, or that You represent, someone else, or impersonate any other individual or entity.</li>
		<li>You may not use the Website or any content for any purpose that is unlawful or prohibited by these Terms of Use, or to solicit the performance of any illegal activity or other activity which infringes the rights of Careerstairs.in and / or others.</li>
		<li>You shall at all times ensure full compliance with the applicable provisions of the Information Technology Act, 2000 and rules thereunder as applicable and as amended from time to time and also all applicable Domestic laws, rules and regulations (including the provisions of any applicable Exchange Control Laws or Regulations in Force) and International Laws, Foreign Exchange Laws, Statutes, Ordinances and Regulations (including, but not limited to Sales Tax/VAT, Income Tax, Octroi, Service Tax, Central Excise, Custom Duty, Local Levies) regarding Your use of Our platform. You shall not engage in any activity, which is prohibited by the provisions of any applicable law including exchange control laws or regulations for the time being in force.</li>
		<li>Solely to enable Us to use the information You supply Us with, so that we are not violating any rights You might have in Your Information, You agree to grant Us a non-exclusive, worldwide, perpetual, irrevocable, royalty-free, sub-licensable (through multiple tiers) right to exercise the copyright, publicity, database rights or any other rights You have in Your Information, in any media now known or not currently known, with respect to Your Information. We will only use Your information in accordance with the Terms of Use and Privacy Policy applicable to use of the Website.</li>
		<li>You shall not engage in advertising to, or solicitation of, other Users of the Website to buy or sell any products or services, including, but not limited to,products or services related to that being displayed on the Website or related to us. You may not transmit any chain letters or unsolicited commercial or junkemail to other Users via the Website. It shall be a violation of these Terms of Use to use any information obtained from the Website in order to harass, abuse, or harm another person, or in order to contact, advertise to, solicit, or sell to another person other than Us without Our prior explicit consent. In order to protect Our Users from such advertising or solicitation, We reserve the right to restrict the number of messages or emails which a user may send to other Users in any 24-hour period which We deems appropriate in its sole discretion. You understand that We have the right at all times to disclose any information (including the identity of the persons providing information or materials on the Website) as necessary to satisfy any law, regulation or valid governmental request. This may include, without limitation, disclosure of the information in connection with investigation of alleged illegal activity or solicitation of illegal activity or in response to a lawful court order or subpoena. In addition, We can (and You hereby expressly authorize Us to) disclose any information about You to law enforcement or other government officials, as we, in Our sole discretion, believe necessary or appropriate in connection with the investigation and/or resolution of possible crimes, especially those that may involve personal injury. We reserve the right, but has no obligation, to monitor the materials posted on the Website. Careerstairs.in shall have the right to remove or edit any content that in itssole discretion violates, or is alleged to violate, any applicable law or either the spirit or letter of these Terms of Use. Notwithstanding this right, YOU REMAINSOLELY RESPONSIBLE FOR THE CONTENT OF THE MATERIALS YOU POST ON THE WEBSITE AND IN YOUR PRIVATE MESSAGES. Please be advised that such Content posted does not necessarily reflect Careerstairs.in views. In no event shall Careerstairs.in assume or have any responsibility or liability for any Content posted or for any claims, damages or losses resulting from use of Content and/or appearance of Content on the Website. You hereby represent and warrant that You have all necessary rights in and to all Content which You provide and all information it contains and that such Content shall not infringe any proprietary or other rights of third parties or contain any libellous, tortious, or otherwise unlawful information.</li>
		<li>It is possible that other users (including unauthorized users or "hackers") may post or transmit offensive or obscene materials on the Website and that You may be involuntarily exposed to such offensive and obscene materials. It also is possible for others to obtain personal information about You due to your use of the Website, and that the recipient may use such information to harass or injure You. We does not approve of such unauthorized uses, but by using the Website You acknowledge and agree that We are not responsible for the use of any personal information that You publicly disclose or share with others on theWebsite. Please carefully select the type of information that You publicly disclose or share with others on the Website.</li>
		<li>Careerstairs.in shall have all the rights to take necessary action and claim damages that may occur due to your involvement/participation in any way on your own or through group/s of people, intentionally or unintentionally in DoS/DDoS (Distributed Denial of Services).</li>
	</ul>
<br/><strong style="color: green">Consent to Use of Data</strong><br/>

You agree that www.careerstairs.in can collect certain personal information about you such as your IP Address, etc. and can automatically store it the database of careerstairs.in. However, if you register yourself on careerstairs.in, you shall be required to provide certain personal information for the registration and/or access the web pages. Such information may include, without limitation, your name, email address, contact address, mobile/telephone number(s), sex, age, occupation, interests, credit card information, billing information, financial information, content, IP address, standard web log information, information about your computer hardware and software and such other information as may be required for your interaction with the services and from which your identity is discernible. We may also collect demographic information that is not unique to you such as code, preferences, favorites, etc. Further, sometimes you may be asked to provide descriptive, cultural, preferential and social & life style information.( herein after referred to as INFORMATION).
<br/>
You agree and consent that any synchronization of your social media accounts with that of careerstairs.in account shall be available to be viewed by other recruiters and third parties for the purposes of providing services of careerstairs.in and other related activities.
<br/>
You agree that Careerstairs.in, in accordance with the careerstairs.in Privacy Policy, may collect and use INFORMATION, technical data such as Your IP address, device ID, usage data and third party related information , including but not limited to technical information about your mobile device, system and application software, account details and further data in connection with such account on third party social media platforms and peripherals, that is gathered periodically to facilitate the provision of software updates, product support and other services to you related to the careerstairs.in App.<br/>
You agree and confirm that any such INFORMATION collected through your registration or opting/ purchasing any paid services/non paid services on careerstairs.in can use, transfer, process and store such INFORMATION in any manner whatsoever. The INFORMATION collected can be shared with third parties in case you register yourself on the careerstairs.in or opting/ purchasing any paid services/non paid services on careerstairs.in and you herein by agreeing to this terms and conditions grants explicit permission and approval for the same. You agree and confirm that no sensitive/personal information has been shared by you with www.careerstairs.in.<br/>
You agree that Careerstairs.in, in accordance with the careerstairs.in Privacy Policy, may collect and use INFORMATION, technical data such as Your IP address, device ID, usage data and third party related information , including but not limited to technical information about your mobile device, system and application software, account details and further data in connection with such account on third party social media platforms and peripherals, that is gathered periodically to facilitate the provision of software updates, product support and other services to you related to the careerstairs.in App.
You further agree and guarantee that agreeing to the terms and conditions laid down herein, we may collect, use and share certain information regarding the contacts contained in Your device’s phone book (“Contact Information”) with other Users in accordance with the careerstairs.in Privacy Policy and in connection with our Services . By allowing Contact Information to be collected, You give careerstairs.in a right to use that Contact Information as a part of the Service and you guarantee that you have any and all permissions required to share such Contact Information with us. You may opt-out to prevent the sharing of Contact Information at any time.<br/>
We also use this Contact information to enhance the experience with our Services by helping you to grow your network by: identifying your contacts that are already Members of our Services; providing a template to send invitations on your behalf to your contacts that are not Members; and suggesting people you may know (even if not in your contacts) but are not yet connected with you on our Services (as we may infer from your shared connections or shared managers, employers, educational institutions and other such factors). We may also use this information to show you and other Members that you share the same uploaded contacts that may or may not be Members.<br/>
As between you and careerstairs.in, you own the content and information that you submit or post to careerstairs.in and you are only granting careerstairs.in the following non-exclusive license: A worldwide, transferable and sub-licensable right to use, copy, modify, distribute, publish, and process, information and content that you provide through our Services, without any further consent, notice and/or compensation to you or others. These rights are limited in the following ways:
	<br/>
	<ul class="list-1">
		<li>You can end this license for specific content by deleting such content from the Services, or generally by closing your account, except (a) to the extent you shared it with others as part of the Service and they copied or stored it and (b) for the reasonable time it takes to remove from backup and other systems.</li>
		<li>We will not include your content in advertisements for the products and services of others (including sponsored content) to others without your separate consent. However, we have the right, without compensation to you or others, to serve ads near your content and information, and your comments on sponsored content may be visible as noted in the Privacy Policy.</li>
		<li>We will get your consent if we want to give others the right to publish your posts beyond the Service. However, other Members and/or Visitors may access and share your content and information, consistent with your settings and degree of connection with them.</li>
		<li>While we may edit and make formatting changes to your content (such as translating it, modifying the size, layout or file type or removing metadata), we will not modify the meaning of your expression.</li>
		<li>Because you own your content and information and we only have non-exclusive rights to it, you may choose to make it available to others, including under the terms of a Creative Commons license.</li>
	</ul>
<br/>
You agree that we may access, store and use any information that you provide in accordance with the terms of the Privacy Policy.
<br/>
By submitting suggestions or other feedback regarding the Services of careerstairs.in, you agree that careerstairs.in can use and share (but does not have to) such feedback for any purpose without compensation to you.<br/>
You agree to only provide content or information if that does not violate the law nor anyone's rights (e.g., without violating any intellectual property rights or breaching a contract). You also agree that your profile information will be truthful. Careerstairs.in may be required by law to remove certain information or content in certain countries.
<br/><strong style="color: green">Contents Posted on Site</strong><br/>

All text, graphics, user interfaces, visual interfaces, photographs, trademarks, logos, sounds, music and artwork (collectively, "Content"), is a third party user generated content and Careerstairs.in has no control over such third party user generated content as Careerstairs.in is merely an intermediary for the purposes of this Terms of Use.<br/>
Except as expressly provided in these Terms of Use, no part of the Website and no Content may be copied, reproduced, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted or distributed in any way (including "mirroring") to any other computer, server, Website or other medium for publication or distribution or for any commercial enterprise, without Careerstairs.in's express prior written consent.<br/>
You may use information on the products and services purposely made available on the Website for downloading, provided that You <br/>(1) do not remove any proprietary notice language in all copies of such documents,<br/>(2) use such information only for your personal, non-commercial informational purpose and do not copy or post such information on any networked computer or broadcast it in any media, <br/>(3) make no modifications to any such information, and <br/>(4) do not make any additional representations or warranties relating to such documents.<br/>
You shall be responsible for any notes, messages, emails, billboard postings, photos, drawings, profiles, opinions, ideas, images, videos, audio files or other materials or information posted or transmitted to the Website (collectively, "Content"). Such Content will become Our property and You grant Us the worldwide, perpetual and transferable rights in such Content. We shall be entitled to, consistent with Our Privacy Policy as adopted in accordance with applicable law, use the Content or any of its elements for any type of use forever, including but not limited to promotional and advertising purposes and in any media whether now known or hereafter devised, including the creation of derivative works that may include the Content You provide. You agree that any Content You post may be used by us, consistent with Our Privacy Policy and Rules of Conduct on Site as mentioned herein, and You are not entitled to any payment or other compensation for such use.
<br/><strong style="color: green">Privacy</strong><br/>
We view protection of Your privacy as a very important principle. We understand clearly that You and Your Personal Information is one of Our most important assets. We store and process Your Information including any sensitive financial information collected (as defined under the Information Technology Act, 2000), if any, on computers that may be protected by physical as well as reasonable technological security measures and procedures in accordance with Information Technology Act 2000 and Rules there under. Our current Privacy Policy is available at privacy policy. If you object to Your Information being transferred or used in this way please do not use Website.<br/>
We and our affiliates will share / sell / transfer / license / covey some or all of your personal information with another business entity should we (or our assets)plan to merge with or are acquired by that business entity, or re-organization, amalgamation, restructuring of business or for any other reason whatsoever. Should such a transaction or situation occur, the other business entity or the new combined entity will be required to follow the privacy policy with respect to your personal information. Once you provide your information to us, you provide such information to us and our affiliate and we and our affiliate may use such information to provide you various services with respect to your transaction whether such transaction are conducted on www.careerstairs.in.com or with third party merchant's or third party merchant's website.<br/>
Further User hereby express that it has no objection upon any call/SMS/Communication by Careerstairs.in, any third party on its behalf or any other party authorized by Careerstairs.in, communicating to User with regard to the Careerstairs.in Services like Job Search, Job Alert, Shine Career Services etc or any other services of its agents.. Notwithstanding User’s registration with National Do Not Call Registry (In Fully or Partly blocked category under National Customer Preference Register set up under Telecom Regulatory Authority of India), User hereby expresses his interest and accord its willful consent to receive communication (including commercial communication) in relation to Careerstairs.in Services. User further confirms that any communication, as mentioned hereinabove, shall not be construed as Unsolicited Commercial Communication under the TRAI guidelines and User has specifically opted to receive communication in this regard on the telephone number provided by the User.
<br/><strong style="color: green">Disclaimer of Warranties and Liability</strong><br/>
This Website, all the materials and products (including but not limited to software) and services, included on or otherwise made available to you through this site are provided on "as is" and "as available" basis without any representation or warranties, express or implied except otherwise specified in writing. Without prejudice to the forgoing paragraph, Careerstairs.in does not warrant that:<br/>
o	This Website will be constantly available, or available at all; or<br/>
o	The information on this Website is complete, true, accurate or non-misleading.<br/>
Careerstairs.in will not be liable to You in any way or in relation to the Contents of, or use of, or otherwise in connection with, the Website. Careerstairs.in does not warrant that this site; information, Content, materials, product (including software) or services included on or otherwise made available to You through the Website; their servers; or electronic communication sent from Us are free of viruses or other harmful components.<br/>
All the contents of this Site are only for general information or use. They do not constitute advice and should not be relied upon in making (or refraining from making) any decision. Any specific advice or replies to queries in any part of the Site is/are the personal opinion of such experts/consultants/persons and are not subscribed to by this Site. The information from or through this site is provided on "AS IS" basis, and all warranties, expressed or implied of any kind, regarding any matter pertaining to any goods, service or channel, including without limitation, the implied warranties of merchantability, fitness for a particular purpose, and non-infringement are disclaimed and excluded. Certain links on the Site lead to resources located on servers maintained by third parties over whom careerstairs.in has no control or connection, business or otherwise as these sites are external to careerstairs.in you agree and understand that by visiting such sites you are beyond the careerstairs.in’s website. Careerstairs.in therefore neither endorses nor offers any judgement or warranty and accepts no responsibility or liability for the authenticity/availability of any of the goods/services/or for any damage, loss or harm, direct or consequential or any violation of local or international laws that may be incurred by your visit and/or transaction/s on these sites
<br/><strong style="color: green">Service Payment</strong><br/>
While availing any of the payment method/s available on the Website, we will not be responsible or assume any liability, whatsoever in respect of any loss or damage arising directly or indirectly to You due to:<br/>
o	Lack of authorization for any transaction/s, or<br/>
o	Exceeding the preset limit mutually agreed by You and between "Bank/s", or<br/>
o	Any payment issues arising out of the transaction, or<br/>
o	Decline of transaction for any other reason/s<br/>
o	All payments made against the purchases/services on Website by you shall be compulsorily in Indian Rupees acceptable in the Republic of India. Website will not facilitate transaction with respect to any other form of currency with respect to the purchases made on Website. Before shipping / delivering your order to you, Seller may request you to provide supporting documents (including but not limited to Govt. issued ID and address proof) to establish the ownership of the payment instrument used by you for your purchase. This is done in the interest of providing a safe online environment to Our Users.<br/>
o	You have specifically authorized Careerstairs.in or its service providers to collect, process, facilitate and remit payments and / or the Transaction Price electronically or through Cash on Delivery to and from other Users in respect of transactions through Payment Facility. Your relationship with Careerstairs.in is on a principal to principal basis and by accepting these Terms of Use you agree that Careerstairs.in is an independent contractor for all purposes, and does not have control of or liability for the products or services that are listed on Careerstairs.in's Website that are paid for by using the Payment Facility. Careerstairs.in does not guarantee the identity of any User nor does it ensure that a Buyer or a Seller will complete a transaction.<br/>
o	You understand, accept and agree that the payment facility provided by Careerstairs.in is neither a banking nor financial service but is merely a facilitator providing an electronic, automated online electronic payment, receiving payment through Cash On Delivery, collection and remittance facility for the Transactions on the Careerstairs.in Website using the existing authorized banking infrastructure and Credit Card payment gateway networks. Further, by providing Payment Facility, Careerstairs.in is neither acting as trustees nor acting in a fiduciary capacity with respect to the Transaction or the Transaction Price.<br/>
o	Careerstairs.in reserves the right to impose limits on the number of Transactions or Transaction Price which Careerstairs.in may receive from on an individual Valid Credit/Debit/ Cash Card / Valid Bank Account/ and such other infrastructure or any other financial instrument directly or indirectly through payment aggregator or through any such facility authorized by Reserve Bank of India to provide enabling support facility for collection and remittance of payment or by an individual Buyer during any time period, and reserves the right to refuse to process Transactions exceeding such limit.<br/>
o	Careerstairs.in reserves the right to refuse to process Transactions by users with a prior history of questionable charges including without limitation breach of any agreements by user with Careerstairs.in or breach/violation of any law or any charges imposed by Issuing Bank or breach of any policy.
<br/><strong style="color: green">Compliance with Laws:</strong><br/>
User shall comply with all the applicable laws (including without limitation Foreign Exchange Management Act, 1999 and the rules made and notifications issued there under and the Exchange Control Manual as may be issued by Reserve Bank of India from time to time, Customs Act, Information and Technology Act, 2000 as amended by the Information Technology (Amendment) Act 2008, Prevention of Money Laundering Act, 2002 and the rules made thereunder, Foreign Contribution Regulation Act, 1976 and the rules made there under, Income Tax Act, 1961 and the rules made there under, Export Import Policy of government of India) applicable to them respectively for using Payment Facility and Careerstairs.in Website.
<br/><strong style="color: green">Buyer's arrangement with Issuing Bank:</strong><br/>
All Valid Credit / Debit/ Cash Card/ and other payment instruments are processed using a Credit Card payment gateway or appropriate payment system infrastructure and the same will also be governed by the terms and conditions agreed to between the user and the respective Issuing Bank and payment instrument issuing company.
All Online Bank Transfers from Valid Bank Accounts are processed using the gateway provided by the respective Issuing Bank which support Payment Facility to provide these services to the Users. All such Online Bank Transfers on Payment Facility are also governed by the terms and conditions agreed to between user and the respective Issuing Bank.
<br/><strong style="color: green">Indemnity</strong><br/>
You shall indemnify and hold harmless Careerstairs.in, its owner, licensee, affiliates, subsidiaries, group companies (as applicable) and their respective officers, directors, agents, and employees, from any claim or demand, or actions including reasonable attorneys' fees, made by any third party or penalty imposed due to or arising out of Your breach of this Terms of Use, privacy Policy and other Policies, or Your violation of any law, rules or regulations or the rights (including infringement of intellectual property rights) of a third party.
<br/><strong style="color: green">Applicable Law</strong><br/>
Terms of Use shall be governed by and interpreted and construed in accordance with the laws of India. The place of jurisdiction shall be exclusively in Haryana
<br/><strong style="color: green">Trademark, Copyright and Restriction</strong><br/>
This site is controlled and operated by Careerstairs.in. All material on this site, including images, illustrations, audio clips, and video clips, are protected by copyrights, trademarks, and other intellectual property rights. Material on Website is solely for Your personal, non-commercial use. You must not copy, reproduce, republish, upload, post, transmit or distribute such material in any way, including by email or other electronic means and whether directly or indirectly and You must not assist any other person to do so. Without the prior written consent of the owner, modification of the materials, use of the materials on any other website or networked computer environment or use of the materials for any purpose other than personal, non-commercial use is a violation of the copyrights, trademarks and other proprietary rights, and is prohibited. Any use for which You receive any remuneration, whether in money or otherwise, is a commercial use for the purposes of this clause.
<br/><strong style="color: green">Trademark complaint</strong><br/> 
Careerstairs.in respects the intellectual property of others. In case You feel that Your Trademark has been infringed, You can write to Careerstairs.in at contact@careerstairs.in.
<br/><strong style="color: green">Limitation of Liability</strong><br/>
IN NO EVENT SHALL CAREERSTAIRS.IN BE LIABLE FOR ANY SPECIAL, INCIDENTAL, INDIRECT OR CONSEQUENTIAL DAMAGES OF ANY KIND IN CONNECTION WITH THESE TERMS OF USE, EVEN IF USER HAS BEEN INFORMED IN ADVANCE OF THE POSSIBILITY OF SUCH DAMAGES.
<br/><strong style="color: green">Contact Us</strong><br/>
Please contact us for any questions or comments (including all inquiries unrelated to copyright infringement) regarding this Website at https://careerstairs.in/
POLICIES
<br/><strong style="color: green">Email Abuse & Threat Policy</strong><br/>
Private communication, including email correspondence, is not regulated by Careerstairs.in. Careerstairs.in encourages its Users to be professional, courteous and respectful when communicating by email.
However, Careerstairs.in will investigate and can take action on certain types of unwanted emails that violate Careerstairs.in policies. Such instances: Threats of Bodily Harm - Careerstairs.in does not permit Users to send explicit threats of bodily harm. Misuse of Careerstairs.in System - Careerstairs.in allows Users to facilitate transactions through the Careerstairs.in system, but will investigate any misuse of this service. Spoof (Fake) email - Careerstairs.in will never ask you to provide sensitive information through email. In case you receive any spoof (fake) email, you are requested to report the same to Us through 'Contact Us' tab. Spam (Unsolicited Commercial email) - Careerstairs.in's spam policy applies only to unsolicited commercial messages sent by Careerstairs.in Users. Careerstairs.in Users are not allowed to send spam messages to other Users. Offers to Buy or Sell Outside of Careerstairs.in - Careerstairs.in prohibits email offers to buy or sell listed products outside of the Careerstairs.in Website. Offers of this nature are a potential fraud risk for Users. Careerstairs.in policy prohibits user-to-user threats of physical harm via any method including, phone, email and on Our public message boards. Violations of this policy may result in a range of actions, including:<br/>
o	Limits on account privileges<br/>
o	Account suspension<br/>
o	Cancellation of listings<br/>
o	Loss of special status<br/>
o	Other Businesses<br/>
Careerstairs.in does not take responsibility or liability for the actions, products, content and services on the Website, which are linked to Affiliates and / or third party websites using Website's APIs or otherwise. In addition, the Website may provide links to the third party websites of Our affiliated companies and certain other businesses for which, Careerstairs.in assumes no responsibility for examining or evaluating the products and services offered by them. Careerstairs.in do not warrant the offerings of, any of these businesses or individuals or the content of such third party website(s). Careerstairs.in does not endorse, in any way, any third party website(s) or content thereof.


			
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