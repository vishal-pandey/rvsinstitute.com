<?php
	include "../../../../adminlibrary/phplib.php";
	$content = $_POST['content'];
	$cid =  $_POST['cid'];
	$smid = $_POST['smid'];

	$sql = "update s_material set content='{$content}' where cid='{$cid}' and smid='{$smid}'";
	$conn->query($sql);
	echo "success";


?>