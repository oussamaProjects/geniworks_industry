<?php
$showpr=$cdb->prepare("SELECT * FROM equipments_parts WHERE eqp_equipment='".$showrow[3]."'");
$showpr->execute();
if ($showpr===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resp=$showpr->get_result();
while ($showrowp=$resp->fetch_row()) {
?>
<div class="col-sm-3 form-control-label d-flex align-items-center"><?php echo $showrowp[1];?></div>
<div class="col-sm-5 form-control-plaintext">
    <span id=""></span>
    <input type="hidden" id="" name="" required="">
</div>

     <?php
    }
    }
     ?> 