<?php 
		session_start();	
		include_once "./secure/config.php";

		class op {}
		
		$op = new op;


		$op->name=$_POST['name'];
		$op->class=$_POST['class'];
		$op->mobile=$_POST['mobile'];
		$op->password=$_POST['password'];
		$op->r_password=$_POST['r_password'];
		$op->day=$_POST['day'];
		$op->month=$_POST['month'];
		$op->year=$_POST['year'];
		$op->gender=$_POST['gender'];
		$op->error="";

		if($op->name == ""){
			$op->error = $op->error."Please Enter Your Name<br>";
		}
		if (!(is_numeric($op->mobile)) || !(strlen($op->mobile) == 10)) {
			$op->error = $op->error."Enter A valid 10 digit mibile no. <br>"; 	
		}else{

			$sql = "SELECT s_mobile from r_student where s_mobile = '{$op->mobile}';";
			$result=$conn->query($sql);
			$row=$result->fetch_assoc();
			if ($row['s_mobile'] == $op->mobile) {
				$op->error = $op->error."This mobile no. is already registered <br>"; 		
			}
		}

		if ((strlen($op->class) == 0)) {
			$op->error = $op->error."Please Enter Your Class/Course/Subject <br>"; 	
		}
		if ((strlen($op->password) < 8)) {
			$op->error = $op->error."Length of password must be greater than 8<br>"; 	
		}else{
			if($op->password != $op->r_password){
				$op->error = $op->error."Password Do Not Match <br>";
			}
		}
		
		if(($op->day=="0") || ($op->month=="0") || ($op->year=="0")){
			$op->error = $op->error."Enter Correct Date Of Birth<br>";
		}
		if ($op->gender == "0") {
			$op->error = $op->error."Please Select Gender <br>"; 
		}
		

		// sending otp
		if($op->error == ""){
			if(isset($_SESSION['theotp'])){
				$theotp = $_SESSION['theotp'];
				$op->otpp = $_SESSION['theotp'];
			}else{
				$theotp = rand(100000,999999);
				$_SESSION['theotp'] = $theotp;
				$op->otpp = $_SESSION['theotp'];
			}
			// require '../vendor/autoload.php';

			// error_reporting(E_ALL);
			// ini_set("display_errors", 1);

			// $params = array(
			//     'credentials' => array(
			//         'key' => 'AKIAIMQ2EWIMNJ3JKPAQ',
			//         'secret' => 'VQ40dvnH2hF5UyJaltVzH7fQB1SEV8xN4j5e9Ukj',
			//     ),
			//     'region' => 'us-west-2', // < your aws from SNS Topic region
			//     'version' => 'latest'
			// );
			// $sns = new \Aws\Sns\SnsClient($params);

			// $args = array(
			//     "SenderID" => "CBTS",
			//     "SMSType" => "Transactional",
			//     "Message" => "The OTP For Your CBTS Registeration is {$theotp} Enter it to complete registration",
			//     "PhoneNumber" => "+91".$op->mobile
			// );

			// $result = $sns->publish($args);
			// // echo "<pre>";
			// // // var_dump($result);
			// // echo "</pre>";
		}

		echo json_encode($op);

?>