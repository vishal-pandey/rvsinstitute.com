<?php
$UserName = 'root';
$PassWord = '12345';
$dsn ='mysql:host=localhost;dbname=rvsinstitute_data';
try {
    $conn = new PDO($dsn, $UserName, $PassWord);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Unknown Error!";
    }
?>