<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<style type="text/css">
  @import url("https://fonts.googleapis.com/css?family=Raleway");
*, *:before, *:after {
  box-sizing: border-box;
  position: relative;
  transition: transform 0.3s cubic-bezier(0.5, 0, 0.5, 1);
  transition-property: transform, opacity;
}

html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
  font-family: Raleway, Helvetica, Arial, sans-serif;
}

.com {
  display: flex;
  align-items: stretch;
  height: 100%;
  width: 100%;
  overflow: hidden;
}
.com__content {
  position: relative;
  flex: 8;
  background:white;
  padding: 10vh 10vw;
}
.com__section {
  display: flex;
  flex-flow: column wrap;
  justify-content: center;
  height: 100vh;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 0 10%;
  opacity: 0;
  visibility: hidden;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
.com__section.active {
  opacity: 1;
  visibility: visible;
}
.com__section-half {
  flex: 1;
  height: 100vh;
  display: flex;
  flex-flow: column wrap;
  justify-content: center;
}
.com__section--text h1 {
  margin-bottom: 3vh;

font-size: 2em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
  color: #303156;
}
.com__section--text p {
  margin: 0;
  color: #303156;
  max-width: 600px;
  font-size: 20px;
}
.com__section--text img {
  max-width: 250px;
  margin: 0 auto;
}
.com__section--text.centered {
  text-align: center;
}
.com__section--text-img {
  display: flex;
  flex-flow: row wrap;
}
.com__nav {
  width: 90px;
}
.com__nav-list {
  margin: 0;
  padding: 0;
  list-style-type: none;
  display: flex;
  flex-flow: column wrap;
  height: 100vh;
  overflow: visible;
}
.com__nav-item {
  flex: 1;
  position: relative;
  overflow: visible;
  border-bottom: 7px solid #fff;
  background: #00A1db;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
.com__nav-item.active {
  background: #20232a;
}
.com__nav-item:last-child {
  border-bottom: none;
}
.com__nav-item:hover {
  flex: 2;
}
.com__nav-item:hover .com__nav-link {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
}
.com__nav-item:hover .blue-line,
.com__nav-item:hover .white-line,
.com__nav-item:hover .white-circle {
  -webkit-transform: none;
          transform: none;
  opacity: 1;
}
.com__nav-link {
  display: flex;
  flex-flow: column wrap;
  justify-content: center;
  padding: 0 20%;
  position: absolute;
  width: 280%;
  height: 100%;
  left: calc(-280% + 90px);
  background: rgba(32, 35, 42, 0.75);
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: right center;
          transform-origin: right center;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}
.com__nav-link.flex-row {
  flex-flow: row wrap;
}
.com__nav-link.centered {
  align-items: center;
}
.com__nav-link .com__section-half {
  height: auto;
}
.com__nav-link .com__section-half:nth-child(2) {
  align-items: center;
}

.blue-line {
  display: block;
  width: 80%;
  height: 14px;
  background: #00A1db;
  margin-bottom: 12px;
}

.white-line {
  display: block;
  width: 60%;
  height: 5px;
  background: rgba(255, 255, 255, 0.9);
  margin-bottom: 7px;
}
.white-line:nth-of-type(3) {
  width: 50%;
}

.white-circle {
  display: block;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.9);
}

/* animation classes */
.animate {
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}

.slideInLeft {
  -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0);
  opacity: 0;
}

.slideInRight {
  -webkit-transform: translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0);
  opacity: 0;
}

.scaleIn {
  -webkit-transform: scale(0);
          transform: scale(0);
}

.scaleInLeft {
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: left center;
          transform-origin: left center;
}

.delay-1 {
  transition-delay: 0.05s;
}

.delay-2 {
  transition-delay: 0.1s;
}

.delay-3 {
  transition-delay: 0.15s;
}

.delay-4 {
  transition-delay: 0.2s;
}

.delay-5 {
  transition-delay: 0.25s;
}

.logo {
  position: fixed;
  bottom: 3vh;
  left: 3vw;
  z-index: 2;
}
.logo img {
  width: 45px;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
  -webkit-transform: rotate(0);
          transform: rotate(0);
}
.logo img:hover {
  -webkit-transform: rotate(180deg) scale(1.1);
          transform: rotate(180deg) scale(1.1);
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="com">
	<div class="com__content">
		<section class="com__section com__section--text com__section--text-img">
			<div class="com__section-half">
			<h1 class="animate slideInLeft " style="">New Cleaning Request</h1>
			<p class="animate slideInLeft delay-3">You Can Ask For Cleaning Mission In  order To Availability Of our Cabins Cleaning team and Asset Cleaning schedule.</p>
		</div>
			<div class="com__section-half">
				<img src="img/cabin cleaner-dark.png">
			</div>
		</section>
		<section class="com__section com__section--text com__section--text-img">
			<div class="com__section-half">
				<h1 class="animate slideInLeft"  style="color: white;">Track Operations</h1>
				<p class="animate slideInLeft delay-2">Track Operations according to Mission Team, Location, And Status.</p>
			</div>
			<div class="com__section-half">
				<img src="img/map-dark.png">
			</div>
		</section>
		<section class="com__section com__section--text centered" style="padding: 0;">
			<h1 class="animate scaleIn" ><span  style="color: white;">Rate Work</span></h1>
			<img src="img/hand-dark.png">
		</section>
		<section class="com__section com__section--text com__section--text-img">
			<div class="com__section-half">
			<h1 class="animate slideInLeft ">Share Ideas</h1>
			<p class="animate slideInLeft delay-3">Sharing Wins and Suggested ideas are always Welcomed</p>
		</div>
		<div class="com__section-half">
				<img src="img/share.png">
			</div>
		</section>
		<section class="com__section com__section--text com__section--text-img">
			<div class="com__section-half">
				<h1 class="animate slideInLeft">Claims</h1>
				<p class="animate slideInLeft delay-2">Remarks, issues.</p>
			</div>
			<div class="com__section-half">
				<img src="img/claims.png">
			</div>
		</section>
	</div>
	<nav class="com__nav">
		<ul class="com__nav-list">
			<li class="com__nav-item">
				<a href="" class="com__nav-link">
					<img src="img/vacuum.png" style="width: 90%; align-content: center;">
				</a>
			</li>
			<li class="com__nav-item">
				<a href="" class="com__nav-link flex-row">
					<div class="com__section-half" align="center">
						<img src="img/maps.png" style="width: 50%; align-content: center;">
					</div>
				</a>
			</li>
			<li class="com__nav-item">
				<a href="" class="com__nav-link centered">
					<img src="img/rate.png" style="width: 60%; align-content: center;">
				</a>
			</li>
			<li class="com__nav-item">
				<a href="" class="com__nav-link">
					<span class="blue-line animate scaleInLeft delay-2"></span>
					<span class="white-line animate scaleInLeft delay-4"></span>
					<span class="white-line animate scaleInLeft delay-5"></span>
				</a>
			</li>
			<li class="com__nav-item">
				<a href="" class="com__nav-link flex-row">
					<div class="com__section-half">
						<span class="blue-line animate scaleInLeft delay-3"></span>
						<span class="white-line animate scaleInLeft delay-4"></span>
					</div>
					<div class="com__section-half">
						<span class="white-circle animate slideInRight delay-5"></span>
					</div>
				</a>
			</li>
	
		</ul>
	</nav>
</div>



<script type="text/javascript">
	var link = $('.com__nav-link');
var linkParent = link.parent('li');
var section = $('.com__section');
var sectionContent = section.find('*');

var switchTab = function() {
	var p = $(this).parent('li');
	var i  = p.index();
	var s = section.eq(i);
	var c = s.find('*');
	
	section.removeClass('active');
	sectionContent.removeAttr('style');
	s.addClass('active');
	
	c.css({
		transform: 'none',
		opacity: 1
	});
	
	linkParent.removeClass('active');
	p.addClass('active');
	
	return false;
};

link.on('click', switchTab);

function activeFirst() {
	section.first().addClass('active');
	section.first().find('*').css({
		transform: 'none',
		opacity: 1
	});
	linkParent.first().addClass('active');
}

activeFirst();
</script>
</body>
</html>