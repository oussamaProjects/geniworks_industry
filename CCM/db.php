<?php
session_start();
if(isset($_SESSION['userid'])){
$gwidcab = $_SESSION['userid'];
$userid=$_SESSION['userid'];
require('controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM work_order WHERE wrko_operator='$gwidcab'");
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

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

  <style type="text/css">
body {
 font-family: "Montserrat", sans-serif;
  background-color: #f5f6f7;
  color: #4a5568;
  display: flex;
  justify-content: center;
  align-items: center;

  -webkit-font-smoothing: antialiased;
  font-family: "Montserrat", sans-serif;
  text-rendering: optimizeLegibility;

}

.mock-up-link {
  display: none;
}
@media (min-width: 768px) {
  .mock-up-link {
    display: block;
  }
}


@media (min-width: 415px) {
  .main-container-wrapper {
    -moz-box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
    -webkit-box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
    box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
    margin: 24px auto;
  }
}

header {
  background-color: #fff;
  display: flex;
  height: 58px;
  justify-content: space-between;
  overflow: hidden;
  position: relative;
}

.header__btn {
  background-color: #1dc9b7;
  border: 2px solid #fff;
  border-radius: 50%;
  -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  height: 80px;
  padding-top: 18px;
  position: absolute;
  top: -25px;
  width: 80px;
}
.header__btn:hover, .header__btn:focus {
  background: #67cebb;
  transition: all 0.3s ease-in;
  outline: none;
}
.header__btn .icon {
  display: inline-block;
}
.header__btn--left {
  left: -25px;
  padding-left: 38px;
  text-align: left;
}
.header__btn--right {
  padding-right: 32px;
  right: -25px;
  text-align: right;
}

.calendar-container {
  background-color: #fff;
  padding: 16px;
  margin-bottom: 24px;
}
.calendar-container__header {
  display: flex;
  justify-content: space-between;
}
.calendar-container__btn {
  background: transparent;
  border: 0;
  cursor: pointer;
  font-size: 16px;
  outline: none;
  color: #E9E8E8;
}
.calendar-container__btn:hover, .calendar-container__btn:focus {
  color: #9FAAB7;
  transition: all 0.3s ease-in;
}
.calendar-container__title {
  color: #222741;
  font-size: 20px;
  font-weight: 700;
}

.calendar-table {
  margin-top: 12px;
  width: 100%;
}
.calendar-table__item {
  border: 2px solid transparent;
  border-radius: 50%;
  color: #424588;
  font-size: 12px;
  font-weight: 700;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
.calendar-table__item:hover {
  background: #f8fafa;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  transition: 0.2s all ease-in;
}
.calendar-table__row {
  display: flex;
  justify-content: center;
}
.calendar-table__header {
  border-bottom: 2px solid #F2F6F8;
  margin-bottom: 4px;
}
.calendar-table__header .calendar-table__col {
  display: inline-block;
  color: #99A4AE;
  font-size: 12px;
  font-weight: 700;
  padding: 12px 3px;
  text-align: center;
  text-transform: uppercase;
  width: 40px;
  height: 38px;
}
@media (min-width: 360px) {
  .calendar-table__header .calendar-table__col {
    width: 46px;
  }
}
@media (min-width: 410px) {
  .calendar-table__header .calendar-table__col {
    width: 54px;
  }
}
.calendar-table__body .calendar-table__col {
  width: 40px;
  height: 42px;
  padding-bottom: 2px;
}
@media (min-width: 360px) {
  .calendar-table__body .calendar-table__col {
    width: 46px;
    height: 48px;
  }
}
@media (min-width: 410px) {
  .calendar-table__body .calendar-table__col {
    width: 54px;
    height: 56px;
  }
}
.calendar-table__today .calendar-table__item {
  border-color: #FEFEFE;
  background-color: #F2F6F8;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.calendar-table__event .calendar-table__item {
  background-color: #66DCEC;
  border-color: #FEFEFE;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  color: #fff;
}
.calendar-table__event--long {
  overflow-x: hidden;
}
.calendar-table__event--long .calendar-table__item {
  border-radius: 0;
  border-width: 2px 0;
}
.calendar-table__event--start .calendar-table__item {
  border-left: 2px solid #fff;
  border-radius: 50% 0 0 50%;
}
.calendar-table__event--start.calendar-table__col:last-child .calendar-table__item {
  border-width: 2px;
}
.calendar-table__event--end .calendar-table__item {
  border-right: 2px solid #fff;
  border-radius: 0 50% 50% 0;
}
.calendar-table__event--end.calendar-table__col:first-child .calendar-table__item {
  border-width: 2px;
}
.calendar-table__inactive .calendar-table__item {
  color: #DCDCE3;
  cursor: default;
}
.calendar-table__inactive .calendar-table__item:hover {
  background: transparent;
  box-shadow: none;
}
.calendar-table__inactive.calendar-table__event .calendar-table__item {
  color: #fff;
  opacity: 0.25;
}
.calendar-table__inactive.calendar-table__event .calendar-table__item:hover {
  background: #66DCEC;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}

.events-container {
  padding: 0 15px;
}

.events__title {
  color: #BEC1CA;
  display: inline-block;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 16px;
}
.events__tag-pur {
  background: #1dc9b7;
  border: 2px solid #FEFEFE;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  border-radius: 20px;
  color: #fff;
  font-size: 10px;
  font-weight: 600;
  width: 90px;
  margin-left: 16px;
  padding: 5px 2px;
  text-align: center;
}
.events__tag-start {
  background: #00A1db;
  border: 2px solid #FEFEFE;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  border-radius: 20px;
  color: #fff;
  font-size: 10px;
  font-weight: 600;
  width: 90px;
  margin-left: 16px;
  padding: 5px 2px;
  text-align: center;
}
.events__tag-arch {
  background: #fff;
  border: 2px solid #FEFEFE;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  border-radius: 20px;
  color: #4a5568;
  font-size: 10px;
  font-weight: 600;
  width: 90px;
  margin-left: 16px;
  padding: 5px 2px;
  text-align: center;
}
.events__tag--highlighted {
  background: #FDCA40;
}
.events__item-done{
  background: #fff;
  border-left: 8px solid #1dc9b7;
  border-radius: 2px;
  -moz-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  padding: 15px 16px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 16px;
}
.events__item-progress{
  background: #fff;
  border-left: 8px solid #00A1db;
  border-radius: 2px;
  -moz-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  padding: 15px 16px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 16px;
}

.events__item-pending{
  background: #fff;
  border-left: 8px solid #ffb822;
  border-radius: 2px;
  -moz-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  padding: 15px 16px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 16px;
}

.events__item--left {
  width: calc(100% - 76px);
}
.events__name {
  font-size: 12px;
  font-weight: 700;
  color: #4a5568;
  display: block;
  margin-bottom: 6px;
}
.events__date {
  font-size: 12px;
  color: #9FAAB7;
  display: inline-block;
}


button, .btns, .toggle-group label {
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

button:focus::after, button:active::after, .btns.active::after, .toggle-group input:checked + label::after {
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

.btns {
  padding: 0.5rem 0.75rem;
}
.btns.active {
  color: #4a5568;
}


.timer{
  font-size: 36px;
  color: white; bottom: 0px;position: relative;margin-left:3px;align-content: center; top: 25%; font-weight: 600;

}
hr{
  width: 10%;
  margin: 20px auto
}

i{
  position: relative;
  z-index: 3
}
.icon-bar{
  position: relative; 
  cursor: pointer;
}

.container{
  width: 320px;
  height: 580px;
  margin: 0 auto;
  margin-bottom: 100px;
  position: relative;
  overflow: hidden;
  top: 50px;
}

.layer{
  position: absolute;
  height: 100%;
  width: 100%;
}

.layer-1{
  height: 100%;
  padding: 15px;

}

.layer-2{
  transition-delay: .3s;
  background: #eee;
  top: 0;
  padding: 30px;


}

.layer-2:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
/*    background-image: linear-gradient(to bottom right,#002f4b,#dc4225); */
    opacity: .6; 
  }

.layer-3{
  transition-delay: .2s;
  background: #ccc;
  top: 520px
}

.btn{
  margin: 0 auto;
  width: 100%;
  position: relative;
  bottom: 0;
  box-shadow: none !important;
/*   border: 1px solid white; */
  
}

.move-down{
  top: 580px;
}

.completed{
  bottom: 0 !important;
  opacity: 1;
  transform: scale(1);
}

.bg-content{
  margin: 30% 0;
}

.preloader-wrapper{
  position: absolute; 
  top: 30%; 
  left: 40%;
  
}

.collection{
  border: none;
  position: relative;
  height: 455px;
  overflow:;
}

.meet{
  bottom: 220px !important;
  transition-delay: .5s !important;
}
.collection-item{
 overflow: hidden;
 position: relative !important;
 top: 0;
 border: none !important;
 text-align: left;
 transition: all .2s ease-in-out !important;
}
.collection-item p{
 margin: 0;
}

.merge{
 top: -15px !important;
 position: relative;
 opacity: 0;
 
}

.show-input{
  
}

.circle{
  height: 75px; 
  width: 75px; 
  margin-bottom: 20px; 
  background: url(img/agent.png) no-repeat top center transparent; 
  background-size: 100%;
  margin: 0 auto;
}

.grow{
  transform: translateZ(0);
  height: 100px; 
  width: 100px;
  transition: all 600ms cubic-bezier(0.86, 0, 0.07, 1) !important;
/*   background-size: 190%;  */
  transition-delay: .5s !important;
}

input{
  border: none !important;
  box-shadow: none !important;
}

input[type=text]:focus{
  border: none !important;
  box-shadow: none !important;
}

.input-field{
  margin-top: 0 !important;
  padding: 0 15px;
}

#last_name{
    height: 50px !important;
    margin-bottom: 0 !important;
    font-size: 18px;
    margin-top: 3px;
}

.input-field label.active {
    color: #1E5799 !important;
    position: absolute;
    top: 1.8rem;
    left: -0.25rem;
    cursor: text;
    transition: .2s ease-out;
    padding-left: 15px;
}

.sign-in{
  padding-bottom: 0; 
  opacity: 0; 
  height: 50px;
  top: 170px;
  position: absolute;
  width: 100%;
  
}

.reveal{
/*   height: 50px !important; */
  background: white !important;
  top: 200px !important;
  opacity: 1;
  transition-delay: .5s !important;
  z-index:3;
}

.delay-one{
  transition-delay: .4s !important;
}

.delay-two{
  transition-delay: .3s !important;
}

.delay-three{
  transition-delay: .2s !important;
}

.delay-four{
  transition-delay: .1s !important;
}

.opacity-0{
  opacity: 0;
  transform-origin: 50% 0; 
  transform: scaleX(0);
}

.profile-content{
  margin-top: 50px;
}

.peek .collection-item:hover{
 transform: scale(1.1);
/*  background: rgba(255,255,255, 0.1) !important; */
}
    

#container {
  position: relative;
  display: -webkit-box;
  display: flex;

  height: 100%;
  width: 100%;
  -webkit-box-pack: center;
          justify-content: center;
  flex-wrap: wrap;
}
#container .mockup {
  position: relative;

  margin: auto;
  width: 100%;
  min-height: 650px;
  height: 100%;

  overflow-x: hidden;
  box-shadow: 0px 35px 35px -35px rgba(0, 0, 0, 0.15);
}
#container .mockup .bubble-menu {
  position: absolute;
  width: 43px;
  height: 43px;
  background: -webkit-gradient(linear, left top, left bottom, from(#ff66cc), to(#ff6666));
  background: linear-gradient(#ff66cc, #ff6666);
  z-index: 500;
  border-radius: 50%;
  bottom: 20px;
  right: 20px;
  box-shadow: 0px 7px 15px 1px rgba(0, 0, 0, 0.19);
  text-align: center;
  cursor: pointer;
}
#container .mockup .bubble-menu:hover {
  -webkit-filter: brightness(85%);
          filter: brightness(85%);
}
#container .mockup .bubble-menu .material-icons {
  color: white;
  line-height: 43px;
  font-size: 17px;
}
#container .mockup .top {
  position: relative;
  height: 75px;
  width: 100%;
  z-index: 50;
  -webkit-transition: height 0.3s;
  transition: height 0.3s;
  box-shadow: 0px 15px 35px -15px rgba(16, 25, 50, 0.6);
  background: -webkit-gradient(linear, left top, right bottom, from(#101932), to(#00A1db));
  background: linear-gradient(to bottom right, #101932, #00A1db);
  will-change: height;

  overflow: hidden;
}
#container .mockup .top .status {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 20px;
  overflow: hidden;
}
#container .mockup .top .status ul {
  width: 100%;
  list-style: none;
  margin: 0;
  padding: 0;
  letter-spacing: -1em;
}
#container .mockup .top .status ul li {
  display: inline-block;
  position: relative;
  width: 50%;
  margin: 0;
  padding: 5px 10px;
  letter-spacing: normal;
  text-align: center;
  color: white;
  font-size: 9px;
}
#container .mockup .top .status ul li .alarm {
  font-size: 12px;
  padding-left: 4px;
  position: absolute;
}
#container .mockup .top .status ul li .data {
  font-size: 12px;
  position: absolute;
  left: 16px;
}
#container .mockup .top .status ul .battery {
  float: right;
  text-align: right;
}
#container .mockup .top .status ul .clock {
  text-align: left;
}
#container .mockup .top .menu {
  position: relative;
  width: 100%;
  height: 50px;
  display: inline-block;
}
#container .mockup .top .menu .selection {
  display: -webkit-box;
  display: flex;
  width: 40%;
  height: 100%;
  position: absolute;
  right: 0;
}
#container .mockup .top .menu .selection .liselect {
  width: 33px;
  height: 3px;
  background: white;
  position: absolute;
  bottom: -1px;
}
#container .mockup .top .menu .selection ul {
  list-style: none;
  margin: 0;
  padding-left: 20px;
}
#container .mockup .top .menu .selection ul li {
  display: inline-block;
  padding: 0px 10px;
  margin: 0px 0px;
  color: rgba(255, 255, 255, 0.8);
  cursor: pointer;
}
#container .mockup .top .menu .selection ul li .material-icons {
  line-height: 48px;
  font-size: 20px;
}
#container .mockup .top .menu .selection ul li:hover {
  background: rgba(255, 255, 255, 0.08);
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
#container .mockup .top .menu .sotto-menu {
  display: -webkit-box;
  display: flex;
  position: absolute;
  width: 60%;
  height: 100%;
}
#container .mockup .top .menu .sotto-menu .burger {
  width: 50px;
  height: 50px;
  text-align: center;
  cursor: pointer;
  border-radius: 50%;
}
#container .mockup .top .menu .sotto-menu .burger:hover {
  background: rgba(255, 255, 255, 0.05);
  -webkit-transition: background 0.4s;
  transition: background 0.4s;
}
#container .mockup .top .menu .sotto-menu .burger .material-icons {
  line-height: 50px;
  color: white;
}
#container .mockup .top .menu .sotto-menu .today-label::after {
  content: "Today's Plan";
  display: block;
  font-size: 15px;
  padding: 1px 0px;
  color: white;
  width: 100%;
  
}
#container .mockup .top .calendar {
  width: 100%;
  height: 100%;
  display: block;
}
#container .mockup .top .calendar .day {
  width: 37%;
  height: 100%;
  display: inline-block;
  float: left;
}
#container .mockup .top .calendar .day .days-plan {
  position: relative;
  display: inline-table;
  text-align: center;
  width: 100%;
  padding-top: 10px;
}
#container .mockup .top .calendar .day .days-plan .day-plan {
  margin: 0;
  padding: 0;
  color: white;
  font-size: 11px;
}
#container .mockup .top .calendar .day .circle-cont {
  position: relative;
  margin: auto;
  width: 72px;
  height: 72px;
  margin-top: 30%;
  background: #ff66d9;
  border-radius: 50%;
  text-align: center;
  display: table;
}
#container .mockup .top .calendar .day .circle-cont .circle-date {
  color: rgba(255, 255, 255, 0.8);
  font-size: 12px;
  font-weight: 500;
  padding: 0;
  margin: 0;
  display: table-cell;
  vertical-align: middle;
}
#container .mockup .top .calendar .day .circle-cont .circle-date span {
  font-size: 32px;
  font-weight: 300;
  display: block;
  color: white;
}
#container .mockup .top .calendar .month {
  position: relative;
  display: inline-block;
  float: left;
  width: 63%;
  padding-top: 10px;
}
#container .mockup .content-cont {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 100%;
  background: #f9f9f9;
}
#container .mockup .content-cont .todays {
  position: absolute;
  width: 100%;
  height: 100%;
  padding-top: 15px;
  -webkit-transition: width 0.3s;
  transition: width 0.3s;
}
#container .mockup .content-cont .todays .plan-card {
  position: relative;
  width: 90%;
  height: 85px;
  padding: 10px 0;
  background: white;
  border-radius: 5px;
  margin: auto;
  box-shadow: 0px 6px 8px 2px rgba(0, 0, 0, 0.03);
  margin-bottom: 17px;
  overflow: hidden;
}
#container .mockup .content-cont .todays .plan-card .card-info {
  float: left;
  width: 25%;
  height: 100%;
  border-right: 2px solid rgba(0, 0, 0, 0.04);
  text-align: center;
}
#container .mockup .content-cont .todays .plan-card .card-info .date {
  padding: 4px 0;
  margin: 0;
  font-size: 14px;
  color: rgba(0, 0, 0, 0.5);
  font-weight: 600;
  color:#00A1db;
}
#container .mockup .content-cont .todays .plan-card .card-info .date span {
  display: block;
  font-size: 10px;
  padding-top: 6px;
}
#container .mockup .content-cont .todays .plan-card .card-info .urgent {
  font-size: 8px;
  color: rgba(0, 0, 0, 0.25);
  font-weight: 600;
  color: #fd397a ;
}
#container .mockup .content-cont .todays .plan-card .card-info .urgent span {
  font-size: 12px;
  color: #ff6666;
}
#container .mockup .content-cont .todays .plan-card .card-plans {
  float: left;
  width: 74%;
  height: 100%;
}
#container .mockup .content-cont .todays .plan-card .card-plans .map {
  background: url("");
  background-size: 300%;
  position: absolute;
  top: 0;
  width: 40%;
  height: 100%;
  right: 0;
}
#container .mockup .content-cont .todays .plan-card .card-plans .map .point {
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: rgba(0, 161, 219, 0.8);
  z-index: 50;
  left: 50px;
  bottom: 25px;
  box-shadow: 0 0 20px 3px rgba(0, 161, 219, 0.8);
}
#container .mockup .content-cont .todays .plan-card .card-plans .map .point:after {
  content: '';
  display: block;
  position: absolute;
  width: 35px;
  height: 35px;
  border: 1px solid rgba(0, 161, 219, 0.7);
  border-radius: 50%;
  left: -13px;
  top: -13px;
}
#container .mockup .content-cont .todays .plan-card .card-plans .map:after {
  content: '';
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  background: radial-gradient(rgba(0, 0, 0, 0), rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.9), white 89%);
}
#container .mockup .content-cont .todays .plan-card .card-plans .todo {
  margin: 0;
  padding: 4px 10px;
  font-size: 10px;
  font-weight: 600;
  color: rgba(0, 0, 0, 0.4);
  line-height: 13px;
}
#container .mockup .content-cont .todays .plan-card .card-plans .todo .title {
  font-size: 14px;
  display: block;
  color: rgba(0, 0, 0, 0.6);
}
#container .mockup .content-cont .todays .upcoming {
  position: relative;
  width: 90%;
  height: auto;
  background: white;
  border-radius: 5px;
  margin: auto;
  box-shadow: 0px 6px 10px 2px rgba(0, 0, 0, 0.03);
}
#container .mockup .content-cont .todays .upcoming .up-title {
  padding: 10px 15px;
  margin: 0;
  font-size: 14px;
  color: rgba(0, 0, 0, 0.5);
  font-weight: 600;
}
#container .mockup .content-cont .todays .upcoming .up-plan {
  list-style: none;
  margin: 0;
  padding: 5px 15px;
}
#container .mockup .content-cont .todays .upcoming .up-plan li {
  position: relative;
  font-size: 1.25rem;
  padding: 8px 0px;
}
#container .mockup .content-cont .todays .upcoming .up-plan li .roundhead {
  width: 20px;
  height: 20px;
  float: left;
  border-radius: 50%;
  margin-right: 10px;
  z-index: 100;
  text-align: center;
}
#container .mockup .content-cont .todays .upcoming .up-plan li .roundhead i {
  line-height: 25px;
  color: white;
   font-size: 1.25rem;
}
#container .mockup .content-cont .todays .upcoming .up-plan li:nth-child(1) {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
#container .mockup .content-cont .todays .upcoming .up-plan li:nth-child(1) .roundhead {
  background: -webkit-gradient(linear, left top, left bottom, from(#ffb822), to(#ff9900));
  background: linear-gradient(#ff9900, #ff9900);
  box-shadow: 0 2px 12px -3px #ff5050;
}
#container .mockup .content-cont .todays .upcoming .up-plan li:nth-child(2) {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
#container .mockup .content-cont .todays .upcoming .up-plan li:nth-child(2) .roundhead {
   background: -webkit-gradient(linear, left top, left bottom, from(#ffb822), to(#ff9900));
  background: linear-gradient(#ff9900, #ff9900);
  box-shadow: 0 2px 12px -3px #ff5050;
}
#container .mockup .content-cont .todays .upcoming .up-plan li:nth-child(3) .roundhead {
  background: -webkit-gradient(linear, left top, left bottom, from(#ffb822), to(#ff9900));
  background: linear-gradient(#ff9900, #ff9900);
  box-shadow: 0 2px 12px -3px #ff5050;
}
#container .mockup .content-cont .todays .upcoming .up-plan li:nth-child(4) .roundhead {
  background: -webkit-gradient(linear, left top, left bottom, from(#ffb822), to(#ff9900));
  background: linear-gradient(#ff9900, #ff9900);
  box-shadow: 0 2px 12px -3px #ff5050;
}
#container .mockup .content-cont .todays .upcoming .up-plan li:nth-child(5) .roundhead {
  background: -webkit-gradient(linear, left top, left bottom, from(#ffb822), to(#ff9900));
  background: linear-gradient(#ff9900, #ff9900);
  box-shadow: 0 2px 12px -3px #ff5050;
}

#container .mockup .content-cont .todays .upcoming .up-plan li:nth-child(6) .roundhead {
  background: -webkit-gradient(linear, left top, left bottom, from(#ffb822), to(#ff9900));
  background: linear-gradient(#ff9900, #ff9900);
  box-shadow: 0 2px 12px -3px #ff5050;
}

#container .mockup .content-cont .todays .upcoming .up-plan li:nth-child(7) .roundhead {
  background: -webkit-gradient(linear, left top, left bottom, from(#ffb822), to(#ff9900));
  background: linear-gradient(#ff9900, #ff9900);
  box-shadow: 0 2px 12px -3px #ff5050;
}
#container .mockup .content-cont .todays .upcoming .up-plan li .secondo {
  display: block;
  font-size: 10px;
  font-weight: 600;
  color: rgba(0, 0, 0, 0.2);
}
#container .mockup .content-cont .todays .upcoming .up-plan li .up-date {
  position: absolute;
  right: 0;
  top: 0;
  padding: 7px 0;
  margin: 0;
  font-size: 10px;
  font-weight: 600;
  color: rgba(0, 0, 0, 0.6);
  text-align: center;
}
#container .mockup .content-cont .todays .upcoming .up-plan li .up-date .up-priority {
  display: block;
  font-weight: 300;
  font-size: 8px;
  color: rgba(0, 0, 0, 0.3);
}
#container .mockup .content-cont .social {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  margin-left: 100%;
  background: #f9f9f9;
}
#container .mockup .content-cont .social .social-card {
  position: relative;
  width: 90%;
  height: 45px;
  padding: 10px 0;
  background: white;
  border-radius: 5px;
  margin: auto;
  box-shadow: 0px 6px 8px 2px rgba(0, 0, 0, 0.03);
  margin-bottom: 15px;
  overflow: hidden;
}
#container .mockup .content-cont .social .social-card .material-icons {
  position: absolute;
  padding: 5px;
  top: 0;
  right: 0;
  color: rgba(0, 0, 0, 0.3);
  font-size: 15px;
  cursor: pointer;
}
#container .mockup .content-cont .social .social-card .profimg {
  position: relative;
  width: 25%;
  height: 100%;
  float: left;
}
#container .mockup .content-cont .social .social-card .profimg img {
  position: absolute;
  width: 40px;
  border-radius: 50%;
  margin: auto;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  -webkit-filter: grayscale(30%) hue-rotate(10deg) brightness(115%) contrast(60%);
  filter: grayscale(30%) hue-rotate(20deg) brightness(115%) contrast(60%);
}
#container .mockup .content-cont .social .social-card .social-cont {
  position: relative;
  width: 60%;
  height: 100%;
  float: left;
}
#container .mockup .content-cont .social .social-card .social-cont p {
  font-size: 9px;
  color: rgba(0, 0, 0, 0.6);
  margin: 0;
  padding: 4px 0px;
}
#container .mockup .content-cont .social .social-card .social-cont p .social-title {
  font-size: 10px;
  color: rgba(0, 0, 0, 0.5);
  font-weight: 600;
  display: block;
}
#container .mockup .content-cont .social .bottommenu {
  width: 100%;
  height: 50px;
  background: white;
  box-shadow: 0px -3px 7px rgba(0, 0, 0, 0.06);
  position: absolute;
  bottom: -10px;
}
#container .mockup .content-cont .social .bottommenu ul {
  list-style: none;
  padding: 0;
  margin: 0;
  width: 100%;
  font-size: 0;
  height: 50px;
}
#container .mockup .content-cont .social .bottommenu ul li {
  display: inline-block;
  padding: 0;
  margin: 0;
  text-align: center;
  width: 25%;
  cursor: pointer;
}
#container .mockup .content-cont .social .bottommenu ul li:hover {
  background: rgba(0, 0, 0, 0.02);
}
#container .mockup .content-cont .social .bottommenu ul li:active {
  background: rgba(0, 0, 0, 0.1);
}
#container .mockup .content-cont .social .bottommenu ul li .material-icons {
  line-height: 50px;
  color: rgba(0, 0, 0, 0.35);
  font-size: 20px;
}

.weekdays {
  margin: 0;
  padding: 5px 0;
}

.weekdays li {
  display: inline-block;
  width: 11%;
  color: white;
  font-weight: 600;
  text-align: center;
  font-size: 10px;
}

/* Days (1-31) */
.days {
  padding: 5px 0;
  margin: 0;
}

.days li {
  color: #DDD;
  list-style-type: none;
  display: inline-block;
  width: 11%;
  text-align: center;
  margin-bottom: 2px;
  font-size: 10px;
}

/* Highlight the "current" day */
.days li .active {
  padding: 5px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.17);
  color: white !important;
}

.nav__input {
  z-index: -1000;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  pointer-events: none;
}

.rad {
  z-index: -1000;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  pointer-events: none;
}

.nav__input:checked ~ .mockup #tendina {
  height: 240px;
  -webkit-transition: height 0.3s;
  transition: height 0.3s;
}

#rad1:checked ~ .mockup .selection .liselect {
  left: 23px;
  -webkit-transition: left 0.3s;
  transition: left 0.3s;
}

#rad2:checked ~ .mockup .selection .liselect {
  left: 68px;
  -webkit-transition: left 0.3s;
  transition: left 0.3s;
}

#rad2:checked ~ .mockup .bottommenu {
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition: -webkit-transform 0.12s ease-out 0.12s;
  transition: -webkit-transform 0.12s ease-out 0.12s;
  transition: transform 0.12s ease-out 0.12s;
  transition: transform 0.12s ease-out 0.12s, -webkit-transform 0.12s ease-out 0.12s;
}

#rad1:checked ~ .mockup .bottommenu {
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-transition: -webkit-transform 0s ease-out;
  transition: -webkit-transform 0s ease-out;
  transition: transform 0s ease-out;
  transition: transform 0s ease-out, -webkit-transform 0s ease-out;
}

#rad2:checked ~ .mockup .content-cont {
  margin-left: -100%;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

#rad1:checked ~ .mockup .content-cont {
  margin-left: 0px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

#rad2:checked ~ .mockup .bubble-menu {
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-transition: -webkit-transform 0.2s ease-in;
  transition: -webkit-transform 0.2s ease-in;
  transition: transform 0.2s ease-in;
  transition: transform 0.2s ease-in, -webkit-transform 0.2s ease-in;
}

#rad1:checked ~ .mockup .bubble-menu {
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition: -webkit-transform 0.2s ease-out;
  transition: -webkit-transform 0.2s ease-out;
  transition: transform 0.2s ease-out;
  transition: transform 0.2s ease-out, -webkit-transform 0.2s ease-out;
}

#rad2:checked ~ .mockup .map .point {
  -webkit-transform: scale(0);
          transform: scale(0);
}

#rad1:checked ~ .mockup .map .point {
  -webkit-animation: bounce-in 0.4s ease-in-out 0.27s forwards;
          animation: bounce-in 0.4s ease-in-out 0.27s forwards;
}

#rad2:checked ~ .mockup #tendina .today-label::after {
  content: 'Map Mission ';
}

#rad1:checked ~ .mockup #tendina .today-label::after {
  content: 'Dashboard';
}

@-webkit-keyframes bounce-in {
  70% {
    -webkit-transform: scale(1.6);
            transform: scale(1.6);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes bounce-in {
  70% {
    -webkit-transform: scale(1.6);
            transform: scale(1.6);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}







.modal-window {
  position: fixed;
  background-color: rgba(0, 0, 0, 0.15);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  pointer-events: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.modal-window:target {
  visibility: visible;
  opacity: 1;
  pointer-events: auto;
}
.modal-window > div {
  width: 95%;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  padding: 2em;
  background: #ffffff;
}
.modal-window header {
  font-weight: bold;
}
.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}

.modal-close {
  color: #aaa;
  line-height: 50px;
  font-size: 80%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}
.modal-close:hover {
  color: black;
}





.modal-window div:not(:last-of-type) {
  margin-bottom: 15px;
}

</style>
<style type="text/css">
  .whats-included-intro h2 {
    font-size: 26px;
    margin-bottom: 20px;
    font-weight: 500;
    color: #101932;
}

.contain {

  margin:auto;
  width:100%;
  height:100%;
  min-height:650px;
  display:block;
  overflow-x: auto;
}

.hotspot-contain {
    max-width: 600px;
    margin: auto;
    width: 100%;
    height: 100%;
    min-height: 750px;
    display: block;
    float: left;
    position: relative;
    z-index: 1000px;
}

.hotspot-img{
 position:absolute;
 width:100%;
 height:100%; 
 top:0;
 left:0;
 right:0; 
 z-index:0;
}

.hotspot-img img {
  width:100%;
  height:auto;
}

.raincover {
    background: url(https://i1.adis.ws/i/mamasandpapas/included-raincover?w=200&h=200&sm=c) no-repeat;
    background-size: 150px;
    background-position: center;
    width: 120px;
    height: 120px;
    position: absolute;
    bottom: 50px;
    left: 0;
    border-radius: 140px;
    z-index: 1;
}


.hotspot {
  z-index:2;
  margin: 25px;
  width: 20px;
  position: absolute;
  transition: all 0.5s;
}

#hs1 {
    left: 38%;
    top: 22%;
}
#hs2 {
    right: 40%;
    top: 24%;
}
#hs3 {
    left: 35%;
    top: 36%;
}
#hs4 {
    right: 38%;
    top: 42%;
}
#hs5 {
    left: 38%;
    bottom: 38%;
}
#hs6 {
    left: 10%;
    bottom: 40%;
}
#hs7 {
    left: 8%;
    bottom: 12%;
}
.dot {
  width: 20px;
  height: 20px;
  margin-left: -10px;
  margin-top: -10px;
  border-radius: 50%;
  position: absolute;
  background: #00A1db;

  top: 50%;
  left: 50%;
  opacity: 0.6;
  transition: all 0.5s;
}
.pulse {
  width: 20px;
  height: 20px;
  margin-top: -10px;
  margin-left: -10px;
  position: absolute;
  top: 50%;
  left: 50%;
  background: white;
  border-radius: 50%;

  -webkit-animation: pulsate 2s ease-out;
  -webkit-animation-iteration-count: infinite; 
  /*opacity: 0.0 */
  transition: all 0.5s;
}
.hotspot > .number {
    font-weight: 400;
    text-align: center;
    font-size: 14px;
    z-index: 2;
    width: 40px;
    line-height: 40px;
    margin-top: -10px;
    margin-left: -10px;
    position: absolute;
    top: 50%;
    left: 50%;
    opacity: 0;
    transform: scale(0);
    transition: all 0.5s;

}
.hotspot.hotspot-active > .number {
    opacity: 1;
    transform: scale(1);
    transition: all 0.5s;
    color: white;
}
.hotspot.hotspot-active > .dot {
    background: #00A1db!important;
    opacity: 0.9;

    width: 40px;
    height: 40px;
    transition: all 0.5s;

}
.hotspot.hotspot-active > .pulse {
    width: 40px;
    height: 40px;
    transition: all 0.5s;
    background: #00A1db;

}
@-webkit-keyframes pulsate {
    0% {-webkit-transform: scale(1.0, 1.0); opacity: 0.9;}
/*     50% {opacity: 0.85;} */
    100% {-webkit-transform: scale(2.5, 2.5); opacity: 0.0;}
}

.included-list{
  width: 40%;
  float: right;
}

.whats-included-intro {
    margin-top: 2%;
}

.included-contain {    
    overflow: hidden;
    height: 60px;
    transition: all 0.5s;
}

.included-contain.opened {    
    height: 100px;
    transition: all 0.5s;
}

.included-contain p{    
    opacity:0;
    transition: all 0.5s;
}

.included-contain.opened p {
    opacity: 1;
    transition: all 0.8s;
}

.included-contain .included-body {
    padding: 0 20px 0 50px;
    height: auto;
}

.included-contain.opened .included-head{
    color: #323232!important;
    transition: color 0.5s;
}


.included-contain .included-head {
    padding: 30px 20px 5px 0px;
    font-size: 16px;
    font-weight: 500;
    color: #b7b7b7;
}

.included-contain .number {
    padding: 6px 12px 6px 12px;
    letter-spacing: -1px;
    border: 1px solid #f3f3f3;
    background-color: #fff;
    border-radius: 50%;
    text-align: center;
    margin-right: 10px;
}

.included-contain.opened .number {

    background-color: #00A1db;
    color: #fff;
    transition: border 0.5s, background 0.5s;
}

.included-nav p {
    margin: 0;
}

.mobile {
    display: none;
}

@media (max-width:940px) {
    .mobile {display: block;}
    .no-mobile {display:none!important;}
.included-list {
    width: 50%;
    float: left;
    padding: 35px;
}  
.whats-included-intro {
    margin: 30px auto 0;
    width: 96%;
}
 .hotspot-contain {
    max-width: 600px;
    margin: auto;
    width: 50%;
    height: 100%;
    min-height: 550px;
    display: block;
    float: left;
    position: relative;
}
.raincover {
    width: 100px;
    height: 100px;
    position: absolute;
    bottom: 20px;
    left: 30px;
}  
}

@media (max-width:830px) {
.included-contain.opened {
    height: 120px;
}

.included-list {
    width: 40%;
    padding: 15px;
}  

.hotspot-contain {
    width: 60%;
  }
}


@media (max-width:710px) {

.raincover {
    bottom: 8%;
    left: 5%;
}
  
.hotspot-img {
    top: 10px;
    z-index: 0;
}
.hotspot-contain {
    min-width: 100%;
    min-height: 70vh;
}
  
.included-contain {
    height: 0px;
}
.included-contain .included-head {
  padding: 10px 20px 5px 0px;
 }
 .included-contain.opened {
    height: 120px;
    width: 100%;
    background:#ffffff;
    border: 1px solid #e6e6e6;
    padding: 20px 10px;
} 
  
.included-list {
    width: 100%;
    padding: 0px 10px;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%;
}  
  
}


@media (max-width:570px) {
.included-list {
    width: 100%;
  padding: 0px 5px;}
  
.raincover {
    bottom: 8%;
    left: 5%;
}
  
.hotspot-img {
    top: 10px;
    z-index: 0;
}
.hotspot-contain {
    min-height: 68vh;
}
 
.contain {
    min-height: 800px;
}
  
}

@media (max-width:570px) {
  .contain {
      min-height: 640px;
  }
  .raincover {
      width: 80px;
      height: 80px;
      bottom: 0%;
      left: 5%;
  }  
 }  

  
@media (max-width: 520px) { 

.hotspot-contain {
    min-height: 60vh;
}  
  
#hs1 {
    left: 22%;
    top: 10%;
}
#hs2 {
    right: 36%;
    top: 14%;
}
#hs3 {
    left: 60%;
    top: 28%;
}
#hs4 {
    right: 33%;
    top: 42%;
}
#hs5 {
    left: 27%;
    bottom: 33%;
}
#hs6 {
    right: 16%;
    bottom: 23%;
}
#hs7 {
    left: 8%;
    bottom: 8%;
}
  
}

@media (max-width: 370px) { 
  .contain {
      min-height: 550px;
  }  
  .included-contain.opened {
    height: 140px;
  }
}  
</style>
</head>
<body>
<div id="container">

  <input type="checkbox" class="nav__input" id="nav_input">
  <input class="rad" id="rad2" type="radio" name="rad">
  <input class="rad" id="rad1" type="radio" name="rad" checked>
  <div class="mockup">





    <div class="top" id="tendina">
      <div class="status">
        
      </div>
      <div class="menu">
        <div class="sotto-menu">
          <label class="burger" for="nav_input"><i class="material-icons">menu</i></label>
          <p class="today-label"></p>
        </div>
        <div class="selection">
          <div class="liselect"></div>
          <ul>
             <label class="label1" for="rad1"><li class="active"><i class="material-icons">date_range</i></li></label>          
             <label class="label2" for="rad2"><li><i class="material-icons">people</i></li></label>
          </ul>
        </div>
      </div>
      <div class="calendar">
        <div class="day">
          <div class="circle-cont"><p class="circle-date"></p></div>
          <div class="days-plan">
            <p class="day-plan">
<?php
$fm=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$userid'");
$fm->execute();
if ($fm===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $frm=$fm->get_result();
if (mysqli_num_rows($frm)!=0) { 
 while ($showm=$frm->fetch_row()) {
  $member=$showm[3];
  ?>
<?php }
}
else{
  $member="NONE";
}
}?>
          </p>
        </div>
        </div>
        <div class="month">
          <ul class="weekdays">
            <li>M</li>
            <li>T</li>
            <li>W</li>
            <li>T</li>
            <li>F</li>
            <li>S</li>
            <li>S</li>
          </ul>
          <ul class="days"> 
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li><span class="active">20</span></li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="content-cont">
      <div class="todays" id="todays">
  <div class="main-container-wrapper">
 
    <main>
      
      <div class="events-container">
        <span class="events__title">Todo List</span>
        <ul class="events__list">
          <?php while ($showcab=$resafter->fetch_row())
    {

      if ($showcab[10]=="Pending") {
        ?>
          <li class="events__item-pending">
            <div class="events__item--left">
              <span class="events__name"><?php echo $showcab[1]; ?></span>
              <span class="events__date"><?php
              $startdate=strtotime($showcab[13]);

               echo date("M d H:m", $startdate); ?></span>
            </div>
            <button class="events__tag-start" id="movable<?php echo $showcab[0]; ?>">START</button>
          </li>
          <?php $locid= $showcab[3];?>

          <script type="text/javascript">
  $('#movable<?php echo $showcab[0]; ?>').click(function(){
    if($(this).attr("trigger")==="0"){
        $(this).animate({"right":"100px"},500);
        $(this).attr("trigger","1");
        setTimeout(openUrl, 1000);

function openUrl(){

   window.location.assign("mission.php?id=<?php echo $locid;?>");

}
    }
    else{
        $(this).animate({"right":"0px"},500);
        $(this).attr("trigger","0");
    }
});
</script>
          <?php
      }
    

      if ($showcab[10]=="In progress") {
        ?>
          <li class="events__item-progress">
            <div class="events__item--left">
              <span class="events__name"><?php echo $showcab[1]; ?></span>
              <span class="events__date"><?php
              $startdate=strtotime($showcab[13]);

               echo date("M d H:m", $startdate); ?></span>
            </div>
            <button class="events__tag-pur" id="movable<?php echo $showcab[0]; ?>">Pursuit</button>
          </li>
           <?php $locid= $showcab[3];?>

          <script type="text/javascript">
  $('#movable<?php echo $showcab[0]; ?>').click(function(){
    if($(this).attr("trigger")==="0"){
        $(this).animate({"right":"100px"},500);
        $(this).attr("trigger","1");
        setTimeout(openUrl, 1000);

function openUrl(){

   window.location.assign("mission.php?id=<?php echo $locid;?>");

}
    }
    else{
        $(this).animate({"right":"0px"},500);
        $(this).attr("trigger","0");
    }
});
</script>
          <?php }


      if ($showcab[10]=="Done") {
        ?>
          <li class="events__item-done">
            <div class="events__item--left">
              <span class="events__name"><?php echo $showcab[1]; ?></span>
              <span class="events__date"><?php
              $startdate=strtotime($showcab[13]);

              echo date("M d H:m", $startdate); ?></span>
            </div>
            <button class="events__tag-arch events__tag--highlighted"  id="movable<?php echo $showcab[0]; ?>">Archive</button>
          </li>
           <?php $locid= $showcab[3];?>

          <script type="text/javascript">
  $('#movable<?php echo $showcab[0]; ?>').click(function(){
    if($(this).attr("trigger")==="0"){
        $(this).animate({"right":"100px"},500);
        $(this).attr("trigger","1");
        setTimeout(openUrl, 1000);

function openUrl(){

   window.location.assign("mission.php?id=<?php echo $locid;?>");

}
    }
    else{
        $(this).animate({"right":"0px"},500);
        $(this).attr("trigger","0");
    }
});
</script>
          <?php 
        }
      }
   ?>
        </ul>
      </div>
    </main>
  </div>
      </div>
      <div class="social">
      
  
  
  <div class="contain">
  <div class="layer layer-1 darken-4 white-text">
     <div class="whats-included-intro mobile">
      <h2>Steps map</h2>
      <p class="hidden-md"></p>
    </div>
  </div>
  <div class="hotspot-contain">
    <div class="hotspot" data-target="#included1" id="hs1">
        <div class="number">1</div>
      <div class="pulse"></div>
      <div class="dot"></div>
    </div>
    <div class="hotspot" data-target="#included2" id="hs2">
        <div class="number">2</div>
      <div class="pulse"></div>
      <div class="dot"></div>
    </div>
    <div class="hotspot" data-target="#included3" id="hs3">
        <div class="number">3</div>
      <div class="pulse"></div>
      <div class="dot"></div>
    </div>
    <div class="hotspot" data-target="#included4" id="hs4">
        <div class="number">4</div>
      <div class="pulse"></div>
      <div class="dot"></div>
    </div>
    <div class="hotspot" data-target="#included5" id="hs5">
        <div class="number">5</div>
      <div class="pulse"></div>
      <div class="dot"></div>
    </div>
    <div class="hotspot" data-target="#included6" id="hs6">
    <div class="number">6</div>
      <div class="pulse"></div>
      <div class="dot"></div>
    </div>
      <div class="hotspot" data-target="#included7" id="hs7">
        <div class="number">7</div>
      <div class="pulse"></div>
      <div class="dot"></div>
    </div>
      <div class="raincover"></div>
    <div class="hotspot-img">
      <img src="img/cabin-sts.jpg" />
    </div>
  </div>
  
  <div class="included-list">
    <div class="whats-included-intro no-mobile">
      <h2>Steps map</h2>
      <p class="hidden-md"></p>
    </div>
    <div class="included-nav">
      <div class="included-contain" data-target="#hs1" id="included1">
        <div class="included-head">
            <span class="number">1</span>
        </div>
        <div class="included-body">
          <p>A multiple recline seat unit with a lie-flat position that supports natural, healthy sleep.</p>
        </div>
      </div>  
      <div class="included-contain" data-target="#hs2" id="included2">      
        <div class="included-head">
            <span class="number">2</span>Head Hugger
        </div>
        <div class="included-body">
          <p>Removable head hugger and large seat for long-lasting use.</p>
        </div>
      </div>  
      <div class="included-contain" data-target="#hs3" id="included3">      
        <div class="included-head">
            <span class="number">3</span>Bumper Bar
        </div>
        <div class="included-body">
          <p>The simple click-button mechanism lets you attach and remove the bar with ease.</p>
        </div>
      </div>
      <div class="included-contain" data-target="#hs4" id="included4">  
        <div class="included-head">
            <span class="number">4</span>Chest &amp; Crotch Pads
        </div>
        <div class="included-body">
          <p>Supportive head cushion, deep padded seat and chest pads for extra comfort.</p>
        </div>
      </div>  
      <div class="included-contain" data-target="#hs5" id="included5">      
        <div class="included-head">
            <span class="number">5</span>Shopping Basket
        </div>
        <div class="included-body">
          <p>Spacious storage for all your essentials.</p>
        </div>
      </div>  
      <div class="included-contain" data-target="#hs6" id="included6">        
        <div class="included-head">
            <span class="number">6</span>Chassis
        </div>
        <div class="included-body">
          <p>Robust frame design for greater stability and support on the move.</p>
        </div>
      </div>
      <div class="included-contain" data-target="#hs7" id="included7">      
        <div class="included-head">
            <span class="number">7</span>Cuir
        </div>
        <div class="included-body">
          <p>No need to buy separately, our raincovers come included.</p>
        </div>
      </div>
  </div>
  
</div>
<script type="text/javascript">
  //Accordian
    jQuery('.included-nav').each(function () {
        var $accordian = jQuery(this);
        $accordian.find('.included-contain').on('click', function () {
      jQuery(this).addClass('opened');
      jQuery(this).siblings('div').removeClass('opened');
      $($(this).data("target")).addClass('hotspot-active');
      $($(this).data("target")).siblings('div').removeClass('hotspot-active');
        });
    }); 
    
//Hotspots
  jQuery('.hotspot-contain').each(function () {
    
    $('.hotspot').on('click', function () {
      jQuery(this).addClass('hotspot-active');
      jQuery(this).siblings('div').removeClass('hotspot-active');
      $($(this).data("target")).addClass('opened');
      $($(this).data("target")).siblings('div').removeClass('opened');
          });

    });
    

</script>

      </div>

    </div>
  </div>

</div>
<div id="open-modal" class="modal-window">
  <div>
    <a href="#" title="Close" class="modal-close">Close</a>
    <h1>Step 2 - Dry</h1>
    <div id="roundedbig" style=" margin:auto;border-radius: 50%; width: 110px;height: 110px;align-content: center; background: -webkit-gradient(linear, left top, left bottom, from(#00A1db), to(#0491c4));
  background: linear-gradient(#00A1db, #0491c4);
  box-shadow: 0 2px 12px -3px #0491c4; ">
 <span id="countdown" class="timer"></span>
</div>
    
    <button class="btn" id="finishstep" style="display: none; margin-top: 30px;margin-bottom: 30px;">Finish</button>
    <a href="" target="_blank" style="bottom: 0;"><span class="material-icons">live_help</span></a>
    </div>
</div>

<script src="https://use.fontawesome.com/6f993f4769.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script type="text/javascript">


/*comodo */
var initialTime = 10;//Place here the total of seconds you receive on your PHP code. ie: var initialTime = <? echo $remaining; ?>;

var seconds = initialTime;
function timer() {
    var days        = Math.floor(seconds/24/60/60);
    var hoursLeft   = Math.floor((seconds) - (days*86400));
    var hours       = Math.floor(hoursLeft/3600);
    var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
    var minutes     = Math.floor(minutesLeft/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;
        
    }
    if (minutes < 10) {

        minutes = "0" + minutes; 
    }
    document.getElementById('countdown').innerHTML =  minutes + ":" + remainingSeconds;
    document.getElementById('countdownmini').innerHTML =  minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);

        document.getElementById("roundedbig").style.background = "-webkit-gradient(linear, left top, left bottom, from(#fd397a), to(##eb2a6a))";
        document.getElementById("roundedbig").style.background = "linear-gradient(#fd397a, #eb2a6a)";
        document.getElementById("roundedbig").style.boxShadow = "0 2px 12px -3px #fd397a";

        document.getElementById("roundhead").style.background = "-webkit-gradient(linear, left top, left bottom, from(#fd397a), to(##eb2a6a))";
        document.getElementById("roundhead").style.background = "linear-gradient(#fd397a, #eb2a6a)";
        document.getElementById("roundhead").style.boxShadow = "0 2px 12px -3px #fd397a";
        document.getElementById("finishstep").style.display = "block";


         


        var audio = new Audio('timesup.mp3');
        audio.play();
    } else {
        seconds--;
    }
}
var countdownTimer = setInterval('timer()', 1000);

/*

*/


  var s = false;

$('body').on('click', '.btn', function(){
    s = true
    console.log(s)
    $(this).toggleClass('meet');
  
    $('.collection-item').toggleClass('merge');
    $('hr').toggleClass('opacity-0')
  
  $('.sign-in').toggleClass('reveal').find('input');
  $('.close').toggleClass('opacity-0');
  $('.circle').toggleClass('grow')
}).on('click', '.icon-bar', function(){
    var one = $(this),
        two = $('.layer-2'),
        three = $('.layer-3');
  
  if (s){
    s = false;
    $('.collection-item').removeClass('merge');
    $('.sign-in').removeClass('reveal');
    $('.btn').removeClass('meet');
    $('hr').removeClass('opacity-0');
    $('.close').addClass('opacity-0');
    $('.circle').removeClass('grow')
  }
    two.toggleClass('move-down');
});
</script>
<script>



  /**
 * Element.requestFullScreen() polyfill
 * @author Chris Ferdinandi
 * @license MIT
 */
if (!Element.prototype.requestFullscreen) {
  Element.prototype.requestFullscreen = Element.prototype.mozRequestFullscreen || Element.prototype.webkitRequestFullscreen || Element.prototype.msRequestFullscreen;
}

/**
 * document.exitFullScreen() polyfill
 * @author Chris Ferdinandi
 * @license MIT
 */
if (!document.exitFullscreen) {
  document.exitFullscreen = document.mozExitFullscreen || document.webkitExitFullscreen || document.msExitFullscreen;
}

/**
 * document.fullscreenElement polyfill
 * Adapted from https://shaka-player-demo.appspot.com/docs/api/lib_polyfill_fullscreen.js.html
 * @author Chris Ferdinandi
 * @license MIT
 */
if (!document.fullscreenElement) {

  Object.defineProperty(document, 'fullscreenElement', {
    get: function() {
      return document.mozFullScreenElement || document.msFullscreenElement || document.webkitFullscreenElement;
    }
  });

  Object.defineProperty(document, 'fullscreenEnabled', {
    get: function() {
      return document.mozFullScreenEnabled || document.msFullscreenEnabled || document.webkitFullscreenEnabled;
    }
  });
}

document.addEventListener('click', function (event) {


  // Ignore clicks that weren't on the toggle button
  if (!event.target.hasAttribute('data-toggle-fullscreen')) return;

  // If there's an element in fullscreen, exit
  // Otherwise, enter it
  if (document.fullscreenElement) {
    document.exitFullscreen();
  } else {
     (async () => {
  const battery = await navigator.getBattery();
  const battery_level = `${(Math.round(battery.level * 100)).toFixed(0)}%`;

 

  console.log(battery_level);
  document.getElementById("demo").innerHTML = battery_level; // 100%
})();
      document.body.requestFullscreen();








      function getDateTime() {
        var now     = new Date(); 
        var year    = now.getFullYear();
        var month   = now.getMonth()+1; 
        var day     = now.getDate();
        var hour    = now.getHours();
        var minute  = now.getMinutes();
        var second  = now.getSeconds(); 
        if(month.toString().length == 1) {
             month = '0'+month;
        }
        if(day.toString().length == 1) {
             day = '0'+day;
        }   
        if(hour.toString().length == 1) {
             hour = '0'+hour;
        }
        if(minute.toString().length == 1) {
             minute = '0'+minute;
        }
        if(second.toString().length == 1) {
             second = '0'+second;
        }   
        var dateTime = year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second;   
         return dateTime;
    }

    // example usage: realtime clock
    setInterval(function(){
        currentTime = getDateTime();
        document.getElementById("digital-clock").innerHTML = currentTime;
    }, 1000);
    document.documentElement.requestFullscreen();
  }

}, false);
</script>

</body>
</html>
<?php
}

}
?>