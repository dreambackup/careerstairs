<?php
session_start();
//Include database configuration file
include('../db/config.php');

if(isset($_POST["reasonal"]) && !empty($_POST["reasonal"])){
	$flag = 0;
	
	/* Prepared statement, stage 1: prepare */
	if (($stmt = $db->prepare("UPDATE subscribe SET status = ? WHERE code = ?"))) {
		//echo "Prepare failed: (" . $db->errno . ") " . $db->error;
		if ($stmt->bind_param("ss",$_POST["reasonal"],$_POST["id"])) {
		//echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
			if ($stmt->execute()) {
				//echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
				echo json_encode('Data');
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
		echo json_encode('problem');
	}  	
		
    
}
//code to insert email into subscribe list
else if(isset($_POST["email"])  && !empty($_POST["email"]))
{
	//getting hashed password
	$options = [
    'cost' => 11,
	];
	$flag = 1;
	$password = password(10);
	$password_hash = password_hash($password, PASSWORD_BCRYPT, $options);
	$email = mysqli_real_escape_string($db , test_input(mb_strtolower($_POST["email"])));
	
	//process email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$flag = 0;
	}
	else
		$flag = 1;
	
	$count = 0;
	$stm = $db->prepare("SELECT email FROM subscribe WHERE email = ? ");
	$stm->bind_param("s",$email);
	$stm->execute();
	$stm->store_result();
	$count = $stm->num_rows;
	$stm->free_result();
	
	//if email is valid then
	if($flag == 1)
 	{
		//if count is 0 then insert and send mail else just redirect him
		if($count == 0)
  		{
			$flag = 0;
		  /* Prepared statement, stage 1: prepare */
			if (($stmt = $db->prepare("INSERT INTO subscribe(code, email) VALUES (?,?)"))) {
				//echo "Prepare failed: (" . $db->errno . ") " . $db->error;
				if ($stmt->bind_param("ss",  $password_hash,$email)) {
				//echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
					if ($stmt->execute()) {
						//echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
						
						$_SESSION['subscribed'] = true;
						$_SESSION['email'] = $email;
						$_SESSION['ssl'] = $password_hash;
						header("Location: ../email/subscribe.php");
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
			  echo '<script>alert("Sorry Something Went Wrong While Processing Your Request. Please Contact Developer About this Issue !")</script>';
		  }  	
		}
		else{
			$_SESSION['version'] = true;
			$_SESSION['subscribed'] = true;
			header("Location: subscribe_one.php");
		}
	}
	
	
}
else{
	header("Location: ../index.php");
}
//function to do validation and triming data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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