@extends('admin.layouts.app')
@section('admin')
<style>
  /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
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
                        <!-- Rounded switch -->
                        <form action="{{ route('admin_create_course') }}" method="POST">
                          @csrf
                          <h4>Faculty course</h4>
                          <label class="switch">
                            <input type="checkbox" name="check" {{ old('check') == "on" ? 'checked' : '' }} onclick="test()" id="toggle">
                            <span class="slider round pb-4"></span>
                          </label>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Select Faculty</label>
                              <select class="form-control" id="faculty" name="faculty_id" onchange="getDept(this)">
                                <option value="">Open this select menu</option>
                                @foreach ($faculties as $faculty)
                                <option class="text-capitalize" {{ old('faculty_id') == $faculty->id ? "selected" : "" }} value="{{$faculty->id}}">{{$faculty->name}} ({{$faculty->code}})</option>                                                
                                @endforeach
                              </select>
                              @error('faculty_id')
                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            <div class="mb-3" id="dept">
                              <label for="" class="form-label">Select Department</label>
                              <select id="department" name="department_id" class="form-control">
                                <option value="">Open this select menu</option>
                                @foreach ($departments as $department)
                                <option class="text-capitalize" {{ old('department_id') == $department->id ? "selected" : "" }} value="{{$department->id}}">{{$department->name}}</option>                                                
                                @endforeach
                              </select>
                              @error('department_id')
                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Select Level</label>
                              <select class="form-control" name="level">
                                <option value="">Open this select menu</option>
                                @foreach ($levels as $level)
                                <option class="text-capitalize" {{ old('level') == $level->level ? "selected" : "" }} value="{{$level->level}}">{{$level->name}}</option>                                                
                                @endforeach
                              </select>
                              @error('level')
                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Select Semester</label>
                              <select class="form-control" name="semester">
                                <option value="">Open this select menu</option>
                                @foreach ($semesters as $semester)
                                <option class="text-capitalize" {{ old('semester') == $semester->semester ? "selected" : "" }} value="{{$semester->semester}}">{{$semester->name}}</option>                                                
                                @endforeach
                              </select>
                              @error('semester')
                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Course Title</label>
                              <input type="type" name="course_title" class="form-control" id="exampleInputPassword1" placeholder="Course Title">
                              @error('course_title')
                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Course Code</label>
                              <input type="text" name="course_code" class="form-control" id="exampleInputPassword1" placeholder="Course Code">
                              @error('course_code')
                                <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
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
    
    if (document.getElementById('toggle').checked) {
      document.getElementById("dept").style.display = 'none';
      } else {
      document.getElementById("dept").style.display = 'block';
      }
    function test(){
       if (document.getElementById('toggle').checked) {
        document.getElementById("dept").style.display = 'none';
      } else {
        document.getElementById("dept").style.display = 'block';
      }
    }
        
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
                  $("#department").append('<option class="text-capitalize" value=' + value.id + '>' + value.name + '</option>');
              });
            }
        });
        }
	</script>
@endsection