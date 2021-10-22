<div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Begin Widget 07 -->
                                <div class="widget widget-07 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2>Product Overview</h2>
                                        <div class="widget-options">
                                            <!-- <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary ripple">Week</button>
                                                <button type="button" class="btn btn-primary ripple">Month</button>
                                            </div> -->
                                        </div>
                                    </div>
                                    <?php
require('a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');
                $reqathe = $cdb->prepare("SELECT * FROM wof ");
                $reqathe->execute();
                if($reqathe === false) {
                echo "error while executing data: ".mysqli_error($cdb);
                } 
                else { 
                $resathe=$reqathe->get_result();

                ?>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body">
                                        <div class="table-responsive table-scroll padding-right-10" style="">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="check-all" id="check-all">
                                                                <label for="check-all"></label>
                                                            </div>
                                                        </th>
                                                        <th>Order ID</th>
                                                        <th>Site</th>
                                                        <th>Order Ordonator</th>
                                                        <th>Odrer Reciever</th>
                                                        <th>Asset</th>
                                                        <th>Sub-Asset</th>
                                                       
                                                        <th><span style="width:100px;">Status</span></th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php while($rowdw=$resathe->fetch_row()){ ?>
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb1" id="cb1">
                                                                <label for="cb1"></label>
                                                            </div>
                                                        </td>

                                                        <td><span class="text-secondary"><?php echo $rowdw[1]; ?></span></td>
                                                        <td><?php echo $rowdw[2]; ?></td>
                                                        <td><?php echo $rowdw[4]; ?></td>
                                                        <td><?php echo $rowdw[5]; ?></td>
                                                        
                                                        <td></td>
                                                        <td><?php echo $rowdw[7]; ?></td>
                                      

                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">In Process</span></span></td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr><?php } ?>
                                                   
                                                  <!--  <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb4" id="cb4">
                                                                <label for="cb4"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-secondary">092-06-FR</span></td>
                                                        <td>Angela Walters</td>
                                                        <td>YARD</td>
                                                        <td>02/13/2019</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small success">Delivered</span></span></td>
                                                        <td>$129.85</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td style="width:5%;">
                                                            <div class="styled-checkbox mt-2">
                                                                <input type="checkbox" name="cb8" id="cb8">
                                                                <label for="cb8"></label>
                                                            </div>
                                                        </td>
                                                        <td><span class="text-secondary">189-01-RU</span></td>
                                                        <td>MARSA MAROC</td>
                                                        <td>RTG</td>
                                                        <td>02/13/2019</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Stoped</span></span></td>
                                                        <td>$107.55</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>-->
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <?php
                                }
                                    ?>
                                    <!-- End Widget Body -->
                                    <!-- Begin Widget Footer -->
                                    <div class="widget-footer d-flex align-items-center">
                                        <div class="mr-auto p-2">
                                            <span class="display-items">Showing 1-30 / 150 Results</span>
                                        </div>
                                        <div class="p-2">
                                            <nav aria-label="...">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i class="ion-chevron-left"></i></span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a><span class="sr-only">(current)</span></li>
                                                    <li class="page-item active">
                                                        <span class="page-link">2</span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <!-- End Widget Footer -->
                                </div>
                                <!-- End Widget 07 -->
                            </div>
                        </div>