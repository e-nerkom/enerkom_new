@extends('layout/template')

@section('content')
	<!--/banner_info-->
	<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="/">Home</a><span>|</span></li>
				<li>Sign up</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
<div class="banner_bottom">
		<div class="container">
				<div class="tittle-w3ls_head">
				<h3 class="tittle-w3ls three">Sign Up <span>Now </span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
					<div class="login-form-rec">
						<form action="{{ url('admin/register') }}" method="POST">
						{{ csrf_field() }}
							<input type="text" name="username" placeholder="Username" required="">
							<input type="password" name="password" id="password1" placeholder="Password" required="">
							<input type="password" name="password_confirmation" id="password2" placeholder="Confirm Password" required="">
							<input type="submit" value="Sign Up">
						</form>
					</div>
					<p class="reg"><a href="#"> By clicking Signup, I agree to your terms</a></p>

				</div>
			</div>
		</div>
	</div>
	@endsection