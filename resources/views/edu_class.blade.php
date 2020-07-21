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
      <a href="{{route('edu_class_edit')}}" class="btn btn-dark font-weight-bold px-6" aria-haspopup="true" aria-expanded="false">
          Create Class
      </a>
  <!--end::Dropdown-->
</div>
@endsection
@section('content')
<div class="card card-custom gutter-b">
    <div class="card-body">
        <div class="d-flex">
            <!--begin: Pic-->
            <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                <div class="symbol symbol-50 symbol-lg-120">
                    <img alt="Pic" src="assets/media/class/8.jpg"/>
                </div>

                <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                    <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
                </div>
            </div>
            <!--end: Pic-->

            <!--begin: Info-->
            <div class="flex-grow-1">
                <!--begin: Title-->
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <div class="mr-3">
                        <!--begin::Name-->
                        <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                            Laravel introduction
                        </a>
                        <!--end::Name-->

                        <!--begin::Contacts-->
                        <!--end::Contacts-->
                    </div>
                    <div class="my-lg-0 my-1">
                        <a href="{{route('edu_class_edit')}}" class="btn btn-sm btn-info font-weight-bolder text-uppercase">Edit</a>
                    </div>
                </div>
                <!--end: Title-->

                <!--begin: Content-->
                <div class="d-flex align-items-center flex-wrap justify-content-between">
                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">
                      Introduction to using Laravel Framework <a href="#" class="text-primary pr-1">#php</a>
                      <a href="#" class="text-primary pr-1">#laravel</a>
                    </div>

                    <div class="d-flex flex-wrap align-items-center py-2">
                        <div class="d-flex align-items-center mr-10">
                            <div class="mr-3">
                                <div class="font-weight-bold mb-2">Date</div>
                                <span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">25 July 2020</span>
                            </div>
                            <div class="mr-3">
                                <div class="font-weight-bold mb-2">Due Date</div>
                                <span class="btn btn-sm btn-text btn-light-info text-uppercase font-weight-bold">10:00am-1:00pm</span>
                            </div>
                            <div class="">
                                <div class="font-weight-bold mb-2">Status</div>
                                <span class="btn btn-sm btn-text btn-light-success text-uppercase font-weight-bold">Upcoming</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Content-->
            </div>
            <!--end: Info-->
        </div>

        <div class="separator separator-solid my-7"></div>

        <!--begin: Items-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin: Item-->

            <!--end: Item-->

            <!--begin: Item-->

            <!--end: Item-->

            <!--begin: Item-->

            <!--end: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="fa fa-dollar-sign"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Price</span>
                    <span class="font-weight-bolder font-size-h5">RM 30</span>
                </div>
            </div>
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column flex-lg-fill">
                    <span class="text-dark-75 font-weight-bolder font-size-sm">20 Review</span>
                    <a href="#" class="text-primary font-weight-bolder">View</a>
                </div>
            </div>

            <!--end: Item-->

            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon-chat-1 icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="d-flex flex-column">
                    <span class="text-dark-75 font-weight-bolder font-size-sm">150 Comments</span>
                    <a href="#" class="text-primary font-weight-bolder">View</a>
                </div>
            </div>
            <!--end: Item-->
            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="fa fa-users"></i>
                </span>
                <div class="d-flex flex-column text-dark-75">
                    <span class="font-weight-bolder font-size-sm">Students</span>
                    <span class="font-weight-bolder font-size-h5">30</span>
                </div>
            </div>
            <!--begin: Item-->
            <div class="d-flex align-items-center flex-lg-fill my-1">
                <span class="mr-4">
                    <i class="flaticon-network icon-2x text-muted font-weight-bold"></i>
                </span>
                <div class="symbol-group symbol-hover">
                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                        <img alt="Pic" src="assets/media/users/300_25.jpg"/>
                    </div>
                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Charlie Stone">
                        <img alt="Pic" src="assets/media/users/300_19.jpg"/>
                    </div>
                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Luca Doncic">
                        <img alt="Pic" src="assets/media/users/300_22.jpg"/>
                    </div>
                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                        <img alt="Pic" src="assets/media/users/300_23.jpg"/>
                    </div>
                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
                        <img alt="Pic" src="assets/media/users/300_18.jpg"/>
                    </div>
                    <div class="symbol symbol-30 symbol-circle symbol-light">
                        <span class="symbol-label font-weight-bold">5+</span>
                    </div>
                </div>
            </div>
            <!--end: Item-->
        </div>
        <!--begin: Items-->
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <!--begin::Advance Table Widget 3-->
<div class="card card-custom card-stretch gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Student</span>
        </h3>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-0 pb-3">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                <thead>
                    <tr class="text-uppercase">
                        <th style="min-width: 250px" class="pl-7"><span class="text-dark-75">Student</span></th>
                        <th style="min-width: 130px">status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pl-0 py-8">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('assets/media/svg/avatars/015-boy-6.svg')"></div>
                                </div>

                                <div>
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Muthu Saravamanan</a>
                                    <span class="text-muted font-weight-bold d-block">Computer Security Analyst</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="label label-lg label-light-success label-inline">Paid</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-8">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('assets/media/svg/avatars/034-boy-14.svg')"></div>
                                </div>

                                <div>
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Deeban Singh Muruthu</a>
                                    <span class="text-muted font-weight-bold d-block">Former Chief Technology Officer</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="label label-lg label-light-success label-inline">Paid</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-8">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('assets/media/svg/avatars/006-girl-3.svg')"></div>
                                </div>

                                <div>
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Nurul Ain Suhaimi</a>
                                    <span class="text-muted font-weight-bold d-block">Database engineer</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="label label-lg label-light-danger label-inline">Cancelled</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-8">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50 flex-shrink-0 mr-4">
                                    <div class="symbol-label" style="background-image: url('assets/media/svg/avatars/043-boy-18.svg')"></div>
                                </div>

                                <div>
                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Muhyiddin Yaasinin</a>
                                    <span class="text-muted font-weight-bold d-block">Business Marketer</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="label label-lg label-light-warning label-inline">Pending</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
<!--end::Advance Table Widget 3-->
    </div>
    <div class="col-lg-6">
      <div class="card card-custom">
        	<div class="card-header">
        		<div class="card-title">
                    <span class="card-icon">
                        <i class="fa fa-info"></i>
                    </span>
        			<h3 class="card-label">
        				Information
        			</h3>
        		</div>
        	</div>
        	<div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at pharetra mi. Proin euismod tortor a aliquam aliquet. Ut aliquet lacinia fringilla. Nullam vel felis porttitor, mattis arcu sit amet, scelerisque nunc. Fusce dolor nisi, commodo non nunc porta, efficitur volutpat felis. Curabitur aliquam vel libero id pharetra. Sed eget interdum felis. Sed vehicula ante id nunc elementum, sit amet euismod lorem ultricies. Sed vel sagittis quam, auctor dapibus est. Sed pellentesque enim at neque ornare, a fermentum augue pellentesque. Maecenas faucibus nulla at dolor mollis sollicitudin. Praesent non ex mattis, tristique felis venenatis, congue risus. Ut vitae condimentum orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
              <br>
              <br>
              Donec vitae scelerisque nunc. Vestibulum ut tempor sapien. Curabitur vel lectus interdum, pellentesque tortor ut, consequat turpis. Morbi accumsan quis enim ut faucibus. Phasellus massa ligula, consectetur dictum pellentesque id, semper id dui. Proin dictum lorem risus, ut maximus ligula malesuada sed. Proin felis metus, convallis quis elit sed, consequat fermentum metus. Donec fermentum condimentum tortor non commodo. Donec et dolor diam. Donec convallis tellus enim, faucibus rhoncus felis volutpat a. Donec ultrices orci ut pulvinar iaculis. Cras nec finibus diam, vitae fermentum est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        	</div>
        </div>
    </div>
</div>
<div class="card card-custom gutter-b">
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Top-->
        <div class="d-flex align-items-center">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-success mr-5">
                <span class="symbol-label">
                    <img src="assets/media/svg/avatars/007-boy-2.svg" class="h-75 align-self-end" alt=""/>
                </span>
            </div>
            <!--end::Symbol-->

            <!--begin::Description-->
            <span class="text-muted font-weight-bold font-size-lg">What’s on your mind?</span>
            <!--end::Description-->
        </div>
        <!--end::Top-->

        <!--begin::Form-->
        <form id="kt_forms_widget_2_form" class="pt-10 ql-quil ql-quil-plain">
            <!--begin::Editor-->
            <div id="kt_forms_widget_2_editor"></div>
            <!--end::Editor-->

            <div class="border-top my-5"></div>

            <!--begin::Toolbar-->
            <div id="kt_forms_widget_2_editor_toolbar" class="ql-toolbar d-flex align-items-center justify-content-between">
                <div class="mr-2">
                    <span class="ql-formats ml-0">
                        <select class="ql-size w-75px">
                            <option value="10px">Small</option>
                            <option selected>Normal</option>
                            <option value="18px">Large</option>
                            <option value="32px">Huge</option>
                        </select>
                    </span>

                    <span class="ql-formats">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                        <button class="ql-image"></button>
                        <button class="ql-link"></button>
                        <button class="ql-clean"></button>
                    </span>
                </div>

                <div class="">
                    <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                        <i class="flaticon2-clip-symbol icon-ms"></i>
                    </span>
                    <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                        <i class="flaticon2-pin icon-ms"></i>
                    </span>
                </div>
            </div>
            <!--end::Toolbar-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Body-->
</div>
<div class="card card-custom gutter-b">
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Header-->
        <div class="d-flex align-items-center">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-success mr-5">
                <span class="symbol-label">
                    <img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt=""/>
                </span>
            </div>
            <!--end::Symbol-->

            <!--begin::Info-->
            <div class="d-flex flex-column flex-grow-1">
                <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Grace Logan</a>
                <span class="text-muted font-weight-bold"> Yestarday at 5:06 PM</span>
            </div>
            <!--end::Info-->

            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ki ki-bold-more-hor"></i>
                </a>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
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
        <!--end::Header-->

        <!--begin::Body-->
        <div class="pt-5">
            <!--begin::Text-->
            <p class="text-dark-75 font-size-lg font-weight-normal  mb-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ligula turpis, cursus porttitor molestie cursus, vestibulum id sapien. Maecenas tempor quis libero eget ultrices. Nunc pretium ex ante, in accumsan odio ultricies a
            </p>
            <!--end::Text-->

            <!--begin::Action-->
            <div class="d-flex align-items-center">
                <a href="#" class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2 mr-2">
                    <span class="svg-icon svg-icon-md svg-icon-dark-25 pr-2"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                    24
                </a>

                <a href="#" class="btn btn-sm btn-text-dark-50 btn-hover-icon-danger btn-hover-text-danger bg-hover-light-danger font-weight-bolder rounded font-size-sm p-2">
                    <span class="svg-icon svg-icon-md svg-icon-dark-25 pr-1"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Heart.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>                    75
                </a>
            </div>
            <!--end::Action-->
        </div>
        <!--end::Body-->

        <!--begin::Separator-->
        <div class="separator separator-solid mt-2 mb-4"></div>
        <!--end::Separator-->

        <!--begin::Editor-->
        <form class="position-relative">
            <textarea id="kt_forms_widget_3_input" class="form-control border-0 p-0 pr-10 resize-none" rows="1" placeholder="Reply..."></textarea>

            <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                    <i class="flaticon2-clip-symbol icon-ms"></i>
                </span>
                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                    <i class="flaticon2-pin icon-ms"></i>
                </span>
            </div>
        </form>
        <!--edit::Editor-->
    </div>
    <!--end::Body-->
</div>
<!--end::Forms Widget 3-->



<!--begin::Forms Widget 4-->
<div class="card card-custom gutter-b">
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Top-->
        <div class="d-flex align-items-center">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-success mr-5">
                <span class="symbol-label">
                    <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt=""/>
                </span>
            </div>
            <!--end::Symbol-->

            <!--begin::Info-->
            <div class="d-flex flex-column flex-grow-1">
                <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Ruby Liam</a>
                <span class="text-muted font-weight-bold">Yestarday at 5:06 PM</span>
            </div>
            <!--end::Info-->

            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
                </a>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
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
        <!--end::Top-->

        <!--begin::Bottom-->
        <div class="pt-4">
            <!--begin::Image-->
            <div class="bgi-no-repeat bgi-size-cover rounded min-h-265px" style="background-image: url(assets/media/stock-900x600/3.jpg)"></div>
            <!--end::Image-->

            <!--begin::Text-->
            <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet ultricies justo, eget lacinia ex. Aenean lacinia augue eu molestie hendrerit. Proin id libero nec nisi faucibus pellentesque. Pellentesque placerat velit sed magna aliquet, a volutpat nunc dapibus. Donec luctus odio quis ullamcorper tristique. Nulla in leo quis dui suscipit egestas at tristique lacus. Sed sed diam erat.
            </p>
            <!--end::Text-->

            <!--begin::Action-->
            <div class="d-flex align-items-center">
                <a href="#" class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2">
                    <span class="svg-icon svg-icon-md svg-icon-dark-25 pr-2"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                    24
                </a>

                <a href="#" class="btn btn-icon-danger btn-sm btn-text-dark-50 bg-hover-light-danger btn-hover-text-danger rounded font-weight-bolder font-size-sm p-2">
                    <span class="svg-icon svg-icon-md svg-icon-danger pr-1"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Heart.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>                    75
                </a>
            </div>
            <!--end::Action-->
        </div>
        <!--end::Bottom-->

        <!--begin::Separator-->
        <div class="separator separator-solid mt-2 mb-4"></div>
        <!--end::Separator-->

        <!--begin::Editor-->
        <form class="position-relative">
            <textarea id="kt_forms_widget_4_input" class="form-control border-0 p-0 pr-10 resize-none" rows="1" placeholder="Reply..."></textarea>

            <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                    <i class="flaticon2-clip-symbol icon-ms"></i>
                </span>
                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                    <i class="flaticon2-pin icon-ms"></i>
                </span>
            </div>
        </form>
        <!--edit::Editor-->
    </div>
    <!--end::Body-->
</div>
<!--end::Forms Widget 4-->

                <!--begin::Forms Widget 5-->
<div class="card card-custom gutter-b">
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Container-->
        <div>
            <!--begin::Header-->
            <div class="d-flex align-items-center pb-4">
                <!--begin::Symbol-->
                <div class="symbol symbol-40 symbol-light-success mr-5">
                    <span class="symbol-label">
                        <img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt=""/>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Info-->
                <div class="d-flex flex-column flex-grow-1">
                    <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Grace Logan</a>
                    <span class="text-muted font-weight-bold">Yestarday at 5:06 PM</span>
                </div>
                <!--end::Info-->

                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ki ki-bold-more-hor"></i>
                    </a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
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
            <!--end::Header-->

            <!--begin::Body-->
            <div>
                <!--begin::Text-->
                <p class="text-dark-75 font-size-lg font-weight-normal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce viverra rutrum lobortis. Pellentesque bibendum urna enim, nec finibus ligula laoreet at.
                </p>
                <!--end::Text-->

                <!--begin::Action-->
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-light-primary rounded font-weight-bolder font-size-sm p-2 mr-2">
                        <span class="svg-icon svg-icon-md svg-icon-primary pr-2"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                        24
                    </a>

                    <a href="#" class="btn btn-hover-text-danger btn-hover-icon-danger btn-sm btn-text-dark-50 bg-hover-light-danger rounded font-weight-bolder font-size-sm p-2">
                        <span class="svg-icon svg-icon-md svg-icon-dark-25 pr-1"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Heart.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>                        75
                    </a>
                </div>
                <!--end::Action-->

                <!--begin::Item-->
                <div class="d-flex py-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40 symbol-light-success mr-5 mt-1">
                        <span class="symbol-label">
                            <img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt=""/>
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Info-->
                    <div class="d-flex flex-column flex-row-fluid">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder pr-6">Mr. Anderson</a>
                            <span class="text-muted font-weight-normal flex-grow-1 font-size-sm">1 Day ago</span>
                            <span class="text-muted font-weight-normal font-size-sm">Reply</span>
                        </div>

                        <span class="text-dark-75 font-size-sm font-weight-normal pt-1">
                            Pellentesque commodo ante molestie ex posuere, nec sollicitudin ipsum eleifend. Sed at est aliquam, gravida nisl quis, laoreet odio. Sed eu faucibus sapien.
                        </span>
                        <!--end::Info-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40 symbol-light-success mr-5 mt-1">
                        <span class="symbol-label">
                            <img src="assets/media/svg/avatars/003-girl-1.svg" class="h-75 align-self-end" alt=""/>
                        </span>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Info-->
                    <div class="d-flex flex-column flex-row-fluid">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder pr-6">Mrs. Anderson</a>
                            <span class="text-muted font-weight-normal flex-grow-1 font-size-sm">2 Days ago</span>
                            <span class="text-muted font-weight-normal font-size-sm">Reply</span>
                        </div>

                        <span class="text-dark-75 font-size-sm font-weight-normal pt-1">
                             Cras sit amet ante diam.
                        </span>
                        <!--end::Info-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Container-->

        <!--begin::Separator-->
        <div class="separator separator-solid mt-5 mb-4"></div>
        <!--end::Separator-->

        <!--begin::Editor-->
        <form class="position-relative">
            <textarea id="kt_forms_widget_5_input" class="form-control border-0 p-0 pr-10 resize-none" rows="1" placeholder="Reply..."></textarea>

            <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                    <i class="flaticon2-clip-symbol icon-ms"></i>
                </span>
                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                    <i class="flaticon2-pin icon-ms"></i>
                </span>
            </div>
        </form>
        <!--edit::Editor-->
    </div>
    <!--end::Body-->
</div>
<!--end::Forms Widget 5-->

                <!--begin::Forms Widget 6-->
<div class="card card-custom gutter-b">
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Container-->
        <div>
            <!--begin::Header-->
            <div class="d-flex align-items-center">
                <!--begin::Symbol-->
                <div class="symbol symbol-40 symbol-light-success mr-5">
                    <span class="symbol-label">
                        <img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt=""/>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Info-->
                <div class="d-flex flex-column flex-grow-1">
                    <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Nikky Peres</a>
                    <span class="text-muted font-weight-bold">Yestarday at 5:06 PM</span>
                </div>
                <!--end::Info-->

                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ki ki-bold-more-hor"></i>
                    </a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
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
            <!--end::Header-->

            <!--begin::Body-->
            <div>
                <!--begin::Text-->
                <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">
                    Aenean vitae nisl at mauris fermentum tempus ac a ex. Mauris dapibus tincidunt ex eu lobortis.
                </p>
                <!--end::Text-->

                <!--begin::Action-->
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2 mr-2">
                        <span class="svg-icon svg-icon-md svg-icon-dark-25 pr-2"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                        24
                    </a>

                    <a href="#" class="btn btn-sm btn-text-dark-50 btn-hover-icon-danger btn-hover-text-danger bg-hover-light-danger font-weight-bolder rounded font-size-sm p-2">
                        <span class="svg-icon svg-icon-md svg-icon-dark-25 pr-1"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Heart.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>                        75
                    </a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Container-->

        <!--begin::Separator-->
        <div class="separator separator-solid mt-2 mb-4"></div>
        <!--end::Separator-->

        <!--begin::Editor-->
        <form class="position-relative">
            <textarea id="kt_forms_widget_6_input" class="form-control border-0 p-0 pr-10 resize-none" rows="1" placeholder="Reply..."></textarea>

            <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                    <i class="flaticon2-clip-symbol icon-ms"></i>
                </span>
                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                    <i class="flaticon2-pin icon-ms"></i>
                </span>
            </div>
        </form>
        <!--edit::Editor-->
    </div>
    <!--end::Body-->
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
