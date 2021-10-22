
<?php

require('zdze8efzedzdeezd/de5.php');

if(isset($_POST[''])){}
$usernamech= $_POST['usernamech'];
$oldpassch= $_POST['oldpassch'];
$newpassch= $_POST['newpassch'];
$emailch=$_POST['emailch'];

$showr2=$cdb->prepare("SELECT * FROM user WHERE u_username='$usernamech' AND u_password='$oldpassch'");
$showr2->execute();
if ($showr2===false) {
  echo "Ops! there is an issue, please contact us";
}
else{
  $res2=$showr2->get_result();
$upreq = $cdb->prepare("UPDATE `user` SET `u_password` = '$newpassch', `u_email` = '$emailch' WHERE `u_username` = '$usernamech'");
 
    $upreq->execute();
       if ($upreq === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        
     

$rees=$upreq->get_result();
        ?>

<meta http-equiv='refresh' content='0;success.php'>
<?php
}

?>

<?php 


}
?>