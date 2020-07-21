@extends('layouts.wrapper')
@section('plugincss')
<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
<!-- Example: <link rel="stylesheet" type="text/css" href="" /> -->
@endsection
@section('pagecss')
<!-- Example: <style></style> -->
@endsection
@section('toolbar')
<div class="d-flex justify-content-center py-3">
  <!--begin::Dropdown-->
        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">

            <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
<ul class="navi navi-hover">
<li class="navi-header font-weight-bold py-4">
  <span class="font-size-lg">Choose Label:</span>
  <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
</li>
<li class="navi-separator mb-3 opacity-70"></li>
<li class="navi-item">
  <a href="#" class="navi-link">
      <span class="navi-text">
          <span class="label label-xl label-inline label-light-success">Customer</span>
      </span>
  </a>
</li>
<li class="navi-item">
  <a href="#" class="navi-link">
      <span class="navi-text">
          <span class="label label-xl label-inline label-light-danger">Partner</span>
      </span>
  </a>
</li>
<li class="navi-item">
  <a href="#" class="navi-link">
      <span class="navi-text">
          <span class="label label-xl label-inline label-light-warning">Suplier</span>
      </span>
  </a>
</li>
<li class="navi-item">
  <a href="#" class="navi-link">
      <span class="navi-text">
          <span class="label label-xl label-inline label-light-primary">Member</span>
      </span>
  </a>
</li>
<li class="navi-item">
  <a href="#" class="navi-link">
      <span class="navi-text">
          <span class="label label-xl label-inline label-light-dark">Staff</span>
      </span>
  </a>
</li>
<li class="navi-separator mt-3 opacity-70"></li>
<li class="navi-footer py-4">
  <a class="btn btn-clean font-weight-bold btn-sm" href="#">
      <i class="ki ki-plus icon-sm"></i>
      Add new
  </a>
</li>
</ul>
<!--end::Navigation-->
            </div>
        </div>
  <!--end::Dropdown-->
</div>
@endsection
@section('content')
<!-- begin: CURRENT CLASS -->
<div class="col-xl-16">
<div class="card card-custom card-shadowless gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Current Class Going</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">Tuesday, July 22 2020</span>
        </h3>

    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-0 pb-3">
        <div class="tab-content">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                    <thead>
                        <tr class="text-left text-uppercase">
                            <th style="min-width: 250px" class="pl-7"><span class="text-dark-75">Class Picture</span></th>
                            <th style="min-width: 100px">Title</th>
                            <th style="min-width: 100px">Price</th>
                            <th style="min-width: 100px">Educator</th>
                            <th style="min-width: 130px">Rating</th>
                            <th style="min-width: 80px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pl-0 py-1">
                                <div class="d-flex justify-content-center">
                                    <div class="symbol symbol-100 symbol-light mr-4">
                                        <span class="symbol-label" style="padding-right:3px; padding-top: 3px; display:inline-block;">
                                            <img src="assets\media\class\1.PNG" class="h-75 align-self-end" alt=""/>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $8,000,000
                                </span>
                                <span class="text-muted font-weight-bold">
                                    In Proccess
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $520
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Paid
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    Intertico
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Web, UI/UX Design
                                </span>
                            </td>
                            <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"/>
                                <span class="text-muted font-weight-bold d-block font-size-sm">
                                    Best Rated
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-0 py-1">
                                <div class="d-flex justify-content-center">
                                    <div class="symbol symbol-100 symbol-light mr-4">
                                        <span class="symbol-label">
                                            <img src="assets\media\class\2.PNG" class="h-75 align-self-end" alt=""/>
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $23,000,000
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Pending
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $1,600
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Rejected
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    Agoda
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Houses & Hotels
                                </span>
                            </td>
                            <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"/>
                                <span class="text-muted font-weight-bold d-block font-size-sm">
                                    Above Avarage
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-0 py-1">
                                <div class="d-flex justify-content-center">
                                    <div class="symbol symbol-100 symbol-light mr-4">
                                        <span class="symbol-label">
                                            <img src="assets\media\class\3.PNG" class="h-75 align-self-end" alt=""/>
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $34,000,000
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Paid
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $6,700
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Paid
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    RoadGee
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Paid
                                </span>
                            </td>
                            <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"/>
                                <span class="text-muted font-weight-bold d-block font-size-sm">
                                    Best Rated
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-0 py-0 ">
                                <div class="d-flex justify-content-center">
                                    <div class="symbol symbol-100 symbol-light mr-4">
                                        <span class="symbol-label">
                                            <img src="assets\media\class\4.PNG" class="h-75 align-self-end" alt=""/>
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td class="text-left pr-0">
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $2,600,000
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Paid
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $14,000
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Pending
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    The Hill
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Insurance
                                </span>
                            </td>
                            <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem" alt=""/>
                                <span class="text-muted font-weight-bold d-block font-size-sm">
                                    Avarage
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm" >View Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
    </div>
    <!--end::Body-->
</div>

</div>
<!-- begin: PAST CLASS -->
<!-- ------------------------------------------------------------------- -->
<!-- begin: CURRENT CLASS -->
<div class="col-xl-16">
<div class="card card-custom card-shadowless gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Past Classes</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">Tuesday, July 22 2020</span>
        </h3>

    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-0 pb-3">
        <div class="tab-content">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                    <thead>
                        <tr class="text-left text-uppercase">
                            <th style="min-width: 250px" class="pl-7"><span class="text-dark-75">Class Picture</span></th>
                            <th style="min-width: 100px">Title</th>
                            <th style="min-width: 100px">Price</th>
                            <th style="min-width: 100px">Educator</th>
                            <th style="min-width: 130px">Rating</th>
                            <th style="min-width: 80px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pl-0 py-1">
                                <div class="d-flex justify-content-center">
                                    <div class="symbol symbol-100 symbol-light mr-4">
                                        <span class="symbol-label">
                                            <img src="assets\media\class\5.PNG" class="h-75 align-self-end" alt=""/>
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $8,000,000
                                </span>
                                <span class="text-muted font-weight-bold">
                                    In Proccess
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $520
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Paid
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    Intertico
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Web, UI/UX Design
                                </span>
                            </td>
                            <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"/>
                                <span class="text-muted font-weight-bold d-block font-size-sm">
                                    Best Rated
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-0 py-0">
                                <div class="d-flex justify-content-center">
                                    <div class="symbol symbol-100 symbol-light mr-4">
                                        <span class="symbol-label">
                                            <img src="assets\media\class\6.PNG" class="h-75 align-self-end" alt=""/>
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $23,000,000
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Pending
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $1,600
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Rejected
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    Agoda
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Houses & Hotels
                                </span>
                            </td>
                            <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"/>
                                <span class="text-muted font-weight-bold d-block font-size-sm">
                                    Above Avarage
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-0 py-1">
                                <div class="d-flex justify-content-center">
                                    <div class="symbol symbol-100 symbol-light mr-4">
                                        <span class="symbol-label">
                                            <img src="assets\media\class\7.PNG" class="h-75 align-self-end" alt=""/>
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $34,000,000
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Paid
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    $6,700
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Paid
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    RoadGee
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Paid
                                </span>
                            </td>
                            <td>
                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"/>
                                <span class="text-muted font-weight-bold d-block font-size-sm">
                                    Best Rated
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
    </div>
    <!--end::Body-->
</div>

</div>
<!-- begin: PAST CLASS -->
@endsection
@section('sidebar')

@endsection

@section('pageplugin')
<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6')}}"></script>
<!-- Example: <script type="text/javascript" src=""></script> -->
@endsection
@section('pagescript')
<script src="{{asset('assets/js/pages/widgets.js?v=7.0.6')}}"></script>
<!-- Example: <script></script> -->
@endsection
@section('pageready')
<!-- Example: <script>$(document).ready(function(){})</script> -->
@endsection
