<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php

require('zdfzfzef/de5.php');
$showr=$cdb->prepare("SELECT * FROM work_materials WHERE wmt_owner='apm1'");
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

<div id="mapm1">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Material-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrowm=$res->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrowm[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrowm[1]";?></td>
                                                <td><?php echo  "$showrowm[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm[7]";?></td>
                                                
                                                <td><?php echo  "$showrowm[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input  type="number" id="actuala" id="actualapm1" style=" text-align:center; width:15%;"/> Actual <span><?php echo "$showrowm[6]";?></span></td>
                                                <td><span id="totalt"><?php echo ($showrowm[7]-$showrowm[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrowm[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrowm[1]";?></td>
                                                <td><?php echo  "$showrowm[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualapm1" type="number" style=" width:15%;"/> Actual <span><?php echo  "$showrowm[6]";?></span></td>
                                                <td><span id="totalt"><?php echo ($showrowm[7]-$showrowm[6]);?></span></td>
                                            </tr>

                                         

                                            <?php } ?>


                                          <script>
	var perTickett = <?php echo  (json_decode($showrowm[6]));?>;

var $subTotalt = $('#totalt');

$('#actualapm1').on('input', function() {
  if (!$(this).val().trim().length) return;
  var totalt = (<?php echo ($showrowm[7]-$showrowm[6]);?> - $(this).val());
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
$showr2=$cdb->prepare("SELECT * FROM work_materials WHERE wmt_owner='apm2'");
$showr2->execute();
if ($showr2===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res2=$showr2->get_result();

?>
 <div id="mapm2">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Material-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrowm2=$res2->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrowm2[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrowm2[1]";?></td>
                                                <td><?php echo  "$showrowm2[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm2[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm2[7]";?></td>
                                                
                                                <td><?php echo  "$showrowm2[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input  type="number" id="actualapm2" style="text-align:center; width:15%;"/> Actual <span><?php echo "$showrowm2[6]";?></span></td>
                                                <td><span id="total2"><?php echo ($showrowm2[7]-$showrowm2[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrowm2[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrowm2[1]";?></td>
                                                <td><?php echo  "$showrowm2[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm2[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm2[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualapm2" type="number" style="  width:15%;"/> Actual <span><?php echo  "$showrowm2[6]";?></span></td>
                                                <td><span id="total2"><?php echo ($showrowm2[7]-$showrowm2[6]);?></span></td>
                                            </tr>

                                         

                                            <?php } ?>


                                          <script>
	var perTicket2 = <?php echo  (json_decode($showrowm2[6]));?>;

var $subTotal2 = $('#total2');

$('#actualapm2').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total2 = (<?php echo ($showrowm2[7]-$showrowm2[6]);?> - $(this).val());
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
$showr3=$cdb->prepare("SELECT * FROM work_materials WHERE wmt_owner='eurogate'");
$showr3->execute();
if ($showr3===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res3=$showr3->get_result();

?>
  <div id="meurogate">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Material-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrowm3=$res3->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrowm3[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrowm3[1]";?></td>
                                                <td><?php echo  "$showrowm3[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm3[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm3[7]";?></td>
                                                
                                                <td><?php echo  "$showrowm3[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill  <input  type="number" id="actualeg"  style="text-align:center; width:15%;"/> Actual <span><?php echo "$showrowm3[6]";?></span></td>
                                                <td><span id="total3"><?php echo ($showrowm3[7]-$showrowm3[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrowm3[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrowm3[1]";?></td>
                                                <td><?php echo  "$showrowm3[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm3[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm3[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualeg" type="number" style="width:15%;"/> Actual <span><?php echo  "$showrowm3[6]";?></span></td>
                                                <td><span id="total3"><?php echo ($showrowm3[7]-$showrowm3[6]);?></span></td>
                                            </tr>

                                         

                                            <?php } ?>



                                          <script>
var perTicket3 = <?php echo  (json_decode($showrowm3[6]));?>;

var $subTotal3 = $('#total3');

$('#actualeg').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total3 = (<?php echo ($showrowm3[7]-$showrowm3[6]);?> - $(this).val());
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
$showr4=$cdb->prepare("SELECT * FROM work_materials WHERE wmt_owner='de'");
$showr4->execute();
if ($showr4===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res4=$showr4->get_result();

?>
  <div id="mde">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Material-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrowm4=$res4->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrowm4[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrowm4[1]";?></td>
                                                <td><?php echo  "$showrowm4[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm4[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm4[7]";?></td>
                                                
                                                <td><?php echo  "$showrowm4[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill  <input  type="number"  id="actualde"  style=" text-align:center; width:15%;"/> Actual <span><?php echo "$showrowm4[6]";?></span></td>
                                                <td><span id="total4"><?php echo ($showrowm4[7]-$showrowm4[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrowm4[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrowm4[1]";?></td>
                                                <td><?php echo  "$showrowm4[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm4[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm4[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualde" type="number" style="  width:15%;"/> Actual <span><?php echo  "$showrowm4[6]";?></span></td>
                                                <td><span id="total4"><?php echo ($showrowm4[7]-$showrowm4[6]);?></span></td>
                                            </tr>

                                         

                                            <?php } ?>


                                          <script>
	var perTicket4 = <?php echo  (json_decode($showrowm4[6]));?>;

var $subTotal4 = $('#total4');

$('#actualde').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total4 = (<?php echo ($showrowm4[7]-$showrowm4[6]);?> - $(this).val());
  $subTotal4.text(total4);

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
$showr5=$cdb->prepare("SELECT * FROM work_materials WHERE wmt_owner='tc3'");
$showr5->execute();
if ($showr5===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res5=$showr5->get_result();

?>
  <div id="mtc3">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Material-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrowm5=$res5->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrowm5[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrowm5[1]";?></td>
                                                <td><?php echo  "$showrowm5[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm5[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm5[7]";?></td>
                                                
                                                <td><?php echo  "$showrowm5[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill  <input  type="number"  id="actualtc3" style=" text-align:center; width:15%;"/> Actual <span><?php echo "$showrowm5[6]";?></span></td>
                                                <td><span id="total5"><?php echo ($showrowm5[7]-$showrowm5[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrowm5[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrowm5[1]";?></td>
                                                <td><?php echo  "$showrowm5[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm5[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm5[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualtc3" type="number" style="width:15%;"/> Actual <span><?php echo  "$showrowm5[6]";?></span></td>
                                                <td><span id="total5"><?php echo ($showrowm5[7]-$showrowm5[6]);?></span></td>
                                            </tr>

                                         

                                            <?php } ?>

                                          <script>
	var perTicket5 = <?php echo  (json_decode($showrowm5[6]));?>;

var $subTotal5 = $('#total5');

$('#actualtc3').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total5 = (<?php echo ($showrowm5[7]-$showrowm5[6]);?> - $(this).val());
  $subTotal5.text(total5);

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
$showr6=$cdb->prepare("SELECT * FROM work_materials WHERE wmt_owner='bmci'");
$showr6->execute();
if ($showr6===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $res6=$showr6->get_result();

?>
  <div id="mbmci">
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Material-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrowm6=$res6->fetch_row()) {?>
                                          


                                          <?php  
                                            if ($showrowm6[6]<5) {
                                          ?>


                                            <tr>
                                                
                                                <td><?php echo  "$showrowm6[1]";?></td>
                                                <td><?php echo  "$showrowm6[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm6[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm6[7]";?></td>
                                                
                                                <td><?php echo  "$showrowm6[6]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill  <input  type="number" id="actualbmci" style="text-align:center; width:15%;"/> Actual <span><?php echo "$showrowm6[6]";?></span></td>
                                                <td><span id="total6"><?php echo ($showrowm6[7]-$showrowm6[6]);?></span></td>
                                            </tr>




                                            <?php  }
                                              if ($showrowm6[6]>=5) {
                                          ?>
                                            <tr>
                                            
                                                <td><?php echo  "$showrowm6[1]";?></td>
                                                <td><?php echo  "$showrowm6[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/materials/<?php echo $showrowm6[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrowm6[7]";?></td>
                                                
                                                <td  style="text-align:center; "> Fill <input id="actualbmci" type="number" style=" width:15%;"/> Actual <span><?php echo  "$showrowm6[6]";?></span></td>
                                                <td><span id="total6"><?php echo ($showrowm6[7]-$showrowm6[6]);?></span></td>
                                            </tr>

                                         

                                            <?php } ?>
                                          <script>
	var perTicket6 = <?php echo  (json_decode($showrowm6[6]));?>;

var $subTotal6 = $('#total6');

$('#actualbmci').on('input', function() {
  if (!$(this).val().trim().length) return;
  var total6 = (<?php echo ($showrowm6[7]-$showrowm6[6]);?> - $(this).val());
  $subTotal6.text(total6);

})
	</script>



                                            
                                            <?php  } ?>
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