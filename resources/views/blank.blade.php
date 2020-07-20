@extends('layouts.wrapper')
@section('plugincss')
<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
<!-- Example: <link rel="stylesheet" type="text/css" href="" /> -->
@endsection
@section('pagecss')
<!-- Example: <style></style> -->
@endsection
@section('toolbar')
<div class="d-flex align-items-center py-3">
  <!--begin::Dropdown-->
        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
            <a href="#" class="btn btn-dark font-weight-bold px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Create
            </a>
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
