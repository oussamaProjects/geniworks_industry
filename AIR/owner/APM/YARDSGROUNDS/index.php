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
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/default-skin/default-skin.css">

<meta charset="utf-8" />
        <title>YARDS & GROUNDS - Assets Inspection Record | GENIWORKS</title>
        <meta name="description" content="GENIWORKS INC">
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

<link rel="shortcut icon" href="../../../controls/img/favicon-32x32.png" />



<style>
    .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active, .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #00A1db;
    border-color: #00A1db;
}
</style>


</head>
<body onload="hola(11);" class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="#">
                    <img alt="Logo" src="../../../controls/img/favicon-32x32.png" />
                </a>
            </div>
    
        </div>

        <!-- end:: Header Mobile -->

        <!-- begin:: Root -->
        <div class="kt-grid kt-grid--hor kt-grid--root">

            <!-- begin:: Page -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

                <!-- begin:: Aside -->
                <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
        

                <!-- end:: Aside -->

                <!-- begin:: Wrapper -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                    <!-- begin:: Header -->
                    

                    <!-- end:: Header -->
                    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                        <!-- begin:: Subheader -->
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                            <div class="kt-subheader__main">
                                <h3 class="kt-subheader__title">Assets Inspection Record</h3>
                                <span class="kt-subheader__separator kt-hidden"></span>
                                <div class="kt-subheader__breadcrumbs">
                                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="../../../../AIR/" class="kt-subheader__breadcrumbs-link">
                                        AIR </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        Reports </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        APM </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                   
                                </div>


                                 <div class="kt-separator kt-separator--space-sm kt-separator--border-dashed"></div>
                                                    <div class="btn-group" role="group" aria-label="Medium group">
                                                        <button type="button" class="btn btn-outline-info" onclick=" QCl()">QC</button>
                                                        <button type="button" class="btn btn-outline-info" onclick=" RTGl()">RTG</button>
                                                        <button type="button" class="btn btn-info active" onclick=" YGl()">YARDS & GROUNDS</button>
                                                        <button type="button" class="btn btn-outline-info" onclick=" dbl()"><i class="flaticon2-shelter"></i>Dashboard</button>
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
     location.href = "../../../../AIR/";
} 
</script>
                            </div>
                            
                        </div>

                        <!-- end:: Subheader -->

                        <!-- begin:: Content -->
                        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                            <div class="row">
<?php
require('../../../controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner  ='11' AND acij_asset='YARDGROUND'");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();

                                ?>
<style>
    .demo-gallery {

      
  }
  
  .demo-gallery a {
      display: block;
      float:left;
      margin: 20px 10px 20px 10px;
      line-height: 0;
  }
  
  
  
  
  
  .demo-gallery img {
      max-width: auto;
    max-width: 100%;
      height: auto;
      border: 0;
      
  }
  
  .demo-gallery figure {
      display: none;
  }
</style>

  <?php
while ($showasset=$respsrf->fetch_row()) {
                                ?>
                                
                                <div class="col-md-4">
                                    <div class="kt-portlet kt-portlet--contain">
                                        <div class="kt-blog-grid">
                                            <div class="kt-blog-grid__head">
                                                <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="3">
                                                    <div class="container">
                                                  <a href="#" data-toggle="modal" data-target=".ygzoom<?php echo $showasset[0];?>">
              <img src="../../../controls/img/assets/<?php echo $showasset[5];?>" alt="">
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
            </a>


                                            </div>
                                            <div class="kt-portlet__body">
                                                <div class="kt-blog-grid__body">
                                                    
                                                    <h2 class="kt-blog-grid__title">
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

                                                    
                                                    </div>
                                                    <div style="text-align: right;" class="kt-blog-grid__date">
                                                        Inspected On <?php echo $showasset[8];?><br>
                                                        By <?php echo $showasset[9];?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  </div>
  </div>
        <div class="modal fade ygzoom<?php echo $showasset[0];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <img src="../../../controls/img/assets/<?php echo $showasset[5];?>" alt="" style="width: 100%;">
                                                        </div>
                                                    </div>
                                <?php }?>

    </div>
                            
                            
                        </div>

                        <!-- end:: Content -->
                    </div>

                    <!-- begin:: Footer -->
                    <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                        <div class="kt-footer__copyright">
                            2019&nbsp;&copy;&nbsp;<a href="http://geniworks.com" target="_blank" class="kt-link">GENIWORKS Inc</a>
                        </div>
                        <div class="kt-footer__menu">
                            <a href="http://geniworks.com" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                            
                        </div>
                    </div>

                    <!-- end:: Footer -->
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
<?php
}
?>
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