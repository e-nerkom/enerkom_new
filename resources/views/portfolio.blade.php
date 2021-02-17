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
@endsection