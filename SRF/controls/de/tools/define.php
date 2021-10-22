<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

<?php

require('controls/zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_tools_de WHERE wtl_owner='31'");
$showr2->execute();
if ($showr2===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res2=$showr2->get_result();
?>
 <div id="">
                  <div class="kt-portlet kt-portlet kt-widget-14">
                                          <?php
                                          while ($showrow2=$res2->fetch_row()) {

                                          if ($showrow2[7]==0) {
                                            
                                          
                                          ?>
                     <div class="kt-portlet__body">
                            
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                       
                        
                        <div class="carousel-inner"> 


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
                                        
                                          <input min="0" readonly value="<?php echo ($showrow2[6]);?>" style=" color: #5578eb; " name="actualde31" type="number">

                                          
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

                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="standardde31">

                                    <a class="quantity-btn standard-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                        </div>
                                  </div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="tidde31">
                                   
                                   <button type="submit" name="savedef" class="btton-31<?php echo  "$showrow2[1]";?> pulse-button">
  <span style="font-weight: 900;" class="sbmit-31<?php echo  "$showrow2[1]";?>">Save</span>
  <span class="loadinng-31<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checkk-31<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
</button>


                                   
                                </div>
                              </div>

                            </div>

                            </div></form>
                          </div>
                        

                               
                                    
       </div>
    </div>
  




 <script>
      $(function () {

        $('.toolsdef11<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/de/tools/standards.php',
            data: $('.toolsdef11<?php echo  "$showrow2[1]";?>').serialize(),
            success: function () {
            alert('<?php echo ($showrow2[2]);?> Standard successfully Defined');
            }
          });

        });

      });
    </script>




    <script>
   (function() {
const button = document.querySelector('.btton-31<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.sbmit-31<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activee-31<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedd-31<?php echo  "$showrow2[1]";?>');
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

.btton-31<?php echo  "$showrow2[1]";?> {
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
.btton-31<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.btton-31<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.btton-31<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.btton-31<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.btton-31<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.btton-31<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activee-31<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 3s linear;
}
.activee-31<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activee-31<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activee-31<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activee-31<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedd-31<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedd-31<?php echo  "$showrow2[1]";?> .sbmit-31<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedd-31<?php echo  "$showrow2[1]";?> .loadinng-31<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedd-31<?php echo  "$showrow2[1]";?> .checkk-31<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedd-31<?php echo  "$showrow2[1]";?> .checkk-31<?php echo  "$showrow2[1]";?> i {
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
                                       
                                         
        

                                            
                                          <?php }












                                           if ($showrow2[7]!=0) {
                                            
                                          
                                          ?>
                     <div class="kt-portlet__body">
                            
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                       
                        
                        <div class="carousel-inner"> 


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
                                        
                                          <input min="0" readonly value="<?php echo ($showrow2[6]);?>" style=" color: #5578eb; " name="actualde31" type="number">

                                          
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

                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="standardde31">

                                    <a class="quantity-btn standard-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                        </div>
                                  </div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="tidde31">
                                   
                                   <button type="submit" name="savedef" class="btton-311<?php echo  "$showrow2[1]";?> pulse-button">
  <span style="font-weight: 900;" class="sbmit-311<?php echo  "$showrow2[1]";?>">Save</span>
  <span class="loadinng-311<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checkk-311<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
</button>


                                   
                                </div>
                              </div>

                            </div>

                            </div></form>
                          </div>
                        

                               
                                    
       </div>
    </div>
  




 <script>
      $(function () {

        $('.toolsdef11<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/de/tools/standards.php',
            data: $('.toolsdef11<?php echo  "$showrow2[1]";?>').serialize(),
            success: function () {
            alert('<?php echo ($showrow2[2]);?> Standard successfully Updated');
            }
          });

        });

      });
    </script>




    <script>
   (function() {
const button = document.querySelector('.btton-311<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.sbmit-311<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activee-311<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedd-311<?php echo  "$showrow2[1]";?>');
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

.btton-311<?php echo  "$showrow2[1]";?> {
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
.btton-311<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.btton-311<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.btton-311<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.btton-311<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.btton-311<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.btton-311<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activee-311<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 3s linear;
}
.activee-311<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activee-311<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activee-311<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activee-311<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedd-311<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedd-311<?php echo  "$showrow2[1]";?> .sbmit-311<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedd-311<?php echo  "$showrow2[1]";?> .loadinng-311<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedd-311<?php echo  "$showrow2[1]";?> .checkk-311<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedd-311<?php echo  "$showrow2[1]";?> .checkk-311<?php echo  "$showrow2[1]";?> i {
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
                                       
                                         
        

                                            
                                          <?php }




                                        } ?>

                                
</div>
 </div>



<?php
}

?>

<script>
$(document).ready(function(){
  $(".quantity-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=actualde31]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=actualde31]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

  $(".standard-input-up").click(function(){
    var inpt = $(this).parents(".custom-standard-input").find("[name=standardde31]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".standard-input-down").click(function(){
    var inpt = $(this).parents(".custom-standard-input").find("[name=standardde31]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

});

  </script>  
            
        




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