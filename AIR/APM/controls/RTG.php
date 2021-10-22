<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectrtg=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_subasset_id LIKE 'RTG%' AND acij_owner='11' ORDER BY acij_id");
$selectrtg->execute();
if ($selectrtg===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resrtg=$selectrtg->get_result();
                                       
?>
                                                                <select class="form-control kt_selectpicker" data-live-search="true" required="required" onChange="checkOption(this),subassetsidm(this);" id="subassetid1m">
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
