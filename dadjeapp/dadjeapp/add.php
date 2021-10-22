

<form method='POST' action='' enctype="multipart/form-data">
    <input type='file' name='UploadImage'>
    <input type='submit' name="addeq" value="submit">
</form>

<?php
include('controls/zdze8efzedzdeezd/45azd72dz9de5.php');

if (isset($_POST['addeq'])) {


extract($_POST);

$UploadedFileName=$_FILES['UploadImage']['name'];
if($UploadedFileName!='')
{
  $upload_directory = "img/";
  $TargetPath=time().$UploadedFileName;
  if(move_uploaded_file($_FILES['UploadImage']['tmp_name'], $upload_directory.$TargetPath)){    
    $QueryInsertFile="INSERT INTO equipments SET eq_pic='$TargetPath'"; 
                  
  }
}

}
?>
<from class="form-horizontal form-material" method="post" action="controls/addequipment.php">
                                                    <div class="form-group">
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Equipment name"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                             </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Image</span>
                                                                <input type="file" name="eqpic" class="upload"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                               <input type="submit" value="add" name="addeq">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            </div>
                                                </from>