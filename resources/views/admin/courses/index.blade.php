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
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
                            <h4>Faculties</h4>
						</div>
						<div class="text-left m-3">
							<a href="{{ url('admin/create-course') }}" class="btn btn-primary">Add New</a>
						</div>
						<div class="widget-inner">
							<div class="row mb-3">
								<div class="col-lg-1">
									<h5>Filter:</h5>							
								</div>
								<div class="col-lg-5">
									<select class="form-control">
										<option>All</option>
									</select>									
								</div>
								<div class="col-lg-3">
									<select class="form-control">
										<option>All</option>
									</select>
								</div>
								<div class="col-lg-3">
									<input class="form-control" id="myInput" onkeyup="searchTable()" placeholder="Search Student">
								</div>
							</div>
							<table class="table" id="showTable">
								<thead>
								  <tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								  </tr>
								  <tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								  </tr>
								</tbody>
							  </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>`
	<script>
		function searchTable() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("showTable");
		tr = table.getElementsByTagName("tr");
		th = table.getElementsByTagName("th");
		var tdarray = [];
		var txtValue = [];
		for (i = 0; i < tr.length; i++) {
		for ( j = 0; j < th.length; j++) {
			tdarray[j] = tr[i].getElementsByTagName("td")[j];
		}
		if (tdarray) {
			for (var x = 0; x < tdarray.length; x++) {
			if (typeof tdarray[x] !== "undefined") {
				txtValue[x] = tdarray[x].textContent || tdarray[x].innerText;
				if (txtValue[x].toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
			}
		}
		}
		}
	</script>
@endsection