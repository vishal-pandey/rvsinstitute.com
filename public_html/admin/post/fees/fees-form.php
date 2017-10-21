<?php
		if ( $_SERVER['HTTP_REFERER'] == 'https://cbts.in/test.php' ) 
		{
			include_once "../../../../adminlibrary/phplib.php";
			$thefees = $_POST['thefees'];
			$s_mobile = $_POST['s_mobile'];
	
			if($_POST['check'] == "thefees"){
				$sql = "update r_student set thefees = {$thefees} where s_mobile = {$s_mobile}";
				$conn->query($sql);
			}
	
			if($_POST['check'] == "s_date"){
				$s_date=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
				$sql = "update r_student set s_date = '{$s_date}' where s_mobile = {$s_mobile}";
				$conn->query($sql);
			}
		}
		else{
			echo "Pass";
		}
?>
success