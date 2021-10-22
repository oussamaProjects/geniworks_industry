
<?php
require('../zdfzfzef/de5.php');


	

  $supp1=$_POST['supp1'];
$toolid11=$_POST['toolid11'];
$suppid11=$_POST['suppid11'];


  $addreq = "INSERT INTO srf_materials_request VALUES ('', '$toolid11$suppid11', '" . $toolid11 . "', '" . $supp1 . "', '11', '" . $suppid11 . "', NOW(), 'not approved', '', '')";
 
$resordr = mysqli_query($cdb,$addreq) ;
$checkr = mysqli_fetch_array($resordr);
if(isset($checkr))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>