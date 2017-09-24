<?php
session_start();
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="oODEI1ljcq";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
		 
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   }
	   else {
            session_start();
          // Successs now processsing payment
            date_default_timezone_set("Asia/Kolkata");

            include "./library/library.php";
            $sql1 = "select * from r_student where s_mobile = '{$_SESSION['user1']}'";
            $result1 = $conn->query($sql1);
            $row1 = $result1->fetch_assoc();

            $s_mobile = $row1['s_mobile'];
            $p_date = date("Y-m-d");
            $f_paid = $row1['thefees'];


            $sql3 = "INSERT into fees (s_mo , p_date , f_paid , mode ) values ('{$s_mobile}' , '{$p_date}' , '{$f_paid}' , 'Online' )";
            if($conn->query($sql3)){
              $sql2 = "select s_date from r_student where s_mobile = {$s_mobile}";
              $result2 = $conn->query($sql2);
              $row2 = $result2->fetch_assoc();

              $s_date = strtotime($row2['s_date']);
              $s_date = date("Y-m-d", strtotime("+1 month", $s_date));

              $sql4 = "update r_student set s_date = '{$s_date}' where s_mobile = {$s_mobile}";
              $conn->query($sql4);

              echo '<script type="text/javascript">  window.location.href="./student.php?link=fee"; </script>'; 
            }
            else{
              echo "something wrong happened";
              echo $sql1."<br>";
              echo $sql2."<br>";
              echo $sql3."<br>";
              echo $sql4."<br>";
            }
             echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
		   }         

?>