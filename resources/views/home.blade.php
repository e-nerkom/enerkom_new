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
<div class="banner_bottom">
    <div class="container">
        <h3 data-aos="zoom-in-down" data-aos-duration="1000" class="tittle-w3ls">About Us</h3>
        <div class="inner_sec_info_wthree_agile">
            <div class="help_full">

                <div data-aos="zoom-in-right" data-aos-duration="1000" data-aos-anchor-placement="top-center" class="col-md-6 banner_bottom_grid help">
                    <img src="{{asset('images/about.jpg')}}" alt=" " class="img-responsive">
                </div>
                <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="50" data-aos-anchor-placement="top-center" class="col-md-6 banner_bottom_left">
                    <h4>Visi</h4>
                    <p>Menjadi perusahaan yang profesional, memiliki komitmen dan integritas tinggi yang terpercaya sebagai penyedia solusi aplikasi informasi multimedia berbasis teknologi serta keamanan data berskala global sehingga memberikan manfaat yang optimal untuk perusahaan maupun umum.</p>
                    <h4>Misi</h4>
                    <ul class="misi">
                        <li class="about_us">Memberikan kualitas terbaik, pelayanan yang handal, dan implementasi yang tepat dan cepat.</li>
                        <li class="about_us">Menyediakan tim yang profesional.</li>
                        <li class="about_us">Menjalankan Kemitraan dengan Perusahaan/Perorangan dalam memenuhi kebutuhan Barang dan Jasa dengan mengutamakan Quality, Cost dan Delivery (QCD) dalam Bidang ICT (Information Communication Technology) di Indonesia.</li>
                    </ul>
                    <div class="ab_button">
                        <a class="btn btn-primary btn-lg hvr-underline-from-left" href="{{url('about')}}" role="button">Read More </a>
                    </div>
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
                    <h3>Kelistrikan</h3>
                    <p>Dalam bidang Kelistrikan pekerjaan yang ditangani mencakup Pengadaan Barang dan Pengadaan Jasa.</p>
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
            <ul class="portfolio-categ filter">
                <li class="port-filter all active">
                    <a href="#">All</a>
                </li>
                <li class="cat-item-1">
                    <a href="#" title="Category 1">Kelistrikan</a>
                </li>
                <li class="cat-item-2">
                    <a href="#" title="Category 2">Telekomunikasi & IT</a>
                </li>
            </ul>


            <ul class="portfolio-area">

                <li class="portfolio-item2" data-id="id-0" data-type="cat-item-2">
                    <div>
                        <span class="image-block block2 img-hover">
                            <a class="image-zoom" href="{{asset('images/simolta.png')}}" rel="prettyPhoto[gallery]">

                                <img src="{{asset('images/simolta.png')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>Simolita</h5>
                                    <p>Sistem Monitoring Listrik Kota</p>
                                </div>
                            </a>
                        </span>
                    </div>
                </li>


                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/pju.png')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/pju.png')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>PJU Solar Cell</h5>
                                    <p>Penerangan Jalan Umum</p>
                                </div>
                            </a>
                        </span>
                    </div>
                </li>


                <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/radio.png')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/radio.png')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>Radio</h5>
                                    <p>Radio Komunikasi</p>
                                </div>
                            </a>
                        </span>
                    </div>
                </li>


                <li class="portfolio-item2" data-id="id-3" data-type="cat-item-1">
                    <div>
                        <span class="image-block block2">
                            <a class="image-zoom" href="{{asset('images/gps.png')}}" rel="prettyPhoto[gallery]">
                                <img src="{{asset('images/gps.png')}}" class="img-responsive" alt="Conceit">
                                <div class="port-info">
                                    <h5>GPS</h5>
                                    <p>GPS Tracker</p>
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

<!--/blog-->
<!-- <div class="blog_sec">
    <h3 class="tittle-w3ls">Latest Blogs</h3>
    <div class="col-md-6 banner-btm-left">
        <div class="banner-btm-top">
            <div class="banner-btm-inner a1">
                <div class="blog_date">

                    <h4>Jan.05.2018</h4>

                </div>
                <h6>
                    <a href="{{url('about')}}">Strategic Planning</a>
                </h6>
                <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
                <div class="clearfix"></div>
                <a href="{{url('about')}}" class="blog-btn">Know More</a>
            </div>
            <div class="banner-btm-inner a2">

            </div>
        </div>
        <div class="banner-btm-bottom">
            <div class="banner-btm-inner a3">

            </div>
            <div class="banner-btm-inner a4">
                <div class="blog_date">

                    <h4>Jan.08.2018</h4>

                </div>
                <h6>
                    <a href="single.html">Strategic Planning</a>
                </h6>
                <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
                <div class="clearfix"></div>
                <a href="single.html" class="blog-btn">Know More</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 banner-btm-left">
        <div class="banner-btm-top">
            <div class="banner-btm-inner a1">
                <div class="blog_date">

                    <h4>Jan.25.2018</h4>

                </div>
                <h6>
                    <a href="single.html">Strategic Planning</a>
                </h6>
                <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
                <div class="clearfix"></div>
                <a href="single.html" class="blog-btn">Know More</a>
            </div>
            <div class="banner-btm-inner a5">

            </div>
        </div>
        <div class="banner-btm-bottom">
            <div class="banner-btm-inner a6">

            </div>
            <div class="banner-btm-inner a4">
                <div class="blog_date">

                    <h4>Jan.05.2018</h4>

                </div>
                <h6>
                    <a href="single.html">Strategic Planning</a>
                </h6>
                <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
                <div class="clearfix"></div>
                <a href="single.html" class="blog-btn">Know More</a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div> -->

<!--//blog-->

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
        <h3>Segera hubungi kami</h3>
    </div>
    <div class="col-sm-6 newsright">
        <form action="#" method="post">
            <input type="email" placeholder="Masukkan alamat email anda..." name="email" required="">
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="clearfix"></div>
</div>
<!-- //newsletter-->
@endsection