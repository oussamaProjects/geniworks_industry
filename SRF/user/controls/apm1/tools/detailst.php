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
$rowsupu=$cdb->prepare("SELECT * FROM work_tools_apm1 WHERE wtl_owner='11'");
$rowsupu->execute();
if ($rowsupu===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $ressupu=$rowsupu->get_result();
?>
                      
                        
                          <?php
                                          while ($rowsupu=$ressupu->fetch_row()) {

                                            if ($rowsupu[6]<=1) {
                                          ?>
                      <div id="kt-widget-slider-14-2" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                          
                        </div>
                          <div class="carousel-inner">
                            <form class="toolssupu11<?php echo "$rowsupu[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-15__body">
                              <div class="kt-widget-15__author">
                                <div class="kt-widget-15__photo">
                                  <a href="#"><img src="../../controls/imgs/tools/<?php echo  "$rowsupu[3]";?>" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-15__detail">
                                  <a href="#" class="kt-widget-15__name"><?php echo $rowsupu[2];?></a>
                                  <div class="kt-widget-15__desc">
                                    <?php echo $rowsupu[1];?>
                                  </div>

                                  <span>Gap <?php echo $rowsupu[7]-$rowsupu[6];?></span>

                                </div>
                              </div>
                              <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  
                      <div class="kt-widget-15__desc">
                                    Supplier 
                                  </div>
                      <div class="col-lg-9 col-md-9 col-sm-9">
                        <select class="form-control" name="suppidu11">
                          <option value="Prodim">Prodim</option>
                          <option value="Funcom">Funcom</option>
                          <option value="Bricolage">Bricolage</option>
                          <option value="Other">Other</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="kt-widget-15__info">
                                  
                      <div class="kt-widget-15__desc">
                                    Mode 
                                  </div>
                      <div class="col-lg-9 col-md-9 col-sm-9">
                        <select class="form-control" name="paymmtu">
                          <option value="Prodim">Cash</option>
                          <option value="Funcom">Deadline</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <div class="kt-widget-15__desc">
                                    Quantity
                                  </div>
                      
                      <div class="col-lg-9 col-md-9 col-sm-9">
                      <div class="custom-suppu-input">
                       <a class="supp-btn supp-inputu-up btn btn-outline-hover-success btn-sm btn-icon"><i class="fa fa-plus"></i></a>

                       <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo $rowsupu[7]-$rowsupu[6];?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="suppu1t">

                       <a class="supp-btn supp-inputu-down btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-minus"></i></a>
                        </div>
                      </div> 
                     
                    
                                </div><br>
                                <div class="kt-widget-15__info">
                                 
                              <div class="kt-widget-15__foot-toolbar">
                                <input type="hidden" value="<?php echo $rowsupu[1];?>" name="toolidu11">
                                <input type="hidden" value="<?php echo $rowsupu[5];?>" >
                                
                                <button class="buttonu-1<?php echo "$rowsupu[1]";?> pulse-button">
  <span style="font-weight: 900;" class="submitu-1<?php echo "$rowsupu[1]";?>">Save</span>
  <span class="loadingu-1<?php echo "$rowsupu[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checku-1<?php echo "$rowsupu[1]";?>"><i class="fa fa-check"></i></span>
</button>

<script>
   (function() {
const button = document.querySelector('.buttonu-1<?php echo "$rowsupu[1]";?>');
const submit = document.querySelector('.submitu-1<?php echo "$rowsupu[1]";?>');

function toggleClass() {
  this.classList.toggle('activeu-1<?php echo "$rowsupu[1]";?>');
}

function addClass() {
  this.classList.add('finishedu-1<?php echo "$rowsupu[1]";?>');
}

button.addEventListener('click', toggleClass);
button.addEventListener('transitionend', toggleClass);
button.addEventListener('transitionend', addClass);
  
  })()


</script>
<style>


.hide {
  display: none;
}

.buttonu-1<?php echo "$rowsupu[1]";?> {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 70px;
  margin: 0;
  padding: 1rem 1rem;
  background-color: #00A1DB;
  border: none;
  border-radius: 0.2rem;
  box-shadow: 0 12px 24px 0 rgba(0, 0, 0, 0.11);
  color: white;
  text-transform: uppercase;
  overflow: hidden;
}
.buttonu-1<?php echo "$rowsupu[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttonu-1<?php echo "$rowsupu[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttonu-1<?php echo "$rowsupu[1]";?> span i {
  transform-origin: center center;
}
.buttonu-1<?php echo "$rowsupu[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttonu-1<?php echo "$rowsupu[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttonu-1<?php echo "$rowsupu[1]";?> span:nth-of-type(3) {
  display: none;
}


.activeu-1<?php echo "$rowsupu[1]";?>:before {
  width: 100%;
  transition: width 3s linear;
}
.activeu-1<?php echo "$rowsupu[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activeu-1<?php echo "$rowsupu[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activeu-1<?php echo "$rowsupu[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activeu-1<?php echo "$rowsupu[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedu-1<?php echo "$rowsupu[1]";?>{
  background-color: #54d98c;
}
.finishedu-1<?php echo "$rowsupu[1]";?> .submitu-1<?php echo "$rowsupu[1]";?> {
  display: none;
}
.finishedu-1<?php echo "$rowsupu[1]";?> .loadingu-1<?php echo "$rowsupu[1]";?> {
  display: none;
}
.finishedu-1<?php echo "$rowsupu[1]";?> .checku-1<?php echo "$rowsupu[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedu-1<?php echo "$rowsupu[1]";?> .checku-1<?php echo "$rowsupu[1]";?> i {
  transform-origin: center center;
}


@keyframes loading {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes scale {
  0% {
    transform: scale(10);
  }
  50% {
    transform: scale(0.2);
  }
  70% {
    transform: scale(1.2);
  }
  90% {
    transform: scale(0.7);
  }
  100% {
    transform: scale(1);
  }
}

</style>
                                <button type="reset" class="btn btn-default btn-sm btn-bold btn-upper" style="width: 80px;">Cancel</button>
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
     <script>
      $(function () {

        $('.toolssupu11<?php echo  "$rowsupu[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm1/tools/suppreq1.php',
            data: $('.toolssupu11<?php echo  "$rowsupu[1]";?>').serialize(),
            success: function () {
              alert('<?php echo  "$rowsupu[2] ";?> Actual quantity successfully Updated');
            }
          });

        });

      });
    </script>
                          <?php }

                          if ($rowsupu[6]<=5 && $rowsupu[6]>=2) {
                                          ?>
                    <div id="kt-widget-slider-14-2" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                          
                        </div>
                          <div class="carousel-inner">
                            <form class="toolssupu12<?php echo "$rowsupu[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-15__body">
                              <div class="kt-widget-15__author">
                                <div class="kt-widget-15__photo">
                                  <a href="#"><img src="../../controls/imgs/tools/<?php echo  "$rowsupu[3]";?>" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-15__detail">
                                  <a href="#" class="kt-widget-15__name"><?php echo $rowsupu[2];?></a>
                                  <div class="kt-widget-15__desc">
                                    <?php echo $rowsupu[1];?>
                                  </div>

                                  <span>Gap <?php echo $rowsupu[7]-$rowsupu[6];?></span>

                                </div>
                              </div>
                              <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <div class="kt-widget-15__desc">
                                    Supplier 
                                  </div>
                      
                      <div class="col-lg-9 col-md-9 col-sm-9">
                        <select class="form-control" name="suppidu12">
                          <option value="Prodim">Prodim</option>
                          <option value="Funcom">Funcom</option>
                          <option value="Bricolage">Bricolage</option>
                          <option value="Other">Other</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="kt-widget-15__info">
                                  
                      <div class="kt-widget-15__desc">
                                    Mode 
                                  </div>
                      <div class="col-lg-9 col-md-9 col-sm-9">
                        <select class="form-control" name="paymmtu">
                          <option value="Prodim">Cash</option>
                          <option value="Funcom">Deadline</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <div class="kt-widget-15__desc">
                                    Quantity
                                  </div>
                      
                      <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="custom-suppu2-input">
                       <a class="supp-btn suppu2-inputu-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>

                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo $rowsupu[7]-$rowsupu[6];?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="suppu2">

                                    <a class="supp-btn suppu2-inputu-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                        </div>
                      </div> 
                     
                    
                                </div><br>
                                <div class="kt-widget-15__info">
                                  <input type="hidden" value="<?php echo $rowsupu[1];?>" name="toolidu12">
                                  <input type="hidden" value="<?php echo $rowsupu[5];?>" >
                              <div class="kt-widget-15__foot-toolbar">
                                <button type="submit" style="background-color: #00A1DB; border: #00A1DB;width: 80px;" class="btn btn-success btn-sm btn-bold btn-upper">Order</button>
                                <button type="reset" class="btn btn-default btn-sm btn-bold btn-upper" style="width: 80px;">Cancel</button>
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
  <script>
      $(function () {

        $('.toolssupu12<?php echo  "$rowsupu[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm1/tools/suppreq2.php',
            data: $('.toolssupu12<?php echo  "$rowsupu[1]";?>').serialize(),
            success: function () {
              alert('<?php echo  "$rowsupu[2] ";?> Actual quantity successfully Updated');
            }
          });

        });

      });
    </script>
                          <?php  }
                                              if ($rowsupu[6]>5 && $rowsupu[6]<10) {
                                          ?>
                      <div id="kt-widget-slider-14-2" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                          
                        </div>
                          <div class="carousel-inner">
                            <form class="toolssupu13<?php echo "$rowsupu[1]";?>">
                          <div class="carousel-item active">                
                            <div class="kt-widget-15__body">
                              <div class="kt-widget-15__author">
                                <div class="kt-widget-15__photo">
                                  <a href="#"><img src="../../controls/imgs/tools/<?php echo  "$rowsupu[3]";?>" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-15__detail">
                                  <a href="#" class="kt-widget-15__name"><?php echo $rowsupu[2];?></a>
                                  <div class="kt-widget-15__desc">
                                    <?php echo $rowsupu[1];?>
                                  </div>
                                  
                                  <span>Gap <?php echo $rowsupu[7]-$rowsupu[6];?></span>
                                

                                </div>
                              </div>
                              <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <div class="kt-widget-15__desc">
                                    Supplier 
                                  </div>
                      
                      <div class="col-lg-9 col-md-9 col-sm-9">
                        <select class="form-control" name="suppidu13">
                          <option value="Prodim">Prodim</option>
                          <option value="Funcom">Funcom</option>
                          <option value="Bricolage">Bricolage</option>
                          <option value="Other">Other</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="kt-widget-15__info">
                                  
                      <div class="kt-widget-15__desc">
                                    Mode 
                                  </div>
                      <div class="col-lg-9 col-md-9 col-sm-9">
                        <select class="form-control" name="paymmtu">
                          <option value="Prodim">Cash</option>
                          <option value="Funcom">Deadline</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  <div class="kt-widget-15__desc">
                                    Quantity
                                  </div>
                      
                      <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="custom-supp3-input">
                       <a class="supp-btn supp3-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>

                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo $rowsupu[7]-$rowsupu[6];?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="supp3">

                                    <a class="supp-btn supp3-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                        </div>
                      </div> 
                     
                    
                                </div>
                                <div class="kt-widget-15__info">
                                 <input type="hidden" value="<?php echo "$rowsupu[1]";?>" name="toolidu13">
                                 <input type="hidden" value="<?php echo "$rowsupu[5]";?>" >
                              <div class="kt-widget-15__foot-toolbar">
                                <button type="submit" style="background-color: #00A1DB; border: #00A1DB; width: 80px;"  class="btn btn-success btn-sm btn-bold btn-upper">Order</button>
                                <button type="reset" class="btn btn-default btn-sm btn-bold btn-upper" style="width: 80px;">Cancel</button>
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
<script>
      $(function () {

        $('.toolssupu13<?php echo  "$rowsupu[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm1/tools/suppreq3.php',
            data: $('.toolssupu13<?php echo  "$rowsupu[1]";?>').serialize(),
            success: function () {
              alert('<?php echo  "$rowsupu[2] ";?> Actual quantity successfully Updated');
            }
          });

        });

      });
    </script> 

                        <?php }} ?>
                      
                     

<?php
}
?>

  <script>
$(document).ready(function(){
  $(".supp-inputu-up").click(function(){
    var inpt = $(this).parents(".custom-suppu-input").find("[name=suppu1t]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".supp-inputu-down").click(function(){
    var inpt = $(this).parents(".custom-suppu-input").find("[name=suppu1t]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

});







$(document).ready(function(){
  $(".suppu2-inputu-up").click(function(){
    var inpt = $(this).parents(".custom-suppu2-input").find("[name=suppu2]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".suppu2-inputu-down").click(function(){
    var inpt = $(this).parents(".custom-suppu2-input").find("[name=suppu2]");
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