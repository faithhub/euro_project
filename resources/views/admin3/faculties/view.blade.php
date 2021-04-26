@extends('admin.layouts.app')
@section('admin')

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Faculty</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Faculty</li>
				</ul>
			</div>
			<!-- Card END -->
			<div class="row">
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
                            <h4>Faculty of {{$faculty->name}} ({{$faculty->code}})</h4>
						</div>
						<div class="widget-inner">
							<div class="new-user-list">
								@if ($departments != Null)
								<ul>
									@foreach ($departments as $department)
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name"><b>{{$sn++}}. {{ $department->name }}</b></a><br>
											<span class="orders-info">Created On: {{ date('D, M j, Y \a\t g:ia', strtotime($department->created_at))}}</span>
										</span>
									</li>
                                    @endforeach
                                </ul>									
								@else
								<div class="text-center">									
									<h4>No department yet</h4>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection