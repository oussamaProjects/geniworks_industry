<?php



require('zdze8efzedzdeezd/de5.php');


$switchqry=$cdb->prepare("
	UPDATE `cabins_teams` SET `cabnt_shift` = CASE
    WHEN cabnt_shift = 'Afternoon' THEN 'Morning'
    WHEN cabnt_shift = 'Morning' THEN 'Afternoon'
    ELSE `cabnt_shift`
    END
WHERE cabnt_shift  in ('Afternoon','Morning') AND cabnt_active='11'");

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