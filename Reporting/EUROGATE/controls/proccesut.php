<div class="col-lg-4 col-md-4 col-sm-4" >
	<label class="form-control-label">Procces</label>
	<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectres=$cdb->prepare("SELECT * FROM processes");
$selectres->execute();
if ($selectres===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resspec=$selectres->get_result();
                                       
?>
														<select id='prosn<?php echo $showreput[0];?>' class="form-control kt_selectpicker" data-live-search="true" name="processrep">
															<?php if ($showreput[44]!="") { ?>
															<option data-subtext="" selected="selected" value="<?php echo $showreput[44]?>"><?php echo $showreput[44]?></option>
															<?php
														}
                                                                     while ($showresultspec=$resspec->fetch_row()) {
                                                                    ?>
															 <option data-subtext="" value="<?php echo $showresultspec[1]?>"><?php echo $showresultspec[2]?></option>
                                                                    <?php }?>
															<option value="newpros">Other Procces</option>
														</select>
<?php
}
?>
													</div>







