<?php

require('controls/zdze8efzedzdeezd/de5.php');
$selectg=$cdb->prepare("SELECT * FROM asset_de WHERE ast_serial_number LIKE 'G%' AND ast_owner='31' ORDER BY ast_id");
$selectg->execute();
if ($selectg===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resg=$selectg->get_result();
                                       
?>
<select class="form-control kt_selectpicker" data-live-search="true"  required="required" onChange="checkOption(this),subassetsidg(this);" id="subassetid1g">
                                                                	<option value="" selected="">Select Crane ID</option>
                                                                	<?php
                                                                	 while ($showg=$resg->fetch_row()) {
                                                                	?>
                                                                	<option data-subtext="BC G" value="<?php echo $showg[4]?>"><?php echo $showg[4]?></option>
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
