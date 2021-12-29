
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Slider</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Slider</li>
					</ul>
				</div>
				<div class="col-auto">
					<a href="{{ url('/admin/sliders/add-slider') }}" class="btn btn-primary mr-1">
						<i class="fas fa-plus"></i>
					</a>
					<a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">
						<i class="fas fa-filter"></i>
					</a>
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
			<div class="col-sm-12">
				@if(session('status'))
				<h6 class="alert alert-success">{{ session('status') }}</h6>
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card card-table">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-center table-hover">
								<thead class="thead-light">
									<tr>
										<th>SL</th>
										<th>Title</th>
										<th>Subtitle</th>
										<th>Category</th>
										<th>Background Image</th>
										<th>Status</th>
										<th class="text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($slider as $key=>$item)
									<tr>
										<td>{{ $key+1 }}</td>
										<td>{{ $item->title_starting }} {{ $item->title_ending }}</td>
										<td>{{ substr($item->sub_title, 0,30) }}</td>
										<td>{{ $item->cat_name }}</td>
										<td>
											<img src="{{url('upload/slider/'.$item->bg_img)}}" class="img-fluid" style="width:110px; height: 70px;" alt="">
										</td>
										<td>
											@if($item->status=='1')
											<span class="badge badge-pill bg-success-light">Active</span>
											@else
											<span class="badge badge-pill bg-danger-light">Inactive</span>
											@endif
										</td>
										<td class="text-right">
											<a href="{{ url('admin/sliders/edit-slider/'.$item->id) }}" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
											<a href="{{ url('admin/sliders/delete-slider/'.$item->id) }}" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection