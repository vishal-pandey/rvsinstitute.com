<?php 
    $page = $_GET['content'];
    include "../adminlibrary/phplib.php";
    $sql = "SELECT * FROM pages where pid = '{$page}'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
    <div class="about well row first-row">
        <h2 align="center"><?php echo $row['title'] ?></h2>
        <div class="col-sm-8 about-content">
        <hr id="hr">
            <p><?php echo $row['content']; ?></p>
        </div>
    </div>
<div class="container-fluid">
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
</div>
<style type="text/css">
    div.about{
        border-radius: 0;
        margin: 0;
        background: #e8e6e6;
    }
    div.about h2{
        margin-top: 0;
    }
    div.about-content{
        float: initial;
        margin-left: auto;
        margin-right: auto;
    }
    div.about-content p{
        text-align: justify;
    }
    @media(max-width:768px){
        div.about-content{
            width: initial;
            float: left;
        }
    }
    #hr{
        border-top: 2px solid black;
        background-color: red;
    }
</style>