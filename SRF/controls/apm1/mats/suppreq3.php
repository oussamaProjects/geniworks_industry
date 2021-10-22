
<?php
require('../zdfzfzef/de5.php');


	

  $supp3=$_POST['supp3'];
$toolid13=$_POST['toolid13'];
$suppid13=$_POST['suppid13'];


  $addreq3 = "INSERT INTO srf_materials_request VALUES ('', '$toolid13', '" . $toolid13 . "', '" . $supp3 . "', '11', '" . $suppid13 . "', NOW(), 'not approved', '', '')";
 
$resordr3 = mysqli_query($cdb,$addreq3) ;
$checkr3 = mysqli_fetch_array($resordr3);
if(isset($check3))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>