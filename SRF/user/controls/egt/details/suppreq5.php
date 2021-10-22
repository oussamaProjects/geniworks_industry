
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['supp212a'];
$toolid12=$_POST['toolid212a'];
$suppid12=$_POST['suppid212a'];
$addcommentm=$_POST['addcomment22a'];
$paymmm=$_POST['paymm22a'];



  $addreq2 = "INSERT INTO srf_tools_request VALUES ('', '$toolid12$suppid12', '" . $toolid12 . "', '" . $supp2 . "', '11', '" . $suppid12 . "', NOW(), 'not approved', '$paymmm', '$addcommentm')";
 
$resordr2 = mysqli_query($cdb,$addreq2) ;
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($checkr2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>