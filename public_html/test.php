<?php 
	session_start();
	include "./library/library.php";
	$userd = new profile();
    $profile = $userd->getUser($_SESSION['user1']);	
?>

<div class="profile">
	<h3 align="center" style="margin-top: 0px; color: green;"><u>Profile</u></h3>
	<div class="well well-sm"><b>name : </b><span class="s-name"><?php echo $profile['s_name'] ?></span></div>
	<div class="well well-sm"><b>Mobile : </b><span class="s-mobile"><?php echo $profile['s_mobile'] ?></span></div>
	<div class="well well-sm"><b>Email : </b><span class="s-mobile"><?php echo $profile['s_email'] ?></span></div>
	<div class="well well-sm"><b>Date Of Birth : </b><span class="s-mobile">01-01-1998</span></div>
	<div class="well well-sm"><b>Course : </b><span class="s-mobile">Class 10th</span></div>
	<div class="well well-sm"><b>Enrolnment No. : </b><span class="s-mobile">Enter Your Enrolnment No. Here</span></div>
	<div class="well well-sm"><b>Address : </b><span class="s-mobile">G3 Gali No.3 Wazirabad Village Near Kali Ghat Delhi 110084</span></div>
	<div class="well well-sm"><button class="btn btn-success" id="edit">Edit</button></div>
</div>
