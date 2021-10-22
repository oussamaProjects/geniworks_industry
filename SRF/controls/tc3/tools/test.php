<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php

require('../../zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_tools_apm1 WHERE wtl_owner='11'");
$showr2->execute();
if ($showr2===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res2=$showr2->get_result();
?>


                    

                                        
                                          <?php
                                          while ($showrow2=$res2->fetch_row()) {

                                          if ($showrow2[7]==0) {
                                            
                                          
                                          ?>

          <form class="toolsdef11<?php echo  "$showrow2[1]";?>" method="post">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../controls/imgs/tools/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-14__content">
                                  <a href="#">
                                    <h3 class="kt-widget-14__title"><?php echo  "$showrow2[2]";?></h3>
                                  </a>
                                  <div class="kt-widget-14__desc">
                                    <?php echo  "$showrow2[1]";?>
                                  </div>
                                  
                                  <div class="kt-widget-14__foot-info">
                                <div style="font-size: 12px; color: #a1a8c3;">
                                  <span><?php echo  "$showrow2[11]";?></span>
                                </div>
                              </div>
                                  
                                </div>
                              </div>

                              

                              <div class="kt-widget-14__data">
                               
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                        <div class="custom-quantity-input">

                                         <a class="quantity-btn quantity-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                        
                                          <input min="0" readonly value="0" style=" color: #5578eb; " name="actual1" type="number">

                                          
                                          <a class="quantity-btn quantity-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="kt-widget-14__desc">actual</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title">
                                    <div class="custom-standard-input">
                                    <a class="quantity-btn standard-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>

                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="standard1">

                                    <a class="quantity-btn standard-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                        </div>
                                  </div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="text" value="<?php echo  "$showrow2[1]";?>" name="tid1">
                                   
                                   <button type="submit" name="savedef" class="btton<?php echo  "$showrow2[1]";?> pulse-button">
  <span style="font-weight: 900;" class="sbmit<?php echo  "$showrow2[1]";?>">Save</span>
  <span class="loadinng<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checkk<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
</button>


                                   
                                </div>
                              </div>

                            </div>

                            </div>
                          </form>
                          


<?php 
}}
if (isset($_POST["savedef"])) {
include('standards.php');
}
}
?>  
</body>
</html>