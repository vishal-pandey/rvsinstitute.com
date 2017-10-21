<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<?php
	include "../../../../adminlibrary/phplib.php";
	if($_POST['check'] == 'add'){
		$sql = "insert into s_material (cid,title) values ('{$_POST['cid']}','{$_POST['title']}')";
		$conn->query($sql);
	}
	if($_POST['check'] == 'delete'){
		$sql="delete from s_material where cid = '{$_POST['cid']}' and smid = '{$_POST['smid']}'";
		$conn->query($sql);
	}
	echo "success";
?>
