
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['supptc31m'];
$matidde1m=$_POST['matidtc31m'];
$suppid12=$_POST['suppidtc31m'];
$addcommentm=$_POST['addcommentmtc3'];
$paymmm=$_POST['paymmmtc3'];



  $addreq2 = "INSERT INTO srf_materials_request VALUES ('', '$matidde1m', '" . $matidde1m . "', '" . $supp2 . "', '32', '" . $suppid12 . "', NOW(), 'not approved', '$paymmm', '$addcommentm')";
 
$resordr2 = mysqli_query($cdb,$addreq2) ;
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($checkr2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>