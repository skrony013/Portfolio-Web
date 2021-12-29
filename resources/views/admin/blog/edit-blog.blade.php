
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Edit Blog</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('admin/blog/blogs') }}">Blogs</a>
						</li>
						<li class="breadcrumb-item active">Edit Blog</li>
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
						<h5 class="card-title">Enter Blog Info</h5>
					</div>
					<div class="card-body">
						<form action="{{ url('admin/blog/blogs/update-blog/'.$blog_data->id) }}" method="POST" enctype="multipart/form-data">
							
							@csrf
							@method('PUT')

							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Title</label>
								<div class="col-lg-9">
									<input type="text" value="{{ $blog_data->title }}" class="form-control" name="title" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Description</label>
								<div class="col-lg-9">
									<textarea name="desc" class="form-control" id="" cols="10" rows="7">{{ $blog_data->desc }}</textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Image</label>
								<div class="col-lg-9">
									<div class="blog_img_holder">
										<img src="{{url('upload/blog/'.$blog_data->img)}}" class="img-fluid mb-2" style="width:110px; height: 70px;" alt="">
									</div>
									
									<input type="file" class="form-control" name="img" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Quotes</label>
								<div class="col-lg-9">
									<textarea name="quotes" class="form-control" id="" cols="5" rows="5">{{ $blog_data->quotes }}</textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Author Name</label>
								<div class="col-lg-9">
									<input type="text" value="{{ $blog_data->author_name }}" class="form-control" name="author_name" required>
								</div>
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection