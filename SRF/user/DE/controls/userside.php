<?php
require('zdfzfzef/de5.php');
$userpu=$_SESSION['nmu'];
$userpp=$_SESSION['passu'];
$userp=$_SESSION['uat'];

$seluser=$cdb->prepare("SELECT * FROM user WHERE u_username='$userpu' AND u_password='$userpp' AND u_access_type='$userp'");
$seluser->execute();
if ($seluser===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res=$seluser->get_result();
while ($showuser=$res->fetch_row()) {
?>

							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px, 0px">
									<div class="kt-header__topbar-user">
										<span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
										<span class="kt-header__topbar-username kt-hidden-mobile"><?php echo $showuser[3];?></span>
										<?php if(($_SESSION['uat']=='admin')||($_SESSION['uat']=='user')){?>
										<img alt="Pic" src="../../controls/img/apple-touch-icon.png" />
									<?php }elseif($_SESSION['uat']=='owner'){?>
										<img alt="Pic" src="../../controls/img/apm.jpg" />
									<?php }?>

										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
										<span class="kt-badge kt-badge--username kt-badge--lg kt-badge--brand kt-hidden kt-badge--bold"><?php echo $showuser[3];?></span>
									</div>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-sm">
									<div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile" style="background-image: url(img/.png)">
										<div class="kt-user-card__wrapper">
											<div class="kt-user-card__pic">
												<?php if(($_SESSION['uat']=='admin')){?>
													<img alt="Pic" src="../../controls/img/apple-touch-icon.png" />
													<?php }elseif(($_SESSION['uat']=='user')){?>
														<img alt="Pic" src="../../controls/img/apple-touch-icon.png" />
														<?php }elseif($_SESSION['uat']=='owner'){
															

														 }?>
											</div>
											<div class="kt-user-card__details">
												<div class="kt-user-card__name" style="color: #6c7293;"><?php echo $showuser[3];?></div>
												<div class="kt-user-card__position">Position . <?php echo $showuser[9];?></div>
												<div class="kt-user-card__position">Owner. <?php echo $showuser[10];?></div>
												
											</div>
										</div>
									</div>
									<ul class="kt-nav kt-margin-b-10">
										
										
										
										<li class="kt-nav__item kt-nav__item--custom kt-margin-t-15">
											<a href="controls/logout.php" class="btn btn-label-brand btn-upper btn-sm btn-bold">Sign Out</a>



										</li>
									</ul>
								</div>
							</div>
							<?php }}?>