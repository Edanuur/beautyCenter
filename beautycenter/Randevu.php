<?php

$firstname=$_POST['firstname'];
$id=$_POST['id'];
$surname=$_POST['surname'];
$sehir=$_POST['sehir'];
$dateofbirth=$_POST['dateofbirth'];
$ilce=$_POST['ilce'];
$tarih=$_POST['tarih'];
$phonenumber=$_POST['phonenumber'];
$hekim=$_POST['hekim'];
$email=$_POST['email'];
$seans=$_POST['seans'];
$adres=$_POST['adres'];
$note=$_POST['note'];

if(!empty($firstname) || !empty($id) || !empty($surname) || !empty($sehir)
 || !empty($dateofbirth) ||!empty($ilce) || !empty($tarih) ||
 !empty($phonenumber) || !empty($hekim) || !empty($email) || !empty($seans) ||
 !empty($adres) || !empty($note) )
 {
     $host ="localhost";
     $dbUsername ="root";
     $dbPassword ="";
     $dbname = "randevu";

     $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
      if(mysqli_connect_error()){
          die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
      }else{
          $SELECT = "SELECT email FROM randevu WHERE email = ? Limit 1";
          $INSERT = "INSERT Into randevu (firstname,id,surname,sehir,dateofbirth,ilce,
          tarih,phonenumber,hekim,email,seans,adres,note) 
          values (?,?,?,?,?,?,?,?,?,?,?,?,?)";

          $pst = $conn->prepare($SELECT);
          $pst->bind_param("s", $email);
          $pst->execute();
          $pst->bind_result($email);
          $pst->store_result();
          $rnum = $pst->num_rows;

          if($rnum ==0){
              $pst->close();
            $pst = $conn->prepare($INSERT);
            $pst->bind_param("sssssssssssss",$firstname,$id,$surname,$sehir,
          $dateofbirth,$ilce,$tarih,$phonenumber,$hekim,$email,$seans,$adres,$note);
          $pst-> execute();

          echo "Yeni Randevu Eklendi.";
       }
       else{
           echo "Email adresi mevcut.";
       }
       $pst->close();
       $conn->close();
      }
   }else{
       echo "Boşukları doldurmak zorunludur.";
 
       die();
   }


?>