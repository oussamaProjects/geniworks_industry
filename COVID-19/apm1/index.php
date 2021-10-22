<?php

?>

<!DOCTYPE html>

<html lang="en">
	<head>

		<base >
		<meta charset="utf-8" />
		<title>Cabins Disinfection Plan</title>
		<meta name="description" content="MyDADGE - By GENIWORKS">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
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

  padding: 5px;
  padding-bottom: 1px;
  color: #101932;
  width: 100%;
  font-weight: 600;
}
</style>
		
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

		<link href="../../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="../../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />


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
		<a href="" data-toggle="modal" data-target="#loginpop"><div style="position: absolute;width: 250px; height: 18%;top: 50px;left: 9%;"></div></a>
		<div class="modal fade" id="loginpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">Enter GWID</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<form action="../controls/log.php" method="post">
																<div class="modal-body">
																	<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12">GENIWORKS ID</label>
											<div class="col-lg-9 col-md-9 col-sm-12">
												
												<input type='text' class="form-control" name="gwidcab"  id="kt_maxlength_2" maxlength="7" placeholder="" type="text" />
												<span class="form-text text-muted">Please Enter Your GWID To continue</span>
											</div>
										</div>
																</div>
																<div class="modal-footer">
																	
																	<button type="submit" name="gocab" class="btn btn-brand">Go</button>
																</div>
															</form>
															</div>
														</div>
													</div>


		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " style="height: 80px; background-color: #101932;">
			<div class="kt-header-mobile__logo">
						<a href="" data-toggle="modal" data-target="#loginpop"><div style="position: absolute;width: 250px; height: 18%;top: 50px;left: 9%;"></div></a>
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
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper" style="">

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
								<h3 class="kt-subheader__title" style="color: white; font-size: 24px;">ANTIPANIC PLAN - APM TERMINALS 01</h3>
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

                    
                    <div class="col-lg-8 col-xl-8 order-lg-2 order-xl-1">
							
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
															<i class="flaticon2-right-arrow"></i> Areas
														</div>
													</div>
													<div class="kt-portlet__body" style="padding-left: 20px; padding-right: 1px; padding-top: 0px;padding-bottom: 0px;">
													<div id="collapseadmin" class="collapse" aria-labelledby="headingadmin" data-parent="#accordionExample4">
														<div class="card-body">
															<div class="accordion accordion-light" id="accordionadmin">
																
												<div class="card">
													<div class="card-header" id="headingrooms">
														<div class="card-title" data-toggle="collapse" data-target="#collapserooms" aria-expanded="false" aria-controls="collapserooms">
															Workshops
														</div>
													</div>
													<div id="collapserooms" class="collapse" aria-labelledby="headingrooms" data-parent="#accordionadmin">
														<div class="card-body" >
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset='WORKSHOP'");
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



													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>

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
												
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>

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
												
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>

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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>

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
												

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							

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
												
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>

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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_id DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_id DESC LIMIT 1");

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
                                    <a class="dropdown-item" href="#" data-toggle="modal" id="<?php echo $showcab[1];?>btn" data-target="#<?php echo $showcab[1];?>cabindetails"><i class="la la-edit"></i> See Details</a>

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
															locker-room
														</div>
													</div>
													<div id="collapsecorre" class="collapse" aria-labelledby="headingcorre" data-parent="#accordionadmin">
														<div class="card-body" >
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'lOCKER ROOM%' AND cabn_name LIKE 'lockerroom%'");
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
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>

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
                                        	
	<?php echo $showcab[1];?>	
</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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
                                        		<?php echo $showcab[1];?>
                                        			
                                        		</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>

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
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
												
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							

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
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>

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
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
												
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>

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
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>

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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
															Mosque
														</div>
													</div>
													<div id="collapsewc" class="collapse" aria-labelledby="headingwc" data-parent="#accordionadmin">
														<div class="card-body" >
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'Mosque%' AND cabn_name LIKE 'mosque%'");
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
                                        	<?php echo $showcab[1];?>

</span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
												
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>

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
                                        	<?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>

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
                                        	<?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
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
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													

													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							

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
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>

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
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>

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
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
										<div class="card">
													<div class="card-header" id="headingchecking">
														<div class="card-title" data-toggle="collapse" data-target="#collapsechecking" aria-expanded="false" aria-controls="collapsechecking">
															OFFICES
														</div>
													</div>
													<div id="collapsechecking" class="collapse" aria-labelledby="headingchecking" data-parent="#accordionadmin">
														<div class="card-body" >
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins  WHERE cabn_owner='APM-TERMINALS 01' AND (cabn_asset LIKE '%office%' OR cabn_asset LIKE '%OFFICE%' OR cabn_asset='PLANNING OFFICE')");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resafter=$selectafter->get_result();

                   
                                  

 ?>

									

									  
									<div class="accordion accordion-light" id="accordionchecking">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Disinfected'){
$time = $showcab[4];
$time = strtotime($time) + 3600*8; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {



							?>
													<div class="card-header filterDiv Disinfected" id="headingchecking<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsechecking<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsechecking<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>

												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

													<?php }
													elseif($time<$today){
														?>
											<div class="card-header filterDiv outdisinfected" id="headingchecking<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsechecking<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsechecking<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>


													<?php }}?>
<?php  if($showcab[3]=='Not disinfceted'){




							?>
													<div class="card-header filterDiv Notdisinfected" id="headingchecking<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsechecking<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsechecking<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>

												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>

<?php  if($showcab[3]=='Not available'){




							?>
													<div class="card-header filterDiv Notavailable" id="headingchecking<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsechecking<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsechecking<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>

<?php  if($showcab[3]=='In progress'){

$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {


							?>
													<div class="card-header filterDiv Inprogress" id="headingchecking<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsechecking<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsechecking<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }
												elseif($time<$today){

												?>
												<div class="card-header filterDiv outprogress" id="headingchecking<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsechecking<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsechecking<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }}?>

<?php  if($showcab[3]=='Canceled'){




							?>
													<div class="card-header filterDiv Canceled" id="headingchecking<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsechecking<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsechecking<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1" width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
												</td>
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php }?>


														
														
											<div id="collapsechecking<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingchecking<?php echo $showcab[0];?>" data-parent="#accordionchecking">
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													<div class="card-header" id="headingqc">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseqc" aria-expanded="false" aria-controls="collapseqc">
															<i class="flaticon2-right-arrow"></i> QC 
														</div>
													</div>
													<div class="kt-portlet__body" style="padding-left: 20px; padding-right: 1px; padding-top: 0px;padding-bottom: 0px;">
													<div id="collapseqc" class="collapse" aria-labelledby="headingqc" data-parent="#accordionExample4">
														<div class="card-body">
															<div class="accordion accordion-light" id="accordionqc">
												<div class="card">
													<div class="card-header" id="headingqco">
														<div class="card-title" data-toggle="collapse" data-target="#collapseqco" aria-expanded="false" aria-controls="collapseqco">
															QCO
														</div>
													</div>
													<div id="collapseqco" class="collapse" aria-labelledby="headingqco" data-parent="#accordionqc">
														<div class="card-body" >
														<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name LIKE 'qco%' AND cabn_owner='APM-TERMINALS 01'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>
				
									

									  
									<div class="accordion accordion-light" id="accordionqco">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="headingqco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqco<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                    </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>

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
													<div class="card-header filterDiv Disinfected" id="headingqco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqco<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php }elseif ($time<$today) {?>

							<div class="card-header filterDiv outdisinfected" id="headingqco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqco<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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
													<div class="card-header filterDiv Inprogress" id="headingqco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqco<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<?php }
							elseif($time<$today){?>
								<div class="card-header filterDiv outprogress" id="headingqco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqco<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php }} ?>


						<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingqco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqco<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>
						<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="headingqco<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqco<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqco<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>

														
														
										<div id="collapseqco<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingqco<?php echo $showcab[0];?>" data-parent="#accordionqco">
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													<div class="card-header" id="headingelevat">
														<div class="card-title" data-toggle="collapse" data-target="#collapseelevat" aria-expanded="false" aria-controls="collapseelevat">
															ELEVATOR 
														</div>
													</div>
													<div id="collapseelevat" class="collapse" aria-labelledby="headingelevat" data-parent="#accordionqc">
														<div class="card-body" >
														<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name LIKE 'liftcabin%' AND cabn_owner='APM-TERMINALS 01'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>
				
									

									  
									<div class="accordion accordion-light" id="accordionqco">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="headingelevat<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseelevat<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseelevat<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php if($showcab[1]=="liftcabin-1"){ ?>
												ELEVATOR 01
<?php }elseif($showcab[1]=="liftcabin-2"){ ?>
												ELEVATOR 02
<?php }elseif($showcab[1]=="liftcabin-3"){ ?>
												ELEVATOR 03
<?php }elseif($showcab[1]=="liftcabin-4"){ ?>
												ELEVATOR 04
<?php }elseif($showcab[1]=="liftcabin-5"){ ?>
												ELEVATOR 05
<?php }elseif($showcab[1]=="liftcabin-6"){ ?>
												ELEVATOR 06
<?php }elseif($showcab[1]=="liftcabin-7"){ ?>
												ELEVATOR 07
<?php }elseif($showcab[1]=="liftcabin-8"){ ?>
												ELEVATOR 08
<?php }elseif($showcab[1]=="liftcabin-9"){ ?>
												ELEVATOR 09
<?php }elseif($showcab[1]=="liftcabin-10"){ ?>
												ELEVATOR 10
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
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
													<div class="card-header filterDiv Disinfected" id="headingelevat<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseelevat<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseelevat<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php if($showcab[1]=="liftcabin-1"){ ?>
												ELEVATOR 01
<?php }elseif($showcab[1]=="liftcabin-2"){ ?>
												ELEVATOR 02
<?php }elseif($showcab[1]=="liftcabin-3"){ ?>
												ELEVATOR 03
<?php }elseif($showcab[1]=="liftcabin-4"){ ?>
												ELEVATOR 04
<?php }elseif($showcab[1]=="liftcabin-5"){ ?>
												ELEVATOR 05
<?php }elseif($showcab[1]=="liftcabin-6"){ ?>
												ELEVATOR 06
<?php }elseif($showcab[1]=="liftcabin-7"){ ?>
												ELEVATOR 07
<?php }elseif($showcab[1]=="liftcabin-8"){ ?>
												ELEVATOR 08
<?php }elseif($showcab[1]=="liftcabin-9"){ ?>
												ELEVATOR 09
<?php }elseif($showcab[1]=="liftcabin-10"){ ?>
												ELEVATOR 10
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
												
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php }elseif ($time<$today) {?>

							<div class="card-header filterDiv outdisinfected" id="headingelevat<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseelevat<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseelevat<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php if($showcab[1]=="liftcabin-1"){ ?>
												ELEVATOR 01
<?php }elseif($showcab[1]=="liftcabin-2"){ ?>
												ELEVATOR 02
<?php }elseif($showcab[1]=="liftcabin-3"){ ?>
												ELEVATOR 03
<?php }elseif($showcab[1]=="liftcabin-4"){ ?>
												ELEVATOR 04
<?php }elseif($showcab[1]=="liftcabin-5"){ ?>
												ELEVATOR 05
<?php }elseif($showcab[1]=="liftcabin-6"){ ?>
												ELEVATOR 06
<?php }elseif($showcab[1]=="liftcabin-7"){ ?>
												ELEVATOR 07
<?php }elseif($showcab[1]=="liftcabin-8"){ ?>
												ELEVATOR 08
<?php }elseif($showcab[1]=="liftcabin-9"){ ?>
												ELEVATOR 09
<?php }elseif($showcab[1]=="liftcabin-10"){ ?>
												ELEVATOR 10
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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
													<div class="card-header filterDiv Inprogress" id="headingelevat<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseelevat<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseelevat<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php if($showcab[1]=="liftcabin-1"){ ?>
												ELEVATOR 01
<?php }elseif($showcab[1]=="liftcabin-2"){ ?>
												ELEVATOR 02
<?php }elseif($showcab[1]=="liftcabin-3"){ ?>
												ELEVATOR 03
<?php }elseif($showcab[1]=="liftcabin-4"){ ?>
												ELEVATOR 04
<?php }elseif($showcab[1]=="liftcabin-5"){ ?>
												ELEVATOR 05
<?php }elseif($showcab[1]=="liftcabin-6"){ ?>
												ELEVATOR 06
<?php }elseif($showcab[1]=="liftcabin-7"){ ?>
												ELEVATOR 07
<?php }elseif($showcab[1]=="liftcabin-8"){ ?>
												ELEVATOR 08
<?php }elseif($showcab[1]=="liftcabin-9"){ ?>
												ELEVATOR 09
<?php }elseif($showcab[1]=="liftcabin-10"){ ?>
												ELEVATOR 10
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<?php }
							elseif($time<$today){?>
								<div class="card-header filterDiv outprogress" id="headingelevat<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseelevat<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseelevat<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php if($showcab[1]=="liftcabin-1"){ ?>
												ELEVATOR 01
<?php }elseif($showcab[1]=="liftcabin-2"){ ?>
												ELEVATOR 02
<?php }elseif($showcab[1]=="liftcabin-3"){ ?>
												ELEVATOR 03
<?php }elseif($showcab[1]=="liftcabin-4"){ ?>
												ELEVATOR 04
<?php }elseif($showcab[1]=="liftcabin-5"){ ?>
												ELEVATOR 05
<?php }elseif($showcab[1]=="liftcabin-6"){ ?>
												ELEVATOR 06
<?php }elseif($showcab[1]=="liftcabin-7"){ ?>
												ELEVATOR 07
<?php }elseif($showcab[1]=="liftcabin-8"){ ?>
												ELEVATOR 08
<?php }elseif($showcab[1]=="liftcabin-9"){ ?>
												ELEVATOR 09
<?php }elseif($showcab[1]=="liftcabin-10"){ ?>
												ELEVATOR 10
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php }} ?>


						<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingelevat<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseelevat<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseelevat<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php if($showcab[1]=="liftcabin-1"){ ?>
												ELEVATOR 01
<?php }elseif($showcab[1]=="liftcabin-2"){ ?>
												ELEVATOR 02
<?php }elseif($showcab[1]=="liftcabin-3"){ ?>
												ELEVATOR 03
<?php }elseif($showcab[1]=="liftcabin-4"){ ?>
												ELEVATOR 04
<?php }elseif($showcab[1]=="liftcabin-5"){ ?>
												ELEVATOR 05
<?php }elseif($showcab[1]=="liftcabin-6"){ ?>
												ELEVATOR 06
<?php }elseif($showcab[1]=="liftcabin-7"){ ?>
												ELEVATOR 07
<?php }elseif($showcab[1]=="liftcabin-8"){ ?>
												ELEVATOR 08
<?php }elseif($showcab[1]=="liftcabin-9"){ ?>
												ELEVATOR 09
<?php }elseif($showcab[1]=="liftcabin-10"){ ?>
												ELEVATOR 10
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
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>
						<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="headingelevat<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseelevat<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseelevat<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php if($showcab[1]=="liftcabin-1"){ ?>
												ELEVATOR 01
<?php }elseif($showcab[1]=="liftcabin-2"){ ?>
												ELEVATOR 02
<?php }elseif($showcab[1]=="liftcabin-3"){ ?>
												ELEVATOR 03
<?php }elseif($showcab[1]=="liftcabin-4"){ ?>
												ELEVATOR 04
<?php }elseif($showcab[1]=="liftcabin-5"){ ?>
												ELEVATOR 05
<?php }elseif($showcab[1]=="liftcabin-6"){ ?>
												ELEVATOR 06
<?php }elseif($showcab[1]=="liftcabin-7"){ ?>
												ELEVATOR 07
<?php }elseif($showcab[1]=="liftcabin-8"){ ?>
												ELEVATOR 08
<?php }elseif($showcab[1]=="liftcabin-9"){ ?>
												ELEVATOR 09
<?php }elseif($showcab[1]=="liftcabin-10"){ ?>
												ELEVATOR 10
<?php }else{
	?>
	<?php echo $showcab[1];?>
	<?php
} ?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php } ?>

														
														
										<div id="collapseelevat<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingelevat<?php echo $showcab[0];?>" data-parent="#accordionqco">
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													<div class="card-header" id="headingqcc">
														<div class="card-title" data-toggle="collapse" data-target="#collapseqcc" aria-expanded="false" aria-controls="collapseqcc">
															QCC
														</div>
													</div>
													<div id="collapseqcc" class="collapse" aria-labelledby="headingqcc" data-parent="#accordionqc">
														<div class="card-body" >
<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name LIKE 'qcc%' AND cabn_owner='APM-TERMINALS 01'");
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
													<div class="card-header filterDiv Notdisinfected" id="headingqcc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqcc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqcc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
												
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>

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
													<div class="card-header filterDiv Disinfected" id="headingqcc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqcc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqcc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }elseif ($time<$today) {
													?>
													<div class="card-header filterDiv outdisinfected" id="headingqcc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqcc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqcc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>

												<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingqcc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqcc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqcc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
												
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>

												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }?>

												<?php  if($showcab[3]=='In progress'){

$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {
													?>
													<div class="card-header filterDiv Inprogress" id="headingqcc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqcc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqcc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span></span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
													<?php }
													elseif($time<$today){?>
														<div class="card-header filterDiv outprogress" id="headingqcc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqcc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqcc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }}?>

												<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="headingqcc<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseqcc<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseqcc<?php echo $showcab[0];?>" style="">

															<table style="margin-top: 0;margin-bottom: 0;" class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline collapsed">
													<tbody>
													<tr role="row" class="odd parent">
												
												<td  class="sorting_1"  width="50%">
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">
                                        	<span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                        </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }?>


														
														
											<div id="collapseqcc<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingqcc<?php echo $showcab[0];?>" data-parent="#accordionitruck">
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													<div class="card-header" id="headinginternal">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseinternal" aria-expanded="false" aria-controls="collapseinternal">
															<i class="flaticon2-right-arrow"></i> RTG 
														</div>
													</div>
													<div class="kt-portlet__body" style="padding-left: 20px; padding-right: 1px; padding-top: 0px;padding-bottom: 0px;">
													<div id="collapseinternal" class="collapse" aria-labelledby="headinginternal" data-parent="#accordionExample4">
														<div class="card-body">
															<div class="accordion accordion-light" id="accordioninternal">
												<div class="card">
													<div class="card-header" id="headingibus">
														<div class="card-title" data-toggle="collapse" data-target="#collapseribus" aria-expanded="false" aria-controls="collapseribus">
															RTGO
														</div>
													</div>
													<div id="collapseribus" class="collapse" aria-labelledby="headingibus" data-parent="#accordioninternal">
														<div class="card-body" >
														<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name LIKE 'rtgo%' AND cabn_owner='APM-TERMINALS 01'");
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
                                        <span class="kt-user-card-v2__name"><span style="text-transform: uppercase; font-weight: 700;"><?php echo $showcab[1];?></span>
                                    </span>
                                        <a href="#" class="kt-user-card-v2__email kt-link"></a>
                                    </div>
                                </div></td>
                                <td  align="center" style="align-content: center;">
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
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
												
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<?php }
							elseif($time<$today){?>
								<div class="card-header filterDiv outprogress" id="headingibus<?php echo $showcab[0];?>">
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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>							
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						<?php }} ?>


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
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
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
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
															RTGE
														</div>
													</div>
													<div id="collapseitruck" class="collapse" aria-labelledby="headingitruck" data-parent="#accordioninternal">
														<div class="card-body" >
<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name LIKE 'ercabin%' AND cabn_owner='APM-TERMINALS 01'");
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
												
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>

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
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }?>

												<?php  if($showcab[3]=='In progress'){
$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {

													?>
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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
													<?php }
													elseif($time<$today){?>
														<div class="card-header filterDiv outprogress" id="headingitruck<?php echo $showcab[0];?>">
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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }}?>

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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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

													<div class="card-header" id="headingfrk">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefrk" aria-expanded="false" aria-controls="collapsefrk">
															<i class="flaticon2-right-arrow"></i>  Forklift
														</div>
													</div>
													<div id="collapsefrk" class="collapse" aria-labelledby="headingfrk" data-parent="#accordionExample4">
														<div class="card-body">


												
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'FORK%' AND cabn_owner='APM-TERMINALS 01'");
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
													
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } elseif($time<$today){?>
	<div class="card-header  filterDiv outprogress" id="headingfrk<?php echo $showcab[0];?>">
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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>
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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>

												<?php  if($showcab[3]=='Not available'){?>

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
													
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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

													<div class="card-header" id="headingttg">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsettg" aria-expanded="false" aria-controls="collapsettg">
															<i class="flaticon2-right-arrow"></i>  TTG
														</div>
													</div>
													<div id="collapsettg" class="collapse" aria-labelledby="headingttg" data-parent="#accordionExample4">
														<div class="card-body">


												
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'TTG%' AND cabn_owner='APM-TERMINALS 01'");
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

													<div class="card-header  filterDiv Notdisinfected" id="headingttg<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsettg<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsettg<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
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

													<div class="card-header  filterDiv Disinfected" id="headingttg<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsettg<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsettg<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php }elseif($time < $today) {

												 ?>
												 <div class="card-header  filterDiv outdisinfected" id="headingttg<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsettg<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsettg<?php echo $showcab[0];?>" style="">

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
												
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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

													<div class="card-header  filterDiv Inprogress" id="headingttg<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsettg<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsettg<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } elseif($time<$today){?>
	<div class="card-header  filterDiv outprogress" id="headingttg<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsettg<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsettg<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>	
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>
												<?php  if($showcab[3]=='Canceled'){?>

													<div class="card-header  filterDiv Canceled" id="headingttg<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsettg<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsettg<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>

												<?php  if($showcab[3]=='Not available'){?>

													<div class="card-header  filterDiv Notavailable" id="headingttg<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsettg<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsettg<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>


														
														
											<div id="collapsettg<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingttg<?php echo $showcab[0];?>" data-parent="#accordionfrk">
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
										
							
									<?php
}}

?>

									<?php if (isset($_POST["updatestatttg"])) {
																	require("controls/update.php");
																} 
																 ?>
														</div>
													</div>
												</div>
											</div>
								</div>
								<div class="card">

													<div class="card-header" id="headingreach">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsereach" aria-expanded="false" aria-controls="collapsereach">
															<i class="flaticon2-right-arrow"></i>  REACH STACKER
														</div>
													</div>
													<div id="collapsereach" class="collapse" aria-labelledby="headingreach" data-parent="#accordionExample4">
														<div class="card-body">


												
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'REACH%' AND cabn_owner='APM-TERMINALS 01'");
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

													<div class="card-header  filterDiv Notdisinfected" id="headingreach<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsereach<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsereach<?php echo $showcab[0];?>" style="">

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
												
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
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

													<div class="card-header  filterDiv Disinfected" id="headingreach<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsereach<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsereach<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php }elseif($time < $today) {

												 ?>
												 <div class="card-header  filterDiv outdisinfected" id="headingreach<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsereach<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsereach<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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

													<div class="card-header  filterDiv Inprogress" id="headingreach<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsereach<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsereach<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php } elseif($time<$today){?>
	<div class="card-header  filterDiv outprogress" id="headingreach<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsereach<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsereach<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>
												<?php  if($showcab[3]=='Canceled'){?>

													<div class="card-header  filterDiv Canceled" id="headingreach<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsereach<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsereach<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>

												<?php  if($showcab[3]=='Not available'){?>

													<div class="card-header  filterDiv Notavailable" id="headingreach<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsereach<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsereach<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php } ?>


														
														
											<div id="collapsereach<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingreach<?php echo $showcab[0];?>" data-parent="#accordionfrk">
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
										
							
									<?php
}}

?>

									<?php if (isset($_POST["updatestatreach"])) {
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
															<i class="flaticon2-right-arrow"></i>EMPTY HANDLER
														</div>
													</div>
													<div id="collapsersk" class="collapse" aria-labelledby="headingrsk" data-parent="#accordionExample4">
														<div class="card-body">


												
															<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'EMPTY%' AND cabn_owner='APM-TERMINALS 01'");
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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }
												elseif ($time<$today) {
													
												
												?>
												<div class="card-header filterDiv outprogress" id="headingrsk<?php echo $showcab[0];?>">
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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }} ?>
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
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
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
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													<div class="card-header" id="opscars">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseopscars" aria-expanded="false" aria-controls="collapseopscars">
															<i class="flaticon2-right-arrow"></i>  EXEC Cars
														</div>
													</div>
													<div id="collapseopscars" class="collapse" aria-labelledby="opscars" data-parent="#accordionExample4">
														<div class="card-body">


												
														<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'exec%' AND cabn_owner='APM-TERMINALS 01'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>
									

									  
									<div class="accordion accordion-light" id="accordionopscars"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>
<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="opscars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopscars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopscars<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
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
													<div class="card-header filterDiv Disinfected" id="opscars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopscars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopscars<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>



												<?php }elseif($time<$today){ ?>
<div class="card-header filterDiv outdisinfected" id="opscars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopscars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopscars<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }}?>
												
												<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="opscars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopscars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopscars<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }?>

												<?php  if($showcab[3]=='In progress'){
$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {
													?>
													<div class="card-header filterDiv Inprogress" id="opscars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopscars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopscars<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }elseif($time<$today){?>
													<div class="card-header filterDiv outprogress" id="opscars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopscars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopscars<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }}?>

												<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="opscars<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapseopscars<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapseopscars<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }?>


												
												
												


														
														
											<div id="collapseopscars<?php echo $showcab[0];?>" class="collapse" aria-labelledby="opscars<?php echo $showcab[0];?>" data-parent="#accordionopscars">
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[0];?>cabindetailsops"><i class="la la-edit"></i> See Details</a>

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
															<i class="flaticon2-right-arrow"></i>  M&R Cars
														</div>
													</div>
													<div id="collapsemrcars" class="collapse" aria-labelledby="headingmrcars" data-parent="#accordionExample4">
														<div class="card-body">


												
														<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_asset LIKE 'MR CAR%' AND cabn_owner='APM-TERMINALS 01'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>
									

									  
									<div class="accordion accordion-light" id="accordionmrcarsf"  style="padding-left: 20px;">
												<div class="card">
													
												



												
										
															<?php while ($showcab=$resafter->fetch_row()) {?>

<?php  if($showcab[3]=='Not disinfected'){?>
													<div class="card-header filterDiv Notdisinfected" id="headingmrcarsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcarsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcarsf<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
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
													<div class="card-header filterDiv Disinfected" id="headingmrcarsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcarsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcarsf<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php }elseif ($time<$today) {
													?>
													<div class="card-header filterDiv outdisinfected" id="headingmrcarsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcarsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcarsf<?php echo $showcab[0];?>" style="">

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
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
<?php	}}?>

<?php  if($showcab[3]=='In progress'){

$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {
						
	?>
													<div class="card-header filterDiv Inprogress" id="headingmrcarsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcarsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcarsf<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php }elseif($time<$today){
													?>
													<div class="card-header filterDiv outprogress" id="headingmrcarsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcarsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcarsf<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php 
											}}?>

												<?php  if($showcab[3]=='Not available'){?>
													<div class="card-header filterDiv Notavailable" id="headingmrcarsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcarsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcarsf<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php }?>

												<?php  if($showcab[3]=='Canceled'){?>
													<div class="card-header filterDiv Canceled" id="headingmrcarsf<?php echo $showcab[0];?>">
														<div class="card-title collapsed" style="padding-top: 0;padding-bottom: 0;" data-toggle="collapse" data-target="#collapsemrcarsf<?php echo $showcab[0];?>" aria-expanded="true" aria-controls="collapsemrcarsf<?php echo $showcab[0];?>" style="">

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
													
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

												<?php }?>
														
														
											<div id="collapsemrcarsf<?php echo $showcab[0];?>" class="collapse" aria-labelledby="headingmrcarsf<?php echo $showcab[0];?>" data-parent="#accordionmrcarsf">
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
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $showcab[0];?>cabindetails"><i class="la la-edit"></i> See Details</a>

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
										
						
									<?php
}}

?>

									<?php if (isset($_POST["updatestatmrc"])) {
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
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE (cabn_asset='SAFETY CAR' OR cabn_asset='BUS') AND cabn_owner='APM-TERMINALS 01'");
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
												
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>	
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
													
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

<?php }elseif ($time<$today) {?>
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
													<span class="kt-list__icon"><i class="flaticon2-shield kt-font-warning"></i></span>
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
													
													<span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span>
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
													
													<span class="kt-list__icon"><i class="flaticon2-gear kt-font-accent"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

<?php }?>
														
																<?php  if($showcab[3]=='In progress'){

$time = $showcab[4];
$time = strtotime($time) + 3600; // Add 8 hours
$time = date('Y-m-d H:i:s', $time); // Back to string

$today = date("Y-m-d H:i:s");


if ($time > $today) {
																	?>
													<div class="card-header filterDiv outprogress" id="headingothercf<?php echo $showcab[0];?>">
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
												
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-brand"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>
												<?php }
												elseif($time<$today){?>
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
													<span class="kt-list__icon"><i class="flaticon2-chronometer  kt-font-warning"></i></span>
												</td>
												
												
											
											</tr>
										</tbody>
									</table>



														
														</div>
													</div>

<?php }}?>
	
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
															
														<li >



																<span class="dtr-title" style="color: #00A1db;">Start at</span>
																<span class="dtr-data">
																	<?php
													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
													
$lastfinish=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

$lastfinish->execute();
if ($lastfinish===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $reslast=$lastfinish->get_result();
if (mysqli_num_rows($reslast)!=0) { 
 while ($showfisnish=$reslast->fetch_row()) {



													
$lastbegin=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

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
					<div class="col-lg-3 col-xl-3  order-lg-1 order-xl-1">

                      <!--begin::Portlet-->
                      <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                          <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                              Operations Summary
                            </h3>
                          </div>
                          
                        </div>
                        <div class="kt-portlet__body">
                          <div class="tab-content">
                            <div class="" id="kt_portlet_tabs_1111_1_content" role="tabpanel">
                              <div class="kt-widget-11">
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                     Done
                                    </div>
                                    <div class="kt-widget-11__value">
                                    	<?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='Disinfected' AND cabn_owner='APM-TERMINALS 01' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR)");
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
$cabinhis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01'");
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
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='Disinfected' AND cabn_owner='APM-TERMINALS 01' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 8 HOUR)");
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
$cabinhis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01'");
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
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='In progress' AND cabn_owner='APM-TERMINALS 01'  AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR)");
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
$cabinhis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01'");
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
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='In progress' AND cabn_owner='APM-TERMINALS 01' AND cabn_last_ops < DATE_SUB(NOW(),INTERVAL 1 HOUR)");
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
$cabinhis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01'");
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
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_status='Not disinfected' AND cabn_owner='APM-TERMINALS 01'");
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
$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish'");
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
                                  </div>
                                </div>
                                <img src="../img/png-transparent-apm-terminals-maasvlakte-container-port-maersk-maritimes.png" width="100%">
                                 
                                 <label style="font-weight: 600;align-content: center; text-align: center;" class="col-form-label col-lg-12 col-sm-12">TC1 - TNG MED PORT</label>
											
                              </div>
                            </div>
                             <br>
                                     <?php 

require('../../controls/zdze8efzedzdeezd/de5.php');
$selectfirstf=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_id ASC LIMIT 1");
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
$selectlastf=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_id DESC LIMIT 1");
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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" async></script>
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
		<script src="../../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/moment/min/moment.min.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript" async></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="../../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/raphael/raphael.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/morris.js/morris.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript" async></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="../../assets/js/demo1/scripts.bundle.js" type="text/javascript" async></script>
		<script src="../../assets/js/demo1/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript" async></script>
		<script src="../../assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript" async></script>

		<!--end::Page Scripts -->

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
															QC
														</div>
													</div>
													<div id="collapseqcaf" class="collapse" aria-labelledby="headingqcaf" data-parent="#accordionExample2" style="">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'QC%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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
																
																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>
																
																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-danger"></i></span></label>
																			
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
																
															<?php }elseif ($showmorn[3]=="In progress") {?>
																
																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																			
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
															
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
															RTG
														</div>
													</div>
													<div id="collapsertgaf" class="collapse" aria-labelledby="headingrtgaf" data-parent="#accordionExample2">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'RTG%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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
																
																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
															<?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span></label>
																		
																			
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
																
															<?php }elseif ($showmorn[3]=="In progress") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-warning"></i></span></label>
																		
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'FORKLIFT%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span></label>
																		
																			
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
																
															<?php }elseif ($showmorn[3]=="In progress") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-warning"></i></span></label>
																		
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'REACH%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span></label>
																		
																			
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
															
															<?php }elseif ($showmorn[3]=="In progress") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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
																
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-warning"></i></span></label>
																		
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'EMPTY%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span></label>
																		
																			
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
															
															<?php }elseif ($showmorn[3]=="In progress") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-warning"></i></span></label>
																		
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'MR%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span></label>
																		
																			
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
																
															<?php }elseif ($showmorn[3]=="In progress") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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
															
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-warning"></i></span></label>
																		
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND (cabn_asset LIKE 'SAFETY%' OR cabn_asset LIKE 'IT%' OR cabn_asset LIKE 'SC%') AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span></label>
																		
																			
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
																
															<?php }elseif ($showmorn[3]=="In progress") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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
																

															
															<?php }elseif ($showmorn[3]=="Canceled") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-warning"></i></span></label>
																		
																			
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
															QC
														</div>
													</div>
													<div id="collapseqcmor" class="collapse" aria-labelledby="headingqcmor" data-parent="#morningaccordion" style="">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'QC%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span></label>
																		
																			
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
																
															<?php }elseif ($showmorn[3]=="In progress") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-warning"></i></span></label>
																		
																			
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
															RTG
														</div>
													</div>
													<div id="collapsertgmor" class="collapse" aria-labelledby="headingrtgmor" data-parent="#morningaccordion">
														<div class="card-body">
															<?php
																			require('../controls/zdze8efzedzdeezd/de5.php');


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'RTG%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span></label>
																		
																			
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
															
															<?php }elseif ($showmorn[3]=="In progress") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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
																
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-warning"></i></span></label>
																		
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'FORKLIFT%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-danger"></i></span></label>
																		
																			
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
																
															<?php }elseif ($showmorn[3]=="In progress") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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
															
															<?php }elseif ($showmorn[3]=="Canceled") {?>

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-bell kt-font-warning"></i></span></label>
																		
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'REACH%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
															<?php }elseif ($showmorn[3]=="Not disinfected") {
	
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'EMPTY%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
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

																	<div class="kt-widget-5__item-info">
																		
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_asset LIKE 'MR%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND (cabn_asset LIKE 'SAFETY%' OR cabn_asset LIKE 'IT%' OR cabn_asset LIKE 'SC%') AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
																
																<?php }elseif ($showmorn[3]=="Not disinfected") {
	
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

																	<div class="kt-widget-5__item-info">
																		
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																			
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


$selectmorn=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-shield kt-font-success"></i></span></label>
																		
																			
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
															<?php }elseif ($showmorn[3]=="Not disinfected") {
	
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

																	<div class="kt-widget-5__item-info">
																		<label><span class="kt-list__icon"><i class="flaticon2-chronometer kt-font-brand"></i></span></label>
																		
																			
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'WORKSHOP%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> Workshops<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'MOSQUE%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> MOSQUE<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'LOCKER%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> LOCKER-ROOMS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'CHECK%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> CHECKING ZONE<br>
                                  

<?php
}}}



$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'QC%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> QC Cabins<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'RTG%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> RTG Cabins<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'FORKLIFT%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'EMPTY%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'REACH STACKER%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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



$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'MR CAR%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'EXEC%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> EXEC CARS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_asset LIKE 'TTG%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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



$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND (cabn_asset LIKE 'automat%' OR cabn_asset LIKE 'prot%' OR cabn_asset LIKE 'sc car%' OR cabn_asset LIKE 'it car%') AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Disinfected' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'QC%' ORDER BY cabn_id DESC");
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

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> QC Cabins<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'RTG%' ORDER BY cabn_id DESC");
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

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> RTG Cabins<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'FORKLIFT%' ORDER BY cabn_id DESC");
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


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'EMPTY%' ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'REACH%' ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'OPS CAR%' ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'MR CAR%' ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'EXEC%' ORDER BY cabn_id DESC");
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

<span style="color: #fd397a;"><?php echo $showdis[0];      ?></span> EXEC CARS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' AND cabn_asset LIKE 'TTG%' ORDER BY cabn_id DESC");
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


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' AND (cabn_asset LIKE 'automat%' OR cabn_asset LIKE 'prot%' OR cabn_asset LIKE 'sc car%' OR cabn_asset LIKE 'it car%') ORDER BY cabn_id DESC");
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
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not disinfected' ORDER BY cabn_id DESC");
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


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'WORKSHOP%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> Workshops<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'MOSQUE%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> MOSQUE<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'LOCKER%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> LOCKER-ROOMS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'CHECK%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #1dc9b7;"><?php echo $showdis[0];      ?></span> CHECKING ZONE<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'QC%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span> QC Cabins<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'RTG%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span>RTG Cabins<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'FORKLIFT%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'EMPTY%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'REACH%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'OPS CAR%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'MR CAR%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'EXEC%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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

<span style="color: #00A1DB;"><?php echo $showdis[0];      ?></span>EXEC CARS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_asset LIKE 'TTG%' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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



$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND (cabn_asset LIKE 'automat%' OR cabn_asset LIKE 'prot%' OR cabn_asset LIKE 'sc car%' OR cabn_asset LIKE 'it car%') AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='In progress' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 1 HOUR) ORDER BY cabn_id DESC");
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


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND cabn_asset LIKE 'QC%' ORDER BY cabn_id DESC");
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

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> QC Cabins<br>
                                  

<?php
}}}


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND cabn_asset LIKE 'RTG%' ORDER BY cabn_id DESC");
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

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> RTG Cabins<br>
                                  

<?php
}}
}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND cabn_asset LIKE 'FORKLIFT%' ORDER BY cabn_id DESC");
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


$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND cabn_asset LIKE 'EMPTY%' ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND cabn_asset LIKE 'REACH%' ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND cabn_asset LIKE 'OPS CAR%' ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND cabn_asset LIKE 'MR CAR%' ORDER BY cabn_id DESC");
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

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND cabn_asset LIKE 'EXEC%' ORDER BY cabn_id DESC");
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

<span style="color: #ffb822;"><?php echo $showdis[0];      ?></span> EXEC CARS<br>
                                  

<?php
}}}

$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND cabn_asset LIKE 'TTG%' ORDER BY cabn_id DESC");
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



$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND (cabn_asset LIKE 'automat%' OR cabn_asset LIKE 'prot%' OR cabn_asset LIKE 'sc car%' OR cabn_asset LIKE 'it car%') ORDER BY cabn_id DESC");
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
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Canceled' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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
$selectdis=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not available' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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
$selectdis=$cdb->prepare("SELECT count(*) FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not available' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
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


													<div id="collapsecancel" class="collapse" aria-labelledby="headingcancel" data-parent="#accordionExample2">
														<div class="card-body">
															       

<?php 


require('../controls/zdze8efzedzdeezd/de5.php');
$selectdis=$cdb->prepare("SELECT * FROM cabins WHERE cabn_owner='APM-TERMINALS 01' AND cabn_status='Not available' AND cabn_last_ops >= DATE_SUB(NOW(),INTERVAL 8 HOUR) ORDER BY cabn_id DESC");
$selectdis->execute();
if ($selectdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
    
  $resdis=$selectdis->get_result();
?>
<?php while ($showdis=$resdis->fetch_row()) {?>

<table class="table table-striped- table-checkable dataTable no-footer dtr-inline collapsed" style="width: 100%">
													<tbody>
<tr class="child"  style="width: 100%">
													<td class="child" colspan="3"  style="width: 100%">
														<ul  class="dtr-details"  style="width: 100%">
															<li >
																<span class="dtr-title">Cabin ID</span>
																<span class="dtr-data" style="text-transform: uppercase;"><?php echo $showdis[1];?></span>
															</li>
															<li >
																<span class="dtr-title">Agent-Team</span>
																<span class="dtr-data">
																<?php
													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showdis[5]'");
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
													
$fteam=$cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showdis[5]'");
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
																<span class="dtr-title">On Hold since</span>
																<span class="dtr-data"><?php echo $showdis[4];?></span>
															</li>
															<li >
																<span class="dtr-title">Asset</span>
																<span class="dtr-data"><?php echo $showdis[7];?></span>
															</li>

</ul>
</td>
</tr>
</tbody>
</table>
<?php
                
                                  
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
											</div>
											
											
											
											
										</div>
									


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
	</body>

	<!-- end::Body -->
</html>
<?php

?>