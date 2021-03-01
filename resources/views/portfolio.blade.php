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

            <div class="col-md-4 center-block" style="margin-bottom:15px;">
                <div class="section-box-three">
                    <!---->
                    <figure>
                        <h3>Siper</h3>
                        <p>Aplikasi SIPER (Sistem Informasi Perangkat)
                        adalah aplikasi berbasis Web yang digunakan
                        untuk melakukan tata kelola inventarisasi dan
                        monitoring terhadap status dan konidisi perangkat
                        di seluruh UPT Ditjen SDPPI.</p>
                        <!-- <a href="#" class="btn btn-read">Read More</a> -->
                    </figure>
                    <img src="{{asset('images/projects/1.jpg')}}" class="img-responsive"/>
                </div>
            </div>

            <div class="col-md-4 center-block" style="margin-bottom:15px;">
                <div class="section-box-three">
                    <!---->
                    <figure>
                        <h3>Kejaksaan Tinggi<br>Sulawesi Selatan</h3>
                        <p>Merupakan web atau situs resmi dari Kejaksaan
                        Tinggi Sulawesi Selatan yang didalamnya
                        terdapat informasi dan berita terkait Kejati Sulsel.</p>
                        <!-- <a href="#" class="btn btn-read">Read More</a> -->
                    </figure>
                    <img src="{{asset('images/projects/2-1.jpeg')}}" class="img-responsive"/>
                </div>
            </div>

            <div class="col-md-4 center-block" style="margin-bottom:15px;">
                <div class="section-box-three">
                    <!---->
                    <figure>
                        <h3>Spectrum Map</h3>
                        <p>Aplikasi spectrum MAP adalah aplikasi berbasis
                        Web dan Desktop yang digunakan untuk
                        melakukan monitoring dan observasi terhadap
                        hasil dari monitoring spectrum</p>
                        <!-- <a href="#" class="btn btn-read">Read More</a> -->
                    </figure>
                    <img src="{{asset('images/projects/2.jpg')}}" class="img-responsive"/>
                </div>
            </div>

            <div class="col-md-4 center-block" style="margin-bottom:15px;">
                <div class="section-box-three">
                    <!---->
                    <figure>
                        <h3>Si-Filma</h3>
                        <p>Aplikasi SI-FILMA adalah aplikasi berbasis Web
                        yang digunakan untuk melakukan pengelolaan
                        file manifest dan pelayanan Aktivasi kartu SAM
                        kartu E-KTP.</p>
                    </figure>
                    <img src="{{asset('images/projects/3.jpg')}}" class="img-responsive"/>
                </div>
            </div>

            <div class="col-md-4 center-block" style="margin-bottom:15px;">
                <div class="section-box-three">
                    <!---->
                    <figure>
                        <h3>Aplikasi Anak Sehat</h3>
                        <p>Aplikasi Anak Sehat berbasis Android dan web
                        yang digunakan untuk memantau dan
                        mengevaluasi tumbuh kembang anak serta ibu
                        hamil. Aplikasi ini juga dilengkapi games dan
                        forum tanya jawab.</p>
                    </figure>
                    <img src="{{asset('images/projects/6.jpg')}}" class="img-responsive"/>
                </div>
            </div>

            <div class="col-md-4 center-block" style="margin-bottom:15px;">
                <div class="section-box-three">
                    <!---->
                    <figure>
                        <h3>SiPesat</h3>
                        <p>Aplikasi pendukung penertiban telekomunikasi
                        (sipesat) adalah aplikasi berbasis web dan
                        android yang berfungsi sebagai media
                        pengaduan terhadap adanya gangguan atau
                        potensi gangguan baik dari sisi frekuensi ataupun
                        perangkat.</p>
                    </figure>
                    <img src="{{asset('images/projects/8.jpg')}}" class="img-responsive"/>
                </div>
            </div>

            <div class="col-md-4 center-block" style="margin-bottom:15px;">
                <div class="section-box-three">
                    <!---->
                    <figure>
                        <h3>SMSN</h3>
                        <p>Aplikasi SMSN adalah aplikasi berbasis Web dan
                        Desktop yang mampu mengolah dan
                        menampilkan visualisasi dari data output
                        perangkat monitoring yang berasal dari Sistem
                        Monitoring Frekuensi Radio (SMFR).</p>
                    </figure>
                    <img src="{{asset('images/projects/5.jpg')}}" class="img-responsive"/>
                </div>
            </div>

            <div class="col-md-4 center-block" style="margin-bottom:15px;">
                <div class="section-box-three">
                    <!---->
                    <figure>
                        <h3>E-Monitoring SDPPI</h3>
                        <p>Aplikasi SURVEY SDPPI adalah aplikasi
                        berbasis Web yang digunakan untuk melakukan
                        survey internal maupun eksternal dengan
                        dukungan fitur yang lengkap pada Direktorat
                        Operasi SDPPI.</p>
                    </figure>
                    <img src="{{asset('images/projects/7-1.jpeg')}}" class="img-responsive"/>
                </div>
            </div>
            <!--end portfolio-area -->

		</div>

	</div>
	<!--//projects-->

</div>
<!--//projects-->

<!-- /newsletter-->
<div class="newsletter_w3ls_agileits" style="background-color:#dddddd;">
    <div class="col-sm-12 newsleft text-center">
        <h3 style="color:#020202;">Segera hubungi kami</h3>
        <a href="/contact" class="btn btn-contact-us">Hubungi Kami</a>
    </div>

    <div class="clearfix"></div>
</div>
<!-- //newsletter-->


@endsection