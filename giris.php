<?php

@session_start();

if ( isset($_SESSION["giris_yapan"]) ) {
    echo "<script language='javascript'>window.location='anasayfa.php?sayfa=profil'</script>";
} 

include('baglan.php');
$sorgu = mysqli_query($conn,"select * from genel_bilgiler");
$genel_bilgiler = mysqli_fetch_array($sorgu);
$sor = mysqli_query($conn,"select * from hakkinda");
$hakkinda = mysqli_fetch_array($sor);

?>



<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title> <?php echo $genel_bilgiler['site_adi'];?> </title>
</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php"><?php echo $genel_bilgiler['site_adi'];  ?><span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item ">
							<a class="nav-link" href="index.php">Ana Sayfa</a>
						</li>

					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
						<!-- <li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li> -->
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->



  <!-- about section -->
  <section class="about_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        <?php echo $genel_bilgiler['site_adi'];  ?> Üye Girişi
      </h2>
      <p class="text-justify">
        
        <form action='giris_isle.php' method='post' id='giris_form'>
        <table align='center'>
          <tr>
            <td><label for='kullanici'>E-posta : </label></td>
            <td><input type='email' name='kullanici' required></td>
          </tr>
          <tr>
            <td><label for='sifre'>Şifre : </label></td>
            <td><input type='password' name='sifre' required></td>
          </tr>


<tr>
  <td align='left'><input type="button" value="Kayıt Ol" onclick="window.location.href = 'kayit.php'"></td>
  <td align='right'><input type="button" value="Şifremi Unuttum" onclick="window.location.href = 'anasayfa.php?sayfa=sifre_hatirlatma'">
  <input type="submit" value="Giriş Yap"></td>
</tr>

    </table>

</form>
</p>
</div>
    <div align='center' id="giris_sonuc">
       <h5></h5>
    </div>
  </section>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script>
  // ajax    
  $('#giris_form').submit(function(event) {
    event.preventDefault(); 
		$('#giris_sonuc').html('<img src = "images/yukleniyor.svg" width="48" height="48" alt="Kayıt yapılıyor"/>');
    var form = $(this);
    $.ajax({
      type: form.attr('method'),
      url: form.attr('action'),
      data: form.serialize(),
	        success: function(response) {
                $('#giris_sonuc').html(response);
            }  
	  });
  });	 
</script>































<!-- $kullanici = $_REQUEST['kullanici'];
$sifre = $_REQUEST['sifre'];

$sorgu = mysqli_query($conn,"Select * from musteriler where e_mail='$kullanici'");
$say_uye = mysqli_num_rows($sorgu);

if (  $say_uye > 0  ) {
    $satir = mysqli_fetch_array($sorgu);
    $d_sifre = $satir['sifre'];
    echo $d_sifre;
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

     -->