<?php include '../koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'meta.php' ?>
	<title>SUPRESSO · Home</title>
</head>

<body id="home">
	<header id="main-header" class="fixed-top">
		<?php include 'navbar.php' ?>
	</header>

	<main class="wrapper">
		<section>
			<div id="home-banner" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#home-banner" data-slide-to="0" class="active"></li>
					<li data-target="#home-banner" data-slide-to="1"></li>
					<li data-target="#home-banner" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="carousel-caption">
							<div class="container">
								<div class="row">
									<div class="col-lg-7">
										<h1 class="carousel-title display-4 gotham-medium">20% OFF</h1>
										<h3 class="carousel-subtitle gotham-thin">ASSORTED CAPSULES</h3>
										<p class="carousel-text">Single Origin Collection | Gourmet Collection</p>
										<a href="#" class="btn btn-orange px-4">SHOP NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-caption">
							<div class="container">
								<div class="row">
									<div class="col-lg-7">
										<h1 class="carousel-title display-4 gotham-medium">30% OFF</h1>
										<h3 class="carousel-subtitle gotham-thin">EXOTIC BAG 1KG</h3>
										<a href="#" class="btn btn-orange px-4">SHOP NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-caption">
							<div class="container">
								<div class="row">
									<div class="col-lg-7">
										<h1 class="carousel-title display-4 gotham-medium">20% OFF</h1>
										<h3 class="carousel-subtitle gotham-thin">ALL GROUND COFFEE</h3>
										<p class="carousel-text">Single Origin Collection</p>
										<a href="#" class="btn btn-orange px-4">SHOP NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="tiles">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<a href="#">
							<div class="card">
								<img src="<?php echo $supresso ?>assets/img/home/home_balicafe.jpg" class="card-img w-100" alt="">
							</div>
						</a>
					</div>

					<div class="col-md-6">
						<a href="#">
							<div class="card">
								<img src="<?php echo $supresso ?>assets/img/home/home_maps.jpg" class="card-img w-100" alt="">
								<div class="card-img-overlay">
									<h5 class="card-title"><small>OUR</small><br>Locations</h5>
								</div>
							</div>
						</a>
					</div>

					<div class="col-6 col-md-3">
						<a href="#">
							<div class="card">
								<img src="<?php echo $supresso ?>assets/img/home/home_beans.jpg" class="card-img w-100" alt="">
								<div class="card-img-overlay">
									<p class="card-text">Beans Collection</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-6 col-md-3">
						<a href="#">
							<div class="card">
								<img src="<?php echo $supresso ?>assets/img/home/home_ground.jpg" class="card-img w-100" alt="">
								<div class="card-img-overlay">
									<p class="card-text">Ground Collection</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-6 col-md-3">
						<a href="#">
							<div class="card">
								<img src="<?php echo $supresso ?>assets/img/home/home_drip.jpg" class="card-img w-100" alt="">
								<div class="card-img-overlay">
									<p class="card-text">Drip Collection</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-6 col-md-3">
						<a href="#">
							<div class="card">
								<img src="<?php echo $supresso ?>assets/img/home/home_capsules.jpg" class="card-img w-100" alt="">
								<div class="card-img-overlay">
									<p class="card-text">Capsules Collection</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-6">
						<div class="card">
							<img src="<?php echo $supresso ?>assets/img/home/home_fb.jpg" class="card-img w-100" alt="">
							<div class="card-img-overlay">
								<h5 class="card-title"><small>OUR</small><br>Instagram</h5>
								<a href="#" class="btn btn-sm btn-outline-light"><small>MORE INFO</small></a>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<img src="<?php echo $supresso ?>assets/img/home/home_gallery.jpg" class="card-img w-100" alt="">
							<div class="card-img-overlay">
								<h5 class="card-title"><small>Supresso</small><br>Gallery</h5>
								<a href="#" class="btn btn-sm btn-outline-light"><small>MORE INFO</small></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main> <!-- end wrapper -->

	<?php include 'footer.php' ?>
	<!-- <script type="text/javascript">[].forEach.call(document.querySelectorAll("*"), function(a){a.style.outline="1px solid green";});</script> -->
</body>

</html>