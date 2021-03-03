<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<head>
	<title>PT. E-nerkom</title>
	<link rel="shortcut icon" href="/images/favicon.png"/>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Conceit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	@stack('css')
	<link href="{{asset('css/aos.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css/team.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css/contact.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
	<link href="{{asset('fonts/f/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css')}}" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">

	<style>
	.mybuttonWA{margin:0;padding:0;text-align:center;position:fixed;bottom:100px;right:25px}
	.buttonWA{font-size:17px;color:#f0e2dd;background:#82c91e;padding:10px;margin:0;overflow:hidden;border-radius:3px;text-decoration:none}
	.mybuttonWA .buttonWA:hover{background:#62abd0}
	</style>	

</head>

<body>
	@include('layout/header')	
	@yield('content')
	
	@include('layout/footer')
	<div class="mybuttonWA">
		<a style="border-radius:50px;padding:25px 13px 12px" class="buttonWA" href="https://api.whatsapp.com/send?phone=6282126603648&amp;text=Halo%20Enerkom" rel="nofollow" target="_blank">
		<i class="fab fa-whatsapp" style="font-size:36px;"></i></a>
	</div>
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="{{asset('js/jquery-1.7.2.js')}}"></script>
	<script src="{{asset('js/jquery.quicksand.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/script.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/aos.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
	<script>
		AOS.init();
	</script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

	

</body>

</html>