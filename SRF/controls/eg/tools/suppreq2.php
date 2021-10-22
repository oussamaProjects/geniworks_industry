
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['suppeg1m'];
$toolid12=$_POST['toolideg1m'];
$suppid12=$_POST['suppideg1m'];
$addcommentm=$_POST['addcommentmeg'];
$paymmm=$_POST['paymmmeg'];

  $addreq2 = "INSERT INTO srf_tools_request VALUES ('', '$toolid12', '" . $toolid12 . "', '" . $supp2 . "', '21', '" . $suppid12 . "', NOW(), 'not approved', '$paymmm', '$addcommentm')";
 
$resordr2 = mysqli_query($cdb,$addreq2) ;
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($checkr2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>