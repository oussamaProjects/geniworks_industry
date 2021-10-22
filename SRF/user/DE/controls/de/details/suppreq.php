
<?php
require('controls/zdfzfzef/de5.php');


	




  $addreq = "INSERT INTO srf_tools_request VALUES ('', '', '', '', '', '', '')";
 
$resordr = mysqli_query($cdb,$addreq) ;
$checkr = mysqli_fetch_array($resordr);
if(isset($checkr))
{
    echo "Working";

  } else {
  	?>
<script>alert("horror");</script>
  	<?php  
  }


?>