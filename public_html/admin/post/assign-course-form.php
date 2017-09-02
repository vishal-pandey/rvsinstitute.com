<?php 
	include_once "../../../adminlibrary/phplib.php";
	$s_mo = $_POST['s_mo'];
	$c_id = $_POST['c_id'];
	$sql = "insert into stu_course (s_mo , c_id) values('{$s_mo}' , '{$c_id}')";
	$conn->query($sql);
?>
success