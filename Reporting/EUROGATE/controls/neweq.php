
<?php
require('zdze8efzedzdeezd/de5.php');


	

$eqname=$_POST['eqname'];
$eqid=$_POST['eqid'];

  $addeq = $cdb->prepare("INSERT INTO equipment VALUES ('', '$eqname', '$eqid', '21', '', NOW(), '', '')");
  $addeq->execute();
  if ($addeq===false) {
  	echo "ERROR";
  }else {
   	$reseq=$addeq->get_result();
   	header("Refresh:0;");
   } 

?>

