
<div class="kt-portlet">
											
										<div class="kt-portlet__body">
											<div class="kt-section">
												<div class="form-group row">
													<div class="col-lg-3 col-md-3 col-sm-3">
														<label class="col-4 col-form-label">Asset</label>
														<select onChange="aassets(this);" onselect="userTyped('skipID', this)" required="required" class="form-control kt_selectpicker"  >
															<option value="choose">Choose Asset</option>
															<option value="BCG">QC</option>
														</select>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-3">
														<label class="col-4 col-form-label">AssetID</label>
														<div class="BCG box">
                                                           <?php include('qc.php')?>
                                                            </div>
															
														
														
														<div class="BCM box">
                                                         
                                                            </div>
															
													
														
														<div class="BCP box">
                                                          
                                                            </div>
															
														</div>
														

														<div class="col-lg-4 col-md-3 col-sm-3">
															<label class="col-4 col-form-label">SubAsset</label>
														<div class="subBCP box"> 
                                                                	<select onChange="subassets(this);" required="required" onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
                                                                        <option data-subtext="BC P" value="">Select Sub-Asset</option>
                                                                        <option data-subtext="BC P" value="Gantry Sea Side">Gantry</option>
                                                                        <option data-subtext="BC P" value="Power Pack">Power Pack</option>
                                                                        <option data-subtext="BC P" value="Structure">Structure</option>
                                                                        <option data-subtext="BC P" value="Head Block">Head Block</option>
                                                                        <option data-subtext="BC P" value="Spreader">Spreader</option>
                                                                        <option data-subtext="BC P" value="Checker Cabin">Checker Cabin</option>
                                                                        <option data-subtext="BC P" value="Driver Cabin">Driver Cabin</option>
                                                                        <option data-subtext="BC P" value="H. V Room">H. V Room</option>
                                                                        <option data-subtext="BC P" value="Spreader">Spreader</option>
                                                                        <option data-subtext="BC P" value="Trolley">Trolley</option>
                                                                        <option data-subtext="BC P" value="Rail">Rail</option>
                                                                        <option data-subtext="BC P" value="Stairs">Stairs</option>
                                                                    </select>
                                                                </div>
                                                                <div class="subBCM box"> 
                                                                	<select onChange="subassets(this);" required="required" onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
                                                                        <option value="">Select Sub-Asset</option>
                                                                        <option data-subtext="BC M" value="Gantry Sea Side">Gantry</option>
                                                                        <option data-subtext="BC M" value="Power Pack">Power Pack</option>
                                                                        <option data-subtext="BC M" value="Structure">Structure</option>
                                                                        <option data-subtext="BC M" value="Head Block">Head Block</option>
                                                                        <option data-subtext="BC M" value="Spreader">Spreader</option>
                                                                        <option data-subtext="BC M" value="Checker Cabin">Checker Cabin</option>
                                                                        <option data-subtext="BC M" value="Driver Cabin">Driver Cabin</option>
                                                                        <option data-subtext="BC M" value="H. V Room">H. V Room</option>
                                                                        <option data-subtext="BC M" value="Spreader">Spreader</option>
                                                                        <option data-subtext="BC M" value="Trolley">Trolley</option>
                                                                        <option data-subtext="BC M" value="Rail">Rail</option>
                                                                        <option data-subtext="BC M" value="Stairs">Stairs</option>
                                                                    </select>
                                                                </div>
                                                                <div class="subBCG box"> 
                                                                	<select onChange="subassets(this);" required="required" onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
                                                                        <option value="">Select Sub-Asset</option>
                                                                        <option data-subtext="BC G" value="Gantry Sea Side">Gantry</option>
                                                                        <option data-subtext="BC G" value="Power Pack">Power Pack</option>
                                                                        <option data-subtext="BC G" value="Structure">Structure</option>
                                                                        <option data-subtext="BC G" value="Head Block">Head Block</option>
                                                                        <option data-subtext="BC G" value="Spreader">Spreader</option>
                                                                        <option data-subtext="BC G" value="Checker Cabin">Checker Cabin</option>
                                                                        <option data-subtext="BC G" value="Driver Cabin">Driver Cabin</option>
                                                                        <option data-subtext="BC G" value="H. V Room">H. V Room</option>
                                                                        <option data-subtext="BC G" value="Spreader">Spreader</option>
                                                                        <option data-subtext="BC G" value="Trolley">Trolley</option>
                                                                        <option data-subtext="BC G" value="Rail">Rail</option>
                                                                        <option data-subtext="BC G" value="Stairs">Stairs</option>
                                                                    </select>
                                                                </div>

                                                                
												
													</div>
												</div>
												<div class="form-group row">

													<div class="col-lg-4 col-md-4 col-sm-4">
														<div class="card">
															<center>
															<img src="" id="output1" class="" style="width: 80%; z-index: 3;">
															</center>
															<div class="card-body">
															<form onsubmit="return GEEKFORGEEKS()" id="uploadImage" name="RegForm" action="upload.php" enctype="multipart/form-data" method="post" class="addast1 kt-form kt-form--label-right">
															<div class="row" style="padding-left: 10px;">
																
																
													<div class="col-5" >
														<div class="kt-avatar kt-avatar--outline kt-avatar--brand kt-avatar--circle" id="kt_profile_avatar_1">
															<div class="kt-avatar__holder" style="width: 100px; height: 100px;
  float: left;
  position: relative;
  overflow: hidden;  background-image: url(controls/img/apple-touch-icon.png);"></div>
															<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Add Picture">
																<i class="fa fa-plus"></i>
																<input type='file' onchange="loadFile1(event)" id="skipID" name="skipID" accept=".png, .jpg, .jpeg" disabled />

															</label>
															<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel Picture">
																<i class="fa fa-times"></i>
															</span>
														</div>
													</div>

													<div class="col-6">
														<div class="kt-section kt-section--first">
															<div class="kt-section__body"><br>
																<div class="form-group row">
																	<label class="col-6 col-form-label"></label>
																	<div class="col-6" style="float: right;">
																		<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">

																			<label><span style="text-align: left;"> Clean </span>
																				<input type="checkbox"  id="checkme2" class='child' onclick="validate()" value="No" name="cleanyes1">
																				<span></span>
																			</label>
																		</span>
																	</div>
												
<style>
.kt-switch input:checked ~ span:after {
    background-color: #00A1DB;
    color: #ffffff;
}



</style>
												
													<label class="col-6 col-form-label"></label>
													<div class="col-6" style="float: right;">
														<span class="kt-switch kt-switch--outline kt-switch--icon" style="color: #00A1DB;">
															<label>Call <img src="../../img/favicon-32x32.png" width="10">
																<input type="checkbox" id="checkme1" onclick="validate()" class='parent'  value="Yes" name="gwyes1">
																<span></span>
															</label>
														</span>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="card-body">
									<div class="kt-portlet">
										<h4><span id="assetsss">Title Will Change When You Choose Asset </span> | <span id="subassetsid1"></span> | <span id="subassetsss"></span></h4>
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
    var input = document.getElementById("skipID");
    input.disabled = obj.value == "";
}



	var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output1');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>  
										<div class="kt-portlet__foot">
																<div class="kt-form__actions">
																	<div class="row">
																		
																		<div class="col-lg-12 col-xl-12" style="text-align: right; margin-left: 10px;">
																			<!--<button type="submit" name="addasst" onclick="//refreshDiv('container', 'refreshed');" class=" btn btn-success" style="background-color: #00A1DB; border: #00A1DB;">Save</button>  -->
																			<input type="submit" name="addasst" class=" btn btn-success" onClick="formcheck(); return false" style="background-color: #00A1DB; border: #00A1DB;" value="Save">
																		</div>
																	</div>
																</div>
															</div>
														
													</div>
												</div>
											</form>
											
										</div>
									</div>
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
		if($('#skipID').val())
		{
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
		}
		return false;
	});
});
</script>
<script>
    
    $(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="BCG"){
                    $(".box").hide();
                    $(".BCG").show();
                    $(".subBCG").show();
                }
                if($(this).attr("value")=="BCM"){
                    $(".box").hide();
                    $(".BCM").show();
                    $(".subBCM").show();
                }
                if($(this).attr("value")=="BCP"){
                    $(".box").hide();
                    $(".BCP").show();
                    $(".subBCP").show();
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

