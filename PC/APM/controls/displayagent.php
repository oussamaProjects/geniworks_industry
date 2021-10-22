<div>
													<div class="kt-portlet kt-portlet--height-fluid-half kt-widget-15">
														<div class="kt-portlet__body">
															<div class="kt-section">
																<div class="kt-section__content">
																	<table  id="tableagents" class="table table-bordered table-hover">
																		<thead>
																			<tr>
																				<th>#ID</th>
																				<th>Agent</th>
																				<th>Presence</th>
																				<th>Reason (If Absent)</th>
																				<th style="width: 50px;">Action</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selectaagents=$cdb->prepare("SELECT * FROM agents WHERE ag_site='11'");
$selectaagents->execute();
if ($selectaagents===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resaagents=$selectaagents->get_result();?>
                                                <?php while ($showaagent=$resaagents->fetch_row()) {?>
																			<tr >
																				<th scope="row"><?php echo $showaagent[0]; ?></th>
																				<td><?php echo $showaagent[1]; ?></td> 
																				<?php if ($showaagent[17]=='present') {
																					?>
																					<td><span class="badge badge-success">Present</span></td>
																					<?php
																				}
																				elseif ($showaagent[17]=='absent'){
																					?>
																					<td><span class="badge badge-danger">Absent</span></td>
																					<?php
																				} 
																				elseif ($showaagent[17]==''){
																					?>
																					<td><span class="badge badge-secondary">Check</span></td>
																					<?php
																				} ?>
																				
																				
																				<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selectaagent=$cdb->prepare("SELECT * FROM presence WHERE pr_agent='$showaagent[0]' ORDER BY pr_date DESC LIMIT 1");
$selectaagent->execute();
if ($selectaagent===false) {
  echo "Ops! Something Went Wrong! Contact Support Team.";
}
else{
  $resagent=$selectaagent->get_result();?>
  <?php while ($showagent=$resagent->fetch_row()) {?>

																				<td><?php if ($showaagent[17]=='absent'){ echo $showagent[6]; }?></td>
																				<?php }}?>
																				
																				<td style="width: 50px; text-align: center;"><a href="#" data-toggle="modal" data-target="#agentpresm<?php echo $showaagent[0]?>" class=""><i class="fa fa-eye"></i></a></td>
																			</tr>
<?php
include('agent.php');
?>
																		<?php }} ?>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>
												</div>