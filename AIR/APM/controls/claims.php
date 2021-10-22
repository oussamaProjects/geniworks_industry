<div class="modal fade " id="claims" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-ml">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Claims List</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
<?php

$userpu=$_SESSION['nmu'];
$userpp=$_SESSION['passu'];
$userp=$_SESSION['uat'];
require('controls/zdze8efzedzdeezd/de5.php');


$selectnotif=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_clean_done='claim'");

 $selectnotif->execute();
 if ($selectnotif === false) {
     echo "display error".mysqli_error($cdb);
 }
else{
$resnotif=$selectnotif->get_result();

?>

									<div class="kt-portlet kt-portlet--height-fluid">
									
										<div class="kt-portlet__body">
											<div class="kt-widget-1">
												
												<div class="tab-content">
													<div class="tab-pane fade active show" role="tabpanel">
														<?php while ($showwhere=$resnotif->fetch_row()) {
               
                $datetime = date('M j, Y, g:i a', strtotime($showwhere[8]));



                ?>
														<div class="kt-widget-1__item">
															<div class="kt-widget-1__item-info">
																<a href="#" class="kt-widget-1__item-title">
																	<h4><?php echo $showwhere[4]; ?> | <?php echo $showwhere[3]; ?></h4>
																</a>
																<?php
                  if ($showwhere[7]=='clean') {?>
                    <div class="kt-widget-1__item-desc">Status: <span class="kt-link kt-link--brand"  style="font-weight: 900;"> In process</span></div>
                    <?php
                    }
                    ?>
                    <?php
                  if ($showwhere[7]=='1') {?>
                    <div class="kt-widget-1__item-desc">Status: <span class="kt-link kt-link--danger" style="font-weight: 900;"> No action</span></div>
                    <?php
                    }
                    ?> 
                    <span style="font-size: 14px; font-weight: normal; float: left; ">on <span style="color:#303156; font-size: 12px; font-weight: 600;"><?php echo $datetime;?></span></span>
															</div>
															<div class="kt-widget-1__item-stats" style="padding-left: 1px;">
																	 <?php
                    if ($showwhere[10]=='') {
                                                            ?>
                                                            <span class="badge badge-secondary" style="width: 110px; font-size: 12px; text-align: center;">Not specified</span>
                                                            <?php
                                                            }
                                                            if ($showwhere[10]=='low') {
                                                            ?>
                                                            <span class="badge badge-secondary"style="width: 90px; font-size: 12px;  text-align: center;" >Low</span>
                                                            <?php
                                                            }
                                                            if ($showwhere[10]=='medium') {
                                                            ?>
                                                            <span class="badge badge-warning" style="width: 90px; font-size: 12px; text-align: center;">Medium</span>
                                                            <?php
                                                            }
                                                            if ($showwhere[10]=='high') {
                                                            ?>
                                                            <span class="badge badge-danger" style="width: 90px; font-size: 12px;  text-align: center;">High</span>
                                                            <?php
                                                            }
                                                            ?>
															</div>
															

																<div class="kt-widget-1__item-value" style="padding-left: 20px;">
																	<div class="kt-portlet__head-toolbar">
																		<div class="kt-portlet__head-toolbar-wrapper">
																			<div class="dropdown dropdown-inline">
																				<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<i class="flaticon-more-1"></i>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right">
																					<ul class="kt-nav">
																						<li class="kt-nav__section kt-nav__section--first">
																							<span class="kt-nav__section-text">Actions</span>
																						</li>
																						<li class="kt-nav__item">
																							<a class="kt-nav__link">
																								<button style="background-color: transparent; border: 0;">
																									<i class="kt-nav__link-icon la la-check"  style="background-color:#1dc9b7; "></i>
																									<span class="kt-nav__link-text">Mark as 'Done'</span>
																								</button>
																							</a>
																						</li>
																						<li class="kt-nav__item">
																							<a class="kt-nav__link">
																								<button style="background-color: transparent; border: 0;">
																									<i class="kt-nav__link-icon la la-undo"  style="background-color:#00A1db; "></i>
																									<span class="kt-nav__link-text">Mark as 'Clean'</span>
																								</button>
																							</a>
																						</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
															
														</div>
														<div class="kt-separator kt-separator--space-lg kt-separator--border-dashed" style="margin-top: 20px;"></div>
														<?php }?>
													</div>
													
													
												</div>
											</div>
										</div>
									</div>


<?php }?>

</div>
															</div>
														</div>
													</div>