<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php

require('zdfzfzef/de5.php');
$showr=$cdb->prepare("SELECT * FROM work_materials WHERE wmt_owner='41'");
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