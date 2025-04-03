<?= $this->extend('layouts/app.php')?>
<?= $this->section('content')?>

 <!-- ================> Page Header section start here <================== -->
 <div class="pageheader bg_img" style="background-image: url(<?= base_url('public/assets/images/bg-img/pageheader.jpg');?>);">
        <div class="container">
            <div class="pageheader__content text-center">
                <h2>Despre Sinsation</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Pagina</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Despre</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->

 <!-- ================> About section start here <================== -->
 <div class="about about--style5 padding-top padding-bottom">
		<div class="container">
			<div class="row justify-content-center g-4 align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about__thumb">
                        <img src="<?= base_url('public/assets/images/about/01.png');?>" alt="dating thumb">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about__content">
                        <h2>Bun venit pe Sinsation</h2>
                        <h5>Suntem aici pentru a conecta oamenii și a crea povești fericite.</h5>
                        <p>Sinsation este solutia de care aveti nevoie daca sunteti oameni singuri si doriti un partener pentru intraga viata.</p>
                        <a href="membership.html" class="default-btn reverse"><span>Devino membru</span></a>
                    </div>
                </div>
            </div>
		</div>
	</div>

	<!-- ================> About section start here <================== -->
    <div class="about padding-top padding-bottom bg_img" style="background-image: url(<?= base_url('public/assets/images/bg-img/02.jpg')?>">
		<div class="container">
			<div class="section__header style-2 text-center wow fadeInUp" data-wow-duration="1.5s">
				<h2>De ce sa alegi Sinsation</h2>
				<p>Platforma noastră de întâlniri este moderna. Design curat, cu funcții gata de utilizare, suntem siguri că o să vă placă.</p>
			</div>
			<div class="section__wrapper">
				<div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
					<div class="col wow fadeInUp" data-wow-duration="1.5s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="<?= base_url('public/assets/images/about/01.jpg');?>" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Simple To Use</h4>
									<p>Simple steps to follow to have a matching connection.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col wow fadeInUp" data-wow-duration="1.6s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="<?= base_url('public/assets/images/about/02.jpg');?>" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Smart Matching</h4>
									<p>Create connections with users that are like you.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col wow fadeInUp" data-wow-duration="1.7s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="<?= base_url('public/assets/images/about/03.jpg');?>" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Filter Very Fast</h4>
									<p>Don’t waste your time! Find only what you are interested</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col wow fadeInUp" data-wow-duration="1.8s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="<?= base_url('public/assets/images/about/04.jpg');?>" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Cool Community</h4>
									<p>BuddyPress network is full of cool members.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> About section end here <================== -->


	<!-- ================> Story section start here <================== -->
	<div class="story padding-top padding-bottom">
		<div class="container">
			<div class="section__header style-2 text-center">
				<h2>Povesti de succes pe Sinsation</h2>
				<p>Ascultă și învață de la membrii comunității noastre și află sfaturi și trucuri pentru a-ți întâlni dragostea. Alăturați-vă nouă și fiți parte dintr-o familie mai mare.</p>
			</div>
			<div class="section__wrapper">
				<div class="row g-4 justify-content-center row-cols-lg-3 row-cols-sm-2 row-cols-1">
					<div class="col">
						<div class="story__item">
							<div class="story__inner">
								<div class="story__thumb">
									<a href="blog-single.html"><img src="<?= base_url('public/assets/images/story/01.jpg')?>" alt="dating thumb"></a>
									<span class="member__activity member__activity--ofline">Entertainment</span>
								</div>
								<div class="story__content">
									<a href="blog-single.html"><h4>Dream places and locations to visit in 2022</h4></a>
									<div class="story__content--author">
										<div class="story__content--thumb">
											<img src="<?= base_url('public/assets/images/story/author/01.jpg')?>" alt="dating thumb">
										</div>
										<div class="story__content--content">
											<h6>Hester Reeves</h6>
											<p>April 16, 2022</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="story__item">
							<div class="story__inner">
								<div class="story__thumb">
									<a href="blog-single.html"><img src="<?= base_url('public/assets/images/story/02.jpg')?>" alt="dating thumb"></a>
									<span class="member__activity member__activity--ofline">Love Stories</span>
								</div>
								<div class="story__content">
									<a href="blog-single.html"><h4>Make your dreams come true and monetise quickly</h4></a>
									<div class="story__content--author">
										<div class="story__content--thumb">
											<img src="<?= base_url('public/assets/images/story/author/02.jpg')?>" alt="dating thumb">
										</div>
										<div class="story__content--content">
											<h6>Arika Q Smith</h6>
											<p>March 14, 2022</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="story__item">
							<div class="story__inner">
								<div class="story__thumb">
									<a href="blog-single.html"><img src="<?= base_url('public/assets/images/story/03.jpg')?>" alt="dating thumb"></a>
									<span class="member__activity member__activity--ofline">Attraction</span>
								</div>
								<div class="story__content">
									<a href="blog-single.html"><h4>Love looks not with the eyes, but with the mind.</h4></a>
									<div class="story__content--author">
										<div class="story__content--thumb">
											<img src="<?= base_url('public/assets/images/story/author/03.jpg')?>" alt="dating thumb">
										</div>
										<div class="story__content--content">
											<h6>William Show</h6>
											<p>June 18, 2022</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> Story section end here <================== -->


	<!-- ================> Work section start here <================== -->
	<!-- <div class="work work--style2 padding-top padding-bottom bg_img" style="background-image: url(assets/images/bg-img/01.jpg);">
		<div class="container">
			<div class="section__wrapper">
				<div class="row g-4 justify-content-center">
					<div class="col-xl-6 col-lg-8 col-12">
						<div class="work__item">
							<div class="work__inner">
								<div class="work__thumb">
									<img src="assets/images/work/09.png" alt="dating thumb">
								</div>
								<div class="work__content">
									<h3>Trust And Safety</h3>
									<p>Choose from one of our membership levels and unlock features you need. </p>
									<a href="policy.html" class="default-btn"><span>See More Details</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-8 col-12">
						<div class="work__item">
							<div class="work__inner">
								<div class="work__thumb">
									<img src="assets/images/work/10.png" alt="dating thumb">
								</div>
								<div class="work__content">
									<h3>Simple Membership</h3>
									<p>Choose from one of our membership levels and unlock features you need. </p>
									<a href="membership.html" class="default-btn reverse"><span>Membership Details</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
    <!-- ================> Work section end here <================== -->


    <!-- ================> App section start here <================== -->
	<div class="app app--style2 padding-top padding-bottom">
		<div class="container">
			<div class="row g-4 justify-content-center">
				<div class="col-xxl-6 col-12">
					<div class="app__item wow fadeInUp" data-wow-duration="1.5s">
						<div class="app__inner">
							<div class="app__content text-center">
								<h4>Descarca aplicatia Sinsation</h4>
								<h2>Conecteaza-te usor cu toti membri</h2>
								<p>Ne găsești, în sfârșit și ești deja îndrăgostit. Peste 5.000.000 de persoane din întreaga lume au împărtășit deja aceeași experiență și ng ares folosește sistemul nostru Să ne alăturezi astăzi a devenit mai ușor!</p>
								<ul class="justify-content-center">
									<li><a href="#"><img src="<?= base_url('public/assets/images/app/01.jpg');?>" alt="dating thumb"></a></li>
									<li><a href="#"><img src="<?= base_url('public/assets/images/app/02.jpg');?>" alt="dating thumb"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> App section end here <================== -->



<?= $this->endsection();?>