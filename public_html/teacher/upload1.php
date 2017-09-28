<?php
    $target_dir = "../tpic/";
    $target_file = $target_dir . basename($_FILES["t_pic"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["t_pic"]["tmp_name"], $target_file);
    // echo "success";
?>
