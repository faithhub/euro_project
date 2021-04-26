@extends('admin.layouts.app')
@section('admin')  

@if (isset($mode) && $mode == 'New')

<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title">Create a Plan</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="#">Home</a></li>
                <li class="active__list-item">Dashboard</li>
                <li>Create a Plan</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->

<div class="row mt-5">
    <div class="col-lg-12">
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">Plan information</h3>
                <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content">                
                <div class="contact-form-action">
                    <form method="post" action="{{ url('admin/new-plan') }}">
                        @csrf
                        <div class="row">                            
                            <div class="col-lg-4 column-lg-full">
                                <div class="input-box">
                                    <label class="label-text">Plan Name</label>
                                    <div class="form-group">
                                        <span class="la la-pencil-square-o form-icon"></span>
                                        <input class="form-control @error('plan_name') is-invalid @enderror" type="text" value="{{ old('plan_name') }}" name="plan_name" placeholder="Enter Plan Name">
                                        @error('plan_name')
                                            <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                    
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 column-lg-full">
                                <div class="input-box">
                                    <label class="label-text">Plan Types</label>
                                    <div class="form-group">
                                        <select class="job-type-option-field @error('plan_type') is-invalid @enderror" name="plan_type">
                                            <option value>Select Subscription Type</option>
                                            <option value="Monthly" {{ old('plan_type') == 'Monthly' ? 'selected' : '' }}>Monthly</option>
                                            <option value="Quarterly" {{ old('plan_type') == 'Quarterly' ? 'selected' : '' }}>Quarterly</option>
                                            <option value="Annually" {{ old('plan_type') == 'Annually' ? 'selected' : '' }}>Annually</option>
                                            {{-- <option value="4" {{ old('plan_type') == '4' ? 'selected' : '' }}>Trial</option> --}}
                                        </select>
                                        @error('plan_type')
                                            <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>                                
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 column-lg-full">
                                <div class="input-box">
                                    <label class="label-text">Plan Amount</label>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <span class="la form-icon">#</span>
                                                <input class="form-control @error('plan_amount') is-invalid @enderror" type="number" value="{{ old('plan_amount') }}" name="plan_amount" placeholder="Enter Amount">
                                                @error('plan_amount')
                                                    <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 column-lg-full">
                                <button type="submit" class="theme-btn border-0">Add Plan</button>
                            </div>                            
                        </div><!-- end row -->
                    </form>
                </div><!-- end contact-form-action -->
            </div><!-- end billing-content -->
        </div><!-- end billing-form-item -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
@elseif(isset($mode) && $mode == 'Edit') 

<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title">Edit Plan</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="#">Home</a></li>
                <li class="active__list-item">Dashboard</li>
                <li>Edit Plan</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->

<div class="row mt-5">
    <div class="col-lg-12">
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">Plan information</h3>
                <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content">                
                <div class="contact-form-action">
                    <form method="post" action="{{ url('admin/edit-plan') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$plan->id}}">
                        <div class="row">                            
                            <div class="col-lg-4 column-lg-full">
                                <div class="input-box">
                                    <label class="label-text">Plan Name</label>
                                    <div class="form-group">
                                        <span class="la la-pencil-square-o form-icon"></span>
                                        <input class="form-control @error('plan_name') is-invalid @enderror" type="text" value="{{ $plan->plan_name }}" name="plan_name" placeholder="Enter Plan Name">
                                        @error('plan_name')
                                            <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                    
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 column-lg-full">
                                <div class="input-box">
                                    <label class="label-text">Plan Types</label>
                                    <div class="form-group">
                                        <select class="job-type-option-field @error('plan_type') is-invalid @enderror" name="plan_type">
                                            <option value>Select Subscription Type</option>
                                            <option value="Monthly" {{ $plan->plan_type == 'Monthly' ? 'selected' : '' }}>Monthly</option>
                                            <option value="Quarterly" {{ $plan->plan_type == 'Quarterly' ? 'selected' : '' }}>Quarterly</option>
                                            <option value="Annually" {{ $plan->plan_type == 'Annually' ? 'selected' : '' }}>Annually</option>
                                            {{-- <option value="4" {{ old('plan_type') == '4' ? 'selected' : '' }}>Trial</option> --}}
                                        </select>
                                        @error('plan_type')
                                            <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>                                
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 column-lg-full">
                                <div class="input-box">
                                    <label class="label-text">Plan Amount</label>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <span class="la form-icon">#</span>
                                                <input class="form-control @error('plan_amount') is-invalid @enderror" type="number" value="{{ $plan->plan_amount }}" name="plan_amount" placeholder="Enter Amount">
                                                @error('plan_amount')
                                                    <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 column-lg-full">
                                <button type="submit" class="theme-btn border-0">Update Plan</button>
                            </div>                            
                        </div><!-- end row -->
                    </form>
                </div><!-- end contact-form-action -->
            </div><!-- end billing-content -->
        </div><!-- end billing-form-item -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
                 
@endif

@endsection