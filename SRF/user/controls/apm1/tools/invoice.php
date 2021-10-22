


  
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



<table class="table">
  <thead>
    <tr>
      <th scope="col" style="font-size: 24px;">
Company Stamp and Signature</th>
      <th scope="col" style="font-size: 24px;">QR Code</th>
     
      

      <td scope="col">
        <span style="font-size: 24px;">Papillon à joindre en cas de besoin</span>
<table class="table table-bordered" style="border: 1px solid #444444;">
  <thead>
    <tr>
      <th style="background-color:#c0c0c0; vertical-align: middle;font-size: 21px;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; " scope="col">N° Serie</th>
      <th style="background-color:#c0c0c0; vertical-align: middle;font-size: 21px;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; " scope="col">Date</th>
      <th style="background-color:#c0c0c0; vertical-align: middle;font-size: 21px;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; " scope="col">SRF User</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="border: 1px solid #444444; height: 1cm;" scope="row"></th>
      <td style="border: 1px solid #444444; height: 1cm;"></td>
      <td style="border: 1px solid #444444; height: 1cm;"></td>
      
    </tr>


  </tbody>
</table>
      </td>

    </tr>
  </thead>

</table>

<table class="table table-bordered" style="border: 1px solid #444444;">
  <thead>
    <tr>
      <th style="background-color:#c0c0c0; vertical-align: middle;font-size: 21px;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; " scope="col">OPS Senior Manager</th>
      <th style="background-color:#c0c0c0; vertical-align: middle;font-size: 21px;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; " scope="col"> Office Senior Manager</th>
      <th style="background-color:#c0c0c0; vertical-align: middle;font-size: 21px;font-weight:bold;color:#000;border: 1px solid #444444; text-align: center; " scope="col">Accounting Manager</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="border: 1px solid #444444; height: 1cm;" scope="row">
        <span style="">Signature: </span><br><br>
                            <span style="color: #f0f0f0;">Nissrine Kacheba </span>
                            <br>
                            <br>
                            <br>
      </th>
      <td style="border: 1px solid #444444; height: 1cm;">
        <span style="">Signature: </span><br><br>
                            <span style="color: #f0f0f0;">khadidiatou diagne </span>
                            <br>
                            <br>
                            <br>
      </td>
      <td style="border: 1px solid #444444; height: 1cm;">
        <span style="">Signature: </span><br><br>
                            <span style="color: #f0f0f0;">Fatima zahra </span>
                            <br>
                            <br>
                            <br>
      </td>
      
    </tr>


  </tbody>
</table>


<table  style="width: 100%;margin-top:15px; ">
        <tbody>
          <tr>
            <td>

            </td>
            <td>

            </td>
            <td style="text-align:right;">

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
                            <th style=" border: 1px solid #444444; padding: 5px; text-align: center;">Réf</th>
                            <th style="border: 1px solid #444444; padding: 5px; text-align: center;">Description</th>
                            <th style=" border: 1px solid #444444; padding: 5px; text-align: center;">Vendeur</th>
                            <th style=" border: 1px solid #444444; padding: 5px; text-align: center;">Qté</th>
                            <th style=" border: 1px solid #444444; padding: 5px; text-align: center;">Unité</th>
                            <th style="border: 1px solid #444444; padding: 5px; text-align: center;">P.U</th>
                            
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

            


									<!--end::Portlet-->
								</div>
	


  <?php  }?>
  <button onclick="myFunction()">Print this page</button>

              <script>
function myFunction() {
  window.print();
}
</script>
<div id="editor"></div>
<button id="cmd">generate PDF</button>
