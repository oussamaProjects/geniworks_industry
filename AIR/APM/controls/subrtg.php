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
                                                               <select onChange="subassets(this);" required="required" onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
                                                                    <option value="" selected="">Select RTG ID</option>
                                                                    <?php
                                                                     while ($showsubrtg=$resrtg->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="RTG" value="<?php echo $showsubrtg[3]?>"><?php echo $showsubrtg[3]?></option>
                                                                    <?php }?>
                                                                    
                                                                </select>
                                                                
<?php
}

?>
