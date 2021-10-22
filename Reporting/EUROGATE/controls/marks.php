<div class="col-lg-3 col-md-3 col-sm-3" >
	<label class="form-control-label">Mark</label>
	<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectashm=$cdb->prepare("SELECT * FROM asset_handmark");
$selectashm->execute();
if ($selectashm===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resashm=$selectashm->get_result();
                                       
?>
														<select id='ashmn<?php echo $showreput[0];?>' class="form-control kt_selectpicker" data-live-search="true" name="ashmrep">
															<option value="">Select</option>
															<?php
                                                                     while ($showashm=$resashm->fetch_row()) {
                                                                    ?>
															 <option data-subtext="" value="<?php echo $showashm[1]?>"><?php echo $showashm[1]?></option>
                                                                    <?php }?>
															<option value="newashm">Add Mark</option>
														</select>
<?php
}
?>
													</div>







