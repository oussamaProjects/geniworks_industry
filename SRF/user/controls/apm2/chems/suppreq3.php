
<?php
require('../zdfzfzef/de5.php');


	

  $supp3=$_POST['supp1c'];
$toolid13=$_POST['toolid1c'];
$suppid13=$_POST['suppid1c'];
$addcommentc=$_POST['addcommentc'];
$paymmc=$_POST['paymmc'];



  $addreq3 = "INSERT INTO srf_chemicals_request VALUES ('', '$toolid13$suppid13', '" . $toolid13 . "', '" . $supp3 . "', '11', '" . $suppid13 . "', NOW(), 'not approved', '$paymmc', '$addcommentc')";
 
$resordr3 = mysqli_query($cdb,$addreq3) ;
$checkr3 = mysqli_fetch_array($resordr3);
if(isset($checkr3))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>