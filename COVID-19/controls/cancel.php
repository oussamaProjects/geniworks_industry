<?php

$cabincanceld=$_POST['cabincanceld'];
$useridcnl=$_POST['useridcnl'];

$cabinowner=$_POST['cabinowner'];



require('zdze8efzedzdeezd/de5.php');



$addlog=$cdb->prepare("UPDATE cabins SET cabn_status = 'Canceled', cabn_last_ops=NOW(), cabn_last_op_team='$useridcnl' WHERE cabn_name='$cabincanceld'");
       $addlog->execute();
       if ($addlog === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
        $rees=$addlog->get_result();
         $addconlog=$cdb->prepare("INSERT INTO cabin_cleaning_history VALUES ('','$cabincanceld', '$useridcnl', 'Canceled', '', NOW(), '', '$cabinowner', NOW())"); 
         $addconlog->execute();
      mysqli_close($cdb);
?>
<meta http-equiv="refresh" content="0">
<?php
       }







?>