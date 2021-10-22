
<?php
require('zdze8efzedzdeezd/de5.php');


	

$rsname=$_POST['rsname'];
$rsid=$_POST['rsid'];

  $addwit = $cdb->prepare("INSERT INTO result VALUES ('', '$rsname', '$rsid', NOW())");
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

