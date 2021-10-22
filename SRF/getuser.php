<!DOCTYPE html>


<html lang="en">

	<!-- begin::Head -->
	<head>

		
		<meta charset="utf-8" />
		<title>SRF | Resources Control Manager</title>
		<meta name="description" content="">
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


		<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/pages/custom/general/user/profile-v1.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />		
		
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

		<link href="assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<link href="assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />

		<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

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

		<link href="assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<link href="assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />


		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
									<style>
							@import url("https://fonts.googleapis.com/css?family=Open+Sans");


.header {
  background: #746cc0;
  width: 100%;
  height: 75px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding: 15px;
  font-weight: 600;
  font-size: 0.9em;
  color: white;
}

.header--thin {
  font-weight: 500;
  font-size: 0.7em;
}

.header--right {
  text-align: right;
}

.graph {
  background: white;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.graph__index {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 30px;
  width: 100%;
  margin-right: 45px;
}

.graph__rbox {
  width: 10px;
  height: 0px;
  border: 1px solid #645ca1;
}

.graph__smtext {
  font-size: 0.55em;
  margin-left: 5px;
}

.graph__bbox {
  width: 10px;
  height: 0px;
  border: 1px solid #00c5dc;
  margin-left: 15px;
}
.graph__gbox {
  width: 10px;
  height: 0px;
  border: 1px solid #9816f4;
  margin-left: 15px;
}

.graph__redline {
  height: 75px;
  border-top: 1px solid #eee;
  border-bottom: 1px solid #eee;
  position: relative;
  width: 90%;
  z-index: 3;
}
.graph__redline polyline {
  stroke: #645ca1;
  fill: none;
  stroke-width: 0;
}
.graph__redline .point {
  background: #645ca1;
}
.graph__redline .point__line {
  width: 100%;
  height: 100%;
  position: relative;
}
s
.graph__redline .point--one {
  bottom: -1px;
   left: 14%;
}
.graph__redline .point--two {
  bottom: 15px;
  left: 28%;
}
.graph__redline .point--three {
  bottom: 5px;
  left: 42%;
}
.graph__redline .point--four {
  bottom: 45px;
  left: 56%;
}
.graph__redline .point--five {
  bottom: 30px;
  left: 70%;
}
.graph__redline .point--six {
  bottom: 50px;
   left: 84%;
}
.graph__redline .point--seven {
  bottom: 55px;
   left: 98%;
}
.graph__redline .point__bubble {
  background: #645ca1;
}

.point {
  position: absolute;
  width: 8px;
  height: 8px;
  border-radius: 50%;
}
.point:hover {
  cursor: pointer;
}
.point:hover .point__bubble {
  display: flex;
}

svg {
  position: absolute;
  top: 0px;
  left: 0;
  width: inherit;
  height: 120%;
}

.point__bubble {
  position: absolute;
  bottom: 15px;
  left: 0;
  transform: translateX(-50%);
  display: none;
  align-items: center;
  justify-content: center;
  color: white;
  width: auto;
  padding: 3px;
  height: 25px;
  border-radius: 5px;
  z-index: 3;
}

.graph__blueline {
  height: 75px;
  border-bottom: 1px solid #eee;
  width: 95%;
  position: relative;
  width: 90%;
}
.graph__blueline polyline {
  stroke: #00c5dc;
  fill: none;
  stroke-width: 0;
}
.graph__blueline .point {
  position: absolute;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #00c5dc;
}
.graph__blueline .point--one {
  bottom: 25px;
   left: 14%;
}
.graph__blueline .point--two {
  bottom: -10px;
  left: 28%;
}
.graph__blueline .point--three {
  bottom: 15px;
  left: 42%;
}
.graph__blueline .point--four {
  bottom: 5px;
  left: 56%;
}
.graph__blueline .point--five {
  bottom: 40px;
  left: 70%;
}
.graph__blueline .point--six {
  bottom: 30px;
   left: 84%;
}
.graph__blueline .point--seven {
  bottom: 45px;
   left: 98%;
}
.graph__blueline .point__bubble {
  background: #00c5dc;
}




.graph__greenline {
  height: 75px;
  border-bottom: 1px solid #eee;
  width: 95%;
  position: relative;
  width: 90%;
}
.graph__greenline polyline {
  stroke: green;
  fill: none;
  stroke-width: 0;
}
.graph__greenline .point {
  position: absolute;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #9816f4;
}
.graph__greenline .point--one {
  bottom: 5px;
   left: 14%;
}
.graph__greenline .point--two {
  bottom: -1px;
  left: 28%;
}
.graph__greenline .point--three {
  bottom: 15px;
  left: 42%;
}
.graph__greenline .point--four {
  bottom: 7px;
  left: 56%;
}
.graph__greenline .point--five {
  bottom: 4px;
  left: 70%;
}
.graph__greenline .point--six {
  bottom: 10px;
   left: 84%;
}
.graph__greenline .point--seven {
  bottom: 0px;
   left: 98%;
}
.graph__greenline .point__bubble {
  background: #9816f4;
}





.graph__days {
  width: 100%;
  display: flex;
  justify-content: space-around;
  align-items: center;
  font-size: 0.6em;
  color: #666;
  height: 45px;
}
	
							</style>	
	</head>
<body>

<?php
$q = intval($_GET['q']);

require("controls/zdfzfzef/de5.php");
if (!$cdb) {
    die('Could not connect: ' . mysqli_error($cdb));
}

if ($q=="11") {

mysqli_select_db($cdb,"ajax_demo");
$sqlct="SELECT count(wtl_name) FROM work_tools WHERE wtl_owner = '".$q."'";
$resultct = mysqli_query($cdb,$sqlct);

mysqli_select_db($cdb,"ajax_demo");
$sqlcm="SELECT count(wmt_name) FROM work_materials WHERE wmt_owner = '".$q."'";
$resultcm = mysqli_query($cdb,$sqlcm);

mysqli_select_db($cdb,"ajax_demo");
$sqlcc="SELECT count(wch_name) FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultcc = mysqli_query($cdb,$sqlcc);

mysqli_select_db($cdb,"ajax_demo");
$sqlca="SELECT count(wape_name) FROM work_ape WHERE wape_owner = '".$q."'";
$resultca = mysqli_query($cdb,$sqlca);

mysqli_select_db($cdb,"ajax_demo");
$sqlcp="SELECT count(wppe_name) FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultcp = mysqli_query($cdb,$sqlcp);



mysqli_select_db($cdb,"ajax_demo");
$sql="SELECT wtl_name,wtl_quantity,wtl_id FROM work_tools WHERE wtl_owner = '".$q."'";
$resultt = mysqli_query($cdb,$sql);

mysqli_select_db($cdb,"ajax_demo");
$sqlm="SELECT wmt_name,wmt_quantity FROM work_materials WHERE wmt_owner = '".$q."'";
$resultm = mysqli_query($cdb,$sqlm);

mysqli_select_db($cdb,"ajax_demo");
$sqlc="SELECT wch_name,wch_quantity FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultc = mysqli_query($cdb,$sqlc);

mysqli_select_db($cdb,"ajax_demo");
$sqlp="SELECT wppe_name,wppe_quantity FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultp = mysqli_query($cdb,$sqlp);

mysqli_select_db($cdb,"ajax_demo");
$sqla="SELECT wape_name,wape_quantity FROM work_ape WHERE wape_owner = '".$q."'";
$resulta = mysqli_query($cdb,$sqla);
?>

		<div class="kt-portlet kt-profile">
								<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="../img/apple-touch-icon.png" alt="">
													<label class="kt-profile__main-pic-upload">
														<i class="flaticon-photo-camera"></i>
													</label>
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name">APM-1</div>
													<div class="kt-profile__main-info-position">ID</div>
													<div class="kt-profile__main-info-position">Tangier</div>
												</div>
											</div>

										</div>
										<div class="col-md-3 col-lg-3 col-xl-3">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">13 Humans</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowct=mysqli_fetch_array($resultct)) {echo $rowct[0];}?> tools</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcm=mysqli_fetch_array($resultcm)) {echo $rowcm[0];}?> materials</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcc=mysqli_fetch_array($resultcc)) {echo $rowcc[0];}?> Chemicals</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcp=mysqli_fetch_array($resultcp)) {echo $rowcp[0];}?> PPE</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowca=mysqli_fetch_array($resultca)) {echo $rowca[0];}?> APE</span>
												</a>
											</div>
										</div>
										<div class="col-md-4 col-lg-4 col-xl-4">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">3 Spplies</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text">2 SRF</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text">13 Inspections</span>
												</a>
											</div>
										</div>
										
									</div>
								</div>
							</div>										
<style>
	.table > tbody > tr > td {
     vertical-align: middle;
}
</style>
							<table class="table table-bordered">
								<tbody>
									<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsetools" role="button" aria-expanded="true" aria-controls="multiCollapsetools"><h5>Tools  <i class="la la-ellipsis-v"></i></h5></a>
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsetools" style="">
																<div class="card card-body">
											<?php
											while($rowt = mysqli_fetch_array($resultt)) {
											?>
											<span><?php echo $rowt['wtl_name'];?> 
												<?php if ($rowt['wtl_quantity']<=1) {
												?>
												<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> 

												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm1<?php echo $rowt['wtl_id']?>"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowt['wtl_quantity']<=5 && $rowt['wtl_quantity']>=2) {
												?>
												<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> 

												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm1"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a> 
												<?php 
												}
												 if ($rowt['wtl_quantity']>5 && $rowt['wtl_quantity']<10) {
												?>
												<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> 

												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm1"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowt['wtl_quantity']>=10) {
												?>
												<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> 

												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm1"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>


				<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsetools" role="button" aria-expanded="true" aria-controls="multiCollapsetools"><h5>Reporting  <i class="la la-ellipsis-v"></i></h5></a>
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsetools" style="">
																<div class="card card-body">
											<div class="center">
    <div class="container">
   <div class="header">
        <div class="header--left">
          <div>WEEKLY REPORT</div>
          <div class="header--thin">May 4 - May 11th</div>
        </div>
        <div class="header--right">
          
          <div>Tools</div>
        </div>
      </div>
      <div class="graph">
        <div class="graph__index">
          <div class="graph__rbox"></div>
          <div class="graph__smtext">Brosse</div>
          <div class="graph__bbox"></div>
          <div class="graph__smtext">Chiffon</div>
          <div class="graph__gbox"></div>
          <div class="graph__smtext">Raclette</div>
        </div>
        <div class="graph__redline">
          <div class="point__line">
            <svg>
              <polyline points="10,12 90,5 96,63 140,23 182,40 221,19 263,14" />
            </svg>
          </div>
          <div class="point point--one">
            <div class="point__bubble">-35</div>
          </div>
          <div class="point point--two">
            <div class="point__bubble">104</div>
          </div>
          <div class="point point--three">
            <div class="point__bubble">78</div>
          </div>
          <div class="point point--four">
            <div class="point__bubble">245</div>
          </div>
          <div class="point point--five">
            <div class="point__bubble">197</div>
          </div>
          <div class="point point--six">
            <div class="point__bubble">289</div>
          </div>
          <div class="point point--seven">
            <div class="point__bubble">312</div>
          </div>
        </div>
        <div class="graph__blueline">
          <div class="point__line">
            <svg>
              <polyline points="10,45 51,80 96,56 140,66 182,30 221,42 263,25" />
            </svg>
          </div>
          <div class="point point--one">
            <div class="point__bubble">250</div>
          </div>
          <div class="point point--two">
            <div class="point__bubble">-85</div>
          </div>
          <div class="point point--three">
            <div class="point__bubble">180</div>
          </div>
          <div class="point point--four">
            <div class="point__bubble">127</div>
          </div>
          <div class="point point--five">
            <div class="point__bubble">340</div>
          </div>
          <div class="point point--six">
            <div class="point__bubble">289</div>
          </div>
          <div class="point point--seven">
            <div class="point__bubble">362</div>
          </div>
        </div>
        <div class="graph__greenline">
          <div class="point__line">
            <svg>
              <polyline points="10,45 51,80 96,56 140,66 182,30 221,42 263,25" />
            </svg>
          </div>
          <div class="point point--one">
            <div class="point__bubble">5</div>
          </div>
          <div class="point point--two">
            <div class="point__bubble">-2</div>
          </div>
          <div class="point point--three">
            <div class="point__bubble">180</div>
          </div>
          <div class="point point--four">
            <div class="point__bubble">127</div>
          </div>
          <div class="point point--five">
            <div class="point__bubble">71</div>
          </div>
          <div class="point point--six">
            <div class="point__bubble">15</div>
          </div>
          <div class="point point--seven">
            <div class="point__bubble">1</div>
          </div>
        </div>
        <div class="graph__days">
          <div class="day">MON</div>
          <div class="day">TUE</div>
          <div class="day">WED</div>
          <div class="day">THU</div>
          <div class="day">FRI</div>
          <div class="day">SAT</div>
          <div class="day">SUN</div>
        </div>
      </div>
    </div>
  </div>
																</div>
															</div>
														</div>
													</div>
												</div>
  

												     

											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsemat" role="button" aria-expanded="true" aria-controls="multiCollapsemat"><h5>Materials  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsemat" style="">
																<div class="card card-body">
																<?php
											while($rowmt = mysqli_fetch_array($resultm)) {  
											?>
											<span><?php echo $rowmt['wmt_name'];?> 
												<?php if ($rowmt['wmt_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm1"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowmt['wmt_quantity']<=5 && $rowmt['wmt_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm1"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowmt['wmt_quantity']>5 && $rowmt['wmt_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm1"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowmt['wmt_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm1"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#materialsmodalapm1">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsechem" role="button" aria-expanded="true" aria-controls="multiCollapsechem"><h5>Chemicals  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsechem" style="">
																<div class="card card-body">
											<?php
											while($rowc = mysqli_fetch_array($resultc)) {
											?>
											<span><?php echo $rowc['wch_name'];?> 
												<?php if ($rowc['wch_quantity']<1) {
												?>
												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm1"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowc['wch_quantity']<=5 && $rowc['wch_quantity']>=2) {
												?>

												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm1"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowc['wch_quantity']>5 && $rowc['wch_quantity']<10) {
												?>
												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm1"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowc['wch_quantity']>=10) {
												?>
												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm1"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#chemicalsmodalapm1">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseppe" role="button" aria-expanded="true" aria-controls="multiCollapseppe"><h5>PPE  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseppe" style="">
																<div class="card card-body">
																	
											<?php
											while($rowp = mysqli_fetch_array($resultp)) {  
											?>
											<span><?php echo $rowp['wppe_name'];?> 
												<?php if ($rowp['wppe_quantity']<1) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm1"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowp['wppe_quantity']<=5 && $rowp['wppe_quantity']>=2) {
												?>

												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm1"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>5 && $rowp['wppe_quantity']<10) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm1"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>=10) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm1"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#ppemodalapm1">Details</button>
											</td>
										</tr>
										<tr>
											<td style="width: 50%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseape" role="button" aria-expanded="true" aria-controls="multiCollapseape"><h5>APE <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseape" style="">
																<div class="card card-body">
																	
										<?php
											while($rowa = mysqli_fetch_array($resulta)) {  
											?>
											<span><?php echo $rowa['wape_name'];?> 
												<?php if ($rowa['wape_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm1"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowa['wape_quantity']<=5 && $rowa['wape_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm1"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowa['wape_quantity']>5 && $rowa['wape_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm1"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowa['wape_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm1"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</a></span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											 </td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#apemodalapm1">Details</button>
											</td>
										</tr>
										
									</tbody>
											


										
									</table>

<div class="modal fade bd-example-modal-xl" id="toolsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/apm1/details/detailst.php')?>
													</div>
<div class="modal fade" id="materialsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<?php include('controls/apm1/details/detailsm.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="chemicalsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/apm1/details/detailsc.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="ppemodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/apm1/details/detailsp.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="apemodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/apm1/details/detailsa.php')?>
													</div>


<div class="modal fade bd-example-modal-sm" id="toolsinsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tool inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm1/showtools.php');?>

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="toolsinsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tool inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm1/showmats.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="cheminsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Chemical inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm1/showchemicals.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="ppeinsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">PPE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm1/showppe.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="apeinsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">APE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm1/showape.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>


<?php }
if ($q=="12") {

mysqli_select_db($cdb,"ajax_demo");
$sqlct="SELECT count(wtl_name) FROM work_tools WHERE wtl_owner = '".$q."'";
$resultct = mysqli_query($cdb,$sqlct);

mysqli_select_db($cdb,"ajax_demo");
$sqlcm="SELECT count(wmt_name) FROM work_materials WHERE wmt_owner = '".$q."'";
$resultcm = mysqli_query($cdb,$sqlcm);

mysqli_select_db($cdb,"ajax_demo");
$sqlcc="SELECT count(wch_name) FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultcc = mysqli_query($cdb,$sqlcc);

mysqli_select_db($cdb,"ajax_demo");
$sqlca="SELECT count(wape_name) FROM work_ape WHERE wape_owner = '".$q."'";
$resultca = mysqli_query($cdb,$sqlca);

mysqli_select_db($cdb,"ajax_demo");
$sqlcp="SELECT count(wppe_name) FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultcp = mysqli_query($cdb,$sqlcp);

mysqli_select_db($cdb,"ajax_demo");
$sql="SELECT wtl_name,wtl_quantity FROM work_tools WHERE wtl_owner = '".$q."'";
$result = mysqli_query($cdb,$sql);

mysqli_select_db($cdb,"ajax_demo");
$sqlm="SELECT wmt_name,wmt_quantity FROM work_materials WHERE wmt_owner = '".$q."'";
$resultm = mysqli_query($cdb,$sqlm);

mysqli_select_db($cdb,"ajax_demo");
$sqlc="SELECT wch_name,wch_quantity FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultc = mysqli_query($cdb,$sqlc);

mysqli_select_db($cdb,"ajax_demo");
$sqlp="SELECT wppe_name,wppe_quantity FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultp = mysqli_query($cdb,$sqlp);
mysqli_select_db($cdb,"ajax_demo");
$sqla="SELECT wape_name,wape_quantity FROM work_ape WHERE wape_owner = '".$q."'";
$resulta = mysqli_query($cdb,$sqla);
?>

		<div class="kt-portlet kt-profile">
								<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="img/apple-touch-icon.png" alt="">
													<label class="kt-profile__main-pic-upload">
														<i class="flaticon-photo-camera"></i>
													</label>
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name">APM-2</div>
													<div class="kt-profile__main-info-position">ID</div>
													<div class="kt-profile__main-info-position">Tangier</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-lg-3 col-xl-3">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowct=mysqli_fetch_array($resultct)) {echo $rowct[0];}?> tools</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcm=mysqli_fetch_array($resultcm)) {echo $rowcm[0];}?> materials</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcc=mysqli_fetch_array($resultcc)) {echo $rowcc[0];}?> Chemicals</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcp=mysqli_fetch_array($resultcp)) {echo $rowcp[0];}?> PPE</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowca=mysqli_fetch_array($resultca)) {echo $rowca[0];}?> APE</span>
												</a>
											</div>
										</div>
										<div class="col-md-4 col-lg-4 col-xl-4">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">3 Spplies</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text">=2 SRF</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text">13 Inspections</span>
												</a>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>										
<style>
	.table > tbody > tr > td {
     vertical-align: middle;
}
</style>


									<table class="table table-bordered">
								<tbody>
									<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsetools" role="button" aria-expanded="true" aria-controls="multiCollapsetools"><h5>Tools  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsetools" style="">
																<div class="card card-body">
														<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wtl_name'];?> 
												<?php if ($row['wtl_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wtl_quantity']<=5 && $row['wtl_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wtl_quantity']>5 && $row['wtl_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wtl_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
  
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#toolsmodalapm2">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsemat" role="button" aria-expanded="true" aria-controls="multiCollapsemat"><h5>Materials  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsemat" style="">
																<div class="card card-body">
																<?php
											while($rowm = mysqli_fetch_array($resultm)) {  
											?>
											<span><?php echo $rowm['wmt_name'];?> 
												<?php if ($rowm['wmt_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowm['wmt_quantity']<=5 && $rowm['wmt_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowm['wmt_quantity']>5 && $rowm['wmt_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowm['wmt_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#materialsmodalapm2">Details</button> 
											</td>
										</tr>
										
										<tr>
											

											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsechem" role="button" aria-expanded="true" aria-controls="multiCollapsechem"><h5>Chemicals  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsechem" style="">
																<div class="card card-body">
															<?php
											while($rowc = mysqli_fetch_array($resultc)) {  
											?>
											<span><?php echo $rowc['wch_name'];?> 
												<?php if ($rowc['wch_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowc['wch_quantity']<=5 && $rowc['wch_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowc['wch_quantity']>5 && $rowc['wch_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowc['wch_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#chemicalsmodalapm2">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseppe" role="button" aria-expanded="true" aria-controls="multiCollapseppe"><h5>PPE  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseppe" style="">
																<div class="card card-body">
																	
											<?php
											while($rowp = mysqli_fetch_array($resultp)) {  
											?>
											<span><?php echo $rowp['wppe_name'];?> 
												<?php if ($rowp['wppe_quantity']<1) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowp['wppe_quantity']<=5 && $rowp['wppe_quantity']>=2) {
												?>

												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>5 && $rowp['wppe_quantity']<10) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>=10) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#ppemodalapm2">Details</button>
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseape" role="button" aria-expanded="true" aria-controls="multiCollapseape"><h5>APE <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseape" style="">
																<div class="card card-body">
																	
											<?php
											while($rowa = mysqli_fetch_array($resulta)) {  
											?>
											<span><?php echo $rowa['wape_name'];?> 
												<?php if ($rowa['wape_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowa['wape_quantity']<=5 && $rowa['wape_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowa['wape_quantity']>5 && $rowa['wape_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowa['wape_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</a></span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											 </td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#apemodalapm2">Details</button>
											</td>
										</tr>
										
									</tbody>
								</table>

<div class="modal fade bd-example-modal-xl" id="toolsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/apm2/details/detailst.php')?>
													</div>
<div class="modal fade" id="matsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<?php include('controls/apm2/details/detailsm.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="chemicalsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/apm2/details/detailsc.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="ppemodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/apm2/details/detailsp.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="apemodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/apm2/details/detailsa.php')?>
													</div>


<div class="modal fade bd-example-modal-sm" id="toolsinsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tool inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/showtools.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="matsinsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Material inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/showmat.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="cheminsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Chemical inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/showchemicals.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="ppeinsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">PPE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/showppe.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="apeinsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">APE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/showape.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

		<?php }


if ($q=="21") {
mysqli_select_db($cdb,"ajax_demo");
$sqlct="SELECT count(wtl_name) FROM work_tools WHERE wtl_owner = '".$q."'";
$resultct = mysqli_query($cdb,$sqlct);

mysqli_select_db($cdb,"ajax_demo");
$sqlcm="SELECT count(wmt_name) FROM work_materials WHERE wmt_owner = '".$q."'";
$resultcm = mysqli_query($cdb,$sqlcm);

mysqli_select_db($cdb,"ajax_demo");
$sqlcc="SELECT count(wch_name) FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultcc = mysqli_query($cdb,$sqlcc);

mysqli_select_db($cdb,"ajax_demo");
$sqlca="SELECT count(wape_name) FROM work_ape WHERE wape_owner = '".$q."'";
$resultca = mysqli_query($cdb,$sqlca);

mysqli_select_db($cdb,"ajax_demo");
$sqlcp="SELECT count(wppe_name) FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultcp = mysqli_query($cdb,$sqlcp);

mysqli_select_db($cdb,"ajax_demo");
$sql="SELECT wtl_name,wtl_quantity FROM work_tools WHERE wtl_owner = '".$q."'";
$result = mysqli_query($cdb,$sql);

mysqli_select_db($cdb,"ajax_demo");
$sqlm="SELECT wmt_name,wmt_quantity FROM work_materials WHERE wmt_owner = '".$q."'";
$resultm = mysqli_query($cdb,$sqlm);

mysqli_select_db($cdb,"ajax_demo");
$sqlc="SELECT wch_name,wch_quantity FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultc = mysqli_query($cdb,$sqlc);

mysqli_select_db($cdb,"ajax_demo");
$sqlp="SELECT wppe_name,wppe_quantity FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultp = mysqli_query($cdb,$sqlp);

mysqli_select_db($cdb,"ajax_demo");
$sqla="SELECT wape_name,wape_quantity FROM work_ape WHERE wape_owner = '".$q."'";
$resulta = mysqli_query($cdb,$sqla);
?>

		<div class="kt-portlet kt-profile">
								<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="img/apple-touch-icon.png" alt="">
													<label class="kt-profile__main-pic-upload">
														<i class="flaticon-photo-camera"></i>
													</label>
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name">EUROGATE</div>
													<div class="kt-profile__main-info-position">ID</div>
													<div class="kt-profile__main-info-position">Tangier</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-lg-3 col-xl-3">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">13 Humans</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowct=mysqli_fetch_array($resultct)) {echo $rowct[0];}?> tools</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcm=mysqli_fetch_array($resultcm)) {echo $rowcm[0];}?> materials</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcc=mysqli_fetch_array($resultcc)) {echo $rowcc[0];}?> Chemicals</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcp=mysqli_fetch_array($resultcp)) {echo $rowcp[0];}?> PPE</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowca=mysqli_fetch_array($resultca)) {echo $rowca[0];}?> APE</span>
												</a>
											</div>
										</div>
										<div class="col-md-4 col-lg-4 col-xl-4">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">3 Spplies</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text">2 SRF</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text">13 Inspections</span>
												</a>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>										
<style>
	.table > tbody > tr > td {
     vertical-align: middle;
}
</style>


									<table class="table table-bordered">
								<tbody>
									<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsetools" role="button" aria-expanded="true" aria-controls="multiCollapsetools"><h5>Tools  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsetools" style="">
																<div class="card card-body">
														<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wtl_name'];?> 
												<?php if ($row['wtl_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodaleg"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wtl_quantity']<=5 && $row['wtl_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodaleg"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wtl_quantity']>5 && $row['wtl_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodaleg"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wtl_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodaleg"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
  
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#toolsmodaleg">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsemat" role="button" aria-expanded="true" aria-controls="multiCollapsemat"><h5>Materials  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsemat" style="">
																<div class="card card-body">
														<?php
											while($rowm = mysqli_fetch_array($resultm)) {  
											?>
											<span><?php echo $rowm['wmt_name'];?> 
												<?php if ($rowm['wmt_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodaleg"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowm['wmt_quantity']<=5 && $rowm['wmt_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodaleg"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowm['wmt_quantity']>5 && $rowm['wmt_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodaleg"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowm['wmt_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodaleg"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#matsmodaleg">Details</button> 
											</td>
										</tr>
										
										<tr>
											

											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsechem" role="button" aria-expanded="true" aria-controls="multiCollapsechem"><h5>Chemicals  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsechem" style="">
																<div class="card card-body">
													<?php
											while($rowc = mysqli_fetch_array($resultc)) {  
											?>
											<span><?php echo $rowc['wch_name'];?> 
												<?php if ($rowc['wch_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodaleg"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowc['wch_quantity']<=5 && $rowc['wch_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodaleg"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowc['wch_quantity']>5 && $rowc['wch_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodaleg"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowc['wch_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodaleg"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#chemicalsmodaleg">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseppe" role="button" aria-expanded="true" aria-controls="multiCollapseppe"><h5>PPE  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseppe" style="">
																<div class="card card-body">
																	
											<?php
											while($rowp = mysqli_fetch_array($resultp)) {  
											?>
											<span><?php echo $rowp['wppe_name'];?> 
												<?php if ($rowp['wppe_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodaleg"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowp['wppe_quantity']<=5 && $rowp['wppe_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodaleg"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>5 && $rowp['wppe_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodaleg"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodaleg"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#ppemodaleg">Details</button>
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseape" role="button" aria-expanded="true" aria-controls="multiCollapseape"><h5>APE <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseape" style="">
																<div class="card card-body">
																	
											<?php
											while($rowa = mysqli_fetch_array($resulta)) {  
											?>
											<span><?php echo $rowa['wape_name'];?> 
												<?php if ($rowa['wape_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodaleg"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowa['wape_quantity']<=5 && $rowa['wape_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodaleg"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowa['wape_quantity']>5 && $rowa['wape_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodaleg"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowa['wape_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodaleg"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											 </td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#apemodaleg">Details</button>
											</td>
										</tr>
										
									</tbody>
																					
									</table>

<div class="modal fade bd-example-modal-xl" id="toolsmodaleg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/eg/details/detailst.php')?>
													</div>
<div class="modal fade" id="matsmodaleg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<?php include('controls/eg/details/detailsm.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="chemicalsmodaleg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/eg/details/detailsc.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="ppemodaleg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/eg/details/detailsp.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="apemodaleg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/eg/details/detailsa.php')?>
													</div>


<div class="modal fade bd-example-modal-sm" id="toolsinsmodaleg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tool inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/eg/showtools.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="matsinsmodaleg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Material inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/eg/showmat.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="cheminsmodaleg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Chemical inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/eg/showchemicals.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="ppeinsmodaleg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">PPE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/eg/showppe.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="apeinsmodaleg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">APE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/eg/showape.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
		<?php }


if ($q=="31") {
mysqli_select_db($cdb,"ajax_demo");
$sqlct="SELECT count(wtl_name) FROM work_tools WHERE wtl_owner = '".$q."'";
$resultct = mysqli_query($cdb,$sqlct);

mysqli_select_db($cdb,"ajax_demo");
$sqlcm="SELECT count(wmt_name) FROM work_materials WHERE wmt_owner = '".$q."'";
$resultcm = mysqli_query($cdb,$sqlcm);

mysqli_select_db($cdb,"ajax_demo");
$sqlcc="SELECT count(wch_name) FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultcc = mysqli_query($cdb,$sqlcc);

mysqli_select_db($cdb,"ajax_demo");
$sqlca="SELECT count(wape_name) FROM work_ape WHERE wape_owner = '".$q."'";
$resultca = mysqli_query($cdb,$sqlca);

mysqli_select_db($cdb,"ajax_demo");
$sqlcp="SELECT count(wppe_name) FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultcp = mysqli_query($cdb,$sqlcp);

mysqli_select_db($cdb,"ajax_demo");
$sql="SELECT wtl_name,wtl_quantity FROM work_tools WHERE wtl_owner = '".$q."'";
$result = mysqli_query($cdb,$sql);

mysqli_select_db($cdb,"ajax_demo");
$sqlm="SELECT wmt_name,wmt_quantity FROM work_materials WHERE wmt_owner = '".$q."'";
$resultm = mysqli_query($cdb,$sqlm);

mysqli_select_db($cdb,"ajax_demo");
$sqlc="SELECT wch_name,wch_quantity FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultc = mysqli_query($cdb,$sqlc);

mysqli_select_db($cdb,"ajax_demo");
$sqlp="SELECT wppe_name,wppe_quantity FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultp = mysqli_query($cdb,$sqlp);
mysqli_select_db($cdb,"ajax_demo");
$sqla="SELECT wape_name,wape_quantity FROM work_ape WHERE wape_owner = '".$q."'";
$resulta = mysqli_query($cdb,$sqla);
?>

		<div class="kt-portlet kt-profile">
								<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="img/apple-touch-icon.png" alt="">
													<label class="kt-profile__main-pic-upload">
														<i class="flaticon-photo-camera"></i>
													</label>
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name">MM-DE</div>
													<div class="kt-profile__main-info-position">ID</div>
													<div class="kt-profile__main-info-position">Casablanca</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-lg-3 col-xl-3">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">13 Humans</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowct=mysqli_fetch_array($resultct)) {echo $rowct[0];}?> tools</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcm=mysqli_fetch_array($resultcm)) {echo $rowcm[0];}?> materials</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcc=mysqli_fetch_array($resultcc)) {echo $rowcc[0];}?> Chemicals</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcp=mysqli_fetch_array($resultcp)) {echo $rowcp[0];}?> PPE</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowca=mysqli_fetch_array($resultca)) {echo $rowca[0];}?> APE</span>
												</a>
											</div>
										</div>
										<div class="col-md-4 col-lg-4 col-xl-4">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">3 Spplies</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text">=2 SRF</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text">13 Inspections</span>
												</a>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>										
<style>
	.table > tbody > tr > td {
     vertical-align: middle;
}
</style>


									<table class="table table-bordered">
								<tbody>
									<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsetools" role="button" aria-expanded="true" aria-controls="multiCollapsetools"><h5>Tools  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsetools" style="">
																<div class="card card-body">
													<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wtl_name'];?> 
												<?php if ($row['wtl_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalde"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wtl_quantity']<=5 && $row['wtl_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalde"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wtl_quantity']>5 && $row['wtl_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalde"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wtl_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalde"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>  
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
  
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#toolsmodalde">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsemat" role="button" aria-expanded="true" aria-controls="multiCollapsemat"><h5>Materials  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsemat" style="">
																<div class="card card-body">
												<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wmt_name'];?> 
												<?php if ($row['wmt_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalde"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wmt_quantity']<=5 && $row['wmt_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalde"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wmt_quantity']>5 && $row['wmt_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalde"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wmt_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalde"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#matsmodalde">Details</button> 
											</td>
										</tr>
										
										<tr>
											

											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsechem" role="button" aria-expanded="true" aria-controls="multiCollapsechem"><h5>Chemicals  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsechem" style="">
																<div class="card card-body">
													<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wch_name'];?> 
												<?php if ($row['wch_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalde"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wch_quantity']<=5 && $row['wch_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalde"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wch_quantity']>5 && $row['wch_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalde"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wch_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalde"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#chemicalsmodalde">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseppe" role="button" aria-expanded="true" aria-controls="multiCollapseppe"><h5>PPE  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseppe" style="">
																<div class="card card-body">
																	
										<?php
											while($rowp = mysqli_fetch_array($resultp)) {  
											?>
											<span><?php echo $rowp['wppe_name'];?> 
												<?php if ($rowp['wppe_quantity']<1) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalde"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowp['wppe_quantity']<=5 && $rowp['wppe_quantity']>=2) {
												?>

												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalde"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>5 && $rowp['wppe_quantity']<10) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalde"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>=10) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalde"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#ppemodalde">Details</button>
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseape" role="button" aria-expanded="true" aria-controls="multiCollapseape"><h5>APE <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseape" style="">
																<div class="card card-body">
																	
											<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wape_name'];?>
												<?php if ($row['wape_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalde"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wape_quantity']<=5 && $row['wape_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalde"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wape_quantity']>5 && $row['wape_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalde"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wape_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalde"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											 </td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#apemodalde">Details</button>
											</td>
										</tr>
										
									</tbody>
								</table>
<div class="modal fade bd-example-modal-xl" id="toolsmodalde" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/de/details/detailst.php')?>
													</div>
<div class="modal fade" id="matsmodalde" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<?php include('controls/de/details/detailsm.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="chemicalsmodalde" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/de/details/detailsc.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="ppemodalde" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/de/details/detailsp.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="apemodalde" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/de/details/detailsa.php')?>
													</div>


<div class="modal fade bd-example-modal-sm" id="toolsinsmodalde" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tool inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/de/showtools.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="matsinsmodalde" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Material inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/de/showmat.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="cheminsmodalde" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Chemical inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/de/showchemicals.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="ppeinsmodalde" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">PPE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/de/showppe.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="apeinsmodalde" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">APE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/de/showape.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>


		<?php }



if ($q=="32") {
mysqli_select_db($cdb,"ajax_demo");
$sqlct="SELECT count(wtl_name) FROM work_tools WHERE wtl_owner = '".$q."'";
$resultct = mysqli_query($cdb,$sqlct);

mysqli_select_db($cdb,"ajax_demo");
$sqlcm="SELECT count(wmt_name) FROM work_materials WHERE wmt_owner = '".$q."'";
$resultcm = mysqli_query($cdb,$sqlcm);

mysqli_select_db($cdb,"ajax_demo");
$sqlcc="SELECT count(wch_name) FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultcc = mysqli_query($cdb,$sqlcc);

mysqli_select_db($cdb,"ajax_demo");
$sqlca="SELECT count(wape_name) FROM work_ape WHERE wape_owner = '".$q."'";
$resultca = mysqli_query($cdb,$sqlca);

mysqli_select_db($cdb,"ajax_demo");
$sqlcp="SELECT count(wppe_name) FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultcp = mysqli_query($cdb,$sqlcp);

mysqli_select_db($cdb,"ajax_demo");
$sql="SELECT wtl_name,wtl_quantity FROM work_tools WHERE wtl_owner = '".$q."'";
$result = mysqli_query($cdb,$sql);

mysqli_select_db($cdb,"ajax_demo");
$sqlm="SELECT wmt_name,wmt_quantity FROM work_materials WHERE wmt_owner = '".$q."'";
$resultm = mysqli_query($cdb,$sqlm);

mysqli_select_db($cdb,"ajax_demo");
$sqlc="SELECT wch_name,wch_quantity FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultc = mysqli_query($cdb,$sqlc);

mysqli_select_db($cdb,"ajax_demo");
$sqlp="SELECT wppe_name,wppe_quantity FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultp = mysqli_query($cdb,$sqlp);
mysqli_select_db($cdb,"ajax_demo");
$sqla="SELECT wape_name,wape_quantity FROM work_ape WHERE wape_owner = '".$q."'";
$resulta = mysqli_query($cdb,$sqla);
?>

		<div class="kt-portlet kt-profile">
								<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="img/apple-touch-icon.png" alt="">
													<label class="kt-profile__main-pic-upload">
														<i class="flaticon-photo-camera"></i>
													</label>
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name">MM-TC3</div>
													<div class="kt-profile__main-info-position">ID</div>
													<div class="kt-profile__main-info-position">Casablanca</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-lg-3 col-xl-3">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">13 Humans</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowct=mysqli_fetch_array($resultct)) {echo $rowct[0];}?> tools</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcm=mysqli_fetch_array($resultcm)) {echo $rowcm[0];}?> materials</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcc=mysqli_fetch_array($resultcc)) {echo $rowcc[0];}?> Chemicals</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcp=mysqli_fetch_array($resultcp)) {echo $rowcp[0];}?> PPE</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowca=mysqli_fetch_array($resultca)) {echo $rowca[0];}?> APE</span>
												</a>
											</div>
										</div>
										<div class="col-md-4 col-lg-4 col-xl-4">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">3 Spplies</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text">=2 SRF</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text">13 Inspections</span>
												</a>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>										
<style>
	.table > tbody > tr > td {
     vertical-align: middle;
}
</style>


									<table class="table table-bordered">
								<tbody>
									<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsetools" role="button" aria-expanded="true" aria-controls="multiCollapsetools"><h5>Tools  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsetools" style="">
																<div class="card card-body">
												<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wtl_name'];?> 
												<?php if ($row['wtl_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodaltc3"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wtl_quantity']<=5 && $row['wtl_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodaltc3"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wtl_quantity']>5 && $row['wtl_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodaltc3"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wtl_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodaltc3"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?> 
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
  
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#toolsmodaltc3">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsemat" role="button" aria-expanded="true" aria-controls="multiCollapsemat"><h5>Materials  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsemat" style="">
																<div class="card card-body">
											<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wmt_name'];?>
												<?php if ($row['wmt_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodaltc3"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wmt_quantity']<=5 && $row['wmt_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodaltc3"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wmt_quantity']>5 && $row['wmt_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodaltc3"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wmt_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodaltc3"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#matsmodaltc3">Details</button> 
											</td>
										</tr>
										
										<tr>
											

											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsechem" role="button" aria-expanded="true" aria-controls="multiCollapsechem"><h5>Chemicals  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsechem" style="">
																<div class="card card-body">
											<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wch_name'];?>
												<?php if ($row['wch_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodaltc3"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wch_quantity']<=5 && $row['wch_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodaltc3"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wch_quantity']>5 && $row['wch_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodaltc3"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wch_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodaltc3"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#chemicalsmodaltc3">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseppe" role="button" aria-expanded="true" aria-controls="multiCollapseppe"><h5>PPE  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseppe" style="">
																<div class="card card-body">
																	
											<?php
											while($rowp = mysqli_fetch_array($resultp)) {  
											?>
											<span><?php echo $rowp['wppe_name'];?> 
												<?php if ($rowp['wppe_quantity']<1) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodaltc3"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowp['wppe_quantity']<=5 && $rowp['wppe_quantity']>=2) {
												?>

												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodaltc3"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>5 && $rowp['wppe_quantity']<10) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodaltc3"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>=10) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodaltc3"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#ppemodaltc3">Details</button>
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseape" role="button" aria-expanded="true" aria-controls="multiCollapseape"><h5>APE <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseape" style="">
																<div class="card card-body">
																	
											<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wape_name'];?> 
												<?php if ($row['wape_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodaltc3"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wape_quantity']<=5 && $row['wape_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodaltc3"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>s
												<?php 
												}
												 if ($row['wape_quantity']>5 && $row['wape_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodaltc3"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wape_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodaltc3"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											 </td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#apemodaltc3">Details</button>
											</td>
										</tr>
										
									</tbody>
								</table>

<div class="modal fade bd-example-modal-xl" id="toolsmodaltc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/tc3/details/detailst.php')?>
													</div>
<div class="modal fade" id="matsmodaltc3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<?php include('controls/tc3/details/detailsm.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="chemicalsmodaltc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/tc3/details/detailsc.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="ppemodaltc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/tc3/details/detailsp.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="apemodaltc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/tc3/details/detailsa.php')?>
													</div>


<div class="modal fade bd-example-modal-sm" id="toolsinsmodaltc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tool inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/tc3/showtools.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="matsinsmodaltc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Material inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/tc3/showmat.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="cheminsmodaltc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Chemical inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/tc3/showchemicals.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="ppeinsmodaltc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">PPE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/tc3/showppe.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="apeinsmodaltc3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">APE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/tc3/showape.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>


<?php }

if ($q=="41") {
mysqli_select_db($cdb,"ajax_demo");
$sqlct="SELECT count(wtl_name) FROM work_tools WHERE wtl_owner = '".$q."'";
$resultct = mysqli_query($cdb,$sqlct);

mysqli_select_db($cdb,"ajax_demo");
$sqlcm="SELECT count(wmt_name) FROM work_materials WHERE wmt_owner = '".$q."'";
$resultcm = mysqli_query($cdb,$sqlcm);

mysqli_select_db($cdb,"ajax_demo");
$sqlcc="SELECT count(wch_name) FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultcc = mysqli_query($cdb,$sqlcc);

mysqli_select_db($cdb,"ajax_demo");
$sqlca="SELECT count(wape_name) FROM work_ape WHERE wape_owner = '".$q."'";
$resultca = mysqli_query($cdb,$sqlca);

mysqli_select_db($cdb,"ajax_demo");
$sqlcp="SELECT count(wppe_name) FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultcp = mysqli_query($cdb,$sqlcp);

mysqli_select_db($cdb,"ajax_demo");
$sql="SELECT wtl_name,wtl_quantity FROM work_tools WHERE wtl_owner = '".$q."'";
$result = mysqli_query($cdb,$sql);

mysqli_select_db($cdb,"ajax_demo");
$sqlm="SELECT wmt_name,wmt_quantity FROM work_materials WHERE wmt_owner = '".$q."'";
$resultm = mysqli_query($cdb,$sqlm);

mysqli_select_db($cdb,"ajax_demo");
$sqlc="SELECT wch_name,wch_quantity FROM work_chemicals WHERE wch_owner = '".$q."'";
$resultc = mysqli_query($cdb,$sqlc);

mysqli_select_db($cdb,"ajax_demo");
$sqlp="SELECT wppe_name,wppe_quantity FROM work_ppe WHERE wppe_owner = '".$q."'";
$resultp = mysqli_query($cdb,$sqlp);
mysqli_select_db($cdb,"ajax_demo");
$sqla="SELECT wape_name,wape_quantity FROM work_ape WHERE wape_owner = '".$q."'";
$resulta = mysqli_query($cdb,$sqla);
?>

		<div class="kt-portlet kt-profile">
								<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="img/apple-touch-icon.png" alt="">
													<label class="kt-profile__main-pic-upload">
														<i class="flaticon-photo-camera"></i>
													</label>
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name">BMCI</div>
													<div class="kt-profile__main-info-position">ID</div>
													<div class="kt-profile__main-info-position">Casablanca</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-lg-3 col-xl-3">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">13 Humans</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowct=mysqli_fetch_array($resultct)) {echo $rowct[0];}?> tools</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcm=mysqli_fetch_array($resultcm)) {echo $rowcm[0];}?> materials</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcc=mysqli_fetch_array($resultcc)) {echo $rowcc[0];}?> Chemicals</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcp=mysqli_fetch_array($resultcp)) {echo $rowcp[0];}?> PPE</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowca=mysqli_fetch_array($resultca)) {echo $rowca[0];}?> APE</span>
												</a>
											</div>
										</div>
										<div class="col-md-4 col-lg-4 col-xl-4">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">3 Spplies</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text">=2 SRF</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text">13 Inspections</span>
												</a>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>										
<style>
	.table > tbody > tr > td {
     vertical-align: middle;
}
</style>


									<table class="table table-bordered">
								<tbody>
									<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsetools" role="button" aria-expanded="true" aria-controls="multiCollapsetools"><h5>Tools  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsetools" style="">
																<div class="card card-body">
																	<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wtl_name'];?> 
												<?php if ($row['wtl_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalbmci"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wtl_quantity']<=5 && $row['wtl_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalbmci"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wtl_quantity']>5 && $row['wtl_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalbmci"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wtl_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalbmci"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>  
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
  
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#toolsmodalbmci">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsemat" role="button" aria-expanded="true" aria-controls="multiCollapsemat"><h5>Materials  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsemat" style="">
																<div class="card card-body">
											<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wmt_name'];?> 
												<?php if ($row['wmt_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalbmci"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wmt_quantity']<=5 && $row['wmt_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalbmci"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wmt_quantity']>5 && $row['wmt_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalbmci"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wmt_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalbmci"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#matsmodalbmci">Details</button> 
											</td>
										</tr>
										
										<tr>
											

											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsechem" role="button" aria-expanded="true" aria-controls="multiCollapsechem"><h5>Chemicals  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsechem" style="">
																<div class="card card-body">
											<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wch_name'];?> 
												<?php if ($row['wch_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalbmci"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wch_quantity']<=5 && $row['wch_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalbmci"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wch_quantity']>5 && $row['wch_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalbmci"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wch_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalbmci"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#chemicalsmodalbmci">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseppe" role="button" aria-expanded="true" aria-controls="multiCollapseppe"><h5>PPE  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseppe" style="">
																<div class="card card-body">
																	
											<?php
											while($rowp = mysqli_fetch_array($resultp)) {  
											?>
											<span><?php echo $rowp['wppe_name'];?> 
												<?php if ($rowp['wppe_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalbmci"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowp['wppe_quantity']<=5 && $rowp['wppe_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalbmci"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>5 && $rowp['wppe_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalbmci"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalbmci"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#ppemodalbmci">Details</button>
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseape" role="button" aria-expanded="true" aria-controls="multiCollapseape"><h5>APE <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseape" style="">
																<div class="card card-body">
																	
											<?php
											while($row = mysqli_fetch_array($result)) {  
											?>
											<span><?php echo $row['wape_name'];?> 
												<?php if ($row['wape_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalbmci"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($row['wape_quantity']<=5 && $row['wape_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalbmci"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($row['wape_quantity']>5 && $row['wape_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalbmci"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($row['wape_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalbmci"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											 </td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#apemodalbmci">Details</button>
											</td>
										</tr>
										
									</tbody>
								</table>

<div class="modal fade bd-example-modal-xl" id="toolsmodalbmci" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/bmci/details/detailst.php')?>
													</div>
<div class="modal fade" id="matsmodalbmci" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<?php include('controls/bmci/details/detailsm.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="chemicalsmodalbmci" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/bmci/details/detailsc.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="ppemodalbmci" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/bmci/details/detailsp.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="apemodalbmci" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/bmci/details/detailsa.php')?>
													</div>


<div class="modal fade bd-example-modal-sm" id="toolsinsmodalbmci" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tool inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/bmci/showtools.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="matsinsmodalbmci" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Material inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/bmci/showmat.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="cheminsmodalbmci" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Chemical inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/bmci/showchemicals.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="ppeinsmodalbmci" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">PPE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/bmci/showppe.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="apeinsmodalbmci" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">APE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/bmci/showape.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
		<?php }


		else{
			echo "No information for this Owner";
		} ?>



</body>
</html>