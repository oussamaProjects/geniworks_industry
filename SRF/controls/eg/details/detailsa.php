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
$rowsup=$cdb->prepare("SELECT * FROM work_ape_eg WHERE wape_owner='21'");
$rowsup->execute();
if ($rowsup===false) {
  echo "We Have Problem In APE Data Export Issue!";
}
else{
  $ressup=$rowsup->get_result();
?>
                      
                        
                          <?php
                                          while ($rowsup=$ressup->fetch_row()) {

                                            if (($rowsup[7]-$rowsup[6])>=1) {
                                          ?>
                      <div id="kt-widget-slider-14-2" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                          
                        </div>
                          <div class="carousel-inner">
                            <form class="apesupeg11<?php echo "$rowsup[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-15__body">
                              <div class="kt-widget-15__author">
                                <div class="kt-widget-15__photo">
                                  <a href="#"><img src="../controls/imgs/ape/<?php echo  "$rowsup[3]";?>" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-15__detail">
                                  <a href="#" class="kt-widget-15__name"><?php echo $rowsup[2];?></a>
                                  <div class="kt-widget-15__desc">
                                    <?php echo $rowsup[1];?>
                                  </div>

                                  <span>Gap <?php echo $rowsup[7]-$rowsup[6];?></span>

                                </div>
                              </div>
                              <div class="kt-widget-15__wrapper">
                                <div class="kt-widget-15__info">
                                  
                      <div class="kt-widget-15__desc">
                                    Supplier 
                                  </div>
                      <div class="col-lg-9 col-md-9 col-sm-9">
                        <select required="required" class="form-control" name="suppideg1a">
                          <option value="3SM">3SM</option>
                          <option value="Prodim">Prodim</option>
                          <option value="Funcom">Funcom</option>
                          <option value="Bricolage">Bricolage</option>
                          <option value="Other">Other</option>
                        </select>
                        
                      </div>
                    </div>
                    </div>
                    <div class="kt-widget-15__wrapper">
                      <div class="kt-widget-15__info">
                                  
                      <div class="kt-widget-15__desc">
                                    Mode 
                                  </div>
                      <div class="col-lg-9 col-md-9 col-sm-9">
                        <select required="required" class="form-control" name="paymmaeg">
                          <option value="Cash">Cash</option>
                          <option value="Deadline">Deadline</option>
                        </select>
                        
                      </div>
                    </div>
                                <div class="kt-widget-15__info">
                                  <div class="kt-widget-15__desc">
                                    Quantity
                                  </div>
                      
                      <div class="col-lg-9 col-md-9 col-sm-9">
                      <div class="custom-suppa-input">
                       <a class="supp-btn suppa-input-up btn btn-outline-hover-success btn-sm btn-icon"><i class="fa fa-plus"></i></a>

                       <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo $rowsup[7]-$rowsup[6];?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="suppeg1a">

                       <a class="supp-btn suppa-input-down btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-minus"></i></a>
                        </div>
                      </div> 
                     
                    
                                </div><br>
                                <div class="kt-widget-15__info">
                                 
                              <div class="kt-widget-15__foot-toolbar">
                                <input type="hidden" value="<?php echo $rowsup[1];?>" name="toolideg1a">
                                <input type="hidden" value="<?php echo $rowsup[5];?>" >
                                <div class="kt-widget-15__desc">
                                    Additional Informations
                                  </div>
                                <textarea name="addcommentaeg"></textarea>
                                <button class="button-eg2a<?php echo "$rowsup[1]";?> pulse-button">
  <span style="font-weight: 900;" class="submit-eg2a<?php echo "$rowsup[1]";?>">Save</span>
  <span class="loading-eg2a<?php echo "$rowsup[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="check-eg2a<?php echo "$rowsup[1]";?>"><i class="fa fa-check"></i></span>
</button>


                                
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
   (function() {
const button = document.querySelector('.button-eg2a<?php echo "$rowsup[1]";?>');
const submit = document.querySelector('.submit-eg2a<?php echo "$rowsup[1]";?>');

function toggleClass() {
  this.classList.toggle('active-eg2a<?php echo "$rowsup[1]";?>');
}

function addClass() {
  this.classList.add('finished-eg2a<?php echo "$rowsup[1]";?>');
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

.button-eg2a<?php echo "$rowsup[1]";?> {
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
.button-eg2a<?php echo "$rowsup[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.button-eg2a<?php echo "$rowsup[1]";?> span {
  position: absolute;
  line-height: 0;
}
.button-eg2a<?php echo "$rowsup[1]";?> span i {
  transform-origin: center center;
}
.button-eg2a<?php echo "$rowsup[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.button-eg2a<?php echo "$rowsup[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.button-eg2a<?php echo "$rowsup[1]";?> span:nth-of-type(3) {
  display: none;
}


.active-eg2a<?php echo "$rowsup[1]";?>:before {
  width: 100%;
  transition: width 3s linear;
}
.active-eg2a<?php echo "$rowsup[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.active-eg2a<?php echo "$rowsup[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.active-eg2a<?php echo "$rowsup[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.active-eg2a<?php echo "$rowsup[1]";?> span:nth-of-type(3) {
  display: none;
}

.finished-eg2a<?php echo "$rowsup[1]";?>{
  background-color: #54d98c;
}
.finished-eg2a<?php echo "$rowsup[1]";?> .submit-eg2a<?php echo "$rowsup[1]";?> {
  display: none;
}
.finished-eg2a<?php echo "$rowsup[1]";?> .loading-eg2a<?php echo "$rowsup[1]";?> {
  display: none;
}
.finished-eg2a<?php echo "$rowsup[1]";?> .check-eg2a<?php echo "$rowsup[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finished-eg2a<?php echo "$rowsup[1]";?> .check-eg2a<?php echo "$rowsup[1]";?> i {
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
     <script>
      $(function () {

        $('.apesupeg11<?php echo  "$rowsup[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/ape/suppreq5.php',
            data: $('.apesupeg11<?php echo  "$rowsup[1]";?>').serialize(),
            success: function () {
              alert('<?php echo  "$rowsup[2] ";?> . Your Order Will Processed In Few Hours');
            }
          });

        });

      });
    </script>
    <?php
                         }} ?>
                      
                     

<?php
}
?>

  <script>
$(document).ready(function(){
  $(".suppa-input-up").click(function(){
    var inpt = $(this).parents(".custom-suppa-input").find("[name=suppeg1a]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".suppa-input-down").click(function(){
    var inpt = $(this).parents(".custom-suppa-input").find("[name=suppeg1a]");
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