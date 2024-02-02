<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>

<?php

include('baglan.php');

$sorgu = mysqli_query($conn,"select * from genel_bilgiler");
$genel_bilgiler = mysqli_fetch_array($sorgu);

$sorgu = mysqli_query($conn,"select * from anasayfa");
$anasayfa = mysqli_fetch_array($sorgu);

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
		<title> <?php echo $genel_bilgiler['site_adi'];  ?></title>
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
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Ana Sayfa</a>
						</li>
						<li><a class="nav-link" href="magaza.php">Mağaza</a></li>
						<li><a class="nav-link" href="hakkinda.php">Hakkımızda</a></li>
						<li><a class="nav-link" href="blog.php">Blog</a></li>
						<li><a class="nav-link" href="iletisim.php">Bize Ulaşın</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="giris.php"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->

			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1> Mobilyanın Başkenti <span clsas="d-block">İnegöl'den</span></h1><br> <br> 
								<p class="mb-4"><?php echo $genel_bilgiler['hakkinda'];  ?></p>
								<p><a href="" ></a><a href="#" ></a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/couch.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title"><?php echo $anasayfa['baslik'];  ?></h2>
						<p class="mb-4"><?php echo $anasayfa['acıklama'];  ?> </p>
						<p><a href="magaza.php" class="btn">Keşfet</a></p>
					</div> 
					<!-- End Column 1 -->
					<?php

					$sorgu = mysqli_query($conn,"select * from urunler order by rand() LIMIT 3");
					

					while ($satir = mysqli_fetch_array($sorgu)) {
						?>
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							<a class="product-item" href="magaza.php">
								<img src="images/<?php echo "$satir[2]"; ?>" class="img-fluid product-thumbnail">
								<h3 class="product-title"></h3>
								<strong class="product-price"><?php echo "$satir[1]"; ?></strong>

								<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
								</span>
							</a>
						</div> 
						<?php
					}
					
					?>
				</div>
			</div>
		</div>
		<section >
    <p>
       <a href="rapor.docx" target="blank">Proje Raporu </a> - 
	   <a href="sablonlar" target="blank">Şablon Orjinal Versiyonu</a>
    </p>
  </section>
		<!-- End Product Section -->
        <script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>



