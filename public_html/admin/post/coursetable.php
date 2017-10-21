<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<span class="thetable">
	<table class="table table-bordered">
		<tr>
			<th>Course Id</th>
			<th>Course Name</th>
			<th>Course Code</th>
			<th>Course Status</th>
		</tr>
		<?php
			include_once "../../../adminlibrary/phplib.php";
			$sql = "SELECT * FROM course";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				echo "	<tr>
							<td>{$row['CourseID']}</td>
							<td>{$row['Course_Name']}</td>
							<td>{$row['Course_Code']}</td>
							<td>{$row['Active']}</td>
						</tr>";
			}
		?>
	</table>
	<button class="btn btn-default editcourse">Edit or Add Course</button>
</span>
<span class="theedit">
<form class="courseform" method="post" action="./post/coursetable.php">
	<table class="table table-bordered edittable">
		<tr>
			<th>Select to Delete</th>
			<th>Course Id</th>
			<th>Course Name</th>
			<th>Course Code</th>
			<th>Course Status</th>
		</tr>
		<?php
			include_once "../../../adminlibrary/phplib.php";
			$sql = "SELECT * FROM course";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				$CourseID = $row['CourseID'];
				$Course_Name = $row['Course_Name'];
				$Course_Code = $row['Course_Code'];
				$Active = $row['Active'];


				echo "	<tr>
							<td><input type='checkbox' name='delete[]' value='{$CourseID}'></td>
							<td><input type = 'text' name = 'CourseID[]' value = '{$CourseID}'></td>
							<td><input type = 'text' name = 'Course_Name[]' value = '{$Course_Name}'></td>
							<td><input type = 'text' name = 'Course_Code[]' value = '{$Course_Code}'></td>
							<td><input type = 'text' name = 'Active[]' value = '{$Active}'></td>
						</tr>";
			}
		?>
	</table>
	<button type="submit" class="btn btn-default update pull-right">Update</button>
</form>
	<button class="btn btn-default addcourse">Add Course</button>
	<button class="btn btn-default editcoursecancel">Cancel</button>
</span>
<script type="text/javascript">
	$(document).ready(function(){
		$(".editcourse").click(function(){
			$(".theedit").css("display","block");
			$(".thetable").css("display","none");
		});
		$(".editcoursecancel").click(function(){
			$(".theedit").css("display","none");
			$(".thetable").css("display","block");
		});
		$(".addcourse").click(function(){
			$(".edittable").append("<tr><td></td><td><input type = 'text' name = 'CourseID[]'></td><td><input type = 'text' name = 'Course_Name[]'></td><td><input type = 'text' name = 'Course_Code[]'></td><td><input type = 'text' name = 'Active[]'></td></tr>");
		});

	});
	
</script>
<style type="text/css">
	span.theedit{
		display: none;
	}
	.theedit input{
		width: 100%;
		height: 100%;
		padding: 10px 15px;
		margin: 0;
	}
	table.edittable tr td{
		padding: 0;
	}
	.theedit input[type="checkbox"]{
		width: initial;
		height: initial;
		padding: initial;
		margin-left: 45%;
		margin-top: 10%;
	}
</style>