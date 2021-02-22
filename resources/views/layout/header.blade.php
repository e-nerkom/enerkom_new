<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<div class="logo-w3layouts-agileits">
						<a class="navbar-brand" href="{{url('/')}}">
							<img src="{{asset('images/logo1.png')}}" class="img-responsive">
						</a>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						<ul class="nav navbar-nav">
							<li class="{{{ (Request::segment(1) == ('') ? 'active' : '') }}}"><a href="{{url('/')}}">Home</a></li>
							<li class="{{{ (Request::segment(1) == ('about') ? 'active' : '') }}}"><a href="{{url('about')}}">About</a></li>
							<li class="{{{ (Request::segment(1) == ('portfolio') ? 'active' : '') }}}"><a href="{{url('portfolio')}}">Portfolio</a></li>
							<li class="{{{ (Request::segment(1) == ('contact') ? 'active' : '') }}}"><a href="{{url('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>