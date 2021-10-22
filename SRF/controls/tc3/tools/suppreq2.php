
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['supptc31m'];
$toolid12=$_POST['toolidtc31m'];
$suppid12=$_POST['suppidtc31m'];
$addcommentm=$_POST['addcommentmtc3'];
$paymmm=$_POST['paymmmtc3'];



  $addreq2 = "INSERT INTO srf_tools_request VALUES ('', '$toolid12', '" . $toolid12 . "', '" . $supp2 . "', '32', '" . $suppid12 . "', NOW(), 'not approved', '$paymmm', '$addcommentm')";
 
$resordr2 = mysqli_query($cdb,$addreq2) ;
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($checkr2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>