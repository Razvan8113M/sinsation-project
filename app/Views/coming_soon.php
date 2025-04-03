<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title>Sinsation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- site favicon -->
	<link rel="icon" type="image/png" href="<?= base_url('public/assets/images/favicon.png');?>">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/animate.css');?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/all.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/swiper.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/lightcase.css');?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/style.css');?>">

</head>

<body>
	<!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
	<!-- preloader ending here -->

	<!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- ================> login section start here <================== -->
    <section class="log-reg comingsoon">
        <div class="top-menu-area">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-6">
                        <div class="logo">
                            <a href="<?= base_url();?>"><img src="<?= base_url('public/assets/images/logo/logo.png');?>" width="200" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <a href="<?= base_url();?>" class="backto-home"><i class="fas fa-chevron-left"></i> Inapoi acasa</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="image image-comingsoon"></div>
                <div class="col-lg-7 ">
                    <div class="log-reg-inner">
                        <div class="main-content inloginp">
                            <div class="text-content text-center">
                                <h2>Ne intoarcem curand!</h2>
                                <p>Depunem eforturi pentru a va oferi o experienta unica.</p>
                            </div>
                            <ul id="countdown" class="countdown">
                                <li class="clock-item">
                                    <div class="count-number days">216</div>
                                    <div class="days_text count-text">Zile</div>
                                </li>
                                <li class="clock-item">
                                    <div class="count-number hours">08</div>
                                    <div class="hours_text count-text">Ore</div>
                                </li>
                                <li class="clock-item">
                                    <div class="count-number minutes">06</div>
                                    <div class="minutes_text count-text">Minute</div>
                                </li>
                                <li class="clock-item">
                                    <div class="count-number seconds">17</div>
                                    <div class="seconds_text count-text">Secunde</div>
                                </li>
                            </ul>
                            <!-- <form action="#" class="mb-4">
                                <input type="text" placeholder="Adauga adresa de email">
                                <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                            </form> -->
                            <!-- <div class="footer__newsletter--social">
                                <ul class="justify-content-center">
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitch"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-messenger"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================> login section end here <================== -->

	
	

	<!-- All Needed JS -->
	<script src="<?= base_url('public/assets/js/vendor/jquery-3.6.0.min.js');?>"></script>
	<script src="<?= base_url('public/assets/js/vendor/modernizr-3.11.2.min.js');?>"></script>
	<script src="<?= base_url('public/assets/js/isotope.pkgd.min.js');?>"></script>
	<script src="<?= base_url('public/assets/js/swiper.min.js');?>"></script>
	<!-- <script src="assets/js/all.min.js"></script> -->
	<script src="<?= base_url('public/assets/js/wow.js');?>"></script>
	<script src="<?= base_url('public/assets/js/counterup.js');?>"></script>
	<script src="<?= base_url('public/assets/js/jquery.countdown.min.js');?>"></script>
	<script src="<?= base_url('public/assets/js/lightcase.js');?>"></script>
	<script src="<?= base_url('public/assets/js/waypoints.min.js');?>"></script>
	<script src="<?= base_url('public/assets/js/vendor/bootstrap.bundle.min.js');?>"></script>
	<script src="<?= base_url('public/assets/js/plugins.js');?>"></script>
	<script src="<?= base_url('public/assets/js/main.js');?>"></script>


    


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