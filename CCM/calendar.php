<!DOCTYPE html>
<html>
<head>
  <title></title>
<script type="text/javascript" src=""></script>
<style type="text/css">
  @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600);
.cal-scene, .cal-button > *, .cal-title > .cal-heading, .cal-day {
  transition: all 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
}

[id="index"]:target ~ .cal-device .cal-scene.-calendar > .cal-month, [id="index"]:target ~ .cal-device .cal-scene.-calendar > .cal-header {
  -webkit-animation: fade-in 0.6s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1) both;
          animation: fade-in 0.6s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1) both;
}

@-webkit-keyframes fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
[id="oct-week-3"]:target ~ .cal-device [href="#oct-week-3"] {
  cursor: default;
}
[id="oct-week-3"]:target ~ .cal-device .cal-app {

}

[id="oct-week-4"]:target ~ .cal-device .cal-month {
  -webkit-transform: translateY(-7.7142857143vh);
          transform: translateY(-7.7142857143vh);
}
[id="oct-week-4"]:target ~ .cal-device .cal-month.-october > .cal-header {
  -webkit-transform: translateY(7.7142857143vh) translateX(30.8571428571vh);
          transform: translateY(7.7142857143vh) translateX(30.8571428571vh);
}
[id="oct-week-4"]:target ~ .cal-device .cal-scene.-calendar:before {
  box-shadow:  #97facd;
}
[id="oct-week-4"]:target ~ .cal-device .cal-app {

}
[id="oct-week-4"]:target ~ .cal-device [href="#oct-week-4"] {
  z-index: -1;
}

[id="nov-week-1"]:target ~ .cal-device .cal-month {
  -webkit-transform: translateY(-15.4285714286vh);
          transform: translateY(-15.4285714286vh);
}
[id="nov-week-1"]:target ~ .cal-device .cal-month.-october > .cal-header {
  -webkit-transform: translateY(7.7142857143vh) translateX(30.8571428571vh);
          transform: translateY(7.7142857143vh) translateX(30.8571428571vh);
  opacity: 0;
}
[id="nov-week-1"]:target ~ .cal-device .cal-app {

}
[id="nov-week-1"]:target ~ .cal-device .cal-scene.-calendar:before {
  box-shadow:  #97facd;
}

[id="nov-week-2"]:target ~ .cal-device .cal-month {
  -webkit-transform: translateY(-23.1428571429vh);
          transform: translateY(-23.1428571429vh);
}
[id="nov-week-2"]:target ~ .cal-device .cal-month.-october > .cal-header {
  opacity: 0;
}
[id="nov-week-2"]:target ~ .cal-device .cal-scene.-calendar:before {
  box-shadow:  #97facd;
}
[id="nov-week-2"]:target ~ .cal-device .cal-app {
  background: linear-gradient(#E0536B, #D6306D, #A32C68, #722A65, #422662, #12255D, #275B75, #3C918B, #52C6A2, #66F8B6);
}

[id="schedule"]:target ~ .cal-device .cal-bar .-schedule {
  opacity: 1;
}
[id="schedule"]:target ~ .cal-device .cal-bar .-calendar {
  opacity: 0;
}
[id="schedule"]:target ~ .cal-device .cal-scene.-schedule {
  opacity: 1;
  z-index: 2;
}
[id="schedule"]:target ~ .cal-device .cal-time > *, [id="schedule"]:target ~ .cal-device .cal-task > * {
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
[id="schedule"]:target ~ .cal-device .cal-item:nth-child(1) .cal-time > *, [id="schedule"]:target ~ .cal-device .cal-item:nth-child(1) .cal-task > * {
  transition-delay: 0s;
}
[id="schedule"]:target ~ .cal-device .cal-item:nth-child(2) .cal-time > *, [id="schedule"]:target ~ .cal-device .cal-item:nth-child(2) .cal-task > * {
  transition-delay: 0.06s;
}
[id="schedule"]:target ~ .cal-device .cal-item:nth-child(3) .cal-time > *, [id="schedule"]:target ~ .cal-device .cal-item:nth-child(3) .cal-task > * {
  transition-delay: 0.12s;
}
[id="schedule"]:target ~ .cal-device .cal-item:nth-child(4) .cal-time > *, [id="schedule"]:target ~ .cal-device .cal-item:nth-child(4) .cal-task > * {
  transition-delay: 0.18s;
}
[id="schedule"]:target ~ .cal-device .cal-item:nth-child(5) .cal-time > *, [id="schedule"]:target ~ .cal-device .cal-item:nth-child(5) .cal-task > * {
  transition-delay: 0.24s;
}
[id="schedule"]:target ~ .cal-device .cal-item:nth-child(6) .cal-time > *, [id="schedule"]:target ~ .cal-device .cal-item:nth-child(6) .cal-task > * {
  transition-delay: 0.3s;
}
[id="schedule"]:target ~ .cal-device .cal-item:nth-child(7) .cal-time > *, [id="schedule"]:target ~ .cal-device .cal-item:nth-child(7) .cal-task > * {
  transition-delay: 0.36s;
}
[id="schedule"]:target ~ .cal-device .cal-scene.-calendar, [id="schedule"]:target ~ .cal-device .cal-scene.-calendar * {
  transition-delay: 0.6s;
}

.cal-device {
  width: 54vh;
  height: 96vh;
  background: white;
}
.cal-device > .cal-header {
  height: 11.5714285714vh;
  background: #303156;
}

.cal-app {
  height: 84.4285714286vh;
  width: 100%;

}

.cal-week {
  height: 7.7142857143vh;
  width: 100%;
  display: flex;
  flex-direction: row;
}

.cal-weekday {
  color: white;
  width: 7.7142857143vh;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1;
  font-weight: 600;
  font-size: 2.5714285714vh;
}

.fa {
  font-size: 2.5714285714vh;
}

.cal-scene {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  overflow: hidden;
}
.cal-scene.-calendar:before {
  content: '';
  display: block;
  height: 7.7142857143vh;
  width: 7.7142857143vh;
  position: absolute;
  top: -7.7142857143vh;
  left: 0;
  box-shadow: #97facd;
  transition: box-shadow 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
}
.cal-scene.-schedule {
  z-index: -1;
  opacity: 0;
}

[id="nov-week-1"]:target ~ .cal-device .cal-month.-november > .cal-header, [id="nov-week-2"]:target ~ .cal-device .cal-month.-november > .cal-header, .cal-device .cal-month.-october > .cal-header, .cal-device .cal-month.-december > .cal-header, .cal-device .cal-month.-january > .cal-header, .cal-month:first-child > .cal-header {
  -webkit-transform: translateX(30.8571428571vh);
          transform: translateX(30.8571428571vh);
}
[id="nov-week-1"]:target ~ .cal-device .cal-month.-november > .cal-header > .cal-link, [id="nov-week-2"]:target ~ .cal-device .cal-month.-november > .cal-header > .cal-link, .cal-device .cal-month.-october > .cal-header > .cal-link, .cal-device .cal-month.-december > .cal-header > .cal-link, .cal-device .cal-month.-january > .cal-header > .cal-link, .cal-month:first-child > .cal-header > .cal-link {
  background-color: rgba(0, 161, 219,0.4);
}
[id="nov-week-1"]:target ~ .cal-device .cal-month.-november > .cal-header > .cal-link > span, [id="nov-week-2"]:target ~ .cal-device .cal-month.-november > .cal-header > .cal-link > span, .cal-device .cal-month.-october > .cal-header > .cal-link > span, .cal-device .cal-month.-december > .cal-header > .cal-link > span, .cal-device .cal-month.-january > .cal-header > .cal-link > span, .cal-month:first-child > .cal-header > .cal-link > span {
  -webkit-transform: translateX(calc(-50% - 1.9285714286vh)) translateY(-50%);
          transform: translateX(calc(-50% - 1.9285714286vh)) translateY(-50%);
  color: white;
}
[id="nov-week-1"]:target ~ .cal-device .cal-month.-november > .cal-header > .cal-arrow, [id="nov-week-2"]:target ~ .cal-device .cal-month.-november > .cal-header > .cal-arrow, .cal-device .cal-month.-october > .cal-header > .cal-arrow, .cal-device .cal-month.-december > .cal-header > .cal-arrow, .cal-device .cal-month.-january > .cal-header > .cal-arrow, .cal-month:first-child > .cal-header > .cal-arrow {
  opacity: 1;
  pointer-events: inherit;
}
[id="nov-week-1"]:target ~ .cal-device .cal-month.-november .cal-day, [id="nov-week-2"]:target ~ .cal-device .cal-month.-november .cal-day, .cal-device .cal-month.-october .cal-day, .cal-device .cal-month.-december .cal-day, .cal-device .cal-month.-january .cal-day, .cal-month:first-child .cal-day {
  color: #303156;
}
[id="nov-week-1"]:target ~ .cal-device .-october.cal-month.-november .cal-arrow, [id="nov-week-2"]:target ~ .cal-device .-october.cal-month.-november .cal-arrow, .cal-device .-october.cal-month .cal-arrow, .-october.cal-month:first-child .cal-arrow {
  color: #EB8B6B;
}
[id="nov-week-1"]:target ~ .cal-device .-november.cal-month .cal-arrow, [id="nov-week-2"]:target ~ .cal-device .-november.cal-month .cal-arrow, .cal-device .-november.cal-month.-october .cal-arrow, .cal-device .-november.cal-month.-december .cal-arrow, .cal-device .-november.cal-month.-january .cal-arrow, .-november.cal-month:first-child .cal-arrow {
  color: #D6306D;
}
[id="nov-week-1"]:target ~ .cal-device .-december.cal-month.-november .cal-arrow, [id="nov-week-2"]:target ~ .cal-device .-december.cal-month.-november .cal-arrow, .cal-device .-december.cal-month .cal-arrow, .-december.cal-month:first-child .cal-arrow {
  color: #102152;
}
[id="nov-week-1"]:target ~ .cal-device .-january.cal-month.-november .cal-arrow, [id="nov-week-2"]:target ~ .cal-device .-january.cal-month.-november .cal-arrow, .cal-device .-january.cal-month .cal-arrow, .-january.cal-month:first-child .cal-arrow {
  color: #97FACD;
}

[id="nov-week-1"]:target ~ .cal-device .cal-month.-december > .cal-header, [id="nov-week-2"]:target ~ .cal-device .cal-month.-december > .cal-header, .cal-device .cal-month.-november > .cal-header {
  -webkit-transform: translateX(15.4285714286vh);
          transform: translateX(15.4285714286vh);
}
[id="nov-week-1"]:target ~ .cal-device .cal-month.-december .cal-link, [id="nov-week-2"]:target ~ .cal-device .cal-month.-december .cal-link, .cal-device .cal-month.-november .cal-link {
  background-color: #00A1db;
  color: white;
}
[id="nov-week-1"]:target ~ .cal-device .cal-month.-december .cal-link > span, [id="nov-week-2"]:target ~ .cal-device .cal-month.-december .cal-link > span, .cal-device .cal-month.-november .cal-link > span {
  -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
}
[id="nov-week-1"]:target ~ .cal-device .cal-month.-december .cal-arrow, [id="nov-week-2"]:target ~ .cal-device .cal-month.-december .cal-arrow, .cal-device .cal-month.-november .cal-arrow {
  opacity: 0;
  pointer-events: none;
}
[id="nov-week-1"]:target ~ .cal-device .cal-month.-december .cal-day, [id="nov-week-2"]:target ~ .cal-device .cal-month.-december .cal-day, .cal-device .cal-month.-november .cal-day {
  color: #00A1db;
}
[id="nov-week-1"]:target ~ .cal-device .-november.cal-month.-december .cal-link span, [id="nov-week-2"]:target ~ .cal-device .-november.cal-month.-december .cal-link span, .cal-device .-november.cal-month .cal-link span {
  color: #fff;
}
[id="nov-week-1"]:target ~ .cal-device .-december.cal-month .cal-link span, [id="nov-week-2"]:target ~ .cal-device .-december.cal-month .cal-link span, .cal-device .-december.cal-month.-november .cal-link span {
  color: #fff;
}

.cal-month {
  display: block;
  counter-reset: month;
  transition: -webkit-transform 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: transform 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: transform 0.6s cubic-bezier(0.645, 0.045, 0.355, 1), -webkit-transform 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
  z-index: 1;
}
.cal-month:first-child {
  margin-top: -7.7142857143vh;
}
.cal-month:first-child > .cal-header {
  top: 15.4285714286vh;
}
.cal-month:first-child ~ .cal-month {
  margin-top: -7.7142857143vh;
}
.cal-month > .cal-header {
  position: absolute;
  height: 7.7142857143vh;
  width: 23.1428571429vh;
  padding: 2.2040816327vh;
  z-index: 1;
  transition: all 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
}
.cal-month > .cal-header > .cal-link {
  display: block;
  height: 100%;
  width: 100%;
  font-size: 1.9285714286vh;
  text-decoration: none;
  color: gray;
  text-transform: uppercase;
  padding: 0.6428571429vh 5.1428571429vh;
  border-radius: 2.5714285714vh;
  background: white;
  transition: all 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
  font-weight: 600;
}
.cal-month > .cal-header > .cal-link > span {
  display: block;
  position: absolute;
  top: 48%;
  left: 50%;
  transition: all 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
}
.cal-month.-january {
  margin-top: 0 !important;
}

.cal-subheader {
  height: 3.8571428571vh;
  width: 100%;
}

.cal-bar {
  height: 7.7142857143vh;
  display: flex;
  flex-direction: row;
  align-items: center;
}
.cal-bar > .cal-title {
  flex-grow: 1;
  height: 100%;
}
.cal-bar .-schedule {
  opacity: 0;
}

.cal-button {
  width: 7.7142857143vh;
  height: 7.7142857143vh;
}
.cal-button > * {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  text-decoration: none;
  font-size: 3.0857142857vh;
}

.cal-title > .cal-heading {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 3.0857142857vh;
}

.cal-arrow {
  position: absolute;
  height: 7.7142857143vh;
  width: 7.7142857143vh;
  background: white;
  top: 0;
  right: 0;
  padding: 1.2857142857vh;
  background-clip: content-box;
  border-radius: 50%;
  opacity: 0;
  pointer-events: none;
  transition: all 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  color: gray;
}
.cal-arrow .fa-chevron-up {
  top: -1px;
}

.cal-day {
  counter-increment: month;
  width: 7.7142857143vh;
  height: 7.7142857143vh;
  display: block;
  float: left;
  text-decoration: none;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 2.5714285714vh;
}
.cal-day[href="#schedule"]:before {
  background: rgba(0, 161, 219,0.4);
}
.cal-day:before {
  content: counter(month);
  display: block;
  height: 75%;
  width: 75%;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}

.cal-item {
  height: 7.7142857143vh;
  width: 100%;
  display: flex;
  flex-direction: row;
}
.cal-item.-long {
  height: 15.4285714286vh;
}
.cal-item:nth-child(1) > .cal-time {
  background-color: #fa739d;
}
.cal-item:nth-child(1) > .cal-task {
  background-color: white;
}
.cal-item:nth-child(2) > .cal-time {
  background-color: #f26993;
}
.cal-item:nth-child(2) > .cal-task {
  background-color: #fcf5f7;
}
.cal-item:nth-child(3) > .cal-time {
  background-color: #eb5e8a;
}
.cal-item:nth-child(3) > .cal-task {
  background-color: #f9ecf0;
}
.cal-item:nth-child(4) > .cal-time {
  background-color: #e35480;
}
.cal-item:nth-child(4) > .cal-task {
  background-color: #f6e2e8;
}
.cal-item:nth-child(5) > .cal-time {
  background-color: #dc4977;
}
.cal-item:nth-child(5) > .cal-task {
  background-color: #f4d8e1;
}
.cal-item:nth-child(6) > .cal-time {
  background-color: #d43f6d;
}
.cal-item:nth-child(6) > .cal-task {
  background-color: #f1ced9;
}
.cal-item:nth-child(7) > .cal-time {
  background-color: #cc3463;
}
.cal-item:nth-child(7) > .cal-task {
  background-color: #eec5d1;
}
.cal-item:nth-child(8) > .cal-time {
  background-color: #c52a5a;
}
.cal-item:nth-child(8) > .cal-task {
  background-color: #ebbbca;
}

.cal-time {
  width: 15.4285714286vh;
  flex-basis: 15.4285714286vh;
  height: 100%;
  justify-content: center;
  line-height: 7.7142857143vh;
  align-items: center;
  display: flex;
  flex-direction: column;
  color: white;
}
.cal-time > * {
  transition: all 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
  -webkit-transform: translateX(-15.4285714286vh);
          transform: translateX(-15.4285714286vh);
  font-weight: 600;
  font-size: 2.5714285714vh;
}

.cal-task {
  flex-basis: 38.5714285714vh;
  height: 100%;
  background-color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 0 2.5714285714vh;
  font-size: 1.9285714286vh;
}
.cal-task > p {
  margin-top: 0;
  margin-bottom: 0;
  color: #12255E;
}
.cal-task > a {
  text-decoration: none;
  color: #EA80A2;
  font-weight: 600;
}
.cal-task > a > .fa {
  margin-right: 0.9642857143vh;
}
.cal-task > * {
  transition: all 0.6s cubic-bezier(0.645, 0.045, 0.355, 1);
  -webkit-transform: translateX(38.5714285714vh);
          transform: translateX(38.5714285714vh);
}

.meta {
  flex-basis: calc(80% - 54vh);
  font-size: 2.5714285714vh;
  font-weight: 300;
}
.meta p, .meta a {

}
.meta h1 {
  font-size: 9.2571428571vh;
  line-height: 9.2571428571vh;
  font-weight: 300;

}
.meta p {
  line-height: 1.4;
}
.meta a:hover {
  
}
@media (max-width: 750px) {
  .meta {
    display: none;
  }
}

body {
 

  font-family: Source Sans Pro, sans-serif;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
  overflow: hidden;
}
@media (max-width: 750px) {
  body {
    justify-content: center;
  }
}

html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  quotes: "«" "»";
}

*, *:before, *:after {
  box-sizing: border-box;
  position: relative;
}

.cal-month:before,
.cal-month:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */
}

.cal-month:after {
  clear: both;
}

</style>
</head>
<body>
<div class="route" id="index"></div>
<div class="route" id="oct-week-3"></div>
<div class="route" id="oct-week-4"></div>
<div class="route" id="nov-week-1"></div>
<div class="route" id="schedule"></div>
<main class="cal-device">
  <header class="cal-header">
    <div class="cal-subheader"></div>
    <div class="cal-bar">
      <div class="cal-button -left">
        <i class="fa fa-bars -calendar"></i>
        <a href="#index" class="fa fa-chevron-left -schedule"></a>
      </div>
      <div class="cal-title">
        <div class="cal-heading -calendar">Calendar</div>
        <div class="cal-heading -schedule">Wednesday, November 10</div>
      </div>
      <div class="cal-button -right">
        <i class="fa fa-search"></i>
      </div>
    </div>
  </header>
  <section class="cal-app">
    <header class="cal-week">
      <div class="cal-weekday">SUN</div>
      <div class="cal-weekday">MON</div>
      <div class="cal-weekday">TUE</div>
      <div class="cal-weekday">WED</div>
      <div class="cal-weekday">THU</div>
      <div class="cal-weekday">FRI</div>
      <div class="cal-weekday">SAT</div>
    </header>
    <div class="cal-scene -calendar">
      <div class="cal-month -october">
        <header class="cal-header">
          <a class="cal-link" href="#oct-week-1"><span>October</span></a>
          <a class="cal-arrow" href="#nov-week-1"><i class="fa fa-chevron-up"></i></a>
          <a class="cal-arrow" href="#oct-week-4"><i class="fa fa-chevron-up"></i></a>
        </header>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a href="#schedule"  class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
      </div>
      <div class="cal-month -november">
        <header class="cal-header">
          <a class="cal-link" href="#nov-week-1"><span>November</span></a>
          <a class="cal-arrow"><i class="fa fa-chevron-up"></i></a>
        </header>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a href="#schedule" class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a href="#schedule" class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a href="#schedule" class="cal-day"></a>
        <a href="#schedule" class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
      </div>
      <div class="cal-month -december">
        <header class="cal-header">
          <a class="cal-link"><span>December</span></a>
          <a class="cal-arrow" href="#nov-week-1"><i class="fa fa-chevron-down"></i></a>
          <a class="cal-arrow" href="#oct-week-3"><i class="fa fa-chevron-down"></i></a>
        </header>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a href="#schedule" class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a href="#schedule" class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
      </div>
      <div class="cal-month -january">
        <header class="cal-header">
          <div class="cal-link"><span>January</span></div>
          <a class="cal-arrow" href="#oct-week-4"><i class="fa fa-chevron-down"></i></a>
        </header>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
        <a class="cal-day"></a>
      </div>
    </div>
    <div class="cal-scene -schedule">
      <div class="cal-item">
        <div class="cal-time"><span>08:00</span></div>
        <div class="cal-task">
          <p>wake up</p>
        </div>
      </div>
      <div class="cal-item -long">
        <div class="cal-time"><span>12:15</span></div>
        <div class="cal-task">
          <p>meeting with the team, discussing the project requirements</p>
        </div>
      </div>
      <div class="cal-item">
        <div class="cal-time"><span>13:00</span></div>
        <div class="cal-task">
          <p>lunch with Peter</p>
          <a><i class="fa fa-map-marker"></i>cafe <q>Petit brasserie</q></a>
        </div>
      </div>
      <div class="cal-item">
        <div class="cal-time"><span>14:30</span></div>
        <div class="cal-task">
          <p>call with Johnathan and Stevie</p>
        </div>
      </div>
      <div class="cal-item -long">
        <div class="cal-time"><span>16:45</span></div>
        <div class="cal-task">
          <p>project presentation</p>
          <a><i class="fa fa-map-marker"></i>Head Office</a>
        </div>
      </div>
      <div class="cal-item">
        <div class="cal-time"><span>18:00</span></div>
        <div class="cal-task">
          <p>call with Johnathan and Stevie</p>
        </div>
      </div>
      <div class="cal-item -long">
        <div class="cal-time"><span>19:00</span></div>
        <div class="cal-task">
          <p>David's birthday party</p>
          <a><i class="fa fa-map-marker"></i>bar <q>Tailor's John</q></a>
        </div>
      </div>
      <div class="cal-item">
        <div class="cal-time"></div>
        <div class="cal-task"></div>
      </div>
    </div>
  </section>
</main>


</body>
</html>