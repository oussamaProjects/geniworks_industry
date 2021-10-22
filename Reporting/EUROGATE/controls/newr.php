
<?php
require('zdze8efzedzdeezd/de5.php');


	

$rname=$_POST['rname'];
$rid=$_POST['rid'];

  $addrev = $cdb->prepare("INSERT INTO revealer VALUES ('', '$rname', '$rid', '21', NOW(), '')");
  $addrev->execute();
  if ($addrev===false) {
  	echo "ERROR";
  }else {
   	$resrev=$addrev->get_result();
   	header("Refresh:0;");
   } 

?>

