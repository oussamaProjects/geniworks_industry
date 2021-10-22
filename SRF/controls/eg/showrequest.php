<?php

require('zdfzfzef/45azd72dz9de5.php');
$showr=$cdb->prepare('SELECT * FROM equipments');
$showr->execute();
if ($showr===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res=$showr->get_result();

?>
<style>
pre {
  text-align: left;
  background-color: #fff;
  min-width: 240px;
  max-width: 400px;
  margin: 0 auto 40px;
  padding: 8px 15px;
  border-radius: 6px;
  box-shadow: 0 0 3px rgba(0,0,0,.5) inset;
  overflow: auto;
}



/* Responsive Table Style */

.responsive-table th {
  text-align: center;
  color: #2EAFEA;
}

@media(max-width: 480px) {
  .responsive-table {
    width: 100%;
  }
  .responsive-table thead {
    display: none;
  }
  .responsive-table tbody tr:nth-of-type(even) {
    background-color: #eee;
  }
  .responsive-table tbody td {
    display: block;
  }
  .responsive-table tbody td:before {
    content: attr(data-table);
    display: block;
    float: left;
    width: 40%;
    margin-right: 10px;
    padding-right: 10px;
    font-weight: 700;
    color: #2EAFEA;
    border-right: 1px solid #ccc;
  }
  .responsive-table tbody td:after {
    content: '';
    display: block;
    clear: both;
  }
}
</style>    
<table id="demo-foo-addrow" class="responsive-table table table-bordered m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th  data-table="Custom Head 1" style="text-align: center;">OwnerID</th>
                                                <th style="text-align: center;">Tools</th>
                                                <th style="text-align: center;">Materials</th>
                                                <th style="text-align: center;">Chemials</th>
                                                <th  data-table="Custom Head 5" style="text-align: center;">PPE</th>
                                                <th style="text-align: center;">APE</th>
                                        
                                                <th style="text-align: center;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrow=$res->fetch_row()) {
                                            
                                            if ($showrow[8]=="need review") {
                                          ?>
                                            <tr>
                                                <td><?php echo "$showrow[0]";?></td>
                                                <td>

                                                <div id="accordion-icon-right" class="accordion">
                                                                
                                                                    <div class="widget" style=" margin-bottom: 0px;">
                                                                    <a class="collapsed d-flex align-items-center" data-toggle="collapse" href="#IconRightCollapse<?php echo "$showrow[0]";?>" aria-expanded="false">
                                                                        <div class="card-title w-100"><?php echo "$showrow[1]";?></div>
                                                                    </a>
                                                                    <div id="IconRightCollapse<?php echo "$showrow[0]";?>" class="card-body collapse" data-parent="#accordion-icon-right" style="">
                                                                                                          
<?php include('showtools.php') ?>                                     
                                                                            
                                                                           <!-- <button style="margin-top: 10px; margin-bottom: 0px;" class="btn btn-info" data-toggle="modal" data-target="#add-equipment-part<?php //echo "$showrow[0]";?>">Add </button>-->
                                                                        
                                                                    </div>
                                                                </div>
                                <div id="add-equipment-part<?php echo "$showrow[0]";?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Add Equipment Part</h4> </div>
                                            <div class="modal-body">
                                                <div class="col-lg-12 col-xlg-9 col-md-7">
                                                    <div class="card">
                                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">Equipment Part For <?php echo "$showrow[1]";?></a> </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="aassets" role="tabpanel">
                                                                <form method='POST'  class="form-horizontal"  action='controls/addparts.php' enctype="multipart/form-data">
                                                                    <br>
                                                                   <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Part Name</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" name="prtname" id="prtname" onChange="Function(this);" class="form-control" placeholder="Part Name"  required="required"><input type="hidden" value="<?php echo "$showrow[4]";?>" name="ebrndd" id="ebrndd" onChange="Function(this);" required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">internal ID</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" name="internalidd" class="form-control" placeholder="internal ID"  required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                                    <input type='file'  class="upload" name='eqpicc'  required="required">
                                                                </div>
                                                           
                                                            <div class="modal-footer">
                                                                <input type='submit' class="btn btn-primary" name="addeqp" value="submit">
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                <?php
                                if (isset($_POST['addeqp'])) {
                                     include('addparts.php');
                                 } 
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                                    
<div id="edit-equipment<?php echo "$showrow[0]";?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Equipment</h4> </div>
                                            <div class="modal-body">

                                                <div class="col-lg-12 col-xlg-9 col-md-7">
                                                    <div class="card">
                                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">Equipment  <?php echo "$showrow[1]";?></a> </li>
                                                        </ul>
                                                        <br>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="aassets" role="tabpanel">
                                                                <form method='POST'  class="form-horizontal"  action='controls/editparts.php' enctype="multipart/form-data">



                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Equipment Name</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" value="<?php echo "$showrow[4]";?>" name="ebrndd" id="ebrndd" onChange="Function(this);" class="form-control"  required="required">
                                                                            <input type="hidden" value="<?php echo "$showrow[0]";?>" name="eqid" onChange="Function(this);"required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">internal ID</label>
                                                                        <div class="col-md-8">
                                                                           <input type="text"   value="<?php echo "$showrow[3]";?>" name="internalidd" class="form-control" placeholder="internal ID"  required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Status </label>
                                                                        <div class="col-md-8">
                                                                           <select name="statd" class="form-control" required="required">
                                                                            <option class="label-info" style="color: white;" selected value="<?php echo "$showrow[8]";?>">Pending Repair</option>
                                                                            <option class="label-success" style="color: white;" value="well"> Active</option>
                                                                            <option class="label-danger" style="color: white;" value="broke"> Break Down</option>
                                                                            <option class="label-warning" style="color: white;" value="to repair">Urgent Repair Needed</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Status Discription</label>
                                                                        <div class="col-md-8">
                                                                           <textarea  name="discr" class="form-control" placeholder="Discription"  required="required"> <?php echo $showrow[11]; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                            
                                                                        
                                                                        <div class="col-md-12 m-b-20">
                                                                            
                                                                            <img src="img/equipments/<?php echo "$showrow[7]";?>" alt="" width="100"/>
                                                                        </div>


                                                                        <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light">
                                                                        <span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                                            <input type='file'  class="upload" name='eqpicc'>
                                                                        </div>
                                                                 
                                                                    <div class="modal-footer">
                                                                        <input type='submit'  class="btn btn-primary" name="editeq" value="submit">
                                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                <?php
                                if (isset($_POST['editeq'])) {
                                     include('editparts.php');
                                 } 
                                ?>
                                
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
    </div>







                                                </td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="img/equipments/<?php echo $showrow[7];?>" alt="user">
                                    
                                </div>
                                                   <!-- <a href="javascript:void(0)"><img src="img/equipments/" alt="user" width="50" class="img-circle" /></a>-->
                                                </td>
                                                <td><?php echo  "$showrow[3]";?></td>
                                                <td><?php echo  "$showrow[9]";?></td>
                                                <td><?php echo  "$showrow[6]";?></td>
                                                
                                                
                                                <td class="td-actions">
                                                           <center> <a href="#edit-equipment<?php echo "$showrow[0]";?>" class="info" style=" " data-toggle="modal" data-target=""><i class="far fa-edit"></i> </a>

                                                            <a href="#add-equipment-part<?php echo "$showrow[0]";?>" class="color-warning" style=" color: #06d79c;" data-toggle="modal" data-target=""><i class="fas fa-plus"></i></a>

                                                           </center>
                                                        </td>
                                            </tr>
                                            <?php  }
                                              if ($showrow[8]=="well") {
                                          ?>
                                            <tr>
                                                <td><?php echo "$showrow[0]";?></td>
                                                <td>
                                                    <div id="accordion-icon-right" class="accordion">
                                                                
                                                                    <div class="widget" style=" margin-bottom: 0px;">
                                                                    <a class="collapsed d-flex align-items-center" data-toggle="collapse" href="#IconRightCollapse<?php echo "$showrow[0]";?>" aria-expanded="false">
                                                                        <div class="card-title w-100"><?php echo "$showrow[1]";?></div>
                                                                    </a>
                                                                    <div id="IconRightCollapse<?php echo "$showrow[0]";?>" class="card-body collapse" data-parent="#accordion-icon-right" style="">
                                                                        <div class="form-group row mb-5" style=" margin-bottom: 0px;">                                  
<?php include('showtools.php') ?>                                     
                                                                            <div class="form-group row" style=" margin-bottom: 0px;">
                                                                           <!-- <button style="margin-top: 10px; margin-bottom: 0px;" class="btn btn-info" data-toggle="modal" data-target="#add-equipment-part<?php //echo "$showrow[0]";?>">Add </button>-->
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                <div id="add-equipment-part<?php echo "$showrow[0]";?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Add Equipment Part</h4> </div>
                                            <div class="modal-body">
                                                <div class="col-lg-12 col-xlg-9 col-md-7">
                                                    <div class="card">
                                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">Equipment Part For <?php echo "$showrow[1]";?></a> </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="aassets" role="tabpanel">
                                                                <form method='POST'  class="form-horizontal"  action='controls/addparts.php' enctype="multipart/form-data">
                                                                    <br>
                                                                   <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Part Name</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" name="prtname" id="prtname" onChange="Function(this);" class="form-control" placeholder="Part Name"  required="required"><input type="hidden" value="<?php echo "$showrow[4]";?>" name="ebrndd" id="ebrndd" onChange="Function(this);" required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">internal ID</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" name="internalidd" class="form-control" placeholder="internal ID"  required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                                    <input type='file'  class="upload" name='eqpicc'  required="required">
                                                                </div>
                                                           
                                                            <div class="modal-footer">
                                                                <input type='submit' class="btn btn-primary" name="addeqp" value="submit">
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                <?php
                                if (isset($_POST['addeqp'])) {
                                     include('addparts.php');
                                 } 
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                                    
<div id="edit-equipment<?php echo "$showrow[0]";?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Equipment</h4> </div>
                                            <div class="modal-body">
                                                <div class="col-lg-12 col-xlg-9 col-md-7">
                                                    <div class="card">
                                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">Equipment  <?php echo "$showrow[1]";?></a> </li>
                                                        </ul>
                                                        <br>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="aassets" role="tabpanel">
                                                                <form method='POST'  class="form-horizontal"  action='controls/editparts.php' enctype="multipart/form-data">



                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Equipment Name</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" value="<?php echo "$showrow[4]";?>" name="ebrndd" id="ebrndd" onChange="Function(this);" class="form-control"  required="required">
                                                                            <input type="hidden" value="<?php echo "$showrow[0]";?>" name="eqid" onChange="Function(this);"required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">internal ID</label>
                                                                        <div class="col-md-8">
                                                                           <input type="text"   value="<?php echo "$showrow[3]";?>" name="internalidd" class="form-control" placeholder="internal ID"  required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Status </label>
                                                                        <div class="col-md-8">
                                                                           <select name="statd" class="form-control" required="required">
                                                                            <option class="label-info" style="color: white;" selected value="<?php echo "$showrow[8]";?>">Pending Repair</option>
                                                                            <option class="label-success" style="color: white;" value="well"> Active</option>
                                                                            <option class="label-danger" style="color: white;" value="broke"> Break Down</option>
                                                                            <option class="label-warning" style="color: white;" value="to repair"> Urgent Repair Needed</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Status Discription</label>
                                                                        <div class="col-md-8">
                                                                           <textarea  name="discr" class="form-control" placeholder="Discription"  required="required"> <?php echo $showrow[11]; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                            
                                                                        
                                                                        <div class="col-md-12 m-b-20">
                                                                            
                                                                            <img src="img/equipments/<?php echo "$showrow[7]";?>" alt="" width="100"/>
                                                                        </div>


                                                                        <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light">
                                                                        <span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                                            <input type='file'  class="upload" name='eqpicc'>
                                                                        </div>
                                                                 
                                                                    <div class="modal-footer">
                                                                        <input type='submit' class="btn btn-primary" name="editeq" value="submit">
                                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                <?php
                                if (isset($_POST['editeq'])) {
                                     include('editparts.php');
                                 } 
                                ?>
                                
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
    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="img/equipments/<?php echo $showrow[7];?>" alt="user" width="50" class="img-circle" /></a>
                                                </td>
                                                <td><?php echo  "$showrow[3]";?></td>
                                                <td><?php echo  "$showrow[9]";?></td>
                                                <td><?php echo  "$showrow[6]";?></td>
                                               
                                               
                                                <td class="td-actions">
                                                          <center> <a href="#edit-equipment<?php echo "$showrow[0]";?>" class="info" style=" " data-toggle="modal" data-target=""><i class="far fa-edit"></i> </a>

                                                            <a href="#add-equipment-part<?php echo "$showrow[0]";?>" class="color-warning" style=" color: #06d79c;" data-toggle="modal" data-target=""><i class="fas fa-plus"></i></a>

                                                           </center>
                                                        </td>
                                            </tr>

                                            <?php } 
                                              if ($showrow[8]=="to repair") {
                                          ?>
                                            <tr>
                                                <td><?php echo "$showrow[0]";?></td>
                                                <td>
                                                    <div id="accordion-icon-right" class="accordion">
                                                                
                                                                    <div class="widget" style=" margin-bottom: 0px;">
                                                                    <a class="collapsed d-flex align-items-center" data-toggle="collapse" href="#IconRightCollapse<?php echo "$showrow[0]";?>" aria-expanded="false">
                                                                        <div class="card-title w-100"><?php echo "$showrow[1]";?></div>
                                                                    </a>
                                                                    <div id="IconRightCollapse<?php echo "$showrow[0]";?>" class="card-body collapse" data-parent="#accordion-icon-right" style="">
                                                                        <div class="form-group row mb-5" style=" margin-bottom: 0px;">                                  
<?php include('showtools.php') ?>                                     
                                                                            <div class="form-group row" style=" margin-bottom: 0px;">
                                                                            <!--<button style="margin-top: 10px; margin-bottom: 0px;" class="btn btn-info" data-toggle="modal" data-target="#add-equipment-part<?php //echo "$showrow[0]";?>">Add </button>-->
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                <div id="add-equipment-part<?php echo "$showrow[0]";?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Add Equipment Part</h4> </div>
                                            <div class="modal-body">
                                                <div class="col-lg-12 col-xlg-9 col-md-7">
                                                    <div class="card">
                                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">Equipment Part For <?php echo "$showrow[1]";?></a> </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="aassets" role="tabpanel">
                                                                <form method='POST'  class="form-horizontal"  action='controls/addparts.php' enctype="multipart/form-data">
                                                                    <br>
                                                                   <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Part Name</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" name="prtname" id="prtname" onChange="Function(this);" class="form-control" placeholder="Part Name"  required="required"><input type="hidden" value="<?php echo "$showrow[4]";?>" name="ebrndd" id="ebrndd" onChange="Function(this);" required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">internal ID</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" name="internalidd" class="form-control" placeholder="internal ID"  required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                                    <input type='file'  class="upload" name='eqpicc'  required="required">
                                                                </div>
                                                           
                                                            <div class="modal-footer">
                                                                <input type='submit' class="btn btn-primary" name="addeqp" value="submit">
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                <?php
                                if (isset($_POST['addeqp'])) {
                                     include('addparts.php');
                                 } 
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                                    
<div id="edit-equipment<?php echo "$showrow[0]";?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Equipment</h4> </div>
                                            <div class="modal-body">
                                                <div class="col-lg-12 col-xlg-9 col-md-7">
                                                    <div class="card">
                                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">Equipment  <?php echo "$showrow[1]";?></a> </li>
                                                        </ul>
                                                        <br>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="aassets" role="tabpanel">
                                                                <form method='POST'  class="form-horizontal"  action='controls/editparts.php' enctype="multipart/form-data">



                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Equipment Name</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" value="<?php echo "$showrow[4]";?>" name="ebrndd" id="ebrndd" onChange="Function(this);" class="form-control"  required="required">
                                                                            <input type="hidden" value="<?php echo "$showrow[0]";?>" name="eqid" onChange="Function(this);"required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">internal ID</label>
                                                                        <div class="col-md-8">
                                                                           <input type="text"   value="<?php echo "$showrow[3]";?>" name="internalidd" class="form-control" placeholder="internal ID"  required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Status </label>
                                                                        <div class="col-md-8">
                                                                           <select name="statd" class="form-control" required="required">
                                                                            <option class="label-info" style="color: white;" selected value="<?php echo "$showrow[8]";?>">Pending Repair</option>
                                                                            <option class="label-success" style="color: white;" value="well"> Active</option>
                                                                            <option class="label-danger" style="color: white;" value="broke"> Break Down</option>
                                                                            <option class="label-warning" style="color: white;" value="to repair"> Urgent Repair Needed</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Status Discription</label>
                                                                        <div class="col-md-8">
                                                                           <textarea  name="discr" class="form-control" placeholder="Discription"  required="required"> <?php echo $showrow[11]; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                            
                                                                        
                                                                        <div class="col-md-12 m-b-20">
                                                                            
                                                                            <img src="img/equipments/<?php echo "$showrow[7]";?>" alt="" width="100"/>
                                                                        </div>


                                                                        <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light">
                                                                        <span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                                            <input type='file'  class="upload" name='eqpicc'>
                                                                        </div>
                                                                 
                                                                    <div class="modal-footer">
                                                                        <input type='submit' class="btn btn-primary" name="editeq" value="submit">
                                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                <?php
                                if (isset($_POST['editeq'])) {
                                     include('editparts.php');
                                 } 
                                ?>
                                
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
    </div>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="img/equipments/<?php echo $showrow[7];?>" alt="user" width="50" class="img-circle" /></a>
                                                </td>
                                                <td><?php echo  "$showrow[3]";?></td>
                                                <td><?php echo  "$showrow[9]";?></td>
                                                <td><?php echo  "$showrow[6]";?></td>
                                                
                                                
                                                <td class="td-actions">
                                                          <center> <a href="#edit-equipment<?php echo "$showrow[0]";?>" class="info" style=" " data-toggle="modal" data-target=""><i class="far fa-edit"></i> </a>

                                                            <a href="#add-equipment-part<?php echo "$showrow[0]";?>" class="color-warning" style=" color: #06d79c;" data-toggle="modal" data-target=""><i class="fas fa-plus"></i></a>

                                                           </center>
                                                        </td>
                                            </tr>
                                            <?php  }
                                              if ($showrow[8]=="broke") {
                                          ?>
                                            <tr>
                                                <td><?php echo "$showrow[0]";?></td>
                                                <td>
                                                    <div id="accordion-icon-right" class="accordion">
                                                                
                                                                    <div class="widget" style=" margin-bottom: 0px;">
                                                                    <a class="collapsed d-flex align-items-center" data-toggle="collapse" href="#IconRightCollapse<?php echo "$showrow[0]";?>" aria-expanded="false">
                                                                        <div class="card-title w-100"><?php echo "$showrow[1]";?></div>
                                                                    </a>
                                                                    <div id="IconRightCollapse<?php echo "$showrow[0]";?>" class="card-body collapse" data-parent="#accordion-icon-right" style="">
                                                                        <div class="form-group row mb-5" style=" margin-bottom: 0px;">                                  
<?php include('showtools.php') ?>                                     
                                                                            <div class="form-group row" style=" margin-bottom: 0px;">
                                                                           <!-- <button style="margin-top: 10px; margin-bottom: 0px;" class="btn btn-info" data-toggle="modal" data-target="#add-equipment-part<?php //echo "$showrow[0]";?>">Add </button>-->
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
 <div id="add-equipment-part<?php echo "$showrow[0]";?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Add Equipment Part</h4> </div>
                                            <div class="modal-body">
                                                <div class="col-lg-12 col-xlg-9 col-md-7">
                                                    <div class="card">
                                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">Equipment Part For <?php echo "$showrow[1]";?></a> </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="aassets" role="tabpanel">
                                                                <form method='POST'  class="form-horizontal"  action='controls/addparts.php' enctype="multipart/form-data">
                                                                    <br>
                                                                   <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Part Name</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" name="prtname" id="prtname" onChange="Function(this);" class="form-control" placeholder="Part Name"  required="required"><input type="hidden" value="<?php echo "$showrow[4]";?>" name="ebrndd" id="ebrndd" onChange="Function(this);" required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">internal ID</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" name="internalidd" class="form-control" placeholder="internal ID"  required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                                    <input type='file'  class="upload" name='eqpicc'  required="required">
                                                                </div>
                                                           
                                                            <div class="modal-footer">
                                                                <input type='submit' class="btn btn-primary" name="addeqp" value="submit">
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                <?php
                                if (isset($_POST['addeqp'])) {
                                     include('addparts.php');
                                 } 
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="edit-equipment<?php echo "$showrow[0]";?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Equipment</h4> </div>
                                            <div class="modal-body">
                                                <div class="col-lg-12 col-xlg-9 col-md-7">
                                                    <div class="card">
                                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">Equipment  <?php echo "$showrow[1]";?></a> </li>
                                                        </ul>
                                                        <br>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="aassets" role="tabpanel">
                                                                <form method='POST'  class="form-horizontal"  action='controls/editparts.php' enctype="multipart/form-data">



                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Equipment Name</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" value="<?php echo "$showrow[4]";?>" name="ebrndd" id="ebrndd" onChange="Function(this);" class="form-control"  required="required">
                                                                            <input type="hidden" value="<?php echo "$showrow[0]";?>" name="eqid" onChange="Function(this);"required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">internal ID</label>
                                                                        <div class="col-md-8">
                                                                           <input type="text"   value="<?php echo "$showrow[3]";?>" name="internalidd" class="form-control" placeholder="internal ID"  required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Status  </label>
                                                                        <div class="col-md-8">
                                                                           <select name="statd" class="form-control" required="required">
                                                                            <option class="label-info" style="color: white;" selected value="<?php echo "$showrow[8]";?>">Pending Repair</option>
                                                                            <option class="label-success" style="color: white;" value="well"> Active</option>
                                                                            <option class="label-danger" style="color: white;" value="broke"> Break Down</option>
                                                                            <option class="label-warning" style="color: white;" value="to repair"> Urgent Repair Needed</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Status Discription</label>
                                                                        <div class="col-md-8">
                                                                           <textarea  name="discr" class="form-control" placeholder="Discription"  required="required"> <?php echo $showrow[11]; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                            
                                                                        
                                                                        <div class="col-md-12 m-b-20">
                                                                            
                                                                            <img src="img/equipments/<?php echo "$showrow[7]";?>" alt="" width="100"/>
                                                                        </div>


                                                                        <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light">
                                                                        <span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                                            <input type='file'  class="upload" name='eqpicc'>
                                                                        </div>
                                                                 
                                                                    <div class="modal-footer">
                                                                        <input type='submit' class="btn btn-primary" name="editeq" value="submit">
                                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                <?php
                                if (isset($_POST['editeq'])) {
                                     include('editparts.php');
                                 } 
                                ?>
                                
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
    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="img/equipments/<?php echo $showrow[7];?>" alt="user" width="50" class="img-circle" /></a>
                                                </td>
                                                <td><?php echo  "$showrow[3]";?></td>
                                                <td><?php echo  "$showrow[9]";?></td>
                                                <td><?php echo  "$showrow[6]";?></td>
                                                
                                              
                                                <td class="td-actions">
                                                         <center> <a href="#edit-equipment<?php echo "$showrow[0]";?>" class="info" style=" " data-toggle="modal" data-target=""><i class="far fa-edit"></i> </a>

                                                            <a href="#add-equipment-part<?php echo "$showrow[0]";?>" class="color-warning" style=" color: #06d79c;" data-toggle="modal" data-target=""><i class="fas fa-plus"></i></a>

                                                           </center>
                                                        </td>
                                            </tr>

                                            <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>

<?php
}

?>
<script>
  $(function() {
  $.fn.lazyResponsiveTable = function( options ) {
    var settings = $.extend({
      thead: 'thead',
      tbody: 'tbody',
    }, options);
    
    var $table = $(this);
    var $thead = $table.find(settings.thead);
    var $tbody = $table.find(settings.tbody);
        
    $thead.find('th').each( function() {
      var data = $(this).text();
      if( ! $(this).attr('data-table')) {
        $(this).attr('data-table',data);
      }
    });
    
    $tbody.find('td').each(function() {
      var index = $(this).index();
      var data = $thead.find('th:eq('+index+')').attr('data-table');
      $(this).attr('data-table',data);
    });
  };
  
  $('.responsive-table').lazyResponsiveTable();
});
</script>