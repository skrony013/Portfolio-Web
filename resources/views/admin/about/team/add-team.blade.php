
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Add Team</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('admin/about/team') }}">Team</a>
						</li>
						<li class="breadcrumb-item active">Add Team</li>
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
						<form action="{{ url('admin/about/team/add-team') }}" method="POST" enctype="multipart/form-data">

							@csrf
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Name</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="name" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Designation</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="designation" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Profile Image</label>
								<div class="col-lg-9">
									<div class="team_img_holder"></div>
									<input type="file" class="form-control" name="profile_img" required>
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