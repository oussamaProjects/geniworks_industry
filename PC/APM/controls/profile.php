	<div class="kt-profile__content">
									<div class="row">
						<div class="kt-portlet kt-profile">
							
							<div class="kt-portlet kt-profile">
								<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="img/APM-Terminals.jpg" alt="">
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name">APM-1</div>
													<div class="kt-profile__main-info-position">ID</div>
													<div class="kt-profile__main-info-position">Contact</div>
													<div class="kt-profile__main-info-position">Tangier</div>
												</div>
											</div>

										</div>
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__contact">
												<div class="kt-profile__main-info-position"><h5>Resources Review</h5></div><br>
<?php
require("controls/zdze8efzedzdeezd/de5.php");
$sqlch="SELECT count(ag_id) FROM agents WHERE ag_site = '11'";
$resultch = mysqli_query($cdb,$sqlch);
mysqli_select_db($cdb,"ajax_demo");
$sqlct="SELECT count(wtl_name) FROM work_tools_apm1 WHERE wtl_owner = '11'";
$resultct = mysqli_query($cdb,$sqlct);

mysqli_select_db($cdb,"ajax_demo");
$sqlcm="SELECT count(wmt_name) FROM work_materials_apm1 WHERE wmt_owner = '11'";
$resultcm = mysqli_query($cdb,$sqlcm);

mysqli_select_db($cdb,"ajax_demo");
$sqlcc="SELECT count(wch_name) FROM work_chemicals_apm1 WHERE wch_owner = '11'";
$resultcc = mysqli_query($cdb,$sqlcc);

mysqli_select_db($cdb,"ajax_demo");
$sqlca="SELECT count(wape_name) FROM work_ape_apm1 WHERE wape_owner = '11'";
$resultca = mysqli_query($cdb,$sqlca);

mysqli_select_db($cdb,"ajax_demo");
$sqlcp="SELECT count(wppe_name) FROM work_ppe_apm1 WHERE wppe_owner = '11'";
$resultcp = mysqli_query($cdb,$sqlcp);?>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text"><?php while($rowch=mysqli_fetch_array($resultch)) {echo $rowch[0];}?>  Humans</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
												
													<span class="kt-profile__contact-item-text"><?php while($rowct=mysqli_fetch_array($resultct)) {echo $rowct[0];}?> tools</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text"><?php while($rowcm=mysqli_fetch_array($resultcm)) {echo $rowcm[0];}?> materials</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text"><?php while($rowcc=mysqli_fetch_array($resultcc)) {echo $rowcc[0];}?> Chemicals</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text"><?php while($rowcp=mysqli_fetch_array($resultcp)) {echo $rowcp[0];}?> PPE</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text"><?php while($rowca=mysqli_fetch_array($resultca)) {echo $rowca[0];}?> APE</span>
												</a>
											</div>
										</div>
										
										
												
									</div>
								</div>
							</div>	



							</div>
						</div>
					</div>