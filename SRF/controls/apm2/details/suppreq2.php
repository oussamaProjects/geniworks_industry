
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['supp112m'];
$toolid12=$_POST['toolid112m'];
$suppid12=$_POST['suppid112m'];
$addcommentm=$_POST['addcommentm12'];
$paymmm=$_POST['paymmm12'];



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