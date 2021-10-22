<?php



require('zdze8efzedzdeezd/de5.php');



$switchqry=$cdb->prepare("UPDATE cabins_teams SET cabnt_shift = 'Afternoon', cabnt_shift = 'Afternoon' ");

	     $switchqry->execute();
	     if ($switchqry === false) {
          echo "display error".mysqli_error($cdb);
      }
      else{
       	$rees=$switchqry->get_result();
       
      
?>
<meta http-equiv="refresh" content="0">
<?php
       }







?>