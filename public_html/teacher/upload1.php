<?php
	// $t_uid = $_POST['t_uid'];
 //    $target_dir = "../tpic/";
 //    $target_file = $target_dir . basename($_FILES["t_pic"]["name"]);
 //    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 //    move_uploaded_file($_FILES["t_pic"]["tmp_name"], $target_file);
    // echo "success";
?>
<?php
$target_dir = "../tpic/";
$target_file = $target_dir . $_POST['t_pic'] . ".jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["t_pic"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["t_pic"]["size"] > 5000000) {
    
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
// if everything is ok, try to upload file
} else {
    if(move_uploaded_file($_FILES["tpic"]["tmp_name"], $target_file)){
    	echo "success";
    }
}
?>