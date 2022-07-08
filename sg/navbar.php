<nav id="navtop" class="navbar navbar-light px-0 py-lg-5">
	<div class="container">
		<a href="<?php echo $supressoSG ?>" class="navbar-brand p-lg-0">
			<img src="<?php echo $supresso ?>assets/img/navbar/logo.png" width="40" height="auto" class="d-lg-none" alt="">
			<img src="<?php echo $supresso ?>assets/img/navbar/logo.png" width="80" height="auto" class="d-none d-lg-block" alt="">
		</a>

		<ul class="navbar-nav d-none d-lg-flex flex-row ml-lg-auto">
			<li class="nav-item"><a data-toggle="collapse" href="#navcol1" class="nav-link"><span>COFFEE</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link"><span>MACHINES</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link"><span>EXPLORE</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link"><span>PARTNERSHIPS</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link"><span>CAFE</span></a></li>
		</ul>

		<ul class="navbar-nav navbar-corner flex-row ml-auto ml-lg-4">
			<li class="nav-item d-none d-lg-block"><a href="#" class="nav-link"><span>SEARCH</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link"><span>PROFILE</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link"><span>CART [8]</span></a></li>
		</ul>

		<button class="navbar-toggler d-lg-none border-0 ml-2 collapsed" data-toggle="collapse" data-target="#navcol1">
			<span class="navbar-toggler-icon"></span><i class="bi bi-x-lg"></i>
		</button>
	</div>
</nav>

<div class="collapse" id="navcol1">
	<nav class="navbar navbar-light p-0 border-top position-relative">
		<div class="container d-block py-lg-5">
			<div class="row align-items-lg-end">
				<div class="col-12 col-lg-auto menu d-lg-none">
					<form class="d-flex border-bottom border-secondary align-items-center">
						<button class="btn"><i class="bi bi-search"></i></button>
						<input type="search" name="" placeholder="Search" class="form-control border-0 px-0">
					</form>
					<ul class="navbar-nav py-3">
						<li class="nav-item"><a href="#" class="nav-link" id="nav-coffee-mobile"><span>COFFEE</span></a></li>
						<li class="nav-item"><a href="#" class="nav-link"><span>MACHINES</span></a></li>
						<li class="nav-item"><a href="#" class="nav-link"><span>EXPLORE</span></a></li>
						<li class="nav-item"><a href="#" class="nav-link"><span>PARTNERSHIPS</span></a></li>
						<li class="nav-item"><a href="#" class="nav-link"><span>CAFE</span></a></li>
					</ul>
				</div>

				<div class="col-lg-auto submenu d-lg-none" id="submenu-coffee">
					<header class="border-bottom border-lg-0 mb-lg-4">
						<div class="container container-lg-fluid px-lg-0">
							<div class="d-flex align-items-center">
								<button class="btn border-right d-lg-none"><i class="bi bi-chevron-left"></i></button>
								<strong class="px-3 px-lg-0">COFFEE</strong>
							</div>
						</div>
					</header>
					<div class="container container-lg-fluid px-lg-0">
						<ul class="navbar-nav py-3 py-lg-0 w-100">
							<li class="nav-item"><a href="#" class="nav-link" id="nav-beans"><span>BEANS</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link" id="nav-ground"><span>GROUND</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link" id="nav-drip"><span>DRIP</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link" id="nav-capsules"><span>CAPSULES</span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-auto submenu" id="submenu-beans">
					<header class="border-bottom border-lg-0 mb-lg-4">
						<div class="container container-lg-fluid px-lg-0">
							<div class="d-flex align-items-center">
								<button class="btn border-right d-lg-none"><i class="bi bi-chevron-left"></i></button>
								<strong class="px-3 px-lg-0">BEANS</strong>
							</div>
						</div>
					</header>
					<div class="container container-lg-fluid px-lg-0">
						<ul class="navbar-nav py-3 py-lg-0 w-100">
							<li class="nav-item"><a href="#" class="nav-link"><span>Single Origin</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Luwak Prestige</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Organic</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Rainforest</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Gourmet</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>World Blend</span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-auto submenu" id="submenu-ground">
					<header class="border-bottom border-lg-0 mb-lg-4">
						<div class="container container-lg-fluid px-lg-0">
							<div class="d-flex align-items-center">
								<button class="btn border-right d-lg-none"><i class="bi bi-chevron-left"></i></button>
								<strong class="px-3 px-lg-0">GROUND</strong>
							</div>
						</div>
					</header>
					<div class="container container-lg-fluid px-lg-0">
						<ul class="navbar-nav py-3 py-lg-0 w-100">
							<li class="nav-item"><a href="#" class="nav-link"><span>Single Origin</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Luwak Prestige</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Organic</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Rainforest</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Gourmet</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>World Blend</span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-auto submenu" id="submenu-drip">
					<header class="border-bottom border-lg-0 mb-lg-4">
						<div class="container container-lg-fluid px-lg-0">
							<div class="d-flex align-items-center">
								<button class="btn border-right d-lg-none"><i class="bi bi-chevron-left"></i></button>
								<strong class="px-3 px-lg-0">DRIP</strong>
							</div>
						</div>
					</header>
					<div class="container container-lg-fluid px-lg-0">
						<ul class="navbar-nav py-3 py-lg-0 w-100">
							<li class="nav-item"><a href="#" class="nav-link"><span>Single Origin</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Luwak Prestige</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Organic</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Rainforest</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Gourmet</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>World Blend</span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-auto submenu" id="submenu-capsules">
					<header class="border-bottom border-lg-0 mb-lg-4">
						<div class="container container-lg-fluid px-lg-0">
							<div class="d-flex align-items-center">
								<button class="btn border-right d-lg-none"><i class="bi bi-chevron-left"></i></button>
								<strong class="px-3 px-lg-0">CAPSULES</strong>
							</div>
						</div>
					</header>
					<div class="container container-lg-fluid px-lg-0">
						<ul class="navbar-nav py-3 py-lg-0 w-100">
							<li class="nav-item"><a href="#" class="nav-link"><span>Single Origin</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Luwak Prestige</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Organic</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Rainforest</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>Gourmet</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><span>World Blend</span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-auto d-none d-lg-block ml-lg-auto">
					<div class="img-tumbnails">
						<img src="<?php echo $supresso ?>assets/img/navbar/box.jpg" class="img-fluid w-100">
					</div>
				</div>
			</div>
		</div>
	</nav>
</div>