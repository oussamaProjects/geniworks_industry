
<?php
require('zdze8efzedzdeezd/de5.php');


	

$wname=$_POST['wname'];
$wid=$_POST['wid'];

  $addwit = $cdb->prepare("INSERT INTO witness VALUES ('', '$wname', '$wid', NOW())");
  $addwit->execute();
  if ($addwit===false) {
  	echo "ERROR";
  }else {
   	$reswit=$addwit->get_result();
   	header("Refresh:0;");
   } 

?>

