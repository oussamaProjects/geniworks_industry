<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

<?php

require('controls/zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_ppe_apm1 WHERE wppe_owner='12'");
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

                                          
                                          ?>
                     <div class="kt-portlet__body">
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                       
                    
                        <div class="carousel-inner"> 


                          <form id="ppetna111<?php echo  "$showrow2[1]";?>">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../controls/imgs/ppe/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
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
                                        <div class="custom-quantity11p-input">

                                         <a class="quantity-btn quantity11p-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                        
                                          <input min="0" readonly value="0" style=" color: #5578eb; " name="actual1p" type="number">

                                          
                                          <a class="quantity-btn quantity11p-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>

                                            </div>
                                      </div>
                                    </div>
                                    <div class="kt-widget-14__desc">actual</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title">
                                    <div class="custom-standard11p-input">
                                    <a class="quantity-btn standard11p-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>

                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="standard11p">

                                    <a class="quantity-btn standard11p-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                        </div>
                                  </div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="tidp1">
                                   <button type="submit" name="sstandardc" class="bttonp1<?php echo  "$showrow2[1]";?> pulse-button">
  <span style="font-weight: 900;" class="sbmitp1<?php echo  "$showrow2[1]";?>">Save</span>
  <span class="loadinnp1<?php echo  "$showrow2[1]";?>"><i class="fa fa-refresh"></i></span>
  <span class="checkkp1<?php echo  "$showrow2[1]";?>"><i class="fa fa-check"></i></span>
</button>

<script>
   (function() {
const button = document.querySelector('.bttonp1<?php echo  "$showrow2[1]";?>');
const submit = document.querySelector('.sbmitp1<?php echo  "$showrow2[1]";?>');

function toggleClass() {
  this.classList.toggle('activeep1<?php echo  "$showrow2[1]";?>');
}

function addClass() {
  this.classList.add('finisheddp1<?php echo  "$showrow2[1]";?>');
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

.bttonp1<?php echo  "$showrow2[1]";?> {
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
.bttonp1<?php echo  "$showrow2[1]";?>:before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.bttonp1<?php echo  "$showrow2[1]";?> span {
  position: absolute;
  line-height: 0;
}
.bttonp1<?php echo  "$showrow2[1]";?> span i {
  transform-origin: center center;
}
.bttonp1<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.bttonp1<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 18px;
}
.bttonp1<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}


.activeep1<?php echo  "$showrow2[1]";?>:before {
  width: 100%;
  transition: width 3s linear;
}
.activeep1<?php echo  "$showrow2[1]";?> span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.activeep1<?php echo  "$showrow2[1]";?> span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.activeep1<?php echo  "$showrow2[1]";?> span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.activeep1<?php echo  "$showrow2[1]";?> span:nth-of-type(3) {
  display: none;
}

.finisheddp1<?php echo  "$showrow2[1]";?>{
  background-color: #54d98c;
}
.finisheddp1<?php echo  "$showrow2[1]";?> .sbmitp1<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finisheddp1<?php echo  "$showrow2[1]";?> .loadinnp1<?php echo  "$showrow2[1]";?> {
  display: none;
}
.finisheddp1<?php echo  "$showrow2[1]";?> .checkkp1<?php echo  "$showrow2[1]";?> {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finisheddp1<?php echo  "$showrow2[1]";?> .checkkp1<?php echo  "$showrow2[1]";?> i {
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

                            </div></form>
                          </div>
                        


                
                               
                                    
       </div>
    
                                           
                                         
                     </div>
       <script>
      $(function () {

        $('#ppetna111<?php echo  "$showrow2[1]";?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm2/ppe/standards.php',
            data: $('#ppetna111<?php echo  "$showrow2[1]";?>').serialize(),
            success: function () {
              alert('<?php echo  "$showrow2[2]";?> Successfully Defined');
            }
          });

        });

      });
    </script>  
                                            
                                          <?php } ?>

           
  </div>                     

 </div>

<?php
}

?>
<script>
$(document).ready(function(){
  $(".quantity1p-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity11p-input").find("[name=actual1p]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".quantity11p-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity11p-input").find("[name=actual1p]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

  $(".standard11p-input-up").click(function(){
    var inpt = $(this).parents(".custom-standard11p-input").find("[name=standard11p]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".standard11p-input-down").click(function(){
    var inpt = $(this).parents(".custom-standard11p-input").find("[name=standard11p]");
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