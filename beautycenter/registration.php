<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Kayıt Başarılı!'); </script>";
    }
    else{
      echo
      "<script> alert('Şifre Eşleşmiyor.'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KAYIT OL</title>
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
    <h2>KAYIT OL!</h2></br>
    <form class="" action="" method="post" autocomplete="off">
      <label for="name">İSİM : </label>
      <input type="text" name="name" id = "name" required value="" > <br>
      <label for="username">KULLANICI ADI : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="password">ŞİFRE : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <label for="confirmpassword">TEKRAR ŞİFRE : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br></br></br>
      <button type="submit" name="submit" class="btns">KAYIT OL!</button>
    </form>
    <br>
    <a href="login.php">GİRİŞ YAP</a>
  </body>
</html>
