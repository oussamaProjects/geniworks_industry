<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Checklist - MyDadje</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Editable CSS -->
   <!-- <link type="text/css" rel="stylesheet" href="../assets/plugins/jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="../assets/plugins/jsgrid/jsgrid-theme.min.css" />-->
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader"><img src="img/apple-touch-icon.png" width="100" />
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('header.php'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('leftside.php'); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Daily Maintenance Checklist</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">DMC</li>
                        </ol>
                    </div>
                    <div>
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <!-- Column -->
                        <div class="card">
                            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle"></h6>
                                <button type="button" class="btn btn-info btn-rounded m-t-10 float-left" data-toggle="modal" data-target="#add-contact">Add New Equipment</button>
                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Add Equipment</h4> </div>
                                            <div class="modal-body">

            <div class="col-lg-12 col-xlg-9 col-md-7">
                    <div class="card">
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">General</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#asasset" role="tab">Equipment Parts</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                <!--second tab-->
                                <div class="tab-pane" id="asasset" role="tabpanel">
                                    <div class="card-body">
                                        <h4 class="font-medium m-t-30">Equipment Parts For : <span id="ebrnd1"></span></h4>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Equipment Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="pinternalid" id="eint" onChange="intFunction(this);" class="form-control" placeholder="internal ID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">internal ID</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="pahrc" id="eprt" onChange="eprtFunction(this);" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                <input type='file'  class="upload" name='eqpic'>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane active" id="aassets" role="tabpanel">
                                    <form method='POST'  class="form-horizontal"  action='controls/addequipment.php' enctype="multipart/form-data">
                                        <div class="form-group">
                                            <br>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Equipment Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="brnd" id="ebrnd" onChange="brndFunction(this);" class="form-control" placeholder="Equipment Brand">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Serial Number</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="serialnum" class="form-control" placeholder="Serial Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">internal ID</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="internalid" class="form-control" placeholder="internal ID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">AHR Controller</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="ahrc" class="form-control" placeholder="AHR Controller">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Equipment Function</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="funct" class="form-control" placeholder="Equipment Function">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Acquisition Date</label>
                                                <div class="col-md-8">
                                                    <input type="date" name="acqd" class="form-control" placeholder="Acquisition Date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Owner</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="eqowner" placeholder="OWNER">
                                                </div>
                                            </div>
                                        </div>

                                              
                                                <div id="eqpart" style="display: none; position: absolute;">
                                                 <h4 class="font-medium m-t-30">Part</h4>
                                                <hr>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Part Internal ID</label>
                                                <div class="col-md-8">
                                                    <span id="eint2"></span>
                                                    <input type="hidden" id="eint1" name="eqpid" placeholder="Part Internal ID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Part Name</label>
                                                <div class="col-md-8">
                                                    <span id="eprt2"></span>
                                                    <input type="hidden" id="eprt1" name="eqpname" placeholder="Part Name">
                                                </div>
                                            </div>
                                        </div>

                                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                    <input type='file'  class="upload" name='eqppic'>
                                                </div>
                                            </div>
                                                 <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                    <input type='file'  class="upload" name='eqpic'>
                                                </div>
                                            
                                            </div>
                                             <div class="modal-footer">
                                                    <input type='submit'  class="btn btn-primary" name="addeq" value="submit">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                
                                
                                <div class="tab-pane" id="asasset" role="tabpanel">
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <div class="table-responsive">
                                    <?php include('controls/showeq.php');?>
                                </div>

                                
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

<script>
    
 //    function Function(element) {
   //  document.getElementById("assetn").innerHTML = "RTG";
  //   document.getElementById("assetn1").innerHTML = "RTG";
//}

function brndFunction(element) {
     var ebrnd = document.getElementById("ebrnd").value;
     document.getElementById("ebrnd1").innerHTML = ebrnd;

                    
}

function intFunction(element) {
     var eint = document.getElementById("eint").value;
     document.getElementById("eint1").value = eint;
     document.getElementById("eint2").innerHTML = eint;

         document.getElementById("eqpart").style.display = '';
                   document.getElementById("eqpart").style.visibility="visible";
                   document.getElementById("eqpart").style.position = 'relative';

}

function eprtFunction(element) {
     var eprt = document.getElementById("eprt").value;
     document.getElementById("eprt1").value = eprt;
     document.getElementById("eprt2").innerHTML = eprt;
         document.getElementById("eqpart").style.display = '';
                   document.getElementById("eqpart").style.visibility="visible";
                   document.getElementById("eqpart").style.position = 'relative';
}
</script>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 MyDadje by GENIWORKS
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- Editable -->
    <script src="assets/plugins/jsgrid/db.js"></script>
    <script type="text/javascript" src="assets/plugins/jsgrid/jsgrid.min.js"></script>
    <script src="js/jsgrid-init.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>


<!--<style>
    /*
 * Define the widths: play around with these 
 * to get a best fit.
 */
/*
 * Basic styles, good for a large display. Everything fits in
 * one row, no wrapping. All text based cells grow equally.
 */
.table-row {
  display: flex;
  display: -webkit-flex;
  flex-direction: row;
  -webkit-flex-direction: row;
  flex-wrap: no-wrap;
  -webkit-flex-wrap: no-wrap;
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
.wrapper {
  display: flex;
  display: -webkit-flex;
  flex-direction: row;
  -webkit-flex-direction: row;
}
.column {
  flex-grow: 0;
  -webkit-flex-grow: 0;
  flex-shrink: 0;
  -webkit-flex-shrink: 0;
  vertical-align: top;
}
.index {
  width: 25px;
}
.title {
  width: 220px;
}
.module {
  width: 110px;
}
.reporter {
  width: 85px;
}
.status {
  width: 95px;
}
.owner {
  width: 75px;
}
.severity {
  width: 80px;
}
.watch,
.add-comment {
  width: 18px;
}
.date {
  width: 110px;
}
.index {
  text-align: center;
}
.title {
  font-weight: bold;
  color: #337AB5;
}
.comment {
  width: 120px;
}
.title,
.comment {
  flex-grow: 1;
  -webkit-flex-grow: 1;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  padding-right: 4px;
}
.date {
  width: 110px;
  text-align: right;
  padding-right: 4px;
}
/* growable wrappers */
.title-comment,
.title-comment-module-reporter,
.attributes {
  flex-grow: 1;
  -webkit-flex-grow: 1;
}
/*
 * Media queries: optimize for different screen widths.
 */
/*
 * Media breaks.
 */
@media all and (max-width: 1236px) {
  .title-comment {
    flex-direction: column;
    -webkit-flex-direction: column;
    width: 220px;
  }
  .title-comment div {
    flex-grow: 0;
    -webkit-flex-grow: 0;
  }
  .title-comment > div {
    width: 100%;
  }
  .module-reporter,
  .status-owner {
    flex-direction: column;
    -webkit-flex-direction: column;
  }
  .module-reporter div,
  .status-owner div {
    flex-grow: 0;
    -webkit-flex-grow: 0;
  }
}
@media all and (max-width: 956px) {
  .module-reporter {
    flex-direction: row;
    -webkit-flex-direction: row;
  }
  .title-comment-module-reporter {
    flex-direction: column;
    -webkit-flex-direction: column;
    width: 220px;
  }
  .title-comment-module-reporter div {
    flex-grow: 0;
    -webkit-flex-grow: 0;
  }
  .title-comment-module-reporter > div {
    width: 100%;
  }
  .status-owner-severity {
    flex-direction: column;
    -webkit-flex-direction: column;
  }
  .status-owner-severity div {
    flex-grow: 0;
    -webkit-flex-grow: 0;
  }
  .icons {
    flex-direction: column;
    -webkit-flex-direction: column;
  }
  .icons div {
    flex-grow: 0;
    -webkit-flex-grow: 0;
  }
  .dates {
    flex-direction: column;
    -webkit-flex-direction: column;
  }
  .dates div {
    flex-grow: 0;
    -webkit-flex-grow: 0;
  }
}
@media all and (max-width: 528px) {
  .table-row {
    padding-left: 4px;
    padding-right: 4px;
  }
  .attributes {
    flex-direction: column;
    -webkit-flex-direction: column;
    width: 220px;
  }
  .attributes div {
    flex-grow: 0;
    -webkit-flex-grow: 0;
  }
  .attributes > div {
    width: 100%;
  }
  .module-reporter,
  .status-owner {
    flex-direction: row;
    -webkit-flex-direction: row;
  }
}
/*
 * General good-look styles
 */
.table-row {
  border-bottom: 1px solid #e0e0e0;
  border-collapse: collapse;
  padding-top: 2px;
}
.table-row.header {
  background-color: #FFEEDB;
  font-weight: bold;
  padding-top: 6px;
  padding-bottom: 6px;
}
.glyphicon {
  color: #DDDDDD;
}
.header .glyphicon {
  color: #333;
}
.glyphicon-eye-open.active {
  color: blue;
}
.glyphicon-comment.active {
  color: #3EBB0D;
}
.glyphicon:hover {
  color: #666;
  cursor: pointer;
  text-decoration: underline;
}
.reporter {
  color: #999999;
}
.comment {
  font-style: italic;
}
.severity.high {
  color: red;
}
.severity.medium {
  color: blue;
}
.severity.low {
  color: green;
}

</style>-->