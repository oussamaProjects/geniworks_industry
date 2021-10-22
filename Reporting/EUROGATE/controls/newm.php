
<?php
require('zdze8efzedzdeezd/de5.php');


	

$mname=$_POST['mname'];
$mid=$_POST['mid'];

  $addmat = $cdb->prepare("INSERT INTO material VALUES ('', '$mname', '$mid', '21', NOW(), '')");
  $addmat->execute();
  if ($addmat===false) {
  	echo "ERROR";
  }else {
   	$reswit=$addmat->get_result();
   	header("Refresh:0;");
   } 

?>

