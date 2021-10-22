<?php
require('zdze8efzedzdeezd/de5.php');
$idag=$_POST['idag'];

$showpsrf=$cdb->prepare("SELECT * FROM agents WHERE ag_id='$idag'");
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


	<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-4 col-lg-5 col-xl-4">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="img/agents/<?php echo $showasset[7];?>" alt="" />
													<label class="kt-profile__main-pic-upload">
														<i class="flaticon-photo-camera"></i>
													</label>
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name"><?php echo $showasset[1];?></div>
													<div class="kt-profile__main-info-position"><?php echo $showasset[6];?> | <?php echo $showasset[11];?></div>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-lg-3 col-xl-3">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"><i class="flaticon-whatsapp"></i></span>
													<span class="kt-profile__contact-item-text"><?php echo $showasset[2];?></span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"><i class="flaticon-email-black-circular-button kt-font-brand"></i></span>
													<span class="kt-profile__contact-item-text">agent1@geniworks.com</span>
												</a>
												
											</div>
										</div>
										<div class="col-md-2 col-lg-2 col-xl-2">
											<div class="kt-profile__stats">
												<div class="kt-profile__stats-item">
													<div class="kt-profile__stats-item-label">Score</div>
													<div class="kt-profile__stats-item-chart">
														<span><img src="img/score4.png" width="50"></span>
														
													</div>
												
													<div class="kt-profile__stats-item-label">Level 	<strong><h5> <?php echo $showasset[12];?></h5></strong></div>
													
												</div>
											</div>
										</div>
											<div class="col-md-3 col-lg-3 col-xl-3">
											<div class="kt-profile__stats">
												<div class="kt-profile__stats-item">
													<div class="kt-profile__stats-item-chart">
														<button class="btn btn-brand"  data-toggle="modal" data-target=".dfgdf">Add New</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

<?php 
}}
?>

<div class="modal fade dfgdf" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">New Agent</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<?php include('controls/new-agent.php');?>
																</div>
																<div class="modal-footer">
																	
																</div>
															</div>
														</div>
													</div>