<div>
													<div class="kt-portlet kt-portlet--height-fluid-half kt-widget-15">
														<div class="kt-portlet__body">
															<div class="kt-section">
																<div class="kt-section__content">
																	<table  id="tableagents" class="table table-bordered table-hover">
																		<thead>
																			<tr>
																				
																				<th>Name</th>
																				<th>Presence</th>
																				<th  style="max-width: 150px;">Reason (If Absent)</th>
																				<th style="width: 50px;">Action</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selectaadmin=$cdb->prepare("SELECT * FROM admin");
$selectaadmin->execute();
if ($selectaadmin===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resaagents=$selectaadmin->get_result();?>
                                                <?php while ($showadmin=$resaagents->fetch_row()) {?>
																			<tr >
																				
																				<td><?php echo $showadmin[1]; ?></td> 
																				<?php if ($showadmin[14]=='present') {
																					?>
																					<td style="max-width: 150px;"><span class="badge badge-success">Present</span></td>
																					<?php
																				}
																				elseif ($showadmin[14]=='absent'){
																					?>
																					<td><span  style="max-width: 150px;" class="badge badge-danger">Absent</span></td>
																					<?php
																				} 
																				elseif ($showadmin[14]==''){
																					?>
																					<td><span  style="max-width: 150px;" class="badge badge-secondary">Check</span></td>
																					<?php
																				} ?>
																				
																				
																				<?php

$selectaagent=$cdb->prepare("SELECT * FROM presence WHERE pr_agent='$showadmin[0]' ORDER BY pr_date DESC LIMIT 1");
$selectaagent->execute();
if ($selectaagent===false) {
  echo "Ops! Something Went Wrong! Contact Support Team.";
}
else{
  $resagent=$selectaagent->get_result();?>
  <?php while ($showagent=$resagent->fetch_row()) {?>

																				<td><?php if ($showadmin[14]=='absent'){ echo $showagent[6]; }?></td>
																				<?php }}?>
																				
																				<td style="width: 50px; text-align: center;"><a href="#" data-toggle="modal" data-target="#agentpresm<?php echo $showadmin[0]?>" class=""><i class="fa fa-eye"></i></a><a href="javascript:void(0)"> | </a><a href="#" data-toggle="modal" data-target="#admhisto<?php echo $showadmin[0]?>" class=""><i class="kt-font-success fa fa-user-clock"></i></a></td>
																			</tr>
<?php
include('agent.php');
include('history.php');
?>
																		<?php }} ?>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>
												</div>