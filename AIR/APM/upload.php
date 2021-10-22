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


$qry=mysqli_query($cdb,"SELECT * FROM asset_clean_inspection WHERE acij_asset='$ast' AND acij_sub_asset='$subast' AND acij_subasset_id='$subastid1'");
$rowCheck=mysqli_num_rows($qry);
    if ($rowCheck>0) { // if data exist update the data
        ?>










<script type="text/javascript">
       
      $modal = $('#warningmodal');
        $modal.modal('show');
    

</script>



<div id="acceptancemodal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Other Acceptance UT</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form method="post" class="newwitness kt-form kt-form--label-right">
              <div class="kt-portlet__body">
                <div class="form-group form-group-last">
                  <div class="alert alert-secondary" role="alert">
                    <div class="alert-icon">
                      <i class="flaticon-warning kt-font-brand"></i>
                    </div>
                    <div class="alert-text">
                    You Can Define New Acceptance With The Informations Below.
                    </div>
                  </div>
                </div>
                <div class="form-group ">
                  <label>Acceptance Text</label>
                  <div class="kt-input-icon kt-input-icon--left">
                    <input type="text" name="accpname" required="required" class="form-control" placeholder="">
                  </div>
                  <span class="form-text text-muted">Fill Complete Informations</span>
                </div>
                <div class="form-group ">
                  <label>Acceptance ID</label>
                  <div class="kt-input-icon kt-input-icon--right">
                    <input type="text" name="accpid" required="required" class="form-control" placeholder="">
                  </div>
                  <span class="form-text text-muted">Fill ID </span>
                </div>
              </div>
              <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                  <input type="submit"  name="addacc" class="btn btn-brand" value="Add">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>






<?php include('controls/warning.php');?>
























        <?php  
    }
    else{
 if($eqpic!='')
 {
  $upload_directory = "controls/img/assets/"; 
  $pic=time().$eqpic;
  if(move_uploaded_file($_FILES['skipID']['tmp_name'], $upload_directory.$pic)){    
    $QueryInsertFile=$cdb->prepare("INSERT INTO asset_clean_inspection VALUES ('','11', '$ast', '$subast', '$subastid1', '$pic', '$cleanyes', '$gwyes', NOW(), '$userpu','$dirtdegree','')");
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



