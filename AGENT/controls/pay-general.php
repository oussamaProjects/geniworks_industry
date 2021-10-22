
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
 
$gsalary=$showpls[2];

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
																	
		<div class="tab-pane fade show active" id="kt_profile_tab_pay-general" role="tabpanel">
													<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h2 class="kt-portlet__head-title">Salary <span style="color:#989eb3;font-size: 12px;">(gross)</span></h2>
											</div>
										</div>
											<div class="kt-portlet__body">
														<table class="table table-striped-  table-hover table-checkable" id="kt_table_1" style="margin-bottom: 0;">
															<tbody>
																<tr>
																	<th style="color: #b2afc6; width: 150px;">Per hour</th>
																	<td><strong><?php echo number_format((float)($showpls[2]/26/8), 2, '.', '');?> MAD</strong></td>
																	<th style="color: #b2afc6; width: 150px;">Per day</th>
																	<td><strong><?php echo number_format((float)($showpls[2]/26), 2, '.', '');?> MAD</strong></td>
																	<th style="color: #b2afc6; width: 150px;">Per month</th>
																	<td><strong><?php echo $gsalary?> MAD</strong></td>
																	
																	<th><button type="button" class="btn btn-brand" data-toggle="modal" data-target=".editsalary" >Edit</button></th>
																</tr>
																
															</tbody>
														</table>
														

																				
																		
													</div>
													<div class="kt-portlet__head"  style="border-bottom:0px;">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Seniority</h3>
											</div>
										</div>
										<div class="kt-portlet__body">
														<table class="table table-striped-  table-hover table-checkable" id="kt_table_1" style="margin-bottom: 0;">
															<tbody>
																<tr>
																	<th style="color: #b2afc6;  width: 150px;">Recruitment date </th>
																	<td><strong><?php echo $showag[29]; ?></strong></td>
																</tr>
																<tr>
																	<th style="color: #b2afc6; width: 150px;">Seniority </th>
																	<td><span style="font-weight:500;">(<?php echo round($sendiff / (60 * 60 * 24*365)); ?> years - <?php echo round($sendiff / (60 * 60 * 24)); ?> days)</span></td>
																</tr>
																<tr>
																	<th style="color: #b2afc6; width: 150px;">Bonus </th>
																	<td><strong><?php echo number_format((float)$bseniority, 2, '.', ''); ?> MAD</strong></td>
																</tr>
															</tbody>
														</table>
													</div>


													<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Salary Element</h3>
											</div>
										</div>
											<div class="kt-portlet__body">

								<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title" style="color: #00A1db;">
											Salary share
										</h3>
									</div>
								</div>
														<table class="table table-striped-  table-hover table-checkable" id="kt_table_1" style="margin-bottom: 0;">
															<tbody>
																<tr>
																	<th style="color: #b2afc6; width: 150px;">CNSS</th>
																	<td><strong><?php echo number_format((float)$cnsss, 2, '.', '');?> MAD</strong></td>
																</tr>
																<tr>

																	<th style="color: #b2afc6; width: 150px;">AMO</th>
																	<td><strong><?php echo number_format((float)$amos, 2, '.', '');?> MAD</strong></td>

																	<th></th>
																</tr>
															</tbody>
														</table>
														<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title" style="color: #00A1db;">
											Employer share
										</h3>
									</div>
								</div>
														<table class="table table-striped-  table-hover table-checkable" id="kt_table_1" style="margin-bottom: 0;">
															<tbody>
																<tr>
																	<th style="color: #b2afc6; width: 150px;">CNSS</th>
																	<td><strong><?php echo number_format((float)$cnsse, 2, '.', '');?> MAD</strong></td>
																</tr>
																<tr>
																	
																	<th style="color: #b2afc6; width: 150px;">AMO</th>
																	<td><strong><?php echo number_format((float)$amoe, 2, '.', '');?> MAD</strong></td>

																	<th></th>
																</tr>
															</tbody>
														</table>
														<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title" style="color: #00A1db;">
											Other elements
										</h3>
									</div>
								</div>
														<table class="table table-striped-  table-hover table-checkable" id="kt_table_1" style="margin-bottom: 0;">
															<tbody>
																<tr>
																	<th style="color: #b2afc6; width: 150px;">Professional fees</th>
																	
																	<td><strong><?php echo number_format((float)$pf, 2, '.', '');?> MAD</strong></td>
																	<th></th>
																	<td></td>
																	<th></th>
																	<td></td>
																	<th></th>
																</tr>
																<tr>
																	<th style="color: #b2afc6; width: 150px;">SNI</th>
																	<td><strong><?php echo number_format((float)(($gsalary+$bseniority)-($cnsss+$amos+$pf)), 2, '.', '');?> MAD</strong></td>
																	<th></th>
																	<td></td>
																	<th></th>
																	<td></td>
																	<th></th>
																</tr>
																<tr>
																	<th style="color: #b2afc6; width: 150px;">IR</th>
																	<td><strong><?php echo number_format((float)(($gsalary+$bseniority)-($cnsss+$amos+$pf)), 2, '.', '');?> MAD</strong></td>
																	<th></th>
																	<td></td>
																	<th></th>
																	<td></td>
																	<th></th>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="kt-portlet__head" style="border-bottom:0px;">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Bonuses</h3>
											</div>
										</div>

											<div class="kt-portlet__body">
												<table class="table table-striped-  table-hover table-checkable" id="kt_table_1" style="margin-bottom: 0;">
															<tbody>
<?php
$reqemb=$cdb->prepare("SELECT * FROM employee_bonus WHERE embn_employee='$idag'");
$reqemb->execute();
if ($reqemb===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resemb=$reqemb->get_result();
  	while ($showemb=$resemb->fetch_row()) {
  		$reqbns=$cdb->prepare("SELECT * FROM bonuses WHERE bns_id='$showemb[2]' AND bns_type='not submitted'AND bns_category='bonus'");
  		$reqbns->execute();
  		if ($reqbns===false) {
  			echo "We Have Problem In Data Export!";
  		}
  		else{
  			$resbns=$reqbns->get_result();
  			while ($showbns=$resbns->fetch_row()) {
 ?>
																<tr>
																	<th style="color: #b2afc6; width: 150px;"><?php echo $showbns[1]?></th>
																	<td><strong><?php echo $showemb[3];?> MAD</strong></td>
															
																	<th><button type="button" class="btn btn-brand btn-sm" data-toggle="modal" data-target=".editbonus<?php echo $showemb[0];?>">Edit</button></th>
																</tr>
<div class="modal fade editbonus<?php echo $showemb[0];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Edit <?php echo $showbns[1]?> Bonus</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<form class="kt-form kt-form--label-right">
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<h3 class="kt-section__title">Amount</h3>
													<div class="kt-section__body">
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">Old amount:</label>
															<div class="col-lg-6">
																<span class="form-control" style="border-style: none;"><strong><?php echo $showemb[3]?> MAD</strong></span>
																<span class="form-text text-muted"></span>
															</div>
														</div>
														<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12">New amount</label>
											<div class="col-lg-2 col-md-9 col-sm-12">
												<input type='number' class="form-control" id="newamount" step="10" maxlength="3" min="<?php echo $showbns[2]?>" max="<?php echo $showbns[3]?>" type="text" value="<?php echo $showemb[3]?>">
												<span class="form-text text-muted">efzfz</span>
											</div>
										</div>
									</div>
													<h3 class="kt-section__title">2. Benefit time limit:</h3>
													<div class="kt-section__body">
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">From:</label>
															<div class="col-lg-6">
																<input type="date" class="form-control">
																<span class="form-text text-muted">Please enter your account holder</span>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-lg-3 col-form-label">To:</label>
															<div class="col-lg-6">
																<input type="date" class="form-control">
																<span class="form-text text-muted">Please enter your account holder</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>


	<script type="text/javascript">
$("#newamount").keydown(false);
										</script>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-brand">Save changes</button>
																	<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">cancel</button>
																</div>
															</div>
														</div>
													</div>
<?php }}}} ?>



																<tr>
																	<th style="color: #b2afc6;"><button type="button" class="btn btn-outline-brand" data-toggle="modal" data-target=".addbonus">Add</button></th>
																	
																	<th></th>
																</tr>
															</tbody>
														</table>
											</div>
<?php
$reqbnses=$cdb->prepare("SELECT * FROM bonuses");
$reqbnses->execute();
if ($reqbnses===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resbnses=$reqbnses->get_result();

  		?>
											<div class="modal fade addbonus" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">New Bonus</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<form class="kt-form kt-form--label-right">
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<h3 class="kt-section__title">Bonus type</h3>
													<div class="kt-section__body">
														<div class="form-group row">
											<label class="col-form-label col-lg-3 col-sm-12">Select bonus</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<select class="form-control kt_selectpicker" id="getFname" onchange="admSelectCheck(this);myFunction(this.value);">
													<option value="">choose...</option>
													<?php
													  	while ($showbnses=$resbnses->fetch_row()) {
													?>
													
													<option value="<?php echo $showbnses[1];?>" id="admOption"><?php echo $showbnses[1];?></option>
												<?php }?>
												</select>
											</div>
										</div>

										<div class="form-group row" id="admDivCheck" style="display:none;">
											<label class="col-form-label col-lg-3 col-sm-12">
												<span id="myText"></span>
											</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<input type='number' class="form-control" step="10" maxlength="3" min="" max="" type="text" value="200">
												<span class="form-text text-muted">Define bonus amount</span>
											</div>
										</div>
									</div>
													
												</div>
											</div>
										</form>



<script type="text/javascript">

function myFunction(element) {
  document.getElementById("myText").innerHTML = element;
}



	function admSelectCheck(nameSelect)
{
    if(nameSelect){
        admOptionValue = document.getElementById("admOption").value;
        if(admOptionValue == nameSelect.value){
            document.getElementById("admDivCheck").style.display = "flex";
        }
        else{
            document.getElementById("admDivCheck").style.display = "none";
        }
    }
    else{
        document.getElementById("admDivCheck").style.display = "none";
    }
}

</script>


																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-success">Add</button>
																	<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
<?php }?>


											<div class="kt-portlet__head" style="border-bottom:0px;">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Allowances</h3>
											</div>
										</div>
											<div class="kt-portlet__body">
												<table class="table table-striped-  table-hover table-checkable" id="kt_table_1" style="margin-bottom: 0;">
															<tbody>
<?php
$reqemb=$cdb->prepare("SELECT * FROM employee_bonus WHERE embn_employee='$idag'");
$reqemb->execute();
if ($reqemb===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resemb=$reqemb->get_result();
  	while ($showemb=$resemb->fetch_row()) {
  		$reqbns=$cdb->prepare("SELECT * FROM bonuses WHERE bns_id='$showemb[2]' AND bns_type='not submitted'AND bns_category='allowance'");
  		$reqbns->execute();
  		if ($reqbns===false) {
  			echo "We Have Problem In Data Export!";
  		}
  		else{
  			$resbns=$reqbns->get_result();
  			while ($showbns=$resbns->fetch_row()) {
 ?>
																<tr>
																	<th style="color: #b2afc6; width: 150px;"><?php echo $showbns[1]?></th>
																	<td><strong><?php echo $showemb[3];?> MAD</strong></td>
															
																	<th><button type="button" class="btn btn-brand btn-sm" data-toggle="modal" data-target=".editbasket">Edit</button></th>
																</tr>
																
<?php }}}} ?>
																	<th style="color: #b2afc6;"><button type="button" class="btn btn-outline-brand" data-toggle="modal" data-target=".addallowance">Add</button></th>
																	
																	<th></th>
																</tr>
															</tbody>
														</table>
											</div>

												</div>
											</div>



											<div class="modal fade editsalary" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Edit salary</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<center>
        <h3>UPDATE DATA</h3>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'dadjeapp');
        $sql = "SELECT * FROM payrolls_settings WHERE wks_employee='$idag'";
        $result = $conn->query($sql);
        while ( $row=mysqli_fetch_assoc($result)) {       
           echo  'Employee :<input type="text" id="mod" value="'.$row['wks_employee'].'">';         
           echo  'Hour :<input type="text" id="ctgr" value="'.$row['wks_salary_hour'].'">';
           echo  'ID :<input type="hidden" id="id_upd" value="'.$row['wks_id'].'"><br>';
        }?> 
        <button type="submit" id="update">UPDATE</button>
        </center>
        <script>
            $(document).ready(function(){
                $("#update").click(function(){
                    var name=$("#mod").val();
                    var ctgr=$("#ctgr").val();
                    var id_upd=$("#id_upd").val();
                    $.ajax({
                        url:'update.php',
                        method:'POST',
                        data:{
                            name:name,
                            ctgr:ctgr,
                            id_upd:id_upd
                        },
                        success:function(response){
                            alert(response);
                        }
                    });
                });
            });
        </script>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-success">Save changes</button>
																	<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
													
													<div class="modal fade edittransport" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Edit transport bonus</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<p></p>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-success">Save changes</button>
																	<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
													<div class="modal fade edittransport" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Edit smear bonus</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<p></p>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-success">Save changes</button>
																	<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>




													<div class="modal fade addallowance" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Add Allowance</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<p></p>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-success">Save changes</button>
																	<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
																</div>
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




  "use strict";
// Class definition

var KTBootstrapMaxlength = function () {
    
    // Private functions
    var demos = function () {
        // minimum setup
        $('#kt_maxlength_1').maxlength({
            warningClass: "kt-badge kt-badge--warning kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--success kt-badge--rounded kt-badge--inline"
        });

        // threshold value
        $('#kt_maxlength_2').maxlength({
            threshold: 5,
            warningClass: "kt-badge kt-badge--danger kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--success kt-badge--rounded kt-badge--inline"
        });

        // always show
        $('#kt_maxlength_3').maxlength({
            alwaysShow: true,
            threshold: 5,
            warningClass: "kt-badge kt-badge--primary kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--brand kt-badge--rounded kt-badge--inline"
        });

        // custom text
        $('#kt_maxlength_4').maxlength({
            threshold: 3,
            warningClass: "kt-badge kt-badge--danger kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--success kt-badge--rounded kt-badge--inline",
            separator: ' of ',
            preText: 'You have ',
            postText: ' chars remaining.',
            validate: true
        });

        // textarea example
        $('#kt_maxlength_5').maxlength({
            threshold: 5,
            warningClass: "kt-badge kt-badge--primary kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--brand kt-badge--rounded kt-badge--inline"
        });

        // position examples
        $('#kt_maxlength_6_1').maxlength({
            alwaysShow: true,
            threshold: 5,
            placement: 'top-left',
            warningClass: "kt-badge kt-badge--brand kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--brand kt-badge--rounded kt-badge--inline"
        });

        $('#kt_maxlength_6_2').maxlength({
            alwaysShow: true,
            threshold: 5,
            placement: 'top-right',
            warningClass: "kt-badge kt-badge--success kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--brand kt-badge--rounded kt-badge--inline"
        });

        $('#kt_maxlength_6_3').maxlength({
            alwaysShow: true,
            threshold: 5,
            placement: 'bottom-left',
            warningClass: "kt-badge kt-badge--warning kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--brand kt-badge--rounded kt-badge--inline"
        });

        $('#kt_maxlength_6_4').maxlength({
            alwaysShow: true,
            threshold: 5,
            placement: 'bottom-right',
            warningClass: "kt-badge kt-badge--danger kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--brand kt-badge--rounded kt-badge--inline"
        });

        // Modal Examples

        // minimum setup
        $('#kt_maxlength_1_modal').maxlength({
            warningClass: "kt-badge kt-badge--warning kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--success kt-badge--rounded kt-badge--inline",
            appendToParent: true
        });

        // threshold value
        $('#kt_maxlength_2_modal').maxlength({
            threshold: 5,
            warningClass: "kt-badge kt-badge--danger kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--success kt-badge--rounded kt-badge--inline",
            appendToParent: true
        });

        // always show
        // textarea example
        $('#kt_maxlength_5_modal').maxlength({
            threshold: 5,
            warningClass: "kt-badge kt-badge--primary kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--brand kt-badge--rounded kt-badge--inline",
            appendToParent: true
        });

        // custom text
        $('#kt_maxlength_4_modal').maxlength({
            threshold: 3,
            warningClass: "kt-badge kt-badge--danger kt-badge--rounded kt-badge--inline",
            limitReachedClass: "kt-badge kt-badge--success kt-badge--rounded kt-badge--inline",
            appendToParent: true,
            separator: ' of ',
            preText: 'You have ',
            postText: ' chars remaining.',
            validate: true
        });
    }

    return {
        // public functions
        init: function() {
            demos();  
        }
    };
}();

jQuery(document).ready(function() {    
    KTBootstrapMaxlength.init();
});
</script>

