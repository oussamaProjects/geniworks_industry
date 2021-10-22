<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['extraimg']['tmp_name'])) {
$sourcePath = $_FILES['extraimg']['tmp_name'];
$targetPath = "controls/img/assets/EG/".$_FILES['extraimg']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {


  require('zdze8efzedzdeezd/de5.php');


$idrep=$_POST['idrep'];


  $addrev = $cdb->prepare("INSERT INTO report_pic VALUES ('', '$idrep', '$targetPath', NOW())");
  $addrev->execute();
  if ($addrev===false) {
    echo "ERROR";
  }else {
    $resrev=$addrev->get_result();
    header("Refresh:0;");
   } 
?>
                     
      
<?php
}
}
}
?>