<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectsubqc=$cdb->prepare("SELECT * FROM sub_asset_eg WHERE saeg_asset LIKE 'QC%' ORDER BY saeg_id");
$selectsubqc->execute();
if ($selectsubqc===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $ressubqc=$selectsubqc->get_result();
?>
                                                                <select onChange="subassets(this);" onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
                                                                    <option value="" selected="">Select QC ID</option>
                                                                    <?php
                                                                     while ($showsubqc=$ressubqc->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="QC" value="<?php echo $showsubqc[2]?>"><?php echo $showsubqc[2]?></option>
                                                                    <?php }?>
                                                                </select>
<?php
}

?>
