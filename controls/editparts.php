<?php
require('zdze8efzedzdeezd/45azd72dz9de5.php');
$statd=$_POST['statd'];
$discr=$_POST['discr'];
$eqid=$_POST['eqid'];

$reqequp=$cdb->prepare("UPDATE equipments  SET eq_review_dsc='$discr', eq_stat='$statd' WHERE eq_id=".$eqid);


$reqequp->execute();
        if ($reqequp === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $resup=$reqequp->get_result();
    
    

        ?>

<meta http-equiv='refresh' content='0;../checklist.php'>

<?php
}
?>