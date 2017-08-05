<?php session_start(); ?>
<?php require_once('config/define.php'); ?>
<?php include "./content/login.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "./content/head.php"; ?>
  <script type="text/javascript">
    $(document).ready(function(){
        if ($(".student-menu-toggle").css("display") == "block") {
            $(".student-menu").hide();
          
        }
      $(".student-menu-toggle").click(function(){
        $(".student-menu").toggle("1000");
      });
    });
  </script>
</head>
<body onload="startTime()">
<?php include_once('./content/header.php'); ?>

<?php
  include_once("./library/library.php");
  $user = new user;
  if($user->loginCheck()){
    include "./student/main.php";
  }else{
    include "./student/login.php";
  }

?>

<?php include_once('./content/footer.php'); ?>
</body>
</html>