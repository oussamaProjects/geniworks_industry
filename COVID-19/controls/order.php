










<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['cupldpic']['tmp_name'])) {

$sourcePath = $_FILES['cupldpic']['tmp_name'];
$targetPath = "img/".$_FILES['cupldpic']['name'];


if(move_uploaded_file($sourcePath,$targetPath)) {

require('zdze8efzedzdeezd/de5.php');

$cowner=$_POST['cowner'];
$casset=$_POST['casset'];
$cpart=$_POST['cpart'];
$gwidcab=$_POST['gwidcab'];

$cpartlocation=$_POST['cpartlocation'];
$csubpart1=$_POST['csubpart1'];
$ccleaningtype=$_POST['ccleaningtype'];
$cstarttime=$_POST['cstarttime'];
$cestimateddelivery=$_POST['cestimateddelivery'];
$cupldpic=$_POST['cupldpic'];

$addrev=$cdb->prepare("INSERT INTO work_order VALUES ('','$casset','$cowner','$cpart','$cpartlocation','$csubpart1','$ccleaningtype','$cstarttime','$cestimateddelivery','$targetPath','Pending','$gwidcab','',NOW())");
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
?>