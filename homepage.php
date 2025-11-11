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
<body>
    <div class="div1">
        <p class="p1">
            Hello:<?php
          if(isset($_SESSION['email']))  {
            $email=$_SESSION['email'];
            $query=mysqli_query($conn,"SELECT users. * FROM users WHERE users.email='$email'"); 
             while($row=mysqli_fetch_array($query)){

                echo $row['firstname'].''.$row['lastname'];
             }         }
            ?>
       :)
        </p>
        <a href="logout.php">logout</a>
    </div>
</body>
</html>