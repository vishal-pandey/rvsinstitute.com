<div class="student well col-sm-12">
  <h2 align="Center">!!! Welcome Student Panel !!!</h2>
  <div class="student-menu-toggle btn btn-primary">Menu</div>
  <div class="student-menu col-sm-2">
      <br>
      <a href="./student.php?link=profile"><span class="btn btn-info">Profile</span></a>
      <a href="./student.php?link=study-material"><span class="btn btn-info">Study Material</span></a>
      <a href="./student.php?link=result"><span class="btn btn-info">Result</span></a>
      <a href="./student.php?link=test-paper"><span class="btn btn-info">Test Papers</span></a>
      <a href="./student.php?link=fee"><span class="btn btn-info">Fee Details</span></a>
      <a href="./student.php?link=video"><span class="btn btn-info">Videos</span></a>
      <a href="./student.php?link=home-work"><span class="btn btn-info">Home Work</span></a>
      <?php 
          date_default_timezone_set("Asia/Kolkata"); 
          if(strtotime(date('Y-m-d'))-strtotime($profile['s_date'])){
            $cc = "btn btn-success";
          }else{
            $cc = "btn btn-danger";
          }
      ?>
      <a href="./student.php?link=pay-fee"><span class="<?php echo $cc; ?>">Pay Fee Online</span></a>
  </div>
  
  <div class="student-content well col-sm-8 ">
     <?php
      $link = $_GET['link'];
      if ($link == "") {
        include "./student/profile.php";
      }else{
        include "./student/".$link.".php";
      }
     ?>
  </div>
  

  <div class="student-profile well col-sm-2">
    <div class="student-pic"><img src="./profile/<?php echo $profile['s_mobile'].'.jpg?'.time(); ?>" class="img-rounded"></div>
    <br>
    <div class="col-sm-12 student-detail well">
      <span class="s-name"><?php echo $profile['s_name'] ?></span>
      <span class="s-mobile"><?php echo "+91 ".$profile['s_mobile'] ?></span>
      <span class="s-email" style="overflow-x: auto;"><?php echo $profile['s_email']; ?></span>
    </div>
  </div>
</div>