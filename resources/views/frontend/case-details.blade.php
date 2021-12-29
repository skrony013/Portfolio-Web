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
					<div class="mry-subtitle mry-mb-20 mry-fo">Works</div>
					<h1 class="mry-mb-20 mry-fo">Case Details</h1>
					<div class="mry-text mry-fo">Catgory: {{ $case_details_data->cat_name }}</div>
					<div class="mry-scroll-hint-frame">
						<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
							<span class="mry-magnetic-object"></span>
						</a>
						<div class="mry-label mry-fo">Scroll Down</div>
					</div>
				</div>
			</div>
		</div>

		<!-- project -->
		<div class="mry-about mry-p-100-100">
			<div class="container">
				<div class="row justify-content-center">

					<div class="col-lg-8">

						<div class="mry-mb-100 mry-text-center">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">01</div>
								<div class="mry-subtitle">Goal</div>
							</div>
							<h3 class="mry-mb-40 mry-fo">{{ $case_details_data->title_starting }}</h3>
							<p class="text-justify mry-text mry-fo">{{ $case_details_data->sub_title }}</p>
						</div>

					</div>
					<div class="col-lg-12">

						<div class="mry-main-title mry-title-center mry-p-0-40">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">02</div>
								<div class="mry-subtitle">Project</div>
							</div>
							<h2 class="mry-fo">Project gallery</h2>
						</div>

					</div>
					
											<div class="col-lg-8">

												<div class=" mry-text-center">
													<div class="mry-numbering mry-fo">
														<div class="mry-border-text">03</div>
														<div class="mry-subtitle">More projects</div>
													</div>
													
													
													</div>

												</div>
												<div class="col-lg-12">

													<div class="mry-main-title mry-title-center mry-p-0-40">
														<h2 class="mry-fo">Similar projects</h2>
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

													<div class="mry-card-item">
																	<div class="mry-card-cover-frame mry-mb-20 mry-fo">
																<div class="mry-badge">interior</div>
																<img src="{{ asset('frontend/img/dark/projects/prjct-1/1.jpg') }}" alt="project" >
																	<div class="mry-cover-overlay"></div>
																	<div class="mry-hover-links">
																			<a href="{{ asset('frontend/img/dark/projects/prjct-1/fs/1.jpg') }}" data-fancybox="works-slider" class="mry-zoom mry-magnetic-link"><span
																				class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
																				<a href="project.html" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																					class="fas fa-arrow-right"></i></span></a>
																				</div>
																			</div>
																			<div class="mry-item-descr mry-fo">
																				<h4 class="mry-mb-10"><a href="project.html">Little Cottage</a></h4>
																				<div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
																			</div>
															</div>

															</div>
																<div class="swiper-slide">
															<div class="mry-card-item">
																			<div class="mry-card-cover-frame mry-mb-20 mry-fo">
																				<div class="mry-badge">interior</div>
																				<img src="{{ asset('frontend/img/dark/projects/prjct-2/1.jpg') }}" alt="project" >
																				<div class="mry-cover-overlay"></div>
																				<div class="mry-hover-links">
																					<a href="frontend/img/dark/projects/prjct-2/fs/1.jpg" data-fancybox="works-slider" class="mry-zoom mry-magnetic-link"><span
																						class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
																						<a href="project.html" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																							class="fas fa-arrow-right"></i></span></a>
																						</div>
																					</div>
																					<div class="mry-item-descr mry-fo">
																						<h4 class="mry-mb-10"><a href="project.html">Compact House</a></h4>
																						<div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
																					</div>
																				</div>

																			</div>
																			<div class="swiper-slide">

																	<div class="mry-card-item">
																					<div class="mry-card-cover-frame mry-mb-20 mry-fo">
																<div class="mry-badge">interior</div>
																<img src="{{ asset('frontend/img/dark/projects/prjct-3/1.jpg') }}" alt="project" >
																<div class="mry-cover-overlay"></div>
																						<div class="mry-hover-links">
																							<a href="frontend/img/dark/projects/prjct-3/fs/1.jpg" data-fancybox="works-slider" class="mry-zoom mry-magnetic-link"><span
																								class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
																								<a href="project.html" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																									class="fas fa-arrow-right"></i></span></a>
																								</div>
																							</div>
																							<div class="mry-item-descr mry-fo">
																								<h4 class="mry-mb-10"><a href="project.html">Greenwell Yards</a></h4>
																								<div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
																							</div>
																						</div>

																					</div>
																					<div class="swiper-slide">

																						<div class="mry-card-item">
																							<div class="mry-card-cover-frame mry-mb-20 mry-fo">
																								<div class="mry-badge">interior</div>
																								<img src="frontend/img/dark/projects/prjct-4/1.jpg" alt="project" >
																								<div class="mry-cover-overlay"></div>
																								<div class="mry-hover-links">
																									<a href="frontend/img/dark/projects/prjct-4/fs/1.jpg" data-fancybox="works-slider" class="mry-zoom mry-magnetic-link"><span
																										class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
																										<a href="project.html" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																											class="fas fa-arrow-right"></i></span></a>
																										</div>
																									</div>
																									<div class="mry-item-descr mry-fo">
																										<h4 class="mry-mb-10"><a href="project.html">Flat House</a></h4>
																										<div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
																									</div>
																								</div>

																							</div>
																						</div>
																					</div>

																				</div>

																			</div>
																		</div>
																	</div>
																	<!-- project end -->

																	<!-- footer -->
																	@include('includes/footer')
																	<!-- footer end -->

																	<div class="mry-head-bg mry-head-bottom">
															<img src="{{ asset('frontend/img/dark/projects/prjct-2/1.jpg') }}" alt="background">
																<div class="mry-bg-overlay"></div>
																	</div>

																</div>
															</div>

															@endsection