<?php
			session_start();
            // Successs now processsing payment

            date_default_timezone_set("Asia/Kolkata");

            include "./library/library.php";
            $sql = "select * from r_student where s_mobile = '{$_SESSION['user1']}'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            $s_mobile = $row['s_mobile'];
            $p_date = date("Y-m-d");
            $f_paid = 400;
            $txnid = 1233213;

            $sql = "INSERT into fees (s_mo , p_date , f_paid , mode , ref) values ('{$s_mobile}' , '{$p_date}' , '{$f_paid}' , 'Online' , '{$txnid}')";
            if($conn->query($sql)){
              $sql2 = "select s_date from r_student where s_mobile = {$s_mobile}";
              $result = $conn->query($sql2);
              $row = $result->fetch_assoc();

              $s_date = strtotime($row['s_date']);
              $s_date = date("Y-m-d", strtotime("+1 month", $s_date));

              $sql1 = "update r_student set f_due = '0' , s_date = '{$s_date}' where s_mobile = {$s_mobile}";
              $conn->query($sql1);

              echo '<script type="text/javascript">  window.location.href="./student.php?link=fee"; </script>'; 
            }
            else{
              echo "something wrong happened";
            }
?>