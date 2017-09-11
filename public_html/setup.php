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
	
	$sql2 = "INSERT INTO pages (pid , title) VALUES ('course-academic' , 'Academic Courses')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid , title) VALUES ('course-competitive' , 'Competitive Courses')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid , title) VALUES ('course-computer' , 'Computer Courses')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid, title) VALUES ('home-work', 'Home Work')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid, title) VALUES ('student-video', 'Videos')";

	$sql2 = "INSERT INTO pages (pid, title) VALUES ('result', 'Examination Result')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid, title) VALUES ('other-schedule', 'Other Schedule')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid, title) VALUES ('upcoming-batches', 'Upcoming Batches')";
	$conn->query($sql2);


	$sql2 = "INSERT INTO pages (pid, title) VALUES ('cbse-paper', 'CBSE Sample Paper')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid, title) VALUES ('rvs-paper', 'RVS Practice Paper')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid, title) VALUES ('imp-question', 'Important Question')";
	$conn->query($sql2);


	$sql2 = "INSERT INTO pages (pid, title) VALUES ('exam-date', 'Examination Date')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid, title) VALUES ('exam-topper', 'Topper Of The Test')";
	$conn->query($sql2);

	$sql2 = "INSERT INTO pages (pid, title) VALUES ('exam-govt', 'Government Job Vacancy')";
	$conn->query($sql2);

	$sql3 = "create table academic_schedule(sno int(4) primary key, class text, subject text, day text, timing text, updated_on text)";
	$conn->query($sql3);

	$sql4 = "create table notice (id int(4) primary key auto_increment , title varchar (500) UNIQUE, content text, creation date);";
	$conn->query($sql4);

	$sql5 = "create table s_material (cid int(11) , smid int(11) primary key auto_increment, title text, content text, foreign key (cid) references course (CourseID) on update cascade on delete cascade );";
	$conn->query($sql5);

	$sql6 = "create table stu_course (s_mo bigint(10), c_id int(11), primary key(s_mo , c_id), foreign key (s_mo) references r_student(s_mobile) on update cascade on delete cascade,  foreign key (c_id) references course(CourseID) on update cascade on delete cascade);";
	$conn->query($sql6);

	$sql6 = "create table fees(s_mo bigint(10), p_date date, f_paid int(6), mode varchar(50) , ref varchar(100),  foreign key (s_mo) references r_student (s_mobile));";
	$conn->query($sql6);

	$sql6 = "alter table r_student add (thefees int(6), s_date date);";
	$conn->query($sql6);

	$sql6 = "alter table r_student add (f_due int (6))";
	$conn->query($sql6);


	$sql7 = "create table teacher(t_name varchar(200), t_uid varchar(50) primary key , t_pwd varchar(20) , t_phone bigint(15) , t_add text , t_subject text );";
	// $conn->query($sql7);

	$sql8 = "create table contact (name varchar(200) , phone bigint(10) , query text , callback char(3));";
	$conn->query($sql8);
	
?>