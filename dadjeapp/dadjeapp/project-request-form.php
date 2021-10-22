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
    <title>Project Request Form</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/gridstack/gridstack.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="../assets/plugins/nestable/nestable.css" rel="stylesheet" type="text/css" />
    <!-- page css -->
    <link href="css/pages/other-pages.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/datatables/media/css/dataTables.bootstrap4.css">
    <link href="css/pages/tab-page.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
            <p class="loader__label">Project Request Form Dadje</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('header.php');?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('leftside.php');?>
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
                    <h2 class="text-themecolor black">Project Request form</h2>
                </div>
                
                <div class="">
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xlg-2 col-lg-12 col-md-12 ">
                                    <div class="card-body inbox-panel">
                                       <!-- <ul class="list-group list-group-full">
                                            <li class="list-group-item active"> <a href="javascript:void(0)" data-toggle="tab" href="#home3" role="tab" aria-selected="false"> Discription </a></li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)" data-toggle="tab" href="#profile3" role="tab" aria-selected="false"> Content </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)" data-toggle="tab" href="#messages3" role="tab" aria-selected="true"> Access </a></li>
                                            <li class="list-group-item ">
                                                <a href="javascript:void(0)"> Components </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)"> Drawing </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)"> Delivery </a>
                                            </li>
                                        </ul>-->

<form action="" accept-charset="utf-8">
                                <div class="vtabs customvtab">

                                    <ul class="nav nav-tabs tabs-vertical" role="tablist">
                                        <li class="nav-item"  style="background-color: #256480; padding: 15px 0px 7px 12px; margin-right: 10px; margin-top: 10px; margin-bottom: 20px; "> <span class="hidden-sm-up"><i style="color: white;">Milestones</i></span> <h4 style="color: white;" class="hidden-xs-down">  Milestones</h4> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-receipt"> brief</i></span> <span class="hidden-xs-down">brief</span> </a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#content3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-layout-width-full"> Content</i></span> <span class="hidden-xs-down">Content</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#access3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"> Access</i></span> <span class="hidden-xs-down">Access</span> </a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#components3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-panel"> Features</i></span> <span class="hidden-xs-down">Features</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#drawing3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-layout"> Layout</i></span> <span class="hidden-xs-down">Layout</span> </a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#database3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-save"> DB</i></span> <span class="hidden-xs-down">DB</span> </a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#delivery3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-direction-alt"> Pr.WBS</i></span> <span class="hidden-xs-down">Project WBS</span></a> </li>
                                        <li class="nav-item" style="padding-right: 15px;"><button style="margin-bottom: 20px; background: #00A1DB;
    border: 1px solid #00A1DB; padding: 7px 40px;" name="submit" id="submit" class="btn btn-info"  class="btn btn-primary m-b-20 p-10 btn-block waves-effect waves-light">Add</button></li>



                                       
                                    </ul>
                                    <!-- Tab panes -->

<div class=" col-md-12 bg-light-part b-l"   style="background-color: white;">
                                    <div class="card-body" >
                                        
                                        <div class="tab-content" >
                                        <div class="tab-pane active" id="home3" role="tabpanel">
                            
                                    <div class="card-body">
                                        <h3 class="font-medium">Project Description </h3>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Project Name</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" id="projectn" onChange="prnFunction(this);" placeholder="Title" required="required">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Issue</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" id="issu" onChange="issuFunction(this);" placeholder="Issue" required="required">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Contremeasure</label>
                                                <div class="col-md-8">
                                                    <input class="form-control"  name="contremsr" id="contrems" onChange="cntrmFunction(this);" placeholder="Contermeasure"  required="required">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4">Description</label>
                                                <div class="col-md-8">
                                                   <textarea class=" form-control" rows="15" name="discription" id="discription" onChange="discrFunction(this);" placeholder="Discription ..." required="required"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                          
                                        </div>
                                        <div class="tab-pane" id="content3" role="tabpanel">

                                    <div class="card-body">
                                        <h3 class="font-medium">Project Details</h3>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4"><h4>Target</h4></label>
                                                <div class="col-md-8">
                                            <div class="form-group validate">
                                                <fieldset class="controls">
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="b2e" name="styled_radio" onChange="targetbeFunction(this);" required="" class="custom-control-input" aria-invalid="false" name="ptarget" id="targetbe"><span class="custom-control-label"> B2E</span> </label>
                                                <div class="help-block"></div>
                                            </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="b2b" name="styled_radio" onChange="targetbbFunction(this);" id="targetbb" class="custom-control-input" aria-invalid="false" required="required"><span class="custom-control-label">B2B</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="b2c" name="styled_radio" onChange="targetbcFunction(this);" id="targetbc" class="custom-control-input" aria-invalid="false" required="required"><span class="custom-control-label">B2C</span> </label>
                                                </fieldset>
                                            </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4"><h4>Type</h4></label>
                                                <div class="col-md-8">
                                                <div class="form-group validate">
                                                    <fieldset class="controls">
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="Static website" name="styled_radio" onChange="typestFunction(this);" required="" id="ptypesw" class="custom-control-input" aria-invalid="false" required="required"><span class="custom-control-label">Static website</span> </label>
                                                <div class="help-block"></div>
                                            </fieldset>
                                                    <fieldset class="controls">
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="Dynamic website" name="styled_radio" onChange="typedtFunction(this);" id="ptypedw" class="custom-control-input" aria-invalid="false" required="required"><span class="custom-control-label">Dynamic website</span> </label>
                                                <div class="help-block"></div>
                                            </fieldset>
                                                <fieldset class="controls">
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="Dynamic web application" name="styled_radio" onChange="typedaFunction(this);" id="ptypeda" class="custom-control-input" aria-invalid="false" required="required"><span class="custom-control-label">Dynamic web application</span> </label>
                                                <div class="help-block"></div>
                                            </fieldset>
                                                
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="Online store" name="styled_radio" onChange="typeecoFunction(this);" id="ptypeos" class="custom-control-input" aria-invalid="false" required="required"><span class="custom-control-label">Online store/ecommerce Platform</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="Portal Web App" name="styled_radio" id="ptypepwa" onChange="typepwFunction(this);" class="custom-control-input" aria-invalid="false" required="required"><span class="custom-control-label">Portal Web Application</span> </label>
                                                </fieldset>
                                                <fieldset>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" value="content management system App" name="styled_radio" id="ptypemsa" onChange="typemsaFunction(this);" class="custom-control-input" aria-invalid="false" required="required"><span class="custom-control-label">content management system App</span> </label>
                                                </fieldset>
                                            </div>
                                
                                        </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4"><h4>This Project Should Contain</h4></label>
                                                <div class="col-md-8">
                                                <div class="controls">
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="texts" name="styled_checkbox" onChange="pctFunction(this);" class="custom-control-input" aria-invalid="false" id="pct" required="required"><span class="custom-control-label">Texts</span> </label>
                                                            
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="picsillus" name="styled_checkbox" onChange="pcpFunction(this);" class="custom-control-input" aria-invalid="false" id="pcp" required="required"><span class="custom-control-label">Pictures/Illustrations</span> </label>
                                                            
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="videos" name="styled_checkbox" onChange="pcvFunction(this);" class="custom-control-input" aria-invalid="false" id="pcv" required="required"><span class="custom-control-label">Videos</span> </label>
                                                            
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="attachf" name="styled_checkbox" onChange="pcaFunction(this);" class="custom-control-input" aria-invalid="false" id="pca" required="required"><span class="custom-control-label">Attachments files</span> </label>
                                                            
                                                    </fieldset>
                                                <div class="help-block"></div></div>

                                      </div>
                                            </div>
                                        </div>
                                    </div>
                    


                                        </div>

                                        <div class="tab-pane" id="access3" role="tabpanel">
                                    <div class="card-body">
                                        <h3 class="font-medium">Access </h3>
                                        <hr>
                                            <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4"><h4>User Access</h4></label>
                                                <div class="col-md-8">
                                                <div class="controls">
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="control panel" name="styled_checkbox" class="custom-control-input" aria-invalid="false" required="required" id="acp" onChange="acpFunction(this);"><span class="custom-control-label">control Panel</span> </label>
                                                            
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="admin user zone" name="styled_checkbox" onChange="aauFunction(this);" class="custom-control-input" aria-invalid="false" id="aau" required="required"><span class="custom-control-label">Admin/User Zone</span> </label>
                                                            
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="access to db" name="styled_checkbox" onChange="aadbFunction(this);" class="custom-control-input" aria-invalid="false" id="aadb" required="required"><span class="custom-control-label">Access To DB</span> </label>

                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="multiple access" name="styled_checkbox" onChange="amaFunction(this);" class="custom-control-input" aria-invalid="false" id="ama" required="required"><span class="custom-control-label">Multiple Access</span> </label>
                                                            
                                                    </fieldset>

                                                <div class="help-block"></div>
                                            </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="tab-pane" id="components3" role="tabpanel">

                                    <div class="card-body">
                                        <h3 class="font-medium">Features </h3>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4"><h4>User Access</h4></label>
                                                <div class="col-md-8">
                                                <div class="controls">
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="control panel" name="styled_checkbox" onChange="fcpFunction(this);" class="custom-control-input" aria-invalid="false" id="fcp" required="required"><span class="custom-control-label">Control Panel</span> </label>
                                                            
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="Admin user zone" name="styled_checkbox" onChange="fauFunction(this);" class="custom-control-input" aria-invalid="false" required="required" id="fau"><span class="custom-control-label">Admin/User Zone</span> </label>
                                                            
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="Chat Zone" name="styled_checkbox" onChange="fczFunction(this);" class="custom-control-input" aria-invalid="false" required="required" id="fcz"><span class="custom-control-label">Chat Zone</span> </label>
                                                            
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="Send Email" name="styled_checkbox" onChange="fsmFunction(this);" class="custom-control-input" aria-invalid="false" required="required" id="fsm"><span class="custom-control-label">Send EMail</span> </label>
                                                            
                                                    </fieldset>
                                                <div class="help-block"></div>
                                            </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4"><h4>Security</h4></label>
                                                <div class="col-md-8">
                                                <div class="controls">
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="verify login with email" onChange="slvFunction(this);" name="styled_checkbox" class="custom-control-input" aria-invalid="false" id="slv" required="required"><span class="custom-control-label">Verify Login With email</span> </label>
                                                            
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="high Ddb security level" onChange="shslFunction(this);" name="styled_checkbox" class="custom-control-input" aria-invalid="false" required="required" id="shsl"><span class="custom-control-label">High DB Security Level</span> </label>
                                                            
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" value="track users access" onChange="stuFunction(this);" name="styled_checkbox" class="custom-control-input" aria-invalid="false" required="required" id="stu"><span class="custom-control-label">Track Users Access</span> </label>
                                                            
                                                    </fieldset>
                                                    
                                                <div class="help-block"></div>
                                            </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                        </div>
                                <div class="tab-pane" id="drawing3" role="tabpanel">
                                    <div class="card-body">
                                        <h3 class="font-medium">Layout </h3>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label col-md-12"><h4>You Can Simplify You Imagination About The Project Here</h4></label>
                                                <div class="col-md-8">
                                                <div class="controls">
                                                   <a  href="sv.php" target="_blank"> Simplify Your Project</a>
                                                </div>

                                                <input type="file" id="filetag"><img style="width: 70%;" src="" id="preview">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="database3" role="tabpanel">
                                    <div class="card-body">
                                        <h3 class="font-medium">Database </h3>
                                        <hr>
                                        <div class="container col-md-12">
                                           

            <div class="form-group row">
                <form name="add_name" id="add_name">
                    <div class="table-responsive">


                        <table class="table table-responsive" id="dynamic_field">
                            <tr>
                                <td><input type="text" name="name[]" placeholder="Enter Table Name" class="form-control name_list"  required="required"/></td>
                                
                            </tr>
                            <tr><td><input type="text" name="name[]" placeholder="Enter Column" class="form-control name_list"  required="required"/></td></tr>
                            <tr><td><button type="button" name="add" id="add" style="padding: 7px 10px 7px 10px; font-size: 14px;" class="btn btn-success">Add Column</button></td></tr>
                        </table>
                        <tr><td><input type="button" name="submit" id="submit" class="btn btn-primary" style="margin-left:12px; background-color: #00A1DB;" value="Create" /></td></tr>
                    </div>
                </form>
            </div>
                                            
                                            <!-- <div class="form-group row">
                                                <label class="control-label col-md-4">Contremeasure</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" placeholder="Contermeasure">
                                                </div>
                                            </div>
 -->
<script>
var fileTag = document.getElementById("filetag"),
    preview = document.getElementById("preview");
    
fileTag.addEventListener("change", function() {
  changeImage(this);
});

function changeImage(input) {
  var reader;

  if (input.files && input.files[0]) {
    reader = new FileReader();

    reader.onload = function(e) {
      preview.setAttribute('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}






$(document).ready(function(){
    var i=1;
    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><div class="input-group"><input type="text" name="name[]" placeholder="Enter Column or Table Name" class="form-control name_list" /><span id="btnd" class="input-group-addon input-group-addon-btn bg-white"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="padding: 7px 10px 7px 10px; font-size: 12px;">X</button></span></div></td></tr>');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
    
    $('#submit').click(function(){      
        $.ajax({
            url:"controls/addtables.php",
            method:"POST",
            data:$('#add_name').serialize(),
            success:function(data)
            {
                alert(data);
                $('#add_name')[0].reset();
            }
        });
    });
    
});












</script>
<style>
    #app-search .input-group-addon-btn {
    padding: 0;

    button {
        border: none;
        background: transparent;
        cursor: pointer;
        height: 100%;
    }
}    
</style>


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="delivery3" role="tabpanel">
                                    <div class="card-body">
                                      <h3 class="font-medium">Project WBS</h3>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <div class="table-responsive">
                                    <table id="mainTable" class="table editable-table table-bordered table-striped m-b-0" style="cursor: pointer;">
                                        <thead>
                                            <tr>
                                                <th>Milestones</th>
                                                <th>Run Time (Hrs)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                    
                                                    <tr>
                                                        <td><h3>Preparation</h3></td>
                                                        <td tabindex="1">0</td>
                                                    </tr>
                                                        <tr>
                                                            <td tabindex="1"> - Owner Project Briefing</td>
                                                            <td tabindex="1">2</td>
                                                        </tr>
                                                        <tr>
                                                            <td tabindex="1"> - Project Studies</td>
                                                            <td tabindex="1">3</td>
                                                        </tr>
                                                        <tr>
                                                            <td tabindex="1"> - Brain-storming</td>
                                                            <td tabindex="1">3</td>
                                                        </tr>
                                                    
                                            <tr>
                                                <td tabindex="1"><h3>Project Design</h3></td>
                                                <td tabindex="1">0</td>
                                            </tr>
                                                        <tr>
                                                            <td tabindex="1"> - Graphic Design</td>
                                                            <td tabindex="1">12</td>
                                                        </tr>
                                                        <tr>
                                                            <td tabindex="1"> - Web Design</td>
                                                            <td tabindex="1">12</td>
                                                        </tr>
                                                        <tr>
                                                            <td tabindex="1"> - DB Creation</td>
                                                            <td tabindex="1">2</td>
                                                        </tr>
                                                        <tr>
                                                            <td tabindex="1"> - Back-end Analysis</td>
                                                            <td tabindex="1">5</td>
                                                        </tr>
                                                        <tr>
                                                            <td tabindex="1"> - Check-point Meeting</td>
                                                            <td tabindex="1">2</td>
                                                        </tr>

                                            <tr>
                                                <td tabindex="1"><h3>Ops Execution</h3></td>
                                                <td tabindex="1">48</td>
                                            </tr>
                                            <tr>
                                                <td tabindex="1"><h3>Project Validation</h3></td>
                                                <td tabindex="1">0</td>
                                            </tr>
                                                        <tr>
                                                            <td tabindex="1"> - Owner Validation</td>
                                                            <td tabindex="1">2</td>
                                                        </tr>
                                                        <tr>
                                                            <td tabindex="1"> - Updates</td>
                                                            <td tabindex="1">12</td>
                                                        </tr>
                                            <tr>
                                                <td tabindex="1"><h3>Project Trial & Training</h3></td>
                                                <td tabindex="1">8</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th><strong>TOTAL</strong></th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                <input style="position: absolute; top: 275px; left: 20px; padding: 12px; text-align: left; font: 300 16px/24px Montserrat, sans-serif; border: 1px solid rgb(243, 241, 241); width: 100%; height: 49px; display: none;"></div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>



                                <form action="" method="Post">


                                <input hidden="hidden" class="form-control" name="projectnm" id="projectnc" placeholder="Title" required="required">
                                <!--<span id="projectncc"></span>-->
                                <input  hidden="hidden" class="form-control" name="issun" id="issuc" placeholder="Issue" required="required">
                                <!--<span id="issucc"></span>-->
                                <input hidden="hidden" class="form-control" name="contremsr" id="contremsc" placeholder="Contermeasure" required="required">
                                <!--<span id="contremscc"></span>-->
                                <input hidden="hidden" class="form-control" name="discription" id="discriptionc" placeholder="Description" required="required">
                                <!--<span id="discriptioncc"></span>-->


                                <input hidden="hidden" class="form-control" name="ptargetc" id="ptargetc" placeholder="Target" required="required">
                                <!--<span id="ptargetcc"></span>-->
                                <input hidden="hidden" class="form-control" name="ptypec" id="ptypec" placeholder="Project Type" required="required">
                                <!--<span id="ptypecc"></span>-->
                                <input hidden="hidden" class="form-control" name="pct" id="pctc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="pcp" id="pcpc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="pcv" id="pcvc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="pca" id="pcac" placeholder="" required="required">

                                <input hidden="hidden" class="form-control" name="acpc" id="acpc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="aauc" id="aauc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="aadb" id="aadbc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="amac" id="amac" placeholder="" required="required">

                                <input hidden="hidden" class="form-control" name="fcpc" id="fcpc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="fauc" id="fauc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="fczc" id="fczc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="fsmc" id="fsmc" placeholder="" required="required">

                                <input hidden="hidden" class="form-control" name="slvc" id="slvc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="shslc" id="shslc" placeholder="" required="required">
                                <input hidden="hidden" class="form-control" name="stuc" id="stuc" placeholder="" required="required">


                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
                                


                            </div>
                        </div>
                    </div>
                </div>
            


<script>

function prnFunction(element) {
     var prn = document.getElementById("projectn").value;
     document.getElementById("projectnc").value = prn;
     document.getElementById("projectncc").innerHTML = prn;      
}

function issuFunction(element) {
 var iss = document.getElementById("projectn").value;
     document.getElementById("issuc").value = iss;
     document.getElementById("issucc").innerHTML = iss;
}

function cntrmFunction(element) {
 var contrm = document.getElementById("contrems").value;
     document.getElementById("contremsc").value = contrm;
     document.getElementById("contremscc").innerHTML = contrm;
}
function discrFunction(element) {
 var discr = document.getElementById("discription").value;
     document.getElementById("discriptionc").value = discr;
     document.getElementById("discriptioncc").innerHTML = discr;     
}

function targetbeFunction(element) {
 var targetbe = document.getElementById("targetbe").value;
 
     document.getElementById("ptargetc").value = targetbe;
     document.getElementById("ptargetcc").innerHTML = targetbe;   
}

function targetbbFunction(element) {
 var targetbb = document.getElementById("targetbb").value;
     document.getElementById("ptargetc").value = targetbb;
     document.getElementById("ptargetcc").innerHTML = targetbb;
}

function targetbcFunction(element) {
 var targetbc = document.getElementById("targetbc").value;
     document.getElementById("ptargetc").value = targetbc;
     document.getElementById("ptargetcc").innerHTML = targetbc;  
 }



 function typestFunction(element) {
 var ptyp = document.getElementById("ptypesw").value;
     document.getElementById("ptypec").value = ptyp;
     document.getElementById("ptypecc").innerHTML = ptyp;  
 }
  function typedtFunction(element) {
 var ptyp = document.getElementById("ptypedw").value;
     document.getElementById("ptypec").value = ptyp;
     document.getElementById("ptypecc").innerHTML = ptyp;  
 }
 function typedaFunction(element) {
 var ptyp = document.getElementById("ptypeda").value;
     document.getElementById("ptypec").value = ptyp;
     document.getElementById("ptypecc").innerHTML = ptyp;  
 }
function typeecoFunction(element) {
 var ptyp = document.getElementById("ptypeos").value;
     document.getElementById("ptypec").value = ptyp;
     document.getElementById("ptypecc").innerHTML = ptyp;  
 }
function typepwFunction(element) {
 var ptyp = document.getElementById("ptypepwa").value;
     document.getElementById("ptypec").value = ptyp;
     document.getElementById("ptypecc").innerHTML = ptyp;  
 }
function typemsaFunction(element) {
 var ptyp = document.getElementById("ptypemsa").value;
     document.getElementById("ptypec").value = ptyp;
     document.getElementById("ptypecc").innerHTML = ptyp;  
 }


//

 function pctFunction(element) {
 var ptyp = document.getElementById("pct").value;
     document.getElementById("pctc").value = ptyp;
     document.getElementById("pctcc").innerHTML = ptyp;
    if(ptyp.is(':checked')){
     $('#pctc').val('');              
    }
 }
function pcpFunction(element) {
 var ptyp = document.getElementById("pcp").value;
     document.getElementById("pcpc").value = ptyp;
     document.getElementById("pcpcc").innerHTML = ptyp;  
 }
function pcvFunction(element) {
 var ptyp = document.getElementById("pcv").value;
     document.getElementById("pcvc").value = ptyp;
     document.getElementById("pcvcc").innerHTML = ptyp;  
 }
function pcaFunction(element) {
 var ptyp = document.getElementById("pca").value;
     document.getElementById("pcac").value = ptyp;
     document.getElementById("pcacc").innerHTML = ptyp;  
 }



 function acpFunction(element) {
 var ptyp = document.getElementById("acp").value;
     document.getElementById("acpc").value = ptyp;
     document.getElementById("acpcc").innerHTML = ptyp;
 }
function aauFunction(element) {
 var ptyp = document.getElementById("aau").value;
     document.getElementById("aauc").value = ptyp;
     document.getElementById("aaucc").innerHTML = ptyp;  
 }
function aadbFunction(element) {
 var ptyp = document.getElementById("aadb").value;
     document.getElementById("aadbc").value = ptyp;
     document.getElementById("aadbcc").innerHTML = ptyp;  
 }
function amaFunction(element) {
 var ptyp = document.getElementById("ama").value;
     document.getElementById("amac").value = ptyp;
     document.getElementById("amacc").innerHTML = ptyp;  
 }



 function fcpFunction(element) {
 var ptyp = document.getElementById("fcp").value;
     document.getElementById("fcpc").value = ptyp;
     document.getElementById("fcpcc").innerHTML = ptyp;
 }
function fauFunction(element) {
 var ptyp = document.getElementById("fau").value;
     document.getElementById("fauc").value = ptyp;
     document.getElementById("faucc").innerHTML = ptyp;  
 }
function fczFunction(element) {
 var ptyp = document.getElementById("fcz").value;
     document.getElementById("fczc").value = ptyp;
     document.getElementById("fczcc").innerHTML = ptyp;  
 }
function fsmFunction(element) {
 var ptyp = document.getElementById("fsm").value;
     document.getElementById("fsmc").value = ptyp;
     document.getElementById("fsmcc").innerHTML = ptyp;  
 }



 function slvFunction(element) {
 var ptyp = document.getElementById("slv").value;
     document.getElementById("slvc").value = ptyp;
     document.getElementById("slvcc").innerHTML = ptyp;
 }
function stuFunction(element) {
 var ptyp = document.getElementById("stu").value;
     document.getElementById("stuc").value = ptyp;
     document.getElementById("stucc").innerHTML = ptyp;  
 }
function shslFunction(element) {
 var ptyp = document.getElementById("shsl").value;
     document.getElementById("shslc").value = ptyp;
     document.getElementById("shslcc").innerHTML = ptyp;  
 }




</script>


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
                © 2019 Dadje
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
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Draggable-portlet -->
    <script src="../assets/plugins/jqueryui/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="../assets/plugins/gridstack/lodash.js"></script>
    <script src="../assets/plugins/gridstack/gridstack.js"></script>
    <script src="../assets/plugins/gridstack/gridstack.jQueryUI.js"></script>

    <script type="text/javascript">
    $(function() {
        $('.grid-stack').gridstack({
            width: 12,
            alwaysShowResizeHandle: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            resizable: {
                handles: 'e, se, s, sw, w'
            }
        });
    });
    </script>
    <script src="../assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
    <script src="../assets/plugins/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(function() {
        $('#editable-datatable').DataTable();
    });
    </script>
    <script src="../assets/plugins/nestable/jquery.nestable.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // Nestable
        var updateOutput = function(e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };

        $('#nestable').nestable({
            group: 1
        }).on('change', updateOutput);

        $('#nestable2').nestable({
            group: 1
        }).on('change', updateOutput);

        updateOutput($('#nestable').data('output', $('#nestable-output')));
        updateOutput($('#nestable2').data('output', $('#nestable2-output')));

        $('#nestable-menu').on('click', function(e) {
            var target = $(e.target),
                action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });

        $('#nestable-menu').nestable();
    });
    </script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>