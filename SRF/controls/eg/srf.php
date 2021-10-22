<?php
require('controls/zdfzfzef/de5.php');
$showsrf=$cdb->prepare("SELECT * FROM srf_tools_request WHERE str_owner='21' AND str_status='not approved'");
$showsrf->execute();
if ($showsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $ressrf=$showsrf->get_result();
?>
<div class="kt-portlet kt-portlet--height-fluid kt-widget-17">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Latest Orders</h3>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget-17">
												<?php
                                          while ($showsrf=$ressrf->fetch_row()) {

$findtool=$cdb->prepare("SELECT * FROM work_tools_eg WHERE wtl_internal_id='".$showsrf[2]."'");
$findtool->execute();
if ($findtool===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfind=$findtool->get_result();


                                          ?><?php while ($showf=$resfind->fetch_row()) { ?>
                                          	<form id="approveorderegtools<?php echo $showsrf[0];?>">
												<div class="kt-widget-17__item">
													<div class="kt-widget-17__product">
														<div class="kt-widget-17__thumb">
															<a href="#"><img src="../controls/imgs/tools/<?php echo  $showf[3];?>" class="kt-widget-17__image" alt="" title=""></a>
														</div>
														<div class="kt-widget-17__product-desc">
															<a href="#">
																<div class="kt-widget-17__title">
																<?php	echo $showf[2];?>
																</div>
															</a>
															<div class="kt-widget-17__sku">
																	<?php echo $showsrf[3];?> Units | <?php echo $showf[5];?>
															</div>
														</div>
													</div>
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
															 <?php echo $showsrf[3];?><span>x</span><?php echo $showf[9] ;?>.00 MAD
														</div>
														<div class="kt-widget-17__total">
															<?php echo $showf[9]*$showsrf[3];?>.00 MAD 
														</div>
													</div>
													<input type="hidden" name="apridegtool" value="<?php echo $showsrf[0];?>">
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
												<div class="kt-widget-17__foot-toolbar">
													<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>
												</div>
											</div>
										</div>
												</div>
												
											</form>
<script>
      $(function () {

        $('#approveorderegtools<?php echo $showsrf[0];?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/tools/approvesingle.php',
            data: $('#approveorderegtools<?php echo $showsrf[0];?>').serialize(),
            success: function () {
              alert('<?php	echo $showf[2];?>,<?php echo $showf[6];?> Units Well Approved');
            }
          });

        });

      });
</script>
											<?php	} ?>
												<?php  }}?>
												
											</div>
										</div>
										<div class="kt-portlet__foot kt-portlet__foot--md">
											<div class="kt-widget-17__foot">
												<form id="approvesrfdt1">
												<div class="kt-widget-17__foot-info"></div>
												<div class="kt-widget-17__foot-toolbar">
												
													<!--<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>-->
												</div>
											</form>
											</div>
										</div>
									</div>

<script>
      $(function () {

        $('#approvesrfdt1').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/tools/approve.php',
            data: $('#approvesrfdt1').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });
</script>
<?php  }

$showsrfm=$cdb->prepare("SELECT * FROM srf_materials_request WHERE str_owner='21' AND str_status='not approved'");

$showsrfm->execute();
if ($showsrfm===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $ressrfm=$showsrfm->get_result();
?>
<div class="kt-portlet kt-portlet--height-fluid kt-widget-17">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Latest Orders</h3>
											</div>
			
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget-17">
												<?php
                                          while ($showsrfm=$ressrfm->fetch_row()) {


$findmat=$cdb->prepare("SELECT * FROM work_materials_eg WHERE wmt_internal_id='".$showsrfm[2]."'");

$findmat->execute();
if ($findmat===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindm=$findmat->get_result();


                                          ?><?php while ($showfm=$resfindm->fetch_row()) { ?>
                                          	<form id="approveorderegmats<?php echo $showsrfm[0];?>">
												<div class="kt-widget-17__item">
													<div class="kt-widget-17__product">
														<div class="kt-widget-17__thumb">
															<a href="#"><img src="../controls/imgs/materials/<?php echo  $showfm[3];?>" class="kt-widget-17__image" alt="" title=""></a>
														</div>
														<div class="kt-widget-17__product-desc">
															<a href="#">
																<div class="kt-widget-17__title">
																<?php	echo $showfm[2];?>
																</div>
															</a>
															<div class="kt-widget-17__sku">
																	<?php echo $showsrfm[3];?> Units | <?php echo $showfm[5];?>
															</div>
														</div>
													</div>
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
															 <?php echo $showsrfm[3];?><span>x</span><?php echo $showfm[9] ;?>.00 MAD
														</div>
														<div class="kt-widget-17__total">
															<?php echo $showfm[9]*$showsrfm[3];?>.00 MAD 
														</div>
													</div>
													<input type="hidden" name="apridegmats" value="<?php echo $showsrfm[0];?>">
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
												<div class="kt-widget-17__foot-toolbar">
													<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>
												</div>
											</div>
										</div>
												</div>
												
											</form>
<script>
      $(function () {

        $('#approveorderegmats<?php echo $showsrfm[0];?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/mats/approvesingle.php',
            data: $('#approveorderegmats<?php echo $showsrfm[0];?>').serialize(),
            success: function () {
              alert('<?php	echo $showfm[2];?>,<?php echo $showfm[6];?> Units Well Approved');
            }
          });

        });

      });
</script>
											<?php	} ?>
												<?php  }}?>
												
											</div>
										</div>
										<div class="kt-portlet__foot kt-portlet__foot--md">
											<div class="kt-widget-17__foot">
												<form id="approvesrfdm">
												<div class="kt-widget-17__foot-info"></div>
												<div class="kt-widget-17__foot-toolbar">
													<!--<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>-->
												</div>
											</form>
											</div>
										</div>
									</div>

									<script>
      $(function () {

        $('#approvesrfdm').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/mats/approve.php',
            data: $('#approvesrfdm').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });
</script>
<?php  }
$showsrfc=$cdb->prepare("SELECT * FROM srf_chemicals_request WHERE str_owner='21' AND str_status='not approved'");
$showsrfc->execute();
if ($showsrfc===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $ressrfc=$showsrfc->get_result();
?>
<div class="kt-portlet kt-portlet--height-fluid kt-widget-17">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Latest Orders</h3>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget-17">
												<?php
                                          while ($showsrfc=$ressrfc->fetch_row()) {



$findchem=$cdb->prepare("SELECT * FROM work_chemicals_eg WHERE wch_internal_id='".$showsrfc[2]."'");

$findchem->execute();
if ($findchem===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindc=$findchem->get_result();


                                          ?><?php while ($showfc=$resfindc->fetch_row()) { ?>
											<form id="approveorderegchems<?php echo $showsrfc[0];?>">
												<div class="kt-widget-17__item">
													<div class="kt-widget-17__product">
														<div class="kt-widget-17__thumb">
															<a href="#"><img src="../controls/imgs/chemicals/<?php echo  $showfc[3];?>" class="kt-widget-17__image" width="70" alt="" title=""></a>
														</div>
														<div class="kt-widget-17__product-desc">
															<a href="#">
																<div class="kt-widget-17__title">
																<?php	echo $showfc[2];?>
																</div>
															</a>
															<div class="kt-widget-17__sku">
																	<?php echo $showsrfc[3];?> Units | <?php echo $showfc[5];?>
															</div>
														</div>
													</div>
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
															 <?php echo $showsrfc[3];?><span>x</span><?php echo $showfc[9] ;?>.00 MAD
														</div>
														<div class="kt-widget-17__total">
															<?php echo $showfc[9]*$showsrfc[3];?>.00 MAD 
														</div>
													</div>
													<input type="hidden" name="apridegchems" value="<?php echo $showsrfc[0];?>">
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
												<div class="kt-widget-17__foot-toolbar">
													<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>
												</div>
											</div>
										</div>
												</div>
												
											</form>
<script>
      $(function () {

        $('#approveorderegchems<?php echo $showsrfc[0];?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/chems/approvesingle.php',
            data: $('#approveorderegchems<?php echo $showsrfc[0];?>').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });
</script>
											<?php	} ?>
												<?php  }}?>
												
											</div>
										</div>
										<div class="kt-portlet__foot kt-portlet__foot--md">
											<div class="kt-widget-17__foot">
												<form id="approvesrfdc">
												<div class="kt-widget-17__foot-info"></div>
												<div class="kt-widget-17__foot-toolbar">
													<!--<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>-->
												</div>
											</form>
											</div>
										</div>
									</div>

									<script>
      $(function () {

        $('#approvesrfdc').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/chems/approve.php',
            data: $('#approvesrfdc').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });
</script>
<?php  
}
$showsrfp=$cdb->prepare("SELECT * FROM srf_ppe_request WHERE str_owner='21' AND str_status='not approved'");
$showsrfp->execute();
if ($showsrfp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $ressrfp=$showsrfp->get_result();
?>
<div class="kt-portlet kt-portlet--height-fluid kt-widget-17">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Latest Orders</h3>
											</div>
										
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget-17">
												<?php
                                          while ($showsrfp=$ressrfp->fetch_row()) {



$findppe=$cdb->prepare("SELECT * FROM work_ppe_eg WHERE wppe_internal_id='".$showsrfp[2]."'");

$findppe->execute();
if ($findppe===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findppe->get_result();


                                          ?><?php while ($showfp=$resfindp->fetch_row()) { ?>
											<form id="approveorderegppe<?php echo $showsrfp[0];?>">
												<div class="kt-widget-17__item">
													<div class="kt-widget-17__product">
														<div class="kt-widget-17__thumb">
															<a href="#"><img src="../controls/imgs/ppe/<?php echo  $showfp[3];?>" class="kt-widget-17__image" alt="" title=""></a>
														</div>
														<div class="kt-widget-17__product-desc">
															<a href="#">
																<div class="kt-widget-17__title">
																<?php	echo $showfp[2];?>
																</div>
															</a>
															<div class="kt-widget-17__sku">
																	<?php echo $showsrfp[3];?> Units | <?php echo $showfp[5];?>
															</div>
														</div>
													</div>
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
															 <?php echo $showsrfp[3];?><span>x</span><?php echo $showfp[9] ;?>.00 MAD
														</div>
														<div class="kt-widget-17__total">
															<?php echo $showfp[9]*$showsrfp[3];?>.00 MAD 
														</div>
													</div>
													<input type="hidden" name="apridegppe" value="<?php echo $showsrfp[0];?>">
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
												<div class="kt-widget-17__foot-toolbar">
													<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>
												</div>
											</div>
										</div>
												</div>
												
											</form>
<script>
      $(function () {

        $('#approveorderegppe<?php echo $showsrfp[0];?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/ppe/approvesingle.php',
            data: $('#approveorderegppe<?php echo $showsrfp[0];?>').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });
</script>
											<?php	} ?>
												<?php  }}?>
												
											</div>
										</div>
										<div class="kt-portlet__foot kt-portlet__foot--md">
											<div class="kt-widget-17__foot">
												<form id="approvesrfdp">
												<div class="kt-widget-17__foot-info"></div>
												<div class="kt-widget-17__foot-toolbar">
													<!--<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>-->
												</div>
											</form>
											</div>
										</div>
									</div>

									<script>
      $(function () {

        $('#approvesrfdp').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/ppe/approve.php',
            data: $('#approvesrfdp').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });
</script>
<?php }

$showsrfa=$cdb->prepare("SELECT * FROM srf_ape_request WHERE str_owner='21' AND str_status='not approved'");
$showsrfa->execute();
if ($showsrfa===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $ressrfa=$showsrfa->get_result();
?>
<div class="kt-portlet kt-portlet--height-fluid kt-widget-17">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">Latest Orders</h3>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget-17">
												<?php
                                          while ($showsrfa=$ressrfa->fetch_row()) {



$findape=$cdb->prepare("SELECT * FROM work_ape_eg WHERE wape_internal_id='".$showsrfa[2]."'");

$findape->execute();
if ($findape===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfinda=$findape->get_result();


                                          ?><?php while ($showfa=$resfinda->fetch_row()) { ?>
												<form id="approveorderegape<?php echo $showsrfa[0];?>">
												<div class="kt-widget-17__item">
													<div class="kt-widget-17__product">
														<div class="kt-widget-17__thumb">
															<a href="#"><img src="../controls/imgs/ape/<?php echo  $showfa[3];?>" class="kt-widget-17__image" alt="" title=""></a>
														</div>
														<div class="kt-widget-17__product-desc">
															<a href="#">
																<div class="kt-widget-17__title">
																<?php	echo $showfa[2];?>
																</div>
															</a>
															<div class="kt-widget-17__sku">
																	<?php echo $showsrfa[3];?> Units | <?php echo $showfa[5];?>
															</div>
														</div>
													</div>
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
															 <?php echo $showsrfa[3];?><span>x</span><?php echo $showfa[9] ;?>.00 MAD
														</div>
														<div class="kt-widget-17__total">
															<?php echo $showfa[9]*$showsrfa[3];?>.00 MAD 
														</div>
													</div>
													<input type="hidden" name="apridegape" value="<?php echo $showsrfa[0];?>">
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
												<div class="kt-widget-17__foot-toolbar">
													<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>
												</div>
											</div>
										</div>
												</div>
												
											</form>
<script>
      $(function () {

        $('#approveorderegape<?php echo $showsrfa[0];?>').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/ape/approvesingle.php',
            data: $('#approveorderegape<?php echo $showsrfa[0];?>').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });
</script>
											<?php	} ?>
												<?php  }}?>
												
											</div>
										</div>
										<div class="kt-portlet__foot kt-portlet__foot--md">
											<div class="kt-widget-17__foot">
												<form id="approvesrfda">
												<div class="kt-widget-17__foot-info"></div>
												<div class="kt-widget-17__foot-toolbar">
													<!--<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>-->
												</div>
											</form>
											</div>
										</div>
									</div>

<script>
      $(function () {

        $('#approvesrfda').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/eg/ape/approve.php',
            data: $('#approvesrfda').serialize(),
            success: function () {
              alert('');
            }
          });

        });

      });
</script>
<?php  }
?>