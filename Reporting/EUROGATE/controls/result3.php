<div class="col-lg-4 col-md-4 col-sm-4" >
	<label class="form-control-label">Result</label>
	<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectres=$cdb->prepare("SELECT * FROM result");
$selectres->execute();
if ($selectres===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resres=$selectres->get_result();
                                       
?>
														<select id='resn3<?php echo $showrepvt[0];?>' class="form-control kt_selectpicker" data-live-search="true" name="resultrep">
															<?php if ($showrepvt[44]!="") { ?>
															<option data-subtext="" selected="selected" value="<?php echo $showrepvt[44]?>"><?php echo $showrepvt[44]?></option>
															<?php
														}
                                                                     while ($showresult=$resres->fetch_row()) {
                                                                    ?>
															 <option data-subtext="" value="<?php echo $showresult[1]?>"><?php echo $showresult[2]?></option>
                                                                    <?php }?>
															<option value="newres3">Other Result</option>
														</select>
<?php
}
?>
													</div>







