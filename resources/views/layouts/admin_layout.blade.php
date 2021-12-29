<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>{{ $setting_data->site_name }} || {{ $setting_data->site_tagline }}</title>

	<link rel="shortcut icon" href="{{url('upload/setting/'.$setting_data->site_favicon)}}">

	<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">

	<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('admin/flaticon/flaticon.css')}}">

	<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
<!--[if lt IE 9]>
			<script src="admin/js/html5shiv.min.js"></script>
			<script src="admin/js/respond.min.js"></script>
		<![endif]-->
		</head>
		<body>

			<div class="main-wrapper">

				<div class="header">

					<div class="header-left">
						<a href="{{url('admin/dashboard')}}" class="logo">
							<img src="{{url('upload/setting/'.$setting_data->admin_logo)}}" alt="Logo">
						</a>
						<a href="{{url('admin/dashboard')}}" class="logo logo-small">
							<img src="{{url('upload/setting/'.$setting_data->site_favicon)}}" alt="Logo" width="30" height="30">
						</a>
					</div>


					<a href="javascript:void(0);" id="toggle_btn">
						<i class="fas fa-bars"></i>
					</a>


					<div class="top-nav-search">
						<form>
							<input type="text" class="form-control" placeholder="Search here">
							<button class="btn" type="submit"><i class="fas fa-search"></i></button>
						</form>
					</div>


					<a class="mobile_btn" id="mobile_btn">
						<i class="fas fa-bars"></i>
					</a>


					<ul class="nav user-menu">

						<li class="nav-item dropdown has-arrow flag-nav">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
								<img src="{{ asset('admin/img/flags/us.png')}}" alt="" height="20"> <span>English</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javascript:void(0);" class="dropdown-item">
									<img src="{{ asset('admin/img/flags/us.png')}}" alt="" height="16"> English
								</a>
								<a href="javascript:void(0);" class="dropdown-item">
									<img src="{{ asset('admin/img/flags/fr.png')}}" alt="" height="16"> French
								</a>
								<a href="javascript:void(0);" class="dropdown-item">
									<img src="{{ asset('admin/img/flags/es.png')}}" alt="" height="16"> Spanish
								</a>
								<a href="javascript:void(0);" class="dropdown-item">
									<img src="{{ asset('admin/img/flags/de.png')}}" alt="" height="16"> German
								</a>
							</div>
						</li>


						<li class="nav-item dropdown">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<i data-feather="bell"></i> <span class="badge badge-pill">5</span>
							</a>
							<div class="dropdown-menu notifications">
								<div class="topnav-dropdown-header">
									<span class="notification-title">Notifications</span>
									<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
								</div>
								<div class="noti-content">
									<ul class="notification-list">
										<li class="notification-message">
											<a href="activities.html">
												<div class="media">
													<span class="avatar avatar-sm">
														<img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/img/profiles/avatar-02.jpg')}}">
													</span>
													<div class="media-body">
														<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
														<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="notification-message">
											<a href="activities.html">
												<div class="media">
													<span class="avatar avatar-sm">
														<img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/img/profiles/avatar-03.jpg')}}">
													</span>
													<div class="media-body">
														<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
														<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="notification-message">
											<a href="activities.html">
												<div class="media">
													<div class="avatar avatar-sm">
														<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
													</div>
													<div class="media-body">
														<p class="noti-details"><span class="noti-title">New user registered</span></p>
														<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="notification-message">
											<a href="activities.html">
												<div class="media">
													<span class="avatar avatar-sm">
														<img class="avatar-img rounded-circle" alt="" src="{{ asset('admin/img/profiles/avatar-04.jpg')}}">
													</span>
													<div class="media-body">
														<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
														<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="notification-message">
											<a href="activities.html">
												<div class="media">
													<div class="avatar avatar-sm">
														<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
													</div>
													<div class="media-body">
														<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
														<p class="noti-time"><span class="notification-time">2 days ago</span></p>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="topnav-dropdown-footer">
									<a href="activities.html">View all Notifications</a>
								</div>
							</div>
						</li>


						<li class="nav-item dropdown has-arrow main-drop">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img src="{{ asset('admin/img/profiles/avatar-01.jpg')}}" alt="">
									<span class="status online"></span>
								</span>
								<span>Admin</span>
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i> Profile</a>
								<a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i> Settings</a>
								<a class="dropdown-item" href="login.html"><i data-feather="log-out" class="mr-1"></i> Logout</a>
							</div>
						</li>

					</ul>

				</div>


				<div class="sidebar" id="sidebar">
					<div class="sidebar-inner slimscroll">
						<div id="sidebar-menu" class="sidebar-menu">
							<ul>
								<li class="menu-title"><span>Main</span></li>
								<li class="active">
									<a href="{{url('admin/dashboard')}}"><i data-feather="home"></i> <span>Dashboard</span></a>
								</li>

								<li>
									<a href="{{ url('admin/sliders') }}"><i data-feather="sliders"></i> <span>Sliders</span></a>
								</li>

								<li class="submenu">
									<a href="#"><i data-feather="tv"></i> <span> About</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="{{ url('admin/about/features') }}">About Features</a></li>
										<li><a href="{{ url('admin/about/team') }}"> Team</a></li>
										<li><a href="{{ url('admin/about/testimonial') }}"> Testimonial</a></li>
									</ul>
								</li>

								<li class="submenu">
									<a href="#"><i data-feather="list"></i> <span> Services </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="{{ url('admin/services/categories') }}"> Categories </a></li>
										<li><a href="{{ url('admin/services') }}"> All Services </a></li>
									</ul>
								</li>
								<li>
									<a href="{{ url('admin/contact') }}"><i data-feather="map"></i> <span>Contact</span></a>
								</li>
								<li>
									<a href="{{ url('admin/blog/blogs') }}"><i data-feather="layout"></i> <span>Blogs</span></a>
								</li>
								
								<li>
									<a href="{{ url('admin/calltoaction') }}"><i data-feather="anchor"></i> <span>Call to Action</span></a>
								</li>
								<li>
									<a href="{{ url('admin/setting') }}"><i data-feather="settings"></i> <span>Setting</span></a>
								</li>

							</ul>
						</div>
					</div>
				</div>


				@yield('content')

			</div>


			<script src="{{ asset('admin/js/jquery-3.5.1.min.js')}}"></script>

			<script src="{{ asset('admin/js/popper.min.js')}}"></script>
			<script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>

			<script src="{{ asset('admin/js/feather.min.js')}}"></script>

			<script src="{{ asset('admin/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

			<script src="{{ asset('admin/plugins/apexchart/apexcharts.min.js')}}"></script>
			<script src="{{ asset('admin/plugins/apexchart/chart-data.js')}}"></script>

			<script src="{{ asset('admin/js/script.js')}}"></script>
			<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
			<script type="text/javascript">
				$(document).on('click', 'ul li', function(){
					$(this).addClass('active').siblings().removeClass('active')
				})
			</script>

			{{-- Image Preview JS here --}}
			<script src="{{ asset('admin/js/img_preview.js')}}"></script>

			{{-- Multiple Image Preview Here --}}
			<script src="{{ asset('admin/js/multiple-img-preview.js')}}"></script>

			{{-- Ajax Gallery Image Delete Start From Here --}}
			<script>
				function deleteimage(id){
					if(confirm("Do you really want to delte this image?")){
						$.ajax({
							url:'/admin/services/update-service/'+id,
							type:'POST',
							data:{
								_token:$("input[name=_token]").val()
							},
							success:function(response){
								$("#img_id"+id).remove();
							}

						});
					}
				}
			</script>
			{{-- Ajax Gallery Image Delete Ended Here --}}
			
</body>
</html>