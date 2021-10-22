<?php 

session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu']) && ($_SESSION['uat']=='admin'))
{
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>


<div id="g"></div>
  
<div class="logo">
  
  <div class="card left">
    <div class="flipper">
      <div class="f c1">
        <i class="far fa-plus-square"></i>
      </div>
      <div class="b contentbox" id="">
        <div class="padded">
          <center><h2>Create New Wof.</h2></center>
          <a href="wof.php" class="">GO</a>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="flipper">
      <div class="f c2">
        <center>
        <img src="assets/img/logo-geniworks.png" alt="">
        </center>
      </div>
      <div class="b contentbox " id="">
        <div class="padded">
          <a href="?decx">LOG OUT</a>
        </div>
      </div>
    </div>
  </div>
  <div class="card left">
    <div class="flipper">
      <div class="f c3">
        <i class="fas fa-chart-pie"></i>
      </div>
      <div class="b contentbox instructions">
        <div class="padded">
          <center><h2>Reports</h2>
          <p>Wofs Requests deliverability and Cloture.</p>
        </center>
        <a href="reports.php">GO</a>

        </div>
      </div>
    </div>
  </div>
<div class="card">
    <div class="flipper">
      <div class="f c4">
        <i class="fas fa-sliders-h"></i>
      </div>
      <div class="b contentbox levels">
        <a href="javascript:;" data-level="8" class="play">Assets</a>
        <a href="javascript:;" data-level="18" class="play">Equipments</a>
        <a href="javascript:;" data-level="32" class="play">Advanced</a>
      </div>
    </div>
  </div>


</div>
<style>
  body, html{margin:0;font:normal 0/0 Arial, Helvetica, sans-serif;background:#333;overflow:hidden;color:#fff;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
body, html, .flipper, .f, .b, #g {width:100%;height:100%;}

/* font-face */
@font-face{font-family: "GeneralFoundicons";font-weight:normal;font-style:normal;
  src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/60583/general_foundicons.eot");
  src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/60583/general_foundicons.eot?#iefix") format("embedded-opentype"),
       url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/60583/general_foundicons.woff") format("woff"),
       url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/60583/general_foundicons.ttf") format("truetype"),
       url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/60583/general_foundicons.svg#GeneralFoundicons") format("svg");
}
a{text-decoration:none;color:#fff;display:block;font:bold 18px/75px 'Open Sans';text-transform:uppercase;text-align:center;padding:0;margin:0 1px;}
a:hover{color:#fff;background:rgba(255, 255, 255, .1)}

/* FRONT SCREEN */
.logo{width:450px;height:450px;position:absolute;top:50%;left:50%;margin:-225px 0 0 -225px}
.logo .card{width:50%;height:50%;cursor:default;position:relative}
.logo .card.left.active{z-index:2}
.logo .card.left.active + .card{opacity:0}
.logo .card.left.active .b{margin-left:-100%}
.logo .f{font:normal 130px/225px 'Open Sans';text-align:center;text-transform:uppercase;}
.logo .c2{transform:scale(-1, 1);-webkit-transform:scale(-1, 1);-moz-transform:scale(-1, 1);-ms-transform:scale(-1, 1)}

.logo .contentbox{width:200%;font:normal 12px/16px 'Open Sans';text-align:left}
.logo .contentbox.levels{width:100%}
.logo .contentbox .padded{padding:0 15px;}
.logo .contentbox h2{font-size:24px;padding:0;margin:28px 0;text-transform:uppercase}
.logo .contentbox p{line-height:14px;margin:14px 0}

#stats h2 i{margin-right:10px;vertical-align:top;font:italic normal 9px/8px 'Open Sans';color:rgba(255,255,255, .4)}
#stats ul{width:50%;display:inline-block;margin:0;padding:0;list-style-type:none;vertical-align:top;line-height:22px}
#stats li{display:block;margin:0;padding:0;}
#stats li b{display:inline-block;font-size:12px;width:95px}
#stats a {position:absolute;bottom:0;width:100%;margin-left:-15px;}

.logo .info{font-size:11px;line-height:16px;text-align:center;color: rgba(255,255,255, .3);padding:0 25px;}

/*GAME SCREEN*/
#g{margin-top:4px}
#g .timer{width:0%;height:5px;position:absolute;top:0;background:#00A1DB;z-index:1}
@-webkit-keyframes timer {100% { width:100%; }}
@-moz-keyframes timer {100% { width:100%; }}
@-o-keyframes timer {100% { width:100%; }}
@keyframes timer {100% { width:100%; }}
.pause{position:absolute;width:100%;height:100%;left:0;top:0;z-index:100;background:rgba(51, 51, 51, 0.78)}
.pause::before{content:'PAUSED';width:100%;position:absolute;margin-top:-100px;top:50%;background:#00A1DB;color:#fff;font:bold 80px/200px 'Open Sans';
display:block;text-align:center;}
/* card styles */
#g .found{display:inline-block}
.card{display:inline-block;-webkit-perspective:1000;-moz-perspective:1000;}
.card:not(.active):hover{opacity:.8}
.card .b::before{content:attr(data-f);display:block;font:normal 100px/100px "GeneralFoundicons";
position:absolute;top:50%;margin-top:-50px;width:100%;text-align:center}

/* flip cards */
.flipper {position:relative;-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d}
.f, .b {position:absolute;top:0;left:0;box-shadow:inset 0 0 0 1px #333;-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden}
.f {background:#303156;z-index:1}
.b {background:#00A1DB;opacity:0}
.card.active .b{z-index:2;opacity:1}

/*Grouped for easy prefixing*/
.card, .flipper, .logo .b{transition:400ms;-ms-transition:400ms;-webkit-transition:400ms;-moz-transition:400ms;-o-transition:400ms}
.card.active .flipper, .b {transform:rotateY(180deg);-webkit-transform:rotateY(180deg);-moz-transform:rotateY(180deg);-ms-transform:rotateY(180deg);-o-transform:rotateY(180deg)}
.logo .f, .card .b::before, .pause::before{-webkit-text-stroke: 1px #fff} /*webkit only*/

/*Responsive Stuff*/
@media all and (max-width: 1680px) and (min-width: 640px){
  .card .b::before{font-size:90px}
  #g.medium .card .b::before{font-size:70px}
  #g.hard .card .b::before{font-size:50px}
}
@media all and (max-width: 640px) and (min-width: 470px){
  .card .b::before{font-size:90px}
  #g.medium .card .b::before{font-size:60px}
  #g.hard .card .b::before{font-size:50px}
}

@media all and (max-width: 470px) and (min-width: 0px){
  .card .b::before{font-size:60px}
  #g.medium .card .b::before{font-size:35px;-webkit-text-stroke:0;}
  #g.hard .card .b::before{font-size:32px;-webkit-text-stroke:0;}
}

@media all and (max-width: 640px) and (min-width: 0px){
  a{line-height:50px;font-size:13px}
  .logo{width:300px;height:300px;margin:-150px 0 0 -150px}
  .logo .f{font:normal 80px/150px 'Open Sans'}
  .logo .contentbox h2{font-size:16px;margin:24px 0;}
  .logo .instructions h2{display:none}
  .logo .instructions.contentbox p:nth-child(3){display:none}
  #stats li b{width:auto}
}  
  </style>
<script>
    $(function(){
  
  function set(key, value) { localStorage.setItem(key, value); }
  function get(key)        { return localStorage.getItem(key); }
  function increase(el)    { set(el, parseInt( get(el) ) + 1); }
  function decrease(el)    { set(el, parseInt( get(el) ) - 1); }

  var toTime = function(nr){
    if(nr == '-:-') return nr;
    else { var n = ' '+nr/1000+' '; return n.substr(0, n.length-1)+'s'; }
  };

  function updateStats(){
    $('#stats').html('<span><div class="padded"><h2><a href="wof.php">Go:</a> <span>'+
      '<b>'+get('flip_won')+'</b><i>Won</i>'+
      '<b>'+get('flip_lost')+'</b><i>Lost</i>'+
      '<b>'+get('flip_abandoned')+'</b><i>Abandoned</i></span></h2>'+
      '<ul><li><b>Best Casual:</b> <span>'+toTime( get('flip_casual') )+'</span></li>'+
      '<li><b>Best Medium:</b> <span>'+toTime( get('flip_medium') )+'</span></li>'+
      '<li><b>Best Hard:</b> <span>'+toTime( get('flip_hard') )+'</span></li></ul>'+
      '<ul><li><b>Total Flips:</b> <span>'+parseInt( ( parseInt(get('flip_matched')) + parseInt(get('flip_wrong')) ) * 2)+'</span></li>'+
      '<li><b>Matched Flips:</b> <span>'+get('flip_matched')+'</span></li>'+
      '<li><b>Wrong Flips:</b> <span>'+get('flip_wrong')+'</span></li></ul></div>');
  };

    //function updateStats(){
    //$('#stats').html('<span><div class="padded"><h2><a href="wof.php">Go:</a> <span>'+
    //  '<b>'+get('flip_won')+'</b><i>Won</i>'+
   //   '<b>'+get('flip_lost')+'</b><i>Lost</i>'+
   //   '<b>'+get('flip_abandoned')+'</b><i>Abandoned</i></span></h2>'+
    //  '<ul><li><b>Best Casual:</b> <span>'+toTime( get('flip_casual') )+'</span></li>'+
   //   '<li><b>Best Medium:</b> <span>'+toTime( get('flip_medium') )+'</span></li>'+
    //  '<li><b>Best Hard:</b> <span>'+toTime( get('flip_hard') )+'</span></li></ul>'+
    //  '<ul><li><b>Total Flips:</b> <span>'+parseInt( ( parseInt(get('flip_matched')) + parseInt(get('flip_wrong')) ) * 2)+'</span></li>'+
   //   '<li><b>Matched Flips:</b> <span>'+get('flip_matched')+'</span></li>'+
    //  '<li><b>Wrong Flips:</b> <span>'+get('flip_wrong')+'</span></li></ul></div>');
 // };

  function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;
    while (0 !== currentIndex) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
    return array;
  };

  function startScreen(text){
    $('#g').removeAttr('class').empty();
    $('.logo').fadeIn(250);

    $('.c1').text(text.substring(0, 1));
    $('.c2').text(text.substring(1, 2));
    $('.c3').text(text.substring(2, 3));
    $('.c4').text(text.substring(3, 4));

    // If won game
    if(text == 'nice'){
      increase('flip_won');
      decrease('flip_abandoned');
    }

    // If lost game
    else if(text == 'fail'){
      increase('flip_lost');
      decrease('flip_abandoned');
    }

    // Update stats
    updateStats();
  };

  /* LOAD GAME ACTIONS */

  // Init localStorage
  if( !get('flip_won') && !get('flip_lost') && !get('flip_abandoned') ){
    //Overall Game stats
    set('flip_won', 0);
    set('flip_lost', 0);
    set('flip_abandoned', 0);
    //Best times
    set('flip_casual', '-:-');
    set('flip_medium', '-:-');
    set('flip_hard', '-:-');
    //Cards stats
    set('flip_matched', 0);
    set('flip_wrong', 0);
  }

  // Fill stats
  if( get('flip_won') > 0 || get('flip_lost') > 0 || get('flip_abandoned') > 0) {updateStats();}

  // Toggle start screen cards
  $('.logo .card:not(".twist")').on('click', function(e){
    $(this).toggleClass('active').siblings().not('.twist').removeClass('active');
    if( $(e.target).is('.playnow') ) { $('.logo .card').last().addClass('active'); }
  });
  
});
  </script>
</body>
</html>
<?php
if(isset($_GET['decx'])){
session_destroy();

 echo "<meta http-equiv='refresh' content='0;login.php'>";
}
?>
<?php
}
else {
    header("location:login.php?msg=3");
}

?>