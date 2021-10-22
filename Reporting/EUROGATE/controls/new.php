
													<div class="col-lg-4 col-md-4 col-sm-4">
														<label class="form-control-label">Subject</label>
														<select onChange="aassets(this);" name="asset" class="form-control kt_selectpicker">
															<option value="choose">Choose Asset</option>
															<option value="QC">QC</option>
															<option value="RTG">RTG</option>
														</select>
														<span class="form-text text-muted">Select Asset Category.</span>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4">
														<div class="QC box">
															<label class="form-control-label">AssetID</label>
                                                           <?php include('QC.php')?>
                                                           <span class="form-text text-muted">Select Asset Number.</span>
                                                            </div>
														<div class="RTG box">
															<label class="form-control-label">AssetID</label>
                                                                 <?php include('RTG.php');?>
                                                                 <span class="form-text text-muted">Select Asset Number.</span>
                                                            </div>
														<div class="YARDGROUND box">
															<label class="form-control-label">AssetID</label>
                                                                <?php include('YARDGROUND.php');?>
                                                                <span class="form-text text-muted">Select Asset Number.</span>
                                                            </div>
														</div>
														<div class="col-lg-4 col-md-3 col-sm-3">
														<div class="subQC box">
															<label class="form-control-label">SubAsset</label>
                                                                	<?php include("subqc.php");?>
                                                                    <span class="form-text text-muted">Select Sub-Asset.</span>
                                                                </div>
                                                                <div class="subRTG box"> 
                                                                	<label class="form-control-label">SubAsset</label>
                                                                	<?php include("subrtg.php");?>
                                                                    <span class="form-text text-muted">Select Sub-Asset.</span>
                                                                </div>
                                                                <div class="subYARDGROUND box">
                                                                	<label class="form-control-label">SubAsset</label>
                                                                	<select onChange="subassets(this);" name="subasset" onselect="userTyped('skipID', this)" class="form-control kt_selectpicker">
                                                                        <option value="">Select Sub-Aera</option>
                                                                        <option data-subtext="YARDGROUND" value="Ground">Ground</option>  
                                                                    </select>
                                                                    <span class="form-text text-muted">Select Sub-Asset.</span>
                                                                </div> 
													</div>
											
											



<style>
.kt-switch input:checked ~ span:after {
    background-color: #00A1DB;
    color: #ffffff;
}



</style>


								
                                                
   



    



                    



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
                if($(this).attr("value")=="YARDGROUND"){
                    $(".box").hide();
                    $(".YARDGROUND").show();
                    $(".subYARDGROUND").show();
                }
               
                if($(this).attr("value")=="choose"){
                    $(".box").hide();
                    $(".choose").show();
                }
                
                
            });
        }).change();
    });



</script>
