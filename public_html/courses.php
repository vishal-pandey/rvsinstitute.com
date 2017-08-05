<?php require_once('config/define.php'); ?>
<?php
  if(isset($_SESSION['student'])){
    $login_link = '
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account
    <b class="caret"></b></a>
    <ul class="dropdown-menu my-account">
        <li>
            <div class="my-account-content">
                <div class="row">
                    <div class="col-md-5">
                        <img src="../../assets/images/logo.png"
                            alt="Profile Pic" class="img-responsive" />
                        <p class="text-center small">
                            <a href="#">Change Photo</a></p>
                    </div>
                    <div class="col-md-7">
                        <span>RVS Institute</span>
                        <p class="text-muted small">
                            mail@gmail.com</p>
                        <div class="divider">
                        </div>
                        <a href="#" class="btn btn-primary btn-sm active">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="my-account-footer">
                <div class="my-account-footer-content">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-default btn-sm">Change Passowrd</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-default btn-sm pull-right">Sign Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
    ';
  } else {
    $login_link = '
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><b><i class="fa fa-user" aria-hidden="true"></i> Login</b> <span class="caret"></span></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="rvs-content">
                      <form action="send.php">
                        <div class="form-group">
                          <input id="inputName" type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                          <input id="inputEmail" type="password" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                          <textarea placeholder="Write your message.." class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Send</button>
                        </div>
                      </form>
                    </div>
                  </li>
                </ul>
              </li>
    ';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Other Header Content After This -->
  <title>Courses &verbar; <?php echo CompanyName.'&#8482;'; ?></title>
  <meta name="robots" content="index, follow, noarchive" />
  
  <!-- for Google -->
  <meta name="google" content="nositelinkssearchbox" />
  <meta name="google" content="notranslate" />
  <meta name="keywords" content="UPSC, SSC, CBSE, RVS Institute, Coaching Center in Delhi, Top Coaching Center for ssc, Top English Institute, Top Mathematics Institute, English Course, English Speaking Course, English Communication Skill, English for SSC, Mathematics for SSC, English UPSC, UPSC English" />
  <meta name="description" content="RVS Institute is a prominent Coaching Center in Delhi specilised in proving English to UPSC and English and Mathematics to SSC and Other Competitive Exams." />
  <meta name="revised" content="RVS Institute, 05/06/2009" />
  <meta name="author" content="RV Sir" />
  <meta name="copyright" content="<?php echo CompanyName; ?>" />
  <meta name="application-name" content="<?php echo CompanyName; ?>" />
  
  <!-- for Facebook --> 
  <meta property="og:url" content="<?php echo Website; ?>" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="<?php echo CompanyName; ?>" />
  <meta property="og:description" content="RVS Institute is a prominent Coaching Center in Delhi specilised in proving English to UPSC and English and Mathematics to SSC and Other Competitive Exams." />
  <meta property="og:image" content="http://www.rvsinstitute.in/../../assets/images/social_logo.jpg" />
  <meta property="og:site_name" content="RVS Institute" />
  <!--
  <meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
  <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
  <meta property="article:section" content="Article Section" />
  <meta property="article:tag" content="Article Tag" />
  -->
  <meta property="fb:admins" content="100001215660126" />
  <!-- for Twitter -->          
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@">
  <meta name="twitter:title" content="<?php echo CompanyName; ?>" />
  <meta name="twitter:description" content="RVS Institute is a prominent Coaching Center in Delhi specilised in proving English to UPSC and English and Mathematics to SSC and Other Competitive Exams." />
  <meta name="twitter:creator" content="@">
  <meta name="twitter:image" content="http://www.rvsinstitute.in/../../assets/images/social_logo.jpg" />
  
  <!-- Favicon List for Different Devices 
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="57x57" href="../../assets/images/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../../assets/images/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../../assets/images/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/images/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../../assets/images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../../assets/images/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../../assets/images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../../assets/images/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/images/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../../assets/images/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../../assets/images/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  -->
  
  <link rel="apple-touch-icon" sizes="180x180" href="/../../assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/../../assets/images/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/../../assets/images/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/../../assets/images/manifest.json">
  <link rel="mask-icon" href="/../../assets/images/safari-pinned-tab.svg" color="#1166bb">
  <link rel="shortcut icon" href="/../../assets/images/favicon.ico">
  <meta name="msapplication-config" content="/../../assets/images/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <script src="../../assets/js/jquery-3.1.1.min.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv/html5shiv.min.js"></script>
    <script src="../../assets/js/respond/respond.min.js"></script>
  <![endif]-->
</head>
<?php include_once('./include/header.php'); ?>

<!-- Home Row Strats Here -->
    <div class="row first-row">
      <div class="col-xs-12">
        <div class="container">
          <div class="row">
            <div class="director">
              <div class="col-sm-3">
              	<marquee direction="up" scrollamount="2" height="300">
                    <ul>
                        <li>First News</li>
                        <li>Second News</li>
                        <li>Third News</li>
                    </ul>
                </marquee>
              </div>
              <div class="col-sm-6">
                <h3 style="margin-top:0;padding-top:0;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Director&apos;s Message</h3>
                <p class="text-justify">I feel an immense pleasure in welcoming the students on behalf of all the members of RVS Institute, Delhi to the prominent Institution. The institute has a standing of over 8 years, 6 years as Institute of Adroit Students and 2 years as RVS Institute. The institute was set up in 2009 as Institute of Adroit Students and renamed as RVS Institute in 2015.</p>
                <p class="text-justify">In few past years, education system has evolved to provide education using modern tools and new technology system for rapid evolution of thinking and understanding ability of the students.</p>
                <p class="text-justify">This system is known for providing quality training and coaching in the area of academic education and information technology. It provides the best study environment conducive to creative and innovative thinking of the students. The institute has well qualified faculties who believe in continuous development and enhancement of teaching qualities and hence they spend hours to develop new and creative method of teaching. The Research and development in the area of teaching helps us maintain our unique and reputed position in the field of academic and professional training and coaching.</p>
                <div class="btn btn-sm btn-default pull-right">Read More</div>
              </div>
              <div class="col-sm-3">
                  <img class="img-responsive" src="../../assets/images/rvsir.png" alt="UPSC English" />
                  <h4>Mr. Ranvijay Pal</h4>
                  <footer>The Director<br /><?php echo CompanyName.'&comma; '.StateName; ?></footer>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="space-row2">
      </div>
    </div>
<!-- Home Row Ends Here -->
<!-- First Row Strats Here -->
    <div class="row first-row">
      <div class="col-xs-12">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2>Courses Available at Our Institute</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <img class="icon" src="../../assets/images/academic.png" alt="Academic Courses" />
              <h3>Academic Course</h3>
              <p>We run specialised academic batches for C.B.S.E. Examinations. Our batches are fully devoted and concentrated to the students of C.B.S.E Examination. However, we cover every single concept covered under C.B.S.E and ISCE/ISC Board. Under our Academic Course we offer two courses i.e. Secondary and Senior Secondary. Under Secondary ...</p><p><a href="courses.php?academic">Read More</a></p>
            </div>
            <div class="col-sm-4" style="border-left:2px #888 solid;border-right:2px #888 solid;">
              <img class="icon" src="../../assets/images/computer.png" alt="Computer Courses" />
              <h3>Computer Courses</h3>
              <p>We also offer to our students very important courses under our computer courses. Having special technical and professional teachers for computer courses, we have been able to conduct batches for computer classes for most important courses which were in highly demand from the students. With new year 2017, we have added in our course ...</p><p><a href="courses.php?computer">Read More</a></p>
            </div>
            <div class="col-sm-4">
              <img class="icon" src="../../assets/images/brain.png" alt="Competitive Courses" />
              <h3>Competitive Courses</h3>
              <p>In competitive courses, we have three categories. Under first category, we are offering special batches for Mathematics Fundamentals and Advance Mathematics. This course is very important for the students preparing fo competitive exams such as S.S.C, Banks, Railway, and many more. Under Second category, this institute provides English ...</p><p><a href="courses.php?competitive">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="space-row2">
      </div>
    </div>
<!-- First Row Ends Here -->
<!-- Second Row Strats Here -->
    <div class="row first-row">
      <div class="col-xs-12">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2>The Great Features of the Institute</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <img class="icon" src="../../assets/images/teacher.png" alt="Specialised Teacher" />
              <h3>Specialised Subject Teachers</h3>
              <p>The teachers of the institute are well qualified and specialised in their subject of teaching. Having years of experience and expertised knowledge&#44; they apply their unique techniques to make the study a very interesting thing for you.</p>
            </div>
            <div class="col-sm-4" style="border-left:2px #888 solid;border-right:2px #888 solid;">
              <img class="icon" src="../../assets/images/material.png" alt="SSC Mathematics" />
              <h3>Important Study Material</h3>
              <p>We provide our students the important study material. The study material includes study notes, assignments, test papers, previous year question paper etc. which are very useful for students. Our study material covers all kinds of conceptual and expected questions.</p>
            </div>
            <div class="col-sm-4">
              <img class="icon" src="../../assets/images/multimedia.png" alt="Academic" />
              <h3>Multimedia Projection</h3>
              <p>We are equipped with latest technological tools of education. One of them is our multimedia projection class. We use emultimedia projection to simplify many conceptual studies and save the precious time of the students from wasting aimlessly.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="space-row3">
      </div>
    </div>
    <!-- Social Media Row Strats Here -->
    <div class="row fifth-row">
      <div class="col-xs-12">
        <div class="container">
          <div class="row">
            <h2>Let&apos;s be social&#33;</h2>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <a href="<?php echo FacebookLink; ?>" title="Facebook - <?php echo CompanyName; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="<?php echo TwitterLink; ?>" title="Twitter - <?php echo CompanyName; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="<?php echo GoogleLink; ?>" title="Google Plus - <?php echo CompanyName; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
              <a href="<?php echo YoutubeLink; ?>" title="Youtube - <?php echo CompanyName; ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Social Media Row Ends Here -->
<!-- Fourth Row Strats Here -->
<!-- Fourth Row Ends Here -->    
<?php include_once('./include/footer.php'); ?>