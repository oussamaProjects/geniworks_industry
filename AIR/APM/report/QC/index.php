<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin')||($_SESSION['uat']=='user')||($_SESSION['uat']=='owner'))) 
{


// if($_SESSION['uat']=='user'){
//    session_destroy();

// echo "<meta http-equiv='refresh' content='0;login.php'>";
//}
?>


<!DOCTYPE html>
<html>
<head>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/default-skin/default-skin.css">

<meta charset="utf-8" />
        <title>QC - Assets Inspection Record | GENIWORKS</title>
        <meta name="description" content="Report AIR - MyDADJE - GENIWORKS INC">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!--begin::Fonts -->
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

        <!--begin::Page Custom Styles(used by this page) -->
        <link href="../../../../assets/css/demo1/pages/custom/general/blog/grid.css" rel="stylesheet" type="text/css" />

        <!--end::Page Custom Styles -->

        <!--begin:: Global Mandatory Vendors -->
        <link href="../../../../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

        <!--end:: Global Mandatory Vendors -->

        <!--begin:: Global Optional Vendors -->
        <link href="../../../../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

        <!--end:: Global Optional Vendors -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="../../../../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="../../../../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
        <link href="../../../../assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="../../controls/img/favicon-32x32.png" />

<script type="text/javascript">
    

$(document).ready(function(){

 $('.post').hide();



}); 
</script>

<style>

  .notif{
    text-align: center;
    color: white;
    font-size: 10px;
    align-content: center;
    font-weight: bolder;
    position:absolute;

    width: 15px;
    height: 15px;
    margin-right: 0px;
    border-radius: 100px;
    background-color: #fd397a;
    animation: pulse 0.75s infinite;
 }


@-webkit-keyframes pulse {
  0% {
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
  }
  70% {
    -moz-transform: scale(110);
    -ms-transform: scale(110);
    -webkit-transform: scale(110);
    transform: scale(110);
    box-shadow:  100px rgba(90, 153, 212, 0);
  }
  100% {
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
  }
}

    .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active, .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #00A1db;
    border-color: #00A1db;
}



.toggles {
  width: 800px;
  margin: auto;
  display: block;
  clear: both;
  overflow: hidden;
}


.btn:active{
  background-color: #0087b8;

}
.posts div {
 
}


.countdown-label {
  font: thin 15px Arial, sans-serif;
    color: #65584c;
    text-align: center;
    text-transform: uppercase;
    display: inline-block;
  letter-spacing: 2px;
  margin-top: 9px
}
#countdown{
box-shadow: 0 1px 2px 0 rgba(1, 1, 1, 0.4);


    text-align: center;
background: #f1f1f1;

    border-radius: 5px;

    margin: auto;

}



#countdown #tiles{
  color: #fff;
    position: relative;
    z-index: 1;
text-shadow: 1px 1px 0px #ccc;
    display: inline-block;
  font-family: Arial, sans-serif;
    text-align: center;
  
  padding: 20px;
  border-radius: 5px 5px 0 0;
  font-size: 48px;
  font-weight: thin;
  display: block;
    
}

.color-full {
  background: #;
}
.color-half {
  background: #ebc85d;
}
.color-empty {
  background: #e5554e;
}

#countdown #tiles > span{
    width: 70px;
    max-width: 70px;

    padding: 18px 0;
    position: relative;
}





#countdown .labels{
    width: 100%;
    height: 25px;
    text-align: center;
    position: absolute;
    bottom: 8px;
}

#countdown .labels li{
    width: 102px;
    font: bold 15px 'Droid Sans', Arial, sans-serif;
    color: #f47321;
    text-shadow: 1px 1px 0px #000;
    text-align: center;
    text-transform: uppercase;
    display: inline-block;
}

.sand {
  animation-name: sand;
  animation-duration: 10s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

.sand--flipped {
  animation-delay: -5s;
}

.pour {
  fill: #E0AD2B;
  animation: flip 10s infinite;
  transform-origin: 50% 50%;
}

svg {
  animation: flip 10s infinite;
}

@keyframes sand {
  0% {
    y: 20;
  }
  100% {
    y: 4;
  }
}
@keyframes flip {
  0% {
    transform: rotate(0deg);
  }
  49% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(180deg);
  }
  99% {
    transform: rotate(180deg);
  }
}

label, input {
  font-size: 0.75em;
  color: #888;
  margin: 1em 0;
  justify-self: flex-end;
}

#app {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width: 100%;

}

.controls, .display {
  height: 50%;
  width: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.alertforhigh{
  display: none;

}
@media (min-width: 1000px){


.alertforhigh{
  display: none;
margin:30px; position: fixed; float: left; left: 0;
}
}

</style>


</head>
<body onload="hola(11);" class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="#">
                    <img alt="Logo" src="../../controls/img/favicon-32x32.png" />
                </a>
            </div>
    
        </div>

        <!-- end:: Header Mobile -->

        <!-- begin:: Root -->
        <div class="kt-grid kt-grid--hor kt-grid--root">

            <!-- begin:: Page -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">



                <!-- end:: Aside -->

                <!-- begin:: Wrapper -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                        <!-- begin:: Header Menu -->
                        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
                                
                            </div>
                        </div>

                        <div class="kt-header__topbar">

                            <div class="kt-header__topbar-item dropdown">
                              
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
                                    <form>
                                        
                                    </form>
                                </div>
                            </div>
                            <?php include("controls/notifs.php");?>
                            
                            <?php include("controls/userside.php");?>

                            
                        </div>
                    </div>

                    <!-- end:: Header -->
                    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
         




                        <!-- begin:: Subheader -->
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">

                            <div class="kt-subheader__main">
                                <h3 class="kt-subheader__title">Assets Inspection Report</h3>
                                <span class="kt-subheader__separator kt-hidden"></span>
                                <div class="kt-subheader__breadcrumbs">
                                    <a href="" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                    
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        Reports </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        APM </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                   

                                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                                </div>

                             
                                            
                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style type="text/css">

/** PAGE STYLES **/
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.timerr {
  width: 5em;
  height: 5em;
  display: flex;
  align-items: center;
  justify-content: center;
  border: .5em solid #fff;
  border-radius: 100%;
  position: relative;
}
.timerr:before, .timerr:after {
  content: '';
  display: block;
  position: absolute;
}
.timerr:before {
  height: .5em;
  width: .5em;
  top: -1.48em;
  border-radius: 100%;
  left: 50%;
  margin-left: -.75em;
  background: #1BB287;
  border: .5em solid #fff;
}
.timerr:after {
  width: 1em;
  height: 1em;
  background: #fff;
  right: 0;
  top: -.25em;
  border-radius: 100%;
}

.handd {
  background: #1BB287;
  height: 1em;
  width: 1em;
  position: relative;
  display: flex;
  justify-content: center;
  border-radius: 100%;
  border: 1.4em solid #fff;
}
.handd:before, .handd:after {
  content: '';
  display: block;
  position: relative;
}
.handd:before {
  width: .325em;
  height: 1.5em;
  top: -1.35em;
  background: #;
  animation: countdown 2s linear infinite;
  transform-origin: 50% 125%;
}

@keyframes countdown {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

</style>

<!-- 
  check it out on dribbble!
  http://dribbble.com/shots/1180821-Time-lapse-Vine?list=popular&offset=188
-->

              
                                                
                                        <div class="kt-separator kt-separator--space-sm kt-separator--border-dashed"></div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="btn-group" role="group" aria-label="Medium group">
                                                        <button type="button" class="btn btn-secondary active" onclick=" QCl()">QC</button>
                                                        <button type="button" class="btn btn-outline-secondary" onclick=" RTGl()">RTG</button>
                                                        <button type="button" class="btn btn-outline-secondary" onclick=" YGl()">YARDS & GROUNDS</button>
                                                        <!--<button type="button" class="btn btn-outline-secondary" onclick=" dbl()"><i class="flaticon2-shelter"></i>Dashboard</button>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                   
                                                </div>
                                            </div>
                                                    
<script>
function QCl()
{
     location.href = "../QC/";
} 
function RTGl()
{
     location.href = "../RTG/";
} 
function YGl()
{
     location.href = "../YARDSGROUNDS/";
} 
function dbl()
{
     location.href = "../../../APM/";
} 
</script>
                                                
                                          
                                      
                            </div>
                        </div> 
                        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                            <div class="row">
                                 <div class="col-md-12">
                                    <div class="kt-portlet kt-portlet--contain" style="background-color: transparent;">
                                        <div class="kt-blog-grid">
<?php
$selectast=$cdb->prepare("SELECT * FROM asset_apm WHERE ast_internal_id='QC'");
$selectast->execute();
if ($selectast===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}

else{
  $resast=$selectast->get_result();
while ($showast=$resast->fetch_row()) {
                                


require('../../controls/zdze8efzedzdeezd/de5.php');
 $ifhigh=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner  ='11' AND acij_asset='QC' AND acij_dirt_degree='high' AND acij_subasset_id='$showast[4]' AND acij_call NOT LIKE 'done'");
$ifhigh->execute();
if ($ifhigh===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $reshigh=$ifhigh->get_result();
  if (mysqli_num_rows($reshigh)==0) { ?>
<a href="index.php?qcnum=<?php echo $showast[4];?>" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" <?php echo $showast[4];?>()"><?php echo $showast[4];?></a> 


    <?php
}
while ($showhigh=$reshigh->fetch_row()) {
                                ?>
                                        <a href="index.php?qcnum=<?php echo $showast[4];?>" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" <?php echo $showast[4];?>()"><?php echo $showast[4];?></a> <span class="notif" style="margin-left: -15px;">1</span> 
                                    <?php }}?>
                                                        
                                          <?php }}?>             
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="posts">
                              <div class="row">
 <?php

 if (isset($_GET['qcnum'])) {
     $qcnum=$_GET['qcnum'];
 
require('../../controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner  ='11' AND acij_asset='QC' AND acij_subasset_id='$qcnum' AND acij_clean_done NOT LIKE 'archived'");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}

else{
  $respsrf=$showpsrf->get_result();
?>

<style>
 
  .demo-gallery a {
      display: block;
      float:left;
      margin: 10px 5px 10px 5px;
      line-height: 0;
  }
  
  
  
  
  
  .demo-gallery img {

      border: 0;
      
  }
  
  .demo-gallery figure {
      display: none;
  }











  .image-container {

}
.image-container img {
  position: absolute;
  animation-name: multiple-image-crossfade;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
  animation-duration: 0.35s;
  width: 90%;
}
.image-container img:nth-of-type(4) {
  animation-delay: 0.3s;
}
.image-container img:nth-of-type(3) {
  animation-delay: 0.2s;
}
.image-container img:nth-of-type(2) {
  animation-delay: 0.1s;
}
.image-container img:nth-of-type(1) {
  animation-delay: 0;
}

@keyframes multiple-image-crossfade {
  0% {
    opacity: 1;
  }
  17% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  82% {
    opacity: 0;
  }
  93% {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}



</style>

  <?php
  if (mysqli_num_rows($respsrf)==0) { 

  
    echo "<center style='padding-left:10px;'>No Data for <strong>".$qcnum."</strong></center><br><br>";
  ?>

<div class="modal fade" id="nodataModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-ml">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="kt-portlet kt-portlet--height-fluid">
                                                                    <form class="asigninsp<?php echo $qcnum;?> kt-form kt-form--label-right">
                                                                      <input type="hidden" name="idqc" value="<?php echo $qcnum;?>">
                                                                      <input type="hidden" name="idowner" value="<?php echo $_SESSION['nmu'];?>">
                                                                      <span>Sorry No Data!<strong> Please asign an Inspection For <?php echo $qcnum;?></strong>. <button style="padding-left: 5px;" type="submit" name="asignbtn" class="btn btn-warning btn-sm asigninsp " aria-label="Close"><i class="fa fa-bell"></i>Asign</button>
                                                                    </form>&nbsp;
                                                                  </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<script type="text/javascript">
    $('.asigninsp<?php echo $qcnum;?>').submit(function(e){
    var url = "controls/asigninsp.php"; 
    var data = $(this).serialize(); 
    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Thanks! <?php echo $qcnum;?> asigned.");
       }
     });
   e.preventDefault();
});
</script>

<?php
  }
  ?>
<div class="toggles col-md-12" style="margin-bottom: 20px;">
    <?php
    require('../../controls/zdze8efzedzdeezd/de5.php');
$selectsub=$cdb->prepare("SELECT * FROM sub_asset");
$selectsub->execute();
if ($selectsub===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resub=$selectsub->get_result();
  ?>
 
  <?php
  while ($showsub=$resub->fetch_row()) {
                                ?>
                           <button class=" btn btn-brand btn-sm" id="<?php echo $showsub[1]?>" style="margin: 2px;"><?php echo $showsub[1]?></button>
                           <?php

 $ifhigh=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner  ='11' AND acij_asset='QC' AND acij_subasset_id='$qcnum' AND acij_clean_done NOT LIKE 'archived' AND acij_dirt_degree='high' AND acij_sub_asset='$showsub[1]' AND acij_call NOT LIKE 'done'");
$ifhigh->execute();
if ($ifhigh===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}

else{
  $reshigh=$ifhigh->get_result();
while ($showhigh=$reshigh->fetch_row()) {
                                ?>
                                        <span class="notif" style="margin-left: -15px;">1</span> 
                                    <?php }}?>
                                  
<?php }
} ?>
</div>


<?php while ($showasset=$respsrf->fetch_row()) {
                                ?>
    <?php
if ($showasset[7]=="done") {


 $sql2 = $cdb->prepare("UPDATE asset_clean_inspection SET `acij_clean_done` = 'archived' WHERE acij_id=$showasset[0]");

}
?>

                         <?php
                         if (($showasset[10]=='high')&&($showasset[7]!='done')) {?>
                            <div class="col-lg-2 alertforhigh" style="margin:5px; position: fixed; float: left; left: 0;">
                            <div class="alert alert-light alert-elevate" role="alert">
                            <div class="alert-icon"><i class="flaticon-danger kt-font-danger"></i></div>
                                <div class="alert-text">
                                    <strong><?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?></strong>  Marks As <span class=" kt-font-danger" style="font-weight: 900; width: 90px; font-size: 12px;  text-align: center;">High</span>; Go Check.
                                </div>
                            </div>
                            </div>
                            <?php
                        }?>
                         <?php
                         if (($showasset[10]=='high')&&($showasset[7]!='done')) {?>
<style type="text/css">

</style>
                       <?php  }?>
                                <div class="<?php echo $showasset[3];?> post col-md-4" style="display: none">
                                    <div class="kt-portlet kt-portlet--contain">
                                        <div class="kt-blog-grid">
                                            <div class="kt-blog-grid__head">
                                                <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="3">
                                                    <?php include("afterbefore.php");?>
                                                    <div class="container">
                                                    
                                                    
                                                    <figure><h2 class="kt-blog-grid__title">
                                                        <?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
                                                    </h2>
                                                    <div class="kt-blog-grid__content">
                                                        <?php
                                                        if ($showasset[6]=='1') {
                                                            ?>
                                                                <span style="color: #00A1db;">Status :</span> <span style="color: #1dc9b7;">Clean</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Nothing To Report

                                                            <?php
                                                        }

                                                        if ($showasset[6]=='') {
                                                            ?>
                                                                <span style="color: #00A1db;">Status :</span> <span style="color: #ef1f41;">Requires Cleaning</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Call GENIWORKS

                                                            <?php
                                                        }

                                                        ?>

                                                    
                                                    </div></figure>
        


                                            </div>

                                            <div class="kt-portlet__body">
                                                <div class="kt-blog-grid__body">
                                                    
                                                    <h2 class="kt-blog-grid__title">
                                                        <?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> <?php
                    if ($showasset[10]=='') {
                                                            ?>
                                                            <span class="badge badge-secondary" style="width: 110px; font-size: 12px; text-align: center;">Not specified</span>
                                                            <?php
                                                            }
                                                            if ($showasset[10]=='low') {
                                                            ?>
                                                            <span class="badge badge-secondary"style="width: 90px; font-size: 12px;  text-align: center;" >Low</span>
                                                            <?php
                                                            }
                                                            if ($showasset[10]=='medium') {
                                                            ?>
                                                            <span class="badge badge-warning" style="width: 90px; font-size: 12px; text-align: center;">Medium</span>
                                                            <?php
                                                            }
                                                            if ($showasset[10]=='high') {
                                                            ?>
                                                            <span class="badge badge-danger" style="width: 90px; font-size: 12px;  text-align: center;">High</span>
                                                            <?php
                                                            }
                                                            ?>
                                                    </h2>

                                                    <div class="kt-blog-grid__content">
                                                        <?php
                                                        if (($showasset[6]=='1')||($showasset[7]=='done')) {
                                                            ?>
                                                                <span >Status :</span> <span style="font-weight: 700; color: #1dc9b7;">Clean</span><br>
                                                                <span >Action :</span><span style=" color: #1dc9b7;"> Nothing To Report</span>

                                                            <?php
                                                        }

                                                        if (($showasset[6]=='')&&($showasset[7]=='1')) {
                                                            ?>
                                                                <span >Status :</span> <span style="color: #ef1f41; font-weight: 700;">Requires Cleaning</span><br>
                                                                <span >Action :</span ><span style="color: #00A1db; "> Call GENIWORKS</span>

                                                            <?php
                                                        }

                                                        if ($showasset[7]=='cancel') {
                                                            ?>
                                                                <span >Status :</span> <span style="color: #; font-weight: 700;">Canceled</span><br>
                                                             
                                                            <?php
                                                        }

                                                         if (($showasset[6]=='')&&($showasset[7]=='clean') ){
                                                            ?>
                                                                <span >Status :</span> <span style="color: #00A1db; font-weight: 700;">In process</span><br>
                                                             
                                                            <?php
                                                        }
                                                        
                                                        if (($showasset[6]=='')&&($showasset[7]=='order')) {
                                                            ?>
                                                                <span >Status :</span> <span style="color: #ef1f41; font-weight: 700;">Requires Cleaning</span><br>
                                                                <span >Action :</span ><span style="color: #00A1db; "> Call GENIWORKS </span><br>
                                                                <span class="badge badge-info">Ordered</span>

                                                            <?php
                                                        }

                                                        ?>

                                                    
                                                    </div>
                                                    <?php  if (($showasset[6]=='')&&($showasset[7]=='clean') ){?>

    <div class="row">
        <div class="col-lg-12">
      
                <div class="image-container">
    <img src="controls/img/pressure.png" />
    <img src="controls/img/pressure1.png" />
    <img src="controls/img/pressure2.png" />
    <img src="controls/img/pressure3.png" />
</div>
            
        </div>
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php }
if (($showasset[6]=='')&&($showasset[7]=='done') ){
$selectafter=$cdb->prepare("SELECT * FROM after_inspection WHERE afin_inspection_id='$showasset[0]'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                ?>
                                                          

      <?php while ($showafter=$resafter->fetch_row()) {
        ?>
        <div class="containerr">

   <div class="comparison-slider-wrapper">
    <div class="comparison-slider">
     <img src="controls/img/after/<?php echo $showafter[2]?>" alt="after">
 </div>
</div>
</div>
    <?php }}}?>








                                                    <div style="text-align: right;" class="kt-blog-grid__date">
                                                        Inspected On <?php echo $showasset[8];?><br>
                                                        By <?php echo $showasset[9];?><br>
                                                        <?php
                                                        if ((($showasset[6]=='')&&($showasset[7]=='order'))||(($showasset[6]=='')&&($showasset[7]=='clean'))) {
                                                            ?>
                                                               <span style="color: #00A1db; "> Ordered On <?php echo $showasset[11];?></span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>

              
                                            </div>
                                      

                                    </div>
                                </div>
                                
                                <div class="kt-separator kt-separator--space-lg kt-separator--border-dashed" style="margin: 0;"></div>

                <div class="row" style="padding: 20px;">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small group">
                        <?php 
                        if(($_SESSION['uat']=='admin')||($_SESSION['uat']=='user')){

                        if ($showasset[7]=='done') {
                        ?>

                     
              <?php }
              if ($showasset[7]!='done'){
                        ?>
                <?php 
                  if ($showasset[7]=='order') {
                        ?>
                  <form class="cleaninsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                    <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                  <button type="submit"  name="upclean" class="btn btn-outline-brand btn-sm cleanbtn"><i class="fa fa-undo" style="background-color:#001Adb;"></i>Clean</button></form>&nbsp;

                  <?php }
                  if ($showasset[7]=='clean') {
                        ?>
                         <form class="editinsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                        <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                    <button type="submit"  name="upcdone" class="btn btn-outline-success btn-sm donebtn"><i class="fa fa-check" style="background-color:#1dc9b7; "></i>Done</button>
                  </form>&nbsp;
                     
              <?php }
          }?>
                  <form class="cancelinsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                    <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                  <button type="submit"  name="cancelfun" class="btn btn-outline-secondary btn-sm" ><i class="fa fa-ban"></i>Cancel</button>
                </form>
            <?php }?>
            


                </div>
              </div>
            </div>
     
        <?php 
                        if(($_SESSION['uat']=='owner')){
                            ?>
                            <div class="row" style="padding: 20px;">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small group">
                            <?php
                         if (($showasset[7]=='1')) { ?>
                            
                    <button name="order" id="order<?php echo $showasset[0];?>" class="btn btn-brand btn-sm orderbtn"><i class="fa fa-check" style=""></i>Order</button>
                     
            <?php }
            if (($showasset[7]=='clean')) { ?>

                      <form class="claiminsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                        <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                    <button type="submit"  name="upclaim" class="btn btn-danger btn-sm claimbtn"><i class="fa fa-check" style=""></i>Claim</button>
                  </form>&nbsp;
                  
            <?php }
            if (($showasset[7]=='done')) { ?>

                      <form class="confirminsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                        <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                    <button type="submit"  name="upconfirm" class="btn btn-success btn-sm deliverdbtn"><i class="fa fa-check" style=""></i>Confirm</button>
                  </form>&nbsp;
                  
            <?php }
            if (($showasset[7]=='order')) { ?>
                <form class="claiminsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                        <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                    <button type="submit"  name="upclaim" class="btn btn-danger btn-sm claimbtn"><i class="fa fa-bell" style=""></i>Claim</button>
                  </form>&nbsp;
                     
            <?php }?>
                </div>
              </div>
            </div>



        <?php }?>
    </div>
</div>

                                                    
                                                 
                                                
                                                    <div class="modal fade qczoom<?php echo $showasset[0];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <img src="../../controls/img/assets/<?php echo $showasset[5];?>" alt="" style="width: 100%;">
                                                        </div>
                                                    </div>



 <script>
$(document).ready(function(){
  $("#order<?php echo $showasset[0];?>").click(function(){
    $("#ordermodal<?php echo $showasset[0];?>").modal();
  });
});
</script>



<script type="text/javascript">





  $('.editinsp<?php echo $showasset[0];?>').submit(function(e){
var url = "controls/editinsp.php"; 
    var data = $(this).serialize(); 
    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
            $('#afterpic').modal('show');
   

       }
     });
   e.preventDefault();

            
   

   
});

  $('.cleaninsp<?php echo $showasset[0];?>').submit(function(e){
    var url = "controls/cleaninsp.php"; 
    var data = $(this).serialize(); 
    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Thanks! <?php echo $showasset[4];?> mark as clean.");
       }
     });
   e.preventDefault();
});

  $('.cancelinsp<?php echo $showasset[0];?>').submit(function(e){
    var url = "controls/cancelinsp.php"; 
    var data = $(this).serialize(); 
    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Thanks! <?php echo $showasset[4];?> Canceled.");
       }
     });
   e.preventDefault();
});


  $('.claiminsp<?php echo $showasset[0];?>').submit(function(e){
    var url = "controls/claiminsp.php"; 
    var data = $(this).serialize(); 
    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Your Claim For <?php echo $showasset[4];?> will Handled ASAP.");
       }
     });
   e.preventDefault();
});



$('.confirminsp<?php echo $showasset[0];?>').submit(function(e){
    var url = "controls/confirminsp.php"; 
    var data = $(this).serialize(); 
    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Thanks. <?php echo $showasset[4];?> Clean Status Confirmed.");
       }
     });
   e.preventDefault();
});
</script>
<div class="modal fade " id="afterpic" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-ml">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">After Status Proof</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                 <form action="controls/afterimg.php" enctype="multipart/form-data" class="doneinsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                                                                <div class="modal-body">
                                                                    <div class="form-group row">
                                                    <label for="example-text-input" class="col-6 col-form-label">Before Cleaning</label>
                                                    <div class="col-6">
                                                        <div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle" id="kt_profile_avatar_3">
                                                            <div class="kt-avatar__holder" style="background-image: url(../../controls/img/assets/<?php echo $showasset[5];?>)"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                                    <div class="form-group row">
                                                    <label for="example-text-input" class="col-6 col-form-label">After Cleaning</label>
                                                    <div class="col-6">
                                                        <div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle" id="kt_profile_avatar_4">
                                                            <div class="kt-avatar__holder" style="background-image: url(controls/img/logo-geniworks.png)"></div>
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Change image">
                                                                <i class="fa fa-pen"></i>
                                                                <input type='file' name="afterclean" accept=".png, .jpg, .jpeg" />
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel image">
                                                                <i class="fa fa-times"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                   
                        <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                    <button type="submit"  name="clncdone"  class="btn btn-outline-success btn-sm donebtn"><i class="fa fa-check" style="background-color:#1dc9b7; "></i>Done</button>
                 
                                                                </div>
                                                                 </form>&nbsp;
                                                            </div>
                                                        </div>
                                                    </div>

 <div class="modal fade " id="ordermodal<?php echo $showasset[0];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-ml">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Order Details</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                 
                                                                <div class="modal-body">
                                                                    <div class="form-group row">
                                                    
                                                    <div class="col-6" align="center">
                                                      <button  id="schedulebtn" class="btn btn-outline-brand btn-sm orderbtn"><i class="fa fa-calendar" style=""></i>schedule</button>
                                                    </div>
                                               
                                                    <div class="col-6"  align="center">
                                                      <form class="orderinsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                                                        <input type="hidden" value="Whenever possible" name="whenever">
                                                        <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                                                        <button type="submit"  name="orderbtn" id="orderbtn" class="btn btn-brand btn-sm orderbtn"><i class="fa fa-" style=""></i>Whenever Possible</button>
                                                      </form>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body" id="schedulesect">
                                                  <form class="orderschedule<?php echo $showasset[0];?>" style="width: 100%;">
                        <div class="form-group row">
                         
                          <div class="col-lg-4">
                            <label>Estimated Start</label>
                            <input type="date" name="eststart" class="form-control" placeholder="">
                           
                          </div>
                          <div class="col-lg-4">
                            <label class="">Estimated fisnish</label>
                            <input type="date" name="estfinish" class="form-control" placeholder="">
                          
                          </div>
                          <div class="col-lg-4">
                            <label style="color: transparent;"> order</label>
                            <div class="input-group" style="margin: 1em 0;">
                            <input type="hidden" value="scheduled" name="scheduled">
                        <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                    <button type="submit"  name="orderbtn" class="btn btn-brand orderbtn"><i class="fa fa-bell" style="color: white;"></i>Order</button>
               
              </div>
                            
                          </div>
                          
                        </div>
                         </form>
                      </div>
                                                
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
          <script type="text/javascript">


$(document).ready(function(){
  $("#schedulesect").hide();
  $("#schedulebtn").click(function(){
    $("#schedulesect").show(500);
  });
  $("#orderbtn").click(function(){
    $("#schedulesect").hide(500);
  });
});


      $('.orderinsp<?php echo $showasset[0];?>').submit(function(e){
    var url = "controls/orderinsp.php"; 
    var data = $(this).serialize(); 
    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Thanks! Your Order For <?php echo $showasset[4];?> Has Been Successfully Ordered.");
       }
     });
   e.preventDefault();
});



      $('.orderschedule<?php echo $showasset[0];?>').submit(function(e){
    var url = "controls/orderschedule.php"; 
    var data = $(this).serialize(); 
    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Thanks! Your Order For <?php echo $showasset[4];?> Has Been Successfully Ordered.");
       }
     });
   e.preventDefault();
});
</script>  


<script type="text/javascript">
  $('#button1').on('click', function() {
    $('#openModal').show();
});
</script>
                                                    

<script type="text/javascript">



      $('.doneinsp<?php echo $showasset[0];?>').on('submit',(function(e) {
        e.preventDefault();
         var url = "controls/doneinsp.php"; 
    var data = $(this).serialize(); 
    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Thanks! The WOrk Order For <?php echo $showasset[4];?> Done.");
       }
     });
   e.preventDefault();
    }));


   
</script>   </div>

<?php
}
?>
</div>





<?php
}
}
?>
       






 
                            
                            
                        </div>

                        <!-- end:: Content -->
                    </div>
                </div>

                    <!-- begin:: Footer -->
                    <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" style="bottom: 0;">
                        <div class="kt-footer__copyright">
                            2019&nbsp;&copy;&nbsp;<a href="http://geniworks.com" target="_blank" class="kt-link">GENIWORKS Inc</a>
                        </div>
                        <div class="kt-footer__menu">
                            <a href="http://geniworks.com" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                            
                        </div>
                    </div>

                    <!-- end:: Footer -->
                </div>
                </div>

                <!-- end:: Wrapper -->
            </div>

            <!-- end:: Page -->
        </div>
  <!-- Photoswipe 4.0 html code for javascript interface -->
   
   
        
        <!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<script>
    
    
    (function() {

        var initPhotoSwipeFromDOM = function(gallerySelector) {

            var parseThumbnailElements = function(el) {
                var thumbElements = el.childNodes,
                    numNodes = thumbElements.length,
                    items = [],
                    el,
                    childElements,
                    thumbnailEl,
                    size,
                    item;

                for(var i = 0; i < numNodes; i++) {
                    el = thumbElements[i];

                    // include only element nodes 
                    if(el.nodeType !== 1) {
                      continue;
                    }

                    childElements = el.children;

                    size = el.getAttribute('data-size').split('x');

                    // create slide object
                    item = {
                        src: el.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10),
                        author: el.getAttribute('data-author'),
                        title: el.getAttribute('data-title')
                    };

                    item.el = el; // save link to element for getThumbBoundsFn

                    if(childElements.length > 0) {
                      item.msrc = childElements[0].getAttribute('src'); // thumbnail url
                      if(childElements.length > 1) {
                          item.title = childElements[1].innerHTML; // caption (contents of figure)
                      }
                    }


                    var mediumSrc = el.getAttribute('data-med');
                    if(mediumSrc) {
                        size = el.getAttribute('data-med-size').split('x');
                        // "medium-sized" image
                        item.m = {
                            src: mediumSrc,
                            w: parseInt(size[0], 10),
                            h: parseInt(size[1], 10)
                        };
                    }
                    // original image
                    item.o = {
                        src: item.src,
                        w: item.w,
                        h: item.h
                    };

                    items.push(item);
                }

                return items;
            };

            // find nearest parent element
            var closest = function closest(el, fn) {
                return el && ( fn(el) ? el : closest(el.parentNode, fn) );
            };

            var onThumbnailsClick = function(e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;

                var eTarget = e.target || e.srcElement;

                var clickedListItem = closest(eTarget, function(el) {
                    return el.tagName === 'A';
                });

                if(!clickedListItem) {
                    return;
                }

                var clickedGallery = clickedListItem.parentNode;

                var childNodes = clickedListItem.parentNode.childNodes,
                    numChildNodes = childNodes.length,
                    nodeIndex = 0,
                    index;

                for (var i = 0; i < numChildNodes; i++) {
                    if(childNodes[i].nodeType !== 1) { 
                        continue; 
                    }

                    if(childNodes[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }

                if(index >= 0) {
                    openPhotoSwipe( index, clickedGallery );
                }
                return false;
            };

            var photoswipeParseHash = function() {
                var hash = window.location.hash.substring(1),
                params = {};

                if(hash.length < 5) { // pid=1
                    return params;
                }

                var vars = hash.split('&');
                for (var i = 0; i < vars.length; i++) {
                    if(!vars[i]) {
                        continue;
                    }
                    var pair = vars[i].split('=');  
                    if(pair.length < 2) {
                        continue;
                    }           
                    params[pair[0]] = pair[1];
                }

                if(params.gid) {
                    params.gid = parseInt(params.gid, 10);
                }

                return params;
            };

            var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    gallery,
                    options,
                    items;

                items = parseThumbnailElements(galleryElement);

                // define options (if needed)
                options = {

                    galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                    getThumbBoundsFn: function(index) {
                        // See Options->getThumbBoundsFn section of docs for more info
                        var thumbnail = items[index].el.children[0],
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect(); 

                        return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                    },

                    addCaptionHTMLFn: function(item, captionEl, isFake) {
                        if(!item.title) {
                            captionEl.children[0].innerText = '';
                            return false;
                        }
                        captionEl.children[0].innerHTML = item.title +  '<br/><small>By: ' + item.author + '</small>';
                        return true;
                    }
                    
                };


                if(fromURL) {
                    if(options.galleryPIDs) {
                        // parse real index when custom PIDs are used 
                        // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                        for(var j = 0; j < items.length; j++) {
                            if(items[j].pid == index) {
                                options.index = j;
                                break;
                            }
                        }
                    } else {
                        options.index = parseInt(index, 10) - 1;
                    }
                } else {
                    options.index = parseInt(index, 10);
                }

                // exit if index not found
                if( isNaN(options.index) ) {
                    return;
                }



                var radios = document.getElementsByName('gallery-style');
                for (var i = 0, length = radios.length; i < length; i++) {
                    if (radios[i].checked) {
                        if(radios[i].id == 'radio-all-controls') {

                        } else if(radios[i].id == 'radio-minimal-black') {
                            options.mainClass = 'pswp--minimal--dark';
                            options.barsSize = {top:0,bottom:0};
                            options.captionEl = false;
                            options.fullscreenEl = false;
                            options.shareEl = false;
                            options.bgOpacity = 0.85;
                            options.tapToClose = true;
                            options.tapToToggleControls = false;
                        }
                        break;
                    }
                }

                if(disableAnimation) {
                    options.showAnimationDuration = 0;
                }

                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

                // see: http://photoswipe.com/documentation/responsive-images.html
                var realViewportWidth,
                    useLargeImages = false,
                    firstResize = true,
                    imageSrcWillChange;

                gallery.listen('beforeResize', function() {

                    var dpiRatio = window.devicePixelRatio ? window.devicePixelRatio : 1;
                    dpiRatio = Math.min(dpiRatio, 2.5);
                    realViewportWidth = gallery.viewportSize.x * dpiRatio;


                    if(realViewportWidth >= 1200 || (!gallery.likelyTouchDevice && realViewportWidth > 800) || screen.width > 1200 ) {
                        if(!useLargeImages) {
                            useLargeImages = true;
                            imageSrcWillChange = true;
                        }
                        
                    } else {
                        if(useLargeImages) {
                            useLargeImages = false;
                            imageSrcWillChange = true;
                        }
                    }

                    if(imageSrcWillChange && !firstResize) {
                        gallery.invalidateCurrItems();
                    }

                    if(firstResize) {
                        firstResize = false;
                    }

                    imageSrcWillChange = false;

                });

                gallery.listen('gettingData', function(index, item) {
                    if( useLargeImages ) {
                        item.src = item.o.src;
                        item.w = item.o.w;
                        item.h = item.o.h;
                    } else {
                        item.src = item.m.src;
                        item.w = item.m.w;
                        item.h = item.m.h;
                    }
                });

                gallery.init();
            };

            // select all gallery elements
            var galleryElements = document.querySelectorAll( gallerySelector );
            for(var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i+1);
                galleryElements[i].onclick = onThumbnailsClick;
            }

            // Parse URL and open gallery if it contains #&pid=3&gid=1
            var hashData = photoswipeParseHash();
            if(hashData.pid && hashData.gid) {
                openPhotoSwipe( hashData.pid,  galleryElements[ hashData.gid - 1 ], true, true );
            }
        };

        initPhotoSwipeFromDOM('.demo-gallery');

    })();


    $(function() {
 $('.post').hide();
    $('.toggles button').click(function(){
      var get_id = this.id;
      var get_current = $('.posts .' + get_id);
  
        $('.post').not( get_current ).hide(500);
        get_current.show(500);
    });
    
    



}); 

function dropdown()
{        
    $(".post").style.display="block";
}


 

function pad(n) {
    return (n < 10 ? '0' : '') + n;
}

var app = new Vue({
  el: "#app",
  data: {
    scale: 128 } });



</script>


<script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "metal": "#c4c5d6",
                        "light": "#ffffff",
                        "accent": "#00c5dc",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995",
                        "focus": "#9816f4"
                    },
                    "base": {
                        "label": [
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape": [
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                }
            };
        </script>

        <!-- end::Global Config -->

        <!--begin:: Global Mandatory Vendors -->
        <script src="../../../../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

        <!--end:: Global Mandatory Vendors -->

        <!--begin:: Global Optional Vendors -->
        <script src="../../../../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
        <script src="../../../../assets/js/demo1/pages/crud/forms/widgets/bootstrap-datetimepicker.js" type="text/javascript"></script>

        <!--end:: Global Optional Vendors -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="../../../../assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {

    $('#nodataModal').modal('show');

});
        </script>
</body>
</html>
<?php
}

else {
    header("location:../../../../login.php?msg=3");
}

?>