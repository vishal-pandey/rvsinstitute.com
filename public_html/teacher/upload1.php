<?php
	$t_uid = $_POST['t_uid'];
    $target_dir = "../tpic/";
    // $target_file = $target_dir . basename($_FILES["t_pic"]["name"]);
    $target_file = $target_dir . $t_uid.".jpg";
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["t_pic"]["tmp_name"], $target_file);
    echo "success";
?>
<?php
// $target_dir = "../tpic/";
// $target_file = $target_dir . $_POST['t_pic'] . ".jpg";

// move_uploaded_file($_FILES["tpic"]["tmp_name"], $target_file)
// echo "success";
?>