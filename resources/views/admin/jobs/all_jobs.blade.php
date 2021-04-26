@extends('admin.layouts.app')
@section('admin')

<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title">Job Alerts</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="#">Home</a></li>
                <li class="active__list-item"><a href="#">Dashboard</a></li>
                <li>Job Alerts</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
<div class="row mt-5">
    <div class="col-lg-12">
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">Job Alerts</h3>
                <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content pb-0">
                <div class="manage-job-wrap">
                    <div class="table-responsive">
                        <table class="table" id="myTable" width="100%">
                            <thead>
                                <tr>
                                    <th>Employer Details</th>
                                    <th>Job Details</th>
                                    {{-- <th>Amount</th> --}}
                                    {{-- <th>Posted On</th>
                                    <th>Close On</th> --}}
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($jobs as $job)                                
                                <tr>
                                    <td>
                                        <div class="bread-details d-flex">
                                            <div class="bread-img flex-shrink-0">
                                                <a class="d-block">
                                                    <img src="{{$job->user->avatar != null ? asset('uploads/profile_pictures/'.$job->user->avatar) : asset('web/images/avatar.png') }}" alt="" style="max-width: auto; height: 100px;">
                                                </a>
                                            </div>
                                            <div class="manage-candidate-content">
                                                <h2 class="widget-title pb-2"><a class="color-text-2">{{$job->user->first_name}} {{$job->user->last_name}}</a></h2>
                                                <p class="font-size-15">
                                                    <span class="mr-2">{{$job->user->email}}</span><br>
                                                    <span class="mr-2">{{$job->user->mobile}}</span>
                                                </p>
                                            </div><!-- end manage-candidate-content -->
                                        </div>
                                    </td>
                                    <td>
                                        <div class="bread-details d-flex">
                                            <div class="bread-img flex-shrink-0">
                                                <a class="d-block">
                                                    <img src="{{ asset('uploads/jobs/'.$job->avatar) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="manage-candidate-content">
                                                <h2 class="widget-title pb-2"><a class="color-text-2">{{$job->job_title}}</a></h2>
                                                <p class="font-size-15">
                                                    <span class="mr-2"><i class="la la-meetup mr-1"></i>Category - {{$job->cat->name}}</span><br>
                                                    <span class="mr-2"><i class="la la-meetup mr-1"></i>Sub Category - {{$job->sub->name}}</span><br>
                                                    <span class="mr-2"><i class="la la-money-bill mr-1"></i>Amount - ₦{{$job->amount}}</span><br>
                                                    <span class="mr-2"><i class="la la-calendar-times mr-1"></i>Posted On - {{  date('D, M j, Y', strtotime($job->created_at))}}</span><br>
                                                    <span class="mr-2"><i class="la la-calendar-times mr-1"></i>Application Closes On - {{  date('D, M j, Y', strtotime($job->date_end))}}</span>
                                                </p>
                                            </div><!-- end manage-candidate-content -->
                                        </div>
                                    </td>
                                    {{-- <td>₦{{$job->amount}}</td> --}}
                                    {{-- <td>{{  date('D, M j, Y', strtotime($job->created_at))}}</td>
                                    <td>{{  date('D, M j, Y', strtotime($job->date_end))}}</td> --}}
                                    <th>
                                        @if ($job->status == 'Active')
                                        <span class="badge badge-success p-1">{{$job->status}}</span>
                                        @elseif ($job->status == 'Blocked')
                                        <span class="badge badge-danger p-1">{{$job->status}}</span> 
                                        @elseif ($job->status == 'Delivered')
                                        <span class="badge badge-success p-1">{{$job->status}}</span>
                                        @else
                                        <span class="badge badge-warning p-1">{{$job->status}}</span>                                            
                                        @endif

                                    </th>
                                    <td class="text-center">
                                        <div class="manage-candidate-wrap">
                                            <div class="bread-action pt-0">
                                                <ul class="info-list">
                                                    <li class="d-inline-block"><a href="{{ url('admin/view-job', $job->id) }}" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                    @if ($job->status != 'Delivered')
                                                    <li class="d-inline-block"><a href="#"><i class="la la-pencil" data-toggle="modal" data-target="#edit{{$job->id}}" data-toggle="tooltip" data-placement="top" data-original-title="Remove" data-toggle="tooltip" data-placement="top" title="Edit Status"></i></a></li>                                                        
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="edit{{$job->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Update Job Status</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <form method="POST" action="{{ url('admin/job-status-update') }}">
                                                @csrf                                                    
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="{{ $job->id }}">
                                                    <!-- Default unchecked -->
                                                    <input type="radio" class="" name="status" value="Active" {{$job->status == 'Active' ? 'checked' : '' }}>
                                                    <label class="radio-option">Active</label><br>
                                                    <input type="radio" class="" name="status" value="Pending" {{$job->status == 'Pending' ? 'checked' : '' }}>
                                                    <label class="radio-option">Pending</label><br>
                                                    <input type="radio" class="" name="status" value="Blocked" {{$job->status == 'Blocked' ? 'checked' : '' }}>
                                                    <label class="radio-option">Blocked</label>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end billing-content -->
        </div><!-- end billing-form-item -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
@endsection