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
  <a href="#" class="btn btn-white font-weight-bold px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 24 24"><path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/></svg>
  </a>
</div>

@endsection
@section('content')
<!-- begin: CURRENT CLASS -->
<div class="col-xl-16">
<div class="card card-custom card-shadowless gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Payment Gateway</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">Tuesday, July 22 2020</span>
        </h3>

    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-0 pb-3">
        <div class="tab-content">
        <div class="pb-5" data-wizard-type="step-content">
                                    <div class="mb-10 font-weight-bold text-dark">Enter your Payment Details</div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Name on Card</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="ccname" placeholder="Card Name" value="John Wick"/>
                                                <span class="form-text text-muted">Please enter your Card Name.</span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xl-6">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Card Number</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="ccnumber" placeholder="Card Number" value="4444 3333 2222 1111"/>
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Card Expiry Month</label>
                                                <input type="number" class="form-control form-control-solid form-control-lg" name="ccmonth" placeholder="Card Expiry Month" value="01"/>
                                                <span class="form-text text-muted">Please enter your Card Expiry Month.</span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xl-4">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Card Expiry Year</label>
                                                <input type="number" class="form-control form-control-solid form-control-lg" name="ccyear" placeholder="Card Expire Year" value="21"/>
                                                <span class="form-text text-muted">Please enter your Card Expiry Year.</span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-xl-4">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>Card CVV Number</label>
                                                <input type="password" class="form-control form-control-solid form-control-lg" name="cccvv" placeholder="Card CVV Number" value="123"/>
                                                <span class="form-text text-muted">Please enter your Card CVV Number.</span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                </div>
        </div>
        <!-- begin: Invoice action-->
        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
            <div class="col-md-9">
                <div class="d-flex float-right">
                    <a class="btn btn-primary font-weight-bold" href="{{route('stud_invoice')}}">Finish Payment</a>
                </div>
            </div>
        </div>
        <!-- end: Invoice action-->
    </div>
    <!--end::Body-->
</div>

</div>

@endsection
@section('sidebar')

<div class="card card-custom card-shadowless gutter-b bg-light">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label font-weight-bolder text-dark">Promoted</span>

		</h3>
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
<div class="card card-custom card-shadowless gutter-b bg-light">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label font-weight-bolder text-dark">Top Educator</span>

		</h3>
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
