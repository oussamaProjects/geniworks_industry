<?php

require('zdze8efzedzdeezd/de5.php');

$eqname= $_POST['brnd'];
$serialnum = $_POST['serialnum'];
//$quantity = $_POST['quantity'];
$psupplier = $_POST['psupplier'];
$pfunction = $_POST['pfunction'];
$priceppe =$_POST['priceppe'];
$eqpic = $_FILES['eqpic']['name'];

if($eqpic!='')
{
  $upload_directory = "imgs/ppe/"; 
  $pic=time().$eqpic;
  if(move_uploaded_file($_FILES['eqpic']['tmp_name'], $upload_directory.$pic)){    
    $addto11=$cdb->prepare("INSERT INTO work_ppe_apm1 VALUES ('','$serialnum', '$eqname', '$pic', '$pfunction', '$psupplier', '0', '0', '$priceppe', '11', NOW(), NOW()) "); 
  
       $addto11->execute();
       if ($addto11 === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $rees11=$addto11->get_result();
        }
        $addto12=$cdb->prepare("INSERT INTO work_ppe_apm2 VALUES ('','$serialnum', '$eqname', '$pic', '$pfunction', '$psupplier', '0', '0', '$priceppe', '12', NOW(), NOW()) "); 
  
       $addto12->execute();
       if ($addto12 === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $rees12=$addto12->get_result();
        }
        $addto21=$cdb->prepare("INSERT INTO work_ppe_eg VALUES ('','$serialnum', '$eqname', '$pic', '$pfunction', '$psupplier', '0', '0', '$priceppe', '21', NOW(), NOW()) "); 
  
       $addto21->execute();
       if ($addto21 === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $rees21=$addto21->get_result();
        }
        $addto31=$cdb->prepare("INSERT INTO work_ppe_de VALUES ('','$serialnum', '$eqname', '$pic', '$pfunction', '$psupplier', '0', '0', '$priceppe', '31', NOW(), NOW()) "); 
  
       $addto31->execute();
       if ($addto31 === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $rees31=$addto31->get_result();
        }
        $addto32=$cdb->prepare("INSERT INTO work_ppe_tc3 VALUES ('','$serialnum', '$eqname', '$pic', '$pfunction', '$psupplier', '0', '0', '$priceppe', '32', NOW(), NOW()) "); 
  
       $addto32->execute();
       if ($addto32 === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $rees32=$addto32->get_result();
        }
        $addto41=$cdb->prepare("INSERT INTO work_ppe_bmci VALUES ('','$serialnum', '$eqname', '$pic', '$pfunction', '$psupplier', '0', '0', '$priceppe', '41', NOW(), NOW()) "); 
  
       $addto41->execute();
       if ($addto41 === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
        $rees41=$addto41->get_result();
        }
        ?>
        <meta http-equiv='refresh' content='0;../ppe/'>
        <?php
}
}
?>

