<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title>Ollya</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- site favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/animate.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/all.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/swiper.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/lightcase.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/style.css'); ?>">

</head>

<body>
	<!-- preloader start here -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
	<!-- preloader ending here -->


	<!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- ================> header section start here <================== -->
    <header class="header" id="navbar">
        <div class="header__top d-none d-lg-block">
			<div class="container">
				<div class="header__top--area">
					<div class="header__top--left">
						<ul>
                            <li>
                                <i class="fa-solid fa-phone"></i> <span>+800-123-4567 6587</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot"></i> Beverley, New York 224 USA
                            </li>
                        </ul>
					</div>
					<div class="header__top--right">
						<ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i> Youtube</a></li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header__bottom">
			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="<?= base_url();?>"><img src="<?= base_url('public/assets/images/logo/logo.png')?>" width="150" alt="logo"></a>
					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler--icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
						<div class="navbar-nav mainmenu">
							<ul>
								<li class="active"><a href="<?= base_url();?>">Acasa</a></li>
                                <li><a href="<?= url_to('despre')?>">Despre noi</a></li>
                                <li><a href="<?= url_to('tarife')?>">Tarife</a></li>
                                <li><a href="<?= url_to('blog')?>">Blog</a></li>								
								<li><a href="<?= url_to('contact')?>">contact</a></li>
							</ul>
						</div>
						<div class="header__more">
                            <button class="default-btn dropdown-toggle" type="button" id="moreoption" data-bs-toggle="dropdown" aria-expanded="false">Contul meu</button>
														
							<ul class="dropdown-menu" aria-labelledby="moreoption">
							<?php if(!isset(auth()->user()->username)) : ?>
                                <li><a class="dropdown-item" href="<?= base_url('login')?>">Autentificare</a></li>

                                <li><a class="dropdown-item" href="<?= base_url('register')?>">Inregistrare</a></li>

								<?php else : ?>
									<li><a class="dropdown-item" href="<?= base_url('profile')?>">Profil <?php echo auth()->user()->username; ?></a></li>
									<li><a class="dropdown-item" href="<?= base_url('logout')?>">Dezautentificare</a></li>

                            </ul>
							


							<?php endif; ?>
						</div>
					</div>
				</nav>
			</div>
		</div>
    </header>
    <!-- ================> header section end here <================== -->




    <div class="app">
            <?= $this->renderSection('content'); ?>
        </div>



     <!-- ================> Footer section start here <================== -->
	<footer class="footer footer--style2">
		<div class="footer__top bg_img" style="background-image: url(<?= base_url('public/assets/images/footer/bg.jpg');?>)">
			<div class="footer__newsletter wow fadeInUp" data-wow-duration="1.5s">
				<div class="container">
					<div class="row g-4 justify-content-center">
						<div class="col-lg-6 col-12">
							<div class="footer__newsletter--area">
								<div class="footer__newsletter--title">
									<h4>Abonare Newsletter</h4>
								</div>
								<div class="footer__newsletter--form">
									<form action="#">
										<input type="email" placeholder="Your email address">
										<button type="submit" class="default-btn"><span>Subscribe</span></button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="footer__newsletter--area justify-content-xxl-end">
								<div class="footer__newsletter--title me-xl-4">
									<h4>Ne gasesti si pe:</h4>
								</div>
								<div class="footer__newsletter--social">
									<ul>
										<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
										<!-- <li><a href="#"><i class="fa-brands fa-twitch"></i></a></li> -->
										<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
										<!-- <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li> -->
										<li><a href="#"><i class="fa-brands fa-facebook-messenger"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__toparea padding-top padding-bottom wow fadeInUp" data-wow-duration="1.5s">
				<div class="container">
					<div class="row g-4">
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item footer--about">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>Sinsation</h4>
										</div>
										<div class="footer__content--desc">
											<p>Sinsation este un site serios de dating pentru femei si barbati din Romania care cauta intalniri si relatii de lunga durata.</p>
										</div>
										<div class="footer__content--info">
											<p><b>Adresa :</b> Bucuresti, Romania</p>
											<p><b>Contact :</b> 0753118927</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item footer--feature">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>Membri inscrisi</h4>
										</div>
										<div class="footer__content--desc">
											<ul>
												<li>
													<div class="thumb position-relative">
														<img src="<?= base_url('public/assets/images/footer/feature/01.jpg')?>" alt="member-img">
														<span class="feature__activity"></span>
													</div>
													<div class="content">
														<a href="member-single.html"><h6>Samantha Lee</h6></a>
														<p>Active</p>
													</div>
												</li>
												<li>
													<div class="thumb position-relative">
														<img src="<?= base_url('public/assets/images/footer/feature/02.jpg')?>" alt="member-img">
														<span class="feature__activity feature__activity--ofline"></span>
													</div>
													<div class="content">
														<a href="member-single.html"><h6>Peter McMillan</h6></a>
														<p>2 Hours Ago</p>
													</div>
												</li>
												<li>
													<div class="thumb position-relative">
														<img src="<?= base_url('public/assets/images/footer/feature/03.jpg')?>" alt="member-img">
														<span class="feature__activity"></span>
													</div>
													<div class="content">
														<a href="member-single.html"><h6>Tluagtea Tualzik</h6></a>
														<p>Active</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item footer--support">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>Contact</h4>
										</div>
										<div class="footer__content--desc">
											<ul>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Despre noi</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Politica de confidentialitate</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Termeni si conditii</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Politica de cookies</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Contact</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item footer--activity">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>Articole blog</h4>
										</div>
										<div class="footer__content--desc">
											<ul>
												<li>
													<div class="thumb">
														<a href="group-single.html"><img src="<?= base_url('public/assets/images/footer/activity/01.jpg')?>" alt="dating thumb"></a>
													</div>
													<div class="content">
														<a href="group-single.html"><h6>Where to find a good...</h6></a>
														<p>August 13, 2022</p>
													</div>
												</li>
												<li>
													<div class="thumb">
														<a href="group-single.html"><img src="<?= base_url('public/assets/images/footer/activity/02.jpg')?>" alt="dating thumb"></a>
													</div>
													<div class="content">
														<a href="group-single.html"><h6>Where to find a good...</h6></a>
														<p>August 13, 2022</p>
													</div>
												</li>
												<li>
													<div class="thumb">
														<a href="group-single.html"><img src="<?= base_url('public/assets/images/footer/activity/03.jpg')?>" alt="dating thumb"></a>
													</div>
													<div class="content">
														<a href="group-single.html"><h6>Where to find a good...</h6></a>
														<p>August 13, 2022</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer__bottom wow fadeInUp" data-wow-duration="1.5s">
			<div class="container">
				<div class="footer__content text-center">
					<p class="mb-0"> &copy; <a href="<?= base_url();?>">Sinsation</a> || Programare: Concept Web Design</p>
				</div>
			</div>
		</div>
	</footer>
    <!-- ================> Footer section end here <================== -->

	
	<!-- All Needed JS -->
	<script src="<?= base_url('public/assets/js/vendor/jquery-3.6.0.min.js')?>"></script>
	<script src="<?= base_url('public/assets/js/vendor/modernizr-3.11.2.min.js')?>"></script>
	<script src="<?= base_url('public/assets/js/isotope.pkgd.min.js')?>"></script>
	<script src="<?= base_url('public/assets/js/swiper.min.js')?>"></script>
	<!-- <script src="<?= base_url('public/assets/js/all.min.js')?>"></script> -->
	<script src="<?= base_url('public/assets/js/wow.js')?>"></script>
	<script src="<?= base_url('public/assets/js/counterup.js')?>"></script>
	<script src="<?= base_url('public/assets/js/jquery.countdown.min.js')?>"></script>
	<script src="<?= base_url('public/assets/js/lightcase.js')?>"></script>
	<script src="<?= base_url('public/assets/js/waypoints.min.js')?>"></script>
	<script src="<?= base_url('public/assets/js/vendor/bootstrap.bundle.min.js')?>"></script>
	<script src="<?= base_url('public/assets/js/plugins.js')?>"></script>
	<script src="<?= base_url('public/assets/js/main.js')?>"></script>


	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga = function () {
			ga.q.push(arguments)
		};
		ga.q = [];
		ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('set', 'anonymizeIp', true);
		ga('set', 'transport', 'beacon');
		ga('send', 'pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>
</html>