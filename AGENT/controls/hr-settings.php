<style type="text/css">
	.col-form-label{
		padding-top: 0 !important;
		padding-bottom: 0 !important;
	}

</style>
<?php
require('zdze8efzedzdeezd/de5.php');
$idag=$_GET['id'];

$showpers=$cdb->prepare("SELECT * FROM agents WHERE ag_id='$idag'");
$showpers->execute();
if ($showpers===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resinfo=$showpers->get_result();
  	while ($showinfo=$resinfo->fetch_row()) {?>
		<div class="tab-pane fade" id="kt_profile_tab_hr" role="tabpanel">
													<div class="kt-portlet">
														<div class="kt-portlet__head">
															<div class="kt-portlet__head-label">
																<h3 class="kt-portlet__head-title">HR Settings <small>control informations according to job title, contract and mission.</small></h3>
															</div>
														</div>
														<form class="kt-form kt-form--label-right">
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">
																		<div class="row">
																			
																			<div class="col-lg-2 col-xl-2">
																				<h3 class="kt-section__title kt-section__title-sm">Annual Leaving:</h3>
																			</div>
																		
																			
																			<div class="col-lg-9 col-xl-6">
																				<span class="kt-switch">
																					<label style="font-size: 14px; font-weight: 600;">
																						<input type="checkbox" checked="checked" name="email_notification_1" >Active
																						<span></span>
																					</label>
																				</span>
																			</div>
																		</div>
																		<div class="row">
																			
																			<div class="col-lg-9 col-xl-6">
																				<h3 class="kt-section__title kt-section__title-sm">Annual leaving details</h3>
																			</div>
																		</div>
																		<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg" style="margin: 0rem 0;"></div>

																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Standard annual leaving days</label>
																			<div class="col-lg-3 col-xl-3">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					18 days 
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Spended</label>
																			<div class="col-lg-2 col-xl-2">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					10 days
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" >Rest</label>
																			<div class="col-lg-2 col-xl-2">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					10 days
																				</div>
																			</div>
																		</div>
																	
																		
																		
																	</div>
																</div>
																<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg" style="margin: 0rem 0;"></div>
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">
																		<div class="row">
																			
																			<div class="col-lg-2 col-xl-2">
																				<h3 class="kt-section__title kt-section__title-sm">Payrolls:</h3>
																			</div>
																		</div>
													
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Hiring date</label>
																			<div class="col-lg-3 col-xl-3">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					<?php echo $showinfo[29]; ?>
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
<?php
$now = time();
$your_date = strtotime($showinfo[29]);
$sendiff = $now - $your_date;
?>
																			<label class="col-xl-3 col-lg-3 col-form-label">Seniority</label>
																			<div class="col-lg-2 col-xl-2">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					<?php echo round($sendiff / (60 * 60 * 24)); ?> days
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" >CNSS</label>
																			<div class="col-lg-2 col-xl-2">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					<?php if ($showinfo[9]=="Not declared") {
                            ?><span style=" color: #fd397a;"> undeclared</span>
                          <?php }else{
                            ?>
                            <span > <?php  echo $showinfo[9]; ?></span>
                          <?php }
                          ?>
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" >CMIR</label>
																			<div class="col-lg-2 col-xl-2">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					<span style=" color: #fd397a;"> undeclared</span>
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" >Retirement insurance</label>
																			<div class="col-lg-2 col-xl-2">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					<span style=" color: #fd397a;"> undeclared</span>
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" ></label>
																			<div class="col-lg-2 col-xl-2">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					<button type="Submit" name="save" class="btn btn-sm btn-brand">Details</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg" style="margin: 0rem 0;"></div>

																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">
																		<div class="row">
																			<div class="col-lg-2 col-xl-2">
																				<h3 class="kt-section__title kt-section__title-sm">EXPENSES:</h3>
																			</div>
																		</div>
																		
<?php
require('zdze8efzedzdeezd/de5.php');
$idag=$_GET['id'];

$reqexp=$cdb->prepare("SELECT * FROM expences WHERE exp_employee='$idag'");
$reqexp->execute();
if ($reqexp===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resexp=$reqexp->get_result();
  	while ($showexp=$resexp->fetch_row()) {?>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Mission</label>
																			<div class="col-lg-3 col-xl-3">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					<?php echo $showexp[2]; ?>
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Fuel</label>
																			<div class="col-lg-2 col-xl-2">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					<?php echo $showexp[6]; ?> Liters 
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Start</label>
																			<div class="col-lg-2 col-xl-2">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					<?php echo date('F d Y', strtotime($showexp[3])); ?> 
																				</div>
																			</div>
																		</div>
																		<?php
 $date_now = date("Y-m-d"); 

?>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">End</label>
																			<div class="col-lg-2 col-xl-2">
																				
																					<?php
																					if ($date_now < $showexp[4]) { ?>
																						<div class="input-group" style="font-size: 14px; font-weight: 600;">
																						<?php
																						echo date('F d Y', strtotime($showexp[4]));
																						?></div>
																						<?php
																					}
																					elseif ($date_now > $showexp[4]) { ?>
																						<div class="input-group" style="color:#fd397a; font-size: 14px; font-weight: 600;">
																						<?php
																						echo date('F d Y', strtotime($showexp[4]));?>
																					</div>
																					<?php }
																					?> 
																				
																			</div>
																		</div>
																		
																	
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" ></label>
																			<div class="col-lg-2 col-xl-2">
																				<div class="input-group" style="font-size: 14px; font-weight: 600;">
																					<button type="Submit" name="save" class="btn btn-sm btn-brand">Details</button>
																				</div>
																			</div>
																		</div>
																		
																		<?php }}?>
																	</div>
																</div>
															</div>
															
														</form>
													</div>
												</div>

<?php
if (isset($_POST['save'])) {
	include('controls/updinfo.php');
}
?>



<?php }}?>
<script>
   //   $(function () {
 //       $('#forminfo').on('submit', function (e) {
//          e.preventDefault();
 //         $.ajax({
 //           type: 'post',
 //           url: 'updinfo.php',
  //          data: $('#forminfo').serialize(),
  //          success: function () {
           
   //         }
  //        });

   //     });

  //    });
</script>