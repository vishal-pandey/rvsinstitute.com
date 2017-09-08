<?php
		include_once "../../../adminlibrary/phplib.php";
		$title = $_POST['title'];
		$content = $_POST['content'];
		$id = $_POST['id'];
		$sql="update notice set title='{$title}', content='{$content}' where id = '{$id}';";
		$conn->query($sql);
		echo "success";
?>