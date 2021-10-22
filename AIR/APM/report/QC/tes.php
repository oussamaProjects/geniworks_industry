<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin')||($_SESSION['uat']=='user')||($_SESSION['uat']=='owner'))) 
{
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style type="text/css">
* {
  box-sizing: border-box;
}

body {
  background: #eceef1;


}

.wrapper {
  margin: 5em auto;
  max-width: 1000px;
  background-color: #fff;
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.06);
}

.header {
  padding: 30px 30px 0;

}
.header__title {
  margin: 0;

}
.header__subtitle {
  margin: 0;
  
  color: #949fb0;


}

.cards {
  padding: 15px;
  display: flex;
  flex-flow: row wrap;
}

.card {
  margin: 15px;
  width: calc((100% / 3) - 30px);
  transition: all 0.2s ease-in-out;
}
@media screen and (max-width: 991px) {
  .card {
    width: calc((100% / 2) - 30px);
  }
}
@media screen and (max-width: 767px) {
  .card {
    width: 100%;
  }
}
.card:hover .card__inner {

  -webkit-transform: scale(1.05);
          transform: scale(1.05);
}
.card__inner {
  width: 100%;
  padding: 30px;
  position: relative;
  cursor: pointer;

  color: #eceef1;
  

  text-align: center;
  transition: all 0.2s ease-in-out;
}
.card__inner:after {
  transition: all 0.3s ease-in-out;
}
.card__inner .iconf {
  width: 100%;
  margin-top: .25em;
  z-index: 1200;
  color: #303156;

}
.card__expander {
  transition: all 0.2s ease-in-out;

  width: 100%;
  position: relative;
  display: flex;
z-index: 1000;
  color: #eceef1;
 
}
.card__expander .iconf {
  font-size: 1.5em;
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
  z-index: 1200;
  color: #303156;
}
.card__expander .iconf:hover {
  opacity: 0.9;
}
.card.is-collapsed .card__inner:after {
  content: "";
  opacity: 0;
}
.card.is-collapsed .card__expander {
  max-height: 0;
  min-height: 0;
  overflow: hidden;
  margin-top: 0;
  opacity: 0;

}
.card.is-expanded .card__inner {

}
.card.is-expanded .card__inner:after {
  content: "";
  opacity: 1;
  display: block;
  height: 0;
  width: 0;
  position: absolute;
  bottom: -30px;
  left: calc(50% - 15px);
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-bottom: 15px solid #eceef1;
}
.card.is-expanded .card__inner .iconf:before {
  content: "\f115";
}
.card.is-expanded .card__expander {
  max-height: 1000px;
  min-height: 600px;
  overflow: visible;
  margin-top: 30px;
  opacity: 1;

}
.card.is-expanded:hover .card__inner {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.card.is-inactive .card__inner {
  pointer-events: none;
  opacity: 0.0;
}
.card.is-inactive:hover .card__inner {

  -webkit-transform: scale(1);
          transform: scale(1);
}

@media screen and (min-width: 992px) {
  .card:nth-of-type(3n+2) .card__expander {
    margin-left: calc(-100% - 30px);
  }

  .card:nth-of-type(3n+3) .card__expander {
    margin-left: calc(-200% - 60px);
  }

  .card:nth-of-type(3n+4) {
    clear: left;
  }

  .card__expander {
    width: calc(300% + 60px);
  }
}
@media screen and (min-width: 768px) and (max-width: 991px) {
  .card:nth-of-type(2n+2) .card__expander {
    margin-left: calc(-100% - 30px);
  }

  .card:nth-of-type(2n+3) {
    clear: left;
  }

  .card__expander {
    width: calc(200% + 30px);
  }
}

</style>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/default-skin/default-skin.css">

<meta charset="utf-8" />
        <title>QC - Assets Inspection Record | GENIWORKS</title>
        <meta name="description" content="Reoprt AIR - MyDADJE - GENIWORKS INC">
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
</head>
<body>



<div class="wrapper">
<?php 
 if (isset($_GET['qcnum'])) {
     $qcnum=$_GET['qcnum'];
require('../../controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner  ='11' AND acij_asset='QC' AND acij_subasset_id='$qcnum'");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}

else{
  $respsrf=$showpsrf->get_result();
?>


  <div class="header">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                        <!-- begin:: Subheader -->
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                            <div class="kt-subheader__main">
                                <h3 class="kt-subheader__title">Assets Inspection Report</h3>
                                <span class="kt-subheader__separator kt-hidden"></span>
                                <div class="kt-subheader__breadcrumbs">
                                    <a href="../../../AIR/APM/" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                    
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="../../../AIR/APM/" class="kt-subheader__breadcrumbs-link">
                                        Reports </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="../QC/" class="kt-subheader__breadcrumbs-link">
                                        APM </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                   

                                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                                </div>

                             
                                            
                                               
                                                
                                        <div class="kt-separator kt-separator--space-sm kt-separator--border-dashed"></div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="btn-group" role="group" aria-label="Medium group">
                                                        <button type="button" class="btn btn-brand active" style="border-color: #00A1db; background-color: #00A1db" onclick=" QCl()">QC</button>
                                                        <button type="button" class="btn btn-outline-brand" onclick=" RTGl()">RTG</button>
                                                        <button type="button" class="btn btn-outline-brand" onclick=" YGl()">YARDS & GROUNDS</button>
                                                        <button type="button" class="btn btn-outline-brand" onclick=" dbl()"><i class="flaticon2-shelter"></i>Dashboard</button>
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
     location.href = "../QC/tes.php";
} 
function RTGl()
{
     location.href = "../RTG/tes.php";
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
                        <div class="row">
                                 <div class="col-md-12">
                                    <div class="kt-portlet kt-portlet--contain" style="background-color: transparent;">
                                        <div class="kt-blog-grid">
                                                
                                                        <a href="tes.php?qcnum=QC01" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" QC0l()">QC01</a>
                                                        <a href="tes.php?qcnum=QC02" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" QC02()">QC02</a>
                                                        <a href="tes.php?qcnum=QC03" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" QC03()">QC03</a>
                                                        <a href="tes.php?qcnum=QC04" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" QC04()">QC04</a>
                                                        <a href="tes.php?qcnum=QC05" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" QC05()">QC05</a>
                                                        <a href="tes.php?qcnum=QC06" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" QC06()">QC06</a>
                                                        <a href="tes.php?qcnum=QC07" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" QC07()">QC07</a>
                                                        <a href="tes.php?qcnum=QC08" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" QC08()">QC08</a>
                                                        <a href="tes.php?qcnum=QC09" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" QC09()">QC09</a>
                                                        <a href="tes.php?qcnum=QC10" style="margin-bottom: 5px; width: 65px;" class="btn btn-outline-info" onclick=" QC10()">QC10</a>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
  </div>

  <div class="cards">
<?php
  if (mysqli_num_rows($respsrf)==0) { 

  
    echo "<center>No Data for This QC!</center>";
  ?>


<?php
  }
while ($showasset=$respsrf->fetch_row()) {
                                ?>
    <div class=" card [ is-collapsed ] ">
      <div class="card__inner [ js-expander ]">
        <span><img src="../../controls/img/assets/<?php echo $showasset[5];?>" style="width: 100%;"></span>
        <i class="fa fa-folder-o"></i>
      </div>
      <div class="card__expander">
        <i class="iconf fa fa-window-close [ js-collapser ]"></i>
       
        <div class="row">
        	<div class="col-6">
        		<div class="kt-portlet kt-portlet--contain" style="padding: 5%; margin: 5px;">
                                        <div class="kt-blog-grid">
                                            <div class="kt-blog-grid__head">

                                            </div>
                                            <div class="kt-blog-grid__content">
                                            	<div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="3">
                                            	<img src="../../controls/img/assets/<?php echo $showasset[5];?>" style="width: 100%; min-width: 250px;">
                                            </div>
                                            	</div>
                                            	<div class="container">
                                                    
                                               
                                                <div class="kt-blog-grid__body">
                                                    
                                                    <h2 class="kt-blog-grid__title" style="color: #303156;">
                                                        <?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
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
                                                        

                                                        ?>

                                                    
                                                    </div>
                                                    <div style="text-align: right;" class="kt-blog-grid__date">
                                                        Inspected On <?php echo $showasset[8];?><br>
                                                        By <?php echo $showasset[9];?>
                                                    </div>
                                                     <div class="kt-separator kt-separator--space-lg kt-separator--border-dashed" style="margin: 0;"></div>
<?php
                                                        if ($showasset[7]!='done') {
                                                            ?>
                <div class="row" style="padding: 20px;">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small group">
                        <?php 
                        if(($_SESSION['uat']=='admin')||($_SESSION['uat']=='user')){
                        ?>
                      <form class="editinsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                        <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                    <button type="submit"  name="upcdone" class="btn btn-outline-success btn-sm donebtn"><i class="fa fa-check" style="background-color:#1dc9b7; "></i>Done</button>
                  </form>&nbsp;
                  <form class="cleaninsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                    <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                  <button type="submit"  name="upclean" class="btn btn-outline-brand btn-sm cleanbtn"><i class="fa fa-undo" style="background-color:#001Adb;"></i>Clean</button></form>&nbsp;
                  <form class="cancelinsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                    <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                  <button type="submit"  name="cancelfun" class="btn btn-outline-secondary btn-sm" ><i class="fa fa-ban"></i>Cancel</button>
                </form>
            <?php }?>
            <?php 
                        if(($_SESSION['uat']=='owner')){
                         if (($showasset[7]=='1')) { ?>

                    <button type="submit"  name="uporder" id="orderbtn" class="btn btn-brand btn-sm donebtn"><i class="fa fa-check" style=""></i>Order</button>
     
                  
            <?php }
            if (($showasset[7]=='clean')) { ?>

                      <form class="claiminsp<?php echo $showasset[0];?> kt-form kt-form--label-right">
                        <input type="hidden" name="idinsp" value="<?php echo $showasset[0];?>">
                    <button type="submit"  name="upclaim" class="btn btn-danger btn-sm donebtn"><i class="fa fa-check" style=""></i>Claim</button>
                  </form>&nbsp;
                  
            <?php }}?>


                </div>
              </div>
            </div>
        <?php } ?>
                                              

              
                                            </div>
        


                                            </div>

                                            </div>
                                        </div>

        	<div class="col-6">








        	</div>
        </div>
    </div>
      </div>
    </div>

<?php
}

}
}
?>
  </div>

</div>
<script type="text/javascript">
	var $cell = $('.card');

//open and close card when clicked on card
$cell.find('.js-expander').click(function() {

  var $thisCell = $(this).closest('.card');

  if ($thisCell.hasClass('is-collapsed')) {
    $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed').addClass('is-inactive');
    $thisCell.removeClass('is-collapsed').addClass('is-expanded');
    
    if ($cell.not($thisCell).hasClass('is-inactive')) {
      //do nothing
    } else {
      $cell.not($thisCell).addClass('is-inactive');
    }

  } else {
    $thisCell.removeClass('is-expanded').addClass('is-collapsed');
    $cell.not($thisCell).removeClass('is-inactive');
  }
});

//close card when click on cross
$cell.find('.js-collapser').click(function() {

  var $thisCell = $(this).closest('.card');

  $thisCell.removeClass('is-expanded').addClass('is-collapsed');
  $cell.not($thisCell).removeClass('is-inactive');

});
</script>
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
</body>
</html>
<?php
}

else {
    header("location:../../../../login.php?msg=3");
}

?>