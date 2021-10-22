
<?php
require('../zdfzfzef/de5.php');


	

  $supp5=$_POST['supp1aeg'];
$toolid15=$_POST['toolid1aeg'];
$suppid15=$_POST['suppid1aeg'];
$addcommenta=$_POST['addcommentaeg'];
$paymma=$_POST['paymmaeg'];



  $addreq4 = "INSERT INTO srf_ape_request VALUES ('', '$toolid15', '" . $toolid15 . "', '" . $supp5 . "', '21', '" . $suppid15 . "', NOW(), 'not approved', '$paymma', '$addcommenta')";
 
$resordr4 = mysqli_query($cdb,$addreq4) ;
$checkr4 = mysqli_fetch_array($resordr4);
if(isset($checkr4))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>