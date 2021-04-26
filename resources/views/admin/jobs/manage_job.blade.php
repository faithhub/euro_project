@extends('admin.layouts.app')
@section('admin')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title">Manage Jobs</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="#">Home</a></li>
                <li class="active__list-item"><a href="#">Dashboard</a></li>
                <li>Manage Jobs</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->

<div class="row mt-5">
    <div class="col-lg-12">
        <div class="billing-form-item">
            <div class="billing-title-wrap">
                <h3 class="widget-title pb-0">Manage Jobs</h3>
                <div class="title-shape margin-top-10px"></div>
            </div><!-- billing-title-wrap -->
            <div class="billing-content pb-0">
                <div class="manage-job-wrap">
                    <div class="manage-job-header mt-3 mb-5">
                        <div class="manage-job-count">
                            <span class="font-weight-medium color-text-2 mr-1">12</span>
                            <span class="font-weight-medium">job(s) Posted</span>
                        </div>
                        <div class="manage-job-count">
                            <span class="font-weight-medium color-text-2 mr-1">8</span>
                            <span class="font-weight-medium">Application(s)</span>
                        </div>
                        <div class="manage-job-count">
                            <span class="font-weight-medium color-text-2 mr-1">6</span>
                            <span class="font-weight-medium">Active Job(s)</span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Application</th>
                                    <th>Create date</th>
                                    <th>Expire date</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="manage-candidate-wrap">
                                            <h2 class="widget-title pb-1"><a href="#" class="color-text-2">Land Development Marketer</a></h2>
                                            <p>
                                                <span><i class="la la-clock-o font-size-16"></i> Last Update: Jan 21, 2020 </span>
                                            </p>
                                        </div><!-- end manage-candidate-wrap -->
                                    </td>
                                    <td>2 Application(s)</td>
                                    <td>10 April, 2019</td>
                                    <td>10 May, 2019</td>
                                    <td><span class="badge badge-success p-1">Active</span></td>
                                    <td class="text-center">
                                        <div class="manage-candidate-wrap">
                                            <div class="bread-action pt-0">
                                                <ul class="info-list">
                                                    <li class="d-inline-block"><a href="#" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="Active"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="manage-candidate-wrap">
                                            <h2 class="widget-title pb-1"><a href="#" class="color-text-2">Regional Sales Manager South</a></h2>
                                            <p>
                                                <span><i class="la la-clock-o font-size-16"></i> Last Update: Jan 21, 2020 </span>
                                            </p>
                                        </div><!-- end manage-candidate-wrap -->
                                    </td>
                                    <td>0 Application(s)</td>
                                    <td>10 April, 2019</td>
                                    <td>10 May, 2019</td>
                                    <td><span class="badge badge-info p-1">Awaiting Activation</span></td>
                                    <td class="text-center">
                                        <div class="manage-candidate-wrap">
                                            <div class="bread-action pt-0">
                                                <ul class="info-list">
                                                    <li class="d-inline-block"><a href="#" ><i class="la la-eye-slash" data-toggle="tooltip" data-placement="top" title="Awaiting"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="manage-candidate-wrap">
                                            <h2 class="widget-title pb-1"><a href="#" class="color-text-2">Restaurant Team Member - Crew</a></h2>
                                            <p>
                                                <span><i class="la la-clock-o font-size-16"></i> Last Update: Jan 21, 2020 </span>
                                            </p>
                                        </div><!-- end manage-candidate-wrap -->
                                    </td>
                                    <td>1 Application(s)</td>
                                    <td>10 April, 2019</td>
                                    <td>10 May, 2019</td>
                                    <td><span class="badge badge-success p-1">Active</span></td>
                                    <td class="text-center">
                                        <div class="manage-candidate-wrap">
                                            <div class="bread-action pt-0">
                                                <ul class="info-list">
                                                    <li class="d-inline-block"><a href="#" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="Active"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="manage-candidate-wrap">
                                            <h2 class="widget-title pb-1"><a href="#" class="color-text-2">Land Development Marketer</a></h2>
                                            <p>
                                                <span><i class="la la-clock-o font-size-16"></i> Last Update: Jan 21, 2020 </span>
                                            </p>
                                        </div><!-- end manage-candidate-wrap -->
                                    </td>
                                    <td>1 Application(s)</td>
                                    <td>10 April, 2019</td>
                                    <td>10 May, 2019</td>
                                    <td><span class="badge badge-secondary p-1">Inactive</span></td>
                                    <td class="text-center">
                                        <div class="manage-candidate-wrap">
                                            <div class="bread-action pt-0">
                                                <ul class="info-list">
                                                    <li class="d-inline-block"><a href="#" ><i class="la la-eye-slash" data-toggle="tooltip" data-placement="top" title="Inactive"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="manage-candidate-wrap">
                                            <h2 class="widget-title pb-1"><a href="#" class="color-text-2">Node.js Developer</a></h2>
                                            <p>
                                                <span><i class="la la-clock-o font-size-16"></i> Last Update: Jan 21, 2020 </span>
                                            </p>
                                        </div><!-- end manage-candidate-wrap -->
                                    </td>
                                    <td>1 Application(s)</td>
                                    <td>10 April, 2019</td>
                                    <td>10 May, 2019</td>
                                    <td><span class="badge badge-secondary p-1">Inactive</span></td>
                                    <td class="text-center">
                                        <div class="manage-candidate-wrap">
                                            <div class="bread-action pt-0">
                                                <ul class="info-list">
                                                    <li class="d-inline-block"><a href="#" ><i class="la la-eye-slash" data-toggle="tooltip" data-placement="top" title="Inactive"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="manage-candidate-wrap">
                                            <h2 class="widget-title pb-1"><a href="#" class="color-text-2">Graphic Design</a></h2>
                                            <p>
                                                <span><i class="la la-clock-o font-size-16"></i> Last Update: Jan 21, 2020 </span>
                                            </p>
                                        </div><!-- end manage-candidate-wrap -->
                                    </td>
                                    <td>1 Application(s)</td>
                                    <td>10 April, 2019</td>
                                    <td>10 May, 2019</td>
                                    <td><span class="badge badge-success p-1">Active</span></td>
                                    <td class="text-center">
                                        <div class="manage-candidate-wrap">
                                            <div class="bread-action pt-0">
                                                <ul class="info-list">
                                                    <li class="d-inline-block"><a href="#" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="Active"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end billing-content -->
        </div><!-- end billing-form-item -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-navigation-wrap mt-4">
            <div class="page-navigation mx-auto">
                <a href="#" class="page-go page-prev">
                    <i class="la la-arrow-left"></i>
                </a>
                <ul class="page-navigation-nav">
                    <li><a href="#" class="page-go-link">1</a></li>
                    <li class="active"><a href="#" class="page-go-link">2</a></li>
                    <li><a href="#" class="page-go-link">3</a></li>
                    <li><a href="#" class="page-go-link">4</a></li>
                    <li><a href="#" class="page-go-link">5</a></li>
                </ul>
                <a href="#" class="page-go page-next">
                    <i class="la la-arrow-right"></i>
                </a>
            </div>
        </div><!-- end page-navigation-wrap -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
@endsection