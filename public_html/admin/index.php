<?php include_once "./content/configure.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Admin Panel</title>
	<?php include_once "./content/head.php"; ?>
</head>
<body>
<?php
	if (isset($_SESSION['theadmin'])) {
		include "../../admincontent/home.php";
	}
	else{
		include "../../admincontent/login.php";
	}
?>
</body>
</html>
