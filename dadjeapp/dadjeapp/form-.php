<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& ($_SESSION['uat']=='admin')) 
{
require('../../controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');

$statement = $cdb->prepare("SELECT DISTINCT wr_zone FROM wof_repository ORDER BY wr_zone ASC");
$statement->execute();
$resultSet = $statement->get_result();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>WOF - WORK ORDER FORM</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/wizard/steps.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar" onload='hola(1);holaa(11)' id="page-top">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">WOF - MyDadje By GENIWORKS</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
            <?php include('header.php'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('leftside1.php'); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor"></h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Forms</li>
                            <li class="breadcrumb-item active">WOF</li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <!-- Validation wizard -->
                <div class="row" id="validation">
                    <div class="col-12">
                        <div class="card wizard-content">
                            <div class="card-body">
                                <h4 class="card-title">WOF - WORK ORDER FORM</h4>
                                <h6 class="card-subtitle">Fill The WOF Before Begin Any Operation, All Fields Are Required</h6>
                                <form action="#" class="validation-wizard wizard-circle">
                                    <!-- Step 1 -->
                                    <h6>Step 1</h6>
                                    <section>
                                        
                                        <script>
    function ooFunction(element) {
    var oo = document.getElementById("odeal1").value;
    document.getElementById("funcd1").innerHTML = oo;
}
function orrFunction(element) {
    var orr = document.getElementById("orec1").value;
    document.getElementById("funcr1").innerHTML = orr;
}
</script>


                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Customer Informations</h4>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <div class="col-sm-4">
                                                                    <label class="form-control-label">Site<br><span class="text-danger red ml-2">*</span><span style="color: gray; font-size: 10px;">(Please select your working site?)</span></label>
                                                                    <select id="site1" onChange="stFunction(this);" name="site1" class=" form-control" required>
                                                                        <option value="">Select</option>
                                                                         <optgroup label="APM">
                                                                        <option value="APM1">APM1</option>
                                                                    </optgroup>
                                                                    <optgroup label="EUROGATE">
                                                                        <option value="EUROGATE">EUROGATE</option>
                                                                    </optgroup>
                                                                        <optgroup label="MARSA MAROC">
                                                                        <option value="TC3">TC3</option>
                                                                        <option value="DE">DE</option>
                                                                    </optgroup>
                                                                    <optgroup label="BMCI">
                                                                        <option value="BMCI">BMCI</option>

                                                                    </optgroup>
                                                                    </select><br>
                                                                    <label class="form-control-label">About Site</label>
                                                                        <div class="col-sm-4 form-control-plaintext">
                                                                               <div id="funcss1" onChange="fssFunction(this);"></div>
                                                                            </div>
                                                                </div>
                                                            
                                                                 <div class="col-sm-4">
                                                                    <label class="form-control-label">Order Owner<br><span class="text-danger ml-2">*<span style="color: gray; font-size: 10px;">(Please select your contact?)</span></span></label>
                                                                    <select name="odeal1" id="odeal1" onChange="odFunction(this);ooFunction(this);" class=" form-control" required>
                                                                        <optgroup label="APM">
                                                                        <option value="">Select Owner</option>
                                                                        <option value="FRIDI">FRIDI</option>
                                                                        <option value="FARID ALAMI">FARID ALAMI</option>
                                                                        <option value="HAKIM">HAKIM</option>
                                                                        <option value="YOUNESS">YOUNESS</option>
                                                                        <option value="ABDELATIF">ABDELATIF</option>
                                                                        <option value="ELKCHIDA">ELKCHIDA</option>
                                                                        <option value="JEDDAOUI">JEDDAOUI</option>
                                                                        <option value="ABELHADI<">ABELHADI</option>
                                                                        </optgroup>
                                                                        <optgroup label="MM DE">
                                                                            <option value="CHARKI">CHARKI</option>
                                                                        <option value="AFICHAH">AFICHAH</option>
                                                                        <option value="YASSER">YASSER</option>
                                                                        </optgroup>
                                                                        <optgroup label="MM TC3">
                                                                            <option value="AKDIM">AKDIM</option>
                                                                            <option value="ANAS">ANAS</option>
                                                                            <option value="RACHID">RACHID</option>
                                                                        </optgroup>
                                                                    </select><br>
                                                                    <label class="form-control-label">About Owner</label>
                                                                        <div class="col-sm-4 form-control-plaintext">
                                                                               <div id="funcd1" onChange="fdFunction(this);"></div>
                                                                            </div>
                                                                </div>
                                                            
<style>
hr{   
    border:         none;
    border-left:    1px solid hsla(200, 10%, 50%,100);
    height:         100vh;
    width:          1px;       
}    
                                                                </style>
                                                                <div class="col-sm-4">
                                                                    <label class="form-control-label">Order receiver</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Who are you?)</span>
                                                                    <select name="orec1" id="orec1" onChange="orFunction(this);orrFunction(this);" class=" form-control" required>
                                                                        <option value="">Select reciever</option>
                                                                        <option value="Otman Lechehab">Otman Lechehab</option>
                                                                        <option value="Youness Ait Oualla">Youness Ait Oualla</option>
                                                                    </select><br>
                                                                    <label class="form-control-label">About Reciever</label>
                                                                        <div class="col-sm-4 form-control-plaintext">
                                                                               <div id="funcr1" name="funcr1" onChange="fcrFunction(this);"></div>
                                                                            </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row ">
                                                                
                                                                <div class="col-sm-4">
                                                                    <label class="form-control-label">Down time</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Hours)</span>
                                                                    <!--<input type="number" name="esd1" onChange="esdFunction(this);" id="esd1" class="selectpicker form-control"  placeholder="Hours">-->
                                                                    <input type="number" name="esd1" onChange="esdFunction(this);" id="esd1" value="1"  min="1" max="12" maxlength = "2" step="1" class="  form-control"  onkeypress="return isNumeric(event)"  required oninput="maxLengthCheck(this)">
                                                                </div>
                                                                <script>
  function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
    
  function isNumeric (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]|\./;
    if ( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
</script>
                                                            
                                                                <div class="col-sm-4">
                                                                    <label class="form-control-label ">Estimated Delivery</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Define Delivery Date)</span>
                                                                    <input type="datetime-local" onChange="sdtFunction(this);" name="sdt1" id="sdt1" class=" form-control"  required>
                                                                </div>
                                                               <!-- <div class="col-xl-4 mb-5">
                                                                    <label class="form-control-label">technicians Number<span class="text-danger ml-2">*</span></label>
                                                                    <input type="number" onChange="technFunction(this);"  name="techn1" id="techn1" value="1" min="1" max="10" step="1" class="custom-select form-control">
                                                                </div> -->
                                                                <div class="col-sm-4">
                                                                    <label class="form-control-label">Requested Cleaning Type</label><span class="text-danger">*</span><span style="color: gray; font-size: 10px;">(Partial or Complete)</span>
                                                                    <div class="input-group range-field">
                                                                        <select name="rct" id="rct1" onChange="rctFunction(this);" class=" form-control" required>
                                                                        <option selected value="25">25%</option>
                                                                        <option value="50">50%</option>
                                                                        <option value="75">75%</option>
                                                                        <option value="100">100%</option>
                                                                    </select><br>
                                                                        <!--<input type="range"  class="custom-range"data-slider-min="0" data-slider-max="100" step="25" data-slider-id='ex1Slider' data-slider-step="1" required>-->
                                                                    </div>
        
        <style>
        #ex1Slider .slider-selection {
    background: #BABABA;
}
        </style>                                                        </div>
<script>
$('#ex1').slider({
    formatter: function(value) {
        return 'Current value: ' + value;
    }
});

// Without JQuery
var slider = new Slider('#ex1', {
    formatter: function(value) {
        return 'Current value: ' + value;
    }
});

$("#rct1").slider({
    tooltip: 'always'
});


var slider = new Slider("#rct1", {
    tooltip: 'always'
});
</script>
                                                                
                                            </div>
                                               <div class="section-title mt-5 mb-5">
                                                    <h4>Asset Infomation</h4>
                                                </div>
                                                    <div class="form-group row">
                                                            <div class="col-sm-4" id="one">
                                                                    <label class="form-control-label">Asset</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Select Your Equipment)</span>
                                                                    <select onChange="hola(this.value)" name="zones" class="form-control ">
                                                                        <option selected value="1" >STS</option>
                                                                        <option value="2">RTG</option>
                                                                        <option value="3">Crue Fleche</option>
                                                                        <option value="4">YARDS</option>
                                                                    </select>
                                                                    <input type="text" placeholder="Type Asset ID" class="form-control" name="">
                                                                </div>
          
                                                                <div class="col-sm-4">
                                                                    <div style="position:relative;" id="two">
                                                                    <label class="form-control-label">Sub Asset - STS</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Select Sub-Asset)</span>
                                                                    <select  name="sts" id="zone1" onChange="myNewFunction(this);hideingr(this.value);" class="form-control tw">
                                                                         <option value="">Select Asset</option>
                                                                        <?php
                                                                        foreach($resultSet as $row)
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

                                                                </div>
                                                       
                                                                <div  style="position:relative;" id="three">
                                                                    <label class="form-control-label">Sub Asset - RTG</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Select Your Sub-Asset)</span>
                                                                    <select id="zone3" name="rtg" onChange="myNewFunction(this);hideingr2(this.value);" class="thre  form-control" >
                                                                 
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
                                                                        foreach($resultSet as $row)
                                                                        {
                                                                            echo '<option value="'.$row["wr_zone"].'">'.$row["wr_zone"].'</option>';    
                                                                        }
                                                                        ?></select>
                                                                  
                                                                </div>
                                                                <div style="position:relative;" id="four">
                                                                    <label class="form-control-label">Boom Crane</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Select Your Sub-Asset)</span>
                                                                    <select id="zone4" name="bmc" onChange="myNewFunction(this);hideingr3(this.value);" class="fou form-control">
                                                                        <option value="">Select Asset</option>
                                                                        <?php
                                                                        foreach($resultSet as $row)
                                                                        {
                                                                            echo '<option value="'.$row["wr_zone"].'">'.$row["wr_zone"].'</option>';    
                                                                        }
                                                                        ?></select>
                                                                    
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
                                                                    <label class="form-control-label">Sub Asset - YARDS</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Select Your Sub-Asset)</span>
                                                                    <select id="zone5"  name="yrd" onChange="myNewFunction(this);hideingr4(this.value);" class="fiv form-control">
                                                                        <option value="">Select Asset</option>
                                                                        <?php
                                                                        foreach($resultSet as $row)
                                                                        {
                                                                            echo '<option value="'.$row["wr_zone"].'">'.$row["wr_zone"].'</option>';    
                                                                        }
                                                                        ?></select>
                                                                    
                                                                  <!--      <option value="">Select</option>
                                                                        <option value="RTG Repair Area">RTG Repair Area</option>
                                                                        <option value="Workshop Grounds">Workshop Grounds</option>
                                                                        <option value="Quai Area"> Quai Area</option>
                                                                       
                                                                    </select>-->
                                                                    
                                                                    
                                                                </div>
                                                                <input type="text" placeholder="Type Sub-Asset ID" class="form-control" name="">
                                                                </div>
                                                                <br>
                                                                
                                                            </div>
            

                <script>
$(document).ready(function(){

    load_data();
    
    function load_data(query='')
    {
        $.ajax({
            url:"../../fetch.php",
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
            url:"../../fetch1.php",
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
                   document.getElementById("tableing3").style.display = 'none';
                   document.getElementById("tableing4").style.display = 'none';
      
                }
            }







$(document).ready(function(){

    load_data();
   
    function load_data(query='')
    {
        $.ajax({
            url:"../../fetch2.php",
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
            url:"../../fetch3.php",
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
                                                       
                                    <script>
$('#rct1')[0].checkValidity();
</script>

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
                                                                    
var rct1 = document.getElementById('rct1');
var rct2 = document.getElementById('rct2');


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
                    document.getElementById("selass").innerHTML = "STS";
                    document.getElementById("selas").value = "STS";


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
                    document.getElementById("selass").innerHTML = "RTG";
                    document.getElementById("selas").value = "RTG";

                    
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
                    document.getElementById("selass").innerHTML = "Crue a Fleche";
                    document.getElementById("selas").value = "Crue a Fleche";
              
                    
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
                    document.getElementById("selass").innerHTML = "Yards and Grounds";
                    document.getElementById("selas").value = "Yards and Grounds";

                  
                    document.getElementById("three").disabled = true;
                    document.getElementById("two").disabled = true;
                    document.getElementById("four").disabled = true;
                    document.getElementById("five").style.position = 'relative';
                    document.getElementById("three").style.position = 'absolute';
                    document.getElementById("two").style.position = 'absolute';
                    document.getElementById("four").style.position = 'absolute';
                }
            }

 function holaa(x) {
               



                if(x == 11) {

                    document.getElementById("six").style.visibility="visible";
                    document.getElementById("seven").style.visibility="hidden";
                    document.getElementById("eight").style.visibility="hidden";
                    document.getElementById("nine").style.visibility="hidden";
                    document.getElementById("ten").style.visibility="hidden";
                    document.getElementById("eleven").style.visibility="hidden";
                    document.getElementById("twelve").style.visibility="hidden";
                    document.getElementById("thirteen").style.visibility="hidden";
                    document.getElementById("fourteen").style.visibility="hidden";

                    document.getElementById("sect2").innerHTML = "APM sect-1";
                    document.getElementById("sect3").value = "APM sect-1";



                    document.getElementById("seven").disabled = true;
                    document.getElementById("eight").disabled = true;
                    document.getElementById("nine").disabled = true;
                    document.getElementById("ten").disabled = true;
                    document.getElementById("eleven").disabled = true;
                    document.getElementById("twelve").disabled = true;
                    document.getElementById("thirteen").disabled = true;
                    document.getElementById("fourteen").disabled = true;
                    document.getElementById("seven").style.position = 'absolute';
                    document.getElementById("six").style.position = 'relative';
                    document.getElementById("eight").style.position = 'absolute';
                    document.getElementById("nine").style.position = 'absolute';
                    document.getElementById("ten").style.position = 'absolute';
                    document.getElementById("eleven").style.position = 'absolute';
                    document.getElementById("twelve").style.position = 'absolute';
                    document.getElementById("thirteen").style.position = 'absolute';
                    document.getElementById("fourteen").style.position = 'absolute';
                }
                if(x == 12)  {
                    document.getElementById("six").style.visibility="hidden";
                    document.getElementById("seven").style.visibility="visible";
                    document.getElementById("eight").style.visibility="hidden";
                    document.getElementById("nine").style.visibility="hidden";
                    document.getElementById("ten").style.visibility="hidden";
                    document.getElementById("eleven").style.visibility="hidden";
                    document.getElementById("twelve").style.visibility="hidden";
                    document.getElementById("thirteen").style.visibility="hidden";
                    document.getElementById("fourteen").style.visibility="hidden";

                    document.getElementById("sect2").innerHTML = "APM sect-2";
                    document.getElementById("sect3").value = "APM sect-2";

                    
                    document.getElementById("six").disabled = true;
                    document.getElementById("eight").disabled = true;
                    document.getElementById("nine").disabled = true;
                    document.getElementById("ten").disabled = true;
                    document.getElementById("eleven").disabled = true;
                    document.getElementById("twelve").disabled = true;
                    document.getElementById("thirteen").disabled = true;
                    document.getElementById("fourteen").disabled = true;
                    document.getElementById("seven").style.position = 'relative';
                    document.getElementById("six").style.position = 'absolute';
                    document.getElementById("eight").style.position = 'absolute';
                    document.getElementById("nine").style.position = 'absolute';
                    document.getElementById("ten").style.position = 'absolute';
                    document.getElementById("eleven").style.position = 'absolute';
                    document.getElementById("twelve").style.position = 'absolute';
                    document.getElementById("thirteen").style.position = 'absolute';
                    document.getElementById("fourteen").style.position = 'absolute';
                }
                if(x == 13)  {
                    document.getElementById("six").style.visibility="hidden";
                    document.getElementById("seven").style.visibility="hidden";
                    document.getElementById("eight").style.visibility="visible";
                    document.getElementById("nine").style.visibility="hidden";
                    document.getElementById("ten").style.visibility="hidden";
                    document.getElementById("eleven").style.visibility="hidden";
                    document.getElementById("twelve").style.visibility="hidden";
                    document.getElementById("thirteen").style.visibility="hidden";
                    document.getElementById("fourteen").style.visibility="hidden";

              
                    
                    document.getElementById("six").disabled = true;
                    document.getElementById("seven").disabled = true;
                    document.getElementById("nine").disabled = true;
                    document.getElementById("ten").disabled = true;
                    document.getElementById("eleven").disabled = true;
                    document.getElementById("twelve").disabled = true;
                    document.getElementById("thirteen").disabled = true;
                    document.getElementById("fourteen").disabled = true;
                    document.getElementById("eight").style.position = 'relative';
                    document.getElementById("six").style.position = 'absolute';
                    document.getElementById("seven").style.position = 'absolute';
                    document.getElementById("nine").style.position = 'absolute';
                    document.getElementById("ten").style.position = 'absolute';
                    document.getElementById("eleven").style.position = 'absolute';
                    document.getElementById("twelve").style.position = 'absolute';
                    document.getElementById("thirteen").style.position = 'absolute';
                    document.getElementById("fourteen").style.position = 'absolute';

                    document.getElementById("sect2").innerHTML = "APM sect-3";
                    document.getElementById("sect3").value = "APM sect-3";
                }
                if(x == 21)  {
                    document.getElementById("six").style.visibility="hidden";
                    document.getElementById("seven").style.visibility="hidden";
                    document.getElementById("eight").style.visibility="hidden";
                    document.getElementById("ten").style.visibility="hidden";
                    document.getElementById("nine").style.visibility="visible";
                    document.getElementById("eleven").style.visibility="hidden";
                    document.getElementById("twelve").style.visibility="hidden";
                    document.getElementById("thirteen").style.visibility="hidden";
                    document.getElementById("fourteen").style.visibility="hidden";

                  
                    document.getElementById("six").disabled = true;
                    document.getElementById("seven").disabled = true;
                    document.getElementById("eight").disabled = true;
                    document.getElementById("ten").disabled = true;
                    document.getElementById("eleven").disabled = true;
                    document.getElementById("twelve").disabled = true;
                    document.getElementById("thirteen").disabled = true;
                    document.getElementById("fourteen").disabled = true;
                    document.getElementById("nine").style.position = 'relative';
                    document.getElementById("six").style.position = 'absolute';
                    document.getElementById("seven").style.position = 'absolute';
                    document.getElementById("eight").style.position = 'absolute';
                    document.getElementById("ten").style.position = 'absolute';
                    document.getElementById("eleven").style.position = 'absolute';
                    document.getElementById("twelve").style.position = 'absolute';
                    document.getElementById("thirteen").style.position = 'absolute';
                    document.getElementById("fourteen").style.position = 'absolute';
                    document.getElementById("sect2").innerHTML = "TC3 sect-1";
                    document.getElementById("sect3").value = "TC3 sect-1";
                }

                if(x == 31)  {
                    document.getElementById("six").style.visibility="hidden";
                    document.getElementById("seven").style.visibility="hidden";
                    document.getElementById("eight").style.visibility="hidden";
                    document.getElementById("nine").style.visibility="hidden";
                    document.getElementById("ten").style.visibility="visible";
                    document.getElementById("eleven").style.visibility="hidden";
                    document.getElementById("twelve").style.visibility="hidden";
                    document.getElementById("thirteen").style.visibility="hidden";
                    document.getElementById("fourteen").style.visibility="hidden";

                    document.getElementById("sect2").innerHTML = "DE sect-1";
                    document.getElementById("sect3").value = "DE sect-1";

                  
                    document.getElementById("six").disabled = true;
                    document.getElementById("seven").disabled = true;
                    document.getElementById("eight").disabled = true;
                    document.getElementById("nine").disabled = true;
                    document.getElementById("eleven").disabled = true;
                    document.getElementById("twelve").disabled = true;
                    document.getElementById("thirteen").disabled = true;
                    document.getElementById("fourteen").disabled = true;

                    document.getElementById("nine").style.position = 'absolute';
                    document.getElementById("six").style.position = 'absolute';
                    document.getElementById("seven").style.position = 'absolute';
                    document.getElementById("eight").style.position = 'absolute';
                    document.getElementById("ten").style.position = 'relative';
                    document.getElementById("eleven").style.position = 'absolute';
                    document.getElementById("twelve").style.position = 'absolute';
                    document.getElementById("thirteen").style.position = 'absolute';
                    document.getElementById("fourteen").style.position = 'absolute';
                }
                if(x == 32)  {
                    document.getElementById("six").style.visibility="hidden";
                    document.getElementById("seven").style.visibility="hidden";
                    document.getElementById("eight").style.visibility="hidden";
                    document.getElementById("nine").style.visibility="hidden";
                    document.getElementById("ten").style.visibility="hidden";
                    document.getElementById("eleven").style.visibility="visible";
                    document.getElementById("twelve").style.visibility="hidden";
                    document.getElementById("thirteen").style.visibility="hidden";
                    document.getElementById("fourteen").style.visibility="hidden";

                    document.getElementById("sect2").innerHTML = "DE sect-2 RopeWorks";
                    document.getElementById("sect3").value = "DE sect-2 RopeWorks";

                  
                    document.getElementById("six").disabled = true;
                    document.getElementById("seven").disabled = true;
                    document.getElementById("eight").disabled = true;
                    document.getElementById("nine").disabled = true;
                    document.getElementById("ten").disabled = true;
                    document.getElementById("twelve").disabled = true;
                    document.getElementById("thirteen").disabled = true;
                    document.getElementById("fourteen").disabled = true;
                    document.getElementById("nine").style.position = 'absolute';
                    document.getElementById("six").style.position = 'absolute';
                    document.getElementById("seven").style.position = 'absolute';
                    document.getElementById("eight").style.position = 'absolute';
                    document.getElementById("ten").style.position = 'absolute';
                    document.getElementById("eleven").style.position = 'relative';
                    document.getElementById("twelve").style.position = 'absolute';
                    document.getElementById("thirteen").style.position = 'absolute';
                    document.getElementById("fourteen").style.position = 'absolute';
                }
                if(x == 33)  {
                    document.getElementById("six").style.visibility="hidden";
                    document.getElementById("seven").style.visibility="hidden";
                    document.getElementById("eight").style.visibility="hidden";
                    document.getElementById("nine").style.visibility="hidden";
                    document.getElementById("ten").style.visibility="hidden";
                    document.getElementById("eleven").style.visibility="hidden";
                    document.getElementById("twelve").style.visibility="visible";
                    document.getElementById("thirteen").style.visibility="hidden";
                    document.getElementById("fourteen").style.visibility="hidden";

                    document.getElementById("sect2").innerHTML = "DE sect-3 RopeWorks";
                    document.getElementById("sect3").value = "DE sect-3 RopeWorks";

                  
                    document.getElementById("six").disabled = true;
                    document.getElementById("seven").disabled = true;
                    document.getElementById("eight").disabled = true;
                    document.getElementById("nine").disabled = true;
                    document.getElementById("ten").disabled = true;
                    document.getElementById("eleven").disabled = true;
                    document.getElementById("thirteen").disabled = true;
                    document.getElementById("fourteen").disabled = true;
                    document.getElementById("nine").style.position = 'absolute';
                    document.getElementById("six").style.position = 'absolute';
                    document.getElementById("seven").style.position = 'absolute';
                    document.getElementById("eight").style.position = 'absolute';
                    document.getElementById("ten").style.position = 'absolute';
                    document.getElementById("eleven").style.position = 'absolute';
                    document.getElementById("twelve").style.position = 'relative';
                    document.getElementById("thirteen").style.position = 'absolute';
                    document.getElementById("fourteen").style.position = 'absolute';
                }
                if(x == 41)  {
                    document.getElementById("six").style.visibility="hidden";
                    document.getElementById("seven").style.visibility="hidden";
                    document.getElementById("eight").style.visibility="hidden";
                    document.getElementById("nine").style.visibility="hidden";
                    document.getElementById("ten").style.visibility="hidden";
                    document.getElementById("eleven").style.visibility="hidden";
                    document.getElementById("twelve").style.visibility="hidden";
                    document.getElementById("thirteen").style.visibility="visible";
                    document.getElementById("fourteen").style.visibility="hidden";

                    document.getElementById("sect2").innerHTML = "EG sect-1";
                    document.getElementById("sect3").value = "EG sect-1";

                  
                    document.getElementById("six").disabled = true;
                    document.getElementById("seven").disabled = true;
                    document.getElementById("eight").disabled = true;
                    document.getElementById("nine").disabled = true;
                    document.getElementById("ten").disabled = true;
                    document.getElementById("eleven").disabled = true;
                    document.getElementById("twelve").disabled = true;
                    document.getElementById("fourteen").disabled = true;
                    document.getElementById("nine").style.position = 'absolute';
                    document.getElementById("six").style.position = 'absolute';
                    document.getElementById("seven").style.position = 'absolute';
                    document.getElementById("eight").style.position = 'absolute';
                    document.getElementById("ten").style.position = 'absolute';
                    document.getElementById("eleven").style.position = 'absolute';
                    document.getElementById("twelve").style.position = 'absolute';
                    document.getElementById("thirteen").style.position = 'relative';
                    document.getElementById("fourteen").style.position = 'absolute';
                }
                if(x == 51)  {
                    document.getElementById("six").style.visibility="hidden";
                    document.getElementById("seven").style.visibility="hidden";
                    document.getElementById("eight").style.visibility="hidden";
                    document.getElementById("nine").style.visibility="hidden";
                    document.getElementById("ten").style.visibility="hidden";
                    document.getElementById("eleven").style.visibility="hidden";
                    document.getElementById("twelve").style.visibility="hidden";
                    document.getElementById("thirteen").style.visibility="hidden";
                    document.getElementById("fourteen").style.visibility="visible";

                    document.getElementById("sect2").innerHTML = "BMCI sect-1";
                    document.getElementById("sect3").value = "BMCI sect-1";

                  
                    document.getElementById("six").disabled = true;
                    document.getElementById("seven").disabled = true;
                    document.getElementById("eight").disabled = true;
                    document.getElementById("nine").disabled = true;
                    document.getElementById("ten").disabled = true;
                    document.getElementById("eleven").disabled = true;
                    document.getElementById("twelve").disabled = true;
                    document.getElementById("thirteen").disabled = true;
                    document.getElementById("nine").style.position = 'absolute';
                    document.getElementById("six").style.position = 'absolute';
                    document.getElementById("seven").style.position = 'absolute';
                    document.getElementById("eight").style.position = 'absolute';
                    document.getElementById("ten").style.position = 'absolute';
                    document.getElementById("eleven").style.position = 'absolute';
                    document.getElementById("twelve").style.position = 'absolute';
                    document.getElementById("thirteen").style.position = 'absolute';
                    document.getElementById("fourteen").style.position = 'relative';
                }
            }

        </script>


                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Step 2</h6>
                                    <section>




                                      
                                                         
                                                            <div class="section-title mt-5 mb-5">
                                                                <h4>Operation Informations</h4>
                                                            </div>
                                                            
                                                            <div class="form-group row">

                                                                <div class="col-sm-4" id="onee">
                                                                    <label class="form-control-label">Sections</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Select Your sections)</span>
                                                                    <select onChange="holaa(this.value),secctFunction(this);" id="sect1" name="sect1" class=" form-control " required> 
                                                                        <optgroup label="APM - CleanWorks">
                                                                        <option selected value="11">APM - Section 1</option>
                                                                        <option value="12">APM - Section 2</option>
                                                                        <option value="13">APM - Section 3</option>
                                                                    </optgroup>
                                                                    <optgroup label="TC3 - CleanWorks">
                                                                        <option value="21">TC3 - Section 1</option>
                                                                    </optgroup>
                                                                    <optgroup label="DE - CleanWorks">
                                                                        <option value="31">DE - Section 1</option>
                                                                    </optgroup>
                                                                    <optgroup label="DE - RopeWorks">
                                                                        <option value="32">DE - Section 2</option>
                                                                    </optgroup>
                                                                    <optgroup label="DE - RopeWorks">
                                                                        <option value="33">DE - Section 3</option>
                                                                    </optgroup>
                                                                    <optgroup label="EUROGATE - CleanWorks">
                                                                        <option value="41">EG - Section 1</option>
                                                                    </optgroup>
                                                                    <optgroup label="BMCI - CleanWorks">
                                                                        <option value="51">BMCI - Section 1</option>
                                                                    </optgroup>
                                                                    </select>
                                                                </div>
                                                                <br>
                                                                <div class="col-sm-4">
                                                                    <div style="position:relative;" id="six">
                                                                    <label class="form-control-label">APM section 1</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Members Of APM section 1)</span>
                                                                    <div name="sts" id="sects" class=" tw selectpicker" required>
                                                                         Omar El OUARDI 
                                                                         <br>
                                                                         Abdelah EL HERRAS <br>
                                                                         Hamid EL KTIOUI

                                                                    </div>
                                                                    

                                                                <br>
                                                                </div>
                                                       
                                                                <div  style="position:relative;" id="seven">
                                                                    <label class="form-control-label">APM section 2</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Members Of APM section 2)</span>
                                                                    <div id="sects1" name="rtg"  class=" thre selectpicker" required >
                                                                 Abdelmalek LAAFRAOUI<br>Khalid BAHASSOU<br>Ahmed LAGHBALI
                                                                        </div>
                                                                    <br>
                                                                </div>
                                                                <div style="position:relative;" id="eight">
                                                                    <label class="form-control-label">APM - Section 3</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Members Of APM section 3)</span>
                                                                    <div id="sects2" name="bmc" class=" fou selectpicker"  required>
                                                                        Abdelatif FAROUKI<br> Hassan EL OUARDI
                                                                        </div>
                                                                    <br>
                                                                    
                                                                </div>
                                                                <div style="position:relative;" id="nine">
                                                                    <label class="form-control-label">TC3 - Section 1</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Members Of TC3 section 1)</span>
                                                                    <div id="sects3"  name="yrd" class=" fiv selectpicker" required>
                                                                        Khalid AIT OUALLA<br>Abdelali ZERAOUI<br>Ali BERRADY
                                                                        </div>
                                                                    <br>
                                                                 
                                                                    <br>
                                                                </div>
                                                                <div style="position:relative;" id="ten">
                                                                    <label class="form-control-label">DE - Section 1</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Members Of DE section 1)</span>
                                                                    <div id="sects4"  name="yrd" class=" fiv selectpicker" required>
                                                                        Mouhammed AIT OUFKIR<br>Mouhamed OUMAOU<br>Saiid OUMAOU<br> Achraf MANSOURI<br>Machkour ESSEDIK
                                                                        </div>
                                                                    <br>
                                                                 
                                                                    <br>
                                                                </div>
                                                                <div style="position:relative;" id="eleven">
                                                                    <label class="form-control-label">DE - Section 2</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Members Of DE section 2)</span>
                                                                    <div id="sects5"  name="yrd" class=" fiv selectpicker" required>
                                                                        Moukhtar AIT OUFKIR<br>Soufiane HNINY
                                                                        </div>
                                                                    <br>
                                                                 
                                                                    <br>
                                                                </div>
                                                                <div style="position:relative;" id="twelve">
                                                                    <label class="form-control-label">DE - Section 3</label><br><span class="text-danger ml-2">*</span>
                                                                    <div id="sects6"  name="yrd" class="fiv selectpicker" required>
                                                                    Ahmed NASSIMI<br>Marouane FARIH
                                                                        </div>
                                                                    <br>
                                                                 
                                                                    <br>
                                                                </div>
                                                                <div style="position:relative;" id="thirteen">
                                                                    <label class="form-control-label">EG - Section 1</label><br><span class="text-danger ml-2">*</span>
                                                                    <div id="sects7"  name="yrd" class="fiv selectpicker" required>
                                                                    Ayoub ESSAIDI<br>Mourad EL OUARDI<br>Jamal ARBAI
                                                                        </div>
                                                                    <br>
                                                                 
                                                                    <br>
                                                                </div>
                                                                <div style="position:relative;" id="fourteen">
                                                                    <label class="form-control-label">BMCI - Section 1</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Members Of BMCI section 1)</span>
                                                                    <div id="sects8"  name="yrd" class="fiv selectpicker" required>
                                                                    Yassine BENCHALKHA
                                                                        </div>
                                                                    <br>
                                                                 
                                                                    <br>
                                                                </div>
                                                                </div>
                                                                <br><br>
                                                <!--<div class="col-lg-9">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                            <input type="text" class="form-control" id="datetime" placeholder="Select value">
                                                        </div>
                                                    </div>
                                                </div>-->
                                                                <div class="col-sm-4">
                                                                    <label class="form-control-label">Requested Cleaning Tasks</label><br><span class="text-danger ml-2">*</span><span style="color: gray; font-size: 10px;">(Select Cleaning )</span>
                                                                    <select id="ot1"  class=" form-control" name="exp-month"  onChange="otpFunction(this);"  required>
                                                                        <option value="">Select</option>
                                                                        <option value="High presure">High Presure Cleaning</option>
                                                                        <option value="dried up">Dry Cleaning</option>
                                                                        <option value="scraping">Scraping</option>
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

                                    </section>


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
    document.getElementById("zonee").value = zones;
}

function ctpFunction(element) {
    var ctp = element.options[element.selectedIndex].text;
    document.getElementById("ct2").innerHTML = ctp;
    document.getElementById("ct3").value = ctp;
}
function otpFunction(element){
    var otp = element.options[element.selectedIndex].text;
    document.getElementById("ot2").innerHTML = otp;
    document.getElementById("ot3").value = otp;
}



  function stFunction(element) {
    var st = element.options[element.selectedIndex].value;
    document.getElementById("site2").innerHTML = st;
    document.getElementById("site3").value = st;
    document.getElementById("funcss1").innerHTML = st;
}
  function odFunction(element) {
    var od = element.options[element.selectedIndex].value;
    document.getElementById("odeal2").innerHTML = od;
    document.getElementById("odeal3").value = od;
}


 function fdFunction(element) {
    var fd = element.options[element.selectedIndex].value;
    document.getElementById("funcd2").innerHTML = fd;
    document.getElementById("funcd3").value = fd;
}
  function orFunction(element) {
    var or = element.options[element.selectedIndex].value;
    document.getElementById("orec2").innerHTML = or;
    document.getElementById("orec3").value = or;
}
function fdFunction(element) {
    var fd = element.options[element.selectedIndex].value;
    document.getElementById("funcd2").innerHTML = fd;
    document.getElementById("funcd3").value = fd;
}
  function fcrFunction(element) {

     var fccrr = document.getElementById("funcr1").value;
    document.getElementById("funcr2").innerHTML = fccrr;
    document.getElementById("funcr3").value = fccrr;
}


function esdFunction(element) {
    var esd = document.getElementById("esd1").value;
    document.getElementById("esd2").innerHTML = esd;
    document.getElementById("esd3").value = esd;
}
  function sdtFunction(element) {
    var sdt = document.getElementById("sdt1").value;
    document.getElementById("sdt2").innerHTML = sdt;
    document.getElementById("sdt3").value = sdt;
}
  function technFunction(element) {
    var techn = document.getElementById("techn1").value;
    document.getElementById("techn2").innerHTML = techn;
    document.getElementById("techn3").value = techn;
}
function secctFunction(element) {
   
}
function rctFunction(element) {
    var rct = document.getElementById("rct1").value;
    document.getElementById("rct2").innerHTML = rct;
    document.getElementById("rct3").value = rct;
}



</script>
                                    <!-- Step 3 -->
                                    <h6>Step 3</h6>
                                    <section>
                                        

                            <div class="section-title mt-3 mb-3">
                                    <h4> Work Instuction Review</h4><span style="font-size: 10px;">(Click To Show Informations)</span>
                                </div> <form action="" method="post" >
                                <div id="accordion-icon-right" class="accordion">
                                    <div class="widget has-shadow">
                                        <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#IconRightCollapseOne" aria-expanded="true">
                                            <div class="card-title w-100">1.Customer informations<i style="float: right;" class="fas fa-arrows-alt-v"></i></div>
                                        </a>
                                        <div id="IconRightCollapseOne" class="card-body collapse show" data-parent="#accordion-icon-right">

                                            <div class="form-group row mb-5">
                                                <div class="col-sm-3 form-control-label d-flex align-items-center">site</div>
                                                <div class="col-sm-8 form-control-plaintext">
                                                    <span id='site2'></span>
                                                    <input type="hidden" id='site3' name="site3" required>
                                                </div>
                                                <div class="col-sm-3 form-control-label d-flex align-items-center">Order Owner</div>
                                                <div class="col-sm-8 form-control-plaintext">
                                                    <span id='odeal2' name="dealerin"></span>
                                                    <input type="hidden" id='odeal3' name="odeal3" required>
                                                </div>
                                                <div class="col-sm-3 form-control-label d-flex align-items-center">Reciever</div>
                                                <div class="col-sm-8 form-control-plaintext">
                                                    <span id="orec2" name="recievein"></span>
                                                    <input type="hidden" id='orec3' name="orec3" required>

                                                </div>
                                                <div class="col-sm-3 form-control-label d-flex align-items-center">Down Time</div>
                                                <div class="col-sm-8 form-control-plaintext">
                                                    <span id="esd2" name="esdin"></span>
                                                        <input type="hidden" id='esd3' name="esd3" required>
                                                    </div>
                                                    <div class="col-sm-3 form-control-label d-flex align-items-center">Estimated Delivery</div>
                                                    <div class="col-sm-8 form-control-plaintext">
                                                        <span id="sdt2" name="sdtin"></span>
                                                        <input type="hidden" id='sdt3' name="sdt3" required>
                                                    </div>
                                                    <div class="col-sm-3 form-control-label d-flex align-items-center">Asset</div>
                                                    <div class="col-sm-8 form-control-plaintext">
                                                        <span id="selass"></span>
                                                        <input type="hidden" id='selas' name="selas" required>
                                                    </div>
                                                    <div class="col-sm-3 form-control-label d-flex align-items-center">Sub-Asset</div>
                                                    <div class="col-sm-8 form-control-plaintext">
                                                        <span id="zone2"></span>
                                                        <input type="hidden" id='zonee' name="zonee" required>
                                                    </div>
                                                    <div class="col-sm-3 form-control-label d-flex align-items-center">Cleaning Type</div>
                                                    <div class="col-sm-8 form-control-plaintext">
                                                        <label><span id="rct2" ></span>%</label>
                                                        <input type="hidden" id='rct3' name="rct3" required>
                                                    </div>
                                                    <div class="col-sm-3 form-control-label d-flex align-items-center">Requested Cleaning Tasks</div>
                                                    <div class="col-sm-8 form-control-plaintext">
                                                        <span id="ot2"></span>
                                                        <input type="hidden" id='ot3' name="ot3" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="card-header collapsed d-flex align-items-center" data-toggle="collapse" href="#IconRightCollapseTwo">
                                                <div class="card-title w-100">2. Operation Informations</div>
                                            </a>
                                            <div id="IconRightCollapseTwo" class="card-body collapse" data-parent="#accordion-icon-right">
                                                <div class="form-group row mb-5">
                                                    <div class="col-sm-3 form-control-label d-flex align-items-center">Section</div>
                                                    <div class="col-sm-8 form-control-plaintext">
                                                        <span id="sect2"></span>
                                                        <input type="hidden" id='sect3' name="sect3" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group ">
                                            <input type="hidden" name="hidden_table" id="hidden_table"/>
                                            <div style="clear:both"></div>
                                            <br />
                                            <div style="position:relative; display:none;" id="tableing" class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">Asset</th>
                                                            <th style="text-align: center;">Sub - Asset</th>
                                                            <th style="text-align: center;">Tools Requirments</th>
                                                            <th style="text-align: center;">Materials Requirments</th>
                                                            <th style="text-align: center;">Chemicals Requirments</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="stsdb" style="vertical-align: top; text-align: top;">
                                                    </tbody>
                                                </table>
                                            </div>
                                            <input type="hidden" name="hidden_table2" id="hidden_table2"/>
                                            <div style="clear:both"></div>
                                            <br>
                                            <div style="position:relative; display:none;" id="tableing2" class="table-responsive"><table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Asset</th>
                                                        <th style="text-align: center;">Sub - Asset</th>
                                                        <th style="text-align: center;">Tools Requirments</th>
                                                        <th style="text-align: center;">Materials Requirments</th>
                                                        <th style="text-align: center;">Chemicals requirments</th>
                                                    </tr>
                                                </thead>
                                                <tbody  id="rtgdb"  style="vertical-align: top; text-align: top;">
                                                </tbody>
                                            </table>
                                        </div>
                                        <input type="hidden" name="hidden_table3" id="hidden_table3"/>
                                        <div style="clear:both"></div>
                                        <br>
                                        <div style="position:relative; display:none;" id="tableing3" class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Asset</th>
                                                        <th style="text-align: center;">Sub - Asset</th>
                                                        <th style="text-align: center;">Tools Requirments</th>
                                                        <th style="text-align: center;">Materials Requirments</th>
                                                        <th style="text-align: center;">Chemicals requirments</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="bcdb">
                                                </tbody>
                                            </table>
                                        </div>
                                        <input type="hidden" name="hidden_table4" id="hidden_table4"/>
                                        <div style="clear:both"></div>
                                        <br>
                                        <div style="position:relative; display:none;" id="tableing4" class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Asset</th>
                                                        <th style="text-align: center;">Sub - Asset</th>
                                                        <th style="text-align: center;">Tools Requirments</th>
                                                        <th style="text-align: center;">Materials Requirments</th>
                                                        <th style="text-align: center;">Chemicals requirments</th>
                                                    </tr>
                                                </thead>
                                                <tbody  id="yarddb">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <?php
if(isset($_POST['wof'])){

    include('../../test/controls/addwof.php');

}
?>
                               
                            
                    




                                    </section>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- vertical wizard -->
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2019 Admin Pro by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="../assets/plugins/moment/moment.js"></script>
    <script src="../assets/plugins/wizard/jquery.steps.min.js"></script>
    <script src="../assets/plugins/wizard/jquery.validate.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/plugins/wizard/steps.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
<?php
}
//if($_SESSION['uat']=='user'){
//    session_destroy();

// echo "<meta http-equiv='refresh' content='0;login.php'>";
//}
else {
    header("location:login.php?msg=3");
}

?>