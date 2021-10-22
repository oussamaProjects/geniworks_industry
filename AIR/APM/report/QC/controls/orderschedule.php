<?php
require('zdze8efzedzdeezd/de5.php');

$eststart=$_POST['eststart'];
$estfinish=$_POST['estfinish'];
$idinsp=$_POST['idinsp'];

$updatequery=$cdb->prepare("UPDATE asset_clean_inspection SET acij_call='order', acij_clean_done='$eststart' WHERE acij_id='$idinsp'");
$updatequery->execute();
if ($updatequery===false){
  echo "error";
}
else{
  $updatequeryres=$updatequery->get_result();
}
?>