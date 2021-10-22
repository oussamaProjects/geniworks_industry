
<?php
require('zdze8efzedzdeezd/de5.php');


	

$specname=$_POST['specname'];
$specid=$_POST['specid'];

  $addwit = $cdb->prepare("INSERT INTO specification VALUES ('', '$specname', '$specid', NOW())");
  $addwit->execute();
  if ($addwit===false) {
  	echo "ERROR";
  }else {
   	$reswit=$addwit->get_result();

?>
<meta http-equiv="refresh" content="0;" />
  <?php
   } 
 
?>

