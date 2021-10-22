<?php

require('zdze8efzedzdeezd/de5.php');
$showr=$cdb->prepare('SELECT * FROM work_ppe_apm1');
$showr->execute();
if ($showr===false) {
  echo "We Have Problem In ppe Data Export Issue!";
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
                                                <th  data-table="Custom Head 1" style="text-align: center;">ID</th>
                                                <th style="text-align: center;">Serial Number</th>
                                                <th style="text-align: center;">PPE Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Function</th>
                                                <th style="text-align: center;">Supplier</th>
                                                <th style="text-align: center;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrow=$res->fetch_row()) {
                                            
                                           

                                          ?>
                                            <tr>
                                                <td><?php echo "$showrow[0]";?></td>
                                                

                                                
</div>
<div id="delete-ppe<?php echo "$showrow[0]";?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"><h4 class="modal-title" id="myModalLabel">Delete PPE</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                 </div>
                                            <div class="modal-body">

                                                <div class="col-lg-12 col-xlg-9 col-md-7">
                                                    <div class="card">
                                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">PPE  <?php echo "$showrow[1]";?></a> </li>
                                                        </ul>
                                                        <br>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="aassets" role="tabpanel">
                                                                <form method='POST'  class="form-horizontal"  action='../controls/deleteppe.php' enctype="multipart/form-data">



                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">PPE Name</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" value="<?php echo "$showrow[2]";?>" name="ebrndd" id="ebrndd" onChange="Function(this);" class="form-control"  required="required">
                                                                            <input type="hidden" value="<?php echo "$showrow[0]";?>" name="eqid" onChange="Function(this);" required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                               
                                                                 
                                                    <div class="modal-footer">
                                                        <input type='submit'  class="btn btn-primary" name="deleq" value="submit">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                <?php
                                if (isset($_POST['deleq'])) {
                                     include('deleteppe.php');
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
<div id="edit-equipment<?php echo "$showrow[0]";?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"><h4 class="modal-title" id="myModalLabel">Edit PPE</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                 </div>
                                            <div class="modal-body">

                                                <div class="col-lg-12 col-xlg-9 col-md-7">
                                                    <div class="card">
                                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#aassets" role="tab">PPE  <?php echo "$showrow[1]";?></a> </li>
                                                        </ul>
                                                        <br>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="aassets" role="tabpanel">
                                                                <form method='POST'  class="form-horizontal"  action='../controls/editppe.php' enctype="multipart/form-data">



                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">PPE Name</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" value="<?php echo "$showrow[2]";?>" name="ebrndd" id="ebrndd" onChange="Function(this);" class="form-control"  required="required">
                                                                            <input type="hidden" value="<?php echo "$showrow[0]";?>" name="eqid" onChange="Function(this);" required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">internal ID</label>
                                                                        <div class="col-md-8">
                                                                           <input type="text"   value="<?php echo "$showrow[1]";?>" name="internalidd" class="form-control" placeholder="internal ID"  required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Function</label>
                                                                        <div class="col-md-8">
                                                                           <input type="text"   value="<?php echo "$showrow[4]";?>" name="functionp" class="form-control"   required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                  <div class="form-group row">
                                                                    <label class="control-label col-md-4">Supplier</label>
                                                                    <div class="col-md-8">
                                                                      <select class="form-control" name="supplierp" placeholder="PPE Supplier" required="required">
                                                                        <optgroup value="<?php echo "$showrow[5]";?>"><?php echo "$showrow[5]";?></optgroup>
                                                                        <option value="3S MOROCCO">3S MOROCCO</option>
                                                                        <option value="BRICOMA">BRICOMA</option>
                                                                        <option value="BRICOLAGE">BRICOLAGE</option>
                                                                      </select>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">Price</label>
                                                                        <div class="col-md-8">
                                                                           <input type="text" value="<?php echo "$showrow[9]";?>" name="priceppe" class="form-control"   required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">PPE Picture</label>
                                                                        <div class="col-md-8">
                                                                            <img src="../controls/imgs/ppe/<?php echo "$showrow[3]";?>" alt="" width="100"/> 
                                                                        </div>
                                                                    </div>
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
                                     include('editppe.php');
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







                                               
                                                
                                                <td><?php echo  "$showrow[1]";?></td>
                                                <td><?php echo  "$showrow[2]";?></td>
                                                <td>
                                                       <img src="../controls/imgs/ppe/<?php echo "$showrow[3]";?>" alt="" width="50"/>    
                                                </td>
                                                <td><?php echo  "$showrow[4]";?></td>
                                                <td><?php echo  "$showrow[5]";?></td>
                                                
                                                <td class="td-actions">
                                                           <center> <a href="#edit-equipment<?php echo "$showrow[0]";?>" class="info" style=" " data-toggle="modal" data-target=""><i class="far fa-edit"></i> </a>
                                                           	<a href="#delete-ppe<?php echo "$showrow[0]";?>" class="info" style=" " data-toggle="modal" data-target=""><i class="fas fa-trash"></i> </a>

                                                            

                                                           </center>
                                                        </td>
                                            </tr>
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