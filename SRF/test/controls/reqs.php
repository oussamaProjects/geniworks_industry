
                    <div class="container-fluid">
                           <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>All Tools</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
<?php 
require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');

$reqss=$cdb->prepare("SELECT * FROM requests");
$reqss->execute();
if ($reqss===false) {
    echo"failed display ".mysqli_error();
}else{
    $resss=$reqss->get_result();
?>
                                            <table id="export-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Section</th>
                                                        <th>Name</th>
                                                        <th><span style="width:100px;">Status</span></th>
                                                        <th>Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    while($rw=$resss->fetch_row()){
                                                      if($rw[3] == "requested"){
                                                        ?>
                                                        <tr>
                                                          <td><?php echo $rw[0];?></td>
                                                          <td><?php echo $rw[1];?></td>
                                                          <td><?php echo $rw[2];?></td>
                                                          <td><span style="width:100%;"><span class="badge-text badge-text-small info">requested</span></span></td>
                                                          <td><?php echo $rw[4];?></td>
                                                          <td class="td-actions">
                                                            <a href="?edit=<?php echo $rw[0];?>"><i class="la la-edit edit"></i></a>
                                                            <a href="?del=<?php echo $rw[0];?>"><i class="la la-close delete"></i></a>
                                                            <a href="?act=<?php echo $rw[0];?>"><i class="ion-checkmark " data-style="primary"></i></a>
                                                            <!--  <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-size="mini"> -->

                                                        </td>
                                                      </tr>
                                                      <?php
                                                    }
                                                      if($rw[3] == "Delivred"){
                                                        ?>
                                                        <tr>
                                                          <td><?php echo $rw[0];?></td>
                                                          <td><?php echo $rw[1];?></td>
                                                          <td><?php echo $rw[2];?></td>
                                                          <td><span style="width:100px;"><span class="badge-text badge-text-small succes">Delivred</span></span></td>
                                                          <td><?php echo $rw[4];?></td>
                                                          <td class="td-actions">
                                                            <a href="?edit=<?php echo $rw[0];?>"><i class="la la-edit edit"></i></a>
                                                            <a href="?del=<?php echo $rw[0];?>"><i class="la la-close delete"></i></a>
                                                        </td>
                                                      </tr>
                                                      <?php
                                                    }
                                                      if($rw[3] == "canceled"){
                                                        ?>
                                                        <tr>
                                                          <td><?php echo $rw[0];?></td>
                                                          <td><?php echo $rw[1];?></td>
                                                          <td><?php echo $rw[2];?></td>
                                                          <td><span style="width:100px;"><span class="badge-text badge-text-small Warning">canceled</span></span></td>
                                                          <td><?php echo $rw[4];?></td>
                                                          <td class="td-actions">
                                                            <a href="?edit=<?php echo $rw[0];?>"><i class="la la-edit edit"></i></a>
                                                            <a href="?del=<?php echo $rw[0];?>"><i class="la la-close delete"></i></a>
                                                        </td>
                                                      </tr>
                                                      <?php
                                                    }
                                                      if($rw[3] == "failed"){
                                                        ?>
                                                        <tr>
                                                          <td><?php echo $rw[0];?></td>
                                                          <td><?php echo $rw[1];?></td>
                                                          <td><?php echo $rw[2];?></td>
                                                          <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span></td>
                                                          <td><?php echo $rw[4];?></td>
                                                          <td class="td-actions">
                                                            <a href="?edit=<?php echo $rw[0];?>"><i class="la la-edit edit"></i></a>
                                                            <a href="?del=<?php echo $rw[0];?>"><i class="la la-close delete"></i></a>
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
                           