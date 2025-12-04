<?php
$host="localhost";
$user="root";
$pass="";
$db="";
$conn=new mysqli($host,$user,$pass,$db);
// وقتی یک متغیر یک شیء است، با -> می‌ری داخلش و عضوهایش را صدا می‌زنی.
if($conn->connect_error){
    echo"failed to connect DB".$conn->connect_error;
}



?>