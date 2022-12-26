<?php


if(isset($_POST["gonder"]))
{
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $email=$_POST["email"];
    $phone=$_POST["telefon"];
    $soruntipi=$_POST["sorun"];
    $cevap=$_POST["cevap"];
    $mesaj=$_POST["mesaj"];

    $ekle="insert into bilgiler (name,surname,email,phone,soruntipi,cevap,mesaj) VALUES ('$name','$surname','$email','$phone','$soruntipi','$cevap','$mesaj')";
    $kayitEkle = mysqli_query($con,$ekle);

    if($kayitEkle){
        echo 'Kayıt Başarılı bir şekilde eklendi.';
    }
    else{
        echo ' Kayıt eklenirken bir problem oluştu.';
    mysqli_close($con);
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="/ilet.css">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/web.sitesi/ana.css">
    <link rel="stylesheet" href="/web.sitesi/tiki_taka.css">
    <link rel="stylesheet" href="/web.sitesi/hakkında2.css">
    <link rel="stylesheet" href="takım2.css">
    <link rel="stylesheet" href="/web.sitesi/FAQ.css">
    <link rel="stylesheet" href="/web.sitesi/footer.css">
    <link rel="stylesheet" href="/btn.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">   
</head>

<body>
<nav class="menu_bar">
        <div class="bar">
            <a href="/web.sitesi/index.html">Ana Sayfa</a>
            <a href="/satınn.php">Satın Al</a>
            <a href="/iletisim.php">Takım & İletişim</a>
        </div>
        
        <div class="sosyal_medya">
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com/egiddo" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://discord.gg/MBAuJQ85" target="_blank"><i class="fa-brands fa-discord"></i></a>
        </div>
        <div  class="menu_icon">
            <div id="bar"><i class="fa-solid fa-bars"></i></div>      
        </div>  
    </nav>
    <div class="logo">
        <a href="/web.sitesi/index.html"><img src="/web.sitesi/resim/Renksiz_L.png"></a>
    </div>

    <div class="anacerceve">
     
        <div class="anacerceve_ust">  
        <p id="BizeUlasin">BİZE ULAŞIN</p>
        </div>

        <form class="form" action="" method="POST">
           Adınız     <hr class="hr_ad">  <input class="IletisimInput" name="name" type="text" required ><br><br>
            Soyadınız  <hr class="hr_soyad">  <input class="IletisimInput_Soyad" name="surname" type="text" required ><br><br>
            E-Postanız <hr class="hr_mail">  <input class="IletisimInput_Mail" name="email" type="email" required > <br><br>
            
            
            
            Sorunun Türü nedir? 
            <hr id="hr_sorun_turu">
            <select class="select_option"  name="sorun"  >
                <option value="seciniz"          class="optionlar" selected>Seçiniz</option>
                <option value="mali_islem"       class="optionlar">Mali İşlemler</option>
                <option value="site_hakkinda"    class="optionlar">Site Hakkında</option>
                <option value="urunler_hakkinda"  class="optionlar">Ürünler Hakkında</option>
                <option value="fiyatlandirma"    class="optionlar">Fiyatlandırma</option>
            </select>

            <br><br>

           
           
           Sitemizden daha önce <br> satın alım yaptınız mı?<hr class="hr_radiobutton">
            
            <input type="radio" name="cevap" value="evet" class="radiobutonlar"required>
            <label>Evet</label><br>

            <input type="radio" name="cevap" value="hayir" class="radiobutonlar"required>
            <label>Hayır</label><br><br>

            Telefon Numaranız<hr class="hr_tel">
            <input type="tel" class="numara" name="telefon" required>
            <br><br>

            Eklemek İstediğiniz Dosya<br>(Opsionel)<hr class="hr_dosya">
            <input type="file" style="color:transparent;" name="dosya" class="dosya" onchange="this.style.color = 'black';"/>
            <br>

            İletmek İstediğiniz Mesaj
            <hr class="hr_textarea">
            <br>

        
            <textarea id="mesajAlanıId" class="mesajAlanıClass" name="mesaj" placeholder="Mesajınızı Buraya Yazınız..."></textarea>
       
        

<input type="submit" name=" gonder"> </input>
        </form>

</body>
</html>