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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Dadje - Web Management Solution</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    <link href="assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />

    <link href="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="css/pages/stylish-tooltip.css" rel="stylesheet">
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
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Dadje</p>
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
                    <!--<h2 class="text-themecolor">Owner</h2>-->
                    <button  alt="default" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn waves-effect waves-light btn-primary" >Add Owner</button>
                </div>
                <div class="col-md-7 align-self-center">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Owner</li>
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
                <!-- Row -->
<script>
     function ownerFunction(element) {
     var ownerr = document.getElementById("own1").value;
     document.getElementById("own2").value = ownerr;
     document.getElementById("own3").value = ownerr;
     document.getElementById("own4").value = ownerr;
     document.getElementById("own5").value = ownerr;
}

function ownerjFunction(element) {
     var ownerrj = document.getElementById("ownj1").value;
     document.getElementById("ownj2").value = ownerrj;
     document.getElementById("ownj3").value = ownerrj;
     document.getElementById("ownj4").value = ownerrj;
}
</script>
<script>
     function assetFunction(element) {
     var ownerr = document.getElementById("as1").value;
     document.getElementById("as2").value = ownerr;
     document.getElementById("as3").value = ownerr;
}
 function picFunction(element) {
     var pico = document.getElementById("ownpic").value;
     document.getElementById("ownpic1").value = pico;
}



  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>



                <div class="row">
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: #00A1DB;">
                                                <h3 class="modal-title" style=" color: white;" id="myLargeModalLabel">Add Owner</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="card-body">
                                               
                                        <form class="form-horizontal">
                                         <div class="row">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <label class="col-md-12">Name</label>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="text" onChange="ownerFunction(this);" id="own1" placeholder="Onwer Name" class="form-control form-control-line">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="col-sm-12">Job Title</label>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <input type="text" onChange="ownerjFunction(this);" id="ownj1" placeholder="Job Title" class="form-control form-control-line" name="example-email" id="example-email">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="col-sm-12">Internal ID</label>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <input type="text" readonly="readonlyy" id="" placeholder="Intenal ID" class="form-control form-control-line" name="example-email" id="example-email">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label class="col-md-12">Phone</label>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="text" placeholder="Onwer Phone" class="form-control form-control-line">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="col-sm-12">Email</label>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <input type="email" placeholder="Onwer Email" class="form-control form-control-line" name="example-email" id="example-email">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                </form>
                                <hr>

                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->

                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">Assets</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#asasset" role="tab">Sub-Assets</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#acontract" role="tab">Contract</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#aoowner" role="tab">Order Owner</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#aseftys" role="tab">Safety Supervisor</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                <!--second tab-->
                                <div class="tab-pane" id="aoowner" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        
                                        <h4 class="font-medium m-t-30">Skill Set</h4>
                                        <hr>
                                       
                                    </div>
                                </div>
                                <div class="tab-pane active" id="aassets" role="tabpanel">
                                    
                          <!--  <div class="card-body">
                                <form class="needs-validation" novalidate="">
                                    <div class="form-body">
                                        <h4 class="box-title">Add New Asset For : (Owner)</h4>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Owner</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Owner Name">
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Name</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Asset Name">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                   
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Gender</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control custom-select">
                                                            <option value="">Male</option>
                                                            <option value="">Female</option>
                                                        </select>
                                                        <small class="form-control-feedback"> Select your gender. </small> </div>
                                                </div>
                                            </div>
                              
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Date of Birth</label>
                                                    <div class="col-md-6">
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                    </div>
                                                </div>
                                            </div>
                                      
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Category</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                            <option value="Category 1">Category 1</option>
                                                            <option value="Category 2">Category 2</option>
                                                            <option value="Category 3">Category 5</option>
                                                            <option value="Category 4">Category 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Membership</label>
                                                    <div class="col-md-9">
                                                        <div class="m-b-10">
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Free</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Paid</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <h3 class="box-title">Address</h3>
                                        <hr class="m-t-0 m-b-40">
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Address 1</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Address 2</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">City</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">State</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Post Code</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Country</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control custom-select">
                                                            <option>Country 1</option>
                                                            <option>Country 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                       
                                    </div>-->






                                   <div class="form-row">
                                    <table>
                                        <tr>
                                            <td>
                                                <label class="col-md-12">Owner</label>
                                                
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Onwer Name" id="own2" class="form-control form-control-line">
                                                </div>
                                        </td>
                                        <td>
                                            <label class="col-sm-12">Name</label>
                                        </td>
                                        <td>
                                            <div class="col-sm-12">
                                                    <input type="email" placeholder="Asset Name"  onChange="assetFunction(this);" class="form-control form-control-line" name="example-email" id="as1">
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>
                                                <label class="col-md-12">Brand</label>
                                                
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Asset Brand" class="form-control form-control-line">
                                                </div>
                                        </td>
                                        <td>
                                            <label class="col-sm-12">Serial Number</label>
                                        </td>
                                        <td>
                                            <div class="col-sm-12">
                                                    <input type="email" placeholder="Serial Number" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                         <td>
                                            <label class="col-sm-12">Capacity</label>
                                        </td>
                                        <td>
                                            <div class="col-sm-12">
                                                    <input type="email" placeholder="Asset Capacity" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                        </td>
                                <tr>
                                    <td>
                                            <label class="col-sm-12">Lengh</label>
                                        </td>
                                        <td>
                                            <div class="col-sm-12">
                                                    <input type="email" placeholder="Asset Capacity" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                        </td>
                                </tr>
                            </table>
                                <!--  <table>
                                            <tr>
                                                <td><label class="col-md-12">Name</label></td>
                                                <td><input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </td>
                                                <td>
                                                    <label class="col-md-12">Brand</label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </td>

                                            </tr>
                                       
                                            <tr>
                                                <td>
                                                    <label class="col-md-12">Serial Number</label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required="">
                                                    <div class="valid-feedback">Looks good!</div>
                                                </td>
                                                <td>
                                                    <label class="col-md-12">Acquisition Date</label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required="">
                                                    <div class="invalid-feedback">Please choose a username.s</div>
                                                </td>
                                            </tr>
                                    </table>
                                    </div>-->
                              
                                  
                                  
                                  
                              
                            </div>
                  

                                </div>
                                
                                <div class="tab-pane" id="aseftys" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="asasset" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal">
                                            <div class="form-row">
                                    <table>
                                        <tr>
                                            <td>
                                                <label class="col-md-12">Owner</label>
                                                
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Onwer Name" id="own3" class="form-control form-control-line">
                                                </div>
                                        </td>
                                        <td>
                                            <label class="col-sm-12">Name</label>
                                        </td>
                                        <td>
                                            <div class="col-sm-12">
                                                    <input type="email" placeholder="Asset Name" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>
                                                <label class="col-md-12" id="as2">Asset</label>
                                                
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Asset Brand" id="as3" class="form-control form-control-line">
                                                </div>
                                        </td>
                                        <td>
                                            <label class="col-sm-12">Serial Number</label>
                                        </td>
                                        <td>
                                            <div class="col-sm-12">
                                                    <input type="email" placeholder="Serial Number" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                        </td>
                                    </tr>
                                    
                                <tr>




<!--
<img src="img/shiptoshore.jpg" usemap="#image-map" height="500" width="900" >

<map name="image-map">
    <area target="_self" alt="driver cabin" title="driver cabin" href="" coords="752,277,350,174" shape="rect">
    <area target="_self" alt="back reach" title="back reach" href="" coords="172,275,1342,305" shape="rect">
    <area target="_self" alt="stairs" title="stairs" href="" coords="554,195,465,774" shape="rect">
    <area target="_self" alt="legs" title="legs" href="" coords="495,593,491,722,484,780,780,779,784,737,781,714,782,595" shape="poly">
    <area target="_self" alt="rail" title="rail" href="" coords="1205,306,1197,327,202,324,177,306" shape="poly">
</map>-->

<!--
<div id="screen-selector" style="display: block;">

<div id="smap-244">

<img name="smap244" src="img/shiptoshore.jpg" id="smap244" usemap="#m_smap244" alt="" border="0">

<map name="m_smap244" id="m_smap244" style="">
<area shape="poly" coords="80,303,134,301,151,292,151,276,219,232,224,149,272,148,277,224,304,223,487,331,491,345,572,347,574,358,464,380,395,419,370,416,353,427,353,459,421,462,478,434,496,400,640,379,639,289,607,240,510,183,385,112,300,92,171,92,171,170,180,226,131,226,73,261,80,303" id="syos-id-1" screenid="syos-id-1" class="smap-244-screen-1" alt="screen-1" onmouseover="document.getElementById('smap244').src = 'https://tickets.venuecymru.co.uk/_syos/Images/smap-244/smap-244-screen-1.png'" onmouseout="document.getElementById('smap244').src = 'https://tickets.venuecymru.co.uk/_syos/Images/smap-244/smap-244.png'">
<area shape="poly" coords="331,252,263,225,149,314,351,425,365,414,394,414,461,376,478,374,495,361,447,321,331,252" id="syos-id-2" screenid="syos-id-2" class="smap-244-screen-2" alt="screen-2" onmouseover="document.getElementById('smap244').src = 'https://tickets.venuecymru.co.uk/_syos/Images/smap-244/smap-244-screen-2.png'" onmouseout="document.getElementById('smap244').src = 'https://tickets.venuecymru.co.uk/_syos/Images/smap-244/smap-244.png'">
<area shape="poly" coords="146,316,69,376,9,412,244,552,318,510,362,468,347,466,346,427,146,316" id="syos-id-3" screenid="syos-id-3" class="smap-244-screen-3" alt="screen-3" onmouseover="document.getElementById('smap244').src = 'https://tickets.venuecymru.co.uk/_syos/Images/smap-244/smap-244-screen-3.png'" onmouseout="document.getElementById('smap244').src = 'https://tickets.venuecymru.co.uk/_syos/Images/smap-244/smap-244.png'">
</map>
</div></div>-->
<style>
/* #smap-244, #smap-244-mini {
  padding: 10px;
  width: 100%;
  text-align: center;
}

img {
  display: inline-block;
  vertical-align: middle;
  max-width: 100%;
  height: auto;
}

#screen-selector {
  width: 100%;
  max-width: 90%;
  overflow: hidden;
  margin: 0 auto;
}    
</style>
<script>
 //   $(document).ready(function(e) {
   // $('img[usemap]').rwdImageMaps();
//});
</script>

                                </tr>
                            </table>
                                
                              
                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                     
                                       
                                            
                                      
                                    </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                    
                                </div>
                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Add Asset</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="card-body">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Image Map Generated by http://www.image-map.net/ -->
                                    </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                               
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h3>Hello Mr <input type="text" placeholder="Owner Name" readonly="readonly" style="border:none 0px; background:transparent;" id="own4" name=""></h3>
                                <h6><input type="text" placeholder="Job Description" name="" readonly="readonly" style="border:none 0px; background:transparent;"  id="ownj2" ></h6>
                                <center class="m-t-30">
                                    
                                 <img src="" id="output" class="img-circle" width="150" />
                               <input type="file" accept="image/*" onchange="loadFile(event)">

                                <!-- <div class="card-body">
                                <h4 class="card-title">Picture</h4>
                                
                                <form action="#" class="dropzone dz-clickable">
                                    
                                <div class="dz-default dz-message" onChange="picFunction(this);" id="ownpic">
                                    <span>Drop picture here</span>
                                </div>
                                </form>
                            </div>-->
                            
                                    <h4 class="card-title m-t-10"> <input type="text" placeholder="Owner Name" name="" readonly="readonly" style="border:none 0px; background:transparent;"  id="own4"></h4>
                                    <h6 class="card-subtitle" id=""><input type="text" placeholder="Job Title" name="" readonly="readonly" style="border:none 0px; background:transparent;"  id="ownj3" ></h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><!--<i class="icon-settings"></i>--> <font class="font-medium">0 Assets</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><!--<i class="icon-picture"></i>--> <font class="font-medium">0 Order Owners</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>hartmutgoeritz@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#assets" role="tab">Assets</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contract" role="tab">Contract</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#oowner" role="tab">Order Owner</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#seftys" role="tab">Safety Supervisor</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                <!--second tab-->
                                <div class="tab-pane" id="oowner" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class="font-medium m-t-30">Skill Set</h4>
                                        <hr>
                                        <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="assets" role="tabpanel">
                                    <div class="card-body">

                                        <div class="form-group m-t-40  row">
                                                <div class="col-4">
                                                    <a class="mytooltip" href="javascript:void(0)" onClick="clkrtgFunction(this);"> <img src="img/grue-rtg.png"/><span class="tooltip-content5"><span class="tooltip-item2"><span class="tooltip-inner2">RTG<br> <img src="img/RTGA.jpg" width="100" /></span></span></span></a>
                                                </div>
                                                <div class="col-4">

                                                   <a class="mytooltip" href="javascript:void(0)" onClick="clkstsFunction(this);"><img src="img/grue-sts.png"><span class="tooltip-content5"><span class="tooltip-item2"><span class="tooltip-inner2">STS<br> <img src="img/shiptoshore.jpg" width="200" /></span></span></span></a>
                                                </div><!--
                                                <div class="col-4">
                                                <img src="https://img.icons8.com/ios-glyphs/90/000000/fishing-boat.png">
                                                </div>-->
                                                <div class="col-4">

                                                <a class="mytooltip" href="javascript:void(0)" onClick="clkboomcFunction(this);"><img src="img/86816.png" ><span class="tooltip-content5"><span class="tooltip-item2"><span class="tooltip-inner2">Boom Crane<br><img src="img/boom-crane.jpg" width="100" /> </span></span></span></a>
                                                </div>
                                            </div>

                                            

                                        <form id="assinfo"  class="form-horizontal">
<h3 class="card-title">Asset</h3><hr>
                                            <div class="form-group m-t-40 row">
                                                
                                                <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-4">Name</label>
                                                    <div class="col-md-8">
                                                        <div id="assetn"></div>
                                                    </div>
                                                </div>
                                            </div>

                                                <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-4">Brand</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="" type="text" placeholder="Brand Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-4">Capacity</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" placeholder="Asset Capacity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-4">Height</label>
                                                    <div class="col-md-8">
                                                         <input class="form-control" type="text" placeholder="Asset Height">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
              <h3 class="card-title">Sub-Asset</h3><hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div id="education_fields"></div>
                                <div class="row">
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <div id="assetn1"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Major" name="Major[]" value="" placeholder="Sub-Asset Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Internal ID">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select class="form-control" id="educationDate" name="educationDate[]">
                                                    <option value="">WPM</option>
                                                    <option value="2015">1</option>
                                                    <option value="2016">2</option>
                                                    <option value="2017">3</option>
                                                    <option value="2019">4</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" onclick="education_fields();"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>

                    document.getElementById("assinfo").style.visibility="hidden";
                    document.getElementById("assinfo").style.display = 'none';
                    document.getElementById("assinfo").style.position = 'absolute';


     function clkrtgFunction(element) {
     document.getElementById("assetn").innerHTML = "RTG";
     document.getElementById("assetn1").innerHTML = "RTG";
                   document.getElementById("assinfo").style.display = '';
                   document.getElementById("assinfo").style.visibility="visible";
                   document.getElementById("assinfo").style.position = 'relative';

}
function clkstsFunction(element) {
     document.getElementById("assetn").innerHTML = "STS";
     document.getElementById("assetn1").innerHTML = "STS";
                    document.getElementById("assinfo").style.display = '';
                   document.getElementById("assinfo").style.visibility="visible";
                   document.getElementById("assinfo").style.position = 'relative';
}
function clkboomcFunction(element) {
     document.getElementById("assetn").innerHTML = "Boom Crane";
     document.getElementById("assetn1").innerHTML = "Boom Crane";
                    document.getElementById("assinfo").style.display = '';
                   document.getElementById("assinfo").style.visibility="visible";
                   document.getElementById("assinfo").style.position = 'relative';
}
                </script>
                                            
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-primary">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="contract" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                
                                                <div class="sl-right">
                                                    
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                
                                                <div class="sl-right">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="seftys" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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
                                    <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
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
                © 2019 Admin Pro by wrappixel.com
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
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="assets/plugins/dropzone-master/dist/dropzone.js"></script>



    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="assets/plugins/dff/dff.js" type="text/javascript"></script>
  
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>