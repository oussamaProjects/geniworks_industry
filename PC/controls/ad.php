<?php
require('controls/zdze8efzedzdeezd/de5.php');
$countinrtg=$cdb->prepare("SELECT  count(ad_id) FROM admin");
$countinrtg->execute();
if ($countinrtg===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $countinrtgs=$countinrtg->get_result();

while ($countinsprtg=$countinrtgs->fetch_row()) {

								?>
														

															<?php echo $countinsprtg[0];?>
														
														<?php }}?>	
								 
                                           