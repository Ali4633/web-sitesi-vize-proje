<?php
  include("deneme.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web.sitesi/dene.css">
    <title>Document</title>
</head>
<body>
<div class="anacerceve">
     
     <div class="anacerceve_ust">
     <p id="BizeUlasin">BİZE ULAŞIN</p>
     </div>

     <form class="form" action="deneme.php" method="post">
         Adınız     <hr class="hr_ad">  <input class="IletisimInput" name="name" type="text" ><br><br>
         Soyadınız  <hr class="hr_soyad">  <input class="IletisimInput_Soyad" name="surname" type="text" ><br><br>
         E-Postanız <hr class="hr_mail">  <input class="IletisimInput_Mail" name="mail" type="email"> <br><br>
         
         
         
         Sorunun Türü nedir? 
         <hr id="hr_sorun_turu">
         <select class="select_option">
             <option value="seciniz"          class="optionlar" selected>Seçiniz</option>
             <option value="mali_islem"   name="mali"    class="optionlar">Mali İşlemler</option>
             <option value="site_hakkinda" name="hakkinda"   class="optionlar">Site Hakkında</option>
             <option value="urunler_hakkinda" name="urun" class="optionlar">Ürünler Hakkında</option>
             <option value="fiyatlandirma"   name="fiyat" class="optionlar">Fiyatlandırma</option>
         </select>

         <br><br>

        
        
         Sitemizden daha önce <br> satın alım yaptınız mı?<hr class="hr_radiobutton">
         
         <input type="radio" name="radiobutton" value="evet" class="radiobutonlar">
         <label>Evet</label><br>

         <input type="radio" name="radiobutton" value="hayir" class="radiobutonlar">
         <label>Hayır</label><br><br>

         Telefon Numaranız<hr class="hr_tel">
         <input type="tel" class="numara" name="telefon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
         <br><br>

         Eklemek İstediğiniz Dosya<br>(Opsionel)<hr class="hr_dosya">
         <input type="file" style="color:transparent;" class="dosya" onchange="this.style.color = 'black';"/>
         <br>

         İletmek İstediğiniz Mesaj
         <hr class="hr_textarea">
         <br>

     
         <textarea id="mesajAlanıId" class="mesajAlanıClass" placeholder="Mesajınızı Buraya Yazınız..."></textarea>
    
    
     </form>

     
 
     <button id="buton" name="gonder" >Gönder</button>

    
</body>
</html>