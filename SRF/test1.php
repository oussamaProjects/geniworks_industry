<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/v/bs/dt-1.10.12/fc-3.2.2/fh-3.1.2/datatables.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://unpkg.com/tachyons@4.11.1/css/tachyons.css" rel="stylesheet" type="text/css" /><link href="https://unpkg.com/tachyons@4.11.1/css/tachyons.css" rel="stylesheet" type="text/css" /><link href="https://unpkg.com/tachyons@4.11.1/css/tachyons.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand" data-toggle="side-menu-open">
            <i class="fa fa-bars fa-lg"></i>
          </a>
          <ul class="nav navbar-nav navbar-left">
            <li class="title">
              <h1><a href="/commerce/control/ReconcileInvoice">Reconcile Invoices</a> / <span id="title-property">Invoice &#x23;10110 </span></h1></li>
          </ul>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-plus"></i> Create </a>
              <ul class="dropdown-menu create-dropdown no-margin" role="menu">
                <li>
                  <a href=" /commerce/control/CreateOrder"  target="_blank " title="Create Sales Order ">Sales Order</a>
                </li>
                <li>
                  <a href=" /commerce/control/CreateReturnForOrder " target="_blank" title="Create Sales Return">Sales Return</a>
                </li>
                <li>
                  <a href=" /commerce/control/CreateQuote"  target="_blank " title="Create Sales Quote ">Sales Quote</a>
                </li>
                <li>
                  <a href=" /commerce/control/CloneRouting "  target="_blank" title="Create Event">Event</a>
                </li>
                <li>
                  <a href=" /commerce/control/CreatePO"  target="_blank " title="Create Purchase Order ">Purchase Order</a>
                </li>
                <li>
                  <a href=" /commerce/control/CreatePurchaseQuote "  target="_blank" title="Create Purchase Quote">Purchase Quote</a>
                </li>
                <li class="divider" role="separator"></li>
                <li>
                  <a href=" /commerce/control/CreateVendor" target="_blank " title="Create Vendor ">Vendor</a>
                </li>
                <li>
                  <a href=" /commerce/control/CreateRelationship "  data-dialog-width="half" data-dialog-href=" /commerce/control/CreateRelationship" " title="Create Relationship ">Relationship</a>
                </li>
                <li class="divider " role="separator "></li>
                <li>
                  <a href=" /commerce/control/CreateProduct " target="_blank" title="Create Product">Product</a>
                </li>
                <li>
                  <a href=" /commerce/control/CreateCategory" data-dialog-width="half " data-dialog-href=" /commerce/control/CreateCategory " " title="Create Category">Category</a>
                </li>
                <li class="divider" role="separator"></li>
                <li>
                  <a href=" /commerce/control/Picking2"  target="_blank " title="Create Picklist ">Picklist</a>
                </li>
                <li>

            
                    <a href=" /commerce/control/SalesShipment "  target="_blank" title="Create Shipment">Shipment</a>

                </li>
                <li class="divider" role="separator"></li>
                <li>


                  <a href=" /commerce/control/CreatePayment"  target="_blank " title="Create Payment ">Payment</a>
            
                              </li>
                              <li>

            
                    <a href=" /commerce/control/CreateVoucher " target="_blank" title="Create Voucher">Voucher</a>

                </li>
                <li class="divider" role="separator"></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-medium">
                <li id="person-info">
                  <a type="button" href="/commerce/control/UserProfile">
                    <strong><i class="fa fa-user fa-lg"></i><span class="divider-vertical"></span>HotWax Developer</strong>
                  </a>
                </li>
                <li><a href="/commerce/control/logout" type="button"><strong><i class="fa fa-sign-out fa-lg"></i><span class="divider-vertical"></span>Logout</strong></a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>            

<div class="row">
              <div class="col-lg-12 col-md-12" id="invoiceInfo">
                <ul class="list-inline">
                  <li>
                    <div class="btn-group status-button">
                      <button type="button" class="btn btn-default btn-xs dropdown-toggle relative" data-toggle="dropdown">In-Process <i class="fa fa-caret-down fa-lg"></i></button>
                      <form method="post" id="invoicePreApprove-form-10110" action="setInvoiceStatus" class="ajaxMe" data-successMethod="#invoice-overview-10110" data-errorMethod="#invoice-overview-10110">

                      </form>
                      <form method="post" id="invoiceApprove-form-10110" action="setInvoiceStatus" class="ajaxMe" data-successMethod="#invoice-overview-10110" data-errorMethod="#invoice-overview-10110">

                      </form>
                      <form method="post" id="invoiceHold-form-10110" action="setInvoiceStatus" class="ajaxMe" data-successMethod="#invoice-overview-10110" data-errorMethod="#invoice-overview-10110">

                      </form>
                      <form method="post" id="invoiceInProcess-form-10110" action="setInvoiceStatus" class="ajaxMe" data-successMethod="#invoice-overview-10110" data-errorMethod="#invoice-overview-10110">

                      </form>
                      <form method="post" id="invoiceBalance-form-10110" action="setInvoiceStatus" class="ajaxMe" data-successMethod="#invoice-overview-10110" data-errorMethod="#invoice-overview-10110">

                      </form>
                      <form method="post" id="invoiceCancel-form-10110" action="setInvoiceStatus" class="ajaxMe" data-successMethod="#invoice-overview-10110" data-errorMethod="#invoice-overview-10110">

                      </form>
                      <ul class="dropdown-menu dropdown-menu-arrow order-status-dropdown" role="menu">
                        <li>
                          <button type="submit" form="invoiceHold-form-10110" class="btn btn-warning btn-sm">Hold</button>
                          <span>&nbsp;</span>
                          <button type="submit" form="invoiceCancel-form-10110" class="btn btn-danger btn-sm">Cancel</button>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <div id="invoice-status-history">
                            <table class="table table-striped table-bordered table-hover">
                              <tbody>
                                <tr>
                                  <td>In-Process</td>
                                  <td>11-29-2016 10:54 AM</td>
                                  <td>
                                    HotWax Developer
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </li>
                      </ul>
                      <div id="approve-invoice" style="display:none;">
                        <div classs="row">
                          <ul class="list-unstyled static-status-popover">
                            <li>
                              <span class="incomplete">Preference must be set for all items with variance.</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <button type="button" class="btn btn-default" data-dialog-width="half" data-dialog-href="/commerce/control/AddInvoiceAttachment?invoiceId=10110" title="Add Document">Add Document</button>
                </ul>
                <div class="panel panel-default panel-to-hide">
                  <div class="panel-body">
                    <ul class="info-tiles list-unstyled clearfix">
                      <li>
                        <dl class="dl-horizontal dl-small">
                          <dt>Invoice &#x23;</dt>
                          <dd>91024000</dd>
                          <dt>Invoice Date</dt>
                          <dd> 04-05-2004
                          </dd>
                          <dt>Due Date</dt>
                          <dd>
                            11-30-2016
                            <a class="date-time-picker-content">
                              <i class="fa fa-pencil"></i>
                              <input type="text" name="dueDate_i18n" autocomplete="off" class="form-control dateAndTimePicker  clickTrigger" data-i18n="dueDate_i18n" id="dueDate_i18n" title="Format: MM/dd/yyyy" value="11/30/2016" shortDateInput="true" useDayStartTime="false" useDayEndTime="false"
                                mask="true" form="edit-invoice-due-date-form" timeOnly="false" />
                            </a>
                          </dd>
                          <dt class="margin-top-neg-32 ">PO &#x23;</dt>
                          <dd class="margin-top-neg-32 ">
                            <a href="/commerce/control/ViewPO?orderId=10040 " target="_blank ">10</a>
                          </dd>
                          <dt class="margin-top-neg-11 ">PO Date</dt>
                          <dd>11-29-2016</dd>
                          <dt><strong>Buyer</strong></dt>
                          <dd>JOHN DOE</dd>
                        </dl>
                        <form method="post " id="edit-invoice-due-date-form " action="/commerce/control/updateInvoice " class="ajaxMe js-change-submit " data-successMethod="#invoiceInfo " data-errorMethod="#invoiceInfo "></form>
                        <hr/>
                        <label><strong>Terms of Sale</strong></label>
                        <dl class="dl-horizontal dl-small ">
                          <dt>Disc Due Date</dt>
                          <dd>11-24-2016</dd>
                          <dt>Disc Days</dt>
                          <dd>0</dd>
                          <dt>Net Due Date</dt>
                          <dd>11-30-2016</dd>
                          <dt>Net Days</dt>
                          <dd>45</dd>
                        </dl>
                      </li>
                      <li>
                        <div><strong>Warehouse</strong></div>
                        <div>Store &#x23;1</div>
                        <div>
                            <ul class="list-unstyled ">
                              <li>123 Grand Street</li>
                              <li></li>
                              <li>Anytown CA 12345 <span>USA</span></li>
                            </ul>
                        </div>
                        <hr/>
                        <div><strong>Vendor</strong></div>
                        <div>[<a href="#" title="2264 " target="_blank ">2264</a>] ACME ACADEMY</div>
                        <div>
                            <ul class="list-unstyled ">
                              <li>9876 West Peachtree Lane</li>
                              <li></li>
                              <li>Los Angeles, CA 90210 <span>USA</span></li>
                            </ul>
                        </div>
                        <div><strong>Sales Rep: </strong>N&#x2f;A</div>
                        <hr/>
                        <div>
                          <span><strong>Fixed Billback:</strong></span>&nbsp;
                          <span>$0.00</span>
                        </div>
                        <div>
                          <span><strong>Total Weight Shipped:</strong></span>&nbsp;
                          <span>56.00</span>
                        </div>
                      </li>
                      <li>
                        <table class="table table-condensed ">
                          <thead>
                            <tr>
                              <td></td>
                              <td class="text-right "><strong>PO</strong></td>
                              <td class="text-right "><strong>INV</strong></td>
                              <td class="text-right "><strong>VAR</strong></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><i><strong>Units Received<strong></i></td>
                              <td class="text-right ">725</td>
                              <td class="text-right ">638</td>
                                <td class="text-right text-success "><strong>87<strong></td>
                            </tr>
                            <tr>
                              <td><i><strong>Amount Subject to Discount<strong></i></td>
                              <td class="text-right ">$6,080.00</td>
                              <td class="text-right ">$100.00</td>
                                <td class="text-right text-success "><strong>$5,980.00<strong></td>
                            </tr>
                            <tr>
                              <td><i><strong>Cash Discount Percent<strong></i></td>
                              <td class="text-right ">0.00%</td>
                              <td class="text-right ">1.50%</td>
                                <td class="text-right text-danger "><strong>-1.50%<strong></td>
                            </tr>
                            <tr>
                              <td><i><strong>Gross Amount<strong></i></td>
                              <td class="text-right ">$5,587.50</td>
                              <td class="text-right ">$10,201.35</td>
                                <td class="text-right text-danger "><strong>-$4,613.85<strong></td>
                            </tr>
                              <tr>
                                <td><i><strong>Minimum Charge<strong></i></td>
                                <td></td>
                                <td class="text-right ">$1.00</td>
                                <td class="text-right text-success "><strong>-$1.00</strong></td>
                              </tr>
                            <tr>
                              <td><i><strong>Total Invoice Amount<strong></i></td>
                              <td></td>
                              <td class="text-right ">$500.00</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td><i><strong>Cash Discount</strong></i></td>
                              <td class="text-right ">$0.00</td>
                              <td class="text-right ">$15.00</td>
                                <td class="text-right text-danger "><strong>-$15.00<strong></td>
                            </tr>
                            <tr>
                              <td><i><strong>Discounted Amount Due</strong></i></td>
                              <td class="text-right "><strong>$5,587.50</strong></td>
                              <td class="text-right "><strong>$485.00</strong></td>
                                <td class="text-right text-success "><strong>$5,102.50</strong></td>
                            </tr>
                            <tr class="warning ">
                              <td><i><strong>Adjustment Amount<strong></i></td>
                              <td></td>
                                <td class="text-right text-danger ">-$292.00</td>
                              <td></td>
                            </tr>
                            <tr class="success ">
                              <td>
                                <i><strong>Post Adjustment Amount</strong></i>
                              </td>
                              <td class="text-right "><strong>$5,587.50</strong></td>
                                <td class="text-right text-success ">
                                  <strong>$193.00</strong>
                                </td>
                                <td class="text-right text-success ">
                                  <strong>$5,394.50</strong>
                                </td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                    </ul>
                  </div>
                </div>

                <div id="less-details " class="panel panel-default panel-fixed opacity-zero ">
                  <div class="bg-warning panel-body " data-toggle-display="#less-details, #more-details " data-toggle-effect="slide ">
                    <ul class="list-inline clearfix " style="font-size: 0.9em; ">
                      <li class="col-md-2 divider-vertical ">
                        <ul class="list-inline ">
                          <li>
                            <strong>Vendor</strong>
                          </li>
                          <li>[2264] DELMONTE FOODS</li>
                        </ul>
                      </li>
                      <li class="col-md-2 divider-vertical ">
                        <ul class="list-inline ">
                          <li><strong>Invoice &#x23;</strong></li>
                          <li>91024000</li>
                        </ul>
                      </li>
                      <li class="col-md-2 divider-vertical ">
                        <ul class="list-inline ">
                          <li>
                            <strong>Invoice Date</strong>
                          </li>
                          <li>04-05-2004</li>
                        </ul>
                      </li>
                      <li class="col-md-2 divider-vertical ">
                        <ul class="list-inline ">
                          <li>
                            <strong>PO &#x23;</strong>
                          </li>
                          <li>
                            10
                          </li>
                        </ul>
                      </li>
                      <li class="col-md-2 divider-vertical ">
                        <ul class="list-inline ">
                          <li>
                            <strong>PO Date</strong>
                          </li>
                          <li>11-29-2016</li>
                        </ul>
                      </li>
                      <li class="col-md-2 ">
                        <ul class="list-inline ">
                          <li>
                            <strong>Amount Due</strong>
                          </li>
                          <li>$485.00</li>
                        </ul>
                      </li>
                    </ul>
                    <div class="text-center ">
                      <i class="fa fa-chevron-down " title="expand "></i>
                    </div>
                  </div>
                </div>
                <div id="more-details " style="display: none; " class="panel panel-default panel-fixed opacity-zero ">
                  <div class="panel-body " data-toggle-display="#less-details, #more-details " data-toggle-effect="slide ">
                    <ul class="info-tiles list-unstyled clearfix ">
                      <li>
                        <dl class="dl-horizontal dl-small ">
                          <dt>Invoice &#x23;</dt>
                          <dd>91024000</dd>
                          <dt>Invoice Date</dt>
                          <dd>      04-05-2004</dd>
                          <dt>Due Date</dt>
                          <dd>11-30-2016
                          </dd>
                          <dt>PO &#x23;</dt>
                            <dd>
                              <a href="/commerce/control/ViewPO?orderId=10040 " target="_blank ">10</a>
                            </dd>
                          <dt>PO Date</dt>
                          <dd>      11-29-2016</dd>
                          <dt><strong>Buyer</strong></dt>
                          <dd>JIM LACOURSE</dd>
                        </dl>
                        <hr/>
                        <label><strong>Terms of Sale</strong></label>
                        <ul class="list-inline margin-top-4 ">
                          <li class="divider-vertical ">
                            <dl class="dl-horizontal dl-small ">
                              <dt>Disc Due Date</dt>
                              <dd>      04-05-2004</dd>
                              <dt>Disc Days</dt>
                              <dd>11-30-2016</dd>
                            </dl>
                          </li>
                          <li>
                            <dl class="dl-horizontal dl-small ">
                              <dt>Net Due Date</dt>
                              <dd>      04-05-2004</dd>
                              <dt>Net Days</dt>
                              <dd>11-30-2016
                              </dd>
                            </dl>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div><strong>Warehouse</strong></div>
                        <div>Store &#x23;1</div>
                        <div>
                            <ul class="list-unstyled ">
                              <li>331 Fletcher Street</li>
                              <li></li>
                              <li>Lowell MA 01854 <span>USA</span></li>
                            </ul>
                        </div>
                        <hr/>
                        <div><strong>Vendor</strong></div>
                        <div>[<a href="/commerce/control/ViewParty?partyId=DELMONTE_FOODS " title="2264 " target="_blank ">2264</a>] DELMONTE FOODS</div>
                        <div>
                            <ul class="list-unstyled ">
                              <li>7775 SOLUTIONS CENTER</li>
                              <li></li>
                              <li>CHICAGO IL 60677-7007 <span>USA</span></li>
                            </ul>
                        </div>
                        <div><strong>Sales Rep: </strong>N&#x2f;A</div>
                        <hr/>
                        <div>
                          <span><strong>Fixed Billback:</strong></span>&nbsp;
                          <span>$0.00</span>
                        </div>
                        <div>
                          <span><strong>Total Weight Shipped:</strong></span>&nbsp;
                          <span>56.00</span>
                        </div>
                      </li>
                      <li>
                        <table class="table table-condensed ">
                          <thead>
                          <tr>
                            <td></td>
                            <td class="text-right "><strong>PO</strong></td>
                            <td class="text-right "><strong>INV</strong></td>
                            <td class="text-right "><strong>VAR</strong></td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td><i><strong>Units Received<strong></i></td>
                            <td class="text-right ">725</td>
                            <td class="text-right "></td>
                              <td class="text-right text-success "><strong>725<strong></td>
                          </tr>
                          <tr>
                            <td><i><strong>Amount Subject to Discount<strong></i></td>
                            <td class="text-right ">$5,587.50</td>
                            <td class="text-right ">$100.00</td>
                              <td class="text-right text-success "><strong>$5,487.50<strong></td>
                          </tr>
                          <tr>
                            <td><i><strong>Cash Discount Percent<strong></i></td>
                            <td class="text-right ">0.00%</td>
                            <td class="text-right ">1.50%</td>
                              <td class="text-right text-danger "><strong>-1.50%<strong></td>
                          </tr>
                          <tr>
                            <td><i><strong>Gross Amount<strong></i></td>
                            <td class="text-right ">$5,587.50</td>
                            <td class="text-right ">$10,201.35</td>
                                  <td class="text-right text-danger "><strong>-$4,613.85<strong></td>
                          </tr>
                              <tr>
                                <td><i><strong>Minimum Charge<strong></i></td>
                                <td></td>
                                <td class="text-right ">$0.00</td>
                                <td></td>
                              </tr>
                          <tr>
                            <td><i><strong>Invoice Total Amount<strong></i></td>
                            <td></td>
                            <td class="text-right ">$500.00</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><i><strong>Cash Discount</strong></i></td>
                            <td class="text-right ">$0.00</td>
                            <td class="text-right ">$0.00</td>
                              <td class="text-right text-success "><strong>$0.00<strong></td>
                          </tr>
                          <tr>
                            <td><i><strong>Discounted Amount Due</strong></i></td>
                              <td class="text-right "><strong>$5,587.50</strong></td>
                              <td class="text-right "><strong>$485.00</strong></td>
                                  <td class="text-right text-success "><strong>$5,102.50</strong></td>
                          </tr>
                          <tr class="warning ">
                              <td><i><strong>Adjustment Amount<strong></i></td>
                              <td></td>
                                  <td class="text-right text-danger ">-$276.00</td>
                              <td></td>
                          </tr>
                          <tr class="success ">
                            <td>
                              <i><strong>Post Adjustment Amount</strong></i>
                            </td>
                            <td></td>
                              <td class="text-right text-success ">
                                <strong>$209.00</strong>
                              </td>
                              <td class="text-right text-success ">
                                <strong>$5,378.50</strong>
                              </td>
                          </tr>
                          </tbody>
                        </table>
                      </li>
                    </ul>
                    <div class="text-center ">
                      <i class="fa fa-chevron-up " title="collapse "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  <table id="invoiceLines" class="table table-striped table-bordered table-hover fixed-table">
      <thead class="fixed-header">
        <tr class="bg-info">
          <th><small>UPC - ITEM - DESC</small></th>
          <th class="text-center"><small><div>PO REC</div><i>(Qty / Wgt)</i></small></th>
          <th class="text-center" ><small>PO COST ($)<br/><i>(Ord / Inv UoM)</i></small></th>
          <th class="text-center" ><small>PO OFF-INV ($)<br/><i>(Ord / Inv UoM)</i></small></th>
          <th  class="text-center" ><small>PO EXT-NET ($)</small></th>
            <th class="text-center" ><small>INV QTY</small></th>
            <th class="text-center" ><small>INV COST ($)</small></th>
            <th class="text-center" ><small>INV OFF-INV ($)</small></th>
            <th class="text-center" ><small>INV EXT-NET ($)</small></th>
          <th class="text-center" width="6%"><small>EXT NET VAR ($)</small></th>
          <th class="text-center" width="4%"><small>QTY VAR</small></th>
          <th class="text-center" width="4%"><small>FRGHT ($)</small></th>
          <th class="text-center" width="5%"><small>EXT FRGHT ($)</small></th>
          <th class="text-center"><small>BLBK ($)</small></th>
        </tr>
      </thead>
      <tbody>
            <tr >
              <input type="hidden" name="invoiceItemSeqId" value="00001" form="updateInvoiceQtyAndCostForm"/>
              <td><small>10010000000000 - 10010 - <strong>Roast Beef</strong></small></td>
                <td class="text-right">
                  <small>50</small>
                </td>
                  <td class="text-right">
                    <div><small>10.00 / 10.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="costPref-0" name="cp_00001" type="radio" class="custom-control-input" 
                          form="updateBuyerPreferences" value="PO" onclick=""/>
                          <span class="custom-control-indicator indicator-danger"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                  <td class="text-right">
                    <div><small>0.00 / 0.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="offInvoicePref_0" name="oip_00001" type="radio" class="custom-control-input" 
                            form="updateBuyerPreferences" value="PO"/>
                          <span class="custom-control-indicator indicator-info"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                <td class="text-right">
                  <small>500.00</small>
                </td>


                <td class="text-right edit-items" >
                    <small>51</small>
                </td>


                <td class="text-right edit-items" >
                    <small>15.00</small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="costPref-0" name="cp_00001" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-danger"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>


                <td class="text-right edit-items" >
                    <small>-0.05</<small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="offInvoicePref-0" name="oip_00001" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-info"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>

                <td class="text-right">
                  <small>
660.45                  </small>
                </td>
              <td class="text-right">
                  <small class="text-danger text-right">-160.45</small>
              </td>
              <td class="text-right">
                  <small class="text-danger">-1</small>
              </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
            </tr>
            <tr >
              <input type="hidden" name="invoiceItemSeqId" value="00003" form="updateInvoiceQtyAndCostForm"/>
              <td><small>10011000000000 - 10011 - <strong>Chicken</strong></small></td>
                <td class="text-right">
                  <small>55</small>
                </td>
                  <td class="text-right">
                    <div><small>15.00 / 15.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="costPref-1" name="cp_00003" type="radio" class="custom-control-input" 
                          form="updateBuyerPreferences" value="PO" onclick=""/>
                          <span class="custom-control-indicator indicator-danger"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                  <td class="text-right">
                    <div><small>0.00 / 0.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="offInvoicePref_1" name="oip_00003" type="radio" class="custom-control-input" 
                            form="updateBuyerPreferences" value="PO"/>
                          <span class="custom-control-indicator indicator-info"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                <td class="text-right">
                  <small>825.00</small>
                </td>


                <td class="text-right edit-items" >
                    <small>52</small>
                </td>


                <td class="text-right edit-items" >
                    <small>20.00</small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="costPref-1" name="cp_00003" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-danger"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>


                <td class="text-right edit-items" >
                    <small>-0.05</<small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="offInvoicePref-1" name="oip_00003" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-info"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>

                <td class="text-right">
                  <small>
1,037.40                  </small>
                </td>
              <td class="text-right">
                  <small class="text-danger text-right">-212.40</small>
              </td>
              <td class="text-right">
                  <small class="text-success">3</small>
              </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
            </tr>
            <tr >
              <input type="hidden" name="invoiceItemSeqId" value="00005" form="updateInvoiceQtyAndCostForm"/>
              <td><small>10012000000000 - 10012 - <strong>Eggplant Parmesan</strong></small></td>
                <td class="text-right">
                  <small>60</small>
                </td>
                  <td class="text-right">
                    <div><small>20.00 / 20.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="costPref-2" name="cp_00005" type="radio" class="custom-control-input" 
                          form="updateBuyerPreferences" value="PO" onclick=""/>
                          <span class="custom-control-indicator indicator-danger"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                  <td class="text-right">
                    <div><small>0.00 / 0.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="offInvoicePref_2" name="oip_00005" type="radio" class="custom-control-input" 
                            form="updateBuyerPreferences" value="PO"/>
                          <span class="custom-control-indicator indicator-info"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                <td class="text-right">
                  <small>1,200.00</small>
                </td>


                <td class="text-right edit-items" >
                    <small>55</small>
                </td>


                <td class="text-right edit-items" >
                    <small>25.00</small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="costPref-2" name="cp_00005" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-danger"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>


                <td class="text-right edit-items" >
                    <small>-0.10</<small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="offInvoicePref-2" name="oip_00005" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-info"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>

                <td class="text-right">
                  <small>
1,369.50                  </small>
                </td>
              <td class="text-right">
                  <small class="text-danger text-right">-169.50</small>
              </td>
              <td class="text-right">
                  <small class="text-success">5</small>
              </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
            </tr>
            <tr >
              <input type="hidden" name="invoiceItemSeqId" value="00007" form="updateInvoiceQtyAndCostForm"/>
              <td><small>10013000000000 - 10013 - <strong>Garden Salad</strong></small></td>
                <td class="text-right">
                  <small>65</small>
                </td>
                  <td class="text-right">
                    <div><small>2.00 / 2.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="costPref-3" name="cp_00007" type="radio" class="custom-control-input" 
                          form="updateBuyerPreferences" value="PO" onclick=""/>
                          <span class="custom-control-indicator indicator-danger"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                  <td class="text-right">
                    <div><small>0.00 / 0.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="offInvoicePref_3" name="oip_00007" type="radio" class="custom-control-input" 
                            form="updateBuyerPreferences" value="PO"/>
                          <span class="custom-control-indicator indicator-info"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                <td class="text-right">
                  <small>130.00</small>
                </td>


                <td class="text-right edit-items" >
                    <small>60</small>
                </td>


                <td class="text-right edit-items" >
                    <small>30.00</small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="costPref-3" name="cp_00007" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-danger"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>


                <td class="text-right edit-items" >
                    <small>-0.10</<small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="offInvoicePref-3" name="oip_00007" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-info"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>

                <td class="text-right">
                  <small>
1,644.50                  </small>
                </td>
              <td class="text-right">
                  <small class="text-danger text-right">-1,514.50</small>
              </td>
              <td class="text-right">
                  <small class="text-success">10</small>
              </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
            </tr>
            <tr >
              <input type="hidden" name="invoiceItemSeqId" value="00009" form="updateInvoiceQtyAndCostForm"/>
              <td><small>10014000000000 - 10014 - <strong>Chef Salad</strong></small></td>
                <td class="text-right">
                  <small>70</small>
                </td>
                  <td class="text-right">
                    <div><small>5.00 / 5.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="costPref-4" name="cp_00009" type="radio" class="custom-control-input" 
                          form="updateBuyerPreferences" value="PO" onclick=""/>
                          <span class="custom-control-indicator indicator-danger"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                  <td class="text-right">
                    <div><small>-1.00 / -1.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="offInvoicePref_4" name="oip_00009" type="radio" class="custom-control-input" 
                            form="updateBuyerPreferences" value="PO"/>
                          <span class="custom-control-indicator indicator-info"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                <td class="text-right">
                  <small>280.00</small>
                </td>


                <td class="text-right edit-items" >
                    <small>62</small>
                </td>


                <td class="text-right edit-items" >
                    <small>10.00</small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="costPref-4" name="cp_00009" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-danger"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>


                <td class="text-right edit-items" >
                    <small>-0.10</<small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="offInvoicePref-4" name="oip_00009" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-info"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>

                <td class="text-right">
                  <small>
613.80                  </small>
                </td>
              <td class="text-right">
                  <small class="text-danger text-right">-333.80</small>
              </td>
              <td class="text-right">
                  <small class="text-success">8</small>
              </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
            </tr>
            <tr >
              <input type="hidden" name="invoiceItemSeqId" value="00011" form="updateInvoiceQtyAndCostForm"/>
              <td><small>10015000000000 - 10015 - <strong>Greek Salad</strong></small></td>
                <td class="text-right">
                  <small>75</small>
                </td>
                  <td class="text-right">
                    <div><small>10.00 / 10.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="costPref-5" name="cp_00011" type="radio" class="custom-control-input" 
                          form="updateBuyerPreferences" value="PO" onclick=""/>
                          <span class="custom-control-indicator indicator-danger"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                  <td class="text-right">
                    <div><small>-1.00 / -1.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="offInvoicePref_5" name="oip_00011" type="radio" class="custom-control-input" 
                            form="updateBuyerPreferences" value="PO"/>
                          <span class="custom-control-indicator indicator-info"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                <td class="text-right">
                  <small>675.00</small>
                </td>


                <td class="text-right edit-items" >
                    <small>64</small>
                </td>


                <td class="text-right edit-items" >
                    <small>12.00</small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="costPref-5" name="cp_00011" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-danger"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>


                <td class="text-right edit-items" >
                    <small>-0.10</<small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="offInvoicePref-5" name="oip_00011" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-info"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>

                <td class="text-right">
                  <small>
761.60                  </small>
                </td>
              <td class="text-right">
                  <small class="text-danger text-right">-86.60</small>
              </td>
              <td class="text-right">
                  <small class="text-success">11</small>
              </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
            </tr>
            <tr >
              <input type="hidden" name="invoiceItemSeqId" value="00013" form="updateInvoiceQtyAndCostForm"/>
              <td><small>10016000000000 - 10016 - <strong>Caesar Salad</strong></small></td>
                <td class="text-right">
                  <small>80</small>
                </td>
                  <td class="text-right">
                    <div><small>4.00 / 4.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="costPref-6" name="cp_00013" type="radio" class="custom-control-input" 
                          form="updateBuyerPreferences" value="PO" onclick=""/>
                          <span class="custom-control-indicator indicator-danger"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                  <td class="text-right">
                    <div><small>-0.50 / -0.50</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="offInvoicePref_6" name="oip_00013" type="radio" class="custom-control-input" 
                            form="updateBuyerPreferences" value="PO"/>
                          <span class="custom-control-indicator indicator-info"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                <td class="text-right">
                  <small>280.00</small>
                </td>


                <td class="text-right edit-items" >
                    <small>69</small>
                </td>


                <td class="text-right edit-items" >
                    <small>18.00</small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="costPref-6" name="cp_00013" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-danger"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>


                <td class="text-right edit-items" >
                    <small>-0.10</<small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="offInvoicePref-6" name="oip_00013" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-info"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>

                <td class="text-right">
                  <small>
1,235.10                  </small>
                </td>
              <td class="text-right">
                  <small class="text-danger text-right">-955.10</small>
              </td>
              <td class="text-right">
                  <small class="text-success">11</small>
              </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
            </tr>
            <tr >
              <input type="hidden" name="invoiceItemSeqId" value="00015" form="updateInvoiceQtyAndCostForm"/>
              <td><small>10017000000000 - 10017 - <strong>Grilled Chicken</strong></small></td>
                <td class="text-right">
                  <small>85</small>
                </td>
                  <td class="text-right">
                    <div><small>15.00 / 15.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="costPref-7" name="cp_00015" type="radio" class="custom-control-input" 
                          form="updateBuyerPreferences" value="PO" onclick=""/>
                          <span class="custom-control-indicator indicator-danger"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                  <td class="text-right">
                    <div><small>-2.00 / -2.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="offInvoicePref_7" name="oip_00015" type="radio" class="custom-control-input" 
                            form="updateBuyerPreferences" value="PO"/>
                          <span class="custom-control-indicator indicator-info"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                <td class="text-right">
                  <small>1,105.00</small>
                </td>


                <td class="text-right edit-items" >
                    <small>70</small>
                </td>


                <td class="text-right edit-items" >
                    <small>30.00</small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="costPref-7" name="cp_00015" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-danger"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>


                <td class="text-right edit-items" >
                    <small>-0.10</<small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="offInvoicePref-7" name="oip_00015" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-info"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>

                <td class="text-right">
                  <small>
2,093.00                  </small>
                </td>
              <td class="text-right">
                  <small class="text-danger text-right">-988.00</small>
              </td>
              <td class="text-right">
                  <small class="text-success">15</small>
              </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
            </tr>
            <tr >
              <input type="hidden" name="invoiceItemSeqId" value="00017" form="updateInvoiceQtyAndCostForm"/>
              <td><small>10018000000000 - 10018 - <strong>Fresh Mozzarella</strong></small></td>
                <td class="text-right">
                  <small>90</small>
                </td>
                  <td class="text-right">
                    <div><small>6.00 / 6.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="costPref-8" name="cp_00017" type="radio" class="custom-control-input" 
                          form="updateBuyerPreferences" value="PO" onclick=""/>
                          <span class="custom-control-indicator indicator-danger"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                  <td class="text-right">
                    <div><small>-1.00 / -1.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="offInvoicePref_8" name="oip_00017" type="radio" class="custom-control-input" 
                            form="updateBuyerPreferences" value="PO"/>
                          <span class="custom-control-indicator indicator-info"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                <td class="text-right">
                  <small>450.00</small>
                </td>


                <td class="text-right edit-items" >
                    <small>75</small>
                </td>


                <td class="text-right edit-items" >
                    <small>2.00</small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="costPref-8" name="cp_00017" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-danger"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>


                <td class="text-right edit-items" >
                    <small>-0.10</<small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="offInvoicePref-8" name="oip_00017" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-info"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>

                <td class="text-right">
                  <small>
142.50                  </small>
                </td>
              <td class="text-right">
                  <small class="text-success text-right">307.50</small>
              </td>
              <td class="text-right">
                  <small class="text-success">15</small>
              </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
            </tr>
            <tr >
              <input type="hidden" name="invoiceItemSeqId" value="00019" form="updateInvoiceQtyAndCostForm"/>
              <td><small>10019000000000 - 10019 - <strong>Tomato</strong></small></td>
                <td class="text-right">
                  <small>95</small>
                </td>
                  <td class="text-right">
                    <div><small>2.00 / 2.00</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="costPref-9" name="cp_00019" type="radio" class="custom-control-input" 
                          form="updateBuyerPreferences" value="PO" onclick=""/>
                          <span class="custom-control-indicator indicator-danger"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                  <td class="text-right">
                    <div><small>-0.50 / -0.50</small></div>
                    
                    <div>
                        <label class="custom-control custom-radio">
                          <input id="offInvoicePref_9" name="oip_00019" type="radio" class="custom-control-input" 
                            form="updateBuyerPreferences" value="PO"/>
                          <span class="custom-control-indicator indicator-info"></span>
                          <span class="custom-control-label"><small>Buyer's</small></span>
                        </label>
                    </div>
                  </td>
                <td class="text-right">
                  <small>142.50</small>
                </td>


                <td class="text-right edit-items" >
                    <small>80</small>
                </td>


                <td class="text-right edit-items" >
                    <small>5.00</small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="costPref-9" name="cp_00019" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-danger"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>


                <td class="text-right edit-items" >
                    <small>-0.10</<small>
                    <div>
                          <label class="custom-control custom-radio">
                            <input id="offInvoicePref-9" name="oip_00019" type="radio" class="custom-control-input" 
                                form="updateBuyerPreferences" value="INV" onclick=""/>
                            <span class="custom-control-indicator indicator-info"></span>
                            <span class="custom-control-label"><small>Vendor's</small></span>
                          </label>
                    </div>
                </td>

                <td class="text-right">
                  <small>
367.50                  </small>
                </td>
              <td class="text-right">
                  <small class="text-danger text-right">-225.00</small>
              </td>
              <td class="text-right">
                  <small class="text-success">20</small>
              </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
                <td class="text-right">
                    <small>0.00</small>
                </td>
            </tr>
      </tbody>
      <tfoot class="fixed-footer">
        <tr class="info">
          <td><strong><small>Total</small></strong></td>
        <td class="text-right"><strong><small>725</small></strong></td>
        <td></td>
        <td></td>
        <td class="text-right"><strong><small>5,587.50</small></strong></td>
        <td class="text-right"><strong><small>628</small></strong></td>
        <td></td>
        <td></td>
        <td class="text-right">
          <strong>
            <small>
9,925.35            </small>
          </strong>
        </td>
        <td class="text-right">
            <strong class="text-danger"><small>-4,337.85</small></strong>
          </td>
          <td class="text-right">
              <strong class="text-success"><small>97</small></strong>
          </td>
          <td class="text-right"><strong><small>0.00</small></strong></td>
          <td class="text-right"><strong><small>0.00</small></strong></td>
          <td class="text-right"><strong><small>0.00</small></strong></td>
        </tr>
      </tfoot>
    </table>

<div class="row ">
  <div class="col-sm-6 ">
  <div class="panel panel-default ">
    <div class="panel-heading ">
      <h3 class="panel-title ">Invoice Adjustments</h3>
    </div>
    <table class="table table-striped table-bordered table-hover ">
      <thead>
        <tr>
          <th class="col-sm-9 ">Code</th>
          <th class="col-sm-2 text-right ">Amount ($)</th>
            <th class="col-sm-1 text-center ">Action</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td class="col-sm-9 ">01 - PRICING ERROR</td>
            <td class="col-sm-2 text-right ">
                  <span class="text-danger "><strong>-276.00</strong></span>
            </td>
              <td class="col-sm-1 text-center ">
              </td>
          </tr>
          <tr>
            <td class="col-sm-9 ">03 - EXTENSION ERROR</td>
            <td class="col-sm-2 text-right ">
                <div class="input-group pull-right ">
  <input type="text " 
  name="amount "
  class="form-control max-priceLength text-right input-sm required maskPrice "
  
  form="update-invoice-items-CODE_03 "
  id="amount "
  
  
  
  
  
  
  
    value="0.00 "
  
  
  
  
  
  
  
  
  />
                </div>
            </td>
              <td class="col-sm-1 text-center ">
                  <form method="post " id="update-invoice-items-CODE_03 " class="requireValidation ajaxMe " novalidate="novalidate " action="/commerce/control/createUpdateInvoiceAdjustment "
                      data-successMethod="#invoice-overview-10110 " data-errorMethod="#invoice-overview-10110 ">

                    <button class="btn btn-link relative " type="submit ">
                      <i class="fa fa-floppy-o fa-lg "></i><span class="ajax-loader abs " style="display:none; "></span>
                    </button>
                  </form>
              </td>
          </tr>
          <tr>
            <td class="col-sm-9 ">06 - QUANTITY ERROR</td>
            <td class="col-sm-2 text-right ">
                  <span class="text-success "><strong>87.00</strong></span>
            </td>
              <td class="col-sm-1 text-center ">
              </td>
          </tr>
          <tr>
            <td class="col-sm-9 ">07 - INCORRECT PROD</td>
            <td class="col-sm-2 text-right ">
                <div class="input-group pull-right ">
  <input type="text " 
  name="amount "
  class="form-control max-priceLength text-right input-sm required maskPrice "
  
  form="update-invoice-items-CODE_07 "
  id="amount "
  
  
  
  
  
  
  
    value="0.00 "
  
  
  
  
  
  
  
  
  />
                </div>
            </td>
              <td class="col-sm-1 text-center ">
                  <form method="post " id="update-invoice-items-CODE_07 " class="requireValidation ajaxMe " novalidate="novalidate " action="/commerce/control/createUpdateInvoiceAdjustment "
                      data-successMethod="#invoice-overview-10110 " data-errorMethod="#invoice-overview-10110 ">

                    <button class="btn btn-link relative " type="submit ">
                      <i class="fa fa-floppy-o fa-lg "></i><span class="ajax-loader abs " style="display:none; "></span>
                    </button>
                  </form>
              </td>
          </tr>
          <tr>
            <td class="col-sm-9 ">24 - INCORRECT DISC</td>
            <td class="col-sm-2 text-right ">
                  <span class="text-danger "><strong>-16.00</strong></span>
            </td>
              <td class="col-sm-1 text-center ">
              </td>
          </tr>
          <tr>
            <td class="col-sm-9 ">GA - FREE GOODS</td>
            <td class="col-sm-2 text-right ">
                <div class="input-group pull-right ">
  <input type="text " 
  name="amount "
  class="form-control max-priceLength text-right input-sm required maskPrice "
  
  form="update-invoice-items-CODE_GA "
  id="amount "
  
  
  
  
  
  
  
    value="0.00 "
  
  
  
  
  
  
  
  
  />
                </div>
            </td>
              <td class="col-sm-1 text-center ">
                  <form method="post " id="update-invoice-items-CODE_GA " class="requireValidation ajaxMe " novalidate="novalidate " action="/commerce/control/createUpdateInvoiceAdjustment "
                      data-successMethod="#invoice-overview-10110 " data-errorMethod="#invoice-overview-10110 ">

                    <button class="btn btn-link relative " type="submit ">
                      <i class="fa fa-floppy-o fa-lg "></i><span class="ajax-loader abs " style="display:none; "></span>
                    </button>
                  </form>
              </td>
          </tr>
        <tr>
          <td><strong>Total</strong></td>
          <td class="col-sm-2 text-right ">
              <span class="text-danger "><strong>-292.00</strong></span>
          </td>
            <td>
            </td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
  <div class="col-sm-6 ">
  <div class="panel panel-default ">
    <div class="panel-heading ">
      <h3 class="panel-title ">Accounting Distribution</h3>
    </div>
    <table class="table table-striped table-bordered table-hover ">
      <thead>
        <tr>
          <th class="col-sm-6 ">Account Name</th>
          <th class="col-sm-1 text-right ">Store</th>
          <th class="col-sm-1 text-right ">Department</th>
          <th class="col-sm-1 text-right ">Acct</th>
          <th class="col-sm-1 text-right ">Amount ($)</th>
            <th class="col-sm-1 text-center ">Action</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td>Inventory Grocery</td>
              <td>
      <input type="text " id="storeIdUpdate " name="ac_storeId " value="990 " data-label="Store " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex=" " placeholder="Store
                                "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteStoreId?searchValueFieldName=ac_storeId&amp;entityName=Facility&amp;searchfield=facilityId, facilityName&amp;searchDistinct=" data-param-source="
                                " form="update-accounting-adjustment-1410 " />

              </td>
              <td>
      <input type="text " id="departmentIdUpdate " name="ac_departmentId " value="1 " data-label="Department " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex="
                                " placeholder="Department "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteDeptId?searchValueFieldName=ac_departmentId&amp;entityName=FacilityLocation&amp;searchfield=locationSeqId&amp;searchDistinct=true
                                " data-param-source=" " form="update-accounting-adjustment-1410 " />

              </td>
            <td class="text-right ">1410</td>
            <td class="text-right ">
                <span class="text-success "><strong>9,925.35</strong></span>
            </td>
              <td>
                <form method="post " id="update-accounting-adjustment-1410 " class="requireValidation ajaxMe " action="/commerce/control/updateAccountingAdjustment "
                    data-successMethod="#invoice-overview-10110 " data-errorMethod="#invoice-overview-10110 " >

                  <button class="btn btn-link relative " type="submit ">
                    <i class="fa fa-floppy-o fa-lg "></i><span class="ajax-loader abs " style="display:none; "></span>
                  </button>
                </form>
              </td>
          </tr>
          <tr>
            <td>Whse Variance Grocery</td>
              <td>
      <input type="text" id="storeIdUpdate" name="ac_storeId " value="990 " data-label="Store " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex=" " placeholder="Store
                                "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteStoreId?searchValueFieldName=ac_storeId&amp;entityName=Facility&amp;searchfield=facilityId, facilityName&amp;searchDistinct=" data-param-source="
                                " form="update-accounting-adjustment-1411 " />
      
              </td>
              <td>
      <input type="text " id="departmentIdUpdate " name="ac_departmentId " value="1 " data-label="Department " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex="
                                " placeholder="Department "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteDeptId?searchValueFieldName=ac_departmentId&amp;entityName=FacilityLocation&amp;searchfield=locationSeqId&amp;searchDistinct=true
                                " data-param-source=" " form="update-accounting-adjustment-1411 " />

              </td>
            <td class="text-right ">1411</td>
            <td class="text-right ">
                <span class="text-success "><strong>0.00</strong></span>
            </td>
              <td>
                <form method="post " id="update-accounting-adjustment-1411 " class="requireValidation ajaxMe " action="/commerce/control/updateAccountingAdjustment "
                    data-successMethod="#invoice-overview-10110 " data-errorMethod="#invoice-overview-10110 " >

                  <button class="btn btn-link relative " type="submit ">
                    <i class="fa fa-floppy-o fa-lg "></i><span class="ajax-loader abs " style="display:none; "></span>
                  </button>
                </form>
              </td>
          </tr>
          <tr>
            <td>Cash Discounts Variance Grocery</td>
              <td>
      <input type="text " id="storeIdUpdate " name="ac_storeId " value="990 " data-label="Store " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex=" " placeholder="Store
                                "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteStoreId?searchValueFieldName=ac_storeId&amp;entityName=Facility&amp;searchfield=facilityId, facilityName&amp;searchDistinct=" data-param-source="
                                " form="update-accounting-adjustment-1412 " />

              </td>
              <td>
      <input type="text " id="departmentIdUpdate " name="ac_departmentId " value="1 " data-label="Department " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex="
                                " placeholder="Department "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteDeptId?searchValueFieldName=ac_departmentId&amp;entityName=FacilityLocation&amp;searchfield=locationSeqId&amp;searchDistinct=true
                                " data-param-source=" " form="update-accounting-adjustment-1412 " />

              </td>
            <td class="text-right ">1412</td>
            <td class="text-right ">
                <span class="text-success "><strong>0.00</strong></span>
            </td>
              <td>
                <form method="post " id="update-accounting-adjustment-1412 " class="requireValidation ajaxMe " action="/commerce/control/updateAccountingAdjustment "
                    data-successMethod="#invoice-overview-10110 " data-errorMethod="#invoice-overview-10110 " >

                  <button class="btn btn-link relative " type="submit ">
                    <i class="fa fa-floppy-o fa-lg "></i><span class="ajax-loader abs " style="display:none; "></span>
                  </button>
                </form>
              </td>
          </tr>
          <tr>
            <td>Freight</td>
              <td>
      <input type="text " id="storeIdUpdate " name="ac_storeId " value="990 " data-label="Store " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex=" " placeholder="Store
                                "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteStoreId?searchValueFieldName=ac_storeId&amp;entityName=Facility&amp;searchfield=facilityId, facilityName&amp;searchDistinct=" data-param-source="
                                " form="update-accounting-adjustment-3310 " />

              </td>
              <td>
      <input type="text " id="departmentIdUpdate " name="ac_departmentId " value="1 " data-label="Department " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex="
                                " placeholder="Department "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteDeptId?searchValueFieldName=ac_departmentId&amp;entityName=FacilityLocation&amp;searchfield=locationSeqId&amp;searchDistinct=true
                                " data-param-source=" " form="update-accounting-adjustment-3310 " />

              </td>
            <td class="text-right ">3310</td>
            <td class="text-right ">
                <span class="text-success "><strong>1.00</strong></span>
            </td>
              <td>
                <form method="post " id="update-accounting-adjustment-3310 " class="requireValidation ajaxMe " action="/commerce/control/updateAccountingAdjustment "
                    data-successMethod="#invoice-overview-10110 " data-errorMethod="#invoice-overview-10110 " >

                  <button class="btn btn-link relative " type="submit ">
                    <i class="fa fa-floppy-o fa-lg "></i><span class="ajax-loader abs " style="display:none; "></span>
                  </button>
                </form>
              </td>
          </tr>
          <tr>
            <td>Back Haul Income</td>
              <td>
      <input type="text " id="storeIdUpdate " name="ac_storeId " value="990 " data-label="Store " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex=" " placeholder="Store
                                "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteStoreId?searchValueFieldName=ac_storeId&amp;entityName=Facility&amp;searchfield=facilityId, facilityName&amp;searchDistinct=" data-param-source="
                                " form="update-accounting-adjustment-3220 " />

              </td>
              <td>
      <input type="text " id="departmentIdUpdate " name="ac_departmentId " value="1 " data-label="Department " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex="
                                " placeholder="Department "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteDeptId?searchValueFieldName=ac_departmentId&amp;entityName=FacilityLocation&amp;searchfield=locationSeqId&amp;searchDistinct=true
                                " data-param-source=" " form="update-accounting-adjustment-3220 " />

              </td>
            <td class="text-right ">3220</td>
            <td class="text-right ">
                <span class="text-success "><strong>0.00</strong></span>
            </td>
              <td>
                <form method="post " id="update-accounting-adjustment-3220 " class="requireValidation ajaxMe " action="/commerce/control/updateAccountingAdjustment "
                    data-successMethod="#invoice-overview-10110 " data-errorMethod="#invoice-overview-10110 " >

                  <button class="btn btn-link relative " type="submit ">
                    <i class="fa fa-floppy-o fa-lg "></i><span class="ajax-loader abs " style="display:none; "></span>
                  </button>
                </form>
              </td>
          </tr>
          <tr>
            <td>      <input type="text " id="glAccountId " name="ac_glAccountId " value=" " data-label="GL Account " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size="
                                " tabIndex=" " placeholder="GL Account "  class="autoCompleter form-control required " data-action="/commerce/control/AutoCompleteGlAccount?searchValueFieldName=ac_glAccountId&amp;entityName=GlAccount&amp;searchfield=glAccountId, accountName,
                                glAccountTypeId&amp;searchDistinct=" data-param-source=" " form="add-accounting-adjustment " />

</td>
            <td>
      <input type="text " id="storeId " name="ac_storeId " value=" " data-label="Store " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex=" " placeholder="Store
                                "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteStoreId?searchValueFieldName=ac_storeId&amp;entityName=Facility&amp;searchfield=facilityId, facilityName&amp;searchDistinct=" data-param-source="
                                " form="add-accounting-adjustment " />

            </td>
            <td>
      <input type="text " id="departmentId " name="ac_departmentId " value=" " data-label="Department " data-group-element=" " data-add-new-suggestions-url=" " data-successMethod=" " data-field-name=" "    maxLength=" " size=" " tabIndex="
                                " placeholder="Department "  class="autoCompleter form-control required text-right " data-action="/commerce/control/AutoCompleteDeptId?searchValueFieldName=ac_departmentId&amp;entityName=FacilityLocation&amp;searchfield=locationSeqId&amp;searchDistinct=true
                                " data-param-source=" " form="add-accounting-adjustment " />

            </td>
            <td class="text-right ">-</td>
            <td>  <input type="text " 
  name="amount "
  class="form-control max-priceLength text-right required maskPrice "
  
  form="add-accounting-adjustment "
  
  
  
  
  
  
  
  
  placeholder="$0.00 "
  
  
  
  
  
  
  
  />
</td>
            </td>
            <td class="text-center ">
              <form method="post " id="add-accounting-adjustment " class="requireValidation ajaxMe " action="/commerce/control/addAccountingAdjustment "
                  data-successMethod="#invoice-overview-10110 " data-errorMethod="#invoice-overview-10110 " >

                <button class="btn btn-link relative " type="submit ">
                  <i class="fa fa-plus fa-lg "></i><span class="ajax-loader abs " style="display:none; "></span>
                </button>
              </form>
            </td>
          </tr>
        <tr>
          <td><strong>Total</strong></td>
          <td></td>
          <td></td>
          <td></td>
          <td class=" text-right ">
              <span class="text-success "><strong>9,926.35</strong></span>
          </td>
            <td></td>
        </tr>
      </tbody>
    </table>
<style>
	/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
@import url("tpl/font-awesome.min.css");
@import url("//fonts.googleapis.com/css?family=Open+Sans:400,600");
@import url("//fonts.googleapis.com/css?family=Roboto:400");
.label a, .label .btn-link {
  color: #fff;
}

.starcolor {
  color: gold;
}

/*End of Style badge*/
@media (max-width: 1200px) {
  .container {
    width: initial !important;
  }
}
html {
  overflow-y: scroll;
}

body {
  font-family: 'Open Sans',Calibri,Candara,Arial,sans-serif;
  background: #e9e9e9;
}

input, button, select, textarea {
  font-family: 'Open Sans',Calibri,Candara,Arial,sans-serif;
}

a:hover {
  text-decoration: none;
}

a:focus {
  text-decoration: none;
}

a.no-color {
  color: #333;
}

.btn {
  padding: 5px 15px 5px 15px;
}

.btn-link:hover {
  text-decoration: none;
}

.btn-link:focus, .btn-link:active {
  outline: none !important;
}

.well {
  background-color: #fcfcfc;
  border-color: #f3f3f3;
  box-shadow: none;
}

.thumbnail {
  word-wrap: break-word;
}

.overlay-parent {
  position: relative;
}

ul.info-tiles {
  margin-left: 0;
  list-style: none;
}

ul.info-tiles > li {
  /*display:inline-block;*/
  float: left;
  /* margin-bottom:20px;*/
  vertical-align: top;
  word-break: break-word;
}

ul.info-tiles h3 {
  font-size: 15px;
  margin: 0;
}

ul.info-tiles dl {
  margin: 0;
}

ul.info-tiles textarea {
  width: 100%;
  padding: 0;
}

@media (min-width: 992px) and (max-width: 1199px) {
  ul.info-tiles > li {
    border-left: #ccc 1px solid;
    padding-right: 12px;
    padding-left: 12px;
    width: 25%;
  }

  ul.info-tiles > li:nth-child(4n+1) {
    border-left: 0;
    padding-right: 0;
    padding-left: 0;
  }

  ul.info-tiles .dl-horizontal dt {
    clear: none;
    float: none;
    text-align: left;
    width: auto;
  }

  ul.info-tiles .dl-horizontal dd {
    margin-left: 0;
  }

  ul.info-tiles > li:last-child:nth-child(3) {
    width: 50%;
  }

  .navbar-nav .title h1 {
    max-width: 594px;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  ul.info-tiles > li {
    border-left: #ccc 1px solid;
    padding-left: 10px;
    padding-left: 10px;
    width: 50%;
  }

  ul.info-tiles > li:nth-child(2n+1) {
    border-left: 0;
    padding-left: 0;
    padding-left: 0;
  }

  ul.info-tiles > li:nth-child(2n+1), ul.info-tiles > li:nth-child(2n+2) {
    margin-top: 20px;
  }

  ul.info-tiles > li:last-child:nth-child(3) {
    width: 100%;
    min-height: 0 !important;
  }

  .navbar-nav .title h1 {
    max-width: 320px;
  }
}
@media (min-width: 1200px) {
  ul.info-tiles > li {
    border-left: #ccc 1px solid;
    padding-left: 15px;
    padding-right: 15px;
    width: 25%;
  }

  ul.info-tiles > li:nth-child(4n+1) {
    border-left: 0;
    padding-left: 0;
    padding-left: 0;
    width: 25%;
  }

  ul.info-tiles > li:last-child {
    padding-right: 0;
    width: 25%;
  }

  ul.info-tiles > li:last-child:nth-child(3) {
    width: 50%;
  }

  .navbar-header .title h1 {
    max-width: 740px;
  }
}
@media (max-width: 767px) {
  ul.info-tiles > li {
    width: 100%;
    margin-bottom: 15px;
  }

  ul.info-tiles > li:last-child:nth-child(3) {
    width: 100%;
    margin-bottom: 0;
  }
}
.divider:before {
  content: '|';
  color: #ccc;
  display: inline-block;
  text-align: center;
  width: 9px;
}

.clear {
  clear: both;
}

.tilesBackground .breadcrumb {
  background-color: transparent;
  padding-right: 15px;
}

.navbar-nav .title {
  margin-top: 15px;
  margin-left: 5px;
  margin-right: 5px;
}

.navbar-nav .sub-title {
  margin-top: 20px;
  margin-left: 5px;
  margin-right: 5px;
}

.navbar-nav .title h1 {
  color: #777;
  margin-bottom: 0px;
  margin-top: 0px;
  font-size: 20px;
}

.navbar-nav .sub-title {
  color: #777;
  font-size: 12px;
  margin-bottom: 0px;
}

#back-arrow {
  position: fixed;
  left: 2%;
  top: 50%;
}

#back-arrow:focus {
  outline: none;
}

.dropdown-menu.left {
  left: inherit;
  right: 0;
}

.nav-tabs > li > a > h3 {
  margin: 5px 0 5px 0;
  padding-right: 15px;
}

.nav-tabs > li > .close {
  margin-right: 5px;
  position: relative;
  z-index: 1;
}

.dialog-ajax-loader {
  margin-left: 47.8%;
}

.ajax-loader {
  background: url(../img/ajax-loader.gif) no-repeat center;
  display: inline-block;
  height: 18px;
  width: 18px;
}

.ajax-loader-medium {
  background: url(../img/ajax-loader-medium.gif) no-repeat center;
  position: absolute;
  height: 100%;
  width: 100%;
  background-color: rgba(255, 255, 255, 0.75);
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  z-index: 2;
}

.ajax-loader-div {
  background: url(../img/ajax-loader-medium.gif) no-repeat center;
  position: absolute;
  background-color: rgba(255, 255, 255, 0.75);
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  z-index: 2;
}

.ajax-loader-area {
  height: 500px;
}

/* Styling for scroll pagination */
.loading {
  text-align: center;
  margin: 0px 35%;
  display: none;
}

.top-link, a.top-link:hover, .top-link-search, a.top-link-search:hover {
  position: fixed;
  right: 20px;
  bottom: 100px;
}

.top-link, .top-link-search {
  color: white;
  border-radius: 5px 5px 5px 5px;
  background: gray;
  padding: 5px 10px;
}

#back-arrow {
  position: fixed;
  left: 2%;
  top: 50%;
}

#back-arrow:focus {
  outline: none;
}

/* make notification-messages to stick to the top of the page, and visible above the lookup's overlay */
#notification-messages {
  -webkit-mask-position: 0px 0px;
  -webkit-mask-size: 100% 300px;
  -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.45, black), color-stop(0.5, rgba(0, 0, 0, 0)));
  top: 0;
  left: 0;
  right: 0;
  max-height: 160px;
  margin-bottom: 8px;
  overflow: hidden;
  position: fixed;
  width: 100%;
  z-index: 1100;
}

#notification-messages .alert {
  font-size: 14px;
  font-weight: bold;
  margin: 2px 10px 0 10px;
}

.alert {
  padding: 8px 35px 8px 14px;
  margin-bottom: 0;
}

.carousel-item {
  height: 150px;
}

tr.collapse.in {
  display: table-row;
}

.selectable .ui-selecting {
  background: #93EC9A;
}

.selectable .ui-selected {
  background: #83DD8B;
  color: white;
}

.selectable .selectable-item.ui-selectee:hover {
  background: #E4E9E8;
}

.selectable .selectable-item.ui-selecting:hover {
  background: #93EC9A;
}

.selectable .selectable-item.ui-selected:hover {
  background: #78CA7F;
}

.selectable .created {
  background: #16C01C;
}

.link {
  color: blue !important;
}

.divider-vertical {
  border-right: 1px solid #CCCCCC;
}

/*sale discontinuation icons*/
.sale-discontinuation {
  counter-reset: step;
  height: 30px;
  display: inline-block;
}

ul.sale-discontinuation li {
  display: inline-block;
  width: 45px;
  padding-right: 10px;
  padding-top: 5px;
}

ul.progressbar-content > li {
  padding-right: 0px;
  top: 2px;
}

.sale-discontinuation li input {
  display: none;
}

.sale-discontinuation .progressbar-content li button {
  background: none;
  border: none;
}

.sale-discontinuation .progressbar-content .discontinue {
  margin-left: -10px;
  padding: 0px;
}

.progressbar-content {
  padding: 0;
  padding-left: 5px;
}

.sale-menu-padding {
  padding-right: 3px !important;
}

#product-detail-btn {
  padding: 5px 15px 5px 5px;
}

ul#product-detail-btn li {
  padding-left: 10px;
}

#sale-discontinuation-btn {
  margin-right: -12px;
  padding-top: 1px;
  padding-left: 5px;
}

#sale-status-btn {
  padding-right: 0px;
  width: 20px;
}

#sale-discontinuation-date-btn {
  margin-left: -18x;
}

.sale-dis-margin {
  margin-left: -12px;
}

.progressbarv2 {
  margin-top: 10px;
  margin-left: -100px;
  counter-reset: step;
  min-height: 70px;
  display: inline-block;
}

.progressbar-header {
  margin-top: 10px;
  margin-left: -80px;
  counter-reset: step;
  display: inline-block;
}

.progressbar-header li {
  list-style-type: none;
  width: 170px;
  float: left;
  height: 5px;
  text-align: center;
}

.progressbarv2 li input {
  display: none;
}

.progressbarv2 li {
  list-style-type: none;
  width: 170px;
  float: left;
  height: 25px;
  text-align: center;
  left-padding: 5px;
}

.progressbarv2 .progressbar-content li .ui-datepicker-trigger {
  background: none;
  border: none;
  margin-left: -156px;
}

.progressbarv2 .progressbar-content li button {
  background: none;
  border: none;
  margin-left: -156px;
}

.progressbarv2 .progressbar-content .created {
  background: url("../img/dots-sprite.png") no-repeat scroll rgba(0, 0, 0, 0);
  background-position: 2px -215px;
  margin-left: 73px;
}

.progressbarv2 .progressbar-content .created.active {
  background: url("../img/dots-sprite.png") no-repeat scroll rgba(0, 0, 0, 0);
  background-position: 2px -239px;
  margin-left: 73px;
}

.progressbarv2 .progressbar-content .introduced {
  background: url("../img/dots-sprite.png") no-repeat scroll rgba(0, 0, 0, 0);
  background-position: 2px -18px;
  margin-left: 73px;
}

.progressbarv2 .progressbar-content .introduced.active {
  background: url("../img/dots-sprite.png") no-repeat scroll rgba(0, 0, 0, 0);
  background-position: 2px -41px;
  margin-left: 73px;
}

.progressbarv2 .progressbar-content .discontinued {
  background: url("../img/dots-sprite.png") no-repeat scroll rgba(0, 0, 0, 0);
  background-position: 2px -150px;
  margin-left: 73px;
}

.progressbarv2 .progressbar-content .discontinued.active {
  background: url("../img/dots-sprite.png") no-repeat scroll rgba(0, 0, 0, 0);
  background-position: 2px -172px;
  margin-left: 73px;
}

.progressbarv2 .progressbar-content .deactive {
  background: url("../img/dots-sprite2.png") no-repeat scroll rgba(0, 0, 0, 0);
  background-position: 1px -194px;
  margin-left: 73px;
}

.progressbarv2 > li:after {
  content: '';
  border-top: 1px dotted;
  width: 157px;
  height: 1px;
  position: relative;
  left: -538px;
  margin: -10px 0px 0px 635px;
  display: inline-block;
  float: left;
  color: #bbb;
}

.progressbarv2 > li:last-child:after {
  content: none;
}

.progressbarv2 .progressbar-content .timeline-tooltip {
  width: 20px;
}

.progressbarv2 .progressbar-content .timeline-tooltip.active {
  width: 25px;
}

/*This style is used to hide the small button displayed along with datepicker.*/
.datepicker-content button.ui-datepicker-trigger {
  visibility: hidden;
}

.datepicker-content label {
  margin-bottom: 0px;
}

label.error {
  color: #FF0000;
}

/*Fix to add margin below navbar*/
.navbar {
  margin-bottom: 10px;
  height: 30px;
}

/*Styling for date picker for bootstrap 3.0 to display it above navbar */
.ui-datepicker {
  z-index: 10001 !important;
}

.view-calendar button {
  background: url(jquery/images/cal.gif) no-repeat !important;
  display: inline-block;
  border: none;
  vertical-align: center;
  margin-top: 3px;
  height: 20px;
  width: 20px;
}

/*This is temporary fix we will fix it better way*/
.navbar .margin-help {
  margin-top: 15px;
}

@media (max-width: 767px) {
  .navbar .margin-help {
    margin-top: 25px;
    margin-left: 15px;
  }
}
.ui-dialog .ui-dialog-content {
  max-height: 500px;
}

.menu-link:focus {
  outline: none;
}

.menu-link:hover {
  color: #428bca;
}

.tilesBackground {
  position: absolute;
  width: 100%;
  z-index: 1001;
  background-color: #dddddd;
}

/* Small menus styling */
.menus-small {
  width: 100%;
  position: absolute;
  z-index: 1001;
  background-color: #dddddd;
}

.menus-small .section .menu-nav {
  margin: 0;
}

.menus-small .section .menu-nav li {
  padding-top: 0;
  padding-bottom: 0;
  margin: 0;
}

.menus-small .section .menu-nav li:first-child {
  background-color: transparent;
  padding-top: 10px;
  padding-bottom: 10px;
}

.menus-small a.parent-menu-link {
  display: block;
  padding-bottom: 10px;
  border-bottom: 1px solid #dddddd;
  padding-top: 10px;
  font-size: 16px;
}

.menus-small .section .sub-menus li:first-child {
  padding: 0;
}

a.child-menu-link {
  display: block;
  padding-bottom: 10px;
  padding-top: 10px;
  box-shadow: inset 0 12px 12px -14px rgba(0, 0, 0, 0.5);
}

a.menu-small-close {
  display: block;
}

.menus-small .expand-icon {
  margin-right: 5px;
}

.menus-small .compress-icon {
  margin-right: 5px;
}

/* Small menus styling */
#menu-search {
  position: absolute;
  top: 10px;
  z-index: 1;
}

ul.menu-nav {
  padding-left: 0;
}

.metro .tile {
  margin-left: 10px;
  margin-bottom: 10px;
  margin-right: 0px;
  margin-top: 0px;
  padding: 0 5px;
  width: 13%;
  height: 140px;
  word-break: inherit;
  transition: all 0.1s ease;
}

.metro .tile:hover {
  outline: inherit;
  border: 2px solid #dddddd;
}

.metro .tile .text4 {
  font-size: 16px;
  line-height: 1.5;
  text-align: center;
  margin-top: 35px;
  max-height: inherit;
}

.menu-items .csr, .menu-items .cs-vw {
  background-color: #483D8B;
}

.menu-items .buynowcms, .menu-items .buynowcms-vw {
  background-color: #C71585;
}

.menu-items .dealer, .menu-items .dealer-vw {
  background-color: #DC143C;
}

.menu-items .dataimport, .menu-items .dataimport-vw {
  background-color: #008641;
}

.menu-items .admin, .menu-items .admin-vw {
  background-color: #D2691E;
}

.menu-items .procurement, .menu-items .procurement-vw {
  background-color: #8A2BE2;
}

.menu-items .warehouse, .menu-items .warehouse-vw {
  background-color: #B8860B;
}

.menu-items .merchandising, .menu-items .merchandising-vw {
  background-color: #8D6E63;
}

.menu-items .pim, .menu-items .pim-vw {
  background-color: #008000;
}

.menu-items .arAp, .menu-items .arAp-vw {
  background-color: #2F4F4F;
}

.menu-items .financialReports, .menu-items .financialReports-vw {
  background-color: #37917D;
}

.menu-items .ebay, .menu-items .ebay-vw {
  background-color: #A87133;
}

.menu-items .reports, .menu-items .reports-vw {
  background-color: #8B008B;
}

.menu-items .manufacturing, .menu-items .manufacturing-vw {
  background-color: #085ebb;
}

.menu-items .rtma_vw, .menu-items .rtma_vw {
  background-color: #4E8975;
}

.menu-items .rtma, .menu-items .rtma {
  background-color: #ADA96E;
}

.menu-items .magento, .menu-items .magento {
  background-color: #2d444f;
}

.favorites {
  padding-bottom: 0;
  margin-right: 10px;
}

.section .menu-nav .csr, .section .menu-nav .cs-vw {
  background-color: #483D8B;
}

.section .menu-nav .buynowcms, .section .menu-nav .buynowcms-vw {
  background-color: #C71585;
}

.section .menu-nav .dealer, .section .menu-nav .dealer-vw {
  background-color: #DC143C;
}

.section .menu-nav .dataimport, .section .menu-nav .dataimport-vw {
  background-color: #008641;
}

.section .menu-nav .admin, .section .menu-nav .admin-vw {
  background-color: #D2691E;
}

.section .menu-nav .procurement, .section .menu-nav .procurement-vw {
  background-color: #8A2BE2;
}

.section .menu-nav .warehouse, .section .menu-nav .warehouse-vw {
  background-color: #B8860B;
}

.section .menu-nav .merchandising, .section .menu-nav .merchandising-vw {
  background-color: #8D6E63;
}

.section .menu-nav .pim, .section .menu-nav .pim-vw {
  background-color: #008000;
}

.section .menu-nav .arAp, .section .menu-nav .arAp-vw {
  background-color: #2F4F4F;
}

.section .menu-nav .financialReports, .section .menu-nav .financialReports-vw {
  background-color: #37917D;
}

.section .menu-nav .ebay, .section .menu-nav .ebay-vw {
  background-color: #A87133;
}

.section .menu-nav .reports, .section .menu-nav .reports-vw {
  background-color: #8B008B;
}

.section .menu-nav .manufacturing, .section .menu-nav .manufacturing-vw {
  background-color: #085ebb;
}

.section .menu-nav .rtma_vw, .section .menu-nav .rtma_vw {
  background-color: #4E8975;
}

.section .menu-nav .rtma, .section .menu-nav .rtma {
  background-color: #ADA96E;
}

.section .menu-nav .magento, .section .menu-nav .magento {
  background-color: #2d444f;
}

.break {
  word-break: break-all;
}

.section {
  position: relative;
  /*width: 810px !important;*/
  width: auto;
  height: auto;
}

.section .menu-nav li {
  background-color: #2C83EF;
}

.section .menu-nav li {
  width: 100%;
  list-style-type: none;
  text-align: center;
  padding-top: 5px;
  padding-bottom: 5px;
  color: white;
  margin-bottom: 20px;
}

.section .menu-nav li a {
  color: white;
  text-decoration: none;
  font-weight: bold;
}

.table-collapse {
  border: 1px solid #dddddd;
  border-collapse: separate;
  *border-collapse: collapse;
  border-radius: 4px;
  width: 100%;
}

.table-collapse thead tr th {
  font-weight: bold;
  line-height: 20px;
}

.table-collapse tr.parent {
  cursor: pointer;
  background-image: -moz-linear-gradient(bottom, #f5f5f5 0%, #e3e3e3 100%);
}

.table-collapse thead:first-child tr:first-child th:first-child {
  border-top-left-radius: 4px;
}

.table-collapse thead:first-child tr:first-child th:last-child {
  border-top-right-radius: 4px;
}

.table-collapse th, .table-collapse td {
  padding: 8px;
  text-align: left;
  vertical-align: top;
}

.table thead th {
  font-size: 13px;
}

.table-plain tbody tr {
  border-style: hidden;
}

.table-plain tbody tr td {
  padding-right: 8px;
  padding-top: 6px;
  padding-bottom: 0;
}

/* Styling fix for pagination bar inslide navbar */
.navbar .pagination {
  margin: 6px 6px 2px 0;
}

/* Styling fix for bulk-aciton checkbox inside the table rows, to make it render below the one in the navbar */
.table .bulk-action-checkbox {
  padding-left: 15px;
  padding-right: 0;
  width: 38px;
}

.table .action-radio {
  padding-left: 15px;
  padding-right: 0;
  width: 38px;
}

.action-radio .radio {
  margin-top: 0;
  margin-bottom: 0;
}

.action-radio .radio .dynamic-ajax-loader {
  right: 5px;
  top: 2px;
}

/* Styling fix for data lists inside tables */
td > dl:first-child {
  margin-top: 0;
}

/* Countered jQuery styling for select boxes and buttons present in the dialogs */
.ui-dialog-content select, .ui-dialog-content button {
  font-size: 14px;
}

/* Styling for scroll pagination */
.loading {
  text-align: center;
  margin: 0px 35%;
  display: none;
}

.top-link, a.top-link:hover {
  position: fixed;
  right: 20px;
  bottom: 100px;
}

.top-link {
  color: white;
  border-radius: 5px 5px 5px 5px;
  background: gray;
  padding: 5px 10px;
}

/* Styling for selected table rows */
.table tr.active {
  background-color: #DFF;
}

.table-striped tbody > tr.active:nth-child(odd) > td,
.table-striped tbody > tr.active:nth-child(odd) > th {
  background-color: #BFF;
}

.table-hover tbody tr.active:hover > td,
.table-hover tbody tr.active :hover > th {
  background-color: #CFF;
}

.table > tbody > tr.active > td {
  background-color: #DFF;
}

/* Fix Stylings which are overriding by jquery.elrte-1.3.css*/
.ui-button.ui-widget.ui-state-default.ui-corner-all.ui-button-text-only {
  padding: 5px 14px 6px;
  font-size: 13px;
}

.ui-dialog .ui-dialog-titlebar {
  padding: 5px 15px;
}

.ui-dialog .ui-dialog-title {
  margin: 0;
}

.ui-dialog .ui-dialog-title, .ui-dialog .ui-dialog-content {
  font-size: 13px;
}

.ui-dialog .ui-dialog-buttonpane button {
  margin: .5em .4em .5em 0;
}

.ui-widget {
  font-size: 13px;
}

/* Styling for sticky table header plugin */
.table-sticky .header-fixed {
  background: #f5f5f5;
  border-bottom: 1px solid #ddd;
  border-radius: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  position: fixed;
  top: 0;
  z-index: 1020;
}

/* Styling for fixed table header plugin */
.fht-table, .fht-table tbody {
  margin: 0;
}

.fht-table-wrapper .fht-tbody {
  overflow: auto;
}

.fht-table-wrapper .fht-table .fht-cell {
  overflow: hidden;
  height: 1px;
}

/* Added styling for required field asterisk */
.asterisk {
  color: #FF0000;
}

/* Styling for unsaved class */
.unsaved:before {
  content: "*";
}

/* Styling for dl width */
.dl-horizontal dt {
  font-size: 13px;
}

.dl-mini dt {
  width: 50px;
}

.dl-mini dd {
  margin-left: 70px;
}

.dl-small dt {
  width: 100px;
}

.dl-small dd {
  margin-left: 120px;
}

.dl-large dt {
  width: 200px;
}

.dl-large dd {
  margin-left: 220px;
}

.dl-xlarge dt {
  width: 250px;
}

.dl-xlarge dd {
  margin-left: 270px;
}

.dl-xxlarge dt {
  width: 300px;
}

.dl-xxlarge dd {
  margin-left: 320px;
}

@media (max-width: 767px) {
  .dl-horizontal-xs dd, .dl-horizontal-xs dt {
    width: 50%;
    float: left;
    margin: 0;
  }
}
/* Styling to fix the tiny transparent text box, which appears next to the date fields, added margin instead */
.view-calendar [type=text].hasDatepicker {
  display: none;
}

.view-calendar button {
  margin-left: 3px;
}

/* Styling to show icons of font-awesome-3.0.2.min.css in large size*/
.fa.fa-8x {
  font-size: 8em;
}

.fa-8x.fa-border {
  border-width: 8px;
  border-radius: 10px;
}

.fa-plus {
  margin-top: 3px;
  margin-bottom: 2px;
}

tr.order-item-backordered, td.order-item-backordered, div.order-item-backordered {
  background: #F5EBCC;
}

tr.order-item-cancelled, td.order-item-cancelled, div.order-item-cancelled {
  background: #EBCCCC;
}

tr.order-item-shipped, td.order-item-shipped, div.order-item-shipped {
  background: #E1EFCC;
}

tr.order-item-picked, td.order-item-picked, div.order-item-picked {
  background: #E3E9EC;
}

.well-small h3 {
  margin-top: 0;
  font-size: 20px;
  color: #666666;
}

@media (min-width: 768px) and (max-width: 991px) {
  .popover {
    max-width: 500px;
  }

  [data-tooltip-target].fa, [data-tooltip-content].fa, [data-tooltip-target].glyphicon, [data-tooltip-content].glyphicon, i[data-tooltip-target], i[data-tooltip-content] {
    font-size: 1.5em;
    padding-left: 5px;
  }
}
@media (min-width: 992px) {
  .popover {
    max-width: 768px;
  }
}
.popover .popover-content .static-popover-content {
  max-width: 250px;
  word-break: break-word;
}

#map {
  border: 1px solid #979797;
  width: 600px;
  height: 450px;
  margin: 15px auto;
}

/*Styling for csv and pdf icons*/
.pdf-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  vertical-align: text-top;
  background-image: url("../img/pdf.png");
  background-repeat: no-repeat;
  background-size: 20px 20px;
}

/*Styling for small pdf icons generally used in label*/
.small-pdf-icon {
  display: inline-block;
  width: 15px;
  height: 15px;
  vertical-align: text-top;
  background-image: url("../img/pdf.png");
  background-repeat: no-repeat;
  background-size: 15px 15px;
}

.csv-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  vertical-align: text-top;
  background-image: url("../img/excel-logo.png");
  background-repeat: no-repeat;
  background-size: 20px 20px;
}

.csv-icon.fa-2x {
  display: inline-block;
  width: 32px;
  height: 32px;
  vertical-align: text-top;
  background-image: url("../img/excel-logo.png");
  background-repeat: no-repeat;
  background-size: 32px 32px;
}

.pdf-icon.fa-2x {
  display: inline-block;
  width: 32px;
  height: 32px;
  vertical-align: text-top;
  background-image: url("../img/pdf.png");
  background-repeat: no-repeat;
  background-size: 32px 32px;
}

.google-drive-icon {
  display: inline-block;
  width: 32px;
  height: 32px;
  vertical-align: text-top;
  background-image: url("../img/google-drive-logo.png");
  background-repeat: no-repeat;
  background-size: 32px 32px;
}

.google-drive-icon.fa-2x {
  display: inline-block;
  width: 57px;
  height: 57px;
  vertical-align: text-top;
  background-image: url("../img/google-drive-logo.png");
  background-repeat: no-repeat;
  background-size: 57px 57px;
}

.dropbox-icon {
  display: inline-block;
  width: 32px;
  height: 32px;
  vertical-align: text-top;
  background-image: url("../img/dropbox-logo.jpeg");
  background-repeat: no-repeat;
  background-size: 32px 32px;
}

.dropbox-icon.fa-2x {
  display: inline-block;
  width: 57px;
  height: 57px;
  vertical-align: text-top;
  background-image: url("../img/dropbox-logo.jpeg");
  background-repeat: no-repeat;
  background-size: 57px 57px;
}

/*progressbar */
.progressbar {
  margin-top: 10px;
  counter-reset: step;
  height: 40px;
  display: inline-block;
}

.progressbar li {
  list-style-type: none;
  width: 208px;
  float: left;
  color: #999999;
  height: 13px;
  text-align: center;
}

.progressbar li a {
  text-decoration: none;
  display: block;
  color: inherit;
}

.progressbar li:before {
  content: counter(step);
  counter-increment: step;
  font-weight: bold;
  font-size: medium;
  text-align: center;
  width: 30px;
  line-height: 30px;
  display: block;
  color: white;
  background: #999999;
  border-radius: 50px;
  margin: -3px auto 3px auto;
}

.progressbar li.active:before {
  background: #41b7d8;
}

.progressbar li.active {
  color: #41b7d8;
}

.progressbar li:last-child:after {
  content: none;
}

.progressbar li:after {
  content: '';
  border-top: 1px dotted;
  width: 180px;
  height: 1px;
  position: relative;
  left: -506px;
  margin: -37px 0px 0px 624px;
  display: inline-block;
  float: left;
  color: #bbb;
}

.progressbarwrapper {
  text-align: center;
  margin-bottom: 9px;
}

/*For separating h5 element, class name need to be changed after discussion.*/
h5.divider-x2 {
  border-top: 1px solid lightgray;
  text-align: center;
  margin-top: 25px;
}

h5.divider-x2 span {
  background: none repeat scroll 0 0 #FCFCFC;
  padding: 0 10px;
  position: relative;
  top: -10px;
}

.thfloat-table {
  background: #f9f9f9;
  border: 0px;
}

/*For inserting horizontal divider line for block level elements.*/
.divider-x {
  border-bottom: 1px solid lightgrey;
}

/*Styling for flot charts.*/
.content {
  width: 100%;
  margin: 12px 0 0 2px;
  position: relative;
}

.graph-main-container {
  border: 1px solid #ddd;
  background-color: #FFFFFF;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.thumbnails .graph-main-container {
  margin-bottom: 20px;
}

.graph-container {
  width: 100%;
  height: 450px;
  padding: 17px 27px 22px;
  margin: 2px 0 0 0;
}

.graph-container.graph-container-xs {
  height: 150px;
}

.graph-container.graph-container-sm {
  height: 300px;
}

.graph-container.graph-container-lg {
  height: 600px;
}

.graph-placeholder {
  width: 100%;
  height: 100%;
  font-size: 14px;
  line-height: 1.2em;
}

/* Styling to properly align dl as center */
.dl-center dt {
  width: 550px;
}

.dl-center dd {
  margin-left: 570px;
}

.form-group label {
  font-family: 'Roboto', Calibri, Candara, Arial, sans-serif;
  margin-bottom: 3px;
}

.iconlist {
  padding-left: 0;
}

.iconlist li {
  display: inline;
  margin-right: 5px;
}

.iconlist li a, .iconlist li button {
  padding: 0;
}

.label {
  vertical-align: middle;
}

h3 .label, h4 .label {
  margin-bottom: 6px;
}

.well > h4 {
  margin-top: 5px;
  margin-bottom: 15px;
}

.page-popover {
  position: absolute;
  top: 0;
  left: 184px;
  /*This is a hack. Needs to be fixed later when required. */
  display: block;
  z-index: 0;
}

.page-headline {
  padding-bottom: 9px;
  margin: 15px 0 15px;
  border-bottom: 4px solid #eee;
}

.page-popover.popover .arrow {
  top: 29px;
  /*This is a hack. Needs to be fixed later when required. */
}

.page-popover.popover .popover-inner {
  min-height: 58px;
  /*According to top offset of popover arrow. */
}

.popover .list-group {
  margin-bottom: 0;
}

.popover .list-group-item {
  border-width: 1px 0;
}

.popover .list-group-item:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.popover .list-group-item {
  border-bottom: 0;
}

.position-rel {
  position: relative;
}

/* Styling for legend used in pie chart */
.legend-holder {
  width: 100%;
  padding: 17px 27px 22px;
}

.legend-holder > table {
  width: 100%;
}

.legendColorBox > div {
  width: 14px;
}

/* Styling for making any element relatively fixed (sticky) */
.affix-main {
  position: relative;
}

.affix-wrapper {
  position: absolute;
}

.affix-main .affix-wrapper .affix {
  position: fixed;
  top: 40px;
}

.navbar.affix {
  position: fixed;
  width: 1170px;
  top: 0;
  z-index: 1;
}

.relative {
  position: relative;
}

.abs {
  position: absolute;
}

.abs-top {
  top: 0;
}

.abs-left {
  left: 0;
}

.abs-bottom {
  bottom: 0;
}

.abs-right {
  right: 0;
}

.caption-link {
  margin-top: 2px;
}

.caption-link:focus {
  outline: none;
}

.fa-bg, .fa-bg:hover {
  background: rgba(249, 249, 249, 0.75);
  border-radius: 3px;
}

.fa-bg.abs-top.abs-left {
  border-radius: 0 0 3px 0;
}

.fa-bg.abs-top.abs-right {
  border-radius: 0 0 0 3px;
}

.fa-bg.abs-bottom.abs-left {
  border-radius: 0 3px 0 0;
}

.fa-bg.abs-bottom.abs-right {
  border-radius: 3px 0 0 0;
}

.select-variant {
  position: relative;
  left: 160px;
}

.preview-variant {
  padding-left: 0px;
}

.variant-section {
  height: 300px;
  overflow-y: auto;
}

.product-features {
  max-height: 150px;
  overflow-y: auto;
}

/*Added styling for divider vertical as it is removed from bootstrap 3.0*/
.navbar .divider-vertical {
  border-left: 1px solid #F2F2F2;
  border-right: 1px solid #FFFFFF;
  height: 50px;
  margin: 0 9px;
}

/*Styling for displaying bottom and right border in table column when col-* classes are being used*/
table td[class*="col-"], table th[class*="col-"] {
  position: inherit;
}

/*Styling for displaying chosen box similar to form-control box and to adjust its height and hover properties*/
.chzn-choices {
  border: 1px solid #CCCCCC !important;
  border-radius: 4px 4px 4px 4px;
}

.chzn-choices .search-choice {
  margin-top: 5px !important;
}

.chzn-container-active .chzn-choices {
  border-color: #66AFE9 !important;
  box-shadow: 0 0 8px rgba(102, 175, 233, 0.6) !important;
  outline: 0 none !important;
}

.chzn-container input {
  height: 30px !important;
}

.chzn-container-multi .chzn-choices .search-field input {
  font-family: 'Open Sans', Calibri, Candara, Arial, sans-serif !important;
}

/*Styling for displaying nav-tabs and nav-pills properly*/
.nav-tabs, nav-pills {
  margin-bottom: 20px;
}

/*Styling for customizing position of title and sub-title*/
.nav-tabs a h3 {
  height: 32px;
  margin-top: 0px;
}

.nav-tabs a h3 small {
  font-size: 10px;
}

.nav-tabs a img {
  margin: 2px 0px 4px 0px;
}

/*To display label normal*/
label {
  font-weight: normal;
  font-size: 14px;
}

/*to display close icon over tab heading*/
.nav .nav-tabs > li > a {
  position: relative;
}

.modal-header .close {
  font-size: 30px;
}

/*To display overlay over navbar*/
.ui-widget-overlay {
  z-index: 1001;
}

/*Style to add bottom margin*/
.form-margin {
  margin-bottom: 5px;
}

/*Style for proper alignment in Date Picker*/
.view-calendar input.form-control {
  width: 80%;
  display: inline-block;
}

/*Style to add bottom margin for thumbnails*/
.thumbnail {
  margin-bottom: 25px;
}

/* This style is for fixing the issue in which select all checkbox functionality is not working (in navigation bar) in popup*/
.navbar {
  position: static;
}

/*We need to review and improve following CSS code.*/
.switch-button.has-switch {
  vertical-align: -8px;
  z-index: 0;
  margin-right: 5px;
  margin-top: 2px;
  margin-left: 10px;
}

.switch-button .fa-check {
  display: none;
}

.switch-button .dynamic-ajax-loader {
  position: absolute;
  bottom: 0;
  z-index: 100;
}

.switch-on .dynamic-ajax-loader {
  left: 46%;
  top: 18%;
}

.switch-off .dynamic-ajax-loader {
  left: 46%;
  top: 18%;
}

.switch-left, .switch-right {
  padding-left: 3px;
  padding-right: 3px;
}

.red-bold {
  color: #E03034;
  font-weight: bold;
}

.green-bold {
  color: #54A755;
  font-weight: bold;
}

.btn.btn-default.btn-round {
  border-radius: 20px;
  font-size: 20px;
  font-weight: 900;
  padding: 0 10px;
  margin-top: 8px;
}

.microbox {
  border: 1px solid white;
  width: 30px;
  height: 20px;
  outline: solid 1px #ccc;
  margin-right: 10px;
  display: inline-block;
}

.microbox-list li {
  margin-top: 10px;
  vertical-align: top;
}

.microbox-list li:first-child {
  margin-top: 0px;
}

/* This style is enabling the popover on disabled buttons */
.btn.disabled[data-tooltip-target] {
  pointer-events: auto;
}

/* This style is for allowing the autocompleter results above the Bootstrap3.0 modal */
.ui-autocomplete {
  z-index: 1060 !important;
  word-wrap: break-word;
}

.bs-callout {
  margin-bottom: 20px;
  padding: 20px;
  border-left: 3px solid #eee;
}

.bs-callout-danger {
  background-color: #fdf7f7;
  border-color: #eed3d7;
}

.bs-callout-danger h4 {
  color: #B94A48;
}

/* (Begin) Related to credit card type validation.*/
ul.card_logos {
  display: inline-block;
  margin: 0;
  padding: 0;
}

.CCT_VISA, .CCT_MASTERCARD, .CCT_AMERICANEXPRESS, .CCT_DISCOVER, .card_diners, .card_jcb {
  display: inline-block;
  width: 50px;
  height: 30px;
  overflow: hidden;
  text-align: left;
  text-indent: -999px;
  background: url(../img/sprite-cards.png) 0 0 no-repeat;
}

.CCT_MASTERCARD {
  background-position: -55px 0;
}

.CCT_AMERICANEXPRESS {
  background-position: -110px 0;
}

.CCT_DISCOVER {
  background-position: -165px 0;
}

.card_diners {
  background-position: -220px 0;
}

.card_jcb {
  background-position: -660px 0;
}

.is_visa li, .is_mastercard li, .is_amex li, .is_discover li, .is_diners li, .is_jcb li, .is_nothing li {
  opacity: .2;
}

.is_visa li.CCT_VISA, .is_mastercard li.CCT_MASTERCARD, .is_amex li.CCT_AMERICANEXPRESS, .is_discover li.CCT_DISCOVER, .is_diners li.card_diners, .is_jcb li.card_jcb {
  opacity: 1;
}

.cc-number {
  vertical-align: middle;
}

.cc-name {
  margin-left: -50px;
  margin-top: 2px;
  float: left;
}

/*(End) Related to credit card type validation.*/
.selectable-checkbox {
  border-color: #0088CC;
  box-shadow: 3px 3px 10px #888888;
}

.ui-menu-item {
  word-break: break-word;
}

button .ajax-loader, a .ajax-loader {
  background-color: rgba(255, 255, 255, 0.75);
  border-radius: 3px;
  height: 100%;
  width: 100%;
  bottom: 0;
  left: 0;
  right: 0;
  top: 0;
}

/* CSS for ui-selectable */
.ui-selectable .thumbnail {
  padding: 5px 20px 5px 20px;
}

.ui-selectable .thumbnail:hover {
  border-color: #0088CC;
  box-shadow: 3px 3px 10px #888888;
}

.ui-selectable .ui-selected .thumbnail {
  border-color: #0088CC;
  line-height: 20px;
  box-shadow: 3px 3px 10px #888888;
}

select.chzn-done:disabled + .chzn-container-multi .chzn-choices {
  background-color: #EEEEEE;
  background-image: none;
}

select.chzn-done:disabled + .chzn-disabled {
  opacity: 1 !important;
}

.chzn-container {
  font-size: 14px !important;
}

.chzn-container-single .chzn-default {
  color: #555 !important;
  background-image: inherit !important;
}

.chzn-container-single .chzn-single {
  color: #555 !important;
  background-image: inherit !important;
  font-weight: bold;
}

.chzn-single {
  height: 33px !important;
  border-radius: 5px 0px 0px 5px !important;
}

.chzn-single > div, .chzn-single > span {
  margin-top: 2px;
}

/* Styling for favourite stars on Ezerp menus */
.rgb-fav, .rgb-fav:hover {
  border: none;
  background: none;
  border-radius: 0px 12px 0px 3px !important;
}

button.rgb-fav .ajax-loader {
  background-color: transparent;
}

button.rgb-fav:focus, button.rgb-fav:active {
  outline: none;
  box-shadow: none;
  background-color: transparent;
}

button.rgb-fav i.fa {
  color: gold;
}

button.rgb-fav i.fa-star {
  background: -webkit-radial-gradient(circle, gold, white);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: gold 0px 0px 5px;
  color: gold;
}

/* Styling to show loader while search is performed by Autocompleter*/
.ui-autocomplete-loading {
  background: url(/images/ajax-loader.gif) no-repeat right center;
}

ul.website-dropdown {
  padding: 0;
  border: none;
  width: 150%;
}

ul.website-dropdown ul.sub-list {
  position: absolute;
  top: 0;
  width: 100%;
  left: 100%;
  background-color: #fff;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}

ul.website-dropdown > li > a {
  display: inline;
  padding-right: 0;
  padding-top: 0;
  padding-left: 0;
  color: #555;
  white-space: initial;
}

ul.website-dropdown > li.active > a {
  background-color: #ccc;
  color: #555;
}

ul.website-dropdown > li > a:hover, ul.website-dropdown > li.active > a:hover {
  background-color: transparent;
  text-decoration: none;
  color: white;
}

ul.website-dropdown > li.active, ul.website-dropdown > li.active:hover {
  background-color: #ccc;
  border: none;
}

ul.website-dropdown > li:hover {
  background-color: #428bca;
}

ul.website-dropdown ul.sub-list li:hover {
  background-color: #428bca;
}

ul.website-dropdown ul.sub-list li:hover > a {
  text-decoration: none;
  color: white;
}

ul.website-dropdown ul.sub-list li > a {
  color: #555;
  display: block;
}

ul.website-dropdown ul.sub-list li.active {
  color: #555;
  display: block;
  background-color: #ccc;
  border: none;
}

ul.website-dropdown i.fa-star {
  color: goldenrod;
}

/* CSS related to the width and position of data dialogs*/
.modal {
  top: 0 !important;
}

@media screen and (min-width: 768px) and (max-width: 991px) {
  .modal.half {
    top: 50% !important;
    width: 60% !important;
    margin-left: 20% !important;
    /* This is hackish idea to implement the margin and will be replaced as soon as we'll get new logic for this. */
  }

  .modal.default {
    top: 50% !important;
    width: 80% !important;
    margin-left: -40% !important;
    /* This is hackish idea to implement the margin and will be replaced as soon as we'll get new logic for this. */
  }

  .modal.small {
    top: 50% !important;
    width: 40% !important;
    margin-left: 20% !important;
    /* This is hackish idea to implement the margin and will be replaced as soon as we'll get new logic for this. */
  }
}
@media screen and (min-width: 992px) {
  .modal.half {
    top: 50% !important;
    width: 40% !important;
    margin-left: -20% !important;
    /* This is hackish idea to implement the margin and will be replaced as soon as we'll get new logic for this. */
  }

  .modal.default {
    top: 50% !important;
    width: 80% !important;
    margin-left: -40% !important;
    /* This is hackish idea to implement the margin and will be replaced as soon as we'll get new logic for this. */
  }

  .modal.small {
    top: 50% !important;
    width: 30% !important;
    margin-left: -15% !important;
    /* This is hackish idea to implement the margin and will be replaced as soon as we'll get new logic for this. */
  }
}
/* custom inclusion of left tabs */
.tabs-left > .nav-tabs {
  border-bottom: 0;
}

.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}

.tab-content > .active,
.pill-content > .active {
  display: block;
}

.tabs-left > .nav-tabs > li {
  float: none;
}

.tabs-left > .nav-tabs > li > a {
  min-width: 74px;
  margin-right: 0;
  margin-bottom: 3px;
}

.tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
  border-right: 1px solid #ddd;
}

.tabs-left > .nav-tabs > li > a {
  margin-right: -1px;
  border-radius: 4px 0 0 4px;
}

.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
  border-color: #ddd transparent #ddd #ddd;
  *border-right-color: #ffffff;
}

/*End of left tabs style*/
.logo-container {
  padding-left: 0;
}

.logo-img {
  width: 80px;
}

.logo-container a {
  text-decoration: none;
}

.logo-float i {
  vertical-align: middle;
}

.logo-float {
  padding: 25px 0 0 0;
}

/* CSS related to the font size of the text*/
.text-lg {
  font-size: 20px;
}

.text-md {
  font-size: 14px;
}

.text-sm {
  font-size: 12px;
}

/*Style for tab action icon for left tabs*/
.nav-tabs li .tab-action {
  z-index: 1;
  position: relative;
}

button.tab-action {
  padding: 2px;
  cursor: pointer;
  background: transparent;
  border: 0;
}

.tab-action {
  float: right;
  margin-top: 12px;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.5;
}

ul.ul-style {
  list-style: disc outside none;
  padding-left: 18px;
}

/*Style to display pointer for clickable row*/
td.bulk-action-checkbox, td.bulk-action-checkbox ~ td {
  cursor: pointer;
}

/* Style for images to be uploaded in dialog.*/
.modal span#uploadedImage {
  padding-left: 65px;
}

.modal span#uploadedImage img {
  width: 65px;
}

.tab-overflow {
  max-width: 300px;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

/* Styling for favourites tag. This is temporary, need to rethink on this.*/
label.favorites-label {
  font-weight: bold;
  cursor: pointer;
  display: inline-table;
}

label.favorites-label input {
  margin-right: 5px;
}

/*Style to display ajax loader for drop-down correctly*/
select.js-action-dropdown ~ i.ajax-loader.abs {
  left: 45%;
  top: 17px;
}

.favicon-icon {
  width: 16px;
}

/*Style related to Split button drop-down.*/
.dropdown-menu > li > button:hover,
.dropdown-menu > li > button:focus {
  background-color: #f5f5f5;
  color: #000;
}

.dropdown-menu > li > button.btn-link {
  color: #000;
  text-decoration: none;
}

/*Style for cart summary on small devices*/
.cart-summary-static {
  position: relative;
  top: -10px;
}

/*Base Style for Sticky*/
.initialized.sticky-container {
  position: relative;
}

.initialized .sticky-parent {
  bottom: 0;
  position: absolute;
  top: 0;
}

.initialized .sticky {
  position: fixed;
}

.initialized .sticky.bottom {
  position: absolute;
  bottom: 0;
}

.sticky-clone {
  display: none;
}

.initialized .sticky-clone {
  display: block;
}

/*Style for Create order sticky*/
.initialized .sticky-parent .main-section {
  z-index: 1;
  background-color: white;
}

.initialized .sticky-clone {
  z-index: -1;
}

/* Entypo add-to-list icon styling */
@font-face {
  font-family: 'entypo';
  src: url("fonts/entypo.eot?-r7u6p7");
  src: url("fonts/entypo.eot?#iefix-r7u6p7") format("embedded-opentype"), url("fonts/entypo.woff?-r7u6p7") format("woff"), url("fonts/entypo.ttf?-r7u6p7") format("truetype"), url("fonts/entypo.svg?-r7u6p7#entypo") format("svg");
  font-weight: normal;
  font-style: normal;
}
[class^="entypo-"], [class*=" entypo-"] {
  font-family: 'entypo';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.entypo-add-to-list:before {
  content: "\e600";
}

.order-status-dropdown {
  width: 500px;
  padding-left: 5px !important;
  padding-right: 5px !important;
  padding-top: 10px;
}

.payment-status-dropdown {
  padding-left: 6px;
  padding-top: 10px;
  width: 186px;
  padding-right: 5px;
  padding-bottom: 10px;
}

.voucher-status-dropdown {
  width: 300px;
}

.order-view-title {
  display: inline-block;
}

.status-button button {
  font-weight: bold;
  word-spacing: 3px;
}

.progress {
  margin: 0;
}

.progress.status {
  height: 5px;
}

.badge {
  vertical-align: middle;
}

.badge-position {
  position: relative;
  top: -15px;
}

.status-popover li a {
  display: block;
  text-decoration: none;
}

.status-popover {
  counter-reset: step;
}

.status-popover a {
  white-space: nowrap;
}

.status-popover.incomplete li a:before {
  content: counter(step,decimal);
  counter-increment: step;
  display: inline-block;
  background: none repeat scroll 0 0 #6FDFDF;
  border-radius: 50px 50px 50px 50px;
  width: 20px;
  color: white;
  margin: 0px 2px 5px 0px;
  text-align: center;
}

.status-popover.completed li a:before {
  content: "\f00c";
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  display: inline-block;
  background: none repeat scroll 0 0 #6FDFDF;
  border-radius: 50px 50px 50px 50px;
  width: 20px;
  color: white;
  margin: 0px 2px 5px 0px;
  text-align: center;
}

.custom-pointer {
  cursor: pointer;
}

div.bs-callout-info {
  background-color: #F4F8FA;
  border-color: #5BC0DE;
}

.bs-callout {
  border-left: 3px solid #EEEEEE;
  padding: 20px;
}

.bs-callout-info h4 {
  color: #5BC0DE;
}

.bs-callout h4 {
  margin-bottom: 5px;
  margin-top: 0;
}

.pushdown {
  float: left;
}

.pushdown-hidden {
  display: none;
}

.pushdown-body {
  padding: 0;
  margin: 0;
  clear: both;
  display: block;
  overflow: hidden;
  width: 100%;
}

.facet-list {
  padding-top: 0;
  padding-bottom: 0;
}

.facet-header {
  padding-top: 0;
  padding-bottom: 0;
  background-color: #FAFAFA;
}

.facet-list .checkbox {
  margin-top: 6px;
  margin-bottom: 6px;
}

.facet-list .radio {
  margin-top: 6px;
  margin-bottom: 6px;
}

.facet-list:last-child {
  border-bottom: 0;
}

/* Style for lazy-load */
.lazy-loading {
  background: url("../img/lazy-loading.gif") no-repeat center center;
  height: 40px;
}

/* style for recently updated row. */
.recently-updated {
  border-left: 3px solid #428bca !important;
}

.margin-top-10 {
  margin-top: 10px;
}

.margin-top-6 {
  margin-top: 6px;
}

.margin-top-zero {
  margin-top: 0px;
}

.margin-bottom-zero {
  margin-bottom: 0px !important;
}

.margin-top-neg-32 {
  margin-top: -32px;
}

.margin-top-neg-11 {
  margin-top: -11px;
}

.metro .tile.tile-unstyled {
  cursor: auto;
  width: 148px;
}

.metro .tile.tile-unstyled:hover {
  color: #fff;
}

.chosen-dropdown-icon {
  right: 25px;
  top: 50%;
  margin-top: -10px;
}

/* Style for Blog content*/
.blog-main {
  font-size: 15px;
  line-height: 1.5;
}

.blog-post-title {
  margin-bottom: 5px;
  border-bottom: 1px solid #999;
}

.blog-post-meta {
  margin-bottom: 20px;
  color: #999;
}

/* CSS related to the width and position of data dialogs*/
.modal.fade.in {
  top: 0 !important;
}

@media screen and (max-width: 768px) {
  .modal.half {
    left: inherit;
    width: 100% !important;
  }

  .modal.default {
    top: inherit;
    width: inherit;
  }

  .modal.small {
    left: inherit;
    width: 100% !important;
  }
}
@media screen and (min-width: 768px) and (max-width: 991px) {
  .modal.half {
    left: inherit;
    width: 60% !important;
    margin-left: 20% !important;
    /* This is hackish idea to implement the margin and will be replaced as soon as we'll get new logic for this. */
  }

  .modal.default {
    top: inherit;
    width: 80% !important;
    margin-left: -40% !important;
    /* This is hackish idea to implement the margin and will be replaced as soon as we'll get new logic for this. */
  }

  .modal.small {
    top: 50% !important;
    width: 40% !important;
    margin-left: 30% !important;
    /* This is hackish idea to implement the margin and will be replaced as soon as we'll get new logic for this. */
  }
}
/*Firefox specific style*/
@-moz-document url-prefix() {
  .panel-buttons ul li .btn, .panel-pagination ul li .btn-link {
    padding: 6px 12px 7px;
  }

  #menu-search {
    position: relative;
    margin-bottom: -30px;
    top: 10px;
  }
}
th.tablesorter-header:hover {
  background-color: #ebebeb;
  cursor: pointer;
}

.overflow-x {
  overflow-x: scroll;
}

.caroufredsel_wrapper {
  margin-left: auto !important;
  margin-right: auto !important;
}

ul.info-tiles li > table.info-tile-table tr td:first-child, ul.info-tiles li > table.info-tile-table tr th:first-child {
  padding-left: 0;
  text-align: right;
}

ul.info-tiles li > table.info-tile-table tr th {
  font-size: 13px;
  font-weight: 700;
}

ul.info-tiles li > table.info-tile-table tr td, ul.info-tiles li > table.info-tile-table tr th {
  padding-left: 10px;
}

.carrier {
  margin: 0;
}

.carrier-label {
  margin-top: 5px;
  max-width: 20%;
}

.carrier span.image {
  display: inline-block;
  float: left;
  width: 50px;
  height: 30px;
  margin-right: 5px;
  background-image: url(../img/carrier-sprite.png);
}

.margin-top-10 {
  margin-top: 10px;
}

.margin-left-10 {
  margin-left: 10px;
}

.margin-top-zero {
  margin-top: 0px;
}

.USPS {
  background-position: 0px 0px;
}

.FEDEX {
  background-position: 0px -40px;
}

.UPS {
  background-position: 0px -80px;
  margin-left: -10px;
}

.DHL {
  background-position: 0px -120px;
}

.carrier span.NA, .carrier span._NA_ {
  background-image: none;
}

.carrier span.NA:before {
  content: 'N/A';
  margin-left: 0;
}

.carrier span.NA:before {
  content: 'N/A';
  margin-left: 0;
}

/*Style for White space optimization and panels*/
.square {
  border-radius: 0px !important;
}

.block {
  display: block;
}

.button-bar {
  position: relative;
  right: 0;
  top: 4px;
  float: right;
  margin-right: 95px;
}

.button-bar > form {
  display: inline-block;
}

.button-bar .dropdown-menu {
  right: 0;
  left: inherit;
  margin: 0;
  border-radius: 0;
}

[data-toggle-display] {
  cursor: pointer;
}

.border-top {
  border-top: 1px solid #DDDDDD !important;
}

.border-right {
  border-right: 1px solid #DDDDDD !important;
}

.border-left {
  border-left: 1px solid #DDDDDD !important;
}

.border-bottom {
  border-bottom: 1px solid #DDDDDD !important;
}

.panel {
  margin-bottom: 10px;
}

.panel-heading {
  padding: 10px;
  background-color: #fafafa !important;
  height: 52px;
}

.panel-title {
  margin: 5px;
  display: inline-block;
}

.panel-title > a {
  text-decoration: none;
}

.panel-status {
  display: inline-block;
}

.panel-buttons, .panel-pagination {
  float: right;
}

.panel-buttons > ul, .panel-pagination ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.panel-buttons > ul > li, .panel-pagination ul li {
  display: inline-block;
  float: left;
}

.panel-buttons > ul > li .btn, .panel-pagination ul li .btn-link {
  padding: 6px 12px 6px;
}

.panel-buttons > ul > li:last-child .btn, .panel-pagination ul li:last-child .btn-link {
  border-top-right-radius: 4px;
}

.panel-buttons .dropdown-menu {
  right: 0;
  left: inherit;
  margin: 0;
  border-radius: 0;
}

.panel-buttons button:focus:active {
  outline: none;
}

.panel-pagination > ul > li span {
  border: none;
  padding: 0;
}

.panel .panel-buttons .dropdown button.dropdown-toggle {
  background: none;
}

.panel-head-only {
  margin: 0;
  border-bottom: 0;
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.panel-head-only .panel-buttons ul li:last-child .btn {
  border-radius: 0;
}

.panel-head-only .panel-heading {
  border: 0;
}

@media (max-width: 767px) {
  .panel-buttons ul li {
    display: initial;
    float: initial;
  }

  .panel-status {
    position: relative;
    bottom: 3px;
  }

  /*For inserting horizontal divider line.*/
  .panel-buttons ul li .divider-x {
    border-bottom: 1px solid lightgrey;
  }
}
.ellipsis-bordered > span {
  background: #EEE;
  display: inline-block;
  line-height: 0;
  padding: 0 8px 0;
  color: #aaa;
}

.panel .navbar.navbar-default {
  margin-bottom: 0;
  border-left: 0;
  border-right: 0;
}

.panel > form:last-child > table.table-bordered:last-child, .panel > form:last-child > fieldset > table.table-bordered:last-child {
  margin-bottom: 0;
}

.panel > form > table.table-bordered, .panel > form > fieldset > table.table-bordered {
  border-left-width: 0;
  border-right-width: 0;
}

.panel > form > fieldset > table.table-bordered:last-child {
  border-bottom-width: 0;
}

.panel > form + table.table-bordered {
  border-top: 1px solid #ddd;
}

.panel > form > table.table-bordered > thead > tr > th:first-child, .panel > form > table.table-bordered > tbody > tr > td:first-child,
.panel > form > fieldset > table.table-bordered > thead > tr > th:first-child, .panel > form > fieldset > table.table-bordered > tbody > tr > td:first-child {
  border-left-width: 0;
}

.panel > form > table.table-bordered > thead > tr > th:last-child, .panel > form > table.table-bordered > tbody > tr > td:last-child,
.panel > form > fieldset > table.table-bordered > thead > tr > th:last-child, .panel > form > fieldset > table.table-bordered > tbody > tr > td:last-child {
  border-right-width: 0;
}

.panel > form > table.table-bordered > tbody > tr:last-child > td, .panel > form > fieldset > table.table-bordered > tbody > tr:last-child > td {
  border-bottom-width: 0;
}

.panel .table {
  margin-bottom: 0;
  border-left: 0;
  border-bottom: 0;
  border-right: 0;
}

.panel .table tr:last-child td {
  border-bottom: 0;
}

.panel .table tr td:first-child, .panel .table tr th:first-child {
  border-left: 0;
}

.panel .table tr td:last-child, .panel .table tr th:last-child {
  border-right: 0;
}

/*Adding style from bootstrap 3.0 which is removed in 3.1.1 */
.form-control-static {
  margin-top: 7px;
}

.header-col {
  position: inherit;
}

@media (min-width: 768px) and (max-width: 991px) {
  .pull-right-sm {
    float: right;
    padding-right: 10px;
  }

  .button-bar-container {
    position: absolute;
    left: 0;
    top: 5px;
    width: 738px;
    height: 0;
  }

  .button-bar {
    margin-right: 170px;
  }

  .metro .tile {
    width: 126px;
  }

  .metro .tile .text4 {
    font-size: 18px;
  }

  .divider-vertical {
    border-right: 0;
  }

  .salesRule-progressbar .progressbarv2 li {
    list-style-type: none;
    width: 123px;
    float: left;
    height: 25px;
    text-align: center;
    left-padding: 5px;
  }

  .salesRule-progressbar .progressbar-left {
    margin-left: 53px !important;
  }

  .salesRule-progressbar .progressbarv2 > li:after {
    content: '';
    border-top: 1px dotted;
    width: 115px;
    height: 1px;
    position: relative;
    left: -525px;
    margin: -10px 0px 0px 635px;
    display: inline-block;
    float: left;
    color: #bbb;
  }

  .salesRule-progressbar .progressbarv2 > li:last-child:after {
    content: none;
  }

  .salesChannel-sm .list-inline > li {
    padding-left: 23px;
  }

  .channel-progressbar .progressbarv2 li {
    list-style-type: none;
    width: 105px;
    float: left;
    height: 25px;
    text-align: center;
    left-padding: 5px;
  }

  .channel-progressbar .progressbar-left {
    margin-left: 42px !important;
    margin-top: 12px;
  }

  .channel-progressbar .progressbarv2 > li:after {
    content: '';
    border-top: 1px dotted;
    width: 98px;
    height: 1px;
    position: relative;
    left: -536px;
    margin: -10px 0px 0px 635px;
    display: inline-block;
    float: left;
    color: #bbb;
  }

  .channel-progressbar .progressbarv2 > li:last-child:after {
    content: none;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .pull-right-md {
    float: right;
    padding-right: 20px;
  }

  .button-bar-container {
    position: absolute;
    left: 0;
    top: 5px;
    width: 994px;
    height: 0;
  }

  .button-bar {
    margin-right: 178px;
  }

  .metro .tile {
    width: 140px;
  }
}
@media (min-width: 1200px) {
  .pull-right-lg {
    float: right;
  }

  .button-bar-container {
    position: absolute;
    top: 5px;
    width: 1170px;
    height: 0;
  }

  .button-bar {
    margin-right: 210px;
  }

  .menu-nav.affix, .nav-pills.affix {
    position: fixed;
    margin-top: 20px;
    top: 0px;
    width: 165px;
  }

  .metro .tile {
    width: 13%;
  }
}
.inline {
  display: inline;
}

/*Styling to add an arrow in case of dropdown-menu*/
.dropdown-menu-arrow:before {
  position: absolute;
  top: -7px;
  left: 31px;
  display: inline-block;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-left: 7px solid transparent;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  content: '';
}

.dropdown-menu-arrow:after {
  position: absolute;
  top: -6px;
  left: 32px;
  display: inline-block;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #ffffff;
  border-left: 6px solid transparent;
  content: '';
}

.add-warning {
  margin: 10px 8px 5px 0px;
}

#website-images .img {
  max-height: 110px;
}

/* jQuery.Rating Plugin CSS - http://www.fyneworks.com/jquery/star-rating/ */
div.rating-cancel, div.star-rating {
  background: none repeat scroll 0% 0% transparent;
  cursor: pointer;
  display: block;
  float: left;
  height: 15px;
  overflow: hidden;
  text-indent: -999em;
  width: 17px;
  padding-right: 5px;
}

div.star-rating, div.star-rating a {
  background: url("../../resources/images/details-rating.png") no-repeat scroll 0px 0px transparent;
}

div.rating-cancel a, div.star-rating a {
  display: block;
  width: 16px;
  height: 100%;
  background-position: -15px 0px;
  border: 0;
}

div.star-rating-on a {
  background-position: 0px 0px !important;
}

div.star-rating-hover a {
  background-position: 0px 0;
}

/* Read Only CSS */
div.star-rating-readonly a {
  cursor: default !important;
}

/* Partial Star CSS */
div.star-rating {
  background: none repeat scroll 0% 0% transparent !important;
  overflow: hidden !important;
}

/* END jQuery.Rating Plugin CSS */
/* Enterprise search CSS */
.enterprise-search {
  width: 350px;
  padding-right: 10px;
}

.enterprise-search .pim-facet {
  color: #c0392b;
}

.enterprise-search .csr-facet {
  color: #603cba;
}

.enterprise-search .admin-facet {
  color: #283481;
}

.enterprise-search .app-facet {
  color: #428bca;
}

.enterprise-search.search-elts, .enterprise-search.search-elts-flipped {
  margin-top: -4px;
}

.enterprise-search .search-icon {
  pointer-events: none;
}

.enterprise-search a .fa {
  padding-left: 10px;
  padding-right: 10px;
}

.enterprise-search .dropdown {
  margin-left: -210px;
  margin-top: 2px;
}

.enterprise-search .dropdown .dropdown-menu {
  width: 670px;
  margin-left: 250px;
}

.enterprise-search .dropdown .dropdown-menu .title {
  font-size: 18px;
}

.enterprise-search .doFocus {
  background-color: #f0f0f4;
}

.enterprise-search .app-results {
  padding-top: 5px;
  padding-bottom: 5px;
  border-left: 1px solid #428bca !important;
  padding-left: 5px;
}

.editable-field:hover .edit-icon {
  visibility: visible;
}

.editable-field:hover .editable-content {
  background: none repeat scroll 0 0 #FFFFFF;
  color: #000000;
  outline: 1px solid #AAAAAA;
  cursor: text;
}

.editable-input .editable-content {
  background: none repeat scroll 0 0 #FFFFFF;
  outline: 1px solid #AAAAAA;
  cursor: text;
}

.editable-content {
  padding-right: 6px;
  padding-top: 3px;
  padding-bottom: 3px;
  word-break: break-all;
  max-width: 200px;
}

.editable-input .save-icon {
  visibility: visible;
}

.edit-icon {
  visibility: hidden;
  cursor: pointer;
  white-space: nowrap;
  position: absolute;
  outline: px solid #AAAAAA;
  background-color: #006DCC;
  background-image: linear-gradient(to bottom, #0088CC, #0044CC);
  background-repeat: repeat-x;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  color: #FFFFFF;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  padding: 4px 4px 4px 2px;
  margin-left: -3px;
}

.page-title {
  font-size: large !Important;
  font-family: inherit;
  font-weight: bold;
}

.CodeMirror-ftl {
  height: 420px;
  border-style: none solid solid;
  border-width: 1px;
  border-color: #ccc;
}

.cm-s-default .cm-ftltag {
  color: darkblue;
}

.cm-s-default .cm-ftlmacro {
  color: darkblue;
}

.cm-s-default .cm-ftlcomment {
  color: #A60808;
}

.cm-s-default .cm-ftlword {
  color: #FF33CC;
}

.CodeMirror-fullscreen {
  top: 25px !important;
}

.CodeMirror-linenumbers {
  background-color: white;
}

.codemirror-toolbar {
  margin: 0;
  position: relative;
  border: 1px solid #ccc;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  height: 25px;
}

.codemirror-fulltoolbar {
  margin: 0;
  position: absolute;
  top: 0;
  background-color: white;
  border: 1px solid #ccc;
  height: 25px;
  width: 100%;
  z-index: 9;
}

.codemirror-toolbar a, .codemirror-fulltoolbar a {
  color: grey;
  padding: 0 10px;
}

.codemirror-toolbar i, .codemirror-fulltoolbar i {
  color: grey;
}

.codemirror-info kbd {
  font-size: 12px;
  font-family: 'Lucida Grande';
  padding: 2px 3px;
  border: 1px solid grey;
  border-radius: 4px;
  background-color: white;
  box-shadow: none;
  color: grey;
}

.dataTables_filter {
  margin-top: 5px;
  margin-left: 5px;
}

.dataTables_wrapper table {
  margin: 0;
}

@media (max-width: 767px) {
  .dropdown-menu {
    right: 0;
    left: auto;
  }
}
.no-margin {
  margin: 0 !important;
}

.order-item-xs {
  margin-top: 5px;
}

.no-padding {
  padding: 0;
}

/* lookup input CSS */
.input-group input.form-control.lookup {
  margin-right: 5px;
}

.editableform {
  position: relative;
}

.editable:hover {
  border: 1px solid #ddd;
  border-radius: 4px;
  background-color: white;
}

.editable-group {
  display: inline-block;
  position: relative;
  top: -5px;
}

.editable-submit {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.editable-cancel {
  margin: 0px !Important;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.editable-text {
  padding-right: 0 !Important;
  font-size: 14px !Important;
}

/* Styling for dialog images, where scroll pagination is activated (to disable equal height). */
.dialog-img {
  min-height: 130px;
}

.dialog-img-thumbnail {
  display: block;
  padding: 4px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  word-wrap: break-word;
  margin-bottom: 25px;
}

.dialog-img-thumbnail img, .dialog-img-thumbnail i {
  height: 80px;
}

.dialog-img-thumbnail .description {
  margin-top: 5px;
}

.asset-icon-center {
  padding-top: 10%;
  padding-left: 30%;
}

.dialog-img input[type=checkbox] {
  display: none;
}

.dialog-img input[type=checkbox]:checked + .dialog-img-thumbnail {
  background-color: #dff;
  border: 1px solid #428bca;
  display: block;
}

.dialog-img .dialog-img-thumbnail .checkbox {
  padding: 0;
}

.dialog-panel-header-checkbox {
  margin-top: 5px;
}

img.small-image {
  width: 125px;
  height: 125px;
}

img.extra-small-image {
  width: 52px;
  height: 52px;
}

img.thumbnail-image {
  width: 32px;
  height: 32px;
}

img.medium-image {
  width: 200px;
  height: 200px;
}

.chzn-container {
  font-size: 14px !important;
}

.chzn-single {
  border-radius: 0 !important;
}

.chzn-container-single .chzn-default {
  color: #555 !important;
  background-image: inherit !important;
}

.chzn-container-single .chzn-single {
  color: #555 !important;
  background-image: inherit !important;
}

.parent-link {
  display: block;
  color: #333;
}

.parent-link:focus {
  color: #333;
}

.parent-link:hover {
  color: #333;
}

.child {
  padding-left: 20px;
  padding-bottom: 5px;
  border-left: 1px dotted #ccc;
  position: relative;
}

.child:before {
  content: '----';
  position: absolute;
  left: 0;
  color: #ccc;
}

#editor-col {
  padding-left: 0;
}

.no-padding-cell {
  padding: 0 !important;
}

.no-padding-cell-half {
  padding-left: 8px !important;
  padding-top: 5px !important;
}

.no-padding-cell * {
  border: 0 !important;
}

/*styles for bar of searched tags*/
.strike-on-hover:hover {
  text-decoration: line-through;
  cursor: pointer;
}

.filters .label {
  display: inline-block;
  padding: 0.3em 0.6em 0.4em;
}

.group-member {
  padding-left: 0;
}

.group-member:last-child {
  border-bottom: 0;
}

.group-member:first-child {
  border-top: 0;
}

/* Style for Google address autocompleter
   In case of modal, suggested addresses were not visible because z-index of modal in bootstrap is 1050
*/
.pac-container {
  z-index: 1060;
}

.margin-bottom-10 {
  margin-bottom: 10px;
}

.margin-bottom-20 {
  margin-bottom: 20px;
}

.margin-top-20 {
  margin-top: 20px;
}

.margin-top-30 {
  margin-top: 30px;
}

.margin-top-33 {
  margin-top: 33px;
}

.margin-top-15 {
  margin-top: 15px;
}

.margin-bottom-15 {
  margin-bottom: 15px;
}

.padding-top-10 {
  padding-top: 10px;
}

.padding-bottom-10 {
  padding-bottom: 10px;
}

.padding-bottom-15 {
  padding-bottom: 15px;
}

.padding-left-5 {
  padding-left: 5px;
}

.padding-right-5 {
  padding-right: 5px;
}

.padding-zero {
  padding: 0;
}

.padding-top-6 {
  padding-top: 6px;
}

.panel-ribbon {
  box-shadow: 0px 14px 10px -2px rgba(50, 50, 50, 0.5) !important;
  border-top: 0;
}

.panel_disabled {
  top: 0;
  left: 0;
  width: 100%;
  background: #f2f2f2;
  border: 0.5px solid grey;
  z-index: 10;
  height: 100%;
  opacity: .6;
}

.ribbon {
  padding: 10px 10px 0;
  position: relative;
  color: #444;
  background: #fff;
  border: 1px solid #d2d2d2;
  border-radius: 3px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.ribbonHeader {
  left: -10px;
  margin-right: -19px;
  color: #cfcfcf;
  position: relative;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
}

.ribbonHeader:before {
  content: ' ';
  width: 0;
  height: 0;
  bottom: -11px;
  position: absolute;
  border-top: 11px solid #428bca;
  border-left: 11px solid transparent;
}

.ribbonHeader:after {
  content: ' ';
  width: 0;
  height: 0;
  bottom: -11px;
  position: absolute;
  border-top: 11px solid #428bca;
  border-right: 11px solid transparent;
}

.ribbonHeader:before {
  left: -2px;
}

.ribbonHeader:after {
  right: -2px;
}

.border-bottom-zero {
  border-bottom: 0;
}

.padding-bottom-20 {
  padding-bottom: 20px;
}

/* Style for Group Overview Page*/
.panel-heading .heading {
  padding-top: 5px;
}

.badge-padding {
  padding-top: 10px;
  padding-right: 15px;
  font-size: 18px;
}

.badge-backgroud {
  background-color: #03B9E5;
}

.thumbnail-color {
  color: #888888;
}

a {
  cursor: pointer;
  cursor: hand;
}

.no-ol > ol {
  display: none;
}

.no-ol > .carousel-control {
  background-image: none;
}

.no-ol > .carousel-control {
  width: 1%;
}

.product-table {
  padding: 0px;
  max-height: 500px;
  min-height: 20px;
  overflow-y: auto;
  overflow-x: auto;
}

.commission-table {
  padding: 0px;
  max-height: 300px;
  min-height: 20px;
  overflow-y: auto;
  overflow-x: auto;
}

.product-supplier {
  display: block;
  max-height: 300px;
  overflow-y: scroll;
}

input[type=number].no-spinner::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

li .DM {
  background: url("../img/discontinuedsign.png") no-repeat right bottom;
}

#productVariations .DM {
  background: url("../img/discontinued.png") no-repeat right top;
}

#product-details .DM {
  background: url("../img/discontinued.png") no-repeat right top;
}

#product-life-cycle {
  margin-top: 20px;
}

/* Style for View Event*/
.circle:before {
  content: "";
  display: block;
  padding-top: 100%;
}

.pr-open {
  border: 1px solid #777;
}

.circle {
  margin-left: auto;
  margin-right: auto;
  border-radius: 50% !important;
  width: 60%;
  position: relative;
}

.circle-inner {
  position: absolute;
  top: 0px;
  left: 0px;
  bottom: 0px;
  right: 0px;
  text-align: center;
}

.score-text {
  margin: auto;
  position: absolute;
  top: 0px;
  left: 0px;
  bottom: 0px;
  right: 0px;
  height: 1em;
  line-height: 1em;
  font-size: 1em;
}

.pr-progress {
  border: 1px solid #7DC67D;
}

.pr-hold {
  border: 1px solid #F0AD4E;
}

.pr-close {
  border: 1px solid #7CCDE5;
}

/*Styles for Sidebar menu*/
.wrapper > .navbar {
  position: absolute;
}

#sidebar-wrapper {
  z-index: 1010;
  left: 220px;
  width: 0;
  height: 100%;
  margin-left: -220px;
  overflow-y: auto;
  overflow-x: hidden;
  background: #1a1a1a;
  transition: all 0.3s ease;
}

html::-webkit-scrollbar {
  display: none;
}

.wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

.wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -250px;
}

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.sidebar-nav li {
  position: relative;
  line-height: 15px;
  display: inline-block;
  width: 100%;
}

.sidebar-nav .sidebar-brand {
  padding: 5px;
}

.sidebar-nav .sidebar-brand button {
  color: #ddd;
  border: 0;
}

ul.sub-menus {
  position: relative;
  width: 100%;
  padding: 0;
  margin: 0;
  border-radius: 0;
  border: none;
  background-color: #222;
  box-shadow: none;
  z-index: 1;
  display: none;
}

.sidebar-nav li:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  height: 100%;
  width: 3px;
  background-color: #1c1c1c;
  transition: width .2s ease-in;
}

.sidebar-nav > li.fixed-link {
  position: fixed;
  bottom: 0;
  background: #777;
  width: 250px;
}

.sidebar-nav > li:first-child a {
  color: #fff;
  background-color: #1a1a1a;
}

.sidebar-nav > li:nth-child(2):before, .sidebar-nav > li:nth-child(2) li:before {
  background-color: #ec1b5a;
}

.sidebar-nav > li:nth-child(3):before, .sidebar-nav > li:nth-child(3) li:before {
  background-color: #79aefe;
}

.sidebar-nav > li:nth-child(4):before, .sidebar-nav > li:nth-child(4) li:before {
  background-color: #314190;
}

.sidebar-nav > li:nth-child(5):before, .sidebar-nav > li:nth-child(5) li:before {
  background-color: #279636;
}

.sidebar-nav > li:nth-child(6):before, .sidebar-nav > li:nth-child(6) li:before {
  background-color: #7d5d81;
}

.sidebar-nav > li:nth-child(7):before, .sidebar-nav > li:nth-child(7) li:before {
  background-color: #ead24c;
}

.sidebar-nav > li:nth-child(8):before, .sidebar-nav > li:nth-child(8) li:before {
  background-color: #2d2366;
}

.sidebar-nav > li:nth-child(9):before, .sidebar-nav > li:nth-child(9) li:before {
  background-color: #D2691E;
}

.sidebar-nav > li:nth-child(10):before, .sidebar-nav > li:nth-child(10) li:before {
  background-color: #C71585;
}

.sidebar-nav > li:nth-child(11):before, .sidebar-nav > li:nth-child(11) li:before {
  background-color: #2F4F4F;
}

.sidebar-nav > li:nth-child(12):before, .sidebar-nav > li:nth-child(12) li:before {
  background-color: #A319FF;
}

.sidebar-nav > li:nth-child(13):before, .sidebar-nav > li:nth-child(13) li:before {
  background-color: #AC7155;
}

.sidebar-nav > li:nth-child(14):before, .sidebar-nav > li:nth-child(14) li:before {
  background-color: #FF6666;
}

.sidebar-nav > li:nth-child(15):before, .sidebar-nav > li:nth-child(15) li:before {
  background-color: #777;
}

.sidebar-nav li:hover:before,
.sidebar-nav li.open:hover:before {
  width: 100%;
  transition: width .2s ease-in;
}

.sidebar-nav > li > a {
  display: block;
  color: #ddd;
  text-decoration: none;
  padding: 20px 15px 20px 15px;
}

.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  outline: none;
  color: #fff;
  text-decoration: none;
  background-color: transparent;
}

.overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}

ul.sub-menus > li > a {
  display: block;
  color: #ddd;
  text-decoration: none;
  padding: 8px 15px 8px 35px;
}

/*Style to Labels in Product Feature Tags*/
.data-feature-default {
  background-color: #5bc0de;
}

.data-feature-color {
  background-color: cornflowerblue;
}

.data-feature-gender {
  background-color: lightblue;
}

.data-feature-license {
  background-color: slateblue;
}

.data-feature-sex {
  background-color: skyblue;
}

.data-feature-size {
  background-color: grey;
}

.data-feature-pack {
  background-color: #D65F45;
}

.data-feature-vintage {
  background-color: #E09341;
}

/* Large dropdown styling */
.dropdown-menu-large {
  margin-left: 16px;
  margin-right: 16px;
  padding: 20px 0px;
  width: 700px;
}

.dropdown-menu-large > li > ul {
  padding: 0;
  margin: 0;
}

.dropdown-menu-large > li > ul > li {
  list-style: none;
}

.dropdown-menu-large > li > ul > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: normal;
}

.dropdown-menu-large > li ul > li > a:hover,
.dropdown-menu-large > li ul > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}

.dropdown-menu.minWidth {
  min-width: 40px !important;
}

.dropdown-menu-large .disabled > a:hover,
.dropdown-menu-large .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  cursor: not-allowed;
}

/* Styling for account settings icon on partydetails personalinformation panel */
.enableicon {
  margin-right: 6px;
  color: white;
  width: 18px;
}

.enableicon:hover {
  color: white;
}

.mail-overflow {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

.checkboxcss input[type="checkbox"]:checked + span {
  color: #3276b1;
}

.checkboxcss input[type="checkbox"] {
  visibility: hidden;
  width: 0px;
}

.radioboxcss input[type="radio"]:checked + span {
  color: #3276b1;
}

/*Style for horizontal accordian*/
article.accordion {
  display: block;
  width: 100%;
  margin: 0 auto;
  overflow: auto;
  border-radius: 5px;
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.3);
}

article.accordion section {
  position: relative;
  display: block;
  float: left;
  width: 2em;
  height: 12em;
  margin: 0.5em 0 0.5em 0.5em;
  color: #ddd;
  background-color: #ddd;
  overflow: hidden;
  border-radius: 3px;
}

article.accordion section table tbody tr td a {
  color: inherit;
}

article.accordion section:target table tbody tr td a {
  color: #428bca;
}

article.accordion section h2 {
  position: absolute;
  font-size: 1em;
  font-weight: bold;
  width: 12em;
  height: 2em;
  top: 12em;
  left: 0;
  text-indent: 1em;
  padding: 0;
  margin: 0;
  color: #ddd;
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
}

article.accordion section h2 a {
  display: block;
  width: 100%;
  line-height: 2em;
  text-decoration: none;
  outline: 0 none;
}

article.accordion section:target {
  width: 92%;
  padding: 0 1em;
  color: #333;
  background-color: #fff;
  overflow-y: inherit;
}

article.accordion section:target h2 {
  position: static;
  font-size: 1.3em;
  text-indent: 0;
  color: #333;
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
}

article.accordion section,
article.accordion section h2 {
  transition: all 1s ease;
}

/*End of Style for horizontal accordian*/
.email-note-height {
  height: 150px !important;
}

/* --- Styling for Production Run Tree Structure--- */
.angular-ui-tree-handle {
  background: #f8faff;
  border: 1px solid #dae2ea;
  padding: 0px 7px;
}

.angular-ui-tree-placeholder {
  background: #f0f9ff;
  border: 2px dashed #bed2db;
  box-sizing: border-box;
}

/* --- Tree --- */
.tree-node {
  border: 1px solid #dae2ea;
  background: #ffffff;
}

.nodrop {
  background-color: #f2dede;
}

.tree-node-content {
  margin: 1px;
  margin-bottom: 5px;
  padding: 5px 10px;
}

.tree-handle {
  padding: 10px;
  background: #428bca;
  color: #FFF;
  margin-right: 10px;
}

.angular-ui-tree-handle:hover {
  cursor: default;
}

.angular-ui-tree-placeholder {
  background: #f0f9ff;
  border: 2px dashed #bed2db;
  box-sizing: border-box;
}

.taskNode {
  background: #FAFAFA;
}

.productionRun-status-dropdown {
  width: 500px;
  padding-left: 5px;
  padding-right: 5px;
  padding-top: 10px;
  top: 25%;
}

.productionRunTask-status-dropdown {
  width: 500px;
  padding-left: 5px;
  padding-right: 5px;
  padding-top: 10px;
  top: 25%;
}

.equal-height-div-parent {
  overflow: hidden;
}

.equal-height-div-child {
  margin-bottom: -99999px;
  padding-bottom: 99999px;
}

@media (min-width: 992px) {
  .mail-overflow-width {
    width: 200px;
  }
}
.party-skills-tag {
  background-color: #999967;
}

.grey-text {
  color: #bbb;
}

@media screen and (min-width: 992px) {
  .channel-timeline {
    margin-top: 10px;
    margin-left: -145px;
    counter-reset: step;
    min-height: 70px;
    display: inline-block;
  }

  .channel-header {
    margin-top: 10px;
    margin-left: -80px;
    counter-reset: step;
    display: inline-block;
  }

  .channel-header li {
    list-style-type: none;
    width: 170px;
    float: left;
    height: 5px;
    text-align: center;
  }

  .channel-timeline li input {
    display: none;
  }

  .channel-timeline li {
    list-style-type: none;
    width: 425px;
    float: left;
    height: 25px;
    text-align: center;
    left-padding: 5px;
  }

  .channel-timeline .channel-content li .ui-datepicker-trigger {
    background: none;
    border: none;
    margin-left: -156px;
  }

  .channel-timeline .channel-content li button {
    background: none;
    border: none;
    margin-left: -156px;
  }

  .channel-timeline .channel-content .created {
    background: url("../img/dots-sprite.png") no-repeat scroll rgba(0, 0, 0, 0);
    background-position: 2px -215px;
    margin-left: 185px;
  }

  .channel-timeline .channel-content .created.active {
    background: url("../img/dots-sprite.png") no-repeat scroll rgba(0, 0, 0, 0);
    background-position: 2px -239px;
    margin-left: 185px;
  }

  .channel-timeline > li:after {
    content: '';
    border-top: 1px dotted;
    width: 410px;
    height: 1px;
    position: relative;
    left: -390px;
    margin: -10px 0px 0px 635px;
    display: inline-block;
    float: left;
    color: #bbb;
  }

  .channel-timeline > li:last-child:after {
    content: none;
  }
}
@media screen and (min-width: 768px) and (max-width: 991px) {
  .channel-timeline {
    margin-top: 10px;
    margin-left: -210px;
    counter-reset: step;
    min-height: 70px;
    display: inline-block;
  }

  .channel-header {
    margin-top: 10px;
    margin-left: -80px;
    counter-reset: step;
    display: inline-block;
  }

  .channel-header li {
    list-style-type: none;
    width: 170px;
    float: left;
    height: 5px;
    text-align: center;
  }

  .channel-timeline li input {
    display: none;
  }

  .channel-timeline li {
    list-style-type: none;
    width: 365px;
    float: left;
    height: 25px;
    text-align: center;
    left-padding: 5px;
  }

  .channel-timeline .channel-content li .ui-datepicker-trigger {
    background: none;
    border: none;
    margin-left: -156px;
  }

  .channel-timeline .channel-content li button {
    background: none;
    border: none;
    margin-left: -156px;
  }

  .channel-timeline .channel-content .created {
    background: url("../img/dots-sprite.png") no-repeat scroll rgba(0, 0, 0, 0);
    background-position: 2px -215px;
    margin-left: 170px;
  }

  .channel-timeline .channel-content .created.active {
    background: url("../img/dots-sprite.png") no-repeat scroll rgba(0, 0, 0, 0);
    background-position: 2px -239px;
    margin-left: 170px;
  }

  .channel-timeline > li:after {
    content: '';
    border-top: 1px dotted;
    width: 350px;
    height: 1px;
    position: relative;
    left: -404px;
    margin: -10px 0px 0px 635px;
    display: inline-block;
    float: left;
    color: #bbb;
  }

  .channel-timeline > li:last-child:after {
    content: none;
  }
}
label img {
  max-width: 100%;
}

/*Panels with nav tabs*/
.panel.with-nav-tabs .panel-heading {
  padding: 5px 5px 0 5px;
}

.panel.with-nav-tabs .nav-tabs {
  border-bottom: none;
}

.panel.with-nav-tabs .nav-justified {
  margin-bottom: -1px;
}

/*Panel default*/
.with-nav-tabs.panel-default .nav-tabs {
  margin: 0;
}

.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
  color: #777;
}

.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
  border: 0;
  border-bottom: 4px solid #DD4B39;
  position: relative;
  background-color: white;
}

.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
  color: #555;
  background-color: #fff;
  border-color: #ddd;
  border-bottom-color: transparent;
}

.search-form .input-group {
  width: 53%;
  margin-bottom: 5px;
  margin-top: 5px;
  margin-left: 25%;
}

.search-form .form-control:focus {
  box-shadow: none !important;
}

.commerce-search-btn-group {
  margin-bottom: 5px;
  margin-top: 5px;
}

.commerce-search-btn-group .btn-default {
  background-color: #eee;
}

.commerce-search-btn-group .dropdown-menu {
  right: 0;
  left: auto;
  background-color: #eee;
}

* {
  border-radius: 0 !important;
}

.badge {
  border-radius: 10px !important;
}

.btn {
  border-radius: 2px !important;
}

.no-padding-left-col {
  padding-left: 0 !important;
}

.btn-grp-wrapper {
  text-align: center;
}

.search-overlay {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(200, 200, 200, 0.9);
  z-index: 3;
  overflow: auto;
}

/* Overlay closing cross */
.search-overlay .search-overlay-close {
  width: 25px;
  height: 25px;
  margin-top: 10px;
  overflow: hidden;
  border: none;
  background: url(../img/cross.png) no-repeat center center;
  text-indent: 200%;
  color: transparent;
  outline: none;
  z-index: 100;
}

.search-overlay-slidedown {
  visibility: hidden;
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
  transition: visibility 0s 0.4s, -webkit-transform 0.4s ease-in-out;
  transition: transform 0.4s ease-in-out, visibility 0s 0.4s;
  transition: transform 0.4s ease-in-out, visibility 0s 0.4s, -webkit-transform 0.4s ease-in-out;
}

.search-overlay-slidedown.open {
  visibility: visible;
  -webkit-transform: translateY(0%);
  transform: translateY(0%);
  transition: -webkit-transform 0.4s ease-in-out;
  transition: transform 0.4s ease-in-out;
  transition: transform 0.4s ease-in-out, -webkit-transform 0.4s ease-in-out;
}

/* Styling for horizontal scroll on revenue and expense analytics screen */
.horizontal-overflow-scroll {
  overflow-x: auto;
}

.vertical-overflow-scroll {
  max-height: 400px;
  overflow-y: scroll;
  width: 1152px;
}

.routing-product-margin {
  margin: 2px 0px 8px 19px;
}

.btn-circle.btn-lg {
  border-radius: 25px !important;
}

.user-id-radio {
  margin-left: 20px;
  margin-right: 20px;
}

.progress-bar-height {
  height: 15px;
}

.ellipsis {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

.progress-bar-popover-width {
  width: 415px;
}

.progress-bar-popover-half-width {
  width: 208px;
}

.calendar {
  margin-top: -15px;
}

.display-none {
  display: none !important;
}

.opacity-zero {
  opacity: 0;
  display: none;
  pointer-events: none;
}

.badge-info {
  background: #5bc0de;
}

.badge-default {
  background: #777;
}

.badge-success {
  background: #5cb85c;
}

.badge-warning {
  background: #f0ad4e;
}

.badge-danger {
  background: #d9534f;
}

.intl-tel-input {
  display: block !important;
}

.requirement-status-dropdown {
  width: 186px;
  padding-left: 5px;
  padding-right: 5px;
  padding-top: 10px;
  padding-bottom: 10px;
}

.worklog-panel {
  max-height: 200px;
  overflow-y: auto;
}

.word-break {
  word-break: break-all;
}

@media (min-width: 768px) and (max-width: 991px) {
  .horizontal-overflow-scroll {
    max-width: 991px;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .horizontal-overflow-scroll {
    max-width: 1199px;
  }
}
@media (min-width: 1200px) {
  .horizontal-overflow-scroll {
    max-width: 1200px;
  }
}
.child-content {
  background-color: rgba(218, 244, 245, 0.36) !important;
}

a.link-hover {
  color: #777;
}

a:hover.link-hover {
  color: #428bca;
}

/* Used for proper positioning of date and time picker and hiding input field */
.date-time-picker-content input {
  visibility: hidden;
  top: -25px;
}

/* This class is for label like panel */
.panel-body-label {
  padding-left: 4px;
}

.card-panel-footer {
  padding: 2px 2px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  cursor: pointer;
}

/* Highlight graph with cards css */
.revenue-text-color {
  color: #2196F3;
}

.expense-text-color {
  color: #FB8C00;
}

.order-text-color {
  color: #8BC34A;
}

.customer-text-color {
  color: #E45171;
}

.highlight-Revenue {
  border-color: #2196F3;
}

.highlight-Expense {
  border-color: #FB8C00;
}

.highlight-Orders {
  border-color: #8BC34A;
}

.highlight-Customers {
  border-color: #E45171;
}

.create-dropdown {
  padding-bottom: 0;
}

.create-dropdown .divider {
  margin-bottom: 0;
  margin-top: 0;
}

/*styles for vertical border */
.borderLeft {
  border-left: 1px solid #e7e7e7;
}

.borderRight {
  border-right: 1px solid #e7e7e7;
}

.borderTop {
  border-top: 1px solid #e7e7e7;
}

.borderBottom {
  border-bottom: 1px solid #e7e7e7;
}

.total-price-font {
  font-size: 20px;
  color: #942E88;
}

.total-price-font-progressbar {
  font-size: 16px;
  color: #942E88;
}

.previous-total-price-font-progressbar {
  font-size: 12px;
  color: #942E88;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}

.line-graph-icon-color {
  color: #E91E63;
}

.pie-graph-icon-color {
  color: #FF9800;
}

.bar-graph-icon-color {
  color: #65D269;
}

.area-graph-icon-color {
  color: #CDDC39;
}

.doughnut-graph-icon-color {
  color: #BA68C8;
}

.radar-graph-icon-color {
  color: #8D6E63;
}

.table-graph-icon-color {
  color: #7E57C2;
}

.revenue-progessbar-color {
  color: #2196F3;
}

.expense-progessbar-color {
  color: #FB8C00;
}

.customer-progessbar-color {
  color: #E45171;
}

.order-progessbar-color {
  color: #8BC34A;
}

.revenue-background-color {
  background-color: rgba(33, 150, 243, 0.56);
}

.date-panel {
  padding: 3px;
}

.margin-top-4 {
  margin-top: 4px;
}

.margin-top-20 {
  margin-top: 20px;
}

/* This style is for text rendered inside the progress bar */
.progress-round {
  position: absolute;
  color: #333333;
  font-weight: 100;
  line-height: 1;
}

.progress-wrapper {
  position: relative;
  margin: 10px auto;
  font-size: 40px;
}

.progress-pannel-heading {
  position: absolute;
  top: 0;
  left: 15px;
  padding: 1px 5px;
  font-size: 12px;
  cursor: pointer;
  border-radius: 0 4px 0 4px;
}

.progress-footer-heading {
  position: absolute;
  bottom: 55px;
  left: 15px;
  padding: 1px 9px 16px 7px;
  font-size: 14px;
  cursor: pointer;
}

.box-shadow {
  box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.26);
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
  border: 0;
  border-bottom: 4px solid #DD4B39;
  position: relative;
}

.ul-box-shadow {
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.26);
}

.padding-15 {
  padding: 15px !important;
}

.facet-item-list-block {
  max-height: 150px;
  overflow: auto;
}

.no-data-found-icon-color {
  color: #5BE7A9;
}

.no-data-found-label-color {
  color: #068B78;
}

.min-height-RoungProgress {
  min-height: 158px;
}

.rotate-text {
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}

.no-data-found-label-font {
  font-size: 10px;
}

.panel-heading.panel-heading-large {
  height: 62px;
}

.typeahead-input + ul {
  width: 100%;
}

.vertical-align-top {
  vertical-align: top;
}

.fixed-height-for-facet {
  height: 668px;
  overflow: auto;
  overflow-x: hidden;
}

a.list-group-item:hover, a.list-group-item:focus {
  text-decoration: none;
  background-color: rgba(33, 150, 243, 0.56);
}

.modal-footer {
  border-top: none !important;
}

[ng\:cloak], [ng-cloak], .ng-cloak {
  display: none;
}

.text-success-bright {
  color: #2ED831;
}

.text-danger-bright {
  color: #D02520;
}

.margin-top-54 {
  margin-top: 54px;
}

.font-20 {
  font-size: 20px;
}

.min-height-110 {
  min-height: 110px;
  border-top: none !important;
}

.dateTimePicker {
  background-color: white !important;
  cursor: default !important;
}

[ng\:cloak], [ng-cloak], .ng-cloak {
  display: none;
}

.dateTimePicker {
  background-color: white !important;
  cursor: default !important;
}

.dashboard-icon-color {
  color: #DB6767;
}

.dashboard-border-color {
  border-color: #DB6767;
}

.dashboard-label-padding {
  padding: 8px;
  cursor: pointer;
}

.word-wrap {
  word-wrap: break-word;
}

.padding-right-0 {
  padding-right: 0px !important;
}

.min-height-145 {
  min-height: 145px;
}

.min-height-220 {
  min-height: 220px;
}

.min-height-200 {
  min-height: 200px;
}

.no-pointer-event {
  pointer-events: none;
}

.brand-logo {
  width: 300px;
  height: 134px;
}

/* TODO: As discussed with Mohammad Kathawala, these two css rules will be later added into HC. */
.static-status-popover li span.complete:before {
  content: "\f00c";
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  display: inline-block;
  background: none repeat scroll 0 0 #6FDFDF;
  border-radius: 50px 50px 50px 50px;
  width: 20px;
  color: white;
  margin: 0px 2px 5px 0px;
  text-align: center;
}

.static-status-popover li span.incomplete:before {
  content: "\f111";
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  display: inline-block;
  background: none repeat scroll 0 0 #a94442;
  border-radius: 50px 50px 50px 50px;
  width: 20px;
  color: white;
  margin: 0px 2px 5px 0px;
  text-align: center;
}

.cursor-pointer {
  cursor: pointer !important;
}

.bg-warning-dark {
  background-color: #fbc79b;
}

/*Styling for custom multicolored radio button starts */
.custom-control {
  position: relative;
  display: inline-block;
  padding-left: 1.5rem;
  cursor: pointer;
}

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.custom-control-indicator {
  position: absolute;
  display: block;
  border-radius: 100%;
  height: 15px;
  width: 15px;
  top: 3px;
  left: -3px;
  z-index: 0;
  transition: border .25s linear;
  -webkit-transition: border .25s linear;
}

.indicator-info {
  border: 3px solid #0074d9;
}

.indicator-danger {
  border: 3px solid #FF0000;
}

.custom-radio .custom-control-indicator {
  border-radius: 50% !important;
}

.custom-radio .custom-control-input:checked ~ .custom-control-indicator {
  background-image: url("http://www.w3.org/2000/svg");
}

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.custom-control-input:checked ~ .indicator-info {
  color: #fff;
  border: 3px solid #0074d9;
  background-color: #0074d9;
  left: -5px;
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.2rem #0074d9;
}

.custom-control-input:checked ~ .custom-control-label {
  font-weight: bold;
}

.custom-control-input:checked ~ .indicator-danger {
  color: #fff;
  border: 3px solid #FF0000;
  background-color: #FF0000;
  left: -5px;
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.2rem #FF0000;
}

/*Styling for custom multicolored radio button ends */
/*Styling for fixed header table starts*/
.fixed-table {
  border-collapse: separate;
  margin-bottom: 0;
}

.fixed-table > thead > tr > th, .fixed-table > tbody > tr > td {
  border: 0 !important;
  border-right: 1px solid #ddd !important;
  border-bottom: 1px solid #ddd !important;
}

.fixed-table > tfoot > tr > td {
  border: 0 !important;
  border-right: 1px solid #ddd !important;
  border-top: 1px solid #ddd !important;
}

/*Styling for fixed header table ends */
.top-sticky-header {
  position: fixed;
  width: 1140px !important;
  z-index: 100;
  top: 0px;
}

.fixed-section {
  top: 0;
  position: fixed;
  z-index: 1000;
}

</style>
<script> 


$(document).ready(function() {
  var table = $('#invoiceLines').DataTable({
    fixedHeader: {
      header: true,
      footer: true
    }
    
    
  });
});
</script>
</body>
</html>