<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>
    <button class="btn btn-default col-sm-12" id="registered">Registered Students</button>
    <button class="btn btn-default col-sm-12" id="course">Add Courses</button>
</div>
<div class="main-content col-sm-10 well">
	<div class="instruction">
		<h3 align="center">Instructions</h3>
		<p>
			<ol>
				<li>This is the section of the admin panel where you would manage everything related to students.</li>
				<li>Select the menu item from the left to manage</li>
			</ol>
		</p>
	</div>
	<div class="registered">
		<h3 align="center">List Of Registered Students</h3>
		<div>
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
				$sql = "SELECT * FROM r_student";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()){
					if($row['s_regno'] == ""){
						$row['s_regno'] = "<span class='btn btn-default addregno' id='".$row['s_mobile']."'>Assign Regno</span>";
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
		</div>
	</div>
	<div class="course">
		<h3 align="center">Add Courses</h3>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('button').click(function(){
			$(".main-content div").css("display","none");
			$(".side-menu button").css("background","initial");
			$(this).css("background","lightgrey");
			var abc = $(this).attr("id");
			$('.'+abc).css("display","block");
			$('.'+abc+'>div').css("display","block");
		});
		$('.addregno').click(function(){
			var number = $(this).attr("id");
			var data = '<form method="post" id="theForm"><input type="text" name="mobile" value="'+number+'" style="display:none;"><input type="text" name="s_regno"><input type="submit" name="submit" class="btn btn-default" id="regnosubmit"></form>';
			$(this).popover({title: "Enter Regno", content: data, html: true, placement: "left", animation: false});
			// $(this).popover('toggle');

		});
		$('.addregno').click();
	});
</script>
<style type="text/css">
	h3{
		margin: 0;
	}
	div.registered , div.course{
		display: none;
	}
</style>