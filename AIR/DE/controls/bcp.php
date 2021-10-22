<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectp=$cdb->prepare("SELECT * FROM asset_de WHERE ast_serial_number LIKE 'P%' AND ast_owner='31' ORDER BY ast_id");
$selectp->execute();
if ($selectp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resp=$selectp->get_result();
                                       
?>
 <select class="form-control kt_selectpicker" data-live-search="true" required="required" onChange="checkOption(this),subassetsidp(this);" id="subassetid1p">
                                                                	<option value="" selected="">Select Crane ID</option>
                                                                	<?php
                                                                	 while ($showp=$resp->fetch_row()) {
                                                                	?>
                                                                	<option data-subtext="BC P" value="<?php echo $showp[4]?>"><?php echo $showp[4]?></option>
                                                                	<?php 
                                                                }
                                                                	?><!-- 
                                                                    <option data-subtext="BC P" value="P16001">P16001</option> -->
                                                                </select>
<?php
}

?>

 