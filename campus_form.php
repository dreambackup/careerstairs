<?php
include('db/config.php');
session_start();
error_reporting(0);
$var = test_input($_GET['ver']);
if(isset($var))
{
	$count = 0;
	$stm = $db->prepare("SELECT id FROM campus_user WHERE link = ? ");
	$stm->bind_param('s',$var);
	$stm->execute();
	$stm->store_result();
	$count = $stm->num_rows;
	$stm->free_result();
	
	if($count == 1){
	}
	else{
		// Unset all session variables
		session_unset();
		// Delete all session variables
		session_destroy();
		header("Location: campus.php");
	}
}
else{
	header("Location: index.php");
}

if(isset($_POST['basic_submit'])){
	
	$basic_question = test_input($_POST['basic_question']);
	$non_tpo_basic_name = test_input(ucname($_POST['non_tpo_basic_name']));
	$non_tpo_basic_email = test_input($_POST['non_tpo_basic_email']);
	$non_tpo_position = test_input($_POST['non_tpo_position']);
	$non_tpo_basic_mobile = test_input($_POST['non_tpo_basic_mobile']);
	$tpo_basic_name = test_input(ucname($_POST['tpo_basic_name']));
	$tpo_basic_email = test_input($_POST['tpo_basic_email']);
	$tpo_basic_mobile = test_input($_POST['tpo_basic_mobile']);
	$college_name = test_input(ucname($_POST['college_name']));
	$college_uni = test_input(ucname($_POST['college_uni']));
	
	$educations = test_input($_POST['educations']);
	$temp_educations = explode(",",$educations);
	$education= json_encode(array_map('trim',array_map('htmlspecialchars',array_filter($temp_educations))));
	
	$college_departments = test_input($_POST['college_departments']);
	$students = $_POST['students'];
	$faculty = $_POST['faculty'];
	$url_input = test_input($_POST['url_input']);
	$college_city = test_input($_POST['college_city']);
	$college_dist = test_input($_POST['college_dist']);
	$college_state = test_input($_POST['college_state']);
	$college_address = test_input($_POST['college_address']);
	$college_principal_name = test_input(ucname($_POST['college_principal_name']));
	$college_principal_email = test_input($_POST['college_principal_email']);
	$college_principal_number = test_input($_POST['college_principal_number']);
	$distance_city = test_input($_POST['distance_city']);
	$distance_bus = test_input($_POST['distance_bus']);
	$distance_rail = test_input($_POST['distance_rail']);
	$college_reach = test_input($_POST['college_reach']);
	
	//getting hashed password
	$options = [
	'cost' => 11,
	];
	$link = password(40);
	
	$err = '';
	
	//starting profile pic coding
	$imgFile = $_FILES['file']['name'];
	$tmp_dir = $_FILES['file']['tmp_name'];
	$imgSize = $_FILES['file']['size'];
	
	if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
	}
	if($imgFile)
	{ 
		$upload_dir = 'images/colleges/'; // upload directory 
		unlink($upload_dir.$_SESSION['username']);
		$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
		$userpic = $link.".".$imgExt;
		
		if(in_array($imgExt, $valid_extensions)){   
			if($imgSize < 500000){	// don't want to delete the default pic
				move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				$_SESSION['username'] = $userpic;
			}
			else{
				$err = $err . "Sorry, Your College Logo is too large it should be less then 500 Kb </br>";
			}
		}
		else{
			$err = $err . "Sorry, only JPG, JPEG, PNG files are allowed </br>";  
		}
	}
	else
		$err = $err . 'There is a Problem with Image </br>';
	
	
	if(isset($basic_question) && !empty($basic_question) && ($basic_question == 'yes' || $basic_question == 'no')){
		
		if($basic_question == 'yes'){
			//tpo name
			if(isset($tpo_basic_name) && !empty($tpo_basic_name)  && preg_match("/^[a-zA-Z ]*$/",$tpo_basic_name) && (strlen($tpo_basic_name) >5) && (strlen($tpo_basic_name) < 101)){
			}
			else
				$err = $err . "Only Alphabets and white space allowed in TPO Full Name </br>";
			//tpo phone
			if(isset($tpo_basic_mobile) && !empty($tpo_basic_mobile) && preg_match("/^[0-9]*$/",$tpo_basic_mobile)){
			}
			else
				$err = $err . "Only Numbers are allowed in TPO Mobile Number </br>";
			//tpo email
			if(isset($tpo_basic_email) && !empty($tpo_basic_email) && filter_var($tpo_basic_email, FILTER_VALIDATE_EMAIL) && (strlen($tpo_basic_email) >8) && (strlen($tpo_basic_email) < 101)){
			}
			else
				$err = $err . "Invalid TPO Email address </br>";
		}
		else if($basic_question == 'no'){
			//non tpo name
			if(isset($non_tpo_basic_name) && !empty($non_tpo_basic_name)  && preg_match("/^[a-zA-Z ]*$/",$non_tpo_basic_name) && (strlen($non_tpo_basic_name) >5) && (strlen($non_tpo_basic_name) < 101)){
			}
			else
				$err = $err . "Only Alphabets and white space allowed in Your Full Name </br>";
			//non tpo phone
			if(isset($non_tpo_basic_mobile) && !empty($non_tpo_basic_mobile) && preg_match("/^[0-9]*$/",$non_tpo_basic_mobile)){
			}
			else
				$err = $err . "Only Numbers are allowed in Your Mobile Number </br>";
			//non tpo email
			if(isset($non_tpo_basic_email) && !empty($non_tpo_basic_email) && filter_var($non_tpo_basic_email, FILTER_VALIDATE_EMAIL) && (strlen($non_tpo_basic_email) >8) && (strlen($non_tpo_basic_email) < 101)){
			}
			else
				$err = $err . "You have Entered an Invalid Email address </br>";
			
			$options = array("H.O.D","Board Memeber","Faculty","Vice Principal","Principal","Coordinator","Other");
			
			//position non tpo
			if(isset($non_tpo_position) && !empty($non_tpo_position) && in_array($non_tpo_position, $options)){	
			}
			else
				$err = $err . "Invalid Position </br>";
			
			//tpo name
			if(isset($tpo_basic_name) && !empty($tpo_basic_name)  && preg_match("/^[a-zA-Z ]*$/",$tpo_basic_name) && (strlen($tpo_basic_name) >5) && (strlen($tpo_basic_name) < 101)){
			}
			else
				$err = $err . "Only Alphabets and white space allowed in TPO Full Name </br>";
			//tpo phone
			if(isset($tpo_basic_mobile) && !empty($tpo_basic_mobile) && preg_match("/^[0-9]*$/",$tpo_basic_mobile)){
			}
			else
				$err = $err . "Only Numbers are allowed in TPO Mobile Number </br>";
			//tpo email
			if(isset($tpo_basic_email) && !empty($tpo_basic_email) && filter_var($tpo_basic_email, FILTER_VALIDATE_EMAIL) && (strlen($tpo_basic_email) >8) && (strlen($tpo_basic_email) < 101)){
			}
			else
				$err = $err . "Invalid TPO Email address </br>";
		}
	}
	else
		$err = $err . 'There is a Problem with Are you TPO option <br/>';
	
	//College Name
	if(isset($college_name) && !empty($college_name) && (strlen($college_name)<255)){
		
	}
	else
		$err = $err . 'There is a Problem with College Name <br/>';
	
	//university name
	if(isset($college_uni) && !empty($college_uni) && (strlen($college_uni)<255)){
		
	}
	else
		$err = $err . 'There is a Problem with College Name <br/>';
	
	//college_departments
	if(isset($college_departments) && !empty($college_departments) && (strval($college_departments) >0) && (strval($college_departments) < 51) ){
	}
	else
		$err = $err . 'There is a Problem with College Department <br/>';
	
	if(isset($students) && !empty($students)){
	}
	else
		$err = $err . 'There is a Problem with Student Strength <br/>';
	
	//faculty strength
	if(isset($faculty) && !empty($faculty)){
		
	}
	else
		$err = $err . 'There is a Problem with Faculty Strength <br/>';
	
	//college website
	if(isset($url_input) && !empty($url_input) && (strlen($url_input) < 256)){
	}
	else
		$err = $err . "Problem with College Website </br>";
	
	//college city
	if(isset($college_city) && !empty($college_city) && (strlen($college_city) < 101) && (strlen($college_city) > 05) ){
	}
	else
		$err = $err . "Problem with College City </br>";
	
	//college_dist
	if(isset($college_dist) && !empty($college_dist) && (strlen($college_dist) < 101) && (strlen($college_dist) > 05) ){
	}
	else
		$err = $err . "Problem with College District </br>";
	
	$states = array("Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra", "Manipur","Meghalaya", "Mizoram","Nagaland","New Delhi","Odisha","Punjab","Rajasthan","Sikkim","Tamil Nadu", "Telangana", "Tripura","Uttar Pradesh","Uttarakhand","West Bengal","Union Territory");
	
	//college state
	if(isset($college_state) && !empty($college_state) && in_array($college_state, $states)){	
	}
	else
		$err = $err . "Only Available States are allowed </br>";
	
	//address
	if(isset($college_address) && !empty($college_address) && (strlen($college_address) < 1000)){
	}
	else
		$err = $err . "Problem with College Address </br>";
	
	//college principal name
	if(isset($college_principal_name) && !empty($college_principal_name)  && preg_match("/^[a-zA-Z ]*$/",$college_principal_name) && (strlen($college_principal_name) >9) && (strlen($college_principal_name) < 101)){
	}
	else
		$err = $err . "Only Alphabets and white space allowed in Principal full Name </br>";
	
	//college principal email
	if(isset($college_principal_email) && !empty($college_principal_email) && filter_var($college_principal_email, FILTER_VALIDATE_EMAIL) && (strlen($college_principal_email) >8) && (strlen($college_principal_email) < 101)){
	}
	else
		$err = $err . "You have Entered an Invalid Email address for Pricipal Input </br>";
	
	//college principal phone
	if(isset($college_principal_number) && !empty($college_principal_number) && preg_match("/^[0-9]*$/",$college_principal_number)){
	}
	else
		$err = $err . "Only Numbers are allowed in Principal's Mobile Number </br>";
	
	
	//distance from city
	if(isset($distance_city) && (!empty($distance_city) || $distance_city == '0')){
	}
	else
		$err = $err . 'There is a Problem with College Distance from City <br/>';
	
	//distance from busstand
	if(isset($distance_bus) && (!empty($distance_bus) || $distance_bus == '0')){
	}
	else
		$err = $err . 'There is a Problem with College Distance from Bus-Stand <br/>';
	
	//distance from railways
	if(isset($distance_rail) && (!empty($distance_rail) || $distance_rail == '0') && (strval($distance_rail) > -1) && (strval($distance_rail) < 500) ){
	}
	else
		$err = $err . 'There is a Problem with College Distance from Railways <br/>';
	
	if(isset($college_reach) && !empty($college_reach) && (strlen($college_reach) < 1000)){
	}
	else
		$err = $err . 'There is a Problem with how to reach your college <br/>';
	
	if($err == ''){
		//lets start inserting
		//get name form the mail
		$stm = $db->prepare("SELECT name FROM campus_user WHERE link = ?");
		$stm->bind_param("s",$var);
		$stm->execute();
		$name = $stm->get_result()->fetch_object()->name;
		$stm->free_result();
		
		$flag = 0;
		if (($stmt = $db->prepare("INSERT INTO campus(person, basic_question,non_tpo_name,non_tpo_email,non_tpo_position,non_tpo_mobile,tpo_name,	tpo_email,tpo_mobile,college_name,college_uni,educations,college_departments,students,faculty,url_input,college_city,college_dist,college_state,college_address,college_principal_name,college_principal_email,	college_principal_number, distance_city,distance_bus, distance_rail,college_reach ,profile_pic) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"))) {
			if($stmt->bind_param("ssssssssssssssssssssssssssss",$name,$basic_question,$non_tpo_basic_name,$non_tpo_basic_email,$non_tpo_position,$non_tpo_basic_mobile,$tpo_basic_name,$tpo_basic_email,$tpo_basic_mobile,$college_name,$college_uni,$education,$college_departments,$students[0],$faculty[0],$url_input,$college_city,$college_dist,$college_state,$college_address,$college_principal_name,$college_principal_email,$college_principal_number,$distance_city,$distance_bus,$distance_rail,$college_reach,$_SESSION['username'])) {
				if ($stmt->execute()) {
					//delete the current link
					if(($stmtt = $db->prepare("DELETE FROM campus_user WHERE link = ?"))){
						if($stmtt->bind_param("s",$var)){
							if($stmtt->execute()){
								$_SESSION['campus_fille'] = true;
								$_SESSION['non_tpo_name'] = $non_tpo_basic_name;
								$_SESSION['tpo_name'] = $tpo_basic_name;
								$_SESSION['college'] = $college_name;
								header("Location: extra/campus_connect.php");	
							}
							else
								$flag = 1;
						}
						else
							$flag = 1;
					}
					else
						$flag = 1;
				}
				else
					$flag = 1;
			}
			else
				$flag = 1;
		}
		else
			$flag = 1;

		if($flag == 1){
			$err = $err . "Sorry Something Went Wrong While Processing Your Request. Please Contact Developer About this Issue </br>";
		}
			
	}
	if($err != '' ){
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal("Error !","'.$err.'","error");';
		echo '}, 100);</script>';
	}
}

//function to do validation and triming data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//function to change the lowercase data to capitalize the first letter of every word
function ucname($string) {
    $string =ucwords(strtolower($string));

    foreach (array('-', '\'') as $delimiter) {
      if (strpos($string, $delimiter)!==false) {
        $string =implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
      }
    }
    return $string;
}
//function to produce a random number password by using md5 algo
function password($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
  return $str;
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
<title>CareerStairs | Campus Connect Registration</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!--taginputs-->
<link rel="stylesheet" href="dashboard/user/assets/bootstrap-tagsinput.css">
<style>
@media print{*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important}
.table-bordered td,.table-bordered th{border:1px solid #ccc!important}}
.label-info{background-color: #58D68D;}
</style>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
<link rel="stylesheet" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/assets/app.css">

<link rel="stylesheet" media="all" href="https://cdn.littlelines.com/assets/application-9221995a61a6387726512f858bbfe32d0649b9b416b698422b35e281383d9279.css" data-turbolinks-track="true" />

<style>
	.image {
  		display: block;
  		width: 150px;
  		height: 150px;
  		margin: 1em auto;
  		background-size: cover;
  		background-repeat: no-repeat;
  		background-position: center center;
  		-webkit-border-radius: 99em;
  		-moz-border-radius: 99em;
  		border-radius: 99em;
 		border: 5px solid #eee;
  		box-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);  
	}
</style>

</head>

<body>
<div id="wrapper">


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
 	
<main class="main">
	<div class="hero hero--home b-lazy" data-src="https://media.beam.usnews.com/58/1a/f480ca024c2cb430ef1e3b1f31b8/160914-interview-stock.jpg">
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

</main>

<!-- Content
================================================== -->
<div class="container">

<!-- contact form -->
<section id="contact">
  <div class="section text-align--center">
    <div class="content">
      <div class="heading">
        <h1 class="heading__title heading__title--large">
          Campus Connect Registration
        </h1>
      </div>
     
    	<!--basic form-->   
        <form class="form form--quick-start form--active" accept-charset="UTF-8" id="basicform" autocomplete="on" method="post" onsubmit="return checkform(500000)" enctype="multipart/form-data">
			<fieldset class="list">
			
				<div class="list__item">
					<label class="label">Are you TPO ?</label>
					<select class="select" required name="basic_question" id="basic_question" onChange="start(this.value)">
						<option>Select an option</option>
						<option value="yes" <?php echo ($basic_question == 'yes')?"selected":"" ?>>Yes</option>
						<option value="no" <?php echo ($basic_question == 'no')?"selected":"" ?>>No</option>
					</select>
				</div>
			
				<div class="list__item" style="display: none" id="non_tpo_name_div">
					<label class="label" required="required" for="non_tpo_basic_name">Your Name</label>
					<input class="input" type="text" name="non_tpo_basic_name" id="non_tpo_basic_name" maxlength="100" pattern="[A-Za-z\s]{5,100}" style="text-transform: capitalize;" placeholder="Enter Your full name" value="<?php echo $non_tpo_basic_name ?>"  />
				</div>

				<div class="list__item" style="display: none" id="non_tpo_email_div">
					<label class="label" required="required" for="non_tpo_basic_email">Your Email</label>
					<input class="input" type="email" name="non_tpo_basic_email" id="non_tpo_basic_email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"  maxlength="100" style="text-transform: lowercase;" placeholder="Enter your Email" value="<?php echo $non_tpo_basic_email ?>" />
				</div>
				
				<div class="list__item" style="display: none" id="non_tpo_position_div">
					<label class="label">Your Position in College</label>
					<select class="select" name="non_tpo_position" id="non_tpo_position">
						<option>Select an option</option>
						<option value="H.O.D" <?php echo ($non_tpo_position == 'H.O.D')?"selected":"" ?>>H.O.D</option>
						<option value="Board Memeber" <?php echo ($non_tpo_position == 'Board Memeber')?"selected":"" ?>>Board Memeber</option>
						<option value="Faculty" <?php echo ($non_tpo_position == 'Faculty')?"selected":"" ?>>Faculty</option>
						<option value="Vice Principal" <?php echo ($non_tpo_position == 'Vice Principal')?"selected":"" ?>>Vice Principal</option>
						<option value="Principal" <?php echo ($non_tpo_position == 'Principal')?"selected":"" ?>>Principal</option>
						<option value="Coordinator" <?php echo ($non_tpo_position == 'Coordinator')?"selected":"" ?>>Coordinator</option>
						<option value="Other" <?php echo ($non_tpo_position == 'Other')?"selected":"" ?>>Other</option>
					</select>
				</div>
				
				<div class="list__item" style="display: none" id="non_tpo_mobile_div">
					<label class="label" for="non_tpo_basic_mobile">Your Mobile Number:</label>
					<input class="input" name="non_tpo_basic_mobile" type="text" pattern="^\d{10}$" placeholder="Enter 10 digit Phone number" id="non_tpo_basic_mobile" value="<?php echo $non_tpo_basic_mobile ?>" />
				</div>
				
				<!-- now tpo -->
				
				<div class="list__item" style="display: none" id="tpo_name_div">
					<label class="label" required="required" for="tpo_basic_name">TPO Name</label>
					<input class="input" type="text" name="tpo_basic_name" id="tpo_basic_name" maxlength="100" pattern="[A-Za-z\s]{5,100}" style="text-transform: capitalize;" placeholder="Enter Your full name" value="<?php echo $tpo_basic_name ?>"  />
				</div>

				<div class="list__item" style="display: none" id="tpo_email_div">
					<label class="label" required="required" for="tpo_basic_email">TPO Email</label>
					<input class="input" type="email" name="tpo_basic_email" id="tpo_basic_email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" maxlength="100" style="text-transform: lowercase;" placeholder="Enter your Email" value="<?php echo $tpo_basic_email ?>" />
				</div>
				
				
				<div class="list__item" style="display: none" id="tpo_mobile_div">
					<label class="label" for="tpo_basic_mobile">TPO Mobile Number:</label>
					<input class="input" type="text" pattern="^\d{10}$" placeholder="Enter 10 digit Phone number" name="tpo_basic_mobile" id="tpo_basic_mobile" value="<?php echo $tpo_basic_mobile ?>" />
				</div>
			
				<!--college and stuff-->
				<div class="list__item" >
					<label class="label" required="required" for="college_name">College Name</label>
					<input class="input" type="text" name="college_name"  id="college_name" maxlength="255" style="text-transform: capitalize;" placeholder="Enter Your College Full name" value="<?php echo $college_name ?>"  />
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="college_uni">College University</label>
					<input class="input" type="text" name="college_uni" id="college_uni" maxlength="255" style="text-transform: capitalize;" placeholder="Enter Your College University Name" value="<?php echo $college_uni ?>" />
				</div>
			
				<div class="list__item" >
					<label class="label" required="required">College Courses</label>
					<input class="input" type="text" data-role="tagsinput" id="educations" name="educations" placeholder="ex B.E, M.tech, MCA" required value="<?php echo implode(",",json_decode($education)) ?>">
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="college_departments">College Departments</label>
					<input class="input" type="number" name="college_departments" id="college_departments"  min="1" max="50" placeholder="Enter total number of departments" step="1" value="<?php echo $college_departments ?>" />
				</div>
				
				<fieldset class="list">

				  <div class="list__item">
					<div class="label">Student Strength ?</div>
					<input class="radio radio--button" type="radio" value="500 - 1000" name="students[]" id="student_strength_first" <?php echo ($students[0] == '500 - 1000')?"checked":"" ?> />
					<label class="label" for="student_strength_first">500 - 1000</label>

					<input class="radio radio--button" type="radio" value="1000 - 2500" name="students[]" id="student_strength_second" <?php echo ($students[0] == '1000 - 2500')?"checked":"" ?> />
					<label class="label" for="student_strength_second">1000 - 2500</label>

					<input class="radio radio--button" type="radio" value="2500 - 5000" name="students[]" id="student_strength_third" <?php echo ($students[0] == '2500 - 5000')?"checked":"" ?> />
					<label class="label" for="student_strength_third">2500 - 5000</label>

					<input class="radio radio--button" type="radio" value="More than 5000" name="students[]" id="student_strength_four" <?php echo ($students[0] == 'More than 5000')?"checked":"" ?> />
					<label class="label" for="student_strength_four">More than 5000</label>
				  </div>

				</fieldset>
				
				<fieldset class="list">

				  <div class="list__item">
					<div class="label">Faculty Strength ?</div>
					<input class="radio radio--button" type="radio" value="0 - 50" name="faculty[]" id="faculty_strength_first" <?php echo ($faculty[0] == '0 - 50')?"checked":"" ?>  />
					<label class="label" for="faculty_strength_first">0 - 50</label>

					<input class="radio radio--button" type="radio" value="50 - 150" name="faculty[]" id="faculty_strength_second" <?php echo ($faculty[0] == '50 - 150')?"checked":"" ?> />
					<label class="label" for="faculty_strength_second">50 - 150</label>

					<input class="radio radio--button" type="radio" value="150 - 300" name="faculty[]" id="faculty_strength_third" <?php echo ($faculty[0] == '150 - 300')?"checked":"" ?> />
					<label class="label" for="faculty_strength_third">150 - 300</label>

					<input class="radio radio--button" type="radio" value="More than 300" name="faculty[]" id="faculty_strength_four" <?php echo ($faculty[0] == 'More than 300')?"checked":"" ?> />
					<label class="label" for="faculty_strength_four">More than 300</label>
				  </div>

				</fieldset>
				
				<div class="list__item" >
					<label class="label" required="required" for="url_input">College Website</label>
					<input class="input" maxlength="255" id="url_input" name="url_input" placeholder="https://example.com" type="url" required value="<?php echo $url_input ?>"  />
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="college_city">College City</label>
					<input class="input" type="text" id="college_city" name="college_city" maxlength="100" pattern="[A-Za-z\s]{5,100}" style="text-transform: capitalize;" placeholder="Enter College City" required value="<?php echo $college_city ?>"  />
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="college_dist">College District</label>
					<input class="input" type="text" id="college_dist" name="college_dist" maxlength="100" pattern="[A-Za-z\s]{5,100}" style="text-transform: capitalize;" placeholder="Enter College District" required value="<?php echo $college_dist ?>" />
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="college_state">College State</label>
					<select class="select" id="college_state" name="college_state" required>
						<option value=""    >Please select your state</option>
					<option value="Andhra Pradesh"  <?php echo ($college_state == 'Andhra Pradesh')?"selected":"" ?> >Andhra Pradesh</option>
					<option value="Arunachal Pradesh"  <?php echo ($college_state == 'Arunachal Pradesh')?"selected":"" ?> >Arunachal Pradesh</option>
					<option value="Assam"  <?php echo ($college_state== 'Assam')?"selected":"" ?> >Assam</option>
					<option value="Bihar"  <?php echo ($college_state == 'Bihar')?"selected":"" ?> >Bihar</option>
					<option value="Chhattisgarh"  <?php echo ($college_state == 'Chhattisgarh')?"selected":"" ?> >Chhattisgarh</option>
					<option value="Goa"  <?php echo ($college_state == 'Goa')?"selected":"" ?> >Goa</option>
					<option value="Gujarat"  <?php echo ($college_state == 'Gujarat')?"selected":"" ?> >Gujarat</option>
					<option value="Haryana"  <?php echo ($college_state == 'Haryana')?"selected":"" ?> >Haryana</option>
					<option value="Himachal Pradesh"  <?php echo ($college_state == 'Himachal Pradesh')?"selected":"" ?> >Himachal Pradesh</option>
					<option value="Jammu and Kashmir"  <?php echo ($college_state == 'Jammu and Kashmir')?"selected":"" ?> >Jammu and Kashmir</option>
					<option value="Jharkhand" <?php echo ($college_state == 'Jharkhand')?"selected":"" ?> >Jharkhand</option>
					<option value="Karnataka" <?php echo ($college_state == 'Karnataka')?"selected":"" ?> >Karnataka</option>
					<option value="Kerala" <?php echo ($college_state == 'Kerala')?"selected":"" ?> >Kerala</option>
					<option value="Madhya Pradesh" <?php echo ($college_state == 'Madhya Pradesh')?"selected":"" ?> >Madhya Pradesh</option>
					<option value="Maharashtra" <?php echo ($college_state == 'Maharashtra')?"selected":"" ?> >Maharashtra</option>
					<option value="Manipur" <?php echo ($college_state == 'Manipur')?"selected":"" ?> >Manipur</option>
					<option value="Meghalaya" <?php echo ($college_state == 'Meghalaya')?"selected":"" ?> >Meghalaya</option>
					<option value="Mizoram" <?php echo ($college_state == 'Mizoram')?"selected":"" ?> >Mizoram</option>
					<option value="Nagaland" <?php echo ($college_state == 'Nagaland')?"selected":"" ?> >Nagaland</option>
					<option value="New Delhi" <?php echo ($college_state == 'New Delhi')?"selected":"" ?> >New Delhi</option>
					<option value="Odisha" <?php echo ($college_state == 'Odisha')?"selected":"" ?> >Odisha</option>
					<option value="Punjab" <?php echo ($college_state == 'Punjab')?"selected":"" ?> >Punjab</option>
					<option value="Rajasthan" <?php echo ($college_state == 'Rajasthan')?"selected":"" ?> >Rajasthan</option>
					<option value="Sikkim" <?php echo ($college_state == 'Sikkim')?"selected":"" ?> >Sikkim</option>
					<option value="Tamil Nadu" <?php echo ($college_state == 'Tamil Nadu')?"selected":"" ?> >Tamil Nadu</option>
					<option value="Telangana" <?php echo ($college_state == 'Telangana')?"selected":"" ?> >Telangana</option>
					<option value="Tripura" <?php echo ($college_state == 'Tripura')?"selected":"" ?> >Tripura</option>
					<option value="Uttar Pradesh" <?php echo ($college_state == 'Uttar Pradesh')?"selected":"" ?> >Uttar Pradesh</option>
					<option value="Uttarakhand" <?php echo ($college_state == 'Uttarakhand')?"selected":"" ?> >Uttarakhand</option>
					<option value="West Bengal" <?php echo ($college_state == 'West Bengal')?"selected":"" ?> >West Bengal</option>
					<option value="Union Territory" <?php echo ($college_state == 'Union Territory')?"selected":"" ?> >Union Territory</option>
					</select>
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="college_address">College Address</label>
					<textarea id="college_address" class="textarea" required maxlength="1000" style="resize: none" rows="6" name="college_address" placeholder="Enter College Address"><?php echo $college_address ?></textarea>
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="college_principal_name">College Principal's Name</label>
					<input class="input" type="text" id="college_principal_name" name = "college_principal_name" maxlength="100" pattern="[A-Za-z\s]{5,100}" style="text-transform: capitalize;" placeholder="Enter Your Principal's Full name" required value="<?php echo $college_principal_name ?>" />
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="college_principal_email">College Principal's Email</label>
					<input class="input" type="email" id="college_principal_email" name = "college_principal_email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" maxlength="100" style="text-transform: lowercase;" placeholder="Enter College Principal Email" required value="<?php echo $college_principal_email ?>"  />
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="college_principal_number">College Principal's Number</label>
					<input class="input" id="college_principal_number" name="college_principal_number" type="text" pattern="^\d{10}$" placeholder="Enter 10 digit Phone number" required value="<?php echo $college_principal_number ?>"  />
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="distance_city">Distance of College from the City</label>
					<input class="input" type="number" id="distance_city" name="distance_city" step=".1" placeholder="4.5 KM" min="0" max="100" required value="<?php echo $distance_city ?>"   />
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="distance_bus">Distance of College from the Nearest Bus-stand</label>
					<input class="input" type="number" id="distance_bus" name="distance_bus" step=".1" placeholder="40 KM" min="0" max="500" required value="<?php echo $distance_bus ?>"  />
				</div>
				
				<div class="list__item" >
					<label class="label" required="required" for="distance_rail">Distance of College from the Nearest Railway Station</label>
					<input class="input" type="number" id="distance_rail" name="distance_rail" step=".1" min="0" max="500" placeholder="40 KM" required value="<?php echo $distance_rail ?>"  />
				</div>
				
				<div class="list__item" >
					<label class="label" required="required">Best Way to Reach your College</label>
					<textarea class="textarea" name="college_reach" required maxlength="1000" style="resize: none" rows="6" placeholder="Enter how to Reach your College"><?php echo $college_reach ?></textarea>
				</div>
				
				<?php
					
					if(isset($_SESSION['username']))
						echo '<img class="image" id="output" src="images/colleges/'.$_SESSION['username'].'"';
				    else
						echo '<img class="image" id="output" ';
				?>
				<!-- pic show -->
				
				
				<label class="label" for="file-input">College Logo</label>
				<?php
	
					if(isset($_SESSION['username']))
						echo '<input class="input" type="file" accept="image/*" onchange="loadFile(event)" id="upload" name="file" ></input>';
					else
						echo '<input class="input" type="file" required accept="image/*" onchange="loadFile(event)" id="upload" name="file" ></input>';

				?>
				
				<input type="submit" value="Save Data" name="basic_submit" class="button button--large" />
			</fieldset>
		</form>
   		
   		<div align="center" id="loading2" style="display:none">
			<i id="loading2-i"></i>
			<span id="loading2-i2"></span>
		</div>
   		
		</div>
    </div>
  </div>

</section>	

	
	
</div>

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


 <script src="https://cdn.littlelines.com/assets/application-ea8d15950d0ba797d2be9eedb35c9b738dc53c997a80e43aff0612d551a4b70b.js" data-turbolinks-track="true" async="async"></script>

<script src="scripts/jquery-2.1.3.min.js"></script>
<!--typeahead-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>


<script>
	//try new
	localStorage.setItem('url', output.src);
	
	function start(that){
		//start hiding all and remove required too
		$('#non_tpo_name_div').hide();
		document.getElementById('non_tpo_basic_name').required = false;
		$('#non_tpo_email_div').hide();
		document.getElementById('non_tpo_basic_email').required = false;
		$('#non_tpo_position_div').hide();
		document.getElementById('non_tpo_position').required = false;
		$('#non_tpo_mobile_div').hide();
		document.getElementById('non_tpo_basic_mobile').required = false;
		$('#tpo_name_div').hide();
		document.getElementById('tpo_basic_name').required = false;
		$('#tpo_email_div').hide();
		document.getElementById('tpo_basic_email').required = false;
		$('#tpo_mobile_div').hide();
		document.getElementById('tpo_basic_mobile').required = false;
		
		if(that == 'yes'){
			$('#tpo_name_div').show();
			document.getElementById('tpo_basic_name').required = true;
			$('#tpo_email_div').show();
			document.getElementById('tpo_basic_email').required = true;
			$('#tpo_mobile_div').show();
			document.getElementById('tpo_basic_mobile').required = true;
			$('html, body').animate({
				scrollTop: $("#basicform").offset().top
			}, 500);
		}
		else if(that == 'no'){
			$('#non_tpo_name_div').show();
			document.getElementById('non_tpo_basic_name').required = true;
			$('#non_tpo_email_div').show();
			document.getElementById('non_tpo_basic_email').required = true;
			$('#non_tpo_position_div').show();
			document.getElementById('non_tpo_position').required = true;
			$('#non_tpo_mobile_div').show();
			document.getElementById('non_tpo_basic_mobile').required = true;
			$('#tpo_name_div').show();
			document.getElementById('tpo_basic_name').required = true;
			$('#tpo_email_div').show();
			document.getElementById('tpo_basic_email').required = true;
			$('#tpo_mobile_div').show();
			document.getElementById('tpo_basic_mobile').required = true;
			$('html, body').animate({
				scrollTop: $("#basicform").offset().top
			}, 500);
		}
			
	}
	
 	var loadFile = function(event) {
    	var output = document.getElementById('output');
    	output.src = URL.createObjectURL(event.target.files[0]);
		localStorage.setItem('url', output.src);
  	};

	//couses
	var educations = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: {
			url: 'dashboard/recruiter/assets/education.js',
			filter: function(list) {
				return $.map(list, function(cityname) {
							return { name: cityname }; });
				}
		}
	});
	educations.initialize();
	$('#educations').tagsinput({
		typeaheadjs: {
			name: 'educations',
			displayKey: 'name',
			valueKey: 'name',
			source: educations.ttAdapter()
		}
	});
	
	
	function checkform(max_img_size)
	{
		var input = document.getElementById("upload");
		// check for browser support (may need to be modified)
		if(input.files && input.files.length == 1)
		{           
			if (input.files[0].size > max_img_size) 
			{
				swal(
					  'Warning',
					  'File Size Must be less than 500 Kb !',
					  'warning'
					)
				return false;
			}
		}
	}
	
</script>

</body>

</html>