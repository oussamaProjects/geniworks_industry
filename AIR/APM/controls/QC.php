<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectqc=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_subasset_id LIKE 'QC%' AND acij_owner='11' ORDER BY acij_id");
$selectqc->execute();
if ($selectqc===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resqc=$selectqc->get_result();
                                       
?>
                                                                <select class="form-control kt_selectpicker" data-live-search="true"  required="required" onChange="checkOption(this),subassetsidg(this);" id="subassetid1g">
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
