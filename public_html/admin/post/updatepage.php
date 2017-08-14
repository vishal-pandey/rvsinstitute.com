<?php
	if ($_POST['pid'] == 'about-rvs' || $_POST['pid'] == 'from-md' || $_POST['pid'] == 'our-mission') {
		include_once "../../../adminlibrary/phplib.php";
		$title = $_POST['title'];
		$content = $_POST['content'];
		$pid = $_POST['pid'];
		$sql="update pages set title='{$title}', content='{$content}' where pid = '{$pid}';";
		$conn->query($sql);
	}
		echo "success";
?>