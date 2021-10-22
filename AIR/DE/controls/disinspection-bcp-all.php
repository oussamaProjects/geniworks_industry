																		<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showasn=$cdb->prepare("SELECT * FROM asset_clean_inspection_de WHERE acij_owner	='31' AND acij_asset='Boom Crane P' LIMIT 1");
$showasn->execute();
if ($showasn===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $showasns=$showasn->get_result();

while ($showasset=$showasns->fetch_row()) {
								?>
<div class="carousel-item active kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																
																<a class="kt-widget-13__title" href="report/BCP/index.php?BCPnum=<?php echo $showasset[4];?>"><?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> </a>
																<div class="kt-widget-13__desc">
																	<h6>Inspected By Othmane On <?php echo $showasset[8];?></h6><br>
														
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__label">
																	
																	<span class="kt-label-font-color-2"><?php
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

														?></span>
																</div>
																<div class="kt-widget-13__toolbar">
																	<a href="#" data-toggle="modal" data-target=".BCPinsp" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
																</div>
															</div>
														</div>
													</div>


																<?php }?>
								             
															
																
								 
                                            <?php }?>

																		<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showasn=$cdb->prepare("SELECT * FROM asset_clean_inspection_de WHERE acij_owner	='31' AND acij_asset='Boom Crane P'");
$showasn->execute();
if ($showasn===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $showasns=$showasn->get_result();

while ($showasset=$showasns->fetch_row()) {
								?>
<div class="carousel-item kt-slider__body">
														<div class="kt-widget-13">
															<div class="kt-widget-13__body">
																
																<a class="kt-widget-13__title" href="report/BCP/index.php?BCPnum=<?php echo $showasset[4];?>"><?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> </a>
																<div class="kt-widget-13__desc">
																	<h6>Inspected By Othmane On <?php echo $showasset[8];?></h6><br>
														
																</div>
															</div>
															<div class="kt-widget-13__foot">
																<div class="kt-widget-13__label">
																	
																	<span class="kt-label-font-color-2"><?php
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

														?></span>
																</div>
																<div class="kt-widget-13__toolbar">
																	<a href="#" data-toggle="modal" data-target=".BCPinsp" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
																</div>
															</div>
														</div>
													</div>


																<?php }?>
								             
															
																
								 
                                            <?php }?>