<?php

require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');
 $output = '';
 if(isset($_POST["stsap_internal_id"]))
 {
      if($_POST["stsap_internal_id"] != '')
      {
           $sql = "SELECT * FROM wof_repository WHERE zone_id = '".$_POST["stsap_internal_id"]."'";  
      }
      else
      {
           $sql = "SELECT * FROM wof_repository";
      }  
      $result = mysqli_query($cdb, $sql);  
      while($row = mysqli_fetch_array($result))  
      {
           $output .= '<div class="col-md-3"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["wr_tools"].'</div></div>';  
      }
      echo $output;  
 }
 ?>