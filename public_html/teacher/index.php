<?php session_start(); ?>
<?php include_once "./content/configure.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Admin Panel</title>
	<?php include_once "./content/head.php"; ?>
</head>
<body>
<?php
	if (isset($_SESSION['t_uid'])) {
		include "../../teachercontent/home.php";
	}
	else{
		include "../../teachercontent/login.php";
	}
?>
</body>
</html>
