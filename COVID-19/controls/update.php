<?php

$upcabinid=$_POST['upcabinid'];
$upuserid=$_POST['upuserid'];
$updatedstat=$_POST['updatedstat'];
$cabinowner=$_POST['cabinowner'];





require('zdze8efzedzdeezd/de5.php');



$addlog=$cdb->prepare("UPDATE cabins SET cabn_status = '$updatedstat', cabn_last_ops=NOW(), cabn_last_op_team='$upuserid' WHERE cabn_name='$upcabinid'");
	     $addlog->execute();
	     if ($addlog === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
       	$rees=$addlog->get_result();
       	 $addconlog=$cdb->prepare("INSERT INTO cabin_cleaning_history VALUES ('','$upcabinid', '$upuserid', '$updatedstat', '', NOW(), '', '$cabinowner', NOW())"); 
       	 mysqli_close($cdb);
?>
<meta http-equiv="refresh" content="0">
<?php
       }







?>