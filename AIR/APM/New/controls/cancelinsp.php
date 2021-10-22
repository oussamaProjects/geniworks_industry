<?php

  require('zdze8efzedzdeezd/de5.php');

  	
  
$idinsp=$_POST['idinsp'];
$updatequery=$cdb->prepare("UPDATE asset_clean_inspection SET acij_call='cancel' WHERE acij_id='$idinsp'");
$updatequery->execute();
if ($updatequery===false){
  echo "error";
}
else{
  $updatequeryres=$updatequery->get_result();
}


?>