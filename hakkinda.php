<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype php>

<?php
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
						<li><a class="nav-link" href="magaza.php">Mağaza</a></li>
						<li class="active"><a class="nav-link" href="hakkinda.php">Hakkımızda</a></li>
						<li><a class="nav-link" href="blog.php">Blog</a></li>
						<li><a class="nav-link" href="iletisim.php">Bize Ulaşın</a></li>
					</ul>

					<!-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>
					</ul> -->
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
								<h1><?php echo $hakkinda['baslik'];?></h1> <br>  <br> <br> <br> <br>
								<p class="mb-4"><?php echo $hakkinda['aciklama'];?></p>
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

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h2 class="section-title"><?php echo $hakkinda['abaslik'];?></h2>
						<p><?php echo $hakkinda['aaciklama'];?></p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3><?php echo $hakkinda['bbaslik'];?></h3>
									<p><?php echo $hakkinda['baciklama'];?></p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3><?php echo $hakkinda['cbaslik'];?></h3>
									<p><?php echo $hakkinda['caciklama'];?></p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3><?php echo $hakkinda['dbaslik'];?></h3>
									<p><?php echo $hakkinda['daciklama'];?></p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3><?php echo $hakkinda['ebaslik'];?></h3>
									<p><?php echo $hakkinda['eaciklama'];?></p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->
				<!-- Start Footer Section -->
				<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="images/sofa.png" alt="Image" class="img-fluid">
				</div>

				<br> <br>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
					<br><br><br>
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo"><?php echo $genel_bilgiler['site_adi'];?><span>.</span></a></div>
						<p class="mb-4"><?php echo $genel_bilgiler['hakkinda'];?></p>

						<!-- <ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul> -->
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="hakkinda.php">Hakkımızda</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="iletisim.php">Bize Ulaşın</a></li>
								</ul>
							</div>

							
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. &mdash; <a ></a> 
            </p>
						</div>



					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</php>