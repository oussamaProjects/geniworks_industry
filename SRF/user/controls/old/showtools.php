<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />
</head>
<body onload="holaa(11);holao(12);">



<?php

require('zdfzfzef/de5.php');
$showr=$cdb->prepare("SELECT * FROM work_tools_apm1 WHERE wtl_owner='apm1'");
$showr->execute();
if ($showr===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res=$showr->get_result();
?>
<style>
pre {
  text-align: left;
  background-color: #fff;
  min-width: 240px;
  max-width: 400px;
  margin: 0 auto 40px;
  padding: 8px 15px;
  border-radius: 6px;
  box-shadow: 0 0 3px rgba(0,0,0,.5) inset;
  overflow: auto;
}



/* Responsive Table Style */

.responsive-table th {
  text-align: center;
  color: #2EAFEA;
}

@media(max-width: 480px) {
  .responsive-table {
    width: 100%;
  }
  .responsive-table thead {
    display: none;
  }
  .responsive-table tbody tr:nth-of-type(even) {
    background-color: #eee;
  }
  .responsive-table tbody td {
    display: block;
  }
  .responsive-table tbody td:before {
    content: attr(data-table);
    display: block;
    float: left;
    width: 100%;
    margin-right: 10px;
    padding-right: 10px;
    font-weight: 700;
    color: #2EAFEA;
    border-right: 1px solid #ccc;
  }
  .responsive-table tbody td:after {
    content: '';
    display: block;
    clear: both;
  }
}
</style>    

<div id="apm1">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">tool-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrow=$res->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrow[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrow[1]";?></td>
                                                <td><?php echo  "$showrow[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow[7]";?></td>
                                                
                                                <td><?php echo  "$showrow[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input  type="number" id="actuala" id="actualapm1" style=" text-align:center; width:15%;"/> Actual <span><?php echo "$showrow[6]";?></span></td>
                                                <td><span id="totalt"><?php echo ($showrow[7]-$showrow[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrow[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrow[1]";?></td>
                                                <td><?php echo  "$showrow[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualapm1" type="number" style=" width:15%;"/> Actual <span><?php echo  "$showrow[6]";?></span></td>
                                                <td><span id="totalt"><?php echo ($showrow[7]-$showrow[6]);?></span></td>
                                            </tr>

                                            <?php } ?>


                                          <script>
	var perTickett = <?php echo  (json_decode($showrow[6]));?>;

var $subTotalt = $('#totalt');

$('#actualapm1').on('input', function() {
  if (!$(this).val().trim().length) return;
  var totalt = (<?php echo ($showrow[7]-$showrow[6]);?> - $(this).val());
  $subTotalt.text(totalt);

})

	</script>

                                            
                                            <?php } ?>
                                        </tbody>
                                    </table>
   
  
 

<?php
}

?>


  </div>


<?php

require('zdfzfzef/de5.php');
$showr2=$cdb->prepare("SELECT * FROM work_tools WHERE wtl_owner='12'");
$showr2->execute();
if ($showr2===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res2=$showr2->get_result();
?>
 <div id="apm2">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">tool-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrow2=$res2->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrow2[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrow2[1]";?></td>
                                                <td><?php echo  "$showrow2[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow2[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow2[7]";?></td>
                                                
                                                <td><?php echo  "$showrow2[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input  type="number" id="actualapm2" style="text-align:center; width:15%;"/> Actual <span><?php echo "$showrow2[6]";?></span></td>
                                                <td><span id="total2"><?php echo ($showrow2[7]-$showrow2[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrow2[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrow2[1]";?></td>
                                                <td><?php echo  "$showrow2[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow2[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow2[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualapm2" type="number" style="  width:15%;"/> Actual <span><?php echo  "$showrow2[6]";?></span></td>
                                                <td><span id="total2"><?php echo ($showrow2[7]-$showrow2[6]);?></span></td>
                                            </tr>

                                            <?php } ?>

                                          <script>
	var perTicket2 = <?php echo  (json_decode($showrow2[6]));?>;

var $subTotal2 = $('#total2');

$('#actualapm2').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total2 = (<?php echo ($showrow2[7]-$showrow2[6]);?> - $(this).val());
  $subTotal2.text(total2);

})

	</script>

                                            
                                            <?php } ?>
                                        </tbody>
                                    </table>
   
  
 

<?php
}

?>


  </div>





<?php

require('zdfzfzef/de5.php');
$showr3=$cdb->prepare("SELECT * FROM work_tools WHERE wtl_owner='eurogate'");
$showr3->execute();
if ($showr3===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res3=$showr3->get_result();

?>
  <div id="eurogate">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">tool-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrow3=$res3->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrow3[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrow3[1]";?></td>
                                                <td><?php echo  "$showrow3[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow3[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow3[7]";?></td>
                                                
                                                <td><?php echo  "$showrow3[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill  <input  type="number" id="actualeg"  style="text-align:center; width:15%;"/> Actual <span><?php echo "$showrow3[6]";?></span></td>
                                                <td><span id="total3"><?php echo ($showrow3[7]-$showrow3[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrow3[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrow3[1]";?></td>
                                                <td><?php echo  "$showrow3[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow3[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow3[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualeg" type="number" style="width:15%;"/> Actual <span><?php echo  "$showrow3[6]";?></span></td>
                                                <td><span id="total3"><?php echo ($showrow3[7]-$showrow3[6]);?></span></td>
                                            </tr>

                                         

                                            <?php } ?>



                                          <script>
var perTicket3 = <?php echo  (json_decode($showrow3[6]));?>;

var $subTotal3 = $('#total3');

$('#actualeg').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total3 = (<?php echo ($showrow3[7]-$showrow3[6]);?> - $(this).val());
  $subTotal3.text(total3);

})
	</script>
                                            
                                            <?php  } ?>
                                        </tbody>
                                    </table>
   
  
 

<?php
}

?>


  </div>


<?php

require('zdfzfzef/de5.php');
$showr4=$cdb->prepare("SELECT * FROM work_tools WHERE wtl_owner='de'");
$showr4->execute();
if ($showr4===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res4=$showr4->get_result();

?>
  <div id="de">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">tool-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrow4=$res4->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrow4[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrow4[1]";?></td>
                                                <td><?php echo  "$showrow4[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow4[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow4[7]";?></td>
                                                
                                                <td><?php echo  "$showrow4[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill  <input  type="number"  id="actualde"  style=" text-align:center; width:15%;"/> Actual <span><?php echo "$showrow4[6]";?></span></td>
                                                <td><span id="total4"><?php echo ($showrow4[7]-$showrow4[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrow4[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrow4[1]";?></td>
                                                <td><?php echo  "$showrow4[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow4[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow4[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualde" type="number" style="  width:15%;"/> Actual <span><?php echo  "$showrow4[6]";?></span></td>
                                                <td><span id="total4"><?php echo ($showrow4[7]-$showrow4[6]);?></span></td>
                                            </tr>

                                         

                                            <?php } ?>


                                          <script>
	var perTicket4 = <?php echo  (json_decode($showrow4[6]));?>;

var $subTotal4 = $('#total4');

$('#actualde').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total4 = (<?php echo ($showrow4[7]-$showrow4[6]);?> - $(this).val());
  $subTotal4.text(total4);

})
	</script>

                                            
                                            <?php break; } ?>
                                        </tbody>
                                    </table>
   
  
 

<?php
}

?>


  </div>



<?php

require('zdfzfzef/de5.php');
$showr5=$cdb->prepare("SELECT * FROM work_tools WHERE wtl_owner='tc3'");
$showr5->execute();
if ($showr5===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res5=$showr5->get_result();

?>
  <div id="tc3">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">tool-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrow5=$res5->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrow5[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrow5[1]";?></td>
                                                <td><?php echo  "$showrow5[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow5[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow5[7]";?></td>
                                                
                                                <td><?php echo  "$showrow5[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill  <input  type="number"  id="actualtc3" style=" text-align:center; width:15%;"/> Actual <span><?php echo "$showrow5[6]";?></span></td>
                                                <td><span id="total5"><?php echo ($showrow5[7]-$showrow5[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrow5[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrow5[1]";?></td>
                                                <td><?php echo  "$showrow5[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow5[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow5[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualtc3" type="number" style="width:15%;"/> Actual <span><?php echo  "$showrow5[6]";?></span></td>
                                                <td><span id="total5"><?php echo ($showrow5[7]-$showrow5[6]);?></span></td>
                                            </tr>

                                         

                                            <?php } ?>

                                          <script>
	var perTicket5 = <?php echo  (json_decode($showrow5[6]));?>;

var $subTotal5 = $('#total5');

$('#actualtc3').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total5 = (<?php echo ($showrow5[7]-$showrow5[6]);?> - $(this).val());
  $subTotal5.text(total5);

})
	</script>


                                            
                                            <?php  break; } ?>
                                        </tbody>
                                    </table>
   
  
 

<?php
}

?>


  </div>



<?php

require('zdfzfzef/de5.php');
$showr6=$cdb->prepare("SELECT * FROM work_tools WHERE wtl_owner='bmci'");
$showr6->execute();
if ($showr6===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res6=$showr6->get_result();

?>
  <div id="bmci">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">tool-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrow6=$res6->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrow6[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrow6[1]";?></td>
                                                <td><?php echo  "$showrow6[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow6[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow6[7]";?></td>
                                                
                                                <td><?php echo  "$showrow6[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill  <input  type="number" id="actualbmci" style="text-align:center; width:15%;"/> Actual <span><?php echo "$showrow6[6]";?></span></td>
                                                <td><span id="total6"><?php echo ($showrow6[7]-$showrow6[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrow6[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrow6[1]";?></td>
                                                <td><?php echo  "$showrow6[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow6[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow6[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualbmci" type="number" style=" width:%;"/> Actual <span><?php echo  "$showrow6[6]";?></span></td>
                                                <td><span id="total6"><?php echo ($showrow6[7]-$showrow6[6]);?></span></td>
                                            </tr>

                                         

                                            <?php } ?>
                                          <script>
                                          	
	var perTicket6 = <?php echo  (json_decode($showrow6[6]));?>;

var $subTotal6 = $('#total6');

$('#actualbmci').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total6 = (<?php echo ($showrow6[7]-$showrow6[6]);?> - $(this).val());
  $subTotal6.text(total6);

})
	</script>



                                            
                                            <?php break; } ?>
                                        </tbody>
                                    </table>
   
  
 

<?php
}

?>


  </div>



<script>
  $(function() {
  $.fn.lazyResponsiveTable = function( options ) {
    var settings = $.extend({
      thead: 'thead',
      tbody: 'tbody',
    }, options);
    
    var $table = $(this);
    var $thead = $table.find(settings.thead);
    var $tbody = $table.find(settings.tbody);
        
    $thead.find('th').each( function() {
      var data = $(this).text();
      if( ! $(this).attr('data-table')) {
        $(this).attr('data-table',data);
      }
    });
    
    $tbody.find('td').each(function() {
      var index = $(this).index();
      var data = $thead.find('th:eq('+index+')').attr('data-table');
      $(this).attr('data-table',data);
    });
  };
  
  $('.responsive-table').lazyResponsiveTable();
});
</script>
<script>
					

					document.getElementById("tools").style.visibility="visible";
                    document.getElementById("materials").style.visibility="hidden";
                    document.getElementById("chemicals").style.visibility="hidden";
                    document.getElementById("ppe").style.visibility="hidden";
                    document.getElementById("ape").style.visibility="hidden";



                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("mapm1").style.visibility="hidden";
                    document.getElementById("capm1").style.visibility="hidden";

                    document.getElementById("papm1").style.visibility="hidden";
                    document.getElementById("aapm1").style.visibility="hidden";
                    document.getElementById("capm2").style.visibility="hidden";
                    document.getElementById("asapm2").style.visibility="hidden";
                    document.getElementById("papm2").style.visibility="hidden";

                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("meurogate").style.visibility="hidden";
                    document.getElementById("ceurogate").style.visibility="hidden";

                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("mde").style.visibility="hidden";
                    document.getElementById("cde").style.visibility="hidden";

                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("mtc3").style.visibility="hidden";
                    document.getElementById("ctc3").style.visibility="hidden";

                    document.getElementById("bmci").style.visibility="hidden";
                    document.getElementById("mbmci").style.visibility="hidden";
                    document.getElementById("cbmci").style.visibility="hidden";
                    
                    document.getElementById("apm1").style.position = 'relative';
                    document.getElementById("mapm1").style.position = 'absolute';
                    document.getElementById("capm1").style.position = 'absolute';

                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("mapm2").style.position = 'absolute';
                    document.getElementById("capm2").style.position = 'absolute';

                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("meurogate").style.position = 'absolute';
                    document.getElementById("ceurogate").style.position = 'absolute';

                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("mde").style.position = 'absolute';
                    document.getElementById("cde").style.position = 'absolute';

                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("mtc3").style.position = 'absolute';
                    document.getElementById("ctc3").style.position = 'absolute';

                    document.getElementById("bmci").style.position = 'absolute';
                    document.getElementById("mbmci").style.position = 'absolute';
                    document.getElementById("cbmci").style.position = 'absolute';



function holaa(x) {
               



                if(x == 11) {

                    document.getElementById("tools").style.visibility="visible";
                    document.getElementById("materials").style.visibility="hidden";
                    document.getElementById("chemicals").style.visibility="hidden";
                    document.getElementById("ppe").style.visibility="hidden";
                    document.getElementById("ape").style.visibility="hidden";

                    
                    document.getElementById("ape").style.position = 'absolute';
                    document.getElementById("ppe").style.position = 'absolute';
                    document.getElementById("chemicals").style.position = 'absolute';
                    document.getElementById("materials").style.position = 'absolute';
                    document.getElementById("tools").style.position = 'relative';

                    document.getElementById("chemicals").style.display = 'none';
                    document.getElementById("ppe").style.display = 'none';
                    document.getElementById("ape").style.display = 'none';
                    document.getElementById("materials").style.display = 'none';
                    document.getElementById("tools").style.display = 'block';
                }
                if(x == 12)  {
                    document.getElementById("tools").style.visibility="hidden";
                    document.getElementById("materials").style.visibility="visible";
                    document.getElementById("chemicals").style.visibility="hidden";
                    document.getElementById("ppe").style.visibility="hidden";
                    document.getElementById("ape").style.visibility="hidden";
                    
                   
                    document.getElementById("ape").style.position = 'absolute';
                    document.getElementById("ppe").style.position = 'absolute';
                    document.getElementById("chemicals").style.position = 'absolute';
                    document.getElementById("materials").style.position = 'relative';
                    document.getElementById("tools").style.position = 'absolute';

                    document.getElementById("chemicals").style.display = 'none';
                    document.getElementById("ppe").style.display = 'none';
                    document.getElementById("ape").style.display = 'none';
                    document.getElementById("materials").style.display = 'block';
                    document.getElementById("tools").style.display = 'none';
                }
                if(x == 13)  {
                    document.getElementById("tools").style.visibility="hidden";
                    document.getElementById("materials").style.visibility="hidden";
                    document.getElementById("chemicals").style.visibility="visible";
                    document.getElementById("ppe").style.visibility="hidden";
                    document.getElementById("ape").style.visibility="hidden";
                    
                   
                    document.getElementById("ape").style.position = 'absolute';
                    document.getElementById("ppe").style.position = 'absolute';
                    document.getElementById("chemicals").style.position = 'relative';
                    document.getElementById("materials").style.position = 'absolute';
                    document.getElementById("tools").style.position = 'absolute';

                    document.getElementById("chemicals").style.display = 'block';
                    document.getElementById("ppe").style.display = 'none';
                    document.getElementById("ape").style.display = 'none';
                    document.getElementById("materials").style.display = 'none';
                    document.getElementById("tools").style.display = 'none';
                }
                if(x == 14)  {
                    document.getElementById("tools").style.visibility="hidden";
                    document.getElementById("materials").style.visibility="hidden";
                    document.getElementById("chemicals").style.visibility="hidden";
                    document.getElementById("ppe").style.visibility="visible";
                    document.getElementById("ape").style.visibility="hidden";
                    
                   
                    document.getElementById("ape").style.position = 'absolute';
                    document.getElementById("ppe").style.position = 'relative';
                    document.getElementById("chemicals").style.position = 'absolute';
                    document.getElementById("materials").style.position = 'absolute';
                    document.getElementById("tools").style.position = 'absolute';

                    document.getElementById("chemicals").style.display = 'none';
                    document.getElementById("ppe").style.display = 'block';
                    document.getElementById("ape").style.display = 'none';
                    document.getElementById("materials").style.display = 'none';
                    document.getElementById("tools").style.display = 'none';
                }
                if(x == 15)  {
                    document.getElementById("tools").style.visibility="hidden";
                    document.getElementById("materials").style.visibility="hidden";
                    document.getElementById("chemicals").style.visibility="hidden";
                    document.getElementById("ppe").style.visibility="hidden";
                    document.getElementById("ape").style.visibility="visible";
                   
                    document.getElementById("ape").style.position = 'relative';
                    document.getElementById("ppe").style.position = 'absolute';
                    document.getElementById("chemicals").style.position = 'absolute';
                    document.getElementById("materials").style.position = 'absolute';
                    document.getElementById("tools").style.position = 'absolute';

                    document.getElementById("chemicals").style.display = 'none';
                    document.getElementById("ppe").style.display = 'none';
                    document.getElementById("ape").style.display = 'block';
                    document.getElementById("materials").style.display = 'none';
                    document.getElementById("tools").style.display = 'none';
                }
            }

            function holao(x) {
               



                if(x == 21) {

                    document.getElementById("apm1").style.visibility="visible";
                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("mapm1").style.visibility="visible";
                    document.getElementById("mapm2").style.visibility="hidden";
                    document.getElementById("capm1").style.visibility="visible";
                    document.getElementById("capm2").style.visibility="hidden";
                    document.getElementById("papm1").style.visibility="visible";
                    document.getElementById("papm2").style.visibility="hidden";
                    document.getElementById("aapm1").style.visibility="visible";
                    document.getElementById("aapm2").style.visibility="hidden";

                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("meurogate").style.visibility="hidden";
                    document.getElementById("ceurogate").style.visibility="hidden";
                    document.getElementById("peurogate").style.visibility="hidden";
                    document.getElementById("aeurogate").style.visibility="hidden";

                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("mde").style.visibility="hidden";
                    document.getElementById("cde").style.visibility="hidden";
                    document.getElementById("pde").style.visibility="hidden";
                    document.getElementById("ade").style.visibility="hidden";

                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("mtc3").style.visibility="hidden";
                    document.getElementById("ctc3").style.visibility="hidden";
                    document.getElementById("ptc3").style.visibility="hidden";
                    document.getElementById("atc3").style.visibility="hidden";

                    document.getElementById("bmci").style.visibility="hidden";
                    document.getElementById("mbmci").style.visibility="hidden";
                    document.getElementById("cbmci").style.visibility="hidden";
                    document.getElementById("pbmci").style.visibility="hidden";
                    document.getElementById("abmci").style.visibility="hidden";

                    
                    document.getElementById("apm1").style.position = 'relative';
                    document.getElementById("mapm1").style.position = 'relative';
                    document.getElementById("capm1").style.position = 'relative';
                    document.getElementById("papm1").style.position = 'relative';
                    document.getElementById("aapm1").style.position = 'relative';

                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("mapm2").style.position = 'absolute';
                    document.getElementById("capm2").style.position = 'absolute';
                    document.getElementById("papm2").style.position = 'absolute';
                    document.getElementById("aapm2").style.position = 'absolute';

                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("meurogate").style.position = 'absolute';
                    document.getElementById("ceurogate").style.position = 'absolute';
                    document.getElementById("peurogate").style.position = 'absolute';
                    document.getElementById("aeurogate").style.position = 'absolute';

                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("mde").style.position = 'absolute';
                    document.getElementById("cde").style.position = 'absolute';
                    document.getElementById("pde").style.position = 'absolute';
                    document.getElementById("ade").style.position = 'absolute';

                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("mtc3").style.position = 'absolute';
                    document.getElementById("ctc3").style.position = 'absolute';
                    document.getElementById("ptc3").style.position = 'absolute';
                    document.getElementById("atc3").style.position = 'absolute';

                    document.getElementById("bmci").style.position = 'absolute';
                    document.getElementById("mbmci").style.position = 'absolute';
                    document.getElementById("cbmci").style.position = 'absolute';
                    document.getElementById("pbmci").style.position = 'absolute';
                    document.getElementById("abmci").style.position = 'absolute';

                    document.getElementById("apm1").style.display = 'block';
                    document.getElementById("mapm1").style.display = 'block';
                    document.getElementById("capm1").style.display = 'block';
                    document.getElementById("papm1").style.display = 'block';
                    document.getElementById("aapm1").style.display = 'block';

                    document.getElementById("apm2").style.display = 'none';
                    document.getElementById("mapm2").style.display = 'none';
                    document.getElementById("capm2").style.display = 'none';
                    document.getElementById("papm2").style.display = 'none';
                    document.getElementById("aapm2").style.display = 'none';

                    document.getElementById("eurogate").style.display = 'none'
                    document.getElementById("meurogate").style.display = 'none'
                    document.getElementById("ceurogate").style.display = 'none'
                    document.getElementById("peurogate").style.display = 'none'
                    document.getElementById("aeurogate").style.display = 'none';

                    document.getElementById("de").style.display = 'none';
                    document.getElementById("mde").style.display = 'none';
                    document.getElementById("cde").style.display = 'none';
                    document.getElementById("pde").style.display = 'none';
                    document.getElementById("ade").style.display = 'none';

                    document.getElementById("tc3").style.display = 'none';
                    document.getElementById("mtc3").style.display = 'none';
                    document.getElementById("ctc3").style.display = 'none';
                    document.getElementById("ptc3").style.display = 'none';
                    document.getElementById("atc3").style.display = 'none';

                    document.getElementById("bmci").style.position = 'none';
                    document.getElementById("mbmci").style.position = 'none';
                    document.getElementById("cbmci").style.position = 'none';
                    document.getElementById("pbmci").style.position = 'none';
                    document.getElementById("abmci").style.position = 'none';
                }
                if(x == 22)  {
                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("apm2").style.visibility="visible";
                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("bmci").style.visibility="hidden";

                    
                    document.getElementById("apm1").style.position = 'absolute';
                    document.getElementById("apm2").style.position = 'relative';
                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("bmci").style.position = 'absolute';

                    document.getElementById("apm1").style.display = 'none';
                    document.getElementById("apm2").style.display = 'block';
                    document.getElementById("eurogate").style.display = 'none';
                    document.getElementById("de").style.display = 'none';
                    document.getElementById("tc3").style.display = 'none';
                    document.getElementById("bmci").style.position = 'none';
                }
                if(x == 23)  {
                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("eurogate").style.visibility="visible";
                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("bmci").style.visibility="hidden";

                    
                    document.getElementById("apm1").style.position = 'absolute';
                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("eurogate").style.position = 'relative';
                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("bmci").style.position = 'absolute';

                    document.getElementById("apm1").style.display = 'none';
                    document.getElementById("apm2").style.display = 'none';
                    document.getElementById("eurogate").style.display = 'block';
                    document.getElementById("de").style.display = 'none';
                    document.getElementById("tc3").style.display = 'none';
                    document.getElementById("bmci").style.position = 'none';
                }
                if(x == 24)  {
                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("de").style.visibility="visible";
                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("bmci").style.visibility="hidden";

                    
                    document.getElementById("apm1").style.position = 'absolute';
                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("de").style.position = 'relative';
                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("bmci").style.position = 'absolute';

                    document.getElementById("apm1").style.display = 'none';
                    document.getElementById("apm2").style.display = 'none';
                    document.getElementById("eurogate").style.display = 'none';
                    document.getElementById("de").style.display = 'block';
                    document.getElementById("tc3").style.display = 'none';
                    document.getElementById("bmci").style.position = 'none';
                }
                if(x == 25)  {
                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("tc3").style.visibility="visible";
                    document.getElementById("bmci").style.visibility="hidden";

                    
                    document.getElementById("apm1").style.position = 'absolute';
                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("tc3").style.position = 'relative';
                    document.getElementById("bmci").style.position = 'absolute';

                    document.getElementById("apm1").style.display = 'none';
                    document.getElementById("apm2").style.display = 'none';
                    document.getElementById("eurogate").style.display = 'none';
                    document.getElementById("de").style.display = 'none';
                    document.getElementById("tc3").style.display = 'block';
                    document.getElementById("bmci").style.position = 'none';
                }

                if(x == 26)  {
                    document.getElementById("apm1").style.visibility="hidden";
                    document.getElementById("apm2").style.visibility="hidden";
                    document.getElementById("eurogate").style.visibility="hidden";
                    document.getElementById("de").style.visibility="hidden";
                    document.getElementById("tc3").style.visibility="hidden";
                    document.getElementById("bmci").style.visibility="visible";

                    
                    document.getElementById("apm1").style.position = 'absolute';
                    document.getElementById("apm2").style.position = 'absolute';
                    document.getElementById("eurogate").style.position = 'absolute';
                    document.getElementById("de").style.position = 'absolute';
                    document.getElementById("tc3").style.position = 'absolute';
                    document.getElementById("bmci").style.position = 'relative';

                    document.getElementById("apm1").style.display = 'none';
                    document.getElementById("apm2").style.display = 'none';
                    document.getElementById("eurogate").style.display = 'none';
                    document.getElementById("de").style.display = 'none';
                    document.getElementById("tc3").style.display = 'none';
                    document.getElementById("bmci").style.position = 'block';
                }
            }
     </script>	
     <script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="assets/js/demo1/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
</body>
</html>