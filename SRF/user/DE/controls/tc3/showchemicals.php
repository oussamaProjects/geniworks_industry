<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

<?php

require('zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_chemicals_tc3 WHERE wch_owner='32'");
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


                          <form class="chemformautc311<?php echo  "$showrow2[1]";?>">
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
                              <div class="custom-quantityutc3c-input">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                  


                                </div>

                               
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                      <div class="kt-widget-14__desc">
                                        <a class="quantity-btn quantityutc3-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualtc3"  readonly="readonly" value="<?php echo  "$showrow2[6]";?>" style=" color: #fd397a; " name="quantitytc3u9" type="number">

                                          
                                          <a class="quantity-btn quantityutc3-input-down btn btn-outline-hover-danger btn-sm btn-icon">
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
                                  <button class="buttonutc36<?php echo  "$showrow2[1]";?> pulse-button">
                                    <span style="font-weight: 900;" class="submitutc36<?php echo  "$showrow2[1]";?>">Save</span>
                                    <span class="loadingtc36<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                    <span class="checktc36<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                  </button>
                                </div>
                              </div>

                          

                            </div>
                            <hr>
                          </div>
                        </form>


<script>
   (function() {
const button = document.querySelector('.buttonutc36<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submitutc36<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activeutc36<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedutc36<?php echo  "$showrow2[1]";?>');
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

.buttonutc36<?php echo  "$showrow2[1]";?> {
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
.buttonutc36<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttonutc36<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttonutc36<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttonutc36<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttonutc36<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttonutc36<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activeutc36<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activeutc36<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activeutc36<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activeutc36<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activeutc36<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedutc36<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedutc36<?php echo  "$showrow2[1]";?> .submitutc36<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedutc36<?php echo  "$showrow2[1]";?> .loadingtc36<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedutc36<?php echo  "$showrow2[1]";?> .checktc36<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedutc36<?php echo  "$showrow2[1]";?> .checktc36<?php echo  "$showrow2[1]";?> i {
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

        $('.chemformautc311<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/tc3/chems/updategaps9.php',
            data: $('.chemformautc311<?php echo  "$showrow2[1]";?>').serialize(),
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


                          <form class="chemformautc312<?php echo  "$showrow2[1]";?>">
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
                              <div class="custom-quantityutc3c-input">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                  


                                </div>

                               
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                      <div class="kt-widget-14__desc">
                                        <a class="quantity-btn quantityutc3-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualtc3"  readonly="readonly" value="<?php echo  "$showrow2[6]";?>" style=" color: #ffb822; " name="quantityutc38" type="number">

                                          
                                          <a class="quantity-btn quantityutc3-input-down btn btn-outline-hover-danger btn-sm btn-icon">
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
                                   <button class="buttonutc37<?php echo  "$showrow2[1]";?> pulse-button">
                                    <span style="font-weight: 900;" class="submitutc37<?php echo  "$showrow2[1]";?>">Save</span>
                                    <span class="loadingutc37<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                    <span class="checkutc37<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                  </button>
                                </div>
                                </div>

<script>
   (function() {
const button = document.querySelector('.buttonutc37<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submitutc37<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activeutc37<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedutc37<?php echo  "$showrow2[1]";?>');
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

.buttonutc37<?php echo  "$showrow2[1]";?> {
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
.buttonutc37<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttonutc37<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttonutc37<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttonutc37<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttonutc37<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttonutc37<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activeutc37<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activeutc37<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activeutc37<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activeutc37<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activeutc37<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedutc37<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedutc37<?php echo  "$showrow2[1]";?> .submitutc37<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedutc37<?php echo  "$showrow2[1]";?> .loadingutc37<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedutc37<?php echo  "$showrow2[1]";?> .checkutc37<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedutc37<?php echo  "$showrow2[1]";?> .checkutc37<?php echo  "$showrow2[1]";?> i {
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

        $('.chemformautc312<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/tc3/chems/updategaps8.php',
            data: $('.chemformautc312<?php echo  "$showrow2[1]";?>').serialize(),
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


                          <form class="chemformautc314<?php echo  "$showrow2[1]";?>">
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
                              <div class="custom-quantityutc3c-input">

                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                  


                                </div>

                               
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                      <div class="kt-widget-14__desc">
                                        <a class="quantity-btn quantityutc3-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                          <input min="0" onChange="myNewFunction(this)" id="actualtc3" readonly="readonly" value="<?php echo  "$showrow2[6]";?>" style=" color: #1dc9b7; " name="quantityutc311" type="number">

                                          
                                          <a class="quantity-btn quantityutc3-input-down btn btn-outline-hover-danger btn-sm btn-icon">
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
                                    <button class="buttonutc38<?php echo  "$showrow2[1]";?> pulse-button">
                                      <span style="font-weight: 900;" class="submitutc38<?php echo  "$showrow2[1]";?>">Save</span>
                                      <span class="loadingutc38<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
                                      <span class="checkutc38<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
                                    </button>
                                  </div>
                                </div>

<script>
   (function() {
const button = document.querySelector('.buttonutc38<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.submitutc38<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activeutc38<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedutc38<?php echo  "$showrow2[1]";?>');
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

.buttonutc38<?php echo  "$showrow2[1]";?> {
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
.buttonutc38<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.buttonutc38<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.buttonutc38<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.buttonutc38<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.buttonutc38<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.buttonutc38<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activeutc38<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 2s linear;
}
.activeutc38<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activeutc38<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activeutc38<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activeutc38<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedutc38<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedutc38<?php echo  "$showrow2[1]";?> .submitutc38<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedutc38<?php echo  "$showrow2[1]";?> .loadingutc38<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedutc38<?php echo  "$showrow2[1]";?> .checkutc38<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedutc38<?php echo  "$showrow2[1]";?> .checkutc38<?php echo  "$showrow2[1]";?> i {
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

        $('.chemformautc314<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/tc3/chems/updategaps11.php',
            data: $('.chemformautc314<?php echo  "$showrow2[1]";?>').serialize(),
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
  $(".quantityutc3-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantityutc3c-input").find("[name=quantitytc3u9]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantityutc3-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantityutc3c-input").find("[name=gapu9]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantityutc3-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantityutc3c-input").find("[name=quantitytc3u9]");
    var val = parseInt(inpt.val());
   inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantityutc3-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantityutc3c-input").find("[name=gapu9]");
    var vall = parseInt(inptt.val());
        inptt.val(vall+1);
    
  });
});

  </script>  
              
<script>
$(document).ready(function(){
  $(".quantityutc3-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantityutc3c-input").find("[name=quantityutc310]");
    var val = parseInt(inpt.val());
   if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantityutc3-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantityutc3c-input").find("[name=gapu10]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantityutc3-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantityutc3c-input").find("[name=quantityutc310]");
    var val = parseInt(inpt.val());
   inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantityutc3-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantityutc3c-input").find("[name=gapu10]");
    var vall = parseInt(inptt.val());
        inptt.val(vall+1);
    
  });
});

  </script>  
                

<script>
$(document).ready(function(){
  $(".quantityutc3-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantityutc3c-input").find("[name=quantityutc311]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantityutc3-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantityutc3c-input").find("[name=gapu11]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantityutc3-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantityutc3c-input").find("[name=quantityutc311]");
    var val = parseInt(inpt.val());
    inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantityutc3-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantityutc3c-input").find("[name=gapu11]");
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
  $(".quantityutc3-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantityutc3c-input").find("[name=quantityutc38]");
    var val = parseInt(inpt.val());
    if ( val <= 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });

   $(".quantityutc3-input-up").click(function(){

    var inptt = $(this).parents(".custom-quantityutc3c-input").find("[name=gapu8]");
    var vall = parseInt(inptt.val());
    inptt.val(vall-1);
  });

  $(".quantityutc3-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantityutc3c-input").find("[name=quantityutc38]");
    var val = parseInt(inpt.val());
    inpt.val(val-1);
    if ( val <= 0 ) inpt.val(val=0);
  });
  $(".quantityutc3-input-down").click(function(){
    var inptt = $(this).parents(".custom-quantityutc3c-input").find("[name=gapu8]");
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