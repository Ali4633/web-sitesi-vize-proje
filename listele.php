<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/bitnami2.css"/>
    
    <link rel="stylesheet" href="/web.sitesi/ana.css">
    <link rel="stylesheet" href="/web.sitesi/tiki_taka.css">
    <link rel="stylesheet" href="/web.sitesi/hakkında2.css">
    <link rel="stylesheet" href="takım2.css">
    <link rel="stylesheet" href="/web.sitesi/FAQ.css">
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

    <title>Document</title>
</head>
<body>
<nav class="menu_bar">
        <div class="bar">
        <a href="/web.sitesi/index.html">Ana Sayfa</a>
        <a href="/satınn.php">Satın Al</a>
        <a href="/iletisim.php">Takım & İletişim</a>
        </div>

        
        
        <div class="sosyal_medya">
            <a href="/listele.php"><i class="fa-solid fa-cart-shopping"></i></a>
            
        </div>
        <div  class="menu_icon">
            <div id="bar"><i class="fa-solid fa-bars"></i></div>      
        </div>
    </nav>
    <div class="logo">
        <a href="/web.sitesi/index.html"><img src="/htmlDesleri/web.sitesi/resim/Renksiz_L.png"></a>
    </div>
    <?php
    include("alii.php");
    
    $sec="select * from nft_magaaza";
    $sonuc=$baglanti->query($sec);
    echo "<h1><span class='blue'>&lt;</span><span class='blue'>&gt;</span> <span class='yellow'><strong style='color: red;'>ÜRÜNLERİNİZ</strong></pan></h1>
    <table class='container'>
	<thead>
		<tr>
        
        <th><h1>İSMİ</h1></th>
        <th><h1>FİYAT</h1></th>
        <th><h1>RARE</h1></th>
  <th><h1>DELETE</h1></th>
		</tr>
	</thead>";
    if($sonuc->num_rows>0)
{
    while($cek=$sonuc->fetch_assoc())
    {
    $id=$cek["nft_id"];
    $adi=$cek["nft_ismi"];
    $fiyat=$cek["nft_fiyat"];
    $rare=$cek["nft_rare"];
    
    @$toplam += $fiyat;
    echo "<table = class='container'>
	<tbody>
		<tr>
			
			<td>$adi</td>
			<td>$fiyat</td>
			<td>$rare</td>
            <td><a href='sil.php?nft_id=$id'>Delete</a></td>
            
            
		</tr>"
        ;
        
    }
}
echo "<table>
<thead>
    <tr>
    <th><h1>URUN TOPLAM FİYAT : $toplam etherum <button class='buttonn'>Siparis Ver</button> </h1></th>   
    </tr>
</thead>";
    ?>
    
    


</body>
</html>