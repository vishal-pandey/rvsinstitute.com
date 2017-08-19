<?php
	if ($_POST['pid'] == 'about-rvs' || $_POST['pid'] == 'from-md' || $_POST['pid'] == 'our-mission' || $_POST['pid'] == 'home-work' || $_POST['pid'] == 'student-video' || $_POST['pid'] == 'result' || $_POST['pid'] == 'other-schedule' || $_POST['pid'] == 'upcoming-batches') {
		include_once "../../../adminlibrary/phplib.php";
		$title = $_POST['title'];
		$content = $_POST['content'];
		$pid = $_POST['pid'];

		$security = new security();
		$title = $security->convert($title);
		$content = $security->convert($content);

		$sql="update pages set title='{$title}', content='{$content}' where pid = '{$pid}';";
		$conn->query($sql);
	}
		echo "success";
?>