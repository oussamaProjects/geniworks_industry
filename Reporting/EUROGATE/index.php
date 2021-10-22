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


<style type="text/css">
	#show-me-marka {
  display:none;
}
#show-me-obsa {
  display:none;
}


#show-me-markb {
  display:none;
}
#show-me-obsb {
  display:none;
}


#show-me-markc {
  display:none;
}
#show-me-obsc {
  display:none;
}


#show-me-markd {
  display:none;
}
#show-me-obsd {
  display:none;
}

#show-me-marke {
  display:none;
}
#show-me-obse {
  display:none;
}


#show-me-markf {
  display:none;
}
#show-me-obsf {
  display:none;
}


#show-me-markg {
  display:none;
}
#show-me-obsg {
  display:none;
}


#show-me-markh {
  display:none;
}
#show-me-obsh {
  display:none;
}


#show-me-marki {
  display:none;
}
#show-me-obsi {
  display:none;
}


#show-me-markj {
  display:none;
}
#show-me-obsj {
  display:none;
}

#show-me-markk {
  display:none;
}
#show-me-obsk {
  display:none;
}

  #show-me-mark1 {
  display:none;
}
#show-me-obs1 {
  display:none;
}


#show-me-mark2 {
  display:none;
}
#show-me-obs2 {
  display:none;
}


#show-me-mark3 {
  display:none;
}
#show-me-obs3 {
  display:none;
}


#show-me-mark4 {
  display:none;
}
#show-me-obs4 {
  display:none;
}

#show-me-mark5 {
  display:none;
}
#show-me-obs5 {
  display:none;
}


#show-me-mark6 {
  display:none;
}
#show-me-obs6 {
  display:none;
}


#show-me-mark7 {
  display:none;
}
#show-me-obs7 {
  display:none;
}


#show-me-mark8 {
  display:none;
}
#show-me-obs8 {
  display:none;
}


#show-me-mark9 {
  display:none;
}
#show-me-obs9 {
  display:none;
}


#show-me-mark10 {
  display:none;
}
#show-me-obs10 {
  display:none;
}

#show-me-mark11 {
  display:none;
}
#show-me-obs11 {
  display:none;
}

</style>

		<!--begin::Base Path (base relative path for assets of this page) -->
		

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>CND Report | Inspection Manager</title>
		<meta name="description" content="CND Report | Inspection Manager | MyDADJE">
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
							<a href="../../dashboard.php">
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
											<div class="kt-portlet kt-portlet--height-fluid" style="background-color: transparent;">
												
												<div class="kt-portlet__body">
													<div class="kt-widget-1">
														<style>
															.nav-pills.nav-tabs-btn.nav-pills-btn-brand a.nav-link.active {
    background-color: #00A1DB;
}
.nav-pills.nav-tabs-btn.nav-pills-btn-brand a.nav-link.active {
    background-color: #00A1DB;
}
.nav-pills .nav-item .nav-link:active, .nav-pills .nav-item .nav-link.active, .nav-pills .nav-item .nav-link.active:hover {
    background-color: #00A1DB;
    color: #ffffff;
}
.nav-pills.nav-tabs-btn.nav-pills-btn-brand a.nav-link.active {
    background-color: #00A1DB;
}

.nav-pills .nav-item .nav-link:active, .nav-pills .nav-item .nav-link.active, .nav-pills .nav-item .nav-link.active:hover {
    background-color: #00A1DB;
    color: #ffffff;
}
														</style>
														<ul class="nav nav-pills nav-tabs-btn nav-pills-btn-brand" role="tablist">
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_tabs_19_25cb6c0fc43635" role="tab">
																	<span class="nav-link-icon"><i class="flaticon2-position"></i></span>
																	<span class="nav-link-title">New</span>
																</a>
															</li>
															
															<li class="nav-item" >
																<a class="nav-link active" data-toggle="tab" href="#kt_tabs_19_15cb6c0fc43635" role="tab">
																	<span class="nav-link-icon"><i class="flaticon2-grids"></i></span>
																	<span class="nav-link-title">Dashboard</span>
																</a>
															</li>
															
															
														</ul>
														<div class="tab-content">
															<div class="tab-pane fade active show" id="kt_tabs_19_15cb6c0fc43635" role="tabpanel">
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
$showpers1=$cdb->prepare("SELECT count(rprt_id) FROM report WHERE rprt_test_type='UT'");
$showpers1->execute();
if ($showpers1===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrep1=$showpers1->get_result();
?>

														<!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
														<div class="progress-bar bg-brand" role="progressbar" style="width: <?php while ($showrep1=$resrep1->fetch_row()) { ?><?php echo $showrep1[0];}?>0%" aria-valuenow="<?php while ($showrep1=$resrep1->fetch_row()) { ?><?php echo $showrep1[0];}?>0" aria-valuemin="0" aria-valuemax="90"></div>
<?php
}
require('controls/zdze8efzedzdeezd/de5.php');
$showpers2=$cdb->prepare("SELECT count(rprt_id) FROM report WHERE rprt_test_type='MT'");
$showpers2->execute();
if ($showpers2===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrep2=$showpers2->get_result();
?>
														<div class="progress-bar bg-danger" role="progressbar" style="width: <?php while ($showrep2=$resrep2->fetch_row()) { ?><?php echo $showrep2[0];}?>0%" aria-valuenow="<?php while ($showrep2=$resrep2->fetch_row()) { ?><?php echo $showrep2[0];}?>0" aria-valuemin="0" aria-valuemax="90"></div>
<?php 
}
?>
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
														<div class="progress-bar bg-success" role="progressbar" style="width: <?php while ($showrep3=$resrep3->fetch_row()) { ?><?php echo $showrep3[0];}?>0%" aria-valuenow="<?php while ($showrep3=$resrep3->fetch_row()) { ?><?php echo $showrep3[0];}?>0" aria-valuemin="0" aria-valuemax="90"></div>
<?php
}
?>
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

														<?php while ($showrep1=$resrep1->fetch_row()) { ?>
														<div class="kt-widget-18__desc">
															<?php echo $showrep1[0];?> <span class="">Reports</span>
														</div>
													<?php }}?>
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
																Magnetic Testing
															</div>
														
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpers1=$cdb->prepare("SELECT count(rprt_id) FROM report WHERE rprt_test_type='MT'");
$showpers1->execute();
if ($showpers1===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrep1=$showpers1->get_result();
?>

														<?php while ($showrep1=$resrep1->fetch_row()) { ?>
														<div class="kt-widget-18__desc">
															<?php echo $showrep1[0];?> <span class="">Reports</span>
														</div>
													<?php }}?>
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
													
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpers1=$cdb->prepare("SELECT count(rprt_id) FROM report WHERE rprt_test_type='VT'");
$showpers1->execute();
if ($showpers1===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrep1=$showpers1->get_result();
?>

														<?php while ($showrep1=$resrep1->fetch_row()) { ?>
														<div class="kt-widget-18__desc">
															<?php echo $showrep1[0];?> <span class="">Reports</span>
														</div>
													<?php }}?>
													</div>
													<div class="kt-widget-18__orders">

														<span>	</span> 
													</div>
												</div>
															</a>
														</li>
														
													</ul>
											
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
															<div class="tab-pane fade" id="kt_tabs_19_25cb6c0fc43635" role="tabpanel">
															<form method="post" id="uploadForm" action="controls/upload.php" class="kt-form kt-form--label-right">
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

							<!--begin::Portlet-->
							<div class="row">
								
								<div class="col-lg-6">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">1- Asset Targeted</h3>
											</div>
										</div>
											<div class="kt-portlet__body">
												<div class="form-group form-group-last kt-hide">
													<div class="alert alert-danger" role="alert" id="kt_form_1_msg">
														<div class="alert-icon"><i class="flaticon-warning"></i></div>
														<div class="alert-text">
															Ops! You Should Fill The Required Fields.
														</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
													</div>
												</div>
												<div class="form-group row">
												<?php include('controls/new.php')?>
												</div>
											</div>
										</div>
											<div class="kt-portlet">
												<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">2- Inspected Material</h3>
											</div>
										</div>
										<div class="kt-portlet__body">
												<div class="form-group row">
													<?php include("controls/mat.php")?>
												</div>
												<div class="form-group row">
													<div class="col-lg-4 col-md-4 col-sm-4">
														<label class="form-control-label">Surface Condition</label>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="radio" name="pcondition" checked="checked" value="Brossee"> Brossée
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="radio" name="pcondition" value="ST3"> ST3
																<span></span>
															</label>
														</div>
														<span class="form-text text-muted">Please Choose One option</span>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-lg-4 col-md-4 col-sm-4">
														<label class="form-control-label">Part Temperature</label>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="radio" name="temper" value="Ambiante"> Ambiante
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="radio" name="temper" value="50"> -50°
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="radio" name="temper" value="30"> +30°
																<span></span>
															</label>
														</div>
														<span class="form-text text-muted">Please Choose One option</span>
													</div>
												</div>
												
												
												<div class="form-group row">
													<div class="col-lg-4 col-md-4 col-sm-4">
														<label class="form-control-label">Control Type</label>
													</div>
													
													<div class="col-lg-4 col-md-4 col-sm-12 form-group-sub">
														<select class="form-control kt_selectpicker" id="controltype" required="required" name="controltype">
															<option value="">Select Type</option>
															<option value="UT">Ultra Sonic Testing </option>
															<option selected value="VT">Visual Testing</option>
															<option value="MT">Magnetoscopie Testing</option>
														</select>
														<span class="form-text text-muted">Please select an option.</span>
													</div>
												</div>
												<div class="row">
													<input type="hidden" id="subassetid" name="assetid">
													<input type="hidden" id="subassetss" name="subasset">
													
													<div class="col-lg-3 col-md-3 col-sm-12">
														<label>Picture 1</label>
														<div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle" id="kt_profile_avatar_1">
														<div class="kt-avatar__holder" style="width: 50px; height: 50px;
  float: left;
  position: relative;
  overflow: hidden;  background-image: url(controls/img/apple-touch-icon.png);"></div>
															<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
																<i class="fa fa-plus"></i>
																<input type='file'  accept=".png, .jpg, .jpeg" required="required" name="userImage">
															</label>
															<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel Picture">
																<i class="fa fa-times"></i>
															</span>

														</div>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12">
														<label>Picture 2</label>
														<div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle" id="kt_profile_avatar_1">
														<div class="kt-avatar__holder" style="width: 50px; height: 50px;
  float: left;
  position: relative;
  overflow: hidden;  background-image: url(controls/img/apple-touch-icon.png);"></div>
															<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
																<i class="fa fa-plus"></i>
																<input type='file'  accept=".png, .jpg, .jpeg" name="userImage1">
															</label>
															<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel Picture">
																<i class="fa fa-times"></i>
															</span>
<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          
      </div>
      <div class="modal-body">
          <p>Your Report Successfully Saved! </p>
          	<span>Go To </span> <a href="http://mydadje.com/Reporting/EUROGATE/" class="btn btn-brand">Dashboard</a>
                  
      </div>    
    </div>
  </div>
</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12">
														<label>Picture 3</label>
														<div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle" id="kt_profile_avatar_1">
														<div class="kt-avatar__holder" style="width: 50px; height: 50px;
  float: left;
  position: relative;
  overflow: hidden;  background-image: url(controls/img/apple-touch-icon.png);"></div>
															<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
																<i class="fa fa-plus"></i>
																<input type='file'  accept=".png, .jpg, .jpeg" name="userImage2">
															</label>
															<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel Picture">
																<i class="fa fa-times"></i>
															</span>
<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          
      </div>
      <div class="modal-body">
          <p>Your Report Successfully Saved! </p>
          	<span>Go To </span> <a href="http://mydadje.com/Reporting/EUROGATE/" class="btn btn-brand">Dashboard</a>
                  
      </div>    
    </div>
  </div>
</div>
														</div>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12">
														<label>Picture 4</label>
														<div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle" id="kt_profile_avatar_1">
														<div class="kt-avatar__holder" style="width: 50px; height: 50px;
  float: left;
  position: relative;
  overflow: hidden;  background-image: url(controls/img/apple-touch-icon.png);"></div>
															<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
																<i class="fa fa-plus"></i>
																<input type='file'  accept=".png, .jpg, .jpeg" name="userImage3">
															</label>
															<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel Picture">
																<i class="fa fa-times"></i>
															</span>
<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          
      </div>
      <div class="modal-body">
          <p>Your Report Successfully Saved! </p>
          	<span>Go To </span> <a href="http://mydadje.com/Reporting/EUROGATE/" class="btn btn-brand">Dashboard</a>
                  
      </div>    
    </div>
  </div>
</div>
														</div>
													</div>



												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
												<div class="row">
													
													
													<div class="col-lg-3 col-md-3 col-sm-12">
														<label>1- Comment </label>
														<input class="form-control" type="text" name="comment1">
														
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12">
														<label>2- Comment </label>
														<input class="form-control" type="" name="comment2">
														
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12">
														<label>3- Comment </label>
														<input class="form-control" type="text" name="comment3">
														
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12">
														<label>4- Comment </label>
														<input class="form-control" type="text" name="comment4">
														
													</div>



												</div>
											</div>
										</div>

										<div class="kt-portlet" id="toolsused">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">3- Tools Used</h3>
											</div>
										</div>
										<div class="kt-portlet__body">
												<div class="form-group row">
													<div class="col-lg-5 col-md-5 col-sm-5">
													<label class="form-control-label">Contact Clamp</label>
												</div>
													<?php include("controls/equipment.php")?>
												</div>
												<div class="form-group row">
													<div class="col-lg-5 col-md-5 col-sm-5">
													<label class="form-control-label">UV Light</label>
												</div>
													<?php include("controls/uv.php")?>
												</div>
												<div class="form-group row">
													<div class="col-lg-5 col-md-5 col-sm-5">
													<label class="form-control-label">Current Type *</label>
												</div>
													
													<div class="col-lg-4 col-md-4 col-sm-12 form-group-sub">
														<select id="Units" class="form-control kt_selectpicker" required="required" name="currenttype">
															<option value="">Select Type</option>
															<option value="AC">Alternative Current </option>
															<option selected value="DC">Direct Current</option>
														</select>
														<span class="form-text text-muted">Please select an option.</span>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 form-group-sub">
													
														<div class="kt-checkbox-list">
															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="radio" class="dissable" value="48" onclick="check();" name="currentt"> 48V
																<span></span>
															</label>
															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--warning">
																<input type="radio" class="dissable" value="110" onclick="check();" name="currentt"> 110V
																<span></span>
															</label>
															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--danger">
																<input type="radio" class="enable" checked="checked" value="220" onclick="check();" name="currentt"> 220V
																<span></span>
															</label>
														</div>
														<span class="form-text text-muted">When Direct Choosed 48V & 110V Disabled</span>
													
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="kt-portlet" id="examcond">
											<div class="kt-portlet__head">
												<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">4- Examinated Conditions</h3>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-4 col-md-4 col-sm-4">
													<label class="form-control-label">Witness Type *</label>
												</div>
													<?php include("controls/wtnesses.php")?>
												</div>
												<div class="form-group row">
													<div class="col-lg-4 col-md-4 col-sm-6">
													<label class="form-control-label">MFV </label>
												</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="radio" checked="checked" name="mfv" value="2400"> 2400 A/m
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="radio" name="mfv" value="2000"> 2000 A/m
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="radio" name="mfv"value="1800"> 1800 A/m
																<span></span>
															</label>
														</div>
														<span class="form-text text-muted">Please Choose One option</span>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-lg-4 col-md-4 col-sm-3">
													<label class="form-control-label">Prod Spacing</label>
												</div>
													<div class="col-lg-4 col-md-4 col-sm-12">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="radio" value="100" name="prdspace"> 100 mm
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="radio" value="150" checked="checked" name="prdspace"> 150 mm
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="radio" value="200" name="prdspace"> 200 mm
																<span></span>
															</label>
														</div>
														<span class="form-text text-muted">Please Choose One option</span>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-12">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="radio" value="Yes" checked="checked" name="demagnet"> Demagnetizing
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="radio" value="No" name="demagnet"> No
																<span></span>
															</label>
														</div>
														<span class="form-text text-muted">Please Choose One option</span>
													</div>
												</div>
												
												
												<div class="form-group row">
													<div class="col-lg-4 col-md-4 col-sm-3">
													<label class="form-control-label">Magnetization Delay</label>
												</div>
													<div class="col-lg-6 col-md-12 col-sm-12">
														<div class="row align-items-center">
															<div class="col-4">
																<input type="text" class="form-control" required="required" id="kt_nouislider_1_input" name="magnitdelay" placeholder="Quantity">
															</div>
															<div class="col-8">
																<div id="kt_nouislider_1" class="nouislider-drag-danger"></div>
															</div>
														</div>
														<span class="form-text text-muted">Slide the Delay (Sec)</span>
													</div>
												</div>

												<div class="kt-separator kt-separator--border-dashed kt-separator--space-xl"></div>


												<div class="form-group row">

													<?php include('controls/revealer.php')?>
												</div>
												<div class="form-group row">
													<div class="col-lg-4 col-md-4 col-sm-3">
													<label class="form-control-label">Light Used </label>
												</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="kt-radio-inline">
															<label class="kt-radio">
																<input type="radio" value="Natural" checked name="lightu"> Natural Light
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" value="Black" name="lightu"> Black Light
																<span></span>
															</label>
														</div>
														<span class="form-text text-muted">Please Choose Light Type</span>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-lg-4 col-md-4 col-sm-3">
											<label class="form-control-label">Artificial Light</label>
										</div>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<input id="kt_touchspin_4" type="text" required="required" class="form-control bootstrap-touchspin-vertical-btn" value="300" name="lightt" placeholder="40" type="text">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-lg-4 col-md-4 col-sm-3">
											<label class="form-control-label">Brightness</label>
										</div>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<input id="kt_touchspin_4" type="text" required="required" class="form-control bootstrap-touchspin-vertical-btn" value="700" name="brightt" placeholder="40" type="text">
											</div>
										</div>
									</div>

											
			

										
									</div>
									<div class="kt-portlet">



											<div class="kt-portlet__head">
												<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">5- Results</h3>
											</div>
										</div>
										<div class="kt-portlet__body">
											
												<div class="row">
													<label class="col-3 col-form-label">Marks / Repères</label>
													<div class="col-lg-4 col-md-4 col-sm-4">
														<select class="form-control kt_selectpicker" name="" role="combobox" tabindex="0" aria-label="Drop-down List" id="marksopt">
        <option id="emptyValue" role="option" value="Options" style="">Options</option>
        <option role="option" data-user-option="" value="show alpha">Alphabets</option>
        <option role="option" data-user-option="" value="decimals">Dicemal</option>
    </select>
													</div>
													<div class="col-6">
														

														<div class="showalpha" style="display:none;">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="marka" value="A" id="watch-me-marka"> A
																<span></span>
															</label>
															<div id="show-me-marka">
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdicta" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdicta" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obsa" value="" id="watch-me-obsa"> 
																	<span></span>
																</label>
																<div id="show-me-obsa">
																<input type="text" class="form-text" name="">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obsa" value="none" id=""> 
																	<span></span>
																</label>
															</div>



															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="markb" value="B" id="watch-me-markb"> B
																<span></span>
															</label>
															<div id="show-me-markb" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio"  name="verdictb" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdictb" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obsb" value="" id="watch-me-obsb"> 
																	<span></span>
																</label>
																<div id="show-me-obsb">
																<input type="text" class="form-text" name="">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obsb" value="none" id=""> 
																	<span></span>
																</label>
															</div>



															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="markc" value="C" id="watch-me-markc"> C
																<span></span>
															</label>
															<div id="show-me-markc" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio"  name="verdictc" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdictc" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obsc" value="" id="watch-me-obsc"> 
																	<span></span>
																</label>
																<div id="show-me-obsc">
																<input type="text" class="form-text" name="observationc">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obsc" value="none" id=""> 
																	<span></span>
																</label>
															</div>





															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="markd" value="D" id="watch-me-markd"> D
																<span></span>
															</label>
															<div id="show-me-markd" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdictd" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdictd" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obsd" value="" id="watch-me-obsd"> 
																	<span></span>
																</label>
																<div id="show-me-obsd">
																<input type="text" class="form-text" name="observationd">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obsd" value="none" id=""> 
																	<span></span>
																</label>
															</div>




															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="marke" value="E" id="watch-me-marke"> E
																<span></span>
															</label>
															<div id="show-me-marke" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdicte" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdicte" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obse" value="" id="watch-me-obse"> 
																	<span></span>
																</label>
																<div id="show-me-obse">
																<input type="text" class="form-text" name="observatione">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obse" value="none" id=""> 
																	<span></span>
																</label>
															</div>




															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="markf"  value="F" id="watch-me-markf"> F
																<span></span>
															</label>
															<div id="show-me-markf" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdictf" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdictf" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obsf" value="" id="watch-me-obsf"> 
																	<span></span>
																</label>
																<div id="show-me-obsf">
																<input type="text" class="form-text" name="observationf">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obsf" value="none" id=""> 
																	<span></span>
																</label>
															</div>




															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="markg" value="G" id="watch-me-markg"> G
																<span></span>
															</label>
															<div id="show-me-markg">
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdictg" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdictg" value="NACC" id=""> 
																	<span></span>
																</label>

																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obsg" value="" id="watch-me-obsg"> 
																	<span></span>
																</label>
																<div id="show-me-obsg">
																<input type="text" class="form-text" name="observationg">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obsg" value="none" id=""> 
																	<span></span>
																</label>
															</div>



															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="markh" value="H" id="watch-me-markh"> H
																<span></span>
															</label>
															<div id="show-me-markh" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdicth" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdicth" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obsh" value="" id="watch-me-obsh"> 
																	<span></span>
																</label>
																<div id="show-me-obsh">
																<input type="text" class="form-text" name="observationh">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obsh" value="none" id=""> 
																	<span></span>
																</label>
															</div>



															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="marki" value="I" id="watch-me-marki"> I
																<span></span>
															</label>
															<div id="show-me-marki">
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdicti" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdicti" value="NACC" id=""> 
																	<span></span>
																</label>

																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obsi" value="" id="watch-me-obsi"> 
																	<span></span>
																</label>
																<div id="show-me-obsi">
																<input type="text" class="form-text" name="observationi">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obsi" value="none" id=""> 
																	<span></span>
																</label>
															</div>




															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="markj" value="J" id="watch-me-markj"> J
																<span></span>
															</label>
															<div id="show-me-markj" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdictj" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdictj"  value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obsj" value="" id="watch-me-obsj"> 
																	<span></span>
																</label>
																<div id="show-me-obsj">
																<input type="text" class="form-text" name="observationj">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obsj" value="none" id=""> 
																	<span></span>
																</label>
															</div>



															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="markk" value="K" id="watch-me-markk"> K
																<span></span>
															</label>
															<div id="show-me-markk" >
															
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdictk" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdictk" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obsk" value="" id="watch-me-obsk"> 
																	<span></span>
																</label>
																<div id="show-me-obsk">
																<input type="text" class="form-text" name="observationk">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obsk" value="none" id=""> 
																	<span></span>
																</label>
															</div>
															
														</div>

														</div>
														<div class="showdecim" style="display:none;">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark1" value="1" id="watch-me-mark1"> 1
																<span></span>
															</label>
															<div id="show-me-mark1">
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdict1" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict1" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs1" value="" id="watch-me-obs1"> 
																	<span></span>
																</label>
																<div id="show-me-obs1">
																<input type="text" class="form-text" name="">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs1" value="none" id=""> 
																	<span></span>
																</label>
															</div>



															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark2" value="2" id="watch-me-mark2"> 2
																<span></span>
															</label>
															<div id="show-me-mark2" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio"  name="verdict2" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict2" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs2" value="" id="watch-me-obs2"> 
																	<span></span>
																</label>
																<div id="show-me-obs2">
																<input type="text" class="form-text" name="">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs2" value="none" id=""> 
																	<span></span>
																</label>
															</div>



															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark3" value="3" id="watch-me-mark3"> 3
																<span></span>
															</label>
															<div id="show-me-mark3" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio"  name="verdict3" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict3" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs3" value="" id="watch-me-obs3"> 
																	<span></span>
																</label>
																<div id="show-me-obs3">
																<input type="text" class="form-text" name="observation3">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs3" value="none" id=""> 
																	<span></span>
																</label>
															</div>





															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark4" value="4" id="watch-me-mark4"> 4
																<span></span>
															</label>
															<div id="show-me-mark4" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdict4" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict4" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs4" value="" id="watch-me-obs4"> 
																	<span></span>
																</label>
																<div id="show-me-obs4">
																<input type="text" class="form-text" name="observation4">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs4" value="none" id=""> 
																	<span></span>
																</label>
															</div>




															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark5" value="5" id="watch-me-mark5"> 5
																<span></span>
															</label>
															<div id="show-me-mark5" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdict5" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict5" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs5" value="" id="watch-me-obs5"> 
																	<span></span>
																</label>
																<div id="show-me-obs5">
																<input type="text" class="form-text" name="observation5">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs5" value="none" id=""> 
																	<span></span>
																</label>
															</div>




															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark6"  value="6" id="watch-me-mark6"> 6
																<span></span>
															</label>
															<div id="show-me-mark6" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdict6" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict6" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs6" value="" id="watch-me-obs6"> 
																	<span></span>
																</label>
																<div id="show-me-obs6">
																<input type="text" class="form-text" name="observation6">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs6" value="none" id=""> 
																	<span></span>
																</label>
															</div>




															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark7" value="7" id="watch-me-mark7"> 7
																<span></span>
															</label>
															<div id="show-me-mark7">
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdict7" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict7" value="NACC" id=""> 
																	<span></span>
																</label>

																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs7" value="" id="watch-me-obs7"> 
																	<span></span>
																</label>
																<div id="show-me-obs7">
																<input type="text" class="form-text" name="observation7">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs7" value="none" id=""> 
																	<span></span>
																</label>
															</div>



															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark8" value="8" id="watch-me-mark8"> 8
																<span></span>
															</label>
															<div id="show-me-mark8" >
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdict8" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict8" value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs8" value="" id="watch-me-obs8"> 
																	<span></span>
																</label>
																<div id="show-me-obs8">
																<input type="text" class="form-text" name="observation8">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs8" value="none" id=""> 
																	<span></span>
																</label>
															</div>



															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark9" value="9" id="watch-me-mark9"> 9
																<span></span>
															</label>
															<div id="show-me-mark9">
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdict9" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict9" value="NACC" id=""> 
																	<span></span>
																</label>

																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs9" value="" id="watch-me-obs9"> 
																	<span></span>
																</label>
																<div id="show-me-obs9">
																<input type="text" class="form-text" name="observation9">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs9" value="none" id=""> 
																	<span></span>
																</label>
															</div>




															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark10" value="10" id="watch-me-mark10"> 10
																<span></span>
															</label>
															<div id="show-me-mark10">
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdict10" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict10"  value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs10" value="" id="watch-me-obs10"> 
																	<span></span>
																</label>
																<div id="show-me-obs10">
																<input type="text" class="form-text" name="observation10">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs10" value="none" id=""> 
																	<span></span>
																</label>
															</div>

															<label class="kt-checkbox kt-checkbox--solid kt-checkbox--info">
																<input type="checkbox" name="mark11" value="11" id="watch-me-mark11"> 11
																<span></span>
															</label>
															<div id="show-me-mark11">
																	<label class="kt-radio kt-radio--bold kt-radio--success">
																	ACC <input type="radio" name="verdict11" value="ACC" id=""> 
																	<span></span>
																</label>
																<label class="kt-radio kt-radio--bold kt-radio--success">
																	NACC <input type="radio" name="verdict11"  value="NACC" id=""> 
																	<span></span>
																</label>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	Observation <input type="radio" name="obs11" value="" id="watch-me-obs11"> 
																	<span></span>
																</label>
																<div id="show-me-obs11">
																<input type="text" class="form-text" name="observation11">
															</div>
																<br>
																<label class="kt-radio kt-radio--bold kt-radio--default">
																	None <input type="radio" name="obs11" value="none" id=""> 
																	<span></span>
																</label>
															</div>



															
														</div>
													</div>

<script type="text/javascript">
$('#marksopt').change(function() {
console.log($('option').val())
  if ($(this).val() == 'show alpha') {
    $('.showalpha').show();
     $('.showdecim').hide();
  } else {
    $('.showalpha').hide();
     $('.showdecim').show();
  }
  if ($(this).val() == 'decimals') {
    $('.showalpha').hide();
     $('.showdecim').show();
  } else {
    $('.showalpha').show();
     $('.showdecim').hide();
  }
});

$('#controltype').change(function() {
console.log($('option').val())

  if ($(this).val() == 'MT') {
    $('#toolsused').show();
     $('#examcond').show();
  } else {
    $('#toolsused').hide();
     $('#examcond').hide();
  }
});
</script>
														
													</div>

												</div>
											
												<br>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-12">
															<input type="submit" name="saverep" class="btn btn-brand" value="Save">
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
													</div>
												</div>
											</div>
										</div>

									<!--end::Portlet-->
								</div>
							
							</div>
						</div>
					</form>
															</div>
															<div class="tab-pane fade" id="kt_tabs_19_35cb6c0fc43635" role="tabpanel">
																
																<div class="col-lg-12 col-xl-12 order-lg-2 order-xl-1">
																	
																</div>
															</div>
														</div>
													</div>
												</div>
											</div></div>
															
								
							
								
								
					
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
<script>

function aassets(element) {
    var ctp = element.options[element.selectedIndex].text;
    document.getElementById("assetss").value = ctp;

    document.getElementById("assetsss").innerHTML = ctp;
    document.getElementById("assetsssS").innerHTML = ctp;
}


function subassets(element){
    var otp = element.options[element.selectedIndex].text;
    document.getElementById("subassetss").value = otp;
    document.getElementById("subassetsss").innerHTML = otp;

}

 function subassetsidg(element){
 	var sdtg = document.getElementById("subassetid1g").value;

    document.getElementById("subassetid").value = sdtg;
    document.getElementById("subassetsid1").innerHTML = sdtg;
 }



  function subassetsidm(element){
 	var sdtm = document.getElementById("subassetid1m").value;

    document.getElementById("subassetid").value = sdtm;
    document.getElementById("subassetsid1").innerHTML = sdtm;
 }



  function subassetsidp(element){
 	var sdtp = document.getElementById("subassetid1p").value;

    document.getElementById("subassetid").value = sdtp;
    document.getElementById("subassetsid1").innerHTML = sdtp;
 }
    </script>
<script type="text/javascript">
			$(document).ready(function () {

    $('#memberModal').modal('show');

});






$(".dissable").attr("disabled", "disabled");
$("#Units").on("change", function() {
    if ($(this).val() !== "AC") {
    
    $(".dissable").attr("disabled", "disabled");
} else {
    $(".dissable").removeAttr("disabled");
}
});





</script>
<?php include('controls/neweqp.php');?>
<script type="text/javascript">
	$("#eqpn").on("change", function () {        
      $modal = $('#eqpmodal');
      if($(this).val() === 'neweqp'){
        $modal.modal('show');
    }
 });
</script>

<?php include('controls/newwt.php');?>
<script type="text/javascript">
	$("#type").on("change", function () {        
      $modal = $('#witmodal');
      if($(this).val() === 'newwt'){
        $modal.modal('show');
    }
 });
</script>
<?php include('controls/newmat.php');?>
<script type="text/javascript">
	$("#matn").on("change", function () {        
      $modal = $('#matmodal');
      if($(this).val() === 'newmat'){
        $modal.modal('show');
    }
 });
</script>

<?php include('controls/newrevealer.php');?>
<script type="text/javascript">
	$("#revn").on("change", function () {        
      $modal = $('#revmodal');
      if($(this).val() === 'newrev'){
        $modal.modal('show');
    }
 });
</script>
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "controls/upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$('#thankyouModal').modal('show');
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>



    <?php

if (isset($_POST['saveeximg'])) {
	include('controls/extraimg.php');
}

    if (isset($_POST['savemark'])) {
	include('controls/addmark.php');
}

if (isset($_POST['savesub'])) {
	include('controls/savesub.php');
}


if (isset($_POST['saveup'])) {
	include('controls/updaterep.php');
}




if (isset($_POST['addrs'])) {
	include('controls/newrslt.php');


}
if (isset($_POST['addacc'])) {
	include('controls/newaccept.php');


}

if (isset($_POST['addspec'])) {
	include('controls/specification.php');


}
if (isset($_POST['addpros'])) {
	include('controls/proccesss.php');


}
?>


	</body>
</html>

<?php
}

else {
    header("location:../../login.php");
}

?>


<script>
	$(document).ready(function() {







   



   $('input[name="obsa"]').click(function() {
       if($(this).attr('id') == 'watch-me-obsa') {
            $('#show-me-obsa').show();           
       }
       else {
            $('#show-me-obsa').hide();   
       }
   });

$('input[name="obsb"]').click(function() {
       if($(this).attr('id') == 'watch-me-obsb') {
            $('#show-me-obsb').show();           
       }
       else {
            $('#show-me-obsb').hide();   
       }
   });

$('input[name="obsc"]').click(function() {
       if($(this).attr('id') == 'watch-me-obsc') {
            $('#show-me-obsc').show();           
       }
       else {
            $('#show-me-obsc').hide();   
       }
   });
$('input[name="obsd"]').click(function() {
       if($(this).attr('id') == 'watch-me-obsd') {
            $('#show-me-obsd').show();           
       }
       else {
            $('#show-me-obsd').hide();   
       }
   });

$('input[name="obse"]').click(function() {
       if($(this).attr('id') == 'watch-me-obse') {
            $('#show-me-obse').show();           
       }
       else {
            $('#show-me-obse').hide();   
       }
   });

$('input[name="obsf"]').click(function() {
       if($(this).attr('id') == 'watch-me-obsf') {
            $('#show-me-obsf').show();           
       }
       else {
            $('#show-me-obsf').hide();   
       }
   });
$('input[name="obsg"]').click(function() {
       if($(this).attr('id') == 'watch-me-obsg') {
            $('#show-me-obsg').show();           
       }
       else {
            $('#show-me-obsg').hide();   
       }
   });

$('input[name="obsh"]').click(function() {
       if($(this).attr('id') == 'watch-me-obsh') {
            $('#show-me-obsh').show();           
       }
       else {
            $('#show-me-obsh').hide();   
       }
   });
$('input[name="obsi"]').click(function() {
       if($(this).attr('id') == 'watch-me-obsi') {
            $('#show-me-obsi').show();           
       }
       else {
            $('#show-me-obsi').hide();   
       }
   });
$('input[name="obsj"]').click(function() {
       if($(this).attr('id') == 'watch-me-obsj') {
            $('#show-me-obsj').show();           
       }
       else {
            $('#show-me-obsj').hide();   
       }
   });
$('input[name="obsk"]').click(function() {
       if($(this).attr('id') == 'watch-me-obsk') {
            $('#show-me-obsk').show();           
       }
       else {
            $('#show-me-obsk').hide();   
       }
   });




   $('input[name="obs1"]').click(function() {
       if($(this).attr('id') == 'watch-me-obs1') {
            $('#show-me-obs1').show();           
       }
       else {
            $('#show-me-obs1').hide();   
       }
   });

$('input[name="obs2"]').click(function() {
       if($(this).attr('id') == 'watch-me-obs2') {
            $('#show-me-obs2').show();           
       }
       else {
            $('#show-me-obs2').hide();   
       }
   });

$('input[name="obs3"]').click(function() {
       if($(this).attr('id') == 'watch-me-obs3') {
            $('#show-me-obs3').show();           
       }
       else {
            $('#show-me-obs3').hide();   
       }
   });
$('input[name="obs4"]').click(function() {
       if($(this).attr('id') == 'watch-me-obs4') {
            $('#show-me-obs4').show();           
       }
       else {
            $('#show-me-obs4').hide();   
       }
   });

$('input[name="obs5"]').click(function() {
       if($(this).attr('id') == 'watch-me-obs5') {
            $('#show-me-obs5').show();           
       }
       else {
            $('#show-me-obs5').hide();   
       }
   });

$('input[name="obs6"]').click(function() {
       if($(this).attr('id') == 'watch-me-obs6') {
            $('#show-me-obs6').show();           
       }
       else {
            $('#show-me-obs6').hide();   
       }
   });
$('input[name="obs7"]').click(function() {
       if($(this).attr('id') == 'watch-me-obs7') {
            $('#show-me-obs7').show();           
       }
       else {
            $('#show-me-obs7').hide();   
       }
   });

$('input[name="obs8"]').click(function() {
       if($(this).attr('id') == 'watch-me-obs8') {
            $('#show-me-obs8').show();           
       }
       else {
            $('#show-me-obs8').hide();   
       }
   });
$('input[name="obs9"]').click(function() {
       if($(this).attr('id') == 'watch-me-obs9') {
            $('#show-me-obs9').show();           
       }
       else {
            $('#show-me-obs9').hide();   
       }
   });
$('input[name="obs10"]').click(function() {
       if($(this).attr('id') == 'watch-me-obs10') {
            $('#show-me-obs10').show();           
       }
       else {
            $('#show-me-obs10').hide();   
       }
   });









   $('input[name="mark1"]').click(function() {
       if($(this).attr('id') == 'watch-me-mark1') {
            $('#show-me-mark1').show();           
       }
       else {
            $('#show-me-mark1').hide();   
       }
   });




   $('input[name="mark2"]').click(function() {
       if($(this).attr('id') == 'watch-me-mark2') {
            $('#show-me-mark2').show();           
       }
       else {
            $('#show-me-mark2').hide();   
       }
   });
   $('input[name="mark3"]').click(function() {
       if($(this).attr('id') == 'watch-me-mark3') {
            $('#show-me-mark3').show();           
       }
       else {
            $('#show-me-mark3').hide();   
       }
   });
   $('input[name="mark4"]').click(function() {
       if($(this).attr('id') == 'watch-me-mark4') {
            $('#show-me-mark4').show();           
       }
       else {
            $('#show-me-mark4').hide();   
       }
   });
   $('input[name="mark5"]').click(function() {
       if($(this).attr('id') == 'watch-me-mark5') {
            $('#show-me-mark5').show();           
       }
       else {
            $('#show-me-mark5').hide();   
       }
   });
   $('input[name="mark6"]').click(function() {
       if($(this).attr('id') == 'watch-me-mark6') {
            $('#show-me-mark6').show();           
       }
       else {
            $('#show-me-mark6').hide();   
       }
   });
   $('input[name="mark7"]').click(function() {
       if($(this).attr('id') == 'watch-me-mark7') {
            $('#show-me-mark7').show();           
       }
       else {
            $('#show-me-mark7').hide();   
       }
   });
   $('input[name="mark8"]').click(function() {
       if($(this).attr('id') == 'watch-me-mark8') {
            $('#show-me-mark8').show();           
       }
       else {
            $('#show-me-mark8').hide();   
       }
   });
   $('input[name="mark9"]').click(function() {
       if($(this).attr('id') == 'watch-me-mark9') {
            $('#show-me-mark9').show();           
       }
       else {
            $('#show-me-mark9').hide();   
       }
   });
   $('input[name="mark10"]').click(function() {
       if($(this).attr('id') == 'watch-me-mark10') {
            $('#show-me-mark10').show();           
       }
       else {
            $('#show-me-mark10').hide();   
       }
   });
  
});


  $(function () {
        $("#watch-me-mark1").click(function () {
            if ($(this).is(":checked")) {
                $("#show-me-mark1").show();
            } else {
                $("#show-me-mark1").hide();
            }
        });
    });
    $(function () {
        $("#watch-me-mark2").click(function () {
            if ($(this).is(":checked")) {
                $("#show-me-mark2").show();
            } else {
                $("#show-me-mark2").hide();
            }
        });
    });
    $(function () {
        $("#watch-me-mark3").click(function () {
            if ($(this).is(":checked")) {
                $("#show-me-mark3").show();
            } else {
                $("#show-me-mark3").hide();
            }
        });
    });
    $(function () {
        $("#watch-me-mark4").click(function () {
            if ($(this).is(":checked")) {
                $("#show-me-mark4").show();
            } else {
                $("#show-me-mark4").hide();
            }
        });
    });
    $(function () {
        $("#watch-me-mark5").click(function () {
            if ($(this).is(":checked")) {
                $("#show-me-mark5").show();
            } else {
                $("#show-me-mark5").hide();
            }
        });
    });
    $(function () {
        $("#watch-me-mark6").click(function () {
            if ($(this).is(":checked")) {
                $("#show-me-mark6").show();
            } else {
                $("#show-me-mark6").hide();
            }
        });
    });
    $(function () {
        $("#watch-me-mark7").click(function () {
            if ($(this).is(":checked")) {
                $("#show-me-mark7").show();
            } else {
                $("#show-me-mark7").hide();
            }
        });
    });
    $(function () {
        $("#watch-me-mark8").click(function () {
            if ($(this).is(":checked")) {
                $("#show-me-mark8").show();
            } else {
                $("#show-me-mark8").hide();
            }
        });
    });
    $(function () {
        $("#watch-me-mark9").click(function () {
            if ($(this).is(":checked")) {
                $("#show-me-mark9").show();
            } else {
                $("#show-me-mark9").hide();
            }
        });
    });
    $(function () {
        $("#watch-me-mark10").click(function () {
            if ($(this).is(":checked")) {
                $("#show-me-mark10").show();
            } else {
                $("#show-me-mark10").hide();
            }
        });
    });
 



</script>