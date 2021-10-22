<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

<?php

require('controls/zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_tools_tc3 WHERE wtl_owner='32'");
$showr2->execute();
if ($showr2===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res2=$showr2->get_result();
?>
 <div id="">


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
                    


                    

                                        
                                          <?php
                                          while ($showrow2=$res2->fetch_row()) {

                                          if ($showrow2[7]==0) {
                                            
                                          
                                          ?>
                     <div class="kt-portlet__body">
                            
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                       
                        
                        <div class="carousel-inner"> 


                          <form class="toolstc3fd11<?php echo  "$showrow2[1]";?>">
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
                                        <div class="custom-quantitytc3-input">

                                         <a class="quantity-btn quantitytc3-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                        
                                          <input min="0" readonly value="<?php echo ($showrow2[6]);?>" style=" color: #5578eb; " name="actualtc31" type="number">

                                          
                                          <a class="quantity-btn quantitytc3-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="kt-widget-14__desc">actual</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title">
                                  	<div class="custom-standardtc3-input">
                                  	<a class="quantity-btn standardtc3-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>

                                    <input class="kt-widget-14__info-title" readonly="readonly" value="<?php echo ($showrow2[7]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="standardtc31">

                                    <a class="quantity-btn standardtc3-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                        </div>
                                  </div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="tidtc31">
                                   <button type="submit" name="savedefd" class="bttontc3<?php echo  "$showrow2[1]";?> pulse-button">
  <span style="font-weight: 900;" class="sbmittc3<?php echo  "$showrow2[1]";?>">Save</span>
  <span class="loadinngtc3<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checkktc3<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
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

        $('.toolstc3fd11<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/tc3/tools/standards.php',
            data: $('.toolstc3fd11<?php echo  "$showrow2[1]";?>').serialize(),
            success: function () {
            alert('good dude');
            }
          });

        });

      });
    </script>




    <script>
   (function() {
const button = document.querySelector('.bttontc3<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.sbmittc3<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activeetc3<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedtc3<?php echo  "$showrow2[1]";?>');
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

.bttontc3<?php echo  "$showrow2[1]";?> {
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
.bttontc3<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.bttontc3<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.bttontc3<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.bttontc3<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.bttontc3<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.bttontc3<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activeetc3<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 3s linear;
}
.activeetc3<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activeetc3<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activeetc3<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activeetc3<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedtc3<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedtc3<?php echo  "$showrow2[1]";?> .sbmittc3<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedtc3<?php echo  "$showrow2[1]";?> .loadinngtc3<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedtc3<?php echo  "$showrow2[1]";?> .checkktc3<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedtc3<?php echo  "$showrow2[1]";?> .checkktc3<?php echo  "$showrow2[1]";?> i {
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


                          <form class="toolstc3fd11<?php echo  "$showrow2[1]";?>">
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
                                        <div class="custom-quantitytc3-input">

                                         <a class="quantity-btn quantitytc3-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                        
                                          <input min="0" readonly value="<?php echo ($showrow2[6]);?>" style=" color: #5578eb; " name="actualtc31" type="number">

                                          
                                          <a class="quantity-btn quantitytc3-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="kt-widget-14__desc">actual</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title">
                                    <div class="custom-standardtc3-input">
                                    <a class="quantity-btn standardtc3-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>

                                    <input class="kt-widget-14__info-title" readonly="readonly" value="<?php echo ($showrow2[7]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="standardtc31">

                                    <a class="quantity-btn standardtc3-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                        </div>
                                  </div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="tidtc31">
                                   <button type="submit" name="savedefd" class="bttontc3<?php echo  "$showrow2[1]";?> pulse-button">
  <span style="font-weight: 900;" class="sbmittc3<?php echo  "$showrow2[1]";?>">Save</span>
  <span class="loadinngtc3<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checkktc3<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
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

        $('.toolstc3fd11<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/tc3/tools/standards.php',
            data: $('.toolstc3fd11<?php echo  "$showrow2[1]";?>').serialize(),
            success: function () {
            alert('good dude');
            }
          });

        });

      });
    </script>




    <script>
   (function() {
const button = document.querySelector('.bttontc3<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.sbmittc3<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activeetc3<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finishedtc3<?php echo  "$showrow2[1]";?>');
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

.bttontc3<?php echo  "$showrow2[1]";?> {
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
.bttontc3<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.bttontc3<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.bttontc3<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.bttontc3<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.bttontc3<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.bttontc3<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activeetc3<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 3s linear;
}
.activeetc3<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activeetc3<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activeetc3<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activeetc3<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finishedtc3<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finishedtc3<?php echo  "$showrow2[1]";?> .sbmittc3<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedtc3<?php echo  "$showrow2[1]";?> .loadinngtc3<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finishedtc3<?php echo  "$showrow2[1]";?> .checkktc3<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finishedtc3<?php echo  "$showrow2[1]";?> .checkktc3<?php echo  "$showrow2[1]";?> i {
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
  $(".quantitytc3-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantitytc3-input").find("[name=actualtc31]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });



  $(".quantitytc3-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantitytc3-input").find("[name=actualtc31]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

  $(".standardtc3-input-up").click(function(){
    var inpt = $(this).parents(".custom-standardtc3-input").find("[name=standardtc31]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".standardtc3-input-down").click(function(){
    var inpt = $(this).parents(".custom-standardtc3-input").find("[name=standardtc31]");
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