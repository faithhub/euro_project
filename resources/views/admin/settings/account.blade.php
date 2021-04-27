@extends('admin.layouts.app')
@section('admin')

<div class="row">
  <div class="col-lg-12">
    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
      <div class="section-heading">
        <h2 class="sec__title">Bank Account Details</h2>
      </div><!-- end section-heading -->
      <ul class="list-items d-flex align-items-center">
        <li class="active__list-item"><a href="#">Home</a></li>
        <li class="active__list-item">Setting</li>
        <li>Bank Account Details</li>
      </ul>
    </div><!-- end breadcrumb-content -->
  </div><!-- end col-lg-12 -->
</div><!-- end row -->
<div class="row mt-5">
  <form method="post" class="col-lg-12" enctype="multipart/form-data" action="{{ url('user/account') }}">
    @csrf
    <div class="col-lg-12">
      <div class="user-form-action">
        <div class="billing-form-item">
          <div class="billing-title-wrap">
            <h3 class="widget-title pb-0">Account Details</h3>
            <div class="title-shape margin-top-10px"></div>
          </div><!-- billing-title-wrap -->
          <div class="billing-content pb-0">
            <div class="contact-form-action">
              <div class="row">
                <div class="col-lg-4">
                  <div class="input-box">
                    <label class="label-text">Bank Name</label>
                    <div class="form-group">
                      <span class="la la-money form-icon"></span>
                      <input class="form-control @error('bank_name') is-invalid @enderror" type="text" name="bank_name" value="{{Auth::user()->bank_id}}" placeholder="">
                      @error('bank_name')
                      <span class="invalid-feedback mb-2" role="alert" style="display: block">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                  <div class="input-box">
                    <label class="label-text">Account Name</label>
                    <div class="form-group">
                      <span class="la la-money form-icon"></span>
                      <input class="form-control @error('account_name') is-invalid @enderror" type="text" name="account_name" value="{{Auth::user()->account_name}}" placeholder="">
                      @error('account_name')
                      <span class="invalid-feedback mb-2" role="alert" style="display: block">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                  <div class="input-box">
                    <label class="label-text">Account Number</label>
                    <div class="form-group">
                      <span class="la la-money form-icon"></span>
                      <input class="form-control @error('account_number') is-invalid @enderror" type="number" name="account_number" value="{{Auth::user()->account_number}}" placeholder="">
                      @error('account_number')
                      <span class="invalid-feedback mb-2" role="alert" style="display: block">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div><!-- end col-lg-4 -->
              </div><!-- end row -->
              <div class="col-lg-12">
                  <div class="form-group">
                      <p><b class="text-danger">*</b>Note: You are only allowed to update your account details once, any other adjustment after will have to be made by <a href="#" class="color-text">help center</a></p>
                  </div>
              </div><!-- end col-lg-12 -->
            </div><!-- end contact-form-action -->
          </div><!-- end billing-content -->
        </div>
      </div><!-- end user-form-action -->
    </div><!-- end col-lg-12 -->
    @if (Auth::user()->bank_id == Null || Auth::user()->account_number == Null || Auth::user()->account_name == Null )        
      <div class="col-lg-12">
        <div class="btn-box">
          <button class="theme-btn border-0" type="submit">Update Changes</button>
        </div>
      </div>
      @else
    @endif
  </form>
</div><!-- end row -->
@endsection