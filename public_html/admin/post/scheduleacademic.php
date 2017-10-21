<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<h3 align="center">Academic Schedules</h3 align="center">
<span class="theTable">
	<table class="table table-bordered">
		<tr>
			<th>S No.</th>
			<th>Class</th>
			<th>Subject</th>
			<th>Days</th>
			<th>Timing</th>
		</tr>

		<?php
			include_once "../../../adminlibrary/phplib.php";
			$sql = "SELECT * FROM academic_schedule";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				echo "<tr>
						<td>{$row['sno']}</td>
						<td>{$row['class']}</td>
						<td>{$row['subject']}</td>
						<td>{$row['day']}</td>
						<td>{$row['timing']}</td>
					</tr>";
			}
		?>
	</table>
	<button class="btn btn-default" id="edit">Edit</button>
</span>
<span class="theEdit">
	<form class="academic-form" method="post">
	<table class="table table-bordered edittable">
		<tr>
			<th>S No.</th>
			<th>Class</th>
			<th>Subject</th>
			<th>Days</th>
			<th>Timing</th>
		</tr>
		<?php
			include_once "../../../adminlibrary/phplib.php";
			$sql = "SELECT * FROM academic_schedule";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				echo "<tr>
						<td><input type='text' name='sno[]' value='{$row['sno']}'></td>
						<td><input type='text' name='class[]' value='{$row['class']}'></td>
						<td><input type='text' name='subject[]' value='{$row['subject']}'></td>
						<td><input type='text' name='day[]' value='{$row['day']}'></td>
						<td><input type='text' name='timing[]' value='{$row['timing']}'></td>
					</tr>";
			}
		?>


		<!-- <tr>
			<td><input type="text" name="sno[]"></td>
			<td><input type="text" name="class[]"></td>
			<td><input type="text" name="subject[]"></td>
			<td><input type="text" name="day[]"></td>
			<td><input type="text" name="timing[]"></td>
		</tr> -->
	</table>
	<button type="submit" class="btn-default btn pull-right">Submit</button>
	</form>
	<button class="btn-default btn" id="Cancel">Cancel</button>
	<button class="btn-default btn" id="add">Add More</button>

</span>
<script type="text/javascript">
	$(document).ready(function(){
		$("#edit").click(function(){
			$(".theEdit").css("display","block");
			$(".theTable").css("display","none");
		});
		$("#Cancel").click(function(){
			$(".theEdit").css("display","none");
			$(".theTable").css("display","block");
		});
		$("#add").click(function(){
			$(".edittable").append('<tr><td><input type="text" name="sno[]"></td><td><input type="text" name="class[]"></td><td><input type="text" name="subject[]"></td><td><input type="text" name="day[]"></td><td><input type="text" name="timing[]"></td></tr>');
		});
	});
</script>
<style type="text/css">
	.theEdit input{
		width: 100%;
		height: 100%;
		padding: 10px 15px;
		margin: 0;
	}
	table.edittable tr td{
		padding: 0;
	}
	span.theEdit{
		display: none;
	}
</style>