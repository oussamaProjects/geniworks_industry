
<?php
require('zdze8efzedzdeezd/de5.php');


	

$accpname=$_POST['accpname'];
$accpid=$_POST['accpid'];

  $addwit = $cdb->prepare("INSERT INTO acceptance VALUES ('', '$accpname', '$accpid', NOW())");
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

