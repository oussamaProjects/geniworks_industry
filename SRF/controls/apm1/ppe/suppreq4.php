
<?php
require('../zdfzfzef/de5.php');


	

  $suppo1=$_POST['suppo1'];
$ppeido11=$_POST['ppeido11'];
$suppoid11=$_POST['suppoid11'];
$addcommentop=$_POST['addcommentop'];
$paymop=$_POST['paymop'];

  $selreq = "SELECT * FROM `srf_ppe_request` WHERE `str_ppe_name` = '$ppeido11'";
  $checkif = mysqli_fetch_array($selreq);
if(isset($checkif))
{

  $upreq = "UPDATE `srf_ppe_request` SET `str_quantity` = `str_quantity`+'$suppo1' WHERE `str_ppe_name` = '$ppeido11'";
 
$resordr = mysqli_query($cdb,$upreq) ;
$checkr = mysqli_fetch_array($resordr);
if(isset($checkr))
{
    echo "Working";

  } else {
    echo "Not working";
  }


}
else{

	$addreq = "INSERT INTO srf_ppe_request VALUES ('', '$ppeido11', '" . $ppeido11 . "', '" . $suppo1 . "', '11', '" . $suppoid11 . "', NOW(), 'not approved', '$paymop', '$addcommentop')";
 
$resordr = mysqli_query($cdb,$addreq) ;
$checkr = mysqli_fetch_array($resordr);
if(isset($checkr))
{
    echo "Working";

  } else {
    echo "Not working";
  }
}

?>