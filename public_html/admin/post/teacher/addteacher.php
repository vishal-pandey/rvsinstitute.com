<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<h3 align="center">Add Teacher</h3>
<div class="col-sm-8 well" style="float: initial; margin-left: auto; margin-right: auto;">
	<form class="add-teacher-form" method="post">
		<input type="text" name="t_name" class="form-control" placeholder="Teacher's Name*" required="true">
		<input type="text" name="t_uid" class="form-control" placeholder="User Id*"  required="true">
		<input type="password" name="t_pwd" class="form-control" placeholder="Password*"  required="true">
		<input type="text" name="t_phone" class="form-control" placeholder="Phone No">
		<input type="text" name="t_subject" class="form-control" placeholder="Subject Of teaching"">
		<input type="text" name="t_quali" class="form-control" placeholder="Qualification">
		<textarea name="t_bio" placeholder="Short Description About Teacher" class="form-control"></textarea>
		<textarea name="t_add" placeholder="Address" class="form-control"></textarea>
		<button class="btn btn-default">Submit</button>
	</form>
</div>
<div class="col-sm-12">
	<h3 align="center">Registered Teachers</h3>
	<?php
		include "../../../../adminlibrary/phplib.php";
		$sql = "select * from teacher";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			echo "
				<div class='col-sm-4 well'>
					<b>Name :</b> {$row['t_name']}<br>
					<b>User Id :</b> {$row['t_uid']}<br>
					<b>Password :</b> {$row['t_pwd']}<br>
				</div>
			";
		}
	?>
</div>

<script type="text/javascript">

	$(document).ready(function(){
		$(".add-teacher-form").submit(function(e) {
		    var url = "./post/teacher/add-teacher-form.php"; 
		    $.ajax({
		           type: "POST",
		           url: url,
		           data: $(this).serialize(), 
		           success: function(data)
		           {
		           		// alert(data);
		               if (data == "success") {
		               		$.post("./post/teacher/addteacher.php", function(data, status){
						            $('.addteacher').html(data);
						        });

		               }
		           }
		         });

		    e.preventDefault(); 
		});
	});

</script>