
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$countinqc=$cdb->prepare("SELECT  count(acij_asset) FROM asset_clean_inspection_tc3 WHERE acij_owner='32' AND acij_asset='QC' AND acij_call='1'");
$countinqc->execute();
if ($countinqc===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $countinqcs=$countinqc->get_result();

while ($countinspqc=$countinqcs->fetch_row()) {
								?>
														

															<?php echo ($countinspqc[0]+$countinsprtg[0]);?>
														
														<?php }}?>	
								 
                                    