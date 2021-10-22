<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

<?php

require('zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_chemicals_de WHERE wch_owner='31'");
$showr2->execute();
if ($showr2===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res2=$showr2->get_result();
?>
 <div id="de">


<div class="alert alert-secondary fade show" role="alert">
                            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                            <div class="alert-text">Update the Actual And Press <button type="submit"  style="background-color: #00A1DB; border: #00A1DB;" name="savegup1" class="btn btn-success btn-sm btn-bold btn-upper pulse-button">Save</button> Button To Save Changes.</div>
                            <div class="alert-close">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="la la-close"></i></span>
                              </button>
                            </div>
                          </div>


                  <div class="kt-portlet kt-portlet kt-widget-14">

                    


                   
<div class="kt-portlet__body">
  
         
                                          <?php
                                          while ($showrow2=$res2->fetch_row()) {

                                            if (($showrow2[7]-$showrow2[6])>=3) {
                                          ?>
                     

                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                       
                        <div class="kt-widget-14__foot" style="float: right">
                              
                            </div>
                        <div class="carousel-inner"> 


                          <form class="chemformau11<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="col-md-8">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../../../controls/imgs/chems/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-14__content">
                                  <a href="#">
                                    <h3 class="kt-widget-14__title" style=" padding: 0px"><?php echo  "$showrow2[2] ";?>  </h3>
                                  </a> <span style="padding: 0px font-size: 12px; color: #a1a8c3;"><?php echo  "$showrow2[1]";?></span>
                                  
                                    
                                  
                                  <span style=" padding: 0px"><?php echo  "$showrow2[4]";?></span>
                                  <div class="kt-widget-14__foot-info">
                                <div style="font-size: 12px; color: #a1a8c3;">
                                  <span><?php echo  "$showrow2[11]";?></span>
                                </div>
                              </div>
                                </div>
                              </div>
                            </div>
                              <div class="custom-quantityuc-input">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                  


                                </div>

                               
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                      <div class="kt-widget-14__desc">
                                        <a class="quantity-btn quantityu-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualapm1"  readonly="readonly" value="<?php echo  "$showrow2[6]";?>" style=" color: #fd397a; " name="quantityu9" type="number">

                                          
                                          <a class="quantity-btn quantityu-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a><br><center>actual</center>
                                          </div>
                                            
                                      </div>
                                    </div>
                                    
                                
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gapu9">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                              </div>
                              </div>
                            </div>
                                <div class="">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="residu9">
                                  <button class="buttonu6<?php echo  "$showrow2[1]";?> pulse-button">
                                    <span style="font-weight: 900;" class="submitu6<?php echo  "$showrow2[1]";?>">Save</span>
                                    <span class="loading6<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                    <span class="check6<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                  </button>
                                </div>
                              </div>

                          

                            </div>
                            <hr>
                          </div>
                        </form>


<script>
   (function() {
const button = document.querySelector('.buttonu6<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submitu6<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activeu6<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedu6<?php echo  "$showrow2[1]";?>');
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

.buttonu6<?php echo  "$showrow2[1]";?> {
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
.buttonu6<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttonu6<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttonu6<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttonu6<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttonu6<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttonu6<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activeu6<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activeu6<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activeu6<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activeu6<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activeu6<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedu6<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedu6<?php echo  "$showrow2[1]";?> .submitu6<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedu6<?php echo  "$showrow2[1]";?> .loading6<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedu6<?php echo  "$showrow2[1]";?> .check6<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedu6<?php echo  "$showrow2[1]";?> .check6<?php echo  "$showrow2[1]";?> i {
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

        $('.chemformau11<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/de/chems/updategaps9.php',
            data: $('.chemformau11<?php echo  "$showrow2[1]";?>').serialize(),
            success: function () {
              
            }
          });

        });

      });
    </script> 
                
                               
                                    
       </div>
    </div>

                                           
                                            <?php  }  
                                            if (($showrow2[7]-$showrow2[6])>=1 && ($showrow2[7]-$showrow2[6])<=2) {
                                          ?>
                                         
          
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                       
                        <div class="kt-widget-14__foot" style="float: right">
                              
                            </div>
                        <div class="carousel-inner"> 


                          <form class="chemformau12<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="col-md-8">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../../../controls/imgs/chems/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-14__content">
                                  <a href="#">
                                    <h3 class="kt-widget-14__title" style=" padding: 0px"><?php echo  "$showrow2[2] ";?>  </h3>
                                  </a> <span style="padding: 0px font-size: 12px; color: #a1a8c3;"><?php echo  "$showrow2[1]";?></span>
                                  
                                    
                                  
                                  <span style=" padding: 0px"><?php echo  "$showrow2[4]";?></span>
                                  <div class="kt-widget-14__foot-info">
                                <div style="font-size: 12px; color: #a1a8c3;">
                                  <span><?php echo  "$showrow2[11]";?></span>
                                </div>
                              </div>
                                </div>
                              </div>
                            </div>
                              <div class="custom-quantityuc-input">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                  


                                </div>

                               
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                      <div class="kt-widget-14__desc">
                                        <a class="quantity-btn quantityu-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualapm1"  readonly="readonly" value="<?php echo  "$showrow2[6]";?>" style=" color: #ffb822; " name="quantityu8" type="number">

                                          
                                          <a class="quantity-btn quantityu-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a><br><center>actual</center>
                                          </div>
                                            
                                      </div>
                                    </div>
                                    
                                
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gapu8">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                              </div>
                              </div>
                            </div>
                            <div class="">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="residu8">
                                   <button class="buttonu7<?php echo  "$showrow2[1]";?> pulse-button">
                                    <span style="font-weight: 900;" class="submitu7<?php echo  "$showrow2[1]";?>">Save</span>
                                    <span class="loadingu7<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                    <span class="checku7<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                  </button>
                                </div>
                                </div>

<script>
   (function() {
const button = document.querySelector('.buttonu7<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submitu7<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activeu7<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedu7<?php echo  "$showrow2[1]";?>');
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

.buttonu7<?php echo  "$showrow2[1]";?> {
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
.buttonu7<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttonu7<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttonu7<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttonu7<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttonu7<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttonu7<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activeu7<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activeu7<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activeu7<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activeu7<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activeu7<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedu7<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedu7<?php echo  "$showrow2[1]";?> .submitu7<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedu7<?php echo  "$showrow2[1]";?> .loadingu7<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedu7<?php echo  "$showrow2[1]";?> .checku7<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedu7<?php echo  "$showrow2[1]";?> .checku7<?php echo  "$showrow2[1]";?> i {
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
                                  
                              

                            </div>
                            <hr>
                          </div>
                        </form>
<script>
      $(function () {

        $('.chemformau12<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/de/chems/updategaps8.php',
            data: $('.chemformau12<?php echo  "$showrow2[1]";?>').serialize(),
            success: function () {
             
            }
          });

        });

      });
    </script> 
    
        
                               
                                    
       </div>
    </div>
  

                                           
                                            <?php  }
                                              
                                              if (($showrow2[7]-$showrow2[6])==0) {
                                          ?>
        
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                       
                        <div class="kt-widget-14__foot" style="float: right">
                              
                            </div>
                        <div class="carousel-inner"> 


                          <form class="chemformau14<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="col-md-8">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../../../controls/imgs/chems/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-14__content">
                                  <a href="#">
                                    <h3 class="kt-widget-14__title" style=" padding: 0px"><?php echo  "$showrow2[2] ";?>  </h3>
                                  </a> <span style="padding: 0px font-size: 12px; color: #a1a8c3;"><?php echo  "$showrow2[1]";?></span>
                                  
                                    
                                  
                                  <span style=" padding: 0px"><?php echo  "$showrow2[4]";?></span>
                                  <div class="kt-widget-14__foot-info">
                                <div style="font-size: 12px; color: #a1a8c3;">
                                  <span><?php echo  "$showrow2[11]";?></span>
                                </div>
                              </div>
                                </div>
                              </div>
                            </div>
                              <div class="custom-quantityuc-input">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                  


                                </div>

                               
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                      <div class="kt-widget-14__desc">
                                        <a class="quantity-btn quantityu-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualapm1" readonly="readonly" value="<?php echo  "$showrow2[6]";?>" style=" color: #1dc9b7; " name="quantityu11" type="number">

                                          
                                          <a class="quantity-btn quantityu-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a><br><center>actual</center>
                                          </div>
                                            
                                      </div>
                                    </div>
                                    
                                
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gapu11">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                              </div>
                              </div>
                            </div>
                            <div class="">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="residu11">
                                    <button class="buttonu8<?php echo  "$showrow2[1]";?> pulse-button">
                                      <span style="font-weight: 900;" class="submitu8<?php echo  "$showrow2[1]";?>">Save</span>
                                      <span class="loadingu8<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                      <span class="checku8<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                    </button>
                                  </div>
                                </div>

<script>
   (function() {
const button = document.querySelector('.buttonu8<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submitu8<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activeu8<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedu8<?php echo  "$showrow2[1]";?>');
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

.buttonu8<?php echo  "$showrow2[1]";?> {
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
.buttonu8<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttonu8<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttonu8<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttonu8<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttonu8<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttonu8<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activeu8<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activeu8<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activeu8<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activeu8<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activeu8<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedu8<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedu8<?php echo  "$showrow2[1]";?> .submitu8<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedu8<?php echo  "$showrow2[1]";?> .loadingu8<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedu8<?php echo  "$showrow2[1]";?> .checku8<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedu8<?php echo  "$showrow2[1]";?> .checku8<?php echo  "$showrow2[1]";?> i {
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
                                  
                               

                            </div>
                            <hr>
                          </div>
                        </form>
<script>
      $(function () {

        $('.chemformau14<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/de/chems/updategaps11.php',
            data: $('.chemformau14<?php echo  "$showrow2[1]";?>').serialize(),
            success: function () {
             
            }
          });

        });

      });
    </script>
    
                
                               
                                    
       </div>
    </div>


                                            <?php } ?>
                                          <?php } ?>

               </div>                 

 </div>

<?php
}

?>
<script>
$(document).ready(function(){
  $(".quantityu-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantityuc-input").find("[name=quantityu9]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantityu-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantityuc-input").find("[name=gapu9]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantityu-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantityuc-input").find("[name=quantityu9]");
    var val = parseInt(inpt.val());
   inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantityu-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantityuc-input").find("[name=gapu9]");
    var vall = parseInt(inptt.val());
        inptt.val(vall+1);
    
  });
});

  </script>  
              
<script>
$(document).ready(function(){
  $(".quantityu-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantityuc-input").find("[name=quantityu10]");
    var val = parseInt(inpt.val());
   if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantityu-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantityuc-input").find("[name=gapu10]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantityu-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantityuc-input").find("[name=quantityu10]");
    var val = parseInt(inpt.val());
   inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantityu-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantityuc-input").find("[name=gapu10]");
    var vall = parseInt(inptt.val());
        inptt.val(vall+1);
    
  });
});

  </script>  
                

<script>
$(document).ready(function(){
  $(".quantityu-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantityuc-input").find("[name=quantityu11]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantityu-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantityuc-input").find("[name=gapu11]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantityu-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantityuc-input").find("[name=quantityu11]");
    var val = parseInt(inpt.val());
    inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantityu-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantityuc-input").find("[name=gapu11]");
    var vall = parseInt(inptt.val());
      inptt.val(vall+1);
    
  });
});

  </script>  
               

<script>
    $('#the_total').ready(function () {
    var the_total = $("#the_total").val();
    var total = <?php echo ($showrow2[7]-$showrow2[6]);?>-the_total;
    
    $("#totalt").val(total);
});

   
  </script>


<script>
$(document).ready(function(){
  $(".quantityu-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantityuc-input").find("[name=quantityu8]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantityu-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantityuc-input").find("[name=gapu8]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantityu-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantityuc-input").find("[name=quantityu8]");
    var val = parseInt(inpt.val());
    inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantityu-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantityuc-input").find("[name=gapu8]");
    var vall = parseInt(inptt.val());
        inptt.val(vall+1);
    
  });
});

  </script>  
                      
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












.pulse-button {


  background-size:cover;
  background-repeat: no-repeat;
  cursor: pointer;
  -webkit-animation: pulse 1.40s infinite cubic-bezier(0.80, 0, 0, 1);
  -moz-animation: pulse 1.40s infinite cubic-bezier(0.80, 0, 0, 1);
  -ms-animation: pulse 1.40s infinite cubic-bezier(0.80, 0, 0, 1);
  animation: pulse 1.40s infinite cubic-bezier(0.80, 0, 0, 1);
}
.pulse-button:hover 
{
  -webkit-animation: none;-moz-animation: none;-ms-animation: none;animation: none;
}

@-webkit-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
@-moz-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
@-ms-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
@keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
</style>


<style type="text/css">


.cnt2 a{
text-decoration: none;
}

.cnt2{
min-width: 400px;
width: 400px;
min-height: 120px;
margin: 100px auto;
background: #fff;
position: fixed;
z-index: 99999;
padding: 15px 35px;
border-radius: 5px;

}
.cnt2 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    
    font-family: sans-serif;
}
.cnt2 p a{
color: #d91900;
font-weight: bold;
}
.cnt2 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt2 .x:hover{
cursor: pointer;
}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.closes').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>

</body>
</html>