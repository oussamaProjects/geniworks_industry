<?php
                                                
                                                  $idr=$_GET['edit'];
                                                  include('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');
                                                  $reqed=$cdb->prepare("SELECT * FROM requests WHERE req_id=".$idr);
                                                  $reqed->execute();
                                                  if ($reqed===false) {
                                                    echo"failed display ".mysqli_error();
                                                  }else{
                                                    $resed=$reqed->get_result();
                                                  ?>
                                                 
                        <?php while ($rwed=$resed->fetch_row()) {
                         
                         ?> 
                         <div class="container-fluid">
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">

                                  
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-10">
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                                        <div class="section-title mt-3 mb-5">
                                           Request <?php echo $rwed[2]; ?>
                                        </div>
                                        <form method="post" class="form-horizontal">
                                        <input hidden="hidden" name="idreq" value="<?php echo  $rwed[0];?>" class="form-control">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label">Name</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="<?php echo  $rwed[2];?>" class="form-control">
                                                </div>
                                           
                                                <label class="col-lg-2 form-control-label">Section</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="<?php echo  $rwed[1];?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mt-3 mb-5">
                                                <label class="col-lg-2 form-control-label">Status</label>
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" data-on="Confirmed" name="statreq" value="in" data-off="Canceled"  data-toggle="toggle">
                                                    </div>
                                                </div>
                                            
                                             <label class="col-lg-2 form-control-label">Request Date</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="rqdate" readonly value="<?php echo  $rwed[4];?>" class="form-control">
                                                </div>
                                            
                                            </div>
                                            <div class="text-right">
                                                <button  name="confirm" class="btn btn-gradient-01" type="submit">Confirm</button>
                                                <button class="btn btn-shadow" type="reset">Reset</button>
                                            </div>
                                         </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


<?php

}}

if (isset($_POST['confirm'])) {
    $idreq=$_POST['idreq'];
    $rqdate=$_POST['rqdate'];

    $statreq=(isset($_POST['statreq'])) ? $_POST['statreq'] : null;

   include('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');

   $reqcon=$cdb->prepare("UPDATE requests SET req_activity='$statreq' WHERE req_id=".$idreq);
   $reqcon->execute();
   if ($reqcon===false) {
       echo"confirmation failed".mysqli_error();
   }else
   {
    $rescon=$reqcon->get_result();
    if (!empty($_POST['statreq'])) {
       $statreq = $_POST['statreq'];
       $requp=$cdb->prepare("UPDATE tools SET T_activity='$statreq' WHERE T_date=".$rqdate);
       $requp->execute();
   if ($requp===false) {
       echo"confirmation failed".mysqli_error();
   }else
   {
    $rescon=$requp->get_result();
    echo "<meta http-equiv='refresh' content='0;requests.php?show'>";
    ?>
    <?php
   }}
}
}



?>