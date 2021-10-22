
<?php
require('controls/zdze8efzedzdeezd/de5.php');

$agent=$_POST['agent'];
$presence=$_POST['presence'];
$agentid=$_POST['agentid'];
$presencedate=$_POST['presencedate'];
$proof=$_POST['proof'];
  $updpres = $cdb->prepare("UPDATE `agents` SET `ag_presence` = '$presence' WHERE `ag_id` = '$agentid'");
$updpres->execute();
if($updpres===false)
{
    echo "We Have Issue To Accept Your Request";
}
else {
  	$resupd=$updpres->get_result();
     print "Form submitted successfully: <br>".$agent." is <b>".$presence."</b><br>";
    $addabs =  $cdb->prepare("INSERT INTO presence VALUES ('', '$agentid', '31', '$presence', '', NOW(), '$proof', '$presencedate')");

$addabs->execute();
if($addabs===false)
{
    echo "We Have Issue To Accept Your Request";
}
else {
  	$resadd=$addabs->get_result();
  	header("Refresh:0");
  }

}

?>
