<?php

$host="localhost";
$user="ian";
$pass="qweasdzxc";
$db="login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>