<?php
include 'connect.php';
// registerform
// enter the information
if(isset($_POST[signup])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
// check about the email address 
    $checkEmail="SELECT * From users where email='$email'";

    // `.query()` yek method az sheye **mysqli** ast ke yek dastoor **SQL** ra ejra mikonad.

    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Address Already Exists !";

    }
else{
    $insertQuery="INSERT INTO users (firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')"
    if ($conn->query($insertquery)==TRUE){
        header("location:index.php");
    }
    else{
        echo "ERROR:".$conn->error;
    }
}
// sign in 
if(isset($_POST['signin'])){
      $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password); 
    $sql="SELECT * FROM users WHERE email='$email'and password='$password'";
    ChatGPT said:

// $result->num_rows > 0 yani "aya natije ye query khali nist?"

   if($result->num_rows>0){

//     Vaghti dar ebtedaye file PHP minevisi:

// `session_start();`

// PHP karhaye zir ra anjam mide:

// 1. barresi mikonad aya karbar az ghabl yek **session** darad ya na.
// 2. agar darad → haman ra edame mide.
// 3. agar nadarad → yeki jadid misazad va yek **ID** makhsoos be karbar midahad.


    session_start

   } 
}
}

?>