@extends('layouts.frontend_layout')

@section('content')

<div  class="transition-fade">
	<div class="mry-content-frame" id="scroll">
		<canvas class="mry-dots" style="display: none"></canvas>

		<div class="mry-head-bg">
			<img src="frontend/img/dark/projects/prjct-7/1.jpg" alt="background">
			<div class="mry-bg-overlay"></div>
		</div>

		<div class="mry-banner mry-p-140-0">
			<div class="container">
				<div class="mry-main-title mry-title-center">
					<div class="mry-subtitle mry-mb-20 mry-fo">About Us</div>
					<h1 class="mry-mb-20 mry-fo">Design is Intelligence<br><span class="mry-border-text">Made Visible.</span><span class="mry-animation-el"></span></h1>
					<div class="mry-scroll-hint-frame">
						<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
							<span class="mry-magnetic-object"></span>
						</a>
						<div class="mry-label mry-fo">Scroll Down</div>
					</div>
				</div>
			</div>
		</div>

		<!-- about -->
		<div class="mry-about mry-p-100-100">
			<div class="container">
				<div class="row justify-content-center">
					@foreach($about_data as $key=>$about_data_item)
					<div class="col-lg-8">
						<div class="mry-mb-100 mry-text-center">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">0{{ $key+1 }}</div>
								<div class="mry-subtitle">{{ $about_data_item->feature_heading }}</div>
							</div>
							<h3 class="mry-mb-40 mry-fo">{{ $about_data_item->feature_title }}</h3>
							<p class="mry-text mry-fo">{{ $about_data_item->feature_desc }}</p>
						</div>

					</div>
					@endforeach

						<div class="col-lg-12">
							<div class="mry-main-title mry-title-center mry-p-0-40">
								<div class="mry-numbering mry-fo">
									<div class="mry-border-text">03</div>
									<div class="mry-subtitle">Employees</div>
								</div>
								<h2 class="mry-fo">Our Amazing Team</h2>
								<div class="mry-arrows mry-fo">
									<div class="mry-sl-nav">
										<div class="mry-prev mry-button-team-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
										<div class="mry-next mry-button-team-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
									</div>
									<div class="mry-label mry-fo">Slider Navigation</div>
								</div>
							</div>

						</div>
						<div class="col-lg-10">

							<div class="swiper-container mry-team-slider mry-mb-100">
								<div class="swiper-wrapper">
									@foreach($team_data as $team_data_item)
									<div class="swiper-slide">

										<div class="mry-team-member mry-text-center">
											<div class="mry-member-photo-frame mry-fo">
												<img src="{{ url('upload/team/'.$team_data_item->profile_img) }}" alt="Team member" >
												<div class="mry-photo-overlay"></div>
												<div class="mry-curtain"></div>
											</div>
											<h4 class="mry-mb-10 mry-fo">{{ $team_data_item->name }}</h4>
											<p class="mry-text mry-simple-text mry-fo">{{ $team_data_item->designation }}</p>
										</div>

									</div>
									@endforeach
								</div>
							</div>

						</div>
						<div class="col-lg-12">

							<div class="mry-main-title mry-title-center mry-p-0-40">
								<div class="mry-numbering mry-fo">
									<div class="mry-border-text">04</div>
									<div class="mry-subtitle">Testimonials</div>
								</div>
								<h2 class="mry-fo">Our customers say</h2>
								<div class="mry-arrows">
									<div class="mry-sl-nav mry-fo">
										<div class="mry-prev mry-button-testimonials-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
										<div class="mry-next mry-button-testimonials-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
									</div>
									<div class="mry-label mry-fo">Slider Navigation</div>
								</div>
							</div>

						</div>
						<div class="col-lg-8">

							<div class="swiper-container mry-testimonials-slider">
								<div class="swiper-wrapper">
									@foreach($testimonial_data as $testimonial_data_item)
									<div class="swiper-slide">

										<div class="mry-title-center">
											<img src="{{ url('upload/testimonial/'.$testimonial_data_item->profile_img) }}" alt="client" class="mry-reviewer mry-mb-20 mry-fo">
											<h4 class="mry-mb-20 mry-fo">{{ $testimonial_data_item->client_name }}</h4>
											<div class="mry-subtitle mry-mb-20 mry-fo">{{ $testimonial_data_item->client_designation }}</div>
											<p class="mry-text mry-fo">{{ $testimonial_data_item->client_quotes }}</p>
											<ul class="mry-star-rate mry-fo">
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											</ul>
										</div>

									</div>
									@endforeach
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- about end -->

			<!-- footer -->
				@include('includes/footer')
			<!-- footer end -->

			<div class="mry-head-bg mry-head-bottom">
				<img src="frontend/img/dark/projects/prjct-5/1.jpg" alt="background">
				<div class="mry-bg-overlay"></div>
			</div>

		</div>

</div>

@endsection
