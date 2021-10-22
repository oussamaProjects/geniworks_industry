<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpers=$cdb->prepare("SELECT * FROM report WHERE rprt_test_type='VT'");
$showpers->execute();
if ($showpers===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrep2=$showpers->get_result();
  	?>
		<div class="tab-pane fade" id="report_type3" role="tabpanel">
													<div class="kt-portlet">
														<div class="kt-portlet__head">
															<div class="kt-portlet__head-label">
																<h3 class="kt-portlet__head-title">Visual Testing 
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpers3=$cdb->prepare("SELECT count(rprt_id) FROM report WHERE rprt_test_type='VT'");
$showpers3->execute();
if ($showpers3===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrep31=$showpers3->get_result();
?>
																	<small><?php while ($showrep31=$resrep31->fetch_row()) { ?><?php echo $showrep31[0];}?> Reports</small>
<?php
}
?>
																</h3>
															</div>
														</div>
														<div class="kt-portlet">
										<div class="kt-portlet__body">

											<?php while ($showrep3=$resrep2->fetch_row()) { ?>
											<div class="accordion accordion-light" id="accordionExample2">
												<div class="card">
													<div class="card-header" id="headingOne2">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne<?php echo $showrep3[0];?>" aria-expanded="true" aria-controls="collapseOne<?php echo $showrep3[0];?>">
															Report <?php echo $showrep3[0];?>
														</div>
													</div>
													<div id="collapseOne<?php echo $showrep3[0];?>" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample2">
														<div class="card-body">
															<form method="post" class="updrep">
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">
																		<div class="row">
																			<div class="col-lg-9 col-xl-6">
																			<label class="col-xl-3"></label>
																			
																				<h3 class="kt-section__title kt-section__title-sm">Asset Informations:</h3>
																			</div>
																		</div>
																		
																		<div class="form-group row"  style="">
																			<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label">Asset</label>
																			
																				<input class="form-control" name="upname" type="text" value="<?php echo $showrep3[2];?>">
																			</div>
																			<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label">AssetID</label>
																			
																			<input class="form-control" name="upname" type="text" value="<?php echo $showrep3[4];?>">
																			</div>
																			<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label" >Sub-Asset</label>
																			
																				<input class="form-control" name="upname" type="text" value="<?php echo $showrep3[3];?>">
																			</div>
																		</div>

																		
																		<div class="row">
																			<div class="col-lg-9 col-xl-6">
																			<label class="col-xl-3"></label>
																			
																				<h3 class="kt-section__title kt-section__title-sm">Equipment Informations:</h3>
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label">Equipment</label>
																			
																				<input class="form-control" type="text" readonly="readonly" value="<?php echo $showrep3[5];?>">
																				<span class="form-text text-muted"></span>
																			</div>
																			
																			<div class="col-lg-4 col-xl-4">
																				<label class="form-control-label">Material</label>
																				<div class="input-group">
																					<input type="text" class="form-control" name="upphone" value="<?php echo $showrep3[6];?>" placeholder="Phone" aria-describedby="basic-addon1">
																				</div>
																				<span class="form-text text-muted"></span>
																			</div>
																			<div class="col-lg-4 col-xl-4">
																				<label class="form-control-label">Picture</label>
																				<div class="input-group">
																					<a href="#" data-toggle="modal" data-target="#imgmodal<?php echo $showrep3[0];?>"><img name="imgup" src="controls/<?php echo $showrep3[26];?>" id="myImg<?php echo $showrep3[0];?>" alt="<?php echo $showrep3[3];?>" style="width:50%;"></a>
																				</div>
																				<span class="form-text text-muted"></span>
																			</div>
																		</div>
																		<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
																		<div class="row"  style="background-color: #f0f0f0;">
																			<div class="col-lg-9 col-xl-6">
																			<label class="col-xl-3"></label>
																			
																				<h3 class="kt-section__title kt-section__title-sm">Standards</h3>
																			</div>
																		</div>
																		<div class="form-group row"  style="background-color: #f0f0f0;">
																			
																			<div class="col-lg-3 col-xl-3">
																			<label class="form-control-label">Procces</label>
																			
																				<select class="form-control"  name="processrep">
																					<option value="Procces 1">Procces 1</option>
																					<option value="Other">Other</option>
																					
																				</select>
																			</div>
																			<div class="col-lg-3 col-xl-3">
																			<label class="form-control-label">Specification</label>
																			
																				<select class="form-control"  name="specrep">
																					<option value="Spesification 1">Spesification 1</option>
																					<option value="Other">Other</option>
																					
																				</select>
																			</div>
																			<div class="col-lg-3 col-xl-3">
																			<label class="form-control-label">Acceptance</label>
																			
																				<select class="form-control"  name="acceptancerep">
																					<option value="Acceptance 1">Acceptance 1</option>
																					<option value="Other">Other</option>
																					
																				</select>
																			</div>
																			<?php include('controls/result.php')?>
																			
																			<br>
																			<br><br><br><br>
																			
																		</div>

																	</div>
																</div>
															</div>
															<div class="kt-portlet__foot">
																<div class="kt-form__actions">
																	<div class="row">
																		<div class="col-lg-9 col-xl-9">
																			
																			
																			<input type="hidden" name="idrep" value="<?php echo $showrep3[0];?>">
																			<button type="submit" name="saveup" class="btn btn-success">Save</button>
																			<button type="reset" class="btn btn-default">Edit</button>
																			<a href="pdf/output.php?id_r=<?php echo $showrep3[0];?>" target="_Blank" class="btn btn-brand">PDF</a>&nbsp;
																		</div>
																	</div>
																</div>
															</div>
														</form>
														</div>
													</div>
												</div>
											</div>
<div class="modal fade" id="imgmodal<?php echo $showrep3[0];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<button type="button" class="close" style="font-size:24px; color: white;" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
														<div class="modal-dialog" role="document">
															<div class="modal-content">

																
																<img name="imgup" src="controls/<?php echo $showrep3[26];?>" id="myImg<?php echo $showrep3[0];?>" alt="<?php echo $showrep3[3];?>" style="width:100%;">
															</div>
														</div>
													</div>
<?php include('controls/newresl.php');?>
<script type="text/javascript">
	$("#resn<?php echo $showrep3[0];?>").on("change", function () {        
      $modal = $('#resultmodal');
      if($(this).val() === 'newres'){
        $modal.modal('show');
    }
 });
</script>
    <?php
if (isset($_POST['saveup'])) {
	include('controls/updaterep.php');
}
    ?>
											<?php }?>
										</div>
									</div>
													</div>
												</div>




<?php }?>