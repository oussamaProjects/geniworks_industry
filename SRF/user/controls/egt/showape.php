<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

<?php

require('zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_ape_eg WHERE wape_owner='21'");
$showr2->execute();
if ($showr2===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res2=$showr2->get_result();
?>
 <div id="eg">


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


                          <form class="apeforma211<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../controls/imgs/ape/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-14__content">
                                  <a href="#">
                                    <h3 class="kt-widget-14__title" style=" padding: 0px"><?php echo  "$showrow2[2] ";?>  </h3>
                                  </a> <span style="padding: 0px font-size: 12px; color: #a1a8c3;"><?php echo  "$showrow2[1]";?></span>
                                  
                                    <img src="" alt="" width="100">
                                  
                                  <span style=" padding: 0px"><?php echo  "$showrow2[4]";?></span>
                                  <div class="kt-widget-14__foot-info">
                                <div style="font-size: 12px; color: #a1a8c3;">
                                  <span><?php echo  "$showrow2[10]";?></span>
                                </div>
                              </div>
                                </div>
                              </div>
                              <div class="custom-quantity-inputa2">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                  


                                </div>

                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                                                            

                                        <a class="quantity-btn quantity-input-upa2 btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualeg" value="<?php echo  "$showrow2[6]";?>" style=" color: #fd397a; " name="quantitya217" type="number">

                                          
                                          <a class="quantity-btn quantity-input-downa2 btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>

                                            
                                      </div>
                                    </div>
                                    <div class="kt-widget-14__desc">actual</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gapa217">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="resida27">
                                   
                                   <!--<button style="background-color: #00A1DB; border: #00A1DB; width: 100px;" class="btnn btn btn-success btn-sm btn-bold btn-upper">Save</button> -->
                                  <button class="buttona29<?php echo  "$showrow2[1]";?> pulse-button">
  <span style="font-weight: 900;" class="submita29<?php echo  "$showrow2[1]";?>">Save</span>
  <span class="loadinga29<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checka29<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
</button>



                                </div>
                              </div>

                            </div>

                            </div>
                            <hr>
                          </div>
                        </form>


<script>
   (function() {
const button = document.querySelector('.buttona29<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submita29<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activea29<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finisheda29<?php echo  "$showrow2[1]";?>');
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

.buttona29<?php echo  "$showrow2[1]";?> {
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
.buttona29<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttona29<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttona29<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttona29<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttona29<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttona29<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activea29<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activea29<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activea29<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activea29<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activea29<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finisheda29<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finisheda29<?php echo  "$showrow2[1]";?> .submita29<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finisheda29<?php echo  "$showrow2[1]";?> .loadinga29<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finisheda29<?php echo  "$showrow2[1]";?> .checka29<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finisheda29<?php echo  "$showrow2[1]";?> .checka29<?php echo  "$showrow2[1]";?> i {
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

        $('.apeforma211<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/egt/ape/updategaps17.php',
            data: $('.apeforma211<?php echo  "$showrow2[1]";?>').serialize(),
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


                          <form class="apeforma212<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../controls/imgs/ppe/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-14__content">
                                  <a href="#">
                                    <h3 class="kt-widget-14__title" style=" padding: 0px"><?php echo  "$showrow2[2] ";?>  </h3>
                                  </a> <span style="padding: 0px font-size: 12px; color: #a1a8c3;"><?php echo  "$showrow2[1]";?></span>
                                  
                                    <img src="" alt="" width="100">
                                  
                                  <span style=" padding: 0px"><?php echo  "$showrow2[4]";?></span>
                                  <div class="kt-widget-14__foot-info">
                                <div style="font-size: 12px; color: #a1a8c3;">
                                  <span><?php echo  "$showrow2[11]";?></span>
                                </div>
                              </div>
                                </div>
                              </div>
                              <div class="custom-quantity-inputa2">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                                                            

                                        <a class="quantity-btn quantity-input-upa2 btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualeg" value="<?php echo  "$showrow2[6]";?>" style=" color: #ffb822; " name="quantitya216" type="number">

                                          
                                          <a class="quantity-btn quantity-input-downa2 btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>

                                            
                                      </div>
                                    </div>
                                    <div class="kt-widget-14__desc">actual</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gapa216">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="resida216">
                                   <button class="buttona210<?php echo  "$showrow2[1]";?> pulse-button">
  <span style="font-weight: 900;" class="submita210<?php echo  "$showrow2[1]";?>">Save</span>
  <span class="loadinga110<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checka110<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
</button>

<script>
   (function() {
const button = document.querySelector('.buttona210<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submita210<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activea210<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finisheda210<?php echo  "$showrow2[1]";?>');
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

.buttona210<?php echo  "$showrow2[1]";?> {
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
.buttona210<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttona210<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttona210<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttona210<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttona210<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttona210<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activea210<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activea210<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activea210<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activea210<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activea210<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finisheda210<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finisheda210<?php echo  "$showrow2[1]";?> .submita210<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finisheda210<?php echo  "$showrow2[1]";?> .loadinga110<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finisheda210<?php echo  "$showrow2[1]";?> .checka110<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finisheda210<?php echo  "$showrow2[1]";?> .checka110<?php echo  "$showrow2[1]";?> i {
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
                              </div>

                            </div>

                            </div>
                            <hr>
                          </div>
                        </form>
<script>
      $(function () {

        $('.apeforma212<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/egt/ape/updategaps16.php',
            data: $('.apeforma212<?php echo  "$showrow2[1]";?>').serialize(),
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


                          <form class="apeforma214<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../controls/imgs/ape/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-14__content">
                                  <a href="#">
                                    <h3 class="kt-widget-14__title" style=" padding: 0px"><?php echo  "$showrow2[2] ";?>  </h3>
                                  </a> <span style="padding: 0px font-size: 12px; color: #a1a8c3;"><?php echo  "$showrow2[1]";?></span>
                                  
                                    <img src="" alt="" width="100">
                                  
                                  <span style=" padding: 0px"><?php echo  "$showrow2[4]";?></span>
                                  <div class="kt-widget-14__foot-info">
                                <div style="font-size: 12px; color: #a1a8c3;">
                                  <span><?php echo  "$showrow2[11]";?></span>
                                </div>
                              </div>
                                </div>
                              </div>
                              <div class="custom-quantity-inputa2">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title ">
                                    <div class="number-input">
                                                                            

                                        <a class="quantity-btn quantity-input-upa2 btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualeg" value="<?php echo  "$showrow2[6]";?>" style=" color: #1dc9b7; " name="quantitya219" type="number">

                                          
                                          <a class="quantity-btn quantity-input-downa2 btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>

                                            
                                      </div>
                                    </div>
                                    <div class="kt-widget-14__desc">actual</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gapa219">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="resida219">
                                   <button class="buttona211<?php echo  "$showrow2[1]";?> pulse-button">
  <span style="font-weight: 900;" class="submita211<?php echo  "$showrow2[1]";?>">Save</span>
  <span class="loadinga211<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checka211<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
</button>

<script>
   (function() {
const button = document.querySelector('.buttona211<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submita211<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activea211<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finisheda211<?php echo  "$showrow2[1]";?>');
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

.buttona211<?php echo  "$showrow2[1]";?> {
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
.buttona211<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttona211<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttona211<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttona211<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttona211<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttona211<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activea211<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activea211<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activea211<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activea211<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activea211<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finisheda211<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finisheda211<?php echo  "$showrow2[1]";?> .submita211<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finisheda211<?php echo  "$showrow2[1]";?> .loadinga211<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finisheda211<?php echo  "$showrow2[1]";?> .checka211<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finisheda211<?php echo  "$showrow2[1]";?> .checka211<?php echo  "$showrow2[1]";?> i {
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
                              </div>

                            </div>

                            </div>
                            <hr>
                          </div>
                        </form>
<script>
      $(function () {

        $('.apeforma214<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/egt/ape/updategaps19.php',
            data: $('.apeforma214<?php echo  "$showrow2[1]";?>').serialize(),
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
  $(".quantity-input-upa2").click(function(){
    var inpt = $(this).parents(".custom-quantity-inputa2").find("[name=quantitya217]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-upa2").click(function(){

    var inptt = $(this).parents(".custom-quantity-inputa2").find("[name=gapa217]");
    var vall = parseInt(inptt.val());
    if ( vall < 0 ) inptt.val(vall=0);
    inptt.val(vall-1);
  });

  $(".quantity-input-downa2").click(function(){
    var inpt = $(this).parents(".custom-quantity-inputa2").find("[name=quantitya217]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });
  $(".quantity-input-downa2").click(function(){
    var inptt = $(this).parents(".custom-quantity-inputa2").find("[name=gapa217]");
    var vall = parseInt(inptt.val());
    if ( vall < 0 ) inptt.val(vall=0);
    
    inptt.val(vall+1);
    
  });
});

  </script>  
              
<script>
$(document).ready(function(){
  $(".quantity-input-upa2").click(function(){
    var inpt = $(this).parents(".custom-quantity-inputa2").find("[name=quantity18]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-upa2").click(function(){

    var inptt = $(this).parents(".custom-quantity-inputa2").find("[name=gap18]");
    var vall = parseInt(inptt.val());
    if ( vall < 0 ) inptt.val(vall=0);
    inptt.val(vall-1);
  });

  $(".quantity-input-downa2").click(function(){
    var inpt = $(this).parents(".custom-quantity-inputa2").find("[name=quantity18]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });
  $(".quantity-input-downa2").click(function(){
    var inptt = $(this).parents(".custom-quantity-inputa2").find("[name=gap18]");
    var vall = parseInt(inptt.val());
    if ( vall < 0 ) inptt.val(vall=0);
    
    inptt.val(vall+1);
    
  });
});

  </script>  
                

<script>
$(document).ready(function(){
  $(".quantity-input-upa2").click(function(){
    var inpt = $(this).parents(".custom-quantity-inputa2").find("[name=quantitya219]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-upa2").click(function(){

    var inptt = $(this).parents(".custom-quantity-inputa2").find("[name=gapa219]");
    var vall = parseInt(inptt.val());
    if ( vall < 0 ) inptt.val(vall=0);
    inptt.val(vall-1);
  });

  $(".quantity-input-downa2").click(function(){
    var inpt = $(this).parents(".custom-quantity-inputa2").find("[name=quantitya219]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });
  $(".quantity-input-downa2").click(function(){
    var inptt = $(this).parents(".custom-quantity-inputa2").find("[name=gapa219]");
    var vall = parseInt(inptt.val());
    if ( vall < 0 ) inptt.val(vall=0);
    
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
  $(".quantity-input-upa2").click(function(){
    var inpt = $(this).parents(".custom-quantity-inputa2").find("[name=quantitya216]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-upa2").click(function(){

    var inptt = $(this).parents(".custom-quantity-inputa2").find("[name=gapa216]");
    var vall = parseInt(inptt.val());
    if ( vall < 0 ) inptt.val(vall=0);
    inptt.val(vall-1);
  });

  $(".quantity-input-downa2").click(function(){
    var inpt = $(this).parents(".custom-quantity-inputa2").find("[name=quantitya216]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });
  $(".quantity-input-downa2").click(function(){
    var inptt = $(this).parents(".custom-quantity-inputa2").find("[name=gapa216]");
    var vall = parseInt(inptt.val());
    if ( vall < 0 ) inptt.val(vall=0);
    
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