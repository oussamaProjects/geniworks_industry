<div class="kt-portlet">
										

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
																					<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Change avatar">
																						<i class="fa fa-pen"></i>
																						<input type='file' name="agpic" />
																					</label>
																					<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel avatar">
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
															<label class="col-lg-3 col-form-label">Age:</label>
															<div class="col-lg-6">
																<select name="agentage" class="form-control kt_selectpicker"  id="" onchange="()">
																	
																		<option value="20">20</option>
																		<option value="21">21</option>
																		<option value="22">22</option>
																		<option value="23">23</option>
																		<option value="24">24</option>
																		<option value="25">25</option>
																		<option value="26">26</option>
																		<option value="27">27</option>
																		<option value="28">28</option>
																		<option value="29">29</option>
																</select>
																<span class="form-text text-muted">Please enter your full name</span>
															</div>
														</div>
														
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Phone Number:</label>
															<div class="col-lg-6">
																<input type="text" class="form-control" name="agentphone" placeholder="Enter Phone Number">
																<span class="form-text text-muted">00212 60 000 0000</span>
															</div>
														</div>

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
															<label class="col-form-label col-lg-3 col-sm-12">Type:</label>
															<div class="col-lg-4 col-md-9 col-sm-12">
																<select name="agenttype" class="form-control kt_selectpicker"  id="mySelect" onchange="()">
																	
																		<option value="RopeWorks">RopeWorks</option>
																		<option value="CleanWorks" selected="selected">CleanWorks</option>
																		<option value="Both">Both</option>
																</select>

																<span class="form-text text-muted">Please Choose Witch Site <span id="agentname"></span> Will Work In</span>
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
																</select>
																<span class="form-text text-muted">Please Choose Witch Site <span id="agentname"></span> Will Work In</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-form-label col-lg-3 col-sm-12">Level:</label>
															<div class="col-lg-4 col-md-9 col-sm-12">
												<select name="agentlevel" class="form-control kt_selectpicker">
													<option data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>Level 1</span>">Level 1</option>
													<option data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>Level 2</span>">Level 2</option>
													<option data-content="<span class='kt-badge kt-badge--brand kt-badge--inline kt-badge--rounded'>Level 3</span>">Level 3</option>
													<option data-content="<span class='kt-badge kt-badge--danger kt-badge--inline kt-badge--rounded'>Level 4</span>">Level 4</option>
												</select>
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
															<button type="submit" name="addag" onClick="" class="btn btn-brand">Submit</button>
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
	include('showsite.php');
}