<div class="kt-portlet">
										
<style type="text/css">
	#show-me {
  display:none;
}
#show-me-ms {
  display:none;
}
#show-me-msk {
  display:none;
}
#show-me-rw {
  display:none;
}
</style>
										<!--begin::Form-->
										<form class="kt-form" enctype="multipart/form-data" method="post">
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<h3 class="kt-section__title">1. Agent Info:</h3>
													<div class="kt-section__body">
														<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Picture</label>
																			<div class="col-lg-9 col-xl-6">
																				<div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_profile_avatar">
																					<div class="kt-avatar__holder" style="background-image: url(img/agents/agent1.png)"></div>
																					<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
																						<i class="fa fa-pen"></i>
																						<input type='file' name="agpic" />
																					</label>
																					<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel Picture">
																						<i class="fa fa-times"></i>
																					</span>
																				</div>
																			</div>
																		</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Full Name:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentname" placeholder="Enter full name">
																<span class="form-text text-muted">Please enter your full name</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Birth Date:</label>
															<div class="col-lg-6">
																
																<div class="input-group date">
													<input type="text" class="form-control " name="agentage" readonly value="05/20/2017" id="kt_datepicker_3" />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar"></i>
														</span>
													</div>
												</div>
																<span class="form-text text-muted">Please enter your full name</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">CIN:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentcin" placeholder="KB10000">
																<span class="form-text text-muted">Enter Agent CIN</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">CNSS:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentcnss" placeholder="AE9230">
																<span class="form-text text-muted">Enter Agent CNSS</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Salary:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentsalary" placeholder="3000">
																<span class="form-text text-muted">Enter Agent Salary</span>
															</div>
														</div>
														
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Phone Number:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentphone" placeholder="00212 60 000 0000">
																<span class="form-text text-muted">Enter Agent Phone Number</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Driving Licence:</label>
															<div class="col-lg-6">
																<div class="kt-radio-list">
														
														<label class="kt-radio kt-radio--solid kt-radio--success">
															<input type="radio" value="Yes" id="watch-me" name="agentdl"> Yes
															<span></span>
														</label>
														<label class="kt-radio kt-radio--solid kt-radio--brand">
															<input type="radio" value="no"  name="agentdl"> No
															<span></span>
														</label>
													</div>
																<span class="form-text text-muted">Check if Agent has Driving Licence</span>
															</div>
														</div>
														<div id="show-me">
														<div class="form-group row" >
															<label class="col-lg-3 col-form-label">Driving Licence:</label>
															<div class="col-lg-6">
																<div class="kt-radio-list">
														
														<label class="kt-radio kt-radio--solid kt-radio--success">
															<input type="radio" value="A" name="agentdlcat"> A
															<span></span>
														</label>
														<label class="kt-radio kt-radio--solid kt-radio--success">
															<input type="radio" value="B" name="agentdlcat"> B
															<span></span>
														</label>
														<label class="kt-radio kt-radio--solid kt-radio--success">
															<input type="radio" value="C" name="agentdlcat"> C
															<span></span>
														</label>
														<label class="kt-radio kt-radio--solid kt-radio--success">
															<input type="radio" value="F" name="agentdlcat"> F
															<span></span>
														</label>
													</div>
																<span class="form-text text-muted">Check if Agent has Driving Licence</span>
															</div>
														</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Weight:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentweight" placeholder="72KG">
																<span class="form-text text-muted">Agent Weight</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Size:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentsize" placeholder="172cm">
																<span class="form-text text-muted">Agent Size</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Shoe Size:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentshoesize" placeholder="42">
																<span class="form-text text-muted">Agent Shoe Size</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Marital Status:</label>
															<div class="col-lg-6">
																<div class="kt-radio-list">
														
														<label class="kt-radio kt-radio--solid kt-radio--success">
															<input type="radio" value="Yes" id="watch-me-ms" name="agentms"> Yes
															<span></span>
														</label>
														<label class="kt-radio kt-radio--solid kt-radio--brand">
															<input type="radio" value="no"  name="agentms"> No
															<span></span>
														</label>
													</div>
																<span class="form-text text-muted">Check if Agent Married</span>
															</div>
														</div>
														<div id="show-me-ms">
														<div class="form-group row" >
															<label class="col-lg-3 col-form-label">Kids:</label>
															<div class="col-lg-6">
																<div class="kt-radio-list">
														
														<label class="kt-radio kt-radio--solid kt-radio--success">
															<input type="radio" value="yes" id="watch-me-msk" name="agentmsk"> Yes
															<span></span>
														</label>
														<label class="kt-radio kt-radio--solid kt-radio--success">
															<input type="radio" value="yes" name="agentmsk"> No
															<span></span>
														</label>
													
													</div>
																<span class="form-text text-muted">Check if Agent has Driving Licence</span>
															</div>
														</div>
														</div>
														<div id="show-me-msk">
														<div class="form-group row" >
															<label class="col-lg-3 col-form-label">Kids:</label>
															<div class="col-lg-6">
																<select name="agentmskn" class="form-control kt_selectpicker">
																	
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																</select>
																<span class="form-text text-muted">Check how Many Kids Agent has</span>
															</div>
														</div>
														</div>

														<!--<div class="form-group row">
															<label class="col-form-label col-lg-3 col-sm-12">Basic Setup</label>
															<div class="col-lg-6 col-md-12 col-sm-12">
																<div class="row align-items-center">
																	<div class="col-2">
																		<input type="text" class="form-control" id="kt_nouislider_1_input" placeholder="Quantity">
																	</div>
																	<div class="col-4">
																		<div id="kt_nouislider_1" class="nouislider-drag-danger"></div>
																	</div>
																</div>
																<span class="form-text text-muted">Input control is attached to slider</span>
															</div>
														</div>-->
														
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Adress Line-1:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentadress1" placeholder="Ex: residence bla, St, City">
																<span class="form-text text-muted">Adress Location Where The agent Live</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Adress Line-1:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentadress2" placeholder="Ex: residence blabla, St, City">
																<span class="form-text text-muted">Second Adress Location Where The agent Live</span>
															</div>
														</div>
													</div>
													<h3 class="kt-section__title">2. Position & Level:</h3>
													<div class="kt-section__body">
														<!-- <div class="form-group row">
															<label class="col-form-label col-lg-3 col-sm-12">Site:</label>
															<div class="col-lg-4 col-md-9 col-sm-12">
																<select class="form-control kt_selectpicker" data-live-search="true">
																	<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
																	<option data-tokens="mustard">Burger, Shake and a Smile</option>
																	<option data-tokens="frosting">Sugar, Spice and all things nice</option>
																</select>
																<i class='la la-star'></i><i class='la la-star'></i><i class='la la-star'></i>
															</div>
														</div> -->

														<div class="form-group row">
															<label class="col-form-label col-lg-3 col-sm-12">Job Title:</label>
															<div class="col-lg-4 col-md-9 col-sm-12">
																<select name="agenttitle" class="form-control kt_selectpicker"  id="mySelect" onchange="()">
																	
																		<option value="Operator">Operator</option>
																		<option value="Supervisor">Supervisor</option>
																		<option value="Section Manager">Section Manager</option>
																</select>

																<span class="form-text text-muted">Please Choose Witch Site <span id="agentname"></span> Will Work In</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Skills:</label>
															<div class="col-lg-6">
																<div class="kt-radio-list">
														
														<label class="kt-radio kt-radio--solid kt-radio--danger">
															<input type="radio" value="Ropeworker" id="watch-me-rw" name="agenttype"> Ropeworker
															<span></span>
														</label>
														<label class="kt-radio kt-radio--solid kt-radio--warning">
															<input type="radio" value="Cleanworker"  name="agenttype"> Cleanworker
															<span></span>
														</label>
													</div>
																<span class="form-text text-muted">Check Wich Skills the Agent Has </span>
															</div>
														</div>
														<div id="show-me-rw">
														<div class="form-group row" >
															<label class="col-lg-3 col-form-label">RopeWorker:</label>
															<div class="col-lg-6">
																<div class="kt-radio-list">
														
														<label class="kt-radio kt-radio--solid kt-radio--danger">
															<input type="radio" value="1" name="agentrwl"> Level 1
															<span></span>
														</label>
														<label class="kt-radio kt-radio--solid kt-radio--danger">
															<input type="radio" value="2" name="agentrwl"> Level 2
															<span></span>
														</label>
														<label class="kt-radio kt-radio--solid kt-radio--danger">
															<input type="radio" value="3" name="agentrwl"> Level 3
															<span></span>
														</label>
													</div>
																<span class="form-text text-muted">Check Agent Ropeworks certification Level</span>
															</div>
														</div>
														</div>
														

														<div class="form-group row">
															<label class="col-form-label col-lg-3 col-sm-12">Site:</label>
															<div class="col-lg-4 col-md-9 col-sm-12">
																<select name="agentsite" class="form-control kt_selectpicker"  id="mySelect" onchange="()">
																	<optgroup label="APM TERMINALS" data-max-options="2">
																		<option value="11">APM-1</option>
																		<option value="12">APM-2</option>
																	</optgroup>
																	<optgroup label="EUROGATE" data-max-options="2">
																		<option value="21">EUROGATE</option>$
																	</optgroup>
																	<optgroup label="MARSA MAROC" data-max-options="2">
																		<option value="31">MM-DE</option>
																		<option value="32">MM-TC3</option>
																	</optgroup>
																	<optgroup label="HTTSA" data-max-options="2">
																		<option value="31">HTTSA</option>
																	</optgroup>
																	<option value="31">Brave Boys</option>
																</select>
																<span class="form-text text-muted">Please Choose Witch Site <span id="agentname"></span> Will Work In</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-form-label col-lg-3 col-sm-12">Level:</label>
															<div class="col-lg-4 col-md-9 col-sm-12">
												<select name="agentlevel" class="form-control kt_selectpicker">
													<option value="0" data-content="<span class='kt-badge kt-badge--default kt-badge--inline kt-badge--rounded'>Level 0</span>">Level 0</option>
													<option value="1" data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Level 1</span>">Level 1</option>
													<option value="2" data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Level 2</span>">Level 2</option>
													<option value="3" data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>Level 3</span>">Level 3</option>
													<option value="4" data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Level 4</span>">Level 4</option>
												</select>
											</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Hiring Date:</label>
															<div class="col-lg-6">
																
																<div class="input-group date">
																	<input type="text" class="form-control " name="agenthiringd" readonly value="05/20/2018" id="kt_datepicker_3" />
																	<div class="input-group-append">
																		<span class="input-group-text">
																			<i class="la la-calendar"></i>
																		</span>
																	</div>
																</div>
																<span class="form-text text-muted">Agent Hiring Date</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Name Of Person (Emergency Case):</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentemergncyn" placeholder="Ex: Mohammed">
																<span class="form-text text-muted">Person name In case Of Emergency</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Emergency Phone Number:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentemergncyp" placeholder="Ex: 06-0000000">
																<span class="form-text text-muted">Phone Number In case Of Emergency</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-3"></div>
														<div class="col-lg-6">
															<button type="submit" name="addag" class="btn btn-brand">Submit</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
													</div>
												</div>
											</div>
										</form>

										<!--end::Form-->
									</div>
	<?php
if (isset($_POST['addag'])) {
	include('controls/showsite.php');
}


?>
<script>
	$(document).ready(function() {
   $('input[name="agentdl"]').click(function() {
       if($(this).attr('id') == 'watch-me') {
            $('#show-me').show();           
       }
       else {
            $('#show-me').hide();   
       }
   });

   $('input[name="agentms"]').click(function() {
       if($(this).attr('id') == 'watch-me-ms') {
            $('#show-me-ms').show();           
       }
       else {
            $('#show-me-ms').hide(); 
            $('#show-me-msk').hide();  
       }
   });
   $('input[name="agentmsk"]').click(function() {
       if($(this).attr('id') == 'watch-me-msk') {
            $('#show-me-msk').show();           
       }
       else {
            $('#show-me-msk').hide();   
       }
   });


   $('input[name="agenttype"]').click(function() {
       if($(this).attr('id') == 'watch-me-rw') {
            $('#show-me-rw').show();           
       }
       else {
            $('#show-me-rw').hide();   
       }
   });
});
</script>

