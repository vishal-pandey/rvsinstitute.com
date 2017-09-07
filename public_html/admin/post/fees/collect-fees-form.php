<?php
	include_once "../../../../adminlibrary/phplib.php";
	$f_paid = $_POST['f_paid'];
	$f_due = $_POST['f_due'];
	$p_date = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
	$s_mobile = $_POST['s_mobile'];
	$sql = "INSERT into fees (s_mo , p_date , f_paid , f_due) values ('{$s_mobile}' , '{$p_date}' , '{$f_paid}' , '{$f_due}')";
	if($conn->query($sql)){
		echo "success";
	}
	else{
		echo $sql;
	}
?>