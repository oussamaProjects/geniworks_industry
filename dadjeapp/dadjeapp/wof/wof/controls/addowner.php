<div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 style="font-size: 26px;" class="page-header-title">Add Owner</h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i class="ti ti-home"></i></a></li>
                                            <li class="breadcrumb-item active">Dashboard </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-6">
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4 style="font-size: 18px;">Owner Informations</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="col-xl-6">
                                            <h3></h3>
                                            <div class="row d-flex align-items-center col-lg-12  mb-5">
                                                <div class="col-lg-12">
                                                    <table class="table">
                                                        <tr>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="col-sm-4 form-control-label d-flex align-items-center">Name</div>
                                                            </td>
                                                            <td>
                                                                <input style="padding: 2px 2px 5px 2px; font-size: 13px;" type="text" placeholder=".col-md-4" class="form-control">
                                                            </td>
                                                            <td>
                                                                <div class="col-sm-4 form-control-label d-flex align-items-center">Name</div>
                                                            </td>
                                                            <td>
                                                                <input style="padding: 2px 2px 5px 2px; font-size: 13px;" type="text" placeholder=".col-md-4" class="form-control">
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="col-sm-4 form-control-label d-flex align-items-center">Internal Id</div>
                                                            </td>
                                                            <td>
                                                                <input style="padding: 2px 2px 5px 2px; font-size: 13px;" type="text" placeholder=".col-md-4" class="form-control">
                                                            </td>
                                                            <td>
                                                                <div class="col-sm-5 form-control-label d-flex align-items-center">Internal Id</div>
                                                            </td>
                                                            <td>
                                                                <input style="padding: 2px 2px 5px 2px; font-size: 13px;" type="text" placeholder=".col-md-4" class="form-control">
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <!--<div class="row">
                                                        
                                                        <div class="col-lg-4" >
                                                            
                                                        </div>
                                                        
                                                            
                                                        </div>
                                                        <div class="col-sm-3 form-control-label d-flex align-items-center">Cleaning Type</div>
                                                        <div class="col-lg-4">
                                                            <input style="padding: 2px 2px 5px 2px; font-size: 13px;" type="text" placeholder=".col-md-4" class="form-control">
                                                        </div>
                                                    </div>-->
                                                    <hr>
                                                </div>
                                              <!--  
                                                <div class="col-lg-4" style="padding-bottom: 10px;">

                                                    <div class="group material-input">
                                                        <input onChange="ownerFunction(this);" id="own1" type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>c</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" style="padding-bottom: 10px;">

                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Internal Id</label>
                                                    </div>
                                                </div>
                                                -->
                                            </div>
                                            <div class="row align-items-center col-lg-12  mb-5">
                                                <div class="col-lg-3" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        
                                                        <select  onChange="location = this.value;" name='status_id' class="status slect browser-default">
                                                            <option value="1">Select Contract</option>
                                                            <option value="2">Contract 1</option>
                                                            <option value="3">Contract 2</option>
                                                            <option value="#modal-centered" data-toggle="modal">Create New...</option>

                                                        </select>
                                                       <!-- <button id="createnew" style="display: none;"  type="button" class="btn btn-secondary" data-toggle="modal" data-target="">Create New</button>-->
                                                
                                            
<script>
    function ownerFunction(element) {
     var ownerr = document.getElementById("own1").value;
    //document.getElementById("own2").innerHTML = ownerr;

    document.getElementById("own2").value = ownerr;
}
</script>
<script>
     function hola(x) {
               
                if(x == 4) {

 document.getElementById("createnew").style.display = 'block';

}
if(x == 3) {

 document.getElementById("createnew").style.display = 'none';

}
if(x == 2) {

 document.getElementById("createnew").style.display = 'none';

}
if(x == 1) {

 document.getElementById("createnew").style.display = 'none';

}


if(x == 7) {

 document.getElementById("createnewas").style.display = 'block';

}
if(x == 6) {

 document.getElementById("createnewas").style.display = 'none';

}
if(x == 5) {

 document.getElementById("createnewas").style.display = 'none';

}

if(x == 8) {

 document.getElementById("createnewown").style.display = 'none';

}
if(x == 9) {

 document.getElementById("createnewas").style.display = 'none';

}
if(x == 10) {

 document.getElementById("createnewas").style.display = 'block';

}
                    
                }
</script>

        
                                                        
                                                   </div>
                                           </div>
                                           <div class="col-lg-3" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        
                                                        <select onChange="hola(this.value)"  class="slect browser-default">
                                                            <option value="" selected>Select Assets</option>
                                                            <option value="5">Asset 1</option>
                                                            <option value="6">Asset 2</option>
                                                            <option value="7">Create New...</option>
                                                        </select>
                                                        <button id="createnewas" style="display: none;"  type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-centeredas">Create New</button>
                                                   </div>
                                           </div>
                                           <div class="col-lg-3" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        
                                                        <select class="slect browser-default">
                                                            <option value="" selected>Select Order Owner</option>
                                                            <option value="8">Order Owner 1</option>
                                                            <option value="9">Order Owner 2</option>
                                                            <option value="10">Create New...</option>
                                                        </select>
                                                        
                                                   </div>
                                           </div>
                                           <div class="col-lg-3" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        
                                                        <select class="slect browser-default">
                                                            <option  value="" selected>Select Safety Supervisor</option>
                                                            <option value="11">Safety Supervisor 1</option>
                                                            <option value="12">Safety Supervisor 2</option>
                                                            <option value="13">Create New...</option>
                                                        </select>
                                                        
                                                   </div>
                                           </div>
                                       </div>
                                       <script>
 function orFunction(element) {
    var or = element.options[element.selectedIndex].value;
    document.getElementById("orec2").innerHTML = or;
    document.getElementById("orec3").value = or;
}
                                       </script>
                                <!-- Basic Tabs -->
                                <div class="widget has-shadow">
                                    
                                    <div class="widget-body">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="i-base-tab-1" data-toggle="tab" href="#i-tab-1" role="tab" aria-controls="i-tab-1" aria-selected="true"><ion-icon name="apps"></ion-icon> General</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="i-base-tab-2" data-toggle="tab" href="#i-tab-2" role="tab" aria-controls="i-tab-2" aria-selected="false"><ion-icon name="git-branch"></ion-icon> Assets</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="i-base-tab-3" data-toggle="tab" href="#i-tab-3" role="tab" aria-controls="i-tab-3" aria-selected="false"><ion-icon name="paper"></ion-icon> Contract</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="i-base-tab-4" data-toggle="tab" href="#i-tab-3" role="tab" aria-controls="i-tab-4" aria-selected="false"><ion-icon name="paper"></ion-icon> Order Owner</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="i-base-tab-5" data-toggle="tab" href="#i-tab-5" role="tab" aria-controls="i-tab-5" aria-selected="false"><ion-icon name="paper"></ion-icon> Safety Supervisor</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="ion-edit mr-2"></i>Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane fade show active" id="i-tab-1" role="tabpanel" aria-labelledby="i-base-tab-1">
                                                <div class="row d-flex align-items-center col-lg-6  mb-5">
                                                <div class="col-lg-9">
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>1</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>2</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>3</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            
                                            <div class="tab-pane fade" id="i-tab-2" role="tabpanel" aria-labelledby="i-base-tab-2">
                                                <div class="row d-flex align-items-center col-lg-6  mb-5">
                                                <div class="col-lg-9">
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>1</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>2</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="tab-pane fade" id="i-tab-3" role="tabpanel" aria-labelledby="i-base-tab-3">
                                                <div class="row d-flex align-items-center col-lg-6  mb-5">
                                                <div class="col-lg-9">
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>1</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>2</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>3</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="tab-pane fade" id="i-tab-4" role="tabpanel" aria-labelledby="i-base-tab-4">
                                                <div class="row d-flex align-items-center col-lg-6  mb-5">
                                                <div class="col-lg-9">
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>1</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>2</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>3</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>4</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="tab-pane fade" id="i-tab-5" role="tabpanel" aria-labelledby="i-base-tab-5">
                                               <div class="row d-flex align-items-center col-lg-6  mb-5">
                                                <div class="col-lg-9">
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>1</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>2</label>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Basic Tabs -->
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
        <div id="modal-centered" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Contract</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane fade show active" id="i-tab-1" role="tabpanel" aria-labelledby="i-base-tab-1">
                                                <div class="row d-flex align-items-center col-lg-6  mb-5">
                                                <div class="col-lg-9">
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>1</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>2</label>
                                                    </div>
                                                    </div>
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>3</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-centeredas" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Asset</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane fade show active" id="i-tab-1" role="tabpanel" aria-labelledby="i-base-tab-1">
                            <br>
                                        <div class="row d-flex align-items-center col-lg-12  mb-5">
                                            <div class="col-lg-12">
                                                <div class="row d-flex align-items-center col-lg-12  mb-5">
                                                 <div class="col-lg-7" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        <input id="own2" type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Owner</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                       
                                                        <img src="assets/img/download.png" width="150" required>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row d-flex align-items-center col-lg-12  mb-5">
                                                <div class="col-lg-4" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Brand</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Serial Number</label>
                                                    </div>
                                                </div>
                                            </div>


                                                
                                                </div>
                                            
                                                <div class="col-lg-12">
                                               <div class="col-lg-5" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                          <input type="date" id="datetime" placeholder="Acquisition Date">
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Acquisition Date</label>
                                                        <span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Brand Of Asset)</span>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="widget has-shadow" style="border:1px solid #e0e0e0;" >
                                    <div class="widget-body">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="i-base-tab-6" data-toggle="tab" href="#i-tab-6" role="tab" aria-controls="i-tab-6" aria-selected="true"><ion-icon name="apps"></ion-icon> </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="i-base-tab-7" data-toggle="tab" href="#i-tab-7" role="tab" aria-controls="i-tab-7" aria-selected="false"><ion-icon name="git-branch"></ion-icon> Drawing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="i-base-tab-8" data-toggle="tab" href="#i-tab-8" role="tab" aria-controls="i-tab-8" aria-selected="false"><ion-icon name="paper"></ion-icon> Sub-Assets</a>
                                            </li>
                                            
                                            
                                        </ul>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane fade show active" id="i-tab-6" role="tabpanel" aria-labelledby="i-base-tab-6">
                                                <div class="row d-flex align-items-center col-lg-12 mb-5">
                                                <div class="col-lg-12">
                                                
                                                    <div class="row">
                                                        <div class="col-lg-4" >
                                                            <input style="padding: 2px 2px 5px 2px; font-size: 13px;" type="text" placeholder=".col-md-4" class="form-control">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input style="padding: 2px 2px 5px 2px; font-size: 13px;" type="text" placeholder=".col-md-4" class="form-control">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input style="padding: 2px 2px 5px 2px; font-size: 13px;" type="text" placeholder=".col-md-4" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            </div>
                                            
                                            <div class="tab-pane fade" id="i-tab-7" role="tabpanel" aria-labelledby="i-base-tab-7">
                                                <div class="row d-flex align-items-center col-lg-6  mb-5">
                                                    <div class="img-zoom-container">
                                                        <img id="myimage" src="assets/img/shiptoshore.jpg" width="300" height="240">
                                                        <!--<div id="myresult" class="img-zoom-result"></div>-->
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="i-tab-8" role="tabpanel" aria-labelledby="i-base-tab-8">
                                                <br>
                                                <div class="row d-flex align-items-center col-lg-12  mb-5">
                                                <div class="col-lg-3" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Serial Number</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        <input type="text" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>WPM</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        <button type="">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4" style="padding-bottom: 10px;">
                                                    <div class="group material-input">
                                                        
                                                        <button type="button">+</button>
                                                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <style>
* {box-sizing: border-box;}

.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 40px;
  height: 40px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 300px;
  height: 300px;
}
</style>
<script>
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
<style>
.slect {
  font-family: inherit;
  background-color: transparent;

  border: none;
  color: #00A1DB;
  border-bottom: 1px solid #00A1DB;
  padding: 10px;

}



/* Remove focus */
.slect:focus {
  outline: none;
}



    
</style>

<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>

<?php 

if (isset($_POST['addtl'])) {
	
	include('a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');
	$tname=$_POST['tname'];
	$tlref=$_POST['tlref'];
	$seller=$_POST['seller'];
	$quanti=$_POST['quanti'];
	$buydate=$_POST['buydate'];
	$price=$_POST['price'];
	$pic_name = $_FILES['pic']['name'];

	if($pic_name!='')
	{
  $upload_directory = "controls/docs/tools/"; 
  $pic=time().$pic_name;

  if(move_uploaded_file($_FILES['pic']['tmp_name'], $upload_directory.$pic)){   

	$reqa=$cdb->prepare("INSERT INTO tools VALUES('','','$seller','$pic','$quanti','$tlref', NOW(),'$price','requested')");
	$reqa->execute();
	if ($reqa===false) {
		echo "add failed!".mysqli_error();
	}else{
		$resa=$reqa->get_result();
		$reqreq=$cdb->prepare("INSERT INTO requests VALUES('', 'tools', '$tname', 'requested', NOW(),'')");
		$reqreq->execute();
		if ($reqreq===false) {
			echo"failed request add".mysqli_error();
		}else{
			$reqres=$reqreq->get_result();
			echo "<meta http-equiv='refresh' content='0;tools.php?edit'>";
		}

	}
}
}
}
 ?>
