<?php
	if (isset($_POST['thefile'])) {
    	unlink($_POST['thefile']);
    	echo "success";
    }
?>