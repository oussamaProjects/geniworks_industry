<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['flfile']['tmp_name'])) {

$sourcePath = $_FILES['flfile']['tmp_name'];
$targetPath = "files/".$_FILES['flfile']['name'];


  $FileType = pathinfo($targetPath,PATHINFO_EXTENSION);

    if($FileType == "pdf")
    {
    	$targetPath = "files/pdf/".$_FILES['flfile']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {

require('zdze8efzedzdeezd/de5.php');

$addrev=$cdb->prepare("INSERT INTO file_manager VALUES ('','".$_FILES['flfile']['name']."','$targetPath','pdf','','','','','','',NOW(),'','',NOW())");
	$addrev->execute();
  if ($addrev===false) {
  	echo "ERROR";
  }else {
   	$resrev=$addrev->get_result();
   ?>

   <?php
   } 
?>
          <img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />                     
      
<?php
}
}

 if($FileType == "jpg")
    {
    	$targetPath = "files/img/".$_FILES['flfile']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {

require('zdze8efzedzdeezd/de5.php');

$addrev=$cdb->prepare("INSERT INTO file_manager VALUES ('','".$_FILES['flfile']['name']."','$targetPath','jpg','','','','','','',NOW(),'','',NOW())");
	$addrev->execute();
  if ($addrev===false) {
  	echo "ERROR";
  }else {
   	$resrev=$addrev->get_result();
    
?>

   <?php
   } 
?>
          <img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />                     
      
<?php
}
}

if($FileType == "docx")
    {
    	$targetPath = "files/doc/".$_FILES['flfile']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {

require('zdze8efzedzdeezd/de5.php');

$addrev=$cdb->prepare("INSERT INTO file_manager VALUES ('','".$_FILES['flfile']['name']."','$targetPath','docx','','','','','','',NOW(),'','',NOW())");
	$addrev->execute();
  if ($addrev===false) {
  	echo "ERROR";
  }else {
   	$resrev=$addrev->get_result();

   ?>

   <?php
   } 
?>
          <img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />                     
      
<?php
}
}

if($FileType == "csv")
    {
    	$targetPath = "files/csv/".$_FILES['flfile']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {

require('zdze8efzedzdeezd/de5.php');

$addrev=$cdb->prepare("INSERT INTO file_manager VALUES ('','".$_FILES['flfile']['name']."','$targetPath','csv','','','','','','',NOW(),'','',NOW())");
	$addrev->execute();
  if ($addrev===false) {
  	echo "ERROR";
  }else {
   	$resrev=$addrev->get_result();
   ?>

   <?php
   } 
?>
          <img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />                     
      
<?php
}
}

}
}
?>