<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-ml">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Absence Checklist</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	


<?php
require('../controls/zdze8efzedzdeezd/de5.php');
$selectaagents=$cdb->prepare("SELECT * FROM agents WHERE ag_site='11'");
$selectaagents->execute();
if ($selectaagents===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resaagents=$selectaagents->get_result();?>


									<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">APM-1 Agents <small>Check The Agents Are Available For Today</small></h3>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget-4">
												<?php while ($showaagent=$resaagents->fetch_row()) {?>
														<div class="kt-widget-4__item">
															<div class="kt-widget-4__item-content">
																<div class="kt-widget-4__item-section">
																	<div class="kt-widget-4__item-pic">
																		<img class="" src="img/agents/agent1.png" alt="" />
																	</div>
																	<div class="kt-widget-4__item-info">
																		<a href="#" class="kt-widget-4__item-username"><?php echo $showaagent[1];?></a>
																		<div class="kt-widget-4__item-desc"><?php echo $showaagent[6];?> LV <?php echo $showaagent[12];?></div>
																	</div>
																</div>
															</div>
															<div class="kt-widget-4__item-content">
																<div class="kt-widget-4__item-price">
																	<form action="profile.php" method="post">
																		<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand"><input type="checkbox"><span></span>
																		</label>
																	</form>
																</div>
															</div>
														</div>
														<?php }?>
												
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