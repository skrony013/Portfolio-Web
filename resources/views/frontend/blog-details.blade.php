@extends('layouts.frontend_layout')

@section('content')

		<div  class="transition-fade">
			<div class="mry-content-frame" id="scroll">
				<canvas class="mry-dots" style="display: none"></canvas>

				<div class="mry-head-bg">
					<img src="{{ asset('frontend/img/dark/projects/prjct-6/1.jpg') }}" alt="background">
					<div class="mry-bg-overlay"></div>
				</div>

				<div class="mry-banner mry-p-140-0">
					<div class="container">
						<div class="mry-main-title mry-title-center">
							<div class="mry-subtitle mry-mb-20 mry-fo">Newsletter</div>
							<h1 class="mry-mb-20 mry-fo">News Details</h1>
							
							<div class="mry-scroll-hint-frame">
								<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
									<span class="mry-magnetic-object"></span>
								</a>
								<div class="mry-label mry-fo">Scroll Down</div>
							</div>
						</div>
					</div>
				</div>

				<!-- publication -->
				<div class="mry-about mry-p-100-100">
					<div class="container">
						<div class="row justify-content-center">

							<div class="col-lg-10">

								<div class="mry-about-video mry-mb-100 mry-fo">
									<div class="mry-video-cover-frame">
										<img class="mry-video-cover" src="{{ url('upload/blog/'.$blog_details_data->img) }}" alt="banner">
										<div class="mry-cover-overlay"></div>
										<div class="mry-curtain"></div>
									</div>
								</div>

							</div>

							<div class="col-lg-8">

								<div class="mry-mb-100">
									<div class="mry-subtitle mry-mb-20 mry-fo">{{ $blog_details_data->created_at->format('m.d.Y') }}</div>
									<h3 class="mry-mb-40 mry-fo">{{ $blog_details_data->title }}</h3>
									<p class="mry-text mry-mb-40 mry-fo">{{ $blog_details_data->desc }}</p>

									<blockquote class="mry-fo">
										{{ $blog_details_data->quotes }} - {{ $blog_details_data->author_name }}
									</blockquote>
									
								</div>

							</div>
							<div class="col-lg-12">

								<div class="mry-main-title mry-title-center mry-p-0-40">
									<div class="mry-subtitle mry-mb-20 mry-fo">Popular</div>
									<h2 class="mry-fo">Popular Publications</h2>
									<div class="mry-arrows mry-fo">
										<div class="mry-sl-nav">
											<div class="mry-prev mry-button-blog-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
											<div class="mry-next mry-button-blog-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
										</div>
										<div class="mry-label mry-fo">Slider Navigation</div>
									</div>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="swiper-container mry-blog-slider">
									<div class="swiper-wrapper">
										<div class="swiper-slide">

											<div class="mry-card-item mry-fade-object">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">29.01.2021</div>
													<img src="{{ asset('frontend/img/dark/blog/1.jpg') }}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{url('blog-details')}}" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																	class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr">
													<h4 class="mry-mb-10 mry-fo"><a href="{{url('blog-details')}}">Omuli Museum of the Horse</a></h4>
													<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
													<div class="mry-fo"><a href="{{url('blog-details')}}" class="mry-link mry-default-link">Read more</a></div>
												</div>
											</div>

										</div>
										<div class="swiper-slide">

											<div class="mry-card-item mry-fade-object">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">29.01.2021</div>
													<img src="{{ asset('frontend/img/dark/blog/2.jpg') }}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{url('blog-details')}}" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																	class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr">
													<h4 class="mry-mb-10 mry-fo"><a href="{{url('blog-details')}}">Spirala Community Home</a></h4>
													<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
													<div class="mry-fo"><a href="{{url('blog-details')}}" class="mry-link mry-default-link">Read more</a></div>
												</div>
											</div>

										</div>
										<div class="swiper-slide">

											<div class="mry-card-item mry-fade-object">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">29.01.2021</div>
													<img src="{{ asset('frontend/img/dark/blog/3.jpg') }}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{url('blog-details')}}" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																	class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr">
													<h4 class="mry-mb-10 mry-fo"><a href="{{url('blog-details')}}">Tiny Kiwi Meditation Cabin</a></h4>
													<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
													<div class="mry-fo"><a href="{{url('blog-details')}}" class="mry-link mry-default-link">Read more</a></div>
												</div>
											</div>

										</div>
										<div class="swiper-slide">

											<div class="mry-card-item mry-fade-object">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<div class="mry-badge">29.01.2021</div>
													<img src="frontend/img/dark/blog/4.jpg" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="{{url('blog-details')}}" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																	class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr">
													<h4 class="mry-mb-10 mry-fo"><a href="{{url('blog-details')}}">Sleeping Pods on a Cliff</a></h4>
													<div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
													<div class="mry-fo"><a href="{{url('blog-details')}}" class="mry-link mry-default-link">Read more</a></div>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
				<!-- publication end -->

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