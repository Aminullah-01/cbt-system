<?php

$servername = "localhost";
$username = "aminullah";
$password = "aminullah123";
$dbname = "cbt";

try{
    $conn = new PDO("mysql:host=$servername;dbname=cbt", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection successfully";
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}



?>