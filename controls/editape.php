<?php
require('zdze8efzedzdeezd/de5.php');
$internalidd=$_POST['internalidd'];
$discr=$_POST['ebrndd'];
$eqid=$_POST['eqid'];
$functiona= $_POST['functiona'];
$suppliera= $_POST['suppliera'];
$priceape=$_POST['priceape'];

$reqequp=$cdb->prepare("UPDATE work_ape_apm1 SET wape_name='$discr', wape_price='$priceape', wape_supplier='$suppliera', wape_function='$functiona', wape_internal_id='$internalidd' WHERE wape_id=".$eqid);


$reqequp->execute();
        if ($reqequp === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $resup=$reqequp->get_result();
        ?>

<meta http-equiv='refresh' content='0;../ape/'>

<?php
}
?>