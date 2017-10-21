<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<?php
	session_start();
	unset($_SESSION['theadmin']);
?>
<script type="text/javascript">
	window.location.href="./";
</script>