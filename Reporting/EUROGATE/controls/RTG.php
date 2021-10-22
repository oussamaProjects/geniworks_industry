<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectqc=$cdb->prepare("SELECT * FROM asset_eg WHERE ast_internal_id LIKE 'RTG%' AND ast_owner='21' ORDER BY ast_id");
$selectqc->execute();
if ($selectqc===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resrtg=$selectqc->get_result();
?>
                                                                <select class="form-control kt_selectpicker" data-live-search="true" name="assetid" onChange="subassetsidm(this);" id="subassetid1m">
                                                                    <option value="" selected="">Select RTG ID</option>
                                                                    <?php
                                                                     while ($showrtg=$resrtg->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="RTG" value="<?php echo $showrtg[4]?>"><?php echo $showrtg[4]?></option>
                                                                    <?php }?>
                                                                </select>
<?php
}

?>
