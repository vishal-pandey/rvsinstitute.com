<?php session_start(); ?>
<?php require_once('config/define.php'); ?>
<?php include "./content/login.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "./content/head.php"; ?>
</head>
<body onload="startTime()">
<?php include_once('./content/header.php'); ?>
<?php include "./content/aboutcontent.php"; ?>
<?php include_once('./content/footer.php'); ?>
</body>
</html>