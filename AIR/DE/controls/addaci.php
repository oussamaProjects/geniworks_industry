<?php

require('zdze8efzedzdeezd/de5.php');

$userpu=$_SESSION['nmu'];
$userpp=$_SESSION['passu'];
$userp=$_SESSION['uat'];

$ast= $_POST['ast1'];
$subast=$_POST['subast1'];
$subastid1=$_POST['subastid1'];
$gwyes = !empty($_POST['gwyes1']);
$cleanyes=!empty($_POST['cleanyes1']);
$eqpic = $_FILES['eqpic1']['name'];

 if($eqpic!='')
 {
 	$upload_directory = "controls/img/assets/"; 
 	$pic=time().$eqpic;
 	if(move_uploaded_file($_FILES['eqpic1']['tmp_name'], $upload_directory.$pic)){    
		$QueryInsertFile=$cdb->prepare("INSERT INTO asset_clean_inspection VALUES ('','31', '$ast', '$subast', '$subastid1', '$pic', '$cleanyes', '$gwyes', NOW(), '$userpu')");
			 $QueryInsertFile->execute();
			 if ($QueryInsertFile === false) {
					echo "display error".mysqli_error($cdb);
			 }
			 else{
$rees=$QueryInsertFile->get_result();

}
}}
?>

