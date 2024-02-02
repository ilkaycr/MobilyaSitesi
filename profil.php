<?php
@session_start();
include('ses_kontrol.php');
?>
  <!-- profil section -->
  <section class="about_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        <?php echo $genel_bilgiler['site_adi'];  ?> Üye Profil Sayfası 
      </h2>
      <p class="text-justify">
        <?php 
        $sorgu = mysqli_query($conn,"Select * from uyeler where id='$oturum_sahibi'");
        $satir = mysqli_fetch_array($sorgu);

        echo "<p align='center'>".$satir['adi']." ".$satir['soyadi']."</p>";
        echo "<p align='center'><a href='cikis.php'>Çıkış Yap</a></p>";
        ?>
      </p>      
    </div>
  </section>