<?php

$cabinidr=$_POST['cabinidr'];
$useridr=$_POST['useridr'];
$cabinowner=$_POST['cabinowner'];





require('zdze8efzedzdeezd/de5.php');



$addlog=$cdb->prepare("UPDATE cabins SET cabn_status = 'In progress', cabn_last_ops=NOW(), cabn_last_op_team='$useridr' WHERE cabn_name='$cabinidr'");
	     $addlog->execute();
	     if ($addlog === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
       	$rees=$addlog->get_result();
       	 $addconlog=$cdb->prepare("INSERT INTO cabin_cleaning_history VALUES ('','$cabinidr', '$useridr', 'Redisinfect', '', NOW(), '', '$cabinowner', NOW())"); 
       	 $addconlog->execute();
       mysqli_close($cdb);
?>
<meta http-equiv="refresh" content="0">
<?php
       }







?>