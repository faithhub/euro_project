@extends('admin.layouts.app')
@section('admin')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title">Add Job Sub Category</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="#">Home</a></li>
                <li class="active__list-item"><a href="#">Dashboard</a></li>
                <li>Add Job Sub Category</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->

<div class="row mt-5">
    <div class="col-lg-12">
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">Job Sub Category Information</h3>
                <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content">
                <div class="contact-form-action">
                    <form method="post" action="{{ url('admin/add-job-sub-category') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Job Sub Category Name</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Sub Category Name">
                                        @error('name')
                                            <span class="invalid-feedback mb-2" role="alert" style="display: block">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->                            
                        </div><!-- end row -->
                        <div class="btn-box">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div><!-- end contact-form-action -->
            </div><!-- end billing-content -->
        </div><!-- end billing-form-item -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
@endsection