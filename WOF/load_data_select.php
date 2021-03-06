<?php   
 //load_data_select.php  
require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');
 function fill_brand($cdb)  
 {  
      $output = '';  
      $sql = "SELECT * FROM sts_apm";  
      $result = mysqli_query($cdb, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["stsap_internal_id"].'">'.$row["stsap_name"].'</option>';  
      }  
      return $output;  
 }  
 function fill_product($cdb)  
 {  
      $output = '';  
      $sql = "SELECT * FROM wof_repository";  
      $result = mysqli_query($cdb, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3">';  
           $output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["wr_zone"].'';  
           $output .=     '</div>';  
           $output .=     '</div>';  
      }  
      return $output;  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Multiple Image Upload</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3>  
                     <select name="brand" id="brand">  
                          <option value="">Show All Product</option>  
                          <?php echo fill_brand($cdb); ?>  
                     </select>  
                     <br /><br />  
                     <div class="row" id="show_product">  
                          <?php echo fill_product($cdb);?>  
                     </div>  
                </h3>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#brand').change(function(){  
           var brand_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{brand_id:brand_id},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 });  
 </script>  