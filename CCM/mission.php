<?php
session_start();
if(isset($_SESSION['userid'])){
$gwidcab = $_SESSION['userid'];
if(isset($_GET['id'])){
$cabinid=$_GET['id'];
require('controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM work_order WHERE wrko_operator='$gwidcab' AND wrko_part='$cabinid'");
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
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kulim+Park|Lato|Open+Sans&display=swap" rel="stylesheet"> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"></script>
<style type="text/css">
	* {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

html {
  font-size: 16px;
}

body {
   font-family: "Kulim Park", sans-serif;
  background-color: #f5f6f7;
  color: #4a5568;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 1rem 2rem;
}

a {
  color: #4a5568;
}

.text-muted {
  color: #8fa3bc;
}

.t1 {
  font-size: 1.5rem;
}

.t22 {
  font-size: 2.5rem;
}
.t2 {
  font-size: 1.25rem;
}

.t3 {
  font-size: 1rem;
}

.t4 {
  font-size: 0.85rem;
}

.t5 {
  font-size: 0.5rem;
}

.w-100 {
  width: 100%;
}

.container {
  height: 100%;
  width: 100%;
}

nav {
  display: flex;

  justify-content: space-between;
}

button, .btn, .toggle-group label {
  color: inherit;
  position: relative;
  background: inherit;
  outline: none;
  border: none;
  box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #DFE4EA;
  border-radius: 3px;
  cursor: pointer;
  text-transform: uppercase;
}

button:focus::after, button:active::after, .btn.active::after, .toggle-group input:checked + label::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  border-radius: 3px;
  box-shadow: 2px 2px 2px 0px #DFE4EA inset, -2px -2px 2px 0px #ffffff inset;
}

button {
  padding: 0.5rem 0.75rem;
}
button svg.feather {
  color: #8fa3bc;
  width: 1.25rem;
  height: 1.25rem;
}

.btn {
  padding: 0.5rem 0.75rem;
}
.btn.active {
  color: #4a5568;
}

main {
  padding: 1.5rem 0.25rem;
}

.toggle-group {
  display: flex;
  justify-content: space-around;
}
.toggle-group label {
  flex: 1;
  padding: 0.75rem;
  text-align: center;
  border-radius: 8px;
}
.toggle-group label:first-of-type {
  margin-right: 1rem;
}
.toggle-group input {
  display: none;
}
.toggle-group input:checked + label::after {
  border-radius: 8px;
}

.chart {

  position: relative;
  border-radius: 50%;
  margin: 2rem;
  box-shadow: -4px -2px 4px 0px #ffffff, 4px 2px 6px 0px #DFE4EA;
  /* inner shadow */
}
.chart::after {
  content: "";
  position: absolute;
  border-radius: 50%;
  margin: 3rem;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  box-shadow: 2px 2px 2px 0px #DFE4EA inset, -2px -2px 2px 0px #ffffff inset;
}


.btn1 {
	 background: -webkit-gradient(linear, left top, left bottom, from(#1dc9b7 ), to(#11a899));
  background: linear-gradient(#1dc9b7 , #11a899);
  box-shadow: 0 2px 12px -3px #11a899; 
  position: relative;
  border-radius: 50%;
  margin: 2rem;
  color: white;
}
.btn2 {
 background: linear-gradient(rgb(253, 57, 122), rgb(235, 42, 106)); box-shadow: rgb(253, 57, 122) 0px 2px 12px -3px;
  position: relative;
  border-radius: 50%;
  margin: 2rem;
  color: white;
}
.btn1::after ,.btn2::after {
  content: "";
  position: absolute;
  border-radius: 50%;
  margin: 3rem;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;

}
.chart .chart-label,.btn1 .chart-label,.btn2 .chart-label {
  position: absolute;
  top: 0;
  bottom: 0.5rem;
  left: 0;
  right: 0;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.chart .chart-label span,.btn1 .chart-label span ,.btn2 .chart-label span  {
  display: block;
}

#btntransactions {
  padding: 0.75rem;
}

#chartfill {
  animation: chart 500ms linear forwards;
}

@keyframes chart {
  from {
    stroke-dashoffset: 245;
  }
  to {
    stroke-dashoffset: 110;
  }
}



</style>
</head>
<body>

<div class="container">
  <header>
    <nav>
      <button type="button"><i data-feather="arrow-left"></i></button>
      <!--<button type="button"><i data-feather="search"></i></button>-->
    </nav>
  </header>
  <main>
     <?php while ($showcab=$resafter->fetch_row())
    {

      if ($showcab[10]=="Pending") {
        ?>
    <h1 class="t1"><span style="text-transform: uppercase; color: #101932;"><?php echo $showcab[3]?></span> - <?php echo $showcab[1]?></h1>
    <div class="toggle-group">
      <input id="today-date" type="radio" name="date-choose">
      <label for="today-date" class="t4">Today's Tasks</label>
      <input id="yesterday-date" type="radio" name="date-choose" checked>
      <label for="yesterday-date" class="t4">My Tools</label>
    </div>
   
    <div class="btn1">
      <div class="chart-label">
        <span class="t22">START</span>

      </div>
      <svg class="progress" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
        
        <circle id="chartfill1" r="40" cx="50" cy="50" stroke-width="7" stroke-dasharray="245" stroke-dashoffset="245" fill="transparent" stroke="#" stroke-linecap="round" class="meter"></circle>
            </svg>
    </div>


    		<?php
    	}
    

    	if ($showcab[10]=="In progress") {
    		?>
    <div class="chart">
      <div class="chart-label">
        <span class="t2">45%</span>
        <span class="text-muted">In progress</span>
      </div>
      <svg class="progress" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
        <circle r="40" cx="50" cy="50" stroke-width="7" fill="transparent" stroke="#E2E8F0"></circle>
        <circle id="chartfill" r="40" cx="50" cy="50" stroke-width="7" stroke-dasharray="245" stroke-dashoffset="245" fill="transparent" stroke="#00A1db" stroke-linecap="round" class="meter"></circle>
            </svg>
    </div>
<?php }


    	if ($showcab[10]=="") {
    		?>
    <div class="btn2">
      <div class="chart-label">
        <span class="t22">STOP</span>

      </div>
      <svg class="progress" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
        
        <circle id="chartfill1" r="40" cx="50" cy="50" stroke-width="7" stroke-dasharray="245" stroke-dashoffset="245" fill="transparent" stroke="#" stroke-linecap="round" class="meter"></circle>
            </svg>
    </div>
   <?php }
   ?>
   <?php
}
   ?>
    <button id="btntransactions" class="t4 w-100">Instructions Guide</button>
  </main>
  <nav>
    <a href="#" class="btn text-muted"><img width="33" src="img/tools.svg"/></a>
    <a href="#" class="btn text-muted"><i data-feather="credit-card"></i></a>
    <a href="#" class="btn text-muted active"><i data-feather="trending-up"></i></a>
    <a href="#" class="btn text-muted"><i data-feather="bell"></i></a>
  </nav>
  <div id = "movable" trigger = "0"></div>
</div>




<script type="text/javascript">
	(function() {
  feather.replace()  
})();
</script>
</body>
</html>
<?php
}

}
}
?>