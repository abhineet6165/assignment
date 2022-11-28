<?php
$servername = "172.31.22.43";
$username = "Abhineet200510638";
$password = "vdZZknkc-9";
$dbname = "Abhineet200510638";

 $con = mysqli_connect($servername,$username ,$password,$dbname);

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>