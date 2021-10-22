<!DOCTYPE html>
<html>
<head>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>


<body>

<?php

require('controls/zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_tools_apm1 WHERE wtl_owner='11'");
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
                       
                        <div class="kt-widget-14__foot" style="float: right">
                              <div class="kt-widget-14__foot-info">
                                <div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
                                  <?php echo  "$showrow2[11]";?>
                                </div>
                                <div class="kt-widget-14__foot-desc">Last Update</div>
                              </div>
                            </div>
                        <div class="carousel-inner"> 


                          <form class="toolsdf11">
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../controls/imgs/tools/<?php echo  "$showrow2[3]";?>" class="kt-widget-14__image--landscape" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-14__content">
                                  <a href="#">
                                    <h3 class="kt-widget-14__title"><?php echo  "$showrow2[2]";?></h3>
                                  </a><span><?php echo  "$showrow2[1]";?></span>
                                  <div class="kt-widget-14__desc">
                                    <img src="" alt="" width="100">
                                  </div>
                                  <span><?php echo  "$showrow2[4]";?></span>
                                </div>
                              </div>
                              

                              <div class="kt-widget-14__data">
                               
                                <div class="kt-widget-14__info" style="background-color: transparent;">
                                  <div class="kt-widget-14__info-title">
                                    <div class="number-input">
                                        <div class="custom-quantity-input">

                                         <a class="quantity-btn quantity-input-up btn btn-outline-hover-success btn-sm btn-icon">
                                          <i class="fa fa-plus"></i></a>
                                        
                                          <input min="0" readonly value="0" style=" color: #5578eb; " name="actual1" type="number">

                                          
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

                                    <input  class="kt-widget-14__info-title" min="0" readonly="readonly" value="<?php echo ($showrow2[7]-$showrow2[6]);?>" style="background-color: transparent; width: 20px; text-align: center; border:0px transparent;" name="standard1">

                                    <a class="quantity-btn standard-input-down btn btn-outline-hover-danger btn-sm btn-icon">
                                            <i class="fa fa-minus"></i></a>
                                        </div>
                                  </div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info" style="background-color: transparent;">

                                    <input type="hidden" value="<?php echo  "$showrow2[1]";?>" name="tid">
                                   <button type="submit" name="sstandard" style="background-color: #00A1DB; border: #00A1DB;width: 80px;" class="button--progress<?php echo  "$showrow2[1]";?> btn btn-success btn-sm btn-bold btn-upper">Save</button>

                                   
                                </div>
                              </div>

                            </div>

                            </div></form>
                          </div>
                        
 <script>
   (function() {
  let $element = {},
    $content = '',
    $self

  class Button {
    constructor(element, content) {
      $self = this,
        $element = element,
        $content = content

      $element.on('click', $self.OnStart)
    }

    OnStart() {
      $element.off('click')
      $element.attr('data-progress', '0')
      $element.html($content)
      $self.Update(0)
    }

    Update(progress) {
      if (progress >= 100) {
        return $self.OnFinish()
      } else {
        $element.attr('data-progress', progress)
        progress += Math.floor(Math.random() * 10) + 1
        return window.setTimeout(() => {
          $self.Update(progress)
        }, 50)
      }
    }

    OnFinish() {
      $element.html('Save')
      $element.removeAttr('data-progress<?php echo  "$showrow2[1]";?>')
      $element.on('click', $self.OnStart)
    }
  }

  var btn = new Button($('.button--progress<?php echo  "$showrow2[1]";?>'), 'Saving...')
})()
 </script>
        <style type="text/css">


.button--progress<?php echo  "$showrow2[1]";?> {
  position: relative;
}
.button--progress<?php echo  "$showrow2[1]";?>::before, .button--progress<?php echo  "$showrow2[1]";?>::after {
  content: '';
  display: block;
  height: 20%;
  position: absolute;
  bottom: 0;
  left: 0;

  opacity: 0;
  transition: opacity 0ms linear;
  transform: translateY(100%);
}
.button--progress<?php echo  "$showrow2[1]";?>::before {
  width: 100%;
}
.button--progress<?php echo  "$showrow2[1]";?>::after {
  width: 0;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress]::before, .button--progress<?php echo  "$showrow2[1]";?>[data-progress]::after {
  opacity: 1;
  transition: opacity 50ms ease, width 50ms ease;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="1"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="1"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="1"]::after {
  background: #aae1c6;
  width: 1%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="2"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="2"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="2"]::after {
  background: #aae1c6;
  width: 2%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="3"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="3"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="3"]::after {
  background: #aae1c6;
  width: 3%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="4"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="4"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="4"]::after {
  background: #aae1c6;
  width: 4%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="5"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="5"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="5"]::after {
  background: #aae1c6;
  width: 5%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="6"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="6"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="6"]::after {
  background: #aae1c6;
  width: 6%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="7"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="7"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="7"]::after {
  background: #aae1c6;
  width: 7%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="8"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="8"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="8"]::after {
  background: #aae1c6;
  width: 8%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="9"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="9"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="9"]::after {
  background: #aae1c6;
  width: 9%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="10"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="10"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="10"]::after {
  background: #aae1c6;
  width: 10%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="11"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="11"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="11"]::after {
  background: #aae1c6;
  width: 11%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="12"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="12"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="12"]::after {
  background: #aae1c6;
  width: 12%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="13"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="13"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="13"]::after {
  background: #aae1c6;
  width: 13%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="14"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="14"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="14"]::after {
  background: #aae1c6;
  width: 14%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="15"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="15"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="15"]::after {
  background: #aae1c6;
  width: 15%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="16"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="16"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="16"]::after {
  background: #aae1c6;
  width: 16%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="17"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="17"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="17"]::after {
  background: #aae1c6;
  width: 17%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="18"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="18"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="18"]::after {
  background: #aae1c6;
  width: 18%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="19"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="19"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="19"]::after {
  background: #aae1c6;
  width: 19%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="20"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="20"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="20"]::after {
  background: #aae1c6;
  width: 20%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="21"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="21"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="21"]::after {
  background: #aae1c6;
  width: 21%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="22"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="22"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="22"]::after {
  background: #aae1c6;
  width: 22%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="23"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="23"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="23"]::after {
  background: #aae1c6;
  width: 23%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="24"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="24"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="24"]::after {
  background: #aae1c6;
  width: 24%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="25"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="25"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="25"]::after {
  background: #aae1c6;
  width: 25%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="26"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="26"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="26"]::after {
  background: #aae1c6;
  width: 26%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="27"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="27"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="27"]::after {
  background: #aae1c6;
  width: 27%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="28"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="28"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="28"]::after {
  background: #aae1c6;
  width: 28%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="29"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="29"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="29"]::after {
  background: #aae1c6;
  width: 29%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="30"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="30"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="30"]::after {
  background: #aae1c6;
  width: 30%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="31"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="31"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="31"]::after {
  background: #aae1c6;
  width: 31%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="32"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="32"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="32"]::after {
  background: #aae1c6;
  width: 32%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="33"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="33"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="33"]::after {
  background: #aae1c6;
  width: 33%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="34"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="34"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="34"]::after {
  background: #aae1c6;
  width: 34%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="35"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="35"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="35"]::after {
  background: #aae1c6;
  width: 35%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="36"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="36"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="36"]::after {
  background: #aae1c6;
  width: 36%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="37"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="37"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="37"]::after {
  background: #aae1c6;
  width: 37%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="38"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="38"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="38"]::after {
  background: #aae1c6;
  width: 38%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="39"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="39"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="39"]::after {
  background: #aae1c6;
  width: 39%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="40"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="40"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="40"]::after {
  background: #aae1c6;
  width: 40%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="41"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="41"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="41"]::after {
  background: #aae1c6;
  width: 41%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="42"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="42"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="42"]::after {
  background: #aae1c6;
  width: 42%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="43"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="43"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="43"]::after {
  background: #aae1c6;
  width: 43%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="44"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="44"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="44"]::after {
  background: #aae1c6;
  width: 44%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="45"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="45"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="45"]::after {
  background: #aae1c6;
  width: 45%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="46"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="46"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="46"]::after {
  background: #aae1c6;
  width: 46%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="47"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="47"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="47"]::after {
  background: #aae1c6;
  width: 47%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="48"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="48"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="48"]::after {
  background: #aae1c6;
  width: 48%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="49"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="49"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="49"]::after {
  background: #aae1c6;
  width: 49%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="50"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="50"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="50"]::after {
  background: #aae1c6;
  width: 50%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="51"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="51"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="51"]::after {
  background: #aae1c6;
  width: 51%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="52"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="52"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="52"]::after {
  background: #aae1c6;
  width: 52%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="53"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="53"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="53"]::after {
  background: #aae1c6;
  width: 53%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="54"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="54"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="54"]::after {
  background: #aae1c6;
  width: 54%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="55"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="55"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="55"]::after {
  background: #aae1c6;
  width: 55%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="56"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="56"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="56"]::after {
  background: #aae1c6;
  width: 56%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="57"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="57"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="57"]::after {
  background: #aae1c6;
  width: 57%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="58"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="58"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="58"]::after {
  background: #aae1c6;
  width: 58%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="59"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="59"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="59"]::after {
  background: #aae1c6;
  width: 59%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="60"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="60"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="60"]::after {
  background: #aae1c6;
  width: 60%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="61"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="61"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="61"]::after {
  background: #aae1c6;
  width: 61%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="62"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="62"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="62"]::after {
  background: #aae1c6;
  width: 62%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="63"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="63"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="63"]::after {
  background: #aae1c6;
  width: 63%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="64"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="64"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="64"]::after {
  background: #aae1c6;
  width: 64%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="65"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="65"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="65"]::after {
  background: #aae1c6;
  width: 65%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="66"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="66"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="66"]::after {
  background: #aae1c6;
  width: 66%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="67"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="67"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="67"]::after {
  background: #aae1c6;
  width: 67%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="68"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="68"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="68"]::after {
  background: #aae1c6;
  width: 68%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="69"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="69"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="69"]::after {
  background: #aae1c6;
  width: 69%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="70"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="70"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="70"]::after {
  background: #aae1c6;
  width: 70%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="71"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="71"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="71"]::after {
  background: #aae1c6;
  width: 71%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="72"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="72"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="72"]::after {
  background: #aae1c6;
  width: 72%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="73"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="73"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="73"]::after {
  background: #aae1c6;
  width: 73%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="74"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="74"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="74"]::after {
  background: #aae1c6;
  width: 74%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="75"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="75"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="75"]::after {
  background: #aae1c6;
  width: 75%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="76"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="76"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="76"]::after {
  background: #aae1c6;
  width: 76%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="77"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="77"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="77"]::after {
  background: #aae1c6;
  width: 77%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="78"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="78"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="78"]::after {
  background: #aae1c6;
  width: 78%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="79"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="79"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="79"]::after {
  background: #aae1c6;
  width: 79%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="80"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="80"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="80"]::after {
  background: #aae1c6;
  width: 80%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="81"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="81"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="81"]::after {
  background: #aae1c6;
  width: 81%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="82"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="82"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="82"]::after {
  background: #aae1c6;
  width: 82%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="83"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="83"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="83"]::after {
  background: #aae1c6;
  width: 83%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="84"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="84"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="84"]::after {
  background: #aae1c6;
  width: 84%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="85"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="85"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="85"]::after {
  background: #aae1c6;
  width: 85%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="86"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="86"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="86"]::after {
  background: #aae1c6;
  width: 86%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="87"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="87"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="87"]::after {
  background: #aae1c6;
  width: 87%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="88"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="88"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="88"]::after {
  background: #aae1c6;
  width: 88%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="89"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="89"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="89"]::after {
  background: #aae1c6;
  width: 89%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="90"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="90"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="90"]::after {
  background: #aae1c6;
  width: 90%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="91"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="91"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="91"]::after {
  background: #aae1c6;
  width: 91%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="92"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="92"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="92"]::after {
  background: #aae1c6;
  width: 92%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="93"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="93"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="93"]::after {
  background: #aae1c6;
  width: 93%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="94"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="94"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="94"]::after {
  background: #aae1c6;
  width: 94%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="95"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="95"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="95"]::after {
  background: #aae1c6;
  width: 95%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="96"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="96"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="96"]::after {
  background: #aae1c6;
  width: 96%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="97"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="97"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="97"]::after {
  background: #aae1c6;
  width: 97%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="98"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="98"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="98"]::after {
  background: #aae1c6;
  width: 98%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="99"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="99"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="99"]::after {
  background: #aae1c6;
  width: 99%;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="100"]:hover, .button--progress<?php echo  "$showrow2[1]";?>[data-progress="100"]:focus {
  cursor: default;
}

.button--progress<?php echo  "$showrow2[1]";?>[data-progress="100"]::after {
  background: #aae1c6;
  width: 100%;
}

          </style>     
                
                               
                                    
       </div>
    </div>
  
                                           
                                         
        

                                            
                                          <?php } ?>

                                
</div>
 </div>



<?php
}

?>
<script>
$(document).ready(function(){
  $(".quantity-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=actual1]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=actual1]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

  $(".standard-input-up").click(function(){
    var inpt = $(this).parents(".custom-standard-input").find("[name=standard1]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);

  });


  $(".standard-input-down").click(function(){
    var inpt = $(this).parents(".custom-standard-input").find("[name=standard1]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    
    inpt.val(val-1);
  });

});

  </script>  
             <script>
      $(function () {

        $('.toolsdf11').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm1/tools/standards.php',
            data: $('#toolstna11').serialize(),
            success: function () {
              alert('Successfully Defined');
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