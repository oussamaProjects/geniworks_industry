
<style>

.la-star{
  color: #ffe045;

}
.la-star-o, .la-star{
	 font-size: 20px;
}



</style>
<?php
require('zdze8efzedzdeezd/de5.php');
$idag=$_GET['id'];

$showpsrf=$cdb->prepare("SELECT * FROM agents WHERE ag_id='$idag'");
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


	<div class="kt-portlet kt-profile">
                <div class="kt-profile__content" >
                  <div class="row">
                    <div class="col-md-12 col-lg-5 col-xl-4">
                      <div class="kt-profile__main"  style="width: 100%;">
                      	
                        <div class="kt-profile__main-pic">
													<img src="img/agents/<?php echo $showasset[7];?>" alt="" />
													<label class="kt-profile__main-pic-upload">
														<i class="flaticon-photo-camera"></i>
													</label>
													<div class="column" style="align-content: center;text-align: center;">

                <?php if ($showasset[33]=="1") {
                ?>
                <i class="la la-star"></i><i class="la la-star-o"></i><i class="la la-star-o"></i><i class="la la-star-o"></i><i class="la la-star-o"></i>
                <?php }
                elseif ($showasset[33]=="2") {
                  ?>
                <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star-o"></i><i class="la la-star-o"></i><i class="la la-star-o"></i>
               
                <?php }
                elseif ($showasset[33]=="3") {
                  ?>
                <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="la la-star-o"></i><i class="la la-star-o"></i>
                
                <?php }
                elseif ($showasset[33]=="4") {
                  ?>
                  <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="la la-star-o"></i>
                <?php }
                elseif ($showasset[33]=="5") {
                  ?>
                  <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i>
              <?php  }
              elseif ($showasset[33]=="") {
                  ?>
                  <i class="la la-star-o"></i><i class="la la-star-o"></i><i class="la la-star-o"></i><i class="la la-star-o"></i><i class="la la-star-o"></i>
              <?php  }?>
              </div>
												</div>

                        <div class="kt-profile__main-info">
                          <div class="kt-profile__main-info-name"> <?php echo $showasset[1];?></div>
                          <div class="kt-profile__main-info-position"> <?php echo $showasset[6];?></div>

                          <div class="kt-profile__stats-item-label" style="font-size: 12px; padding-top: 15px;"><div class="kt-profile__main-info-position"><span style="color: #5d5b6f;font-weight: 600;">CIN</span> <span style="font-weight: 800;"> <?php  echo $showasset[8]; ?></span></div></div>
                          <div class="kt-profile__stats-item-label" style="font-size: 12px;">
                            <div class="kt-profile__main-info-position">
                              <span style="color: #5d5b6f;font-weight: 600;">CNSS</span>
                               <?php if ($showasset[9]=="Not declared") {
                            ?><span style="font-weight: 800; color: #fd397a;"> undeclared</span>
                          <?php }else{
                            ?>
                            <span style="font-weight: 800;"> <?php  echo $showasset[9]; ?></span>
                          <?php }
                          ?>
                          </div>
                        </div>
                         
                           
                            
                          
                      



                        </div>

                      </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4">
                      <div class="kt-profile__contact">
                        <a href="#" class="kt-profile__contact-item">
                          <span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"><i class="flaticon-whatsapp"></i></span>
                          <span class="kt-profile__contact-item-text"> <?php echo $showasset[2];?></span>
                        </a>
                        <a href="#" class="kt-profile__contact-item">
                          <span class="kt-profile__contact-item-icon"><i class="flaticon-email"></i></span>
                          <span class="kt-profile__contact-item-text"> <?php echo $showasset[32];?></span>
                        </a>
                        <a href="#" class="kt-profile__contact-item">
                          <span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"><i class="flaticon-home"></i></span>
                          <span class="kt-profile__contact-item-text"><?php echo $showasset[4] ?></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4">
                      <div class="kt-profile__stats">

                        <div class="kt-profile__stats-item">
                          <div class="kt-profile__stats-item-label">Marital Status</div>
                          <div class="kt-profile__stats-item-chart">
                            <span> <?php  echo $showasset[16]; ?></span>
                          </div>
                      
                          <div class="kt-profile__stats-item-label">Hiring date</div>
                          <div class="kt-profile__stats-item-chart">
                            <span> <?php  echo $showasset[29]; ?></span>
                          </div>

                          <div class="kt-profile__stats-item-label">Leave Balance</div>
                          <div class="kt-profile__stats-item-chart">
                            <span> 18 Days</span>
                          </div>
                        </div>
                        <br>
                       
                      </div>

                    </div>

                  </div>
                   <a href="profile.php?id=<?php echo $showasset[0];?>" class="btn btn-brand" style="float: right;">Edit</a>
                </div>
                
              </div>

<?php 
}}
?>

<div class="modal fade dfgdf" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">New Agent</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<?php include('controls/new-agent.php');?>
																</div>
																<div class="modal-footer">
																	
																</div>
															</div>
														</div>
													</div>