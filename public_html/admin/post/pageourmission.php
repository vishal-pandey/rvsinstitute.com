<?php
	include_once "../../../adminlibrary/phplib.php";
	$sql = "SELECT * FROM pages where pid = 'our-mission'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<form method="post" class="our-mission-form">
	<input type="text" name="pid" value="our-mission" style="display: none;">
	<span class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control" placeholder="Title of the page" value="<?php echo $row['title'];?>">
	</span>
	<textarea name="content" class="form-control" rows="20" placeholder="Content of the page. Here You can use the html tags and css to style and modify the page"><?php echo $row['content'];?></textarea>
	<input type="submit" name="submit" value="submit" class="btn btn-default our-mission-form">
</form>