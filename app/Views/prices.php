<?= $this->extend('layouts/app.php')?>
<?= $this->section('content')?>


    <!-- ================> Page Header section start here <================== -->
    <div class="pageheader bg_img" style="background-image: url(<?= base_url('public/assets/images/bg-img/pageheader.jpg')?>);">
        <div class="container">
            <div class="pageheader__content text-center">
                <h2>Membership Levels</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Pages</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Membership</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->




    <!-- ================> Membership start here <================== -->
    <div class="membership padding-top padding-bottom">
        <div class="container">
            <div class="section__header style-2 text-center">
				<h2>Membership Levels</h2>
				<p>Our dating platform is like a breath of fresh air. Clean and trendy design with ready to use features we are sure you will love.</p>
			</div>
            <div class="section__wrapper">
				<div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
					<div class="col">
						<div class="membership__item">
                            <div class="membership__inner">
                                <div class="membership__head">
                                    <h4>7 Day Free Trial</h4>
                                    <p>$15.00 Now And Then $30.00 Per Month.</p>
                                </div>
                                <div class="membership__body">
                                    <h4>FREE</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Directory</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Profile</span></li>
                                        <li><i class="fa-solid fa-circle-xmark"></i> <span>Send Private Messages</span></li>
                                        <li><i class="fa-solid fa-circle-xmark"></i> <span>Add Media To Your Profile</span></li>
                                    </ul>
                                </div>
                                <div class="membership__footer">
                                    <a href="login.html" class="default-btn reverse"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col">
						<div class="membership__item">
                            <div class="membership__inner">
                                <div class="membership__head">
                                    <h4>Bronze</h4>
                                    <p>$15.00 Now And Then $30.00 Per Month.</p>
                                </div>
                                <div class="membership__body">
                                    <h4>$15.00</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Directory</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Profile</span></li>
                                        <li><i class="fa-solid fa-circle-xmark"></i> <span>Send Private Messages</span></li>
                                        <li><i class="fa-solid fa-circle-xmark"></i> <span>Add Media To Your Profile</span></li>
                                    </ul>
                                </div>
                                <div class="membership__footer">
                                    <a href="login.html" class="default-btn reverse"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col">
						<div class="membership__item">
                            <div class="membership__inner">
                                <div class="membership__head">
                                    <h4>Silver</h4>
                                    <p>$15.00 Now And Then $30.00 Per Month.</p>
                                </div>
                                <div class="membership__body">
                                    <h4>$20.00</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Directory</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Profile</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>Send Private Messages</span></li>
                                        <li><i class="fa-solid fa-circle-xmark"></i> <span>Add Media To Your Profile</span></li>
                                    </ul>
                                </div>
                                <div class="membership__footer">
                                    <a href="login.html" class="default-btn reverse"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col">
						<div class="membership__item">
                            <div class="membership__inner">
                                <div class="membership__head">
                                    <h4>Gold</h4>
                                    <p>$15.00 Now And Then $30.00 Per Month.</p>
                                </div>
                                <div class="membership__body">
                                    <h4>$30.00</h4>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Directory</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>View Members Profile</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>Send Private Messages</span></li>
                                        <li><i class="fa-solid fa-circle-check"></i> <span>Add Media To Your Profile</span></li>
                                    </ul>
                                </div>
                                <div class="membership__footer">
                                    <a href="login.html" class="default-btn reverse"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- ================> Membership end here <================== -->


<?= $this->endsection();?>