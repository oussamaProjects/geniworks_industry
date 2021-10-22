<?php

$upcabinid=$_POST['upcabinid'];
$upuserid=$_POST['upuserid'];
$updatedstat=$_POST['updatedstat'];





require('zdze8efzedzdeezd/de5.php');

$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$upuserid'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 



$addlog=$cdb->prepare("UPDATE cabins SET cabn_status='$updatedstat', cabn_last_ops=NOW(), cabn_last_op_team='$upuserid' WHERE cabn_name='$upcabinid' AND cabn_owner LIKE 'APM-TERMINALS 02%'");
	     $addlog->execute();
	     if ($addlog === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
       	$rees=$addlog->get_result();
       	 

       }
       $addconlog=$cdb->prepare("INSERT INTO cabin_cleaning_history VALUES ('','$upcabinid', '$upuserid', '$updatedstat', '', NOW(), '', 'APM-TERMINALS 02', NOW())"); 
         $addconlog->execute();
       if ($addconlog === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $rees=$addconlog->get_result();
        ?>
<meta http-equiv="refresh" content="0">
<?php
       }
}else{
  ?>
  <script type="text/javascript">
  $(document).ready(function() {
  $('#notadminmodal').modal('show');
});
</script> 
<meta http-equiv="refresh" content="0">
  <?php
}
}






?>