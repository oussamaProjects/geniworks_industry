<?php
require('zdze8efzedzdeezd/de5.php');
$internalidd=$_POST['internalidd'];
$discr=$_POST['ebrndd'];
$eqid=$_POST['eqid'];
$functiont= $_POST['functiont'];
$suppliert= $_POST['suppliert'];
$pricetl = $_POST['$pricetl'];

$reqequp=$cdb->prepare("UPDATE work_tools_apm1 SET wtl_name='$discr', wtl_price='$pricetl', wtl_supplier='$suppliert', wtl_function='$functiont', wtl_internal_id='$internalidd' WHERE wtl_id=".$eqid);


$reqequp->execute();
        if ($reqequp === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $resup=$reqequp->get_result();
        ?>

<meta http-equiv='refresh' content='0;../tools/index.php'>

<?php
}
?>