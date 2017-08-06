<?php
	include "../../../adminlibrary/phplib.php";
	$s_regno = $_POST['s_regno'];
	$s_mobile = $_POST['s_mobile'];
	$sql = "UPDATE r_student set s_regno = '{$s_regno}' WHERE s_mobile = '{$s_mobile}'";
	if($conn->query($sql)){
		echo "success";
	}else{
		echo "something wrong happened";
	}
?>