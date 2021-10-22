<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectqc=$cdb->prepare("SELECT * FROM asset_eg WHERE ast_internal_id LIKE 'QC%' AND ast_owner='21' ORDER BY ast_id");
$selectqc->execute();
if ($selectqc===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resqc=$selectqc->get_result();
?>
                                                                <select class="form-control kt_selectpicker" data-live-search="true" name="assetid" onChange="subassetsidg(this);" id="subassetid1g">
                                                                    <option value="" selected="">Select QC ID</option>
                                                                    <?php
                                                                     while ($showqc=$resqc->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="QC" value="<?php echo $showqc[4]?>"><?php echo $showqc[4]?></option>
                                                                    <?php }?>
                                                                </select>
<?php
}

?>
