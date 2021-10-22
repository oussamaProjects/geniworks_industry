
<?php
require('../zdfzfzef/de5.php');


  

  $supp2=$_POST['supp2t2'];
$toolid12=$_POST['toolid211'];
$suppid12=$_POST['suppid21'];
$addcommentm=$_POST['addcommentt22'];
$paymmm=$_POST['paymmtt22'];



  $addreq2 = "INSERT INTO srf_tools_request VALUES ('', '$toolid12$suppid12', '" . $toolid12 . "', '" . $supp2 . "', '21', '" . $suppid12 . "', NOW(), 'not approved', '$paymmm', '$addcommentm')";
 
$resordr2 = mysqli_query($cdb,$addreq2) ;
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($checkr2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>