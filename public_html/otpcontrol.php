<?php
		session_start();
		date_default_timezone_set('Asia/Kolkata');
		class op {}
		$op = new op;
		$op->name=$_POST['name'];
		$op->class=$_POST['class'];
		$op->mobile=$_POST['mobile'];
		$op->password=$_POST['password'];
		$op->r_password=$_POST['r_password'];
		$op->day=$_POST['day'];
		$op->month=$_POST['month'];
		$op->year=$_POST['year'];
		$op->dob=$op->year."-".$op->month."-".$op->day;
		$op->gender=$_POST['gender'];
		$op->otp=$_POST['otp'];
		$op->error="";
		$op->rdate=date("Y-m-d");
		if($op->otp == $_SESSION['theotp']){
			unset($_SESSION['theotp']);
			include_once "./library/library.php";
			$user1 = new user();
			$user1->addUser($op->name , $op->mobile , $op->class , $op->password , $op->dob , $op->gender , $op->rdate);
			// $user1->login($_POST['mobile'] , $_POST['password'] , "on");
			$_SESSION['user1'] = $op->mobile;

				setcookie("user1", $op->mobile, time() + (86400 * 30), "/");
				// if (true) {
					$md5password = md5($op->password);
					setcookie("autologin", $md5password, time() + (86400 * 30), "/");
				// }

		}else{
			$op->error = "Otp Does not match please enter correctly";
		}
		echo json_encode($op);
?>