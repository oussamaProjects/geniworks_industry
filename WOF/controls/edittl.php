
                    <div class="container-fluid">
                           <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>All Tools</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <?php 
require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');


$reqss=$cdb->prepare("SELECT * FROM tools");
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
                                                        <th>Name</th>
                                                        <th>Seller</th>
                                                        <th>Quantity</th>
                                                        <th>Picture</th>
                                                        <th>Ship Date</th>
                                                        <th><span style="width:100px;">Status</span></th>
                                                        <th>Amount</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <?php
error_reporting(E_ALL ^ E_DEPRECATED);
while($rw=$resss->fetch_row()){
      if($rw[8] == "requested"){
  ?>
  <tr>
  <td><?php echo $rw[0];?></td>
  <td><?php echo $rw[1];?></td>
  <td><?php echo $rw[2];?></td>
  <td><?php echo $rw[4];?></td>
  <td><img src="Clients/<?php echo $rw[3];?>" width="3" /></td>
  <td><?php echo $rw[6];?></td>
  <td><span style="width:100px;"><span class="badge-text badge-text-small info">requested</span></span></td>
  <td><?php echo $rw[7];?></td>
  <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>

</tr>
<?php
}

 if(($rw[4] > 3)&&($rw[8] == "in")){
  ?>
  <tr>
  <td><?php echo $rw[0];?></td>
  <td><?php echo $rw[1];?></td>
  <td><?php echo $rw[2];?></td>
  <td><?php echo $rw[4];?></td>
  <td><img src="controls/docs/tools/<?php echo $rw[3];?>"   witdh="5"/></td>
  <td><?php echo $rw[6];?></td>
  <td><span style="width:100px;"><span class="badge-text badge-text-small success">In Stock</span></span></td>
  <td><?php echo $rw[7];?></td>
  <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>

</tr>
<?php
}


 if(($rw[4] < 1)&&($rw[8] == "in")){
  ?>
  <tr>
  <td><?php echo $rw[0];?></td>
  <td><?php echo $rw[1];?></td>
  <td><?php echo $rw[2];?></td>
  <td><?php echo $rw[4];?></td>
  <td><img src="controls/docs/tools/<?php echo $rw[3];?>"  witdh="5" /></td>
  <td><?php echo $rw[6];?></td>
  <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Out</span></span></td>
  <td><?php echo $rw[7];?></td>
  <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>

</tr>
<?php
}

if(($rw[4] = 1)&&($rw[8] == "in")){
  ?>
  <tr>
  <td><?php echo $rw[0];?></td>
  <td><?php echo $rw[1];?></td>
  <td><?php echo $rw[2];?></td>
  <td><?php echo $rw[4];?></td>
  <td><img src="controls/docs/tools/<?php echo $rw[3];?>" witdh="5" /></td>
  <td><?php echo $rw[6];?></td>
  <td><span style="width:100px;"><span class="badge-text badge-text-small warning">Still 1</span></span></td>
  <td><?php echo $rw[7];?></td>
  <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>

</tr>
<?php
}


}
}
 
?>
                                                    <!-- <tr>
                                                        <td><span class="text-primary">054-01-FR</span></td>
                                                        <td>Tool 1</td>
                                                        <td>2</td>
                                                        <td>10/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">requested</span></span></td>
                                                        <td>$139.45</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-primary">189-01-RU</span></td>
                                                        <td>Tool 2</td>
                                                        <td>51</td>
                                                        <td>08/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Out</span></span></td>
                                                        <td>$107.55</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-primary">092-06-FR</span></td>
                                                        <td>Tool 3</td>
                                                        <td>13</td>
                                                        <td>08/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small success">In Stock</span></span></td>
                                                        <td>$129.85</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-primary">021-09-US</span></td>
                                                        <td>Tool 4</td>
                                                        <td>42</td>
                                                        <td>07/21/2017</td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info">Requested</span></span></td>
                                                        <td>$199.95</td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           