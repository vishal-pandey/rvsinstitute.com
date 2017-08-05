<?php
	session_start();	
	include_once "./library/library.php";
	$user = new user();
	if($user->loginCheck()){
		include_once "./secure/config.php";
		class op {}
		$op = new op;
		$op->mobile = $_SESSION['user1'];
		$op->oldpwd = $_POST['s_password'];
		$op->newpwd = $_POST['sn_password'];
		$op->newrpwd = $_POST['snr_password'];
		$op->error="";

		$sql = "SELECT s_password from r_student WHERE s_mobile = '{$op->mobile}'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if($row['s_password'] == $op->oldpwd){
			if ((strlen($op->newpwd) < 8)) {
				$op->error = $op->error."Length of new password must be greater than 8<br>"; 	
			}else{
				if($op->newpwd != $op->newrpwd){
					$op->error = $op->error."Password Do Not Match <br>";
				}
			}
		}else{
			$op->error = $op->error."Please Enter Correct Old Password<br>";
		}
		if($op->error == ""){
			$sql="UPDATE r_student SET s_password = '{$op->newpwd}' WHERE s_mobile='{$op->mobile}'";
			if($conn->query($sql)){}
			else{
					$op->error = "Something Went Wrong Please try again later";
				}
		}
		echo $op->error;

	}
?>