<!DOCTYPE html>
<html>
<head>
  <title></title>
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
    <style type="text/css">
       * {
  box-sizing: border-box;
  outline: none;
}


body, .item, .top-part, .top-part .count {
  display: flex;
  align-items: center;
}
html {
    height: 100%;
}
body {
    height: 100%;
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

body {
  background: -webkit-gradient(linear, left top, left bottom, from(#0d1429), to(#2d78ad)) fixed;
}



    </style>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--end::Fonts -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="../../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/demo1/pages/custom/general/user/profile-v1.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="../../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="../../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="../../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="img/favicon-32x32.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet">
</head>
<body>
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
          


          <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

   <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content" style="  max-width: 1200px;">

              <!--begin::Portlet-->
              <div class="kt-portlet kt-profile">
                <div class="kt-profile__content">
                  <div class="row">
                    <div class="col-md-12 col-lg-5 col-xl-12">
                      <div class="kt-profile__main">
                        
                        <div class="kt-profile__main-info">
                            <h2 class="kt-portlet__head-title">Operations Dashboard</h2>
                          <div class="kt-profile__main-info-position" style="font-size: 14px;">COVID-19 ANTIPANIC PLAN</div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="kt-profile__nav">
                  <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1" role="tab">Dashboard</a>
                    </li>
                   <!--  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2" role="tab">Account & Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3" role="tab">Activities</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_4" role="tab">Tasks</a> -->
                   
                  </ul>
                </div>
              </div>

<style type="text/css">
  .kt-widget-2 .kt-widget-2__content .kt-widget-2__item .kt-widget-2__item-stats {
    display: -webkit-box;
    display: -ms-flexbox;
   
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #a1a8c3;
    font-size: 1rem;
    font-weight: 500;
}


 .kt-widget-2__item-value-1 {
    padding-left: 0.5rem;
    color: #1dc9b7;
}
</style>
                  
    
              
             
            
            <div class="tab-content">
                <div class="tab-pane fade show active" id="kt_tabs_1_1" role="tabpanel">

                  <!--begin::Row-->
                  <div class="row">
                    
                    <div class="col-lg-12 col-xl-8 order-lg-2 order-xl-1">

                      <!--begin::Portlet-->
                      <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                          <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">General review</h3>
                          </div>
                          <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-actions">
                              <a href="#" class="btn btn-default btn-sm btn-bold">XML</a>
                              <a href="#" class="btn btn-default btn-sm btn-bold">CSV</a>
                            </div>
                          </div>
                        </div>
                        <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
                          <div class="kt-widget-2">
                            <div class="kt-widget-2__content kt-portlet__space-x">
                              <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-6">
                                  <div class="kt-widget-2__item">
                                    <div class="kt-widget-2__item-title">
                                      Cabin 01
                                    </div>
                                    <div class="kt-widget-2__item-stats">
                                      <div class="kt-widget-2__item-info">
                                        <div class="kt-widget-2__item-text">
                                          Status:
                                        </div>
                                        <div class="kt-widget-2__item-value-1">
                                          In Process
                                        </div>

                                      </div>
                                      <div class="kt-widget-2__item-chart">

                                        <!--Doc: For the chart initialization refer to "generalStatistics" function in "src\theme\app\scripts\custom\dashboard.js"
                  and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
                                        <canvas id="kt_widget_general_statistics_chart_1" width="80" height="40"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-6">
                                  <div class="kt-widget-2__item">
                                    <div class="kt-widget-2__item-title">
                                      Products
                                    </div>
                                    <div class="kt-widget-2__item-stats">
                                      <div class="kt-widget-2__item-info">
                                        <div class="kt-widget-2__item-text">
                                          MRT:
                                        </div>
                                        <div class="kt-widget-2__item-value">
                                          +10%
                                        </div>
                                      </div>
                                      <div class="kt-widget-2__item-chart">

                                        <!--Doc: For the chart initialization refer to "generalStatistics" function in "src\theme\app\scripts\custom\dashboard.js"
                  and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
                                        <canvas id="kt_widget_general_statistics_chart_2" width="80" height="40"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-6">
                                  <div class="kt-widget-2__item">
                                    <div class="kt-widget-2__item-title">
                                      Profit
                                    </div>
                                    <div class="kt-widget-2__item-stats">
                                      <div class="kt-widget-2__item-info">
                                        <div class="kt-widget-2__item-text">
                                          FTP:
                                        </div>
                                        <div class="kt-widget-2__item-value">
                                          +19%
                                        </div>
                                      </div>
                                      <div class="kt-widget-2__item-chart">

                                        <!--Doc: For the chart initialization refer to "generalStatistics" function in "src\theme\app\scripts\custom\dashboard.js"
                  and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
                                        <canvas id="kt_widget_general_statistics_chart_3" width="80" height="40"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-6">
                                  <div class="kt-widget-2__item">
                                    <div class="kt-widget-2__item-title">
                                      Reports
                                    </div>
                                    <div class="kt-widget-2__item-stats">
                                      <div class="kt-widget-2__item-info">
                                        <div class="kt-widget-2__item-text">
                                          RNP:
                                        </div>
                                        <div class="kt-widget-2__item-value">
                                          +30%
                                        </div>
                                      </div>
                                      <div class="kt-widget-2__item-chart">

                                        <!--Doc: For the chart initialization refer to "generalStatistics" function in "src\theme\app\scripts\custom\dashboard.js"
                  and "KLib.initMiniChart()" function in "themes/themes/keen/src/theme/app/scripts/bundle/lib.js" -->
                                        <canvas id="kt_widget_general_statistics_chart_4" width="80" height="40"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-widget-2__stats">
                                <div class="kt-widget-2__stats-author">
                                  <div class="kt-widget-2__stats-bullet kt-bg-brand"></div>
                                  <span class="kt-widget-2__stats-text">Author Sales</span>
                                </div>
                                <div class="kt-widget-2__stats-product">
                                  <div class="kt-widget-2__stats-bullet kt-bg-danger"></div>
                                  <span class="kt-widget-2__stats-text">Product Profit</span>
                                </div>
                              </div>
                            </div>
                            <div class="kt-widget-2__chart">
                              <canvas id="kt_widget_general_statistics_chart_main" height="250"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--end::Portlet-->
                    </div>
                    <div class="col-lg-6 col-xl-4  order-lg-1 order-xl-1">

                      <!--begin::Portlet-->
                      <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                          <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                              Work Progress
                            </h3>
                          </div>
                          <div class="kt-portlet__head-toolbar">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#kt_portlet_tabs_1111_1_content" role="tab" aria-selected="false">
                                  Emails
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_portlet_tabs_1111_2_content" role="tab" aria-selected="false">
                                  Tickets
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="kt-portlet__body">
                          <div class="tab-content">
                            <div class="tab-pane fade active show" id="kt_portlet_tabs_1111_1_content" role="tabpanel">
                              <div class="kt-widget-11">
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      Pendings Tasks
                                    </div>
                                    <div class="kt-widget-11__value">
                                      78%
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      Completed Tasks
                                    </div>
                                    <div class="kt-widget-11__value">
                                      320&nbsp;/&nbsp;<span class="kt-opacity-5">780</span>
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      Tasks In Progress
                                    </div>
                                    <div class="kt-widget-11__value">
                                      45%
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      All Tasks
                                    </div>
                                    <div class="kt-widget-11__value">
                                      1200
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      Reports
                                    </div>
                                    <div class="kt-widget-11__value">
                                      40
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-margin-t-30 kt-align-center">
                                <a href="#" class="btn btn-brand btn-upper btn-bold kt-align-center">Full Report</a>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="kt_portlet_tabs_1111_2_content" role="tabpanel">
                              <div class="kt-widget-11">
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      Pendings Tasks
                                    </div>
                                    <div class="kt-widget-11__value">
                                      78%
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      Completed Tasks
                                    </div>
                                    <div class="kt-widget-11__value">
                                      320&nbsp;/&nbsp;<span class="kt-opacity-5">780</span>
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      Tasks In Progress
                                    </div>
                                    <div class="kt-widget-11__value">
                                      45%
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      All Tasks
                                    </div>
                                    <div class="kt-widget-11__value">
                                      1200
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="kt-widget-11__item">
                                  <div class="kt-widget-11__wrapper">
                                    <div class="kt-widget-11__title">
                                      Reports
                                    </div>
                                    <div class="kt-widget-11__value">
                                      40
                                    </div>
                                  </div>
                                  <div class="kt-widget-11__progress">
                                    <div class="progress">

                                      <!-- Doc: A bootstrap progress bar can be used to show a user how far along it's in a process, see https://getbootstrap.com/docs/4.1/components/progress/ -->
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="kt-margin-t-30 kt-align-center">
                                <a href="#" class="btn btn-brand btn-upper btn-bold kt-align-center">Full Report</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--end::Portlet-->
                    </div>
                    
                    
                  </div>

                  <!--end::Row-->
                </div>
                
                  
                      </div>
                    </div>
                  </div>

                  <!--end::Row-->
                </div>
                


                            <!-- end::Nav pills -->
                          </div>
                        </div>
                      </div>

                      <!--end::Portlet-->
                    </div>
                    
                  </div>

                  <!--end::Row-->
                </div>
              
              </div>
          </div>
</div>
</div>


    <script src="../../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="../../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
    <script src="../../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
    <script src="../../assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
    <script src="../../assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
    <script src="../../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
    <script src="../../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
    <script src="../../assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
    
    <script src="../../assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="../../assets/js/demo1/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
    <script src="../../assets/js/demo1/pages/components/base/toasts.js" type="text/javascript"></script>
        <script src="../../assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
    <script src="../../assets/js/demo1/pages/custom/general/profile.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
</body>
</html>