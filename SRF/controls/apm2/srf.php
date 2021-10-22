<?php
require('controls/zdfzfzef/de5.php');
$showsrf=$cdb->prepare("SELECT * FROM srf_tools_request WHERE str_owner='11' AND str_status='not approved'");
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
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-toolbar-wrapper">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">Export Tools</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-print"></i>
																		<span class="kt-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-copy"></i>
																		<span class="kt-nav__link-text">Copy</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-excel-o"></i>
																		<span class="kt-nav__link-text">Excel</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-text-o"></i>
																		<span class="kt-nav__link-text">CSV</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																		<span class="kt-nav__link-text">PDF</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget-17">
												<?php
                                          while ($showsrf=$ressrf->fetch_row()) {

$findtool=$cdb->prepare("SELECT * FROM work_tools WHERE wtl_internal_id='".$showsrf[2]."'");
$findtool->execute();
if ($findtool===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfind=$findtool->get_result();


                                          ?><?php while ($showf=$resfind->fetch_row()) { ?>
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

																	<?php echo $showsrf[3];?> Units | <?php echo $showsrf[5];?>
															
															</div>
														</div>
													</div>
												
													<div class="kt-widget-17__prices">
														<div class="kt-widget-17__unit">
															 <?php echo $showsrf[3] ;?><span>x</span><?php echo $showf[9];?>.00 MAD
														</div>
														<div class="kt-widget-17__total">
															<?php echo $showsrf[3]*$showf[9];?>.00 MAD
														</div>
													</div>
												</div>
											<?php	} ?>
												<?php  }}?>
												
											</div>
										</div>
										<div class="kt-portlet__foot kt-portlet__foot--md">
											<div class="kt-widget-17__foot">
												<form id="approvesrft">
												<div class="kt-widget-17__foot-info"></div>
												<div class="kt-widget-17__foot-toolbar">
													<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Preview</a>
													
													<button style="" class="btn btn-brand btn-sm btn-upper btn-bold" type="submit">Approve</button>
												</div>
											</form>
											</div>
										</div>
									</div>

									<script>
      $(function () {

        $('#approvesrft').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'controls/apm1/tools/approve.php',
            data: $('#approvesrft').serialize(),
            success: function () {
              alert('Successfully Defined');
            }
          });

        });

      });
</script>
<?php  }?>