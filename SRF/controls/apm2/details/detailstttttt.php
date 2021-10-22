<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

  <div class="kt-portlet kt-portlet--height-fluid-half kt-widget-15">
                    <div class="kt-portlet__body">

                      <?php

require('controls/zdfzfzef/de5.php');
$rowsup=$cdb->prepare("SELECT * FROM work_tools_apm2 WHERE wtl_owner='12'");
$rowsup->execute();
if ($rowsup===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $ressup=$rowsup->get_result();
?>
                      
                        
                          <?php
                                          while ($rowsup=$ressup->fetch_row()) {

                                            if ($rowsup[6]<=1) {
                                          ?>
                      <div id="kt-widget-slider-14-2" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                          
                        </div>
                          <div class="carousel-inner">
                            <form id="toolssup11">
                          <div class="carousel-item active">
                            <div class="kt-widget-15__body">
                              <div class="kt-widget-15__author">
                                <div class="kt-widget-15__photo">
                                  <a href="#"><img src="../controls/imgs/tools/<?php echo  "$rowsup[3]";?>" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-15__detail">
                                  <a href="#" class="kt-widget-15__name"><?php echo $rowsup[2];?></a>
                                  <div class="kt-widget-15__desc">
                                    <?php echo $rowsup[1];?>
                                  </div>

                                  <span><?php echo $rowsup[10];?></span>

                                </div>
                              </div>
                              <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <label class="col-form-label col-lg-3 col-sm-12">Supplier</label>
                      
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <select class="form-control" name="suppid11">
                          <option value="Prodim">Prodim</option>
                          <option value="Funcom">Funcom</option>
                          <option value="Bricolage">Bricolage</option>
                          <option value="Other">Other</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <label class="col-form-label col-lg-3 col-sm-12">Quantity</label>
                      
                      <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="custom-supp-input">
                       <a class="supp-btn supp-input-up btn btn-outline-hover-success btn-sm btn-icon"><i class="fa fa-plus"></i></a>

                       <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="0" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="supp1">

                       <a class="supp-btn supp-input-down btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-minus"></i></a>
                        </div>
                      </div> 
                     
                    
                                </div><br>
                                <div class="kt-widget-15__info">
                                 
                              <div class="kt-widget-15__foot-toolbar">
                                <input type="hidden" value="<?php echo $rowsup[1];?>" name="toolid11">
                                <input type="hidden" value="<?php echo $rowsup[5];?>" >
                                
                                <button type="submit" name="ord1" class="btn btn-success btn-sm btn-bold btn-upper">Order</button>
                                <button type="reset" class="btn btn-default btn-sm btn-bold btn-upper">Cancel</button>
                              </div>
                                </div>
                              </div>
                              </div>
                            </div>
                            
                          </div>
                        </form>
                        </div>
                        <hr>
                      </div>
                          <?php }

                          if ($rowsup[6]<=5 && $rowsup[6]>=2) {
                                          ?>
                    <div id="kt-widget-slider-14-2" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                          
                        </div>
                          <div class="carousel-inner">
                            <form id="toolssup12">
                          <div class="carousel-item active">
                            <div class="kt-widget-15__body">
                              <div class="kt-widget-15__author">
                                <div class="kt-widget-15__photo">
                                  <a href="#"><img src="../controls/imgs/tools/<?php echo  "$rowsup[3]";?>" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-15__detail">
                                  <a href="#" class="kt-widget-15__name"><?php echo $rowsup[2];?></a>
                                  <div class="kt-widget-15__desc">
                                    <?php echo $rowsup[1];?>
                                  </div>

                                  <span><?php echo $rowsup[10];?></span>

                                </div>
                              </div>
                              <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <label class="col-form-label col-lg-3 col-sm-12">Supplier</label>
                      
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <select class="form-control" name="suppid12">
                          <option value="Prodim">Prodim</option>
                          <option value="Funcom">Funcom</option>
                          <option value="Bricolage">Bricolage</option>
                          <option value="Other">Other</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <label class="col-form-label col-lg-3 col-sm-12">Quantity</label>
                      
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="custom-supp2-input">
                       <a class="supp-btn supp2-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>

                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="0" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="supp2">

                                    <a class="supp-btn supp2-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                        </div>
                      </div> 
                     
                    
                                </div><br>
                                <div class="kt-widget-15__info">
                                  <input type="hidden" value="<?php echo $rowsup[1];?>" name="toolid12">
                                  <input type="hidden" value="<?php echo $rowsup[5];?>" >
                              <div class="kt-widget-15__foot-toolbar">
                                <button type="submit" name="ord2" class="btn btn-success btn-sm btn-bold btn-upper">Order</button>
                                <button type="reset" class="btn btn-default btn-sm btn-bold btn-upper">Cancel</button>
                              </div>
                                </div>
                              </div>
                              </div>
                            </div>
                           
                          </div>
                        </form>
                        </div>
                        <hr>
                      </div>
                          <?php  }
                                              if ($rowsup[6]>5 && $rowsup[6]<10) {
                                          ?>
                      <div id="kt-widget-slider-14-2" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                          
                        </div>
                          <div class="carousel-inner">
                            <form id="toolssup13">
                          <div class="carousel-item active">                
                            <div class="kt-widget-15__body">
                              <div class="kt-widget-15__author">
                                <div class="kt-widget-15__photo">
                                  <a href="#"><img src="../controls/imgs/tools/<?php echo  "$rowsup[3]";?>" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-15__detail">
                                  <a href="#" class="kt-widget-15__name"><?php echo $rowsup[2];?></a>
                                  <div class="kt-widget-15__desc">
                                    <?php echo $rowsup[1];?>
                                  </div>
                                  
                                  <span><?php echo $rowsup[10];?></span>
                                

                                </div>
                              </div>
                              <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <label class="col-form-label col-lg-3 col-sm-12">Supplier</label>
                      
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <select class="form-control" name="suppid13">
                          <option value="Prodim">Prodim</option>
                          <option value="Funcom">Funcom</option>
                          <option value="Bricolage">Bricolage</option>
                          <option value="Other">Other</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <label class="col-form-label col-lg-3 col-sm-12">Quantity</label>
                      
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="custom-supp3-input">
                       <a class="supp-btn supp3-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>

                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="0" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="supp3">

                                    <a class="supp-btn supp3-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                        </div>
                      </div> 
                     
                    
                                </div>
                                <div class="kt-widget-15__info">
                                 <input type="hidden" value="<?php echo $rowsup[1];?>" name="toolid13">
                                 <input type="hidden" value="<?php echo $rowsup[5];?>" >
                              <div class="kt-widget-15__foot-toolbar">
                                <button type="submit" name="ord3" class="btn btn-success btn-sm btn-bold btn-upper">Order</button>
                                <button type="reset" class="btn btn-default btn-sm btn-bold btn-upper">Cancel</button>
                              </div>
                                </div>
                              </div>
                              </div>
                            </div>
                            
                          </div>
                        </form>
                        </div>
                        <hr>
                      </div>
                        <?php }} ?>
                      
                     

<?php
}
?>

  <script>
$(document).ready(function(){
  $(".supp-input-up").click(function(){
    var inpt = $(this).parents(".custom-supp-input").find("[name=supp1]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".supp-input-down").click(function(){
    var inpt = $(this).parents(".custom-supp-input").find("[name=supp1]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

});







$(document).ready(function(){
  $(".supp2-input-up").click(function(){
    var inpt = $(this).parents(".custom-supp2-input").find("[name=supp2]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".supp2-input-down").click(function(){
    var inpt = $(this).parents(".custom-supp2-input").find("[name=supp2]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

});


$(document).ready(function(){
  $(".supp3-input-up").click(function(){
    var inpt = $(this).parents(".custom-supp3-input").find("[name=supp3]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".supp3-input-down").click(function(){
    var inpt = $(this).parents(".custom-supp3-input").find("[name=supp3]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

});

  </script> 


             <script>
      $(function () {

        $('#toolssup11').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm2/tools/standards.php',
            data: $('#toolssup11').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });


       $(function () {

        $('#toolssup12').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm2/tools/standards.php',
            data: $('#toolssup12').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });


       $(function () {

        $('#toolssup13').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm2/tools/standards.php',
            data: $('#toolssup13').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });
    </script>
  </div>
</div>



<style>
 input[type="number"] {
  -webkit-appearance: textfield;
  -moz-appearance: textfield;
  appearance: textfield;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
}

.number-input {
  
  display: inline-flex;
}

.number-input,
.number-input * {
  box-sizing: border-box;
}

.number-input button {
  outline:none;
  -webkit-appearance: none;
  background-color: transparent;
  border: none;
  align-items: center;
  justify-content: center;
  width: 2rem;
  height: 2rem;
  cursor: pointer;
  margin: 0;
  position: relative;
}

.number-input button.plus:after {
  transform: translate(-50%, -50%) rotate(90deg);
}

.number-input input[type=number] {
  font-family: sans-serif;
  max-width: 3rem;
  padding: .2rem;
  border:transparent 0px;
  background-color: transparent;

  font-size: 1.5rem;
  height: 3rem;
  font-weight: bold;
  text-align: center;
} 
</style>
</body>
</html>