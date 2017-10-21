<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<?php
	include "../../../../adminlibrary/phplib.php";
	$content = $_POST['content'];
	$cid =  $_POST['cid'];
	$smid = $_POST['smid'];

	$sql = "update s_material set content='{$content}' where cid='{$cid}' and smid='{$smid}'";
	$conn->query($sql);
	echo "success";


?>