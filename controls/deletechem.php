<?php
require('zdze8efzedzdeezd/de5.php');
$internalidd=$_POST['internalidd'];
$discr=$_POST['ebrndd'];
$eqid=$_POST['eqid'];
$functiona= $_POST['functiona'];
$suppliera= $_POST['suppliera'];

$reqequp=$cdb->prepare("DELETE FROM work_chemicals_apm1 WHERE wch_id=".$eqid);


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