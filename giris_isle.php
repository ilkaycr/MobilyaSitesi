<?php
sleep(1);
session_start();

include('baglan.php');


$kullanici = $_REQUEST['kullanici'];
$sifre = $_REQUEST['sifre'];

$sorgu = mysqli_query($conn,"Select * from musteriler where e_mail='$kullanici'");
$say_uye = mysqli_num_rows($sorgu);

if (  $say_uye > 0  ) {
    $satir = mysqli_fetch_array($sorgu);
    $d_sifre = $satir['sifre'];
    echo  "asdasd"//$d_sifre;
}
 
elseif (  $say_uye == 0 ) {
    echo "<img src='images/hata.svg' width='48' height='48'><br>";
    echo "Giriş yetkiniz yoktur.";
} 
elseif (  md5(sha1(md5($sifre))) != $d_sifre  ) {
    echo "<img src='images/hata.svg' width='48' height='48'><br>";
    echo "Kullanıcı adı veya şifre yanlış <br> Giriş yetkiniz yoktur.";
}
else {
     echo "tamam";

    $yetki = $satir['uyelik_turu'];

    if ( $yetki == 2 ) {
        $_SESSION["giris_yapan_yonetici"] = $satir['id'];
        echo $d_sifre;
    }


    $_SESSION["giris_yapan"] = $satir['id'];
    //echo $_SESSION["giris_yapan"];
    ?>

    <script language="javascript">window.location="anasayfa.php?sayfa=profil";
     </script>

    <?php

}
?>