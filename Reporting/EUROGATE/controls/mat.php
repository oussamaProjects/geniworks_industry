<div class="col-lg-4 col-md-3 col-sm-3">
														<label class="form-control-label">Material</label>
													</div>
														<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectwit=$cdb->prepare("SELECT * FROM material");
$selectwit->execute();
if ($selectwit===false) {
  echo "We Have Problem In Material Data Export!";
}
else{
  $reswit=$selectwit->get_result();
                                       
?>
													<div class="col-lg-4 col-md-4 col-sm-12">
														<select id="matn" class="form-control kt_selectpicker" name="material">
															<option value="">Select Type</option>
															<?php
                                                                     while ($showwit=$reswit->fetch_row()) {
                                                                    ?>
															<option value="<?php echo $showwit[1]?>"><?php echo $showwit[1]?></option>
														<?php }?>
															<option value="newmat">New</option>
														</select>
														<span class="form-text text-muted">Please select Material.</span>
													</div>



<?php
}
?>
										