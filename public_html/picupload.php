<?php
$target_dir = "./profile/";
$target_file = $target_dir . $_POST['s_mobile'] . ".jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profilepic"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["profilepic"]["size"] > 5000000) {
    
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
    if (move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)) {
        echo '<script>window.location.href="./student.php?link=profilepic";</script>';
    } else {
        echo "not uploaded";
    }
}
?>