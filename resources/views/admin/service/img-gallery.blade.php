
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Add Image Gallery</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('admin/services') }}">Services</a>
						</li>
						<li class="breadcrumb-item active">Add Image Gallery</li>
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
						<h5 class="card-title">Enter Images</h5>
					</div>
					<div class="card-body">
						<form action="{{ url('admin/img-gallery') }}" method="POST" enctype="multipart/form-data" id="form">

							@csrf

							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Service Gallery Image</label>
								<div class="col-lg-9">
									{{-- <div class="d-flex flex-wrap justify-content-start mb-2" id="container"></div>
									<input type="file" name="filenames[]" id="image" multiple="" class="form-control" onchange="image_select()"> --}}
									<input type="file" name="filenames[]" multiple>
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