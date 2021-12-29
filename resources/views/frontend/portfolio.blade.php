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
					<div class="mry-subtitle mry-mb-20 mry-fo">Portfolio</div>
					<h1 class="mry-mb-20 mry-fo">Explore Amazing<br><span class="mry-border-text">Portfolio</span><span class="mry-animation-el"></span></h1>
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

		<!-- portfolio -->
		<div class="mry-portfolio mry-p-100-100">
			<div class="container">

				<div class="mry-filter mry-mb-40 mry-fo">
					<a href="#" data-filter="*" class="mry-card-category mry-default-link mry-current">All Categories</a>

					@foreach($cat_data as $cat_item)
					<a href="#" data-filter=".{{ $cat_item->cat_title }}" class="mry-card-category mry-default-link">{{ $cat_item->cat_title }}</a>
					@endforeach
				</div>

				<div class="mry-portfolio-frame">
					<div class="mry-masonry-grid mry-3-col">
						<div class="mry-grid-sizer"></div>

						@foreach($service_data as $key=>$service_item)
						@if($loop->odd)
						<div class="mry-masonry-grid-item mry-masonry-grid-item-33 mry-masonry-grid-item-h-x-2 {{ $service_item->service_cat }}">

							<div class="mry-card-item">
								<div class="mry-card-cover-frame mry-mb-20 mry-fo">
									<div class="mry-badge">{{ $service_item->service_cat }}</div>
									<img src="{{ url('upload/service/'.$service_item->service_img) }}" alt="project" >
									<div class="mry-cover-overlay"></div>
									<div class="mry-hover-links">
										<a href="{{ url('upload/service/'.$service_item->service_img) }}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
											class="fas fa-expand"></i></span></a>
											<a href="{{url('works-details/'.$service_item->id)}}" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
										</div>
									</div>
									<div class="mry-item-descr mry-fo">
										<h4 class="mry-mb-10"><a href="{{url('works-details/'.$service_item->id)}}">{{ $service_item->service_title }}</a></h4>
										<div class="mry-text" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical; text-align:justify;">
											{{ $service_item->service_short_desc }}
										</div>
									</div>
								</div>

							</div>
						@else
							<div class="mry-masonry-grid-item mry-masonry-grid-item-33 {{ $service_item->service_cat }}">

								<div class="mry-card-item">
									<div class="mry-card-cover-frame mry-mb-20 mry-fo">
										<div class="mry-badge">{{ $service_item->service_cat }}</div>
										<div class="mry-cover-overlay"></div>
										<img src="{{ url('upload/service/'.$service_item->service_img) }}" alt="project" >
										<div class="mry-hover-links">
											<a href="{{ url('upload/service/'.$service_item->service_img) }}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
												class="fas fa-expand"></i></span></a>
												<a href="{{url('works-details/'.$service_item->id)}}" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></a>
											</div>
										</div>
										<div class="mry-item-descr mry-fo">
											<h4 class="mry-mb-10"><a href="{{url('works-details/'.$service_item->id)}}">{{ $service_item->service_title }}</a></h4>
											<div class="mry-text" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical; text-align:justify;">{{ $service_item->service_short_desc }}</div>
										</div>
									</div>

								</div>
						@endif
						@endforeach
							</div>
						</div>
					</div>
				</div>
				<!-- portfolio end -->

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