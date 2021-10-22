
<div class="kt-portlet">
											
										<div class="kt-portlet__body">
											<div class="kt-section">
												<div class="form-group row">
													<div class="col-lg-4 col-md-4 col-sm-4">
														<label class="form-control-label">Asset</label>
														<select onChange="aassets(this);" onselect="userTyped('skipID1', this)" required="required" class="form-control kt_selectpicker"  >
															<option value="choose">Choose Asset</option>
															<option value="QC">QC</option>
															<option value="RTG">RTG</option>
															
														</select>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4">
														<label class="form-control-label">AssetID</label>
														<div class="QC box">
                                                           <?php include('QC.php')?>
                                                            </div>
															
														
														
														<div class="RTG box">
                                                           
                                                                 <?php include('RTG.php');?>
                                                            </div>
															
													
														
														<div class="YARDGROUND box">
                                                           
                                                                <?php include('YARDGROUND.php');?>
                                                            </div>
															
														</div>
														

														<div class="col-lg-4 col-md-4 col-sm-4">
															<label class="form-control-label">SubAsset</label>
														<div class="subQC box"> 
                                                                	 <?php include('subqc.php');?>
                                                                </div>
                                                                <div class="subRTG box"> 
                                                                	<?php include('subrtg.php');?>
                                                                </div>

                                                                
                                                        

                                                                
												
													</div>
												</div>
												<div class="form-group row">

													<div class="col-lg-4 col-md-4 col-sm-4">
														
															<center>
															<img src="" id="output1" >
															</center>
															
															<form onsubmit="return GEEKFORGEEKS()" id="uploadImage" name="RegForm" action="search.php" enctype="multipart/form-data" method="post" class="addast1 kt-form kt-form--label-right">
															<div class="row" >
																
																
													<div class="col-5" >
														<div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle" id="kt_profile_avatar_1">
															
															
																
																<input type='hidden' onchange="loadFile1(event)" id="skipID1" name="skipID1" accept=".png, .jpg, .jpeg" disabled />

															
															<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel Picture">
																<i class="fa fa-times"></i>
															</span>
														</div>
													</div>

												
								</div>
								
								
										<div class="row">
											
											<div class="col-lg-6 col-xl-6">
												<label class="form-control-label">Dirt Degree</label>
                                                                	<select class="form-control kt_selectpicker" name="dirtdeg" >
                                                                    <option value="" selected="">Choose Degree</option>
                                                                    <option data-subtext="Danger" value="high">High</option>
                                                                    <option data-subtext="Need Cleaning" value="medium">Medium</option>
                                                                    <option data-subtext="" value="low">Low</option>
                                                                </select>
                                                                </div>
                                            <div class="col-lg-6 col-xl-6">
												<label class="form-control-label">Status</label>
                                                                	<select class="form-control kt_selectpicker" data-live-search="true" name="inspstatus" >
                                                                    <option value="" selected="selected">Select Status</option>
                                                                    <option value="yes" >Clean</option>
                                                                    <option data-subtext="Danger" value="no">Dirty</option>
                                                                    
                                                                </select>
                                                                </div>
										</div>
										<input type="hidden" id="assetss" class="ss-item-required" required="required" name="ast1">
										<input type="hidden" id="subassetss" class="ss-item-required" required="required" name="subast1">
										<input type="hidden" id="subassetid" class="ss-item-required" required="required" name="subastid1">
								            
                                            
   



    



                    



<script>

function validate() {
    if (document.getElementById('checkme1').checked) {
        alert("checked");
    } else {
        alert("Select Asset!");
    }
} 

function validate() {
    if (document.getElementById('checkme2').checked) {
        alert("checked");
    } else {
        alert("Select Asset!");
    }
} 







function userTyped(commen, e){
    if(e.value.length > 0){
        document.getElementById(commen).disabled=false;
    }else{
        document.getElementById(commen).disabled=true;
    }
 }

function checkOption(obj) {
    var input = document.getElementById("skipID1");
    input.disabled = obj.value == "";
}




</script>  
<br>
										<div class="kt-portlet__foot">
															
																	<div class="row">
																		
																		<div class="col-lg-6 col-xl-6" style="">

																			<!--<button type="submit" name="addasst" onclick="//refreshDiv('container', 'refreshed');" class=" btn btn-success" style="background-color: #00A1DB; border: #00A1DB;">Save</button>  -->
																			<input type="submit" name="addasst" class=" btn btn-success" onClick="formcheck(); return false" style="background-color: #00A1DB; border: #00A1DB;" value="Search">
																		</div>
																	</div>
																</div>
													
														
												
												
											</form>
											
									
								
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8">
										<div class="kt-section__content kt-section__content--border" style="border:solid 1px #ebedf2;">
											<h1 class="kt-blog-post__title kt-heading kt-heading--lg kt-heading--medium">
											<div class="container">

			<div class="panel panel-default">
			
				<div class="panel-body">
				<div id="targetLayer" style="display:none;"></div>
					<div id="loader-icon" style="display:none;"><img src="loader.gif" /></div>
				</div>
			</div>
		</div>

		
<script>
$(document).ready(function(){
	$('#uploadImage').submit(function(event){
		
			event.preventDefault();
			$('#loader-icon').show();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').show();
				},
				resetForm: true
			});
		
		
	});
});
</script>
<script>
    
    $(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="QC"){
                    $(".box").hide();
                    $(".QC").show();
                    $(".subQC").show();
                }
                if($(this).attr("value")=="RTG"){
                    $(".box").hide();
                    $(".RTG").show();
                    $(".subRTG").show();
                }

               
                if($(this).attr("value")=="choose"){
                    $(".box").hide();
                    $(".choose").show();
                }
                
                
            });
        }).change();
    });



</script>
										</h1>
													<div class="card-columns">
														
												</div>
											</div>
									
									



								</div>
							</div>
							
										
	











														
													</div>
												</div>
											</div>

