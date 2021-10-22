<?php

require('zdfzfzef/de5.php');
$showr=$cdb->prepare('SELECT * FROM work_ape');
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
    width: 40%;
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
<table id="demo-foo-addrow" class="responsive-table table  m-t-30 table-hover" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">APE-ID</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Picture</th>
                                                <th style="text-align: center;">Standard</th>
                                                
                                                <th style="text-align: center;">Actual</th>
                                                <th style="text-align: center;">Gap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          while ($showrow=$res->fetch_row()) {
                                            
                                            if ($showrow[6]<5) {
                                          ?>
                                            <tr>
                                                
                                                <td><?php echo  "$showrow[1]";?></td>
                                                <td><?php echo  "$showrow[2]";?></td>
                                                <td>
                                                    <div class="el-card-avatar el-overlay-1"> <img width="50" src="../../imgs/tools/<?php echo $showrow[3];?>" alt="user"> 
                                                    </div>
                                                
                                                </td>
                                                <td><?php echo  "$showrow[6]";?></td>
                                                
                                                <td><select name="" >
                                                	<option value="">1</option>
                                                	<option value="">2</option>
                                                	<option value="">3</option>
                                                	<option value="">4</option>
                                                	<option value="">5</option>
                                                </select></td>
                                                <td><?php echo  "$showrow[6]";?></td>
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
                                                <td><?php echo  "$showrow[6]";?></td>
                                                
                                                <td><select name="" >
                                                	<option value="">1</option>
                                                	<option value="">2</option>
                                                	<option value="">3</option>
                                                	<option value="">4</option>
                                                	<option value="">5</option>
                                                	</select></td>
                                                <td><?php echo  "$showrow[6]";?></td>
                                            </tr>

                                         

                                            <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>

<?php
}

?>
<script>




function holaa(x) {
               



                if(x == 115) {

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
                if(x == 125)  {
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
                if(x == 135)  {
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
                if(x == 145)  {
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
                if(x == 155)  {
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