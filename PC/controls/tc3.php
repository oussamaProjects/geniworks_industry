<?php
require('controls/zdze8efzedzdeezd/de5.php');
$countinrtg=$cdb->prepare("SELECT  count(ag_id) FROM agents WHERE ag_site='32'");
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
								 
                                           