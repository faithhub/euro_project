@extends('admin.layouts.app')
@section('admin')

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Departments</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Departments</li>
				</ul>
			</div>
			<!-- Card END -->
			<div class="row">
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
                            <h4>Departments</h4>
						</div>
						<div class="widget-inner">
							<div class="new-user-list">
								@if ($departments != Null || $departments == "")
								<ul>
									@foreach ($departments as $department)
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name text-capitalize"><b>{{$sn++}}. {{ $department->name }} </b></a><br>
                                            <span><b>Faculty of {{ $department->faculty->name }} ({{ $department->faculty->code }})</b></span><br>
											<span class="orders-info">Created On: {{ date('D, M j, Y \a\t g:ia', strtotime($department->created_at))}}</span>
										</span>
										<span class="orders-btn">
											<a href="{{ url('admin/edit-department', $department->id) }}" class="btn button-sm green"><span class="fa fa-pencil"></span></a>
											<a href="{{ url('admin/delete-department', $department->id) }}" class="btn button-sm red"><span class="fa fa-trash"></span></a>
										</span>
									</li>
                                    @endforeach
                                </ul>									
								@else                                
								<div class="text-center">									
									<h4>No Faculty yet</h4>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 m-b30">
					@if ($mode != null && $mode == 'create')						
						<div class="widget-box">
							<div class="wc-title">
								<h4>Add New Department</h4>
							</div>
							<div class="widget-inner">
								<form class="edit-profile m-b30" method="POST" action="{{ route('admin_create_department') }}">
									@csrf
									<div class="">	
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Select Faculty</label>
											<div class="col-sm-9">
												<select class="form-control @error('class') is-invalid @enderror" name="faculty_id">
													<option value="">Select Faculty</option>
													@foreach ($faculties as $faculty)
														<option value="{{$faculty->id}}">{{$faculty->name}} ({{$faculty->code}})</option>													
													@endforeach
												</select>
												@error('faculty_id')
													<span class="invalid-feedback mb-2" role="alert" style="display: block">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Department Name</label>
											<div class="col-sm-9">
												<input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Department Name">
												@error('name')
													<span class="invalid-feedback mb-2" role="alert" style="display: block">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>								
										<div class="seperator"></div>
									</div>
									
									<div class="">
										<div class="">
											<div class="row">
												<div class="col-sm-2">
												</div>
												<div class="col-sm-7">
													<button type="submit" class="btn">Add New</button>
													<input type="reset" class="btn-secondry" value="Cancel">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					@elseif($mode != null && $mode == 'edit')						
						<div class="widget-box">
							<div class="wc-title">
								<h4 class="text-capitalize">Edit {{$get_department->name}}</h4>
							</div>
							<div class="widget-inner">
								<form class="edit-profile m-b30" method="POST" action="{{ route('admin_create_department') }}">
									@csrf
									<div class="">
										<div class="form-group row">
											<div class="col-sm-12 ml-auto text-center">
												<input type="hidden" name="id" value="{{$get_department->id}}">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Select Faculty</label>
											<div class="col-sm-9">
												<select class="form-control @error('class') is-invalid @enderror" name="faculty_id">
													<option value="">Select Faculty</option>
													@foreach ($faculties as $faculty)
														<option value="{{$faculty->id}}" {{$get_department->faculty_id == $faculty->id ? "selected" : ''}}>{{$faculty->name}} ({{$faculty->code}})</option>													
													@endforeach
												</select>
												@error('faculty_id')
													<span class="invalid-feedback mb-2" role="alert" style="display: block">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Department Name</label>
											<div class="col-sm-9">
												<input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$get_department->name}}">
												@error('name')
													<span class="invalid-feedback mb-2" role="alert" style="display: block">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>
										<div class="seperator"></div>
									</div>
									
									<div class="">
										<div class="">
											<div class="row">
												<div class="col-sm-2">
												</div>
												<div class="col-sm-7">
													<button type="submit" class="btn">Update</button>
													<input type="reset" class="btn-secondry" value="Cancel">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					@endif
				</div>
			</div>
		</div>
	</main>
@endsection