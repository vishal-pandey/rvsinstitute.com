<?php
	include_once "./secure/config.php";
	include_once "./library/library.php";
	$s_name=$_POST['s_name'];
	$s_father=$_POST['s_father'];
	$s_mother=$_POST['s_mother'];
	$s_email=$_POST['s_email'];
	$s_course=$_POST['s_course'];
	$s_add=$_POST['s_add'];
	$s_mobile = $_POST['s_mobile'];

	$sql11="update r_student set s_name = '{$s_name}' , s_father = '{$s_father}' , s_mother = '{$s_mother}' , s_email = '{$s_email}' , s_course = '{$s_course}' , s_add = '{$s_add}' where s_mobile = '{$s_mobile}' ";
	$user = new user();
	if ($user->loginCheck()) {
		if($conn->query($sql11)){
			echo "success";
		}else{
			echo "fail";
		}
	}else{
		echo "Something Went Wrong";
	}
?>