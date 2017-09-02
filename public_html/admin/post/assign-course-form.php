<?php 
	include_once "../../../adminlibrary/phplib.php";
	$s_mo = $_POST['s_mo'];
	$c_id = $_POST['c_id'];
	if($_POST['toggle'] == 'add')
	{	
		$sql = "insert into stu_course (s_mo , c_id) values('{$s_mo}' , '{$c_id}')";
		$conn->query($sql);
	}
	if($_POST['toggle'] == 'delete')
	{	
		$sql = "delete from stu_course where s_mo = '{$s_mo}' and c_id = '{$c_id}'";
		$conn->query($sql);
	}
?>
success