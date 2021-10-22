<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& ($_SESSION['uat']=='admin')) 
{

header("Location: wof.php"); 

}
else {
    header("location:../login.php");
}

?>