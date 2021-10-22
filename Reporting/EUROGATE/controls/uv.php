
													<div class="col-lg-4 col-md-4 col-sm-4">
                                                        <?php

require('controls/zdze8efzedzdeezd/de5.php');
$selecteq=$cdb->prepare("SELECT * FROM lamps WHERE lmp_internal_id LIKE 'ESUV%' AND lmp_site='12'");
$selecteq->execute();
if ($selecteq===false) {
  echo "We Have Problem In Equipment Data Export!";
}
else{
  $reseq=$selecteq->get_result();
                                       
?>
                                                                <select class="form-control kt_selectpicker" data-live-search="true" name="uv">
                                                                    <option value="" selected="">Select UV Light</option>
                                                                    <?php
                                                                     while ($showeq=$reseq->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="" value="<?php echo $showeq[1]?>"><?php echo $showeq[1]?></option>
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

													</div>
													