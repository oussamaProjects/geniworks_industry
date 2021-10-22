<div class="col-lg-4 col-md-4 col-sm-4" >
	<label class="form-control-label">Specification</label>
	<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectres=$cdb->prepare("SELECT * FROM specification");
$selectres->execute();
if ($selectres===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resspec=$selectres->get_result();
                                       
?>
														<select id='specvtn<?php echo $showrepvt[0];?>' class="form-control kt_selectpicker" data-live-search="true" name="specrep">
															<?php if ($showrepvt[45]!="") { ?>
															<option data-subtext="" selected="selected" value="<?php echo $showrepvt[45]?>"><?php echo $showrepvt[45]?></option>
															<?php
														}
                                                                     while ($showresultspec=$resspec->fetch_row()) {
                                                                    ?>
															 <option data-subtext="" value="<?php echo $showresultspec[1]?>"><?php echo $showresultspec[2]?></option>
                                                                    <?php }?>
															<option value="newspecvt">Other Specification</option>
														</select>
<?php
}
?>
													</div>







