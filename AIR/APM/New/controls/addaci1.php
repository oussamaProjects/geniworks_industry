<?php

require('zdze8efzedzdeezd/de5.php');

$ast= $_POST['ast2'];
$subast=$_POST['subast2'];
$gwyes = !empty($_POST['gwyes2']);
$cleanyes=!empty($_POST['cleanyes2']);
$eqpic = $_FILES['eqpic2']['name'];

 if($eqpic!='')
 {
 	$upload_directory = "controls/img/assets/"; 
 	$pic=time().$eqpic;
 	if(move_uploaded_file($_FILES['eqpic2']['tmp_name'], $upload_directory.$pic)){    
		$QueryInsertFile=$cdb->prepare("INSERT INTO asset_clean_inspection VALUES ('','11', '$ast', '$subast', '$pic', '$cleanyes', '$gwyes', NOW(), 'Not Defined')");                   
	 
			 $QueryInsertFile->execute();
			 if ($QueryInsertFile === false) {
					echo "display error".mysqli_error($cdb);
			 }
			 else{
				
$rees=$QueryInsertFile->get_result();

}
}}
?>

