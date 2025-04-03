<?= $this->extend('layouts/app.php')?>
<?= $this->section('content')?>

<!-- ================> Page Header section start here <================== -->
<div class="pageheader bg_img" style="background-image: url(<?= base_url('public/assets/images/bg-img/pageheader.jpg')?>">
        <div class="container">
            <div class="pageheader__content text-center">
                <h2>Our Blog Post</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->

    <!-- ================> Blog section start here <================== -->
    <div class="blog blog--style2 padding-top padding-bottom">
		<div class="container">
			<div class="section-wrapper">
				<div class="row justify-content-center">
					<div class="col-lg-9 col-12">
						<article>
							<div class="blog__item">
								<div class="blog__inner">
									<div class="blog__thumb">
										<a href="blog-single.html">
											<img src="<?= base_url('public/assets/images/blog/10.jpg')?>" alt="blog">
										</a>
									</div>
									<div class="blog__content">
										<a href="blog-single.html">
											<h2>It’s no secret that the digital industry is boom</h2>
										</a>
										<ul class="lab-ul blog__date">
											<li><span><i class="fa-solid fa-calendar-days"></i>January 01, 2022 10:59 am </span></li>
											<li><span><i class="fa-solid fa-user"></i><a href="#">Robot Smith</a></span> </li>
											<li><span><i class="fa-solid fa-comments"></i><a href="#">09 Comments</a></span></li>
										</ul>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis placeat neque earum ratione rem cum cumque voluptate in cupiditate itaque consequuntur ducimus eius optio corporis voluptatibus explicabo accusamus, expedita commodi labore, fuga doloribus, eos ab et. Ex, laboriosam! Sunt libero minima, inventore, dolorem ad a eius illo aliquam ipsa iste dolore are praesentium quae totam harum, ipsum sed dicta?</p>
                                        <a href="blog-single.html" class="default-btn reverse"><span>read more</span></a>
									</div>
								</div>
							</div>
							<div class="blog__item">
								<div class="blog__inner">
									<div class="blog__thumb blog__slider">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="blog__img">
													<img src="<?= base_url('public/assets/images/blog/10.jpg')?>" alt="blog" class="w-100">
												</div>
											</div>
											<div class="swiper-slide">
												<div class="blog__img">
													<img src="<?= base_url('public/assets/images/blog/11.jpg')?>" alt="blog" class="w-100">
												</div>
											</div>
											<div class="swiper-slide">
												<div class="blog__img">
													<img src="<?= base_url('public/assets/images/blog/12.jpg')?>" alt="blog" class="w-100">
												</div>
											</div>
										</div>

										<div class="thumb-next thumb-nav"><i class="fa-solid fa-angle-right"></i></div>
										<div class="thumb-prev thumb-nav"><i class="fa-solid fa-angle-left"></i></div>

									</div>
									<div class="blog__content">
										<a href="blog-single.html">
											<h2>Globally restore bleeding-edge value through accurate.</h2>
										</a>
										<ul class="lab-ul blog__date">
											<li><span><i class="fa-solid fa-calendar-days"></i>January 01, 2022 10:59 am
												</span></li>
											<li><span><i class="fa-solid fa-user"></i><a href="#">Robot Smith</a></span>
											</li>
											<li><span><i class="fa-solid fa-comments"></i><a href="#">09 Comments</a></span></li>
										</ul>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis placeat neque earum ratione rem cum cumque voluptate in cupiditate itaque consequuntur ducimus eius optio corporis voluptatibus explicabo accusamus, expedita commodi labore, fuga doloribus, eos ab et. Ex, laboriosam! Sunt libero minima, inventore, dolorem ad a eius illo aliquam ipsa iste dolore are praesentium quae totam harum, ipsum sed dicta?</p>
                                        <a href="blog-single.html" class="default-btn reverse"><span>read more</span></a>
									</div>
								</div>
							</div>
							<div class="blog__item">
								<div class="blog__inner">
									<div class="blog__thumb">
										<a href="blog-single.html">
											<img src="<?= base_url('public/assets/images/blog/12.jpg')?>" alt="blog">
										</a>
										<a href="https://www.youtube.com/embed/U9O8G5AreXE" class="play-btn"
											data-rel="lightcase">
											<i class="fa-solid fa-play"></i>
											<span class="pluse_2"></span>
										</a>
									</div>
									<div class="blog__content">
										<a href="blog-single.html">
											<h2>Proactively productivate real-time intellectual capital where.</h2>
										</a>
										<ul class="lab-ul blog__date">
											<li><span><i class="fa-solid fa-calendar-days"></i>January 01, 2022 10:59 am</span></li>
											<li><span><i class="fa-solid fa-user"></i><a href="#">Robot Smith</a></span></li>
											<li><span><i class="fa-solid fa-comments"></i><a href="#">09 Comments</a></span></li>
										</ul>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis placeat neque earum ratione rem cum cumque voluptate in cupiditate itaque consequuntur ducimus eius optio corporis voluptatibus explicabo accusamus, expedita commodi labore, fuga doloribus, eos ab et. Ex, laboriosam! Sunt libero minima, inventore, dolorem ad a eius illo aliquam ipsa iste dolore are praesentium quae totam harum, ipsum sed dicta?</p>
                                        <a href="blog-single.html" class="default-btn reverse"><span>read more</span></a>
									</div>
								</div>
							</div>
							<ul class="default-pagination lab-ul justify-content-center">
								<li>
									<a href="#"><i class="fa-solid fa-angle-left"></i></a>
								</li>
								<li>
									<a href="#">01</a>
								</li>
								<li>
									<a href="#" class="active">02</a>
								</li>
								<li>
									<a href="#">03</a>
								</li>
								<li>
									<a href="#"><i class="fa-solid fa-angle-right"></i></a>
								</li>
							</ul>
						</article>
					</div>
					
					<div class="col-lg-3 col-md-7 col-12">
						<aside>
							<div class="widget widget-search">
								<div class="widget-header">
									<h5>Search keywords</h5>
								</div>
								<form action="#" class="search-wrapper">
									<input type="text" placeholder="Search Here...">
									<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
								</form>
							</div>

							<div class="widget widget-category">
								<div class="widget-header">
									<h5>Post Categories</h5>
								</div>
								<ul class="lab-ul widget-wrapper list-bg-none">
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-angles-right"></i>Show all</span><span>18</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-angles-right"></i>Business</span><span>20</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-angles-right"></i>Creative</span><span>25</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-angles-right"></i>Inspiation</span><span>30</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-angles-right"></i>News</span><span>28</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-angles-right"></i>Photography</span><span>20</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-angles-right"></i>Smart</span><span>26</span></a>
									</li>
								</ul>
							</div>

							<div class="widget widget-post">
								<div class="widget-header">
									<h5>Recent Post</h5>
								</div>
								<ul class="lab-ul widget-wrapper">
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb">
											<a href="blog-single.html"><img src="assets/images/blog/p-post/01.jpg" alt="product"></a>
										</div>
										<div class="post-content ps-4">
											<a href="blog-single.html">
												<h6>Poor People’s Campaign Our Resources</h6>
											</a>
											<p>01 January 2022</p>
										</div>
									</li>
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb">
											<a href="blog-single.html"><img src="assets/images/blog/p-post/02.jpg" alt="product"></a>
										</div>
										<div class="post-content ps-4">
											<a href="blog-single.html">
												<h6>Boosting Social For NGO And Charities </h6>
											</a>
											<p>01 January 2022</p>
										</div>
									</li>
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb">
											<a href="blog-single.html"><img src="assets/images/blog/p-post/03.jpg" alt="product"></a>
										</div>
										<div class="post-content ps-4">
											<a href="blog-single.html">
												<h6>Poor People’s Campaign Our Resources</h6>
											</a>
											<p>01 January 2022</p>
										</div>
									</li>
									<li class="d-flex flex-wrap justify-content-between">
										<div class="post-thumb">
											<a href="blog-single.html"><img src="assets/images/blog/p-post/04.jpg" alt="product"></a>
										</div>
										<div class="post-content ps-4">
											<a href="blog-single.html">
												<h6>Boosting Social For NGO And Charities</h6>
											</a>
											<p>01 January 2022</p>
										</div>
									</li>
								</ul>
							</div>

							<div class="widget widget-instagram">
								<div class="widget-header">
									<h5>Instagram</h5>
								</div>
								<ul class="lab-ul widget-wrapper d-flex flex-wrap justify-content-center">
									<li><a href="assets/images/instragram/01.jpg" data-rel="lightcase"><img src="assets/images/instragram/01.jpg" alt="instragram-img"></a></li>
									<li><a href="assets/images/instragram/02.jpg" data-rel="lightcase"><img src="assets/images/instragram/02.jpg" alt="instragram-img"></a></li>
									<li><a href="assets/images/instragram/03.jpg" data-rel="lightcase"><img src="assets/images/instragram/03.jpg" alt="instragram-img"></a></li>
									<li><a href="assets/images/instragram/04.jpg" data-rel="lightcase"><img src="assets/images/instragram/04.jpg" alt="instragram-img"></a></li>
									<li><a href="assets/images/instragram/05.jpg" data-rel="lightcase"><img src="assets/images/instragram/05.jpg" alt="instragram-img"></a></li>
									<li><a href="assets/images/instragram/06.jpg" data-rel="lightcase"><img src="assets/images/instragram/06.jpg" alt="instragram-img"></a></li>
									<li><a href="assets/images/instragram/07.jpg" data-rel="lightcase"><img src="assets/images/instragram/07.jpg" alt="instragram-img"></a></li>
									<li><a href="assets/images/instragram/08.jpg" data-rel="lightcase"><img src="assets/images/instragram/08.jpg" alt="instragram-img"></a></li>
									<li><a href="assets/images/instragram/09.jpg" data-rel="lightcase"><img src="assets/images/instragram/09.jpg" alt="instragram-img"></a></li>
								</ul>
							</div>

							<div class="widget widget-archive">
								<div class="widget-header">
									<h5>Our Archive</h5>
								</div>
								<ul class="lab-ul widget-wrapper list-bg-none">
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-calendar-days"></i>January</span><span>2022</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-calendar-days"></i>February</span><span>2022</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-calendar-days"></i>March</span><span>2019</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-calendar-days"></i>August</span><span>2022</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-calendar-days"></i>September</span><span>2017</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-calendar-days"></i>October</span><span>2016</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-calendar-days"></i>November</span><span>2014</span></a>
									</li>
									<li>
										<a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="fa-solid fa-calendar-days"></i>December</span><span>2013</span></a>
									</li>
								</ul>
							</div>

							<div class="widget widget-tags">
								<div class="widget-header">
									<h5>Our Popular tags</h5>
								</div>
								<ul class="lab-ul widget-wrapper">
									<li><a href="#">Food</a></li>
									<li><a href="#">Love</a></li>
									<li><a href="#">Ollya</a></li>
									<li><a href="#">health</a></li>
									<li><a href="#">Partner</a></li>
									<li><a href="#">Man</a></li>
									<li><a href="#">Male</a></li>
									<li><a href="#">Date</a></li>
									<li><a href="#">Women</a></li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> Blog section end here <================== -->

<?= $this->endsection();?>