<?php
if(isset($_POST['accesu'])){
session_start();

require('a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');


$nu=$_POST['user'];
$pu= $_POST['pass'];

$getuser=mysqli_query($cdb,"SELECT * FROM users WHERE u_username='".$nu."' AND u_password='".$pu."'");

$rrow=mysqli_fetch_array($getuser);

if($rrow['u_access_type']=='admin'){

if(mysqli_num_rows($getuser) > 0){
	$_SESSION['isvalid']=true;
	$_SESSION['nmu']=$rrow['u_username'];
	$_SESSION['passu']=$rrow['u_password'];
	$_SESSION['uat']=$rrow['u_access_type'];
	
	 header("location:../wof.php");
	
	}else{
		header("location:../login.php?msg=2");
		
		}
}
if($rrow['u_access_type']=='user'){

if(mysqli_num_rows($getuser) > 0){
	$_SESSION['isvalid']=true;
	$_SESSION['nmu']=$rrow['u_username'];
	$_SESSION['passu']=$rrow['u_password'];
	$_SESSION['uat']=$rrow['u_access_type'];
	
	 header("location:../user/wof.php");
	
	}else{
		header("location:login.php?msg=2");
		
		}
}

}else{
header("location:../login.php?msg=3");
}
?>


