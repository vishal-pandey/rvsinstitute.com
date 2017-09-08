<?php
	include "../../../../adminlibrary/phplib.php";
	$t_name = $_POST['t_name'];
	$t_uid = $_POST['t_uid'];
	$t_pwd = $_POST['t_pwd'];

	$sql = "insert into teacher (t_name , t_uid , t_pwd) values ('{$t_name}','{$t_uid}','{$t_pwd}')";
	if($conn->query($sql)){
		echo "success";
	}
?>