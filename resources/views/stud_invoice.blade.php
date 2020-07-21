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
            <span class="card-label font-weight-bolder text-dark">Invoice</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">Tuesday, July 22 2020</span>
        </h3>

    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card card-custom overflow-hidden">
    <div class="card-body p-0">
        <!-- begin: Invoice-->
        <!-- begin: Invoice header-->
        <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-image: url(assets/media/bg/bg-6.jpg);">
            <div class="col-md-9">
                <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                    <h1 class="display-4 text-white font-weight-boldest mb-10">INVOICE</h1>
                    <div class="d-flex flex-column align-items-md-end px-0">
                        <!--begin::Logo-->
                        <span class="display-4 text-white font-weight-boldest mb-3" class="text-white d-flex flex-column align-items-md-end opacity-70">
                            <span>EduHub</span>
                        </span>
                        <!--end::Logo-->
                        <span class="text-white d-flex flex-column align-items-md-end opacity-70">
                            <span>Bandar Residensi , Jalan Laksamana</span>
                            <span>Puchong 45200</span>
                        </span>
                    </div>
                </div>
                <div class="border-bottom w-100 opacity-20"></div>
                <div class="d-flex justify-content-between text-white pt-6">
                    <div class="d-flex flex-column flex-root">
                        <span class="font-weight-bolde mb-2r">DATA</span>
                        <span class="opacity-70">July 22 2020</span>
                    </div>
                    <div class="d-flex flex-column flex-root">
                        <span class="font-weight-bolder mb-2">INVOICE NO.</span>
                        <span class="opacity-70">GS 000014</span>
                    </div>
                    <div class="d-flex flex-column flex-root">
                        <span class="font-weight-bolder mb-2">INVOICE TO.</span>
                        <span class="opacity-70">kaitorque@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Invoice header-->

        <!-- begin: Invoice body-->
        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
            <div class="col-md-9">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pl-0 font-weight-bold text-muted  text-uppercase">Description</th>
                                <th class="text-right font-weight-bold text-muted text-uppercase">Hours</th>
                                <th class="text-right font-weight-bold text-muted text-uppercase">Rate</th>
                                <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="font-weight-boldest font-size-lg">
                                <td class="pl-0 pt-7">Laravel Introduction</td>
                                <td class="text-right pt-7">3</td>
                                <td class="text-right pt-7">RM30.00</td>
                                <td class="text-danger pr-0 pt-7 text-right">RM90.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end: Invoice body-->

        <!-- begin: Invoice footer-->
        <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
            <div class="col-md-9">
                <div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
                    <div class="d-flex flex-column mb-10 mb-md-0">
                        <div class="font-weight-bolder font-size-lg mb-3">BANK TRANSFER</div>

                        <div class="d-flex justify-content-between mb-3">
                            <span class="mr-15 font-weight-bold">Account Name:</span>
                            <span class="text-right">Bank Islam</span></span>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span class="mr-15 font-weight-bold">Account Number:</span>
                            <span class="text-right">1234567890934</span></span>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span class="mr-15 font-weight-bold">Code:</span>
                            <span class="text-right">BARC0032MY</span></span>
                        </div>
                    </div>
                    <div class="d-flex flex-column text-md-right">
                        <span class="font-size-lg font-weight-bolder mb-1">TOTAL AMOUNT</span>
                        <span class="font-size-h2 font-weight-boldest text-danger mb-1">RM90.00</span>
                        <span>Taxes Included</span>
                    </div>
                </div>

            </div>
        </div>
        <!-- end: Invoice footer-->

        <!-- begin: Invoice action-->
        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
            <div class="col-md-9">
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">Download Invoice</button>
                    <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print Invoice</button>
                </div>
            </div>
        </div>
        <!-- end: Invoice action-->

        <!-- end: Invoice-->
    </div>
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
