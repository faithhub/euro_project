@extends('admin.layouts.app')
@section('admin')

<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title">Transactions</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="#">Home</a></li>
                <li class="active__list-item"><a href="#">Dashboard</a></li>
                <li>Transactions</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
<div class="row mt-5">
    <div class="col-lg-12">
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">My Transactions</h3>
                <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content pb-0">
                <div class="manage-job-wrap">
                    <div class="table-responsive">
                        <table class="table" id="myTable" width="100%">
                            <thead>
                            <tr>
                                <th>User Details</th>
                                <th>Plan Name</th>
                                <th>Amount Paid</th>
                                <th>Plan Duration</th>                                
                                <th>Status</th>                              
                                <th>Reference ID</th>
                                <th>TRXREF</th>
                                <th>Paid On</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($trans as $transaction)
                                <tr>
                                    <td>                                        
                                        <div class="bread-details d-flex">
                                            <div class="bread-img flex-shrink-0">
                                                <a href="#" class="d-block">
                                                    <img src="{{ asset('uploads/profile_pictures/'.$transaction->user->avatar) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="manage-candidate-content">
                                                <h2 class="widget-title pb-2"><a href="#" class="color-text-2">{{$transaction->user->first_name}}   {{$transaction->user->last_name}}</a></h2>
                                                <p class="font-size-15">
                                                    <span class="mr-2"><i class="la la-envelope-o mr-1"></i><a href="{{$transaction->user->email}}" class="color-text-3">{{$transaction->user->email}}</a></span><br>
                                                    <span class="mr-2"><i class="la la-phone mr-1"></i>{{$transaction->user->mobile}}</span>
                                                </p>
                                                <p class="mt-1 font-size-15">
                                                    <span class="mr-2"><i class="la la-map mr-1"></i>{{$transaction->user->address}}</span>
                                                </p>
                                            </div><!-- end manage-candidate-content -->
                                        </div>
                                    </td>
                                    <td>                                        
                                        <div class="manage-candidate-wrap">
                                            <h2 class="widget-title pb-0 font-size-15">{{$transaction->plan->plan_name}}</h2>
                                        </div><!-- end manage-candidate-wrap -->
                                    </td>
                                    <td class="font-weight-semi-bold">
                                        <span class="text-success">₦{{$transaction->amount}}</span>
                                    </td>
                                    <td>{{$transaction->plan->plan_type}}</td>
                                    <td class="text-center"><span class="badge badge-success p-1">{{$transaction->status}}</span></td>
                                    <td>{{$transaction->reference}}</td>
                                    <td>{{ $transaction->trxref}}</td>
                                    <td>{{ date('D, M j, Y \a\t g:ia', strtotime($transaction->created_at)) }}</td>
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