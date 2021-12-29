@extends('layouts.frontend_layout')

@section('content')
<div  class="transition-fade">
	<div class="mry-content-frame" id="scroll">
		<canvas class="mry-dots"></canvas>

<div class="swiper-container mry-main-slider">
	<div class="swiper-wrapper">
		@foreach($slider_data as $slider_data_item)
		@if($slider_data_item->status=='1')
		<div class="swiper-slide">
			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame mry-project-half">
					<div class="mry-cover-frame">
						<img class="mry-project-cover mry-position-right" src="{{url('upload/slider/'.$slider_data_item->bg_img)}}" alt="Project" data-swiper-parallax="500"
						data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay"></div>
						<div class="mry-loading-curtain"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container">
							<div class="mry-main-title" data-swiper-parallax-x="30%" data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="mry-subtitle mry-mb-20">{{ $slider_data_item->cat_name }}</div>
								<h1 class="mry-mb-30">{{ $slider_data_item->title  }}</h1>
								<h1 class="mry-mb-30">{{ $slider_data_item->title_starting  }}<br><span class="mry-border-text">{{ $slider_data_item->title_ending  }}</span></h1>
								<div class="mry-text mry-mb-30">{{ $slider_data_item->sub_title }}</div>
								<a class="mry-btn mry-default-link mry-anima-link" href="{{url('case-details/'.$slider_data_item->id)}}">Open Case</a>
								<a class="mry-btn-text mry-default-link mry-anima-link" href="{{url('works')}}">All Projects</a>
							</div>
					    </div>
				    </div>
			   </div>
		    </div>
		<!-- project end -->
	    </div>
	    @endif
	    @endforeach
		
	</div>
</div>

<div class="mry-slider-pagination-frame">
	<div class="mry-slider-pagination"></div>
</div>

<div class="mry-slider-nav-panel">
	<div class="container">
		<div class="mry-slider-progress-bar-frame">
			<div class="mry-slider-progress-bar">
				<div class="mry-progress"></div>
			</div>
		</div>
	</div>

	<div class="mry-slider-arrows">
		<div class="mry-label">Slider Navigation</div>
		<div class="mry-button-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
		<div class="mry-button-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
	</div>
</div>
</div>
</div>

@endsection