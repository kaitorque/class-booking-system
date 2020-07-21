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
<div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
				<h3 class="card-title">
					Create Class
				</h3>
			</div>
			<!--begin::Form-->
			<form>
				<div class="card-body">
          <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Class Picture</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(assets/media/users/blank.png)">
                        <div class="image-input-wrapper"></div>

                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
							<input type="hidden" name="profile_avatar_remove"/>
                        </label>

						<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                </div>
          </div>
					<div class="form-group">
						<label>Title</label>
						<input type="email" class="form-control"  placeholder="Enter title"/>
					</div>
          <div class="form-group">
						<label>Description</label>
						<input type="email" class="form-control"  placeholder="Enter description"/>
					</div>
          <div class="form-group">
						<label>Date</label>
            <div class="col-lg-4 col-md-9 col-sm-12">
							<div class id="kt_datepicker_6"></div>
						</div>
					</div>
          <div class="form-group">
						<label>Time</label>
            <div class="input-group">
              <input class="form-control" id="kt_timepicker_1_modal" readonly placeholder="Select time" type="text"/>
							<div class="input-group-append"><span class="input-group-text" >to</span></div>
              <input class="form-control" id="kt_timepicker_2_modal" readonly placeholder="Select time" type="text"/>
						</div>
					</div>
					<div class="form-group mb-1">
						<label for="exampleTextarea">Information</label>
						<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
					</div>
				</div>
				<div class="card-footer">
					<button type="reset" class="btn btn-primary mr-2">Submit</button>
					<button type="reset" class="btn btn-secondary">Cancel</button>
				</div>
			</form>
			<!--end::Form-->
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
<script>
  $(document).ready(function(){
    var arrows;
    if (KTUtil.isRTL()) {
        arrows = {
            leftArrow: '<i class="la la-angle-right"></i>',
            rightArrow: '<i class="la la-angle-left"></i>'
        }
    } else {
        arrows = {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        }
    }
    $('#kt_datepicker_6').datepicker({
        rtl: KTUtil.isRTL(),
        todayHighlight: true,
        templates: arrows
    });

     $('#kt_timepicker_1_modal, #kt_timepicker_2_modal').timepicker();
  })
</script>
@endsection
