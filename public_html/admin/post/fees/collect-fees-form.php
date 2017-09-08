<?php
	include_once "../../../../adminlibrary/phplib.php";
	$f_paid = $_POST['f_paid'];
	$f_due = $_POST['f_due'];
	$p_date = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
	$s_mobile = $_POST['s_mobile'];
	$sql = "INSERT into fees (s_mo , p_date , f_paid , mode , ref) values ('{$s_mobile}' , '{$p_date}' , '{$f_paid}' , 'Offline' , 'Payment By Cash')";


	
	if($conn->query($sql)){
		
		
		$sql2 = "select s_date from r_student where s_mobile = {$s_mobile}";
		$result = $conn->query($sql2);
		$row = $result->fetch_assoc();

		date_default_timezone_set("Asia/Kolkata");

		$s_date = strtotime($row['s_date']);
		$s_date = date("Y-m-d", strtotime("+1 month", $s_date));

		$sql1 = "update r_student set f_due = '{$f_due}' , s_date = '{$s_date}' where s_mobile = {$s_mobile}";
		$conn->query($sql1);

		echo "success";
	}
	else{
		echo $sql;
	}
?>