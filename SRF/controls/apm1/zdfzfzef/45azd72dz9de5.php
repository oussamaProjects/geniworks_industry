<?php

$cdb= new mysqli("db775482692.hosting-data.io", "dbo775482692", "Jahid123+", "db775482692");
if($cdb->connect_error) {
  exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
?>