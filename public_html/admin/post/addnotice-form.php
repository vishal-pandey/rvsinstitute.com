<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<?php
	 date_default_timezone_set("Asia/Kolkata"); 
	include_once "../../../adminlibrary/phplib.php";
	$creation = date('Y-m-d');
	$i = 0;
	while(isset($_POST['title'][$i])){
		
		$title = $_POST['title'][$i];
		$sql = "INSERT INTO notice (title, content, creation) values ('{$title}' , '{$content}' , '{$creation}')";
		$conn->query($sql);
		$i++;
	}

	$j=0;
	while(isset($_POST['delete'][$j])){
		$todelete = $_POST['delete'][$j];
		$sql = "delete from notice where title = '{$todelete}'";
		$conn->query($sql);
		$j++;
	}
	echo "success";
?>