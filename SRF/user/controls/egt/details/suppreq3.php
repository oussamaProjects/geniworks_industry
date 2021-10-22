
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['supp112c'];
$toolid12=$_POST['toolid112c'];
$suppid12=$_POST['suppid1m'];
$addcommentm=$_POST['addcomment12c'];
$paymmm=$_POST['paymmm'];



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