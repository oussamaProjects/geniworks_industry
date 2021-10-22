<!DOCTYPE html>
<html>
<head>
  <title>New Cleaning Request - CCM - MyDADJE</title>
<script type="text/javascript" src="https://unpkg.com/xstate@4.0.0/dist/xstate.js"></script>
<script type="text/javascript" src="https://unpkg.com/flipping@1.1.0/dist/flipping.web.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<style type="text/css">


  @import url("https://fonts.googleapis.com/css?family=Raleway");
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
  font-family: Raleway, Helvetica, Arial, sans-serif;
  background-color: #f0f0f0;
}

#app {
  color: #303156;
  animation: fade-in .4s linear .3s both;
}
@keyframes fade-in {
  from {
    opacity: 0;
  }
}
/* ---------------------------------- */
.ui-form {
  margin-top: 100px;
  padding: 5%;
  display: grid;
  height: 60vh;
  grid-template-columns: auto 1fr;
  grid-template-rows: 1fr;
  justify-items: center;
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
  color: #CCC;
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
  color: white;
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
  border:1px solid #303156;
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
  left:50%;
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
</head>
<body>


<div id="app" data-state="step-1">
  <a href="index.php" class="ui-button" style="text-decoration: none; align-content: center;margin-left: 3%;" ><<</a>
  <form class="ui-form">
    
    <ul class="ui-steps">
      <li class="ui-step" data-show="step-1"><span>1</span></li>
      <li class="ui-step" data-show="step-2"><span>2</span></li>
      <li class="ui-step" data-show="step-3"><span>3</span></li>
      <li class="ui-step" data-show="step-4"><span>4</span></li>
      <li class="ui-step" data-show="step-5"><span>5</span></li>
    </ul>
    
    <section class="ui-section" data-show="step-1">
      <div class="ui-subheading">Step 1</div>
      <h2 class="ui-heading">Please Select Your Asset</h2>
      <p class="ui-paragraph">.</p>
      <div class="ui-field">        
        <Select id="colorselector"  class="ui-input" style="width: 150px;" required>
          <option value="red">STS</option>
          <option value="yellow">RTG</option>
        </Select>
        <div id="red" class="colors" style="display:none"> 

          <Select id="colorselector"  class="ui-input" style="width: 150px; margin-left: 10px;"  required>
          <option >STS-01</option>
          <option >STS-02</option>
          <option >STS-03</option>
          <option >STS-04</option>
          <option >STS-05</option>
          <option >STS-06</option>
          <option >STS-07</option>
          <option >STS-08</option>
          <option >STS-09</option>
          <option >STS-10</option>
        </Select>

      </div>
        <div id="yellow" class="colors" style="display:none"> 
          <Select id="colorselector"  class="ui-input" style="width: 150px; margin-left: 10px;"  required>
          <option >RTG-01</option>
          <option >RTG-02</option>
          <option >RTG-03</option>
          <option >RTG-04</option>
          <option >RTG-05</option>
          <option >RTG-06</option>
          <option >RTG-07</option>
          <option >RTG-08</option>
          <option >RTG-09</option>
          <option >RTG-10</option>
          <option >RTG-11</option>
          <option >RTG-12</option>
          <option >RTG-13</option>
          <option >RTG-14</option>
          <option >RTG-15</option>
          <option >RTG-16</option>
          <option >RTG-17</option>
          <option >RTG-18</option>
          <option >RTG-19</option>
          <option >RTG-20</option>
          <option >RTG-21</option>
        </Select> </div>




        
      </div>
      <button type="button" class="ui-button">Next</button>
    </section>
    <section class="ui-section" data-show="step-2">
      <div class="ui-subheading">Step 2</div>
      <h2 class="ui-heading">Select Cleaning Category.</h2>
       <p class="ui-paragraph">Precise Cleaning Category According TO Cleaning Type and Location.</p>
      <div class="ui-field">        
        <select id="test" name="form_select" class="ui-input" style="width: 150px;" required onchange="showDiv('hidden_div', this),showDiv1('hidden_div1', this)">
          <option value="0">Choose..</option>
          <option value="1">Interior</option>
          <option value="2">Exterior</option>
        </select>
        <div id="hidden_div">
          <select class="ui-input" style="width: 150px; margin-left: 10px;" required>
          <option selected="selected" value="Walls">Walls</option>
          <option value="seat">Seat</option>
          <option value="CMD Panels">CMD Panels</option>
          <option value="Rubber">Rubber Floors</option>
          <option value="Trash Cleaning">Trash Cleaning</option>
        </select>
        <select class="ui-input" style="width: 150px; margin-left: 10px;" required>
            <option value="">Choose...</option>
          <option value="Steam">Steam</option>
          <option value="Dry">Dry</option>
          <option value="Dust">Dust</option>
          <option value="Vacuum">Vacuum</option>
          <option value="Vacuum"><strong>All</strong></option>
        </select>
      </div>
      <div id="hidden_div1">
          <select class="ui-input" style="width: 150px; margin-left: 10px;" required>
            
          <option selected="selected" value="Windows">Windows</option>
          <option value="Structure">Structure</option>
        </select>
        <select class="ui-input" style="width: 150px; margin-left: 10px;" required>
            <option value="">Choose...</option>
          <option value="Classic">Classic</option>
          <option value="High Pressure">High Pressure</option>
          <option value="Dry">Dry</option>
          <option value="All" style="font-weight: bolder;">All</option>
        </select>
      </div>
      </div>
       <button type="button" class="ui-button">Next</button>
    </section>


<section class="ui-section" data-show="step-3">
      <div class="ui-subheading">Step 3</div>
      <h2 class="ui-heading">Select Start Time</h2>
      <p class="ui-paragraph">when do you want the cleaning to start.</p>
      <div style="display: inline-block;">
      <input type="radio" name="name" class="iinput" checked style="display: inline-block;" />  <label class="" for=""> 15 min</label>
      </div>
      <div style="display:inline-block;">
      <input type="radio" name="name" class="iinput" style="display: inline-block;"/>  <label class="" for=""> 1 Hour</label>
      </div>

      <button type="button" class="ui-button">Next</button>
    </section>








    <section class="ui-section" data-show="step-4">
      <div class="ui-subheading">Step 4</div>
      <h2 class="ui-heading">Select Estimated Delivery Time</h2>
      <p class="ui-paragraph">Estimate the time that the cabin to be ready in (<strong>After Order Validation</strong>).</p>
      <div style="display: inline-block;">
      <input type="radio" name="name" class="iinput" checked style="display: inline-block;"/>  <label class="" for=""> 30 min</label>
      </div>
      <div style="display:inline-block;">
      <input type="radio" name="name" class="iinput" style="display: inline-block;"/>  <label class="" for=""> 1 Hour</label>
      </div>
      <div style="display:inline-block;">
      <input type="radio" name="name" class="iinput" style="display: inline-block;"/>  <label class="" for=""> 2 Hours</label>
      </div>
      <button type="button" class="ui-button">Next</button>
    </section>
    <section class="ui-section" data-show="step-5">
      <div class="ui-subheading">Step 5</div>
      <h2 class="ui-heading">Proof Picture.</h2>
      <p class="ui-paragraph">Take a picture of the surface or area you want to clean, upload it .</p>
      <div class="ui-choices">
        <input type="file" name="choice" id="choice-1" class="ui-input">
        <label for="choice-1" class="ui-choice">
          <span class="ui-text">upload</span>
        </label>
      
      </div>
      <button type="button" class="ui-button -submit" id="submit">Clean it</button>
    </section>
    
    <div class="ui-section" data-show="finished">
      <div id="thanksmsg">
        
    <svg class="machine"xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 645 526">
      <defs/>
      <g>
        <path  x="-173,694" y="-173,694" class="large large-shadow" d="M645 194v-21l-29-4c-1-10-3-19-6-28l25-14 -8-19 -28 7c-5-8-10-16-16-24L602 68l-15-15 -23 17c-7-6-15-11-24-16l7-28 -19-8 -14 25c-9-3-18-5-28-6L482 10h-21l-4 29c-10 1-19 3-28 6l-14-25 -19 8 7 28c-8 5-16 10-24 16l-23-17L341 68l17 23c-6 7-11 15-16 24l-28-7 -8 19 25 14c-3 9-5 18-6 28l-29 4v21l29 4c1 10 3 19 6 28l-25 14 8 19 28-7c5 8 10 16 16 24l-17 23 15 15 23-17c7 6 15 11 24 16l-7 28 19 8 14-25c9 3 18 5 28 6l4 29h21l4-29c10-1 19-3 28-6l14 25 19-8 -7-28c8-5 16-10 24-16l23 17 15-15 -17-23c6-7 11-15 16-24l28 7 8-19 -25-14c3-9 5-18 6-28L645 194zM471 294c-61 0-110-49-110-110S411 74 471 74s110 49 110 110S532 294 471 294z"/>
      </g>
      <g>
        <path x="-136,996" y="-136,996" class="medium-shadow" d="M402 400v-21l-28-4c-1-10-4-19-7-28l23-17 -11-18L352 323c-6-8-13-14-20-20l11-26 -18-11 -17 23c-9-4-18-6-28-7l-4-28h-21l-4 28c-10 1-19 4-28 7l-17-23 -18 11 11 26c-8 6-14 13-20 20l-26-11 -11 18 23 17c-4 9-6 18-7 28l-28 4v21l28 4c1 10 4 19 7 28l-23 17 11 18 26-11c6 8 13 14 20 20l-11 26 18 11 17-23c9 4 18 6 28 7l4 28h21l4-28c10-1 19-4 28-7l17 23 18-11 -11-26c8-6 14-13 20-20l26 11 11-18 -23-17c4-9 6-18 7-28L402 400zM265 463c-41 0-74-33-74-74 0-41 33-74 74-74 41 0 74 33 74 74C338 430 305 463 265 463z"/>
      </g>
      <g >
        <path x="-100,136" y="-100,136" class="small small-shadow" d="M210 246v-21l-29-4c-2-10-6-18-11-26l18-23 -15-15 -23 18c-8-5-17-9-26-11l-4-29H100l-4 29c-10 2-18 6-26 11l-23-18 -15 15 18 23c-5 8-9 17-11 26L10 225v21l29 4c2 10 6 18 11 26l-18 23 15 15 23-18c8 5 17 9 26 11l4 29h21l4-29c10-2 18-6 26-11l23 18 15-15 -18-23c5-8 9-17 11-26L210 246zM110 272c-20 0-37-17-37-37s17-37 37-37c20 0 37 17 37 37S131 272 110 272z"/>
      </g>
      <g>
        <path x="-100,136" y="-100,136" class="small" d="M200 236v-21l-29-4c-2-10-6-18-11-26l18-23 -15-15 -23 18c-8-5-17-9-26-11l-4-29H90l-4 29c-10 2-18 6-26 11l-23-18 -15 15 18 23c-5 8-9 17-11 26L0 215v21l29 4c2 10 6 18 11 26l-18 23 15 15 23-18c8 5 17 9 26 11l4 29h21l4-29c10-2 18-6 26-11l23 18 15-15 -18-23c5-8 9-17 11-26L200 236zM100 262c-20 0-37-17-37-37s17-37 37-37c20 0 37 17 37 37S121 262 100 262z"/>
      </g>
      <g>
        <path x="-173,694" y="-173,694" class="large" d="M635 184v-21l-29-4c-1-10-3-19-6-28l25-14 -8-19 -28 7c-5-8-10-16-16-24L592 58l-15-15 -23 17c-7-6-15-11-24-16l7-28 -19-8 -14 25c-9-3-18-5-28-6L472 0h-21l-4 29c-10 1-19 3-28 6L405 9l-19 8 7 28c-8 5-16 10-24 16l-23-17L331 58l17 23c-6 7-11 15-16 24l-28-7 -8 19 25 14c-3 9-5 18-6 28l-29 4v21l29 4c1 10 3 19 6 28l-25 14 8 19 28-7c5 8 10 16 16 24l-17 23 15 15 23-17c7 6 15 11 24 16l-7 28 19 8 14-25c9 3 18 5 28 6l4 29h21l4-29c10-1 19-3 28-6l14 25 19-8 -7-28c8-5 16-10 24-16l23 17 15-15 -17-23c6-7 11-15 16-24l28 7 8-19 -25-14c3-9 5-18 6-28L635 184zM461 284c-61 0-110-49-110-110S401 64 461 64s110 49 110 110S522 284 461 284z"/>
      </g>
      <g>
        <path x="-136,996" y="-136,996" class="medium" d="M392 390v-21l-28-4c-1-10-4-19-7-28l23-17 -11-18L342 313c-6-8-13-14-20-20l11-26 -18-11 -17 23c-9-4-18-6-28-7l-4-28h-21l-4 28c-10 1-19 4-28 7l-17-23 -18 11 11 26c-8 6-14 13-20 20l-26-11 -11 18 23 17c-4 9-6 18-7 28l-28 4v21l28 4c1 10 4 19 7 28l-23 17 11 18 26-11c6 8 13 14 20 20l-11 26 18 11 17-23c9 4 18 6 28 7l4 28h21l4-28c10-1 19-4 28-7l17 23 18-11 -11-26c8-6 14-13 20-20l26 11 11-18 -23-17c4-9 6-18 7-28L392 390zM255 453c-41 0-74-33-74-74 0-41 33-74 74-74 41 0 74 33 74 74C328 420 295 453 255 453z"/>
      </g>
    </svg>

      </div>
      <h2 class="ui-heading" style="padding-left:5%">Thanks. Your Order Will Be treated ASAP.</h2>
      <a href="index.php" class="ui-button" style="text-decoration: none; align-content: center;margin-left: 35%;" >Go back tO the Menu</a>
    </div>
  </form>
 

</div>
<script type="text/javascript">

    $(function() {
        $('#colorselector').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });







  $("#thanksmsg").hide();
  $("#submit").click(function(){
    $(".ui-steps").hide();
    $("#thanksmsg").show(1000);
})
  function showDiv(divId, element)
{
    document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none';
   ;
}
function showDiv1(divId, element)
{
    document.getElementById(divId).style.display = element.value == 2 ? 'block' : 'none';
   ;
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
        NEXT: 'step-2' } },


    'step-2': {
      on: {
        NEXT: 'step-3' } },


    'step-3': {
      on: {
        NEXT: 'step-4' } },


    'step-4': {
      on: {
        NEXT: 'step-5' } },


    'step-5': {
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
</html>