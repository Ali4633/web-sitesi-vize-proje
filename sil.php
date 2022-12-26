<?php
include("deneme4.php");
$cekilen_id = $_GET["nft_id"];

$sil = "delete from nft_magaaza where nft_id=$cekilen_id";


if($con->query($sil)===true){
    header('Location:listele.php');
}
else{
    echo "silme islemi basarisiz";
}


?>