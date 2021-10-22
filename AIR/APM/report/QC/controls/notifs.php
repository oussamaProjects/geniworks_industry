<?php

$userpu=$_SESSION['nmu'];
$userpp=$_SESSION['passu'];
$userp=$_SESSION['uat'];
require('controls/zdze8efzedzdeezd/de5.php');


$selectnotif=$cdb->prepare("SELECT * FROM asset_clean_inspection");

 $selectnotif->execute();
 if ($selectnotif === false) {
     echo "display error".mysqli_error($cdb);
 }
else{
$resnotif=$selectnotif->get_result();

?>
<div class="kt-header__topbar-item dropdown">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px, 0px" aria-expanded="true">
									<span class="kt-header__topbar-icon">
										<i class="flaticon2-bell-alarm-symbol kt-font-brand"></i>
										<span class="kt-badge kt-badge--dot kt-badge--notify kt-badge--sm kt-badge--danger"></span>
									</span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
									<form>
										<div class="kt-notification kt-margin-t-30 kt-margin-b-20 kt-scroll" data-scroll="true" data-height="270" data-mobile-height="220">

											<?php while ($shownotif=$resnotif->fetch_row()){ ?>
												<?php if($shownotif[2]=='QC'){?>
											<a target="_blank" href="report/<?php echo $shownotif[2];?>/index.php?qcnum=<?php echo $shownotif[4];?>" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<?php if($shownotif[10]=='high'){?>
													<span class="badge badge-pill badge-danger">H</span>
												<?php }?>
												<?php if($shownotif[10]=='medium'){?>
													<span class="badge badge-pill badge-warning">w</span>
												<?php }?>
												<?php if($shownotif[10]==''){?>
													<span class="badge badge-pill badge-secondary">n</span>
												<?php }?>
												<?php if($shownotif[10]=='low'){?>
													<span class="badge badge-pill badge-accent" style="background-color: #00c5dc; color: white;">L</span>
												<?php }?>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														<?php echo $shownotif[4];?> has been successfully Cleaned
													</div>
													<div class="kt-notification__item-time">
														Inspected On <span style="color: #00A1db;"><?php echo $shownotif[8];?></span> 
													</div>
												</div>
											</a>
											<?php }?>

											<?php if($shownotif[2]=='RTG'){?>
											<a target="_blank" href="report/<?php echo $shownotif[2];?>/index.php?rtgnum=<?php echo $shownotif[4];?>" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<?php if($shownotif[10]=='high'){?>
													<span class="badge badge-pill badge-danger">H</span>
												<?php }?>
												<?php if($shownotif[10]=='medium'){?>
													<span class="badge badge-pill badge-warning">w</span>
												<?php }?>
												<?php if($shownotif[10]==''){?>
													<span class="badge badge-pill badge-secondary">n</span>
												<?php }?>
												<?php if($shownotif[10]=='low'){?>
													<span class="badge badge-pill badge-accent" style="background-color: #00c5dc; color: white;">L</span>
												<?php }?>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title">
														<?php echo $shownotif[4];?> has been successfully Cleaned
													</div>
													<div class="kt-notification__item-time">
														Inspected On <span style="color: #00A1db;"><?php echo $shownotif[8];?></span> 
													</div>
												</div>
											</a>
											<?php }?>
											<?php }?>
										</div>
									</form>
								</div>
							</div>

<?php }?>