<?php
	$sql = "SELECT * FROM pages where pid = 'home-work'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<div class="home-work">
	<h3 align="center" style="margin-top: 0px; color: green;"><u>Home Work</u></h3>
	<div class=" col-sm-12">
		<?php echo $row['content']; ?>
	</div>
</div>