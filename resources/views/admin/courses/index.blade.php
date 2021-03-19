@extends('admin.layouts.app')
@section('admin')

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Coures</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Coures</li>
				</ul>
			</div>
			<!-- Card END -->
			<div class="row">
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
                            <h4>Coures</h4>
						</div>
						<div class="widget-inner">
                            <table></table>
							{{-- <div class="new-user-list">
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
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection