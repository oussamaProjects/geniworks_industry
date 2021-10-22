<?php
if (isset($_POST['gocab'])) {


session_start();

$gwidcab=$_POST['gwidcab'];




require('zdze8efzedzdeezd/de5.php');


$getuser=mysqli_query($cdb,"SELECT * FROM user WHERE u_public_id='$gwidcab' LIMIT 1");

$rrow=mysqli_fetch_array($getuser);


if(mysqli_num_rows($getuser) > 0){

	$_SESSION['isvalid']=true;
	$_SESSION['userid']=$rrow['u_public_id'];

$addlog=$cdb->prepare("UPDATE user SET u_last_visited_date = NOW() WHERE u_public_id='$gwidcab'");
	     $addlog->execute();
	     if ($addlog === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
       	$rees=$addlog->get_result();
       	 $addconlog=$cdb->prepare("INSERT INTO connect_log VALUES ('','$gwidcab', NOW(), '')"); 
       	 $addconlog->execute();
       if ($addconlog === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
       	$rees=$addconlog->get_result();
       }


       }



	



	header("location:../apm2/admin.php");

	}else{
		header("location:../apm2/");
		?>

		<?php
		echo $error;
		}


}


?>