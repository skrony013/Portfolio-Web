<!DOCTYPE html>
<html lang="zxx">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- color of address bar in mobile browser -->
	<meta name="theme-color" content="#28292C">
	<!-- favicon  -->
	<link rel="shortcut icon" href="{{url('upload/setting/'.$setting_data->site_favicon)}}" type="image/x-icon">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/plugins/bootstrap.min.css') }}">
	<!-- font awesome css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/plugins/font-awesome.min.css') }}">
	<!-- swiper css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/plugins/swiper.min.css') }}">
	<!-- fancybox css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/plugins/fancybox.min.css') }}">
	<!-- mapbox css -->
	<link href="{{ asset('frontend/css/plugins/mapbox-style.css') }}" rel='stylesheet'>
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/style-dark.css') }}">

	<title>{{ $setting_data->site_name }} || {{ $setting_data->site_tagline }}</title>

</head>

<body>

	<div class="mry-app">

		<!-- preloader -->
		<div class="mry-preloader mry-active">
			<div class="mry-preloader-content">
				<img class="mry-logo mry-mb-20" src="{{url('upload/setting/'.$setting_data->site_logo)}}" alt="Mireya">
				<div class="mry-loader-bar">
					<div class="mry-loader"></div>
				</div>
				<div class="mry-label">Please wait</div>
			</div>
		</div>
		<!-- preloader end -->

		<!-- cursor -->
		<div class="mry-magic-cursor">
			<div class="mry-ball">
				<div class="mry-loader">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 50 50"
					style="enable-background:new 0 0 50 50;" xml:space="preserve">
					<path d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
						<animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite" />
					</path>
				</svg>
			</div>
		</div>
	</div>
	<!-- cursor end -->

	<!-- top panel -->
	<div class="mry-top-panel">
		<div class="mry-logo-frame">
			<a href="{{url('/')}}" class="mry-default-link mry-anima-link">
				<img class="mry-logo" src="{{url('upload/setting/'.$setting_data->site_logo)}}" alt="Mireya">
			</a>
		</div>
		<div class="mry-menu-button-frame">
			<div class="mry-label">Menu</div>

			<div class="mry-menu-btn mry-magnetic-link">
				<div class="mry-burger mry-magnetic-object">
					<span></span>
				</div>
			</div>
		</div>
	</div>
	<!-- top panel end -->

	<!-- menu -->
	<div class="mry-menu">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-4">
					<nav id="mry-dynamic-menu">
						<ul>
							<li class="menu-item current-menu-item"><a href="{{url('/')}}" class="mry-default-link">Home</a>
							</li>
							<li class="menu-item"><a href="{{url('about')}}" class="mry-anima-link mry-default-link">About</a></li>
							<li class="menu-item"><a href="{{url('works')}}" class="mry-default-link">Works</a>
							</li>
							<li class="menu-item"><a href="{{url('contact')}}" class="mry-anima-link mry-default-link">Contact</a></li>
							<li class="menu-item"><a href="{{url('blog')}}" class="mry-default-link">Blog</a></li>
						</ul>
					</nav>

				</div>
				<div class="col-md-4">
					<div class="mry-info-box-frame">
						<div class="mry-info-box">
							<div class="mry-mb-20">
								<div class="mry-label mry-mb-5">Adress:</div>
								<div class="mry-text">{{ $setting_data->address }}</div>
							</div>
							<div class="mry-mb-20">
								<div class="mry-label mry-mb-5">Email:</div>
								<div class="mry-text">{{ $setting_data->email }}</div>
							</div>
							<div class="mry-mb-20">
								<div class="mry-label mry-mb-5">Phone:</div>
								<div class="mry-text">{{ $setting_data->phone }}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- menu end -->


	@yield('content')


</div>

<!-- jquery js -->
<script src="{{ asset('frontend/js/plugins/jquery.min.js') }}"></script>
<!-- tween max js -->
<script src="{{ asset('frontend/js/plugins/tween-max.min.js') }}"></script>
<!-- scroll magic js -->
<script src="{{ asset('frontend/js/plugins/scroll-magic.js') }}"></script>
<!-- scroll magic gsap plugin js -->
<script src="{{ asset('frontend/js/plugins/scroll-magic-gsap-plugin.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('frontend/js/plugins/swiper.min.js') }}"></script>
<!-- isotope js -->
<script src="{{ asset('frontend/js/plugins/isotope.min.js') }}"></script>
<!-- fancybox js -->
<script src="{{ asset('frontend/js/plugins/fancybox.min.js') }}"></script>	
<!-- mapbox js -->
<script src="{{ asset('frontend/js/plugins/mapbox.min.js') }}"></script>
<!-- smooth scrollbar js -->
<script src="{{ asset('frontend/js/plugins/smooth-scrollbar.min.js') }}"></script>
<!-- overscroll js -->
<script src="{{ asset('frontend/js/plugins/overscroll.min.js') }}"></script>
<!-- canvas js -->
<script src="{{ asset('frontend/js/plugins/canvas.js') }}"></script>
<!-- parsley js -->
<script src="{{ asset('frontend/js/plugins/parsley.min.js') }}"></script>	
<!-- main js -->
<script src="{{ asset('frontend/js/main.js') }}"></script>

</body>


</html>