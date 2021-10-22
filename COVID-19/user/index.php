<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin')||($_SESSION['uat']=='user'))) 
{

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



    </style>
		<link rel="shortcut icon" href="../../img/favicon-32x32.png" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
			<div class="kt-header-mobile__logo">
				<a href="">
					<img alt="Logo" src="../img/logo.png" width="85" />
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

						
							<?php include("../controls/userside.php")?>
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
								<h3 class="kt-subheader__title" style="color: white; font-size: 24px;">ANTIPANIC PLAN -</h3>
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

                     <div class="col-lg-4 col-xl-4 order-lg-2 order-xl-1">
                     </div>
                    <div class="col-lg-4 col-xl-4 order-lg-2 order-xl-1">
							<a class="btn btn-outline-brand" data-toggle="modal" data-target="#exampleModalCenter">
													
					
															<div class="kt-iconbox kt-iconbox--success">
																<div class="kt-iconbox__icon">
																	
																	<i class="fa fa-biohazard" style="font-size: 75px"></i>
																</div>
																<div class="kt-iconbox__title">
																	New Operation
																</div>
																<div class="kt-iconbox__content">
																	Setup options before start disinfection operation
																</div>
															</div>

														</a>
								
								<div class="kt-portlet__head-wrapper">
											
											
												
												








											
												
												
													<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">New Operation order</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-wizard-v3" id="kt_wizard_v3" data-ktwizard-state="step-first">

										<!--begin: Form Wizard Nav -->
										<div class="kt-wizard-v3__nav">
											<div class="kt-wizard-v3__nav-line"></div>
											<div class="kt-wizard-v3__nav-items">
												<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
													<span>1</span>
													<i class="fa fa-check"></i>
													<div class="kt-wizard-v3__nav-label">Asset</div>
												</a>
												<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
													<span>2</span>
													<i class="fa fa-check"></i>
													<div class="kt-wizard-v3__nav-label">Cabin</div>
												</a>
												<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
													<span>3</span>
													<i class="fa fa-check"></i>
													<div class="kt-wizard-v3__nav-label">Team</div>
												</a>
												<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
													<span>4</span>
													<i class="fa fa-check"></i>
													<div class="kt-wizard-v3__nav-label">Product</div>
												</a>
												<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
													<span>5</span>
													<i class="fa fa-check"></i>
													<div class="kt-wizard-v3__nav-label">Mission</div>
												</a>
											</div>
										</div>

										<!--end: Form Wizard Nav -->

										<!--begin: Form Wizard Form-->
										<form class="kt-form" id="kt_form">

											<!--begin: Form Wizard Step 1-->
											<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
												<div class="kt-heading kt-heading--md">Select Asset</div>
												<div class="kt-separator kt-separator--height-xs"></div>
												<div class="kt-form__section kt-form__section--first">
													<div class="form-group">

<div class="row">
						<div class="col-xl-6">
								


	<label class="kt-checkbox kt-checkbox--solid kt-checkbox--success">
															<input type="checkbox" class="cb" name="qccheck" id="qccheck" value="8am-10am" onchange="cbChange(this)"><h4> QC</h4>
															<span></span>
														</label>
													</div>
													<div class="col-xl-6">
							
<label class="kt-checkbox kt-checkbox--solid kt-checkbox--success">
															<input type="checkbox" class="cb" name="rtgcheck" id="rtgcheck" value="10am-12pm" onchange="cbChange(this)"> <h4>RTG</h4>
															<span></span>
														</label>
													</div>
    
   </div>
   <div class="checkbox">
    <i class="qccheck box" style="display:none">
        <select name="pref_tomorrow_8am_10am" class="form-control kt_selectpicker">
						
            <option value="">Choose QC</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
        </select>
    </i>
</div>
<div class="checkbox">
	
    <i class="rtgcheck box" style="display:none">
        <select name="pref_tomorrow_10am_12pm" class="form-control kt_selectpicker">
            <option value="">Choose RTG</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
        </select>
    </i>
</div>
														
														<span class="form-text text-muted">Please select the asset to disinfect</span>
													</div>
												</div>
											</div>

											<!--end: Form Wizard Step 1-->

											<!--begin: Form Wizard Step 2-->
											<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
												<div class="kt-heading kt-heading--md">Select cabin to disinfect</div>
												<div class="kt-separator kt-separator--height-xs"></div>
												<div class="kt-form__section kt-form__section--first">
													<div class="row">
														<div class="col-xl-4">
															<div class="form-group">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
															<input type="checkbox"> Upper cabin
															<span></span>
														</label>
																<span class="form-text text-muted">Please enter your full name</span>
															</div>
														</div>
														<div class="col-xl-4">
															<div class="form-group">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
															<input type="checkbox"> Lower Land Cabin
															<span></span>
														</label>
																
															</div>
														</div>
														<div class="col-xl-4">
															<div class="form-group">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
															<input type="checkbox"> Lower Sea Cabin
															<span></span>
														</label>
																
															</div>
														</div>
													</div>
													
													
												</div>
											</div>

											<!--end: Form Wizard Step 2-->

											<!--begin: Form Wizard Step 3-->
											<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
												<div class="kt-heading kt-heading--md">Select the team</div>
												<div class="kt-separator kt-separator--height-xs"></div>
												<div class="kt-form__section kt-form__section--first">
													<div class="row">
														<div class="col-xl-4">
															<div class="form-group">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
															<input type="checkbox"> Jamal Team
															<span></span>
														</label>
																
															</div>
														</div>
														<div class="col-xl-4">
															<div class="form-group">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
															<input type="checkbox"> Hassan Team
															<span></span>
														</label>
																
															</div>
														</div>
														<div class="col-xl-4">
															<div class="form-group">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
															<input type="checkbox"> Omar Team
															<span></span>
														</label>
																<span class="form-text text-muted">Please choose which team will work</span>
															</div>
														</div>
													</div>
													
													
												</div>
											</div>

											<!--end: Form Wizard Step 3-->

											<!--begin: Form Wizard Step 4-->
											<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
												<div class="kt-heading kt-heading--md">Setup Tools Informations</div>
												<div class="kt-separator kt-separator--height-xs"></div>
												<div class="kt-form__section kt-form__section--first">
													<div class="row">
														<div class="col-xl-6">
															<div class="form-group">
																<label>Tool</label>
																 <select name="pref_tomorrow_10am_12pm" class="form-control kt_selectpicker">
																 	<option value="">Choose </option>
																 	<option value="Sprayer">Sprayer</option>
																 	<option value="High Pressure">High Pressure</option>
																 </select>
																<span class="form-text text-muted">Please enter the cardholder name</span>
															</div>
														</div>
														<div class="col-xl-6">
															<div class="form-group">
																<label>quantity <span class="text-muted">Liters</span></label>
																<input type="number" class="form-control" min="1" max="10" placeholder="" value="1">
																<span class="form-text text-muted">select the quantity needed</span>
															</div>
														</div>
													</div>
													
													
													
												</div>
											</div>

											<!--end: Form Wizard Step 4-->

											<!--begin: Form Wizard Step 5-->
											<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
												<div class="kt-heading kt-heading--md">Setup Schedule</div>
												<div class="kt-separator kt-separator--height-xs"></div>
												<div class="kt-form__section kt-form__section--first">
													<div class="form-group">
														<label>Start time:</label>
														<div class="row">
															<div class="col-xl-6">
																<label class="kt-option kt-option kt-option--plain">
																	<span class="kt-option__control">
																		<span class="kt-radio kt-radio--check-bold">
																			<input type="radio" name="m_option_1" value="1" checked>
																			<span></span>
																		</span>
																	</span>
																	<span class="kt-option__label">
																		<span class="kt-option__head">
																			<span class="kt-option__title">
																				Now
																			</span>
																		</span>
																		<span class="kt-option__body">
																			30 minutes after approve
																		</span>
																	</span>
																</label>
															</div>
															<div class="col-xl-6">
																<label class="kt-option kt-option kt-option--plain">
																	<span class="kt-option__control">
																		<span class="kt-radio kt-radio--check-bold">
																			<input type="radio" name="m_option_1" value="1" checked>
																			<span></span>
																		</span>
																	</span>
																	<span class="kt-option__label">
																		<span class="kt-option__head">
																			<span class="kt-option__title">
																				As soon as possible
																			</span>
																		</span>
																		<span class="kt-option__body">
																			within 24 hours after approve
																		</span>
																	</span>
																</label>
															</div>
														</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed"></div>
													<div class="kt-separator kt-separator--height-md"></div>
													
													<div class="form-group">
														<label class="kt-checkbox">
															<input type="checkbox" name="accept" value="1"> Click here to indicate that you are the respensable of the request
															<span></span>
														</label>
													</div>
												</div>
											</div>

											<!--end: Form Wizard Step 5-->

											<!--begin: Form Actions -->
											<div class="kt-form__actions">
												<div class="btn btn-outline-brand btn-md btn-tall btn-wide btn-bold btn-upper" data-ktwizard-type="action-prev">
													Previous
												</div>
												<div class="btn btn-brand btn-md btn-tall btn-wide btn-bold btn-upper" data-ktwizard-type="action-submit">
													Submit
												</div>
												<div class="btn btn-brand btn-md btn-tall btn-wide btn-bold btn-upper" data-ktwizard-type="action-next">
													Next Step
												</div>
											</div>

											<!--end: Form Actions -->
										</form>

										<!--end: Form Wizard Form-->
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

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="../../assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="../js/table-html.js" type="text/javascript"></script>
				<script src="../../assets/js/demo1/pages/components/keen-wizard/wizard-demo-v3.js" type="text/javascript"></script>
						<script src="../../assets/js/demo1/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
<?php
}

else {
    header("location:../../../login.php");
}

?>