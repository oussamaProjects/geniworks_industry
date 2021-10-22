<?php

require('zdfzfzef/de5.php');

$ast= $_POST['ast3'];
$subast=$_POST['subast3'];
$gwyes = $_POST['gwyes3'];
$cleanyes=$_POST['cleanyes3'];
$eqpic = $_FILES['eqpic3']['name'];

 if($eqpic!='')
 {
 	$upload_directory = "img/assets/"; 
 	$pic=time().$eqpic;
 	if(move_uploaded_file($_FILES['eqpic3']['tmp_name'], $upload_directory.$pic)){    
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

