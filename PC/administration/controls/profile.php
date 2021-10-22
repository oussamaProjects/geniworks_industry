	<div class="kt-profile__content">
									<div class="row">
						<div class="kt-portlet kt-profile">
							
							<div class="kt-portlet kt-profile">
								<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="controls/img/logo-geniworks.png" alt="">
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name">Office - GENIWORKS INDUSTRY</div>
													<div class="kt-profile__main-info-position">Tangier</div>
												</div>
											</div>

										</div>
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__contact">
												<div class="kt-profile__main-info-position"><h5>Resources Review</h5></div><br>
<?php
require("controls/zdze8efzedzdeezd/de5.php");
$sqlch="SELECT count(ad_id) FROM admin";
$resultch = mysqli_query($cdb,$sqlch);

?>
												<a href="#" class="kt-profile__contact-item">
													
													<span class="kt-profile__contact-item-text"><?php while($rowch=mysqli_fetch_array($resultch)) {echo $rowch[0];}?>  Members</span>
												</a>
												
											</div>
										</div>
										
										
												
									</div>
								</div>
							</div>	



							</div>
						</div>
					</div>