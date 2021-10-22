
<?php
require('zdze8efzedzdeezd/de5.php');

$iduser=$_SESSION['nmu'];

$employeeid=$_POST['employeeid'];
$empdestination=$_POST['empdestination'];
$missiondisc=$_POST['missiondisc'];
$missionoutp=$_POST['missionoutp'];
$missionstart=$_POST['missionstart'];
$missionend=$_POST['missionend'];
$Vehicl=$_POST['Vehicl'];
$Vehicleid=$_POST['Vehicleid'];

$iffuel=$_POST['iffuel'];
$fuelqty=$_POST['fuelqty'];

$ifparking=$_POST['ifparking'];
$ifmeals=$_POST['ifmeals'];

$ifhost=$_POST['ifhost'];
$hostype=$_POST['hostype'];
$hoteltype=$_POST['hoteltype'];
$hotelprice=$_POST['hotelprice'];


if ($empdestination==11) {
	$empdestination="APM TERMINALS";
}
elseif ($empdestination==21) {
	$empdestination="EUROGATE";
}
elseif ($empdestination==31) {
	$empdestination="MARSA MAROC";
}
elseif ($empdestination==41) {
	$empdestination="HTTSA";
}

  $addexp=$cdb->prepare( "INSERT INTO expences VALUES ('', '$employeeid', '$missionoutp $empdestination $missiondisc', '$missionstart', '$missionend', '$hoteltype', '$Vehicleid', '$fuelqty', '$ifparking', '$ifmeals', 'pending', 'pending', 'pending', 'requested', NOW(), '', '$iduser', '$empdestination', '$missiondisc', '$missionoutp', '$Vehicl', '$hotelprice', '')");
  $addexp->execute();
  if ($addexp===false) {
  	echo "ops! something happend. try later or contact us.";
  }else{
  	$resexp=$addexp->get_result();
  }
?>
<meta http-equiv="refresh" content="0;" />


