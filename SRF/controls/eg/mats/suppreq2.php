
<?php
require('../zdfzfzef/de5.php');


	

  $suppeg1m=$_POST['suppeg1m'];
$matid1meg=$_POST['matid1meg'];
$suppid12=$_POST['suppid1meg'];
$addcommentm=$_POST['addcommentm'];
$paymmm=$_POST['paymmmeg'];



  $addreq2 = "INSERT INTO srf_materials_request VALUES ('', '$matid1meg', '" . $matid1meg . "', '" . $suppeg1m . "', '21', '" . $suppid12 . "', NOW(), 'not approved', '$paymmm', '$addcommentm')";
 
$resordr2 = mysqli_query($cdb,$addreq2) ;
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($checkr2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>