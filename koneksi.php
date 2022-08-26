<?php
$host = "159.203.186.186";
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