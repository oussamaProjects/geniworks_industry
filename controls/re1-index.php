<?php
if(isset($_POST['accesu'])){
session_start();

require('zdze8efzedzdeezd/de5.php');
if (empty($_POST['user']) || empty($_POST['pass'])) { 
	header("location:../login.php");
    $error = "Username or Password is invalid"; 
  } 
elseif (!empty($_POST['user']) || !empty($_POST['pass'])) {
	


$nu=$_POST['user'];
$pu= $_POST['pass'];

$getuser=mysqli_query($cdb,"SELECT * FROM user WHERE u_username='".$nu."' AND u_password='".$pu."'");

$rrow=mysqli_fetch_array($getuser);

if($rrow['u_access_type']=='admin'){

if(mysqli_num_rows($getuser) > 0){
	$_SESSION['isvalid']=true;
	$_SESSION['nmu']=$rrow['u_username'];
	$_SESSION['passu']=$rrow['u_password'];
	$_SESSION['uat']=$rrow['u_access_type'];


	$addlog=$cdb->prepare("UPDATE user SET u_last_visited_date = NOW() WHERE u_username='$nu' AND u_username='$pu'");
	     $addlog->execute();
	     if ($addlog === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
       	$rees=$addlog->get_result();
       	 $addconlog=$cdb->prepare("INSERT INTO connect_log VALUES ('','$nu', NOW(), '')"); 
       	 $addconlog->execute();
       if ($addconlog === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
       	$rees=$addconlog->get_result();
       }


       }
	
	 header("location:../dashboard.php");


	}else{
		header("location:../login.php");
		echo $error;
		}
}



if($rrow['u_access_type']=='user'){

if(mysqli_num_rows($getuser) > 0){
	$_SESSION['isvalid']=true;
	$_SESSION['nmu']=$rrow['u_username'];
	$_SESSION['passu']=$rrow['u_password'];
	$_SESSION['uat']=$rrow['u_access_type'];

	$addlog=$cdb->prepare("UPDATE user SET u_last_visited_date = NOW() WHERE u_username='$nu' AND u_username='$pu'");
	     $addlog->execute();
	     if ($addlog === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
       	$rees=$addlog->get_result();
       	 $addconlog=$cdb->prepare("INSERT INTO connect_log VALUES ('','$nu', NOW(), '')"); 
       	 $addconlog->execute();
       if ($addconlog === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
       	$rees=$addconlog->get_result();
       }


       }
	
	 header("location:../dashboard.php");
	
	}else{
		header("location:../login.php");
		
		}
}


if($rrow['u_access_type']=='owner'){

if(mysqli_num_rows($getuser) > 0){
	$_SESSION['isvalid']=true;
	$_SESSION['nmu']=$rrow['u_username'];
	$_SESSION['passu']=$rrow['u_password'];
	$_SESSION['uat']=$rrow['u_access_type'];


	$addlog=$cdb->prepare("UPDATE user SET u_last_visited_date = NOW() WHERE u_username='$nu' AND u_username='$pu'");
	     $addlog->execute();
	     if ($addlog === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
       	$rees=$addlog->get_result();
       	 $addconlog=$cdb->prepare("INSERT INTO connect_log VALUES ('','$nu', NOW(), '')"); 
       	 $addconlog->execute();
       if ($addconlog === false) {
          echo "display error".mysqli_error($cdb);
       }
       else{
       	$rees=$addconlog->get_result();
       }


       }
	if($rrow['u_site_id']=='11'){
	 header("location:../AIR/APM/report/QC/");
	}
	elseif($rrow['u_site_id']=='32'){
		header("location:../AIR/TC3/");
	}
	elseif($rrow['u_site_id']=='31'){
		header("location:../AIR/DE/");
	}
	
	}else{
		header("location:../login.php");
		
		}
}

}

else{
	header("location:../login.php");
}

}
?>


