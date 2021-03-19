@extends('admin.layouts.app')
@section('admin')

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Faculties</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Faculties</li>
				</ul>
			</div>
			<!-- Card END -->
			<div class="row">
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
                            <h4>Faculties</h4>
						</div>
						<div class="widget-inner">
							<div class="new-user-list">
								@if ($faculties != Null)
								<ul>
									@foreach ($faculties as $faculty)
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name"><b>{{$sn++}}. {{ $faculty->name }} ({{$faculty->code}}) </b></a><br>
											<span class="orders-info">Created On: {{ date('D, M j, Y \a\t g:ia', strtotime($faculty->created_at))}}</span>
										</span>
										<span class="orders-btn">
											<a href="{{ url('admin/view-faculty', $faculty->id) }}" class="btn button-sm green"><span class="fa fa-eye"></span></a>
											<a href="{{ url('admin/edit-faculty', $faculty->id) }}" class="btn button-sm green"><span class="fa fa-pencil"></span></a>
											<a href="{{ url('admin/delete-faculty', $faculty->id) }}" class="btn button-sm red"><span class="fa fa-trash"></span></a>
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
								<h4>Add New Faculty</h4>
							</div>
							<div class="widget-inner">
								<form class="edit-profile m-b30" method="POST" action="{{ route('admin_create_faculty') }}">
									@csrf
									<div class="">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Faculty Name</label>
											<div class="col-sm-9">
												<input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="School of Agriculture and Agricultural Technology">
												@error('name')
													<span class="invalid-feedback mb-2" role="alert" style="display: block">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>	
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Faculty Code</label>
											<div class="col-sm-9">
												<input class="form-control @error('code') is-invalid @enderror" type="text" name="code" value="{{ old('code') }}" placeholder="SAAT">
												@error('code')
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
								<h4>Edit</h4>
							</div>
							<div class="widget-inner">
								<form class="edit-profile m-b30" method="POST" action="{{ route('admin_create_faculty') }}">
									@csrf
									<div class="">
										<div class="form-group row">
											<div class="col-sm-12 ml-auto text-center">
												<h4><b>{{$get_faculty->name}}  ({{$get_faculty->code}})</b></h4>
												<input type="hidden" name="id" value="{{$get_faculty->id}}">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Faculty Name</label>
											<div class="col-sm-9">
												<input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$get_faculty->name}}">
												@error('name')
													<span class="invalid-feedback mb-2" role="alert" style="display: block">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
										</div>	
										<div class="form-group row">
											<label class="col-sm-3 col-form-label">Faculty Code</label>
											<div class="col-sm-9">
												<input class="form-control @error('code') is-invalid @enderror" type="text" name="code" value="{{$get_faculty->code}}">
												@error('code')
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