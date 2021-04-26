@extends('admin.layouts.app')
@section('admin')
<style>
	#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
  border-radius: 10px;
}
</style>
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
				@if ($mode != null && $mode == 'index')
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
                            <h4>Faculties</h4>
						</div>							
						<div class="text-left m-2">
							<a href="{{ url('admin/create-faculty') }}" class="btn btn-primary">Add New</a>
						</div>
						<div class="widget-inner mt-0 pt-0">		
							@if ($faculties->isEmpty())
							<div class="text-center">									
								<h4>No Faculty yet</h4>
							</div>								
							@else
								<input type="text" id="myInput" onkeyup="searchTable()" placeholder="Search for Faculty name..">							
								<table class="table paginated table-hover" id="showTable">
									<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Name</th>
										<th scope="col">Code</th>
										<th scope="col">Created On</th>
										<th scope="col">Action</th>
									</tr>
									</thead>
									<tbody>									
										@foreach ($faculties as $faculty)
											<tr>
												<th scope="row">{{$sn++}}</th>
												<td class="text-capitalize"><b><a href="{{ url('admin/view-faculty', $faculty->id) }}">{{ $faculty->name }}</a></b></td>
												<td>{{$faculty->code}}</td>
												<td><span class="orders-info">Created On: {{ date('D, M j, Y \a\t g:ia', strtotime($faculty->created_at))}}</span></td>
												<td>
													<a href="{{ url('admin/view-faculty', $faculty->id) }}" class="btn button-sm green"><span class="fa fa-eye"></span></a>
													<a href="{{ url('admin/edit-faculty', $faculty->id) }}" class="btn button-sm green"><span class="fa fa-pencil"></span></a>
													<a href="{{ url('admin/delete-faculty', $faculty->id) }}" class="btn button-sm red"><span class="fa fa-trash"></span></a>
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
				@endif
				<div class="col-lg-12 m-b30">
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
	<script src="https://pagination.js.org/dist/2.1.4/pagination.min.js"></script>
	<script>
		let rows = []
		$('table tbody tr').each(function(i, row) {
			return rows.push(row);
		});

		$('#pagination').pagination({
			dataSource: rows,
			pageSize: 10,
			callback: function(data, pagination) {
				$('tbody').html(data);
			}
		})
		function searchTable() {			
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("showTable");
            tr = table.getElementsByTagName("tr");
			// Loop through all table rows, and hide those who don't match the search query
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[0];
				if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
				}
			}
		}
	</script>
@endsection