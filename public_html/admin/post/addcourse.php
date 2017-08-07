<?php
	include "../../../adminlibrary/phplib.php";
	$i=0;
	while(isset($_POST['CourseID'][$i])){
		$CourseID = $_POST['CourseID'][$i];
		$Course_Name = $_POST['Course_Name'][$i];
		$Course_Code = $_POST['Course_Code'][$i];
		$Active = $_POST['Active'][$i];

		$sql = "SELECT * from course where CourseID = '{$CourseID}'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if (isset($row['CourseID'])) {
			$sql1 = "UPDATE course SET CourseID = '{$CourseID}' , Course_Name = '{$Course_Name}' , Course_Code = '{$Course_Code}' , Active = '{$Active}' where CourseID = '{$CourseID}' ";
			$conn->query($sql1);
		}else{
			$sql2 = "INSERT INTO course VALUES('{$CourseID}','{$Course_Name}','{$Course_Code}','{$Active}')";
			$conn->query($sql2);
		}
		
		$i++;
	}
	$j=0;
	while(isset($_POST['delete'][$j])){
		$delete =$_POST['delete'][$j];
		$sql3 = "DELETE FROM course WHERE CourseID = '{$delete}'";
		$conn->query($sql3);
		$j++;
	}
	echo "success";
?>