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
		<title>Employees List | HRM - MyDADJE</title>
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
    <link href="../assets/css/demo1/pages/custom/general/user/profile-v1.css" rel="stylesheet" type="text/css" />

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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">

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




i.inverted.bordered.yellow.icon, i.inverted.circular.yellow.icon{
  background-color:#00A1db!important;
    color: #FFF!important;
}


i.inverted.bordered.orange.icon, i.inverted.circular.orange.icon{


    background-color: #00A1db!important;
    color: #FFF!important;
}


.ui.purple.label, .ui.purple.labels .label {
    background-color: #A333C8 !important;
    border-color: #A333C8 !important;
    color: #FFF!important;
}



.ui.olive.label, .ui.olive.labels .label {
    background-color: #1dc9b7!important;
    border-color: #1dc9b7!important;
    color: #FFF!important;
}






.compound-card {
  display: flex;
  max-width: 100%;
}
.five.cards .compound-card {
  transition: .2s ease-in-out;
  width: 20%;
}
@media (max-width: 1200px) {
  .five.cards .compound-card {
    width: calc(100% / 4);
  }
}
@media (max-width: 991px) {
  .five.cards .compound-card {
    width: calc(100% / 3);
  }
}
@media (max-width: 768px) {
  .five.cards .compound-card {
    width: calc(100% / 2);
  }
}
@media (max-width: 571px) {
  .five.cards .compound-card {
    width: 100%;
  }
}
.compound-card > .card {
  background: white;
  border-radius: 0;
  color: #4d4d4d;
  display: flex;
  flex-direction: column;
  line-height: 1.5rem;
  margin: .75rem .5rem;
  padding: 0;
  position: relative;
  transition: .2s ease-in-out;
  width: 100%;
  min-width: calc(20% - 1rem);
  z-index: 5;
}
.compound-card > .card .content {
  flex-grow: 1;
  padding: 1rem;
}
.compound-card > .card .content .circular.icon {
  margin-top: calc(50% - 3rem);
  position: absolute;
  right: -1rem;
}
@media (max-width: 991px) {
  .compound-card > .card .content .circular.icon {
    display: none;
  }
}
.compound-card > .card .content .header {
  border-bottom: 1px solid transparent;

  transition: .2s ease-in-out;
}
.compound-card > .card .content .header:hover {
  border-color: #1e70bf;
}
.compound-card > .card .content .header:hover:after {
  color: rgba(30, 112, 191, 0.3);
  content: "\f105";
  font-family: "Icons";
  padding-left: .5rem;
}
.compound-card > .card .content .meta {
  color: rgba(128, 128, 128, 0.8);

}
.compound-card > .card .content .meta + .description {
  margin-top: .5rem;
}
.compound-card > .card .extra {
  background: #fff;
  border-top: 1px solid rgba(128, 128, 128, 0.15);
  color: rgba(128, 128, 128, 0.8);
  flex-grow: 1;
  max-width: 100%;
  position: static;
  width: auto;
  margin: 0;
  padding: .75em 1em;
  top: 0;
  left: 0;
  transition: color .1s ease;
}
.compound-card > .card .right.angle {
  color: #00A1db;
  cursor: pointer;
  float: right;
  transition: .2s ease-in-out;
}
.compound-card .expanded {
  background: #fafafa;
  display: none;
  flex-grow: 1;
  flex: 1;
  flex-flow: column;
  margin: .8rem -.65rem .8rem;
  transition: .2s ease-in-out;
}
@media (max-width: 991px) {
  .compound-card .expanded {
    display: none;
  }
}
.compound-card .expanded .content {
  display: flex;
  flex-direction: row;
  flex-grow: 1;
}
.compound-card .expanded .content .main {
  flex: 2;
  padding: 1rem;
}
.compound-card .expanded .content .main p {
  color: grey;
  font-weight: bold;
}
.compound-card .expanded .bar {
  
  background-color: #;
  display: inline-flex;
  max-height: 4rem;
  padding-bottom: 1rem;

}
.compound-card .expanded .bar span {


  margin-left: 1rem;
}
.compound-card .expanded .bar .label {
  margin-right: .5rem;
}
.compound-card .expanded .bar .map-marker {
  float: right;
}
.compound-card .expanded .menu {
  display: flex;
  flex-direction: column;
}
.compound-card .expanded.expanding {
  animation: flexGrow .2s ease-in-out forwards;
  display: flex;
  flex: .00001;
  width: 80%;
}

.fadeIn {
  animation: fadeIn .5s ease-in-out;
}

.spotlight {
  width: calc(100% - .75rem);
  max-width: 100%;
  position: relative;
  z-index: 100;
}
.spotlight > .card {
  max-width: calc(20% - .75rem) !important;
  box-shadow: 0.5rem 0 1rem rgba(0, 0, 0, 0.1);
}

.dimmed {
  opacity: .1;
}

@keyframes flexGrow {
  to {
    flex: 1;
  }
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
body {
  background-color: #f2f3f8;

  margin: 2%;
}



.ui .container {margin: 50px;}

i.orange.icon {
    color: #fd397a!important;
}
</style>
<style>
.filterDiv {
 
  display: none;
}

.show {
  display: flex;
}




.btn.activated {
  background-color: #1a3672;
  color: white;
}

.myBtnContainer{
  float: right;
  display: inline-block;
}


.ui.five.cards {
   margin-left:0 !important ; 
   margin-right: 0 !important; 
}

.ui.cards {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    margin: 0 !important;
    flex-wrap: wrap;
}
@media (max-width: 991px) {
  .col-md-1, .col-md-3, .col-md-5, .col-md-2{
    padding-bottom: 3px;
  }
}
.yellow{
  color: #ffe045;

}


</style>
	</head>

	<body onload="hola(11);" class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="../shortcuts.php">
					<img alt="Logo" src="../img/logo.png" width="50" />
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


				<!-- end:: Aside -->
  <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

          <!-- begin::Aside Brand -->
          <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
            <div class="kt-aside__brand-logo">
              <a href="../shortcuts.php">
                <img alt="Logo" src="../img/logo.png" width="250"/>
              </a>
            </div>
            <div class="kt-aside__brand-tools">
             
            </div>
          </div>

          <!-- end:: Aside Brand -->

          <?php



      include('aside-menu.php');
    ?>


          <!-- begin:: Aside Menu -->
        
        </div>
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
            <div class="kt-subheader   kt-grid__item" id="kt_subheader" style="padding-top:  5px;">
              <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Dashboard</h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                  <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                  <span class="kt-subheader__breadcrumbs-separator"></span>
                  <a href="" class="kt-subheader__breadcrumbs-link">
                    HR Manager </a>
                  <span class="kt-subheader__breadcrumbs-separator"></span>
                  <a href="" class="kt-subheader__breadcrumbs-link">
                    Employees </a>
  
                  <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                </div>
              </div>
              
            </div>
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							
   <div class="form-group form-group-last">
                          <div class="alert alert-secondary" role="alert">
                            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                            <div class="alert-text">
                              Nothing to report. All is Good <strong>:)</strong>
                            </div>
                          </div>
                        </div>



                        <div class="kt-portlet" style="    -webkit-box-shadow: 0px 0px 0px 0px rgba(82, 63, 105, 0.05);box-shadow: 0px 0px 0px 0px rgba(82, 63, 105, 0.05);">
                         
                           <div class="kt-portlet__body" style="background-color: white; padding-top: 0 !important;padding-left: 20px; padding-bottom: 0 !important;">
                         
                            <div class="row">
                              
                            <div class="col-md-12">

                      <div class="accordion accordion-light" id="accordionExample5" style="height: 100%;">
                        <div class="card">
                          <div class="card-header" id="headingOne5">
                            <div class="card-title" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5" style="float: right;">
                              <i class="flaticon2-layers"></i> Filters
                            </div>
                          </div>
                          <div id="collapseOne5" class="collapse" aria-labelledby="headingOne5" data-parent="#accordionExample5" style="">
                            <div class="card-body">
                                      <div class="kt-input-icon kt-input-icon--left" style="width: 200px;" >
                                <input type="text"id="myInput" onkeyup="myFunction()" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                  <span><i class="la la-binoculars"></i></span>
                                </span>
                              </div>
                              <span class="form-text text-muted">Find results by name</span>
                              <hr>
                               <div id="myBtnContainer">
                                <div class="row">
                                  <div class="col-md-1">
                                <button class="btn btn-sm btn-brand activated" onclick="filterSelection('all')">All</button>
                              </div>
                               <div class="col-md-3">
                                 <div class="btn-group" role="group" aria-label="Medium group">
                                  <button class="btn btn-sm btn-secondary" disabled>by type</button>
                                    <button class="btn btn-sm btn-brand" onclick="filterSelection('CDI')">CDI</button>
                                    <button class="btn btn-sm btn-brand" onclick="filterSelection('CDD')">CDD</button>
                                  </div>
                                </div>
                              <div class="col-md-3">
                                

                                <div class="btn-group-vertical" style="z-index: 1000000000;">
                                
                                <div class="btn-group" role="group" style="z-index: 1000000000;">
                                  <button id="btnGroupDrop2" type="button" class="btn btn-sm btn-brand dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="z-index: 1000000000;">
                                    By contract
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop2" style="z-index: 1000000000;">
                                    <a class="dropdown-item"  onclick="filterSelection('11')" href="javascript:void(0)">APM</a>
                                    <a class="dropdown-item"  onclick="filterSelection('21')" href="javascript:void(0)">EUROGATE</a>
                                    <a class="dropdown-item" onclick="filterSelection('31')" href="javascript:void(0)">MARSA MAROC</a>
                                    <a class="dropdown-item" onclick="filterSelection('32')" href="javascript:void(0)">EUROGATE</a>
                                    <a class="dropdown-item" onclick="filterSelection('41')" href="javascript:void(0)">HTTSA</a>
                                    <a class="dropdown-item" onclick="filterSelection('51')" href="javascript:void(0)">Brave boys</a>
                                  </div>
                                </div>
                                
                              </div>
                              </div>
                             
                                <div class="col-md-5">
                                 <div class="btn-group" role="group" aria-label="Medium group">
                                  <button class="btn btn-sm btn-secondary" disabled>by Job Title</button>
                                    <button class="btn btn-sm btn-brand" onclick="filterSelection('Operator')">Operator</button>
                                    <button class="btn btn-sm btn-brand" onclick="filterSelection('Supervisor')">Team Leader</button>
                                    <button class="btn btn-sm btn-brand" onclick="filterSelection('Section Manager')">Section manager</button>
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
              <div class="ui container" style="padding-right: 0;padding-left: 0;">
                          <hr>




                      
                     





  <div class="ui five cards"  id="myUL">
    
<?php include("controls/card.php");?>
  </div>

</div>
<br>
             
                                    




                                                       
                                                              
  							


	
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

	

		<!-- end:: Quick Panel -->

		<!-- begin:: Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end:: Scrolltop -->

		<!-- begin:: Demo Toolbar -->
		

		<!-- end:: Demo Toolbar -->

		<!-- begin::Demo Panel -->
		

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
<script>
filterSelection("all")
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
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("activated");
    current[0].className = current[0].className.replace(" activated", "");
    this.className += " activated";
  });
}
</script>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByClassName("card");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
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


    <script src="../assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
    <script src="../assets/js/demo1/pages/custom/general/profile.js" type="text/javascript"></script>
            <script>
// $(document).ready(function() {

//   $("#refresh").click(function() {
//      $("#Container").load("controls/disinspection.php");
  
// 	return false;
// 	});
// });

  </script>
 
							
									

  <script>
    $(function() {
  $('.right.angle:not(.red)').on('click', function() {
    var self = $(this),
        card = self.parents('.compound-card'),
        cardXY = card.position(),
        newCard = card.clone(),
        row = $('.five.cards'),
        rowXY = row.position(),
        w = row.width();
    
    newCard 
      .insertBefore(card)
      .css({
        'position': 'absolute',
        'top': cardXY.top,
        'left': cardXY.left,
        'z-index': 100,
        'width': (w - 10) + 'px'
      })
      .toggleClass('spotlight')
      .animate({
          left: (rowXY.left  - 10) + 'px'
        })  
      .find('.right.angle')
      .toggleClass('horizontally flipped orange yellow')
      .parents('.card')
      .next()
      .toggleClass('expanding');

    var active = $('.spotlight'),
        cards = $('.compound-card:not(.spotlight)');

    active.length > 0 ? cards.toggleClass('dimmed') : cards.removeClass('dimmed');
  });
  
  $(document).on('click', '.horizontally.flipped.icon', function() {
    var self = $(this),
        card = self.parents('.compound-card');
    
    card.remove();    
    $('.compound-card').removeClass('dimmed');
  });  
  
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