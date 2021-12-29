<!-- footer -->
<footer class="mry-footer">
	<div class="container">
		<div class="mry-main-title mry-title-center mry-p-0-100">
			<div class="mry-subtitle mry-mb-20 mry-fo">Call to action</div>
			<h2 class="mry-h1 mry-mb-20 mry-fo">Do you have <span class="mry-border-text">{{ $call_to_ation_data->call_to_action_title }}</span></h2>
			<div class="mry-text mry-mb-30  mry-fo">{{ $call_to_ation_data->call_to_action_desc }}</div>
			<div class="mry-fo">
				<a href="{{url('contact')}}" class="mry-anima-link mry-btn mry-btn-color mry-default-link">Let's discuss</a>
				<a href="{{url('works')}}" class="mry-anima-link  mry-btn-text mry-default-link">Portfolio</a>
			</div>
		</div>
	</div>
	<div class="mry-footer-copy">
		<div class="container">
			<div>{{ $setting_data->site_name }} © 2021. All Rights Reserved.</div>
			<ul class="mry-social">
				<li><a href="{{$setting_data->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="{{$setting_data->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
				<li><a href="{{$setting_data->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
				<li><a href="{{$setting_data->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
			</ul>
			<div>Developed By: <a href="https://themeforest.net/user/ultimatewebsolutions/" class="mry-default-link" target="_blank">{{ $setting_data->site_name }}</a></div>
		</div>
	</div>
</footer>

<!-- footer end -->