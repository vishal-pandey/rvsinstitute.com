<?php
	$sql = "SELECT * FROM pages where pid = 'result'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<div class="result">
	<h3 align="center" style="margin-top: 0px; color: green;"><u>Results</u></h3>
	<div class="col-sm-12"><?php echo $row['content']; ?></div>
</div>