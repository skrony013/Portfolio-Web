@extends('layouts.frontend_layout')

@section('content')

<div  class="transition-fade">
	<div class="mry-content-frame" id="scroll">
		<canvas class="mry-dots" style="display: none"></canvas>

		<div class="mry-head-bg">
			<img src="frontend/img/dark/projects/prjct-6/1.jpg" alt="background">
			<div class="mry-bg-overlay"></div>
		</div>

		<div class="mry-banner mry-p-140-0">
			<div class="container">
				<div class="mry-main-title mry-title-center">
					<div class="mry-subtitle mry-mb-20 mry-fo">Contact</div>
					<h1 class="mry-mb-20 mry-fo">Do you have any questions?<br><span class="mry-border-text">Write us a message.</span><span class="mry-animation-el"></span></h1>
					{{-- <div class="mry-text mry-fo">Lorem ipsum dolor sit amet, consectetur.<br>Adipisicing elit suscipit, at.</div> --}}
					<div class="mry-scroll-hint-frame">
						<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
							<span class="mry-magnetic-object"></span>
						</a>
						<div class="mry-label mry-fo">Scroll Down</div>
					</div>
				</div>
			</div>
		</div>

		<!-- contact -->
		<div class="mry-about mry-p-100-0">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">

						<div class="row">
							<div class="col-lg-6">

								<div class="mry-mb-100 mry-text-center">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">01</div>
										<div class="mry-subtitle">Location</div>
									</div>
									<div class="mry-fade-object mry-mb-100">
										<h4 class="mry-mb-20 mry-fo">Welcome to Visit</h4>
										<p class="mry-text mry-mb-20 mry-fo">{{ $setting_data->site_name }}<br>{{ $setting_data->address }}</p>
									</div>
								</div>

							</div>
							<div class="col-lg-6">

								<div class="mry-mb-100 mry-text-center">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">02</div>
										<div class="mry-subtitle">Contact</div>
									</div>
									<div class="mry-fade-object mry-mb-100">
										<h4 class="mry-mb-20 mry-fo">Let's talk?</h4>
										<p class="mry-text mry-fo">Email: {{ $setting_data->email }}<br>Phone: {{ $setting_data->phone }}</p>
									</div>
								</div>

							</div>
						</div>

					</div>

					<div class="col-lg-12">

						<div class="mry-main-title mry-title-center mry-p-0-40">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">03</div>
								<div class="mry-subtitle">Contact form</div>
							</div>
							<h2 class="mry-fo">Write Us a Message</h2>
						</div>

					</div>

					<div class="col-lg-8">
						@if(session('status'))
						<h6 class="alert alert-success">{{ session('status') }}</h6>
						@endif
					</div>

					<div class="col-lg-8">

						<form method="POST" id="form" class="mry-form mry-mb-100" action="{{ url('contact') }}" enctype="multipart/form-data">

							@csrf
							<div class="row">
								<div class="col-lg-6">
									<label class="mry-label mry-fo" for="firstName">First Name</label>
									<div class="mry-fo">
										<input id="firstName" name="first_name" class="mry-default-link" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required>
									</div>
								</div>
								<div class="col-lg-6">
									<label class="mry-label mry-fo" for="lastName">Last Name</label>
									<div class="mry-fo">
										<input id="lastName" name="last_name" class="mry-default-link" type="text" data-parsley-pattern="^[a-zA-Z\s.]+$" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<label class="mry-label mry-fo" for="email">Email</label>
									<div class="mry-fo">
										<input id="email" name="email" class="mry-default-link" type="email" required>
									</div>
								</div>
								<div class="col-lg-6">
									<label class="mry-label mry-fo" for="phone">Phone</label>
									<div class="mry-fo">
										<input id="phone" name="phone" class="mry-default-link" type="text">
									</div>
								</div>
							</div>

							<div class="mry-fade-object">
								<label class="mry-label mry-fo" for="message">Message</label>
								<div class="mry-fo">
									<textarea id="message" name="message" rows="8" cols="80" placeholder="Type your message here" class="mry-default-link" type="text"
									data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$" required></textarea>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-4">
									<div class="mry-fo"><button type="submit" class="mry-btn mry-default-link">Send message</button></div>
								</div>
								<div class="col-lg-8">
									<p class="mry-text mry-simple-text mry-contact-hint mry-fo"><span class="mry-color-text">*</span> We promise not to share your personal information with
									third parties.</p>
								</div>
							</div>
						</form>

					</div>

				{{-- 	<div class="col-lg-12">

						<div class="mry-main-title mry-title-center mry-p-0-40">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">04</div>
								<div class="mry-subtitle">Map</div>
							</div>
							<h2 class="mry-fo">Welcome to visit</h2>
						</div>

					</div>

					<div class="col-lg-10">

						<div class="mry-map-frame mry-mb-100 mry-fo">
							<div id='map-light' class="mry-map mry-map-light"></div>
							<div class="mry-lock mry-magnetic-link"><i class="fas fa-lock mry-magnetic-object"></i></div>
							<div class="mry-curtain"></div>
						</div>

					</div> --}}

				</div>
			</div>
		</div>
		<!-- contact end -->

		<!-- footer -->
		 @include('includes/footer')
		<!-- footer end -->

		<div class="mry-head-bg mry-head-bottom">
			<img src="frontend/img/dark/projects/prjct-2/1.jpg" alt="background">
			<div class="mry-bg-overlay"></div>
		</div>

	</div>
</div>

@endsection