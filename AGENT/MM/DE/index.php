<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin')||($_SESSION['uat']=='user'))) 
{

// if(isset($_COOKIE['visit']) && $_COOKIE['visit'] == "true"){
//     echo 'cookie set, welcome back';
// }else{
//     echo 'cookie not set, welcome new user';
//     setcookie("visit", "true", time()+60*60*24*600);
// }

?>


<!DOCTYPE html>


<html lang="en">

	<!-- begin::Head -->
	<head>



		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Agents Presence | MyDADJE</title>
		<meta name="description" content="Agent Profile | MyDADJE | GENIWORKS">
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
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="../../../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="../../../assets/css/demo1/pages/custom/general/user/profile-v1.css" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="../../../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="../../../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="../../../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="../../../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />


<link rel="shortcut icon" href="../../../img/favicon-32x32.png" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
<body onload="hola(11);" class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="#">
					<img alt="Logo" src="../../../img/favicon-32x32.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				
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
							<a href="">
								<img alt="Logo" src="../../../img/logo-geniworks-2.png" width="180"/>
							</a>
						</div>
						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
						</div>
					</div>

					<!-- end:: Aside Brand -->

					<?php include('../../leftside.php'); ?>

					<!-- begin:: Aside Menu -->
				
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
								<!-- <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px, 0px" aria-expanded="true">
									<span class="kt-header__topbar-icon">
										<i class="flaticon2-bell-alarm-symbol"></i>
										<span class="kt-badge kt-badge--dot kt-badge--notify kt-badge--sm kt-badge--brand"></span>
									</span>
								</div> -->
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
									<form>
									
									</form>
								</div>
							</div>

							
							<?php include("controls/userside.php")?>

						
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						<!-- begin:: Subheader -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-subheader__main">
								<h3 class="kt-subheader__title">Dashboard</h3>
								<span class="kt-subheader__separator kt-hidden"></span>
								<div class="kt-subheader__breadcrumbs">
									<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
									<span class="kt-subheader__breadcrumbs-separator"></span>
									<a href="" class="kt-subheader__breadcrumbs-link">
										Agents Manager </a>
									<span class="kt-subheader__breadcrumbs-separator"></span>
									<a href="" class="kt-subheader__breadcrumbs-link">
										Presence </a>
								</div>
							</div>
							
						</div>

						
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="kt-portlet kt-profile">
							
							<?php include('controls/profile.php')?>



							</div>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="kt_tabs_1_3" role="tabpanel">
									<div class="row">
										<div class="col-lg-12 col-xl-12">
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Presence Control <small>10 total</small></h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="kt-portlet__head-wrapper kt-form">
															<div class="kt-form__group kt-form__group--inline kt-margin-r-10">
																<div class="kt-form__label">Sort By:</div>
																<div class="kt-form__control" style="width: 160px;">
																	<select class="form-control bootstrap-select" id="kt_form_status" title="Status">
																		<option value="1">Present</option>
																		<option value="2">Absent</option>
																	</select>
																</div>
															</div>
															
															<button type="button" class="btn btn-brand btn-upper btn-bold" data-toggle="modal" data-target="#exampleModal">
															Leave
														</button>
														<?php include('controls/leave.php')?>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body kt-portlet__body--fit">
													<?php include('controls/displayagent.php')?>
												</div>
													<?php 
													if (isset($_POST['saveact'])) {
														include('process.php');
													}
													?>
											</div>
										</div>
									</div>

								</div>
								<?php include('controls/tasks.php')?>
							</div>
						</div>
					</div>

					<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
						<div class="kt-footer__copyright">
							2019&nbsp;&copy;&nbsp;<a href="http://geniworks.com" target="_blank" class="kt-link">GENIWORKS Inc</a>
						</div>
						<div class="kt-footer__menu">
							<a href="http://geniworks.com" target="_blank" class="kt-footer__menu-link kt-link">About</a>
							<a href="http://geniworks.com" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
							<a href="http://geniworks.com" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
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
									new layout whith tens of new options 
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
								 new layout whith tens of new options
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
						<img src="../../../assets/media//demos/preview/demo1.png" alt="" />
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
						<img src="../../../assets/media//demos/preview/demo2.png" alt="" />
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
						<img src="../../../assets/media//demos/preview/demo3.png" alt="" />
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
						<img src="../../../assets/media//demos/preview/demo4.png" alt="" />
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
						<img src="../../../assets/media//demos/preview/demo5.png" alt="" />
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
						<img src="../../../assets/media//demos/preview/demo6.jpg" alt="" />
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
						<img src="../../../assets/media//demos/preview/demo7.jpg" alt="" />
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
						<img src="../../../assets/media//demos/preview/demo8.jpg" alt="" />
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
						<img src="../../../assets/media//demos/preview/demo9.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				
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
		<script src="../../../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="../../../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="../../../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
		<script src="../../../assets/js/demo1/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="../../../assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="../../../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="../../../assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
		<script src="../../../assets/js/demo1/pages/custom/general/profile.js" type="text/javascript"></script>
		<script src="../../../assets/js/demo1/pages/components/base/popovers.js" type="text/javascript"></script>

	</body>

</html>


<?php
}

else {
    header("location:../../../login.php");
}

?>