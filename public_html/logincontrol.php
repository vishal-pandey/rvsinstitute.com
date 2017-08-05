<?php
	include_once "./library/library.php";
	$user = new user();

	$err = "";
	// if(strlen($_POST['mobile']) < 10){
	// 	$err += "Please Enter Correct 10 digit mobile no.";
	// }elseif(strlen($_POST['password']) == ""){
	// 	$err += "Please Enter Your password";
	// }elseif (strlen($_POST['mobile']) < 8) {
	// 	$err += "Please Enetr Correct password";
	// }else{
		
	// }

		if ($_POST['mobile'] == "" || $_POST['password'] == "") {
			$err = "Please enter mobile no. and password";
		}else{
			$result=$user->login($_POST['mobile'] , $_POST['password'], $_POST['autologincheck']);
			if ($result) {
				$err = "success";
			}else{
				$err = "Worng Mobile And Password Combination.";
			}
		}

	echo $err;
?>