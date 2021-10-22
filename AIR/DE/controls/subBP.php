<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectg=$cdb->prepare("SELECT * FROM asset_de WHERE ast_serial_number LIKE 'P%' AND ast_owner='31' ORDER BY ast_id");
$selectg->execute();
if ($selectg===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resg=$selectg->get_result();
                                       
?>
<select onChange="subassets(this);" required="required" onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
                                                                        <option data-subtext="BC P" value="">Select Sub-Asset</option>
                                                                        <option data-subtext="BC P" value="Gantry Sea Side">Gantry</option>
                                                                        <option data-subtext="BC P" value="Power Pack">Power Pack</option>
                                                                        <option data-subtext="BC P" value="Structure">Structure</option>
                                                                        <option data-subtext="BC P" value="Head Block">Head Block</option>
                                                                        <option data-subtext="BC P" value="Spreader">Spreader</option>
                                                                        <option data-subtext="BC P" value="Checker Cabin">Checker Cabin</option>
                                                                        <option data-subtext="BC P" value="Driver Cabin">Driver Cabin</option>
                                                                        <option data-subtext="BC P" value="H. V Room">H. V Room</option>
                                                                        <option data-subtext="BC P" value="Spreader">Spreader</option>
                                                                        <option data-subtext="BC P" value="Trolley">Trolley</option>
                                                                        <option data-subtext="BC P" value="Rail">Rail</option>
                                                                        <option data-subtext="BC P" value="Stairs">Stairs</option>
                                                                    </select>