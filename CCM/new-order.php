<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
.fi-page.active {
  z-index: 2;
  display: flex;
}

.page-1 .fi-hour.earlier .fi-hour-current, .page-1 .fi-hour.earlier .fi-hour-past, .page-1 .fi-hour.later .fi-hour-current, .page-1 .fi-hour.later .fi-hour-past, .fi-page.inactive .fi-header > *, .fi-page.inactive .fi-footer > .fi-button > *, .fi-page.inactive .fi-content.backdrop:before, .page-1.inactive .fi-week, .page-1.inactive .fi-content, .page-3.active .fi-content:before, .page-3.inactive .fi-records, .page-4.inactive .fi-content > * {
  -webkit-animation-duration: 0.25s;
          animation-duration: 0.25s;
  animation-easing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}

.fi-popover.active, .fi-page.active .fi-header > *, .fi-page.active .fi-content.backdrop:before, .page-2.active .fi-footer > .fi-button > *, .page-2.active .fi-content .fi-time, .page-3.active .fi-footer > .fi-button > *, .page-3.active .fi-records, .page-4.active .fi-footer > .fi-button > *, .page-4.active .fi-content > *, .page-5.active .fi-info, .page-5.active .fi-iphone, .page-5.active .fi-iphone-notification, .page-5.active .fi-footer > .fi-button {
  -webkit-animation-duration: 0.6s;
          animation-duration: 0.6s;
  animation-easing-function: cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}

.fi-button, .fi-button:before, .fi-button:after, .fi-record > label, .fi-record > label:before, .fi-record > label:after, .fi-weekday, .fi-weekday:before, .fi-weekday:after, .meta a {
  transition-property: all;
  transition-duration: 0.25s;
}

.fi-popover {
  -webkit-transform-origin: top center;
          transform-origin: top center;
}
.fi-popover.active {
  display: block;
  -webkit-animation-name: popover-active;
          animation-name: popover-active;
}

@-webkit-keyframes popover-active {
  from {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

@keyframes popover-active {
  from {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  to {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
.page-1 .fi-hour.earlier .fi-hour-current {
  -webkit-animation-name: hour-earlier-active;
          animation-name: hour-earlier-active;
}
.page-1 .fi-hour.earlier .fi-hour-past {
  -webkit-animation-name: hour-earlier-inactive;
          animation-name: hour-earlier-inactive;
}
.page-1 .fi-hour.later .fi-hour-current {
  -webkit-animation-name: hour-later-active;
          animation-name: hour-later-active;
}
.page-1 .fi-hour.later .fi-hour-past {
  -webkit-animation-name: hour-later-inactive;
          animation-name: hour-later-inactive;
}

@-webkit-keyframes hour-earlier-active {
  from {
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    opacity: 0;
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
}

@keyframes hour-earlier-active {
  from {
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    opacity: 0;
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
}
@-webkit-keyframes hour-earlier-inactive {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
  to {
    -webkit-transform: translateY(50%);
            transform: translateY(50%);
    opacity: 0;
  }
}
@keyframes hour-earlier-inactive {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
  to {
    -webkit-transform: translateY(50%);
            transform: translateY(50%);
    opacity: 0;
  }
}
@-webkit-keyframes hour-later-active {
  from {
    -webkit-transform: translateY(50%);
            transform: translateY(50%);
    opacity: 0;
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
}
@keyframes hour-later-active {
  from {
    -webkit-transform: translateY(50%);
            transform: translateY(50%);
    opacity: 0;
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
}
@-webkit-keyframes hour-later-inactive {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
  to {
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    opacity: 0;
  }
}
@keyframes hour-later-inactive {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
  to {
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    opacity: 0;
  }
}
.fi-page.active .fi-header > * {
  -webkit-animation-name: shiftUpDown-active;
          animation-name: shiftUpDown-active;
}
.fi-page.active .fi-content.backdrop:before {
  -webkit-animation-name: slideUpDown-active;
          animation-name: slideUpDown-active;
}

.fi-page.inactive .fi-header > * {
  -webkit-animation-name: fade-inactive;
          animation-name: fade-inactive;
}
.fi-page.inactive .fi-footer > .fi-button > * {
  -webkit-animation-name: shiftUpDown-inactive;
          animation-name: shiftUpDown-inactive;
}
.fi-page.inactive .fi-content.backdrop:before {
  -webkit-animation-name: slideUpDown-inactive;
          animation-name: slideUpDown-inactive;
}

.page-1.inactive .fi-week {
  -webkit-animation-name: fade-inactive;
          animation-name: fade-inactive;
}
.page-1.inactive .fi-content {
  -webkit-animation-name: fade-inactive;
          animation-name: fade-inactive;
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}

.page-2.active .fi-footer > .fi-button > * {
  -webkit-animation-name: shiftUpDown-active;
          animation-name: shiftUpDown-active;
  -webkit-animation-delay: 0.25s;
          animation-delay: 0.25s;
}
.page-2.active .fi-content .fi-time {
  -webkit-animation-name: fade-active;
          animation-name: fade-active;
}

.page-3.active .fi-footer > .fi-button > * {
  -webkit-animation-name: shiftUpDown-active;
          animation-name: shiftUpDown-active;
  -webkit-animation-delay: 0.25s;
          animation-delay: 0.25s;
}
.page-3.active .fi-content:before {
  -webkit-animation-name: slideUp-inactive;
          animation-name: slideUp-inactive;
}
.page-3.active .fi-records {
  -webkit-animation-name: shiftUpDown-active;
          animation-name: shiftUpDown-active;
}

.page-3.inactive .fi-records {
  -webkit-animation-name: fade-inactive;
          animation-name: fade-inactive;
}

.page-4.active .fi-footer > .fi-button > * {
  -webkit-animation-name: shiftUpDown-active;
          animation-name: shiftUpDown-active;
  -webkit-animation-delay: 0.25s;
          animation-delay: 0.25s;
}
.page-4.active .fi-content > * {
  -webkit-animation-name: fade-active;
          animation-name: fade-active;
}
.page-4.active .fi-loading-dot {
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-name: pulse;
          animation-name: pulse;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
}
.page-4.active .fi-loading-dot:nth-child(1) {
  -webkit-animation-delay: 0.25s;
          animation-delay: 0.25s;
}
.page-4.active .fi-loading-dot:nth-child(2) {
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}
.page-4.active .fi-loading-dot:nth-child(3) {
  -webkit-animation-delay: 0.75s;
          animation-delay: 0.75s;
}
.page-4.active .fi-loading-dot:nth-child(4) {
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}

.page-4.inactive .fi-content > * {
  -webkit-animation-name: fade-inactive;
          animation-name: fade-inactive;
}

.page-5.active .fi-info {
  -webkit-animation-name: shiftUpDown-active;
          animation-name: shiftUpDown-active;
}
.page-5.active .fi-iphone {
  -webkit-animation-name: slideUpDown-active;
          animation-name: slideUpDown-active;
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}
.page-5.active .fi-iphone-notification {
  -webkit-animation-name: slideDownUp-active;
          animation-name: slideDownUp-active;
  -webkit-animation-delay: 1.2s;
          animation-delay: 1.2s;
}
.page-5.active .fi-footer > .fi-button {
  -webkit-animation-name: shiftUpDown-active;
          animation-name: shiftUpDown-active;
}

.page-5.inactive {
  display: none;
}

@-webkit-keyframes fade-active {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes fade-active {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@-webkit-keyframes fade-inactive {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@keyframes fade-inactive {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@-webkit-keyframes shiftUpDown-active {
  from {
    -webkit-transform: translateY(25%);
            transform: translateY(25%);
    opacity: 0;
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
}
@keyframes shiftUpDown-active {
  from {
    -webkit-transform: translateY(25%);
            transform: translateY(25%);
    opacity: 0;
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
}
@-webkit-keyframes shiftUpDown-inactive {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
  to {
    -webkit-transform: translateY(25%);
            transform: translateY(25%);
    opacity: 0;
  }
}
@keyframes shiftUpDown-inactive {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
  to {
    -webkit-transform: translateY(25%);
            transform: translateY(25%);
    opacity: 0;
  }
}
@-webkit-keyframes slideUpDown-active {
  from {
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
@keyframes slideUpDown-active {
  from {
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
@-webkit-keyframes slideUpDown-inactive {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  to {
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
}
@keyframes slideUpDown-inactive {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  to {
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
}
@-webkit-keyframes slideDownUp-active {
  from {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
@keyframes slideDownUp-active {
  from {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  to {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
@-webkit-keyframes slideDownUp-inactive {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  to {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
}
@keyframes slideDownUp-inactive {
  from {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  to {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
}
@-webkit-keyframes pulse {
  0%, 50% {
    background-color: #227FBB;
  }
  25% {
    background-color: white;
  }
}
@keyframes pulse {
  0%, 50% {
    background-color: #227FBB;
  }
  25% {
    background-color: white;
  }
}
.fi-button {
  display: block;
  text-align: center;
  -webkit-appearance: none;
  background: none;
  border: none;
  font-size: 1rem;
}
.fi-button, .fi-button:focus {
  outline: none;
}
.fi-button.form {
  background: linear-gradient(to bottom, #4BA9D7, #459FCB);
  text-transform: uppercase;
  font-weight: bold;
  color: white;
  padding: 1rem 0;
  text-align: center;
  margin: 0 auto;
  overflow: hidden;
  width: 15rem;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  font-size: 85%;
}
.fi-button.form:before {
  content: '';
  position: absolute;
  width: 17rem;
  height: 17rem;
  border-radius: 50%;
  background-color: #2F3C43;
  z-index: 0;
  top: calc(100% - 8.5rem);
  left: calc(50% - 8.5rem);
  -webkit-transform: scale(0);
          transform: scale(0);
}
.active.fi-button.form:before {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.fi-button.circle {
  width: 2rem;
  height: 2rem;
  border: 1px solid #ccc;
  border-radius: 50%;
  color: #ccc;
  font-size: 1.5rem;
}
.fi-button.circle > .fa {
  vertical-align: top;
}
.fi-page.active .fi-button.circle:hover {
  background-color: #ccc;
  color: white;
}
.fi-footer > .fi-button {
  color: white;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  flex-grow: 1;
  background-color: transparent;
}
.fi-footer > .fi-button:not(.content):hover {
  background-color: rgba(255, 255, 255, 0.4);
}
.fi-page.inactive .fi-footer > .fi-button:hover {
  background-color: transparent;
}
.fi-footer > .content.fi-button {
  cursor: default;
}
.fi-button + .fi-button {
  border-left: 1px solid #75C4EC;
}

.fi-weekday.active:after {
  content: '';
  width: 0;
  height: 0;
  position: absolute;
}
.fi-weekday.active:after {
  top: 100%;
  left: calc(50% - 1rem);
  border-left: 1rem solid transparent;
  border-right: 1rem solid transparent;
  border-top: 1rem solid #2F3C43;
}
.fi-popover-container {
  margin: 0 auto;
  width: 30rem;
  max-width: 100%;
  padding: 0 1rem;
}
.fi-popover-container, .fi-popover-container *, .fi-popover-container *:before, .fi-popover-container *:after {
  display: block;
  position: relative;
  box-sizing: border-box;
}

.fi-popover {
  position: absolute;
  display: block;
  background: #fff;
  width: 30rem;
  max-width: calc(100% - 2rem);
  height: 450px;
  box-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);
  margin: 0.5rem auto;
}
.fi-popover, .fi-popover > .fi-page {
  border-radius: 0.5rem;
}
.fi-popover:after {
  content: '';
  position: absolute;
  display: block;
  width: 1.414rem;
  height: 1.414rem;
  left: calc(50% - 1.414rem/2);
  bottom: calc(100% - 1.414rem/2);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  z-index: 0;
  background-color: white;
}

.fi-header {
  display: flex;
  align-items: center;
  justify-content: center;
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
  overflow: hidden;
  background-color: white;
  z-index: 2;
  text-align: center;
}

.fi-footer {
  border-bottom-left-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
  overflow: hidden;
  z-index: 2;
}
.page-1 > .fi-footer {
  background-color: #4BA9D7;
}

.fi-week {
  display: flex;
  flex-direction: row;
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
}

.fi-weekday + .fi-weekday {
  border-left: 1px solid #ccc;
}

.fi-time {
  flex-grow: 1;
  display: flex;
  flex-direction: row;
}
.fi-time > .fi-hour, .fi-time > .fi-minute {
  flex-grow: 1;
  font-size: 800%;
}
@media (max-width: 30rem) {
  .fi-time > .fi-hour, .fi-time > .fi-minute {
    font-size: 500%;
  }
}
.fi-time > .fi-hour {
  font-weight: bold;
  text-align: right;
}
.fi-time > .fi-hour > .fi-hour-past {
  position: absolute;
  top: 0;
  right: 0;
}

.fi-records {
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  z-index: 0;
  border: 1px solid #ccc;
  border-radius: 0.5rem;
  overflow: hidden;
}

.fi-record {
  flex-basis: 33.3333333333%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.fi-record:nth-child(3n+2), .fi-record:nth-child(3n+2) + .fi-record {
  border-left: 1px solid #ccc;
}
.fi-record:nth-child(n+4) {
  border-top: 1px solid #ccc;
}
.fi-record > label {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  overflow: hidden;
  color: #b9b9b9;
  text-align: center;
  padding: 0.5rem;
}
.fi-record > label > .fa {
  font-size: 300%;
}
.fi-record > label:after {
  content: '';
  position: absolute;
  width: 1.25rem;
  height: 1.25rem;
  display: block;
  top: 0.5rem;
  right: 0.5rem;
  background-color: #f6f6f8;
  color: #96C253;
  border-radius: 50%;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.2);
  line-height: 1.25rem;
  text-align: center;
}
.fi-record > label:before {
  -webkit-transform-origin: bottom right;
          transform-origin: bottom right;
  content: '';
  position: absolute;
  width: 150%;
  height: 150%;
  border-radius: 50%;
  background-color: #2F3C43;
  z-index: 0;
  bottom: -25%;
  right: -25%;
  -webkit-transform: scale(0);
          transform: scale(0);
}
.fi-record > label:hover {
  background-color: #F4F4F4;
}
.fi-record input[type="checkbox"] {
  position: absolute;
  opacity: 0;
}
.fi-record input[type="checkbox"]:checked + label {
  color: white;
}
.fi-record input[type="checkbox"]:checked + label:after {
  content: '\2713';
}
.fi-record input[type="checkbox"]:checked + label:before {
  -webkit-transform: scale(1);
          transform: scale(1);
}

.fi-content {
  display: flex;
  overflow: hidden;
}
.fi-content:before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #4BA9D7;
  display: block;
  top: 0;
  left: 0;
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}

.fi-transfer {
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
}

.fi-avatar {
  height: 120px;
  width: 120px;
  border: 0.25rem solid white;
  border-radius: 50%;
  overflow: hidden;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.4);
}
.fi-avatar > img {
  width: 100%;
  height: 100%;
}

.fi-loading {
  width: 5rem;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
}

.fi-loading-dot {
  height: 0.5rem;
  width: 0.5rem;
  border-radius: 50%;
  background-color: #227FBB;
}

.fi-info {
  color: gray;
}

.fi-iphone {
  height: 250px;
  width: 350px;
  background-color: white;
  border: 0.5rem solid #e5e5e5;
  border-top-left-radius: 4rem;
  border-top-right-radius: 4rem;
  border-bottom-width: 0;
}
@media (max-width: 30rem) {
  .fi-iphone {
    width: 300px;
  }
}
.fi-iphone:before, .fi-iphone:after {
  content: '';
  position: absolute;
  display: block;
  background-color: #e5e5e5;
}
.fi-iphone:before {
  width: 1rem;
  height: 1rem;
  border-radius: 50%;
  top: 1.75rem;
  left: calc(50% - 2.5rem - 3rem);
}
.fi-iphone:after {
  width: 5rem;
  height: 0.5rem;
  left: calc(50% - 2.5rem);
  top: 2rem;
  border-radius: 1rem;
}

.fi-iphone-screen {
  position: absolute;
  bottom: 0;
  width: 90%;
  height: 65%;
  left: 5%;
  background: #75C4EC;
  overflow: hidden;
}

.fi-iphone-notification {
  background-color: #0B1429;
  color: white;
  padding: 1rem;
}
.fi-iphone-notification .subtext {
  opacity: 0.4;
}
.fi-iphone-notification .fa {
  margin-right: 1rem;
  color: white;
  background-color: red;
  padding: 0.25rem;
  border-radius: 3px;
}
.fi-iphone-notification .fa, .fi-iphone-notification .fa + div {
  float: left;
  max-width: calc(100% - 3rem);
}
.fi-iphone-notification h3 {
  margin: 0;
}
.fi-iphone-notification h3 > .subtext {
  display: inline-block;
  text-transform: none;
}
.fi-iphone-notification:before, .fi-iphone-notification:after {
  content: ' ';
  display: table;
}
.fi-iphone-notification:after {
  clear: both;
}

.subtext {
  color: #75C4EC;
  text-transform: uppercase;
  font-size: 85%;
  font-weight: bold;
}

.fi-page {
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
  position: absolute;
  top: 0;
  left: 0;
}
.fi-page > .fi-footer {
  display: flex;
  flex-direction: row;
  height: 4rem;
}
.fi-page > .fi-content {
  flex-grow: 1;
}
.fi-page.page-1 {
  background: white;
}
.fi-page.page-1 > .fi-header {
  flex-direction: row;
  text-transform: uppercase;
  font-weight: bold;
}
.fi-page.page-1 > .fi-header > .fi-button {
  width: 2rem;
}
.fi-page.page-1 > .fi-header > .fi-month {
  flex-grow: 1;
  text-align: center;
  padding: 0.5rem;
}
.fi-page.page-1 .fi-weekday {
  flex: 1;
  text-align: center;
  padding: 1rem 0;
}
.fi-page.page-1 .fi-weekday:hover {
  background-color: rgba(47, 60, 67, 0.2);
}
.fi-page.page-1 .fi-weekday.active {
  background-color: #2F3C43;
  color: white;
}
.fi-page.page-1 .fi-date {
  font-size: 200%;
}
.fi-page.page-1 .fi-day {
  font-size: 85%;
  text-transform: uppercase;
  font-weight: bold;
}
.fi-page.page-1 .fi-content {
  flex-direction: row;
  align-items: center;
  padding: 1rem;
  flex-wrap: wrap;
  align-content: center;
}
@media (max-width: 30rem) {
  .fi-page.page-1 .fi-content {
    justify-content: center;
  }
}
.fi-page.page-1 .fi-content > .fi-button {
  width: 2rem;
}
.fi-page.page-2 > .fi-header {
  height: 78px;
  align-items: center;
  justify-content: center;
}
.fi-page.page-2 > .fi-content {
  flex-direction: column;
  align-items: center;
  color: white;
}
.fi-page.page-2 > .fi-content:before {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.fi-page.page-2 > .fi-content > .fi-date {
  height: 2rem;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
}
.fi-page.page-2 > .fi-content > .fi-confirmation {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.fi-page.page-2 > .fi-content .fi-time {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  flex-grow: 0;
}
.fi-page.page-3 > .fi-content {
  padding: 1rem;
}
.fi-page.page-3 > .fi-content:before {
  z-index: 2;
}
.fi-page.page-4 > .fi-content {
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  color: white;
}
.fi-page.page-4 > .fi-content:before {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.fi-page.page-5 > .fi-content {
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}
.fi-page.page-5 > .fi-footer > .fi-button {
  flex-basis: 50%;
}

.inactive {
  z-index: -1;
}

html, body {
  font-family: Lato, sans-serif;
  font-weight: 300;
  line-height: 1;
  background-color: #FEFEFE;
  width: 100%;
  height: 100%;
  margin: 0;
  box-sizing: border-box;
}

body {
  padding: 10% 1rem;
  background: #f9f9f9;
  max-height: 100%;
  overflow-y: auto;
  max-width: 100%;
}

html {
  max-height: 100%;
  overflow: hidden;
}

.meta {
  text-align: center;
  color: #b6b6b6;
  line-height: 1.4;
}
.meta a {
  color: #b6b6b6;
}
.meta a:hover {
  color: #4BA9D7;
}

</style>
</head>
<body>
  <div class="fi-popover-container">    
    <button class="fi-button form" onclick="showPopover()"><span>Make Appointment</span></button>
    <div class="fi-popover inactive">
      <!-- Page 1 -->
      <div class="fi-page page-1 active">
        <header class="fi-header">
          <button class="fi-button previous"></button>
          <div class="fi-month">November</div>
          <button class="fi-button next"></button>
        </header>
        <div class="fi-week">
          <div class="fi-weekday active">
            <div class="fi-date">5</div>
            <div class="fi-day">Mon</div>
          </div>
          <div class="fi-weekday">
            <div class="fi-date">6</div>
            <div class="fi-day">Tues</div>
          </div>
          <div class="fi-weekday">
            <div class="fi-date">7</div>
            <div class="fi-day">Wed</div>
          </div>
          <div class="fi-weekday">
            <div class="fi-date">8</div>
            <div class="fi-day">Thurs</div>
          </div>
          <div class="fi-weekday">
            <div class="fi-date">9</div>
            <div class="fi-day">Fri</div>
          </div>
        </div>
        <div class="fi-content">
          <button class="fi-button circle" onclick="changeHour(-1)"><i class="fa fa-angle-left"></i></button>
          <div class="fi-time">
            <div class="fi-hour">
              <div class="fi-hour-current">10</div>
              <div class="fi-hour-past"></div>
            </div>
            <div class="fi-minute">:30</div>
          </div>
          <button class="fi-button circle" onclick="changeHour(1)"><i class="fa fa-angle-right"></i></button>
        </div>
        <footer class="fi-footer">
          <button class="fi-button" onclick="nextPage()">
            <div>Next Step</div>
          </button>
        </footer>
      </div>

      <!-- Page 2 -->
      <div class="fi-page page-2 inactive">
        <header class="fi-header">
          <h3>Great, your appointment with Goat is scheduled.</h3>
        </header>
        <div class="fi-content backdrop">
          <div class="fi-date">
            <strong>November, Friday 15th</strong>
          </div>
          <div class="fi-confirmation">          
            <div class="fi-time">
              <div class="fi-hour">
                <div class="fi-hour-current">09</div>
              </div>
              <div class="fi-minute">:30</div>
            </div>
          </div>
        </div>
        <footer class="fi-footer">
          <button class="fi-button content">
            <div>Goat Mealcookies</div>
            <div class="subtext">Veterinarian</div>
          </button>
        </footer>
      </div>

      <!-- Page 3 -->
      <div class="fi-page page-3 inactive">
        <header class="fi-header">
          <h3>Share your records with Goat?</h3>
        </header>
        <div class="fi-content">            
          <ul class="fi-records">
            <li class="fi-record">
              <input type="checkbox" name="record" id="medical_history">
              <label for="medical_history">
                <i class="fa fa-clipboard"></i>
                <div>Medical History</div>
              </label>
            </li>
            <li class="fi-record">
              <input type="checkbox" name="record" id="shot_records">
              <label for="shot_records">
                <i class="fa fa-medkit"></i>
                <div>Shot Records</div>
              </label>
            </li>
            <li class="fi-record">
              <input type="checkbox" name="record" id="surgery_records">
              <label for="surgery_records">
                <i class="fa fa-user-md"></i>
                <div>Surgery Records</div>
              </label>
            </li>
            <li class="fi-record">
              <input type="checkbox" name="record" id="x_rays">
              <label for="x_rays">
                <i class="fa fa-user-times"></i>
                <div>X-Rays</div>
              </label>
            </li>
            <li class="fi-record">
              <input type="checkbox" name="record" id="medications">
              <label for="medications">
                <i class="fa fa-flask"></i>
                <div>Medications</div>
              </label>
            </li>
            <li class="fi-record">
              <input type="checkbox" name="record" id="allergies">
              <label for="allergies">
                <i class="fa fa-leaf"></i>
                <div>Allergies</div>
              </label>
            </li>
          </ul>
        </div>
        <footer class="fi-footer">
          <button class="fi-button" onclick="nextPage()">
            <div>Next Step</div>
          </button>
        </footer>
      </div>

      <!-- Page 4 -->
      <div class="fi-page page-4 inactive">
        <header class="fi-header">
          <h3>Share your records with Goat?</h3>
        </header>
        <div class="fi-content backdrop">            
          <div class="fi-date">
            <strong>November, Friday 15th</strong>
          </div>
          <div class="fi-transfer">
            <div class="fi-avatar">
              <img src="https://i.imgur.com/xg1mXL7.jpg" alt="">
            </div>
            <div class="fi-loading">
              <div class="fi-loading-dot"></div>
              <div class="fi-loading-dot"></div>
              <div class="fi-loading-dot"></div>
              <div class="fi-loading-dot"></div>
            </div>
            <div class="fi-avatar">
              <img src="https://i.imgur.com/7RDEUTW.png" alt="">
            </div>
          </div>
        </div>
        <footer class="fi-footer">
          <button class="fi-button content">
            <div>Please wait a few seconds while we <br>transfer your records to Goat.</div>
          </button>
        </footer>
      </div>

      <!-- Page 5 -->
      <div class="fi-page page-5 inactive">
        <header class="fi-header">
          <h1>You're all set.</h1>
        </header>
        <div class="fi-content">
          <div class="fi-info">
            Add your appointment to your calendar.
          </div>
          <div class="fi-iphone">
            <div class="fi-iphone-screen">
              <div class="fi-iphone-notification">
                <i class="fa fa-heartbeat"></i>
                <div>
                  <h3>Goat Health <span class="subtext">now</span></h3>
                  <div>Your appointment with Goat</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="fi-footer" onclick="closePopover()">
          <button class="fi-button">
            <div>Add to Calendar</div>
          </button>
          <button class="fi-button">
            <div>Not Now</div>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="meta">
    <h1>F-I Motion Design Realization</h1>
    <p>
      Built by David Khourshid - <a href="https://twitter.com/davidkpiano" target="_blank">@davidkpiano</a>
    </p>
    <p>
      Based on <a href="http://casestudies.f-i.com/healthcare/" target="_blank">Fantasy Interactive's Digital Healthcare Case Study</a>
    </p>
    <p>
      Click the buttons to see the effect. <br>
      JavaScript used solely to trigger animations. <br>
      Works best in Chrome. Works decently in Firefox. Uses Flexbox.
    </p>
  </div>
  <script type="text/javascript">
      var page = 1;
  var currentHour = 10;
  var previousHour = null;
  var minute = 30;
  var popoverVisible = false;

  function showPopover() {
    if (popoverVisible) {
      return null;
    }
    
    $('.fi-popover, .page-1')
      .removeClass('inactive')
      .addClass('active');

    $('.fi-button.form')
      .addClass('active');
    
    popoverVisible = true;
  }

  function closePopover() {
    $('.fi-popover')
      .removeClass('active')
      .addClass('inactive');

    $('.fi-button.form')
      .removeClass('active');

    $('.fi-page').removeClass('active').addClass('inactive');

    page = 1;
    
    popoverVisible = false;
  }

  function nextPage() {
    $('.page-' + page++).removeClass('active').addClass('inactive');
    $('.page-' + page).removeClass('inactive').addClass('active');

    if (!(page % 2)) {
      setTimeout(nextPage, 3000);
    }
  }

  function changeHour(amount) {
    pastHour = currentHour;
    currentHour = currentHour || 24;
    currentHour += amount;
    currentHour %= 24;

    $currentHour = $('<div/>')
      .addClass('fi-hour-current')
      .html((currentHour < 10 ? '0' : '') + currentHour);

    $pastHour = $('<div/>')
      .addClass('fi-hour-past')
      .html((pastHour < 10 ? '0' : '') + pastHour);

    $('.page-1 .fi-hour').html('')
      .append($currentHour)
      .append($pastHour)
      .removeClass('earlier later')
      .addClass(pastHour < currentHour ? 'later' : 'earlier');

    $('.page-2 .fi-hour-current').html((currentHour < 10 ? '0' : '') + currentHour);
  }

  changeHour(0);
  </script>
</body>
</html>