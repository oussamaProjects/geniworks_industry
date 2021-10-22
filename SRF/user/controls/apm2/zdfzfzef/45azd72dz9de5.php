<?php

$cdb= new mysqli("localhost", "root", "", "1115411geni5545work5sdb1115415");
if($cdb->connect_error) {
  exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
?>