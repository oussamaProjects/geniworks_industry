<?php
require('controls/zdze8efzedzdeezd/de5.php');
$countinrtg=$cdb->prepare("SELECT  count(acij_asset) FROM asset_clean_inspection_de WHERE acij_owner='31' AND acij_asset='Boom Crane M' AND acij_call='1'");
$countinrtg->execute();
if ($countinrtg===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $countinrtgs=$countinrtg->get_result();

while ($countinsprtg=$countinrtgs->fetch_row()) {
								?>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$countinqc=$cdb->prepare("SELECT  count(acij_asset) FROM asset_clean_inspection_de WHERE acij_owner='31' AND acij_asset='Boom Crane G' AND acij_call='1'");
$countinqc->execute();
if ($countinqc===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $countinqcs=$countinqc->get_result();

while ($countinspqc=$countinqcs->fetch_row()) {
								?>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showcountinspp=$cdb->prepare("SELECT  count(acij_asset) FROM asset_clean_inspection_de WHERE acij_owner='31' AND acij_asset='Boom Crane P' AND acij_call='1'");
$showcountinspp->execute();
if ($showcountinspp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $rescountinspp=$showcountinspp->get_result();

while ($countinspp=$rescountinspp->fetch_row()) {
								?>
														

															<?php echo ($countinspqc[0]+$countinsprtg[0]+$countinspp[0]);?>
														
														<?php }}?>	
								 
                                            <?php }}?>

                                            <?php }}?>