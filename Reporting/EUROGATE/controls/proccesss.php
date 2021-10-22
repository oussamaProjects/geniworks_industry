
<?php
require('zdze8efzedzdeezd/de5.php');


	

$prosname=$_POST['prosname'];
$prosid=$_POST['prosid'];

  $addwit = $cdb->prepare("INSERT INTO processes VALUES ('', '$prosname', '$prosid', NOW())");
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

