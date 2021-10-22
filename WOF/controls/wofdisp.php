
                    <div class="container-fluid">
                           <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>All WOFs</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
<?php 
require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');

$reqss=$cdb->prepare("SELECT * FROM wof ORDER BY w_date_time DESC");
$reqss->execute();
if ($reqss===false) {
    echo"failed display ".mysqli_error();
}else{
    $resss=$reqss->get_result();
?>
                                            <table id="export-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Site</th>
                                                        <th>Asset</th>
                                                        <th>Owner</th>
                                                        <th>Reciever</th>
                                                        <th><span style="width:100px;">Status</span></th>
                                                        
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    while($rw=$resss->fetch_row()){
                                                      if($rw[13] == "requested"){
                                                        ?>
                                                        <tr>
                                                          <td><?php echo $rw[3];?></td>
                                                          <td><?php echo $rw[2];?></td>
                                                          <td><?php echo $rw[7];?></td>
                                                          <td><?php echo $rw[4];?></td>
                                                          <td><?php echo $rw[5];?></td>
                                                          <td><span style="width:100%;"><span class="badge-text badge-text-small info">requested</span></span></td>
                                                          
                                                          <td class="td-actions">
                                                            <a href="?edit=<?php echo $rw[0];?>"><i class="la la-edit edit"></i></a>
                                                            
                                                            
                                                            <!--  <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-size="mini"> -->

                                                        </td>
                                                      </tr>
                                                      <?php
                                                    }
                                                      if($rw[13] == "in process"){
                                                        ?>
                                                        <tr>
                                                          <td><?php echo $rw[3];?></td>
                                                          <td><?php echo $rw[2];?></td>
                                                          <td><?php echo $rw[7];?></td>
                                                          <td><?php echo $rw[4];?></td>
                                                          <td><?php echo $rw[5];?></td>
                                                          <td><span style="width:100px;"><span class="badge-text badge-text-small success">In process</span></span></td>
                                                          
                                                          <td class="td-actions">
                                                            <a href="?edit=<?php echo $rw[0];?>"><i class="la la-edit edit"></i></a>
                                                            
                                                            <a href="?act=<?php echo $rw[0];?>"><i class="ion-checkmark " data-style="primary"></i></a>
                                                        </td>
                                                      </tr>
                                                      <?php
                                                    }
                                                      if($rw[13] == "canceled"){
                                                        ?>
                                                        <tr>
                                                          <td><?php echo $rw[3];?></td>
                                                          <td><?php echo $rw[2];?></td>
                                                          <td><?php echo $rw[7];?></td>
                                                          <td><?php echo $rw[4];?></td>
                                                          <td><?php echo $rw[5];?></td>
                                                          <td><span style="width:100px;"><span class="badge-text badge-text-small danger">canceled</span></span></td>
                                                          
                                                          <td class="td-actions">
                                                            <a href="?edit=<?php echo $rw[0];?>"><i class="la la-edit edit"></i></a>
                                                          
                                                        </td>
                                                      </tr>
                                                      <?php
                                                    }
                                                      if($rw[13] == "delivered"){
                                                        ?>
                                                        <tr>
                                                          <td><?php echo $rw[3];?></td>
                                                          <td><?php echo $rw[2];?></td>
                                                          <td><?php echo $rw[7];?></td>
                                                          <td><?php echo $rw[4];?></td>
                                                          <td><?php echo $rw[5];?></td>
                                                          <td><span style="width:100px;"><span class="badge-text badge-text-small Warning">delivered</span></span></td>
                                                          
                                                          <td class="td-actions">
                                                            <a href="?edit=<?php echo $rw[0];?>"><i class="la la-edit edit"></i></a>
                                                            
                                                        </td>
                                                      </tr>
                                                      <?php
                                                    }
                                                  }
                                                  ?>
                                                </tbody>
                                              </table>

                                                  <?php
                                                }
                                                ?>
                                                
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                           