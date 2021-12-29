
@extends('layouts.admin_layout')

@section('content')

<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Services</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Services</li>
					</ul>
				</div>
				<div class="col-auto">
					<a href="{{ url('admin/services/add-service') }}" class="btn btn-primary mr-1">
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
										<th>Service Title</th>
										<th>Service Short Description</th>
										<th>Service Image</th>
										<th>Service Category</th>
										<th>Status</th>
										<th class="text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($service_list as $key=>$service_item)
									<tr>
										<td>{{ $key+1 }}</td>
										<td>{{ $service_item->service_title }}</td>
										<td >{{ substr($service_item->service_short_desc, 0,49) }}</td>
										<td>
											<img src="{{url('upload/service/'.$service_item->service_img)}}" class="img-fluid bg-light p-1" style="width:110px; height: 70px; border:1px solid #ddd;" alt="">
										</td>
										<td>{{ $service_item->service_cat }}</td>
										<td>
											@if($service_item->service_status=='1')
											<span class="badge badge-pill bg-success-light">Active</span>
											@else
											<span class="badge badge-pill bg-danger-light">Inactive</span>
											@endif
										</td>
										<td class="text-right">
											<a href="{{ url('admin/services/edit-service/'.$service_item->id) }}" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit</a>
											<a href="{{ url('admin/services/delete-service/'.$service_item->id) }}" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
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