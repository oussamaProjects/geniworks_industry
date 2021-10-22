<!DOCTYPE html>
<?php

if(isset($_SESSION['login_user'])){
header("location: dashboard.php"); // Redirecting To Profile Page
}
?> 

<html lang="en">

    <!-- begin::Head -->
    <head>

        <!--begin::Base Path (base relative path for assets of this page) -->
    
        <!--end::Base Path -->
        <meta charset="utf-8" />
        <title>MyDADJE | CHange Password </title>
        <meta name="description" content="MyDADJE - By GENIWORKS">
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
        <link href="../SRF/assets/css/demo1/pages/custom/general/user/login-v2.css" rel="stylesheet" type="text/css" />

        <!--end::Page Custom Styles -->

        <!--begin:: Global Mandatory Vendors -->
        <link href="../SRF/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

        <!--end:: Global Mandatory Vendors -->

        <!--begin:: Global Optional Vendors -->
        <link href="../SRF/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

        <!--end:: Global Optional Vendors -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="../SRF/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="../SRF/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
        <link href="../SRF/assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />

        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="../img/favicon-16x16.png" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-login-v2--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin:: Page -->
        <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid__item   kt-grid__item--fluid kt-grid  kt-grid kt-grid--hor kt-login-v2" id="kt_login_v2">

                <!--begin::Item-->
                <div class="kt-grid__item  kt-grid--hor">

                    <!--begin::Heade-->
                    <div class="kt-login-v2__head">
                        <div class="kt-login-v2__logo">
                            <a href="#">
                                <img src="" width="200" alt="" />
                            </a>
                        </div>
                        
                    </div>

                    <!--begin::Head-->
                </div>

                <!--end::Item-->

                <!--begin::Item-->
                <div class="kt-grid__item  kt-grid  kt-grid--ver  kt-grid__item--fluid">

                    <!--begin::Body-->
                    <div class="kt-login-v2__body">

                        <!--begin::Wrapper-->
                        <div class="kt-login-v2__wrapper" style="width: 60%;">
                            <div class="kt-login-v2__container">
                             

                                <!--begin::Form-->
                                <form class="kt-login-v2__form kt-form">
                                       <div class="kt-login-v2__title" style="text-align: left;">
                                    
                                    <h6>Your Password Have Been Changed. Go To login Page.</h6>
                                </div>
                       
                                    



                                    <!--begin::Action-->
                                    <style>
                                        .btn.btn-brand.btn-elevate {
    -webkit-box-shadow: 0px 2px 2px 0px rgba(93, 120, 255, 0.15);
    box-shadow: 0px 2px 2px 0px rgba(93, 120, 255, 0.15);
}
                                    </style>


                                    <div class="kt-login-v2__actions">
                                        <a href="#" class="kt-link kt-link--brand">
                                           
                                        </a>
                                        <a href="../login.php" class="btn btn-brand btn-elevate" style="background-color: #00A1DB; border: #00A1DB;">Login</a>
                                    </div>
                                  

                                    <!--end::Action-->
                                </form>
 
                                <!--end::Form-->

                                <!--begin::Separator-->
                                <div class="kt-separator kt-separator--space-lg  kt-separator--border-solid"></div>

                                <!--end::Separator-->

                                <!--begin::Options-->
                                

                                <!--end::Options-->
                            </div>
                        </div>

                        <!--end::Wrapper-->

                        <!--begin::Image-->
                        
                        <!--begin::Image-->
                    </div>

                    <!--begin::Body-->
                </div>

                <!--end::Item-->

                <!--begin::Item-->
                <div class="kt-grid__item">
                    <div class="kt-login-v2__footer">
                        <div class="kt-login-v2__link">
                            <a href="#" class="kt-link kt-font-brand">Privacy</a>
                            <a href="#" class="kt-link kt-font-brand">Legal</a>
                            <a href="www.geniworks.com" class="kt-link kt-font-brand">Contact</a>
                        </div>
                        <div class="kt-login-v2__info">
                            <a href="#" class="kt-link">&copy; 2019 GENIWORKS INC</a>
                        </div>
                    </div>
                </div>

                <!--end::Item-->
            </div>
        </div>

        <!-- end:: Page -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
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
        <script src="SRF/assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

        <!--end:: Global Mandatory Vendors -->

        <!--begin:: Global Optional Vendors -->
        <script src="SRF/assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
        <script src="SRF/assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

        <!--end:: Global Optional Vendors -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="SRF/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts(used by this page) -->
        <script src="SRF/assets/js/demo1/pages/custom/general/login.js" type="text/javascript"></script>

        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>