<?php
	include_once "../../../adminlibrary/phplib.php";
	$sql1 = "DELETE FROM academic_schedule";
	$conn->query($sql1);
	$i=0;
	while(isset($_POST['sno'][$i])){
		$sno = $_POST['sno'][$i];
		$class = $_POST['class'][$i];
		$subject = $_POST['subject'][$i];
		$day = $_POST['day'][$i];
		$timing = $_POST['timing'][$i];

		$sql = "INSERT INTO academic_schedule (sno, class, subject, day, timing) VALUES ('{$sno}', '{$class}', '{$subject}', '{$day}', '{$timing}')";
		$conn->query($sql);
		$i++;
	}
	echo "success";
?>