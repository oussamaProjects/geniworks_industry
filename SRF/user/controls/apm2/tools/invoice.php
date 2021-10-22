<!DOCTYPE html>
<html>
<head>
  <title></title>
<script src="https://rawgit.com/MrRio/jsPDF/master/libs/html2pdf.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0/angular.min.js"></script>

<script>


</script>
</head>
<body>
  
<?php
require('controls/zdfzfzef/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM srf_tools_request WHERE str_owner='11' AND str_status='approved'");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();
?>
<style >
  #customers{
    width: 100%;
    height: 100%;
  }
</style>

  <div id="customers" >
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="row">
								<div class="col-xl-12">
<img style="width: 100%;" src="img/Header-Geniworks-2019-Min.png">
									<!--begin::Portlet-->
									<div class="kt-portlet">
										<?xml version="1.0"?>
<t t-name="rapport_montant_lettre.report_invoice_document_normale">
        <t t-foreach="docs" t-as="o">

            <t t-if="o and 'company_id' in o">
                <t t-set="company" t-value="o.company_id"/>
            </t>
            <t t-if="not o or not 'company_id' in o">
                <t t-set="company" t-value="res_company"/>
            </t>
    
    <br/><br/>  
<div class="page">
    <table>
            <tbody>
              <tr>
                <td>
                
                </td>
              </tr>
            </tbody>
</table>

  
<table style="border-width: 1px; padding: 5px; font-size: 16px; vertical-align: left; margin: 0px; width: 100%;">
            <tbody>
              <tr style="border: 1px">
                <td style="height: 4cm;width:40%;vertical-align: top;text-align:center;overflow:hidden;font-size: 24px;color:#000;">
        Company Stamp and Signature
</td><td style="height: 4cm;width:40%;vertical-align: top;text-align:center;overflow:hidden;font-size: 24px;color:#000;">
        QR Code
</td>
                <td style="text-align:left;height: 4cm;width:30%;vertical-align: top;text-align:center;font-size: 24px;color:#000;">
        Papillon à joindre en cas de besoin
        <table style="width: 4cm;  border: 1px solid #444444; margin-top:15px;margin-bottom:28px; " align="center">
        <tbody>
          <tr style="border: none; background-color: rgb(252, 249, 241);">
            <th style="height:1cm;background-color:#c0c0c0;min-width:4.0cm; vertical-align: middle;font-size: 21px;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; ">
                N° <span t-if="o.type == 'out_invoice'">Serie</span>
                      
            </th>
            <th style="background-color:#c0c0c0;min-width:4.0cm;vertical-align: middle;font-size: 21px;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; ">
                Date 
                       
            </th>
            <th style="background-color:#c0c0c0;min-width:4.5cm;vertical-align: middle;font-size: 21px;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; ">
                SRF User
            </th>
          </tr>
          <tr style="border: none; font-size: 22px;text-align: center;">
            <td style="vertical-align: middle;height:1.2cm;border: 1px solid #444444;font-size: 22px;color:#000; text-align: center;">
                    <span t-field="o.number"/>
            </td>
            <td style="vertical-align: middle;border: 1px solid #444444; font-size: 22px;color:#000; text-align: center;">
                    <span  t-field="o.date_invoice" t-field-options="{&quot;format&quot;: &quot;dd/MM/YYYY&quot;}"/>
            </td>
            <td style="vertical-align: middle;border: 1px solid #444444; font-size: 22px;color:#000; text-align: center;">
                    <span  t-field="o.date_due" t-field-options="{&quot;format&quot;: &quot;dd/MM/YYYY&quot;}"/>
            </td>
          </tr>
        </tbody>
      </table>
                </td>
              </tr>
            </tbody>
</table>

<table  style="width: 100%;margin-top:15px; ">
        <tbody>
          <tr>
            <td>
<table style="height: 4cm;width: 100%;border: 1px solid #444444;">
        <tbody style="padding: 10px; font-size: 24px">
          <tr style="border: none; line-height: 12px;">
            <th style="background-color:#c0c0c0; vertical-align: middle;font-size: 24px;height:1cm;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; ">
                OPS Senior Manager
            </th>
          </tr>
          <tr style="border: none; line-height: 1cm; font-size: 24px;">
            <td style="border: 1px dashed #444444;font-size: 24px;color:#000; padding: 5px; padding-right: 15px; text-align: left;">
                    <t t-set="address" t-value="company.partner_id.child_ids.filtered(lambda r: r.type == 'invoice') or company.partner_id"/>
                         <strong style="padding-left: 8px;color:black;font-size: 24px;font-weight:bold;text-align: center;" t-esc="company.partner_id.name"/>
             <p style="padding-left: 8px;font-size: 24px;color:black;line-height:30px;">

                            
                            
                            <span style="">Signature: </span><br><br>
                            <span style="color: #f0f0f0;">Nissrine Kacheba </span>
                            <br>
                            <br>
                            <br>
                         </p>
            </td>

          </tr>
        </tbody>
</table>
            </td>
            <td>
<table style="height: 4cm;width: 100%;border: 1px solid #444444;">
        <tbody style="padding: 10px; font-size: 24px">
          <tr style="border: none; line-height: 12px;">
            <th style="background-color:#c0c0c0; vertical-align: middle;font-size: 24px;height:1cm;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; ">
                Office Senior Manager
            </th>
          </tr>
          <tr style="border: none; line-height: 1cm; font-size: 24px;">
            <td style="border: 1px dashed #444444;font-size: 24px;color:#000; padding: 5px; padding-right: 15px; text-align: left;">
                    <t t-set="address" t-value="company.partner_id.child_ids.filtered(lambda r: r.type == 'invoice') or company.partner_id"/>
                         <strong style="padding-left: 8px;color:black;font-size: 24px;font-weight:bold;text-align: center;" t-esc="company.partner_id.name"/>
             <p style="padding-left: 8px;font-size: 24px;color:black;line-height:30px;">

                            
                            <span style="">Signature: </span><br><br>
                            <span style="color: #f0f0f0;">khadidiatou diagne </span>
                            <br>
                            <br>
                            <br>
                         </p>
            </td>

          </tr>
        </tbody>
</table>
            </td>
            <td style="text-align:right;">
<table style="height: 4cm;width: 100%;border: 1px solid #444444;">
        <tbody style="padding: 10px; font-size: 24px">
          <tr style="border: none; line-height: 12px;">
            <th style="background-color:#c0c0c0; vertical-align: middle;font-size: 24px;height:1cm;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; ">
                Accounting Manager
            </th>
          </tr>
          <tr style="border: none; line-height: 1cm; font-size: 24px;">
            <td style="border: 1px dashed #444444;font-size: 24px;color:#000; padding: 5px; padding-right: 15px; text-align: left;">
                    <t t-set="address" t-value="company.partner_id.child_ids.filtered(lambda r: r.type == 'invoice') or company.partner_id"/>
                         <strong style="padding-left: 8px;color:black;font-size: 24px;font-weight:bold;text-align: center;" t-esc="company.partner_id.name"/>
             <p style="padding-left: 8px;font-size: 24px;color:black;line-height:30px;">

                            
                            
                            <span style="">Signature: </span><br><br>
                            <span style="color: #f0f0f0;">Fatima zahra </span>
                            <br>
                            <br>
                            <br>
                         </p>
            </td>

          </tr>
        </tbody>
</table>
            </td>
          </tr>
        </tbody>
</table>

<table>
            <tbody>
              <tr>
                <td style="height:1.2cm;border: 1px solid #444444;padding-left: 15px;padding-right: 15px;background-color:#c0c0c0;vertical-align: middle;font-size: 30px;font-weight:bold;color:#000;  ">
        <span t-if="o.type == 'out_invoice'">SRF</span>
                 
        </td>
        <td>
        </td>
        <td style="border: 1px solid #444444;padding-left: 15px;padding-right: 15px;vertical-align: middle;font-size: 30px;font-weight:bold;color:#000;  ">
        N° : <span t-field="o.number"/>
        </td>
              </tr>
            </tbody>
</table>


<table  style="width: 99.5%;border: 1px solid #444444;margin-top:25px;">
            <tbody>
              <tr style="border-left: 1px solid #444444; font-size: 24px;color:#000000;">
                <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 5px; text-align: left;"> 
          Informations propriétaire: APM-1        
        </td>
        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 5px; text-align: left;"> 
          Date Reglement:         
        </td>

              </tr>
              <tr style="border-left: 1px solid #444444; font-size: 24px;color:#000000;">
                <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 5px; text-align: left;"> 
          ID:        
        </td>
        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 5px; text-align: left;"> 
          Mode:         
        </td>

              </tr>
              <tr style="border-left: 1px solid #444444; font-size: 24px;color:#000000;">
                <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 5px; text-align: left;"> 
        Contrat N°:  
        </td>
        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 5px; text-align: left;"> 
        Contrat N°: 
        </td>
      </tr >
      <tr style=" border-left: 1px solid #444444; font-size: 24px;color:#000000;">
        <?php
require('controls/zdfzfzef/de5.php');
$showpsrfcm=$cdb->prepare("SELECT * FROM srf_tools_request WHERE str_owner='11' AND str_status='approved'");
$showpsrfcm->execute();
if ($showpsrfcm===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrfcm=$showpsrfcm->get_result();?>
  <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 5px; text-align: left;"> 
        
        Autres informations:   <br> 

        <?php while ($showpsrfcm=$respsrfcm->fetch_row()) {
          if (!empty($showpsrfcm[9])) {
            
        ?>
        <?php echo $showpsrfcm[2] ;?> <?php echo $showpsrfcm[9] ;?> <br>
      <?php }}?>

        </td>
        <?php
      }
        ?>


              </tr>
            </tbody>
</table>




            <table class="table-condensed" style="margin-top:35px;width: 99.5%;border: 1px solid #444444;">
                <thead>
                        <tr style="border: 1px solid #444444; padding: 5px; background-color:#c0c0c0; font-size: 24px;color:#000000;">
                            <th style="width:200px; border: 1px solid #444444; padding: 5px; text-align: center;">Réf</th>
                            <th style="width:500px; border: 1px solid #444444; padding: 5px; text-align: center;">Description</th>
                            <th style="width:100px; border: 1px solid #444444; padding: 5px; text-align: center;">Vendeur</th>
                            <th style="width:100px; border: 1px solid #444444; padding: 5px; text-align: center;">Qté</th>
                            <th style="width:80px; border: 1px solid #444444; padding: 5px; text-align: center;">Unité</th>
                            <th style="width:150px;border: 1px solid #444444; padding: 5px; text-align: center;">P.U</th>
                            
                            <th style="width:200px; border: 1px solid #444444; padding: 5px; text-align: center;">Total H.T</th>
                        </tr>
                    </thead>
               <tbody>
         <t t-set="invoice_line" t-value="o.invoice_line and o.invoice_line"/>
         <t t-foreach="invoice_line" t-as="l">
          <?php
          $total_price = 0;
                                          while ($showpsrf=$respsrf->fetch_row()) {

                              ?>
                    <tr style="border-left: 1px solid #444444; font-size: 24px;color:#000000;">
                        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 5px; text-align: left;">
                           <?php echo $showpsrf[1]?>
                        </td>
                        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 5px; text-align: left;">
                            <?php
$findtoolp=$cdb->prepare("SELECT * FROM work_tools WHERE wtl_internal_id='".$showpsrf[2]."'");
$findtoolp->execute();
if ($findtoolp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findtoolp->get_result();
?><?php while ($showfp=$resfindp->fetch_row()) {  
  $total_price += $showpsrf[3]*$showfp[9];
  ?>



                                <?php echo $showfp[2] ;?><?php  } }?>
                        </td>
                        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; text-align: center;">
                           <?php echo $showpsrf[5]?>
                        </td>
                        
                        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; text-align: center;">
                            <?php echo $showpsrf[3]?>
                        </td>

                        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; text-align: center;">
                            <?php echo $showpsrf[8]?>
                        </td>
                        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; text-align: center;">
                            <?php
$findtoolp=$cdb->prepare("SELECT * FROM work_tools WHERE wtl_internal_id='".$showpsrf[2]."'");
$findtoolp->execute();
if ($findtoolp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findtoolp->get_result();
?><?php while ($showfp=$resfindp->fetch_row()) { ?>



                                <?php echo $showfp[9] ;?>.00 MAD
                              <?php } }?>
                        </td>
                        
                        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; text-align: center;" >
                           <?php
$findtoolp=$cdb->prepare("SELECT * FROM work_tools WHERE wtl_internal_id='".$showpsrf[2]."'");
$findtoolp->execute();
if ($findtoolp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findtoolp->get_result();
?><?php while ($showfp=$resfindp->fetch_row()) { ?>



                                <?php echo $showpsrf[3]*$showfp[9] ;?>.00 MAD
                              <?php } }?>
                        </td>
                    </tr> <?php } ?>
          </t>
          <!-- <tr style="border: none"> -->
            <!-- <td colspan="7" style="min-width:8cm; border: 1px solid #444444; padding: 5px; text-align: right; background-color: rgb(252, 244, 244);"/> -->
          <!-- </tr> -->
                </tbody>
            </table>
      
      <table class="table-condensed" style="margin-top:35px;width: 99.5%;border: 1px solid #444444;">
                <thead>
                        <tr style="height:1cm;border: 1px solid #444444; padding: 5px; background-color:#c0c0c0; font-size: 24px;color:#000000;">
                            <th style="width:25%; border: 1px solid #444444; padding: 5px; text-align: center;">TOTAL HT</th>
                            <th style="width:25%; border: 1px solid #444444; padding: 5px; text-align: center;">REMISE</th>
                            <th style="width:25%; border: 1px solid #444444; padding: 5px; text-align: center;">TOTAL  TVA</th>
                            <th style="width:25%; border: 1px solid #444444; padding: 5px; text-align: center;">Net à payer</th>
                        </tr>
                    </thead>
               <tbody>
                    <tr style="border-left: 1px solid #444444; font-size: 30px;color:#000000;">
                        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 10px; text-align: center;">
                           <?php echo $total_price; ?>
                        </td>
                        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; padding: 10px; text-align: center;">
                            <span t-field="o.amount_discount"/>
                        </td>
                        <td style="border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; text-align: center;">
                            <!-- <span t-field="l.product_uom_qty"/> -->
                            <span t-field="o.amount_tax"/>
                        </td>
                        <td style="font-weight:bold;border: 1px solid #444444; border-right: 1px solid #444444; border-left: 1px solid #444444; text-align: center;">
                            <!-- <span t-field="l.product_uom_qty"/> -->
                            <?php echo $total_price; ?>.00 MAD
                        </td>
                    </tr>
          <!-- <tr style="border: none"> -->
            <!-- <td colspan="7" style="min-width:8cm; border: 1px solid #444444; padding: 5px; text-align: right; background-color: rgb(252, 244, 244);"/> -->
          <!-- </tr> -->
                </tbody>
            </table>
      <table class="table-condensed" style="width: 99.5%;border: 1px solid #444444;">
                        <tr style="border: 1px solid #444444;padding: 15px;">
                            <td style="font-size: 24px;color:black;padding: 15px;">Arrêter le présent SRF à la somme de :<br/>
                <span style="margin-top: 10px;color:black;font-size: 24px;font-weight:bold;text-transform: uppercase;"> <t t-esc="o.get_amount_letter()"/> </span>
                </td>
                        </tr>
            </table>
            
</div>

            <div class="footer">
        <div class="text-center" style="border-top: 1px solid black;">        


        </div>
    </div>    
      
      
      
            <div class="row">
                <div class="col-xs-4 pull-right">
                    
                </div>
            </div>

            
            <div class="oe_structure"/>
  </t>
</t>
									</div>

									<!--end::Portlet-->
								</div>
							</div>
						</div>

</div>
  <?php  }?>
  

               <button><a href="https://restpack.io/html2pdf/save-as-pdf?private=true" target="_blank">Save this page as PDF</a></button>
                    <script async src="https://restpack.io/save-as-pdf.js"></script>
                </body>




</body>
</html>
