<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->
    <head><base href="">
        <meta charset="utf-8"/>
        <title>Metronic | Dashboard</title>
        <meta name="description" content="Updates and statistics"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->

                    <!--begin::Page Vendors Styles(used by this page)-->
                          @yield('plugincss')
                        <!--end::Page Vendors Styles-->


        <!--begin::Global Theme Styles(used by all pages)-->
                    @include('include.globalcss')
                <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->

                <!--end::Layout Themes-->
                  @yield('pagecss')
        <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}"/>

            </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="header-fixed header-mobile-fixed sidebar-enabled page-loading"  >

    	<!--begin::Main-->
	<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile  header-mobile-fixed " >
	<!--begin::Logo-->
	<a href="index.html">
		<img alt="Logo" src="{{asset('assets/media/logos/logo-letter-1.png')}}" class="logo-default max-h-30px"/>
	</a>
	<!--end::Logo-->

	<!--begin::Toolbar-->
	<div class="d-flex align-items-center">
					<button class="btn rounded-0 p-0 burger-icon burger-icon-left" id="kt_header_mobile_toggle">
				<span></span>
			</button>

					<button class="btn btn-hover-icon-primary p-0 ml-5" id="kt_sidebar_mobile_toggle">
				<span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Substract.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,9 L6,15 C6,16.6568542 7.34314575,18 9,18 L15,18 L15,18.8181818 C15,20.2324881 14.2324881,21 12.8181818,21 L5.18181818,21 C3.76751186,21 3,20.2324881 3,18.8181818 L3,11.1818182 C3,9.76751186 3.76751186,9 5.18181818,9 L6,9 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M10.1818182,4 L17.8181818,4 C19.2324881,4 20,4.76751186 20,6.18181818 L20,13.8181818 C20,15.2324881 19.2324881,16 17.8181818,16 L10.1818182,16 C8.76751186,16 8,15.2324881 8,13.8181818 L8,6.18181818 C8,4.76751186 8.76751186,4 10.1818182,4 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>			</button>

					<button class="btn btn-hover-icon-primary p-0 ml-2" id="kt_aside_mobile_toggle">
				<span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>			</button>
			</div>
	<!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
							<!--begin::Aside-->
              @include('include.sidemenu')
              <!--end::Aside-->

			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header-->
<div id="kt_header" class="header  header-fixed " >
	<!--begin::Header Wrapper-->
	<div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">
		<!--begin::Container-->
		<div class=" container-fluid  d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">
			<!--begin::Menu Wrapper-->
      @include('include.topmenu')
			<!--end::Menu Wrapper-->

			<!--begin::Toolbar-->
      @yield('toolbar')

			<!--end::Toolbar-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Header Wrapper-->
</div>
<!--end::Header-->

				<!--begin::Content-->
				<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

					<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
			<!--begin::Dashboard-->
      @yield('content')
<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->
				</div>
				<!--end::Content-->

				<!--begin::Footer-->
<div class="footer py-2 py-lg-0 my-5 d-flex flex-lg-column " id="kt_footer">
	<!--begin::Container-->
	<div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
		<!--begin::Copyright-->
		<div class="text-dark order-2 order-md-1">
			<span class="text-muted font-weight-bold mr-2">2020&copy;</span>
			<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Clazzy</a>
		</div>
		<!--end::Copyright-->

		<!--begin::Nav-->
		<div class="nav nav-dark order-1 order-md-2">
			<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">About</a>
			<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">FAQ</a>
		</div>
		<!--end::Nav-->
	</div>
	<!--end::Container-->
</div>
<!--end::Footer-->
			</div>
			<!--end::Wrapper-->

							<!--begin::Aside Secondary-->
<div class="sidebar sidebar-left d-flex flex-row-auto flex-column " id="kt_sidebar">
    <!--begin::Aside Secondary Header-->
    <div class="sidebar-header flex-column-auto pt-5 pt-lg-19 pb-5 px-5 px-lg-10">
        <!--begin::Toolbar-->
        <div class="d-flex">
            <!--begin::Desktop Search-->
			<div class="quick-search quick-search-inline flex-grow-1" id="kt_quick_search_inline">
				<!--begin::Form-->
				<form method="get" class="quick-search-form">
			        <div class="input-group rounded bg-light">
			            <div class="input-group-prepend">
							<span class="input-group-text">
								<span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>							</span>
						</div>

						<input type="text" class="form-control h-40px" placeholder="Search..."/>

			            <div class="input-group-append">
							<span class="input-group-text">
								<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
							</span>
						</div>
			        </div>
				</form>
				<!--end::Form-->

				<!--begin::Search Toggle-->
				<div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
				<!--end::Search Toggle-->

				<!--begin::Dropdown-->
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-anim-up">
			        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200">
			        </div>
				</div>
				<!--end::Dropdown-->
			</div>
			<!--end::Desktop Search-->

            <!--begin::Dropdown-->
         
            <!--end::Dropdown-->

            <!--begin::Dropdown-->
          
            <!--end::Dropdown-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Aside Secondary Header-->

    <!--begin::Aside Secondary Content-->
    <div class="sidebar-content flex-column-fluid pb-10 pt-9 px-5 px-lg-10">
      @yield('sidebar')
    </div>
    <!--end::Aside Secondary Content-->
</div>
<!--end::Aside Secondary-->
					</div>
		<!--end::Page-->
	</div>
<!--end::Main-->



                    		<!-- begin::Notifications Panel-->
                        @yield('quicknotificationpanel')

<!-- end::Notifications Panel-->

                    		<!--begin::Quick Actions Panel-->
                        @yield('quickactionpanel')

<!--end::Quick Actions Panel-->

                    		<!-- begin::User Panel-->
                        @include('include.userpanel')

<!-- end::User Panel-->

                            <!--begin::Quick Panel-->
                            @yield('quickpanelpanel')

<!--end::Quick Panel-->


                            <!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
	<span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span></div>
<!--end::Scrolltop-->

                            <!--begin::Sticky Toolbar-->
                            {{--@include("include.stickytoolbar")--}}

<!--end::Sticky Toolbar-->
                <!--begin::Demo Panel-->

<!--end::Demo Panel-->
        <!--begin::Global Config(global config for global JS scripts)-->
        @include('include.globalconfig')
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
      @include('include.globalplugin')
				<!--end::Global Theme Bundle-->

                    <!--begin::Page Vendors(used by this page)-->
                    @yield('pageplugin')
                            <script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6')}}"></script>
                        <!--end::Page Vendors-->

                    <!--begin::Page Scripts(used by this page)-->
                    @yield('pagescript')
                            <script src="{{asset('assets/js/pages/widgets.js?v=7.0.6')}}"></script>
                        <!--end::Page Scripts-->
                    @yield('pageready')
            </body>
    <!--end::Body-->
</html>
