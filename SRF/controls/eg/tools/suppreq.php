
<?php
require('../zdfzfzef/de5.php');


	

$supp1=$_POST['suppeg1'];
$toolid11=$_POST['toolideg11'];
$suppid11=$_POST['suppideg11'];
$addcomment=$_POST['addcommenteg'];
$paymmt=$_POST['paymmteg'];

  $selreq = "SELECT * FROM `srf_tools_request` WHERE `str_tool_name` = '$toolid11'";
  $checkif = mysqli_fetch_array($selreq);
if(isset($checkif))
{

  $upreq = "UPDATE `srf_tools_request` SET `str_quantity` = `str_quantity`+'$supp1' WHERE `str_tool_name` = '$toolid11'";
 
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

	$addreq = "INSERT INTO srf_tools_request VALUES ('', '$toolid11', '" . $toolid11 . "', '" . $supp1 . "', '21', '" . $suppid11 . "', NOW(), 'not approved', '$paymmt', '$addcomment')";
 
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