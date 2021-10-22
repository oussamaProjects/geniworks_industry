<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GeniWorks - Dashboard </title>
        <meta name="description" content="MyDadje - By GeniWWorks ">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href=" assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href=" assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href=" assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href=" assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href=" assets/vendors/css/base/style.min.css">
        <link rel="stylesheet" href=" assets/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href=" assets/css/owl-carousel/owl.theme.min.css">

        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src=" assets/img/logo-geniworks.png" alt="logo" class="loader-logo">
                 
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            <?php
            require('header.php'); 
             ?>
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <?php
                    
                    require('nav.php'); 
                     ?>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title">Dashboard</h2>
                                    <div>
                                    <div class="page-header-tools">
                                        <a class="btn btn-gradient-03" href="wof.php">Add WOF</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row flex-row">
                            <!-- Begin Facebook -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="align-self-center ml-5 mr-5">
                                                <i class=""></i>
                                            </div>
<?php
require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');
                $reqathe = $cdb->prepare("SELECT count(*) FROM wof ");
                $reqathe->execute();
                if($reqathe === false) {
                echo "error while executing data: ".mysqli_error($cdb);
                } 
                else { 
                $resathe=$reqathe->get_result();

                ?> <?php while($rowdw=$resathe->fetch_row()){ ?>
                                            <div class="media-body align-self-center">
                                                <div class="title "><?php echo $rowdw[0]; ?> WOF</div>
                                                <div class="number">Today</div>
                                            </div>
                                            <?php } }?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Facebook -->
                            <!-- Begin Twitter -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="align-self-center ml-5 mr-5">
                                                <i class=""></i>
                                            </div>
                                            <?php
require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');
                $reqathe = $cdb->prepare("SELECT count(*) FROM wof ");
                $reqathe->execute();
                if($reqathe === false) {
                echo "error while executing data: ".mysqli_error($cdb);
                } 
                else { 
                $resathe=$reqathe->get_result();

                ?> <?php while($rowdw=$resathe->fetch_row()){ ?>
                                            <div class="media-body align-self-center">
                                                <div class="title "><?php echo $rowdw[0]; ?> WOF</div>
                                                <div class="number">This Month</div>
                                            </div>
                                              <?php } }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Twitter -->
                            <!-- Begin Linkedin -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="align-self-center ml-5 mr-5">
                                                <i class=""></i>
                                            </div>
                                            <?php
require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');
                $reqathe = $cdb->prepare("SELECT count(*) FROM wof ");
                $reqathe->execute();
                if($reqathe === false) {
                echo "error while executing data: ".mysqli_error($cdb);
                } 
                else { 
                $resathe=$reqathe->get_result();

                ?> <?php while($rowdw=$resathe->fetch_row()){ ?>
                                            <div class="media-body align-self-center">
                                                <div class="title "><?php echo $rowdw[0]; ?> woF</div>
                                                <div class="number">This Week</div>
                                            </div>
                                             <?php } }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Linkedin -->
                        </div>
                        <!-- End Row -->
                        <!-- Begin Row -->
                       <!--  <div class="row flex-row">
                            <div class="col-xl-12 col-md-6">
                              
                                <div class="widget widget-09 has-shadow">
                                  
                                    <div class="widget-header d-flex align-items-center">
                                        <h2>Delivered Orders</h2>
                                        <div class="widget-options">
                                            <button type="button" class="btn btn-shadow">View all</button>
                                        </div>
                                    </div>
                               
                                    <div class="widget-body">
                                        <div class="row">
                                            <div class="col-xl-10 col-12 no-padding">
                                                <div>
                                                    <canvas id="orders"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-12 d-flex flex-column my-auto no-padding text-center">
                                                <div class="new-orders">
                                                    <div class="title">New Orders</div>
                                                    <div class="circle-orders">
                                                        <div class="percent-orders"></div>
                                                    </div>
                                                </div>
                                                <div class="some-stats mt-5">
                                                    <div class="title">Total Delivered</div>
                                                    <div class="number text-blue">856</div>
                                                </div>
                                                <div class="some-stats mt-3">
                                                    <div class="title">Total Estimated</div>
                                                    <div class="number text-blue">297</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                        </div> -->
                        <!-- End Row -->
                        
                        <!-- End Row -->
                        <?php
                        require('controls/showofs.php');
                        ?>
                        <div class="row flex-row">
                            <?php
                          //  require('../controls/user/tasklist.php');
                            ?>

                     
                  
                               <?php
                              // require('../controls/user/meetinglist.php');
                               ?>
      
      
                       <!--  <div class="row no-margin">
                            <div class="col-xl-12">
    
                                <div class="row widget has-shadow">
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2>Calendar</h2>
                                        <div class="widget-options">
                                            <div class="dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                    <i class="la la-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item"> 
                                                        Add Event
                                                    </a>
                                                    <a href="app-calendar.html" class="dropdown-item"> 
                                                        Basic Calendar
                                                    </a>
                                                    <a href="app-calendar-list.html" class="dropdown-item"> 
                                                        List Views
                                                    </a>
                                                    <a href="app-calendar-event.html" class="dropdown-item"> 
                                                        External Events
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="widget-body">
                       
                                        <div id="demo-calendar"></div>
                                      
                                    </div>
                                   
                                </div>
                               
                            </div>
                           
                        </div> -->
                        <!-- End Row -->
                        <!-- Begin Row -->
                        
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    <footer class="main-footer">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                <!--<p class="text-gradient-02">Design By Jbenplus</p>-->
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                      <!--   <a class="nav-link" href="documentation.html">Documentation</a> -->
                                    </li>
                                    <li class="nav-item">
<!--                                         <a class="nav-link" href="changelog.html">Changelog</a> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->



                   <!-- < div class="off-sidebar from-right">
                        <div class="off-sidebar-container">
                            <header class="off-sidebar-header">
                                <ul class="button-nav nav nav-tabs mt-3 mb-3 ml-3" role="tablist" id="weather-tab">
                                    <li><a class="active" data-toggle="tab" href="#messenger" role="tab" id="messenger-tab">Messages</a></li>
                                    <li><a data-toggle="tab" href="#today" role="tab" id="today-tab">Today</a></li>
                                </ul>
                                <a href="#off-canvas" class="off-sidebar-close"></a>
                            </header>
                            <div class="off-sidebar-content offcanvas-scroll auto-scroll">
                                <div class="tab-content">
                                
                                    <div role="tabpanel" class="tab-pane show active fade" id="messenger" aria-labelledby="messenger-tab">
                  
                                        <span class="date">Today</span>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src=" assets/img/logo-geniworks.png" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        <span class="mb-2">Brandon wrote</span>
                                                        Hi David, what's up?
                                                    </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localization font-size-small">2 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Hi Brandon, fine and you?
                                                   </p>
                                                    <p>
                                                       I'm working on the next update of MyDadje
                                                   </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localisation font-²size-small">3 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src=" assets/img/logo-geniworks.png" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        <span class="mb-2">Brandon wrote</span>
                                                        I can't wait to see
                                                    </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localization font-size-small">5 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       I'm almost done
                                                   </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localisation font-size-small">10 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date">Yesterday</span>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src=" assets/img/logo-geniworks.png" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        I updated the server tonight
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Didn't you have any problems?
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src=" assets/img/logo-geniworks.png" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        No!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Great!
                                                   </p>
                                                    <p>
                                                       See you later!
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
 
                                        <div class="enter-message">
                                            <div class="enter-message-form">
                                                <input type="text" placeholder="Enter your message..."/>
                                            </div>
                                            <div class="enter-message-button">
                                                <a href="#" class="send"><i class="ion-paper-airplane"></i></a>
                                            </div>
                                        </div>
                                 
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
          
                                        <div class="sidebar-heading pt-0">Today</div>
                                        <div class="today-stats mt-3 mb-3">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <i class="la la-users"></i>
                                                    <div class="counter">264</div>
                                                    <div class="heading">Clients</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-cart-arrow-down"></i>
                                                    <div class="counter">360</div>
                                                    <div class="heading">Sales</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-money"></i>
                                                    <div class="counter">$ 4,565</div>
                                                    <div class="heading">Earnings</div>
                                                </div>
                                            </div>
                                        </div>
                 
                                        <div class="sidebar-heading">Friends</div>
                                        <div class="quick-friends mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src=" assets/img/logo-geniworks.png" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Brandon Smith</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src=" assets/img/logo-geniworks.png" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Louis Henry</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src=" assets/img/logo-geniworks.png" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Nathan Hunter</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src=" assets/img/logo-geniworks.png" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Megan Duncan</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src=" assets/img/logo-geniworks.png" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Beverly Oliver</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
          
                                        <div class="sidebar-heading">Settings</div>
                                        <div class="quick-settings mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Email</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox">
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Chat Message Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                 
                                    </div>
            
                                </div>
                            </div>
                          
                        </div>
                      
                    </div>

Messages bar
                     -->




                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Success Modal -->
        <div id="delay-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-5">
                            <h2 class="text-dark">Meeting successfully created</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Success Modal -->
        <!-- Begin Modal -->
        <div id="modal-view-event" class="modal modal-top fade calendar-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title event-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <div class="event-icon"></div>
                            </div>
                            <div class="media-body align-self-center mt-3 mb-3">
                                <div class="event-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- Begin Vendor Js -->
        <script src=" assets/vendors/js/base/jquery.min.js"></script>
        <script src=" assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src=" assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src=" assets/vendors/js/chart/chart.min.js"></script>
        <script src=" assets/vendors/js/progress/circle-progress.min.js"></script>
        <script src=" assets/vendors/js/calendar/moment.min.js"></script>
        <script src=" assets/vendors/js/calendar/fullcalendar.min.js"></script>
        <script src=" assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
        <script src=" assets/vendors/js/app/app.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src=" assets/js/dashboard/db-default-dark.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>