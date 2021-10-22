<?php 
session_start();
if(isset($_SESSION['userid'])){	
$gwidcab = $_SESSION['userid'];

?>
<!DOCTYPE html>

<!-- 
Theme: Keen - The Ultimate Bootstrap Admin Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/ in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base >

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Cabins Disinfection Plan</title>
		<meta name="description" content="Datatable HTML table">
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

		<!--begin:: Global Mandatory Vendors -->
		<link href="../../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

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

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="../../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="../../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<style type="text/css">
			@media (min-width: 1025px){
.kt-aside--fixed .kt-wrapper {
    padding-left: 110px;
    padding-right: 110px; 
}
		</style>


		    <style type="text/css">
       * {
  box-sizing: border-box;
  outline: none;
}


html {
    height: 100%;
}
body {

    background-repeat: no-repeat;
    background-attachment: fixed;
}

body {
  background: -webkit-gradient(linear, left top, left bottom, from(#0d1429), to(#2d78ad)) fixed;
}

.accordion .card .card-body {
    padding: 0rem !important;
    font-size: 1rem;
}
.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 0rem !important;
}

<style type="text/css">
	.pieContainer {
  background-color: #fafafa;  
}

.pieContainer .pie {
  /* Basic layout */
  display: inline-block;
  width: 160px;
  height: 160px;
  border-radius: 50%;

  /* A little styling */
  border: 4px solid #fff;
  box-shadow: 0 2px 2px 2px rgba(0,0,0,.1);

  /* fixes a minor clipping issue in Chrome */
  background-origin: border-box; 
  
  vertical-align: middle;
}

.pieContainer .key {
  display: inline-block;
  margin-left: 20px;
}
.pieContainer .key .item {
  padding: 2px 4px 2px 24px;
  position: relative;
}
.pieContainer .key .item.prod:before { 
  background-color: #1dc9b7;
  content: '';
  position: absolute;
  width: 20px; 
  height: 20px;
  margin: -2px -4px;
  margin: -2px -4px -2px -24px;
}
.pieContainer .key .item.vault:before { 
  background-color: #c28554;
  content: '';
  position: absolute;
  width: 20px; 
  height: 20px;
  margin: -2px -4px -2px -24px;
}

.dataTables_wrapper .child .dtr-details ul{
	width: 100%;
}
.dataTables_wrapper .child .dtr-details {
	width: 100%;
}
.dataTables_wrapper .child .dtr-details li{
	width: 100%;
}


table.dataTable.dtr-inline.collapsed > tbody > tr.parent > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr.parent > th:first-child:before {
    content: '+';
    color: #00A1db;
    font-weight: 800;
    border: 1.5px solid #00A1db;
    background-color: white;
    box-shadow: 0 0 0 0;
}

.child .dtr-details > li .dtr-title {

}
@media only screen and (min-width : 1025px) {
    #kt_wrapper {
        margin-top: 10%;
    }
    .imgheader{
    	width: 100%;
    	position: absolute;

    	top: 0;
    }
}


@media only screen and (max-width : 1024px) {
    #kt_wrapper {
        margin-top: 0%;
    }
    .imgheader{
    	width: 100%;
    	position: absolute;

    	top: 0;
    	display: none;
    }
}


</style>


    </style>
		<link rel="shortcut icon" href="../../img/favicon-32x32.png" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
		<img src="../img/Header-Application-covid.png" class="imgheader">
				<a href="" data-toggle="modal" data-target="#logoutpop"><div style="position: absolute;width: 250px; height: 18%;top: 50px;left: 9%;"></div></a>
		<div class="modal fade" id="logoutpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">GENIWORKS ADMIN</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<form action="../controls/logout2.php" method="post">
																<div class="modal-body">
																
<div class="kt-portlet kt-portlet--height-fluid-half kt-widget-15">
										<div class="kt-portlet__body">

											<!-- Doc: The bootstrap carousel is a slideshow for cycling through a series of content, see https://getbootstrap.com/docs/4.1/components/carousel/ -->
											<div id="kt-widget-slider-14-2" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="8000">
											
												<div class="carousel-inner">
													
													<div class="carousel-item carousel-item-next carousel-item-left">
														<div class="kt-widget-15__body">
															<div class="kt-widget-15__author">
																<div class="kt-widget-15__photo">
																	<a href="#"><img src="../img/admin.jpg" alt="" title=""></a>
																</div>
																<div class="kt-widget-15__detail">
																	<a href="#" class="kt-widget-15__name"><?php 
require('../controls/zdze8efzedzdeezd/de5.php');
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$gwidcab'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	$userposition=$showm[9];
 	$userlastv=$showm[8];
 	?><?php echo $member;?>

<?php }
}
else{
	$member="NONE";
}
}?></a>
																	<div class="kt-widget-15__desc">
																		 	<?php echo $userposition;?>
																	</div>
																</div>
															</div>
														
														</div>
														<div class="kt-widget-15__foot">
															<div class="kt-widget-15__foot-info">
																<div class="kt-widget-15__foot-label btn btn-sm btn-label-brand btn-bold">
																	<?php echo $userlastv;?>
																</div>
																<div class="kt-widget-15__foot-desc">last Login</div>
															</div>
															<div class="kt-widget-15__foot-toolbar">
																<button type="submit" name="gocab" class="btn btn-danger">Log out</button>
															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
																</div>
																
															</form>
															</div>
														</div>
													</div>

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " style="height: 80px;">
			<div class="kt-header-mobile__logo">
				<a href="" data-toggle="modal" data-target="#logoutpop">
					<img alt="Logo" src="../../img/logo-v3.png" width="115" style="" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">


				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->

		<!-- begin:: Root -->
		<div class="kt-grid kt-grid--hor kt-grid--root">

			<!-- begin:: Page -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Wrapper -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " style="background-color: transparent; box-shadow: 0;">

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
						
						</div>
					</div>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						<!-- begin:: Subheader -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-subheader__main">
								<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="row">
							
							<div class="col-lg-12 col-xl-12 order-lg-12 order-xl-12">
								<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-subheader__main">
								<h3 class="kt-subheader__title" style="color: white; font-size: 24px;">ANTIPANIC PLAN - APM TERMINALS 02</h3>
								<h3 class="kt-subheader__title" style="color: white;">COVID-19 Cabins Disinfection Solution</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
								<div class="kt-subheader__breadcrumbs">
									<a href="#" class="kt-subheader__breadcrumbs-link">Home</a>
									<span class="kt-subheader__breadcrumbs-separator"></span>
									<a href="" class="kt-subheader__breadcrumbs-link">
										Dashboard </a>
									<span class="kt-subheader__breadcrumbs-separator"></span>
									<a href="" class="kt-subheader__breadcrumbs-link">
										Solutions </a>

									<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
								</div>
							</div>
							
						</div>
							</div>
							
						</div>
							</div>
							
						</div>



						
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
						<div class="row">

                    
                    <div class="col-lg-7 col-xl-7 order-lg-2 order-xl-1">
							
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
											Operations Progress
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											
										 <button type="button" class="btn btn-outline-brand" data-toggle="modal" data-target="#exampleModalCenter">
														<i class="la la-plus"></i>
												Today's Report
													</button> 








											
												
											
										</div>
									</div>
								</div>
<style>
.filterDiv {
  
  display: none;
}

.show {
  display: block;
}

.containers {

  overflow: hidden;
}

/* Style the buttons */
.btns {
  border: none;
  outline: none;

  cursor: pointer;
}

.btns:hover {

}

.btns.active {
  background-color: #c3e6f7;
  padding: 5px;
  padding-bottom: 1px;
  color: #101932;
  width: 100%;
  font-weight: 600;
}
</style>





								<div class="kt-portlet__body" style="padding-left: 20px; padding-top: 0;padding-bottom: 0;">
									<div class="kt-form kt-fork--label-right kt-margin-t-20 kt-margin-b-10">
										<div class="row align-items-center">
											<div class="col-xl-12 order-2 order-xl-1">
												<div class="row align-items-center">
													
													
													 <div class="col-md-12 ">
														<div class="kt-form__group kt-form__group--inline" style="width: 100%;margin-right: 0;">
															
															<div class="kt-form__control">
																	<div class="kt-widget-2">
														<div class="kt-widget-2__content kt-portlet__space-x" style="padding-left: 0px !important;">
															
															<div class="kt-widget-2__stats" style="margin-top: 0px !important; margin-bottom: 5.5px;">
																<div class="kt-widget-2__stats-author">

																	<span class="kt-widget-2__stats-text" style="    margin: 0;
    padding: 0;
    font-size: 1.1rem;
    font-weight: 500;
    color: #3d4465;"> Filters by status</span>
																</div>
															</div>
														</div>
													</div>
																<div id="myBtnContainer">
 	<div class="row">
  <div  class="col-md-3 btns kt-form__label" onclick="filterSelection('all')">
														<label><span class="kt-list__icon"><i class="flaticon2-list kt-font-brand"></i></span> All</label>
													</div>

													<div  class="col-md-3  btns kt-form__label" onclick="filterSelection('Disinfected')">
														<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span> Disinfected</label>
													</div>

													<div class="col-md-3 kt-form__label btns" onclick="filterSelection('outdisinfected')">
														<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span> Requires redisinfection</label>
													</div>

													<div class="col-md-3 kt-form__label btns"  onclick="filterSelection('Inprogress')">
														<label><span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span> In progress</label>
													</div>


													
													<div class="col-md-3 kt-form__label btns" onclick="filterSelection('outprogress')">
														<label><span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>	 Timeout redisinfection</label>
													</div>						

												
													<div class="col-md-3 kt-form__label btns" onclick="filterSelection('Notdisinfected')">
														<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span> Not disinfected</label>
													</div>
													

													<div class=" col-md-3 kt-form__label btns" onclick="filterSelection('Notavailable')">
														<label><span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span> Not available</label>
													</div>
									</div>
													
															</div>
														</div>
														</div>
													</div> 
												</div>
											</div>
											
										</div>
									</div>
								</div>

								<div class="containers">

								<div class="kt-portlet__body kt-portlet__body--fit">
											
												


	<div class="accordion" id="accordionExample4">
											<div class="card">
													<div class="card-header" id="headingadmin">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseadmin" aria-expanded="false" aria-controls="collapseadmin">
															<i class="flaticon2-right-arrow"></i> Administration
														</div>
													</div>
													<div class="kt-portlet__body" style="padding-left: 20px; padding-right: 1px; padding-top: 0px;padding-bottom: 0px;">
													<div id="collapseadmin" class="collapse" aria-labelledby="headingadmin" data-parent="#accordionExample4">
														<div class="card-body">
															<div class="accordion accordion-light" id="accordionadmin">
												<div class="card">
													<div class="card-header" id="headingrooms">
														<div class="card-title" data-toggle="collapse" data-target="#collapserooms" aria-expanded="false" aria-controls="collapserooms">
															ROOMS
														</div>
													</div>
													<div id="collapserooms" class="collapse" aria-labelledby="headingrooms" data-parent="#accordionadmin">
														<div class="card-body" >
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'ADMINISTRATION%' AND cabn_name LIKE 'adminroom%'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resafter=$selectafter->get_result();

                   
                                  

 ?>

									

									  
									<div class="accordion accordion-light" id="accordionrtgo">
												<div class="card ">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Disinfected'){
$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {



							?>
													<div class="card-header filterDiv Disinfected" id="headingrooms<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapserooms<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapserooms<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php }elseif ($time<$today) {?>
							<div class="card-header filterDiv outdisinfected" id="headingrooms<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapserooms<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapserooms<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php }}?>
						<?php  if($showcab[3]=='Not disinfected'){


							?>
													<div class="card-header filterDiv Notdisinfected" id="headingrooms<?php echo $showcab[0];?>">
														<div class="card-title  collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapserooms<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapserooms<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div><?php }?>
							<?php  if($showcab[3]=='In progress'){
$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {


							?>
													<div class="card-header filterDiv Inprogress" id="headingrooms<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapserooms<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapserooms<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php }
						elseif($time<$today){?>
							<div class="card-header filterDiv outprogress" id="headingrooms<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapserooms<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapserooms<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						<?php }}?>
							<?php  if($showcab[3]=='Not available'){


							?>
													<div class="card-header filterDiv Notavailable" id="headingrooms<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapserooms<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapserooms<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div><?php }?>
							<?php  if($showcab[3]=='Canceled'){


							?>
													<div class="card-header filterDiv Canceled" id="headingrooms<?php echo $showcab[0];?>">
														<div class="card-title" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapserooms<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapserooms<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div><?php }?>




														
														
										<div id="collapserooms<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingrooms<?php echo $showcab[0];?>" data-parent="#accordionrtgo">
											<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															<li >
																<span class="dtr-title">Start at</span>
																<span class="dtr-data"><?php echo date("Y-m-d H:i:s", strtotime($showcab[4].'-1 hour')); ?></span>
															</li>
															<li >
																<span class="dtr-title">Finish</span>
																<span class="dtr-data">
<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_id DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {
if (strtotime($showfisnish[5]) > strtotime($showcab[4]))  {
   echo $showfisnish[5];

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}
}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>


																	 <span class="text-muted"></span></span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-data">
																	<span style="font-weight: 600;">

																		<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_id DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {
if (strtotime($showfisnish[5]) > strtotime($showcab[4]))  {
 	$showfinishop=date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));






echo  number_format((float)((abs(strtotime(date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'))) - strtotime(date("Y-m-d H:i:s", strtotime($showcab[4].'-1 hour')))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	$ttgdiff="<span class='text-muted'>last operation Not marked finished</span>";
}
}
}


}?>


																	   </span>




																	</span>
															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatrooms" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatrooms"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
										</div>
												<div class="card">
													<div class="card-header" id="headingcorre">
														<div class="card-title" data-toggle="collapse" data-target="#collapsecorre" aria-expanded="false" aria-controls="collapsecorre">
															CORRIDORS
														</div>
													</div>
													<div id="collapsecorre" class="collapse" aria-labelledby="headingcorre" data-parent="#accordionadmin">
														<div class="card-body" >
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'ADMINISTRATION%' AND cabn_name LIKE 'admincorridor%'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resafter=$selectafter->get_result();

                   
                                  

 ?>

									

									  
									<div class="accordion accordion-light" id="accordionrtge">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Disinfected'){
$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {



							?>

													<div class="card-header filterDiv Disinfected" id="headingcorre<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecorre<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecorre<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }elseif ($time<$today) {?>
	<div class="card-header filterDiv outdisinfected" id="headingcorre<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecorre<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecorre<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }}?>
<?php  if($showcab[3]=='In progress'){

$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {
 ?>
<div class="card-header filterDiv Inprogress" id="headingcorre<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecorre<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecorre<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }
												elseif($time<$today){ ?>
													<div class="card-header filterDiv outprogress" id="headingcorre<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecorre<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecorre<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }}?>
<?php  if($showcab[3]=='Not disinfected'){ ?>
<div class="card-header filterDiv Notdisinfected" id="headingcorre<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecorre<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecorre<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

	<?php }?>
	<?php  if($showcab[3]=='Not available'){ ?>
<div class="card-header filterDiv Notavailable" id="headingcorre<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecorre<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecorre<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

	<?php }?>
	<?php  if($showcab[3]=='Canceled'){ ?>
<div class="card-header filterDiv Canceled" id="headingcorre<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecorre<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecorre<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

	<?php }?>

														
														
											<div id="collapsecorre<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingcorre<?php echo $showcab[0];?>" data-parent="#accordionrtge">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
															<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo $showbegin[5];

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5]))  {
   echo $showfisnish[5];

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatcorred" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatcorred"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
													<div class="card-header" id="headingwc">
														<div class="card-title" data-toggle="collapse" data-target="#collapsewc" aria-expanded="false" aria-controls="collapsewc">
															WC
														</div>
													</div>
													<div id="collapsewc" class="collapse" aria-labelledby="headingwc" data-parent="#accordionadmin">
														<div class="card-body" >
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'ADMINISTRATION%' AND cabn_name LIKE 'adminwc%'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resafter=$selectafter->get_result();

                   
                                  

 ?>

									

									  
									<div class="accordion accordion-light" id="accordionrtge">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Disinfected'){
$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {



							?>
													<div class="card-header filterDiv Disinfected" id="headingwc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsewc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsewc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
								<?php }
								elseif($time<$Today){
									?>
									<div class="card-header filterDiv outdisinfected" id="headingwc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsewc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsewc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

								<?php 
							}}

								?>

<?php  if($showcab[3]=='In progress'){
$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {
							?>
													<div class="card-header filterDiv Inprogress" id="headingwc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsewc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsewc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
								<?php }
								elseif($time<$today){ ?>
									<div class="card-header filterDiv outprogress" id="headingwc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsewc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsewc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

								<?php }}
									?>
									<?php  if($showcab[3]=='Not disinfected'){

							?>
													<div class="card-header filterDiv Notdisinfected" id="headingwc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsewc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsewc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
								<?php }
									?>
									<?php  if($showcab[3]=='Not available'){

							?>
													<div class="card-header filterDiv Notavailable" id="headingwc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsewc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsewc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
								<?php }
									?>
									<?php  if($showcab[3]=='Canceled'){

							?>
													<div class="card-header filterDiv Canceled" id="headingwc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsewc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsewc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
								<?php }
									?>


														
														
											<div id="collapsewc<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingwc<?php echo $showcab[0];?>" data-parent="#accordionrtge">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
															<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo $showbegin[5];

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5]))  {
   echo $showfisnish[5];

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatwc" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatrtwc"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										
												


											</div>
										</div>
									</div>
								</div>
							</div>

													


												
								<div class="card">
													<div class="card-header" id="headingdsts">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsedsts" aria-expanded="false" aria-controls="collapsedsts">
															<i class="flaticon2-right-arrow"></i>  DSTS
														</div>
													</div>
													<div id="collapsedsts" class="collapse" aria-labelledby="headingdsts" data-parent="#accordionExample4">
														<div class="card-body">


											<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'DSTS%'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>

									

									  
									<div class="accordion accordion-light" id="accordiondstsf"  style="padding-left: 20px;">
												<div class="card  " >
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) { 

																if($showcab[3]=='Disinfected'){





$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {


 ?>
<div class="card-header filterDiv Disinfected" id="headingdstsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsedstsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsedstsf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>													
<?php }elseif($time < $today) {
 ?>

													<div class="card-header filterDiv outdisinfected" id="headingdstsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsedstsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsedstsf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } ?>








<?php }?>


			<?php  if($showcab[3]=='Not disinfected'){?>

													<div class="card-header filterDiv Notdisinfected" id="headingdstsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsedstsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsedstsf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>
<?php  if($showcab[3]=='In progress'){?>

													<div class="card-header filterDiv Inprogress" id="headingdstsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsedstsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsedstsf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>


<?php  if($showcab[3]=='Not available'){?>

													<div class="card-header filterDiv Notavailable" id="headingdstsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsedstsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsedstsf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>

<?php  if($showcab[3]=='Canceled'){?>

													<div class="card-header filterDiv Canceled" id="headingdstsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsedstsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsedstsf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>









														
														
											<div id="collapsedstsf<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingdstsf<?php echo $showcab[0];?>" data-parent="#accordiondstsf">
														<div class="card-body" >
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
															<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5].'-1 hour') > strtotime($showbegin[5].'-1 hour'))&&(strtotime($showfisnish[5].'-1 hour')-strtotime($showbegin[5].'-1 hour')>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5].'-1 hour')-strtotime($showbegin[5].'-1 hour'))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
							
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatdsts" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatdsts"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
								</div>
												<div class="card">

													<div class="card-header" id="headingfrk">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefrk" aria-expanded="false" aria-controls="collapsefrk">
															<i class="flaticon2-right-arrow"></i>  Forklift
														</div>
													</div>
													<div id="collapsefrk" class="collapse" aria-labelledby="headingfrk" data-parent="#accordionExample4">
														<div class="card-body">


												
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'FORK%' AND cabn_owner='APM-TERMINALS 02'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resafter=$selectafter->get_result();

                   
                                  

 ?>

									

									  
									<div class="accordion accordion-light" id="accordionfrk"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>

																<?php  if($showcab[3]=='Not disinfected'){?>

													<div class="card-header  filterDiv Notdisinfected" id="headingfrk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsefrk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsefrk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>

												<?php  if($showcab[3]=='Disinfected'){


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {



													?>

													<div class="card-header  filterDiv Disinfected" id="headingfrk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsefrk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsefrk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php }elseif($time < $today) {

												 ?>
												 <div class="card-header  filterDiv outdisinfected" id="headingfrk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsefrk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsefrk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>

												<?php  if($showcab[3]=='In progress'){?>

													<div class="card-header  filterDiv Inprogress" id="headingfrk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsefrk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsefrk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>
												<?php  if($showcab[3]=='Canceled'){?>

													<div class="card-header  filterDiv Canceled" id="headingfrk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsefrk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsefrk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>

												<?php  if($showcab[3]=='Notavailable'){?>

													<div class="card-header  filterDiv Notavailable" id="headingfrk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsefrk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsefrk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>


														
														
											<div id="collapsefrk<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingfrk<?php echo $showcab[0];?>" data-parent="#accordionfrk">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
														<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>

															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control ">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatfrk" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatfrk"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
								</div>
								<div class="card">
													<div class="card-header" id="headingeh">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseeh" aria-expanded="false" aria-controls="collapseeh">
															<i class="flaticon2-right-arrow"></i>  Containers QUAY SIDE
														</div>
													</div>
													<div id="collapseeh" class="collapse" aria-labelledby="headingeh" data-parent="#accordionExample4">
														<div class="card-body">


											<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'Container%'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>

									

									  
									<div class="accordion accordion-light" id="accordionehh"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>

												<?php  if($showcab[3]=='Not disinfected'){?>

													<div class="card-header filterDiv Notdisinfected" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseehh<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseehh<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } ?>

	<?php  if($showcab[3]=='Disinfected'){


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {


		?>

													<div class="card-header filterDiv Disinfected" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseehh<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseehh<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }elseif ($time<$today) {
	?>

<div class="card-header filterDiv outdisinfected" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseehh<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseehh<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>


<?php }} ?>

	<?php  if($showcab[3]=='In progress'){?>

													<div class="card-header filterDiv Inprogress" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseehh<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseehh<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } ?>

														
															<?php  if($showcab[3]=='Not available'){?>

													<div class="card-header filterDiv Notavailable" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseehh<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseehh<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } ?>

	<?php  if($showcab[3]=='Canceled'){?>

													<div class="card-header filterDiv Canceled" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseehh<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseehh<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } ?>
														
											<div id="collapseehh<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingehh<?php echo $showcab[0];?>" data-parent="#accordionehh">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
														<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatqc" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatqc"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
								</div>
								<div class="card">
													<div class="card-header" id="headingrsk">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsersk" aria-expanded="false" aria-controls="collapsersk">
															<i class="flaticon2-right-arrow"></i>Shuttle Carrier
														</div>
													</div>
													<div id="collapsersk" class="collapse" aria-labelledby="headingrsk" data-parent="#accordionExample4">
														<div class="card-body">


												
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'Shuttle Carrier%'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>

									

									  
									<div class="accordion accordion-light" id="accordionrsk"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>

<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="headingrsk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsersk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsersk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>
<?php  if($showcab[3]=='Disinfected'){

$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {

	?>
													<div class="card-header filterDiv Disinfected" id="headingrsk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsersk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsersk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }elseif($time<$today){?>

<div class="card-header filterDiv outdisinfected" id="headingrsk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsersk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsersk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php }}?>

<?php  if($showcab[3]=='In progress'){?>
													<div class="card-header filterDiv Inprogress" id="headingrsk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsersk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsersk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php } ?>
													<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="headingrsk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsersk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsersk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php } ?>
		<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingrsk<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsersk<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsersk<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php } ?>


														
														
											<div id="collapsersk<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingrsk<?php echo $showcab[0];?>" data-parent="#accordionrsk">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
															<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatshc" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatshc"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
								</div>
												
										
												<div class="card">

													<div class="card-header" id="headingopsc">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseopsc" aria-expanded="false" aria-controls="collapseopsc">
															<i class="flaticon2-right-arrow"></i>  OPERATIONS CARS
														</div>
													</div>
													<div id="collapseopsc" class="collapse" aria-labelledby="headingopsc" data-parent="#accordionExample4">
														<div class="card-body">


												
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'OPS%' AND cabn_owner='APM-TERMINALS 02'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resafter=$selectafter->get_result();

                   
                                  

 ?>

									

									  
									<div class="accordion accordion-light" id="accordionfrk"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>

																<?php  if($showcab[3]=='Not disinfected'){?>

													<div class="card-header  filterDiv Notdisinfected" id="headingopsc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopsc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopsc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>

												<?php  if($showcab[3]=='Disinfected'){


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {



													?>

													<div class="card-header  filterDiv Disinfected" id="headingopsc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopsc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopsc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php }elseif($time < $today) {

												 ?>
												 <div class="card-header  filterDiv outdisinfected" id="headingopsc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopsc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopsc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>

												<?php  if($showcab[3]=='In progress'){
$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {
													?>

													<div class="card-header  filterDiv Inprogress" id="headingopsc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopsc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopsc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } elseif($time<$today){?>
	<div class="card-header  filterDiv outprogress" id="headingopsc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopsc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopsc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>
												<?php  if($showcab[3]=='Canceled'){?>

													<div class="card-header  filterDiv Canceled" id="headingopsc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopsc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopsc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>

												<?php  if($showcab[3]=='Notavailable'){?>

													<div class="card-header  filterDiv Notavailable" id="headingopsc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopsc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopsc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>


														
														
											<div id="collapseopsc<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingopsc<?php echo $showcab[0];?>" data-parent="#accordionfrk">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
														<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>

															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control ">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatopsc" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatopsc"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
								</div>
								<div class="card">

													<div class="card-header" id="headingmrcars">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsemrcars" aria-expanded="false" aria-controls="collapsemrcars">
															<i class="flaticon2-right-arrow"></i>  M&R CARS
														</div>
													</div>
													<div id="collapsemrcars" class="collapse" aria-labelledby="headingmrcars" data-parent="#accordionExample4">
														<div class="card-body">


												
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'OPS%' AND cabn_owner='APM-TERMINALS 02'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resafter=$selectafter->get_result();

                   
                                  

 ?>

									

									  
									<div class="accordion accordion-light" id="accordionfrk"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>

																<?php  if($showcab[3]=='Not disinfected'){?>

													<div class="card-header  filterDiv Notdisinfected" id="headingmrcars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcars<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>

												<?php  if($showcab[3]=='Disinfected'){


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {



													?>

													<div class="card-header  filterDiv Disinfected" id="headingmrcars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcars<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php }elseif($time < $today) {

												 ?>
												 <div class="card-header  filterDiv outdisinfected" id="headingmrcars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcars<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>

												<?php  if($showcab[3]=='In progress'){
$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {
													?>

													<div class="card-header  filterDiv Inprogress" id="headingmrcars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcars<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } elseif($time<$today){?>
	<div class="card-header  filterDiv outprogress" id="headingmrcars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcars<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>
												<?php  if($showcab[3]=='Canceled'){?>

													<div class="card-header  filterDiv Canceled" id="headingmrcars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcars<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>

												<?php  if($showcab[3]=='Notavailable'){?>

													<div class="card-header  filterDiv Notavailable" id="headingmrcars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcars<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>

<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>


														
														
											<div id="collapsemrcars<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingmrcars<?php echo $showcab[0];?>" data-parent="#accordionfrk">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
														<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>

															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control ">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatmrcars" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatmrcars"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
								</div>
								<div class="card">
													<div class="card-header" id="headinginternal">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseinternal" aria-expanded="false" aria-controls="collapseinternal">
															<i class="flaticon2-right-arrow"></i> Internal 
														</div>
													</div>
													<div class="kt-portlet__body" style="padding-left: 20px; padding-right: 1px; padding-top: 0px;padding-bottom: 0px;">
													<div id="collapseinternal" class="collapse" aria-labelledby="headinginternal" data-parent="#accordionExample4">
														<div class="card-body">
															<div class="accordion accordion-light" id="accordioninternal">
												<div class="card">
													<div class="card-header" id="headingibus">
														<div class="card-title" data-toggle="collapse" data-target="#collapseribus" aria-expanded="false" aria-controls="collapseribus">
															Bus
														</div>
													</div>
													<div id="collapseribus" class="collapse" aria-labelledby="headingibus" data-parent="#accordioninternal">
														<div class="card-body" >
														<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'Internal bus%' AND cabn_owner='APM-TERMINALS 02'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>
				
									

									  
									<div class="accordion accordion-light" id="accordionrtgo">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="headingibus<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseribus<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseribus<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>

						<?php  if($showcab[3]=='Disinfected'){
$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {



							?>
													<div class="card-header filterDiv Disinfected" id="headingibus<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseribus<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseribus<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php }elseif ($time<$today) {?>

							<div class="card-header filterDiv outdisinfected" id="headingibus<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseribus<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseribus<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							
						<?php }} ?>

						<?php  if($showcab[3]=='In progress'){?>
													<div class="card-header filterDiv Inprogress" id="headingibus<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseribus<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseribus<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>


						<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingibus<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseribus<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseribus<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>
						<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="headingibus<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseribus<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseribus<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>

														
														
										<div id="collapseribus<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingibus<?php echo $showcab[0];?>" data-parent="#accordionrtgo">
											<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
															<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatintb" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatintb"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
										</div>
												<div class="card">
													<div class="card-header" id="headingitruck">
														<div class="card-title" data-toggle="collapse" data-target="#collapseitruck" aria-expanded="false" aria-controls="collapseitruck">
															Truck
														</div>
													</div>
													<div id="collapseitruck" class="collapse" aria-labelledby="headingitruck" data-parent="#accordioninternal">
														<div class="card-body" >
<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'Internal truck%' AND cabn_owner='APM-TERMINALS 02'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>
				

									

									  
									<div class="accordion accordion-light" id="accordionitruck">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="headingitruck<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseitruck<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseitruck<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }?>

												<?php  if($showcab[3]=='Disinfected'){
$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {

													?>
													<div class="card-header filterDiv Disinfected" id="headingitruck<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseitruck<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseitruck<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }elseif ($time<$today) {
													?>
													<div class="card-header filterDiv outdisinfected" id="headingitruck<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseitruck<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseitruck<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>

												<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingitruck<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseitruck<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseitruck<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }?>

												<?php  if($showcab[3]=='In progress'){?>
													<div class="card-header filterDiv Inprogress" id="headingitruck<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseitruck<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseitruck<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }?>

												<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="headingitruck<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseitruck<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseitruck<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;">
                                        	<?php if($showcab[1]=="ercabin-1"){ ?>
												E-ROOM 01
<?php }elseif($showcab[1]=="ercabin-2"){ ?>
												E-ROOM 02
<?php }elseif($showcab[1]=="ercabin-3"){ ?>
												E-ROOM 03
<?php }elseif($showcab[1]=="ercabin-4"){ ?>
												E-ROOM 04
<?php }elseif($showcab[1]=="ercabin-5"){ ?>
												E-ROOM 05
<?php }elseif($showcab[1]=="ercabin-6"){ ?>
												E-ROOM 06
<?php }elseif($showcab[1]=="ercabin-7"){ ?>
												E-ROOM 07
<?php }elseif($showcab[1]=="ercabin-8"){ ?>
												E-ROOM 08
<?php }elseif($showcab[1]=="ercabin-9"){ ?>
												E-ROOM 09
<?php }elseif($showcab[1]=="ercabin-10"){ ?>
												E-ROOM 10
<?php }elseif($showcab[1]=="ercabin-11"){ ?>
												E-ROOM 11
<?php }elseif($showcab[1]=="ercabin-12"){ ?>
												E-ROOM 12
<?php }elseif($showcab[1]=="ercabin-13"){ ?>
												E-ROOM 13
<?php }elseif($showcab[1]=="ercabin-14"){ ?>
												E-ROOM 14
<?php }elseif($showcab[1]=="ercabin-15"){ ?>
												E-ROOM 15
<?php }elseif($showcab[1]=="ercabin-16"){ ?>
												E-ROOM 16
<?php }elseif($showcab[1]=="ercabin-17"){ ?>
												E-ROOM 17
<?php }elseif($showcab[1]=="ercabin-18"){ ?>
												E-ROOM 18
<?php }elseif($showcab[1]=="ercabin-19"){ ?>
												E-ROOM 19
<?php }elseif($showcab[1]=="ercabin-20"){ ?>
												E-ROOM 20
<?php }elseif($showcab[1]=="ercabin-21"){ ?>
												E-ROOM 21
<?php }elseif($showcab[1]=="ercabin-22"){ ?>
												E-ROOM 22
<?php }elseif($showcab[1]=="ercabin-23"){ ?>
												E-ROOM 23
<?php }elseif($showcab[1]=="ercabin-24"){ ?>
												E-ROOM 24
<?php }elseif($showcab[1]=="ercabin-25"){ ?>
												E-ROOM 25
<?php }elseif($showcab[1]=="ercabin-26"){ ?>
												E-ROOM 26
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?>
	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }?>


														
														
											<div id="collapseitruck<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingitruck<?php echo $showcab[0];?>" data-parent="#accordionitruck">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
															<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatintt" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatintt"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
										</div>
												


											</div>
										</div>
									</div>
								</div>
							</div>

								<div class="card">
													<div class="card-header" id="headingexbus">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseexbus" aria-expanded="false" aria-controls="collapseexbus">
															<i class="flaticon2-right-arrow"></i>  External Bus
														</div>
													</div>
													<div id="collapseexbus" class="collapse" aria-labelledby="headingexbus" data-parent="#accordionExample4">
														<div class="card-body">


												
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'External bus%' AND cabn_owner='APM-TERMINALS 02'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>

									

									  
									<div class="accordion accordion-light" id="accordionehh"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseexbusv<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseexbusv<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>

<?php  if($showcab[3]=='Disinfected'){
$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {

	?>
													<div class="card-header filterDiv Disinfected" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseexbusv<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseexbusv<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }elseif($time<$today){ ?>
<div class="card-header filterDiv outdisinfected" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseexbusv<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseexbusv<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

<?php }}?>

<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseexbusv<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseexbusv<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>

<?php  if($showcab[3]=='iN Progress'){?>
													<div class="card-header Inprogress filterDiv" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseexbusv<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseexbusv<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>
								
								<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header Canceled filterDiv" id="headingehh<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseexbusv<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseexbusv<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>						
														
											<div id="collapseexbusv<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingehh<?php echo $showcab[0];?>" data-parent="#accordionehh">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>
															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
															<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatextb" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatextb"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
								</div>
								<div class="card">
																						<div class="card-header" id="headingcleanc">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsecleanc" aria-expanded="false" aria-controls="collapsecleanc">
															<i class="flaticon2-right-arrow"></i>  CLEANCO PICKUP
														</div>
													</div>
													<div id="collapsecleanc" class="collapse" aria-labelledby="headingcleanc" data-parent="#accordionExample4">
														<div class="card-body">

									<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'CLEANCO%' AND cabn_owner='APM-TERMINALS 02'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>
									

									  
									<div class="accordion accordion-light" id="accordioncleanco"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="headingcleanco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecleanco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecleanco<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } ?>

<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingcleanco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecleanco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecleanco<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } ?>

<?php  if($showcab[3]=='In progress'){?>
													<div class="card-header filterDiv Inprogress" id="headingcleanco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecleanco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecleanco<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } ?>

<?php  if($showcab[3]=='Disinfected'){

$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {


	?>
													<div class="card-header filterDiv Disinfected" id="headingcleanco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecleanco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecleanco<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }elseif ($time<$today) {?>
	<div class="card-header filterDiv outdisinfected" id="headingcleanco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecleanco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecleanco<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }} ?>

<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="headingcleanco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsecleanco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsecleanco<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } ?>
														
														
											<div id="collapsecleanco<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingcleanco<?php echo $showcab[0];?>" data-parent="#accordioncleanco">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>

															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatclp" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatclp"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
																						<div class="card-header" id="headingamb">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseamb" aria-expanded="false" aria-controls="collapseamb">
															<i class="flaticon2-right-arrow"></i>  AMBULANCES
														</div>
													</div>
													<div id="collapseamb" class="collapse" aria-labelledby="headingamb" data-parent="#accordionExample4">
														<div class="card-body">

									<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'AMBULANCE%' AND cabn_owner='APM-TERMINALS 02'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>
									

									  
									<div class="accordion accordion-light" id="accordionambi"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="headingambi<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseambi<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseambi<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>

<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingambi<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseambi<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseambi<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>

<?php  if($showcab[3]=='In progress'){?>
													<div class="card-header filterDiv Inprogress" id="headingambi<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseambi<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseambi<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>

<?php  if($showcab[3]=='Disinfected'){
$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {

	?>
													<div class="card-header filterDiv Disinfected" id="headingambi<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseambi<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseambi<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }elseif ($time<$today) {?>
	<div class="card-header filterDiv outdisinfected" id="headingambi<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseambi<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseambi<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }} ?>


<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="headingambi<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseambi<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseambi<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>
														
														
											<div id="collapseambi<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingambi<?php echo $showcab[0];?>" data-parent="#accordionambi">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>

															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															
															
															<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatambi" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatambi"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
																						<div class="card-header" id="headingotherc">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseotherc" aria-expanded="false" aria-controls="collapseotherc">
															<i class="flaticon2-right-arrow"></i>  OTHER CARS
														</div>
													</div>
													<div id="collapseotherc" class="collapse" aria-labelledby="headingotherc" data-parent="#accordionExample4">
														<div class="card-body">

									<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE (cabn_asset LIKE 'automat%' OR cabn_asset LIKE 'prot%' OR cabn_asset LIKE 'sc car%' OR cabn_asset LIKE 'it car%') AND cabn_owner='APM-TERMINALS 02'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>
									

									  
									<div class="accordion accordion-light" id="accordionothercf"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="headingothercf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseothercf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseothercf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[7];?> </span> <span class="text-muted"> <?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

<?php }?>

<?php  if($showcab[3]=='Disinfected'){

$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {

	?>
													<div class="card-header filterDiv Disinfected" id="headingothercf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseothercf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseothercf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[7];?> </span> <span class="text-muted"> <?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

<?php }elseif ($time<$Today) {?>
	<div class="card-header filterDiv outdisinfected" id="headingothercf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseothercf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseothercf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[7];?> </span> <span class="text-muted"> <?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }} ?>
														
														<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="headingothercf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseothercf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseothercf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[7];?> </span> <span class="text-muted"> <?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

<?php }?>
	
			<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingothercf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseothercf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseothercf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[7];?> </span> <span class="text-muted"> <?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

<?php }?>
														
																<?php  if($showcab[3]=='In progress'){?>
													<div class="card-header filterDiv Inprogress" id="headingothercf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseothercf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseothercf<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[7];?> </span> <span class="text-muted"> <?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<?php if($showcab[3]=="Disinfected"){

$hour_ago = strtotime('-8 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?><?php } ?>
<?php if($showcab[3]=="In progress"){

$hour_ago = strtotime('-1 hour');
$stamped=date('Y-m-d H:i:s', strtotime($showcab[3]).'+1 hour');


$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 1 hour
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {




$diff = abs(strtotime($time) - strtotime($today));



 ?>
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
<?php }elseif($time < $today) {
 ?>

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
<?php } ?>
<?php } ?>
<?php if($showcab[3]=="Canceled"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not disinfected"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
<?php } ?>
<?php if($showcab[3]=="Not available"){ ?>
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
<?php } ?>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

<?php }?>
	
											<div id="collapseothercf<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingothercf<?php echo $showcab[0];?>" data-parent="#accordionothercf">
														<div class="card-body">
												<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>

												<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li>
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-details"><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><?php echo $member;?>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?> - <span style="font-weight: 600;"><?php echo $membertema;?> Shift</span>
<?php }
}
else{
	$membertema="NONE";
}
}?></span>
															</li>

															<li >
																<span class="dtr-title">Operation</span>
																<span class="dtr-data"><?php echo $showcab[2];?></span>
															</li>
															<
														<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {

   echo date("Y-m-d H:i:s", strtotime($showbegin[5].'-1 hour'));

 	?> 
<?php 


}
}
?></span>
															</li>
															<li>
																<span class="dtr-title" style="color: #fd397a;">Last Disinfection</span>
																<span class="dtr-details">
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if (strtotime($showfisnish[5]) > strtotime($showbegin[5].'-1 hour'))  {
   echo date("Y-m-d H:i:s", strtotime($showfisnish[5].'-1 hour'));

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>last operation Not marked finished</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">last disinfection not marked as finish</span>
	<?php
}


}?>
																</span>
															</li>
															<li >
																<span class="dtr-title">Duration</span>
																<span class="dtr-details">
																	
																	<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 while ($showbegin=$reslastb->fetch_row()) {







if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])>60) ){
  
   echo  number_format((float)((abs((strtotime($showfisnish[5])-strtotime($showbegin[5]))))/60), 0, '.', '')."min";

 	?> 
<?php 

}

else{
	echo "<span class='text-muted'>Less than 1 minute</span>";
}

}
}

}
}
else{
	?>
	<span class="text-muted"  style="font-size: 9.9px;">less than 1 minute</span>
	<?php
}


}?>
																</span>

															</li>
															<li >
																<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-edit"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#<?php echo $showcab[1];?>update"><i class="la la-leaf"></i> Update Status</a>

                            </div>
                        </span>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>


									</div>

								</div>
										
										<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 02'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Update Status </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	
																		<div class="form-group row">
											<label class="col-form-label col-lg-4 col-sm-12">Cabin Status</label>
											<div class="col-lg-8 col-md-8 col-sm-12">
												<form method="post">
												<select name="updatedstat" class="form-control">
													<option value="Canceled" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Canceled</span>">Canceled</option>
													<option value="Not disinfected" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Not disinfected</span>">Not disinfceted</option>
													<option value="Disinfected" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Disinfected</span>">Disinfected</option>
													<option value="In progress" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">In progress</option>
													<option value="Not available" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>In progress</span>">Not available</option>
												</select>
												<br>
												<input type="hidden" name="upcabinid" value="<?php echo $showcab[1];?>">
												<input type="text" name="upuserid" class="form-control" required="">
												<br>
												<input align="right" type="submit" name="updatestatothc" class="btn btn-brand" value="Submit"/>
												
												
												


																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php
}}

?>

									<?php if (isset($_POST["updatestatothc"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
										</div>
												</div>
									<!--end: Datatable -->
								</div>
							</div>
						</div>
						
					</div>

					<div class="col-lg-5 col-xl-5  order-lg-1 order-xl-1">


                      <div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title"> Activity Summary</h3>
													</div>
													
												</div>
												<div class="kt-portlet__body">

													<div class="kt-widget-1">
														<ul class="nav nav-pills nav-tabs-btn nav-pills-btn-brand" role="tablist">
															<li class="nav-item"  style="padding-left: 0;padding-right: 0;">
																<a class="nav-link active" data-toggle="tab" href="#kt_tabs_19_15cb6c0fc43635" role="tab" aria-selected="true" style="padding-left: 0;padding-right: 0;">
																	<span class="nav-link-icon"><i class="kt-font-brand flaticon2-position"></i></span>
																	
																</a>
															</li>
															<li class="nav-item"  style="padding-left: 0;padding-right: 0;">
																<a class="nav-link" data-toggle="tab" href="#kt_tabs_19_25cb6c0fc43635" role="tab" aria-selected="false" style="padding-left: 0;padding-right: 0;">
																	<span class="nav-link-icon"><i class="kt-font-warning fa fa-battery-half"></i></span>
																	
																</a>
															</li>
															<li class="nav-item" style="padding-left: 0;padding-right: 0;">
																<a class="nav-link" data-toggle="tab" href="#kt_tabs_controls" role="tab" aria-selected="false" style="padding-left: 0;padding-right: 0;">
																	<span class="nav-link-icon"><i class="kt-font-success fa fa-cogs"></i></span>
																	
																</a>
															</li>
															<li class="nav-item" style="padding-left: 0;padding-right: 0;">
																<a class="nav-link" data-toggle="tab" href="#kt_tabs_19_35cb6c0fc43635" role="tab" aria-selected="false" style="padding-left: 0;padding-right: 0;">
																	<span class="nav-link-icon"><i class="kt-font-danger fa fa-lightbulb"></i></span>
																	
																</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane fade active show" id="kt_tabs_19_15cb6c0fc43635" role="tabpanel">
																<div class="kt-portlet__head"  style="padding-left: 0;">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title"> Operations</h3>
													</div>
													
												</div>
                              <div class="kt-widget-11">
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                     Done
                                    </div>
                                    <div class="kt-widget-11__value">
                                    		<?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='Disinfected' AND cabn_owner='APM-TERMINALS 02' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { echo $showresdis[0]; $varc=($showresdis[0]*100)/164;}}?>
                                      &nbsp;/&nbsp;<span class="kt-opacity-5">


<?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02'");
$cabinhis->execute();
if ($cabinhis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinr=$cabinhis->get_result();

                                

 ?>
<?php while ($showres=$cabinr->fetch_row()) { echo $showres[0]; }}?>


                                      Cabins</span>
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $varc;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                     Requires Redisinfection
                                    </div>
                                    <div class="kt-widget-11__value">
                                    	<?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='Disinfected' AND cabn_owner='APM-TERMINALS 02' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { echo $showresdis[0]; $varc=($showresdis[0]*100)/164;}}?>
                                      &nbsp;/&nbsp;<span class="kt-opacity-5">


<?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02'");
$cabinhis->execute();
if ($cabinhis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinr=$cabinhis->get_result();

                                

 ?>
<?php while ($showres=$cabinr->fetch_row()) { echo $showres[0]; }}?>


                                      </span>
                                    </div>
                                  </div>
                                  
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $varc;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                       In progress
                                    </div>
                                    <div class="kt-widget-11__value">
                                       <?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='In progress' AND cabn_owner='APM-TERMINALS 02' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR)");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { echo $showresdis[0]; $varp=($showresdis[0]*100)/164;}}?>
                                      &nbsp;/&nbsp;<span class="kt-opacity-5"><?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02'");
$cabinhis->execute();
if ($cabinhis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinr=$cabinhis->get_result();

                                

 ?>
<?php while ($showres=$cabinr->fetch_row()) { echo $showres[0]; }}?></span>
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $varp;?>%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                       Timeout
                                    </div>
                                    <div class="kt-widget-11__value">
                                      <?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='In progress' AND cabn_owner='APM-TERMINALS 02' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 1 HOUR)");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { echo $showresdis[0]; $varp=($showresdis[0]*100)/164;}}?>
                                      &nbsp;/&nbsp;<span class="kt-opacity-5"><?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02'");
$cabinhis->execute();
if ($cabinhis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinr=$cabinhis->get_result();

                                

 ?>
<?php while ($showres=$cabinr->fetch_row()) { echo $showres[0]; }}?></span>
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $varp;?>%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      Not disinfected <span class="kt-opacity-5">Or need Redisinfection</span>
                                    </div>
                                    <div class="kt-widget-11__value">
                                      <?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='Not disinfected' AND cabn_owner='APM-TERMINALS 02'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { echo $showresdis[0]; $varl=($showresdis[0]*100)/164;}}?>
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $varl;?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      Canceled
                                    </div>
                                    <div class="kt-widget-11__value">
                                      <?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='Canceled'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { echo $showresdis[0]; $varcnl=($showresdis[0]*100)/164;}}?>
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $varcnl;?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                     Total Operations Disinfections
                                    </div>
                                    <div class="kt-widget-11__value">
                                      <?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { echo $showresdis[0]; $varall=($showresdis[0]*100)/164;}}?>
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $varall;?>%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                     <br>
                                     <?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$selectfirstf=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_id ASC LIMIT 1");
$selectfirstf->execute();
if ($selectfirstf===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $refirstfinish=$selectfirstf->get_result();

                                

 ?>
 <span style="color: #303156; display: inline-block; font-weight: 600;">First Operation
 	<span  style=" display: inline-block; color: #00A1db;">
<?php while ($showfirstf=$refirstfinish->fetch_row()) { echo $showfirstf[5]; }}?></span></span><br>
 <?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$selectlastf=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_id DESC LIMIT 1");
$selectlastf->execute();
if ($selectlastf===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $relastfinish=$selectlastf->get_result();

                                

 ?>
                                  <span style="color: #303156; display: inline-block; font-weight: 600;">  Last Operation <span style="color: #00A1db; display: inline-block;" ><?php while ($showlastf=$relastfinish->fetch_row()) { echo $showlastf[5]; }}?></span></span>
                                  </div>
                                </div>
                                <img src="../img/png-transparent-apm-terminals-maasvlakte-container-port-maersk-maritimes.png" width="100%">
                                 
                                 <label style="font-weight: 600;align-content: center; text-align: center;" class="col-form-label col-lg-12 col-sm-12">TC4 - TNG MED PORT</label>
											
                              </div>
                            </div>
                            
															<div class="tab-pane fade" id="kt_tabs_19_25cb6c0fc43635" role="tabpanel">
																<div class="kt-portlet__head"  style="padding-left: 0;">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title"> Consumption</h3>
													</div>
													
												</div>
																<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info">
																		<a href="#" class="kt-widget-1__item-title">Disinfectant</a>
																		<div class="kt-widget-1__item-desc">BACFLOR</div>
																	</div>
																	<div class="kt-widget-1__item-stats">
																		<div class="kt-widget-1__item-value">+4</div>
																		<div class="kt-widget-1__item-progress">
																			<div class="progress">
																				<div class="progress-bar bg-success" role="progressbar" style="width: 4%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info">
																		<a href="#" class="kt-widget-1__item-title">Masks</a>
																		<div class="kt-widget-1__item-desc">Reuseable, Disposable</div>
																	</div>
																	<div class="kt-widget-1__item-stats">
																		<div class="kt-widget-1__item-value">+19</div>
																		<div class="kt-widget-1__item-progress">
																			<div class="progress">
																				<div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info">
																		<a href="#" class="kt-widget-1__item-title">Sprayers</a>
																		<div class="kt-widget-1__item-desc">3/4Liter , 50ml</div>
																	</div>
																	<div class="kt-widget-1__item-stats">
																		<div class="kt-widget-1__item-value">+21</div>
																		<div class="kt-widget-1__item-progress">
																			<div class="progress">
																				<div class="progress-bar bg-brand" role="progressbar" style="width: 21%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info">
																		<a href="#" class="kt-widget-1__item-title">Gloves</a>
																		<div class="kt-widget-1__item-desc">Reusable, Disposable</div>
																	</div>
																	<div class="kt-widget-1__item-stats">
																		<div class="kt-widget-1__item-value">-16</div>
																		<div class="kt-widget-1__item-progress">
																			<div class="progress">
																				<div class="progress-bar  bg-success" role="progressbar" style="width: 16%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info">
																		<a href="#" class="kt-widget-1__item-title">Glasses</a>
																		<div class="kt-widget-1__item-desc"></div>
																	</div>
																	<div class="kt-widget-1__item-stats">
																		<div class="kt-widget-1__item-value">+34</div>
																		<div class="kt-widget-1__item-progress">
																			<div class="progress">
																				<div class="progress-bar bg-info" role="progressbar" style="width: 34%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane fade" id="kt_tabs_controls" role="tabpanel">
																<div class="kt-portlet__head"  style="padding-left: 0;">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title"> Controls</h3>
													</div>
													
												</div>
																<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info">
																		<a href="#" class="kt-widget-1__item-title">Agents</a>
																		<div class="kt-widget-1__item-desc"></div>
																	</div>
																	<div class="kt-widget-1__item-stats">
																		<div class="kt-widget-1__item-value">+4</div>
																		<div class="kt-widget-1__item-progress">
																			<div class="progress">
																				<div class="progress-bar bg-success" role="progressbar" style="width: 4%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info">
																		<a href="#" class="kt-widget-1__item-title">Teams</a>
																		<div class="kt-widget-1__item-desc"></div>
																	</div>
																	<div class="kt-widget-1__item-stats">
																		<div class="kt-widget-1__item-value">+19</div>
																		<div class="kt-widget-1__item-progress">
																			<div class="progress">
																				<div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info">
																		<a href="#" class="kt-widget-1__item-title">Phones</a>
																		<div class="kt-widget-1__item-desc"></div>
																	</div>
																	<div class="kt-widget-1__item-stats">
																		<div class="kt-widget-1__item-value">+21</div>
																		<div class="kt-widget-1__item-progress">
																			<div class="progress">
																				<div class="progress-bar bg-brand" role="progressbar" style="width: 21%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info">
																		<a href="#" class="kt-widget-1__item-title">QR Codes</a>
																		<div class="kt-widget-1__item-desc"></div>
																	</div>
																	<div class="kt-widget-1__item-stats">
																		<div class="kt-widget-1__item-value">-16</div>
																		<div class="kt-widget-1__item-progress">
																			<div class="progress">
																				<div class="progress-bar  bg-success" role="progressbar" style="width: 16%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																			</div>
																		</div>
																	</div>
																</div>
																
															</div>
															<div class="tab-pane fade" id="kt_tabs_19_35cb6c0fc43635" role="tabpanel">
																<div class="kt-portlet__head"  style="padding-left: 0;">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title"> Gaps</h3>
													</div>
													
												</div>
																<div class="accordion accordion-light" id="accordionredis">
												<div class="card">
													<div class="card-header" id="headingredis">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseredis" aria-expanded="true" aria-controls="collapseredis">
															
																		<div class="kt-widget-1__item" style="width: 100%;">
																		<div class="kt-widget-1__item-info" >
																		Requires redisinfection
																	</div>
																		

																		<div class="kt-widget-1__item-stats" style="-ms-flex-pack: end !important; justify-content: flex-end !important;">
																		<div class="kt-widget-16__numbers"  style="">
																		
																		<div class="kt-widget-1__item-value" style=" background-color: rgba(253, 57, 122, 0.1);color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div>
																	</div>
																	</div>
																</div>
														</div>
													</div>
													<div id="collapseredis" class="collapse" aria-labelledby="headingredis" data-parent="#accordionredis">
														<div class="card-body">
															<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info" style="width: 100%;">





																		

<div class="accordion accordion-light" id="accordionExample211">
												<div class="card">
													<div class="card-header" id="headingOne2">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'admin%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> ADMINISTRATION
														</div>
													</div>
													<div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND (cabn_asset LIKE 'ADMINISTRATION%' OR cabn_asset LIKE 'CORRIDOR%' OR cabn_asset LIKE 'WC%') AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingTwo2">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'dsts%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> DSTS
														</div>
													</div>
													<div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'dsts%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>

														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree2">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'scc%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> SHUTTLE CARRIER
														</div>
													</div>
													<div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'scc%'  AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingqsc">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseqsc" aria-expanded="false" aria-controls="collapseqsc">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'qsc%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> QUAY SIDE CONTAINER
														</div>
													</div>
													<div id="collapseqsc" class="collapse" aria-labelledby="headingqsc" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'qsc%'  AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree24">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree24" aria-expanded="false" aria-controls="collapseThree24">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'frk%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> FORKLIFT
														</div>
													</div>
													<div id="collapseThree24" class="collapse" aria-labelledby="headingThree24" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'frk%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree27">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree27" aria-expanded="false" aria-controls="collapseThree27">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'rsk%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> REACH STACKER
														</div>
													</div>
													<div id="collapseThree27" class="collapse" aria-labelledby="headingThree27" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'rsk%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree21">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree21" aria-expanded="false" aria-controls="collapseThree21">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'eh%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> EMPTY HANDLER
														</div>
													</div>
													<div id="collapseThree21" class="collapse" aria-labelledby="headingThree21" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'eh%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree22">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree22" aria-expanded="false" aria-controls="collapseThree22">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'EXTERNAL%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div>  EXTERNAL BUS
														</div>
													</div>
													<div id="collapseThree22" class="collapse" aria-labelledby="headingThree22" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'EXTERNAL%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headinginternalb">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseinternalb" aria-expanded="false" aria-controls="collapseinternalb">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'INTERNAL%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div>  INTERNAL BUS
														</div>
													</div>
													<div id="collapseinternalb" class="collapse" aria-labelledby="headinginternalb" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'INTERNAL%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree23">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree23" aria-expanded="false" aria-controls="collapseThree23">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'OPS%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> OPS CARS
														</div>
													</div>
													<div id="collapseThree23" class="collapse" aria-labelledby="headingThree23" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'OPS%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree25">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree25" aria-expanded="false" aria-controls="collapseThree25">

															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'MR%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> M&R CARS

														</div>
													</div>
													<div id="collapseThree25" class="collapse" aria-labelledby="headingThree25" data-parent="#accordionExample211">
														<div class="card-body">
<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'MR%' AND cabn_status='Disinfected' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="Disinfected") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
											</div>
																	</div>
																	
																</div>
														</div>
													</div>
												</div>
												
												
											</div>
																<div class="accordion accordion-light" id="accordionnotfin">
												<div class="card">
													<div class="card-header" id="headingnotfin">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsenotfin" aria-expanded="true" aria-controls="collapsenotfin">
															
																		<div class="kt-widget-1__item" style="width: 100%;">
																		<div class="kt-widget-1__item-info" >
																		Not Marked As Finished
																	</div>
																		

																		<div class="kt-widget-1__item-stats" style="-ms-flex-pack: end !important; justify-content: flex-end !important;">
																		<div class="kt-widget-16__numbers"  style="">
																		
																		<div class="kt-widget-1__item-value" style=" background-color: rgba(253, 57, 122, 0.1);color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div>
																	</div>
																	</div>
																</div>
														</div>
													</div>
													<div id="collapsenotfin" class="collapse" aria-labelledby="headingnotfin" data-parent="#accordionnotfin">
														<div class="card-body">
															<div class="kt-widget-1__item">
																	<div class="kt-widget-1__item-info" style="width: 100%;">





																		

<div class="accordion accordion-light" id="accordionExample211">
												<div class="card">
													<div class="card-header" id="headingOne2">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'admin%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> ADMINISTRATION
														</div>
													</div>
													<div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND (cabn_asset LIKE 'ADMINISTRATION%' OR cabn_asset LIKE 'CORRIDOR%' OR cabn_asset LIKE 'WC%') AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingTwo2">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'dsts%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> DSTS
														</div>
													</div>
													<div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'dsts%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>

														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree2">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'scc%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> SHUTTLE CARRIER
														</div>
													</div>
													<div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'scc%'  AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingqsc">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseqsc" aria-expanded="false" aria-controls="collapseqsc">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'qsc%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> QUAY SIDE CONTAINER
														</div>
													</div>
													<div id="collapseqsc" class="collapse" aria-labelledby="headingqsc" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'qsc%'  AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree24">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree24" aria-expanded="false" aria-controls="collapseThree24">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'frk%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> FORKLIFT
														</div>
													</div>
													<div id="collapseThree24" class="collapse" aria-labelledby="headingThree24" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'frk%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree27">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree27" aria-expanded="false" aria-controls="collapseThree27">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'rsk%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> REACH STACKER
														</div>
													</div>
													<div id="collapseThree27" class="collapse" aria-labelledby="headingThree27" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'rsk%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree21">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree21" aria-expanded="false" aria-controls="collapseThree21">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'eh%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> EMPTY HANDLER
														</div>
													</div>
													<div id="collapseThree21" class="collapse" aria-labelledby="headingThree21" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_name LIKE 'eh%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree22">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree22" aria-expanded="false" aria-controls="collapseThree22">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'EXTERNAL%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div>  EXTERNAL BUS
														</div>
													</div>
													<div id="collapseThree22" class="collapse" aria-labelledby="headingThree22" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'EXTERNAL%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree22">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree22" aria-expanded="false" aria-controls="collapseThree22">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'INTERNAL%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div>  INTERNAL BUS
														</div>
													</div>
													<div id="collapseThree22" class="collapse" aria-labelledby="headingThree22" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'INTERNAL%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree23">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree23" aria-expanded="false" aria-controls="collapseThree23">
															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'OPS%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> OPS CARS
														</div>
													</div>
													<div id="collapseThree23" class="collapse" aria-labelledby="headingThree23" data-parent="#accordionExample211">
														<div class="card-body">
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'OPS%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree25">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree25" aria-expanded="false" aria-controls="collapseThree25">

															<div class="kt-widget-1__item-value" style="color: #fd397a;font-weight: 500;padding: 0.2rem 0.5rem;border-radius: 5px;"><?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT count(*) FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'MR%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) { echo $showredisifect[0]; }} ?></div> M&R CARS

														</div>
													</div>
													<div id="collapseThree25" class="collapse" aria-labelledby="headingThree25" data-parent="#accordionExample211">
														<div class="card-body">
<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectredisinfect=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'MR%' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 10 MINUTE)");
$selectredisinfect->execute();
if ($selectredisinfect===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resredisinfect=$selectredisinfect->get_result();

                   
   while ($showredisifect=$resredisinfect->fetch_row()) {   
   if ($showredisifect[3]="In progress") {
                               $time = $showredisifect[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time<$today) {
                              
 ?>
																		<div class="kt-widget-1__item-desc"><?php echo $showredisifect[1]?></div>
<?php 
 }




}
}}
?>
														</div>
													</div>
												</div>
											</div>
																	</div>
																	
																</div>
														</div>
													</div>
												</div>
												
												
											</div>
											<div class="kt-widget-1__item">
																	
																		<div class="accordion accordion-light" id="accordionExampleless">
												<div class="card">
													<div class="card-header" id="headingless">
														<div class="kt-widget-1__item-title card-title collapsed"  data-toggle="collapse" data-target="#collapseless" aria-expanded="true" aria-controls="collapseless">
															Less than 1 min Disinfections
														</div>
													</div>
													<div id="collapseless" class="collapse" aria-labelledby="headingless" data-parent="#accordionExampleless">
														<div class="card-body">
															<div class="kt-portlet__body" style="padding: 0px;">
																<div class="kt-list kt-list--badge">
																	<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectless=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 02'");
$selectless->execute();
if ($selectless===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resless=$selectless->get_result();
	 
 while ($showless=$resless->fetch_row()) {
 	?>
		<?php
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showless[1]' AND cabnch_owner='APM-TERMINALS 02' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showless[1]' AND cabnch_owner='APM-TERMINALS 02' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastbegin->execute();
if ($lastbegin===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslastb=$lastbegin->get_result();
 
 while ($showbegin=$reslastb->fetch_row()) {
if ((strtotime($showfisnish[5]) > strtotime($showbegin[5]))&&(strtotime($showfisnish[5])-strtotime($showbegin[5])<=10) ){



	?>
	<span style="font-weight: 600; margin-left: 5px;text-transform: uppercase;"> - <?php echo $showbegin[1];?></span>
<div class="kt-list__item">
													<span class="kt-list__badge kt-list__badge--success"></span>
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>

													<span class="kt-list__text">Start at <?php echo $showbegin[5]; ?>

													<?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showbegin[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$memberbeg=$showm[3];
 	?>
 	(<a href="#" class="kt-link"><?php echo $memberbeg;?> ID:<?php echo $showbegin[2]; ?></a>).
<?php }
}
else{
	$memberbeg="NONE";
}
}?>
													
													<br>

													Finished at <?php echo $showfisnish[5]; ?> 
													<?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showfisnish[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$memberfin=$showm[3];
 	?>
 	(<a href="#" class="kt-link"><?php echo $memberfin;?> ID:<?php echo $showfisnish[2]; ?></a>).
<?php }
}
else{
	$memberfin="NONE";
}
}?>

													

												</span>

																	</div>
 <br><br>
 <?php
}

}
}
}

}



}?>

 	<?php


 }

             
                                  
}
 ?>
																	
																</div>
															</div>
														
														</div>
													</div>
												</div>
												
											</div>
																		

																
																	
																</div>
																
																
															</div>
														</div>
													</div>
												</div>
											</div>


                      <!--end::Portlet-->
                    </div>
</div>
</div>

<div class="modal fade" id="notadminmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">Message</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																
																<div class="modal-body">
																	<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12">Sorry You we can't approve your request</label>
											
										</div>
																</div>
																<div class="modal-footer">
																	
																	
																</div>
															
															</div>
														</div>
													</div>
						<!-- end:: Content -->
					</div>


				</div>

				<!-- end:: Wrapper -->
			</div>

			<!-- end:: Page -->
		</div>


		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="la la-arrow-up"></i>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>

														$('input[type="checkbox"]').click(function(){
    
    var inputValue = $(this).attr("id");
    $("." + inputValue).toggle();
    
    if (!this.checked) {
      
      $("." + inputValue + ' select').val('-1');
    
    }
    
});

														function cbChange(obj) {
    var cbs = document.getElementsByClassName("cb");
    for (var i = 0; i < cbs.length; i++) {
        cbs[i].checked = false;
    }
    obj.checked = true;

}
document.getElementById("qccheck").onclick = function() {
    if(this.checked)
        $('.qccheck').style.display = "block";
   
    else
        $('.qccheck').style.display = "none";
   


}

document.getElementById("rtgcheck").onclick = function() {
    if(this.checked)
        $('.rtgcheck').style.display = "block";
   
    else
        $('.rtgcheck').style.display = "none";


}



</script>

<script>
filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btns");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
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
		<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered " role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">Today's Reports Summary </h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">

										
									
											<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand" role="tablist" style="align-content: center; align-items: center;padding-left: 30%;">
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab"  style="font-weight: 600; text-transform: uppercase;" href="#kt_tabs_9_3" role="tab">Today's Report</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" style="font-weight: 600; text-transform: uppercase;" data-toggle="tab" href="#kt_tabs_9_1" role="tab">History </a>
												</li>
											
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_9_1" role="tabpanel">
													

											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													
													<div class="kt-portlet__head-toolbar">
														<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
															<li class="nav-item">
																<a class="nav-link show active" data-toggle="tab" href="#kt_portlet_tabs_1_1_content" role="tab" aria-selected="true">
																	Morning
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_portlet_tabs_1_2_content" role="tab" aria-selected="false">
																	Afternoon
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_portlet_tabs_1_3_content" role="tab" aria-selected="false">
																	Night
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="tab-content">
														<div class="tab-pane fade active show" id="kt_portlet_tabs_1_1_content" role="tabpanel">
															<div class="kt-widget-5">


											<!--begin::Accordion-->
											<div class="accordion accordion-light" id="accordionExample2">
												<div class="card">
													<div class="card-header" id="headingqcaf">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseqcaf" aria-expanded="false" aria-controls="collapseqcaf">
															DSTS
														</div>
													</div>
													<div id="collapseqcaf" class="collapse" aria-labelledby="headingqcaf" data-parent="#accordionExample2" style="">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'DSTS%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Afternoon'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingrtgaf">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsertgaf" aria-expanded="false" aria-controls="collapsertgaf">
															CONTAINER QUAY SIDE
														</div>
													</div>
													<div id="collapsertgaf" class="collapse" aria-labelledby="headingrtgaf" data-parent="#accordionExample2">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'CONTAINER%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Afternoon'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingforkliftafter">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseforkliftaf" aria-expanded="false" aria-controls="collapseforkliftaf">
															FORKLIFT
														</div>
													</div>
													<div id="collapseforkliftaf" class="collapse" aria-labelledby="headingforkliftafter" data-parent="#accordionExample2">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'FORKLIFT%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Afternoon'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingreachstaf">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsereachstaf" aria-expanded="false" aria-controls="collapsereachstaf">
															REACH STACKER
														</div>
													</div>
													<div id="collapsereachstaf" class="collapse" aria-labelledby="headingreachstaf" data-parent="#accordionExample2">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'REACH%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Afternoon'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingemptyhaf">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseemptyhaf" aria-expanded="false" aria-controls="collapseemptyhaf">
															EMPTY HANDLER
														</div>
													</div>
													<div id="collapseemptyhaf" class="collapse" aria-labelledby="headingemptyhaf" data-parent="#accordionExample2">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'EMPTY%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Afternoon'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingmrcarsaf">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsemrcarsaf" aria-expanded="false" aria-controls="collapsemrcarsaf">
															M&R CARS
														</div>
													</div>
													<div id="collapsemrcarsaf" class="collapse" aria-labelledby="headingmrcarsaf" data-parent="#accordionExample2">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'MR%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Afternoon'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<<div class="card">
													<div class="card-header" id="headingextrbuss">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseexterbuss" aria-expanded="false" aria-controls="collapseexterbuss">
														 EXTERNAL BUS
														</div>
													</div>
													<div id="collapseexterbuss" class="collapse" aria-labelledby="headingextrbuss" data-parent="#accordionExample2">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND (cabn_asset LIKE 'EXTERNAL BUS%' OR cabn_asset LIKE 'External Bus%') AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Afternoon'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingothercarsaf">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseothercarsaf" aria-expanded="false" aria-controls="collapseothercarsaf">
															OTHER CARS
														</div>
													</div>
													<div id="collapseothercarsaf" class="collapse" aria-labelledby="headingothercarsaf" data-parent="#accordionExample2">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND (cabn_asset LIKE 'SAFETY%' OR cabn_asset LIKE 'IT%' OR cabn_asset LIKE 'SC%')AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Afternoon'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>





											</div>


										
																
															</div>
														</div>
														<div class="tab-pane fade" id="kt_portlet_tabs_1_2_content" role="tabpanel">
															<div class="kt-widget-5">
																<div class="accordion accordion-light" id="morningaccordion">
												<div class="card">
													<div class="card-header" id="headingqcmor">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseqcmor" aria-expanded="false" aria-controls="collapseqcmor">
															DSTS
														</div>
													</div>
													<div id="collapseqcmor" class="collapse" aria-labelledby="headingqcmor" data-parent="#morningaccordion" style="">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'DSTS%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Morning'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingrtgmor">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsertgmor" aria-expanded="false" aria-controls="collapsertgmor">
															CONTAINER
														</div>
													</div>
													<div id="collapsertgmor" class="collapse" aria-labelledby="headingrtgmor" data-parent="#morningaccordion">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'CONTAINER%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Morning'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingforkliftmor">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseforkliftmor" aria-expanded="false" aria-controls="collapseforkliftmor">
															FORKLIFT
														</div>
													</div>
													<div id="collapseforkliftmor" class="collapse" aria-labelledby="headingforkliftmor" data-parent="#morningaccordion">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'FORKLIFT%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Morning'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingreachstmor">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsereachstmor" aria-expanded="false" aria-controls="collapsereachstmor">
															REACH STACKER
														</div>
													</div>
													<div id="collapsereachstmor" class="collapse" aria-labelledby="headingreachstmor" data-parent="#morningaccordion">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'REACH%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Morning'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingemptymor">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseemptyhmor" aria-expanded="false" aria-controls="collapseemptyhmor">
															EMPTY HANDLER
														</div>
													</div>
													<div id="collapseemptyhmor" class="collapse" aria-labelledby="headingemptymor" data-parent="#morningaccordion">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'EMPTY%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Morning'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingmrcarsmor">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsemrcarsmor" aria-expanded="false" aria-controls="collapsemrcarsmor">
															M&R CARS
														</div>
													</div>
													<div id="collapsemrcarsmor" class="collapse" aria-labelledby="headingmrcarsmor" data-parent="#morningaccordion">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_asset LIKE 'MR%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Morning'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingothercarsmor">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseothercarsmor" aria-expanded="false" aria-controls="collapseothercarsmor">
															OTHER CARS
														</div>
													</div>
													<div id="collapseothercarsmor" class="collapse" aria-labelledby="headingothercarsmor" data-parent="#morningaccordion">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND (cabn_asset LIKE 'SAFETY%' OR cabn_asset LIKE 'IT%' OR cabn_asset LIKE 'SC%')AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Morning'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
														</div>
													</div>
												</div>





											</div>
															</div>
														</div>
														<div class="tab-pane fade" id="kt_portlet_tabs_1_3_content" role="tabpanel">
															<div class="kt-widget-5">
																<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectmorn->execute();
if ($selectmorn===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resmorn=$selectmorn->get_result();


?>
<?php while ($showmorn=$resmorn->fetch_row()) {



  $selmornteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmorn[5]' AND cabnt_shift='Night'");
  $selmornteam->execute();
if ($selmornteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
	 $resmornt=$selmornteam->get_result();
	 while ($showmornt=$resmornt->fetch_row()) {


if ($showmorn[3]=="Disinfected") {
	

	
	?>
																<div class="kt-widget-5__item kt-widget-5__item--success">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div><?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																<div class="kt-widget-5__item kt-widget-5__item--danger">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }elseif ($showmorn[3]=="In progress") {?>
																<div class="kt-widget-5__item kt-widget-5__item--brand">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>
																<div class="kt-widget-5__item kt-widget-5__item--warning">
																	<div class="kt-widget-5__item-info">
																		
																			
<span style=" font-weight: 600; text-transform: uppercase;"><?php echo $showmorn[7];      ?></span> 
<span style="color: #00A1db; text-transform: uppercase;"><?php echo $showmorn[1];      ?></span> 
<span ><?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showmornt[1]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?><span style="float: right;"><?php echo $member;?></span>
<?php }
}
else{
	$member="NONE";
}
}?>
<?php
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showmornt[1]'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
 	$membertema=$showteam[2];
 	?>
<?php }
}
else{
	$membertema="NONE";
}
}?></span> 
                                  


																		
																		<div class="kt-widget-5__item-datetime">
																			<?php echo date("Y-m-d H:i:s", strtotime($showmorn[4].'-1 hour'));  ?>


																		</div>
																	</div>
																</div>
															<?php }?>
																<?php
}}}}
?>
															</div>
														</div>
													</div>
												</div>
											
											<!--end::Portlet-->
										</div>
												</div>
												
												<div class="tab-pane" id="kt_tabs_9_3" role="tabpanel">
													<div class="kt-portlet__body">
													<div class="kt-widget-16">
														<div class="accordion accordion-light" id="accordionExample2">
											
										
												<div class="card">


													<div class="card-header" id="headingdisnf">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsedisnfect" aria-expanded="false" aria-controls="collapsedisnfect">
															<div class="kt-widget-16__item kt-widget-16__item--success" style="width: 100%">
															<div class="kt-widget-16__labels">
																<aspan>
																	<div class="kt-widget-16__title">Disinfected</div>
																</aspan>
																<div class="kt-widget-16__desc">
 <?php 

require('../controls/zdze8efzedzdeezd/de5.php');

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'ADMINISTRATION%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> ROOMS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'CORRIDOR%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> CORRIDORS<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'WC%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> WC<br>
                                  

<?php
}}}




$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'DSTS%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> DSTS Cabins<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'CONTAINER%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> CONTAINER Cabins<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'FORKLIFT%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> FORKLIFTS<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'EMPTY%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{

  $resdis=$selectdis->get_result();
  
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> EMPTY HANDLERS<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'REACH STACKER%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> REACH STACKER<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'OPS CAR%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> OPS CAR<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'MR CAR%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> M&R CAR<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'EXTERNAL%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> BUS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_asset LIKE 'TTG%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {

if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> TTG<br>
                                  

<?php
}}}



$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND (cabn_asset LIKE 'automat%' OR cabn_asset LIKE 'prot%' OR cabn_asset LIKE 'sc car%' OR cabn_asset LIKE 'it car%') AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {

if (($showdis[0])!='0') { 
	?>

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> OTHER VEHICULES<br>
                                  

<?php
}}}
 ?>



																</div>
															</div>
															<div class="kt-widget-16__data">
																<div class="kt-widget-16__item-chart">

																	<!--Doc: For the chart initialization refer to "latestProductsMiniCharts" function in "src\theme\app\scripts\custom\dashboard.js"
                         and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
																	<canvas id="kt_widget_latest_products_chart_1" width="160" height="80" style="display: block; height: 40px; width: 80px;"></canvas>
																</div>
																<div class="kt-widget-16__numbers">
																	
																	<div class="kt-widget-16__numbers-change">+<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Disinfected' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {?>

<?php
             echo $showdis[0];      
                                  
}}

 ?></div>
																</div>
															</div>
														</div>
														</div>
													</div>


													
												</div>
												<div class="card">


													<div class="card-header" id="headingnotdisin">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsenotdisn" aria-expanded="false" aria-controls="collapsenotdisn">
															<div class="kt-widget-16__item kt-widget-16__item--danger" style="width: 100%">
															<div class="kt-widget-16__labels">
																<aspan>
																	<div class="kt-widget-16__title">Not disinfected</div>
																</aspan>
																<div class="kt-widget-16__desc">
																<?php 

require('../controls/zdze8efzedzdeezd/de5.php');


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'ADMINISTRATION%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> ROOMS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'CORRIDOR%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> CORRIDORS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'WC%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> WC<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'DSTS%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> DSTS Cabins<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'CONTAINER%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> CONTAINER Cabins<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'FORKLIFT%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> FORKLIFTS<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'EMPTY%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{

  $resdis=$selectdis->get_result();
  
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> EMPTY HANDLERS<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'REACH%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> REACH STACKERS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'OPS CAR%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> OPS CAR<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'MR CAR%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> M&R CAR<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND (cabn_asset LIKE 'EXTERNAL BUS%' OR cabn_asset LIKE 'External Bus%') ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> BUS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'TTG%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {

if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> TTG<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' AND (cabn_asset LIKE 'automat%' OR cabn_asset LIKE 'prot%' OR cabn_asset LIKE 'sc car%' OR cabn_asset LIKE 'it car%') ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {

if (($showdis[0])!='0') { 
	?>

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> OTHER VEHICULES<br>
                                  

<?php
}}}
 ?>

																</div>
															</div>
															<div class="kt-widget-16__data">
																<div class="kt-widget-16__item-chart">

																	<!--Doc: For the chart initialization refer to "latestProductsMiniCharts" function in "src\theme\app\scripts\custom\dashboard.js"
                         and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
																	<canvas id="kt_widget_latest_products_chart_1" width="160" height="80" style="display: block; height: 40px; width: 80px;"></canvas>
																</div>
																<div class="kt-widget-16__numbers">
																	
																	<div class="kt-widget-16__numbers-change">+<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not disinfected' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {?>

<?php
             echo $showdis[0];      
                                  
}}

 ?></div>
																</div>
															</div>
														</div>
														</div>
													</div>


												
												</div>
												<div class="card">


													<div class="card-header" id="headinginpro">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseinpro" aria-expanded="false" aria-controls="collapseinpro">
															<div class="kt-widget-16__item kt-widget-16__item--brand" style="width: 100%">
															<div class="kt-widget-16__labels">
																<aspan>
																	<div class="kt-widget-16__title">In progress</div>
																</aspan>
																<div class="kt-widget-16__desc">
																<?php 

require('../controls/zdze8efzedzdeezd/de5.php');

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'ADMINISTRATION%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> ROOMS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'CORRIDOR%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> CORRIDORS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'WC%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> WC<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'DSTS%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span> DSTS Cabins<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'CONTAINER%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span>CONTAINER Cabins<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'FORKLIFT%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span> FORKLIFTS<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'EMPTY%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{

  $resdis=$selectdis->get_result();
  
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span>EMPTY HANDLERS<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'REACH%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span>REACH STACKERS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'OPS CAR%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span> OPS CAR<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'MR CAR%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span> M&R CAR<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND (cabn_asset LIKE 'External Bus%' OR cabn_asset LIKE 'External Bus%') AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span>EXTERNAL BUS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'TTG%' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {

if (($showdis[0])!='0') { 
	?>

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span> TTG<br>
                                  

<?php
}}}



$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND (cabn_asset LIKE 'automat%' OR cabn_asset LIKE 'prot%' OR cabn_asset LIKE 'sc car%' OR cabn_asset LIKE 'it car%') AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {

if (($showdis[0])!='0') { 
	?>

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span> OTHER VEHICULES<br>
                                  

<?php
}}}
 ?>


																</div>
															</div>
															<div class="kt-widget-16__data">
																<div class="kt-widget-16__item-chart">

																	<!--Doc: For the chart initialization refer to "latestProductsMiniCharts" function in "src\theme\app\scripts\custom\dashboard.js"
                         and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
																	<canvas id="kt_widget_latest_products_chart_1" width="160" height="80" style="display: block; height: 40px; width: 80px;"></canvas>
																</div>
																<div class="kt-widget-16__numbers">
																	
																	<div class="kt-widget-16__numbers-change">+<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_last_ops > DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {?>

<?php
             echo $showdis[0];      
                                  
}}

 ?></div>
																</div>
															</div>
														</div>
														</div>
													</div>


													
												</div>
												<div class="card">


													<div class="card-header" id="headinginpro">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseinpro" aria-expanded="false" aria-controls="collapseinpro">
															<div class="kt-widget-16__item kt-widget-16__item--warning" style="width: 100%">
															<div class="kt-widget-16__labels">
																<aspan>
																	<div class="kt-widget-16__title">Timeout</div>
																</aspan>
																<div class="kt-widget-16__desc">
																<?php 

require('../controls/zdze8efzedzdeezd/de5.php');

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'ADMINISTRATION%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> ROOMS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'CORRIDOR%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> CORRIDORS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'WC%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> WC<br>
                                  

<?php
}}}



$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'DSTS%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> DSTS Cabins<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'CONTAINER%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span>CONTAINER Cabins<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'FORKLIFT%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> FORKLIFTS<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'EMPTY%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{

  $resdis=$selectdis->get_result();
  
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span>EMPTY HANDLERS<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'REACH%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span>REACH STACKERS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'OPS CAR%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> OPS CAR<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'MR CAR%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> M&R CAR<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND (cabn_asset LIKE 'External Bus%' OR cabn_asset LIKE 'EXTERNAL BUS%') AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span>EXTERNAL BUS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'TTG%' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {

if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> TTG<br>
                                  

<?php
}}}



$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND (cabn_asset LIKE 'automat%' OR cabn_asset LIKE 'prot%' OR cabn_asset LIKE 'sc car%' OR cabn_asset LIKE 'it car%') AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {

if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> OTHER VEHICULES<br>
                                  

<?php
}}}
 ?>


																</div>
															</div>
															<div class="kt-widget-16__data">
																<div class="kt-widget-16__item-chart">

																	<canvas id="kt_widget_latest_products_chart_1" width="160" height="80" style="display: block; height: 40px; width: 80px;"></canvas>
																</div>
																<div class="kt-widget-16__numbers">
																	
																	<div class="kt-widget-16__numbers-change">+<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_last_ops < DATE_SUB(NOW(), INTERVAL 10 MINUTE) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {?>

<?php
             echo $showdis[0];      
                                  
}}

 ?></div>
																</div>
															</div>
														</div>
														</div>
													</div>


												
												</div>
												<div class="card">


													<div class="card-header" id="headingcancel">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsecancel" aria-expanded="false" aria-controls="collapsecancel">
															<div class="kt-widget-16__item kt-widget-16__item--warning" style="width: 100%">
															<div class="kt-widget-16__labels">
																<aspan>
																	<div class="kt-widget-16__title">Canceled</div>
																</aspan>
																<div class="kt-widget-16__desc">
																	<?php 

require('../controls/zdze8efzedzdeezd/de5.php');


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Canceled' AND cabn_asset LIKE 'DSTS%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> DSTS Cabins<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Canceled' AND cabn_asset LIKE 'CONTAINER%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> CONTAINER Cabins<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Canceled' AND cabn_asset LIKE 'FORKLIFT%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> FORKLIFTS<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Canceled' AND cabn_asset LIKE 'EMPTY%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{

  $resdis=$selectdis->get_result();
  
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> EMPTY HANDLERS<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Canceled' AND cabn_asset LIKE 'REACH%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> REACH STACKERS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Canceled' AND cabn_asset LIKE 'OPS CAR%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> OPS CAR<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Canceled' AND cabn_asset LIKE 'MR CAR%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> M&R CAR<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Canceled' AND (cabn_asset LIKE 'External Bus%' OR cabn_asset LIKE 'EXTERNAL BUS%') ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {
if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> EXTERNAL BUS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='In progress' AND cabn_asset LIKE 'TTG%' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {

if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> TTG<br>
                                  

<?php
}}}



$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Canceled' AND (cabn_asset LIKE 'automat%' OR cabn_asset LIKE 'prot%' OR cabn_asset LIKE 'sc car%' OR cabn_asset LIKE 'it car%') ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {

if (($showdis[0])!='0') { 
	?>

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> OTHER VEHICULES<br>
                                  

<?php
}}}
 ?>



																</div>
															</div>
															<div class="kt-widget-16__data">
																<div class="kt-widget-16__item-chart">

																	<!--Doc: For the chart initialization refer to "latestProductsMiniCharts" function in "src\theme\app\scripts\custom\dashboard.js"
                         and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
																	<canvas id="kt_widget_latest_products_chart_1" width="160" height="80" style="display: block; height: 40px; width: 80px;"></canvas>
																</div>
																<div class="kt-widget-16__numbers">
																
																	<div class="kt-widget-16__numbers-change">+<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Canceled' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {?>

<?php
             echo $showdis[0];      
                                  
}}

 ?></div>
																</div>
															</div>
														</div>
														</div>
													</div>


													
												</div>
												<div class="card">


													<div class="card-header" id="headingcancel">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsecancel" aria-expanded="false" aria-controls="collapsecancel">
															<div class="kt-widget-16__item kt-widget-16__item--accent" style="width: 100%">
															<div class="kt-widget-16__labels">
																<aspan>
																	<div class="kt-widget-16__title">Not available</div>
																</aspan>
																<div class="kt-widget-16__desc">
																	<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectdis=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not available' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {?>

<?php
             echo $showdis[7];      
                                  
}}

 ?>


																</div>
															</div>
															<div class="kt-widget-16__data">
																<div class="kt-widget-16__item-chart">

																	<!--Doc: For the chart initialization refer to "latestProductsMiniCharts" function in "src\theme\app\scripts\custom\dashboard.js"
                         and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
																	<canvas id="kt_widget_latest_products_chart_1" width="160" height="80" style="display: block; height: 40px; width: 80px;"></canvas>
																</div>
																<div class="kt-widget-16__numbers">
																	
																	<div class="kt-widget-16__numbers-change">+<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 02' AND cabn_status='Not available' ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {?>

<?php
             echo $showdis[0];      
                                  
}}

 ?></div>
																</div>
															</div>
														</div>
														</div>
													</div>


													
												</div>
											</div>
														
														
														
														
														
													</div>
												</div>
											</div>

																

															</div>
														</div>
												</div>
											</div>
											
											

											
											
										</div>

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

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="../../assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
			
				<script src="../../assets/js/demo1/pages/components/keen-wizard/wizard-demo-v3.js" type="text/javascript"></script>
						<script src="../../assets/js/demo1/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
						<script src="../../assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
<?php
}else{

	
header('Location:../apm2/');
    exit;
}


?>