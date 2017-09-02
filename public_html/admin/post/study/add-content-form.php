<?php
	include "../../../../adminlibrary/phplib.php";
	$sql = "insert into s_material (cid,title) values ('{$_POST['cid']}','{$_POST['title']}')";
	$conn->query($sql);
	echo "success";
?>
