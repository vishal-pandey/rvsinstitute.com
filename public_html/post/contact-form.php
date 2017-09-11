<?php 
	include "../secure/config.php";
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$query = $_POST['query'];
	$callback = $_POST['callback'];
	$sql = "insert into contact values ('{$name}' , '{$phone}' , '{$query}' , '{$callback}')";
	if($conn->query($sql)){
		echo "success";
	}
?>