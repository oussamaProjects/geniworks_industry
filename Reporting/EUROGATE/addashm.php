
<?php
require('zdze8efzedzdeezd/de5.php');


	

$ashmname=$_POST['ashmname'];
$ashmid=$_POST['ashmid'];

  $addwit = $cdb->prepare("INSERT INTO asset_handmark VALUES ('', '$ashmid', 'QC', '$ashmname', '', '')");
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

