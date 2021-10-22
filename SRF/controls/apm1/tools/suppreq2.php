
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['supp1m'];
$toolid12=$_POST['toolid1m'];
$suppid12=$_POST['suppid1m'];
$addcommentm=$_POST['addcommentm'];
$paymmm=$_POST['paymmm'];



  $addreq2 = "INSERT INTO srf_tools_request VALUES ('', '$toolid12', '" . $toolid12 . "', '" . $supp2 . "', '11', '" . $suppid12 . "', NOW(), 'not approved', '$paymmm', '$addcommentm')";
 
$resordr2 = mysqli_query($cdb,$addreq2) ;
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($checkr2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>