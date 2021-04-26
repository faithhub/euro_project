@extends('admin.layouts.app')
@section('admin')
<div class="row">
  <div class="col-lg-12">
    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
      <div class="section-heading">
        <h2 class="sec__title">Job Details</h2>
      </div><!-- end section-heading -->
      <ul class="list-items d-flex align-items-center">
        <li class="active__list-item"><a href="#">Home</a></li>
        <li class="active__list-item"><a href="#">Dashboard</a></li>
        <li>Job Details</li>
      </ul>
    </div><!-- end breadcrumb-content -->
  </div><!-- end col-lg-12 -->
</div><!-- end row -->

<div class="row mt-5">
  <div class="col-lg-12">
    <div class="billing-form-item">
      <div class="billing-title-wrap">
        <h3 class="widget-title pb-0">Job Details</h3>
        <div class="title-shape margin-top-10px"></div>
      </div><!-- billing-title-wrap -->
      <div class="billing-content pb-0">
        <div class="manage-job-wrap">
          <div class="row mb-5">
            <div class="col-lg-12 mb-2">
              <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                
                <div class="bread-details d-flex">
                  <div class="bread-img flex-shrink-0">
                    <img src="{{ asset('uploads/profile_pictures/'.$job[0]['user']['avatar']) }}" alt="">
                  </div>
                  <div class="job-detail-content">
                    <h2 class="widget-title font-size-30 text-black pb-1">{{$job[0]['user']['first_name']}} {{$job[0]['user']['last_name']}}</h2>
                    <p class="font-size-16 mt-1 text-black">
                      <span class="mr-2 mb-2 d-inline-block">{{$job[0]['user']['email']}}</span>
                      <br>
                      <span class="mr-2 mb-2 d-inline-block">{{$job[0]['user']['mobile']}}</span>
                    </p>
                  </div><!-- end job-detail-content -->
                </div><!-- end bread-details -->
                <div class="bread-details d-flex">
                  <div class="bread-img flex-shrink-0">
                    <img src="{{ asset('uploads/jobs/'.$job[0]['avatar']) }}" alt="">
                  </div>
                  <div class="job-detail-content">
                    <h2 class="widget-title font-size-30 text-black pb-1">{{$job[0]['job_title']}}</h2>
                    <p class="font-size-16 mt-1 text-black">
                      <span class="mr-2 mb-2 d-inline-block"><i class="la la-briefcase mr-1"></i>Category: {{$job[0]['cat']['name']}}</span>
                      <br>
                      <span class="mr-2 mb-2 d-inline-block"><i class="la la-briefcase mr-1"></i>Sub Category: {{$job[0]['sub']['name']}}</span>
                    </p>
                  </div><!-- end job-detail-content -->
                </div><!-- end bread-details -->
                <div class="bread-action">
                  <ul class="listing-info">
                  </ul>
                </div><!-- end bread-action -->
              </div><!-- end breadcrumb-content -->
            </div>
            <div class="col-lg-7">
              <div class="single-job-wrap">
                <div class="job-description padding-bottom-35px">
                  <h2 class="widget-title">Description:</h2>
                  <div class="title-shape"></div>
                  <p class="mt-3 mb-3">
                    {{$job[0]['job_description']}}
                  </p>
                </div><!-- end job-description -->
              </div><!-- end single-job-wrap -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-5">
              <div class="sidebar mt-0">
                <div class="sidebar-widget">
                  <div class="billing-form-item mb-0">
                    <div class="billing-title-wrap">
                      <h3 class="widget-title">Job Details</h3>
                      <div class="title-shape"></div>
                    </div><!-- billing-title-wrap -->
                    <div class="billing-content">
                      <div class="info-list static-info">
                        <ul>
                          <li class="mb-3 d-flex align-items-center">
                            <p><i class="la la-dashboard"></i> <span class="color-text-2 font-weight-medium mr-1">Job Status:</span>
                              @if ($job[0]['status'] == 'Approved' || $job[0]['status'] == 'Delivered')
                                <span class="btn btn-sm btn-success"> {{$job[0]['status']}}</span>                                  
                              @elseif ($job[0]['status'] == 'Blocked')
                                <span class="btn btn-sm btn-danger"> {{$job[0]['status']}}</span>
                              @elseif ($job[0]['status'] == 'Pending')
                                <span class="btn btn-sm btn-warning"> {{$job[0]['status']}}</span>                                  
                              @endif
                            </p>
                          </li>
                          <li class="mb-3 d-flex align-items-center">
                            <p><i class="la la-tint"></i> <span class="color-text-2 font-weight-medium mr-1">Job Title:</span> {{$job[0]['job_title']}}</p>
                          </li>
                          <li class="mb-3 d-flex align-items-center">
                            <p><i class="la la-briefcase"></i> <span class="color-text-2 font-weight-medium mr-1">Job Category:</span> {{$job[0]['cat']['name']}}</p>
                          </li>
                          <li class="mb-3 d-flex align-items-center">
                            <p><i class="la la-briefcase"></i> <span class="color-text-2 font-weight-medium mr-1">Job Sub Category:</span> {{$job[0]['sub']['name']}}</p>
                          </li>
                          <li class="mb-3 d-flex align-items-center">
                            <p><i class="la la-map-marker"></i> <span class="color-text-2 font-weight-medium mr-1">City:</span> {{$job[0]['city']}}</p>
                          </li>
                          <li class="mb-3 d-flex align-items-center">
                            <p><i class="la la-map-marker"></i> <span class="color-text-2 font-weight-medium mr-1">Location:</span> {{$job[0]['address']}}</p>
                          </li>
                          <li class="mb-3 d-flex align-items-center">
                            <p><i class="la la-phone"></i> <span class="color-text-2 font-weight-medium mr-1">Mobile:</span> {{$job[0]['mobile']}}</p>
                          </li>
                          <li class="mb-3 d-flex align-items-center">
                            <p><i class="la la-users"></i> <span class="color-text-2 font-weight-medium mr-1">Offered Amount Per Hour:</span> <b class="text-success">₦{{$job[0]['amount']}}</b></p>
                          </li>
                          <li class="mb-3 d-flex align-items-center">
                            <p><i class="la la-calendar"></i> <span class="color-text-2 font-weight-medium mr-1">Posted Date:</span> {{ date('D, M j, Y \a\t g:ia', strtotime($job[0]['created_at']))}}</p>
                          </li>
                          <li class="mb-3 d-flex align-items-center">
                            <p><i class="la la-bullhorn"></i> <span class="color-text-2 font-weight-medium mr-1">Application Ends On:</span> {{ date('D, M j, Y \a\t g:ia', strtotime($job[0]['date_end']))}}</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div><!-- end sidebar-widget -->
              </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
          </div>
          
        @if (!empty($applies))
          <div class="text-center mb-3">
            <h2 style="color: black; font-family: Georgia, 'Times New Roman', Times, serif">No Application made  for this Job yet</h2>
          </div>                    
        @else 
          <div class="table-responsive">
            <table class="table" id="myTable" width="100%">
              <thead>
                <tr>
                  <th>Care Giver Name</th>
                  <th>Applied On</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>                 
                @foreach ($applies as $apply)
                <tr>
                  <td>
                    <div class="bread-details d-flex">
                      <div class="bread-img flex-shrink-0">
                        <a href="#" class="d-block">
                          <img src="{{ asset('uploads/profile_pictures/'.$apply->user->avatar) }}" alt="">
                        </a>
                      </div>
                      <div class="manage-candidate-content">
                        <h2 class="widget-title pb-2"><a href="#" class="color-text-2">{{$apply->user->first_name}} {{$apply->user->last_name}}</a></h2>
                        <p class="font-size-15">
                          <span class="mr-2"><i class="la la-envelope-o mr-1"></i><a href="{{$apply->user->email}}" class="color-text-3">{{$apply->user->email}}</a></span>
                          <span class="mr-2"><i class="la la-phone mr-1"></i>{{$apply->user->mobile}}</span>
                        </p>
                        <p class="mt-1 font-size-15">
                          <span class="mr-2"><i class="la la-map mr-1"></i>{{$apply->user->address}}</span>
                        </p>
                      </div><!-- end manage-candidate-content -->
                    </div>
                  </td>
                  <td>{{ date('D, M j, Y', strtotime($apply->created_at))}}</td>
                  <td>
                    @if ($apply->status == "Approved")
                    <span class="badge badge-success p-1">{{$apply->status}}</span></td>
                  @else
                  <span class="badge badge-warning p-1">{{$apply->status}}</span></td>
                  @endif
                </tr>
                @endforeach  
              </tbody>
            </table>
          </div>                            
        @endif
        </div>
      </div><!-- end billing-content -->
    </div><!-- end billing-form-item -->
  </div><!-- end col-lg-12 -->
</div><!-- end row -->
@endsection