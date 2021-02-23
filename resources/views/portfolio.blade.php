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
			<li>Portfolio</li>
		</ul>
	</div>
</div>
<!--//banner_info-->
<!--/projects-->
<div class="banner_bottom">
	<div class="container">
		<h3 class="tittle-w3ls">Projects</h3>
		<div class="inner_sec_info_wthree_agile">
			<!--/projects-->
			<!-- <ul class="portfolio-categ filter">
				<li class="port-filter all active">
					<a href="#">All</a>
				</li>
				<li class="cat-item-1">
					<a href="#" title="Category 1">Kelistrikan</a>
				</li>
				<li class="cat-item-2">
					<a href="#" title="Category 2">Telekomunikasi & IT</a>
				</li>
			</ul> -->


			<ul class="portfolio-area">

                <li class="portfolio-item2" data-id="id-0" data-type="cat-item-2">
                    <div>
                        <span class="image-block block2 img-hover">
                            <a class="image-zoom" href="{{asset('images/projects/1.jpg')}}" rel="prettyPhoto[gallery]">

                                <img src="{{asset('images/projects/1.jpg')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>Siper</h5>
                                </div>
                            </a>
                            <div class="portfolio-desc">
                                <p>Aplikasi SIPER (Sistem Informasi Perangkat)
                                    adalah aplikasi berbasis Web yang digunakan
                                    untuk melakukan tata kelola inventarisasi dan
                                    monitoring terhadap status dan konidisi perangkat
                                    di seluruh UPT Ditjen SDPPI. </p>
                            </div>
                        </span>
                    </div>
                </li>


                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/projects/2-1.jpeg')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/projects/2-1.jpeg')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>Kejaksaan Tinggi Sulawesi Selatan</h5>
                                    <!-- <p>Sulawesi Selatan</p> -->
                                </div>
                            </a>
                            <div class="portfolio-desc">
                                <p>Merupakan web atau situs resmi dari Kejaksaan
                                    Tinggi Sulawesi Selatan yang didalamnya
                                    terdapat informasi dan berita terkait Kejati Sulsel.</p>
                            </div>
                        </span>
                    </div>
                </li>


                <li class="portfolio-item2" data-id="id-3" data-type="cat-item-1">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/projects/2.jpg')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/projects/2.jpg')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>Spectrum Map</h5>
                                    <!-- <p>Visualisasi Peta dari Database</p> -->
                                </div>
                            </a>
                            <div class="portfolio-desc">
                                <p>Aplikasi spectrum MAP adalah aplikasi berbasis
                                    Web dan Desktop yang digunakan untuk
                                    melakukan monitoring dan observasi terhadap
                                    hasil dari monitoring spectrum</p>
                            </div>
                        </span>
                    </div>
                </li>

                <li class="portfolio-item2" data-id="id-3" data-type="cat-item-1">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/projects/3.jpg')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/projects/3.jpg')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>Si-Filma</h5>
                                </div>
                            </a>
                            <div class="portfolio-desc">
                                <p>Aplikasi SI-FILMA adalah aplikasi berbasis Web
                                    yang digunakan untuk melakukan pengelolaan
                                    file manifest dan pelayanan Aktivasi kartu SAM
                                    kartu E-KTP</p>
                            </div>
                        </span>
                    </div>
                </li>

                <li class="portfolio-item2" data-id="id-3" data-type="cat-item-1">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/projects/8-1.jpg')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/projects/6.jpg')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>Aplikasi Anak Sehat</h5>
                                </div>
                            </a>
                            <div class="portfolio-desc">
                                <p>Aplikasi Anak Sehat berbasis Android dan web
                                    yang digunakan untuk memantau dan
                                    mengevaluasi tumbuh kembang anak serta ibu
                                    hamil. Aplikasi ini juga dilengkapi games dan
                                    forum tanya jawab.</p>
                            </div>
                        </span>
                    </div>
                </li>

                <li class="portfolio-item2" data-id="id-3" data-type="cat-item-1">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/projects/9-2.JPG')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/projects/8.jpg')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>SiPesat</h5>
                                </div>
                            </a>
                            <div class="portfolio-desc">
                                <p>Aplikasi pendukung penertiban telekomunikasi
                                    (sipesat) adalah aplikasi berbasis web dan
                                    android yang berfungsi sebagai media
                                    pengaduan terhadap adanya gangguan atau
                                    potensi gangguan baik dari sisi frekuensi ataupun
                                    perangkat.</p>
                            </div>
                        </span>
                    </div>
                </li>

                <li class="portfolio-item2" data-id="id-3" data-type="cat-item-1">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/projects/5.jpg')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/projects/5.jpg')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>SMSN</h5>
                                </div>
                            </a>
                            <div class="portfolio-desc">
                                <p>Aplikasi SMSN adalah aplikasi berbasis Web dan
                                    Desktop yang mampu mengolah dan
                                    menampilkan visualisasi dari data output
                                    perangkat monitoring yang berasal dari Sistem
                                    Monitoring Frekuensi Radio (SMFR)</p>
                            </div>
                        </span>
                    </div>
                </li>

                <li class="portfolio-item2" data-id="id-3" data-type="cat-item-1">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/projects/7-1.jpeg')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/projects/7-1.jpeg')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>E-Monitoring SDPPI</h5>
                                </div>
                            </a>
                            <div class="portfolio-desc">
                                <p>Aplikasi SURVEY SDPPI adalah aplikasi
                                    berbasis Web yang digunakan untuk melakukan
                                    survey internal maupun eksternal dengan
                                    dukungan fitur yang lengkap pada Direktorat
                                    Operasi SDPPI.</p>
                            </div>
                        </span>
                    </div>
                </li>


                <div class="clearfix"></div>
            </ul>
            <!--end portfolio-area -->

		</div>

	</div>
	<!--//projects-->

</div>
<!--//projects-->

<!-- /newsletter-->
<div class="newsletter_w3ls_agileits" style="background-color:#ff3c41;">
    <div class="col-sm-12 newsleft text-center">
        <h3 style="color:#ffffff;">Segera hubungi kami</h3>
        <a href="/contact" class="btn" style="background:#1700ff;color:#ffffff;font-size:18px;padding:10px 30px;margin-top:20px;border-radius:25px;">Hubungi Kami</a>
    </div>

    <div class="clearfix"></div>
</div>
<!-- //newsletter-->
@endsection