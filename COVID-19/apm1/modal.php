<div class="modal fade bd-example-modal-lg" id="<?php echo $showcab[1];?>cabindetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalCenterTitle"><span style="text-transform: uppercase;"><<?php echo $showcab[7];?>-<?php echo $showcab[1];?></span> Details</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="kt-portlet">
																		<div class="pieContainer">
																			<?php 


$cabinhisdis=$cdb->prepare("SELECT count(*) FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01'");
$cabinhisdis->execute();
if ($cabinhisdis===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $cabinhisr=$cabinhisdis->get_result();

                                

 ?>
<?php while ($showresdis=$cabinhisr->fetch_row()) { $varcabinsel=$showresdis[0]; $varcabinselpie=(($showresdis[0]/60)*360);$varcabinselpierest=360-(($showresdis[0]/60)*360);}}?>
<div class="row">
	<div class="col-md-12" align="center"><div align="center" class="pie" style="background: conic-gradient(from 360deg, #fd397a <?php echo $varcabinselpierest;?>deg, #efefef 0 <?php echo $varcabinselpie;?>deg, #1dc9b7 0 100%);"></div>
</div>
<div class="col-md-12">
	<div style="padding-right:10px;padding-left:10px;">
    <div class="item prod"> <?php echo $varcabinsel;?>/ 60 Disinfections <span class="text-muted">this month</span></div>
    <?php 


$cabinhistoryt=$cdb->prepare("SELECT * FROM cabin_cleaning_history WHERE cabnch_cabin='$showcab[1]' AND cabnch_owner='APM-TERMINALS 01'");
$cabinhistoryt->execute();
if ($cabinhistoryt===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $rcabinhistoryt=$cabinhistoryt->get_result();

                                
if (mysqli_num_rows($rcabinhistoryt)!=0) { 
 ?>

											<div class="kt-scroll" data-scroll="true" data-mobile-height="250" style="height: 250px">
												<div class="item " style="font-weight: 600;text-transform: uppercase; padding: 3px;">Cabin Disinfection History</div>
												<?php while ($showhistor=$rcabinhistoryt->fetch_row()) { 

													
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$showhistor[2]'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
 	$member=$showm[3];
 	?>
<?php }
}
else{
	$member="NONE";
}
}?>


													
												<div class="kt-list kt-list--badge">
													<div class="kt-list__item">
														<?php if(($showhistor[3]=="")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
														<?php } ?>
												<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
															<span class="kt-list__badge kt-list__badge--brand"></span>
												<?php } ?>
												<?php if($showhistor[3]=="finish"){ ?>
															<span class="kt-list__badge kt-list__badge--success"></span>
												<?php } ?>

												<?php if($showhistor[3]=="Canceled"){ ?>
													<span class="kt-list__badge kt-list__badge--danger"></span>
													<?php } ?>
												<?php if($showhistor[3]=="Not available"){ ?>
													<span class="kt-list__badge kt-list__badge--accent"></span>
													<?php } ?>

												<span class="kt-list__text"><?php echo $member;?> has mark as 
															<?php if(($showhistor[3]=="Disinfect")||($showhistor[3]=="Redisinfect")){ ?>
																 <span style="font-weight:600; display: inline;" class="kt-list__text  kt-font-brand">Disinfect</span>
												<?php } ?>
												<?php if(($showhistor[3]=="finish")){ ?>
																 <span style="font-weight:600;display:inline;" class="kt-list__text  kt-font-success"><?php echo $showhistor[3];?></span>
												<?php } ?>
											

												<?php if($showhistor[3]=="Canceled"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-danger"><?php echo $showhistor[3];?></span>
												<?php } ?>

												<?php if($showhistor[3]=="Not available"){ ?>
																 <span style="font-weight:600;display: inline;" class="kt-list__text  kt-font-accent"><?php echo $showhistor[3];?></span>
												<?php } ?>
												</span>



														<span class="kt-list__time"><?php echo $showhistor[8];?></span>
													</div>
													
												</div>
											<?php } ?>
											</div>
												<?php } ?>

												<?php
												 } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>