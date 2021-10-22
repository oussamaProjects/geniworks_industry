<?php
session_start();
if(isset($_SESSION['userid'])){
$gwidcab = $_SESSION['userid'];

if(isset($_GET['id'])){
$cabinid=$_GET['id'];
require('controls/zdze8efzedzdeezd/de5.php');
$selectafter=$cdb->prepare("SELECT * FROM cabins WHERE cabn_name='$cabinid'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}
else{
  $resafter=$selectafter->get_result(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base >
    <meta charset="utf-8" />
    <title>Cabins Disinfection Plan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">

<script type="text/javascript" src="https://unpkg.com/xstate@4.0.0/dist/xstate.js"></script>
<script type="text/javascript" src="https://unpkg.com/flipping@1.1.0/dist/flipping.web.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


<meta name="viewport" content="width=device-width,initial-scale=1.0">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




<style type="text/css">



*, *:before, *:after {
  box-sizing: border-box;
  position: relative;
  transition: transform 0.3s cubic-bezier(0.5, 0, 0.5, 1);
  transition-property: transform, opacity;
}

html, body {
  height: 85%;
  width: 100%;
  margin: 0;
  padding: 0;
 font-family: "Montserrat", sans-serif;
 
}

#app {
  
  animation: fade-in .4s linear .3s both;
}
@keyframes fade-in {
  from {
    opacity: 0;
  }
}
/* ---------------------------------- */
.ui-form {
  margin-top: 5%;
  padding: 5%;
  display: grid;
  height: 60vh;
  grid-template-columns: auto 1fr;
  grid-template-rows: 1fr;

}

.ui-section {
  grid-row: 1;
  grid-column: 2;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  max-width: 30em;
}

.ui-subheading {
  color: #101932;
  font-weight: bold;
  letter-spacing: 1px;
}

.ui-input {
  appearance: none;
  border: 1px solid #CCC;
  border-radius: 2px;
  padding: .5rem;
  transition: border-color .3s ease;
}
.ui-input:focus {
  outline: none;
  border-color: #00A1db;
}

.ui-button {
  appearance: none;
  background: #00A1db;
  border: none;
  border-radius: 2px;
  padding: 1rem;
  display: inline-block;
  color: white;
  text-transform: uppercase;
  font-size: .75rem;
  letter-spacing: 2px;
  width: auto;
  margin-top: 1rem;
  transition-timing-function: cubic-bezier(0.8, 0, 0.2, 1);
}

.ui-heading {
  margin: 1rem 0;
  color: #101932;
}

.ui-field {
  display: flex;
  flex-direction: row;
}
.ui-field > * {
  margin: 0;
}
.ui-field > .ui-button {
  margin-left: -1rem;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  opacity: 0;
  transform: translateX(-50%);
  transition-duration: .6s;
  pointer-events: none;
}
.ui-field > .ui-input:valid + .ui-button {
  pointer-events: auto;
  opacity: 1;
  transform: none;
}

.ui-label {
  margin: 1rem 0;
}

.ui-paragraph {
  color: 101932;
  line-height: 1.5;
}

.ui-button#step-3-button {
  animation: step-3-button 0.3s cubic-bezier(0.5, 0, 0.5, 1);
}
.ui-button#step-3-button:not([data-clickable]) {
  display: none;
}
@keyframes step-3-button {
  from {
    opacity: 0;
    transform: translateY(100%);
  }
  to {
    opacity: 1;
    transform: none;
  }
}
.ui-choices > input {
  opacity: 0;
  height: 1px;
  width: 1px;
  display: none;
}
.ui-choices > input:checked + .ui-choice {
  background: #00A1db;
  color: #101932;
}

.ui-choice {
  transition: all 0.3s cubic-bezier(0.5, 0, 0.5, 1);
  border: 2px solid #00A1db;
  display: inline-block;
  padding: 1rem;
  margin-right: 1rem;
  border-radius: 2px;
}

/* ---------------------------------- */
.ui-steps,
.ui-step {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.ui-steps {
  grid-column: 1;
  margin-right: 2rem;
  display: grid;
  place-items: center;
}

.ui-step {
  display: grid;
  grid-template-rows: auto 1fr;
  height: 100%;
  --speed: .3s;
  --color: #00A1db;
  --secondary: #AAA;
}
.ui-step span {
  width: 2em;
  height: 2em;
  border-radius: 50%;
  background: var(--color);
  color: #FFF;
  display: grid;
  place-items: center;
  line-height: 1;
  transition: background-color var(--speed) cubic-bezier(0.5, 0, 0.5, 1) var(--speed);
}
.ui-step span::before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 130%;
  height: 130%;
  margin: -15%;
  border: solid 2px var(--color);
  border-radius: 50%;
  transform: scale(0.6);
  transition: inherit;
  transition-property: transform, border-color;
}
.ui-step::before, .ui-step::after {
  content: '';
  display: block;
  border-right: solid 3px var(--secondary);
  height: 100%;
  grid-row: 2;
  grid-column: 1;
  width: 0px;
  margin: 0 auto;
  transform-origin: top center;
}
.ui-step::after {
  transform: scaleY(1);
  border-right-color: var(--color);
  transition: transform var(--speed) cubic-bezier(0.5, 0, 0.5, 1);
}
.ui-step:last-child::before, .ui-step:last-child::after {
  display: none;
}
.ui-step[data-active] span {
  background: #00A1db;
}
.ui-step[data-active] span::before {
  transform: scale(1);
}
.ui-step[data-active]::after {
  transform: scaleY(0.5);
  transition-delay: var(--speed);
}
.ui-step[data-active] ~ .ui-step {
  --color: #AAA;
}
.ui-step[data-active] ~ .ui-step::after {
  transform: scaleY(0);
}

/* ---------------------------------- */
.ui-section {
  opacity: 0;
  visibility: hidden;
  transform: translateY(-30vh);
  transition: opacity 0.5s linear, transform 0.5s cubic-bezier(0.5, 0, 0.5, 1), visibility 0s linear 0.5s;
}

.ui-section[data-active] {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
  transition-delay: 0s;
}
.ui-section[data-active] ~ .ui-section {
  transform: translateY(30vh);
}
.ui-section[data-active] > * {
  animation: slide-up 0.35s cubic-bezier(0.5, 0, 0.5, 1) both;
}
.ui-section[data-active] > *:nth-child(1):not(#step-3-button) {
  animation-delay: 100ms !important;
}
.ui-section[data-active] > *:nth-child(2):not(#step-3-button) {
  animation-delay: 200ms !important;
}
.ui-section[data-active] > *:nth-child(3):not(#step-3-button) {
  animation-delay: 300ms !important;
}
.ui-section[data-active] > *:nth-child(4):not(#step-3-button) {
  animation-delay: 400ms !important;
}
.ui-section[data-active] > *:nth-child(5):not(#step-3-button) {
  animation-delay: 500ms !important;
}
@keyframes slide-up {
  from {
    opacity: 0;
    transform: translateY(1rem);
  }
  to {
    transform: none;
  }
}

#hidden_div {
    display: none;
}
#hidden_div1 {
    display: none;
}

</style>
<style type="text/css">
  .iinput {
  -webkit-appearance: none; /* remove default */
  display: block;
  margin: 10px;
  width: 24px;
  height: 24px;
  border-radius: 12px;
  border:1px solid #101932;
  cursor: pointer;
  vertical-align: middle;
  box-shadow: hsla(0,0%,100%,.15) 0 1px 1px, inset hsla(0,0%,0%,.5) 0 0 0 1px;

  background-image:-webkit-radial-gradient( hsla(196,100%, 43%,1) 0%,
hsla(196,100%, 43%,1) 15%,
hsla(196,100%, 43%,.3) 28%,
hsla(196,100%, 43%,0) 70% );
  background-repeat: no-repeat;
  -webkit-transition: background-position .15s cubic-bezier(.8, 0, 1, 1),
    -webkit-transform .25s cubic-bezier(.8, 0, 1, 1);
  outline: none;

}
.iinput:checked {
  -webkit-transition: background-position .2s .15s cubic-bezier(0, 0, .2, 1),
    -webkit-transform .25s cubic-bezier(0, 0, .2, 1);
}
.iinput:active {
  -webkit-transform: scale(1.5);
  -webkit-transition: -webkit-transform .1s cubic-bezier(0, 0, .2, 1);
}



/* The up/down direction logic */

.iinput,
.iinput:active {
  background-position: 0 24px;
}
.iinput:checked {
  background-position: 0 0;
}
.iinput:checked ~ .iinput,
.iinput:checked ~ .iinput:active {

}
.machine {
  left:45%;
  width: 40vmin;
  fill: #00A1db; }

.small-shadow, .medium-shadow, .large-shadow {
  fill: rgba(0, 0, 0, 0.05); }

.small {
  -webkit-transform-origin: 100.136px 225.345px;
      -ms-transform-origin: 100.136px 225.345px;
          transform-origin: 100.136px 225.345px; 
  -webkit-animation: rotate 2s infinite linear;
  animation-timing-function: cubic-bezier(1,-1);
}



.medium {
  -webkit-transform-origin: 254.675px 379.447px;
      -ms-transform-origin: 254.675px 379.447px;
          transform-origin: 254.675px 379.447px; 
        animation:rotate 3s  infinite;
animation-timing-function: cubic-bezier(-1,1);}



.large {
  -webkit-transform-origin: 461.37px 173.694px;
      -ms-transform-origin: 461.37px 173.694px;
          transform-origin: 461.37px 173.694px; 
        animation:rotate 3s  infinite;
animation-timing-function: cubic-bezier(1,-1);}



          @-webkit-keyframes rotate {
    from { -webkit-transform: rotate(0deg) } 
    to { -webkit-transform: rotate(360deg) } 
}
</style>

    <style type="text/css">
      @media (min-width: 1025px){
.kt-aside--fixed .kt-wrapper {
    padding-left: 110px;
    padding-right: 110px; 
}
    </style>


        <style type="text/css">
       * {
  box-sizing: border-box;
  outline: none;
}


html {
    height: 100%;
}
body {

    background-repeat: no-repeat;
    background-attachment: fixed;
}

body {
  background: #f5f6f7;
}


.ticket {
  background: #ffffff;
  border-radius: 4px;
  color: #0b1521;

  font-size: 14px;
  font-weight: normal;
  line-height: 20px;
  padding: 30px;


}
.ticket-header {
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: justify;
          justify-content: space-between;
  margin: 20px 0 10px 0;
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
     <style type="text/css">
    body {

 
}

      * {
  box-sizing: border-box;
  outline: none;
}


html {
    height: 100%;
}
body {

    background-repeat: no-repeat;
    background-attachment: fixed;
}

body {
  background: #f5f6f7;
}
.back {
 
  width: 100%;
  height: 100%;
}

.registration-form {


}
.registration-form header {
  position: relative;
  z-index: 4;


  background: #ffffff;
    border-radius: 4px 4px 0px 0px;
    color: #0b1521;

    font-size: 14px;
    font-weight: normal;
    line-height: 20px;
    padding: 30px;
}
.registration-form header h1 {
  font-weight: 900;
  letter-spacing: 1.5px;
  color: #333;
  font-size: 23px;
  text-transform: uppercase;
  margin: 0;
}
.registration-form header p {
  word-spacing: 0px;
  color: #9facb6;
  font-size: 17px;
  margin: 0;
  margin-top: 5px;
}
.registration-form form {
  position: relative;
}
.registration-form .input-section {
  width: 100%;
  position: absolute;
  display: -webkit-box;
  display: flex;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  height: 75px;
  border-radius: 0 0 15px 15px;
  overflow: hidden;
  z-index: 2;
  box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.registration-form .input-section.folded {
  width: 95%;
  margin-top: 10px;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
.registration-form .input-section.folded input {
  background-color: #fff;
}
.registration-form .input-section.folded span {
  background-color: #fff;
}
.registration-form .input-section.folded + .folded {
  width: 90%;
  margin-top: 20px;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 0;
}
.registration-form .input-section.folded + .folded input {
  background-color: #fff;
}
.registration-form .input-section.folded + .folded span {
  background-color: #fff;
}
.registration-form .input-section.fold-up {
  margin-top: -75px;
}
.registration-form form input {
  background: white;
  color: #8f8fd6;
  width: 80%;
  border: 0;
  padding: 20px 40px;
  margin: 0;
}
.registration-form form input:focus {
  outline: none;
}
.registration-form form input::-webkit-input-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input::-moz-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input:-ms-input-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input::-ms-input-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input::placeholder {
  color: #8f8fd6;
  font-weight: 100;
}

.animated-button {
  width: 20%;
  background-color: #d4d4ff;
}
.animated-button span {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  justify-content: space-around;
  -webkit-box-align: center;
          align-items: center;
  line-height: 75px;
  text-align: center;
  height: 75px;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.animated-button span i {
  font-size: 25px;
  color: #9999f8;
}
.animated-button .next-button {
  background: transparent;
  color: #9999f8;
  font-weight: 100;
  width: 100%;
  border: 0;
}

.next {
  margin-top: -75px;
}

.success {
  width: 100%;
  position: absolute;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  height: 75px;
  border-radius: 0 0 15px 15px;
  overflow: hidden;
  z-index: 2;
  box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  background: #1dc9b7;
  margin-top: -75px;
}
.success p {
  color: white;
  font-weight: 900;
  letter-spacing: 2px;
  font-size: 18px;
  width: 100%;
  text-align: center;
}











.top {
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
  margin-bottom: 20px;
  overflow: hidden;
}
.top .status {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 20px;
  overflow: hidden;
}
.top .status ul {
  width: 100%;
  list-style: none;
  margin: 0;
  padding: 0;
  letter-spacing: -1em;
}
.top .status ul li {
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
.top .status ul li .alarm {
  font-size: 12px;
  padding-left: 4px;
  position: absolute;
}
.top .status ul li .data {
  font-size: 12px;
  position: absolute;
  left: 16px;
}
.top .status ul .battery {
  float: right;
  text-align: right;
}
.top .status ul .clock {
  text-align: left;
}
.top .menu {
  position: relative;
  width: 100%;
  height: 50px;
  display: inline-block;
}
.top .menu .selection {
  display: -webkit-box;
  display: flex;
  width: 40%;
  height: 100%;
  position: absolute;
  right: 0;
}
.top .menu .selection .liselect {
  width: 33px;
  height: 3px;
  background: white;
  position: absolute;
  bottom: -1px;
}
.top .menu .selection ul {
  list-style: none;
  margin: 0;
  padding-left: 20px;
}
.top .menu .selection ul li {
  display: inline-block;
  padding: 0px 10px;
  margin: 0px 0px;
  color: rgba(255, 255, 255, 0.8);
  cursor: pointer;
}
.top .menu .selection ul li .material-icons {
  line-height: 48px;
  font-size: 20px;
}
.top .menu .selection ul li:hover {
  background: rgba(255, 255, 255, 0.08);
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.top .menu .sotto-menu {
  display: -webkit-box;
  display: flex;
  position: absolute;
  width: 60%;
  height: 100%;
}
.top .menu .sotto-menu .burger {
  width: 50px;
  height: 50px;
  text-align: center;
  cursor: pointer;
  border-radius: 50%;
}
.top .menu .sotto-menu .burger:hover {
  background: rgba(255, 255, 255, 0.05);
  -webkit-transition: background 0.4s;
  transition: background 0.4s;
}
.top .menu .sotto-menu .burger .material-icons {
  line-height: 50px;
  color: white;
}
.top .menu .sotto-menu .today-label::after {
  content: 'Cleaning Order';
  display: block;
  font-size: 15px;
  padding: 1px 0px;
  color: white;
  width: 100%;
}
.top .calendar {
  width: 100%;
  height: 100%;
  display: block;
}
.top .calendar .day {
  width: 37%;
  height: 100%;
  display: inline-block;
  float: left;
}
.top .calendar .day .days-plan {
  position: relative;
  display: inline-table;
  text-align: center;
  width: 100%;
  padding-top: 10px;
}
.top .calendar .day .days-plan .day-plan {
  margin: 0;
  padding: 0;
  color: white;
  font-size: 11px;
}
.top .calendar .day .circle-cont {
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
.top .calendar .day .circle-cont .circle-date {
  color: rgba(255, 255, 255, 0.8);
  font-size: 12px;
  font-weight: 500;
  padding: 0;
  margin: 0;
  display: table-cell;
  vertical-align: middle;
}
 .top .calendar .day .circle-cont .circle-date span {
  font-size: 32px;
  font-weight: 300;
  display: block;
  color: white;
}
.top .calendar .month {
  position: relative;
  display: inline-block;
  float: left;
  width: 63%;
  padding-top: 10px;
}
.disabled{
  opacity: .5;
}
  </style>
    <link rel="shortcut icon" href="../img/favicon-32x32.png" />
  </head>

  <!-- end::Head -->

  <!-- begin::Body -->
  <body class="">

   <div class="top" id="tendina">
      <div class="status">
        <ul>
          
        </ul>
      </div>
      <div class="menu">
        <div class="sotto-menu">
          <label class="burger" for="nav_input"><i class="material-icons">menu</i></label>
          <p class="today-label"></p>
        </div>
       

     
       
      </div>
      <div class="calendar">
        <div class="day">
          
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

 

<div id="app" data-state="step-1" >
  <form class="ui-form" id="mydata" enctype="multipart/form-data" method="post">
     

    <ul class="ui-steps">
      <li class="ui-step" data-show="step-1"><span>1</span></li>
      <li class="ui-step" data-show="step-2"><span>2</span></li>
      <li class="ui-step" data-show="step-3"><span>3</span></li>
      <li class="ui-step" data-show="step-4"><span>4</span></li>
    </ul>


    <?php

  $fteam=$cdb->prepare("SELECT * FROM user WHERE u_public_id='$gwidcab'");
$fteam->execute();
if ($fteam===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resfteam=$fteam->get_result();
if (mysqli_num_rows($resfteam)!=0) { 
 while ($showteam=$resfteam->fetch_row()) {
  $membertema=$showteam[3];

}
}
else{
  $membertema="NONE";
}
}
?>


    
    <section class="ui-section" data-show="step-1">
      <div class="ui-subheading">Step 1</div>
      <h2 class="ui-heading">Select Cleaning parts.</h2>
       <p class="ui-paragraph" style=" margin-bottom: 15px;">Choose cleaning category (based on cleaning order).</p>
      <div class="ui-field" style="margin-bottom: 25px;">        
        <select id="cprt" name="cpartlocation" class="ui-input" style="font-weight: 600; width: 120px;" onchange="showDiv('hidden_div', this),showDiv1('hidden_div1', this)">
          <option value="0">Choose..</option>
          <option value="1">Interior</option>
          <option value="2">Exterior</option>
        </select>
        <div id="hidden_div">
          <select class="ui-input" name="csubpart1" style="width: 120px; margin-left: 10px;" required>
            <option selected="selected" value="Walls">Walls</option>
            <option value="seat">Seat</option>
            <option value="CMD Panels">CMD Panels</option>
            <option value="Rubber">Rubber Floors</option>
            <option value="Trash Cleaning">Trash Cleaning</option>
          </select>
          <select class="ui-input" name="ccleaningtype" style="width: 120px; margin-left: 10px;" required>
            <option value="">Choose...</option>
            <option value="Steam">Steam</option>
            <option value="Dry">Dry</option>
            <option value="Dust">Dust</option>
            <option value="Vacuum">Vacuum</option>
            <option value="All"><strong>All</strong></option>
          </select>
        </div>
        <div id="hidden_div1">
          <select class="ui-input" name="csubpart1" style="width: 120px; margin-left: 10px;"  required>
            <option selected="selected" value="Windows">Windows</option>
            <option value="Structure">Structure</option>
          </select>
          <select class="ui-input" style="width: 120px; margin-left: 10px;" name="ccleaningtype" required>
            <option value="">Choose...</option>
            <option value="High Pressure">High Pressure</option>
            <option value="Dry">Dry</option>
            <option value="All" style="font-weight: bolder;">All</option>
          </select>
        </div>
      </div>
      <?php while ($showcab=$resafter->fetch_row()) {
$cowner=$showcab[2];
$casset=$showcab[7];
$cpart=$showcab[1];

      ?>
      <input type="hidden" name="cowner" value="<?php echo $cowner;?>">
      <input type="hidden" name="casset" value="<?php echo $casset;?>">
      <input type="hidden" name="cpart" value="<?php echo $cpart;?>">
      <?php
     }
     ?>

      <button type="button" id="next1" class="disabled ui-button" disabled onClick="check()">Next</button>
    </section>
    <section class="ui-section" data-show="step-2">
      <div class="ui-subheading">Step 2</div>
      <h2 class="ui-heading">Select Start Time</h2>
      <p class="ui-paragraph" style=" margin-bottom: 15px;">when do you want the cleaning to start.</p>
      <div style="display: inline-block; margin-bottom: 15px;">
        <input type="radio" name="cstarttime" value="15" class="iinput" checked style="display: inline-block;"  required>  
        <label class=""  for=""> 15 min</label>
      </div>
      <div style="display:inline-block;  margin-bottom: 15px;">
        <input type="radio" name="cstarttime" value="60" class="iinput" style="display: inline-block;"  required>
        <label class="" for=""> 1 Hour</label>
      </div>
      <button type="button" id="next2" class="ui-button" >Next</button>
    </section>
    <section class="ui-section" data-show="step-3">
      <div class="ui-subheading">Step 3</div>
      <h2 class="ui-heading">Select Estimated Delivery Time</h2>
      <p class="ui-paragraph">Estimate the time that the cabin to be ready in (<strong>After Order Validation</strong>).</p>
      <div style="display: inline-block; margin-bottom: 15px;">
        <input type="radio" name="cestimateddelivery" value="30" class="iinput" checked style="display: inline-block;" >
        <label class="" for=""> 30 min</label>
      </div>
      <div style="display:inline-block; margin-bottom: 15px;">
        <input type="radio" name="cestimateddelivery" value="60" class="iinput" style="display: inline-block;"/>
        <label class="" for=""> 1 Hour</label>
      </div>
      <div style="display:inline-block; margin-bottom: 15px;">
        <input type="radio" name="cestimateddelivery" value="120" class="iinput" style="display: inline-block;"/>
        <label class="" for=""> 2 Hours</label>
      </div>
      <button  type="button" class="ui-button">Next</button>
    </section>
    <section class="ui-section" data-show="step-4">
      <div class="ui-subheading">Step 4</div>
      <h2 class="ui-heading">Proof Picture.</h2>
      <p class="ui-paragraph">Take a picture of the surface or area you want to clean, upload it .</p>
      <div class="ui-choices" style="margin-bottom: 25px;">
        <input type="file"  onchange="enabtn4(this)" name="cupldpic" accept=".png, .jpg, .jpeg" id="choice-1" class="ui-input">
        <label for="choice-1" class="ui-choice">
          <span class="ui-text">upload</span>
        </label>
      </div>
      <input type="hidden" value="<?php echo $gwidcab;?>" name="gwidcab">
      <button type="submit" name="sub" class="disabled ui-button -submit" id="submit" disabled>Clean it</button>
    </section>

<span id="result"></span>
    <script type="text/javascript">
      
    </script>
    <div class="ui-section" data-show="finished"  style="  align-content: center;">
      <div id="thanksmsg">
                  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217538/rocketDelivery.gif' style="width: 80%;align-content: center; height: auto;
 
  ">
      </div>
      <h2 class="ui-heading" style="font-size: 14px;">Thanks. <br>Your Order Will Be treated ASAP.</h2>
      <a href="../CCM/db.php" class="ui-button" style="text-decoration: none; align-content: center;" >Dashboard</a>
    </div>
  </form>
</div>
                        <div style="display: none;" class="kt-portlet__head-wrapper">
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Enter GWID</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="../controls/load.php" method="post">
                                  <div class="modal-body">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-3 col-sm-12">GENIWORKS ID</label>
                                      <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="hidden" value="" name="cabinid">
                                        <input type='text' class="form-control" name="gwidcab" id="kt_maxlength_2" maxlength="7" placeholder="" type="text" />
                                        <span class="form-text text-muted">Please Enter Your GWID To continue</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" name="gocab" class="btn btn-brand">Go</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
            
         
          
          


<script type="text/javascript">









$(document).ready(function () {

    $("#submit").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#mydata')[0];

    // Create an FormData object
        var data = new FormData(form);

    // If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");

    // disabled the submit button
        $("#submit").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "controls/order.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {


            },
            error: function (e) {

                $("#result").text(e.responseText);
                console.log("ERROR : ", e);
                $("#submit").prop("disabled", false);

            }
        });

    });

});

</script>
   
 
      



    <div id="kt_scrolltop" class="kt-scrolltop">
      <i class="la la-arrow-up"></i>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
  $('.email').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-paper-plane').addClass("next");
    } else {
      $('.icon-paper-plane').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.email').click(
  function(){
    console.log("Something");
    $('.email-section').addClass("fold-up");
    $('.password-section').removeClass("folded");
  }
);

$('.password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-lock').addClass("next");
    } else {
      $('.icon-lock').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.password').click(
  function(){
    console.log("Something");
    $('.password-section').addClass("fold-up");
    $('.repeat-password-section').removeClass("folded");
  }
);

$('.repeat-password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-repeat-lock').addClass("next");
    } else {
      $('.icon-repeat-lock').removeClass("next");
    }
  }
);

$('.next-button.repeat-password').click(
  function(){
    console.log("Something");
    $('.repeat-password-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
  }
);
</script>
    <script>

                            $('input[type="checkbox"]').click(function(){
    
    var inputValue = $(this).attr("id");
    $("." + inputValue).toggle();
    
    if (!this.checked) {
      
      $("." + inputValue + ' select').val('-1');
    
    }
    
});

                            function cbChange(obj) {
    var cbs = document.getElementsByClassName("cb");
    for (var i = 0; i < cbs.length; i++) {
        cbs[i].checked = false;
    }
    obj.checked = true;

}
document.getElementById("qccheck").onclick = function() {
    if(this.checked)
        $('.qccheck').style.display = "block";
   
    else
        $('.qccheck').style.display = "none";
   


}

document.getElementById("rtgcheck").onclick = function() {
    if(this.checked)
        $('.rtgcheck').style.display = "block";
   
    else
        $('.rtgcheck').style.display = "none";


}






function check()
{
    if(!document.getElementById("test").checkValidity())
      {
        //do your stuff here  
        alert("input not valid!");
      }else
      {
          callMeIfValid();
      }
}

function callMeIfValid()
{
    //submit form or whatever
    alert("valid input");
}









</script>
<script type="text/javascript">

    $(function() {
        $('#colorselector').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });

function enabtn4(divId, element){
   $('#submit').removeAttr('disabled');
   $('#submit').removeClass('disabled');
};


  function showDiv(divId, element)
{
    $('#next1').removeAttr('disabled');
    $('#next1').removeClass('disabled');
    document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none';
   
}
function showDiv1(divId, element)
{
  $('#next1').removeAttr('disabled');
  $('#next1').removeClass('disabled');
    document.getElementById(divId).style.display = element.value == 2 ? 'block' : 'none';
   
}

  $('.dropdown-container-slidemorph .dropdown-submenu').each(function() {
  var self = $(this)

  var label = $('> a .dropmenu-item-label', this) ? $('> a .dropmenu-item-label', this).text() : $('> a', this).text()
  var backlink = $('<li class="dropdown-backlink"><a href="#">' + label + '</a></li>')

  $(this).find('ul').first().prepend(backlink)

  // Attach listeners to the back buttons
  $(this).find('> ul > li').on('click', function(e){
      e.preventDefault()
      e.stopPropagation()

      var self = $(this)
      var container = self.closest('.dropdown-submenu')
      var parentDropdown = container.closest('.dropdown-menu')

      if (!self.hasClass('dropdown-backlink')) {
        container.find('> a .dropmenu-item-content').text(self.text())
      }

      self.closest('.dropdown-container').css({
        'width': parentDropdown.outerWidth(),
        'height': parentDropdown.outerHeight()
      })

      container.removeClass('open')
   })

})

// Initialize menu width
$(document).on('shown.bs.dropdown', function(e) {
  var self = $(e.target)
  var container = self.find('.dropdown-container-slidemorph')
  var submenu = container.find('> .dropdown-menu').first()

  // Add dimensions only if they haven't been already set
  if (typeof container.attr('style') === typeof undefined) {
    self.find('.dropdown-container-slidemorph, .dropdown-container-slidemorph > .dropdown-menu').each(function() {
      $(this).css({
        'width': submenu.outerWidth(),
        'height': submenu.outerHeight()
      })
    })
  }
})

$('[data-toggle="slideMorph"]').on('click', function(e) {
  e.preventDefault()
  e.stopPropagation()

  var self = $(this)
  var container = self.parent()
  var parentDropdown = self.closest('.dropdown-menu')
  var submenu = container.find('.dropdown-menu')

  container.addClass('open')

  self.closest('.dropdown-container').css({
    'width': submenu.outerWidth(),
    'height': submenu.outerHeight()
  })
})

$('#slideMorph > .dropdown-toggle').click()
</script>
<script type="text/javascript">
  console.clear();

const elApp = document.querySelector('#app');
const elNextButtons = Array.from(document.querySelectorAll('button:not(#submit)'));
const elSubmitButton = document.querySelector('#submit');
const elAnimationHelp = document.querySelector('#animation-help');
const elStep3Button = document.querySelector('#step-3-button');

const flipping = new Flipping();

const { Machine } = xstate;

const insuranceMachine = Machine({
  initial: elApp.dataset.state || 'step-1',
  states: {
    'step-1': {
      on: {
        NEXT: 'step-2'

      } },


    'step-2': {
      on: {
        NEXT: 'step-3' } },


    'step-3': {
      on: {
        NEXT: 'step-4' } },

    'step-4': {
      on: {

        SUBMIT: 'finished' } },


    finished: {} } });



let currentState = insuranceMachine.initialState;

function setStateAttributes(state) {
  // change data-state attribute
  elApp.dataset.state = state;

  // remove any active data-attributes
  document.querySelectorAll(`[data-active]`).forEach(el => {
    delete el.dataset.active;
  });

  // add active data-attributes to proper elements
  document.querySelectorAll(`
    [data-show~="${state}"],
    [data-hide]:not([data-hide~="${state}"])`).
  forEach(el => {
    el.dataset.active = true;
  });
}

function send(event) {
  currentState = insuranceMachine.
  transition(currentState, event);

  setStateAttributes(currentState.value);
}

setStateAttributes(currentState.value);

elNextButtons.forEach(elButton => elButton.addEventListener('click', () => {
  send('NEXT');
}));

elSubmitButton.addEventListener('click', () => {
  send('SUBMIT');
});

// -------------
elAnimationHelp.addEventListener('change', flipping.wrap(e => {
  if (e.target.checked) {
    elStep3Button.dataset.clickable = true;
  } else {
    delete elStep3Button.dataset.clickable;
  }
}));
</script>
   

 
  </body>

  <!-- end::Body -->
</html>

<?php
}}

}
else{

  
   ?>
   <meta http-equiv="refresh" content="../scanner.php?id=$cabinid">
   
   <?php
    exit;
}

?>