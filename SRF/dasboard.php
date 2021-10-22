<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>SRM | Supply Resources Manager</title>
		<meta name="description" content="MyDadje By GENIWORKS">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});


				$(document).ready(function() {
    $('#materials').hide();
    $('#chemicals').hide();
    $('#ppe').hide();
    $('#ape').hide();
    
});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="img/favicon-32x32.png" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body  onload="holaa(11);holao(11)" class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="demo1/index.html">
					<img alt="Logo" src="img/favicon-32x32.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->

		<!-- begin:: Root -->
		<div class="kt-grid kt-grid--hor kt-grid--root">

			<!-- begin:: Page -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin::Aside Brand -->
					<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
						<div class="kt-aside__brand-logo">
							<a href="demo1/index.html">
								<img alt="Logo" src="img/logo-geniworks-2.png" width="180"/>
							</a>
						</div>
						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
						</div>
					</div>

					<!-- end:: Aside Brand -->

					<!-- begin:: Aside Menu -->
					<?php include('leftside.php'); ?>

					<!-- end:: Aside Footer-->
				</div>

				<!-- end:: Aside -->

				<!-- begin:: Wrapper -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- begin:: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
							<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
								
							</div>
						</div>

						<!-- end:: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">

							<!--begin: Search -->
							<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg">
									<div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
										<form method="get" class="kt-quick-search__form">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
												<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
												<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
											</div>
										</form>
										<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
										</div>
									</div>
								</div>
							</div>

							<!--end: Search -->

							<!--begin: Notifications -->
							<div class="kt-header__topbar-item dropdown">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px, 0px" aria-expanded="true">
									<span class="kt-header__topbar-icon">
										<i class="flaticon2-bell-alarm-symbol"></i>
										<span class="kt-badge kt-badge--dot kt-badge--notify kt-badge--sm kt-badge--brand"></span>
									</span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
									<form>
										<div class="kt-head" style="background-image: url(assets/media/misc/head_bg_sm.jpg)">
											<h3 class="kt-head__title">User Notifications</h3>
											<div class="kt-head__sub"><span class="kt-head__desc">23 new notifications</span></div>
										</div>
										<div class="kt-notification kt-margin-t-30 kt-margin-b-20 kt-scroll" data-scroll="true" data-height="270" data-mobile-height="220">
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-line-chart kt-font-success"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New order has been received
													</div>
													<div class="kt-notification__item-time">
														2 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-box-1 kt-font-brand"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New customer is registered
													</div>
													<div class="kt-notification__item-time">
														3 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-chart2 kt-font-danger"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														Application has been approved
													</div>
													<div class="kt-notification__item-time">
														3 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-image-file kt-font-warning"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New file has been uploaded
													</div>
													<div class="kt-notification__item-time">
														5 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-bar-chart kt-font-info"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New user feedback received
													</div>
													<div class="kt-notification__item-time">
														8 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-pie-chart-2 kt-font-success"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														System reboot has been successfully completed
													</div>
													<div class="kt-notification__item-time">
														12 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-favourite kt-font-focus"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New order has been placed
													</div>
													<div class="kt-notification__item-time">
														15 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item kt-notification__item--read">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-safe kt-font-primary"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														Company meeting canceled
													</div>
													<div class="kt-notification__item-time">
														19 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-psd kt-font-success"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New report has been received
													</div>
													<div class="kt-notification__item-time">
														23 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon-download-1 kt-font-danger"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														Finance report has been generated
													</div>
													<div class="kt-notification__item-time">
														25 hrs ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon-security kt-font-warning"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New customer comment recieved
													</div>
													<div class="kt-notification__item-time">
														2 days ago
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-pie-chart kt-font-focus"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														New customer is registered
													</div>
													<div class="kt-notification__item-time">
														3 days ago
													</div>
												</div>
											</a>
										</div>
									</form>
								</div>
							</div>

							<!--end: Notifications -->

							<!--begin: Quick Actions -->
							<div class="kt-header__topbar-item">
								<div class="kt-header__topbar-wrapper" id="kt_offcanvas_toolbar_quick_actions_toggler_btn">
									<span class="kt-header__topbar-icon"><i class="flaticon2-gear"></i></span>
								</div>
							</div>

							<!--end: Quick Actions -->

							<!--begin:: Languages -->
							<div class="kt-header__topbar-item kt-header__topbar-item--langs">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon">
										<img class="" src="assets/media/flags/020-flag.svg" alt="" />
									</span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
									<ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
										<li class="kt-nav__item kt-nav__item--active">
											<a href="#" class="kt-nav__link">
												<span class="kt-nav__link-icon"><img src="assets/media/flags/020-flag.svg" alt="" /></span>
												<span class="kt-nav__link-text">English</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<span class="kt-nav__link-icon"><img src="assets/media/flags/016-spain.svg" alt="" /></span>
												<span class="kt-nav__link-text">Spanish</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<span class="kt-nav__link-icon"><img src="assets/media/flags/017-germany.svg" alt="" /></span>
												<span class="kt-nav__link-text">German</span>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<!--end:: Languages -->

							<!--begin: User Bar -->
							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px, 0px">
									<div class="kt-header__topbar-user">
										<span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
										<span class="kt-header__topbar-username kt-hidden-mobile">Jahid</span>
										<img alt="Pic" src="img/logo-geniworks.png" />

										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
										<span class="kt-badge kt-badge--username kt-badge--lg kt-badge--brand kt-hidden kt-badge--bold">S</span>
									</div>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-sm">
									<div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile" style="background-image: url(assets/media/misc/head_bg_sm.jpg)">
										<div class="kt-user-card__wrapper">
											<div class="kt-user-card__pic">
												<img alt="Pic" src="img/logo-geniworks.png" />
											</div>
											<div class="kt-user-card__details">
												<div class="kt-user-card__name">Jahid Ben</div>
												<div class="kt-user-card__position">DM, GENIWORKS Inc.</div>
											</div>
										</div>
									</div>
									<ul class="kt-nav kt-margin-b-10">
										<li class="kt-nav__item">
											<a href="demo1/custom/user/profile-v1.html" class="kt-nav__link">
												<span class="kt-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
												<span class="kt-nav__link-text">My Profile</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="demo1/custom/user/profile-v1.html" class="kt-nav__link">
												<span class="kt-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
												<span class="kt-nav__link-text">My Tasks</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="demo1/custom/user/profile-v1.html" class="kt-nav__link">
												<span class="kt-nav__link-icon"><i class="flaticon2-mail"></i></span>
												<span class="kt-nav__link-text">Messages</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="demo1/custom/user/profile-v1.html" class="kt-nav__link">
												<span class="kt-nav__link-icon"><i class="flaticon2-gear"></i></span>
												<span class="kt-nav__link-text">Settings</span>
											</a>
										</li>
										<li class="kt-nav__item kt-nav__item--custom kt-margin-t-15">
											<a href="demo1/custom/user/login-v1.html" target="_blank" class="btn btn-label-brand btn-upper btn-sm btn-bold">Sign Out</a>
										</li>
									</ul>
								</div>
							</div>

							<!--end: User Bar -->

							<!--begin:: Quick Panel Toggler -->
							<div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="Quick panel" data-placement="right">
								<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
									<i class="flaticon2-grids"></i>
								</span>
							</div>

							<!--end:: Quick Panel Toggler -->
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						<!-- begin:: Subheader -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-subheader__main">
								<h2 class="kt-subheader__title">Supply Resources Manager</h2>
								<span class="kt-subheader__separator kt-hidden"></span>
								<div class="kt-subheader__breadcrumbs" style="float:right;">
									<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
									<span class="kt-subheader__breadcrumbs-separator"></span>
									<a href="" class="kt-subheader__breadcrumbs-link">
										Home </a>
									<span class="kt-subheader__breadcrumbs-separator"></span>
									<a href="" class="kt-subheader__breadcrumbs-link">
										SRF </a>
									<span class="kt-subheader__breadcrumbs-separator"></span>
									<a href="" class="kt-subheader__breadcrumbs-link">
										Supply Resources Manager </a>

									<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
								</div>
							</div>
							
						</div>

						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
											Responsive DataTable
										</h3>
									</div>
								</div>
								<div class="kt-portlet__body">
<form class="kt-form kt-form--fit kt-margin-b-20">
										<div class="row kt-margin-b-20">
											<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
												<label>RecordID:</label>
												<input type="text" class="form-control kt-input" placeholder="E.g: 4590" data-col-index="0">
											</div>
											<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
												<label>Resource:</label>
												<input type="text" class="form-control kt-input" placeholder="" data-col-index="1">
											</div>
											<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
												<label>Owner:</label>
												<select class="form-control kt-input" data-col-index="2">
													<option value=""></option>
													<optgroup>
													<option value="">APM-1</option>
													<option value="">APM-2</option>	
													</optgroup>
													
													<optgroup>
													<option value="">DE</option>
													<option value="">TC3</option>	
													</optgroup>
													<optgroup>
													<option value="">BMCI</option>
												</optgroup>
												<optgroup>
													<option value="">EUROGATE</option>
												</optgroup>
												</select>
											</div>
											<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
												<label>Status:</label>
												<select class="form-control kt-input" data-col-index="6">
													<option value="">Select</option>
												</select>
											</div>
										</div>
										<div class="row kt-margin-b-20">
											<div class="col-lg-3 kt-margin-b-10-tablet-and-mobile">
												<label>Date Range:</label>
												<div class="input-daterange input-group" id="m_datepicker">
													<input type="text" class="form-control kt-input" name="start" placeholder="From" data-col-index="5" />
													<div class="input-group-append">
														<span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
													</div>
													<input type="text" class="form-control kt-input" name="end" placeholder="To" data-col-index="5" />
												</div>
											</div>
											
										</div>
										<div class="kt-separator kt-separator--md kt-separator--dashed"></div>
										<div class="row">
											<div class="col-lg-12">
												<button class="btn btn-brand kt-btn kt-btn--icon" id="m_search">
													<span>
														<i class="la la-search"></i>
														<span>Search</span>
													</span>
												</button>
												
												<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-xl">Replace</button>


												<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	
																	
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">






										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h4 class="modal-title">Request </h4>

												
											</div>
										</div>
										<label style="padding-left:3%;" class="col-lg-12 col-form-label label-success">Custom Your Request By Resource Priority...</label>

										<!--begin::Form-->
										<form class="kt-form kt-form--fit kt-form--label-right">
											<div class="kt-portlet__body">
												<div class="form-group row">
										<label class="col-lg-2 col-form-label">Owner:</label>
											<div class="col-lg-3">
												<select onChange="holao(this.value);" class="form-control kt-input" data-col-index="2">
													<option value=""></option>
													<optgroup>
													<option selected value="21">APM-1</option>
													<option value="22">APM-2</option>	
													</optgroup>
													<optgroup>
													<option value="23">EUROGATE</option>
													</optgroup>
													<optgroup>
													<option value="24">DE</option>
													<option value="25">TC3</option>	
													</optgroup>
													<optgroup>
													<option value="26">BMCI</option>
													</optgroup>
												</select>
													<span class="form-text text-muted">Please Select The Owner</span>
												</div>
													<label class="col-lg-2 col-form-label">Resource:</label>
													<div class="col-lg-3">
												<select  onChange="holaa(this.value);" class="form-control kt-input" data-col-index="2">
													<option value=""></option>
													<option selected value="11">Tool</option>
													<option value="12">Material</option>
													<option value="13">Chemical</option>
													<option value="14">PPE</option>
													<option value="15">APE</option>
												</select>
														<span class="form-text text-muted">Please Select Requested Resource</span>
													</div>
												</div>
						<div  class="form-group row"> 
												<div id="tools" style=" position:relative;">
													<?php include('controls/showtools.php')?>
												</div>
												<div id="materials" style="position:relative;">
													<?php include('controls/showmat.php')?>
												</div>
												
												<div id="chemicals" style=" position:relative;">
													<?php include('controls/showchemicals.php')?>
												</div>
												<div id="ppe" style=" position:relative;" >
													<?php include('controls/showppe.php')?>
												</div>
												<div id="ape" style=" position:relative;">
													<?php include('controls/showape.php')?>
												</div>
											</div>
										</div>
											
										</form>

																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-success">Request</button>
																	<button type="button" class="btn " data-dismiss="modal">Close</button>
																	
																</div>
															</div>
														</div>
													</div>


	

												<button class="btn btn-danger kt-btn kt-btn--icon">
													<span>
														<span>Supply</span>
													</span>
												</button>

												&nbsp;&nbsp;
												<button class="btn btn-secondary kt-btn kt-btn--icon" id="m_reset">
													<span>
														<i class="la la-close"></i>
														<span>Reset</span>
													</span>
												</button>
											</div>
										</div>
									</form>
									<!--begin: Datatable -->
									<?php include('controls/showrequest.php')?>

									<!--end: Datatable -->
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
					<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
						<div class="kt-footer__copyright">
							2018&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/keen" target="_blank" class="kt-link">GENIWORKS Inc</a>
						</div>
						<div class="kt-footer__menu">
							<a href="http://keenthemes.com/keen" target="_blank" class="kt-footer__menu-link kt-link">About</a>
							<a href="http://keenthemes.com/keen" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
							<a href="http://keenthemes.com/keen" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>

				<!-- end:: Wrapper -->
			</div>

			<!-- end:: Page -->
		</div>

		<!-- end:: Root -->

		<!-- begin:: Topbar Offcanvas Panels -->

		<!-- begin::Offcanvas Toolbar Quick Actions -->
		<div id="kt_offcanvas_toolbar_quick_actions" class="kt-offcanvas-panel">
			<div class="kt-offcanvas-panel__head">
				<h3 class="kt-offcanvas-panel__title">
					Quick Actions
				</h3>
				<a href="#" class="kt-offcanvas-panel__close" id="kt_offcanvas_toolbar_quick_actions_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="kt-offcanvas-panel__body">
				<div class="kt-grid-nav-v2">
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-box"></i></div>
						<div class="kt-grid-nav-v2__item-title">Orders</div>
					</a>
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon-download-1"></i></div>
						<div class="kt-grid-nav-v2__item-title">Uploades</div>
					</a>
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-supermarket"></i></div>
						<div class="kt-grid-nav-v2__item-title">Products</div>
					</a>
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-avatar"></i></div>
						<div class="kt-grid-nav-v2__item-title">Customers</div>
					</a>
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-list"></i></div>
						<div class="kt-grid-nav-v2__item-title">Blog Posts</div>
					</a>
					<a href="#" class="kt-grid-nav-v2__item">
						<div class="kt-grid-nav-v2__item-icon"><i class="flaticon2-settings"></i></div>
						<div class="kt-grid-nav-v2__item-title">Settings</div>
					</a>
				</div>
			</div>
		</div>

		<!-- end::Offcanvas Toolbar Quick Actions -->

		<!-- end:: Topbar Offcanvas Panels -->

		<!-- begin:: Quick Panel -->
		<div id="kt_quick_panel" class="kt-offcanvas-panel">
			<div class="kt-offcanvas-panel__nav">
				<ul class="nav nav-pills" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_actions" role="tab">Actions</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
				<button class="kt-offcanvas-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></button>
			</div>
			<div class="kt-offcanvas-panel__body">
				<div class="tab-content">
					<div class="tab-pane fade show kt-offcanvas-panel__content kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">

						<!--Begin::Timeline -->
						<div class="kt-timeline">

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--success">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon-feed kt-font-success"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">02:30 PM</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									KeenThemes created new layout whith tens of new options for Keen Admin panel
								</a>
								<div class="kt-timeline__item-info">
									HTML,CSS,VueJS
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--danger">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon-safe-shield-protection kt-font-danger"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">01:20 AM</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									New secyrity alert by Firewall & order to take aktion on User Preferences
								</a>
								<div class="kt-timeline__item-info">
									Security, Fieewall
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--brand">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon2-box kt-font-brand"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">Yestardey</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									FlyMore design mock-ups been uploadet by designers Bob, Naomi, Richard
								</a>
								<div class="kt-timeline__item-info">
									PSD, Sketch, AJ
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--warning">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon-pie-chart-1 kt-font-warning"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">Aug 13,2018</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									Meeting with Ken Digital Corp ot Unit14, 3 Edigor Buildings, George Street, Loondon<br> England, BA12FJ
								</a>
								<div class="kt-timeline__item-info">
									Meeting, Customer
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--info">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon-notepad kt-font-info"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">May 09, 2018</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									KeenThemes created new layout whith tens of new options for Keen Admin panel
								</a>
								<div class="kt-timeline__item-info">
									HTML,CSS,VueJS
								</div>
							</div>

							<!--End::Item -->

							<!--Begin::Item -->
							<div class="kt-timeline__item kt-timeline__item--accent">
								<div class="kt-timeline__item-section">
									<div class="kt-timeline__item-section-border">
										<div class="kt-timeline__item-section-icon">
											<i class="flaticon-bell kt-font-success"></i>
										</div>
									</div>
									<span class="kt-timeline__item-datetime">01:20 AM</span>
								</div>
								<a href="" class="kt-timeline__item-text">
									New secyrity alert by Firewall & order to take aktion on User Preferences
								</a>
								<div class="kt-timeline__item-info">
									Security, Fieewall
								</div>
							</div>

							<!--End::Item -->
						</div>

						<!--End::Timeline -->
					</div>
					<div class="tab-pane fade kt-offcanvas-panel__content kt-scroll" id="kt_quick_panel_tab_actions" role="tabpanel">

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--solid-success">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon kt-hide"><i class="flaticon-stopwatch"></i></span>
									<h3 class="kt-portlet__head-title">Recent Bills</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--solid-focus">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon kt-hide"><i class="flaticon-stopwatch"></i></span>
									<h3 class="kt-portlet__head-title">Latest Orders</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--solid-info">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">Latest Invoices</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--solid-warning">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">New Comments</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--solid-brand">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">Recent Posts</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-group">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<i class="flaticon-more"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-portlet__content">
									Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
								</div>
							</div>
							<div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">Dismiss</a>
								<a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">View</a>
							</div>
						</div>

						<!--end::Portlet-->
					</div>
					<div class="tab-pane fade kt-offcanvas-panel__content kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
						<form class="kt-form">
							<div class="kt-heading kt-heading--space-sm">Notifications</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable notifications:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable audit log:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Notify on new orders:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--space-sm">Orders</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable order tracking:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable orders reports:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Allow order status auto update:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--space-sm">Customers</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable customer singup:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--success">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable customers reporting:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--success">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Notifiy on new customer registration:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--success">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Quick Panel -->

		<!-- begin:: Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end:: Scrolltop -->

		<!-- begin:: Demo Toolbar -->


		<!-- end:: Demo Toolbar -->

		<!-- begin::Demo Panel -->
		<div id="kt_demo_panel" class="kt-demo-panel">
			<div class="kt-demo-panel__head">
				<h3 class="kt-demo-panel__title">
					Select A Demo

					<!--<small>5</small>-->
				</h3>
				<a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="kt-demo-panel__body">
				<div class="kt-demo-panel__item kt-demo-panel__item--active">
					<div class="kt-demo-panel__item-title">
						Demo 1
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo1.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo1/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 2
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo2.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 3
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo3.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 4
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo4.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 5
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo5.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 6
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo6.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 7
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo7.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 8
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo8.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 9
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="assets/media//demos/preview/demo9.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
					Buy Keen Now!
				</a>
			</div>
		</div>

		<!-- end::Demo Panel -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"metal": "#c4c5d6",
						"light": "#ffffff",
						"accent": "#00c5dc",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995",
						"focus": "#9816f4"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="assets/js/demo1/pages/crud/datatables/extensions/responsive.js" type="text/javascript"></script>
<script>
					

					document.getElementById("tools").style.visibility="visible";
                    document.getElementById("materials").style.visibility="hidden";
                    document.getElementById("chemicals").style.visibility="hidden";
                    document.getElementById("ppe").style.visibility="hidden";
                    document.getElementById("ape").style.visibility="hidden";



                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("mapm2").style.visibility="hidden";
                    document.getElementById("capm2").style.visibility="hidden";

                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("meurogate").style.visibility="hidden";
                    document.getElementById("ceurogate").style.visibility="hidden";

                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("mde").style.visibility="hidden";
                    document.getElementById("cde").style.visibility="hidden";

                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("mtc3").style.visibility="hidden";
                    document.getElementById("ctc3").style.visibility="hidden";

                    document.getElementById("bmci").style.visibility="hidden";
                    document.getElementById("mbmci").style.visibility="hidden";
                    document.getElementById("cbmci").style.visibility="hidden";
                    
                    document.getElementById("apm1").style.position = 'relative';
                    document.getElementById("mapm1").style.position = 'absolute';
                    document.getElementById("capm1").style.position = 'absolute';

                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("mapm2").style.position = 'absolute';
                    document.getElementById("capm2").style.position = 'absolute';

                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("meurogate").style.position = 'absolute';
                    document.getElementById("ceurogate").style.position = 'absolute';

                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("mde").style.position = 'absolute';
                    document.getElementById("cde").style.position = 'absolute';

                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("mtc3").style.position = 'absolute';
                    document.getElementById("ctc3").style.position = 'absolute';

                    document.getElementById("bmci").style.position = 'absolute';
                    document.getElementById("mbmci").style.position = 'absolute';
                    document.getElementById("cbmci").style.position = 'absolute';



function holaa(x) {
               



                if(x == 11) {

                    document.getElementById("tools").style.visibility="visible";
                    document.getElementById("materials").style.visibility="hidden";
                    document.getElementById("chemicals").style.visibility="hidden";
                    document.getElementById("ppe").style.visibility="hidden";
                    document.getElementById("ape").style.visibility="hidden";

                    
                    document.getElementById("ape").style.position = 'absolute';
                    document.getElementById("ppe").style.position = 'absolute';
                    document.getElementById("chemicals").style.position = 'absolute';
                    document.getElementById("materials").style.position = 'absolute';
                    document.getElementById("tools").style.position = 'relative';

                    document.getElementById("chemicals").style.display = 'none';
                    document.getElementById("ppe").style.display = 'none';
                    document.getElementById("ape").style.display = 'none';
                    document.getElementById("materials").style.display = 'none';
                    document.getElementById("tools").style.display = 'block';
                }
                if(x == 12)  {
                    document.getElementById("tools").style.visibility="hidden";
                    document.getElementById("materials").style.visibility="visible";
                    document.getElementById("chemicals").style.visibility="hidden";
                    document.getElementById("ppe").style.visibility="hidden";
                    document.getElementById("ape").style.visibility="hidden";
                    
                   
                    document.getElementById("ape").style.position = 'absolute';
                    document.getElementById("ppe").style.position = 'absolute';
                    document.getElementById("chemicals").style.position = 'absolute';
                    document.getElementById("materials").style.position = 'relative';
                    document.getElementById("tools").style.position = 'absolute';

                    document.getElementById("chemicals").style.display = 'none';
                    document.getElementById("ppe").style.display = 'none';
                    document.getElementById("ape").style.display = 'none';
                    document.getElementById("materials").style.display = 'block';
                    document.getElementById("tools").style.display = 'none';
                }
                if(x == 13)  {
                    document.getElementById("tools").style.visibility="hidden";
                    document.getElementById("materials").style.visibility="hidden";
                    document.getElementById("chemicals").style.visibility="visible";
                    document.getElementById("ppe").style.visibility="hidden";
                    document.getElementById("ape").style.visibility="hidden";
                    
                   
                    document.getElementById("ape").style.position = 'absolute';
                    document.getElementById("ppe").style.position = 'absolute';
                    document.getElementById("chemicals").style.position = 'relative';
                    document.getElementById("materials").style.position = 'absolute';
                    document.getElementById("tools").style.position = 'absolute';

                    document.getElementById("chemicals").style.display = 'block';
                    document.getElementById("ppe").style.display = 'none';
                    document.getElementById("ape").style.display = 'none';
                    document.getElementById("materials").style.display = 'none';
                    document.getElementById("tools").style.display = 'none';
                }
                if(x == 14)  {
                    document.getElementById("tools").style.visibility="hidden";
                    document.getElementById("materials").style.visibility="hidden";
                    document.getElementById("chemicals").style.visibility="hidden";
                    document.getElementById("ppe").style.visibility="visible";
                    document.getElementById("ape").style.visibility="hidden";
                    
                   
                    document.getElementById("ape").style.position = 'absolute';
                    document.getElementById("ppe").style.position = 'relative';
                    document.getElementById("chemicals").style.position = 'absolute';
                    document.getElementById("materials").style.position = 'absolute';
                    document.getElementById("tools").style.position = 'absolute';

                    document.getElementById("chemicals").style.display = 'none';
                    document.getElementById("ppe").style.display = 'block';
                    document.getElementById("ape").style.display = 'none';
                    document.getElementById("materials").style.display = 'none';
                    document.getElementById("tools").style.display = 'none';
                }
                if(x == 15)  {
                    document.getElementById("tools").style.visibility="hidden";
                    document.getElementById("materials").style.visibility="hidden";
                    document.getElementById("chemicals").style.visibility="hidden";
                    document.getElementById("ppe").style.visibility="hidden";
                    document.getElementById("ape").style.visibility="visible";
                   
                    document.getElementById("ape").style.position = 'relative';
                    document.getElementById("ppe").style.position = 'absolute';
                    document.getElementById("chemicals").style.position = 'absolute';
                    document.getElementById("materials").style.position = 'absolute';
                    document.getElementById("tools").style.position = 'absolute';

                    document.getElementById("chemicals").style.display = 'none';
                    document.getElementById("ppe").style.display = 'none';
                    document.getElementById("ape").style.display = 'block';
                    document.getElementById("materials").style.display = 'none';
                    document.getElementById("tools").style.display = 'none';
                }
            }

            function holao(x) {
               



                if(x == 21) {

                    document.getElementById("apm1").style.visibility="visible";
                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("mapm1").style.visibility="visible";
                    document.getElementById("mapm2").style.visibility="hidden";
                    document.getElementById("capm1").style.visibility="visible";
                    document.getElementById("capm2").style.visibility="hidden";
                    document.getElementById("papm1").style.visibility="visible";
                    document.getElementById("papm2").style.visibility="hidden";
                    document.getElementById("aapm1").style.visibility="visible";
                    document.getElementById("aapm2").style.visibility="hidden";

                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("meurogate").style.visibility="hidden";
                    document.getElementById("ceurogate").style.visibility="hidden";
                    document.getElementById("peurogate").style.visibility="hidden";
                    document.getElementById("aeurogate").style.visibility="hidden";

                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("mde").style.visibility="hidden";
                    document.getElementById("cde").style.visibility="hidden";
                    document.getElementById("pde").style.visibility="hidden";
                    document.getElementById("ade").style.visibility="hidden";

                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("mtc3").style.visibility="hidden";
                    document.getElementById("ctc3").style.visibility="hidden";
                    document.getElementById("ptc3").style.visibility="hidden";
                    document.getElementById("atc3").style.visibility="hidden";

                    document.getElementById("bmci").style.visibility="hidden";
                    document.getElementById("mbmci").style.visibility="hidden";
                    document.getElementById("cbmci").style.visibility="hidden";
                    document.getElementById("pbmci").style.visibility="hidden";
                    document.getElementById("abmci").style.visibility="hidden";

                    
                    document.getElementById("apm1").style.position = 'relative';
                    document.getElementById("mapm1").style.position = 'relative';
                    document.getElementById("capm1").style.position = 'relative';
                    document.getElementById("papm1").style.position = 'relative';
                    document.getElementById("aapm1").style.position = 'relative';

                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("mapm2").style.position = 'absolute';
                    document.getElementById("capm2").style.position = 'absolute';
                    document.getElementById("papm2").style.position = 'absolute';
                    document.getElementById("aapm2").style.position = 'absolute';

                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("meurogate").style.position = 'absolute';
                    document.getElementById("ceurogate").style.position = 'absolute';
                    document.getElementById("peurogate").style.position = 'absolute';
                    document.getElementById("aeurogate").style.position = 'absolute';

                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("mde").style.position = 'absolute';
                    document.getElementById("cde").style.position = 'absolute';
                    document.getElementById("pde").style.position = 'absolute';
                    document.getElementById("ade").style.position = 'absolute';

                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("mtc3").style.position = 'absolute';
                    document.getElementById("ctc3").style.position = 'absolute';
                    document.getElementById("ptc3").style.position = 'absolute';
                    document.getElementById("atc3").style.position = 'absolute';

                    document.getElementById("bmci").style.position = 'absolute';
                    document.getElementById("mbmci").style.position = 'absolute';
                    document.getElementById("cbmci").style.position = 'absolute';
                    document.getElementById("pbmci").style.position = 'absolute';
                    document.getElementById("abmci").style.position = 'absolute';

                    document.getElementById("apm1").style.display = 'block';
                    document.getElementById("mapm1").style.display = 'block';
                    document.getElementById("capm1").style.display = 'block';
                    document.getElementById("papm1").style.display = 'block';
                    document.getElementById("aapm1").style.display = 'block';

                    document.getElementById("apm2").style.display = 'none';
                    document.getElementById("mapm2").style.display = 'none';
                    document.getElementById("capm2").style.display = 'none';
                    document.getElementById("papm2").style.display = 'none';
                    document.getElementById("aapm2").style.display = 'none';

                    document.getElementById("eurogate").style.display = 'none'
                    document.getElementById("meurogate").style.display = 'none'
                    document.getElementById("ceurogate").style.display = 'none'
                    document.getElementById("peurogate").style.display = 'none'
                    document.getElementById("aeurogate").style.display = 'none';

                    document.getElementById("de").style.display = 'none';
                    document.getElementById("mde").style.display = 'none';
                    document.getElementById("cde").style.display = 'none';
                    document.getElementById("pde").style.display = 'none';
                    document.getElementById("ade").style.display = 'none';

                    document.getElementById("tc3").style.display = 'none';
                    document.getElementById("mtc3").style.display = 'none';
                    document.getElementById("ctc3").style.display = 'none';
                    document.getElementById("ptc3").style.display = 'none';
                    document.getElementById("atc3").style.display = 'none';

                    document.getElementById("bmci").style.position = 'none';
                    document.getElementById("mbmci").style.position = 'none';
                    document.getElementById("cbmci").style.position = 'none';
                    document.getElementById("pbmci").style.position = 'none';
                    document.getElementById("abmci").style.position = 'none';
                }
                if(x == 22)  {
                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("apm2").style.visibility="visible";
                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("bmci").style.visibility="hidden";

                    
                    document.getElementById("apm1").style.position = 'absolute';
                    document.getElementById("apm2").style.position = 'relative';
                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("bmci").style.position = 'absolute';

                    document.getElementById("apm1").style.display = 'none';
                    document.getElementById("apm2").style.display = 'block';
                    document.getElementById("eurogate").style.display = 'none';
                    document.getElementById("de").style.display = 'none';
                    document.getElementById("tc3").style.display = 'none';
                    document.getElementById("bmci").style.position = 'none';
                }
                if(x == 23)  {
                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("eurogate").style.visibility="visible";
                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("bmci").style.visibility="hidden";

                    
                    document.getElementById("apm1").style.position = 'absolute';
                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("eurogate").style.position = 'relative';
                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("bmci").style.position = 'absolute';

                    document.getElementById("apm1").style.display = 'none';
                    document.getElementById("apm2").style.display = 'none';
                    document.getElementById("eurogate").style.display = 'block';
                    document.getElementById("de").style.display = 'none';
                    document.getElementById("tc3").style.display = 'none';
                    document.getElementById("bmci").style.position = 'none';
                }
                if(x == 24)  {
                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("de").style.visibility="visible";
                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("bmci").style.visibility="hidden";

                    
                    document.getElementById("apm1").style.position = 'absolute';
                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("de").style.position = 'relative';
                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("bmci").style.position = 'absolute';

                    document.getElementById("apm1").style.display = 'none';
                    document.getElementById("apm2").style.display = 'none';
                    document.getElementById("eurogate").style.display = 'none';
                    document.getElementById("de").style.display = 'block';
                    document.getElementById("tc3").style.display = 'none';
                    document.getElementById("bmci").style.position = 'none';
                }
                if(x == 25)  {
                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("tc3").style.visibility="visible";
                    document.getElementById("bmci").style.visibility="hidden";

                    
                    document.getElementById("apm1").style.position = 'absolute';
                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("tc3").style.position = 'relative';
                    document.getElementById("bmci").style.position = 'absolute';

                    document.getElementById("apm1").style.display = 'none';
                    document.getElementById("apm2").style.display = 'none';
                    document.getElementById("eurogate").style.display = 'none';
                    document.getElementById("de").style.display = 'none';
                    document.getElementById("tc3").style.display = 'block';
                    document.getElementById("bmci").style.position = 'none';
                }

                if(x == 26)  {
                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("bmci").style.visibility="visible";

                    
                    document.getElementById("apm1").style.position = 'absolute';
                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("bmci").style.position = 'relative';

                    document.getElementById("apm1").style.display = 'none';
                    document.getElementById("apm2").style.display = 'none';
                    document.getElementById("eurogate").style.display = 'none';
                    document.getElementById("de").style.display = 'none';
                    document.getElementById("tc3").style.display = 'none';
                    document.getElementById("bmci").style.position = 'block';
                }
            }
     </script>	
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>