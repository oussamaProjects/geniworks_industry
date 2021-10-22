
<?php
require('a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');

$site3=$_POST['site3'];

$odeal3=$_POST['odeal3'];
                                                                               
$orec3=$_POST['orec3'];
                                                                           
$esd3=$_POST['esd3'];
                                                                        
$sdt3=$_POST['sdt3'];
                                                                       
$techn3=$_POST['sect3'];
                                                                      
$zonee=$_POST['zonee'];
                                                                         
$rct3=$_POST['rct3'];
                                                                           
$ot3=$_POST['ot3'];
                                                                      
$sect3=$_POST['sect3'];

$selasset=$_POST['selas'];




$reqaddath = $cdb->prepare("INSERT INTO wof VALUES ('', '', '$site3', NOW(), '$odeal3', '$orec3', '$esd3', '$zonee', '$rct3', '$ot3', '$sect3', '$sdt3', '', 'requested', '','','','$selasset')");


                $reqaddath->execute();

                if($reqaddath === false) {
                echo "error while executing mysql: ".mysqli_error($cdb);
                } 
                else { 
                $resaddath=$reqaddath->get_result();

   
?>
<meta http-equiv='refresh' content='0;wof-requests.php?show'>
<?php
}
?>
