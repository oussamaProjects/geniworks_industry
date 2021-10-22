
<?php
require('../zdfzfzef/de5.php');


	

  $supp3=$_POST['supp212c'];
$toolid13=$_POST['toolid212c'];
$suppid13=$_POST['suppid212c'];
$addcommentc=$_POST['addcomment22c'];
$paymmc=$_POST['paymmc22'];



  $addreq3 = "INSERT INTO srf_chemicals_request VALUES ('', '$toolid13$suppid13', '" . $toolid13 . "', '" . $supp3 . "', '21', '" . $suppid13 . "', NOW(), 'not approved', '$paymmc', '$addcommentc')";
 
$resordr3 = mysqli_query($cdb,$addreq3) ;
$checkr3 = mysqli_fetch_array($resordr3);
if(isset($checkr3))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>