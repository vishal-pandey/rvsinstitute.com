<?php
	session_start();
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "rvsinstitute_data";

	$conn = new mysqli($server , $user , $pwd , $db);
	
	class user
	{
		public function loginCheck()
		{
			if (isset($_SESSION['user1'])) {
				return true;
			}
			else{
				return false;
			}
		}
		function addUser($name,$mobile,$class,$password,$dob,$gender,$rdate){
			include_once "./secure/config.php";
			$s_autologin = md5($password);
			$sql = "insert into r_student (s_name,s_mobile,s_course,s_password,s_dob,s_gender,s_rdate, s_autologin) values ('{$name}','{$mobile}','{$class}','{$password}','{$dob}','{$gender}','{$rdate}','{$s_autologin}')";
			$conn->query($sql);
		}
		function logout(){
			if (isset($_SESSION['user1'])) {
				unset($_SESSION['user1']);
				setcookie("user1", "", -1, "/");
				setcookie("autologin", "", -1, "/");
				return true;
			}
		}
		function login($user1, $password, $autologin){
			include_once "./secure/config.php";
			$sql1 = "SELECT s_mobile, s_password, s_autologin FROM r_student WHERE s_mobile='{$user1}'";
			$result = $conn->query($sql1);
			$row = $result->fetch_assoc();
			if($row['s_password'] == $password){
				$_SESSION['user1'] = $user1;
				setcookie("user1", $row['s_mobile'], time() + (86400 * 30), "/");
				
				if ($autologin == "on") {
					$md5password = md5($password);
					setcookie("autologin", $md5password, time() + (86400 * 30), "/");
				}
				return true;
			}elseif($row['s_autologin'] == $password){
				$_SESSION['user1'] = $user1;
				setcookie("user1", $user1, time() + (86400 * 30), "/");
				setcookie("autologin", $password, time() + (86400 * 30), "/");
				return true;
			}
			else{
				return false;
			}
		}
		function autoLoginCheck(){
			if (isset($_COOKIE['autologin'])) {
				$user2 = new user();
				$user2->login($_COOKIE['user1'], $_COOKIE['autologin'], "on");
			}
		}
	}

	class profile{
		function getUser($mobile){
			include_once "./secure/config.php";
			$sql1 = "SELECT * FROM r_student WHERE s_mobile='{$mobile}'";
			$result = $conn->query($sql1);
			$row = $result->fetch_assoc();
			return $row;
		}
	}
?>