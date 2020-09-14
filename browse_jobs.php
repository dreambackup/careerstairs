<?php
error_reporting(0);
include('db/config.php');

session_start();
$type = "";
$select = "recent";


if(isset($_POST['find_job'])){
	$one = test_input($_POST['skills']);
	$two = test_input($_POST['location']);
}
$type = test_input($_GET['type']);

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	//then we will not show jobs which he already applied
	$initial_query = "";
	if(isset($one) && !empty($one)){
		$initial_query = $initial_query." AND skills LIKE '%".$one."%'";
	}
	if(isset($two) && !empty($two)){
		$initial_query = $initial_query." AND location LIKE '%".$two."%'";
	}
	if(isset($type) && !empty($type)){
		$initial_query = $initial_query." AND job_category = ".$type." ";
	}
	
	//get user type if he is recruiter then this will change
	$stm = $db->prepare("SELECT type FROM users_login WHERE oauth_uid = ? ");
	$stm->bind_param("s",$_SESSION['userData']);
	$stm->execute();
	$account = $stm->get_result()->fetch_object()->type;
	$stm->free_result();
	
	if($account == 'user'){
		//get the user type
		$stm = $db->prepare("SELECT jobs FROM users_profile WHERE username = ? ");
		$stm->bind_param("s",$_SESSION['userData']);
		$stm->execute();
		$jobss = $stm->get_result()->fetch_object()->jobs;
		$stm->free_result();
		
		$jobs1 = json_decode($jobss);
		$joab_count = count($jobs1);

		for($j=0;$j<$joab_count;$j++)
			$jobd[$j] = $jobs1[$j][0];
		
		//if jobs is not empty
		if(!empty($jobd)){
			$query_one = "SELECT * FROM jobs WHERE id NOT IN (".implode(",", $jobd).") AND admin_verified = '1' AND CURRENT_DATE <= expiration ".$initial_query." ORDER BY created DESC";
		}
		else{
			$query_one = "SELECT * FROM jobs WHERE admin_verified = '1' AND CURRENT_DATE <= expiration ".$initial_query." ORDER BY created DESC";
		}
	}
	else{
		$query_one = "SELECT * FROM jobs WHERE admin_verified = '1' AND CURRENT_DATE <= expiration ".$initial_query." ORDER BY created DESC";
	}
}
else{
	//then we will show all jobs
	$initial_query = "";
	if(isset($one) && !empty($one)){
		$initial_query = $initial_query." AND skills LIKE '%".$one."%'";
	}
	if(isset($two) && !empty($two)){
		$initial_query = $initial_query." AND location LIKE '%".$two."%'";
	}
	if(isset($type) && !empty($type)){
		$initial_query = $initial_query." AND job_category = ".$type." ";
	}
	
	$query_one = "SELECT * FROM jobs WHERE admin_verified = '1' AND CURRENT_DATE <= expiration ".$initial_query." ORDER BY created DESC";
}

if(isset($_POST['filter']))
{
	$select = $two = $exp = $minlpa = $maxlpa = $type = "";
	$err = "";
	$query_one = "";
	$quer = "";
	$selects = array("recent","oldest","ratehigh","ratelow");
	$allowed_type = array("Accounting / Finance","Software Developer","Marketing & Sales","Information Technology","Healthcare","Content & digital","UI / UX Developer","BPO & Telecomm","Management","Quality & Testing","Mobile App development","Hr & Company");
	
	$select = test_input($_POST["select"]);
	$type = test_input($_POST["category"]);
	$two = test_input($_POST["location"]);
	$exp = test_input($_POST["exp"]);
	$minlpa = test_input($_POST["minlpa"]);
	$maxlpa = test_input($_POST["maxlpa"]);
	
	//if he is logged in then do the check
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		if($account == 'user'){
			if(!empty($jobd)){
				$quer = $quer . " AND id NOT IN (".implode(",", $jobd).")";
			}
		}
	}
	
	if(isset($two) && !empty($two)){
		if(preg_match("/^[a-zA-Z ]*$/",$two)){
			$quer = $quer . " AND location LIKE '%".$two."%' " ;
		}
		else
			$err = $err . "Only Alphabets and white space allowed in Location</br>";
	}

	if(isset($exp) && $exp === "0" || !empty($exp)){
		if(preg_match("/^[0-9]*$/",$exp) && $exp >= 0 && $exp <= 10){
			$quer = $quer . " AND exp = ".$exp."";
		}
		else
		$err = $err . "Experience Should be in Number only with a Maximum of 10</br>";
	}
	
	if(isset($minlpa) && !empty($minlpa)){
		if(filter_var($minlpa, FILTER_VALIDATE_FLOAT) && $minlpa > 0 && $minlpa <= 10){
			$quer = $quer . " AND package_min >= ".$minlpa."";
		}
		else
			$err = $err . "Only Value allowed With a Max of 10</br>";
	}
	
	
	if(isset($maxlpa) && !empty($maxlpa)){
		if(filter_var($maxlpa, FILTER_VALIDATE_FLOAT) && $maxlpa > 0 && $maxlpa <= 10){
			$quer = $quer . " AND package_max <= ".$maxlpa."";
		}
		else
			$err = $err . "Only Value allowed With a Max of 10</br>";
	}
	
	if(isset($minlpa) && !empty($minlpa) && isset($maxlpa) && !empty($maxlpa)){
		if($minlpa < $maxlpa){
		}
		else
			$err = $err . "The Min LPA should be Less Than Max LPA</br>";
	}
	
	if(isset($type) && !empty($type)){
		if(in_array($type,$allowed_type))
			$quer = $quer . " AND job_category = '".$type."' ";
		else
			$err = $err . "Only these Categories are available to select </br>";
	}
	
	if(isset($select) && !empty($select) && in_array($select, $selects)){
		if($select == "recent")
		{
			$quer = $quer . " ORDER BY created DESC";
		}
		else if($select == "oldest")
		{
			$quer = $quer . " ORDER BY created ASC";
		}
		else if($select == "ratehigh")
		{
			$quer = $quer . " ORDER BY package_max DESC";
		}
		else if($select == "ratelow")
		{
			$quer = $quer . " ORDER BY package_min ASC";
		}
	}
	else
		$err = $err . "Only Available Sort Options are allowed </br>";
	
	
	if($err == "")
	{
		$query_one = "SELECT * FROM jobs WHERE CURRENT_DATE <= expiration AND admin_verified='1' ".$quer." ";
	}
	if($err != ""){
		echo '<script type="text/javascript">setTimeout(function(){ swal("Error !" ,"'.$err.'", "error");}, 100);</script>';
	}
}
if(isset($_POST['skilled']))
{
	$query_one = "";
	$skills = test_input($_POST["skills"]);
	
	//if he is logged in AS A user
	//if he is logged in then do the check
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		if($account == 'user'){
			if(!empty($jobd)){
				$query_one = "SELECT * FROM jobs WHERE CURRENT_DATE <= expiration AND id NOT IN (".implode(",", $jobd).") AND admin_verified='1' AND skills LIKE '%".$skills."%' ORDER BY created DESC" ;
			}
		}
		else{
			$query_one = "SELECT * FROM jobs WHERE CURRENT_DATE <= expiration AND admin_verified='1' AND skills LIKE '%".$skills."%' ORDER BY created DESC" ;
		}
	}
	else
		$query_one = "SELECT * FROM jobs WHERE CURRENT_DATE <= expiration AND admin_verified='1' AND skills LIKE '%".$skills."%' ORDER BY created DESC";
}
//function to do validation and triming data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
<title>CareerStairs | Browse Jobs</title>

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
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span id="spanned"></span>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
		<div class="padding-right">

			<form method="post" class="list-search">
				<button type="submit" name="skilled"><i class="fa fa-search"></i></button>
				<?php
					if(isset($one) && !empty($one))
						echo '<input type="text" class="search-field" required placeholder="Enter skill" id="skills" value="'.$one.'" name="skills"/>';
					else
						echo '<input type="text" class="search-field" required placeholder="Enter skill" id="skills" value="" name="skills"/>';
				?>
				<div class="clearfix"></div>
			</form>

			<ul class="job-list full" id="myList" >
				
				<?php 
				if(isset($query_one)){
					//echo $query_one;
					$str = $db->prepare($query_one);
					$str->execute();
					$ress = $str->get_result();
					$count = 0;
					while($rim = $ress->fetch_assoc())
					{
						$count++;
						echo '
							<li><a href="job-overview.php?id='.$rim['id'].'" target="_blank">
							<img src="dashboard/company_pictures/'.$rim['company_pic'].'" alt="'.$rim['company_name'].'">
							<div class="job-list-content">
								<h4>'; echo $rim['job_title'];
									if($rim['job_type'] == 1)
										echo '<span class="full-time" >Full Time</span>';
									else if($rim['job_type'] == 2)
										echo '<span class="part-time" >Part Time</span>';
									else if($rim['job_type'] == 3)
										echo '<span class="internship" >Internship</span>';
									else if($rim['job_type'] == 4)
										echo '<span class="temporary" >Freelance</span>';

								echo '</h4>
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
					echo '</ul>
							<div class="clearfix"></div>
							<div class="pagination-container" align="center">
								<a href="javascript:void(0)" id="loadMore">Load More</a>
							</div>';
					$str->free_result();
				}
				?>
		</div>
	</div>

	<!-- Widgets -->
	<div class="five columns">
		<!-- Sort by -->
		<form action="#" method="post" autocomplete="off" onSubmit="return minmax()">
			<div class="widget">
				<h4>Sort by</h4>
				<!-- Select -->
				<select data-placeholder="Choose Category" class="chosen-select-no-single" name="select">
					<option <?php echo ($select == 'recent')?"selected":"" ?> value="recent">Newest</option>
					<option <?php echo ($select == 'oldest')?"selected":"" ?> value="oldest">Oldest</option>
					<option <?php echo ($select == 'ratehigh')?"selected":"" ?> value="ratehigh">Package – Highest First</option>
					<option <?php echo ($select == 'ratelow')?"selected":"" ?> value="ratelow">Package – Lowest First</option>
				</select>
			</div>
			
			<div class="widget">
				<h4>Job Category</h4>
				<!-- Select -->
				<select data-placeholder="Choose Category" class="chosen-select-no-single" name="category">
					<option value="">Select a Category</option>
					<option <?php echo ($type == 'Accounting / Finance')?"selected":"" ?> value="Accounting / Finance" >Accounting / Finance</option>
					<option <?php echo ($type == 'Software Developer')?"selected":"" ?> value="Software Developer" >Software Developer</option>
					<option <?php echo ($type == 'Marketing & Sales')?"selected":"" ?> value="Marketing & Sales">Marketing & Sales</option>
					<option <?php echo ($type == 'Information Technology')?"selected":"" ?> value="Information Technology">Information Technology</option>
					<option <?php echo ($type == 'Healthcare')?"selected":"" ?> value="Healthcare">Healthcare</option>
					<option <?php echo ($type == 'Content & digital')?"selected":"" ?> value="Content & digital">Content & digital</option>
					<option <?php echo ($type == 'UI / UX Developer')?"selected":"" ?> value="UI / UX Developer">UI / UX Developer</option>
					<option <?php echo ($type == 'BPO & Telecomm')?"selected":"" ?> value="BPO & Telecomm">BPO & Telecomm</option>
					<option <?php echo ($type == 'Management')?"selected":"" ?> value="Management">Management</option>
					<option <?php echo ($type == 'Quality & Testing')?"selected":"" ?> value="Quality & Testing">Quality & Testing</option>
					<option <?php echo ($type == 'Mobile App development')?"selected":"" ?> value="Mobile App development">Mobile App development</option>
					<option <?php echo ($type == 'Hr & Company')?"selected":"" ?> value="Hr & Company">Hr & Company</option>
				</select>
			</div>
			
		<!-- Location -->
			<div class="widget">
				<?php
					if(isset($two) && !empty($two))
						echo '<input type="text" placeholder="Location" value="'.$two.'" id="tags" name="location" />';
					else
						echo '<input type="text" placeholder="Location" value="" id="tags" name="location" />';
				?>
				<input type="number" placeholder="Minimum Experience" min="0" max="10" step="1" id="exp" name="exp" value="<?php echo $exp ?>" />
				<input type="number" min="0.1" max="10" step="0.1" id="minlpa" name="minlpa" class="miles" placeholder="Min LPA" value="<?php echo $minlpa ?>" onChange="mincheck(this)" />
				<label for="zip-code" class="from"> - </label>
				<input type="number" min="0" max="10" step="0.1" id="maxlpa" name="maxlpa" class="zip-code" placeholder="Max LPA" value="<?php echo $maxlpa ?>" onChange="maxcheck(this)" /><br>
				<span id="error" style="color: red;display: none"></span>
				<button class="button" type="submit" name="filter">Filter</button>
			</div>
		</form>
	</div>


</div>

<style>
#myList li{ display:none;
}

#loadMore, #loadMore:visited{
	color: #33739E;
    text-decoration: none;
    display: block;	
}
#loadMore {
    padding: 10px;
    text-align: center;
    background-color: #33739E;
    color: #fff;
    border-width: 0 1px 1px 0;
    border-style: solid;
    border-color: #fff;
    box-shadow: 0 1px 1px #ccc;
    transition: all 600ms ease-in-out;
    -webkit-transition: all 600ms ease-in-out;
    -moz-transition: all 600ms ease-in-out;
    -o-transition: all 600ms ease-in-out;
}
#loadMore:hover {
    background-color: #fff;
    color: #33739E;
}

</style>


<!-- Footer
================================================== -->
<div class="margin-top-25"></div>

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

<!-- Script for places -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="scripts/location.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>


<script>
	$(document).ready(function () {
    size_li = $("#myList li").length;
    x=3;
    $('#myList li:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+5 <= size_li) ? x+5 : size_li;
		
        $('#myList li:lt('+x+')').show();
    });
});
	function minmax()
	{
		var minlpa = $('#minlpa').val();
		var maxlpa = $('#maxlpa').val();
		
		if(minlpa !== '' && maxlpa !== '')
			{
				if(minlpa < maxlpa)
					return true ;
				else
				{
					$('#error').show().html('The Min LPA should be Less Than Max LPA');
					return false;
				}
			}
		else
			return true;
	}
	
	function mincheck(that){
		document.getElementById('maxlpa').setAttribute("min",that.value);
	}
	function maxcheck(them){
		document.getElementById('minlpa').setAttribute("max",them.value);
	}
	
	$('#spanned').text('We have found <?php echo $count ?> Jobs :');
	
</script>
</body>

</html>