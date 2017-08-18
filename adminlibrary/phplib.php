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
			return $var;
		}
	}
?>