
<?php
require('../zdfzfzef/de5.php');


	

  $supp1=$_POST['suppeg1'];
$toolid11=$_POST['toolideg11'];
$suppid11=$_POST['suppideg11'];


  $addreq = "INSERT INTO srf_materials_request VALUES ('', '$toolid11', '" . $toolid11 . "', '" . $supp1 . "', '21', '" . $suppid11 . "', NOW(), 'not approved', '', '')";
 
$resordr = mysqli_query($cdb,$addreq) ;
$checkr = mysqli_fetch_array($resordr);
if(isset($checkr))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>