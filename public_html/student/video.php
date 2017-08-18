<?php
	$sql = "SELECT * FROM pages where pid = 'student-video'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<div class="videos">
	<h3 align="center" style="margin-top: 0px; color: green;"><u>Videos</u></h3>
	<div class="video col-sm-12">
		<?php echo $row['content']; ?>
	</div>
</div>