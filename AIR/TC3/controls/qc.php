<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectg=$cdb->prepare("SELECT * FROM asset_tc3 WHERE ast_serial_number LIKE 'QC%' AND ast_owner='32' ORDER BY ast_id");
$selectg->execute();
if ($selectg===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resg=$selectg->get_result();
      ?>
<select class="form-control kt_selectpicker" data-live-search="true"  required="required" onChange="checkOption(this),subassetsidg(this);" id="subassetid1g">
                                                                	<option value="" selected="">Select QC ID</option>
                                                                	<?php
                                                                     while ($showg=$resg->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="BC G" value="<?php echo $showg[4]?>"><?php echo $showg[4]?></option>
                                                                <?php }?>
                                                                </select>
<?php
}

?>