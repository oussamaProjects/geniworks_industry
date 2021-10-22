<?php

require('zdze8efzedzdeezd/45azd72dz9de5.php');
$showr=$cdb->prepare('SELECT * FROM project_request_form');
$showr->execute();
if ($showr===false) {
  echo "We Have Problem In Data Export Issue!";
}
else{
  $res=$showr->get_result();

?>
 

                                          <?php
                                          while ($showrow=$res->fetch_row()) {
                                            
                                            if ($showrow[29]=="under analysis") {
                                          ?>




<div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="project-request-details.php?prfid=<?php echo $showrow[0]?>"><img src="img/equipments/<?php echo $showrow[7];?>" alt="Project <?php echo $showrow[1];?> Image" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0"><?php echo $showrow[1];?></h3> <small><?php echo $showrow[2];?></small>
                                    <address>
                                        <?php echo $showrow[4];?>
                                        <br/>
                                        <br/>
                                        <lablel class="label label-info"><abbr title="Phone"></abbr><?php echo $showrow[29];?></lablel>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>


        <?php
    }
    if ($showrow[29]=="delivered") {
?>

<div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="app-contact-detail.html"><img src="img/equipments/<?php echo $showrow[7];?>" alt="Project <?php echo $showrow[1];?> Image" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0"><?php echo $showrow[1];?></h3> <small><?php echo $showrow[2];?></small>
                                    <address>
                                        <?php echo $showrow[4];?>
                                        <br/>
                                        <br/>
                                        <lablel class="label label-success"><abbr title="Phone"></abbr> <?php echo $showrow[29];?></lablel>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

<?php
}
    if ($showrow[29]=="execution") {
?>

<div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="app-contact-detail.html"><img src="img/equipments/<?php echo $showrow[7];?>" alt="Project <?php echo $showrow[1];?> Image" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0"><?php echo $showrow[1];?></h3> <small><?php echo $showrow[2];?></small>
                                    <address>
                                        <?php echo $showrow[4];?>
                                        <br/>
                                        <br/>
                                        <lablel class="label label-inverse"><abbr title="Phone"></abbr>In <?php echo $showrow[29];?></lablel>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>









<?php
     }
   }
}
        ?>