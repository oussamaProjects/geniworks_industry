<style type="text/css">
	.selectcust:hover{
background-color: white;
color: #3d4465;
	}
</style>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpers=$cdb->prepare("SELECT * FROM report WHERE rprt_test_type='UT' ORDER BY rprt_asset_id ASC");
$showpers->execute();
if ($showpers===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resreput=$showpers->get_result();
  	?>
		<div class="tab-pane fade show active" id="report_type1" role="tabpanel">
													<div class="kt-portlet">
														<div class="kt-portlet__head">
															<div class="kt-portlet__head-label">
																<h3 class="kt-portlet__head-title">Ultrasonic Testing 
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpers1=$cdb->prepare("SELECT count(rprt_id) FROM report WHERE rprt_test_type='UT'");
$showpers1->execute();
if ($showpers1===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resrep1ut=$showpers1->get_result();
?>
																	<small><?php while ($showrep1ut=$resrep1ut->fetch_row()) { ?><?php echo $showrep1ut[0];}?> Reports</small>
<?php
}
?>
																</h3>
															</div>
														</div>
														<div class="kt-portlet">
										<div class="kt-portlet__body">

											<?php while ($showreput=$resreput->fetch_row()) { ?>
											<div class="accordion accordion-light" id="accordionExample2">
												<div class="card">
													<div class="card-header" id="headingOne2"><footer class="blockquote-footer" style="float: right; padding-right: 3px;">On <cite title="Source Title"><?php echo $showreput[43];?></cite></footer>
														<div class="card-title" data-toggle="collapse" style="padding: 0px;" data-target="#collapseOne<?php echo $showreput[0];?>" aria-expanded="true" aria-controls="collapseOne<?php echo $showreput[0];?>">
															<?php echo $showreput[2].$showreput[3];?> | <?php echo 'R' .$showreput[1].'-EGT-'.$showreput[3].'-00'.$showreput[0].'';?>
														</div>
													</div>
													<div id="collapseOne<?php echo $showreput[0];?>" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample2">
														<div class="card-body">
															<form method="post" class="updrep" enctype="multipart/form-data">

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
																			
																				<input class="form-control" name="assetchos" type="text" value="<?php echo $showreput[2];?>">
																			</div>
																			<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label">AssetID</label>
																			
																			<input class="form-control" name="idassetchos" type="text" value="<?php echo $showreput[3];?>">
																			</div>
																			<div class="col-lg-4 col-xl-4">
																				<label class="form-control-label" >Sub-Asset</label>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selectsubqc=$cdb->prepare("SELECT * FROM sub_asset_eg WHERE saeg_asset LIKE 'QC%' ORDER BY saeg_id");
$selectsubqc->execute();
if ($selectsubqc===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $ressubqc=$selectsubqc->get_result();
?>
                                                                <select name="subassetchos" class="form-control kt_selectpicker">
                                                                    <option value="<?php echo $showreput[4];?>" selected="selected"><?php echo $showreput[4];?></option>
                                                                    <?php
                                                                     while ($showsubqc=$ressubqc->fetch_row()) {
                                                                    ?>
                                                                    <option data-subtext="<?php echo $showsubqc[3]?>" value="<?php echo $showsubqc[2]?>"><?php echo $showsubqc[2]?></option>
                                                                    <?php }?>
                                                                </select>
<?php
}
?>

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
																			
																				<input class="form-control" type="text" value="<?php echo $showreput[27];?>">
																				<span class="form-text text-muted"></span>
																			</div>
																			
																			<div class="col-lg-4 col-xl-4">
																				<label class="form-control-label">Material</label>
																				<div class="input-group">
																					<input type="text" class="form-control"  name="matup" value="<?php echo $showreput[28];?>" placeholder="Phone" aria-describedby="basic-addon1">
																				</div>
																				<span class="form-text text-muted"></span>
																			</div>
																			
																		</div>





																		<div class="row">
																			<div class="col-lg-9 col-xl-6">
																			<label class="col-xl-3"></label>
																			
																				<h3 class="kt-section__title kt-section__title-sm">Handmarks:</h3>

																			</div>
																		</div>
																		<div class="row">
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhma=$cdb->prepare("SELECT rprt_marka,rprt_verdicta FROM report WHERE rprt_id='$showreput[0]'");
$selhma->execute();
if ($selhma===false) {
  echo "";
}
else{
  $reshma=$selhma->get_result();
?>

											<?php while ($showhma=$reshma->fetch_row()) { 
												if ($showhma[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"></label>
																			<div class="input-group">
																			<input class="form-control" name="markaup" type="text" readonly="" value="<?php echo $showhma[0];?>">
																			<div class="input-group-append">
																				
																					<?php if ($showhma[1]!=''){
																						?>
																						<select name="verdictaup" class="btn btn-outline-success">
																						<option value="<?php echo $showhma[1]; ?>">
																						<?php
																					 echo $showhma[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdictaup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>

																		</div>
<?php
}}}
?>


<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhmb=$cdb->prepare("SELECT rprt_markb,rprt_verdictb FROM report WHERE rprt_id='$showreput[0]'");
$selhmb->execute();
if ($selhmb===false) {
  echo "";
}
else{
	  
  $reshmb=$selhmb->get_result();
 
?>

											<?php while ($showhmb=$reshmb->fetch_row()) {
												if ($showhmb[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"></label>
																			<div class="input-group">
																			<input class="form-control" name="markbup" type="text" readonly="" value="<?php echo $showhmb[0];?>">

																			<div class="input-group-append">
																				
																					<?php if ($showhmb[1]!=''){
																						?>
																						<select name="verdictbup" class="btn btn-outline-success">
																						<option value="<?php echo $showhmb[1]; ?>">
																						<?php
																					 echo $showhmb[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdictbup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>
																		</div>
<?php
}}}
?>

<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhmc=$cdb->prepare("SELECT rprt_markc,rprt_verdictc FROM report WHERE rprt_id='$showreput[0]'");
$selhmc->execute();
if ($selhmc===false) {
  echo "";
}
else{
	  
  $reshmc=$selhmc->get_result();
 
?>

											<?php while ($showhmc=$reshmc->fetch_row()) { 
												if ($showhmc[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"></label>
																			<div class="input-group">
																			<input class="form-control" name="markcup" type="text" readonly="" value="<?php echo $showhmc[0];?>">

																			<div class="input-group-append">
																				
																					<?php if ($showhmc[1]!=''){
																						?>
																						<select name="verdictcup" class="btn btn-outline-success">
																						<option value="<?php echo $showhmc[1]; ?>">
																						<?php
																					 echo $showhmc[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdictcup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>
																		</div>
												
<?php
}}}
?>

<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhmd=$cdb->prepare("SELECT rprt_markd,rprt_verdictd FROM report WHERE rprt_id='$showreput[0]'");
$selhmd->execute();
if ($selhmd===false) {
  echo "";
}
else{
	  
  $reshmd=$selhmd->get_result();
 
?>

											<?php while ($showhmd=$reshmd->fetch_row()) { 
												if ($showhmd[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"></label>
																			<div class="input-group">
																			<input class="form-control" name="markdup" type="text" readonly="" value="<?php echo $showhmd[0];?>">

																			<div class="input-group-append">
																				
																					<?php if ($showhmd[1]!=''){
																						?>
																						<select name="verdictdup" class="btn btn-outline-success">
																						<option value="<?php echo $showhmd[1]; ?>">
																						<?php
																					 echo $showhmd[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdictdup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>
																		</div>
												
<?php
}}}
?>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhme=$cdb->prepare("SELECT rprt_marke,rprt_verdicte FROM report WHERE rprt_id='$showreput[0]'");
$selhme->execute();
if ($selhme===false) {
  echo "";
}
else{
	  
  $reshme=$selhme->get_result();
 
?>

											<?php while ($showhme=$reshme->fetch_row()) { 
												if ($showhme[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"></label>
																			<div class="input-group">
																			<input class="form-control" name="markeup" type="text" readonly="" value="<?php echo $showhme[0];?>">

																			<div class="input-group-append">
																				
																					<?php if ($showhme[1]!=''){
																						?>
																						<select name="verdicteup" class="btn btn-outline-success">
																						<option value="<?php echo $showhme[1]; ?>">
																						<?php
																					 echo $showhme[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdicteup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>
																		</div>
												
<?php
}}}
?>

<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhmf=$cdb->prepare("SELECT rprt_markf,rprt_verdictf FROM report WHERE rprt_id='$showreput[0]'");
$selhmf->execute();
if ($selhmf===false) {
  echo "";
}
else{
	  
  $reshmf=$selhmf->get_result();
 
?>

											<?php while ($showhmf=$reshmf->fetch_row()) { 
												if ($showhmf[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"></label>
																			<div class="input-group">
																			<input class="form-control" name="markfup" type="text" readonly="" value="<?php echo $showhmf[0];?>">

																			<div class="input-group-append">
																				
																					<?php if ($showhmf[1]!=''){
																						?>
																						<select name="verdictfup" class="btn btn-outline-success">
																						<option value="<?php echo $showhmf[1]; ?>">
																						<?php
																					 echo $showhmf[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdictfup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>
																		</div>
												
<?php
}}}
?>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhmg=$cdb->prepare("SELECT rprt_markg,rprt_verdictg FROM report WHERE rprt_id='$showreput[0]'");
$selhmg->execute();
if ($selhmg===false) {
  echo "";
}
else{
	  
  $reshmg=$selhmg->get_result();
 
?>

											<?php while ($showhmg=$reshmg->fetch_row()) { 
												if ($showhmg[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"></label>
																			<div class="input-group">
																			<input class="form-control" name="markgup" type="text" readonly="" value="<?php echo $showhmg[0];?>">

																			<div class="input-group-append">
																				
																					<?php if ($showhmg[1]!=''){
																						?>
																						<select name="verdictgup" class="btn btn-outline-success">
																						<option value="<?php echo $showhmg[1]; ?>">
																						<?php
																					 echo $showhmg[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdictgup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>
																		</div>
												
<?php
}}}
?>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhmh=$cdb->prepare("SELECT rprt_markh,rprt_verdicth FROM report WHERE rprt_id='$showreput[0]'");
$selhmh->execute();
if ($selhmh===false) {
  echo "";
}
else{
	  
  $reshmh=$selhmh->get_result();
 
?>

											<?php while ($showhmh=$reshmh->fetch_row()) { 
												if ($showhmh[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"></label>
																			<div class="input-group">
																			<input class="form-control" name="markhup" type="text" readonly="" value="<?php echo $showhmh[0];?>">

																			<div class="input-group-append">
																				
																					<?php if ($showhmh[1]!=''){
																						?>
																						<select name="verdicthup" class="btn btn-outline-success">
																						<option value="<?php echo $showhmh[1]; ?>">
																						<?php
																					 echo $showhmh[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdicthup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>
																		</div>
												
<?php
}}}
?>

<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhmi=$cdb->prepare("SELECT rprt_marki,rprt_verdicti FROM report WHERE rprt_id='$showreput[0]'");
$selhmi->execute();
if ($selhmi===false) {
  echo "";
}
else{
	  
  $reshmi=$selhmi->get_result();
 
?>

											<?php while ($showhmi=$reshmi->fetch_row()) { 
												if ($showhmi[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"></label>
																			<div class="input-group">
																			<input class="form-control" name="markiup" type="text" readonly="" value="<?php echo $showhmi[0];?>">

																			<div class="input-group-append">
																				
																					<?php if ($showhmi[1]!=''){
																						?>
																						<select name="verdictiup" class="btn btn-outline-success">
																						<option value="<?php echo $showhmi[1]; ?>">
																						<?php
																					 echo $showhmi[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdictiup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>
																		</div>
												
<?php
}}}
?>


<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhmj=$cdb->prepare("SELECT rprt_markj,rprt_verdictj FROM report WHERE rprt_id='$showreput[0]'");
$selhmj->execute();
if ($selhmj===false) {
  echo "";
}
else{
	  
  $reshmj=$selhmj->get_result();
 
?>

											<?php while ($showhmj=$reshmj->fetch_row()) { 
												if ($showhmj[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"> </label>
																			<div class="input-group">
																			<input class="form-control" name="markjup" type="text" readonly="" value="<?php echo $showhmj[0];?>">

																			<div class="input-group-append">
																				
																					<?php if ($showhmj[1]!=''){
																						?>
																						<select name="verdictjup" class="btn btn-outline-success">
																						<option value="<?php echo $showhmj[1]; ?>">
																						<?php
																					 echo $showhmj[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdictjup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>
																		</div>
												
<?php
}}}
?>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selhmk=$cdb->prepare("SELECT rprt_markk,rprt_verdictk FROM report WHERE rprt_id='$showreput[0]'");
$selhmk->execute();
if ($selhmk===false) {
  echo "";
}
else{
	  
  $reshmk=$selhmk->get_result();
 
?>

											<?php while ($showhmk=$reshmk->fetch_row()) { 
												if ($showhmk[0]!=''){
												 ?>
																		<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label"></label>
																			<div class="input-group">
																			<input class="form-control" name="markkup" type="text" readonly="" value="<?php echo $showhmk[0];?>">

																			<div class="input-group-append">
																				
																					<?php if ($showhmk[1]!=''){
																						?>
																						<select name="verdictkup" class="btn btn-outline-success">
																						<option value="<?php echo $showhmk[1]; ?>">
																						<?php
																					 echo $showhmk[1];
																					 ?>
																					</option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																					 <?php
																					}
																				else{
																					?>
																					<select name="verdictkup" class="selectcust btn btn-outline-danger" style="border-color: #fd397a; background-color: white;">
																					<option value=""> <span style="color:#fd397a;">...</span></option>
																					<option value="ACC">ACC</option>
																					<option value="NACC">NACC</option>
																					<option value="IP">IP</option>
																					<option value="CR">CR</option>
																				</select>
																				<?php } ?>
																				<span></span>
																				
																					
																			</div>
																		</div>
																		</div>
												
<?php
}}}
?>
																		<!--	<div class="col-lg-4 col-xl-4">
																			<label class="form-control-label">Handmark</label>
																			<input class="form-control" name="handmarkup" type="text" readonly="" value="">
																			</div>

																			 <div class="col-lg-5 col-xl-4">
																			<label class="form-control-label">Handmark</label>
																			<div class="input-group">
														<select name="addehandmark" class="form-control kt_selectpicker">
                                                              			          	<option data-subtext="QC" value="">Add Handmark</option>
                                                                    			    <option data-subtext="QC" value="A">A</option>
                                                                  			  	    <option data-subtext="QC" value="B">B</option>
                                                                   				    <option data-subtext="QC" value="C">C</option>
                                                                    			    <option data-subtext="QC" value="D">D</option>
                                                                    			    <option data-subtext="QC" value="E">E</option>
                                                                    			    <option data-subtext="QC" value="F">F</option>
                                                                     			    <option data-subtext="QC" value="G">G</option>
                                                                        			<option data-subtext="QC" value="H">H</option>
                                                                        			<option data-subtext="QC" value="I">I</option>
                                                                        			<option data-subtext="QC" value="J">J</option>
                                                                        			<option data-subtext="QC" value="K">K</option>
                                                                    			</select>
														<div class="input-group-append">
																	<button type="submit"  name="savemark" class="btn btn-brand">Save</button>
																	<span></span>
																
														
														</div>
													</div>
										
																			
																				
                                                                    		
                                                                    		
                                                                    
                                                                    	</div> -->
                                                  
                                                                    	</div>
																		
																		
																		<div class="row">
																			<div class="col-lg-9 col-xl-6">
																			<label class="col-xl-3"></label>
																			
																				<h3 class="kt-section__title kt-section__title-sm">Proof Pictures:</h3>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-lg-4 col-xl-4">
																				
																				<div class="input-group">
																					<a href="#" data-toggle="modal" data-target="#imgmodal<?php echo $showreput[0];?>"><img name="imgup" src="controls/<?php echo $showreput[48];?>" id="myImg<?php echo $showreput[0];?>" alt="<?php echo $showreput[3];?>" style="height:70px;"></a>
																				</div>
																				<span class="form-text text-muted"></span>
																			</div>
																			<div class="col-lg-4 col-xl-4">
																				
																				<div class="input-group">
																					<a href="#" data-toggle="modal" data-target="#imgmodal1<?php echo $showreput[0];?>"><img name="imgup" src="controls/<?php echo $showreput[52];?>" id="myImg<?php echo $showreput[0];?>" alt="<?php echo $showreput[3];?>" style="height:70px;"></a>
																				</div>
																				<span class="form-text text-muted"></span>
																			</div>
																			<div class="col-lg-4 col-xl-4">
																				
																				<div class="input-group">
																					<a href="#" data-toggle="modal" data-target="#imgmodal2<?php echo $showreput[0];?>"><img name="imgup" src="controls/<?php echo $showreput[53];?>" id="myImg<?php echo $showreput[0];?>" alt="<?php echo $showreput[3];?>" style="height:70px;"></a>
																				</div>
																				<span class="form-text text-muted"></span>
																			</div>
																			<div class="col-lg-4 col-xl-4">
																				
																				<div class="input-group">
																					<a href="#" data-toggle="modal" data-target="#imgmodal3<?php echo $showreput[0];?>"><img name="imgup" src="controls/<?php echo $showreput[54];?>" id="myImg<?php echo $showreput[0];?>" alt="<?php echo $showreput[3];?>" style="height:70px;"></a>
																				</div>
																				<span class="form-text text-muted"></span>
																			</div>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selectpic=$cdb->prepare("SELECT * FROM report_pic WHERE rertp_report_id='$showreput[0]'");
$selectpic->execute();
if ($selectpic===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $respic=$selectpic->get_result();
?>

											<?php while ($showpic=$respic->fetch_row()) { ?>
																			<div class="col-lg-4 col-xl-4">
																			
																			<div class="input-group">
																			<img  style="height:70px;" src="<?php echo $showpic[2];?>"/>
																		</div>
																			</div>
<?php 
}}
?>																		</div>
																		<div class="row">
																			<div class="col-xl-2">
																		<div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle" id="kt_profile_avatar_2">
																			<div class="kt-avatar__holder" style="width: 70px; height: 70px;float: left;position: relative;overflow: hidden;background-image: url(controls/img/apple-touch-icon.png);">
																				
																			</div>
																			<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
																				<i class="fa fa-plus"></i>
																				<input type='file'  accept=".png, .jpg, .jpeg" name="extraimg">
																			</label>
																			<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel Picture">
																				<i class="fa fa-times"></i>
																			</span>
																		</div>

																	</div>
																	<div class="col-xl-4">
																		<br>

																		<div class="input-group-append">
																			<input type="submit" name="saveeximg" class="btn btn-brand" value="Save">
																			<span></span>
																		</div></div>
																		</div>
																		<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
																		
												<div class="form-group row">
													<div class="col-lg-4 col-xl-4">
													<label class="form-control-label">Uv Light used</label>
													<input class="form-control" type="text" name="uvtypeup"  value="<?php echo $showreput[29];?>">
													</div>
												
													<div class="col-lg-4 col-xl-4">
													<label class="form-control-label">UV current Value</label>
												
													<input class="form-control" type="text" name="uvvalup"  value="<?php echo $showreput[31];?>">
												</div>
												<div class="col-lg-4 col-xl-4">
													<label class="form-control-label">Witness Type *</label>
												
													<input class="form-control" type="text"  name="witnsup"  value="<?php echo $showreput[32];?>">
												</div>
												<div class="col-lg-4 col-xl-4">
													<label class="form-control-label">MFV *</label>
												
													<input class="form-control" type="text"  name="mfvup" value="<?php echo $showreput[33];?>">
													</div>
													<div class="col-lg-4 col-xl-4">
													<label class="form-control-label">Prod Space *</label>
												
													<input class="form-control" type="text"  name="prspaceup" value="<?php echo $showreput[34];?>">
													</div>
													<div class="col-lg-4 col-xl-4">
													<label class="form-control-label">Demagneted *</label>
												
													<input class="form-control" type="text"  name="demagup" value="<?php echo $showreput[35];?>">
													</div>
													<div class="col-lg-4 col-xl-4">
													<label class="form-control-label">Demagnetising Delay *</label>
												
													<input class="form-control" type="text"  name="demagndeup"  value="<?php echo $showreput[36];?>">
													</div>
													<div class="col-lg-4 col-xl-4">
												    <label class="form-control-label">Revealer *</label>
												
													<input class="form-control" type="text"  name="revealerup" value="<?php echo $showreput[37];?>">
												</div>
												<div class="col-lg-4 col-xl-4">
													<label class="form-control-label">Light Used *</label>
												
													<input class="form-control" type="text"  name="lightp"  value="<?php echo $showreput[38];?>">
												</div>
												<div class="col-lg-4 col-xl-4">
													<label class="form-control-label">Artificial Light Value *</label>
												
													<input class="form-control" type="text"  name="artifiup"  value="<?php echo $showreput[39];?>">
												</div>
												<div class="col-lg-4 col-xl-4">
													<label class="form-control-label">Brightness Value *</label>
												
													<input class="form-control" type="text"  name="brightup" value="<?php echo $showreput[40];?>">
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
																			
																			<?php include('controls/proccesut.php');?>
																			<?php include('controls/specific.php');?>
																			<?php include('controls/acceptance.php');?>
																			<?php //include('controls/result.php');?>
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
																			
																			
																			<input type="hidden" name="idrep" value="<?php echo $showreput[0];?>">
																			<button type="submit" name="saveup" class="btn btn-success">Save</button>
																			<button type="reset" class="btn btn-default">Edit</button>
																			<a href="pdf/outputu.php?id_r=<?php echo $showreput[0];?>" target="_Blank" class="btn btn-brand">PDF</a>&nbsp;
																		</div>
																	</div>
																</div>
															</div>
														</form>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade" id="imgmodal<?php echo $showreput[0];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<button type="button" class="close" style="font-size:24px; color: white;" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
														<div class="modal-dialog" role="document">
															<div class="modal-content">

																
																<img name="imgup" src="controls/<?php echo $showreput[48];?>" id="myImg<?php echo $showreput[0];?>" alt="<?php echo $showreput[3];?>" style="width:100%;">
															</div>
														</div>
													</div>
<div class="modal fade" id="imgmodal1<?php echo $showreput[0];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<button type="button" class="close" style="font-size:24px; color: white;" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
														<div class="modal-dialog" role="document">
															<div class="modal-content">

																
																<img name="imgup" src="controls/<?php echo $showreput[52];?>" id="myImg<?php echo $showreput[0];?>" alt="<?php echo $showreput[3];?>" style="width:100%;">
															</div>
														</div>
													</div>
<div class="modal fade" id="imgmodal2<?php echo $showreput[0];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<button type="button" class="close" style="font-size:24px; color: white;" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
														<div class="modal-dialog" role="document">
															<div class="modal-content">

																
																<img name="imgup" src="controls/<?php echo $showreput[53];?>" id="myImg<?php echo $showreput[0];?>" alt="<?php echo $showreput[3];?>" style="width:100%;">
															</div>
														</div>
													</div>

<div class="modal fade" id="imgmodal3<?php echo $showreput[0];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<button type="button" class="close" style="font-size:24px; color: white;" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
														<div class="modal-dialog" role="document">
															<div class="modal-content">

																
																<img name="imgup" src="controls/<?php echo $showreput[54];?>" id="myImg<?php echo $showreput[0];?>" alt="<?php echo $showreput[3];?>" style="width:100%;">
															</div>
														</div>
													</div>

    <?php


    ?>

    <script type="text/javascript">
	$("#resn<?php echo $showreput[0];?>").on("change", function () {        
      $modal = $('#resultmodal');
      if($(this).val() === 'newres'){
        $modal.modal('show');
    }
 });
</script>
<script type="text/javascript">
	$("#accepn<?php echo $showreput[0];?>").on("change", function () {        
      $modal = $('#acceptancemodal');
      if($(this).val() === 'newaccep'){
        $modal.modal('show');
    }
 });
</script>
<script type="text/javascript">
	$("#specn<?php echo $showreput[0];?>").on("change", function () {        
      $modal = $('#specificmodal');
      if($(this).val() === 'newspec'){
        $modal.modal('show');
    }
 });
</script>
<script type="text/javascript">
	$("#prosn<?php echo $showreput[0];?>").on("change", function () {        
      $modal = $('#proccesmodal');
      if($(this).val() === 'newpros'){
        $modal.modal('show');
    }
 });
</script>

<?php }?>
											
										</div>
									</div>
								</div>
							</div>




<?php }?>

<?php include('controls/newresl.php');?>
<?php include('controls/newacc.php');?>
<?php include('controls/newspecific.php');?>
<?php include('controls/newproccesut.php');?>