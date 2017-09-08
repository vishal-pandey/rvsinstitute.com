<div class="main">
    <?php include "../../teachercontent/menu.php"; ?>
    <?php
      $link = $_GET['link'];
      if ($link == "") {
        include "../../teachercontent/default.php";
      }else{
        include "../../teachercontent/".$link.".php";
      }
     ?>

</div>