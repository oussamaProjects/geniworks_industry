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
$sqlct="SELECT count(wtl_name) FROM work_tools_apm1 WHERE wtl_owner = '11'";
$resultct = mysqli_query($cdb,$sqlct);

mysqli_select_db($cdb,"ajax_demo");
$sqlcm="SELECT count(wmt_name) FROM work_materials_apm1 WHERE wmt_owner = '11'";
$resultcm = mysqli_query($cdb,$sqlcm);

mysqli_select_db($cdb,"ajax_demo");
$sqlcc="SELECT count(wch_name) FROM work_chemicals_apm1 WHERE wch_owner = '11'";
$resultcc = mysqli_query($cdb,$sqlcc);

mysqli_select_db($cdb,"ajax_demo");
$sqlca="SELECT count(wape_name) FROM work_ape_apm1 WHERE wape_owner = '11'";
$resultca = mysqli_query($cdb,$sqlca);

mysqli_select_db($cdb,"ajax_demo");
$sqlcp="SELECT count(wppe_name) FROM work_ppe_apm1 WHERE wppe_owner = '11'";
$resultcp = mysqli_query($cdb,$sqlcp);



mysqli_select_db($cdb,"ajax_demo");
$sql="SELECT wtl_name,wtl_quantity,wtl_standard,wtl_id FROM work_tools_apm1 WHERE wtl_owner = '11'";
$resultt = mysqli_query($cdb,$sql);



mysqli_select_db($cdb,"ajax_demo");
$sqlac="SELECT * FROM work_tools_apm1 WHERE wtl_owner = '11'";
$resultact = mysqli_query($cdb,$sqlac);

mysqli_select_db($cdb,"ajax_demo");
$sqlord="SELECT * FROM work_tools_apm1 WHERE wtl_owner = '11'";
$resultord = mysqli_query($cdb,$sqlord);


mysqli_select_db($cdb,"ajax_demo");
$sqlm="SELECT wmt_name,wmt_standard,wmt_quantity FROM work_materials_apm1 WHERE wmt_owner = '11'";
$resultm = mysqli_query($cdb,$sqlm);

mysqli_select_db($cdb,"ajax_demo");
$sqlacm="SELECT * FROM work_materials_apm1 WHERE wmt_owner = '11'";
$resultactm = mysqli_query($cdb,$sqlacm);

mysqli_select_db($cdb,"ajax_demo");
$sqlordm="SELECT * FROM work_materials_apm1 WHERE wmt_owner = '11'";
$resultordm = mysqli_query($cdb,$sqlordm);


mysqli_select_db($cdb,"ajax_demo");
$sqlc="SELECT wch_name,wch_standard,wch_quantity FROM work_chemicals_apm1 WHERE wch_owner = '11'";
$resultc = mysqli_query($cdb,$sqlc);

mysqli_select_db($cdb,"ajax_demo");
$sqlacc="SELECT * FROM work_chemicals_apm1 WHERE wch_owner = '11'";
$resultactc = mysqli_query($cdb,$sqlacc);

mysqli_select_db($cdb,"ajax_demo");
$sqlordc="SELECT * FROM work_chemicals_apm1 WHERE wch_owner = '11'";
$resultordc = mysqli_query($cdb,$sqlordc);



mysqli_select_db($cdb,"ajax_demo");
$sqlp="SELECT wppe_name,wppe_standard,wppe_quantity FROM work_ppe_apm1 WHERE wppe_owner = '11'";
$resultp = mysqli_query($cdb,$sqlp);

mysqli_select_db($cdb,"ajax_demo");
$sqlacp="SELECT * FROM work_ppe_apm1 WHERE wppe_owner = '11'";
$resultactp = mysqli_query($cdb,$sqlacp);

mysqli_select_db($cdb,"ajax_demo");
$sqlordp="SELECT * FROM work_ppe_apm1 WHERE wppe_owner = '11'";
$resultordp = mysqli_query($cdb,$sqlordp);



mysqli_select_db($cdb,"ajax_demo");
$sqla="SELECT wape_name,wape_standard,wape_quantity FROM work_ape_apm1 WHERE wape_owner = '11'";
$resulta = mysqli_query($cdb,$sqla);

mysqli_select_db($cdb,"ajax_demo");
$sqlaca="SELECT * FROM work_ape_apm1 WHERE wape_owner = '11'";
$resultacta = mysqli_query($cdb,$sqlaca);

mysqli_select_db($cdb,"ajax_demo");
$sqlorda="SELECT * FROM work_ape_apm1 WHERE wape_owner = '11'";
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
													<div class="kt-profile__main-info-name">APM-1</div>
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
												<a href="#" class="kt-profile__contact-item"   data-toggle="modal" data-target="#srinvoice">
	<?php
	require('controls/zdfzfzef/de5.php');
$cntasrf=$cdb->prepare("SELECT count(str_owner) FROM srf_tools_request WHERE str_owner='11' AND str_status='approved'");
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
												<a href="#" class="kt-profile__contact-item"  data-toggle="modal" data-target="#srboard">
<?php require('controls/zdfzfzef/de5.php');
$cntsrf=$cdb->prepare("SELECT count(str_owner) FROM srf_tools_request WHERE str_owner='11' AND str_status='not approved'");
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
												<a href="#" class="kt-profile__contact-item"   data-toggle="modal" data-target="#">

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
<div class="kt-portlet kt-profile">
                <div class="kt-profile__nav">
                  <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_2" role="tab">Resources</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_1" role="tab">Requests Status</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3" role="tab">Notifications</a>
                    </li>
                   
                  </ul>
                </div>
                
              </div>
							<div class="tab-content">
                <div class="tab-pane fade" id="kt_tabs_1_1" role="tabpanel">

                  <!--begin::Row-->
                  <div class="row">
                    
                    <div class="col-lg-12 col-xl-12 order-lg-12 order-xl-1">

                      <!--begin::Portlet-->
                      <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                          <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">General Statistics</h3>
                          </div>
                          <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-actions">
                              <a href="#" class="btn btn-default btn-sm btn-bold">XML</a>
                              <a href="#" class="btn btn-default btn-sm btn-bold">CSV</a>
                            </div>
                          </div>
                        </div>
                        <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
                          <div class="kt-widget-2">
                            <div class="kt-widget-2__content kt-portlet__space-x">
                              <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                                  <div class="kt-widget-2__item">
                                    <div class="kt-widget-2__item-title">
                                      Tools
                                    </div>
                                    <div class="kt-widget-2__item-stats">

                                      <div class="kt-widget-2__item-info">
                                       
                                        <div class="kt-widget-2__item-text">
                                           5 Grattoir:
                                        </div>
                                        <div class="kt-widget-2__item-value">
                                          Delivered
                                        </div>
                                      </div>
                                      <div class="kt-widget-2__item-chart">

                                        <!--Doc: For the chart initialization refer to "generalStatistics" function in "src\theme\app\scripts\custom\dashboard.js"
                  and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
                                        <canvas id="kt_widget_general_statistics_chart_1" width="80" height="40"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                                  <div class="kt-widget-2__item">
                                    <div class="kt-widget-2__item-title">
                                      Materials
                                    </div>
                                    
                                    <div class="kt-widget-2__item-stats">
                                      
                                      <div class="kt-widget-2__item-info">
                                       
                                        <div class="kt-widget-2__item-text">
                                          5 Chiffon:
                                        </div>
                                        <div class="kt-widget-2__item-value">
                                          Canceled
                                        </div>
                                      </div>
                                      <div class="kt-widget-2__item-chart">

                                        <!--Doc: For the chart initialization refer to "generalStatistics" function in "src\theme\app\scripts\custom\dashboard.js"
                  and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
                                        <canvas id="kt_widget_general_statistics_chart_2" width="80" height="40"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                                  <div class="kt-widget-2__item">
                                    <div class="kt-widget-2__item-title">
                                      Chemicals
                                    </div>
                                    <div class="kt-widget-2__item-stats">
                                      
                                      <div class="kt-widget-2__item-info">
                                        
                                        <div class="kt-widget-2__item-text">
                                          20 Falcom:
                                        </div>
                                        <div class="kt-widget-2__item-value">
                                          Success
                                        </div>
                                      </div>
                                      <div class="kt-widget-2__item-chart">

                                        <!--Doc: For the chart initialization refer to "generalStatistics" function in "src\theme\app\scripts\custom\dashboard.js"
                  and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
                                        <canvas id="kt_widget_general_statistics_chart_3" width="80" height="40"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                                  <div class="kt-widget-2__item">
                                    <div class="kt-widget-2__item-title">
                                      PPE
                                    </div>
                                    <div class="kt-widget-2__item-stats">
                                      
                                      <div class="kt-widget-2__item-info">
                                       
                                         
                                        
                                        
                                        <div class="kt-widget-2__item-text">
                                        5 Jetable:
                                        </div>
                                        <div class="kt-widget-2__item-value">
                                          Pending
                                        </div>
                                      </div>
                                      <div class="kt-widget-2__item-chart">

                                        <!--Doc: For the chart initialization refer to "generalStatistics" function in "src\theme\app\scripts\custom\dashboard.js"
                  and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
                                        <canvas id="kt_widget_general_statistics_chart_4" width="80" height="40"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- <div class="kt-widget-2__stats">
                                <div class="kt-widget-2__stats-author">
                                  <div class="kt-widget-2__stats-bullet kt-bg-brand"></div>
                                  <span class="kt-widget-2__stats-text">Author Sales</span>
                                </div>
                                <div class="kt-widget-2__stats-product">
                                  <div class="kt-widget-2__stats-bullet kt-bg-danger"></div>
                                  <span class="kt-widget-2__stats-text">Product Profit</span>
                                </div>
                              </div> -->
                            </div>
                            <div class="kt-widget-2__chart">
                              <canvas id="kt_widget_general_statistics_chart_main" height="250"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--end::Portlet-->
                    </div>
                    <div class="col-lg-6 col-xl-4  order-lg-1 order-xl-1">

                      <!--begin::Portlet-->
                      

                      <!--end::Portlet-->
                    </div>
                    
                    <div class="col-lg-6 col-xl-4  order-lg-1 order-xl-1">

                      <!--begin::Portlet-->
                      

                      <!--end::Portlet-->
                    </div>
                  </div>

                  <!--end::Row-->
                </div>
                <div class="tab-pane active" id="kt_tabs_1_2" role="tabpanel">

                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-lg-4 col-xl-3">
                      <div class="kt-portlet">
                        <div class="kt-portlet__body kt-portlet__body--fit">
                          <ul class="kt-nav kt-nav--bold kt-nav--md-space kt-nav--v3 kt-margin-t-20 kt-margin-b-20 nav nav-tabs" role="tablist">
                            <li class="kt-nav__item">
                              <a class="kt-nav__link active" data-toggle="tab" href="#kt_profile_tab_personal_information" role="tab">
                                <span class="kt-nav__link-icon"><i class="flaticon2-user-outline-symbol"></i></span>
                                <span class="kt-nav__link-text">Tools</span>
                                
                              </a>
                            </li>
                            <li class="kt-nav__item">
                              <a class="kt-nav__link" data-toggle="tab" href="#kt_profile_tab_account_information" role="tab">
                                <span class="kt-nav__link-icon"><i class="flaticon2-soft-icons-1"></i></span>
                                <span class="kt-nav__link-text">Materials</span>
                              </a>
                            </li>
                            <li class="kt-nav__item">
                              <a class="kt-nav__link" data-toggle="tab" href="#kt_profile_change_password" role="tab">
                                <span class="kt-nav__link-icon"><i class="flaticon2-lock"></i></span>
                                <span class="kt-nav__link-text">Chemicals</span>
                              </a>
                            </li>
                            <li class="kt-nav__item">
                              <a class="kt-nav__link" data-toggle="tab" href="#kt_profile_email_settings" role="tab">
                                <span class="kt-nav__link-icon"><i class="flaticon2-mail"></i></span>
                                <span class="kt-nav__link-text">PPE</span>
                              </a>
                            </li>
                            <li class="kt-nav__item">
                              <a class="kt-nav__link" data-toggle="tab" href="#kt_profile_ape" role="tab">
                                <span class="kt-nav__link-icon"><i class="flaticon2-document"></i></span>
                                <span class="kt-nav__link-text">APE</span>
                              </a>
                            </li>
                            
                          </ul>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-lg-8 col-xl-9">
                      <div class="tab-content">

                        <!--begin: Personal Information-->
                        <div class="tab-pane fade show active" id="kt_profile_tab_personal_information" role="tabpanel">
                          <div class="kt-portlet">
                            <div class="kt-portlet__head">
                              <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Tools<small>    </small></h3>
                              </div>
                              <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                  <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="flaticon2-gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                          <span class="kt-nav__section-text">Export Tools</span>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                                            <span class="kt-nav__link-text">CSV</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <tr>
                      <td style="width: 40%; vertical-align: middle;">
                        <div class="kt-section__content kt-section__content--border">
                          
                          <div class="row">
                            <div class="col">
                              
                                <div class="card card-body">
                      <?php
                      while($rowt = mysqli_fetch_array($resultt)) {
                      ?>
                      <span> 
                        <?php if (($rowt['wtl_standard']-$rowt['wtl_quantity'])>=3) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->

                        <a style="" href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm1"><?php echo $rowt['wtl_name'];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
                        <?php
                      }
                         if (($rowt['wtl_standard']-$rowt['wtl_quantity'])>=1 && ($rowt['wtl_standard']-$rowt['wtl_quantity'])<=2) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->

                        <a style="" href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm1"><?php echo $rowt['wtl_name'];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a> 
                        <?php 
                        }
                         
                         if (($rowt['wtl_standard']-$rowt['wtl_quantity'])==0) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a>--> 

                        <a style="" href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm1"><?php echo $rowt['wtl_name'];?><img src="img/signal-3.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#1dc9b7;"/></a>
                        <?php } ?>
                      </span>
                      <?php }  ?><br><span class="form-text text-muted">Battery Life & Colors Means Tool availability Status</span>
                                </div>
                              
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>

  
                

                      </td>
                    </tr>
                            
                          </div>
                        </div>

                        <!--end: Personal Information-->

                        <!--begin: Account Information-->
                        <div class="tab-pane fade" id="kt_profile_tab_account_information" role="tabpanel">
                          <div class="kt-portlet">
                            <div class="kt-portlet__head">
                              <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Materials <small>    </small></h3>
                              </div>
                              <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                  <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="la la-sellsy"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                          <span class="kt-nav__section-text">Export Tools</span>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                                            <span class="kt-nav__link-text">CSV</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <tr>
                              <td style="width: 40%; vertical-align: middle;">
                        <div class="kt-section__content kt-section__content--border">
                         
                          <div class="row">
                            <div class="col">
                      
                                <div class="card card-body">
                      




                      <?php
                      while($rowmt = mysqli_fetch_array($resultm)) {
                      ?>
                      <span> 
                        <?php if (($rowmt['wmt_standard']-$rowmt['wmt_quantity'])>=3) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#materialsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->

                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm1"><?php echo $rowmt['wmt_name'];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
                        <?php
                      }
                         if (($rowmt['wmt_standard']-$rowmt['wmt_quantity'])>=1 && ($rowmt['wmt_standard']-$rowmt['wmt_quantity'])<=2) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#materialsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->

                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm1"><?php echo $rowmt['wmt_name'];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a> 
                        <?php 
                        }
                         
                         if (($rowmt['wmt_standard']-$rowmt['wmt_quantity'])==0) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#materialsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->

                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm1"><?php echo $rowmt['wmt_name'];?><img src="img/signal-3.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#1dc9b7;"/></a>
                        <?php } ?>
                      </span>
                      <?php }  ?>





                                </div>
                              
                            </div>
                          </div>
                        </div>
                      </td>
                            </tr>
                          </div>
                        </div>

                        <!--end: Account Information-->

                        <!--begin: Change Password -->
                        <div class="tab-pane fade" id="kt_profile_email_settings" role="tabpanel">
                          <div class="kt-portlet">
                            <div class="kt-portlet__head">
                              <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">PPE<small>       </small></h3>
                              </div>
                              <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-toolbar">
                                  <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="la la-sellsy"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                          <span class="kt-nav__section-text">Quick Actions</span>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                            <span class="kt-nav__link-text">Statistics</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                            <span class="kt-nav__link-text">Events</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                            <span class="kt-nav__link-text">Reports</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-bell-1o"></i>
                                            <span class="kt-nav__link-text">Notifications</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                            <span class="kt-nav__link-text">Files</span>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <tr>
                              <td style="width: 40%; vertical-align: middle;">
                        <div class="kt-section__content kt-section__content--border">
                          
                          <div class="row">
                            <div class="col">
                              
                                <div class="card card-body">
                                  
                      <?php
                      while($rowp = mysqli_fetch_array($resultp)) {  
                      ?>
                      <span>
                        <?php if (($rowp['wppe_standard']-$rowp['wppe_quantity'])>=3) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#ppemodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm1"><?php echo $rowp['wppe_name'];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
                        <?php
                      }
                         if (($rowp['wppe_standard']-$rowp['wppe_quantity'])>=1 && ($rowp['wppe_standard']-$rowp['wppe_quantity'])<=2) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#ppemodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
                        <a href=""  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm1"><?php echo $rowp['wppe_name'];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
                        <?php 
                        }
                         
                         if (($rowp['wppe_standard']-$rowp['wppe_quantity'])==0) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#ppemodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm1"><?php echo $rowp['wppe_name'];?><img src="img/signal-3.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#1dc9b7;"/></a>
                        <?php } ?>
                      </span>
                      <?php }  ?>
                                </div>
                              
                            </div>
                          </div>
                        </div> 
                      </td>
                            </tr>
                          </div>
                        </div>

                        <div class="tab-pane fade" id="kt_profile_change_password" role="tabpanel">
                          <div class="kt-portlet">
                            <div class="kt-portlet__head">
                              <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Chemicals<small>       </small></h3>
                              </div>
                              <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-toolbar">
                                  <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="la la-sellsy"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                          <span class="kt-nav__section-text">Quick Actions</span>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                            <span class="kt-nav__link-text">Statistics</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                            <span class="kt-nav__link-text">Events</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                            <span class="kt-nav__link-text">Reports</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-bell-1o"></i>
                                            <span class="kt-nav__link-text">Notifications</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                            <span class="kt-nav__link-text">Files</span>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <td style="width: 40%; vertical-align: middle;">
                        <div class="kt-section__content kt-section__content--border">
                    
                          <div class="row">
                            <div class="col">
                             
                                <div class="card card-body">
                      <?php
                      while($rowc = mysqli_fetch_array($resultc)) {
                      ?>
                      <span> 
                      <?php if (($rowc['wch_standard']-$rowc['wch_quantity'])>=3) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#chemicalsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm1"><?php echo $rowc['wch_name'];?><img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
                        <?php
                      }
                         if (($rowc['wch_standard']-$rowc['wch_quantity'])>=1 && ($rowc['wch_standard']-$rowc['wch_quantity'])<=2) {
                        ?>

                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#chemicalsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm1"><?php echo $rowc['wch_name'];?><img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
                        <?php 
                        }
                         
                         if (($rowc['wch_standard']-$rowc['wch_quantity'])==0) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#chemicalsmodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a>--> 
                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm1"><?php echo $rowc['wch_name'];?><img src="img/signal-3.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#1dc9b7;"/></a>
                        <?php } ?>
                      </span>
                      <?php }  ?>
                                </div>
                              
                            </div>
                          </div>
                        </div>
                      </td>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="kt_profile_ape" role="tabpanel">
                          <div class="kt-portlet">
                            <div class="kt-portlet__head">
                              <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">APE<small>       </small></h3>
                              </div>
                              <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-toolbar">
                                  <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="la la-sellsy"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                          <span class="kt-nav__section-text">Quick Actions</span>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                            <span class="kt-nav__link-text">Statistics</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                            <span class="kt-nav__link-text">Events</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                            <span class="kt-nav__link-text">Reports</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-bell-1o"></i>
                                            <span class="kt-nav__link-text">Notifications</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                            <span class="kt-nav__link-text">Files</span>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <tr>
                            <td style="width: 50%; vertical-align: middle;">
                        <div class="kt-section__content kt-section__content--border">
                        
                          <div class="row">
                            <div class="col">
                              
                                <div class="card card-body">
                                  
                    <?php
                      while($rowa = mysqli_fetch_array($resulta)) {  
                      ?>
                      <span>
                        <?php if (($rowa['wape_standard']-$rowa['wape_quantity'])>=3) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#apemodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm1"><?php echo $rowa['wape_name'];?> <img src="img/signal-1.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#fd397a;" ></a>
                        <?php
                      }
                         if (($rowa['wape_standard']-$rowa['wape_quantity'])>=1 && ($rowa['wape_standard']-$rowa['wape_quantity'])<=2) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#apemodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm1"><?php echo $rowa['wape_name'];?> <img src="img/signal-2.png" style="float:right; width: 17px;height: 10px; font-size:12px; color:#ffb822;" /></a>
                        <?php 
                        }

                         if (($rowa['wape_standard']-$rowa['wape_quantity'])==0) {
                        ?>
                        <!--<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#apemodalapm1"><i style="font-size:20px; " class="la la-folder-open "></i></a> -->
                        <a href="" class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm1"><?php echo $rowa['wape_name'];?> <img src="img/signal-3.png" style="float:right; width: 17px; height: 10px; font-size:12px; color:#1dc9b7;"/></a>
                        <?php } ?>
                      </a></span>
                      <?php }  ?>
                                </div>
                              
                            </div>
                          </div>
                        </div> 
                       </td>
                    </tr>
                          </div>
                        </div>

                        <!--end: Email Settings -->
                      </div>
                    </div>
                  </div>

                  <!--end::Row-->
                </div>
                <div class="tab-pane fade" id="kt_tabs_1_3" role="tabpanel">

                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-lg-6 col-xl-4">

                      <!--begin::Portlet-->
                      <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                          <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Recent Notifications</h3>
                          </div>
                          <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-toolbar-wrapper">
                              <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="flaticon-more-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                      <span class="kt-nav__section-text">Export Tools</span>
                                    </li>
                                    <li class="kt-nav__item">
                                      <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-print"></i>
                                        <span class="kt-nav__link-text">Print</span>
                                      </a>
                                    </li>
                                    <li class="kt-nav__item">
                                      <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-copy"></i>
                                        <span class="kt-nav__link-text">Copy</span>
                                      </a>
                                    </li>
                                    <li class="kt-nav__item">
                                      <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                        <span class="kt-nav__link-text">Excel</span>
                                      </a>
                                    </li>
                                    <li class="kt-nav__item">
                                      <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                        <span class="kt-nav__link-text">CSV</span>
                                      </a>
                                    </li>
                                    <li class="kt-nav__item">
                                      <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                        <span class="kt-nav__link-text">PDF</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="kt-portlet__body">
                          <div class="kt-widget-6">

                            <!-- begin::Tab Content -->
                            <div class="kt-widget6__tab tab-content">
                              <div id="kt_personal_income_quater_15cb6c0ea153d0" class="tab-pane fade active show">
                                <div class="kt-widget-6__items">
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 1
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 3-1
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Khadija, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 4
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                         Nissrine, SOP
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 5
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="kt_personal_income_quater_25cb6c0ea153d0" class="tab-pane fade">
                                <div class="kt-widget-6__items">
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 6
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Khadija, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 8
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 9
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Nissrine, SOP
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 2-3
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="kt_personal_income_quater_35cb6c0ea153d0" class="tab-pane fade">
                                <div class="kt-widget-6__items">
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 2-3
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 3-1
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="kt_personal_income_quater_45cb6c0ea153d0" class="tab-pane fade">
                                <div class="kt-widget-6__items">
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 3-1
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 2-3
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif 3-1
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="kt-widget-6__item">
                                    <div class="kt-widget-6__item-pic">
                                      <img class="" src="img/apple-touch-icon.png" alt="" />
                                    </div>
                                    <div class="kt-widget-6__item-info">
                                      <div class="kt-widget-6__item-title">
                                        Notif
                                      </div>
                                      <div class="kt-widget-6__item-desc">
                                        Monya, DAF
                                      </div>
                                    </div>
                                    <div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
                                      <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                              <span class="kt-nav__section-text">EXPORT TOOLS</span>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-eye"></i>
                                                <span class="kt-nav__link-text">View</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-comment-o"></i>
                                                <span class="kt-nav__link-text">Coments</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                              </a>
                                            </li>
                                            <li class="kt-nav__item">
                                              <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- end::Tab Content -->

                            <!-- begin::Nav pills -->
                            <ul class="kt-widget-6__nav-items nav nav-pills nav-fill" role="tablist">
                              <li class="kt-widget-6__nav-item nav-item">
                                <a class="nav-link active show" data-toggle="pill" href="#kt_personal_income_quater_15cb6c0ea153d0">1</a>
                              </li>
                              <li class="kt-widget-6__nav-item nav-item">
                                <a class="nav-link" data-toggle="pill" href="#kt_personal_income_quater_25cb6c0ea153d0">2</a>
                              </li>
                              <li class="kt-widget-6__nav-item nav-item">
                                <a class="nav-link" data-toggle="pill" href="#kt_personal_income_quater_35cb6c0ea153d0">3</a>
                              </li>
                              <li class="kt-widget-6__nav-item nav-item">
                                <a class="nav-link" data-toggle="pill" href="#kt_personal_income_quater_45cb6c0ea153d0">4</a>
                              </li>
                            </ul>

                            <!-- end::Nav pills -->
                          </div>
                        </div>
                      </div>

                      <!--end::Portlet-->
                    </div>
                    <div class="col-lg-12 col-xl-8">

                      <!--begin::Portlet-->
                      <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                          <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Notification Content<small>32500 total</small></h3>
                          </div>
                          <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper kt-form">
                              <div class="kt-form__group kt-form__group--inline kt-margin-r-10">
                                <div class="kt-form__label">Sort By:</div>
                                <div class="kt-form__control" style="width: 160px;">
                                  <select class="form-control bootstrap-select" id="kt_form_status" title="Status">
                                    <option value="1">Pending</option>
                                    <option value="2">Delivered</option>
                                    <option value="3">Canceled</option>
                                    <option value="4">Success</option>
                                    <option value="5">Info</option>
                                    <option value="6">Warning</option>
                                  </select>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <div class="kt-portlet__body kt-portlet__body--fit">

                          <!--Doc: For the datatable initialization refer to "recentOrdersInit" function in "src\theme\app\scripts\custom\dashboard.js" -->
                          <div class="kt-datatable" id="kt_recent_orders"></div>
                        </div>
                      </div>

                      <!--end::Portlet-->
                    </div>
                  </div>

                  <!--end::Row-->
                </div>
                <div class="tab-pane fade" id="kt_tabs_1_4" role="tabpanel">

                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-lg-6 col-xl-4">

                      <!--begin::Portlet-->
                      

                      <!--end::Portlet-->
                    </div>
                    <div class="col-lg-6 col-xl-4">

                      <!--begin::Portlet-->
                      <div class="kt-portlet kt-portlet--height-fluid-half kt-widget-12">
                        
                        
                      </div>

                      <!--end::Portlet-->

                      <!--begin::Portlet-->
                      <div class="kt-portlet kt-portlet--height-fluid-half kt-widget-12">
                        
                        
                      </div>

                      <!--end::Portlet-->
                    </div>
                    <div class="col-lg-6 col-xl-4">

                      <!--begin::Portlet-->
                      <div class="kt-portlet kt-portlet--height-fluid-half kt-widget ">
                        
                      </div>

                      <!--end::Portlet-->

                      <!--begin::Portlet-->
                      <div class="kt-portlet kt-portlet--height-fluid-half kt-widget-13">
                        <div class="kt-portlet__body">
                        
                        </div>
                      </div>

                      <!--end::Portlet-->
                    </div>
                  </div>

                  <!--end::Row-->
                </div>
              </div>

<!-- <div class="modal fade bd-example-modal-xl" id="toolsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php // include('controls/apm1/details/detailst.php')?>
													</div>
<div class="modal fade" id="materialsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<?php // include('controls/apm1/details/detailsm.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="chemicalsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php // include('controls/apm1/details/detailsc.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="ppemodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php // include('controls/apm1/details/detailsp.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="apemodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php // include('controls/apm1/details/detailsa.php')?>
													</div> -->


<div class="modal fade bd-example-modal-sm" id="toolsppl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
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

																		<?php include('controls/apm1/details/detailst.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade bd-example-modal-sm" id="matsppl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
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

																		<?php include('controls/apm1/details/detailsm.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade bd-example-modal-sm" id="chemsppl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
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

																		<?php include('controls/apm1/details/detailsc.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade bd-example-modal-sm" id="ppeppl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
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

																		<?php include('controls/apm1/details/detailsp.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade bd-example-modal-sm" id="apeppl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
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

																		<?php include('controls/apm1/details/detailsa.php')?>
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
																		<span aria-hidden="true">??</span>
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

<div class="modal fade bd-example-modal-sm" id="matsinsmodalapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
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

																		<?php include('controls/apm1/showmat.php');?>
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
																		<span aria-hidden="true">??</span>
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
																		<span aria-hidden="true">??</span>
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
																		<span aria-hidden="true">??</span>
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



<div class="modal fade bd-example-modal-sm" id="tooldefineapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
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

																		<?php include('controls/apm1/tools/define.php')?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade bd-example-modal-sm" id="matdefineapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
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

                                    <?php include('controls/apm1/mats/define.php')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
<div class="modal fade bd-example-modal-sm" id="chemdefineapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
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

                                    <?php include('controls/apm1/chems/define.php')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
<div class="modal fade bd-example-modal-sm" id="ppedefineapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
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

                                    <?php include('controls/apm1/ppe/define.php')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
<div class="modal fade bd-example-modal-sm" id="apedefineapm1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
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

                                    <?php include('controls/apm1/ape/define.php')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

<div class="modal fade bd-example-modal-sm" id="srboard" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
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

                                    <?php include('controls/apm1/srf.php')?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
 <div class="modal fade bd-example-modal-sm" id="srinvoice" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Supply Request Form:</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">??</span>
                                  </button>
                              
                                </div>
                                
                            
                            

                                    <?php include('controls/apm1/tools/invoice.php')?>
                                                       
                          </div>
                        </div>
                      </div> 



































</body>
</html>