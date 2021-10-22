<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

      <div class="modal fade" id="admhisto<?php echo $showadmin[0]?>" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-ml">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Presence Control</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
						</div>
						<div class="modal-body">
                            <div class="kt-widget-4">
                                <div class="kt-widget-4__item">
                                    <div class="kt-widget-4__item-content">
                                        <div class="kt-widget-4__item-section">
                                            <div class="kt-portlet kt-portlet--height-fluid-half kt-widget-15">
                                              
                                                    
                                                       
                                                   
                                                    <div class="carousel-inner">




                                                
                                                    <div class="carousel-item active">
                                                     
                                                        <div class="kt-widget-15__body">
                                                            


                            
                                <div class="container">
                                    <div class="header">
                                       
                                        
                                        <h class="header-text" style='text-align: left; width: 100%;'><strong style="color: #303156;">Presence History For : </strong><span style="color: #00A1db;"><?php echo $showadmin[1];?></span></h><br>
                                        <input type="hidden" value="<?php echo $showadmin[1];?>" name="admn">
                                        <input type="hidden" value="<?php echo $showadmin[0];?>" name="admnid">
                                    </div>
                                
                              
                                            
                                                        
                                                    
                                                    
                                            
                                                <div class="row">
                                                    <div class="col-md-12">
                                                      <style type="text/css">
                                                     .tabless{
  display:table;         
  width:100%;                
  border:0.5px solid  #666666;         
 
}
.table-row{
  display:table-row;
  width:auto;
  clear:both;

}
.table-col{
  float:left;
  display:table-column;         
       
  border:0.5px solid  #ccc;
}
</style>
 <div class="tabless">
             <div class="table-row">
                 
                <div class="table-col" style=" align-content: center; text-align: center; width:130px;  "><strong style="color: #303156;">Date</strong></div>
                <div class="table-col" style="align-content: center; text-align: center;  width:90px;"><strong style="color: #303156;">Status</strong></div>
                <div class="table-col" style=" align-content: center; text-align: center; width:70px;"><strong style="color: #303156;">Time</strong></div>
            </div>
<?php
require('controls/zdze8efzedzdeezd/de5.php');
$selectedad=$cdb->prepare("SELECT * FROM presence WHERE pr_agent=$showadmin[0] AND pr_date > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
$selectedad->execute();
if ($selectedad===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resselected=$selectedad->get_result();?>
                                                <?php while ($showselected=$resselected->fetch_row()) {?>
                                      <div class="table-row">
                                     
                                        
                                       <div class="table-col" style=" align-content: center; text-align: center; width:130px;  padding-top: 5px; min-height: 30px;"> <?php echo $showselected[5]; ?></div>
                                        <?php if ($showselected[3]=='present') {
                                          ?>
                                          <div class="table-col" style="align-content: center; text-align: center;  width:90px;padding-top: 3px; min-height: 30px;">  <span class="badge badge-success">Present</span></div>
                                          <?php
                                        }
                                        elseif ($showselected[3]=='absent'){
                                          ?>
                                        <div class="table-col" style="align-content: center; text-align: center; width:90px; padding-top: 3px; min-height: 30px;">  <span class="badge badge-danger">Absent</span></div>
                                          <?php
                                        } 
                                        elseif ($showselected[3]==''){
                                          ?>
                                           <div class="table-col" style="align-content: center; text-align: center;padding-top: 3px; width:90px;min-height: 30px;">  <span class="badge badge-secondary">Check</span></div>
                                          <?php
                                        } ?>
                                        <div class="table-col"  style=" align-content: center; text-align: center; width:70px; padding-top: 5px;min-height: 30px;"> <?php echo $showselected[7]; ?></div>
                                        
                                      
                                        
                                        
                                       
                                      </div>

                                    <?php }
                                  } ?>
                                 </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="kt-widget-15__foot-info">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         
                           
                        









																</div>
															</div>
														</div>
													</div>
                        </div>
                      </div>
                    </div>
                  </div>
       





<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>