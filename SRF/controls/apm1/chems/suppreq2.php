
<?php
require('../zdfzfzef/de5.php');


	

  $supp2=$_POST['supp2'];
$matid12=$_POST['matid12'];
$suppid12=$_POST['suppid12'];


  $addreq2 = "INSERT INTO srf_materials_request VALUES ('', '$matid12', '" . $matid12 . "', '" . $supp2 . "', '11', '" . $suppid12 . "', NOW(), 'not approved', '', '')";
 
$resordr2 = mysqli_query($cdb,$addreq2) ;
$checkr2 = mysqli_fetch_array($resordr2);
if(isset($check2))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>