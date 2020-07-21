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
                        <tr style="text-align: center" class=" text-uppercase">
                            <th style="min-width: 180px" class="pl-7"><span class="text-dark-75">Class Picture</span></th>
                            <th style="min-width: 100px">Title</th>
                            <th style="min-width: 100px">Educator</th>
                            <th style="min-width: 100px">Date</th>
                            <th style="min-width: 80px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="text-align: center" >
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
                                    CTF Workshop
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Linux
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                Muthu Saravamanan
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Ethical Hacker
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    24 July
                                </span>
                                <span class="text-muted font-weight-bold">
                                8:00pm-10:00pm
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>
                        <tr style="text-align: center" >
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
                                    Web Scrapping & Automation
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Python
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                Haziq Aiman
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Python Developer
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    25 July
                                </span>
                                <span class="text-muted font-weight-bold">
                                8:00pm-10:00pm
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>
                        <tr style="text-align: center" >
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
                                    Web Scraping
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Python
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                Lim Jing
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Data Analyst
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    28 July
                                </span>
                                <span class="text-muted font-weight-bold">
                                8:00pm-10:00pm
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>
                        <tr style="text-align: center" >
                            <td class="pl-0 py-0 ">
                                <div class="d-flex justify-content-center">
                                    <div class="symbol symbol-100 symbol-light mr-4">
                                        <span class="symbol-label">
                                            <img src="assets\media\class\4.PNG" class="h-75 align-self-end" alt=""/>
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    Website Workshop
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Bootstrap
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                Abu Sayid
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Freelance
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    30 July
                                </span>
                                <span class="text-muted font-weight-bold">
                                8:00pm-10:00pm
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
                        <tr style="text-align: center"class="text-uppercase">
                            <th style="min-width: 180px" class="pl-7"><span class="text-dark-75">Class Picture</span></th>
                            <th style="min-width: 100px">Title</th>
                            <th style="min-width: 100px">Educator</th>
                            <th style="min-width: 100px">Date</th>
                            <th style="min-width: 80px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="text-align: center" >
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
                                    CTF Workshop
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Linux
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                Muthu Saravamanan
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Ethical Hacker
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    24 July
                                </span>
                                <span class="text-muted font-weight-bold">
                                8:00pm-10:00pm
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>
                        <tr style="text-align: center" >
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
                                    CTF Workshop
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Linux
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                Muthu Saravamanan
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Ethical Hacker
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    24 July
                                </span>
                                <span class="text-muted font-weight-bold">
                                8:00pm-10:00pm
                                </span>
                            </td>
                            <td class="pr-0 text-right">
                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Details</a>
                            </td>
                        </tr>
                        <tr style="text-align: center" >
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
                                    CTF Workshop
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Linux
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                Muthu Saravamanan
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Ethical Hacker
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    24 July
                                </span>
                                <span class="text-muted font-weight-bold">
                                8:00pm-10:00pm
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
<style>
.full-height {
  height: 100%;
  background: yellow;
}
</style>
<div class="row mt-0 mt-lg-16 ">
  <div class="col-xl-16 ">
    <div class="col-xl-16 px-0 ">
      <div class="card card-custom card-stretch gutter-b">
          <!--begin::Header-->
          <div class="card-header border-0">
              <h3 class="card-title font-weight-bolder text-dark">Promoted</h3>
          </div>
          <!--end::Header-->

          <!--begin::Body-->
          <div class="card-body pt-2">
              <!--begin::Item-->
              <div class="d-flex flex-wrap align-items-center mb-10">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                      <div class="symbol-label" style="background-image: url('{{asset('assets/media/class/9.png')}}')"></div>
                      <span class="label label label-light-warning label-rounded font-weight-bolder position-absolute top-0 right-0 mt-0"><i class="fa fa-star"></i></span>
                  </div>
                  <!--end::Symbol-->

                  <!--begin::Title-->
                  <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                      <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">
                          Entrepreneurship
                      </a>
                      <span class="text-muted font-weight-bold font-size-sm my-1">
                          How to create a business
                      </span>
                      <span class="text-muted font-weight-bold font-size-sm">
                          Educator: <a href="" class="text-primary font-weight-bold">Sakina Crossley</a>
                      </span>
                  </div>
                  <!--end::Title-->
              </div>
              <!--end::Item-->
              <!--begin::Item-->
              <div class="d-flex flex-wrap align-items-center mb-10">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                      <div class="symbol-label" style="background-image: url('{{asset('assets/media/class/1.jpg')}}')"></div>
                      <span class="label label label-light-warning label-rounded font-weight-bolder position-absolute top-0 right-0 mt-0"><i class="fa fa-star"></i></span>
                  </div>
                  <!--end::Symbol-->

                  <!--begin::Title-->
                  <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                      <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">
                          OOP in Java
                      </a>
                      <span class="text-muted font-weight-bold font-size-sm my-1">
                          Beginner friendly
                      </span>
                      <span class="text-muted font-weight-bold font-size-sm">
                          Educator: <a href="" class="text-primary font-weight-bold">Roza Wheeler</a>
                      </span>
                  </div>
                  <!--end::Title-->
              </div>
              <!--end::Item-->
          </div>
          <!--end::Body-->
      </div>
    </div>
    <div class="col-xl-12  px-0">
      <div class="card card-custom card-stretch gutter-b">
      <!--begin::Header-->
      <div class="card-header border-0">
          <h3 class="card-title font-weight-bolder text-dark">Top Educator</h3>
          <div class="card-toolbar">

          </div>
      </div>
      <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body pt-2">
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-10">
                <!--begin::Symbol-->
                <div class="symbol symbol-40 symbol-light-success mr-5">
                    <span class="symbol-label">
                        <img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt=""/>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Haziq Aiman</a>
                    <span class="text-muted">Python Developer</span>
                </div>
                <!--end::Text-->
                <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base"><img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"></div>
            </div>
            <div class="d-flex align-items-center mb-10">
                <!--begin::Symbol-->
                <div class="symbol symbol-40 symbol-light-success mr-5">
                    <span class="symbol-label">
                        <img src="assets/media/svg/avatars/006-girl-3.svg" class="h-75 align-self-end" alt=""/>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Lim Jing</a>
                    <span class="text-muted">Marketing Advisor</span>
                </div>
                <!--end::Text-->
                <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base"><img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"></div>
            </div>
            <div class="d-flex align-items-center mb-10">
                <!--begin::Symbol-->
                <div class="symbol symbol-40 symbol-light-success mr-5">
                    <span class="symbol-label">
                        <img src="assets/media/svg/avatars/011-boy-5.svg" class="h-75 align-self-end" alt=""/>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Pharrell Harmon</a>
                    <span class="text-muted">Teacher</span>
                </div>
                <!--end::Text-->
                <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base"><img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"></div>
            </div>
            <div class="d-flex align-items-center mb-10">
                <!--begin::Symbol-->
                <div class="symbol symbol-40 symbol-light-success mr-5">
                    <span class="symbol-label">
                        <img src="assets/media/svg/avatars/015-boy-6.svg" class="h-75 align-self-end" alt=""/>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Christopher Parkes</a>
                    <span class="text-muted">Youtuber</span>
                </div>
                <!--end::Text-->
                <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base"><img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"></div>
            </div>
            <div class="d-flex align-items-center mb-10">
                <!--begin::Symbol-->
                <div class="symbol symbol-40 symbol-light-success mr-5">
                    <span class="symbol-label">
                        <img src="assets/media/svg/avatars/016-boy-7.svg" class="h-75 align-self-end" alt=""/>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Theodore Fox</a>
                    <span class="text-muted">Robotics</span>
                </div>
                <!--end::Text-->
                <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base"><img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem"></div>
            </div>
              <!--end::Item-->
          </div>
          <!--end::Body-->
      </div>
    </div>


  </div>
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
