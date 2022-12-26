<?php

$sunucu_adi = "localhost";
$kullanici_adi = "root";
$sifre = "";
$veri_tabani = "form_bilgiler";

$baglanti = new mysqli($sunucu_adi, $kullanici_adi, $sifre,$veri_tabani,3306);

if ($baglanti->connect_error)
		die("Bağlantı sağlanamadı : ".$baglanti->connect_error);

   else
   echo   "Veri tabanına bağlanıldı";
   
   
			if(isset($_POST["gonder"]))
            {
                $sorgu =  "INSERT INTO `bilgiler`(`Adi`, `SoyAdi`, `e-mail`) VALUES ('name', 'surname', 'mail')";

                if($baglanti ->query($sorgu)=== TRUE){
                    echo "KAYIT BASARILI";
                }
                else{
                    echo "kayıt yapılırken hata alındı";
                }
                echo "adi = " .$_POST["name"];




            }




?>