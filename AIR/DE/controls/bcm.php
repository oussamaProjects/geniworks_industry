<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectm=$cdb->prepare("SELECT * FROM asset_de WHERE ast_serial_number LIKE 'M%' AND ast_owner='31' ORDER BY ast_id");
$selectm->execute();
if ($selectm===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resm=$selectm->get_result();
                                       
?>
  <select class="form-control kt_selectpicker" data-live-search="true" required="required" onChange="checkOption(this),subassetsidm(this);" id="subassetid1m">
                                                                	<option value="" selected="">Select Crane ID</option>
                                                                	<?php
                                                                	 while ($showm=$resm->fetch_row()) {
                                                                	?>
                                                                	<option data-subtext="BC M" value="<?php echo $showm[4]?>"><?php echo $showm[4]?></option>
                                                                	<?php 
                                                                }
                                                                	?>
<!--                                                                     <option data-subtext="BC M" value="M63002">M63002</option>
                                                                    <option data-subtext="BC M" value="M4O001">M4O001</option>
                                                                    <option data-subtext="BC M" value="M99001">M99001</option> -->
                                                                </select>
<?php
}

?>
