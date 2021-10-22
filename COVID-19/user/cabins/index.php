<?php
session_start();
if (isset($_SESSION['userid'])) {
	$gwidcab = $_SESSION['userid'];
	if (isset($_GET['id'])) {
		$cabinid = $_GET['id'];
		require('../../controls/zdze8efzedzdeezd/de5.php');
		$findcab = $cdb->prepare("SELECT * FROM cabins WHERE cabn_name='$cabinid'");
		$findcab->execute();
		if ($findcab === false) {
			echo "We Have Problem! We will fix it soon.";
		} else {
			$rescabin = $findcab->get_result();
			$fuser = $cdb->prepare("SELECT * FROM user WHERE u_public_id='$gwidcab' LIMIT 1");
			$fuser->execute();
			if ($fuser === false) {
				echo "We Have Problem! We will fix it soon.";
			} else {
				$resf = $fuser->get_result();
?>

				<?php
				while ($userid = $resf->fetch_row()) {
					$usename = $userid[3];
					$useridc = $userid[1];
					$usertype = $userid[2];
				?>
					<!DOCTYPE html>


					<html lang="en">

					<!-- begin::Head -->

					<head>

						<!--begin::Base Path (base relative path for assets of this page) -->
						<base>

						<!--end::Base Path -->
						<meta charset="utf-8" />
						<title>Cabins Disinfection Plan</title>
						<meta name="description" content="">
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
						<link href="../../../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

						<!--end:: Global Mandatory Vendors -->

						<!--begin:: Global Optional Vendors -->
						<link href="../../../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

						<!--end:: Global Optional Vendors -->

						<!--begin::Global Theme Styles(used by all pages) -->
						<link href="../../../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

						<!--end::Global Theme Styles -->

						<!--begin::Layout Skins(used by all pages) -->
						<link href="../../../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
						<link href="../../../assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />

						<!--end::Layout Skins -->
						<style type="text/css">
							@media (min-width: 1025px) {
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


							.ticket {
								background: #ffffff;
								border-radius: 4px;
								color: #0b1521;
								font-family: "Roboto", sans-serif;
								font-size: 14px;
								font-weight: normal;
								line-height: 20px;
								padding: 30px;


							}

							.ticket-header {
								display: -webkit-box;
								display: flex;
								-webkit-box-pack: justify;
								justify-content: space-between;
								margin: 20px 0 10px 0;
								position: relative;
							}

							.ticket-header>svg.separator {
								-webkit-animation: flight 2s infinite;
								animation: flight 2s infinite;
								display: block;
								color: #d3e6f4;
								height: 30px;
								position: absolute;
								top: 50%;
								left: 50%;
								-webkit-transform: translate(-50%, -50%);
								transform: translate(-50%, -50%);
								width: 30px;
							}

							.ticket-departure {
								text-align: left;
							}

							.ticket-destination {
								text-align: right;
							}

							.ticket .city-abbr {
								color: #3b8acf;
								font-size: 45px;
								font-weight: 900;
								letter-spacing: -2px;
								line-height: 50px;
								margin: 0;
								text-transform: uppercase;
							}

							.ticket .city-name {
								color: #aaaaac;
								font-size: 16px;
								text-transform: uppercase;
							}

							.ticket .item:not(:last-child) {
								margin-bottom: 20px;
							}

							.ticket .name {
								color: #aaaaac;
								font-size: 12px;
								font-weight: normal;
								line-height: 20px;
								margin: 0;
								text-transform: uppercase;
							}

							.ticket .value {
								color: #000000;
								font-size: 16px;
								line-height: 20px;
							}

							.row {
								display: -webkit-box;
								display: flex;
								-webkit-box-orient: horizontal;
								-webkit-box-direction: normal;
								flex-direction: row;
							}

							.row-vertical {
								display: -webkit-box;
								display: flex;
								height: 100%;
								-webkit-box-orient: vertical;
								-webkit-box-direction: normal;
								flex-direction: column;
								-webkit-box-pack: justify;
								justify-content: space-between;
							}

							.row-vertical>.col {
								-webkit-box-flex: 0;
								flex: 0;
							}

							.row>.col {
								-webkit-box-flex: 1;
								flex: 1;
							}

							.row>.col.half {
								flex-basis: 50%;
							}
						</style>
						<link rel="shortcut icon" href="../../../img/favicon-32x32.png" />
					</head>

					<!-- end::Head -->

					<!-- begin::Body -->

					<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

						<!-- begin:: Header Mobile -->
						<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " style="height: 80px;">
							<div class="kt-header-mobile__logo">
								<a href="">
									<img alt="Logo" src="../../img/logo-v3.png" width="115" style="padding-top: " />
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
																<h3 class="kt-subheader__title" style="color: white;">COVID-19 Cabins Disinfection Solution


																	<span style="text-transform: uppercase;">
																	</span>



																</h3>

															</div>

														</div>
													</div>

												</div>
											</div>

										</div>




										<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
											<div class="row">
												<div class="col-lg-3 col-xl-3 order-lg-2 order-xl-1">

												</div>
												<?php

												while ($showcab = $rescabin->fetch_row()) {

													$cabid = $showcab[0];
													$cablab = $showcab[1];





													$fteam = $cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
													$fteam->execute();
													if ($fteam === false) {
														echo "We Have Problem! We will fix it soon.";
													} else {
														$resfteam = $fteam->get_result();
														if (mysqli_num_rows($resfteam) != 0) {
															while ($showteam = $resfteam->fetch_row()) {
																$membertema = $showteam[3];
															}
														} else {
															$membertema = "NONE";
														}
													}

												?>

													<div style="margin-left: 10px;" class="col-lg-5 col-xl-5 order-lg-2 order-xl-1">
														<?php if ($usertype == "admin") {

														?>
															<!-- <div class="btn-group-vertical" style="float: right;">
																<ul class="kt-sticky-toolbar" style="margin-top: 30px; position: absolute;">
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--demo-toggle" style="text-transform: uppercase;" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="" data-placement="right" data-original-title="Data report for <?php ?>">
				<a href="#" class="">Report</a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--builder" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Disinfect ">
				<a href="" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-biohazard"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--docs" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Infos">
				<a href="?page=docs" target="_blank"><i class="flaticon2-settings"></i></a>
			</li>
		</ul>
															</div> --><?php } ?>
														<div class="ticket" style="float: left;">

															<div class="ticket-body">


																<div class="row">
																	<div class="ticket-header">
																		<div class="ticket-departure">
																			<h1 class="city-abbr"><?php echo $showcab[1] ?> <span style="color: #CCC;"><?php echo $showcab[7] ?></span></h1><span class="city-name"><?php echo $showcab[2] ?></span>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="row-vertical">
																			<div class="col-md-12" align="center">

																				<h2 class="name">Status</h2><span class="value" style="align-content: center; text-align: center;">
																					<?php if ($showcab[3] == "Disinfected") {

																						$time = $showcab[4];
																						$time = strtotime($time) + 3600 * 8; // Add 8 hours
																						$time = date('Y-m-d H:i:s', $time); // Back to string

																						$today = date("Y-m-d H:i:s");


																						if ($time > $today) {


																					?>
																							<b style="color: #1dc9b7;  text-transform: uppercase;"><?php echo $showcab[3] ?></b></span>
																			<?php } elseif ($time < $today) {  ?>
																				<b style="color: #ffb822 ;  text-transform: uppercase;">Requires Redisinfection</b></span>
																		<?php
																						}
																					} ?>


																		<?php if (($showcab[3] == "Not disinfected") || ($showcab[3] == "Canceled")) { ?>
																			<b style="color: #fd397a; text-transform: uppercase;"><?php echo $showcab[3] ?></b></span>
																		<?php
																		} ?>
																		<?php if ($showcab[3] == "In progress") { ?>
																			<b style="color: #00A1db;  text-transform: uppercase;"><?php echo $showcab[3] ?></b></span>
																		<?php
																		} ?>

																		<?php if ($showcab[3] == "Disinfected") {




																			$time = $showcab[4];
																			$time = strtotime($time) + 3600 * 8; // Add 8 hours
																			$time = date('Y-m-d H:i:s', $time); // Back to string

																			$today = date("Y-m-d H:i:s");


																			if ($time > $today) {


																		?>
																				<div class="kt-iconbox kt-iconbox--success" style="align-content: center; text-align: center; padding: 5px;">

																					<div class="kt-iconbox__icon" style="margin-bottom: 0px;">

																						<i class="fa fa-biohazard" style=" font-size: 40px;"></i>
																					</div>

																				</div>
																			<?php } elseif ($time < $today) { ?>


																				<div class="kt-iconbox kt-iconbox--warning" style="align-content: center; text-align: center; padding: 5px;">

																					<div class="kt-iconbox__icon" style="margin-bottom: 0px;">

																						<i class="fa fa-biohazard" style=" font-size: 40px;"></i>
																					</div>

																				</div>


																			<?php } ?>

																		<?php
																		} ?>
																		<?php if (($showcab[3] == "Not disinfected") || ($showcab[3] == "Canceled")) { ?>

																			<div class="kt-iconbox kt-iconbox--danger" style="align-content: center; text-align: center; padding: 5px;">

																				<div class="kt-iconbox__icon" style="margin-bottom: 0px;">

																					<i class="fa fa-biohazard" style="font-size: 40px;"></i>
																				</div>

																			</div>
																		<?php
																		} ?>
																		<?php if ($showcab[3] == "In progress") { ?>

																			<div class="kt-iconbox kt-iconbox--brand" style="align-content: center; text-align: center; padding: 5px;">

																				<div class="kt-iconbox__icon" style="margin-bottom: 0px;">

																					<i class="fa fa-biohazard" style=" font-size: 40px;"></i>
																				</div>

																			</div>
																		<?php
																		} ?>

																			</div>
																			<div class="col">
																				<div class="item">
																					<h2 class="name">Team </h2><span class="value">
																						<?php if (($showcab[3] == "Disinfected") || ($showcab[3] == "Canceled") || ($showcab[3] == "In progress")) { ?>
																							<?php

																							$fm = $cdb->prepare("SELECT * FROM user WHERE u_public_id='$showcab[5]'");
																							$fm->execute();
																							if ($fm === false) {
																								echo "We Have Problem! We will fix it soon.";
																							} else {
																								$frm = $fm->get_result();
																								if (mysqli_num_rows($frm) != 0) {
																									while ($showm = $frm->fetch_row()) {
																										$member = $showm[3];
																										echo $member;
																									}
																								} else {
																									$member = "NONE";
																								}
																							}

																							$fteam = $cdb->prepare("SELECT * FROM cabins_teams WHERE cabnt_member='$showcab[5]'");
																							$fteam->execute();
																							if ($fteam === false) {
																								echo "We Have Problem! We will fix it soon.";
																							} else {
																								$resfteam = $fteam->get_result();
																								if (mysqli_num_rows($resfteam) != 0) {
																									while ($showteam = $resfteam->fetch_row()) {
																										$membertema = $showteam[2];
																							?> - <span style="font-weight: 600;"><?php echo $membertema; ?> Shift</span>
																							<?php }
																								} else {
																									$membertema = "NONE";
																								}
																							}
																						} else { ?>
																							NONE
																						<?php } ?>
																					</span>
																				</div>
																			</div>
																			<div class="col">

																				<div class="item">
																					<h2 class="name">Duration </h2><span class="value">
																						<?php if (($showcab[3] == "Disinfected") || ($showcab[3] == "Canceled")) { ?>


																							<span class="dtr-details">

																								<?php

																								$lastfinish = $cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND cabnch_request_status='finish' ORDER BY cabnch_op_begin DESC LIMIT 1");

																								$lastfinish->execute();
																								if ($lastfinish === false) {
																									echo "We Have Problem! We will fix it soon.";
																								} else {
																									$reslast = $lastfinish->get_result();
																									if (mysqli_num_rows($reslast) != 0) {
																										while ($showfisnish = $reslast->fetch_row()) {




																											$lastbegin = $cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01' AND  (cabnch_request_status='Redisinfect' OR cabnch_request_status='Disinfect') ORDER BY cabnch_op_begin DESC LIMIT 1");

																											$lastbegin->execute();
																											if ($lastbegin === false) {
																												echo "We Have Problem! We will fix it soon.";
																											} else {
																												$reslastb = $lastbegin->get_result();
																												while ($showbegin = $reslastb->fetch_row()) {







																													if ((strtotime($showfisnish[5]) > strtotime($showbegin[5])) && (strtotime($showfisnish[5]) - strtotime($showbegin[5]) > 60)) {

																														echo  number_format((float)((abs((strtotime($showfisnish[5]) - strtotime($showbegin[5])))) / 60), 0, '.', '') . "min";
																													} else {
																														echo "<span class='text-muted'>Less than 1 minute</span>";
																													}
																												}
																											}
																										}
																									} else {
																								?>
																										<span class="text-muted" style="font-size: 9.9px;">less than 1 minute</span>
																								<?php
																									}
																								} ?>
																							</span>


																						<?php } else {
																						?>
																							0
																						<?php
																						}
																						?>

																					</span>
																				</div>
																			</div>
																			<div class="col">
																				<div class="item">
																					<?php if ($showcab[3] == "Disinfected") { ?><h2 class="name">Last Operation</h2><span class="value">
																							<h2 class="name">Last Operation</h2><span class="value"><?php


																																					$time = $showcab[4];
																																					$time = strtotime($time) + 3600 * 8; // Add 8 hours
																																					$time = date('Y-m-d H:i:s', $time); // Back to string

																																					$today = date("Y-m-d H:i:s");


																																					if ($time > $today) { ?>

																									<b style="color: #1dc9b7; text-transform: uppercase;"> <?php echo date("Y-m-d H:i:s", strtotime($showcab[4] . '-1 hour')); ?></b>

																								<?php
																																					} elseif ($time < $today) {
																								?>
																									<b style="color: #fd397a; text-transform: uppercase;"> <?php echo date("Y-m-d H:i:s", strtotime($showcab[4] . '-1 hour')); ?></b>


																								<?php } ?>
																							</span>
																						<?php } elseif ($showcab[3] == "In progress") { ?>
																							<h2 class="name">Started at</h2><span class="value"><?php


																																				$time = $showcab[4];
																																				$time = strtotime($time) + 3600; // Add 1 hour
																																				$time = date('Y-m-d H:i:s', $time); // Back to string

																																				$today = date("Y-m-d H:i:s");


																																				if ($time > $today) { ?>

																									<b style="color: #00A1db; text-transform: uppercase;"> <?php echo date("Y-m-d H:i:s", strtotime($showcab[4] . '-1 hour')); ?></b>

																								<?php
																																				} elseif ($time < $today) {
																								?>
																									<b style="color: #ffb822; text-transform: uppercase;"> <?php echo date("Y-m-d H:i:s", strtotime($showcab[4] . '-1 hour')); ?></b>


																								<?php } ?>
																							</span>
																						<?php } elseif ($showcab[3] == "Not disinfected") { ?>
																							<h2 class="name">Last Operation</h2><span class="value">
																								<b style="color: #fd397a; text-transform: uppercase;"> Never</b>

																							</span>
																						<?php } elseif ($showcab[3] == "Canceled") { ?>
																							<h2 class="name">Canceled On</h2><span class="value">
																								<b style="color: #ffb822; text-transform: uppercase;"> <?php echo date("Y-m-d H:i:s", strtotime($showcab[4] . '-1 hour')); ?></b>



																							</span>
																						<?php } elseif ($showcab[3] == "Not available") { ?>
																							<h2 class="name">Holded on since</h2><span class="value">

																								<b style="color: #ffb822; text-transform: uppercase;"> <?php echo date("Y-m-d H:i:s", strtotime($showcab[4] . '-1 hour')); ?></b>



																							</span>
																						<?php } ?>
																						</span>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="col-md-6">
																		<?php if ($showcab[3] == "Disinfected") {


																			$time = $showcab[4];
																			$time = strtotime($time) + 3600 * 8; // Add 8 hours
																			$time = date('Y-m-d H:i:s', $time); // Back to string

																			$today = date("Y-m-d H:i:s");


																			if ($time > $today) {
																		?>

																				<div class="kt-iconbox kt-iconbox--success">
																					<img class="ticket-qrcode" src="../../img/disinfect.png" alt="QR Code" />


																				</div>
																			<?php } elseif ($time < $today) { ?>


																				<div class="kt-iconbox kt-iconbox--success">
																					<img class="ticket-qrcode" src="../../img/Cabin-01-in-process.png" alt="QR Code" />


																				</div>

																				<?php } ?><?php
																						} ?>
																				<?php if (($showcab[3] == "Not disinfected") || ($showcab[3] == "Canceled")) { ?>

																					<div class="kt-iconbox kt-iconbox--danger">
																						<img class="ticket-qrcode" src="../../img/nodisinfect.png" alt="QR Code" />


																					</div>
																				<?php
																				} ?>
																				<?php if ($showcab[3] == "In progress") { ?>

																					<div class="kt-iconbox kt-iconbox--brand">
																						<img class="ticket-qrcode" src="../../img/inprogress.png" alt="QR Code" />


																					</div>
																				<?php
																				} ?>
																	</div>
																	<br>


																</div>
																<div class="row" style="align-content: center;" align="center">
																	<?php if (($showcab[3] == "Not disinfected") || ($showcab[3] == "Canceled")) { ?>

																		<div class="col-lg-12">
																			<button style="align-content: center;" type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#redisinfectcan">
																				<i class="fa fa-biohazard"></i>
																				Disinfect
																			</button>
																		</div>
																	<?php  } ?>
																	<?php if ($showcab[3] == "Disinfected") { ?>

																		<div class="col-lg-12">
																			<button style="align-content: center;" type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#redsinfectopcabin">
																				<i class="fa fa-biohazard"></i>
																				Redisinfect
																			</button>
																		</div>
																	<?php } ?>

																	<?php if (($showcab[3] == "In progress") && ($showcab[5] == $useridc)) { ?>

																		<div class="col-lg-12">
																			<button style="align-content: center;" type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#finishopcabin">
																				<i class="fa fa-biohazard"></i>
																				Finish
																			</button>
																			<button style="align-content: center;" type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#cancelopcab">
																				<i class="fa fa-biohazard"></i>
																				Cancel
																			</button>
																		</div>
																	<?php } ?>

																	<?php if (($showcab[3] == "In progress") && ($showcab[5] != $useridc) && ($usertype == "admin")) { ?>

																		<div class="col-lg-12">
																			<button style="align-content: center;" type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#cancelopcab">
																				<i class="fa fa-biohazard"></i>
																				Cancel
																			</button>
																			<button style="align-content: center;" type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#finishopcabin">
																				<i class="fa fa-biohazard"></i>
																				Finish
																			</button>
																		</div>


																	<?php } ?>
																	<?php if (($showcab[3] == "In progress") && ($showcab[5] != $useridc) && ($usertype != "admin")) { ?>

																		<div class="col-lg-12">

																			<button style="align-content: center;" type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#finishopcabin">
																				<i class="fa fa-biohazard"></i>
																				Finish
																			</button>
																		</div>


																	<?php } ?>
																</div>

															</div>
														</div>



													</div>

											</div>
										</div>



										<div class="kt-portlet__head-wrapper">

											<div class="modal fade bd-example-modal-lg" id="redisinfectcan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalCenterTitle">Redisinfection</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="kt-portlet">
																<div class="kt-iconbox kt-iconbox--success">
																	<div class="kt-iconbox__icon">

																		<i class="fa fa-biohazard" style="font-size: 75px"></i>
																	</div>
																	<h3 class="kt-demo-panel__title">

																		<?php echo $usename; ?>

																		. You will Start Redisinfection for <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab; ?> </span>
																	</h3>
																	<div class="kt-iconbox__content">
																		<form method="post">
																			<input type="hidden" value="<?php echo $useridc; ?>" name="useridr">
																			<input type="hidden" value="<?php echo $cablab; ?>" name="cabinidr">
																			<input type="hidden" value="<?php echo $showcab[2]; ?>" name="cabinowner">
																			<button type="submit" name="redisinfect" class="btn btn-brand btn-lg">Yes</button>
																		</form>
																		<?php if (isset($_POST["redisinfect"])) {
																			require("../../controls/redisinfect.php");
																		} ?>
																	</div>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="modal fade bd-example-modal-lg" id="redisinfectcan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalCenterTitle">New Operation order</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="kt-portlet">
																<div class="kt-iconbox kt-iconbox--success">
																	<div class="kt-iconbox__icon">

																		<i class="fa fa-biohazard" style="font-size: 75px"></i>
																	</div>
																	<h3 class="kt-demo-panel__title">

																		<?php echo $usename; ?>

																		. You will Start Disinfection for <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab; ?> </span>
																	</h3>
																	<div class="kt-iconbox__content">
																		<form method="post">
																			<input type="hidden" value="<?php echo $useridc; ?>" name="useridd">
																			<input type="hidden" value="<?php echo $cablab; ?>" name="cabinidd">
																			<input type="hidden" value="<?php echo $showcab[2]; ?>" name="cabinowner">
																			<button type="submit" name="disinfectc" class="btn btn-brand btn-lg">Yes</button>
																		</form>
																		<?php if (isset($_POST["disinfectc"])) {
																			require("../../controls/add.php");
																		} ?>
																	</div>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
											<div class="modal fade bd-example-modal-lg" id="finishopcabin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalCenterTitle">Complete Disinfection</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="kt-portlet">
																<div class="kt-iconbox kt-iconbox--success">
																	<div class="kt-iconbox__icon">

																		<i class="fa fa-biohazard" style="font-size: 75px"></i>
																	</div>
																	<h3 class="kt-demo-panel__title">

																		<?php echo $usename; ?>

																		. You Finish Disinfection Operation For <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab; ?> </span>
																	</h3>
																	<div class="kt-iconbox__content">
																		<form method="post">
																			<input type="hidden" value="<?php echo $useridc; ?>" name="useridf">
																			<input type="hidden" value="<?php echo $cablab; ?>" name="cabinidf">
																			<input type="hidden" value="<?php echo $showcab[2]; ?>" name="cabinowner">
																			<input type="submit" name="fdisinfectc" class="btn btn-brand btn-lg" value="Yes" />
																			<input type="submit" name="fcancelc" class="btn btn-danger btn-lg" value="Cancel" />
																		</form>
																		<?php if (isset($_POST["fdisinfectc"])) {
																			require("../../controls/finish.php");
																		} elseif (isset($_POST["fcancelc"])) {
																			require("../../controls/cancel.php");
																		} ?>
																	</div>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
											<div class="modal fade bd-example-modal-lg" id="redsinfectopcabin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalCenterTitle">Redisinfection</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="kt-portlet">
																<div class="kt-iconbox kt-iconbox--success">
																	<div class="kt-iconbox__icon">

																		<i class="fa fa-biohazard" style="font-size: 75px"></i>
																	</div>
																	<h3 class="kt-demo-panel__title">

																		<?php echo $usename; ?>

																		. You will Start Redisinfection for <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab; ?> </span>
																	</h3>
																	<div class="kt-iconbox__content">
																		<form method="post">
																			<input type="hidden" value="<?php echo $useridc; ?>" name="useridr">
																			<input type="hidden" value="<?php echo $cablab; ?>" name="cabinidr">
																			<input type="hidden" value="<?php echo $showcab[2]; ?>" name="cabinowner">
																			<input type="hidden" value="<?php echo $showcab[2]; ?>" name="cabinowner">
																			<button type="submit" name="redisinfect1" class="btn btn-brand btn-lg">Yes</button>
																		</form>
																		<?php if (isset($_POST["redisinfect1"])) {
																			require("../../controls/redisinfect.php");
																		} ?>
																	</div>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="modal fade bd-example-modal-lg" id="cancelopcab" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalCenterTitle">Cancel Disinfection</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="kt-portlet">
																<div class="kt-iconbox kt-iconbox--danger">
																	<div class="kt-iconbox__icon">

																		<i class="fa fa-biohazard" style="font-size: 75px"></i>
																	</div>
																	<h3 class="kt-demo-panel__title">

																		<?php echo $usename; ?>

																		. You need to cancel Disinfection for <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab; ?> </span>
																	</h3>
																	<div class="kt-iconbox__content">
																		<form method="post">
																			<input type="hidden" value="<?php echo $useridc; ?>" name="useridcnl">
																			<input type="hidden" value="<?php echo $cablab; ?>" name="cabincanceld">
																			<input type="hidden" value="<?php echo $showcab[2]; ?>" name="cabinowner">
																			<button type="submit" name="canceldis" class="btn btn-brand btn-lg">Yes</button>
																		</form>
																		<?php if (isset($_POST["canceldis"])) {
																			require("../../controls/cancel.php");
																		} ?>
																	</div>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>




										<?php } ?>



										<script type="text/javascript">
											var form = document.getElementById("kt_form");

											document.getElementById("your-id").addEventListener("click", function() {
												form.submit();
											});
										</script>




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
							$('input[type="checkbox"]').click(function() {

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
								if (this.checked)
									$('.qccheck').style.display = "block";

								else
									$('.qccheck').style.display = "none";



							}

							document.getElementById("rtgcheck").onclick = function() {
								if (this.checked)
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
						<?php
						include("modals.php");
						?>





						<!-- end::Global Config -->

						<!--begin:: Global Mandatory Vendors -->
						<script src="../../../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

						<!--end:: Global Mandatory Vendors -->

						<!--begin:: Global Optional Vendors -->
						<script src="../../../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
						<script src="../../../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

						<!--end:: Global Optional Vendors -->

						<!--begin::Global Theme Bundle(used by all pages) -->
						<script src="../../../assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
						<script src="../../../assets/js/demo1/pages/crud/forms/widgets/bootstrap-maxlength.js" type="text/javascript"></script>

						<!--end::Global Theme Bundle -->

						<!--begin::Page Scripts(used by this page) -->
						<script src="../js/table-html.js" type="text/javascript"></script>
						<script src="../../../assets/js/demo1/pages/components/keen-wizard/wizard-demo-v3.js" type="text/javascript"></script>
						<script src="../../../assets/js/demo1/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>

						<!--end::Page Scripts -->
					</body>

					<!-- end::Body -->

					</html>
				<?php


				}

				?>

	<?php

			}
		}
	}
} else {


	?>
	<meta http-equiv="refresh" content="../../cabins/index.php?id=$cabinid">

<?php
	exit;
}

?>