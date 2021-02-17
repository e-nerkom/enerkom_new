@extends('layout/template')

@section('content')
	<!--/banner_info-->
	<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="/">Home</a><span>|</span></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
<div class="banner_bottom">
		<div class="container">
			<div class="mail_form">				
				<h3 class="tittle-w3ls">Send Us a Message</h3>	
				@if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
                    </div>
                @endif	

				<div class="inner_sec_info_wthree_agile">
					<form action="/contact" method="post">
						{{ csrf_field() }}
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="name" type="text" id="input-13" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-13">
							<span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
						</label>
						</span>
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="email" type="email" id="input-14" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-14">
							<span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
						</label>
						</span>
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="subject" type="text" id="input-15" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-15">
							<span class="input__label-content input__label-content--chisato" data-content="Subject">Subject</span>
						</label>
						</span>
						<textarea name="message" placeholder="Your comment here..." required=""></textarea>
						<input type="submit" value="Submit">
					</form>

				</div>
			</div>
			<div class="inner_sec_info_wthree_agile">
           	<div class="col-md-8 map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.635671255142!2d107.6188801617076!3d-6.93407436424722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e88723e8762d%3A0x74b86c9ebb3c7273!2sJl.+Beunteur+No.1%2C+Burangrang%2C+Lengkong%2C+Kota+Bandung%2C+Jawa+Barat+40262!5e0!3m2!1sen!2sid!4v1528299717867"
					    style="border:0"></iframe>
				</div>
				<div class="col-md-4 contact_grids_info">
					<div class="contact_grid">
						<div class="contact_grid_right">
							<h4>HEAD OFFICE</h4>
							<p>Jalan Beunteur No.1,</p>
							<p>Buah Batu, Bandung 40262.</p>
							<p>022-7319408 | 0819 10 10000 7.</p>
						</div>
					</div>
					<div class="contact_grid">
						<div class="contact_grid_right">
							<h4>BRANCH OFFICE</h4>
							<p>Palma Tower 20th floor,</p>
							<p>Jl. R.A Kartini III-S Kav. 06,</p>
							<p>Jakarta Selatan 12310.</p>
							<p>021-50820840  | 0819 10 10000 7.</p>
						</div>
					</div>
					<!-- <div class="contact_grid" data-aos="flip-up">

						<div class="contact_grid_right">
							<h4>OFFICE 3</h4>
							<p>436 Honey hall,</p>
							<p>NewYork City SD092.</p>
						</div>
						<div class="clearfix"> </div>
					</div> -->
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@endsection

