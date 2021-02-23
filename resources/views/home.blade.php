@extends('layout/template') 

@push('css')
<style>
    .carousel .item {
        background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner1}}) no-repeat;
        background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner1}}) no-repeat;
        background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner1}}) no-repeat;
        background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner1}}) no-repeat;
        background-size: cover;
    }

    .carousel .item.item2 {
        background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner2}}) no-repeat;
        background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner2}}) no-repeat;
        background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner2}}) no-repeat;
        background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner2}}) no-repeat;
        background-size: cover;
    }

    .carousel .item.item3 {
        background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner3}}) no-repeat;
        background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner3}}) no-repeat;
        background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner3}}) no-repeat;
        background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/{{$banner3}}) no-repeat;
        background-size: cover;
    }
</style>
@endpush

@section('content')
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h3>{{$title1}}</h3>
                    <p>PT.ENERGI JARING KOMUNIKASI</p>
                    <div class="top-buttons">
                        <div class="bnr-button">
                            <a class="act" href="{{url('about')}}">Read More</a>
                        </div>
                        <div class="bnr-button">
                            <a href="{{url('portfolio')}}" class="two scroll">Portfolio</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <div class="carousel-caption">
                    <h3>{{$title2}}</h3>
                    <p>Memberikan Yang Terbaik</p>
                    <div class="top-buttons">
                        <div class="bnr-button">
                            <a class="act" href="{{url('about')}}">Read More</a>
                        </div>
                        <div class="bnr-button">
                            <a href="{{url('portfolio')}}" class="two scroll ">Portfolio</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <div class="carousel-caption">
                    <h3>{{$title3}}</h3>
                    <p>Memberikan Solusi</p>
                    <div class="top-buttons">
                        <div class="bnr-button">
                            <a class="act" href="{{url('about')}}">Read More</a>
                        </div>
                        <div class="bnr-button">
                            <a href="{{url('portfolio')}}" class="two scroll ">Portfolio</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!-- The Modal -->
</div>
<!--//banner -->
<!--/ab-->
<div class="banner_bottom" style="padding-bottom:0;">
    <div class="container">
        <h3 data-aos="zoom-in-down" data-aos-duration="1000" class="tittle-w3ls">About Us</h3>
        <div class="inner_sec_info_wthree_agile">
            <div class="help_full">

                
                <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="50" data-aos-anchor-placement="top-center" class="col-md-6 banner_bottom_left">
                    <h4 style="margin-bottom:5px;border-bottom:2px solid #ff3c41;">Visi</h4>
                    <p style="text-align:justify;">Menjadi perusahaan yang profesional, memiliki komitmen dan integritas tinggi yang terpercaya sebagai penyedia solusi aplikasi informasi multimedia berbasis teknologi serta keamanan data berskala global sehingga memberikan manfaat yang optimal untuk perusahaan maupun umum.</p>
                    <h4 style="margin-bottom:5px;border-bottom:2px solid #ff3c41;">Misi</h4>
                    <ul class="misi">
                        <li class="about_us" style="text-align:justify">Memberikan kualitas terbaik, pelayanan yang handal, dan implementasi yang tepat dan cepat.</li>
                        <li class="about_us" style="text-align:justify">Menyediakan tim yang profesional.</li>
                        <li class="about_us" style="text-align:justify">Menjalankan Kemitraan dengan Perusahaan/Perorangan dalam memenuhi kebutuhan Barang dan Jasa dengan mengutamakan Quality, Cost dan Delivery (QCD) dalam Bidang ICT (Information Communication Technology) di Indonesia.</li>
                    </ul>
                    
                </div>
                <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-anchor-placement="top-center" class="col-md-6 banner_bottom_grid help" style="margin-top:50px;">
                    <img src="{{asset('images/about_us.jpg')}}" alt=" " class="img-responsive">
                </div>

                <div class="clearfix"></div>
                <div class="ab_button" style="text-align:center;">
                    <a class="btn btn-primary btn-lg hvr-underline-from-left" href="{{url('about')}}" role="button">Read More </a>
                </div>
            </div>
        </div>
        
    </div>
    <div class="news-main" style="padding-bottom:4em;">
        <div class="container">
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
        <h3 data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="50" class="tittle-w3ls cen">What we do</h3>
        <div class="inner_sec_info_wthree_agile">
            <div class="ser-first">
                <div data-aos="flip-up" data-aos-duration="1000" data-aos-delay="50" class="col-md-6 ser-first-grid text-center">
                    <span class="fas fa-broadcast-tower" aria-hidden="true"></span>
                    <h3>Telekomunikasi & IT</h3>
                    <p>Sebagai penyedia Produk & Jasa Pelayanan yang mencakup Perangkat Telekomunikasi dan Jasa Telekomunikasi.</p>
                </div>
                <div data-aos="flip-down" data-aos-duration="1000" data-aos-delay="50" class="col-md-6 ser-first-grid text-center">
                    <span class="fas fa-bolt" aria-hidden="true"></span>
                    <h3>Sistem Integrator</h3>
                    <p>Perencanaan, perancangan, dan analisa sistem perangkat lunak berbasis Website atau Mobile.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>
<!--//what-->
<!--/banner_bottom-->
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div style="margin:15vh 5vh; padding:0;">
                    <h3 class="tittle-w3ls we">Menjadi yang terbaik</h3>
                    <p class="text-center">Kepuasan konsumen merupakan suatu keharusan bagi kami. Sehingga proses pemasaran tidak hanya berhenti pada transaksi
                            penjualan. Lebih dari itu, salah satu hal yang sangat penting dan perlu diperhatikan oleh produsen adalah pemberian
                            Layanan Purna Jual.</p>
                </div>
            </div>
            <div style="padding:0;" class="col-xs-12 col-md-6">
                <img src="{{asset('images/banner_mid.jpg')}}" class="img-responsive" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-push-6">
                <div style="margin:15vh 5vh; padding:0;">
                    <h3 class="tittle-w3ls we">Berkembang Bersama</h3>
                    <p class="text-center">Memajukan kesejahteraan bersama, memanfaatkan perkembangan teknologi untuk hasil yang terbaik.</p>
                </div>
            </div>
            <div style="padding:0;" class="col-xs-12 col-md-6 col-md-pull-6">
                <img src="{{asset('images/banner_mid2.jpg')}}" class="img-responsive" alt="">
            </div>
        </div>

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