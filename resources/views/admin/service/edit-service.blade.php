
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Edit Service</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('admin/services') }}">Services</a>
						</li>
						<li class="breadcrumb-item active">Edit Service</li>
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
						<h5 class="card-title">Edit Service Info</h5>
					</div>
					<div class="card-body">
						<form action="{{ url('admin/services/update-service/'.$service_data->id) }}" method="POST" enctype="multipart/form-data">

							@csrf
							@method('put')

							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Service Title</label>
								<div class="col-lg-9">
									<input type="text" value="{{ $service_data->service_title }}" class="form-control" name="service_title" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Short Desriptioin</label>
								<div class="col-lg-9">
									<textarea name="service_short_desc" class="form-control" rows="4">{{ $service_data->service_short_desc }}
									</textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Service Image</label>
								<div class="col-lg-9">
									<div class="img-holder">
										<img src="{{url('upload/service/'.$service_data->service_img)}}" class="img-fluid mb-2 bg-light" style="width:110px; height: 70px;border:1px solid #ddd;" alt="">
									</div>
									<input type="file" class="form-control" name="service_img">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Service Gallery Image</label>
								<div class="col-lg-9">
									
									@if(count($service_data->images)>0)
										<div class="row" style="padding:0 12px;">
											@foreach($service_data->images as $img)
											<div class="col-lg-3 mb-1 p-0 p-1 multi-img-container" id="img_id{{ $img->id }}">
												<img src="{{ url('upload/gallery/'.$img->image) }}" class="img-responsive" style="height:70px; width:100%; border:1px solid #ddd; background:#ddd;" alt="" srcset="">
												<span class="multi-img-cross-btn" onclick="deleteimage({{ $img->id }})">&times;</span>
											</div>
											@endforeach
										</div>
									@endif
									<div class="row" style="padding:0 12px;" id="container"></div>

									<input type="file" name="images[]" id="t_img" multiple class="form-control" onchange="image_select()">
									
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Category</label>
								<div class="col-lg-9">
									<select name="service_cat" class="form-control" required>
										@foreach($categories as $category)
										<option>{{ $category->cat_title }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Status</label>
								<div class="col-lg-9">
									<select name="service_status" id="service_status" class="form-control" required>
										<option value="1"{{ $service_data->service_status =="1" ? 'selected' : '' }}>Active</option>
										<option value="0"{{ $service_data->service_status =="0" ? 'selected' : '' }}>Inactive</option>
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