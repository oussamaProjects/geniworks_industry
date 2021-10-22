<?php
require("controls/zdfzfzef/de5.php");
mysqli_select_db($cdb,"ajax_demo");
$sqlct="SELECT count(wtl_name) FROM work_tools WHERE wtl_owner = '12'";
$resultct = mysqli_query($cdb,$sqlct);

mysqli_select_db($cdb,"ajax_demo");
$sqlcm="SELECT count(wmt_name) FROM work_materials WHERE wmt_owner = '12'";
$resultcm = mysqli_query($cdb,$sqlcm);

mysqli_select_db($cdb,"ajax_demo");
$sqlcc="SELECT count(wch_name) FROM work_chemicals WHERE wch_owner = '12'";
$resultcc = mysqli_query($cdb,$sqlcc);

mysqli_select_db($cdb,"ajax_demo");
$sqlca="SELECT count(wape_name) FROM work_ape WHERE wape_owner = '12'";
$resultca = mysqli_query($cdb,$sqlca);

mysqli_select_db($cdb,"ajax_demo");
$sqlcp="SELECT count(wppe_name) FROM work_ppe WHERE wppe_owner = '12'";
$resultcp = mysqli_query($cdb,$sqlcp);



mysqli_select_db($cdb,"ajax_demo");
$sql="SELECT wtl_name,wtl_quantity,wtl_id FROM work_tools WHERE wtl_owner = '12'";
$resultt = mysqli_query($cdb,$sql);

mysqli_select_db($cdb,"ajax_demo");
$sqlm="SELECT wmt_name,wmt_quantity FROM work_materials WHERE wmt_owner = '12'";
$resultm = mysqli_query($cdb,$sqlm);

mysqli_select_db($cdb,"ajax_demo");
$sqlc="SELECT wch_name,wch_quantity FROM work_chemicals WHERE wch_owner = '12'";
$resultc = mysqli_query($cdb,$sqlc);

mysqli_select_db($cdb,"ajax_demo");
$sqlp="SELECT wppe_name,wppe_quantity FROM work_ppe WHERE wppe_owner = '12'";
$resultp = mysqli_query($cdb,$sqlp);

mysqli_select_db($cdb,"ajax_demo");
$sqla="SELECT wape_name,wape_quantity FROM work_ape WHERE wape_owner = '12'";
$resulta = mysqli_query($cdb,$sqla);
?>

		<div class="kt-portlet kt-profile">
								<div class="kt-profile__content">
									<div class="row">
										<div class="col-md-5 col-lg-5 col-xl-5">
											<div class="kt-profile__main">
												<div class="kt-profile__main-pic">
													<img src="../img/apple-touch-icon.png" alt="">
													<label class="kt-profile__main-pic-upload">
														<i class="flaticon-photo-camera"></i>
													</label>
												</div>
												<div class="kt-profile__main-info">
													<div class="kt-profile__main-info-name">APM-2</div>
													<div class="kt-profile__main-info-position">ID</div>
													<div class="kt-profile__main-info-position">Tangier</div>
												</div>
											</div>

										</div>
										<div class="col-md-3 col-lg-3 col-xl-3">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">13 Humans</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowct=mysqli_fetch_array($resultct)) {echo $rowct[0];}?> tools</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcm=mysqli_fetch_array($resultcm)) {echo $rowcm[0];}?> materials</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcc=mysqli_fetch_array($resultcc)) {echo $rowcc[0];}?> Chemicals</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowcp=mysqli_fetch_array($resultcp)) {echo $rowcp[0];}?> PPE</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text"><?php while($rowca=mysqli_fetch_array($resultca)) {echo $rowca[0];}?> APE</span>
												</a>
											</div>
										</div>
										<div class="col-md-4 col-lg-4 col-xl-4">
											<div class="kt-profile__contact">
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-whatsup"></span>
													<span class="kt-profile__contact-item-text">3 Spplies</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon"></span>
													<span class="kt-profile__contact-item-text">2 SRF</span>
												</a>
												<a href="#" class="kt-profile__contact-item">
													<span class="kt-profile__contact-item-icon kt-profile__contact-item-icon-twitter"></span>
													<span class="kt-profile__contact-item-text">13 Inspections</span>
												</a>
											</div>
										</div>
										
									</div>
								</div>
							</div>										
<style>
	.table > tbody > tr > td {
     vertical-align: middle;
}
</style>
							<table class="table table-bordered">
								<tbody>
									<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsetools" role="button" aria-expanded="true" aria-controls="multiCollapsetools"><h5>Tools  <i class="la la-ellipsis-v"></i></h5></a>
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsetools" style="">
																<div class="card card-body">
											<?php
											while($rowt = mysqli_fetch_array($resultt)) {
											?>
											<span><?php echo $rowt['wtl_name'];?> 
												<?php if ($rowt['wtl_quantity']<1) {
												?>
												<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> 

												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2<?php echo $rowt['wtl_id']?>"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowt['wtl_quantity']<=5 && $rowt['wtl_quantity']>=2) {
												?>
												<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> 

												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a> 
												<?php 
												}
												 if ($rowt['wtl_quantity']>5 && $rowt['wtl_quantity']<10) {
												?>
												<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> 

												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowt['wtl_quantity']>=10) {
												?>
												<a style="float:right;" class="kt-badge k-font-success" data-toggle="modal" data-target="#toolsmodalapm2"><i style="font-size:20px; " class="la la-folder-open "></i></a> 

												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#toolsinsmodalapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>


				<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsetools" role="button" aria-expanded="true" aria-controls="multiCollapsetools"><h5>Reporting  <i class="la la-ellipsis-v"></i></h5></a>
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsetools" style="">
																<div class="card card-body">
											<div class="center">
    <div class="container">
   <div class="header">
        <div class="header--left">
          <div>WEEKLY REPORT</div>
          <div class="header--thin">May 4 - May 11th</div>
        </div>
        <div class="header--right">
          
          <div>Tools</div>
        </div>
      </div>
      <div class="graph">
        <div class="graph__index">
          <div class="graph__rbox"></div>
          <div class="graph__smtext">Brosse</div>
          <div class="graph__bbox"></div>
          <div class="graph__smtext">Chiffon</div>
          <div class="graph__gbox"></div>
          <div class="graph__smtext">Raclette</div>
        </div>
        <div class="graph__redline">
          <div class="point__line">
            <svg>
              <polyline points="10,12 90,5 96,63 140,23 182,40 221,19 263,14" />
            </svg>
          </div>
          <div class="point point--one">
            <div class="point__bubble">-35</div>
          </div>
          <div class="point point--two">
            <div class="point__bubble">104</div>
          </div>
          <div class="point point--three">
            <div class="point__bubble">78</div>
          </div>
          <div class="point point--four">
            <div class="point__bubble">245</div>
          </div>
          <div class="point point--five">
            <div class="point__bubble">197</div>
          </div>
          <div class="point point--six">
            <div class="point__bubble">289</div>
          </div>
          <div class="point point--seven">
            <div class="point__bubble">312</div>
          </div>
        </div>
        <div class="graph__blueline">
          <div class="point__line">
            <svg>
              <polyline points="10,45 51,80 96,56 140,66 182,30 221,42 263,25" />
            </svg>
          </div>
          <div class="point point--one">
            <div class="point__bubble">250</div>
          </div>
          <div class="point point--two">
            <div class="point__bubble">-85</div>
          </div>
          <div class="point point--three">
            <div class="point__bubble">180</div>
          </div>
          <div class="point point--four">
            <div class="point__bubble">127</div>
          </div>
          <div class="point point--five">
            <div class="point__bubble">340</div>
          </div>
          <div class="point point--six">
            <div class="point__bubble">289</div>
          </div>
          <div class="point point--seven">
            <div class="point__bubble">362</div>
          </div>
        </div>
        <div class="graph__greenline">
          <div class="point__line">
            <svg>
              <polyline points="10,45 51,80 96,56 140,66 182,30 221,42 263,25" />
            </svg>
          </div>
          <div class="point point--one">
            <div class="point__bubble">5</div>
          </div>
          <div class="point point--two">
            <div class="point__bubble">-2</div>
          </div>
          <div class="point point--three">
            <div class="point__bubble">180</div>
          </div>
          <div class="point point--four">
            <div class="point__bubble">127</div>
          </div>
          <div class="point point--five">
            <div class="point__bubble">71</div>
          </div>
          <div class="point point--six">
            <div class="point__bubble">15</div>
          </div>
          <div class="point point--seven">
            <div class="point__bubble">1</div>
          </div>
        </div>
        <div class="graph__days">
          <div class="day">MON</div>
          <div class="day">TUE</div>
          <div class="day">WED</div>
          <div class="day">THU</div>
          <div class="day">FRI</div>
          <div class="day">SAT</div>
          <div class="day">SUN</div>
        </div>
      </div>
    </div>
  </div>
																</div>
															</div>
														</div>
													</div>
												</div>
  

												     

											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsemat" role="button" aria-expanded="true" aria-controls="multiCollapsemat"><h5>Materials  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsemat" style="">
																<div class="card card-body">
																<?php
											while($rowmt = mysqli_fetch_array($resultm)) {  
											?>
											<span><?php echo $rowmt['wmt_name'];?> 
												<?php if ($rowmt['wmt_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowmt['wmt_quantity']<=5 && $rowmt['wmt_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowmt['wmt_quantity']>5 && $rowmt['wmt_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowmt['wmt_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#matsinsmodalapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#materialsmodalapm2">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapsechem" role="button" aria-expanded="true" aria-controls="multiCollapsechem"><h5>Chemicals  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapsechem" style="">
																<div class="card card-body">
											<?php
											while($rowc = mysqli_fetch_array($resultc)) {
											?>
											<span><?php echo $rowc['wch_name'];?> 
												<?php if ($rowc['wch_quantity']<1) {
												?>
												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowc['wch_quantity']<=5 && $rowc['wch_quantity']>=2) {
												?>

												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowc['wch_quantity']>5 && $rowc['wch_quantity']<10) {
												?>
												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowc['wch_quantity']>=10) {
												?>
												<a style="float:right;" href="toola=<?php echo $rowt['wtl_id']?>" class="k-shape-font-color-4" data-toggle="modal" data-target="#cheminsmodalapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#chemicalsmodalapm2">Details</button> 
											</td>
										</tr>
										<tr>
											<td style="width: 40%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseppe" role="button" aria-expanded="true" aria-controls="multiCollapseppe"><h5>PPE  <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseppe" style="">
																<div class="card card-body">
																	
											<?php
											while($rowp = mysqli_fetch_array($resultp)) {  
											?>
											<span><?php echo $rowp['wppe_name'];?> 
												<?php if ($rowp['wppe_quantity']<1) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowp['wppe_quantity']<=5 && $rowp['wppe_quantity']>=2) {
												?>

												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>5 && $rowp['wppe_quantity']<10) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowp['wppe_quantity']>=10) {
												?>
												<a style="float:right;"  class="k-shape-font-color-4" data-toggle="modal" data-target="#ppeinsmodalapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											</td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#ppemodalapm2">Details</button>
											</td>
										</tr>
										<tr>
											<td style="width: 50%; vertical-align: middle;">
												<div class="kt-section__content kt-section__content--border">
													<p>
														<a class="" data-toggle="collapse" href="#multiCollapseape" role="button" aria-expanded="true" aria-controls="multiCollapseape"><h5>APE <i class="la la-ellipsis-v"></i></h5></a>
														
														
													</p>
													<div class="row">
														<div class="col">
															<div class="multi-collapse collapse" id="multiCollapseape" style="">
																<div class="card card-body">
																	
										<?php
											while($rowa = mysqli_fetch_array($resulta)) {  
											?>
											<span><?php echo $rowa['wape_name'];?> 
												<?php if ($rowa['wape_quantity']<1) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><i style="font-size:20px; color:#fd397a;" class="la la-battery-empty"></i></a>
												<?php
											}
												 if ($rowa['wape_quantity']<=5 && $rowa['wape_quantity']>=2) {
												?>

												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><i style="font-size:20px; color:#ffb822;" class="la la-battery-quarter"></i></a>
												<?php 
												}
												 if ($rowa['wape_quantity']>5 && $rowa['wape_quantity']<10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><i style="font-size:20px; color:#5578eb;" class="la la-battery-half"></i></a>
												<?php 
												}
												 if ($rowa['wape_quantity']>=10) {
												?>
												<a style="float:right; "  class="k-shape-font-color-4" data-toggle="modal" data-target="#apeinsmodalapm2"><i style="font-size:20px; color:#1dc9b7;" class="la la-battery-full"></i></a>
												<?php } ?>
											</a></span>
											<?php }  ?>
																</div>
															</div>
														</div>
													</div>
												</div> 
											 </td>
											<td>
												
												<button type="button" class="btn btn-default btn-bold btn-font-sm btn-upper" data-toggle="modal" data-target="#apemodalapm2">Details</button>
											</td>
										</tr>
										
									</tbody>
											


										
									</table>

<div class="modal fade bd-example-modal-xl" id="toolsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/apm2/details/detailst.php')?>
													</div>
<div class="modal fade" id="materialsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<?php include('controls/apm2/details/detailsm.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="chemicalsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/apm2/details/detailsc.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="ppemodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<?php include('controls/apm2/details/detailsp.php')?>
													</div>
<div class="modal fade bd-example-modal-xl" id="apemodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<?php include('controls/apm2/details/detailsa.php')?>
													</div>


<div class="modal fade bd-example-modal-sm" id="toolsinsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tool inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/showtools.php');?>

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="toolsinsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Tool inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/showmats.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="cheminsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Chemical inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/showchemicals.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="ppeinsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">PPE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/showppe.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

<div class="modal fade bd-example-modal-sm" id="apeinsmodalapm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">APE inspection:</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
															
																</div>
																<div class="modal-body"  style="background-color: #dfe6e9;">
														
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">

																		<?php include('controls/apm2/showape.php');?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
