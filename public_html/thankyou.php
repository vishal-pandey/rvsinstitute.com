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

<section class="well col-sm-12 thankyou">
  <div class="col-sm-12">Thank You For Approaching You Would Be Contacted Soon</div>
  <div class="col-sm-12"><a href="./"><button class="btn btn-success">Home</button></a></div>
</section>



<!-- <div class="container-fluid"> -->
    <div class="row">
      <div class="space-row3">
      </div>
    </div>
    <div class="">
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
    </div>
<!-- </div> -->

<?php include_once('./content/footer.php'); ?>
</body>

</html>