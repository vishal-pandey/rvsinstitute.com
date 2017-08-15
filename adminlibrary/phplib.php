<?php
	$server = "localhost";
	$user = "root";
	$pwd = "12345";
	$db = "rvsinstitute_data";

	$conn = new mysqli($server, $user, $pwd, $db);

	/**
	* 
	*/
	class security
	{
		function convert($var){
			$var = htmlspecialchars($var);
			$var = stripcslashes($var);
			$var = trim($var);
			$var = htmlentities($var);
			return $var;
		}
	}
?>