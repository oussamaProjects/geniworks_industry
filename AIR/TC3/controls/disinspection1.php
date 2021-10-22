<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
										
<?php
require('zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='32' AND acij_asset='RTG' LIMIT 1");
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
<div class="gallery">
									
<div class="card" >

	<div class="kt-portlet">
											<div class="kt-blog-grid__head">
												<div class="ctn" style="">
													<span style="">
														<div class="img-w">
															<center>
																<img src="controls/img/assets/<?php echo $showasset[5];?>" style="width: 230px;" class="" />
															</center>
														</div>
												
    												</span>
												</div>
												
											
											</div>
											<div class="kt-portlet__body">
												<div class="kt-blog-grid__body">
													
													<h5 class="kt-blog-grid__title">
														<?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
													</h5>
													<div class="kt-blog-grid__content">
														<?php
														if ($showasset[6]=='on') {
															?>
																<span style="color: #00A1db;">Status :</span> Clean<br>
															    <span style="color: #00A1db;">Action :</span> No Action Required

															<?php
														}

														?>
														<?php
														if ($showasset[6]=='') {
															?>
																<span style="color: #00A1db;">Status :</span> Not Cleaned<br>
															    <span style="color: #00A1db;">Action :</span> Call GENIWORKS

															<?php
														}

														?>

													
													</div>
													<hr>
													<div style="text-align: right;" class="kt-blog-grid__date">
														Inspected On <?php echo $showasset[8];?><br>
														By Othmane
													</div>
												</div>
											</div>
											</div>
												</div>
											
										
							</div>
								
								<?php }?>
								             
															
																
								 
                                            <?php }?>

														





