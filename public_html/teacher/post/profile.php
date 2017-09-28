<?php session_start(); ?>
<?php 
	include_once "../../../adminlibrary/phplib.php";
	$sql="select * from teacher where t_uid = '{$_SESSION['t_uid']}'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>




<section class="t_profile col-sm-12 well t_edit">
	<h3 align="center">Teacher Profile</h3>

	<form class="update-info-form">
	<div class="well"><b>Name : </b> <span><input type="text" name="t_name" class="form-control" value="<?php echo $row['t_name']; ?>"></span></div>
	<div class="well"><b>User Id : </b> <span><input type="text" name="t_uid" class="form-control" disabled="true" value="<?php echo $row['t_uid']; ?>"></span></div>

	<input type="hidden" name="t_uid" value="<?php echo $row['t_uid']; ?>">	

	<div class="well"><b>Phone No. : </b><span><input type="text" name="t_phone" class="form-control" value="<?php echo $row['t_phone']; ?>"></span></div>
	<div class="well"><b>Address : </b><span><textarea name="t_add" class="form-control"><?php echo $row['t_add'] ?></textarea></span></div>
	<div class="well"><b>Subject Teaching : </b><span><input type="text" name="t_subject" class="form-control" value="<?php echo $row['t_subject']; ?>"></span></div>
	<div class="well"><b>Qualification : </b><span><input type="text" name="t_quali" class="form-control" value="<?php echo $row['t_quali']; ?>"></span></div>
	<div class="well"><b>Bio / Short Description : </b><span><textarea name="t_bio" class="form-control"><?php echo $row['t_bio'] ?></textarea></span></div>
	<button class="btn btn-success">Submit</button>
	</form>
	<button class="btn btn-danger cancel">Cancel</button>
</section>





<section class="t_profile col-sm-12 well t_data">
	<h3 align="center">Teacher Profile</h3>
	<br>
	<center>
		<img src="<?php echo $row['t_pic']."#".filemtime($row['t_pic']); ?>" width="150" height="180">
		<form class="t_pic-upload-form" enctype="multipart/form-data">
			<input type="hidden" name="t_uid" value="<?php echo $row['t_uid']; ?>" >
			<input type="file" name="t_pic" class="form-control">
			<input type="submit" name="submit" value="Update Photo" class="btn btn-primary">
		</form>
	</center>
	<br/>
	<div class="well"><b>Name : </b> <span> <?php echo $row['t_name']; ?> </span></div>
	<div class="well"><b>User Id : </b> <span> <?php echo $row['t_uid']; ?> </span></div>
	<div class="well"><b>Phone No. : </b><span><?php echo $row['t_phone'] ?></span></div>
	<div class="well"><b>Address : </b><span><?php echo $row['t_add'] ?></span></div>
	<div class="well"><b>Subject Teaching : </b><span><?php echo $row['t_subject'] ?></span></div>
	<div class="well"><b>Qualification : </b><span><?php echo $row['t_quali'] ?></span></div>
	<div class="well"><b>Bio / Short Description : </b><span><?php echo $row['t_bio'] ?></span></div>
	<button class="btn btn-success edit">Edit</button>
</section>

<script type="text/javascript">
	$(document).ready(function(){
		$(".edit").click(function(){
			$(".t_edit").css({"display":"initial"});
			$(".t_data").css({"display":"none"});
		});

		$(".cancel").click(function(){
			$(".t_edit").css({"display":"none"});
			$(".t_data").css({"display":"initial"});
		});
		$(".update-info-form").submit(function(e) {
			var url = "./post/profile/update-info.php"; 
		    $.ajax({
		           type: "POST",
		           url: url,
		           data: $(this).serialize(), 
		           success: function(data)
		           {	
		               if (data == "success") {
		               		$.post("./post/profile.php", function(data, status){
					            $('.profile').html(data);
					        });

		               }
		           }
		         });

		    e.preventDefault(); 
		});
	
		$(".t_pic-upload-form").submit(function(e) {
		    e.preventDefault(); 
		    var url = "./upload1.php"; 

		    $.ajax({
		           type: "POST",
		           url: url,
		           data:  new FormData(this),
		           cache:false,
            contentType: false,
            processData: false,
		           success: function(data)
		           {
		           		// alert(data);
		            	if (data == "success") {              		
		               		$.post("./post/profile.php", function(data, status){
					            $('.profile').html(data);
					        });
						}
		           }
		         });
		});
	});
</script>

<style type="text/css">
	.t_profile{
		background: rgb(238,238,238);
	}
	.t_profile div{
		background: white; 
	}
	.t_edit{
		display: none;
	}
</style>