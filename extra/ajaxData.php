<?php
session_start();
//Include database configuration file
include('../db/config.php');

error_reporting(0);

// code to check email duplication

if(isset($_POST["email"]) && !empty($_POST["email"])){
    $email = test_input($_POST["email"]);
	$count = 0;
	$stm = $db->prepare("SELECT email FROM users_login WHERE email = ? ");
	$stm->bind_param("s",$email);
	$stm->execute();
	$stm->store_result();
	$count = $stm->num_rows;
	$stm->free_result();
	
    //Display result list
    if($count > 0){
        echo '1';
    }else{
        echo '0';
    }
}

// code to check phone duplicasy
if(isset($_POST["username"]) && !empty($_POST["username"])){
    $username = test_input($_POST["username"]);
	$count = 0;
	$stm = $db->prepare("SELECT oauth_uid FROM users_login WHERE oauth_uid = ? ");
	$stm->bind_param("s",$username);
	$stm->execute();
	$stm->store_result();
	$count = $stm->num_rows;
	$stm->free_result();
		
    //Display result list
    if($count > 0){
        echo '1';
    }else{
        echo '0';
    }
}

if(isset($_POST['query'])){
	$keyword = test_input($_POST['query']);

	$sql = $db->prepare("SELECT DISTINCT name FROM users_login WHERE type='user' OR type='recruiter' AND name LIKE '%".$keyword."%' ");
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$name[] = $row["name"];
		}
		echo json_encode($name);
	}
}

if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['emails']) && !empty($_POST['emails']) && isset($_POST['call']) && !empty($_POST['call'])){
	
	$err = '';
	$name = test_input($_POST['name']);
	$email = test_input($_POST['emails']);
	$call = test_input($_POST['call']);
	$mobile = test_input($_POST['mobile']);
	$time = test_input($_POST['time']);
	$message = mysqli_real_escape_string($db, test_input($_POST["message"]));
	$type = test_input($_POST['msg_type']);
	//name
	if(isset($name) && !empty($name)  && preg_match("/^[a-zA-Z ]*$/",$name) && (strlen($name) >5) && (strlen($name) < 101)){
	}
	else
		$err = $err . "Only Alphabets and white space allowed in Name </br>";
	
	//email
	if(isset($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && (strlen($email) >10) && (strlen($email) < 255) ){
	}
	else
		$err = $err . "Invalid Email address </br>";
	
	if(isset($call) && ($call == 1 || $call == 2)){
		if($call == 2){
			//phone
			if(isset($mobile) && !empty($mobile) && preg_match("/^[0-9]*$/",$mobile)){
			}
			else
				$err = $err . "Mobile Number is not Valid</br>";
			//time
			if(isset($time) && $time>0 && $time<6){
			}
			else
				$err = $err . "Time is not valid </br>";
		}
	}
	else
		$err = $err . "Invalid Option </br>";
	
	
	//message
	if(isset($message) && $message < 1001){
	}
	else
		$err = $err . "Problem with Message </br>";
	
	if($err == ''){
		if($call == 1){
			//update both tables 
			$flag = 0;
		
			if (($stmt = $db->prepare("INSERT INTO message(name,type,email,message,request_callback,callback_time,send) VALUES (?,?,?,?,'0','0',CURRENT_TIMESTAMP)"))) {
				if ($stmt->bind_param("ssss",$name,$type,$email,$message)) {
					if ($stmt->execute()){
						echo 'Data';
					}
					else
						$flag = 1;
				}
				else
					$flag = 1;
			}
			else
				$flag = 1;

			if($flag == 1)
			{
				$err = $err . "Sorry Something Went Wrong While Processing Your Request. Please Contact Developer About this Issue !";
			}
		}
		else if($call == 2){
			//update both tables 
			$flag = 0;
		
			if (($stmt = $db->prepare("INSERT INTO message(name,type,email,message,phone,request_callback,callback_time,send) VALUES (?,?,?,?,?,'1',?,CURRENT_TIMESTAMP)"))) {
				if ($stmt->bind_param("ssssss",$name,$type,$email,$message,$mobile,$time)) {
					if ($stmt->execute()){
						echo 'Data';
					}
					else
						$flag = 1;
				}
				else
					$flag = 1;
			}
			else
				$flag = 1;

			if($flag == 1)
			{
				$err = $err . "Sorry Something Went Wrong While Processing Your Request. Please Contact Developer About this Issue !";
			}
		}
		
	}
	else if($err !=''){
		echo $err;
	}
}

if(isset($_POST['namee']) && !empty($_POST['namee']) && isset($_POST['emailss']) && !empty($_POST['emailss']) && isset($_POST['mobilee']) && !empty($_POST['mobilee'])){
	
	$err = '';
	$name = test_input($_POST['namee']);
	$email = test_input($_POST['emailss']);
	$company_name = test_input($_POST['company_name']);
	$mobile = test_input($_POST['mobilee']);
	$desc = mysqli_real_escape_string($db,test_input($_POST['desc']));
	$company_name = mysqli_real_escape_string($db, test_input($_POST["company_name"]));
	$projecttype = $_POST["typee"];
	$time = test_input($_POST['timee']);
	$budget = test_input($_POST['budget']);
	$comments = test_input($_POST['comments']);
	$type = test_input($_POST['msg_typee']);
	//name
	if(isset($name) && !empty($name)  && preg_match("/^[a-zA-Z ]*$/",$name) && (strlen($name) >5) && (strlen($name) < 101)){
	}
	else
		$err = $err . "Only Alphabets and white space allowed in Name </br>";
	
	//email
	if(isset($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && (strlen($email) >10) && (strlen($email) < 255) ){
	}
	else
		$err = $err . "Invalid Email address </br>";
	
	//mobile
	if(isset($mobile) && !empty($mobile) && preg_match("/^[0-9]*$/",$mobile)){
	}
	else
		$err = $err . "Problem with Mobile Number </br>";
	
	//company name
	if(isset($company_name)){
		if(strlen($company_name)<256){
		}
		else
			$err = $err . "Company Name must be less than 255 characters </br>";
	}
	
	if(isset($desc)){
		if(strlen($desc)<1001){
		}
		else
			$err = $err . "Project Description must be less than 1000 characters </br>";
	}
	
	if(isset($comments)){
		if(strlen($comments)<1001){
		}
		else
			$err = $err . "Project Description must be less than 1000 characters </br>";
	}
	
	if($err == ''){
		$flag = 0;
		
		if (($stmt = $db->prepare("INSERT INTO message(name,type,email,phone,company_name,project_desc,project_type,start_date,budget,others,send) VALUES (?,?,?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP)"))) {
			if ($stmt->bind_param("ssssssssss",$name,$type,$email,$mobile,$company_name,$desc,$projecttype,$time,$budget,$comments)) {
				if ($stmt->execute()){
						echo 'Data';
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
			$err = $err . "Sorry Something Went Wrong While Processing Your Request. Please Contact Developer About this Issue !";
		}
	}
	else if($err !=''){
		echo $err;
	}
}


//function to do validation and triming data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>