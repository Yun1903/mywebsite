<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre"";
$vt_adi"myveritabani";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, vt_adi);

if(!$baglan)
{
    die("Veritabani baglanti islemi basarisiz".mysqli_connect_error());
}
else{
    echo "Baglanti basarili";
}

?>