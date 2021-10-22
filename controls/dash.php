<?php
require('controls/zdze8efzedzdeezd/de5.php');
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



							
									<?php if($_SESSION['uat']=='admin'){?>
										<div class="col-xl-4">
										<div class="kt-portlet">
										<a href="WOF/wof.php" class="kt-iconbox kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon2-bell" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>WOF</h4>
											</div>
										</a>
									</div>
								</div>
									<?php }elseif($_SESSION['uat']=='user'){

										?>
										
									<div class="col-xl-4">
									<div class="kt-portlet">
										<a href="WOF/user/wof.php" class="kt-iconbox kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon2-bell" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>WOF</h4>
											</div>
										</a>
									</div>
								</div>
								<?php }?>



								
									<?php if($_SESSION['uat']=='admin'){?>
								<div class="col-xl-4">
									<div class="kt-portlet">
										<a href="SRF/" class="kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-app" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>SRF</h4>
											</div>
										</a>
									</div>
								</div>
									<?php }elseif(($_SESSION['nmu']=='younessao')){?>
									<div class="col-xl-4">
										<div class="kt-portlet">
										<a href="SRF/user/DE/" class="kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-app" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>SRF</h4>
											</div>
										</a>
									</div>
								</div>
								<?php }elseif(($showuser[11]=='31')){?>
									<div class="col-xl-4">
										<div class="kt-portlet">
										<a href="SRF/user/DE/" class="kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-app" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>SRF</h4>
											</div>
										</a>
									</div>
								</div>
								<?php }elseif(($showuser[11]=='32')){?>
									<div class="col-xl-4">
										<div class="kt-portlet">
										<a href="SRF/user/TC3/" class="kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-app" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>SRF</h4>
											</div>
										</a>
									</div>
								</div>
								<?php }elseif(($_SESSION['nmu']=='otmane')||($_SESSION['nmu']=='nasri')){?>
								<div class="col-xl-4">
									<div class="kt-portlet">
										<a href="SRF/user/" class="kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-app" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>SRF</h4>
											</div>
										</a>
									</div>
								</div>
									<?php }?>



									<?php if($_SESSION['nmu']=='otmane'){?>
								<div class="col-xl-4">
									<div class="kt-portlet">
										<a href="AIR/APM/" class="kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-eye" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>AIR</h4>
											</div>
										</a>
									</div>
								</div>
									<?php }elseif(($showuser[11]=='31')){?>
									<div class="col-xl-4">
										<div class="kt-portlet">
										<a href="AIR/DE/" class="kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-eye" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>AIR</h4>
											</div>
										</a>
									</div>
								</div>
									<?php }elseif(($showuser[11]=='32')){?>
									<div class="col-xl-4">
										<div class="kt-portlet">
										<a href="AIR/TC3/" class="kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-eye" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>AIR</h4>
											</div>
										</a>
									</div>
								</div>
									<?php }elseif(($_SESSION['nmu']=='younessao')){?>
									<div class="col-xl-4">
										<div class="kt-portlet">
										<a href="AIR/marsa-maroc.php" class="kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-eye" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>AIR</h4>
											</div>
										</a>
									</div>
								</div>
									<?php }elseif(($_SESSION['uat']=='admin')){?>
									<div class="col-xl-4">
										<div class="kt-portlet">
										<a href="AIR/" class="kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-eye" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>AIR</h4>
											</div>
										</a>
									</div>
								</div>
										<?php }?>

									<?php if($_SESSION['uat']=='admin'){?>
									<div class="col-xl-4">
										<div class="kt-portlet">
										<a href="PC/" class="kt-iconbox kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-network" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>Presence Control</h4>
											</div>
										</a>
									</div>
								</div>
									<?php }elseif(($_SESSION['nmu']=='younessao')){

										?>
										
								<div class="col-xl-4">
									<div class="kt-portlet">
										<a href="PC/MM/" class="kt-iconbox kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-network" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>Presence Control</h4>
											</div>
										</a>
									</div>
								</div>
								
								<?php }elseif(($_SESSION['nmu']=='otmane')){

										?>
										
								<div class="col-xl-4">
									<div class="kt-portlet">
										<a href="PC/APM/" class="kt-iconbox kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-network" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>Presence Control</h4>
											</div>
										</a>
									</div>
								</div>
								<?php }?>


								<?php if($_SESSION['uat']=='admin'){?>
									<div class="col-xl-4">
										<div class="kt-portlet">
										<a href="Reporting/EUROGATE/" class="kt-iconbox kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-analytics" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>CND Control</h4>
											</div>
										</a>
									</div>
								</div>
									<?php }?>
									<?php if(($_SESSION['nmu']=='ali')){

										?>
										
								<div class="col-xl-4">
									<div class="kt-portlet">
										<a href="Reporting/EUROGATE/" class="kt-iconbox kt-iconbox">
											<div class="kt-iconbox__icon">
												<div class="kt-iconbox__icon-bg"></div>
												<i class="flaticon-analytics" style="color: #00A1DB;"></i>
											</div>
											<div class="kt-iconbox__title">
												<h4>CND Control</h4>
											</div>
										</a>
									</div>
								</div>
								
								
								<?php }?>


<?php }}?>


