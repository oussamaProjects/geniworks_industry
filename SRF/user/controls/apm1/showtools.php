<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

<?php

require('zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_tools_apm1 WHERE wtl_owner='11'");
$showr2->execute();
if ($showr2===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res2=$showr2->get_result();
?>
 <div id="apm1">


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
                    <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                  <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="flaticon2-gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                          <span class="kt-nav__section-text">Export Tools</span>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-iconla la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-iconla la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-iconla la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-iconla la-file-text-o"></i>
                                            <span class="kt-nav__link-text">CSV</span>
                                          </a>
                                        </li>
                                        <li class="kt-nav__item">
                                          <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-iconla la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                    


                   
<div class="kt-portlet__body">
  
         
                                          <?php
                                          while ($showrow2=$res2->fetch_row()) {

                                            if (($showrow2[7]-$showrow2[6])>=3) {
                                          ?>
                     

                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                       
                        <div class="kt-widget-14__foot" style="float: right">
                              
                            </div>
                        <div class="carousel-inner"> 


                          <form class="toolforma11<?php echo  "$showrow2[1]";?>">
                            
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="col-md-8">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../../controls/imgs/tools/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
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
                              <div class="custom-quantity-input">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                  


                                </div>

                               
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                                                            
<div class="kt-widget-14__desc">
                                        <a class="quantity-btn quantity-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualapm1" value="<?php echo  "$showrow2[6]";?>" style=" color: #fd397a; " name="quantity1" type="number">

                                          
                                          <a class="quantity-btn quantity-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a><br><center>actual</center>
</div>
                                            
                                      </div>
                                    </div>
                                    
                                
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gap1">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                                </div>
                              </div>
                            </div>
                            <center>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="resid">
                                   
                                   <!--<button style="background-color: #00A1DB; border: #00A1DB; width: 100px;" class="btnn btn btn-success btn-sm btn-bold btn-upper">Save</button> -->
                                  <button class="buttoon<?php echo  "$showrow2[1]";?> pulse-button">
  <span style="font-weight: 900;" class="submiit<?php echo  "$showrow2[1]";?>">Save</span>
  <span class="loadiing<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checck<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
</button>



                                </div>
                                </center>
                              

                            </div>
                            <hr>
                          </div>
                        
                        </form>


<script>

   var a = 0;
    var add = function(valueToAdd){
        a += valueToAdd;
        document.getElementById('Value').value = a;

   if(a == 0) {
            document.getElementById('minus').disabled = true;
        } else {
            document.getElementById('minus').disabled = false;
        }



   (function() {
const button = document.querySelector('.buttoon<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submiit<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activve<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishhed<?php echo  "$showrow2[1]";?>');
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

.buttoon<?php echo  "$showrow2[1]";?> {
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
.buttoon<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttoon<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttoon<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttoon<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttoon<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttoon<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activve<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activve<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activve<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activve<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activve<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishhed<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishhed<?php echo  "$showrow2[1]";?> .submiit<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishhed<?php echo  "$showrow2[1]";?> .loadiing<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishhed<?php echo  "$showrow2[1]";?> .checck<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishhed<?php echo  "$showrow2[1]";?> .checck<?php echo  "$showrow2[1]";?> i {
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

        $('.toolforma11<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm1/tools/updategaps1.php',
            data: $('.toolforma11<?php echo  "$showrow2[1]";?>').serialize(),
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


                          <form class="toolforma12<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="col-md-8">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../../controls/imgs/tools/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
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
                              <div class="custom-quantity-input">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                  


                                </div>

                               
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                      <div class="kt-widget-14__desc">
                                        <a class="quantity-btn quantity-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualapm1" value="<?php echo  "$showrow2[6]";?>" style=" color: #ffb822; " name="quantity" type="number">

                                          
                                          <a class="quantity-btn quantity-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a><br><center>actual</center>
                                          </div>
                                            
                                      </div>
                                    </div>
                                    
                                
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gap">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                                </div>
                              </div>
                            </div>
                            <center>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="resid">
                                   <button class="buttoon1<?php echo  "$showrow2[1]";?> pulse-button">
                                    <span style="font-weight: 900;" class="submiit1<?php echo  "$showrow2[1]";?>">Save</span>
                                    <span class="loadiing1<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                    <span class="checck1<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                  </button>
                                  </div>
                                </center>


<script>
   (function() {
const button = document.querySelector('.buttoon1<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submiit1<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activve1<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishhed1<?php echo  "$showrow2[1]";?>');
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

.buttoon1<?php echo  "$showrow2[1]";?> {
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
.buttoon1<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttoon1<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttoon1<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttoon1<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttoon1<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttoon1<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activve1<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activve1<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activve1<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activve1<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activve1<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishhed1<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishhed1<?php echo  "$showrow2[1]";?> .submiit1<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finished<?php echo  "$showrow2[1]";?> .loadiing1<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishhed1<?php echo  "$showrow2[1]";?> .checck1<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishhed1<?php echo  "$showrow2[1]";?> .checck1<?php echo  "$showrow2[1]";?> i {
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

        $('.toolforma12<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm1/tools/updategaps.php',
            data: $('.toolforma12<?php echo  "$showrow2[1]";?>').serialize(),
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


                          <form class="toolforma14<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="col-md-8">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../../controls/imgs/tools/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
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
                              <div class="custom-quantity-input">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                  


                                </div>

                               
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                      <div class="kt-widget-14__desc">
                                        <a class="quantity-btn quantity-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualapm1" value="<?php echo  "$showrow2[6]";?>" style=" color: #1dc9b7; " name="quantity3" type="number">

                                          
                                          <a class="quantity-btn quantity-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a><br><center>actual</center>
                                          </div>
                                            
                                      </div>
                                    </div>
                                    
                                
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gap3">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                                </div>
                              </div>
                            </div>
                              <div style="">
                                <div class="kt-widget-14__info" style=" background-color: transparent;">
                                  <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="resid">
                                   <button class="buttoon2<?php echo  "$showrow2[1]";?> pulse-button">
                                    <span style="font-weight: 900;" class="submiit2<?php echo  "$showrow2[1]";?>">Save</span>
                                    <span class="loadiing2<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                    <span class="checck2<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                  </button>
                                  </div>
                                </div>
                                  

<script>
   (function() {
const button = document.querySelector('.buttoon2<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submiit2<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activve2<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishhed2<?php echo  "$showrow2[1]";?>');
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

.buttoon2<?php echo  "$showrow2[1]";?> {
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
.buttoon2<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttoon2<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttoon2<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttoon2<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttoon2<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttoon2<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activve2<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activve2<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activve2<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activve2<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activve2<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishhed2<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishhed2<?php echo  "$showrow2[1]";?> .submiit2<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishhed2<?php echo  "$showrow2[1]";?> .loadiing2<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishhed2<?php echo  "$showrow2[1]";?> .checck2<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishhed2<?php echo  "$showrow2[1]";?> .checck2<?php echo  "$showrow2[1]";?> i {
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

        $('.toolforma14<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm1/tools/updategaps3.php',
            data: $('.toolforma14<?php echo  "$showrow2[1]";?>').serialize(),
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
  $(".quantity-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity1]");
    var val = parseInt(inpt.val());
    
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantity-input").find("[name=gap1]");
    var vall = parseInt(inptt.val());
   
    inptt.val(vall-1);
  });

  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity1]");
    var val = parseInt(inpt.val());
    inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
    
    
  });
  $(".quantity-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantity-input").find("[name=gap1]");
    var vall = parseInt(inptt.val());
    
    
    inptt.val(vall+1);
    
  });
});

  </script>  
              
<script>
$(document).ready(function(){
  $(".quantity-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity2]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantity-input").find("[name=gap2]");
    var vall = parseInt(inptt.val());

    inptt.val(vall-1);
  });

  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity2]");
    var val = parseInt(inpt.val());
       inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
    
  });
  $(".quantity-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantity-input").find("[name=gap2]");
    var vall = parseInt(inptt.val());
    
    inptt.val(vall+1);
    
  });
});

  </script>  
                

<script>
$(document).ready(function(){
  $(".quantity-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity3]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantity-input").find("[name=gap3]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity3]");
    var val = parseInt(inpt.val());
       inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantity-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantity-input").find("[name=gap3]");
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
  $(".quantity-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantity-input").find("[name=gap]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity]");
    var val = parseInt(inpt.val());
       inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantity-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantity-input").find("[name=gap]");
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