<div class="aside aside-left d-flex flex-column " id="kt_aside">
	<!--begin::Brand-->
	<div class="aside-brand d-flex flex-column align-items-center flex-column-auto pt-5 pt-lg-18 pb-10">
		<!--begin::Logo-->
		<div class="btn p-0 symbol symbol-60 symbol-light-primary" href="?page=index" id="kt_quick_user_toggle">
			<div class="symbol-label ">
				<img alt="Logo" src="{{asset('assets/media/svg/avatars/001-boy.svg')}}" class="h-75 align-self-end"/>
			</div>
		</div>
		<!--end::Logo-->
	</div>
	<!--end::Brand-->

	<!--begin::Nav Wrapper-->
	<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pb-10">
		<!--begin::Nav-->
		<ul class="nav flex-column">
			<!--begin::Item-->

			<!--end::Item-->

			<!--begin::Item-->

			<!--end::Item-->

			<!--begin::Item-->

			<!--end::Item-->

			<!--begin::Item-->

			<!--end::Item-->

			<!--begin::Item-->

			<!--end::Item-->

			<!--begin::Item-->
			<!-- <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Logout">
				<a href="" class="nav-link btn btn-icon btn-hover-text-primary btn-lg " onclick="$('#logoutForm').submit(); return false;" data-toggle="tab" data-target="#kt_aside_tab_6" role="tab">
					<i class="fa fa-sign-out-alt"></i>
				</a>
			</li> -->
			<!--end::Item-->
		</ul>
		<!--end::Nav-->
	</div>
	<!--end::Nav Wrapper-->
	<!--begin::Footer-->
		<div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-8">
						<!--begin::Notifications-->
	        @include('include.notification')
				<!--end::Notifications-->

						<!--begin::Quick Actions-->
	          {{--@include('include.quickaction')--}}
				<!--end::Quick Actions-->

						<!--begin::Quick Panel-->
	         {{--@include('include.quickpanel')--}}
				<!--end::Quick Panel-->

						<!--begin::Languages-->
	          @include('include.language')
				<!--end::Languages-->
				</div>
		<!--end::Footer-->

</div>
