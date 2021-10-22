<div class="col-lg-4 col-md-3 col-sm-3">
														<label class="form-control-label">Revealer</label>
													</div>
														<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectrev=$cdb->prepare("SELECT * FROM revealer");
$selectrev->execute();
if ($selectrev===false) {
  echo "We Have Problem In Revealer Data Export!";
}
else{
  $resrev=$selectrev->get_result();
                                       
?>
													<div class="col-lg-4 col-md-4 col-sm-12">
														<select id="revn" class="form-control kt_selectpicker" name="revealer">
															<option value="">Select Type</option>
															<?php
                                                                     while ($showrev=$resrev->fetch_row()) {
                                                                    ?>
															<option value="<?php echo $showrev[1]?>"><?php echo $showrev[1]?></option>
														<?php }?>
															<option value="newrev">New</option>
														</select>
														<span class="form-text text-muted">Please select Revealer.</span>
													</div>



<?php
}
?>
										