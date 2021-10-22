
										
<?php
require('controls/zdfzfzef/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' AND acij_asset='QC' LIMIT 3");
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

									
<div class="card" >

	<div class="kt-portlet">
											<div class="kt-blog-grid__head">
												<a href="" class="kt-blog-grid__thumb-link">
													<center>
													<div class="ctn" style="
    overflow: hidden;
    width: 230px;
    height: 200px;
    text-align: center;">
													<span style="display: block;width: 1000px;margin-left: -450px;">
													<img src="controls/img/assets/<?php echo $showasset[5];?>" style="display: inline-block;" class="kt-blog-grid__image" />
    												</span>
												</div>
												</center>
											</a>
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
											
										
							
								
								<?php }?>
								             
															
																
								 
                                            <?php }?>

														
