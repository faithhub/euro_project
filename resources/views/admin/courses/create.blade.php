@extends('admin.layouts.app')
@section('admin')

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Add New Course</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Add New Course</li>
				</ul>
			</div>
			<!-- Card END -->
			<div class="row">
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
                            <h4>Add New Course</h4>
						</div>  
						<div class="widget-inner">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Select Faculty</label>
                                          <select class="form-control" id="faculty" name="faculty" onchange="getDept(this)">
                                            <option value="">Open this select menu</option>
                                            @foreach ($faculties as $faculty)
                                            <option value="{{$faculty->id}}">{{$faculty->name}} ({{$faculty->code}})</option>                                                
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="" class="form-label">Select Department</label>
                                          <select id="department" class="">
                                            <option value="">Open this select menu</option>
                                            @foreach ($departments as $department)
                                            <option value="{{$department->id}}">{{$department->name}}</option>                                                
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Select Level</label>
                                          <select class="form-control">
                                            <option selected>Open this select menu</option>
                                            @foreach ($levels as $level)
                                            <option value="{{$level->level}}">{{$level->name}}</option>                                                
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Course Title</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Course Title">
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Course Code</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Course Code">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</main>`
	<script>
        function getDept(sel)
        {
            //alert(sel.value);
            $.ajax({
            type: "POST",
            url: "{{ url('admin/fetch-dept') }}",
            data: {"_token": "{{ csrf_token() }}","id":sel.value},
            success: function (response) {  
            console.log(response)              
            $("#department").attr('disabled', false);
            $("#department").find('option').remove();
            $.each(response, function(key, value)
            { 
            //console.log(value.name) 
                $("#department").append('<option value=' + value.id + '>' + value.name + '</option>');
            });
            }
        });
        }
	</script>
@endsection