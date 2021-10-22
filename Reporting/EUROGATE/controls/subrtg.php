<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectsubrtg=$cdb->prepare("SELECT * FROM sub_asset_eg WHERE saeg_asset LIKE 'RTG%' ORDER BY saeg_id");
$selectsubrtg->execute();
if ($selectsubrtg===false) {
  echo "We Have Problem In Data Export Issue!";
}
else{
  $ressubrtg=$selectsubrtg->get_result();
?>
                                                                <select onChange="subassets(this);" name="subasset" onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
                                                                    <option value="" selected="">Select RTG ID</option>
                                                                    <?php
                                                                    if (mysqli_num_rows($ressubrtg)!=0) { 
                                                                     while ($showsubrtg=$ressubrtg->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="RTG" value="<?php echo $showsubrtg[2]?>"><?php echo $showsubrtg[1]?></option>
                                                                    <?php }}
                                                                    elseif (mysqli_num_rows($ressubrtg)==0) { 
                                                                    
                                                                    ?>
                                                                    <option data-subtext="RTG" value="none">No Asset!</option>
                                                                    <?php }?>
                                                                </select>
<?php
}

?>
