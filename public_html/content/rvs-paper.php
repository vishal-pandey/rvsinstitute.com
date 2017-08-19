<?php
	include "../adminlibrary/phplib.php";
    $sql = "SELECT * FROM pages where pid = 'rvs-paper'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<h2 align="center"><?php echo $row['title'] ?></h2>
<div class="col-sm-8 about-content">
	<hr id="hr">
    <p><?php echo $row['content']; ?></p>
</div>