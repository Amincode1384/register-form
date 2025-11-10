<?php
$host="localhost";
$user="root";
$pass="";
$db="login_form";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo"failed to connect DB".$conn->connect_error;
}
else{
    echo"succeeded to connect DB";
}


?>