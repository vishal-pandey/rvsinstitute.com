<?php
	include_once "../../../adminlibrary/phplib.php";
	$sql = "SELECT * FROM pages where pid = 'from-md'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<form method="post" class="from-md-form">
	<input type="text" name="pid" value="from-md" style="display: none;">
	<span class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control" placeholder="Title of the page" value="<?php echo $row['title'];?>">
	</span>
	<textarea name="content" class="form-control" rows="20"><?php echo $row['content'];?></textarea>
	<input type="submit" name="submit" value="submit" class="btn btn-default from-md-form">
</form>


<script> 
	$(document).ready(function(){
		$(".about-rvs-form").ready(function(){
			$('textarea').froalaEditor();
		});
	});
</script>