
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Add Service</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('admin/services') }}">Services</a>
						</li>
						<li class="breadcrumb-item active">Add Service</li>
					</ul>
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
						<h5 class="card-title">Enter Service Info</h5>
					</div>
					<div class="card-body">
						<form action="{{ url('admin/services/add-service') }}" method="POST" enctype="multipart/form-data" id="form">

							@csrf

							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Service Title</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="service_title" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Service Desriptioin</label>
								<div class="col-lg-9">
									<textarea name="service_short_desc" class="form-control" rows="4"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Service Image</label>

								<div class="col-lg-9">
									<div class="img-holder"></div>
									<input type="file" class="form-control" name="service_img" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Service Gallery Image</label>
								<div class="col-lg-9">
									<div class="d-flex flex-wrap justify-content-start mb-2" id="container"></div>
									<input type="file" name="images[]" id="t_img" multiple class="form-control" onchange="image_select()">
									
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Category</label>
								<div class="col-lg-9">
									<select name="service_cat" class="form-control" required>
									<option value="">---Select Category---</option>
									@foreach($categories as $category)
									<option>{{ $category->cat_title }}</option>
									@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Status</label>
								<div class="col-lg-9">
									<select name="service_status" class="form-control" required>
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