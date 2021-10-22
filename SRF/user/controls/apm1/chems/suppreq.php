
<?php
require('../zdfzfzef/de5.php');


	

  $supp1=$_POST['supp1'];
$matid11=$_POST['matid11'];
$suppid11=$_POST['suppid11'];


  $addreq1 = "INSERT INTO srf_materials_request VALUES ('', '$matid11$suppid11', '" . $matid11 . "', '" . $supp1 . "', '11', '" . $suppid11 . "', NOW(), 'not approved', '', '')";
 
$resordr1 = mysqli_query($cdb,$addreq1) ;
$checkr1 = mysqli_fetch_array($resordr1);
if(isset($check1))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>