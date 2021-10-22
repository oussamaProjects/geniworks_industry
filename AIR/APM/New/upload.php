<?php
session_start();
$userpu=$_SESSION['nmu'];
$userpp=$_SESSION['passu'];
$userp=$_SESSION['uat'];
require('controls/zdze8efzedzdeezd/de5.php');

if(!empty($_FILES))
{
	if(is_uploaded_file($_FILES['skipID']['tmp_name']))
	{
		sleep(1);

$ast= $_POST['ast1'];
$subast=$_POST['subast1'];
$subastid1=$_POST['subastid1'];
$gwyes = !empty($_POST['gwyes1']);
$cleanyes=!empty($_POST['cleanyes1']);
$dirtdegree=$_POST['dirtdegree'];
$eqpic = $_FILES['skipID']['name'];


$qry=mysqli_query($cdb,"SELECT * FROM asset_clean_inspection WHERE acij_asset='$ast' AND acij_sub_asset='$subast' AND acij_subasset_id='$subastid1' AND acij_call NOT LIKE 'done'");
$rowCheck=mysqli_num_rows($qry);
    if ($rowCheck>0) {

$qryCheck=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_asset='$ast' AND acij_sub_asset='$subast' AND acij_subasset_id='$subastid1' AND acij_call NOT LIKE 'done'");
$qryCheck->execute();
if ($qryCheck===0) {
	echo "error";
}
elseif($qryCheck!==0){
	$reswarning=$qryCheck->get_result();
    if (mysqli_num_rows($reswarning)>0) {
        ?>






<script type="text/javascript">
      $modal = $('#warningmodal');
        $modal.modal('show');
</script>

<?php
                 while ($showwrn=$reswarning->fetch_row()) {
                 	?>

<div id="warningmodal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Warning Before Confirm</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
          </div>
          <div class="modal-body">
              <div class="kt-portlet__body">
                <div class="form-group form-group-last">
                  <div class="alert alert-secondary" role="alert">
                    <div class="alert-icon" align="center" style="padding-left:1px; padding-right:4px; width: 80px; display:inline-grid;">
                      <?php
                    if ($showwrn[10]=='') {
                                                            ?>
                                                            <i class="flaticon-warning kt-font-secondary"></i>
                                                            <span class="badge badge-secondary" style="width: 70px; font-size: 11px;">None</span>
                                                            <?php
                                                            }
                                                            if ($showwrn[10]=='low') {
                                                            ?>
                                                            <i class="flaticon-warning kt-font-secondary"></i>
                                                            <span class="badge badge-secondary"style="width: 70px; font-size: 11px;" >Low</span>
                                                            <?php
                                                            }
                                                            if ($showwrn[10]=='medium') {
                                                            ?>
                                                            <i class="flaticon-warning kt-font-warning"></i>
                                                            <span class="badge badge-warning" style="width: 70px; font-size: 11px;">Medium</span>
                                                            <?php
                                                            }
                                                            if ($showwrn[10]=='high') {
                                                            ?>
                                                            <i class="flaticon-warning kt-font-danger"></i>
                                                            <span class="badge badge-danger" style="width: 70px; font-size: 11px;">High</span>
                                                            <?php
                                                            }
                                                            ?>
                                                            
                    </div>
                    <div class="alert-text">
                    Remember! <br><span style="font-size: 14px;">Last Uncleaned Inspection Status</span>
                    
                    </div>
                  </div>
                </div>
            			<label><?php echo $showwrn[2];?> <?php echo $showwrn[3];?> <?php echo $showwrn[4];?> </label>
            			<?php
                  if ($showwrn[7]=='clean') {?>
                    <span class="form-text text-muted">Already Inspected. Status <span class="kt-link kt-link--brand"> In process</span> </span>
                    <?php
                    }
                    ?>
                    <?php
                  if ($showwrn[7]=='1') {?>
                    <span class="form-text text-muted">Already Inspected. Status <span class="kt-link kt-link--danger"> No action</span> </span>
                    <?php
                    }
                    ?>

              </div>
              <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                  <button data-toggle="modal" data-target="#checkmodal" class="btn btn-warning" data-dismiss="modal" >Go Check</button>
                  <input type="reset"  name="" class="btn btn-secondary" value="Cancel">
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>






<?php
$rowwhere=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_asset='$ast' AND acij_sub_asset='$subast' AND acij_subasset_id='$subastid1' AND acij_call NOT LIKE 'done'");
$rowwhere->execute();
if ($rowwhere===false) {
	echo "error";
}
else{
	$reswhere=$rowwhere->get_result();
                    	 ?> 




<div id="checkmodal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Inspections With No Action</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
          </div>
          <div class="modal-body">
             <div class="kt-portlet__body">
              <?php while ($showwhere=$reswhere->fetch_row()) { 
               
                $datetime = date('M j, Y, g:i a', strtotime($showwhere[8]));



                ?>
             

              	
                

                <input type="hidden" name="idinsp" value="<?php echo $showwhere[0];?>">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
            			<span class="form-text text-muted"><img src="controls/img/assets/<?php echo $showwhere[5]?>" style="width:100%;"/></span>
                  </div>
                </div>
                <div class="form-group form-group-last">
                  <div class="alert alert-secondary" role="alert" style="margin-bottom: 2px;">
                   
                  
                    <div class="alert-text">
                 <span style="font-size: 17px;">  <?php echo $subast;?> 
                   | <?php echo $subastid1;?> |
                   <?php echo $ast;?></span>
                   <?php
                    if ($showwhere[10]=='') {
                                                            ?>
                                                            <span class="badge badge-secondary" style="width: 110px; font-size: 12px; text-align: center;">Not specified</span>
                                                            <?php
                                                            }
                                                            if ($showwhere[10]=='low') {
                                                            ?>
                                                            <span class="badge badge-secondary"style="width: 90px; font-size: 12px;  text-align: center;" >Low</span>
                                                            <?php
                                                            }
                                                            if ($showwhere[10]=='medium') {
                                                            ?>
                                                            <span class="badge badge-warning" style="width: 90px; font-size: 12px; text-align: center;">Medium</span>
                                                            <?php
                                                            }
                                                            if ($showwhere[10]=='high') {
                                                            ?>
                                                            <span class="badge badge-danger" style="width: 90px; font-size: 12px;  text-align: center;">High</span>
                                                            <?php
                                                            }
                                                            ?>
                   <?php
                  if ($showwrn[7]=='clean') {?>
                    <span class="form-text text-muted">Status <span class="kt-link kt-link--brand"> In process</span> </span>
                    <?php
                    }
                    ?>
                    <?php
                  if ($showwrn[7]=='1') {?>
                    <span class="form-text text-muted"> Status <span class="kt-link kt-link--danger"> No action</span> </span>
                    <?php
                    }
                    ?> 
                    </div>
                   
                  </div>
                   <div class="row">
                  <div class="col-lg-7 col-md-7 col-sm-7">
                    <span style="font-size: 14px; font-weight: normal; float: left;">on <span style="color: #00A1db;"><?php echo $datetime;?></span></span>
                  </div>
                    <div class="col-lg-5 col-md-5 col-sm-5"> <span style="font-size: 12px; font-weight: normal; float: right;">Inspected By <span style="font-weight: bold;"><?php echo $showwhere[9];?></span></span>
                  </div>
                </div>
                </div>
                <div class="kt-separator kt-separator--space-lg kt-separator--border-dashed"></div>
                <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-2">
                  </div>

                  <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small group">
                      <form class="editinsp kt-form kt-form--label-right">
                        <input type="hidden" name="idinsp" value="<?php echo $showwhere[0];?>">
                    <button type="submit"  name="upcdone" class="btn btn-outline-success btn-sm donebtn"><i class="fa fa-check" style="background-color:#1dc9b7; "></i>Done</button>
                  </form>&nbsp;
                  <form class="cleaninsp kt-form kt-form--label-right">
                    <input type="hidden" name="idinsp" value="<?php echo $showwhere[0];?>">
                  <button type="submit"  name="upclean" class="btn btn-outline-brand btn-sm cleanbtn"><i class="fa fa-undo" style="background-color:#001Adb;"></i>Clean</button></form>&nbsp;
                  <form class="cancelinsp kt-form kt-form--label-right">
                    <input type="hidden" name="idinsp" value="<?php echo $showwhere[0];?>">
                  <button type="submit"  name="cancelfun" class="btn btn-outline-secondary btn-sm" ><i class="fa fa-ban"></i>Cancel</button>
                </form>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2">
              </div>
            </div>
        <?php } ?>  
      </div>
    </div>
                	<input type="hidden" name="subast1" value="<?php echo $subast;?>">
                	<input type="hidden" name="subastid1" value="<?php echo $subastid1;?>">
                	<input type="hidden" name="ast1" value="<?php echo $ast;?>">
          
        </div>
      </div>
    </div>


<script type="text/javascript">
  $('.editinsp').submit(function(e){
    var url = "controls/editinsp.php"; 
    var data = $(this).serialize(); 

    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Thanks! <?php echo $subastid1;?> mark as Done.");
       }
     });
   e.preventDefault();
});
</script>



<script type="text/javascript">
  $('.cleaninsp').submit(function(e){
    var url = "controls/cleaninsp.php"; 
    var data = $(this).serialize(); 

    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Thanks! <?php echo $subastid1;?> mark as clean.");
       }
     });
   e.preventDefault();
});
</script>



<script type="text/javascript">
  $('.cancelinsp').submit(function(e){
    var url = "controls/cancelinsp.php"; 
    var data = $(this).serialize(); 

    $.ajax({
       type: "POST",
       url: url,
       data: data,
       success: function(data)
       {
           alert("Thanks! <?php echo $subastid1;?> Canceled.");
       }
     });
   e.preventDefault();
});
</script>



<?php 
}
?>


<?php
}
?>








<?php  
    }}
}
    else{


 if($eqpic!='')
 {

 	$upload_directory = "../controls/img/assets/"; 
 	$pic=time().$eqpic;
 	if(move_uploaded_file($_FILES['skipID']['tmp_name'], $upload_directory.$pic)){    
		$QueryInsertFile=$cdb->prepare("INSERT INTO asset_clean_inspection VALUES ('','11', '$ast', '$subast', '$subastid1', '$pic', '$cleanyes', '$gwyes', NOW(), '$userpu', '$dirtdegree', '')");
			 $QueryInsertFile->execute();
			 if ($QueryInsertFile === false) {
					echo "display error".mysqli_error($cdb);
			 }
			 else{
$rees=$QueryInsertFile->get_result();

}
}}

			echo '<img src="'.$upload_directory.''.$pic.'" class="img-thumbnail" width="300"/>';?>

			<h4><span > <?php echo $ast;?></span> | <span> <?php echo $subastid1;?> </span> | <span> <?php echo $subast;?></span></h4>


<?php		
	}
}
}
?>