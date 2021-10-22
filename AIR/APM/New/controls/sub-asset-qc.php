<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectsubqc=$cdb->prepare("SELECT * FROM sub_asset WHERE suba_asset_id LIKE 'QC%' AND suba_owner='11' ORDER BY suba_id");
$selectsubqc->execute();
if ($selectsubqc===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $ressubqc=$selectsubqc->get_result();
                                       
?>
                                                                <select onChange="subassets(this);" required="required" onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
                                                                    <option data-subtext="QC" value="">Select Sub-Asset</option>
                                                                    <?php
                                                                     while ($showsubqc=$ressubqc->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="QC" value="<?php echo $showsubqc[1]?>"><?php echo $showsubqc[1]?></option>
                                                                    <?php }?>
                                                                    <!-- <option data-subtext="BC G" value="G10003">G10003</option>
                                                                    <option data-subtext="BC G" value="G10004">G10004</option>
                                                                    <option data-subtext="BC G" value="G10007">G10007</option>
                                                                    <option data-subtext="BC G" value="G38001">G38001</option>
                                                                    <option data-subtext="BC G" value="G38002">G38002</option>
                                                                    <option data-subtext="BC G" value="G38003">G38003</option>
                                                                    <option data-subtext="BC G" value="G38004">G38004</option>
                                                                    <option data-subtext="BC G" value="G40001">G40001</option>
                                                                    <option data-subtext="BC G" value="G40002">G40002</option>
                                                                    <option data-subtext="BC G" value="G60006">G60006</option>
                                                                    <option data-subtext="BC G" value="G60007">G60007</option>
                                                                    <option data-subtext="BC G" value="G60008">G60008</option> -->
                                                                </select>

<?php
}

?>
