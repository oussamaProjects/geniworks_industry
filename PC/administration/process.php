
<?php
require('controls/zdze8efzedzdeezd/de5.php');

$admn=$_POST['admn'];
$presence=$_POST['presence'];
$admnid=$_POST['admnid'];
$presencedate=$_POST['presencedate'];
$proof=$_POST['proof'];
  $updpres = $cdb->prepare("UPDATE `admin` SET `ad_presence` = '$presence' WHERE `ad_id` = '$admnid'");
$updpres->execute();
if($updpres===false)
{
    echo "We Have Issue To Accept Your Request";
}
else {
  	$resupd=$updpres->get_result();
    
    $addabs =  $cdb->prepare("INSERT INTO presence VALUES ('', '$admnid', 'admn', '$presence', '', NOW(), '$proof', '$presencedate')");

$addabs->execute();
if($addabs===false)
{
    echo "We Have Issue To Accept Your Request";
}
else {
  	$resadd=$addabs->get_result();
?>
<meta http-equiv="refresh" content="0;" />
<?php
  }

}

?>
