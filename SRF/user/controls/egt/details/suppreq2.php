
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['supp212m'];
$toolid12=$_POST['toolid212m'];
$suppid12=$_POST['suppid212m'];
$addcommentm=$_POST['addcommentm22'];
$paymmm=$_POST['paymmm22'];



  $addreq2 = "INSERT INTO srf_materials_request VALUES ('', '$toolid12$suppid12', '" . $toolid12 . "', '" . $supp2 . "', '21', '" . $suppid12 . "', NOW(), 'not approved', '$paymmm', '$addcommentm')";
 
$resordr2 = mysqli_query($cdb,$addreq2) ;
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($checkr2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>