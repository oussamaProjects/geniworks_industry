<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin'))) 
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

 function subassetsid(element){
 	var sdt = document.getElementById("subassetid1").value;
    document.getElementById("subassetid").value = sdt;
    document.getElementById("subassetsid1").innerHTML = sdt;
 }

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
		<link href="../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="../img/favicon-32x32.png" />
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

<?php
    $time = date("H");
    $timezone = date("e");
    
    if ($time >= "7" && $time < "8") {
          include('controls/time-scoring.php');
    }  else
    if ($time >= "19") {
        echo "Good night";
        include('controls/absence-check.php');
    }
    ?>
	<body onload="hola(11);" class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="#">
					<img alt="Logo" src="../img/favicon-32x32.png" />
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
								<img alt="Logo" src="../img/logo-geniworks-2.png" width="180"/>
							</a>
						</div>
						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
						</div>
					</div>

					<!-- end:: Aside Brand -->

					<?php include('../leftside.php'); ?>

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
										Presence Control </a>
  
									<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
								</div>
							</div>
							
						</div>

						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							

							<!--begin::Portlet-->
							<div class="kt-portlet">
								



								<div class="kt-portlet__body">
									<div class="kt-slider__head">
													<div class="kt-slider__label"><h3>Presence Control Dashboard </h3></div>
													<br>
												</div>
												<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Administration</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="kt-portlet__head-wrapper kt-form">
															<div class="kt-form__group kt-form__group--inline kt-margin-r-10">
																
															</div>
															
													
														</div>
													</div>
												</div>
									<div class="row">
											
										
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

									<a href="administration/">
									<div class="kt-portlet kt-portlet--height-fluid">
										
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget-21">
												<div class="kt-widget-21__title">
													<div class="kt-widget-21__label"> <img src="controls/img/logo-geniworks.png" style="width: 50px;height: 50px;"  /> Office </div>
										
												</div>
												<div class="kt-widget-21__data">

													<!--Doc: For the chart legend bullet colors can be changed with state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
													<div class="kt-widget-21__legends">
														<div class="kt-widget-21__legend">
															<span> </span>
															<span class="badge badge-pill badge-info" style="margin-left: 5px; color: white;"><?php include('controls/ad.php');?></span>
														</div>
													</div>
													<div class="kt-widget-21__chart">
														<div class="kt-widget-21__stat"></div>

														<!--Doc: For the chart initialization refer to "widgetTechnologiesChart2" function in "src\theme\app\scripts\custom\dashboard.js" -->
														<canvas id="kt_widget_technologies_chart_2" style="height: 110px; width: 110px;"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
								</div>		
								</div>
								<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Agents</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="kt-portlet__head-wrapper kt-form">
															<div class="kt-form__group kt-form__group--inline kt-margin-r-10">
																
															</div>
															
													
														</div>
													</div>
												</div>
										<div class="row">
											
										
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
									<a href="APM/">
									<div class="kt-portlet kt-portlet--height-fluid">
										
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget-21">
												<div class="kt-widget-21__title">
													<div class="kt-widget-21__label">APM-1</div>
													<img src="controls/img/apm.jpg" class="kt-widget-21__bg" alt="bg" />
												</div>
												<div class="kt-widget-21__data">

													<!--Doc: For the chart legend bullet colors can be changed with state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
													<div class="kt-widget-21__legends">
														<div class="kt-widget-21__legend">
															<span>Agents </span>
															<span class="badge badge-pill badge-info" style="margin-left: 5px; color: white;"><?php include('controls/de.php');?></span>
														</div>
													</div>
													<div class="kt-widget-21__chart">
														<div class="kt-widget-21__stat"></div>

														<!--Doc: For the chart initialization refer to "widgetTechnologiesChart2" function in "src\theme\app\scripts\custom\dashboard.js" -->
														<canvas id="kt_widget_technologies_chart_2" style="height: 110px; width: 110px;"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
								</div>					
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
									<a href="MM/DE/">
									<div class="kt-portlet kt-portlet--height-fluid">
										
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget-21">
												<div class="kt-widget-21__title">
													<div class="kt-widget-21__label">MM-DE</div>
													<img src="controls/img/MM.jpg" class="kt-widget-21__bg" alt="bg" />
												</div>
												<div class="kt-widget-21__data">

													<!--Doc: For the chart legend bullet colors can be changed with state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
													<div class="kt-widget-21__legends">
														<div class="kt-widget-21__legend">
															<span>Agents </span>
															<span class="badge badge-pill badge-info" style="margin-left: 5px; color: white;"><?php include('controls/de.php');?></span>
														</div>
													</div>
													<div class="kt-widget-21__chart">
														<div class="kt-widget-21__stat"></div>

														<!--Doc: For the chart initialization refer to "widgetTechnologiesChart2" function in "src\theme\app\scripts\custom\dashboard.js" -->
														<canvas id="kt_widget_technologies_chart_2" style="height: 110px; width: 110px;"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
								</div>
								<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
									<a href="MM/TC3/">
									<div class="kt-portlet kt-portlet--height-fluid">
										
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget-21">
												<div class="kt-widget-21__title">
													<div class="kt-widget-21__label">MM-TC3</div>
													<img src="controls/img/mm.jpg" class="kt-widget-21__bg" alt="bg" />
												</div>
												<div class="kt-widget-21__data">

													<!--Doc: For the chart legend bullet colors can be changed with state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
													<div class="kt-widget-21__legends">
														<div class="kt-widget-21__legend">
															<span> Agents </span>
															<span class="badge badge-pill badge-info" style="margin-left: 5px; color: white;"><?php include('controls/tc3.php');?> </span>
															
														</div>
														
													</div>
													<div class="kt-widget-21__chart">
														<div class="kt-widget-21__stat"></div>

														<!--Doc: For the chart initialization refer to "widgetTechnologiesChart2" function in "src\theme\app\scripts\custom\dashboard.js" -->
														<canvas id="kt_widget_technologies_chart_2" style="height: 110px; width: 110px;"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
								</div>
													
												
											
								
								
								</div>
									</div>

										</div>
									

                                         
                                    




                                                       
                                                              
  							


	
</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="plusminus.js"></script>



<div class="custom-quantity-input">
  <input type="number" min="0" width="5" name="quantity" class="" value="5">
     <a href="#" class="quantity-btn quantity-input-up">+</a>
     <a href="#" class="quantity-btn quantity-input-down">-</a>
</div>

<script>
$(function(){
  $(".quantity-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);
  });
  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    if ( val == 0 ) return;
    inpt.val(val-1);
  });
});
</script> -->
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

						
						<!--<div class="kt-timeline">

							
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

							
						</div>-->

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
						<img src="../assets/media//demos/preview/demo1.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 2
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media//demos/preview/demo2.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 3
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media//demos/preview/demo3.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 4
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media//demos/preview/demo4.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 5
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media//demos/preview/demo5.png" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 6
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media//demos/preview/demo6.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 7
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media//demos/preview/demo7.jpg" alt="" />
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
						<img src="../assets/media//demos/preview/demo8.jpg" alt="" />
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
						<img src="../assets/media//demos/preview/demo9.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<a href="https://geniworks.com" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
					Contact Us!
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
		<script src="../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<script src="../assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
		<script src="../assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="../assets/js/demo1/pages/crud/forms/controls/avatar.js" type="text/javascript"></script>
            <script>
// $(document).ready(function() {

//   $("#refresh").click(function() {
//      $("#Container").load("controls/disinspection.php");
  
// 	return false;
// 	});
// });

  </script>
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
function GEEKFORGEEKS()								 
{ 
	var subaset = document.forms["RegForm"]["subast1"];			 
	var subasetid = document.forms["RegForm"]["subastid1"]; 
	var aset = document.forms["RegForm"]["ast1"]; 
	var eqpic = document.forms["RegForm"]["eqpic1"]; 
	var cleanyes = document.forms["RegForm"]["cleanyes1"]; 
	var gwyes = document.forms["RegForm"]["gwyes1"]; 

	

	
	if (aset.value == "")						 
	{ 
		window.alert("Please Choose Asset."); 
		aset.focus(); 
		return false; 
	} 

	if (subaset.value == "")								 
	{ 
		window.alert("Please Choose Sub-Asset."); 
		subaset.focus(); 
		return false; 
	} 
	if (subasetid.value == "") 
	{
		window.alert("Please Put ID."); 
		subasetid.focus(); 
		return false;
		} 

	

	if (cleanyes.value == "")					 
	{ 
		window.alert("Please Check If it Clean"); 
		cleanyes.focus(); 
		return false; 
	} 

	if (gwyes.value == "")							 
	{ 
		window.alert("Do You Need To Call Us ?"); 
		gwyes.focus(); 
		return false; 
	}  

	if (eqpic.value == "")				 
	{ 
		alert("Please Take A picture"); 
		eqpic.focus(); 
		return false; 
	} 

	return true; 
}</script> 
<script>
function toggleCheckboxState(className, diabled) {
  var checkboxes = document.getElementsByClassName(className);
  for(var i = 0; i < checkboxes.length; ++i)
  {
      checkboxes[i].disabled  = diabled
  }
}
document.getElementById('checkme2').onclick = function(e) {
	var diabled  = false
  if(this.checked) {
		diabled = true
  }
  toggleCheckboxState('parent', diabled)
}

document.getElementById('checkme1').onclick = function(e) {
	var diabled  = false
  if(this.checked) {
		diabled = true
  }

  toggleCheckboxState('child', diabled)
}


</script>  
							
									

  <script>

// function formcheck() {
//   var fields = $(".ss-item-required")
//         .find("select, textarea, input").serializeArray();
  
//   $.each(fields, function(i, field) {
//     if (!field.value)
//       alert(field.name + ' is required');
//    }); 
//   console.log(fields);
// }

//     $(function () {

//         $('.addast1').on('submit', function (e) {

//          e.preventDefault();

//     var formData = new FormData($(this)[0]);
//         $.ajax({
//            data: formData,
//             type: 'POST',
//             contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
//             processData: false,
//             url: 'controls/addaci.php',
            
//           success: function () {
//             alert(" Cleaning Inspection For: Successefully Recorded");
//             $("#container").load(" #container");
//            }

//           });

//    });

//     });


    </script>
<script type="text/javascript">
			$(document).ready(function () {

    $('#memberModal').modal('show');

});
		</script>
	</body>

	<!-- end::Body -->
		<script src="../assets/js/demo1/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>



</html>

<?php
}

else {
    header("location:../login.php");
}

?>