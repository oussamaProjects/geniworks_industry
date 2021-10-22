<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

<?php

require('controls/zdfzfzef/de5.php');
$showr12=$cdb->prepare("SELECT * FROM work_tools_eg WHERE wtl_owner='21'");
$showr12->execute();
if ($showr12===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res12=$showr12->get_result();
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
                                          while ($showrow12=$res12->fetch_row()) {

                                          
                                          ?>
                     <div class="kt-portlet__body">
                            
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                       
                        
                        <div class="carousel-inner"> 


                          <form class="toolsdf22">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../controls/imgs/tools/<?php echo  "$showrow12[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-14__content">
                                  <a href="#">
                                    <h3 class="kt-widget-14__title"><?php echo  "$showrow12[2]";?></h3>
                                  </a>
                                  <div class="kt-widget-14__desc">
                                    <?php echo  "$showrow12[1]";?>
                                  </div>
                                  
                                  <div class="kt-widget-14__foot-info">
                                <div style="font-size: 12px; color: #a1a8c3;">
                                  <span><?php echo  "$showrow12[11]";?></span>
                                </div>
                              </div>
                                  
                                </div>
                              </div>

                              

                              <div class="kt-widget-14__data">
                               
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                        <div class="custom-quantity-inputt22">

                                         <a class="quantity-btn quantity-input-upt22 btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                        
                                          <input min="0" readonly value="0" style=" color: #5578eb; " name="actual2t2" type="number">

                                          
                                          <a class="quantity-btn quantity-input-dowt22 btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>

                                            </div>
                                      </div>
                                    </div>
                                    <div class="kt-widget-14__desc">actual</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title">
                                    <div class="custom-standard-inputt22">
                                    <a class="quantity-btn standard-input-upt22 btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>

                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow12[7]-$showrow12[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="standardt22">

                                    <a class="quantity-btn standard-input-downt22 btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                        </div>
                                  </div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="hidden" value="<?php echo  "$showrow12[1]";?>" name="tidt22">
                                   
                                   <button class="btton-t22<?php echo  "$showrow12[1]";?> pulse-button">
  <span style="font-weight: 900;" class="sbmit-t22<?php echo  "$showrow12[1]";?>">Save</span>
  <span class="loading-t22<?php echo  "$showrow12[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checkk-t22<?php echo  "$showrow12[1]";?>"><i class="fa fa-check"></i></span>
</button>


                                   
                                </div>
                              </div>

                            </div>

                            </div></form>
                          </div>
                        

                               
                                    
       </div>
    </div>
  









    <script>
   (function() {
const button = document.querySelector('.btton-t22<?php echo  "$showrow12[1]";?>');
const submit = document.querySelector('.sbmit-t22<?php echo  "$showrow12[1]";?>');

function toggleClass() {
  this.classList.toggle('active-t22<?php echo  "$showrow12[1]";?>');
}

function addClass() {
  this.classList.add('finished-t22<?php echo  "$showrow12[1]";?>');
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

.btton-t22<?php echo  "$showrow12[1]";?> {
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
.btton-t22<?php echo  "$showrow12[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.btton-t22<?php echo  "$showrow12[1]";?> span {
  position: absolute;
  line-height: 0;
}
.btton-t22<?php echo  "$showrow12[1]";?> span i {
  transform-origin: center center;
}
.btton-t22<?php echo  "$showrow12[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.btton-t22<?php echo  "$showrow12[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.btton-t22<?php echo  "$showrow12[1]";?> span:nth-of-type(3) {
  display: none;
}


.active-t22<?php echo  "$showrow12[1]";?>:before {
  width: 100%;
  transition: width 3s linear;
}
.active-t22<?php echo  "$showrow12[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.active-t22<?php echo  "$showrow12[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.active-t22<?php echo  "$showrow12[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.active-t22<?php echo  "$showrow12[1]";?> span:nth-of-type(3) {
  display: none;
}

.finished-t22<?php echo  "$showrow12[1]";?>{
  background-color: #54d98c;
}
.finished-t22<?php echo  "$showrow12[1]";?> .sbmit-t22<?php echo  "$showrow12[1]";?> {
  display: none;
}
.finished-t22<?php echo  "$showrow12[1]";?> .loading-t22<?php echo  "$showrow12[1]";?> {
  display: none;
}
.finished-t22<?php echo  "$showrow12[1]";?> .checkk-t22<?php echo  "$showrow12[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finished-t22<?php echo  "$showrow12[1]";?> .checkk-t22<?php echo  "$showrow12[1]";?> i {
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
                                       
                                         
        

                                            
                                          <?php } ?>

                                
</div>
 </div>



<?php
}

?>

<script>
$(document).ready(function(){
  $(".quantity-input-upt22").click(function(){
    var inpt = $(this).parents(".custom-quantity-inputt22").find("[name=actual2t2]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".quantity-input-dowt22").click(function(){
    var inpt = $(this).parents(".custom-quantity-inputt22").find("[name=actual2t2]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

  $(".standard-input-upt22").click(function(){
    var inpt = $(this).parents(".custom-standard-inputt22").find("[name=standardt22]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".standard-input-downt22").click(function(){
    var inpt = $(this).parents(".custom-standard-inputt22").find("[name=standardt22]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

});

  </script>  
             <script>
      $(function () {

        $('.toolsdf22').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/tools/standards.php',
            data: $('#toolsdf22').serialize(),
            success: function () {
            
            }
          });

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