<?php
	include_once "../../../adminlibrary/phplib.php";
	$sql = "SELECT * FROM notice";
	$result = $conn->query($sql);
	
?>
<span class="thetable">
	<h3 align="center">Notice</h3>
	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Notice</th>
		</tr>
		<?php
			while($row = $result->fetch_assoc()){
				echo "<tr>
					<td>{$row['id']}</td>
					<td>{$row['title']}</td>
				</tr>";
			}
		?>
	</table>
	<button class="btn btn-default" id="edit-notice">Edit</button>
</span>
<span class="theedit">
<h3 align="center">Edit Notice</h3>
<form class="addnotice-form" method="post">
	<table class="table table-bordered edittable">
		<tr>
			<th width="100">Select To Delete</th>
			<th>Notice Title</th>
		</tr>
		<?php
			$sql = "SELECT * FROM notice";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
				echo "<tr>
					<td><input type='checkbox' name='delete[]' value ='{$row['title']}'</td>
					<td><input type='text' name='title[]' value ='{$row['title']}' disabled='true'></td>
				</tr>";
			}
		?>
		
	</table>
	<button type="submit" class="pull-right btn btn-default">Update</button>
</form>
<button class="btn btn-default" id="add-new-notice">Add More</button>
<button class="btn-default btn" id="cancel-delete">Cancel</button>
</span>
<script type="text/javascript">
	$(document).ready(function(){
		$("#add-new-notice").click(function(){
			$(".edittable").append('<tr><td></td><td><input type="text" name="title[]"></td></tr>');
		});
		$("#edit-notice").click(function(){
			$(".theedit").css("display","initial");
			$(".thetable").css("display","none");
		});
		$("#cancel-delete").click(function(){
			$(".thetable").css("display","initial");
			$(".theedit").css("display","none");
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
		/*margin: 0;*/
	}
	table.edittable tr td{
		padding: 0;
	}
	.theedit input[type="checkbox"]{
		width: initial;
		height: initial;
		padding: initial;
		margin-left: 45%;
		margin-top: 15%;
	}
</style>