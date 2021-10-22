<?php
require('zdze8efzedzdeezd/de5.php');
$internalidd=$_POST['internalidd'];
$discr=$_POST['ebrndd'];
$eqid=$_POST['eqid'];
$functionp= $_POST['functionp'];
$supplierp= $_POST['supplierp'];
$priceppe=$_POST['priceppe'];

$reqequp=$cdb->prepare("UPDATE work_ppe_apm1 SET wppe_name='$discr', wppe_price='$priceppe', wppe_supplier='$supplierp', wppe_function='$functionp', wppe_internal_id='$internalidd' WHERE wppe_id=".$eqid);


$reqequp->execute();
        if ($reqequp === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $resup=$reqequp->get_result();
        ?>

<meta http-equiv='refresh' content='0;../ppe/'>

<?php
}
?>