
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Add Slider</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/admin/sliders') }}">Sliders</a>
						</li>
						<li class="breadcrumb-item active">Add Slider</li>
					</ul>
				</div>
			</div>
		</div>


		<div id="filter_inputs" class="card filter-card">
			<div class="card-body pb-0">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-8 offset-1">
				@if(session('status'))
				<h6 class="alert alert-success">{{ session('status') }}</h6>
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-xl-8 d-flex offset-1">
				<div class="card flex-fill">
					<div class="card-header">
						<h5 class="card-title">Enter Slider Info</h5>
					</div>
					<div class="card-body">
						<form action="{{ url('admin/sliders/add-slider') }}" method="POST" enctype="multipart/form-data">

							@csrf

							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Title Starting</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="title_starting" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Title Ending</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="title_ending" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Sub Title</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="sub_title" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Category</label>
								<div class="col-lg-9">
									<select name="cat_name" class="form-control" required>
									<option value="">---Select Category---</option>
									@foreach($categories as $category)
									<option>{{ $category->cat_title }}</option>
									@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Background Image</label>
								<div class="col-lg-9">
									<div class="bg-img-holder"></div>
									<input type="file" class="form-control" name="bg_img" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Status</label>
								<div class="col-lg-9">
									<select name="status" class="form-control" required>
										<option value="">---Select Status---</option>
										<option value="1">Active</option>
										<option value="0">Inactive</option>
									</select>
								</div>
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection