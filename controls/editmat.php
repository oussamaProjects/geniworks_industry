<?php
require('zdze8efzedzdeezd/de5.php');
$internalidd=$_POST['internalidd'];
$discr=$_POST['ebrndd'];
$eqid=$_POST['eqid'];
$functionm= $_POST['functionm'];
$supplierm= $_POST['supplierm'];
$pricemat = $_POST['pricemat'];

$reqequp=$cdb->prepare("UPDATE work_materials_apm1 SET wmt_name='$discr', wmt_price='$pricemat', wmt_supplier='$supplierm', wmt_function='$functionm', wmt_internal_id='$internalidd' WHERE wmt_id=".$eqid);


$reqequp->execute();
        if ($reqequp === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $resup=$reqequp->get_result();
        ?>

<meta http-equiv='refresh' content='0;../materials/'>

<?php
}
?>