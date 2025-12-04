<?php
  session_start();
include 'connect.php';

// registerform
// enter the information
if(isset($_POST['نام تگ '])){
    $(نام جدول دیتابیس)=$_POST['نام تگ '];
    $(نام جدول دیتابیس)=$_POST['نام تگ '];
    $(نام جدول دیتابیس)=$_POST['نام تگ '];
    $(نام جدول دیتابیس)=$_POST['نام تگ '];
    $password=md5($password);
// check about the email address 
    $checkEmail="SELECT * From users where email='$email'";

    // `.query()` yek method az sheye **mysqli** ast ke yek dastoor **SQL** ra ejra mikonad.

    $result=$conn->query($checkEmail);
    بررسی وجودیت ایمیل وجود داشته شده 
    if($result->num_rows>0){
  header("location:email.php");

    }
else{
    $insertQuery="INSERT INTO users (firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')";
    if ($conn->query($insertQuery)==TRUE){
        header("location:index.php");
        // با دستور پایین ما از اجرای ادامه دستور باز میداریم در صورت درست بودن 
        exit();
     
    }
    else{
        echo "ERROR:".$conn->error;
    }
}
}
// sign in 
if(isset($_POST['نام تگ '])){
      $(نام جدول دیتابیس)=$_POST['نام تگ '];
    $(نام جدول دیتابیس)=$_POST['نام تگ '];
  $(نام جدول دیتابیس)=md5($password); 
    $sql="SELECT * FROM users WHERE email='$email'and password='$password'";
    $result = $conn->query($sql);
 
    // ChatGPT said:

// $result->num_rows > 0 yani "aya natije ye query khali nist?"

   if($result->num_rows>0){

//     Vaghti dar ebtedaye file PHP minevisi:

// `session_start();`

// PHP karhaye zir ra anjam mide:

// 1. barresi mikonad aya karbar az ghabl yek **session** darad ya na.
// 2. agar darad → haman ra edame mide.
// 3. agar nadarad → yeki jadid misazad va yek **ID** makhsoos be karbar midahad.


  
//     Dar PHP, alamat -> yani dastresi be ozv-haye yek object (Object Access Operator).

// Vaghti ke tu PHP ba object kar mikoni, baraye dastresi be variable-ha (Property) ya function-ha (Method) dakhel on object, az -> estefade mishe.
    $row=$result->fetch_assoc();
    $_SESSION['email']= $row['email'];
    header("location:homepage.php");
    exit();

   } 
   else{
 header("location:error.php");
   }
}


?>