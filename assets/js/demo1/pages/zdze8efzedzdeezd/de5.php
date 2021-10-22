<?php

$cdb= new mysqli("localhost", "root", "", "dadjeapp");
if($cdb->connect_error) {
  exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
?>