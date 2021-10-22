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
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon-32x32.png">
    <title>Equipments Manager - MyDadje</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Editable CSS -->
   <!-- <link type="text/css" rel="stylesheet" href="../assets/plugins/jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="../assets/plugins/jsgrid/jsgrid-theme.min.css" />-->
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/default-dark.css" id="theme" rel="stylesheet">
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
        <div class="loader"><img src="../img/apple-touch-icon.png" width="100" />
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
                        <h3 class="text-themecolor">TOOLS MANAGER</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Equipments</li>
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
                                <button type="button" class="btn btn-info m-t-10 float-left" data-toggle="modal" data-target="#add-contact">Add New Equipment</button>
                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            	<h4 class="modal-title" id="myModalLabel">Add Equipment</h4> 
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                            <div class="modal-body">

            <div class="col-lg-12 col-xlg-9 col-md-7">
                    <div class="card">
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">General</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                <!--second tab-->
                               



                                <div class="tab-pane active" id="aassets" role="tabpanel">
                                    <form method='POST'  class="form-horizontal"  action='../controls/addtool.php' enctype="multipart/form-data">
                                        <div class="form-group">
                                            <br>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">equipm Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="brnd" id="ebrnd" onChange="brndFunction(this);" class="form-control" placeholder="equipm Name" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Serial Number</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="serialnum" class="form-control" placeholder="Serial Number" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Function</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="tfunction" class="form-control" placeholder="equipm Function" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Price</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="pricetl" class="form-control" placeholder="equipm Price" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Supplier</label>
                                                <div class="col-md-8">
                                                    <select name="tsupplier" class="form-control" placeholder="equipm Supplier" required="required">
                                                        <option value="3S MOROCCO">3S MOROCCO</option>
                                                        <option value="BRICOMA">BRICOMA</option>
                                                        <option value="BRICOLAGE">BRICOLAGE</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                        
                                       
                                             <label class="control-label col-md-4"> <div class="fileupload btn btn-danger waves-effect waves-light"><span><i class="ion-upload"></i>Upload Image</span>
                                              	<input type='file' onchange="loadFile(event)"  class="upload" name='eqpic' required="required">
                                              </div></label>
                                              <div class="col-md-8">
                                                <img src="" id="output" class="" width="150">
                                                </div>
                                            </div>
                                        </div>
<script>
	var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>    
                                            
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
                                    <?php include('../controls/showeq.php');?>
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
                © 2019 GENIWORKS INC
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
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
    <!-- Editable -->
    <script src="../assets/plugins/jsgrid/db.js"></script>
    <script type="text/javascript" src="../assets/plugins/jsgrid/jsgrid.min.js"></script>
    <script src="../js/jsgrid-init.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
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