<?php

require('zdze8efzedzdeezd/de5.php');

if(!empty($_FILES))
{
  if(is_uploaded_file($_FILES['afterclean']['tmp_name']))
  {
    sleep(1);

  



$idinsp=$_POST['idinsp'];

$eqpic = $_FILES['afterclean']['name'];


 if($eqpic!=''){
  $upload_directory = "img/after/"; 
  $picaf=time().$eqpic;
  if(move_uploaded_file($_FILES['afterclean']['tmp_name'], $upload_directory.$picaf)){    
    $QueryInsertFile=$cdb->prepare("INSERT INTO after_inspection VALUES ('', '$idinsp', '$picaf', NOW())");
       $QueryInsertFile->execute();
       if ($QueryInsertFile === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
$rees=$QueryInsertFile->get_result();

}
}}


 




          
  }
}









    
?>



