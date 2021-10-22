

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Recent Works</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">Export Tools</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-print"></i>
																		<span class="kt-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-copy"></i>
																		<span class="kt-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-excel-o"></i>
																		<span class="kt-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-text-o"></i>
																		<span class="kt-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																		<span class="kt-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget-6">

												<!-- begin::Tab Content -->
												<div class="kt-widget6__tab tab-content">
													<div id="ygp1" class="tab-pane fade active show">
														<div class="kt-widget-6__items">
														
			
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' AND acij_asset='YARDGROUND' LIMIT 3 OFFSET 0");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();

								?>
															<?php
while ($showasset=$respsrf->fetch_row()) {
								?>
															
															<div class="kt-widget-6__item">
																<div class="kt-widget-6__item-pic">
																	<img src="controls/img/assets/<?php echo $showasset[5];?>"  class="" />
																</div>
																<div class="kt-widget-6__item-info">
																	<div class="kt-widget-6__item-title">
																		<?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
																	</div>
																	<div class="kt-widget-6__item-desc">
																		<?php
														if ($showasset[6]=='1') {
															?>
																<span style="color: #00A1db;">Status :</span> <span style="color: #1dc9b7;">Clean</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Nothing To Report

                                                            <?php
                                                        }

                                                        if ($showasset[6]=='') {
                                                            ?>
                                                                <span style="color: #00A1db;">Status :</span> <span style="color: #ef1f41;">Requires Cleaning</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Call GENIWORKS

															<?php
														}

														?>
																	</div>
																</div>
																<div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
																	<div class="dropdown dropdown-inline">
																		<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<i class="flaticon-more-1"></i>
																		</button>
																		<div class="dropdown-menu dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__section kt-nav__section--first">
																					<span class="kt-nav__section-text">EXPORT TOOLS</span>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-eye"></i>
																						<span class="kt-nav__link-text">View</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-comment-o"></i>
																						<span class="kt-nav__link-text">Coments</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-copy"></i>
																						<span class="kt-nav__link-text">Copy</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-file-excel-o"></i>
																						<span class="kt-nav__link-text">Excel</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														<?php }?>

																
								 
                                            <?php }?>
														</div>
													</div>
													<div id="ygp2" class="tab-pane fade">
														<div class="kt-widget-6__items">
															

<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' AND acij_asset='YARDGROUND' LIMIT 3 OFFSET 3");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();

								?>
															<?php
while ($showasset=$respsrf->fetch_row()) {
								?>
															
															<div class="kt-widget-6__item">
																<div class="kt-widget-6__item-pic">
																	<img src="controls/img/assets/<?php echo $showasset[5];?>"  class="" />
																</div>
																<div class="kt-widget-6__item-info">
																	<div class="kt-widget-6__item-title">
																		<?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
																	</div>
																	<div class="kt-widget-6__item-desc">
																		<?php
														if ($showasset[6]=='1') {
															?>
																<span style="color: #00A1db;">Status :</span> <span style="color: #1dc9b7;">Clean</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Nothing To Report

                                                            <?php
                                                        }

                                                        if ($showasset[6]=='') {
                                                            ?>
                                                                <span style="color: #00A1db;">Status :</span> <span style="color: #ef1f41;">Requires Cleaning</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Call GENIWORKS

															<?php
														}

														?>
																	</div>
																</div>
																<div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
																	<div class="dropdown dropdown-inline">
																		<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<i class="flaticon-more-1"></i>
																		</button>
																		<div class="dropdown-menu dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__section kt-nav__section--first">
																					<span class="kt-nav__section-text">EXPORT TOOLS</span>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-eye"></i>
																						<span class="kt-nav__link-text">View</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-comment-o"></i>
																						<span class="kt-nav__link-text">Coments</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-copy"></i>
																						<span class="kt-nav__link-text">Copy</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-file-excel-o"></i>
																						<span class="kt-nav__link-text">Excel</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														<?php }?>
														
																
								 
                                            <?php }?>
															
															
															
														</div>
													</div>
													<div id="ygp3" class="tab-pane fade">
														<div class="kt-widget-6__items">
															
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' AND acij_asset='YARDGROUND' LIMIT 3 OFFSET 6");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();

								?>
															<?php
while ($showasset=$respsrf->fetch_row()) {
								?>
															
															<div class="kt-widget-6__item">
																<div class="kt-widget-6__item-pic">
																	<img src="controls/img/assets/<?php echo $showasset[5];?>"  class="" />
																</div>
																<div class="kt-widget-6__item-info">
																	<div class="kt-widget-6__item-title">
																		<?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
																	</div>
																	<div class="kt-widget-6__item-desc">
																		<?php
														if ($showasset[6]=='1') {
															?>
																<span style="color: #00A1db;">Status :</span> <span style="color: #1dc9b7;">Clean</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Nothing To Report

                                                            <?php
                                                        }

                                                        if ($showasset[6]=='') {
                                                            ?>
                                                                <span style="color: #00A1db;">Status :</span> <span style="color: #ef1f41;">Requires Cleaning</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Call GENIWORKS

															<?php
														}

														?>
																	</div>
																</div>
																<div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
																	<div class="dropdown dropdown-inline">
																		<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<i class="flaticon-more-1"></i>
																		</button>
																		<div class="dropdown-menu dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__section kt-nav__section--first">
																					<span class="kt-nav__section-text">EXPORT TOOLS</span>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-eye"></i>
																						<span class="kt-nav__link-text">View</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-comment-o"></i>
																						<span class="kt-nav__link-text">Coments</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-copy"></i>
																						<span class="kt-nav__link-text">Copy</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-file-excel-o"></i>
																						<span class="kt-nav__link-text">Excel</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														<?php }?>
														
																
								 
                                            <?php }?>
															
															
														</div>
													</div>
													<div id="ygp4" class="tab-pane fade">
														<div class="kt-widget-6__items">
															
															<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' AND acij_asset='YARDGROUND' LIMIT 3 OFFSET 9");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();

								?>
															<?php
while ($showasset=$respsrf->fetch_row()) {
								?>
															
															<div class="kt-widget-6__item">
																<div class="kt-widget-6__item-pic">
																	<img src="controls/img/assets/<?php echo $showasset[5];?>"  class="" />
																</div>
																<div class="kt-widget-6__item-info">
																	<div class="kt-widget-6__item-title">
																		<?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
																	</div>
																	<div class="kt-widget-6__item-desc">
																		<?php
														if ($showasset[6]=='1') {
															?>
																<span style="color: #00A1db;">Status :</span> <span style="color: #1dc9b7;">Clean</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Nothing To Report

                                                            <?php
                                                        }

                                                        if ($showasset[6]=='') {
                                                            ?>
                                                                <span style="color: #00A1db;">Status :</span> <span style="color: #ef1f41;">Requires Cleaning</span><br>
                                                                <span style="color: #00A1db;">Action :</span> Call GENIWORKS

															<?php
														}

														?>
																	</div>
																</div>
																<div class="kt-widget-6__item-icon kt-widget-6__item-icon--brand">
																	<div class="dropdown dropdown-inline">
																		<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<i class="flaticon-more-1"></i>
																		</button>
																		<div class="dropdown-menu dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__section kt-nav__section--first">
																					<span class="kt-nav__section-text">EXPORT TOOLS</span>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-eye"></i>
																						<span class="kt-nav__link-text">View</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-comment-o"></i>
																						<span class="kt-nav__link-text">Coments</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-copy"></i>
																						<span class="kt-nav__link-text">Copy</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon la la-file-excel-o"></i>
																						<span class="kt-nav__link-text">Excel</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														<?php }?>
														
																
								 
                                            <?php }?>
															
														
														</div>
													</div>
												</div>

												<!-- end::Tab Content -->

												<!-- begin::Nav pills -->
												<ul class="kt-widget-6__nav-items nav nav-pills nav-fill" role="tablist">
													<li class="kt-widget-6__nav-item nav-item">
														<a class="nav-link active show" data-toggle="pill" href="#ygp1">1</a>
													</li>
													<li class="kt-widget-6__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#ygp2">2</a>
													</li>
													<li class="kt-widget-6__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#ygp3">3</a>
													</li>
													<li class="kt-widget-6__nav-item nav-item">
														<a class="nav-link" data-toggle="pill" href="#ygp4">4</a>
													</li>
												</ul>

												<!-- end::Nav pills -->
											</div>
										</div>
									</div>

									<!--end::Portlet-->
							