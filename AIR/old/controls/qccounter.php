

																		




<style>

.kt-widget-16__title :hover{
    font-size: 1.1rem;
    font-weight: 500;
    color: #303156 !important;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
</style>



								<div class="kt-widget-16__labels">
														
															<div class="kt-widget-16__title">QC</div>
														
														<div class="kt-widget-16__desc"><a href="owner/APM/QC/" style="color: #00A1DB;" target="_blank">View Report</a></div>
													</div>
													<div class="kt-widget-16__data">
														
														<?php
require('controls/zdze8efzedzdeezd/de5.php');
$countinqc=$cdb->prepare("SELECT  count(acij_asset) FROM asset_clean_inspection WHERE acij_owner='11' AND acij_asset='QC' AND acij_clean='1'");
$countinqc->execute();
if ($countinqc===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $countinqcs=$countinqc->get_result();

while ($countinspqc=$countinqcs->fetch_row()) {
								?>
								<style>
									.kt-widget-16 .kt-widget-16__item.kt-widget-16__item--success .kt-widget-16__data .kt-widget-16__numbers .kt-widget-16__numbers-change {

}
								</style>

														<div class="kt-widget-16__numbers">
															<div class="kt-widget-16__numbers-total">Clean</div>
															<div class="kt-widget-16__numbers-change" style="background-color: rgba(29, 201, 183, 0.1);color: #1dc9b7;"><?php echo $countinspqc[0]?></div>
														</div>
														<?php }?>	
								 
                                            <?php }?>
													</div>
													<div class="kt-widget-16__item kt-widget-16__item--danger">
													
													<div class="kt-widget-16__data">
														
														<?php
require('controls/zdze8efzedzdeezd/de5.php');
$countinqcn=$cdb->prepare("SELECT  count(acij_asset) FROM asset_clean_inspection WHERE acij_owner='11' AND acij_asset='QC' AND acij_call='1'");
$countinqcn->execute();
if ($countinqcn===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $countinqcns=$countinqcn->get_result();

while ($countinspqcn=$countinqcns->fetch_row()) {
								?>
														<div class="kt-widget-16__numbers">
															<div class="kt-widget-16__numbers-total">Requires Cleaning</div>
															<div class="kt-widget-16__numbers-change"><?php echo $countinspqcn[0]?></div>
														</div>
														<?php }?>	
								 
                                            <?php }?>
													</div></div>


																


																