<?php
require('zdze8efzedzdeezd/45azd72dz9de5.php');
        
        $ebrndd = $_POST['ebrndd'];
        $prtname = $_POST['prtname'];
        $eqpicc = $_FILES['eqpicc']['name'];
        if($eqpicc!='')
{
  $upload_directory_part = "../img/equipments/parts/"; 
  $ppic=time().$eqpicc;
  if(move_uploaded_file($_FILES['eqpicc']['tmp_name'], $upload_directory_part.$ppic)){    
        $Queryaddp=$cdb->prepare("INSERT INTO equipments_parts VALUES ('', '$prtname', '$ebrndd', NOW(), '$ppic') "); 
        $Queryaddp->execute();
        if ($Queryaddp === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $resp=$Queryaddp->get_result();
    }
    }
}
        ?>

<meta http-equiv='refresh' content='0;../checklist.php'>