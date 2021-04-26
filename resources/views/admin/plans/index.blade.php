@extends('admin.layouts.app')
@section('admin')  
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title line-height-45">Plans Management</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="">Home</a></li>
                <li class="active__list-item">Dashboard</li>
                <li>Manage plans</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
<div class="row mt-5">
    <div class="col-lg-12">
        <a href="{{ url('admin/new-plan') }}" class="theme-btn mb-3">
            <span class="la la-plus"></span> New Plans
        </a>
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">Plans </h3>
                <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content pb-0">
                <div class="row">
                    @if (count($plans) < 1)
                        <div class="col-12 mt-2 mb-4 text-center justify-content-center" style="color: black;">
                            <h1>No Plan Available yet</h1>
                        </div>
                    @else
                        @foreach ($plans as $plan)
                        <div class="col-md-4">                        
                            <div class="package-item">
                                <div class="price">
                                    <h3 class="price__title text-center">{{$plan->plan_name}}</h3>
                                    {{-- <p>Entry you need get started without compsromising</p> --}}
                                    <div class="package-info margin-top-35px margin-bottom-35px">
                                        <sup class="dollar">₦</sup>
                                        <span class="amount">{{$plan->plan_amount}}</span>
                                        <span class="slash">/</span>
                                        <span class="month">{{$plan->plan_type}}</span>
                                    </div>
                                </div>
                                <ul class="list-items margin-bottom-25px">
                                    <li><i class="la la-check-circle text-success"></i> Unlimited Job Application</li>
                                    <li><i class="la la-check-circle text-success"></i> Instant chatting</li>
                                    <li><i class="la la-check-circle text-success"></i> premium job listing</li>
                                </ul>

                                <div class="btn-box text-center">
                                    <div class="bread-action pt-0">
                                        <ul class="info-list">
                                            <a class="btn btn-success text-white" href="{{ url('admin/edit-plan', $plan->id) }}">Edit</a>
                                            {{-- <button class="btn btn-danger">Delete</button> --}}
                                            {{-- <li class="d-inline-block"><a href="#s"><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"></i></a></li>
                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
            </div><!-- end billing-content -->
        </div><!-- end billing-form-item -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->

@endsection