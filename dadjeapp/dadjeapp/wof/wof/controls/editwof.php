<?php
                                                
                                                  $idr=$_GET['edit'];
                                                  include('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');
                                                  $reqed=$cdb->prepare("SELECT * FROM wof WHERE w_id=".$idr);
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
                                                <label class="col-lg-2 form-control-label">SITE</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="<?php echo  $rwed[2];?>" class="form-control">
                                                </div>
                                           
                                                <label class="col-lg-2 form-control-label">Sub-Asset</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="<?php echo  $rwed[7];?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label">Order Owner</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="<?php echo  $rwed[4];?>" class="form-control">
                                                </div>
                                           
                                                <label class="col-lg-2 form-control-label">Order Reciever</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="<?php echo  $rwed[5];?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label">Down Time</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="<?php echo  $rwed[6];?>" class="form-control">
                                                </div>
                                           
                                                <label class="col-lg-2 form-control-label">Requested Cleaning Type</label>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                  <div class="input-group mb-3">
                                                    <input type="text" class="form-control" value="<?php echo  $rwed[8];?>" aria-label="">
                                                    <div class="input-group-append">
                                                      <span class="input-group-text">%</span>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                            </div>
                                             <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label">Cleaning Operation</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="<?php echo  $rwed[9];?>" class="form-control">
                                                </div>
                                           
                                                <label class="col-lg-2 form-control-label">WOF Status</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="<?php echo  $rwed[13];?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mt-3 mb-5">
                                               <!-- <label class="col-lg-2 form-control-label">Wof Stat</label>
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" data-on="Confirmed" name="statreq" value="<?php echo  $rwed[13];?>" data-off="Canceled"  data-toggle="toggle">
                                                    </div>
                                                </div>-->
                                            
                                             <label class="col-lg-2 form-control-label">Request Date</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="rqdate" readonly value="<?php echo  $rwed[3];?>" class="form-control">
                                                </div>
                                                <label class="col-lg-2 form-control-label">Delivered Date</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="rqdate" readonly value="<?php echo  $rwed[16];?>" class="form-control">
                                                </div>
                                            
                                            </div>
                                            
                                            <div class="text-right">
                                                <button  name="confirm" class="btn btn-gradient-03" type="submit">Confirm</button>
                                                <button  name="close" class="btn btn-gradient-01" type="submit">Close</button>
                                                <button  name="cancel" class="btn btn-gradient-02" type="submit">Cancel</button>
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

   $reqcon=$cdb->prepare("UPDATE wof SET w_stat='in process' WHERE w_id=".$idreq);
   $reqcon->execute();
   if ($reqcon===false) {
       echo"confirmation failed".mysqli_error();
   }else
   {
    $rescon=$reqcon->get_result();
    echo "<meta http-equiv='refresh' content='0;wof-requests.php?show'>";
    ?>
    <?php
   }

}


if (isset($_POST['cancel'])) {
    $idreq=$_POST['idreq'];
    $rqdate=$_POST['rqdate'];

    $statreq=(isset($_POST['statreq'])) ? $_POST['statreq'] : null;

   include('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');

   $reqcon=$cdb->prepare("UPDATE wof SET w_stat='canceled' WHERE w_id=".$idreq);
   $reqcon->execute();
   if ($reqcon===false) {
       echo"confirmation failed".mysqli_error();
   }else
   {
    $rescon=$reqcon->get_result();
    echo "<meta http-equiv='refresh' content='0;wof-requests.php?show'>";
    ?>
    <?php
   }

}

if (isset($_POST['close'])) {
    $idreq=$_POST['idreq'];
    $rqdate=$_POST['rqdate'];

    $statreq=(isset($_POST['statreq'])) ? $_POST['statreq'] : null;

   include('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');

   $reqcon=$cdb->prepare("UPDATE wof SET w_stat='delivered', w_close_date_time=NOW() WHERE w_id=".$idreq);
   $reqcon->execute();
   if ($reqcon===false) {
       echo"confirmation failed".mysqli_error();
   }else
   {
    $rescon=$reqcon->get_result();
    echo "<meta http-equiv='refresh' content='0;wof-requests.php?show'>";
    ?>
    <?php
   }

}

?>