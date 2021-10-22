
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['suppu1m'];
$toolid12=$_POST['toolidu1m'];
$suppid12=$_POST['suppidu1m'];
$addcommentm=$_POST['addcommentum'];
$paymmm=$_POST['paymmum'];

$resordr2 = mysqli_query($cdb,$addreq2);


  $addreq2 = "INSERT INTO srf_materials_request VALUES ('', '$toolid12$suppid12', '" . $toolid12 . "', '" . $supp2 . "', '11', '" . $suppid12 . "', NOW(), 'not approved', '$paymmm', '$addcommentm')";
 
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($checkr2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>