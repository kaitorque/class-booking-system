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
    <a href="{{route('edu_class_edit')}}" class="btn btn-dark font-weight-bold px-6" aria-haspopup="true" aria-expanded="false">
        Create Class
    </a>
  <!--end::Dropdown-->
</div>
@endsection
@section('content')
<div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
    <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">

            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                                    My Class                            </h5>
            <!--end::Title-->

            <!--begin::Separator-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
            <!--end::Separator-->

            <!--begin::Search Form-->
            <div class="d-flex align-items-center" id="kt_subheader_search">
                <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">
                                            6 Total                                    </span>
                                    <form class="ml-5">
                        <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                            <input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search..."/>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <span class="svg-icon"><i class="fa fa-search"></i></span>                                    <!--<i class="flaticon2-search-1 icon-sm"></i>-->
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
			<!--begin::Card-->
<div class="card card-custom">
	<!--begin::Header-->
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				User Management
				<span class="d-block text-muted pt-2 font-size-sm">User management made easy</span>
			</h3>
		</div>
		<div class="card-toolbar">
			<!--begin::Dropdown-->
<div class="dropdown dropdown-inline mr-2">
	<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>		Export
	</button>

	<!--begin::Dropdown Menu-->
	<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
		<!--begin::Navigation-->
		<ul class="navi flex-column navi-hover py-2">
			<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
		        Choose an option:
		    </li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-print"></i></span>
					<span class="navi-text">Print</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-copy"></i></span>
					<span class="navi-text">Copy</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-file-excel-o"></i></span>
					<span class="navi-text">Excel</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-file-text-o"></i></span>
					<span class="navi-text">CSV</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
					<span class="navi-text">PDF</span>
				</a>
			</li>
		</ul>
		<!--end::Navigation-->
	</div>
	<!--end::Dropdown Menu-->
</div>
<!--end::Dropdown-->

<!--begin::Button-->
<!--end::Button-->
		</div>
	</div>
	<!--end::Header-->

	<!--begin::Body-->
	<div class="card-body">
		<!--begin: Datatable-->
		<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
		<!--end: Datatable-->
	</div>
	<!--end::Body-->
</div>
<!--end::Card-->
		</div>
		<!--end::Container-->
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
  var datatable = $('#kt_datatable').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: HOST_URL + '/api/datatables/demos/default.php',
					},
				},
				pageSize: 10, // display 20 records per page
				serverPaging: true,
				serverFiltering: true,
				serverSorting: true,
			},

			// layout definition
			layout: {
				scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
				footer: false, // display/hide footer
			},

			// column sorting
			sortable: true,

			pagination: true,

			search: {
				input: $('#kt_subheader_search_form'),
				delay: 400,
				key: 'generalSearch'
			},

			// columns definition
			columns: [
				{
					field: 'RecordID',
					title: '#',
					sortable: 'asc',
					width: 40,
					type: 'number',
					selector: false,
					textAlign: 'left',
					template: function(data) {
            var number = KTUtil.getRandomInt(1, 100);
						return '<span class="font-weight-bolder">' + number + '</span>';
					}
				}, {
					field: 'OrderID',
					title: 'Class',
					width: 250,
					template: function(data) {
						var number = KTUtil.getRandomInt(1, 10);
						var user_img =  number + '.png';
            var number = KTUtil.getRandomInt(1, 10);
            var status = {
							1: {'Title': 'Entrepreneurship', 'Detail': 'How to create a business'},
							2: {'Title': 'OOP in Java', 'Detail': 'Beginner friendly '},
							3: {'Title': 'Youtube Success', 'Detail': 'Teach how to youtube'},
              4: {'Title': 'CTF Intro', 'Detail': 'Participating in CTF'},
              5: {'Title': 'Laravel Introduction', 'Detail': 'Framework Implementation'},
              6: {'Title': 'Amazon Web Services', 'Detail': 'Cloud Computing'},
              7: {'Title': 'Github Management', 'Detail': 'Collaborator Process'},
              8: {'Title': 'HTML5 Introduction', 'Detail': 'New ways of web development'},
              9: {'Title': 'Webscraping 101', 'Detail': 'Retrieve data from web'},
							10: {'Title': 'Raspberry Pi', 'Detail': 'Small computing devices'},
						};
						var output = '';
						output = '<div class="d-flex align-items-center">\
							<div class="symbol symbol-40 symbol-sm flex-shrink-0">\
								<img class="" src="{{asset('assets/media/class')}}/' + user_img + '" alt="photo">\
							</div>\
							<div class="ml-4">\
								<div class="text-dark-75 font-weight-bolder font-size-lg mb-0">' + status[number].Title + '</div>\
								<a href="#" class="text-muted font-weight-bold text-hover-primary">' + status[number].Detail + '</a>\
							</div>\
						</div>';

						return output;
					}
				}, {
					field: 'Educator',
					title: 'Educator',
					template: function(row) {
            var number = KTUtil.getRandomInt(1, 11);
            var index = KTUtil.getRandomInt(1, 11);
            var status = {
							1: {'Name': 'Idham Idris', 'UserTitle': 'Freelance Developer'},
							2: {'Name': 'Muhyiddin Yaasinin', 'UserTitle': 'Beginner friendly '},
							3: {'Name': 'Muthu Saravamanan', 'UserTitle': 'Teach how to youtube'},
              4: {'Name': 'Nurul Izzah Adhar', 'UserTitle': 'Participating in CTF'},
              5: {'Name': 'Said Saddiq Abdul Rahman', 'UserTitle': 'Framework Implementation'},
              6: {'Name': 'Lee Tiong Mai', 'UserTitle': 'Cloud Computing'},
              7: {'Name': 'Ahmed Maslang Majidin', 'UserTitle': 'Collaborator Process'},
              8: {'Name': 'Wee Ka Liong', 'UserTitle': 'New ways of web development'},
              9: {'Name': 'Deeban Singh Muruthu', 'UserTitle': 'Retrieve data from web'},
              10: {'Name': 'Jeffrey Lim', 'UserTitle': 'Small computing devices'},
							11: {'Name': 'Nurul Ain Suhaimi', 'UserTitle': 'Small computing devices'}
						};
            var output = '';
						output += '<div class="font-weight-bolder font-size-lg mb-0">' + status[number].Name + '</div>';
						output += '<div class="font-weight-bold text-muted">Code: ' + status[index].UserTitle + '</div>';

						return output;
					}
				}, {
					field: 'Datetime',
					title: 'Datetime',
					template: function(row) {
						var output = '';

						var status = {
							1: {'Date': '15 July 2020', 'Time': '8:00am-10:00am'},
							2: {'Date': '16 July 2020', 'Time': '9:00am-11:00am'},
							3: {'Date': '17 July 2020', 'Time': '1:00pm-3:00pm'},
							4: {'Date': '18 July 2020', 'Time': '2:00pm-4:00pm'},
              5: {'Date': '19 July 2020', 'Time': '1:00pm-6:00pm'},
							6: {'Date': '20 July 2020', 'Time': '4:00pm-6:00pm'},
							7: {'Date': '21 July 2020', 'Time': '8:00pm-10:00pm'},
							8: {'Date': '22 July 2020', 'Time': '8:00am-1:00pm'},
              9: {'Date': '23 July 2020', 'Time': '10:00pm-2:00pm'},
							10: {'Date': '24 July 2020', 'Time': '2:00pm-3:00pm'}
						};
            var index = KTUtil.getRandomInt(1, 10);
						var number = KTUtil.getRandomInt(1, 10);

						output += '<div class="font-weight-bolder text-primary mb-0">' + status[index].Date + '</div>';
						output += '<div class="text-muted">' + status[number].Time + '</div>';

						return output;
					},
				}, {
					field: 'Status',
					title: 'Status',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'status': 'Upcoming', 'class': ' label-light-primary'},
							2: {'status': 'Cancelled', 'class': ' label-light-danger'},
							3: {'status': 'Completed', 'class': ' label-light-success'},
              4: {'status': 'Archived', 'class': ' label-light-warning'},
							5: {'status': 'Join', 'class': ' label-light-info'},
						};
            var index = KTUtil.getRandomInt(1, 4);
						return '<span class="label label-lg font-weight-bold ' + status[index].class + ' label-inline">' + status[index].status + '</span>';
					},
				}, {
					field: 'Actions',
					title: 'Actions',
					sortable: false,
					width: 130,
					overflow: 'visible',
					autoHide: false,
					template: function() {
						return '\
	                        <a href="{{route('edu_class')}}" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="Edit details">\
	                            <span class="svg-icon svg-icon-md">\
									<i class="fa fa-info"></i>\
	                            </span>\
	                        </a>\
	                    ';
					},
				}],
		});
})
</script>
@endsection
