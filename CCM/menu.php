<!DOCTYPE html>
<html>
<head>
  <title>CCM - Cabin Cleaning Monitor - MyDADJE</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
<style type="text/css">
  body{
    background-color: #f0f0f0;
  }
  .container {
    margin-top: 2%;
    width: 100%;
    height: 600px;
}

#learn-more {
  fill-opacity: 0;
  fill: #fff;
  stroke: #fff;
  stroke-width: 2;
  border-radius: 5px;
  stroke-linejoin: round;
  transition: all 250ms ease-in;
  cursor: pointer;
}
#learn-more:hover {
  fill-opacity: 1;
}
#learn-more:hover ~ .learn-more-text {
  fill: #00A1db;
}

.learn-more-text {
  font-family: 'Roboto';
  fill: #fff;
  pointer-events: none;
  font-size: 14px;
  transition: all 250ms ease-in;
}

.center {
  fill: #00A1db;
}

.pointer {
  fill: #fff;
  stroke: #00A1db;
  stroke-width: 2;
}

.nav-copy {
  font-family: 'Roboto';
  fill: #fff;
  fill-opacity: 1;
  transition: all 250ms ease-in;
}
.nav-copy.changing {
  fill-opacity: 0;
}

.service {
  cursor: pointer;
}
.service text {
  font-size: 14px;
  font-family: 'Roboto';
  text-anchor: middle;
}
.service .icon-wrapper {
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
}
.service .icon-wrapper, .service .icon-wrapper > * {
  transition: all 250ms ease-in;
}
.service circle {
  fill: #00A1db;
}
.service circle.shadow {
  fill-opacity: 0;
  -webkit-filter: url(#service-shadow);
          filter: url(#service-shadow);
}
.service use {
  fill: #fff;
}
.service text {
  fill: #4d4d4d;
}
.service.active .icon-wrapper, .service:hover .icon-wrapper {
  -webkit-transform: scale(1.15) translateY(-5px);
          transform: scale(1.15) translateY(-5px);
}
.service.active .icon-wrapper, .service.active .icon-wrapper > *, .service:hover .icon-wrapper, .service:hover .icon-wrapper > * {
  transition: all 250ms ease-out;
}
.service.active .icon-wrapper circle.shadow, .service:hover .icon-wrapper circle.shadow {
  fill-opacity: 0.4;
}
.service.active text, .service:hover text {
  fill: #00A1db;
  font-weight: bold;
}
  body {

  font-size: 16px;
  margin: 0;
  padding: 0;
  user-select: none;
  overflow: hidden;
  font-family: Open Sans, sans-serif;
  min-width: 768px;
</style>
</head>
<body>
<div class="container">

  <h1 style="color: #303156;letter-spacing: -1px;font-weight: 900;font-size: 90px; text-align: center; margin-bottom: 0px;"> CCM </h1>
  <h3 style="color: #303156; text-align: center; margin-top: 0px;">Cabin Cleaning Monitor</h3>
  <svg id="circle-nav-services" width="100%" height="100%" viewBox="0 0 650 550">
    <defs>
    <filter id="service-shadow" height="2" width="2" y="-.5" x="-.5">
      <feOffset result="offOut" in="SourceGraphic" dx="0" dy="5" />
      <feGaussianBlur result="blurOut" in="offOut" stdDeviation="12" />
      <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
    </filter>
  </defs>
  
    <symbol id="circle-nav-copy" viewBox="0 0 300 300">
      <defs>
        <style>
          .cls-1 {
            font-size: 28px;
            font-family: Roboto-Bold, Roboto;
            font-weight: 700;
          }

          .cls-2 {
            letter-spacing: -0.02em;
          }

          .cls-3 {
            letter-spacing: -0.01em;
          }

          .cls-4 {
            letter-spacing: -0.01em;
          }

          .cls-5 {
            font-size: 16px;
            font-family: Roboto-Regular, Roboto;
          }

          .cls-6 {
            letter-spacing: -0.01em;
          }

          .cls-7 {
            letter-spacing: -0.01em;
          }

          .cls-8 {
            letter-spacing: -0.02em;
          }

          .cls-9 {
            letter-spacing: -0.01em;
          }

          .cls-10 {
            letter-spacing: 0.01em;
          }

          .cls-11 {
            letter-spacing: -0.01em;
          }

          .cls-12 {
            letter-spacing: -0.04em;
          }

          .cls-13 {
            letter-spacing: -0.02em;
          }

          .cls-14 {
            letter-spacing: 0.01em;
          }

          .cls-15 {
            letter-spacing: -0.01em;
          }

          .cls-16 {
            letter-spacing: -0.06em;
          }

          .cls-17 {
            letter-spacing: -0.02em;
          }

          .cls-18 {
            letter-spacing: 0.01em;
          }

          .cls-19 {
            letter-spacing: 0.02em;
          }

          .cls-20 {
            letter-spacing: -0.01em;
          }

          .cls-21 {
            letter-spacing: -0.03em;
          }
        </style>
      </defs>
      <title>Artboard 1</title>
      <text class="cls-1" transform="translate(99 1865)">P
        <tspan class="cls-2" x="18" y="0">r</tspan>
        <tspan x="28" y="0">ocess</tspan>
        <tspan class="cls-3" x="-22" y="28">A</tspan>
        <tspan x="-4" y="28">u</tspan>
        <tspan class="cls-4" x="12" y="28">t</tspan>
        <tspan x="21" y="28">omation</tspan>
      </text>
      <text class="cls-5" transform="translate(57 1930)">Our p
        <tspan class="cls-6" x="38" y="0">r</tspan>
        <tspan x="43" y="0">ocess and Industrial </tspan>
        <tspan class="cls-3" x="1" y="19">A</tspan>
        <tspan x="12" y="19">u</tspan>
        <tspan class="cls-6" x="21" y="19">t</tspan>
        <tspan x="26" y="19">omation personnel a</tspan>
        <tspan class="cls-7" x="172" y="19">r</tspan>
        <tspan x="177" y="19">e </tspan>
        <tspan x="12" y="38">t</tspan>
        <tspan class="cls-8" x="17" y="38">r</tspan>
        <tspan x="22" y="38">ained </tspan>
        <tspan class="cls-6" x="65" y="38">t</tspan>
        <tspan x="70" y="38">o of</tspan>
        <tspan class="cls-9" x="98" y="38">f</tspan>
        <tspan x="103" y="38">er a b</tspan>
        <tspan class="cls-6" x="143" y="38">r</tspan>
        <tspan x="148" y="38">oad </tspan>
        <tspan x="-7" y="58">scope of se</tspan>
        <tspan class="cls-10" x="75" y="58">r</tspan>
        <tspan x="81" y="58">vices </tspan>
        <tspan class="cls-6" x="121" y="58">t</tspan>
        <tspan x="126" y="58">o meet or </tspan>
        <tspan x="1" y="77">e</tspan>
        <tspan class="cls-6" x="9" y="77">x</tspan>
        <tspan x="17" y="77">ceed </tspan>
        <tspan class="cls-11" x="55" y="77">y</tspan>
        <tspan x="63" y="77">our p</tspan>
        <tspan class="cls-6" x="99" y="77">r</tspan>
        <tspan x="104" y="77">oject goals.</tspan>
      </text>
      <text class="cls-1" transform="translate(89 1566)">
        <tspan class="cls-12">T</tspan>
        <tspan x="16" y="0">echnical</tspan>
        <tspan x="7" y="28">Se</tspan>
        <tspan class="cls-10" x="39" y="28">r</tspan>
        <tspan x="49" y="28">vices</tspan>
      </text>
      <text class="cls-5" transform="translate(47 1636)">
        <tspan class="cls-13">W</tspan>
        <tspan x="14" y="0">e ensu</tspan>
        <tspan class="cls-7" x="61" y="0">r</tspan>
        <tspan x="66" y="0">e that </tspan>
        <tspan class="cls-11" x="110" y="0">y</tspan>
        <tspan x="118" y="0">our p</tspan>
        <tspan class="cls-6" x="154" y="0">r</tspan>
        <tspan x="159" y="0">ocess, </tspan>
        <tspan x="10" y="19">manufacturing, packaging </tspan>
        <tspan x="-5" y="38">equipment, facility and utilities </tspan>
        <tspan x="-10" y="58">pe</tspan>
        <tspan class="cls-14" x="7" y="58">r</tspan>
        <tspan x="13" y="58">form as the intended design.</tspan>
      </text>
      <text class="cls-1" transform="translate(85 997)">S
        <tspan class="cls-22" x="18" y="0">hare Idea</tspan>
        <tspan x="28" y="0"></tspan>
        
      </text>
      <text class="cls-5" transform="translate(65 1037)">
        <tspan class="cls-13">W</tspan>
        <tspan x="14" y="0">e help </tspan>
        <tspan class="cls-111" x="61" y="0">y</tspan>
        <tspan x="68" y="0">our ope</tspan>
        <tspan class="cls-8" x="122" y="0">r</tspan>
        <tspan x="127" y="0">ations </tspan>
        <tspan x="-23" y="19">complete their p</tspan>
        <tspan class="cls-6" x="93" y="19">r</tspan>
        <tspan x="98" y="19">oject on time, </tspan>
        <tspan x="-8" y="38">under budget and meeting </tspan>
        <tspan x="-8" y="58">100% of the </tspan>
        <tspan class="cls-7" x="80" y="58">r</tspan>
        <tspan x="85" y="58">equi</tspan>
        <tspan class="cls-7" x="116" y="58">r</tspan>
        <tspan x="121" y="58">ements.</tspan>
      </text>
      <a href=""  transform="translate(97 1125)" ><rect id="learn-more"data-url="/neworder" width="90" height="30" />
    <text x="35" y="20" class="learn-more-text">Go</text></a>


      <text class="cls-1" transform="translate(87 670)">Rate Work</text>
      <text class="cls-5" transform="translate(83 710)">Cost
        <tspan class="cls-7" x="37" y="0">r</tspan>
        <tspan x="42" y="0">eduction and </tspan>
        <tspan x="-27" y="19">p</tspan>
        <tspan class="cls-6" x="-18" y="19">r</tspan>
        <tspan x="-13" y="19">oductivity enhancement.</tspan>
        <tspan x="-19" y="38">Principia engineers h</tspan>
        <tspan class="cls-111" x="129" y="38">a</tspan>
        <tspan class="cls-15" x="138" y="38">v</tspan>
        <tspan x="145" y="38">e </tspan>
        <tspan x="-15" y="58">hands-on experience in </tspan>
        <tspan x="-23" y="77">driving successful Ene</tspan>
        <tspan class="cls-7" x="136" y="77">r</tspan>
        <tspan x="141" y="77">gy </tspan>
        <tspan x="-19" y="96">management P</tspan>
        <tspan class="cls-6" x="90" y="96">r</tspan>
        <tspan x="95" y="96">og</tspan>
        <tspan class="cls-8" x="113" y="96">r</tspan>
        <tspan x="118" y="96">ams.</tspan>
      </text>
      <a href="rate-work.php"  transform="translate(97 825)" ><rect id="learn-more"data-url="/neworder" width="90" height="30" />
    <text x="35" y="20" class="learn-more-text">Go</text></a>



      <text class="cls-1" transform="translate(13 110)">New Cleaning Request</text>
      <text class="cls-5" transform="translate(63 145)">You Can Ask For cleaning
        <tspan x="-9" y="19">mission</tspan>
        <tspan class="cls-6" x="55" y="19">i</tspan>
        <tspan x="58" y="19">n order to availability </tspan>
        
        <tspan x="4" y="38">of our cabins cleaning team</tspan>
        <tspan x="-18" y="58">and Asset</tspan>
        <tspan class="cls-9" x="56" y="58">C</tspan>
        <tspan x="66" y="58">leaning schedule.</tspan>
        
      </text>
      <a href="new.php"  transform="translate(97 225)" ><rect id="learn-more"data-url="/neworder" width="90" height="30" />
    <text x="35" y="20" class="learn-more-text">Go</text></a>


      <text class="cls-1" transform="translate(57 395)">
        <tspan class="cls-17" x="-8">T</tspan>
        <tspan x="5" y="0">rack</tspan>
        <tspan x="65" y="0"> Operations</tspan>
       
      </text>
      <text class="cls-5" transform="translate(46 437)">Track
        <tspan class="cls-19" x="45" y="0">O</tspan>
        <tspan x="55" y="0">perations accor</tspan>
        <tspan class="cls-19" x="165" y="0">d</tspan>
        <tspan x="175" y="0">ing </tspan>
        <tspan x="1" y="19">to </tspan>
        <tspan class="cls-6" x="25" y="19">M</tspan>
        <tspan class="cls-111" x="39" y="19">i</tspan>
        <tspan x="43" y="19">ssion Team, Location,</tspan>
        <tspan x="53" y="38">And Status.</tspan>

      </text>
      <a href="track.php"  transform="translate(97 525)" ><rect id="learn-more"data-url="/neworder" width="90" height="30" />
    <text x="35" y="20" class="learn-more-text">Go</text></a>

      <text class="cls-1" transform="translate(183 1266)">
        
        <tspan x="-80" y="28">Support</tspan>
      </text>
      <text class="cls-5" transform="translate(47 1323)">Our Manufacturing E
        <tspan class="cls-6" x="146" y="0">x</tspan>
        <tspan x="154" y="0">ecution </tspan>
        <tspan x="38" y="19">Systems comprise </tspan>
        <tspan x="0" y="38">applications that connect the </tspan>
        <tspan class="cls-7" x="-5" y="58">r</tspan>
        <tspan x="0" y="58">eal-time data originated at the </tspan>
        <tspan x="-1" y="77">shop floor with the enterprise </tspan>

      </text>
       <a href="contact.php"  transform="translate(97 1425)" ><rect id="learn-more"data-url="/neworder" width="90" height="30" />
    <text x="35" y="20" class="learn-more-text">Go</text></a>
    </symbol>
    <symbol id="neworder" viewBox="0 0 512 512">
       <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
  <g>
    <path d="M445.867,343.467v-66.133c0-59.733-46.933-106.667-106.667-106.667V64c0-36.267-29.867-64-64-64C236.8,0,166.4,0,128,0
      C91.733,0,64,27.733,64,64v362.667H42.667v42.667H0V512h170.667v-42.667H128v-42.667h-21.333V64
      c0-12.8,8.533-21.333,21.333-21.333h147.2c12.8,0,21.333,8.533,21.333,21.333v106.667c-59.733,0-106.667,46.933-106.667,106.667
      V448c0,36.267,27.733,64,64,64c42.667,0,128,0,170.667,0C471.467,512,512,475.733,512,428.8
      C512,388.267,484.267,352,445.867,343.467z M352,469.333h-98.133c-12.8,0-21.333-8.533-21.333-21.333V277.333
      c0-36.267,27.733-64,64-64H339.2c36.267,0,64,27.733,64,64v66.133c-38.4,10.667-64,44.8-64,83.2
      C339.2,441.6,343.467,456.533,352,469.333z M424.533,469.333c-23.467,0-42.667-19.2-42.667-42.667S401.067,384,424.533,384
      s42.667,19.2,42.667,42.667S448,469.333,424.533,469.333z"/>
  </g>
</g>
<g>
  <g>
    <rect x="275.2" y="256" width="42.667" height="64"/>
  </g>
</g>
<g>
  <g>
    <rect x="275.2" y="341.333" width="42.667" height="42.667"/>
  </g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
    </symbol>
    <symbol id="trackorder" viewBox="0 0 512 512">
    <svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m375.396 136.003c6.695 32.716 10.598 68.31 11.424 105.175h124.74c-2.17-37.826-12.59-73.473-29.485-105.175z"/><path d="m125.195 271.414h-124.718c2.259 37.841 12.768 73.491 29.76 105.175h106.491c-6.733-32.703-10.673-68.298-11.533-105.175z"/><path d="m143.983 406.825h-94.698c33.721 46.091 82.455 80.528 138.948 96.053-10.308-13.277-19.748-29.759-28.068-49.228-6.165-14.423-11.57-30.124-16.182-46.825z"/><path d="m126.207 216.466c-3.767-.678-7.18-2.744-9.492-5.877-.705-.955-17.456-23.705-34.474-51.463-5.022-8.19-9.5-15.888-13.457-23.123h-38.859c-16.895 31.702-27.315 67.349-29.485 105.175h124.74c.186-8.308.531-16.55 1.027-24.712z"/><path d="m386.805 271.414c-.196 8.415-.551 16.764-1.064 25.027 8.989 13.222 14.251 29.172 14.251 46.33 0 8.956-2.753 20.173-8.316 33.817h90.088c16.992-31.684 27.501-67.334 29.76-105.175h-124.719z"/><path d="m376.959 406.825c-3.831 6.964-8.14 14.353-12.947 22.194-2.179 3.555-4.354 7.026-6.491 10.381-1.819 4.872-3.711 9.63-5.685 14.25-8.321 19.469-17.761 35.95-28.068 49.228 56.492-15.525 105.227-49.962 138.948-96.053z"/><path d="m368.183 105.767h94.965c-33.736-46.389-82.646-81.054-139.38-96.646 10.308 13.278 19.748 29.759 28.068 49.228 6.237 14.596 11.699 30.495 16.347 47.418z"/><path d="m270.737 429.02c-4.807-7.841-9.116-15.23-12.948-22.195h-82.37c3.707 12.367 7.897 24.059 12.548 34.943 19.076 44.634 43.873 70.232 68.033 70.232 16.362 0 33.013-11.754 47.984-33.196-4.23-5.823-18.635-25.951-33.247-49.784z"/><path d="m234.758 342.772c0-30.409 16.527-57.015 41.058-71.357h-120.376c.903 37.196 5.071 72.867 12.178 105.175h75.456c-5.563-13.645-8.316-24.862-8.316-33.818z"/><path d="m188.973 136.003c-3.957 7.235-8.435 14.933-13.456 23.123-5.577 9.096-11.12 17.646-16.085 25.076-2.201 18.401-3.552 37.48-4.007 56.976h201.15c-.868-37.182-4.997-72.851-12.062-105.175z"/><path d="m211.495 72.878c0 8.753-2.624 19.661-7.937 32.889h133.196c-3.75-12.585-7.996-24.479-12.722-35.535-19.075-44.634-43.872-70.232-68.032-70.232-17.773 0-35.888 13.868-51.819 38.961 4.684 10.356 7.314 21.832 7.314 33.917z"/><path d="m76.498 72.878c0 19.967 28.499 67.919 52.378 102.647 23.881-34.74 52.382-82.702 52.382-102.647 0-28.883-23.498-52.38-52.38-52.38s-52.38 23.498-52.38 52.38zm67.498-3.834c.366 8.164-7.21 15.118-15.118 15.118-8.476 0-14.751-6.927-15.118-15.118-.366-8.164 7.21-15.118 15.118-15.118 8.476 0 14.751 6.927 15.118 15.118z"/><path d="m369.754 342.772c0-28.882-23.498-52.38-52.38-52.38-28.883 0-52.38 23.498-52.38 52.38 0 19.943 28.501 67.904 52.38 102.643 23.88-34.739 52.38-82.7 52.38-102.643zm-52.38-18.953c8.476 0 14.751 6.927 15.118 15.118.366 8.164-7.21 15.118-15.118 15.118-8.475 0-14.751-6.927-15.118-15.118-.365-8.164 7.211-15.118 15.118-15.118z"/></g></svg>
</symbol>
    <symbol id="ratework" viewBox="0 0 512 512">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512">
<path d="M82.877,311.122c3.417,2.287,7.281,3.38,11.104,3.38c6.45,0,12.783-3.116,16.64-8.879  c32.317-48.292,86.34-77.123,144.511-77.123c57.999,0,111.933,28.699,144.273,76.77c6.167,9.165,18.594,11.596,27.758,5.43  c9.165-6.166,11.596-18.594,5.43-27.758c-25.839-38.406-62.885-66.745-105.219-81.905C352.762,180.298,369,148.761,369,113.5  c0-62.309-50.691-113-113-113s-113,50.691-113,113c0,35.008,16.002,66.347,41.076,87.091  c-42.996,15.104-80.599,43.786-106.698,82.786C71.235,292.557,73.697,304.979,82.877,311.122z M256,40.5c40.252,0,73,32.748,73,73  s-32.748,73-73,73s-73-32.748-73-73S215.748,40.5,256,40.5z M335.758,354.63l-29.816,21.509c-4.436,3.2-6.293,8.873-4.598,14.051  l12.007,34.802c0.507,1.55,0.702,3.064,0.637,4.508c-0.425,9.347-12.14,15.741-20.732,9.543l-29.815-21.515  c-2.218-1.6-4.829-2.4-7.44-2.4c-2.611,0-5.222,0.8-7.44,2.4l-29.815,21.515c-8.592,6.198-20.363-0.196-20.735-9.543  c-0.057-1.444,0.143-2.959,0.65-4.508l11.996-34.802c1.695-5.178-0.162-10.851-4.598-14.051l-29.816-21.509  c-9.92-7.156-4.822-24.13,7.44-24.13h36.854c5.484,0,10.344-2.111,12.038-7.289l11.388-35.027c1.895-5.789,6.966-8.684,12.038-8.684  c5.072,0,10.143,2.895,12.038,8.684l11.388,35.027c1.695,5.178,6.554,7.289,12.038,7.289h36.854  C340.58,330.5,345.678,347.474,335.758,354.63z M506.758,424.63l-29.816,21.509c-4.436,3.2-6.293,8.873-4.598,14.051l12.007,34.802  c0.507,1.55,0.702,3.064,0.637,4.508c-0.425,9.347-12.14,15.741-20.732,9.543l-29.815-21.515c-2.218-1.6-4.829-2.4-7.44-2.4  s-5.222,0.8-7.44,2.4l-29.815,21.515c-8.592,6.198-20.363-0.196-20.735-9.543c-0.057-1.444,0.143-2.959,0.65-4.508l11.996-34.802  c1.695-5.178-0.162-10.851-4.598-14.051l-29.816-21.509c-9.92-7.156-4.822-24.13,7.44-24.13h36.854  c5.484,0,10.344-2.111,12.038-7.289l11.388-35.027c1.895-5.789,6.966-8.684,12.038-8.684s10.143,2.895,12.038,8.684l11.388,35.027  c1.695,5.178,6.554,7.289,12.038,7.289h36.854C511.58,400.5,516.678,417.474,506.758,424.63z M164.758,424.63l-29.816,21.509  c-4.436,3.2-6.293,8.873-4.598,14.051l12.007,34.802c0.507,1.55,0.702,3.064,0.637,4.508c-0.425,9.347-12.14,15.741-20.732,9.543  L92.44,487.528c-2.218-1.6-4.829-2.4-7.44-2.4s-5.222,0.8-7.44,2.4l-29.815,21.515c-8.592,6.198-20.363-0.196-20.735-9.543  c-0.057-1.444,0.143-2.959,0.65-4.508l11.996-34.802c1.695-5.178-0.162-10.851-4.598-14.051L5.242,424.63  c-9.92-7.156-4.822-24.13,7.44-24.13h36.854c5.484,0,10.344-2.111,12.038-7.289l11.388-35.027c1.895-5.789,6.966-8.684,12.038-8.684  s10.143,2.895,12.038,8.684l11.388,35.027c1.695,5.178,6.554,7.289,12.038,7.289h36.854  C169.58,400.5,174.678,417.474,164.758,424.63z"/>















</svg>

</symbol>
    <symbol id="shareidea" viewBox="0 0 512 512">
 <svg id="Capa_1" enable-background="new 0 0 482.239 482.239" height="512" viewBox="0 0 482.239 482.239" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m378.902 275.565c-34.183 0-64.306 16.874-83.127 42.521l-94.044-47.033c2.912-9.539 4.943-19.456 4.943-29.934s-2.031-20.397-4.943-29.934l94.044-47.033c18.821 25.647 48.944 42.521 83.127 42.521 56.983 0 103.337-46.354 103.337-103.337s-46.353-103.336-103.337-103.336-103.337 46.354-103.337 103.337c0 10.478 2.033 20.395 4.945 29.932l-94.047 47.035c-18.821-25.647-48.944-42.521-83.127-42.521-56.983 0-103.336 46.353-103.336 103.337s46.353 103.337 103.337 103.337c34.183 0 64.306-16.874 83.127-42.521l94.044 47.035c-2.912 9.536-4.943 19.453-4.943 29.932 0 56.983 46.353 103.337 103.337 103.337s103.337-46.354 103.337-103.337-46.354-103.338-103.337-103.338zm0-241.119c37.995 0 68.891 30.914 68.891 68.891 0 37.978-30.897 68.891-68.891 68.891-37.995 0-68.891-30.914-68.891-68.891s30.897-68.891 68.891-68.891zm-275.565 275.565c-37.995 0-68.891-30.914-68.891-68.891 0-37.978 30.897-68.891 68.891-68.891 37.995 0 68.891 30.914 68.891 68.891s-30.896 68.891-68.891 68.891zm275.565 137.782c-37.995 0-68.891-30.914-68.891-68.891s30.897-68.891 68.891-68.891c37.995 0 68.891 30.914 68.891 68.891 0 37.978-30.896 68.891-68.891 68.891z"/></svg>
</symbol>
    <symbol id="manufacturing" viewBox="0 0 512 512">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 512.01 512.01" style="enable-background:new 0 0 512.01 512.01;" xml:space="preserve">
<g>
  <g>
    <path d="M397.793,42.837C343.982,7.07,279.38-6.964,215.673,3.252c-1.109,0.021-2.218,0.128-3.327,0.32
      C144.992,15.259,86.212,52.477,46.819,108.356c-39.35,55.901-54.6,123.766-42.933,191.142c1.941,11.112,4.649,22.309,8.062,33.186
      c14.098,45.791,10.621,94.867-9.768,138.184c-3.562,7.507-2.389,16.423,2.965,22.8c5.353,6.377,13.842,9.022,21.946,6.846
      l95.613-26.105c40.481,24.783,86.186,37.601,132.852,37.601c16.956,0,34.039-1.685,51.038-5.119
      c67.034-13.501,124.79-52.275,162.626-109.199C547.345,280.175,515.31,121.004,397.793,42.837z M433.709,374.082
      c-31.544,47.455-79.681,79.767-135.518,91.007c-55.794,11.24-112.697,0.064-160.173-31.501c-3.54-2.346-7.657-3.562-11.816-3.562
      c-1.877,0-3.775,0.256-5.631,0.768l-65.093,17.766c10.984-41.931,10.173-86.336-2.794-128.544
      c-2.879-9.192-5.161-18.555-6.761-27.812c-9.726-56.135,2.986-112.697,35.788-159.278c32.248-45.791,80.129-76.525,135.092-86.784
      c1.024-0.043,2.026-0.149,3.05-0.32c53.939-9.32,108.751,2.261,154.351,32.568C472.142,143.505,498.823,276.144,433.709,374.082z"
      />
  </g>
</g>
<g>
  <g>
    <path d="M256.089,125.909c-11.794,0-21.328,9.534-21.328,21.328v127.968c0,11.794,9.534,21.328,21.328,21.328
      c11.794,0,21.328-9.555,21.328-21.328V147.237C277.417,135.443,267.884,125.909,256.089,125.909z"/>
  </g>
</g>
<g>
  <g>
    <path d="M275.69,354.524c-1.066-2.773-2.559-5.119-4.479-7.038c-1.066-0.853-2.133-1.92-3.412-2.559
      c-1.066-0.853-2.346-1.472-3.626-1.92c-1.28-0.661-2.559-1.066-4.052-1.28c-6.804-1.493-14.29,0.874-19.174,5.759
      c-1.92,1.919-3.412,4.266-4.479,7.038c-1.066,2.559-1.706,5.332-1.706,8.105c0,2.773,0.64,5.545,1.706,8.105
      c1.066,2.559,2.559,4.905,4.479,7.038c2.133,1.919,4.479,3.412,7.038,4.479c2.559,1.066,5.332,1.706,8.105,1.706
      c2.773,0,5.524-0.64,8.083-1.706c2.559-1.066,4.884-2.559,7.038-4.479c1.92-2.133,3.412-4.479,4.479-7.038
      c1.066-2.559,1.706-5.332,1.706-8.105C277.396,359.856,276.756,357.083,275.69,354.524z"/>
  </g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</symbol>
    
    
    <!-- arc travelled by the pointer -->
    <svg x="150" y="0" width="350" height="350" viewBox="0 0 500 500">
      
      <path fill="url(#a)" d="M250.3 0c137 0 248.1 111.1 248.1 248.1S387.3 496.2 250.3 496.2 2.2 385.1 2.2 248.1 113.2 0 250.3 0C112.5 0 .8 111.7.8 249.5S112.5 499 250.3 499s249.5-111.7 249.5-249.5S388 0 250.3 0z"/>
    </svg>
    
    <g id="service-collection">
      <!-- this gets filled dynamically -->
    </g>
    <circle cx="325" cy="170" r="170" class="center"/>
    <use x="185" y="30" width="280" height="280" xlink:href="#circle-nav-copy" class="nav-copy"/>
    
  </svg>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script type="text/javascript">
  const center = { x: 325, y: 175 };
const serv_dist = 280;
const pointer_dist = 320;
const pointer_time = 2;
const icon_size = 52;
const circle_radius = 48;
const text_top_margin = 30;
const tspan_delta = 16;

//name is used as the title for the bubble
//icon is the id of the corresponding svg symbol
const services_data = [
{ name: "", icon: "neworder" },
{ name: "", icon: "trackorder" },
{ name: "", icon: "ratework" },
{ name: "", icon: "shareidea" },
{ name: "", icon: "manufacturing" }];


const services = document.getElementById("service-collection");
const nav_container = document.getElementById("circle-nav-services");
const symbol_copy = document.getElementById("circle-nav-copy");
const use_copy = document.querySelector("use.nav-copy");

//Keeps code DRY avoiding namespace for element creation
function createSVGElement(el) {
  return document.createElementNS("http://www.w3.org/2000/svg", el);
}

//Quick setup for multiple attributes
function setAttributes(el, options) {
  Object.keys(options).forEach(function (attr) {
    el.setAttribute(attr, options[attr]);
  });
}

//Service bubbles are created dynamically
function addService(serv, index) {
  let group = createSVGElement("g");
  group.setAttribute("class", "service serv-" + index);

  /* This group is needed to apply animations in
                                                          the icon and its background at the same time */
  let icon_group = createSVGElement("g");
  icon_group.setAttribute("class", "icon-wrapper");

  let circle = createSVGElement("circle");
  setAttributes(circle, {
    r: circle_radius,
    cx: center.x,
    cy: center.y });

  let circle_shadow = circle.cloneNode();
  setAttributes(circle, {
    class: 'shadow' });

  icon_group.appendChild(circle_shadow);
  icon_group.appendChild(circle);

  let symbol = createSVGElement("use");
  setAttributes(symbol, {
    'x': center.x - icon_size / 2,
    'y': center.y - icon_size / 2,
    'width': icon_size,
    'height': icon_size });

  symbol.setAttributeNS("http://www.w3.org/1999/xlink", "xlink:href", "#" + serv.icon);
  icon_group.appendChild(symbol);

  group.appendChild(icon_group);

  let text = createSVGElement("text");
  setAttributes(text, {
    x: center.x,
    y: center.y + circle_radius + text_top_margin });


  let tspan = createSVGElement("tspan");
  if (serv.name.indexOf('\n') >= 0) {

    let tspan2 = tspan.cloneNode();
    let name = serv.name.split('\n');
    jQuery(tspan).text(name[0]);
    jQuery(tspan2).text(name[1]);

    setAttributes(tspan2, {
      x: center.x,
      dy: tspan_delta });


    text.appendChild(tspan);
    text.appendChild(tspan2);
  } else
  {
    jQuery(tspan).text(serv.name);
    text.appendChild(tspan);
  }

  group.appendChild(text);
  services.appendChild(group);

  let service_bubble = jQuery(".serv-" + index);

  //Uses tween to look for right position
  twn_pivot_path.seek(index);
  TweenLite.set(service_bubble, {
    x: pivot_path.x,
    y: pivot_path.y,
    transformOrigin: "center center" });


  service_bubble.click(serviceClick);
}

//Creates pointer
function createPointer() {
  let service_pointer = createSVGElement("circle");

  setAttributes(service_pointer, {
    cx: center.x - pointer_dist,
    cy: center.y,
    r: 12,
    class: "pointer" });


  nav_container.appendChild(service_pointer);

  service_pointer = document.querySelector("svg .pointer");

  let pointer_circle = [
  { x: 0, y: 0 },
  { x: pointer_dist, y: pointer_dist },
  { x: pointer_dist * 2, y: 0 },
  { x: pointer_dist, y: -pointer_dist },
  { x: 0, y: 0 }];


  twn_pointer_path.to(service_pointer, pointer_time, {
    bezier: {
      values: pointer_circle,
      curviness: 1.5 },
    ease: Power0.easeNone,
    transformOrigin: "center center" });


}

//Defines behavior for service bubbles
function serviceClick(ev) {

  //There's always an active service
  jQuery(".service.active").removeClass("active");

  let current = jQuery(ev.currentTarget);
  current.addClass("active");

  //There's a "serv-*" class for each bubble
  let current_class = current.attr("class").split(" ")[1];
  let class_index = current_class.split('-')[1];

  //Hides current text of the main bubble
  jQuery(use_copy).addClass("changing");

  //Sets pointer to the right position
  twn_pointer_path.tweenTo(class_index * (pointer_time / (2 * 6)));

  //After it's completely hidden, the text changes and becomes visible
  setTimeout(() => {
    let viewBoxY = 300 * class_index;
    symbol_copy.setAttribute("viewBox", "0 " + viewBoxY + " 300 300");
    jQuery(use_copy).removeClass("changing");
  }, 250);
}

//Array describes points for a whole circle in order to get
//the right curve
let half_circle = [
{ x: -serv_dist, y: 0 },
{ x: 0, y: serv_dist },
{ x: serv_dist, y: 0 },
{ x: 0, y: -serv_dist },
{ x: -serv_dist, y: 0 }];


//A simple object is used in the tween to retrieve its values
var pivot_path = { x: half_circle[0].x, y: half_circle[0].y };

//The object is animated with a duration based on how many bubbles
//should be placed
var twn_pivot_path = TweenMax.to(pivot_path, 12, {
  bezier: {
    values: half_circle,
    curviness: 1.5 },

  ease: Linear.easeNone });


services_data.reduce((count, serv) => {
  addService(serv, count);
  return ++count;
}, 0);

//The variable is modified inside the function
//but its also used later to toggle its class
var twn_pointer_path = new TimelineMax({ paused: true });
createPointer();

//Adding it immediately triggers a bug for the transform
setTimeout(() => jQuery("#service-collection .serv-0").addClass("active"), 200);
</script>
</body>
</html>