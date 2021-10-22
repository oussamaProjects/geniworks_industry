<?php
require('zdze8efzedzdeezd/de5.php');
$selectagents=$cdb->prepare("SELECT * FROM agents WHERE ag_site='11'");
$selectagents->execute();
if ($selectagents===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resagents=$selectagents->get_result();?>
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Agents</h3>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget-4">
														<?php while ($showagent=$resagents->fetch_row()) {?>
														<div class="kt-widget-4__item">
															<div class="kt-widget-4__item-content">
																<div class="kt-widget-4__item-section">
																	<div class="kt-widget-4__item-pic">
																		<img class="" src="img/agents/agent1.png" alt="" />
																	</div>
																	<div class="kt-widget-4__item-info">
																		<a href="#" class="kt-widget-4__item-username">Agent 2</a>
																		<div class="kt-widget-4__item-desc">Operator LV 2</div>
																	</div>
																</div>
															</div>
															<div class="kt-widget-4__item-content">
																<div class="kt-widget-4__item-price">
																	<span class="kt-widget-4__item-number">4</span>
																	<span class="kt-widget-4__item-badge">Times</span>
																</div>
															</div>
														</div>
													<?php }?>
													</div>
												</div>
											</div>
<?php }?>