<?php
require('zdze8efzedzdeezd/de5.php');
$internalidd=$_POST['internalidd'];
$discr=$_POST['ebrndd'];
$eqid=$_POST['eqid'];
$functionc= $_POST['functionc'];
$supplierc= $_POST['supplierc'];
$pricech = $_POST['$pricech'];

$reqequp=$cdb->prepare("UPDATE work_chemicals_apm1 SET wch_name='$discr', wch_price='$pricech', wch_supplier='$supplierc', wch_function='$functionc', wch_internal_id='$internalidd' WHERE wch_id=".$eqid);


$reqequp->execute();
        if ($reqequp === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $resup=$reqequp->get_result();
        ?>

<meta http-equiv='refresh' content='0;../chemicals/'>

<?php
}
?>