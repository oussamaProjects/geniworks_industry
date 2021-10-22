<?php

$cdb= new mysqli("db5000057014.hosting-data.io", "dbu157898", "PJNQKt6Zt3+", "dbs51829");
if($cdb->connect_error) {
  exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
?>