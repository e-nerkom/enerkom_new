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
                                    <!-- <p>Sistem Informasi Perangkat</p> -->
                                </div>
                            </a>
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
                        </span>
                    </div>
                </li>


                <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/projects/4.jpg')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/projects/4.jpg')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>Survei SDPPI</h5>
                                    <!-- <p>Survei SDPPI</p> -->
                                </div>
                            </a>
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
                                    <!-- <p>Sistem Informasi File Manifest  Management</p> -->
                                </div>
                            </a>
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
                                    <!-- <p>Visualisasi Peta dari Database</p> -->
                                </div>
                            </a>
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
                                    <!-- <p>Visualisasi Peta dari Database</p> -->
                                </div>
                            </a>
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
                                    <!-- <p>Visualisasi Peta dari Database</p> -->
                                </div>
                            </a>
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
                                    <!-- <p>Visualisasi Peta dari Database</p> -->
                                </div>
                            </a>
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
@endsection