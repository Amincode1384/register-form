<?php
session_start();
include("connect.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="home.css">
</head>
<body style="  background-color: #c9d6ff;
    background: linear-gradient(to right,#e2e2e2,#c9d6ff);">
    <div class="div1">
        <p class="p1">
          
      this email already exist :)
        </p>
        <a href="logout.php">logout</a>
    </div>
</body>
</html>