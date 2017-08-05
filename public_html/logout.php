<?php
	include_once "./library/library.php";
	$logout = new user();
	if($logout->logout()){
		echo "success";
	}

?>