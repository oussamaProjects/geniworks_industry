<style>
	.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: transparent;
    background-clip: border-box;
    border: 0px solid #ebedf2;
    border-radius: 0.25rem;
}
</style>

<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Uncleaned Assets</h3>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--begin::Accordion-->
											<div class="accordion accordion-outline" id="accordionExample3">
												
												
												











											<div class="kt-section__content">
												
													
												<div class="card">
													<div class="card-header" id="headingOne3">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
															Quayside Crane
														</div>
													</div>
													<div id="collapseOne3" class="card-body-wrapper collapse" aria-labelledby="headingOne3" data-parent="#accordionExample3">
														<div class="card-body">

															<table class="table table-striped m-table">
														<thead>
															<tr>
																<th>#ID</th>
																

																
																<th>Status</th>
																
																<th width="10">Action</th>
															</tr>
														</thead>

														<tbody>
<?php
require('controls/zdze8efzedzdeezd/de5.php');

$histqu = $cdb->prepare("SELECT * FROM asset_clean_inspection_tc3 WHERE acij_owner='32' AND acij_asset='QC' AND acij_clean='' ORDER BY acij_clean ASC");
$histqu->execute();
if ($histqu===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $reshistqu=$histqu->get_result();
?>
<?php
while ($showasseth=$reshistqu->fetch_row()) {



								?>
															<tr>
																<th scope="row"><?php echo $showasseth[4];?></th>
																
																
																
																<td><?php if($showasseth[6]=='1'){?>

																	<span style="color: #1dc9b7;">Nothing To Report</span>
																	<?php }
																elseif ($showasseth[6]=='') {?>
																	<span style="color: #ef1f41;">Requires Cleaning</span>
																<?php } ?>

																<div class="accordion" id="accordionExample1"  style="border-color:transparent;">
																	<div class="card">
																		<div class="card-header" id="headingOne" style="border-color:transparent;">
																			
																		</div>
																		<div id="collapsebc<?php echo $showasseth[0];?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1" style="border-color:transparent;" >
																			<div class="card-body" style="border-color:transparent;">
																				<?php echo $showasseth[4];?><br>
																				<?php echo $showasseth[3];?><br>
																				Inspected By <?php echo $showasseth[9];?><br>
																				<a href="report/QC/index.php?qcnum=<?php echo $showasseth[4];?>" ><strong>Report<i class="la la-angle-double-right"></i></strong></a>
																			</div>
																		</div>
																	</div>
																</div>


															</td>
																
																<td><div class="kt-widget-13__toolbar">
																	<a href="#" data-toggle="collapse" data-target="#collapsebc<?php echo $showasseth[0];?>" aria-expanded="true" aria-controls="collapsebc<?php echo $showasseth[0];?>" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
																</div></td>
															</tr>

<?php 
}
}
?>
</tbody>
</table>
														</div>
													</div>
												</div>
											</div>

											<!--end::Accordion-->
										</div>
									</div>






														
												</div>
												