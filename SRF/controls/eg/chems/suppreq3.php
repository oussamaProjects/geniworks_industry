
<?php
require('../zdfzfzef/de5.php');


	

  $supp3=$_POST['supp1ceg'];
$toolid13=$_POST['toolid1ceg'];
$suppid13=$_POST['suppid1ceg'];
$addcommentc=$_POST['addcommentceg'];
$paymmc=$_POST['paymmceg'];



  $addreq3 = "INSERT INTO srf_chemicals_request VALUES ('', '$toolid13', '" . $toolid13 . "', '" . $supp3 . "', '21', '" . $suppid13 . "', NOW(), 'not approved', '$paymmc', '$addcommentc')";
 
$resordr3 = mysqli_query($cdb,$addreq3) ;
$checkr3 = mysqli_fetch_array($resordr3);
if(isset($checkr3))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>