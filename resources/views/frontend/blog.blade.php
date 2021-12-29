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
						<div class="mry-subtitle mry-mb-20 mry-fo">Blog</div>
						<h1 class="mry-mb-20 mry-fo">Explore Our Amazing<br><span class="mry-border-text">Newsletter</span><span class="mry-animation-el"></span></h1>
						{{-- <div class="mry-text mry-fo">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div> --}}
						<div class="mry-scroll-hint-frame">
							<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
								<span class="mry-magnetic-object"></span>
							</a>
							<div class="mry-label mry-fo">Scroll Down</div>
						</div>
					</div>
				</div>
			</div>

			<!-- blog -->
			<div class="mry-portfolio mry-p-100-100" id="mry-anchor">
				<div class="container">

					<div class="mry-portfolio-frame">
						<div class="mry-masonry-grid mry-3-col">
							<div class="mry-grid-sizer"></div>

							@foreach($blog_data as $key=> $blog_data_item)
							<div class="mry-masonry-grid-item mry-masonry-grid-item-33 interior">

								<div class="mry-card-item mry-fo">
									<div class="mry-card-cover-frame mry-mb-20">
										<div class="mry-badge">{{ $blog_data_item->created_at->format('m.d.Y') }}</div>
										<img src="{{ url('upload/blog/'.$blog_data_item->img) }}" alt="project" >
										<div class="mry-cover-overlay"></div>
										<div class="mry-hover-links">
											<a href="{{url('blog-details/'.$blog_data_item->id)}}" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
														class="fas fa-arrow-right"></i></span></a>
										</div>
									</div>
									<div class="mry-item-descr">
										<h4 class="mry-mb-10 mry-fo" style="min-height: 55px;"><a href="{{url('blog-details/'.$blog_data_item->id)}}">{{ $blog_data_item->title }}</a></h4>
										<div class="mry-text mry-mb-10 mry-fo" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">{{ $blog_data_item->desc }}</div>
										<div class="mry-fo"><a href="{{url('blog-details')}}" class="mry-link mry-default-link">Read more</a></div>
									</div>
								</div>

							</div>
							@endforeach
							
						</div>
					</div>

					<ul class="mry-pagination mry-fo">
						<li class="mry-active"><a href="#." class="mry-default-link"><span>1</span></a></li>
						<li><a href="#." class="mry-default-link"><span>2</span></a></li>
						<li><a href="#." class="mry-default-link"><span>3</span></a></li>
						<li><a href="#." class="mry-default-link"><span>4</span></a></li>
						<li><a href="#." class="mry-default-link"><span>5</span></a></li>
					</ul>

				</div>
			</div>
			<!-- blog end -->

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