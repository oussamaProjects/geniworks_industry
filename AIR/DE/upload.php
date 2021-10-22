<?php
session_start();
$userpu=$_SESSION['nmu'];
$userpp=$_SESSION['passu'];
$userp=$_SESSION['uat'];
require('controls/zdze8efzedzdeezd/de5.php');

if(!empty($_FILES))
{
	if(is_uploaded_file($_FILES['skipID']['tmp_name']))
	{
		sleep(1);

	


$ast= $_POST['ast1'];
$subast=$_POST['subast1'];
$subastid1=$_POST['subastid1'];
$gwyes = !empty($_POST['gwyes1']);
$cleanyes=!empty($_POST['cleanyes1']);
$eqpic = $_FILES['skipID']['name'];

 if($eqpic!='')
 {
 	$upload_directory = "controls/img/assets/"; 
 	$pic=time().$eqpic;
 	if(move_uploaded_file($_FILES['skipID']['tmp_name'], $upload_directory.$pic)){    
		$QueryInsertFile=$cdb->prepare("INSERT INTO asset_clean_inspection_de VALUES ('','31', '$ast', '$subast', '$subastid1', '$pic', '$cleanyes', '$gwyes', NOW(), '$userpu')");
			 $QueryInsertFile->execute();
			 if ($QueryInsertFile === false) {
					echo "display error".mysqli_error($cdb);
			 }
			 else{
$rees=$QueryInsertFile->get_result();

}
}}
			echo '<img src="'.$upload_directory.''.$pic.'" class="img-thumbnail" width="300" />';?>

			<h4><span > <?php echo $ast;?></span> | <span> <?php echo $subastid1;?> </span> | <span> <?php echo $subast;?></span></h4>


<?php		
	}
}

?>