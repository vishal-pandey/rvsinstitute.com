<?php 
	include "./secure/config.php";
	$sql = "create table r_student (s_id int(10) primary key auto_increment, s_name varchar(50), s_dob date, s_father varchar(50), s_mother varchar(50), s_mobile bigint(10) UNIQUE NOT NULL, s_email varchar(100), s_add text, s_gender varchar(10), s_password varchar(20), s_rdate varchar(50), s_lastlogin varchar(25), s_regno varchar(20) UNIQUE, s_courseno int(5), s_course varchar(50), s_autologin CHAR(32));";
	$conn->query($sql);

	$sql1 = "create table pages(pid varchar(200) primary key, title text, content text, pics text)";
	$conn->query($sql1);

	$sql2 = "INSERT INTO pages (pid) VALUES ('about-rvs')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid) VALUES ('from-md')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid) VALUES ('our-mission')";
	$conn->query($sql2);
?>