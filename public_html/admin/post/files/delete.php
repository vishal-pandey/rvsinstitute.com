<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<?php
	if (isset($_POST['thefile'])) {
    	unlink($_POST['thefile']);
    	echo "success";
    }
?>