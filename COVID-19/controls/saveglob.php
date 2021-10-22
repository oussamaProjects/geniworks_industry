<?php



require('zdze8efzedzdeezd/de5.php');
$productsp=$_POST['productsp'];
$spendedp=$_POST['spendedp'];
$gwidcab=$_POST['useridf'];


$switchqry=$cdb->prepare("UPDATE consumptions SET consm_spended = '$spendedp', consm_last_update=NOW(), consm_updated_by='$gwidcab' WHERE consm_id = '$productsp'");

	     $switchqry->execute();
	     if ($switchqry === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
       	$rees=$switchqry->get_result();
        $addconlog=$cdb->prepare("INSERT INTO consumptions_history VALUES ('', '$productsp', '$spendedp', '', NOW(), '$gwidcab', '11')"); 
       	 $addconlog->execute();
       mysqli_close($cdb);

       
      
?>
<meta http-equiv="refresh" content="0">
<?php
       }







?>