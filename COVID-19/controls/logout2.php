<?php 
session_start();



session_start();
if($_SESSION['userid']){
unset($_SESSION['userid']); // destroys the specified session.

}

header('Location:../apm2/'); //redirect to preferred page after unset the session


?>

	 
