<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

<?php

require('zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_materials_tc3 WHERE wmt_owner='32'");
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


                          <form class="showmattc311<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="col-md-8">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../controls/imgs/materials/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
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
                                        <a class="quantitymattc3-btn quantity-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualtc3" value="<?php echo  "$showrow2[6]";?>" style=" color: #fd397a; " name="quantitymattc35" type="number">

                                          
                                          <a class="quantitymattc3-btn quantity-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a><br><center>actual</center>
                                          </div>
                                            
                                      </div>
                                    </div>
                                    
                                
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gapmattc35">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                              </div>
                              </div>
                            </div>
                              <div style="">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="residmattc35">
                                  <button class="buttonmattc33<?php echo  "$showrow2[1]";?> pulse-button">
                                    <span style="font-weight: 900;" class="submitmattc33<?php echo  "$showrow2[1]";?>">Save</span>
                                    <span class="loadingmattc33<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                    <span class="checkmattc33<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                  </button>
                                </div>
                              </div>
                             

                            </div>
                            <hr>
                          </div>
                        </form>


<script>
   (function() {
const button = document.querySelector('.buttonmattc33<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submitmattc33<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activemattc33<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedmattc33<?php echo  "$showrow2[1]";?>');
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

.buttonmattc33<?php echo  "$showrow2[1]";?> {
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
.buttonmattc33<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttonmattc33<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttonmattc33<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttonmattc33<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttonmattc33<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttonmattc33<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activemattc33<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activemattc33<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activemattc33<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activemattc33<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activemattc33<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedmattc33<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedmattc33<?php echo  "$showrow2[1]";?> .submitmattc33<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedmattc33<?php echo  "$showrow2[1]";?> .loadingmattc33<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedmattc33<?php echo  "$showrow2[1]";?> .checkmattc33<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedmattc33<?php echo  "$showrow2[1]";?> .checkmattc33<?php echo  "$showrow2[1]";?> i {
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

        $('.showmattc311<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/tc3/mats/updategaps5.php',
            data: $('.showmattc311<?php echo  "$showrow2[1]";?>').serialize(),
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


                          <form class="showmattc312<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="col-md-8">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../controls/imgs/materials/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
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
                                        <a class="quantitymattc3-btn quantity-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualtc3" value="<?php echo  "$showrow2[6]";?>" style=" color: #ffb822; " name="quantitymattc34" type="number">

                                          
                                          <a class="quantitymattc3-btn quantity-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a><br><center>actual</center>
                                          </div>
                                            
                                      </div>
                                    </div>
                                    
                                
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gapmattc34">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                              </div>
                              </div>
                            </div>
                              <div style="">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="residmattc34">
                                   <button class="buttonmattc34<?php echo  "$showrow2[1]";?> pulse-button">
                                    <span style="font-weight: 900;" class="submitmattc34<?php echo  "$showrow2[1]";?>">Save</span>
                                    <span class="loadingmattc34<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                    <span class="checkmattc34<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                  </button>
                                </div>
                              </div>

<script>
   (function() {
const button = document.querySelector('.buttonmattc34<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submitmattc34<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activemattc34<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedmattc34<?php echo  "$showrow2[1]";?>');
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

.buttonmattc34<?php echo  "$showrow2[1]";?> {
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
.buttonmattc34<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttonmattc34<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttonmattc34<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttonmattc34<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttonmattc34<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttonmattc34<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activemattc34<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activemattc34<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activemattc34<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activemattc34<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activemattc34<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedmattc34<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedmattc34<?php echo  "$showrow2[1]";?> .submitmattc34<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedmattc34<?php echo  "$showrow2[1]";?> .loadingmattc34<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedmattc34<?php echo  "$showrow2[1]";?> .checkmattc34<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedmattc34<?php echo  "$showrow2[1]";?> .checkmattc34<?php echo  "$showrow2[1]";?> i {
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

        $('.showmattc312<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/tc3/mats/updategaps.php',
            data: $('.showmattc312<?php echo  "$showrow2[1]";?>').serialize(),
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


                          <form class="showmattc314<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="col-md-8">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../controls/imgs/materials/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
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
                                        <a class="quantitymattc3-btn quantity-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualtc3" value="<?php echo  "$showrow2[6]";?>" style=" color: #1dc9b7; " name="quantitymattc37" type="number">

                                          
                                          <a class="quantitymattc3-btn quantity-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a><br><center>actual</center>
                                          </div>
                                            
                                      </div>
                                    </div>
                                    
                                
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title" id="totalt">
                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="gapmattc37">
                                    
                                  </div>
                                  <div class="kt-widget-14__desc">Gap</div>
                              </div>
                              </div>
                            </div>
                            <div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="residmattc37">
                                   <button class="buttonmattc35<?php echo  "$showrow2[1]";?> pulse-button">
                                    <span style="font-weight: 900;" class="submitmattc35<?php echo  "$showrow2[1]";?>">Save</span>
                                    <span class="loadingmattc35<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                    <span class="checkmattc35<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                  </button>
                                  </div>

                            </div>

<script>
   (function() {
const button = document.querySelector('.buttonmattc35<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submitmattc35<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activemattc35<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedmattc35<?php echo  "$showrow2[1]";?>');
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

.buttonmattc35<?php echo  "$showrow2[1]";?> {
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
.buttonmattc35<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttonmattc35<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttonmattc35<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttonmattc35<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttonmattc35<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttonmattc35<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activemattc35<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activemattc35<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activemattc35<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activemattc35<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activemattc35<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedmattc35<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedmattc35<?php echo  "$showrow2[1]";?> .submitmattc35<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedmattc35<?php echo  "$showrow2[1]";?> .loadingmattc35<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedmattc35<?php echo  "$showrow2[1]";?> .checkmattc35<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedmattc35<?php echo  "$showrow2[1]";?> .checkmattc35<?php echo  "$showrow2[1]";?> i {
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

        $('.showmattc314<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/tc3/mats/updategaps7.php',
            data: $('.showmattc314<?php echo  "$showrow2[1]";?>').serialize(),
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
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantitymattc35]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantity-input").find("[name=gapmattc35]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantitymattc35]");
    var val = parseInt(inpt.val());
    inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantity-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantity-input").find("[name=gapmattc35]");
    var vall = parseInt(inptt.val());
    inptt.val(vall+1);
    
  });
});

  </script>  
              
<script>
$(document).ready(function(){
  $(".quantity-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantitymattc36]");
    var val = parseInt(inpt.val());
   if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantity-input").find("[name=gapmattc36]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantitymattc36]");
    var val = parseInt(inpt.val());
    inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantity-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantity-input").find("[name=gapmattc36]");
    var vall = parseInt(inptt.val());
   inptt.val(vall+1);
    
  });
});

  </script>  
                

<script>
$(document).ready(function(){
  $(".quantity-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantitymattc37]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantity-input").find("[name=gapmattc37]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantitymattc37]");
    var val = parseInt(inpt.val());
    inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantity-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantity-input").find("[name=gapmattc37]");
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
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantitymattc34]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantity-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantity-input").find("[name=gapmattc34]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantitymattc34]");
    var val = parseInt(inpt.val());
    inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantity-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantity-input").find("[name=gapmattc34]");
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