<?php
include("/xampp/htdocs/alii.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SATIN AL</title>
    <link rel="icon" type="image/x-icon" href="/web.sitesi/resim/Renkli_LOGO.png">

    <link rel="stylesheet" href="/web.sitesi/ana.css">
    <link rel="stylesheet" href="sat.css">
    <link rel="stylesheet" href="/web.sitesi/nft.css">
    <link rel="stylesheet" href="/web.sitesi/responsive.css">
    <link rel="stylesheet" href="/web.sitesi/footer.css">

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
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">



</head>
<body>
    <nav class="menu_bar">
        <div class="bar">
        <a href="/web.sitesi/index.html">Ana Sayfa</a>
        <a href="/web.sitesi/satın2_al.html">Satın Al</a>
        <a href="/web.sitesi/iletişim&takım.html">Takım & İletişim</a>
        </div>

        
        
        <div class="sosyal_medya">
            <a href="/listele.php"><i class="fa-solid fa-cart-shopping"></i></a>
            
        </div>
        <div  class="menu_icon">
            <div id="bar"><i class="fa-solid fa-bars"></i></div>      
        </div>
    </nav>
    <div class="logo">
        <a href="/web.sitesi/index.html"><img src="/web.sitesi/resim/Renksiz_L.png"></a>
    </div>
    <div class="alt">
        <ul>
            <li><a href="/web.sitesi/index.html">Ana Sayfa</a></li>
            <li><a href="/web.sitesi/satın2_al.html">Satın Al</a></li>
            <li><a href="/web.sitesi/iletişim&takım.html">Takım / İletişim</a></li>
        </ul>
        <script> 
            $(document).ready(function(){
              $("#bar").click(function(){
                $(".alt").slideToggle("slow");
              });
            });
            </script>   
    </div>

    <div class="sat">
        <div class="sat_yazı">
            <h1> SATIN AL</h1>
        </div>
        <div class="sat_pre">
            <pre>
                TİKİ TAKA NFT'leri şu anda Opensea de satışta.
            </pre>
        </div>
    </div>

    <form action="alii.php" method="POST">
<div class="urunler">
        <div class="urun">
            <div class="urun_s">
                <img src="/htmlDesleri/web.sitesi/resim/6.png">
                <input type="text" value="TİKİ TAKA #1" name="n1" style="display: none;"><h1>TİKİ TAKA #1</h1>
                <input type="text" value="MYTHICAL %0.01" name="r1" style="display: none;"><h2> MYTHICAL %0.01 </h2>
                <input type="text" value="20.8" name="f1" style="display: none;"><i class="fa-brands fa-ethereum"></i><h3>20.8</h3><h4>($35793,60)</h4>
                <button id="foot" name="name" class="btn"><h1 style="color:antiquewhite">SATIN AL</h1></button>
                
            </div>
        </div>
        <div class="urun">
            <div class="urun_s">
                <img src="/htmlDesleri/web.sitesi/resim/5.png">
                <input type="text" value="TİKİ TAKA #2" name="n2" style="display: none;"><h1> TİKİ TAKA #2</h1>
                <input type="text" value="LEGENDARY %1" name="r2" style="display: none;"><h2> LEGENDARY %1 </h2>
                <input type="text" value="15" name="f2" style="display: none;"><i class="fa-brands fa-ethereum"></i><h3>15</h3><h4>($26845,20)</h4>
                <button id="foot" name="name2" class="btn"><h1 style="color:antiquewhite">SATIN AL</h1></button>      
            </div>
        </div>
        <div class="urun">
            <div class="urun_s">
                <img src="/htmlDesleri/web.sitesi/resim/4.png">
                <input type="text" value="TİKİ TAKA #3" name="n3" style="display: none;"><h1> TİKİ TAKA #3</h1>
                <input type="text" value="EPIC %5 " name="r3" style="display: none;"><h2> EPIC %5 </h2>
                <input type="text" value="10" name="f3" style="display: none;"><i class="fa-brands fa-ethereum"></i><h3>10</h3><h4>($17896,80)</h4>
                <button id="foot" name="name3" class="btn"><h1 style="color:antiquewhite">SATIN AL</h1></button>       
            </div>
        </div>
        <div class="urun">
            <div class="urun_s">
                <img src="/htmlDesleri/web.sitesi/resim/3.png">
                <input type="text" value="TİKİ TAKA #4" name="n4" style="display: none;"><h1> TİKİ TAKA #4</h1>
                <input type="text" value="EPIC %5 " name="r4" style="display: none;"><h2> EPIC %5 </h2>
                <input type="text" value="10" name="f4" style="display: none;"><i class="fa-brands fa-ethereum"></i><h3>10</h3><h4>($17896,80)</h4>
                <button id="foot" name="name4" class="btn"><h1 style="color:antiquewhite">SATIN AL</h1></button>      
            </div>
        </div>
    </div>


    <div class="urunler">
        <div class="urun">
            <div class="urun_s">
                <img src="/htmlDesleri/web.sitesi/resim/2.png">
                <input type="text" value="TİKİ TAKA #5" name="n5" style="display: none;"><h1> TİKİ TAKA #5</h1>
                <input type="text" value="COMMON %50 " name="r5" style="display: none;"><h2> COMMON %50 </h2>
                <input type="text" value="1" name="f5" style="display: none;"><i class="fa-brands fa-ethereum"></i><h3>1</h3><h4>($1789,68)</h4>
                <button id="foot" name="name5" class="btn"><h1 style="color:antiquewhite">SATIN AL</h1></button>
            </div>
        </div>
        <div class="urun">
            <div class="urun_s">
                <img src="/htmlDesleri/web.sitesi/resim/1.png">
                <input type="text" value="TİKİ TAKA #6" name="n6" style="display: none;"><h1> TİKİ TAKA #6</h1>
                <input type="text" value="COMMON %50 " name="r6" style="display: none;"><h2> COMMON %50 </h2>
                <input type="text" value="1" name="f6" style="display: none;"><i class="fa-brands fa-ethereum"></i><h3>1</h3><h4>($1789,68)</h4>
                <button id="foot" name="name6" class="btn"><h1 style="color:antiquewhite">SATIN AL</h1></button>
            </div>
        </div>
        <div class="urun">
            <div class="urun_s">
                <img src="/htmlDesleri/web.sitesi/resim/ferhat_1.png">
                <input type="text" value="TİKİ TAKA #7" name="n7" style="display: none;"><h1> TİKİ TAKA #7</h1>
                <input type="text" value="SPECİAL %10 " name="r7" style="display: none;"><h2> SPECİAL %10 </h2>
                <input type="text" value="8" name="f7" style="display: none;"><i class="fa-brands fa-ethereum"></i><h3>8</h3><h4>($14317,44)</h4>
                <button id="foot" name="name7" class="btn"><h1 style="color:antiquewhite">SATIN AL</h1></button>
            </div>
        </div>
        <div class="urun">
            <div class="urun_s">
                <img src="/htmlDesleri/web.sitesi/resim/lbj2.png">
                <input type="text" value="TİKİ TAKA #8" name="n8" style="display: none;"><h1> TİKİ TAKA #8</h1>
                <input type="text" value="SPECİAL %10 " name="r8" style="display: none;"><h2> SPECİAL %10 </h2>
                <input type="text" value="8" name="f8" style="display: none;"><i class="fa-brands fa-ethereum"></i><h3>8</h3><h4>($14317,44)</h4>
                <button id="foot" name="name8" class="btn"><h1 style="color:antiquewhite">SATIN AL</h1></button>
            </div>
        </div>
    </div>
</form>

    <footer class="footer-distributed">

        <div class="footer-left">
  
          <h3>TİKİ<span>taka</span></h3>
  
          <p class="footer-links">
            <a href="#" class="link-1">Home</a>
                           
            <a href="/web.sitesi/satın2_al.html">Satın al</a>
            
            <a href="/web.sitesi/iletişim&takım.html">Contact</a>
          </p>
  
          <p class="footer-company-name">TELİF HAKLARI SAKLIDIR. © 2022 </p>
        </div>
  
        <div class="footer-center">
  
          <div>
            <i class="fa fa-map-marker"></i>
            <p><span>TOROS ÜNİVERSİTESİ</span>Mezitli Kampüsü</p>
          </div>
  
          <div>
            <i class="fa fa-phone"></i>
            <p>+90 554 190 28 33</p>
          </div>
  
          <div>
            <i class="fa fa-envelope"></i>
            <p>akgulali46333@gmail.com</p>
          </div>
  
        </div>
  
        <div class="footer-right">
  
          <p class="footer-company-about">
            <span>Detaylı Bilgi</span>
            Bize detaylı bilgi ve şikayetleriniz için alttaki sosyal medya hesaplarımızdan ulaşabilir siniz?
          </p>
  
          <div class="footer-icons">
  
            <a href=><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com/egiddo" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://discord.gg/MBAuJQ85" target="_blank"><i class="fa-brands fa-discord"></i></a>      
          </div>
          
        </div>
  
      </footer>
    

    

    
</body>
</html>