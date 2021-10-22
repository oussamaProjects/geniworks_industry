<?php
session_start();
if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin')||($_SESSION['uat']=='user'))) 
{
$gwidcab = $_SESSION['userid'];
$userid=$_SESSION['userid'];
require('controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM file_manager ORDER BY fm_ext");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}
else{
  $resafter=$selectafter->get_result();
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="GENIWORKS">
    <title>Documents Center - MyDADJE - GENIWORKS INDUSTRY</title>
    <link rel="apple-touch-icon" href="../img/logo-v3-1.png">
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo-v3-1.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-file-manager.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow content-left-sidebar file-manager-application navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                                <div class="search-input-close"><i class="bx bx-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                        
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">User</span><span class="user-status text-muted">Position</span></div><span><img class="round" src="user.png" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="app-file-sidebar sidebar-content d-flex">
                        <!-- App File sidebar - Left section Starts -->
                        <div class="app-file-sidebar-left">
                            <!-- sidebar close icon starts -->
                            <span class="app-file-sidebar-close"><i class="bx bx-x"></i></span>
                            <!-- sidebar close icon ends -->
                            <div class="form-group add-new-file text-center">

                                <button type="button" class="btn btn-primary btn-block glow my-2 add-file-btn text-capitalize" data-toggle="modal" data-target="#default">
                                            Add File
                                        </button>

                                        
                                <input type="file" class="d-none" id="getFile">
                            </div>

                            <div class="app-file-sidebar-content">
                                <!-- App File Left Sidebar - Drive Content Starts -->
                                <label class="app-file-label">My Drive</label>
                                <div class="list-group list-group-messages my-50">
                                    <a href="#" class="list-group-item list-group-item-action pt-0 active">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            
                                        </div>
                                        All Files
                                        <span class="badge badge-light-danger badge-pill badge-round float-right mt-50">2</span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            
                                        </div>
                                        My Process
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            
                                        </div> Recents
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                           
                                        </div>
                                        Shared files
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                          
                                        </div>
                                        Archived Files
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                          
                                        </div>
                                        Audio Records
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                          
                                        </div>
                                        Video Records
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                          
                                        </div>
                                        Others
                                    </a>
                                </div>
                                <!-- App File Left Sidebar - Drive Content Ends -->

                                <!-- App File Left Sidebar - Labels Content Starts -->
                                <label class="app-file-label">Labels</label>
                                <div class="list-group list-group-labels my-50">
                                    <a href="#" class="list-group-item list-group-item-action pt-0">
                                        <div class="fonticon-wrap d-inline mr-25">
                                           
                                        </div>
                                        Documents
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            
                                        </div>
                                        Images
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                            
                                        </div> Videos
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                           
                                        </div>
                                        Audio
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="fonticon-wrap d-inline mr-25">
                                           
                                        </div>
                                        Zip Files
                                    </a>
                                </div>
                                <!-- App File Left Sidebar - Labels Content Ends -->

                                <!-- App File Left Sidebar - Storage Content Starts -->
                                <label class="app-file-label mb-75">Storage Status</label>
                                <div class="d-flex mb-1">
                                    <div class="fonticon-wrap mr-1">
                                        
                                    </div>
                                    <div class="file-manager-progress">
                                        <span class="text-muted font-size-small">19.5GB used of 25GB</span>
                                        <div class="progress progress-bar-primary progress-sm mb-0">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" style="width:80%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="font-weight-bold">Upgrade Storage</a>
                                <!-- App File Left Sidebar - Storage Content Ends -->
                            </div>
                        </div>
                    </div>
                   

                </div>
            </div>
            <div class="content-right">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <!-- File Manager app overlay -->
                        <div class="app-file-overlay"></div>
                        <div class="app-file-area">
                            <!-- File App Content Area -->
                            <!-- App File Header Starts -->
                            <div class="app-file-header">
                                <!-- Header search bar starts -->
                                <div class="app-file-header-search flex-grow-1">
                                    <div class="sidebar-toggle d-block d-lg-none">
                                        <i class="bx bx-menu"></i>
                                    </div>
                                    <fieldset class="form-group position-relative has-icon-left m-0">
                                        <input type="text" class="form-control border-0 shadow-none" id="email-search" placeholder="Search email">
                                        <div class="form-control-position">
                                            <i class="bx bx-search"></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- Header search bar Ends -->
                                <!-- Header Icons Starts -->
                                <div class="app-file-header-icons">
                                    <div class="fonticon-wrap d-inline mx-sm-1 align-middle">
                                        <img src="follow.png" width="20">
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 align-middle cursor-pointer"></i>
                                </div>
                                <!-- Header Icons Ends -->
                            </div>
                            <!-- App File Header Ends -->

                            <!-- App File Content Starts -->
                            <div class="app-file-content p-2">
                                <h5>All Files</h5>

                                <!-- App File - Recent Accessed Files Section Starts -->
                                <label class="app-file-label">Recently Accessed Files</label>
                                <div class="row app-file-recent-access">
                                      <?php 

     while ($showcab=$resafter->fetch_row()){
     if($showcab[3]=="pdf"){
        ?>
                                    <div class="col-md-3 col-6">
                                        <a href="" data-toggle="modal" data-target="#pdfmodal<?php echo $showcab[0];?>">
                                        <div class="card border shadow-none mb-1 ">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/pdf.svg" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-content-details">
                                                        <div class="app-file-name font-size-small font-weight-bold"><?php echo $showcab[1];?></div>
                                                        <div class="app-file-size font-size-small text-muted mb-25"></div>
                                                        <div class="app-file-last-access font-size-small text-muted">Last accessed : 3 hours ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                     <div class="modal fade text-left" id="pdfmodal<?php echo $showcab[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel1">File Details</h3>
                                                        <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                                                            <i class="bx bx-x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                            <div class="card-content">
                                
                                <div class="tab-content pl-0">
                                    <div class="tab-pane active" id="details" aria-labelledby="details-tab" role="tabpanel">
                                        <div class="border-bottom d-flex align-items-center flex-column pb-1">
                                            <?php echo $showcab[1];?>
                                            <a href="https://docs.google.com/viewer?embedded=true&url=www.mydadje.com/DOCCenter/controls/<?php echo $showcab[2];?>"  target="_blank"><img src="app-assets/images/icon/pdf.svg" alt="PDF" height="42" width="35" class="my-1"></a>
                                            <p class="mt-2" style="margin-top: 0.5em !important;">

                                                <?php


                                                 echo filesize("controls/".$showcab[2]);?></p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <label class="app-file-label">Setting</label>
                                            <div class="d-flex justify-content-between align-items-center mt-75">
                                                <p>File Sharing</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow1">
                                                    <label class="custom-control-label" for="customSwitchGlow1"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Synchronization</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow2" checked>
                                                    <label class="custom-control-label" for="customSwitchGlow2"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Backup</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow3">
                                                    <label class="custom-control-label" for="customSwitchGlow3"></label>
                                                </div>
                                            </div>

                                            <label class="app-file-label">Info</label>
                                            <div class="d-flex justify-content-between align-items-center mt-75">
                                                <p>Type</p>
                                                <p class="font-weight-bold">PDF</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Process</p>
                                                <p class="font-weight-bold"><?php echo $showcab[5];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Location</p>
                                                <p class="font-weight-bold"><?php echo $showcab[2];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Owner</p>
                                                <p class="font-weight-bold">Elnora Reese</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Modified</p>
                                                <p class="font-weight-bold"><?php echo $showcab[9];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Opened</p>
                                                <p class="font-weight-bold">July 8, 2019</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Created</p>
                                                <p class="font-weight-bold">July 1, 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane pl-0" id="activity" aria-labelledby="activity-tab" role="tabpanel">
                                        <div class="card-body">
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-success active">
                                                    <div class="timeline-time">Today</div>
                                                    <h6 class="timeline-title">You added an item to</h6>
                                                    <p class="timeline-text">You added an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/psd.png" alt="PSD" height="30" width="25" class="mr-50">Mockup.psd
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-info active">
                                                    <div class="timeline-time">10 min ago</div>
                                                    <h6 class="timeline-title">You shared 2 times</h6>
                                                    <p class="timeline-text">Emily Bennett edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/sketch.png" alt="Sketch" height="30" width="25" class="mr-50">Template_Design.sketch
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-danger active">
                                                    <div class="timeline-time">Mon 10:20 PM</div>
                                                    <h6 class="timeline-title">You edited an item</h6>
                                                    <p class="timeline-text">You edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Information.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-primary active">
                                                    <div class="timeline-time">Jul 13 2019</div>
                                                    <h6 class="timeline-title">You edited an item</h6>
                                                    <p class="timeline-text">John Keller edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Documentation.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-warning">
                                                    <div class="timeline-time">Apr 18 2019</div>
                                                    <h6 class="timeline-title">You added an item to</h6>
                                                    <p class="timeline-text">You edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Resume.pdf
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
        <?php
        }
        if($showcab[3]=="docx"){
        ?>
        <div class="col-md-3 col-6">
            <a href="" data-toggle="modal" data-target="#docmodal<?php echo $showcab[0];?>">
                                        <div class="card border shadow-none mb-1">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/doc.svg" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-content-details">
                                                        <div class="app-file-name font-size-small font-weight-bold"><?php echo $showcab[1]?></div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">1.2gb</div>
                                                        <div class="app-file-last-access font-size-small text-muted">Last accessed : 3 hours ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="modal fade text-left" id="docmodal<?php echo $showcab[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel1">File Details</h3>
                                                        <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                                                            <i class="bx bx-x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                            <div class="card-content">
                                
                                <div class="tab-content pl-0">
                                    <div class="tab-pane active" id="details" aria-labelledby="details-tab" role="tabpanel">
                                        <div class="border-bottom d-flex align-items-center flex-column pb-1">
                                            <?php echo $showcab[1];?>
                                            <a href="https://docs.google.com/viewer?embedded=true&url=www.mydadje.com/DOCCenter/controls/<?php echo $showcab[2];?>"  target="_blank"><img src="app-assets/images/icon/doc.svg" alt="PDF" height="42" width="35" class="my-1"></a>
                                            <p class="mt-2" style="margin-top: 0.5em !important;">

                                                <?php


                                                 echo filesize("controls/".$showcab[2]);?></p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <label class="app-file-label">Setting</label>
                                            <div class="d-flex justify-content-between align-items-center mt-75">
                                                <p>File Sharing</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow1">
                                                    <label class="custom-control-label" for="customSwitchGlow1"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Synchronization</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow2" checked>
                                                    <label class="custom-control-label" for="customSwitchGlow2"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Backup</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow3">
                                                    <label class="custom-control-label" for="customSwitchGlow3"></label>
                                                </div>
                                            </div>

                                            <label class="app-file-label">Info</label>
                                            <div class="d-flex justify-content-between align-items-center mt-75">
                                                <p>Type</p>
                                                <p class="font-weight-bold">PDF</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Process</p>
                                                <p class="font-weight-bold"><?php echo $showcab[5];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Location</p>
                                                <p class="font-weight-bold"><?php echo $showcab[2];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Owner</p>
                                                <p class="font-weight-bold">Elnora Reese</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Modified</p>
                                                <p class="font-weight-bold"><?php echo $showcab[9];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Opened</p>
                                                <p class="font-weight-bold">July 8, 2019</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Created</p>
                                                <p class="font-weight-bold">July 1, 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane pl-0" id="activity" aria-labelledby="activity-tab" role="tabpanel">
                                        <div class="card-body">
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-success active">
                                                    <div class="timeline-time">Today</div>
                                                    <h6 class="timeline-title">You added an item to</h6>
                                                    <p class="timeline-text">You added an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/psd.png" alt="PSD" height="30" width="25" class="mr-50">Mockup.psd
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-info active">
                                                    <div class="timeline-time">10 min ago</div>
                                                    <h6 class="timeline-title">You shared 2 times</h6>
                                                    <p class="timeline-text">Emily Bennett edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/sketch.png" alt="Sketch" height="30" width="25" class="mr-50">Template_Design.sketch
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-danger active">
                                                    <div class="timeline-time">Mon 10:20 PM</div>
                                                    <h6 class="timeline-title">You edited an item</h6>
                                                    <p class="timeline-text">You edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Information.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-primary active">
                                                    <div class="timeline-time">Jul 13 2019</div>
                                                    <h6 class="timeline-title">You edited an item</h6>
                                                    <p class="timeline-text">John Keller edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Documentation.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-warning">
                                                    <div class="timeline-time">Apr 18 2019</div>
                                                    <h6 class="timeline-title">You added an item to</h6>
                                                    <p class="timeline-text">You edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Resume.pdf
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                     <?php
        }
        if($showcab[3]=="csv"){
        ?>
        <div class="col-md-3 col-6">
             <a href="" data-toggle="modal" data-target="#csvmodal<?php echo $showcab[0];?>">
                                        <div class="card border shadow-none mb-1">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/csv.svg" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-content-details">
                                                        <div class="app-file-name font-size-small font-weight-bold"><?php echo $showcab[1]?></div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">1.2gb</div>
                                                        <div class="app-file-last-access font-size-small text-muted">Last accessed : 3 hours ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="modal fade text-left" id="csvmodal<?php echo $showcab[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel1">File Details</h3>
                                                        <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                                                            <i class="bx bx-x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                            <div class="card-content">
                                
                                <div class="tab-content pl-0">
                                    <div class="tab-pane active" id="details" aria-labelledby="details-tab" role="tabpanel">
                                        <div class="border-bottom d-flex align-items-center flex-column pb-1">
                                            <?php echo $showcab[1];?>
                                            <a href="controls/<?php echo $showcab[2];?>"  target="_blank"><img src="app-assets/images/icon/csv.svg" alt="PDF" height="42" width="35" class="my-1"></a>
                                            <p class="mt-2" style="margin-top: 0.5em !important;">

                                                <?php


                                                 echo filesize("controls/".$showcab[2]);?></p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <label class="app-file-label">Setting</label>
                                            <div class="d-flex justify-content-between align-items-center mt-75">
                                                <p>File Sharing</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow1">
                                                    <label class="custom-control-label" for="customSwitchGlow1"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Synchronization</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow2" checked>
                                                    <label class="custom-control-label" for="customSwitchGlow2"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Backup</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow3">
                                                    <label class="custom-control-label" for="customSwitchGlow3"></label>
                                                </div>
                                            </div>

                                            <label class="app-file-label">Info</label>
                                            <div class="d-flex justify-content-between align-items-center mt-75">
                                                <p>Type</p>
                                                <p class="font-weight-bold">PDF</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Process</p>
                                                <p class="font-weight-bold"><?php echo $showcab[5];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Location</p>
                                                <p class="font-weight-bold"><?php echo $showcab[2];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Owner</p>
                                                <p class="font-weight-bold">Elnora Reese</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Modified</p>
                                                <p class="font-weight-bold"><?php echo $showcab[9];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Opened</p>
                                                <p class="font-weight-bold">July 8, 2019</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Created</p>
                                                <p class="font-weight-bold">July 1, 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane pl-0" id="activity" aria-labelledby="activity-tab" role="tabpanel">
                                        <div class="card-body">
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-success active">
                                                    <div class="timeline-time">Today</div>
                                                    <h6 class="timeline-title">You added an item to</h6>
                                                    <p class="timeline-text">You added an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/psd.png" alt="PSD" height="30" width="25" class="mr-50">Mockup.psd
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-info active">
                                                    <div class="timeline-time">10 min ago</div>
                                                    <h6 class="timeline-title">You shared 2 times</h6>
                                                    <p class="timeline-text">Emily Bennett edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/sketch.png" alt="Sketch" height="30" width="25" class="mr-50">Template_Design.sketch
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-danger active">
                                                    <div class="timeline-time">Mon 10:20 PM</div>
                                                    <h6 class="timeline-title">You edited an item</h6>
                                                    <p class="timeline-text">You edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Information.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-primary active">
                                                    <div class="timeline-time">Jul 13 2019</div>
                                                    <h6 class="timeline-title">You edited an item</h6>
                                                    <p class="timeline-text">John Keller edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Documentation.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-warning">
                                                    <div class="timeline-time">Apr 18 2019</div>
                                                    <h6 class="timeline-title">You added an item to</h6>
                                                    <p class="timeline-text">You edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Resume.pdf
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
     
        <?php
        }
         if($showcab[3]=="jpg"){
        ?>
        <div class="col-md-3 col-6">
            <a href="" data-toggle="modal" data-target="#jpgmodal<?php echo $showcab[0];?>">
                                        <div class="card border shadow-none mb-1">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/jpg.svg" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-content-details">
                                                        <div class="app-file-name font-size-small font-weight-bold"><?php echo $showcab[1]?></div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">1.2gb</div>
                                                        <div class="app-file-last-access font-size-small text-muted">Last accessed : 3 hours ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="modal fade text-left" id="jpgmodal<?php echo $showcab[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel1">File Details</h3>
                                                        <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                                                            <i class="bx bx-x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                            <div class="card-content">
                                
                                <div class="tab-content pl-0">
                                    <div class="tab-pane active" id="details" aria-labelledby="details-tab" role="tabpanel">
                                        <div class="border-bottom d-flex align-items-center flex-column pb-1">
                                            <?php echo $showcab[1];?>
                                            
                                            <a href="https://docs.google.com/viewer?embedded=true&url=www.mydadje.com/DOCCenter/controls/<?php echo $showcab[2];?>" target="_blank"><img src="controls/<?php echo $showcab[2]?>" alt="PDF" width="75" class="my-1"></a>
                                            
                                            <p class="mt-2" style="margin-top: 0.5em !important;">

                                                <?php

                                                $bytes= filesize("controls/".$showcab[2]);




                                                 ?>
                                                     

  
                                                 </p>
                                        </div>
                                        <div class="card-body pt-2">
                                            <label class="app-file-label">Setting</label>
                                            <div class="d-flex justify-content-between align-items-center mt-75">
                                                <p>File Sharing</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow1">
                                                    <label class="custom-control-label" for="customSwitchGlow1"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Synchronization</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow2" checked>
                                                    <label class="custom-control-label" for="customSwitchGlow2"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Backup</p>
                                                <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchGlow3">
                                                    <label class="custom-control-label" for="customSwitchGlow3"></label>
                                                </div>
                                            </div>

                                            <label class="app-file-label">Info</label>
                                            <div class="d-flex justify-content-between align-items-center mt-75">
                                                <p>Type</p>
                                                <p class="font-weight-bold">PDF</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Process</p>
                                                <p class="font-weight-bold"><?php echo $showcab[5];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Location</p>
                                                <p class="font-weight-bold"><?php echo $showcab[2];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Owner</p>
                                                <p class="font-weight-bold">Elnora Reese</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Modified</p>
                                                <p class="font-weight-bold"><?php echo $showcab[9];?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Opened</p>
                                                <p class="font-weight-bold">July 8, 2019</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Created</p>
                                                <p class="font-weight-bold">July 1, 2019</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane pl-0" id="activity" aria-labelledby="activity-tab" role="tabpanel">
                                        <div class="card-body">
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-success active">
                                                    <div class="timeline-time">Today</div>
                                                    <h6 class="timeline-title">You added an item to</h6>
                                                    <p class="timeline-text">You added an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/psd.png" alt="PSD" height="30" width="25" class="mr-50">Mockup.psd
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-info active">
                                                    <div class="timeline-time">10 min ago</div>
                                                    <h6 class="timeline-title">You shared 2 times</h6>
                                                    <p class="timeline-text">Emily Bennett edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/sketch.png" alt="Sketch" height="30" width="25" class="mr-50">Template_Design.sketch
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-danger active">
                                                    <div class="timeline-time">Mon 10:20 PM</div>
                                                    <h6 class="timeline-title">You edited an item</h6>
                                                    <p class="timeline-text">You edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Information.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-primary active">
                                                    <div class="timeline-time">Jul 13 2019</div>
                                                    <h6 class="timeline-title">You edited an item</h6>
                                                    <p class="timeline-text">John Keller edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Documentation.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-warning">
                                                    <div class="timeline-time">Apr 18 2019</div>
                                                    <h6 class="timeline-title">You added an item to</h6>
                                                    <p class="timeline-text">You edited an item</p>
                                                    <div class="timeline-content">
                                                        <img src="app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Resume.pdf
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
        <?php
    }
   
    
}
        ?>
                                </div>
                                <!-- App File - Recent Accessed Files Section Ends -->

                                <!-- App File - Folder Section Starts -->
                                <label class="app-file-label">Folder</label>
                                <div class="row app-file-folder">
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="card-body px-75 py-50">
                                                    <div class="app-file-folder-content d-flex align-items-center">
                                                        <div class="app-file-folder-logo mr-75">
                                                            <i class="bx bx-folder font-medium-4"></i>
                                                        </div>
                                                        <div class="app-file-folder-details">
                                                            <div class="app-file-folder-name font-size-small font-weight-bold">To-do</div>
                                                            <div class="app-file-folder-size font-size-small text-muted">2 files, 14.05mb</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="card-body px-75 py-50">
                                                    <div class="app-file-folder-content d-flex align-items-center">
                                                        <div class="app-file-folder-logo mr-75">
                                                            <i class="bx bx-folder font-medium-4"></i>
                                                        </div>
                                                        <div class="app-file-folder-details">
                                                            <div class="app-file-folder-name font-size-small font-weight-bold">Video</div>
                                                            <div class="app-file-folder-size font-size-small text-muted">130 files, 890mb</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="card-body px-75 py-50">
                                                    <div class="app-file-folder-content d-flex align-items-center">
                                                        <div class="app-file-folder-logo mr-75">
                                                            <i class="bx bx-folder font-medium-4"></i>
                                                        </div>
                                                        <div class="app-file-folder-details">
                                                            <div class="app-file-folder-name font-size-small font-weight-bold">Music</div>
                                                            <div class="app-file-folder-size font-size-small text-muted">15 files, 58mb</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="card-body px-75 py-50">
                                                    <div class="app-file-folder-content d-flex align-items-center">
                                                        <div class="app-file-folder-logo mr-75">
                                                            <i class="bx bx-folder font-medium-4"></i>
                                                        </div>
                                                        <div class="app-file-folder-details">
                                                            <div class="app-file-folder-name font-size-small font-weight-bold">Documents</div>
                                                            <div class="app-file-folder-size font-size-small text-muted">12 files, 9.5mb</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="card-body px-75 py-50">
                                                    <div class="app-file-folder-content d-flex align-items-center">
                                                        <div class="app-file-folder-logo mr-75">
                                                            <i class="bx bx-folder font-medium-4"></i>
                                                        </div>
                                                        <div class="app-file-folder-details">
                                                            <div class="app-file-folder-name font-size-small font-weight-bold">Photos</div>
                                                            <div class="app-file-folder-size font-size-small text-muted">3.6k files, 348mb</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label class="app-file-label">Files</label>
                                <div class="row app-file-files">
                                    <div class="col-md-3 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/pdf.png" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-details">
                                                        <div class="app-file-name font-size-small font-weight-bold">Banner.jpg</div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">13kb</div>
                                                        <div class="app-file-type font-size-small text-muted">Image File</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/psd.png" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-details">
                                                        <div class="app-file-name font-size-small font-weight-bold">Management.docx</div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">15.60mb</div>
                                                        <div class="app-file-type font-size-small text-muted">Word Document</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/doc.png" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-details">
                                                        <div class="app-file-name font-size-small font-weight-bold">Thunder.mp3</div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">3.4mb</div>
                                                        <div class="app-file-type font-size-small text-muted">Mp3 File</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/sketch.png" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-details">
                                                        <div class="app-file-name font-size-small font-weight-bold">Dashboard.sketch</div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">108kb</div>
                                                        <div class="app-file-type font-size-small text-muted">Sketch File</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/psd.png" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-details">
                                                        <div class="app-file-name font-size-small font-weight-bold">Logo.psd</div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">10.6kb</div>
                                                        <div class="app-file-type font-size-small text-muted">Photoshop File</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/sketch.png" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-details">
                                                        <div class="app-file-name font-size-small font-weight-bold">Logo_Design.sketch</div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">256.5kb</div>
                                                        <div class="app-file-type font-size-small text-muted">Sketch File</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/doc.png" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-details">
                                                        <div class="app-file-name font-size-small font-weight-bold">Bootstrap.xyz</div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">0.0kb</div>
                                                        <div class="app-file-type font-size-small text-muted">Unknown File</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="card border shadow-none mb-1 app-file-info">
                                            <div class="card-content">
                                                <div class="app-file-content-logo card-img-top">
                                                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                    <img class="d-block mx-auto" src="app-assets/images/icon/pdf.png" height="38" width="30" alt="Card image cap">
                                                </div>
                                                <div class="card-body p-50">
                                                    <div class="app-file-details">
                                                        <div class="app-file-name font-size-small font-weight-bold">Read_Me.pdf</div>
                                                        <div class="app-file-size font-size-small text-muted mb-25">10.5kb</div>
                                                        <div class="app-file-type font-size-small text-muted">PDF File</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- App File - Files Section Ends -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                            <span class="text-muted font-small-3">Active</span>
                        </div>
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">today</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>How can we help? 😄</p>
                                    <span class="chat-time">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class="chat-time">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class="chat-time">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                        <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; GENIWORKS</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-file-manager.js"></script>
    <!-- END: Page JS-->
<!--Basic Modal -->
                        <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="myModalLabel1">Add File</h3>
                                                        <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                                                            <i class="bx bx-x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="tab-pane active fade show" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit media object start -->
                                <form id="mydata" enctype="multipart/form-data" method="post">
                                     <div class="row">
                                            <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Upload File</label>
                                                            <div class="custom-file">
                                                                <input name="flfile" type="file" class="custom-file-input" id="inputGroupFile04">
                                                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                      
                                        
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="flstatus" class="form-control">
                                                            <option value="Shareable">Shareable</option>
                                                            <option value="Secret">Secret</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Role</label>
                                                        <select name="flrole" class="form-control">
                                                            <option value="Process">Process</option>
                                                            <option value="Public">Public</option>
                                                            <option value="Private">Private</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table mt-1">
                                                            <thead>
                                                                <tr>
                                                                    <th>File Permission</th>
                                                                    <th>Read</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Users</td>
                                                                    <td>
                                                                        <div class="checkbox"><input type="checkbox" id="users-checkbox1" class="checkbox-input" checked>
                                                                            <label for="users-checkbox1"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox"><input type="checkbox" id="users-checkbox2" class="checkbox-input"><label for="users-checkbox2"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox"><input type="checkbox" id="users-checkbox4" class="checkbox-input" checked>
                                                                            <label for="users-checkbox4"></label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Articles</td>
                                                                    <td>
                                                                        <div class="checkbox"><input type="checkbox" id="users-checkbox5" class="checkbox-input"><label for="users-checkbox5"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox"><input type="checkbox" id="users-checkbox6" class="checkbox-input" checked>
                                                                            <label for="users-checkbox6"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox"><input type="checkbox" id="users-checkbox8" class="checkbox-input" checked>
                                                                            <label for="users-checkbox8"></label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="submit" id="fladdfile" name="fladdfile" class="btn btn-primary ml-1" data-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </form>
                                        
                                       <script type="text/javascript">









$(document).ready(function () {

    $("#fladdfile").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#mydata')[0];

    // Create an FormData object
        var data = new FormData(form);

    // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");

    // disabled the submit button
        $("#fladdfile").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "controls/order.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {


            },
            error: function (e) {

                $("#result").text(e.responseText);
                console.log("ERROR : ", e);
                $("#fladdfile").prop("disabled", false);

            }
        });

    });

});

</script>
                                    </div>
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>













                                        
</body>
<!-- END: Body-->

</html>
<?php
}

}
?>