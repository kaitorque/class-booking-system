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
  <a href="#" class="btn btn-dark font-weight-bold px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Create Class
  </a>
</div>
@endsection
@section('content')
<div class="row mt-0 mt-lg-8">
  <div class="col-xl-4">
    <div class="col-xl-12 px-0">
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
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Uri Albert</a>
                    <span class="text-muted">Lead Developer</span>
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
                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Floriana Korinna</a>
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
  <div class="col-xl-8">
    <div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
      <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
          <!--begin::Details-->
          <div class="d-flex align-items-center flex-wrap mr-2">

                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Upcoming Class
                </h5>
                <!--end::Title-->

                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->

                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">
                        40 Total
                    </span>
                    <form class="ml-5">
                        <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                            <input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search..."/>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <span class="svg-icon"><i class="fa fa-search"></i></span>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Search Form-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <!--end::Toolbar-->
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
  		<!--begin::Container-->
  		<div class=" container-fluid ">
  			<!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4">
                                <div class="symbol symbol-circle symbol-lg-75">
                                    <img src="assets/media/class/10.png" alt="image"/>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Youtube Success</a>
                                <span class="text-muted font-weight-bold">Youtuber</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7">
                            Teaching how to be success in using Youtube as platform, Dive in to the wide and variety of content analysis <a href="#" class="text-primary pr-1">#youtube</a>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Educator:</span>
                                <a href="#" class="text-muted text-hover-primary">Christopher Parkes</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Time:</span>
                                <span class="text-muted text-hover-primary">1:00pm-3:00pm</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Date:</span>
                                <span class="text-muted font-weight-bold">22 July 2020</span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">View</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:: Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4">
                                <div class="symbol symbol-circle symbol-lg-75">
                                    <img src="assets/media/class/1.png" alt="image"/>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">CTF Intro</a>
                                <span class="text-muted font-weight-bold">Hobbyist Cybersecurity</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7">
                            Brief introduction on what is CTF and several ways to get start in Cybersecurity <a href="#" class="text-primary pr-1">#ctf</a>
                            <a href="#" class="text-primary pr-1">#cybersec</a>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Educator:</span>
                                <a href="#" class="text-muted text-hover-primary">Ali Akbar</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Time:</span>
                                <span class="text-muted text-hover-primary">2:00pm-4:00pm</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Date:</span>
                                <span class="text-muted font-weight-bold">22 July 2020</span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">View</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:: Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4">
                                <div class="symbol symbol-circle symbol-lg-75">
                                    <img src="assets/media/class/1.jpg" alt="image"/>
                                    <span class="label label label-light-warning label-rounded font-weight-bolder position-absolute top-0 right-0 mt-0"><i class="fa fa-star"></i></span>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">OOP in Java</a>
                                <span class="text-muted font-weight-bold">Lead Developer</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7">
                            Beginner friendly ways to implement OOP in Java development <a href="#" class="text-primary pr-1">#java</a>
                            <a href="#" class="text-primary pr-1">#oop</a>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Educator:</span>
                                <a href="#" class="text-muted text-hover-primary">Roza Wheeler</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Time:</span>
                                <span class="text-muted text-hover-primary">8:00pm-10:00pm</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Date:</span>
                                <span class="text-muted font-weight-bold">24 July 2020</span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">View</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:: Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4">
                                <div class="symbol symbol-circle symbol-lg-75">
                                    <img src="assets/media/class/8.jpg" alt="image"/>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Lavarel Introduction</a>
                                <span class="text-muted font-weight-bold">Freelance Developer</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7">
                            Introduction to using Laravel Framework <a href="#" class="text-primary pr-1">#php</a>
                            <a href="#" class="text-primary pr-1">#laravel</a>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Educator:</span>
                                <a href="#" class="text-muted text-hover-primary">Idham Idris</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Time:</span>
                                <span class="text-muted text-hover-primary">2:00pm-4:00pm</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Date:</span>
                                <span class="text-muted font-weight-bold">25 July 2020</span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">View</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:: Card-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Pagination-->
        <div class="card card-custom">
            <div class="card-body py-7">
                <!--begin::Pagination-->
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-wrap mr-3">
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1 disabled"><i class="ki ki-bold-double-arrow-back icon-xs"></i></a>
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1 disabled"><i class="ki ki-bold-arrow-back icon-xs"></i></a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">1</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">2</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">3</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">4</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-next icon-xs"></i></a>
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-next icon-xs"></i></a>
                    </div>
                    <div class="d-flex align-items-center">
                        <select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;">
                            <option value="4">4</option>
                            <option value="8">8</option>
                            <option value="16">16</option>
                            <option value="32">32</option>
                            <option value="64">64</option>
                        </select>
                        <span class="text-muted">Displaying 4 of 40 records</span>
                    </div>
                </div>
                <!--end:: Pagination-->
            </div>
        </div>
  <!--end::Pagination-->
  		</div>
  		<!--end::Container-->
  	</div>
  </div>
</div>
@endsection
@section('sidebar')
<div class="card card-custom card-shadowless gutter-b bg-light">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label font-weight-bolder text-dark">Upcoming MyClass</span>
			<span class="text-muted mt-3 font-weight-bold font-size-sm">3 Classes</span>
		</h3>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-8">
        <!--begin::Item-->
        <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-primary mr-5">
                <span class="symbol-label">
                    <img src="{{asset('assets/media/class/8.jpg')}}" class="h-50 align-self-center" alt=""/>
                </span>
                <span class="label label-sm label-light-danger label-rounded font-weight-bolder position-absolute top-0 right-0 mt-0">2</span>
            </div>
            <!--end::Symbol-->

            <!--begin::Text-->
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Laravel Introduction</a>
                <span class="text-muted">25 July 2020, 2:00pm-4:00pm Saturday</span>
            </div>
            <!--end::Text-->
        </div>
        <!--end::Item-->

        <!--begin::Item-->
        <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-primary mr-5">
                <span class="symbol-label">
                    <img src="{{asset('assets/media/class/9.jpg')}}" class="h-50 align-self-center" alt=""/>
                </span>
            </div>
            <!--end::Symbol-->

            <!--begin::Text-->
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Amazon Web Services</a>
                <span class="text-muted">27 July 2020, 9:00pm-11:00pm Monday</span>
            </div>
            <!--end::Text-->
        </div>
        <!--end::Item-->

        <!--begin::Item-->
        <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-primary mr-5">
                <span class="symbol-label">
                    <img src="{{asset('assets/media/class/8.png')}}" class="h-50 align-self-center" alt=""/>
                </span>
            </div>
            <!--end::Symbol-->

            <!--begin::Text-->
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Github Management</a>
                <span class="text-muted">29 July 2020, 9:00am-12:00am Wednesday</span>
            </div>
            <!--end::Text-->
        </div>
        <!--end::Item-->
    </div>
    <!--end::Body-->
</div>
<div class="card card-custom card-shadowless gutter-b bg-light">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label font-weight-bolder text-dark">MyClass</span>
			<span class="text-muted mt-3 font-weight-bold font-size-sm">2 Classes</span>
		</h3>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-8">
        <!--begin::Item-->
        <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-warning mr-5">
                <span class="symbol-label">
                    <img src="{{asset('assets/media/class/4.png')}}" class="h-50 align-self-center" alt=""/>
                </span>
            </div>
            <!--end::Symbol-->

            <!--begin::Text-->
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">HTML5 Introduction</a>
                <span class="text-muted">14 July 2020, 2:00pm-4:00pm Tuesday</span>
            </div>
            <!--end::Text-->
        </div>
        <!--end::Item-->

        <!--begin::Item-->
        <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-warning mr-5">
                <span class="symbol-label">
                    <img src="{{asset('assets/media/class/2.png')}}" class="h-50 align-self-center" alt=""/>
                </span>
                  <span class="label label-sm label-light-danger label-rounded font-weight-bolder position-absolute top-0 right-0 mt-0">13</span>
            </div>
            <!--end::Symbol-->

            <!--begin::Text-->
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Webscraping 101</a>
                <span class="text-muted">18 July 2020, 9:00am-11:00am Saturday</span>
            </div>
            <!--end::Text-->
        </div>
        <!--end::Item-->
    </div>
    <!--end::Body-->
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
