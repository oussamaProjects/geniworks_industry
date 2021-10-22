<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<form id="leavesite" method="post"> 
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Leave Site</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<p>Do You Check The Agents Below ?.</p>
																	
																	<table class="table table-bordered table-hover">
																		<thead>
																			<tr>
																				<th>#ID</th>
																				<th>Agent</th>
																				<th>Phone</th>
																				<th>Presence</th>
																				<th style="width: 50px;">Action</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selectaagents=$cdb->prepare("SELECT * FROM agents WHERE ag_site='32' AND ag_presence='present'");
$selectaagents->execute();
if ($selectaagents===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resaagents=$selectaagents->get_result();?>
                                                <?php while ($showaagent=$resaagents->fetch_row()) {?>
																			<tr>
																				<th scope="row"><?php echo $showaagent[0]; ?></th>
																				<td><?php echo $showaagent[1]; ?></td>
																				<td><?php echo $showaagent[2]; ?></td>
																				
																				<?php if ($showaagent[17]=='present') {
																					?>
																					<td><a href="#" class="badge badge-success">Present</a></td>
																					<?php
																				}
																				elseif ($showaagent[17]=='absent'){
																					?>
																					<td><a href="#" class="badge badge-danger">Present</a></td>
																					<?php
																				} 
																				elseif ($showaagent[17]==''){
																					?>
																					<td><a href="#" class="badge badge-secondary">Check</a></td>
																					<?php
																				} ?>
																				
																				<td style="width: 50px; text-align: center;"><a href="#" data-toggle="modal" data-target="#agentpresm<?php echo $showaagent[0]?>" class=""><i class="fa fa-eye"></i></a></td>
																			</tr>

																		<?php }} ?>
																			</tbody>
																		</table>

																</div>
																<div class="modal-footer">
																	
																	<button type="submit" name="leaves" class="btn btn-brand">Yes, Agree</button>
																</div>
															</form>
															</div>
														</div>
													</div>

<?php
if (isset($_POST['leaves'])) {
require('controls/zdze8efzedzdeezd/de5.php');

  $updpres = $cdb->prepare("UPDATE `agents` SET `ag_presence` = ''  WHERE  ag_site='32'");
  $updpres->execute();
  if($updpres===false)
  {
    echo "We Have Issue To Accept Your Request";
}
else {
  	$resupd=$updpres->get_result();
  	  }
  	}
?>
