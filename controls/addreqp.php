<?php

require('zdze8efzedzdeezd/45azd72dz9de5.php');

$projectnm=$_POST['projectnm'];
$issun=$_POST['issun'];
$contremsr=$_POST['contremsr'];
$discription=$_POST['discription'];

$ptargetc=$_POST['ptargetc'];
$ptypec=$_POST['ptypec'];
$pctc=$_POST['pctc'];
$pcpc=$_POST['pcpc'];
$pcvc=$_POST['pcvc'];
$pcac=$_POST['pcac'];

$acpc=$_POST['acpc'];
$aauc=$_POST['aauc'];
$aadbc=$_POST['aadbc'];
$amac=$_POST['amac'];

$fcpc=$_POST['fcpc'];
$fauc=$_POST['fauc'];
$fczc=$_POST['fczc'];
$fsmc=$_POST['fsmc'];

$slvc=$_POST['slvc'];
$shslc=$_POST['shslc'];
$stuc=$_POST['stuc'];
$pwbs=$_POST['pwbsc'];

//$pic_name=$_FILES['projectsmp']['name'];

	//if($pic_name!='')
	//{
  //$upload_directory = "controls/imgs/projects/"; 
  //$projectsmp=time().$pic_name;

 // if(move_uploaded_file($_FILES['projectsmp']['tmp_name'], $upload_directory.$projectsmp)){   

	$reqa=$cdb->prepare("INSERT INTO project_request_form VALUES('', '$projectnm', '$issun', '$contremsr', '$discription', '$ptargetc', '$ptypec', '$pctc', '$pcpc', '$pcvc', '$pcac', '$acpc', '$aauc', '$aadbc', '$amac', '$fcpc', '$fauc', '$fczc', '$fsmc', '$slvc', '$shslc', '$stuc', '', '', '', '', '', '', '')");
	$reqa->execute();
	if ($reqa===false) {
		echo "add failed!".mysqli_error();
	}else{

			$reqres=$reqa->get_result();
			echo "<meta http-equiv='refresh' content='0;project-request-form.php#'>";
		}

	//}
 //}
//}
//if ($pic_name='') {
//	$reqa=$cdb->prepare("INSERT INTO project_request_form VALUES('', projectnm '$issun', '$contremsr', '$discription', '$ptargetc', '$ptypec', '$pctc', '$pcpc', '$pcvc', '$pcac', '$acpc', '$aauc', '$aadbc', '$amac', '$fcpc', '$fauc', '$fczc', '$fsmc', '$slvc', '$shslc', '$stuc', '', '', '', '', '', '', '')");
//	$reqa->execute();
//	if ($reqa===false) {
//		echo "add failed!".mysqli_error();
//	}else{

//			$reqres=$reqa->get_result();
//			echo "<meta http-equiv='refresh' content='0;../project_request_form.php'>";
//		}

//}






 ?>