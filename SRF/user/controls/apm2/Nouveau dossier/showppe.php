<!DOCTYPE html>
<html>
<head>
  
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
        google: {
          "families": ["Poppins:300,400,500,600,700"]
        },
        active: function() {
          sessionStorage.fonts = true;
        }
      });
    </script>

    <!--end::Fonts -->

    <!--begin:: Global Mandatory Vendors -->
    
</head>


<body>

<?php

require('zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_ppe_apm2 WHERE wppe_owner='12'");
$showr2->execute();
if ($showr2===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res2=$showr2->get_result();
?>
 <div id="apm2">



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

                                            if ($showrow2[6]<=1) {
                                          ?>
<div class="kt-portlet__body">
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                        </div>
                        <div class="carousel-inner"> 
                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="../assets/media/blog/1.jpg" class="kt-widget-14__image--landscape" alt="" title=""></a>
                                </div>
                                <div class="kt-widget-14__content">
                                  <a href="#">
                                    <h3 class="kt-widget-14__title"><?php echo  "$showrow2[2]";?></h3>
                                  </a>
                                  <div class="kt-widget-14__desc">
                                    <img src="" alt="" width="100">
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget-14__data">
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title kt-font-danger"><input type="number" value="<?php echo  "$showrow2[6]";?>" style="background-color: transparent; width: 20%; border: 0px transparent; text-align: center; color: #fd397a; " name=""></div>
                                  <div class="kt-widget-14__desc">actual</div>
                                  <button type="button" class="btn btn-outline-hover-success btn-sm btn-icon"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-minus"></i></button>
                                </div>
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title"><?php echo ($showrow2[7]-$showrow2[6]);?></div>
                                  <div class="kt-widget-14__desc">Gap</div>
                                </div>

                              </div>
                            </div>
                            <div class="kt-widget-14__foot">
                              <div class="kt-widget-14__foot-info">
                                <div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
                                  10 May, 2019
                                </div>
                                <div class="kt-widget-14__foot-desc">Last Update</div>
                              </div>
                              <div class="kt-widget-14__foot-toolbar">
                                
                                <a href="#" class="btn btn-success btn-sm btn-bold btn-upper">Save</a>
                              </div>
                            </div>
                          </div>
                                   
       </div>
    </div>
  </div>
                                           
                                            <?php  }  
                                            if ($showrow2[6]<=5 && $showrow2[6]>=2) {
                                          ?>
                                         
                        <div class="kt-portlet__body">
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                        </div>
                        <div class="carousel-inner"> 

                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="assets/media/blog/1.jpg" class="kt-widget-14__image--landscape" alt="" title=""></a>
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
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title kt-font-warning"><input type="number" value="<?php echo  "$showrow2[6]";?>" style="background-color: transparent; width: 20%; border: 0px transparent; text-align: center; color: #ffb822; " name=""></div>
                                  <div class="kt-widget-14__desc">actual</div>
                                  <button type="button" class="btn btn-outline-hover-success btn-sm btn-icon"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-minus"></i></button>
                                </div>
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title"><?php echo ($showrow2[7]-$showrow2[6]);?></div>
                                  <div class="kt-widget-14__desc">Gap</div>
                                </div>

                              </div>
                            </div>
                            <div class="kt-widget-14__foot">
                              <div class="kt-widget-14__foot-info">
                                <div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
                                  10 May, 2019
                                </div>
                                <div class="kt-widget-14__foot-desc">Last Update</div>
                              </div>
                              <div class="kt-widget-14__foot-toolbar">
                                
                                <a href="#" class="btn btn-success btn-sm btn-bold btn-upper">Save</a>
                              </div>
                            </div>
                          </div>
                                    
       </div>
    </div>
  </div>
                                           
                                            <?php  }
                                              if ($showrow2[6]>5 && $showrow2<10) {
                                          ?>
                        <div class="kt-portlet__body">
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                        </div>
                        <div class="carousel-inner"> 

                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="assets/media/blog/1.jpg" class="kt-widget-14__image--landscape" alt="" title=""></a>
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
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title kt-font-brand"><input type="number" value="<?php echo  "$showrow2[6]";?>" style="background-color: transparent; width: 20%; border: 0px transparent; text-align: center; color: #5d78ff; " name=""></div>
                                  <div class="kt-widget-14__desc">actual</div>
                                  <button type="button" class="btn btn-outline-hover-success btn-sm btn-icon"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-minus"></i></button>
                                </div>
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title"><?php echo ($showrow2[7]-$showrow2[6]);?></div>
                                  <div class="kt-widget-14__desc">Gap</div>
                                </div>

                              </div>
                            </div>
                            <div class="kt-widget-14__foot">
                              <div class="kt-widget-14__foot-info">
                                <div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
                                  10 May, 2019
                                </div>
                                <div class="kt-widget-14__foot-desc">Last Update</div>
                              </div>
                              <div class="kt-widget-14__foot-toolbar">
                                
                                <a href="#" class="btn btn-success btn-sm btn-bold btn-upper">Save</a>
                              </div>
                            </div>
                          </div>
                                    
       </div>
    </div>
  </div>

                                            <?php }
                                              if ($showrow2[6]>=10) {
                                          ?>
                     <div class="kt-portlet__body">
                      <div id="kt-widget-slider-14-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
                        <div class="kt-slider__head">
                          <div class="kt-slider__label"></div>
                        </div>
                        <div class="carousel-inner"> 

                          <div class="carousel-item active">
                            <div class="kt-widget-14__body">
                              <div class="kt-widget-14__product">
                                <div class="kt-widget-14__thumb">
                                  <a href="#"><img src="assets/media/blog/1.jpg" class="kt-widget-14__image--landscape" alt="" title=""></a>
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
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title kt-font-brand"><?php echo  "$showrow2[7]";?></div>
                                  <div class="kt-widget-14__desc">Standard</div>
                                </div>
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title kt-font-success"><input type="number" value="<?php echo  "$showrow2[6]";?>" style="background-color: transparent; width: 20%; border: 0px transparent; text-align: center; color: #1dc9b7; " name=""></div>
                                  <div class="kt-widget-14__desc">actual</div>
                                  <button type="button" class="btn btn-outline-hover-success btn-sm btn-icon"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-minus"></i></button>
                                </div>
                                <div class="kt-widget-14__info">
                                  <div class="kt-widget-14__info-title"><?php echo ($showrow2[7]-$showrow2[6]);?></div>
                                  <div class="kt-widget-14__desc">Gap</div>
                                </div>

                              </div>
                            </div>
                            <div class="kt-widget-14__foot">
                              <div class="kt-widget-14__foot-info">
                                <div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
                                  10 May, 2019
                                </div>
                                <div class="kt-widget-14__foot-desc">Last Update</div>
                              </div>
                              <div class="kt-widget-14__foot-toolbar">
                                
                                <a href="#" class="btn btn-success btn-sm btn-bold btn-upper">Save</a>
                              </div>
                            </div>
                          </div>
                                    
       </div>
    </div>
  </div>

                                            <?php } ?>
                                          <?php } ?>

                                

 </div>

<?php
}

?>

  </div>





</body>
</html>