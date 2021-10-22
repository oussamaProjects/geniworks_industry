
<?php
require('../zdfzfzef/de5.php');


	

  $suppd1=$_POST['supptc31'];
$toolidd11=$_POST['toolidtc311'];
$suppidde1=$_POST['suppidtc31'];
$addcommentm=$_POST['addcommentmtc3'];
$paymmtd=$_POST['paymmttc3'];

  $selreq = "SELECT * FROM `srf_tools_request` WHERE `str_tool_name` = '$toolidd11'";
  $checkif = mysqli_fetch_array($selreq);
if(isset($checkif))
{

  $upreq = "UPDATE `srf_tools_request` SET `str_quantity` = `str_quantity`+'$suppd1' WHERE `str_tool_name` = '$toolidd11'";
 
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

	$addreq = "INSERT INTO srf_tools_request VALUES ('', '$toolidd11', '" . $toolidd11 . "', '" . $suppd1 . "', '32', '" . $suppidde1 . "', NOW(), 'not approved', '$paymmtd', '$addcommentm')";
 
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