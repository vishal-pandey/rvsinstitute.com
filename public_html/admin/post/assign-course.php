<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<?php 
	include_once "../../../adminlibrary/phplib.php";
	$sql = "select * from r_student";
	$result = $conn->query($sql);
	

?>
<table class="table table-bordered">
	<tr>
		<th>Name</th>
		<th>Mobile</th>
		<th>Courses</th>
	</tr>
	<?php 
		while($row = $result->fetch_assoc()){
			$sql = "select * from stu_course where s_mo = '{$row['s_mobile']}'";
			$result1 = $conn->query($sql);
			while($row1 = $result1->fetch_assoc()){
				$sql1 = "select Course_Name from course where CourseID = '{$row1['c_id']}'";
				$result2 = $conn->query($sql1);
				$row2 = $result2->fetch_assoc();

				$course = $course.$row2['Course_Name']."<br>";
			}
		
			$options = "<select name='c_id' style='height:30px;'><option value='0'>select</option>";

			$sql3 = "select CourseID , Course_Name from course";
			$result3 = $conn->query($sql3);
			while($row3 = $result3->fetch_assoc()){
				$options = $options."<option value ='{$row3['CourseID']}'>{$row3['Course_Name']}</option>";
			}
			$options = $options."</select>";
			
			echo "<tr>
						<td>{$row["s_name"]}</td>
						<td>{$row["s_mobile"]}</td>
						<td>{$course}<br>";

			echo "<form class='assign-course-form'>
						<input type='test' value='add' name='toggle' style='display:none;'>
						<input type='text' name='s_mo' value='{$row["s_mobile"]}' style='display:none;'>
				
						{$options}
						<button class='btn btn-default'>Add</button>
									
					</form>
					<form class='assign-course-form'>
						<input type='test' value='delete' name='toggle' style='display:none;'>
						<input type='text' name='s_mo' value='{$row["s_mobile"]}' style='display:none;'>
				
						{$options}

						<button class='btn btn-default'>Delete</button>
									
					</form>
			";

						echo "</td>
					</tr>";
			unset($course);
		}
	?>

</table>