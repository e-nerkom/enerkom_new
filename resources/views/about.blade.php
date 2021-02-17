@extends('layout/template') 

@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
</div>
<div class="services-breadcrumb">
	<div class="inner_breadcrumb">

		<ul class="short">
			<li>
				<a href="/">Home</a>
				<span>|</span>
			</li>
			<li>About</li>
		</ul>
	</div>
</div>
<!--//banner_info-->
<!--/ab-->
<div class="banner_bottom">
    <div class="container">
        <h3 data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="50" class="tittle-w3ls">About Us</h3>
        <div class="inner_sec_info_wthree_agile">
            <div class="help_full">

                <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="400" class="col-md-6 banner_bottom_grid help">
                    <img src="{{asset('images/about.jpg')}}" alt=" " class="img-responsive">
                </div>
                <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="400" class="col-md-6 banner_bottom_left">
                    <h4>Visi</h4>
                    <p>Menjadi perusahaan yang profesional, memiliki komitmen dan integritas tinggi yang terpercaya sebagai penyedia solusi aplikasi informasi multimedia berbasis teknologi serta keamanan data berskala global sehingga memberikan manfaat yang optimal untuk perusahaan maupun umum.</p>
                    <h4>Misi</h4>
                    <ul class="misi">
                        <li class="about_us">Memberikan kualitas terbaik, pelayanan yang handal, dan implementasi yang tepat dan cepat.</li>
                        <li class="about_us">Menyediakan tim yang profesional.</li>
                        <li class="about_us">Menjalankan Kemitraan dengan Perusahaan/Perorangan dalam memenuhi kebutuhan Barang dan Jasa dengan mengutamakan Quality, Cost dan Delivery (QCD) dalam Bidang ICT (Information Communication Technology) di Indonesia.</li>
                    </ul>
                    <!-- <div class="ab_button">
                        <a class="btn btn-primary btn-lg hvr-underline-from-left" href="{{url('about')}}" role="button">Read More </a>
                    </div> -->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="news-main">
            <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100" data-aos-anchor-placement="top-bottom" class="col-md-4 banner_bottom_left">
                <div class="banner_bottom_pos">
                    <div class="banner_bottom_pos_grid">
                        <div class="col-xs-3 banner_bottom_grid_left">
                            <div class="banner_bottom_grid_left_grid">
                                <span class="far fa-handshake" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-xs-9 banner_bottom_grid_right">
                            <h4>Kerjasama yang baik</h4>
                            <p>Membangun kemitraan yang solid dan berintegritas tinggi.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="600" data-aos-anchor-placement="top-bottom" class="col-md-4 banner_bottom_left">
                <div class="banner_bottom_pos">
                    <div class="banner_bottom_pos_grid">
                        <div class="col-xs-3 banner_bottom_grid_left">
                            <div class="banner_bottom_grid_left_grid">
                                <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-xs-9 banner_bottom_grid_right">
                            <h4>Solusi Handal</h4>
                            <p>Memberikan solusi tepat dalam menyelesaikan suatu pekerjaan.</p>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1100" data-aos-anchor-placement="top-bottom" class="col-md-4 banner_bottom_left">
                <div class="banner_bottom_pos">
                    <div class="banner_bottom_pos_grid">
                        <div class="col-xs-3 banner_bottom_grid_left">
                            <div class="banner_bottom_grid_left_grid">
                                <span class="fas fa-chart-line" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-xs-9 banner_bottom_grid_right">
                            <h4>Strategi Kreatif</h4>
                            <p>Meningkatkan produktivitas dengan strategi terbaik.</p>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//ab-->
<!--/what-->
<div class="works">
    <div class="container">
        <h3 data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="50" data-aos-anchor-placement="top-center" class="tittle-w3ls cen">What we do</h3>
        <div class="inner_sec_info_wthree_agile">
            <div class="ser-first">
                <div data-aos="flip-up" data-aos-duration="1000" data-aos-delay="50" data-aos-anchor-placement="top-center" class="col-md-6 ser-first-grid text-center">
                    <span class="fas fa-broadcast-tower" aria-hidden="true"></span>
                    <h3>Telekomunikasi & IT</h3>
                    <p>Sebagai penyedia Produk & Jasa Pelayanan yang mencakup Perangkat Telekomunikasi dan Jasa Telekomunikasi.</p>
                </div>
                <div data-aos="flip-down" data-aos-duration="1000" data-aos-delay="50" data-aos-anchor-placement="top-center" class="col-md-6 ser-first-grid text-center">
                    <span class="fas fa-bolt" aria-hidden="true"></span>
                    <h3>Kelistrikan</h3>
                    <p>Dalam bidang Kelistrikan pekerjaan yang ditangani mencakup Pengadaan Barang dan Pengadaan Jasa.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>
<!--//what-->
<!-- /team -->
<div class="banner_bottom proj">
	<div class="container">
		<h3 class="tittle-w3ls">Our Team</h3>
		<div class="inner_sec_info_wthree_agile">
			<!-- <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100" data-aos-anchor-placement="top-bottom" class="col-md-3 team_grid_info">
				<img src="{{asset('images/nopic.jpg')}}" alt=" " class="img-responsive" />
				<h3>Egne Novanda </h3>
				<p>CEO</p>

				<div class="team_icons">
					<ul>
						<li>
							<a href="#" class="facebook">
								<i class="fab fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>

					</ul>
				</div>

			</div>
			<div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="600" data-aos-anchor-placement="top-bottom" class="col-md-3 team_grid_info">
				<img src="{{asset('images/nopic.jpg')}}" alt=" " class="img-responsive" />
				<h3>Anliane Yuliacaesari </h3>
				<p>Creative Development</p>

				<div class="team_icons">
					<ul>
						<li>
							<a href="#" class="facebook">
								<i class="fab fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1100" data-aos-anchor-placement="top-bottom" class="col-md-3 team_grid_info">
				<img src="{{asset('images/nopic.jpg')}}" alt=" " class="img-responsive" />
				<h3>Singgih Aji</h3>
				<p>Full Stack Web Developer</p>

				<div class="team_icons">
					<ul>
						<li>
							<a href="#" class="facebook">
								<i class="fab fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>

			</div>
			<div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1600" data-aos-anchor-placement="top-bottom" class="col-md-3 team_grid_info">
				<img src="{{asset('images/nopic.jpg')}}" alt=" " class="img-responsive" />
				<h3>Neni Mulyani </h3>
				<p>Secretary</p>

				<div class="team_icons">
					<ul>
						<li>
							<a href="#" class="facebook">
								<i class="fab fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>

			</div> -->
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //team -->

<!--/testimonials-->
<div class="tesimonials">
    <div class="container">
        <h3 class="tittle-w3ls cen">Testimonials</h3>
        <div class="inner_sec">
            <div class="test_grid_sec">
                <div class="col-md-offset-2 col-md-8">
                    <div class="carousel slide two" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators two">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">

                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="test_grid">
                                        <div class="col-sm-3 text-center test_img">
                                            <img src="{{asset('images/nopic.jpg')}}" class="img-responsive" alt="">

                                        </div>
                                        <div class="col-sm-9 test_img_info">
                                            <p>Tidak salah bekerja sama dengan E-nerkom, pekerjaan yang kami kerjakan sesuai rencana & tepat waktu.</p>
                                            <h6>Sarah</h6>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="test_grid">
                                        <div class="col-sm-3 text-center test_img">
                                            <img src="{{asset('images/nopic.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="col-sm-9 test_img_info">
                                            <p>Terima kasih E-nerkom atas kerjasamanya. Saya puas dengan hasil pekerjaan dari E-nerkom.</p>
                                            <h6>Andi</h6>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//testimonials-->
<!-- /newsletter-->
<div class="newsletter_w3ls_agileits">
	<div class="col-sm-6 newsleft">
		<h3>Segera hubungi kami !</h3>
	</div>
	<div class="col-sm-6 newsright">
		<form action="#" method="post">
			<input type="email" placeholder="Masukkkan alamat email anda..." name="email" required="">
			<input type="submit" value="Submit">
		</form>
	</div>

	<div class="clearfix"></div>
</div>
<!-- //newsletter-->
@endsection