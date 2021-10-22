
<?php
require('../controls/zdze8efzedzdeezd/de5.php');

$agentid=$_POST['agentid'];
$upname=$_POST['upname'];
$upphone=$_POST['upphone'];
$upadress1=$_POST['upadress1'];

$updatedata = $cdb->prepare("UPDATE agents SET ag_name = '$upname', ag_phone ='$upphone', ag_adress ='$upadress1' WHERE ag_id = '$agentid'");

$updatedata->execute();
if ($updatedata===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resupdate=$updatedata->get_result();
  header("Refresh:0;");
}
?>