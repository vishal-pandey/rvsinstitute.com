<div class="main">
    <?php include "../../admincontent/menu.php"; ?>
    <?php
      $link = $_GET['link'];
      if ($link == "") {
        include "../../admincontent/default.php";
      }else{
        include "../../admincontent/".$link.".php";
      }
     ?>

</div>