<?php
	if($_GLOBAL['conn'] == null)
	{
		$server = "localhost";
		$user = "root";
		$pwd = "12345";
		$db = "rvsinstitute_data";

		$_GLOBAL['conn'] = new mysqli($server , $user , $pwd , $db);
		//$conn = new mysqli($server , $user , $pwd , $db);
	}
	$conn = $_GLOBAL['conn'];
?>