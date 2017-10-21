<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<?php
	include "../../../../adminlibrary/phplib.php";
	$t_name = $_POST['t_name'];
	$t_uid = $_POST['t_uid'];
	$t_pwd = $_POST['t_pwd'];
	$t_phone = $_POST['t_phone'];
	$t_add = $_POST['t_add'];
	$t_subject = $_POST['t_subject'];
	$t_quali = $_POST['t_quali'];
	$t_bio = $_POST['t_bio'];
	$t_pic = "http://www.rvsinstitute.com/tpic/".$t_uid.".jpg";


	$sql = "insert into teacher (t_name , t_uid , t_pwd , t_phone , t_add , t_subject , t_quali , t_bio , t_pic) values ('{$t_name}','{$t_uid}','{$t_pwd}','{$t_phone}','{$t_add}','{$t_subject}','{$t_quali}','{$t_bio}','{$t_pic}')";
	if($conn->query($sql)){
		echo "success";
	}
?>