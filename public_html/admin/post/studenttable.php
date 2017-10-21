<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<table class="table table-bordered">
	<tr>
		<th>Name</th>
		<th>Father Name</th>
		<th>Mother Name</th>
		<th>Gender</th>
		<th>Dob</th>
		<th>Mobile No.</th>
		<th>Email</th>
		<th>Address</th>
		<th>Course</th>
		<th>Reg Date</th>
		<th>Regno</th>
	</tr>
	<?php
		include_once "../../../adminlibrary/phplib.php";
		$sql = "SELECT * FROM r_student";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			if($row['s_regno'] == ""){
				$row['s_regno'] = "<form class='theForm' action='./post/addregno.php' method='post'><input type='text' value='".$row['s_mobile']."' name='s_mobile' style='display:none;'><input type='text' name='s_regno'><br><input type='submit' value='submit' class='btn btn-default'></form>";
			}
			echo "<tr>
						<td>{$row['s_name']}</td>
						<td>{$row['s_father']}</td>
						<td>{$row['s_mother']}</td>
						<td>{$row['s_gender']}</td>
						<td>{$row['s_dob']}</td>
						<td>{$row['s_mobile']}</td>
						<td>{$row['s_email']}</td>
						<td>{$row['s_add']}</td>
						<td>{$row['s_course']}</td>
						<td>{$row['s_rdate']}</td>
						<td>{$row['s_regno']}</td>
					</tr>";
		}
	?>
</table>
<script type="text/javascript">
</script>