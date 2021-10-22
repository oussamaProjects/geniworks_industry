
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['suppde1m'];
$matidde1m=$_POST['matidde1m'];
$suppid12=$_POST['suppidde1m'];
$addcommentm=$_POST['addcommentdem'];
$paymmm=$_POST['paymmmde'];



  $addreq2 = "INSERT INTO srf_materials_request VALUES ('', '$matidde1m', '" . $matidde1m . "', '" . $supp2 . "', '31', '" . $suppid12 . "', NOW(), 'not approved', '$paymmm', '$addcommentm')";
 
$resordr2 = mysqli_query($cdb,$addreq2) ;
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($checkr2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>




