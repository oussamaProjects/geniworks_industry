<?php 
  



$file = "controls/".$showcab[2];
$type = 'image/jpeg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
readfile($file);



exit;?>