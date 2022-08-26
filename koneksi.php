<?php
$host = "128.199.164.23";
$user = "komatsu";
$pass = "komatsu123456789";
$db = "pltmh_kemuning";

$connect = mysqli_connect($host, $user, $pass, $db);
if($connect){
    echo "Connect";
}
else{
    echo "dasdasd";
}


?>
