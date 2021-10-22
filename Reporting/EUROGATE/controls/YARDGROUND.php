

	<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectyg=$cdb->prepare("SELECT * FROM asset_apm WHERE ast_serial_number LIKE 'YARDGROUND%' AND ast_owner='11' ORDER BY ast_id");
$selectyg->execute();
if ($selectyg===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resyg=$selectyg->get_result();
                                       
?>
                                                                <select class="form-control kt_selectpicker" data-live-search="true" name="assetid" onChange="subassetsidp(this);" id="subassetid1p">
                                                                    <option value="" selected="">Select YARD Or GROUND Aera</option>
                                                                    <?php
                                                                     while ($showyg=$resyg->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="YARDGROUND" value="<?php echo $showyg[4]?>"><?php echo $showyg[2]?></option>
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
