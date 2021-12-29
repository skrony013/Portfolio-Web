
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Add New Category</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('admin/services/categories') }}">Categories</a>
						</li>
						<li class="breadcrumb-item active">Add New Category</li>
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
						<h5 class="card-title">Add New Category</h5>
					</div>
					<div class="card-body">
						<form action="{{ url('admin/services/categories/add-category') }}" method="POST" enctype="multipart/form-data">

							@csrf

							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Category Title</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="cat_title" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Category Description</label>
								<div class="col-lg-9">
									<textarea name="cat_desc" class="form-control" id="" cols="10" rows="5"></textarea>
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