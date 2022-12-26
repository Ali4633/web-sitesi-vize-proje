<?php

$sunucu_adi = "localhost";
$kullanici_adi = "root";
$sifre = "";
$veri_tabani = "magaza";

$baglanti = new mysqli($sunucu_adi, $kullanici_adi, $sifre,$veri_tabani,3306);

if ($baglanti->connect_error)
{
    die("Bağlantı sağlanamadı : ".$baglanti->connect_error);
}
		    
if(isset($_POST["name"]))
{
    $sorgu =  "INSERT INTO nft_magaaza(`nft_id`, `nft_ismi`, `nft_fiyat`, `nft_rare`,`nft_url`) VALUES ('','".$_POST["n1"]."','".$_POST["f1"]."','".$_POST["r1"]."','nft_resim')";
    

        if($baglanti ->query($sorgu) === TRUE){
           
                
        }
        else{
        echo "kayıt yapılırken hata alındı";
        }                  
}
if(isset($_POST["name2"]))
{
    $sorgu =  "INSERT INTO nft_magaaza(`nft_id`, `nft_ismi`, `nft_fiyat`, `nft_rare`,`nft_url`) VALUES ('','".$_POST["n2"]."','".$_POST["f2"]."','".$_POST["r2"]."','nft_resim')";

        if($baglanti ->query($sorgu) === TRUE){
           
                
        }
        else{
        echo "kayıt yapılırken hata alındı";
        }                  
}
if(isset($_POST["name3"]))
{
    $sorgu =  "INSERT INTO `nft_magaaza`(`nft_id`, `nft_ismi`, `nft_fiyat`, `nft_rare`,`nft_url`) VALUES ('','".$_POST["n3"]."','".$_POST["f3"]."','".$_POST["r3"]."','nft_resim')";

        if($baglanti ->query($sorgu) === TRUE){
           
                
        }
        else{
        echo "kayıt yapılırken hata alındı";
        }                  
}
if(isset($_POST["name4"]))
{
    $sorgu =  "INSERT INTO `nft_magaaza`(`nft_id`, `nft_ismi`, `nft_fiyat`, `nft_rare`,`nft_url`) VALUES ('','".$_POST["n4"]."','".$_POST["f4"]."','".$_POST["r4"]."','nft_resim')";

        if($baglanti ->query($sorgu) === TRUE){
           
                
        }
        else{
        echo "kayıt yapılırken hata alındı";
        }                  
}
if(isset($_POST["name5"]))
{
    $sorgu =  "INSERT INTO `nft_magaaza`(`nft_id`, `nft_ismi`, `nft_fiyat`, `nft_rare`,`nft_url`) VALUES ('','".$_POST["n5"]."','".$_POST["f5"]."','".$_POST["r5"]."','nft_resim')";

        if($baglanti ->query($sorgu) === TRUE){
           
                
        }
        else{
        echo "kayıt yapılırken hata alındı";
        }                  
}
if(isset($_POST["name6"]))
{
    $sorgu =  "INSERT INTO `nft_magaaza`(`nft_id`, `nft_ismi`, `nft_fiyat`, `nft_rare`,`nft_url`) VALUES ('','".$_POST["n6"]."','".$_POST["f6"]."','".$_POST["r6"]."','nft_resim')";

        if($baglanti ->query($sorgu) === TRUE){
           
                
        }
        else{
        echo "kayıt yapılırken hata alındı";
        }                  
}
if(isset($_POST["name7"]))
{
    $sorgu =  "INSERT INTO `nft_magaaza`(`nft_id`, `nft_ismi`, `nft_fiyat`, `nft_rare`,`nft_url`) VALUES ('','".$_POST["n7"]."','".$_POST["f7"]."','".$_POST["r7"]."','nft_resim')";

        if($baglanti ->query($sorgu) === TRUE){
           
                
        }
        else{
        echo "kayıt yapılırken hata alındı";
        }                  
}
if(isset($_POST["name8"]))
{
    $sorgu =  "INSERT INTO `nft_magaaza`(`nft_id`, `nft_ismi`, `nft_fiyat`, `nft_rare`,`nft_url`) VALUES ('','".$_POST["n8"]."','".$_POST["f8"]."','".$_POST["r8"]."','nft_resim')";

        if($baglanti ->query($sorgu) === TRUE){
           
                
        }
        else{
        echo "kayıt yapılırken hata alındı";
        }                  
}
?>