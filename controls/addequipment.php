<?php

require('zdze8efzedzdeezd/45azd72dz9de5.php');

$internalid = $_POST['internalid'];
$eqname= $_POST['brnd'];
$eqowner= $_POST['eqowner'];
$funct = $_POST['funct'];
$acqd = $_POST['acqd'];
$ahrc =  $_POST['ahrc'];
$serialnum = $_POST['serialnum'];

$eqpic = $_FILES['eqpic']['name'];

if($eqpic!='')
{
  $upload_directory = "../img/equipments/"; 
  $pic=time().$eqpic;
  if(move_uploaded_file($_FILES['eqpic']['tmp_name'], $upload_directory.$pic)){    
    $QueryInsertFile=$cdb->prepare("INSERT INTO equipments VALUES ('','$eqname', '$serialnum', '$eqowner', '$internalid', NOW(), '$acqd', '$pic', 'need review', '$ahrc', '', '', '') "); 
    // Write Mysql Query Here to insert this $QueryInsertFile   .                   
   
       $QueryInsertFile->execute();
       if ($QueryInsertFile === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        
        $eqpname = $_POST['eqpname'];
        $eqpid = $_POST['eqpid'];
        $eqppic = $_FILES['eqppic']['name'];
        if($eqppic!='')
{
  $upload_directory_part = "../img/equipments/parts/"; 
  $ppic=time().$eqppic;
  if(move_uploaded_file($_FILES['eqppic']['tmp_name'], $upload_directory_part.$ppic)){    
        $Queryaddp=$cdb->prepare("INSERT INTO equipments_parts VALUES ('$eqpid', '$internalid', '$eqpname', NOW(), '$ppic') "); 
        $Queryaddp->execute();
        if ($Queryaddp === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $resp=$Queryaddp->get_result();
    }
    }
}

$rees=$QueryInsertFile->get_result();
        ?>

<meta http-equiv='refresh' content='0;../checklist.php'>
<?php
}
}
}
?>