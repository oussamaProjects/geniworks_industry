<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
										
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' AND acij_asset='QC' AND acij_sub_asset='Gantry Land Side'");
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

									
<div class="kt-widget-5__item kt-widget-5__item--info">
<div class="kt-widget-5__item-info">
																<a href="#" class="kt-widget-5__item-title">
																	<?php echo $showasset[2];?> | <?php echo $showasset[3];?> | <?php echo $showasset[4];?> 
																</a>
																<div class="kt-widget-5__item-datetime">
																	Last Inspect <?php echo $showasset[8];?><br>
														By Othmane
																</div>
															</div>
														</div>
										
								
		

								
								<?php }?>
								             
															
																
								 
                                            <?php }?>

														





