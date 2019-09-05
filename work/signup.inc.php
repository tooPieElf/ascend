<?php
if(isset($POST['submit'])) {
	include_once 'dbh.inc.php';
	$first= mysqli_real_escape_string($conn,$_POST['first']);
	$last= mysqli_real_escape_string($conn,$_POST['last']);
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$uid= mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd= mysqli_real_escape_string($conn,$_POST['pwd']);

	// error handling
	//check for empty fields
	if(empty($first) || empty($last)  empty($email) || empty($uid)empty($pwd)){
		header("location: ../register.php?signup=empty");
	exit();

	}else{
		// check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("location: ../register.php?signup=invalid");
	exit();
		}
		else{
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("location: ../register.phpsignup=error");
			exit();
			}else{
				$sql = "SELECT * FROM users WHERE user_id='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck =mysqli_num_rows($result);
				if ($resultCheck > 0) {
					header("location: ../register.php?signup=usertaken");
			exit();
				} else{ 
					// hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFALT); 
					// insert the user into the database
					$sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES('$first','$last', '$email', '$uid', 'hashedPwd');";
					mysqli_query($conn, $sql);
					header("location: ../register.php?signup=success");
					exit();


				}
			}

		}
	}


} 

else{
	header("location: ../register.php");
	exit();
}
