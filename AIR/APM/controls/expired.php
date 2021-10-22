<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-ml">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Assets Inspection Notification</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	


<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selectdate=$cdb->prepare("SELECT * FROM asset_clean_inspection");
$selectdate->execute();
if ($selectdate===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resdate=$selectdate->get_result();?>


									<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">APM-1 Uncleaned Assets <small></small></h3>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget-4">
												<?php while ($showdate=$resdate->fetch_row()) {
													if(strtotime($showdate[8]) < strtotime('-10 days')){


	?>
														<div class="kt-widget-4__item">
															<div class="kt-widget-4__item-content">
																<div class="kt-widget-4__item-section">
																	<div class="kt-widget-4__item-pic">
																		<img class="" src="img/agents/agent1.png" alt="" />
																	</div>
																	<div class="kt-widget-4__item-info">
																		<a href="#" class="kt-widget-4__item-username"><?php echo $showdate[4];?> Inspected Since 10 Days Ago</a>
																		<div class="kt-widget-4__item-desc"></div>
																	</div>
																</div>
															</div>
															<div class="kt-widget-4__item-content">
																<div class="kt-widget-4__item-price">
																	<form action="profile.php" method="post">
																		<input type="hidden" value="" name="idag">
																		<a class="btn btn-Warning btn-sm btn-bold btn-upper" href="owner/APM/QC/index.php?qcnum=<?php echo $showdate[4];?>">Details</a>
																	</form>
																</div>
															</div>
														</div>
														<?php }}?>
												
													</div>
												</div>

												<div class="kt-portlet__body">
													<div class="kt-widget-4">
												<?php while ($showdate=$resdate->fetch_row()) {
													if(strtotime($showdate[8]) < strtotime('-15 days')){


	?>
														<div class="kt-widget-4__item">
															<div class="kt-widget-4__item-content">
																<div class="kt-widget-4__item-section">
																	<div class="kt-widget-4__item-pic">
																		<img class="" src="img/agents/agent1.png" alt="" />
																	</div>
																	<div class="kt-widget-4__item-info">
																		<a href="#" class="kt-widget-4__item-username"><?php echo $showdate[4];?> Inspected Since 15 Days Ago</a>
																		<div class="kt-widget-4__item-desc"></div>
																	</div>
																</div>
															</div>
															<div class="kt-widget-4__item-content">
																<div class="kt-widget-4__item-price">
																	<form action="profile.php" method="post">
																		<input type="hidden" value="" name="idag">
																		<a class="btn btn-danger btn-sm btn-bold btn-upper" href="owner/APM/QC/index.php?qcnum=<?php echo $showdate[4];?>">Details</a>
																	</form>
																</div>
															</div>
														</div>
														<?php }}?>
												
													</div>
												</div>
											</div>

<?php }?>












																</div>
																<div class="modal-footer">
																	
																</div>
															</div>
														</div>
													</div>