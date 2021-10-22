<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& ($_SESSION['uat']=='admin'))
 
{
    

require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');


$statement = $cdb->prepare("SELECT DISTINCT wr_zone FROM wof_repository ORDER BY wr_zone ASC");

$statement->execute();
$resultSet = $statement->get_result();



?>


<!DOCTYPE html>
<!--

Author: jbenplus

-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WOF - Geniworks</title>
        <meta name="description" content="MyDadje By GeniWorks">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/style-dark.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-select/bootstrap-select.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body onload='hola(1)' id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/logo-geniworks.png" alt="logo" class="loader-logo">
                 
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            <?php
            require('header-dark.php'); 
             ?>
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <?php 
                    require('nav.php');

                     ?>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Forms WOF</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
			                                <li class="breadcrumb-item active">WOF</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    
                                    <div class="widget-body">
                                        <div class="row flex-row justify-content-center">
                                            <div class="col-xl-10">
                                                <div id="rootwizard">
                                                    <div class="step-container">
                                                        <div class="step-wizard">
                                                            <div class="progress">
                                                                <div class="progressbar"></div>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <a href="#tab1" data-toggle="tab">
                                                                        <span class="step">1</span>
                                                                        <span class="title">Step 1</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab2" data-toggle="tab">
                                                                        <span class="step">2</span>
                                                                        <span class="title">Step 2</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab3" data-toggle="tab">
                                                                        <span class="step">3</span>
                                                                        <span class="title">Step 3</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>



                                                   <div class="tab-content">
                                                        
                                                        <div class="tab-pane" id="tab1">
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>customer informations</h4>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-6 mb-3">
                                                                    <label class="form-control-label">Site<span class="text-danger ml-2">*</span></label>
                                                                    <select id="site1" onChange="stFunction(this);" name="site1" class="selectpicker">
                                                                        <option value="">Select</option>
                                                                         <optgroup label="APM">
                                                                        <option value="apm">APM</option>
                                                                    </optgroup>
                                                                        <optgroup label="Marsa Maroc">
                                                                        <option value="tc3">tc3</option>
                                                                    </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-5">
                                                                 <div class="col-xl-6">
                                                                    <label class="form-control-label">Order Owner<span class="text-danger ml-2">*</span></label>
                                                                    <select name="odeal1" id="odeal1" onChange="odFunction(this);" class="selectpicker">
                                                                        <option value="">Select Owner</option>
                                                                        <option value="1">Function 1</option>
                                                                        <option value="2">Function 2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xl-6 mb-3">
                                                                    <label class="form-control-label">infos</label>
                                                                        <select name="funcd1" id="funcd1" onChange="fdFunction(this);" class="selectpicker">
                                                                        <option value="">Select </option>
                                                                        <option value="1">Function 1</option>
                                                                        <option value="2">Function 2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label class="form-control-label">Order receiver</label>
                                                                    <select name="orec1" id="orec1" onChange="orFunction(this);" class="selectpicker">
                                                                        <option value="">Select reciever</option>
                                                                        <option value="1">Function 1</option>
                                                                        <option value="2">Function 2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xl-6 mb-3">
                                                                    <label class="form-control-label">Infos</label>
                                                                        <select name="funcr1" id="funcr1" onChange="fcrFunction(this);" class="selectpicker">
                                                                        <option value="">Select</option>
                                                                        <option value="1">Function 1</option>
                                                                        <option value="2">Function 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Assets</h4>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                
                                                                <div class="col-xl-4">
                                                                    <label class="form-control-label">Planned Order Start<span class="text-danger ml-2">*</span></label>
                                                                    <input type="number" name="esd1" onChange="esdFunction(this);" id="esd1" value="1"  min="1" max="12" step="1" class="selectpicker form-control">
                                                                </div>
                                                            
                                                                <div class="col-xl-4 mb-3">
                                                                    <label class="form-control-label ">Order Finish-Time<span class="text-danger ml-2">*</span></label>
                                                                    <input type="date" onChange="sdtFunction(this);" name="sdt1" id="sdt1" class=" form-control">
                                                                </div>
                                                               <!-- <div class="col-xl-4 mb-5">
                                                                    <label class="form-control-label">technicians Number<span class="text-danger ml-2">*</span></label>
                                                                    <input type="number" onChange="technFunction(this);"  name="techn1" id="techn1" value="1" min="1" max="10" step="1" class="custom-select form-control">
                                                                </div> -->
                                                                <div class="col-xl-4 mb-3">
                                                                    <label class="form-control-label">Requested Cleaning Type</label>
                                                                    <div class="input-group">
                                                                        
                                                                        <select name="funcr1" id="funcr1" onChange="fcrFunction(this);" class="selectpicker">
                                                                        
                                                                        <option value="total">Total</option>
                                                                        <option value="parcial">Parcial</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <ul class="pager wizard text-right">
                                                                <li class="previous d-inline-block">
                                                                    <a href="javascript:;"class="btn btn-secondary ripple">Previous</a>
                                                                </li>
                                                                <li class="next d-inline-block">
                                                                  <button class="btn btn-lg btn-gradient-03" style="color:white; border:0;" type="" onclick="onSubmitClick(); return false;location.href='javascript:;'">Next</button>
                                                                </li>
                                                            </ul>
                                                        </div>
<script language="javascript">

    function onSubmitClick() {
var site1 = document.getElementById('site1');
var odeal1 = document.getElementById('odeal1');
var funcd1 = document.getElementById('funcd1');
var orec1 = document.getElementById('orec1');
var funcr1 = document.getElementById('funcr1');
var esd1 = document.getElementById('esd1');
var sdt1 = document.getElementById('sdt1');
var techn1 = document.getElementById('techn1');


var site2 = document.getElementById('site2');
var odeal2 = document.getElementById('odeal2');
var funcd2 = document.getElementById('funcd2');
var orec2 = document.getElementById('orec2');
var funcr2 = document.getElementById('funcr2');
var esd2 = document.getElementById('esd2');
var sdt2 = document.getElementById('sdt2');
var techn2 = document.getElementById('techn2');



//site2.value = site1.value;
//odeal2.value = odeal1.value;
//funcd2.value = funcd1.value;
//orec2.value = orec1.value;
//funcr2.value = funcr1.value;

//esd2.value = esd1.value;
//sdt2.value = sdt1.value;
//techn2.value = techn1.value;

}

</script>

<script language="javascript">





            function hola(x) {
               



                if(x == 1) {

                    document.getElementById("two").style.visibility="visible";
                    document.getElementById("three").style.visibility="hidden";
                    document.getElementById("four").style.visibility="hidden";
                    document.getElementById("five").style.visibility="hidden";


                    document.getElementById("three").disabled = true;
                    document.getElementById("four").disabled = true;
                    document.getElementById("five").disabled = true;
                    document.getElementById("two").style.position = 'relative';
                    document.getElementById("three").style.position = 'absolute';
                    document.getElementById("four").style.position = 'absolute';
                    document.getElementById("five").style.position = 'absolute';
                }
                if(x == 2)  {
                    document.getElementById("two").style.visibility="hidden";
                    document.getElementById("three").style.visibility="visible";
                    document.getElementById("four").style.visibility="hidden";
                    document.getElementById("five").style.visibility="hidden";

                    
                    document.getElementById("two").disabled = true;
                    document.getElementById("four").disabled = true;
                    document.getElementById("five").disabled = true;
                    document.getElementById("three").style.position = 'relative';
                    document.getElementById("two").style.position = 'absolute';
                    document.getElementById("five").style.position = 'absolute';
                    document.getElementById("four").style.position = 'absolute';
                }
                if(x == 3)  {
                    document.getElementById("two").style.visibility="hidden";
                    document.getElementById("three").style.visibility="hidden";
                    document.getElementById("four").style.visibility="visible";
                    document.getElementById("five").style.visibility="hidden";
              
                    
                    document.getElementById("three").disabled = true;
                    document.getElementById("two").disabled = true;
                    document.getElementById("five").disabled = true;
                    document.getElementById("four").style.position = 'relative';
                    document.getElementById("three").style.position = 'absolute';
                    document.getElementById("two").style.position = 'absolute';
                    document.getElementById("five").style.position = 'absolute';
                }
                if(x == 4)  {
                    document.getElementById("two").style.visibility="hidden";
                    document.getElementById("three").style.visibility="hidden";
                    document.getElementById("four").style.visibility="hidden";
                    document.getElementById("five").style.visibility="visible";

                  
                    document.getElementById("three").disabled = true;
                    document.getElementById("two").disabled = true;
                    document.getElementById("four").disabled = true;
                    document.getElementById("five").style.position = 'relative';
                    document.getElementById("three").style.position = 'absolute';
                    document.getElementById("two").style.position = 'absolute';
                    document.getElementById("four").style.position = 'absolute';
                }
            }


        </script>


                                                        <div class="tab-pane" id="tab2">
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Asset Infomation</h4>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-4" id="one">
                                                                    <label class="form-control-label">Asset<span class="text-danger ml-2">*</span></label>
                                                                    <select onChange="hola(this.value)" name="zones" class=" selectpicker">
                                                                        <option selected value="1">sts</option>
                                                                        <option value="2">RTG</option>
                                                                        <option value="3">boom crane</option>
                                                                        <option value="4">YARDS</option>
                                                                    </select>
                                                                </div>
                                                                <br>
                                                                <div class="col-xl-4">
                                                                    <div style="position:relative;" id="two">
                                                                    <label class="form-control-label">sts<span class="text-danger ml-2">*</span></label>
                                                                    <select  name="sts" id="zone1" onChange="myNewFunction(this);hideingr(this.value);" class="form-control tw selectpicker">
                                                                         <option value="">Select Asset</option>
                                                                        <?php
                                                                        foreach($result as $row)
                                                                        {
                                                                            echo '<option value="'.$row["wr_zone"].'">'.$row["wr_zone"].'</option>';    
                                                                        }
                                                                        ?></select>
                                                                    <!--<select id="zone1" name="sts" onChange="myNewFunction(this);" class="tw selectpicker" >
                                                                        <option value="">Select</option>
                                                                        <option value="Machinery House sol">Machinery House "sol"</option>
                                                                        <option value="Machinery House Drums">Machinery House "Drums"</option>
                                                                        <option value="Machinery House Motor">Machinery House "Motor"</option>
                                                                        <option value="Gantry Sea side">Gantry Sea side</option>
                                                                        <option value="Gantry Land side">Gantry Land side</option>
                                                                        <option value="Electric Room">Electric Room</option>
                                                                        <option value="Checker Cabin">Checker Cabin</option>
                                                                        <option value="Driver Cabin">Driver Cabin</option>
                                                                        <option value="H. V Room">H. V Room</option>
                                                                        <option value="Spreader">Spreader</option>
                                                                        <option value="Trolley">Trolley</option>
                                                                        <option value="Back Reach">Back Reach</option>
                                                                        <option value="Boom">Boom</option>
                                                                        <option value="Head Block">Head Block</option>
                                                                        <option value="Rail">Rail</option>
                                                                        <option value="Elevator">Elevator</option>
                                                                        <option value="Stairs">Stairs</option>
                                                                    </select> -->

                                                                <br>
                                                                </div>
                                                       
                                                                <div  style="position:relative;" id="three">
                                                                    <label class="form-control-label">RTG<span class="text-danger ml-2">*</span></label>
                                                                    <select id="zone3" name="rtg" onChange="myNewFunction(this);hideingr2(this.value);" class="thre selectpicker" >
                                                                 
                                                                       <!-- <option value="Gantry Cabin Side">Gantry Cabin Side</option>
                                                                        <option value="Gantry Land side">Gantry Land side</option>
                                                                        <option value="Checker Cabin">Checker Cabin</option>
                                                                        <option value="Power Pack">Power Pack</option>
                                                                        <option value="Structure">Structure</option>
                                                                        <option value="Spreader">Spreader</option>
                                                                        <option value="Driver Cabin">Driver Cabin</option>
                                                                        <option value="Rail">Rail</option>
                                                                        <option value="Head Block">Head Block</option>
                                                                        <option value="Trolley">Trolley</option>
                                                                        <option value="Stairs">Stairs</option>-->
                                                                    

                                                                    <option value="">Select Asset</option>
                                                                        <?php
                                                                        foreach($result as $row)
                                                                        {
                                                                            echo '<option value="'.$row["wr_zone"].'">'.$row["wr_zone"].'</option>';    
                                                                        }
                                                                        ?></select>
                                                                    <br>
                                                                </div>
                                                                <div style="position:relative;" id="four">
                                                                    <label class="form-control-label">Boom Crane<span class="text-danger ml-2">*</span></label>
                                                                    <select id="zone4" name="bmc" onChange="myNewFunction(this);hideingr3(this.value);" class="fou selectpicker">
                                                                        <option value="">Select Asset</option>
                                                                        <?php
                                                                        foreach($result as $row)
                                                                        {
                                                                            echo '<option value="'.$row["wr_zone"].'">'.$row["wr_zone"].'</option>';    
                                                                        }
                                                                        ?></select>
                                                                    <br>
                                                                    <!--    <option value="">Select</option>
                                                                        <option value="Gantry">Gantry</option>
                                                                        <option value="Cylinder">Cylinder</option>
                                                                        <option value="Stairs">Stairs</option>
                                                                        <option value="Machinery House">Machinery House</option>
                                                                        <option value="Driver Cabin">Driver Cabin</option>
                                                                        <option value="Fleche">Fleche</option>
                                                                        <option value="Grab">Grab</option>
                                                                        <option value="Electric Room">Electric Room</option>
                                                                    </select>-->
                                                                </div>
                                                                <div style="position:relative;" id="five">
                                                                    <label class="form-control-label">YARDS<span class="text-danger ml-2">*</span></label>
                                                                    <select id="zone5"  name="yrd" onChange="myNewFunction(this);hideingr4(this.value);" class="fiv selectpicker">
                                                                        <option value="">Select Asset</option>
                                                                        <?php
                                                                        foreach($result as $row)
                                                                        {
                                                                            echo '<option value="'.$row["wr_zone"].'">'.$row["wr_zone"].'</option>';    
                                                                        }
                                                                        ?></select>
                                                                    <br>
                                                                  <!--      <option value="">Select</option>
                                                                        <option value="RTG Repair Area">RTG Repair Area</option>
                                                                        <option value="Workshop Grounds">Workshop Grounds</option>
                                                                        <option value="Quai Area"> Quai Area</option>
                                                                       
                                                                    </select>-->
                                                                    <br>
                                                                </div>
                                                                </div>
                                                                <br><br>
                                                                <div class="col-xl-4">
                                                                    <label class="form-control-label">Operation type<span class="text-danger ml-2">*</span></label>
                                                                    <select id="ot1"  class="selectpicker" name="exp-month"  onChange="otpFunction(this);"
                                                                        <option value="">Select</option>
                                                                        <option value="High presure">High presure</option>
                                                                        <option value="dried up">dried up</option>
                                                                        <option value="scraping">scraping</option>
                                                                    </select>
                                                                </div>
                                                            </div>
            <input type="hidden" name="hidden_table" id="hidden_table"/>
            <div style="clear:both"></div>
            <br />
            <div style="position:relative; display:none;" id="tableing" class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Site</th>
                            <th>Zone</th>
                            <th>materials requirments</th>
                            <th>tools requirments</th>
                            <th>products requirments</th>
                        </tr>
                    </thead>
                    <tbody id="stsdb">
                    </tbody>
                </table></div>
                <input type="hidden" name="hidden_table2" id="hidden_table2"/>
            <div style="clear:both"></div>
            <br>
            <div style="position:relative; display:none;" id="tableing2" class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Site</th>
                            <th>Zone</th>
                            <th>materials requirments</th>
                            <th>tools requirments</th>
                            <th>products requirments</th>
                        </tr>
                    </thead>
                    <tbody  id="rtgdb">
                    </tbody>
                </table>
            </div>
            <input type="hidden" name="hidden_table3" id="hidden_table3"/>
            <div style="clear:both"></div>
            <br>
            <div style="position:relative; display:none;" id="tableing3" class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Site</th>
                            <th>Zone</th>
                            <th>materials requirments</th>
                            <th>tools requirments</th>
                            <th>products requirments</th>
                        </tr>
                    </thead>
                    <tbody  id="bcdb">
                    </tbody>
                </table>
            </div>
            <input type="hidden" name="hidden_table4" id="hidden_table4"/>
            <div style="clear:both"></div>
            <br>
            <div style="position:relative; display:none;" id="tableing4" class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Site</th>
                            <th>Zone</th>
                            <th>materials requirments</th>
                            <th>tools requirments</th>
                            <th>products requirments</th>
                        </tr>
                    </thead>
                    <tbody  id="yarddb">
                    </tbody>
                </table>
            </div>

                <script>
$(document).ready(function(){

    load_data();
    
    function load_data(query='')
    {
        $.ajax({
            url:"fetch.php",
            method:"POST",
            data:{query1:query},
            success:function(data)
            {
                $('#stsdb').html(data);
            }
        })
    }

    $('#zone1').change(function(){
        $('#hidden_table').val($('#zone1').val());
        var query1 = $('#hidden_table').val();
        load_data(query1);
    });
    
});

 function hideingr(x) {

                if(x != "") {
                   document.getElementById("tableing").style.display = 'block';
                   document.getElementById("tableing2").style.display = 'none';
                   document.getElementById("tableing3").style.display = 'none';
                   document.getElementById("tableing4").style.display = 'none';
      
                }
            }











$(document).ready(function(){

    load_data();
   
    function load_data(query='')
    {
        $.ajax({
            url:"fetch1.php",
            method:"POST",
            data:{query2:query},
            success:function(data)
            {
                $('#rtgdb').html(data);
            }
        })
    }

    $('#zone3').change(function(){
        $('#hidden_table2').val($('#zone3').val());
        var query2 = $('#hidden_table2').val();
        load_data(query2);
    });
    
});

 function hideingr2(x) {
               
                if(x != "") {
                   document.getElementById("tableing2").style.display = 'block';
                   document.getElementById("tableing").style.display = 'none';
                   document.getElementById("tableing2").style.display = 'none';
                   document.getElementById("tableing4").style.display = 'none';
      
                }
            }







$(document).ready(function(){

    load_data();
   
    function load_data(query='')
    {
        $.ajax({
            url:"fetch2.php",
            method:"POST",
            data:{query3:query},
            success:function(data)
            {
                $('#bcdb').html(data);
            }
        })
    }

    $('#zone4').change(function(){
        $('#hidden_table3').val($('#zone4').val());
        var query3 = $('#hidden_table3').val();
        load_data(query3);
    });
    
});

 function hideingr3(x) {
               
                if(x != "") {
                   document.getElementById("tableing3").style.display = 'block';
                   document.getElementById("tableing").style.display = 'none';
                   document.getElementById("tableing2").style.display = 'none';
                   document.getElementById("tableing4").style.display = 'none';
      
                }
            }

$(document).ready(function(){

    load_data();
   
    function load_data(query='')
    {
        $.ajax({
            url:"fetch3.php",
            method:"POST",
            data:{query4:query},
            success:function(data)
            {
                $('#yarddb').html(data);
            }
        })
    }

    $('#zone5').change(function(){
        $('#hidden_table4').val($('#zone5').val());
        var query4 = $('#hidden_table4').val();
        load_data(query4);
    });
    
});

 function hideingr4(x) {
               
                if(x != "") {
                   document.getElementById("tableing3").style.display = 'none';
                   document.getElementById("tableing").style.display = 'none';
                   document.getElementById("tableing2").style.display = 'none';
                   document.getElementById("tableing4").style.display = 'block';
      
                }
            }
</script>
                                                       
                                                               
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Team & tools</h4>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <div class="col-xl-3 mb-3">
                                                                    <label class="form-control-label">Section<span class="text-danger ml-2">*</span></label>
                                                                    <select id="sect1" class="selectpicker">
                                                                        <option value="Heavy Duty">Heavy Duty</option>
                                                                        <option value="rolling machines">rolling machines</option>
                                                                        <option value="yards and grounds">yards and grounds</option>
                                                                    </select>
                                                                </div>
                                                                 <div class="col-xl-3 mb-3">
                                                                    <label class="form-control-label">Machine<span class="text-danger ml-2">*</span></label>
                                                                    <select id="sect1" class="selectpicker">
                                                                        <option value="Hydrotec">Hydrotec</option>
                                                                        <option value="NHP">NHP</option>
                                                                        <option value="Twister">Twister</option>
                                                                        <option value="Brosse Scruber">Brosse Scruber</option>
                                                                        <option value="Aspirateur industriel">Aspirateur industriel</option>
                                                                        <option value="Gonfleur">Gonfleur</option>
                                                                        <option value="Pulverisateur a air Comprime">Pulv&eacute;risateur &agrave; air Comprim&eacute;</option>
                                                                        <option value="Canon a Mousse">Canon &agrave; Mousse</option>
                                                                        <option value="Hydro-Force">Hydro-Force</option>
                                                                        <option value="GEKKO Wand">GEKKO Wand</option>
                                                                        <option value="Nacelle Ciseau">Nacelle Ciseau</option>
                                                                        <option value="Forklift">Forklift</option>
                                                                    </select>
                                                                </div>
                                                                 <div class="col-xl-3 mb-3">
                                                                    <label class="form-control-label">Tools<span class="text-danger ml-2">*</span></label>
                                                                    <select id="sect1" class="selectpicker">
                                                                        <option value="Brosse Coco">Brosse Coco</option>
                                                                        <option value="Brosse Plastique">Brosse Plastique</option>
                                                                        <option value="Brosse Sol">Brosse Sol</option>
                                                                        <option value="Raclette Sol">Raclette Sol</option>
                                                                        <option value="Raclette Sol">Raclette Sol</option>
                                                                        <option value="Mouilleur">Mouilleur</option>
                                                                        <option value="Manche">Manche</option>
                                                                        <option value="Perche Telescopique">Perche Telescopique</option>
                                                                        <option value="Seau">Seau</option>
                                                                        <option value="Chiffon">Chiffon</option>
                                                                        <option value="Chiffon Abrasif">Chiffon Abrasif</option>
                                                                        <option value="Pulverisateur">Pulv&eacute;risateur</option>
                                                                        <option value="Sacs Poubelle">Sacs Poubelle</option>
                                                                        <option value="Plastique De Protection">Plastique De Protection</option>
                                                                        <option value="Bache De Protection">B&acirc;che De Protection</option>
                                                                        <option value="Grattoir">Grattoir</option>
                                                                    </select>
                                                                </div>
                                                                 <div class="col-xl-3 mb-3">
                                                                    <label class="form-control-label">Products<span class="text-danger ml-2">*</span></label>
                                                                    <select id="sect1" class="selectpicker">
                                                                        <option value="Falcon">Falcon</option>
                                                                        <option value="Dimer">Dimer</option>
                                                                        <option value="Ambissol">Ambissol</option>
                                                                        <option value="Velam">Velam</option>
                                                                        <option value="Brill Car">Brill Car</option>
                                                                        <option value="Vinet">Vinet</option>
                                                                        <option value="Detap">Detap</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                      

<script type="text/javascript">
$('#example-getting-started').multiselect({
  buttonText: function(options, select) {
                if (options.length === 0) {
                    return 'Select options';
                } else {
                     var labels = [];
                     options.each(function() {a
                         if ($(this).attr('label') !== undefined) {
                             labels.push($(this).attr('label'));
                         }
                         else {
                             labels.push($(this).html());
                         }
                     });
                     return labels.join(', ') + '';
                 }
            }
});
</script>

                                                            <ul class="pager wizard text-right">
                                                                <li class="previous d-inline-block">
                                                                    <a href="javascript:;" class="btn btn-secondary ripple">Previous</a>
                                                                </li>
                                                                <li class="next d-inline-block">
                                                                     <button class="btn btn-lg btn-gradient-03" style="color:white; border:0;" type="" onclick="onSubmitClick1(); return false;location.href='javascript:;'">Next</button>
                                                                </li>
                                                            </ul>
                                                        </div>


<script language="javascript">
function onSubmitClick1() {


var zone1 = document.getElementById('zone1');
var ct1 = document.getElementById('ct1');
var ot1 = document.getElementById('ot1');
var sect1 = document.getElementById('sect1');



var zone2 = document.getElementById('zone2');
var ct2 = document.getElementById('ct2');
var ot2 = document.getElementById('ot2');
var sect2 = document.getElementById('sect2');



// zone2.value =  zone1.value;
//ct2.value =  ct1.value;
//ot2.value =  ot1.value;
//sect2.value =  sect1.value;

}
  function myNewFunction(element) {
    var zones = element.options[element.selectedIndex].text;
    document.getElementById("zone2").innerHTML = zones;
}

function ctpFunction(element) {
    var ctp = element.options[element.selectedIndex].text;
    document.getElementById("ct2").innerHTML = ctp;
}
function otpFunction(element){
    var otp = element.options[element.selectedIndex].text;
    document.getElementById("ot2").innerHTML = otp;
}



  function stFunction(element) {
    var st = element.options[element.selectedIndex].value;
    document.getElementById("site2").innerHTML = st;
}
  function odFunction(element) {
    var od = element.options[element.selectedIndex].value;
    document.getElementById("odeal2").innerHTML = od;
}

 function fdFunction(element) {
    var fd = element.options[element.selectedIndex].value;
    document.getElementById("funcd2").innerHTML = fd;
}
  function orFunction(element) {
    var or = element.options[element.selectedIndex].value;
    document.getElementById("orec2").innerHTML = or;
}
function fdFunction(element) {
    var fd = element.options[element.selectedIndex].value;
    document.getElementById("funcd2").innerHTML = fd;
}
  function fcrFunction(element) {
    var fcr = element.options[element.selectedIndex].value;
    document.getElementById("funcr2").innerHTML = fcr;
}


function esdFunction(element) {
    var esd = document.getElementById("esd1").value;
    document.getElementById("esd2").innerHTML = esd;
}
  function sdtFunction(element) {
    var sdt = document.getElementById("sdt1").value;
    document.getElementById("sdt2").innerHTML = sdt;
}
  function technFunction(element) {
    var techn = document.getElementById("techn1").value;
    document.getElementById("techn2").innerHTML = techn;
}




</script>
                                                        <div class="tab-pane" id="tab3">
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Confirmation</h4>

                                                            </div>
                                                            <div id="accordion-icon-right" class="accordion">
                                                                <form action="" method="post" >
                                                                <div class="widget has-shadow">
                                                                    <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#IconRightCollapseOne" aria-expanded="true">
                                                                        <div class="card-title w-100">1.Operational Informations</div>
                                                                    </a>
                                                                    <div id="IconRightCollapseOne" class="card-body collapse show" data-parent="#accordion-icon-right">
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">site</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id='site2' ></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Dealer</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id='odeal2' name="dealerin"></div>
                                                                                
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Function</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id='funcd2' name="funcdin"></div>
                                                                                
                                                                               </div>
                                                                        </div>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Reciever</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id="orec2" name="recievein"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Function</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id="funcr2" name="funcrrin"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Equipment Shutdown Delay</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id="esd2" name="esdin"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Start Date-time</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id="sdt2" name="sdtin"></div>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">technicians Number</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id="techn2" name="techin"></div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#IconRightCollapseTwo">
                                                                        <div class="card-title w-100">2. WOF Details</div>
                                                                    </a>
                                                                    <div id="IconRightCollapseTwo" class="card-body collapse" data-parent="#accordion-icon-right">
                                                                        
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Zone</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id="zone2"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Cleaning Type</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id="ct2" ></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Cleaning operation</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                <div id="ot2"></div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    
                                                                    




                                                                    <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#IconRightCollapseThree">
                                                                        <div class="card-title w-100">3. Account Details</div>
                                                                    </a>
                                                                    <div id="IconRightCollapseThree" class="card-body collapse" data-parent="#accordion-icon-right">
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Section</div>
                                                                            <div class="col-sm-8 form-control-plaintext"><input id="sect2" type="text" name="sectin"></div>
                                                                        </div>
                                                                        <div class="form-group row mb-5">
                                                                            <div class="col-sm-3 form-control-label d-flex align-items-center">Agents</div>
                                                                            <div class="col-sm-8 form-control-plaintext">
                                                                                 <input type="text" id="agnts" name="sect1s">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            <ul class="pager wizard text-right">
                                                                <li class="previous d-inline-block">
                                                                    <a href="javascript:void(0)" class="btn btn-secondary ripple">Previous</a>
                                                                </li>
                                                                <li class="next d-inline-block">
                                                                    <a href="javascript:void(0)" class="finish btn btn-lg btn-gradient-03" data-toggle="modal">Finish</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    <footer class="main-footer">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                <!-- <p class="text-gradient-02">Design By jbenplus</p> -->
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="documentation.html">Documentation</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </footer>
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->
                    <div class="off-sidebar from-right">
                        <div class="off-sidebar-container">
                            <header class="off-sidebar-header">
                                <ul class="button-nav nav nav-tabs mt-3 mb-3 ml-3" role="tablist" id="weather-tab">
                                    <li><a class="active" data-toggle="tab" href="#messenger" role="tab" id="messenger-tab">Messages</a></li>
                                    <li><a data-toggle="tab" href="#today" role="tab" id="today-tab">Today</a></li>
                                </ul>
                                <a href="#off-canvas" class="off-sidebar-close"></a>
                            </header>
                            <div class="off-sidebar-content offcanvas-scroll auto-scroll">
                                <div class="tab-content">
                                    <!-- Begin Messenger -->
                                    <div role="tabpanel" class="tab-pane show active fade" id="messenger" aria-labelledby="messenger-tab">
                                        <!-- Begin Chat Message -->
                                        <span class="date">Today</span>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-02.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        <span class="mb-2">Brandon wrote</span>
                                                        Hi David, what's up?
                                                    </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localization font-size-small">2 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Hi Brandon, fine and you?
                                                   </p>
                                                    <p>
                                                       I'm working on the next update of MyDadje
                                                   </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localisation font-size-small">3 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-02.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        <span class="mb-2">Brandon wrote</span>
                                                        I can't wait to see
                                                    </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localization font-size-small">5 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       I'm almost done
                                                   </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localisation font-size-small">10 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date">Yesterday</span>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-05.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        I updated the server tonight
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Didn't you have any problems?
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-05.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        No!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Great!
                                                   </p>
                                                    <p>
                                                       See you later!
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Chat Message -->
                                        <!-- Begin Message Form -->
                                        <div class="enter-message">
                                            <div class="enter-message-form">
                                                <input type="text" placeholder="Enter your message..."/>
                                            </div>
                                            <div class="enter-message-button">
                                                <a href="#" class="send"><i class="ion-paper-airplane"></i></a>
                                            </div>
                                        </div>
                                        <!-- End Message Form -->
                                    </div>
                                    <!-- End Messenger -->
                                    <!-- Begin Today -->
                                    <div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
                                        <!-- Begin Today Stats -->
                                        <div class="sidebar-heading pt-0">Today</div>
                                        <div class="today-stats mt-3 mb-3">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <i class="la la-users"></i>
                                                    <div class="counter">264</div>
                                                    <div class="heading">Clients</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-cart-arrow-down"></i>
                                                    <div class="counter">360</div>
                                                    <div class="heading">Sales</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-money"></i>
                                                    <div class="counter">$ 4,565</div>
                                                    <div class="heading">Earnings</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Today Stats -->
                                        <!-- Begin Friends -->
                                        <div class="sidebar-heading">Friends</div>
                                        <div class="quick-friends mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-02.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Brandon Smith</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Louis Henry</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-04.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Nathan Hunter</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-05.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Megan Duncan</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-06.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Beverly Oliver</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Friends -->
                                        <!-- Begin Settings -->
                                        <div class="sidebar-heading">Settings</div>
                                        <div class="quick-settings mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Email</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox">
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Chat Message Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Settings -->
                                    </div>
                                    <!-- End Today -->
                                </div>
                            </div>
                            <!-- End Offcanvas Container -->
                        </div>
                        <!-- End Offsidebar Container -->
                    </div>
                    <!-- End Offcanvas Sidebar -->
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Modal -->
        <div id="success-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-2">
                            <h2 class="text-gradient-02">Thank you!</h2>
                        </div>
                        <p class="mb-5">The form was submitted successfully</p>
                        <button type="button" class="btn btn-shadow mb-3" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>

        <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/bootstrap-wizard/bootstrap.wizard.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
        <script src="assets/js/components/wizard/form-wizard.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
        <script src="assets/bootstrap-select-1.13.2/dist/js/bootstrap-select.js"></script>
       
    </body>
</html>
<?php
}
if($_SESSION['uat']=='user'){
    session_destroy();

 echo "<meta http-equiv='refresh' content='0;login.php'>";
}
else {
    header("location:login.php?msg=3");
}

?>