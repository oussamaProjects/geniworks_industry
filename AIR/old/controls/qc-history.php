
    <script src="controls/zoom-D.js"></script>




									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Recent Works</h3>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget-6">

												<!-- begin::Tab Content -->
												<div class="kt-widget6__tab tab-content">
													<div id="qcp1" class="tab-pane fade active show">
														<div class="kt-widget-6__items">
														
			
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' AND acij_asset='QC' LIMIT 3 OFFSET 0");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();

								?>
															<?php
while ($showasset=$respsrf->fetch_row()) {
								?>
															
															<div class="kt-widget-6__item">
																<div class="kt-widget-6__item-pic">
																	<img src="controls/img/assets/<?php echo $showasset[5];?>"  class="zoomD" class="" />
																</div>
																<div class="kt-widget-6__item-info">
																	<div class="kt-widget-6__item-title">
																		<?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
																	</div>
																	<div class="kt-widget-6__item-desc">
																		<?php
														if ($showasset[6]=='1') {
															?>
																 <span style="color: #00A1db;">Status :</span> <span style="color: #1dc9b7;">Clean</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Nothing To Report

                                                            <?php
                                                        }

                                                        if ($showasset[6]=='') {
                                                            ?>
                                                                <span style="color: #00A1db;">Status :</span> <span style="color: #ef1f41;">Requires Cleaning</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Call GENIWORKS

															<?php
														}

														?>
																	</div>
																</div>
																
															</div>
														
														

														<?php }?>

																
								 
                                            <?php }?>
														</div>
													</div>
													<div id="qcp2" class="tab-pane fade">
														<div class="kt-widget-6__items">
															

<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' AND acij_asset='QC' LIMIT 3 OFFSET 3");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();

								?>
															<?php
while ($showasset=$respsrf->fetch_row()) {
								?>
															
															<div class="kt-widget-6__item">
																<div class="kt-widget-6__item-pic">
																	<img src="controls/img/assets/<?php echo $showasset[5];?>"  class="" />
																</div>
																<div class="kt-widget-6__item-info">
																	<div class="kt-widget-6__item-title">
																		<?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
																	</div>
																	<div class="kt-widget-6__item-desc">
																		<?php
														if ($showasset[6]=='1') {
															?>
																 <span style="color: #00A1db;">Status :</span> <span style="color: #1dc9b7;">Clean</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Nothing To Report

                                                            <?php
                                                        }

                                                        if ($showasset[6]=='') {
                                                            ?>
                                                                <span style="color: #00A1db;">Status :</span> <span style="color: #ef1f41;">Requires Cleaning</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Call GENIWORKS

															<?php
														}

														?>
																	</div>
																</div>
															</div>
														
														<?php }?>
														
																
								 
                                            <?php }?>
															
															
															
														</div>
													</div>
													<div id="qcp3" class="tab-pane fade">
														<div class="kt-widget-6__items">
															
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' AND acij_asset='QC' LIMIT 3 OFFSET 6");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();

								?>
															<?php
while ($showasset=$respsrf->fetch_row()) {
								?>
															
															<div class="kt-widget-6__item">
																<div class="kt-widget-6__item-pic">
																	<img src="controls/img/assets/<?php echo $showasset[5];?>"  class="" />
																</div>
																<div class="kt-widget-6__item-info">
																	<div class="kt-widget-6__item-title">
																		<?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
																	</div>
																	<div class="kt-widget-6__item-desc">
																		<?php
														if ($showasset[6]=='1') {
															?>
																<span style="color: #00A1db;">Status :</span> <span style="color: #1dc9b7;">Clean</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Nothing To Report

                                                            <?php
                                                        }

                                                        if ($showasset[6]=='') {
                                                            ?>
                                                                <span style="color: #00A1db;">Status :</span> <span style="color: #ef1f41;">Requires Cleaning</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Call GENIWORKS

															<?php
														}

														?>
																	</div>
																</div>
															</div>
															
														<?php }?>
														
																
								 
                                            <?php }?>
                                        </div>
													</div>
													<div id="qcp4" class="tab-pane fade">
														<div class="kt-widget-6__items">
															
															<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' AND acij_asset='QC' LIMIT 3 OFFSET 9");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();

								?>
															<?php
while ($showasset=$respsrf->fetch_row()) {
								?>
															
															<div class="kt-widget-6__item">
																<div class="kt-widget-6__item-pic">
																	<img src="controls/img/assets/<?php echo $showasset[5];?>"  class="" />
																</div>
																<div class="kt-widget-6__item-info">
																	<div class="kt-widget-6__item-title">
																		<?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
																	</div>
																	<div class="kt-widget-6__item-desc">
																		<?php
														if ($showasset[6]=='1') {
															?>
																 <span style="color: #00A1db;">Status :</span> <span style="color: #1dc9b7;">Clean</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Nothing To Report

                                                            <?php
                                                        }

                                                        if ($showasset[6]=='') {
                                                            ?>
                                                                <span style="color: #00A1db;">Status :</span> <span style="color: #ef1f41;">Requires Cleaning</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Call GENIWORKS

															<?php
														}

														?>
																	</div>
																</div>
															
															</div>





														<?php }?>
														
																
								 
                                            <?php }?>
															
														
														</div>
													</div>
												</div>

												<!-- end::Tab Content -->

												<!-- begin::Nav pills -->
												<ul class="kt-widget-6__nav-items nav nav-pills nav-fill" role="tablist">
													<li class="kt-widget-6__nav-item nav-item">
														<a class="nav-link active show" data-toggle="pill" href="#qcp1">1</a>
													</li>
													<li class="kt-widget-6__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#qcp2">2</a>
													</li>
													<li class="kt-widget-6__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#qcp3">3</a>
													</li>
													<li class="kt-widget-6__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#qcp4">4</a>
													</li>
												</ul>

												<!-- end::Nav pills -->
											</div>
										</div>
									</div>

									<!--end::Portlet-->
							
