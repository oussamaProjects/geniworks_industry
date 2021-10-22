


<?php 

if(isset($_GET['id'])){
$cabinid=$_GET['id'];
require('controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name='$cabinid'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                

 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<style type="text/css">
  @import url("https://fonts.googleapis.com/css?family=Roboto:400,700,900");
* {
  box-sizing: border-box;
}
*::before, *::after {
  box-sizing: border-box;
}

body {
  background-image: #f0f0f0;
  background-size: cover;
  background-repeat: no-repeat;
}

img {
  height: auto;
  width: 100%;
}

.ticket {
  background: #ffffff;
  border-radius: 4px;
  color: #0b1521;
  font-family: "Roboto", sans-serif;
  font-size: 14px;
  font-weight: normal;
  line-height: 20px;
  padding: 30px;
  margin: 80px auto;
  max-width: 50%;
}
.ticket-header {
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: justify;
          justify-content: space-between;
  margin: 20px 0 50px 0;
  position: relative;
}
.ticket-header > svg.separator {
  -webkit-animation: flight 2s infinite;
          animation: flight 2s infinite;
  display: block;
  color: #d3e6f4;
  height: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 30px;
}
.ticket-departure {
  text-align: left;
}
.ticket-destination {
  text-align: right;
}
.ticket .city-abbr {
  color: #3b8acf;
  font-size: 45px;
  font-weight: 900;
  letter-spacing: -2px;
  line-height: 50px;
  margin: 0;
  text-transform: uppercase;
}
.ticket .city-name {
  color: #aaaaac;
  font-size: 16px;
  text-transform: uppercase;
}
.ticket .item:not(:last-child) {
  margin-bottom: 20px;
}
.ticket .name {
  color: #aaaaac;
  font-size: 12px;
  font-weight: normal;
  line-height: 20px;
  margin: 0;
  text-transform: uppercase;
}
.ticket .value {
  color: #000000;
  font-size: 16px;
  line-height: 20px;
}

.row {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
}
.row-vertical {
  display: -webkit-box;
  display: flex;
  height: 100%;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: justify;
          justify-content: space-between;
}
.row-vertical > .col {
  -webkit-box-flex: 0;
          flex: 0;
}
.row > .col {
  -webkit-box-flex: 1;
          flex: 1;
}
.row > .col.half {
  flex-basis: 50%;
}

</style>
</head>
<body>

<div class="ticket">
  
  <div class="ticket-body">

       <?php while ($showcab=$resafter->fetch_row()) {?>
    <div class="row">
     <div class="ticket-header">
    <div class="ticket-departure">
      <h1 class="city-abbr"><?php echo $showcab[1]?></h1><span class="city-name"><?php echo $showcab[2]?></span>
    </div>
    
    
  </div>
    </div>
    <div class="row">
      <div class="col half">
        <div class="row-vertical">
          <div class="col">
            <div class="item">

              <h2 class="name">Status</h2><span class="value" style="#"> <b style="color: #1dc9b7;"><?php echo $showcab[3]?></b></span>
            </div>
          </div>
          <div class="col">
            <div class="item">
              <h2 class="name">Team </h2><span class="value"><?php echo $showcab[5]?></span>
            </div>
          </div>
          <div class="col">
            <div class="item">
              <h2 class="name">Owner Worker </h2><span class="value"><?php echo $showcab[6]?> (To define)</span>
            </div>
          </div>
          <div class="col">
            <div class="item">
              <h2 class="name">Last Operation</h2><span class="value">3:45am, Dec 15</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col half">
        <?php if($showcab[3]=="Disinfected"){?>

          <img class="ticket-qrcode" src="img/Cabin-01-Disinfected.png" alt="QR Code"/>
        <?php
      }?>
      <?php if($showcab[3]=="not disinfected"){?>

          <img class="ticket-qrcode" src="img/Cabin-01-not-disinfected.png" alt="QR Code"/>
        <?php
      }?>
      <?php if($showcab[3]=="in process"){?>

          <img class="ticket-qrcode" src="img/Cabin-01-in-process.png" alt="QR Code"/>
        <?php
      }?>
    </div>
    </div>
  <?php } ?>
  </div>
</div>
</body>
</html>
<?php
}}
?>