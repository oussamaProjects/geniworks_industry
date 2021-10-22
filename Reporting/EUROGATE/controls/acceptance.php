<div class="col-lg-4 col-md-4 col-sm-4" >
	<label class="form-control-label">Acceptance</label>
	<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectres=$cdb->prepare("SELECT * FROM acceptance");
$selectres->execute();
if ($selectres===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resaccep=$selectres->get_result();
                                       
?>
														<select id='accepn<?php echo $showreput[0];?>' class="form-control kt_selectpicker" data-live-search="true" name="acceptancerep">
															<?php if ($showreput[46]!="") { ?>
															<option data-subtext="" selected="selected" value="<?php echo $showreput[46]?>"><?php echo $showreput[46]?></option>
															<?php
														}
                                                                     while ($showresultacc=$resaccep->fetch_row()) {
                                                                    ?>
															 <option data-subtext="" value="<?php echo $showresultacc[1]?>"><?php echo $showresultacc[2]?></option>
                                                                    <?php }?>
															<option value="newaccep">Other Acceptance</option>
														</select>
<?php
}
?>
													</div>







