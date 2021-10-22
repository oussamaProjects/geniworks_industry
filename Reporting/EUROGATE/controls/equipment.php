
													<div class="col-lg-4 col-md-4 col-sm-4">
                                                        <?php

require('controls/zdze8efzedzdeezd/de5.php');
$selecteq=$cdb->prepare("SELECT * FROM equipment WHERE eqp_site='21'");
$selecteq->execute();
if ($selecteq===false) {
  echo "We Have Problem In Equipment Data Export!";
}
else{
  $reseq=$selecteq->get_result();
                                       
?>
                                                                <select id="eqpn" class="form-control kt_selectpicker" data-live-search="true" name="equip">
                                                                    <option value="">Select Equipment</option>
                                                                    <?php
                                                                     while ($showeq=$reseq->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="" value="<?php echo $showeq[1]?>"><?php echo $showeq[1]?></option>
                                                                    <?php }?>
                                                                    <option value="neweqp">New</option>
                                                                </select>
<?php
}

?>

													</div>
													