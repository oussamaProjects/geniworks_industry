<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin')||($_SESSION['uat']=='user')||($_SESSION['uat']=='owner'))) 
{


// if($_SESSION['uat']=='user'){
//    session_destroy();

// echo "<meta http-equiv='refresh' content='0;login.php'>";
//}
?>
<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

       <script>
$('a[href^="#"]').on('click', function(event) {

    var target = $(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});
    </script>




		<!--begin::Base Path (base relative path for assets of this page) -->
		

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>AIR | Asset Inspection Record</title>
		<meta name="description" content="Asset Inspection Record Dashboard | MyDADJE">
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link href="../../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="../../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
				<link href="../../assets/css/demo1/pages/custom/general/user/profile-v1.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="../../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="../../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />


		<link href="../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="../../img/favicon-32x32.png" />
<style>

.clienttitle{
   transition: .3s;
}
.clienttitle:hover {
  transform: scale(1.2);

}

a {
    color: #00A1DB;
    text-decoration: none;
    background-color: transparent;
}
</style>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body onload="hola(11);" class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="#">
					<img alt="Logo" src="../../img/favicon-32x32.png" />
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
								<img alt="Logo" src="../../img/logo-geniworks-2.png" width="180"/>
							</a>
						</div>
						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
						</div>
					</div>

					<!-- end:: Aside Brand -->

					<?php include('leftside.php'); ?>

					<!-- begin:: Aside Menu -->
				
				</div>

				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- begin:: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
							<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
								
							</div>
						</div>

->
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
					
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
									
								</div>
							</div>

							
							<?php include("controls/userside.php")?>

							
						</div>
					</div>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
<?php



      //include('controls/expired.php');
    ?>



						<!-- begin:: Subheader -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-subheader__main">
								
								<span class="kt-subheader__separator kt-hidden"></span>
								<div class="kt-subheader__breadcrumbs">
									<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
									<span class="kt-subheader__breadcrumbs-separator"></span>
									<a href="" class="kt-subheader__breadcrumbs-link">
										Reporting </a>
									<span class="kt-subheader__breadcrumbs-separator"></span>
									<a href="" class="kt-subheader__breadcrumbs-link">
										EUROGATE</a>
  
									<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
								</div>
							</div>
							
						</div>

						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
					
								
									<div class="row">
										<div class="col-lg-4 col-xl-4">
											<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Reports Statistics</h3>
											</div>
										
										</div>
											<div class="kt-portlet__body">
											<div class="kt-widget-18">
													<div class="kt-widget-18__summary">
														<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpr=$cdb->prepare("SELECT count(rprt_id) FROM report");
$showpr->execute();
if ($showpr===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrp=$showpr->get_result();
?>
													<div class="kt-widget-18__total"><?php while ($showrp=$resrp->fetch_row()) { ?><?php echo $showrp[0];}?></div>
<?php
}
?>
													<div class="kt-widget-18__label">Reports</div>
												</div>
												<div class="kt-widget-18__progress">
													<div class="progress">
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpers3=$cdb->prepare("SELECT count(rprt_id) FROM report WHERE rprt_test_type='VT'");
$showpers3->execute();
if ($showpers3===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrep3=$showpers3->get_result();
?>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpers1=$cdb->prepare("SELECT count(rprt_id) FROM report WHERE rprt_test_type='UT'");
$showpers1->execute();
if ($showpers1===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrep1=$showpers1->get_result();
?>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpers2=$cdb->prepare("SELECT count(rprt_id) FROM report WHERE rprt_test_type='MT'");
$showpers2->execute();
if ($showpers2===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrep2=$showpers2->get_result();
?>
														<!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
														<div class="progress-bar bg-brand" role="progressbar" style="width: <?php while ($showrep1=$resrep1->fetch_row()) { ?><?php echo $showrep1[0];}?>0%" aria-valuenow="<?php while ($showrep1=$resrep1->fetch_row()) { ?><?php echo $showrep1[0];}?>0" aria-valuemin="0" aria-valuemax="90"></div>
														<div class="progress-bar bg-danger" role="progressbar" style="width: <?php while ($showrep2=$resrep2->fetch_row()) { ?><?php echo $showrep2[0];}?>0%" aria-valuenow="<?php while ($showrep2=$resrep2->fetch_row()) { ?><?php echo $showrep2[0];}?>0" aria-valuemin="0" aria-valuemax="90"></div>
														<div class="progress-bar bg-success" role="progressbar" style="width: <?php while ($showrep3=$resrep3->fetch_row()) { ?><?php echo $showrep3[0];}?>0%" aria-valuenow="<?php while ($showrep3=$resrep3->fetch_row()) { ?><?php echo $showrep3[0];}?>0" aria-valuemin="0" aria-valuemax="90"></div>
														<!-- <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
														<div class="progress-bar bg-dark" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div> -->
													</div>
												</div>
													<ul class="kt-nav kt-nav--bold kt-nav--md-space kt-nav--v3 kt-margin-t-20 kt-margin-b-20 nav nav-tabs" role="tablist">

														<li class="kt-nav__item">
															<a class="kt-nav__link active" data-toggle="tab" href="#report_type1" role="tab">
																<div class="kt-widget-18__item">
													<div class="kt-widget-18__legend kt-bg-brand"></div>
													<div class="kt-widget-18__desc">
														
															<div class="kt-widget-18__title">
																Ultra Sonic Testing
															</div>
		
														<div class="kt-widget-18__desc">
															Last Report <span class="">12th Sep 2019</span>
														</div>
													</div>
													<div class="kt-widget-18__orders">

														<span>	</span>
													</div>
												</div>
															</a>
														</li>
														<li class="kt-nav__item">
															<a class="kt-nav__link" data-toggle="tab" href="#report_type2" role="tab">
																<div class="kt-widget-18__item">
													<div class="kt-widget-18__legend kt-bg-danger"></div>
													<div class="kt-widget-18__desc">
														
															<div class="kt-widget-18__title">
																Magnetoscopie Testing
															</div>
														
														<div class="kt-widget-18__desc">
															Last Report <span class="">2th Sep 2019</span>
														</div>
													</div>
													<div class="kt-widget-18__orders">

														<span>	</span> 
													</div>
												</div>
															</a>
														</li>
														<li class="kt-nav__item">
															<a class="kt-nav__link" data-toggle="tab" href="#report_type3" role="tab">
																<div class="kt-widget-18__item">
													<div class="kt-widget-18__legend kt-bg-success"></div>
													<div class="kt-widget-18__desc">
													
															<div class="kt-widget-18__title">
																Visual Testing
															</div>
													
														<div class="kt-widget-18__desc">
															Last Report <span class="">4th Oct 2019</span>
														</div>
													</div>
													<div class="kt-widget-18__orders">

														<span>	</span> 
													</div>
												</div>
															</a>
														</li>
														
													</ul>
												<?php }}}?>
												</div>
											</div>
											
										</div>
										</div>	

										<div class="col-lg-8 col-xl-8">
											<div class="tab-content">

												
		<?php include('controls/personalinf.php');?>

		<?php include('controls/per2.php');?>

		<?php include('controls/per3.php');?>

											</div>
										</div>
									</div>

							
								
							
								
								
					
						</div>
					

</div>


							
									
								</div>
							</div>

							<!--end::Portlet-->
						</div>

						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
				

					<!-- end:: Footer -->
				</div>

				<!-- end:: Wrapper -->
			</div>

			<!-- end:: Page -->
		</div>

		<div id="kt_quick_panel" class="kt-offcanvas-panel">
			<div class="kt-offcanvas-panel__nav">
				<ul class="nav nav-pills" role="tablist">
					<!--<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_actions" role="tab">Actions</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>-->
				</ul>
				<button class="kt-offcanvas-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></button>
			</div>
			<div class="kt-offcanvas-panel__body">
				<div class="tab-content">
					<div class="tab-pane fade show kt-offcanvas-panel__content kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">

					</div>
					
					
				</div>
			</div>
		</div>

		<!-- end:: Quick Panel -->

		<!-- begin:: Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="la la-arrow-up"></i>
		</div>


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
		<script src="../../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="../../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="../../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="../../assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="../../assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="../../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="../../assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
		<script src="../../assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
		<script src="../../assets/js/demo1/pages/crud/forms/controls/avatar.js" type="text/javascript"></script>

		<script src="../../assets/js/demo1/pages/crud/forms/validation/controls.js" type="text/javascript"></script>
		<script src="../../assets/js/demo1/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="../../assets/js/demo1/pages/crud/forms/widgets/nouislider.js" type="text/javascript"></script>

		<script src="../../assets/js/demo1/pages/crud/forms/widgets/bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>

		<script src="../../assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
		<script src="../../assets/js/demo1/pages/custom/general/profile.js" type="text/javascript"></script>

  <style>
	.gallery {

  margin: auto;
  border-radius: 3px;
  overflow: hidden;
}

.img-c {
  width: 230px;
  height: 200px;
  float: left;
  position: relative;
  overflow: hidden;
}

.img-w {
  position: absolute;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  cursor: pointer;
  transition: transform ease-in-out 300ms;
}

.img-w img {
  display: none;
}

.img-c {
  transition: width ease 400ms, height ease 350ms, left cubic-bezier(0.4, 0, 0.2, 1) 420ms, top cubic-bezier(0.4, 0, 0.2, 1) 420ms;
}

.img-c:hover .img-w {
  transform: scale(1.08);
  transition: transform cubic-bezier(0.4, 0, 0.2, 1) 450ms;
}

.img-c.active {
  width: 100% !important;
  height: 100% !important;
  position: absolute;
  z-index: 2;
}

.img-c.postactive {
  position: absolute;
  z-index: 2;
  pointer-events: none;
}

.img-c.active.positioned {
  left: 0 !important;
  top: 0 !important;
  transition-delay: 50ms;
}

</style>


	</body>
</html>

<?php
}

else {
    header("location:../../login.php");
}

?>