<?php session_start(); ?>
<?php 
	include_once "../../../adminlibrary/phplib.php";
	$sql="select * from teacher where t_uid = '{$_SESSION['t_uid']}'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<section class="t_profile col-sm-12 well">
	<h3 align="center">Teacher Profile</h3>
	<div class="well"><b>Name : </b> <span> <?php echo $row['t_name']; ?> </span></div>
	<div class="well"><b>User Id : </b> <span> <?php echo $row['t_uid']; ?> </span></div>
	<div class="well"><b>Phone No. : </b><span><?php echo $row['t_phone'] ?></span></div>
	<div class="well"><b>Address : </b><span><?php echo $row['t_add'] ?></span></div>
	<div class="well"><b>Subject Teaching : </b><span><?php echo $row['t_subject'] ?></span></div>
	<div class="well"><b>Qualification : </b><span><?php echo $row['t_quali'] ?></span></div>
	<div class="well"><b>Bio / Short Description : </b><span><?php echo $row['t_bio'] ?></span></div>
</section>
<style type="text/css">
	.t_profile{
		background: rgb(238,238,238);
	}
	.t_profile div{
		background: white; 
	}
</style>