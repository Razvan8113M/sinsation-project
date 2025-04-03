<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $this->renderSection('title') ?></title>
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

    <?= $this->renderSection('pageStyles') ?>

</head>

<body class="bg-light">

    <main role="main" class="log-reg">
        <?= $this->renderSection('main') ?>
    </main>

<?= $this->renderSection('pageScripts') ?>




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
