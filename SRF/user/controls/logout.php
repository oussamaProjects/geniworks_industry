<?php
session_start(); 
if(session_destroy()) { 
require('zdfzfzef/de5.php');
$userpu=$_SESSION['nmu'];
$userpp=$_SESSION['passu'];
$userp=$_SESSION['uat'];
	$addlogout=$cdb->prepare("UPDATE connect_log SET cl_last_logout = NOW() WHERE cl_user_id='$userpu'");
	     $addlogout->execute();
	     if ($addlogout === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
       	
       	$rees=$addlogout->get_result();
       }

  header("Location: ../../../login.php"); 
}
?>