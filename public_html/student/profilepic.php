<div class="profile-pic">
	<h3 align="center" style="margin-top: 0px; color: green;"><u>Change Your Profile Picture</u></h3>
	<center><img src="./profile/<?php echo $profile['s_mobile'].'.jpg?'.time(); ?>" class="col-sm-5" style="float: initial;"></center>
	<form method="post" action="./picupload.php" enctype="multipart/form-data">
		<input type="text" name="s_mobile" value="<?php echo $profile['s_mobile']; ?>" style="display: none;">
		<input type="file" name="profilepic" class="form-control" name="profilepic">
		<br>
		<center>
		<input type="submit" name="submit" value="submit" class="btn btn-primary">
		</center>
	</form>
</div>