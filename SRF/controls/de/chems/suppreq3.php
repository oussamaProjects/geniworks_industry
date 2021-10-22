
<?php
require('../zdfzfzef/de5.php');


	

  $supp3=$_POST['supp1c'];
$chemid1c=$_POST['chemid1c'];
$suppid13=$_POST['suppid1c'];
$addcommentc=$_POST['addcommentc'];
$paymmc=$_POST['paymmc'];



  $addreq3 = "INSERT INTO srf_chemicals_request VALUES ('', '$chemid1c', '" . $chemid1c . "', '" . $supp3 . "', '31', '" . $suppid13 . "', NOW(), 'not approved', '$paymmc', '$addcommentc')";
 
$resordr3 = mysqli_query($cdb,$addreq3) ;
$checkr3 = mysqli_fetch_array($resordr3);
if(isset($checkr3))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>