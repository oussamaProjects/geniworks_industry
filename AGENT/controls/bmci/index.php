													<div class="kt-portlet">

															<?php
require('../controls/zdze8efzedzdeezd/de5.php');
$selectagents=$cdb->prepare("SELECT * FROM agents WHERE ag_site='41'");
$selectagents->execute();
if ($selectagents===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resagents=$selectagents->get_result();?>
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">APM-1 Agents <small>bla bla here</small></h3>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget-4">
														<?php while ($showagent=$resagents->fetch_row()) {?>
														<div class="kt-widget-4__item">
															<div class="kt-widget-4__item-content">
																<div class="kt-widget-4__item-section">
																	<div class="kt-widget-4__item-pic">
																		<img class="" src="img/agents/<?php echo $showagent[7]?>" alt="<?php echo $showagent[1]?>" />
																	</div>
																	<div class="kt-widget-4__item-info">
																		<a href="#" class="kt-widget-4__item-username"><?php echo $showagent[1]?></a>
																		<div class="kt-widget-4__item-desc">Operator LV 2</div>
																	</div>
																</div>
															</div>
															<div class="kt-widget-4__item-content">
																<div class="kt-widget-4__item-price">
																	<form action="profile.php" method="post">
																		<input type="hidden" value="<?php echo $showagent[0]?>" name="idag">
																		<a class="btn btn-default btn-sm btn-bold btn-upper" href="profile.php?id=<?php echo $showagent[0]?>" 
																			>Details</a>
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