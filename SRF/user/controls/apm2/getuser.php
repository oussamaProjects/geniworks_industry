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


		<link rel="shortcut icon" href="img/favicon-32x32.png" />
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
require("controls/zdfzfzef/de5.php");
mysqli_select_db($cdb,"ajax_demo");
$sqlct="SELECT count(wtl_name) FROM work_tools_apm2 WHERE wtl_owner = '12'";
$resultct = mysqli_query($cdb,$sqlct);

mysqli_select_db($cdb,"ajax_demo");
$sqlcm="SELECT count(wmt_name) FROM work_materials_apm2 WHERE wmt_owner = '12'";
$resultcm = mysqli_query($cdb,$sqlcm);

mysqli_select_db($cdb,"ajax_demo");
$sqlcc="SELECT count(wch_name) FROM work_chemicals_apm2 WHERE wch_owner = '12'";
$resultcc = mysqli_query($cdb,$sqlcc);

mysqli_select_db($cdb,"ajax_demo");
$sqlca="SELECT count(wape_name) FROM work_ape_apm2 WHERE wape_owner = '12'";
$resultca = mysqli_query($cdb,$sqlca);

mysqli_select_db($cdb,"ajax_demo");
$sqlcp="SELECT count(wppe_name) FROM work_ppe_apm2 WHERE wppe_owner = '12'";
$resultcp = mysqli_query($cdb,$sqlcp);



mysqli_select_db($cdb,"ajax_demo");
$sql="SELECT wtl_name,wtl_quantity,wtl_standard,wtl_id FROM work_tools_apm2 WHERE wtl_owner = '12'";
$resultt = mysqli_query($cdb,$sql);



mysqli_select_db($cdb,"ajax_demo");
$sqlac="SELECT * FROM work_tools_apm2 WHERE wtl_owner = '12'";
$resultact = mysqli_query($cdb,$sqlac);

mysqli_select_db($cdb,"ajax_demo");
$sqlord="SELECT * FROM work_tools_apm2 WHERE wtl_owner = '12'";
$resultord = mysqli_query($cdb,$sqlord);


mysqli_select_db($cdb,"ajax_demo");
$sqlm="SELECT wmt_name,wmt_standard,wmt_quantity FROM work_materials_apm2 WHERE wmt_owner = '12'";
$resultm = mysqli_query($cdb,$sqlm);

mysqli_select_db($cdb,"ajax_demo");
$sqlacm="SELECT * FROM work_materials_apm2 WHERE wmt_owner = '12'";
$resultactm = mysqli_query($cdb,$sqlacm);

mysqli_select_db($cdb,"ajax_demo");
$sqlordm="SELECT * FROM work_materials_apm2 WHERE wmt_owner = '12'";
$resultordm = mysqli_query($cdb,$sqlordm);


mysqli_select_db($cdb,"ajax_demo");
$sqlc="SELECT wch_name,wch_standard,wch_quantity FROM work_chemicals_apm2 WHERE wch_owner = '12'";
$resultc = mysqli_query($cdb,$sqlc);

mysqli_select_db($cdb,"ajax_demo");
$sqlacc="SELECT * FROM work_chemicals_apm2 WHERE wch_owner = '12'";
$resultactc = mysqli_query($cdb,$sqlacc);

mysqli_select_db($cdb,"ajax_demo");
$sqlordc="SELECT * FROM work_chemicals_apm2 WHERE wch_owner = '12'";
$resultordc = mysqli_query($cdb,$sqlordc);



mysqli_select_db($cdb,"ajax_demo");
$sqlp="SELECT wppe_name,wppe_standard,wppe_quantity FROM work_ppe_apm2 WHERE wppe_owner = '12'";
$resultp = mysqli_query($cdb,$sqlp);

mysqli_select_db($cdb,"ajax_demo");
$sqlacp="SELECT * FROM work_ppe_apm2 WHERE wppe_owner = '12'";
$resultactp = mysqli_query($cdb,$sqlacp);

mysqli_select_db($cdb,"ajax_demo");
$sqlordp="SELECT * FROM work_ppe_apm2 WHERE wppe_owner = '12'";
$resultordp = mysqli_query($cdb,$sqlordp);



mysqli_select_db($cdb,"ajax_demo");
$sqla="SELECT wape_name,wape_standard,wape_quantity FROM work_ape_apm2 WHERE wape_owner = '12'";
$resulta = mysqli_query($cdb,$sqla);

mysqli_select_db($cdb,"ajax_demo");
$sqlaca="SELECT * FROM work_ape_apm2 WHERE wape_owner = '12'";
$resultacta = mysqli_query($cdb,$sqlaca);

mysqli_select_db($cdb,"ajax_demo");
$sqlorda="SELECT * FROM work_ape_apm2 WHERE wape_owner = '12'";
$resultorda = mysqli_query($cdb,$sqlorda);
?>

<?php

?>


		<div class="kt-portlet kt-profile">
								<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="img/APM-Terminals.jpg" alt="">
													<label class="kt-profile__main-pic-upload">
														<i class="flaticon-photo-camera"></i>
													</label>
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name">APM-2</div>
													<div class="kt-profile__main-info-position">ID</div>
													<div class="kt-profile__main-info-position">Contact</div>
													<div class="kt-profile__main-info-position">Tangier</div>
												</div>
											</div>

										</div>
										<div class="col-md-3 col-lg-3 col-xl-3">
											<div class="kt-profile__contact">
												<div class="kt-profile__main-info-position"><h5>Resources Review</h5></div><br>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text">13 Humans</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
												
													<span class="kt-profile__contact-item-text"><?php while($rowct=mysqli_fetch_array($resultct)) {echo $rowct[0];}?> tools</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text"><?php while($rowcm=mysqli_fetch_array($resultcm)) {echo $rowcm[0];}?> materials</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text"><?php while($rowcc=mysqli_fetch_array($resultcc)) {echo $rowcc[0];}?> Chemicals</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text"><?php while($rowcp=mysqli_fetch_array($resultcp)) {echo $rowcp[0];}?> PPE</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text"><?php while($rowca=mysqli_fetch_array($resultca)) {echo $rowca[0];}?> APE</span>
												</a>
											</div>
										</div>
										<div class="col-md-4 col-lg-4 col-xl-4">
											<div class="kt-profile__contact" style="align-content: center;">
												<div class="kt-profile__main-info-position"><h5>Shortcuts</h5></div><br>
												<br>
												<br>
												<a href="#" class="kt-profile__contact-item"   data-toggle="modal" data-target="#srinvoice2">
	<?php
	require('controls/zdfzfzef/de5.php');
$cntasrf=$cdb->prepare("SELECT count(str_owner) FROM srf_tools_request WHERE str_owner='12' AND str_status='approved'");
$cntasrf->execute();
 
if ($cntasrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $reasrf=$cntasrf->get_result();
  while ($rowasrf=$reasrf->fetch_row()) {
													?>
													<span class="kt-profile__contact-item-text"> SRF  <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="padding: 7px; border-radius: 100px 100px 100px 0px;"><?php echo $rowasrf[0]?></span>

													</span>
												<?php }}?>
													
												</a>
												<a href="#" class="kt-profile__contact-item"  data-toggle="modal" data-target="#srboard2">
<?php require('controls/zdfzfzef/de5.php');
$cntsrf=$cdb->prepare("SELECT count(str_owner) FROM srf_tools_request WHERE str_owner='12' AND str_status='not approved'");
$cntsrf->execute();

if ($cntsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resrf=$cntsrf->get_result();
  while ($rowsrf=$resrf->fetch_row()) {
													?>
													<span class="kt-profile__contact-item-text"> SRF Review <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="padding: 7px; border-radius: 100px 100px 100px 0px;"><?php echo $rowsrf[0]?></span></span>
												<?php }}?>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"> Inspections</span>
                          
												</a>
												<a href="#" class="kt-profile__contact-item"   data-toggle="modal" data-target="#srinvoice2">

													<span class="kt-profile__contact-item-text">

													</span>
										
													
												</a>
												<br>
												
												<br>
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
														<a class="" data-toggle="collapse" href="#multiCollapsetools12" role="button" aria-expanded="true" aria-controls="multiCollapsetools12"><h5>Tools  <i class="la la-ellipsis-v"></i></h5></a>
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsetools12" style="">
																<div class="card card-body">
											<?php
											while($rowt = mysqli_fetch_array($resultt)) {
											?>
											<span> 
												<?php if (($rowt['wtl_standard']-$rowt['wtl_quantity'])>=3) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->

												<a style="" href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2"><?php echo $rowt['wtl_name'];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
												<?php
											}
												 if (($rowt['wtl_standard']-$rowt['wtl_quantity'])>=1 && ($rowt['wtl_standard']-$rowt['wtl_quantity'])<=2) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->

												<a style="" href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2"><?php echo $rowt['wtl_name'];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a> 
												<?php 
												}
												 
												 if (($rowt['wtl_standard']-$rowt['wtl_quantity'])==0) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a>--> 

												<a style="" href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2"><?php echo $rowt['wtl_name'];?><img src="img/signal-3.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#1dc9b7;"/></a>
												<?php } ?>
											</span>
											<?php }  ?><br><span class="form-text text-muted">Battery Life & Colors Means Tool availability Status</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>

	<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsetools12" role="button" aria-expanded="true" aria-controls="multiCollapsetools12"><h3> <i class="la la-tasks"></i></h3></a>
													</p>
					<div class="row">
					  <div class="col">
						<div class="multi-collapse collapse" id="multiCollapsetools12" style="">
							<div class="card card-body">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#toolstab2">Order</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_5_3">Define</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_5_4">Reports</a>
												</li>
												<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_3">Action</a>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_1">Another action</a>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_4">Something else here</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_2">Separated link</a>
													</div>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="toolstab2" role="tabpanel">
													<div class="card card-body">
												<?php
											while($roword = mysqli_fetch_row($resultord)) {
											?>
											
												<?php if (($roword[7]-$roword[6])>=3) {
												?>
												
												
												<a  href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolspp2"><?php echo $roword[2];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
												<!-- <i style="float:right;font-size:12px; color:#fd397a;" class="fas fa-battery-empty"></i> -->
											<?php
											}
												 if (($roword[7]-$roword[6])>=1 && ($roword[7]-$roword[6])<=2) {
												?>

												
												<a style="" href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolspp2" ><?php echo $roword[2];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
												

												<?php 
												 } ?>
											
											<?php  }  ?>

											   <br><span class="form-text text-muted">Order Tool Unit(s) should be on next supply list</span>
											</div>
												</div>
												<div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
													
												</div>
												<div class="tab-pane" id="kt_tabs_5_3" role="tabpanel">
													

													<?php
											while($rowact = mysqli_fetch_row($resultact)) {
											?>
											
												<?php if ($rowact[7]=="not defined") {
												?>
												<?php echo $rowact[2];?><a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#tooldefineapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-crosshairs"></i></a> 

												<br>
												<?php
											}else{
												?>
												<?php echo $rowact[2];?> <a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#tooldefineapm2"><i style="font-size:20px; color:#5578eb;" class="la la-cogs"></i></a>
												<br>
												<?php }
												?>
												<?php

												 }	
											   ?>
											   <br><span class="form-text text-muted">Define Resources Standards And Actual Units</span>
												</div>
												<div class="tab-pane" id="kt_tabs_5_4" role="tabpanel">
													
											
											
										</div>

	<!---->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
  

												 <!--<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#materialsmodalapm2">Details</button>
												 <button type="button" class="btn btn-brand btn-font-sm btn-upper">Define</button> 
												 <button type="button" class="btn btn-dark btn-font-sm btn-upper">Reports</button> -->

								

											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsemat12" role="button" aria-expanded="true" aria-controls="multiCollapsemat12"><h5>Materials  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsemat12" style="">
																<div class="card card-body">
											




											<?php
											while($rowmt = mysqli_fetch_array($resultm)) {
											?>
											<span> 
												<?php if (($rowmt['wmt_standard']-$rowmt['wmt_quantity'])>=3) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#materialsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->

												<a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><?php echo $rowmt['wmt_name'];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
												<?php
											}
												 if (($rowmt['wmt_standard']-$rowmt['wmt_quantity'])>=1 && ($rowmt['wmt_standard']-$rowmt['wmt_quantity'])<=2) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#materialsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->

												<a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><?php echo $rowmt['wmt_name'];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a> 
												<?php 
												}
												 
												 if (($rowmt['wmt_standard']-$rowmt['wmt_quantity'])==0) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#materialsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->

												<a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><?php echo $rowmt['wmt_name'];?><img src="img/signal-3.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#1dc9b7;"/></a>
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

														<a class="" data-toggle="collapse" href="#multiCollapsemat12" role="button" aria-expanded="true" aria-controls="multiCollapsemat12"><h3> <i class="la la-tasks"></i></h3></a>
														

														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsemat12" style="">
																<div class="card card-body">
																	
										
										
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#multiCollapsemat12s1">Order</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#multiCollapsemat12s2">Define</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#multiCollapsemat12s3">Reports</a>
												</li>
												<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_3">Action</a>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_1">Another action</a>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_4">Something else here</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_2">Separated link</a>
													</div>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="multiCollapsemat12s1" role="tabpanel">
												<div class="card card-body">

												<?php
											while($rowordm = mysqli_fetch_row($resultordm)) {
											?>
											
												<?php if (($rowordm[7]-$rowordm[6])>=3) {
												?>
												
												
												<a  href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#matsppl12"><?php echo $rowordm[2];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></i></a>
												
											<?php
											}
												 if (($rowordm[7]-$rowordm[6])>=1 && ($rowordm[7]-$rowordm[6])<=2) {
												?>

												
												<a  href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#matsppl12" ><?php echo $rowordm[2];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
												

												<?php 
												
												  } ?>
											
											<?php  }  ?>

											   <br><span class="form-text text-muted">Order Tool Unit(s) should be on next supply list</span>
												</div></div>
												<div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
													
												</div>
												<div class="tab-pane" id="multiCollapsemat12s2" role="tabpanel">
													

													<?php
											while($rowactm = mysqli_fetch_row($resultactm)) {
											?>
											
												<?php if ($rowactm[7]=="not defined") {
												?>
												<?php echo $rowactm[2];?><a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#matdefineapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-crosshairs"></i></a> 

												<br>
												<?php
											}else{
												?>
												<?php echo $rowactm[2];?> <a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#matdefineapm2"><i style="font-size:20px; color:#5578eb;" class="la la-cogs"></i></a>
												<br>
												<?php } }	
											   ?>
											   <br><span class="form-text text-muted">Define Resources Standards And Actual Units</span>
												</div>
												<div class="tab-pane" id="multiCollapsemat12s3" role="tabpanel">
													
												</div>
											
										</div>

	<!---->
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
														<a class="" data-toggle="collapse" href="#multiCollapsechem12" role="button" aria-expanded="true" aria-controls="multiCollapsechem12"><h5>Chemicals  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsechem12" style="">
																<div class="card card-body">
											<?php
											while($rowc = mysqli_fetch_array($resultc)) {
											?>
											<span> 
											<?php if (($rowc['wch_standard']-$rowc['wch_quantity'])>=3) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#chemicalsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
												<a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><?php echo $rowc['wch_name'];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
												<?php
											}
												 if (($rowc['wch_standard']-$rowc['wch_quantity'])>=1 && ($rowc['wch_standard']-$rowc['wch_quantity'])<=2) {
												?>

												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#chemicalsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
												<a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><?php echo $rowc['wch_name'];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
												<?php 
												}
												 
												 if (($rowc['wch_standard']-$rowc['wch_quantity'])==0) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#chemicalsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a>--> 
												<a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><?php echo $rowc['wch_name'];?><img src="img/signal-3.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#1dc9b7;"/></a>
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

														<a class="" data-toggle="collapse" href="#multiCollapsechem12" role="button" aria-expanded="true" aria-controls="multiCollapsechem12"><h3> <i class="la la-tasks"></i></h3></a>
														

														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsechem12" style="">
																<div class="card card-body">
																	
										
										
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#multiCollapsechem12s1">Order</a>
												</li>
												
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#multiCollapsechem12s2">Define</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#multiCollapsechem12s3">Reports</a>
												</li>
												<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_3">Action</a>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_1">Another action</a>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_4">Something else here</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_2">Separated link</a>
													</div>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="multiCollapsechem12s1" role="tabpanel">
													<div class="card card-body">
												<?php
											while($rowordc = mysqli_fetch_row($resultordc)) {
											?>
											
												<?php if (($rowordc[7]-$rowordc[6])>=3) {
												?>
												
												<a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#chemsppl12" data-book-id="my_id_value"><?php echo $rowordc[2];?> <img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
												<?php
											}
												 if (($rowordc[7]-$rowordc[6])>=1 && ($rowordc[7]-$rowordc[6])<=2) {
												?> 
												<a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#chemsppl12" data-book-id="my_id_value"><?php echo $rowordc[2];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
											
												
												<?php }  }  ?>

											   <br><span class="form-text text-muted">Order Tool Unit(s) should be on next supply list</span>
												</div></div>
												<div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
													
												</div>
												<div class="tab-pane" id="multiCollapsechem12s2" role="tabpanel">
													

													<?php
											while($rowactc = mysqli_fetch_row($resultactc)) {
											?>
											
												<?php if ($rowactc[7]=="not defined") {
												?>
												<?php echo $rowactc[2];?><a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#chemdefineapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-crosshairs"></i></a> 

												<br>
												<?php
											}else{
												?>
												<?php echo $rowactc[2];?> <a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#chemdefineapm2"><i style="font-size:20px; color:#5578eb;" class="la la-cogs"></i></a>
												<br>
												<?php } }	
											   ?>
											   <br><span class="form-text text-muted">Define Resources Standards And Actual Units</span>
												</div>
												<div class="tab-pane" id="multiCollapsechem12s3" role="tabpanel">
													
												</div>
											
										</div>

	<!---->
																</div>
															</div>
														</div>
													</div>
												</div>
  

												 <!--<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#materialsmodalapm2">Details</button>
												 <button type="button" class="btn btn-brand btn-font-sm btn-upper">Define</button> 
												 <button type="button" class="btn btn-dark btn-font-sm btn-upper">Reports</button> -->

								

											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseppe12" role="button" aria-expanded="true" aria-controls="multiCollapseppe12"><h5>PPE  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseppe12" style="">
																<div class="card card-body">
																	
											<?php
											while($rowp = mysqli_fetch_array($resultp)) {  
											?>
											<span>
												<?php if (($rowp['wppe_standard']-$rowp['wppe_quantity'])>=3) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#ppemodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
												<a  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><?php echo $rowp['wppe_name'];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
												<?php
											}
												 if (($rowp['wppe_standard']-$rowp['wppe_quantity'])>=1 && ($rowp['wppe_standard']-$rowp['wppe_quantity'])<=2) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#ppemodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
												<a   class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><?php echo $rowp['wppe_name'];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
												<?php 
												}
												 
												 if (($rowp['wppe_standard']-$rowp['wppe_quantity'])==0) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#ppemodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
												<a class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><?php echo $rowp['wppe_name'];?><img src="img/signal-3.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#1dc9b7;"/></a>
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

														<a class="" data-toggle="collapse" href="#multiCollapseppe12" role="button" aria-expanded="true" aria-controls="multiCollapseppe12"><h3> <i class="la la-tasks"></i></h3></a>
														

														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseppe12" style="">
																<div class="card card-body">
																	
										
									
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#multiCollapseppe121">Order</a>
												</li>
												
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#multiCollapseppe122">Define</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#multiCollapseppe123">Reports</a>
												</li>
												<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_3">Action</a>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_1">Another action</a>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_4">Something else here</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_2">Separated link</a>
													</div>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="multiCollapseppe12s1" role="tabpanel">
                        <div class="card card-body">

                        <?php
                      while($rowordm = mysqli_fetch_row($resultordm)) {
                      ?>
                      
                        <?php if (($rowordm[7]-$rowordm[6])>=3) {
                        ?>
                        
                        
                        <a  href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeppl12"><?php echo $rowordm[2];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></i></a>
                        
                      <?php
                      }
                         if (($rowordm[7]-$rowordm[6])>=1 && ($rowordm[7]-$rowordm[6])<=2) {
                        ?>

                        
                        <a  href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeppl12" ><?php echo $rowordm[2];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
                        

                        <?php 
                        
                          } ?>
                      
                      <?php  }  ?>

                         <br><span class="form-text text-muted">Order Tool Unit(s) should be on next supply list</span>
                        </div></div>
												<div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
													
												</div>
												<div class="tab-pane" id="multiCollapseppe122" role="tabpanel">
													

													<?php
											while($rowactp = mysqli_fetch_row($resultactp)) {
											?>
											
												<?php if ($rowactp[7]=="not defined") {
												?>
												<?php echo $rowactp[2];?><a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#ppedefineapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-crosshairs"></i></a> 

												<br>
												<?php
											}else{
												?>
												<?php echo $rowactp[2];?> <a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#ppedefineapm2"><i style="font-size:20px; color:#5578eb;" class="la la-cogs"></i></a>
												<br>
												<?php } }	
											   ?>
											   <br><span class="form-text text-muted">Define Resources Standards And Actual Units</span>
												</div>
												<div class="tab-pane" id="multiCollapseppe123" role="tabpanel">
													
												</div>
											
										</div>

	<!---->
																</div>
															</div>
														</div>
													</div>
												</div>
  

												 <!--<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#materialsmodalapm2">Details</button>
												 <button type="button" class="btn btn-brand btn-font-sm btn-upper">Define</button> 
												 <button type="button" class="btn btn-dark btn-font-sm btn-upper">Reports</button> -->

								

											</td>
										</tr>
										<tr>
											<td style="width: 50%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseape12" role="button" aria-expanded="true" aria-controls="multiCollapseape12"><h5>APE <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseape12" style="">
																<div class="card card-body">
																	
										<?php
											while($rowa = mysqli_fetch_array($resulta)) {  
											?>
											<span><?php echo $rowa['wape_name'];?> 
												<?php if (($rowa['wape_standard']-$rowa['wape_quantity'])>=3) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#apemodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
												<?php
											}
												 if (($rowa['wape_standard']-$rowa['wape_quantity'])>=1 && ($rowa['wape_standard']-$rowa['wape_quantity'])<=2) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#apemodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
												<?php 
												}

												 if (($rowa['wape_standard']-$rowa['wape_quantity'])==0) {
												?>
												<!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#apemodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><img src="img/signal-3.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#1dc9b7;"/></a>
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

	<div class="kt-section__content kt-section__content--border">
		<p>
			<a class="" data-toggle="collapse" href="#multiCollapseape12" role="button" aria-expanded="true" aria-controls="multiCollapseape12"><h3> <i class="la la-tasks"></i></h3></a>
			<div class="row">
				<div class="col">
					<div class="multi-collapse collapse" id="multiCollapseape12" style="">
						<div class="card card-body">
							<ul class="nav nav-pills nav-fill" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#multiCollapseape121">Order</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#multiCollapseape122">Define</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#multiCollapseape122">Reports</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_3">Action</a>
										<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_1">Another action</a>
										<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_4">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" data-toggle="tab" href="#kt_tabs_5_2">Separated link</a>
									</div>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="multiCollapseape121" role="tabpanel">




									<?php
									while($roworda = mysqli_fetch_row($resultorda)) {
										?>
										<?php if (($roworda[7]-$roworda[6])>=3) {
											?>
											<?php echo $roworda[2];?>
												<a style="float:right;" href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#apeppl12"><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
												<br>
												<?php
											}
												 if (($roworda[7]-$roworda[6])>=1 && ($roworda[7]-$roworda[6])<=2) {
												?> 

												<?php echo $roworda[2];?>
												<a style="float:right;" href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#apeppl12" ><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
												</br>

												
												
												<?php }  }  ?>






									

											   <span class="form-text text-muted">Order Tool Unit(s) should be on next supply list</span>
												</div>
												<div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
													
												</div>
												<div class="tab-pane" id="multiCollapseape122" role="tabpanel">
													

													<?php
											while($rowacta = mysqli_fetch_row($resultacta)) {
											?>
											
												<?php if ($rowacta[7]=="not defined") {
												?>
												<?php echo $rowacta[2];?><a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#apedefineapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-crosshairs"></i></a> 

												<br>
												<?php
											}else{
												?>
												<?php echo $rowacta[2];?> <a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#apedefineapm2"><i style="font-size:20px; color:#5578eb;" class="la la-cogs"></i></a>
												<br>
												<?php } }	
											   ?>
											   <br>
											   <span class="form-text text-muted">Define Resources Standards And Actual Units</span>
											</div>
											<div class="tab-pane" id="multiCollapseape123" role="tabpanel">
												
											</div>
										</div>


																</div>
															</div>
														</div>
													</div>
												</div>
  

								
								

											</td>
										</tr>
										
									</tbody>
											


										
									</table>

<!-- <div class="modal fade bd-example-modal-xl" id="toolsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php // include('controls/apm2/details/detailst.php')?>
													</div>
<div class="modal fade" id="materialsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<?php // include('controls/apm2/details/detailsm.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="chemicalsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php // include('controls/apm2/details/detailsc.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="ppemodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php // include('controls/apm2/details/detailsp.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="apemodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php // include('controls/apm2/details/detailsa.php')?>
													</div> -->


<div class="modal fade bd-example-modal-sm" id="toolspp2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Supply :</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">??</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/details/detailst.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade bd-example-modal-sm" id="matsppl12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Supply :</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">??</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/details/detailsm.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade bd-example-modal-sm" id="chemsppl12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Supply :</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">??</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/details/detailsc.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade bd-example-modal-sm" id="ppeppl12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Supply :</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">??</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/details/detailsp.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade bd-example-modal-sm" id="apeppl12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Supply :</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">??</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/details/detailsa.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="toolsinsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tool inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">??</span>
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
																		<span aria-hidden="true">??</span>
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
																		<span aria-hidden="true">??</span>
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
																		<span aria-hidden="true">??</span>
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
																		<span aria-hidden="true">??</span>
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



<div class="modal fade bd-example-modal-sm" id="tooldefineapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Define Tool Parameters:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">??</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/tools/define.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade bd-example-modal-sm" id="matdefineapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Define Materials Parameters:</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">??</span>
                                  </button>
                              
                                </div>
                                <div class="modal-body"  style="background-color: #dfe6e9;">
                            
                              <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                  <div class="kt-section__body">

                                    <?php include('controls/apm2/mats/define.php')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
<div class="modal fade bd-example-modal-sm" id="chemdefineapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Define Chemicals Parameters:</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">??</span>
                                  </button>
                              
                                </div>
                                <div class="modal-body"  style="background-color: #dfe6e9;">
                            
                              <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                  <div class="kt-section__body">

                                    <?php include('controls/apm2/chems/define.php')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
<div class="modal fade bd-example-modal-sm" id="ppedefineapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Define PPE Parameters:</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">??</span>
                                  </button>
                              
                                </div>
                                <div class="modal-body"  style="background-color: #dfe6e9;">
                            
                              <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                  <div class="kt-section__body">

                                    <?php include('controls/apm2/ppe/define.php')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
<div class="modal fade bd-example-modal-sm" id="apedefineapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Define APE Parameters:</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">??</span>
                                  </button>
                              
                                </div>
                                <div class="modal-body"  style="background-color: #dfe6e9;">
                            
                              <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                  <div class="kt-section__body">

                                    <?php include('controls/apm2/ape/define.php')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>



<div class="modal fade bd-example-modal-sm" id="srboard2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">SRF Review:</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">??</span>
                                  </button>
                              
                                </div>
                                <div class="modal-body"  style="background-color: #dfe6e9;">
                            
                              <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                  <div class="kt-section__body">

                                    <?php include('controls/apm2/srf.php')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
































</body>
</html>