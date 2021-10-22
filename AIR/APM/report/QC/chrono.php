<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style type="text/css">
	body, html {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  background: #1BB287;
}

.timer {
  width: 5em;
  height: 5em;
  display: flex;
  align-items: center;
  justify-content: center;
  border: .5em solid #fff;
  border-radius: 100%;
  position: relative;
}
.timer:before, .timer:after {
  content: '';
  display: block;
  position: absolute;
}
.timer:before {
  height: .5em;
  width: .5em;
  top: -1.48em;
  border-radius: 100%;
  left: 50%;
  margin-left: -.75em;
  background: #1BB287;
  border: .5em solid #fff;
}
.timer:after {
  width: 1em;
  height: 1em;
  background: #fff;
  right: 0;
  top: -.25em;
  border-radius: 100%;
}

.hand {
  background: #1BB287;
  height: 1em;
  width: 1em;
  position: relative;
  display: flex;
  justify-content: center;
  border-radius: 100%;
  border: 1.4em solid #fff;
}
.hand:before, .hand:after {
  content: '';
  display: block;
  position: relative;
}
.hand:before {
  width: .325em;
  height: 1.5em;
  top: -1.35em;
  background: #1BB287;
  animation: countdown 2s linear infinite;
  transform-origin: 50% 125%;
}

@keyframes countdown {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

</style>
</head>
<body>
<!-- 
  check it out on dribbble!
  http://dribbble.com/shots/1180821-Time-lapse-Vine?list=popular&offset=188
-->

<div class="timer">
  <div class="hand">
  </div>
</div>
</body>
</html>