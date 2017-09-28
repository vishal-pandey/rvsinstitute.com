<?php 
	include "../../../../adminlibrary/phplib.php"; 
	$t_name = $_POST['t_name'];
	$t_uid = $_POST['t_uid'];
	$t_phone = $_POST['t_phone'];
	$t_add = $_POST['t_add'];
	$t_subject = $_POST['t_subject'];
	$t_quali = $_POST['t_quali'];
	$t_bio = $_POST['t_bio'];

	$sql = "update teacher set t_name = '{$t_name}' , t_phone = '{$t_phone}' , t_add = '{$t_add}' , t_subject = '{$t_subject}' , t_quali = '{$t_quali}' , t_bio = '{$t_bio}' where t_uid = '{$t_uid}' ";
	if($conn->query($sql)){
		echo "success";
	};

?>