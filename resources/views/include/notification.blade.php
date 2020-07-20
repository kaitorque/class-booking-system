<a href="#" class="btn btn-icon btn-hover-text-primary btn-lg mb-1 position-relative" id="kt_quick_notifications_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Notifications">
  <span class="svg-icon svg-icon-xxl"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
  <polygon points="0 0 24 0 24 24 0 24"/>
  <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"/>
  <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"/>
</g>
</svg><!--end::Svg Icon--></span>				<span class="label label-sm label-light-danger label-rounded font-weight-bolder position-absolute top-0 right-0 mt-1 mr-1">3</span>
</a>

@section('quicknotificationpanel')
<div id="kt_quick_notifications" class="offcanvas offcanvas-left p-10">
	<!--begin::Header-->
	<div class="offcanvas-header d-flex align-items-center justify-content-between mb-10">
		<h3 class="font-weight-bold m-0">
			Notifications
			<small class="text-muted font-size-sm ml-2">24 New</small>
		</h3>
		<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_notifications_close">
			<i class="ki ki-close icon-xs text-muted"></i>
		</a>
	</div>
	<!--end::Header-->

	<!--begin::Content-->
	<div class="offcanvas-content pr-5 mr-n5">
		<!--begin::Nav-->
		<div class="navi navi-icon-circle navi-spacer-x-0">
			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon-bell text-success icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold font-size-lg">
							5 new user generated report
						</div>
						<div class="text-muted">
							Reports based on sales
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon2-box text-danger icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							2 new items submited
						</div>
						<div class="text-muted">
							by Grog John
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon-psd text-primary icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							79 PSD files generated
						</div>
						<div class="text-muted">
							Reports based on sales
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon2-supermarket text-warning icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							$2900 worth producucts sold
						</div>
						<div class="text-muted">
							Total 234 items
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							4.5h-avarage response time
						</div>
						<div class="text-muted">
							Fostest is Barry
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon-safe-shield-protection text-danger icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							3 Defence alerts
						</div>
						<div class="text-muted">
							40% less alerts thar last week
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon-notepad text-primary icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							Avarage 4 blog posts per author
						</div>
						<div class="text-muted">
							Most posted 12 time
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon-users-1 text-warning icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							16 authors joined last week
						</div>
						<div class="text-muted">
							9 photodrapehrs, 7 designer
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon2-box text-info icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							2 new items have been submited
						</div>
						<div class="text-muted">
							by Grog John
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon2-download text-success icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							2.8 GB-total downloads size
						</div>
						<div class="text-muted">
							Mostly PSD end  AL concepts
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon2-supermarket text-danger icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							$2900 worth producucts sold
						</div>
						<div class="text-muted">
							Total 234 items
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon-bell text-primary icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							7 new user generated report
						</div>
						<div class="text-muted">
							Reports based on sales
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->

			<!--begin::Item-->
			<a href="#" class="navi-item">
				<div class="navi-link rounded">
					<div class="symbol symbol-50 symbol-circle mr-3">
						<div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i></div>
					</div>
					<div class="navi-text">
						<div class="font-weight-bold  font-size-lg">
							4.5h-avarage response time
						</div>
						<div class="text-muted">
							Fostest is Barry
						</div>
					</div>
				</div>
			</a>
			<!--end::Item-->
		</div>
		<!--end::Nav-->
	</div>
	<!--end::Content-->
</div>
@endsection
