<!DOCTYPE html>
<html>
    <head>
        <title> Randevu</title>
        <style type="text/css">

            body{
                background-color:  rgb(220, 209, 220);
            }

            .style1{
                border-width: 0;
                border: solid purple 10px;
                width: 73%;
                border-radius: 5px;
                margin: 5px auto;
                background: blue;
                color: #CC2255;
                text-align: center;
                font-size: 50px;
            }
            .style2{
                border-width: 0;
                border: solid gray 10px;
                width: 75%;
                border-radius: 5px;
                margin: 5px auto;
                background: rgb(148, 52, 148);
            }
            h1{
                color: black;
            }
            .btns{
    background-color: rgb(67, 10, 67);
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
            </style>
        
    </head>
    
    <b><h1>****RANDEVU AL!****</h1></b>
   
  <form action="Randevu.php" method ="post">

      <table class="style2" width ="550px">
        <tr>
            <td>İsim: </td>
            <td><input type="text" name="firstname" placeholder="İsim" required> </td>
            <td>ID: </td>
            <td><input type="text" name="id" placeholder="id" required> </td>
        </tr>    
        <tr>
            <td>Soyisim: </td>
            <td><input type="text" name="surname" placeholder="Soyisim" required> </td>
            <td>Şehir: </td>
            <td><input type="text" name="sehir" placeholder="Sehir" required> </td>
        </tr> 
        <tr>
            <td>Doğum Tarihi: </td>
            <td><input type="date" name="dateofbirth" placeholder="Dogum Tarihi" required> </td>
            <td>İlçe: </td>
            <td><input type="text" name="ilce" placeholder="İlçe" required> </td>
        </tr>   
        <tr>
            <td>Cinsiyet:</td>
            <td><input type="radio" name="cinsiyet" value="m" required>Kadın
            <input type="radio" name="cinsiyet" value="f" required>Erkek
        </td>
            <td>Randevu Almak İstediginiz Tarih: </td>
            <td><input type="date" name="tarih"  required> </td>
        <tr>
            <td>Telefon: </td>
            <td><input type="text" name="phonenumber" placeholder="Telefon" required> </td>
            <td>Randevu Almak İstediginiz Hekim: </td>
            <td><input type="text" name="hekim" placeholder="Hekim" required> </td>
        </tr>   
        <tr>
            <td>Email: </td>
            <td><input type="text" name="email" placeholder="Email" required> </td>
            <td>Kaçıncı Seansınız: </td>
            <td><input type="text" name="seans" placeholder="Seans Sayısı" required> </td>
        </tr> 
        <tr>
            <td>Adres: </td>
            <td><input type="text" name="adres" placeholder="Adres" required> </td>
            <td>Eklemek İstediğiniz Not: </td>
            <td><input type="text" name="note" placeholder="Not" required> </td>
        </tr> 
        
        <tr>
            <td>&nbsp; </td>
            <td><input type="submit"  class="btns" value="Gönder" required> 
            <input type="reset"class="btns" value="Sıfırla" required> </td>
        </tr> 
        </table>
        </form>
   <hr size = 10 color=gray width=75%>
   <hr size = 10 color=purple width=75%>
    <body>
</body>
</html>