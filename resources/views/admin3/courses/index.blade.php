@extends('admin.layouts.app')
@section('admin')
<style type="text/css">
	</style>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Courses</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Courses</li>
				</ul>
			</div>
			<!-- Card END -->
			<div class="row">
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
                            <h4>Courses</h4>
						</div>
						<div class="text-left m-3">
							<a href="{{ url('admin/create-course') }}" class="btn btn-primary">Add New</a>
						</div>
						<div class="widget-inner">
							@if ($courses->isEmpty())
							<div class="text-center">									
								<h4>No Courses Created yet</h4>
							</div>								
							@else
							<div class="row mb-3">
								<!-- Faculty -->
								<div class="col-md-3">
									<label>Faculty</label>
									<select class="form-control select2" onchange="filter_vitals()" name="currency" id="clinic_id">
										<option value="all" selected="">All</option>
										@foreach ($faculties as $faculty)
											<option value="{{$faculty->id}}">{{$faculty->name}} ({{$faculty->code}})</option>											
										@endforeach
									</select>
								</div>								
								<!-- Department -->
								<div class="col-md-3">
									<label>Department</label>
									<select class="form-control select2" onchange="filter_vitals()" name="currency" id="clinic_id">
										<option value="all" selected="">All</option>
										@foreach ($departments as $department)
											<option value="{{$department->id}}">{{$department->name}}</option>											
										@endforeach
									</select>
								</div>								
								<!-- Level -->
								<div class="col-md-2">
									<label>Level</label>
									<select class="form-control select2" onchange="filter_vitals()" name="currency" id="clinic_id">
										<option value="all" selected="">All</option>
										@foreach ($levels as $level)
											<option value="{{$level->level}}">{{$level->name}}</option>											
										@endforeach
									</select>
								</div>								
								<!-- Semster -->
								<div class="col-md-2">
									<label>Semester</label>
									<select class="form-control select2" onchange="filter_vitals()" name="currency" id="clinic_id">
										<option value="all" selected="">All</option>
										@foreach ($semesters as $smester)
											<option value="{{$smester->semester}}">{{$smester->name}}</option>											
										@endforeach
									</select>
								</div>
								<div class="col-md-2">
									<label for="currency">Search Course</label>
								   <input class="form-control" id="myInput" onkeyup="searchTable()" placeholder="Start Typing">
								</div>
							</div>
							<table class="table" id="myTable">
								<thead>
								  <tr>
									<th scope="col">#</th>
									<th scope="col">Course Name</th>
									<th scope="col">Course Code</th>
									<th scope="col">Level</th>
									<th scope="col">Semester</th>
									<th scope="col">Department</th>
									<th scope="col">Faculty</th>
									<th scope="col">Created On</th>
									<th scope="col">Action</th>
								  </tr>
								</thead>
								<tbody>						
									@foreach ($courses as $course)
									  <tr>
										<th scope="row">{{$sn++}}</th>
										<td class="text-capitalize"><b>{{ $course->course_title }}</b></td>
										<td><b>{{ $course->course_code }}</b></td>
										<td>{{ $course->level_get->name }}</td>
										<td>{{ $course->semester_get->name }}</td>
										@if (isset($course->dept->name))
											<td>Department of {{ $course->dept->name }}</td>											
										@else
											<td>Faculty Cousre</td>							
										@endif
										<td>Faculty of {{ $course->faculty->name }} ({{ $course->faculty->code }})</td>
										<td><span class="orders-info">Created On: {{ date('D, M j, Y \a\t g:ia', strtotime($course->created_at))}}</span></td>
										<td>
											<a href="{{ url('admin/edit-course', $course->id) }}" class="btn button-sm green"><span class="fa fa-pencil"></span></a>
											<a href="{{ url('admin/delete-course', $course->id) }}" class="btn button-sm red"><span class="fa fa-trash"></span></a>
										</td>
									  </tr>
									@endforeach
								</tbody>
							</table>							  
							<div id="pagination"></div>								
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	@include('admin.courses.script')
@endsection