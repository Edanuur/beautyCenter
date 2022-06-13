<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GİRİŞ YAP</title>
    <link rel="stylesheet" href="style.css">
    <style>
      body {
    background-color: rgb(170, 136, 170);;
    margin: 0px auto 25px;
    font-size: 23px;
    font-weight: 300;
    text-align: center;
    margin-top: 150px;
}
      </style>
  </head>
  <body>
  
    <h2>GİRİŞ YAP</h2> </br>
    <form class="" action="" method="post" autocomplete="off">
      <label for="usernameemail">KULLANICI ADI YA DA EMAİL : </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      <label for="password">ŞİFRE : </label>
      <input type="text" name="password" id = "password" required value=""> <br></br></br></br>
      <button type="submit" name="submit" class="btns">GİRİŞ YAP</button> </br>
     </form>
    <br>
    <a href="registration.php">KAYIT OL!</a>
  </body>
</html>
