<?php

require('../../controls/zdze8efzedzdeezd/de5.php');
$iffinish=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name='$cabinid' AND cabn_status='In progress' AND cabn_last_op_team='$useridc'");

 $iffinish->execute();
 if ($iffinish === false) {
     echo "display error".mysqli_error($cdb);
 }
else{
$resnotif=$iffinish->get_result();
if (mysqli_num_rows($resnotif)!=0) { 
?>

<script type="text/javascript">
  $(document).ready(function() {
  $('#mfinishopcab').modal('show');
});
</script> 


<div class="modal fade bd-example-modal-lg" id="mfinishopcab" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">Complete Disinfection</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="kt-iconbox kt-iconbox--success">
																<div class="kt-iconbox__icon">
																	
																	<i class="fa fa-biohazard" style="font-size: 75px"></i>
																</div>
																<h3 class="kt-demo-panel__title">
															
 	<?php echo $usename; ?>

. You Finish Disinfection Operation For <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab;?> </span>
																</h3>
																<div class="kt-iconbox__content">
																	<form method="post">
																		<input type="hidden" value="<?php echo $useridc; ?>" name="useridf">
																		<input type="hidden" value="<?php echo $cablab; ?>" name="cabinidf">
																	<input type="submit" name="fdisinfect1" class="btn btn-brand btn-lg" value="Yes"/>
																</form>
																<?php if (isset($_POST["fdisinfect1"])) {
																	require("../../controls/finish.php");
																} 
																 ?>
																</div>
															</div>
																	</div>
																</div>

															</div>
														</div>
													</div>

													<?php }}?>
												<?php

require('../../controls/zdze8efzedzdeezd/de5.php');
$iffinish=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name='$cabinid' AND cabn_status='In progress'");

 $iffinish->execute();
 if ($iffinish === false) {
     echo "display error".mysqli_error($cdb);
 }
else{
$resnotif=$iffinish->get_result();
if (mysqli_num_rows($resnotif)!=0) { 
?>

<script type="text/javascript">
  $(document).ready(function() {
  $('#mfinishopcab').modal('show');
});
</script> 


<div class="modal fade bd-example-modal-lg" id="mfinishopcab" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">Complete Disinfection</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="kt-iconbox kt-iconbox--success">
																<div class="kt-iconbox__icon">
																	
																	<i class="fa fa-biohazard" style="font-size: 75px"></i>
																</div>
																<h3 class="kt-demo-panel__title">
															
 	<?php echo $usename; ?>

.Is Disinfection Operation For <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab;?></span> Finished?
																</h3>
																<div class="kt-iconbox__content">
																	<form method="post">
																		<input type="hidden" value="<?php echo $useridc; ?>" name="useridf">
																		<input type="hidden" value="<?php echo $cablab; ?>" name="cabinidf">
																	<input type="submit" name="fdisinfect2" class="btn btn-brand btn-lg" value="Yes"/>
																</form>
																<?php if (isset($_POST["fdisinfect2"])) {
																	require("../../controls/finish.php");
																} 
																 ?>
																</div>
															</div>
																	</div>
																</div>

															</div>
														</div>
													</div>

													<?php }}?>


<?php

require('../../controls/zdze8efzedzdeezd/de5.php');
$iffinish=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name='$cabinid' AND cabn_status='Not disinfected' AND cabn_last_op_team='$useridc'");

 $iffinish->execute();
 if ($iffinish === false) {
     echo "display error".mysqli_error($cdb);
 }
else{
$resnotif=$iffinish->get_result();
if (mysqli_num_rows($resnotif)!=0) { 
?>

<script type="text/javascript">
  $(document).ready(function() {
  $('#mredsinfectopcabin').modal('show');
});
</script> 


<div class="modal fade bd-example-modal-lg" id="mredsinfectopcabin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">Redisinfection</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="kt-iconbox kt-iconbox--success">
																<div class="kt-iconbox__icon">
																	
																	<i class="fa fa-biohazard" style="font-size: 75px"></i>
																</div>
																<h3 class="kt-demo-panel__title">
															
 	<?php echo $usename; ?>

. You will Start Redisinfection for <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab;?> </span>
																</h3>
																<div class="kt-iconbox__content">
																	<form method="post">
																		<input type="hidden" value="<?php echo $useridc; ?>" name="useridr">
																		<input type="hidden" value="<?php echo $cablab; ?>" name="cabinidr">
																	<button type="submit" name="redisinfect1" class="btn btn-brand btn-lg">Yes</button>
																</form>
																<?php if (isset($_POST["redisinfect1"])) {
																	require("../../controls/redisinfect.php");
																} ?>
																</div>
															</div>
																	</div>
																</div>

															</div>
														</div>
													</div>

													<?php }}?>


<?php

require('../../controls/zdze8efzedzdeezd/de5.php');
$iffinish=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name='$cabinid' AND cabn_status='Canceled' AND cabn_last_op_team='$useridc'");

 $iffinish->execute();
 if ($iffinish === false) {
     echo "display error".mysqli_error($cdb);
 }
else{
$resnotif=$iffinish->get_result();
if (mysqli_num_rows($resnotif)!=0) { 
?>

<script type="text/javascript">
  $(document).ready(function() {
  $('#mredsinfectc').modal('show');
});
</script> 


<div class="modal fade bd-example-modal-lg" id="mredsinfectc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">Redisinfection</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="kt-iconbox kt-iconbox--success">
																<div class="kt-iconbox__icon">
																	
																	<i class="fa fa-biohazard" style="font-size: 75px"></i>
																</div>
																<h3 class="kt-demo-panel__title">
															
 	<?php echo $usename; ?>

. You will Start Redisinfection for <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab;?> </span>
																</h3>
																<div class="kt-iconbox__content">
																	<form method="post">
																		<input type="hidden" value="<?php echo $useridc; ?>" name="useridr">
																		<input type="hidden" value="<?php echo $cablab; ?>" name="cabinidr">
																	<button type="submit" name="redisinfect2" class="btn btn-brand btn-lg">Yes</button>
																</form>
																<?php if (isset($_POST["redisinfect2"])) {
																	require("../../controls/redisinfect.php");
																} ?>
																</div>
															</div>
																	</div>
																</div>

															</div>
														</div>
													</div>

													<?php }}?>
	<?php

require('../../controls/zdze8efzedzdeezd/de5.php');
$iffinish=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name='$cabinid' AND cabn_status='Canceled'");

 $iffinish->execute();
 if ($iffinish === false) {
     echo "display error".mysqli_error($cdb);
 }
else{
$resnotif=$iffinish->get_result();
if (mysqli_num_rows($resnotif)!=0) { 
?>

<script type="text/javascript">
  $(document).ready(function() {
  $('#mredsinfectcn').modal('show');
});
</script> 


<div class="modal fade bd-example-modal-lg" id="mredsinfectcn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">Redisinfection</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="kt-iconbox kt-iconbox--success">
																<div class="kt-iconbox__icon">
																	
																	<i class="fa fa-biohazard" style="font-size: 75px"></i>
																</div>
																<h3 class="kt-demo-panel__title">
															
 	<?php echo $usename; ?>

. You will Start Redisinfection for <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab;?> </span>
																</h3>
																<div class="kt-iconbox__content">
																	<form method="post">
																		<input type="hidden" value="<?php echo $useridc; ?>" name="useridr">
																		<input type="hidden" value="<?php echo $cablab; ?>" name="cabinidr">
																	<button type="submit" name="redisinfect3" class="btn btn-brand btn-lg">Yes</button>
																</form>
																<?php if (isset($_POST["redisinfect3"])) {
																	require("../../controls/redisinfect.php");
																} ?>
																</div>
															</div>
																	</div>
																</div>

															</div>
														</div>
													</div>

													<?php }}?>


<?php

require('../../controls/zdze8efzedzdeezd/de5.php');
$iffinish=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name='$cabinid' AND cabn_status='Not disinfected' AND cabn_last_op_team=''");

 $iffinish->execute();
 if ($iffinish === false) {
     echo "display error".mysqli_error($cdb);
 }
else{
$resnotif=$iffinish->get_result();
if (mysqli_num_rows($resnotif)!=0) { 
?>

<script type="text/javascript">
  $(document).ready(function() {
  $('#mseereport').modal('show');
});
</script> 


<div class="modal fade bd-example-modal-lg" id="mseereport" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle">New Operation order</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="kt-iconbox kt-iconbox--success">
																<div class="kt-iconbox__icon">
																	
																	<i class="fa fa-biohazard" style="font-size: 75px"></i>
																</div>
																<h3 class="kt-demo-panel__title">
															
 	<?php echo $usename; ?>

. You will Start Disinfection for <span style="text-transform: uppercase; font-weight: 700;"><?php echo $cablab;?> </span>
																</h3>
																<div class="kt-iconbox__content">
																	<form method="post">
																		<input type="hidden" value="<?php echo $useridc; ?>" name="useridd">
																		<input type="hidden" value="<?php echo $cablab; ?>" name="cabinidd">
																	<button type="submit" name="disinfectc" class="btn btn-brand btn-lg">Yes</button>
																</form>
																<?php if (isset($_POST["disinfectc"])) {
																	require("../../controls/add.php");
																} ?>
																</div>
															</div>
																	</div>
																</div>

															</div>
														</div>
													</div>

													<?php }}?>
