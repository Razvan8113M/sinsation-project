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
	<link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/animate.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/all.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/swiper.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/lightcase.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/assets/css/style.css')?>">

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
    <section class="log-reg forezero">
        <div class="container">
            <div class="row justify-content-end">
                <div class="image image-404"></div>
                <div class="col-lg-7 ">
                    <div class="log-reg-inner">
                        <div class="main-thumb mb-5">
                            <img src="<?= base_url('public/assets/images/404.png')?>" alt="datting thumb">
                        </div>
                        <div class="main-content inloginp">
                            <div class="text-content text-center">
                                <h2>Ops! Aceasta nu este pagina pe care o cauti</h2>
                                <p>Ne pare rau dar pagina pe care o cauti lipseste :( </p>
                                <a href="<?= base_url();?>" class="default-btn reverse"><span>Acasa</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================> login section end here <================== -->

	
	<!-- All Needed JS -->
	<script src="<?= base_url('public/assets/js/vendor/jquery-3.6.0.min.js')?>"></script>
	<script src="<?= base_url('public/assets/js/vendor/modernizr-3.11.2.min.js')?>"></script>
	<script src="<?= base_url('public/assets/js/isotope.pkgd.min.js')?>"></script>
	<script src="<?= base_url('public/assets/js/swiper.min.js')?>"></script>
	<!-- <script src="assets/js/all.min.js"></script> -->
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