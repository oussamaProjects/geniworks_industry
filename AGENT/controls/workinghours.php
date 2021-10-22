
<?php
require('zdze8efzedzdeezd/de5.php');
$idag=$_GET['id'];

$reqpts=$cdb->prepare("SELECT * FROM payrolls_settings WHERE wks_employee='$idag'");
$reqpts->execute();
if ($reqpts===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $respts=$reqpts->get_result();
  	while ($showpls=$respts->fetch_row()) {

$reqag=$cdb->prepare("SELECT * FROM agents WHERE ag_id='$idag'");
$reqag->execute();
if ($reqag===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resag=$reqag->get_result();
  	while ($showag=$resag->fetch_row()) {


$now = time();
$your_date = strtotime($showag[29]);
$sendiff = $now - $your_date;
 
$gsalary=$showpls[2]*8*26;

 if((round($sendiff / (60 * 60 * 24))>=730)&&(round($sendiff / (60 * 60 * 24))<1825)){

 	$bseniority=$gsalary*0.05;
 } 

 if((round($sendiff / (60 * 60 * 24))>=1825)&&(round($sendiff / (60 * 60 * 24))<4380)){

 	$bseniority=$gsalary*0.10;
 }

 if((round($sendiff / (60 * 60 * 24))>=4380)&&(round($sendiff / (60 * 60 * 24))<7300)){

 	$bseniority=$gsalary*0.15;
 }
  if((round($sendiff / (60 * 60 * 24))>=7300)&&(round($sendiff / (60 * 60 * 24))<9125)){

 	$bseniority=$gsalary*0.20;
 } 
 if(round($sendiff / (60 * 60 * 24))>=9125){

 	$bseniority=$gsalary*0.25;
 }
  



  	 if(($gsalary+$bseniority)>6000){
  	 	$cnsss=6000*0.0448;
  	 }else{
  	 	$cnsss=($gsalary+$bseniority)*0.0448;
  	 }
  	 $amos=($gsalary+$bseniority)*0.0226;



  	 if(($gsalary+$bseniority)>6000){
  	 	$cnsse=6000*0.1698;
  	 }else{
  	 	$cnsse=($gsalary+$bseniority)*0.1698;
  	 }
  	 $amoe=($gsalary+$bseniority)*0.0411;


 if((($gsalary+$bseniority)*0.2)<2500){
 	$pf=($gsalary+$bseniority)*0.2;
 }else{
 	$pf= 2500;
 }?>								
																	
		<div class="tab-pane fade" id="kt_profile_extra" role="tabpanel">
													<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Working hours <span style="color:#989eb3;font-size: 12px;"></span></h3>
											</div>
										</div>
											<div class="kt-portlet__body">
														<table class="table table-striped-  table-hover table-checkable" id="kt_table_1" style="margin-bottom: 0;">
															<tbody>
																<tr>
																	<th style="color: #b2afc6; width: 150px;">Per hour</th>
																	<td><strong><?php echo $showpls[2]?> MAD</strong></td>
																	<th style="color: #b2afc6; width: 150px;">Per day</th>
																	<td><strong><?php echo $showpls[2]*8?> MAD</strong></td>
																	<th style="color: #b2afc6; width: 150px;">Per month</th>
																	<td><strong><?php echo $gsalary?> MAD</strong></td>
																	
																	<th><button type="button" class="btn btn-brand" data-toggle="modal" data-target=".editsalary" >Edit</button></th>
																</tr>
																
															</tbody>
														</table>
														

																				
																		
													</div>

												</div>
											</div>



											
<?php
if (isset($_POST['save'])) {
	include('controls/updinfo.php');
}
?>



<?php }}}}?>
<script>
   //   $(function () {
 //       $('#forminfo').on('submit', function (e) {
//          e.preventDefault();
 //         $.ajax({
 //           type: 'post',
 //           url: 'updinfo.php',
  //          data: $('#forminfo').serialize(),
  //          success: function () {
           
   //         }
  //        });

   //     });

  //    });
</script>