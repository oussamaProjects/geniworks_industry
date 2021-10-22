<div class="col-lg-6 col-md-6 col-sm-12">
	<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectwit=$cdb->prepare("SELECT * FROM witness");
$selectwit->execute();
if ($selectwit===false) {
  echo "We Have Problem In Equipment Data Export!";
}
else{
  $reswit=$selectwit->get_result();
                                       
?>
														<select id='type' class="form-control kt_selectpicker" data-live-search="true" name="witnss">
															<option value="">Select</option>
															<?php
                                                                     while ($showwit=$reswit->fetch_row()) {
                                                                    ?>
															 <option data-subtext="" value="<?php echo $showwit[1]?>"><?php echo $showwit[1]?></option>
                                                                    <?php }?>
															<option value="newwt">New</option>
														</select>
<?php
}
?>
													</div>







