<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<style type="text/css">
  /* Section Services */
body {
  background-color: #00A1db;
  background-size: cover;
  background-repeat: no-repeat;
}

.services {
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.services > * {
  flex-grow: 1;
}

.circle--rotate {
  border-radius: 50%;

  border: 1px solid #fff;
  width: 43%;
  height: 43%;
  margin: 0 auto 0;
  position: relative;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  z-index: 0;
  padding: 0;
}
.circle--rotate > li {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  display: block;
  border-radius: 50%;
  z-index: 10;
  visibility: hidden;
}
.circle--rotate > li .icon {
  visibility: visible;
  cursor: pointer;
  text-align: center;
  overflow: hidden;
  font-size: 20px;
  color: #00A1db;
  border-radius: 50%;
  background-color: #000000;
  height: 10%;
  width: 10%;
  margin: -5% auto;
  transition: all 500ms ease;

}
.circle--rotate > li i {
  color: #ffffff;
  font-size: 24px;
  margin: auto;
  cursor: pointer;
  width: 100%;
  height: 100%;
  display: table;
}
.circle--rotate > li i::before {
  display: table-cell;
  vertical-align: middle;
}
.circle--rotate > li img {
  margin: auto;
}

.circle--slider {
  position: relative;
}
.circle--slider .rotate--circle {
  margin: 0 auto;
}
.circle--slider .circle--rotate > li div {
  position: relative;
  overflow: visible;
  background-color: #303156;
}
.circle--slider .circle--rotate > li div span {
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  transition: all 2s;
  opacity: 0;
}
.circle--slider .circle--rotate > li.active div {
  font-size: 20px;
  width: 100px;
  height: 100px;
  color: #00A1db;
  background-color: #fff;
  transition: all 1s;
}
.circle--slider .circle--rotate > li.active div span {
  width: 100%;
  height: 100%;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
  z-index: -1;
  opacity: 1;
}
.circle--slider .circle--rotate > li.active div i{
color: #00A1db;
}

.circle--slider .count2 li:nth-child(2) {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.circle--slider .count3 li:nth-child(2) {
  -webkit-transform: rotate(120deg);
          transform: rotate(120deg);
}
.circle--slider .count3 li:nth-child(3) {
  -webkit-transform: rotate(240deg);
          transform: rotate(240deg);
}
.circle--slider .count4 li:nth-child(2) {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
.circle--slider .count4 li:nth-child(3) {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.circle--slider .count4 li:nth-child(4) {
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}
.circle--slider .count5 li:nth-child(2) {
  -webkit-transform: rotate(72deg);
          transform: rotate(72deg);
}
.circle--slider .count5 li:nth-child(3) {
  -webkit-transform: rotate(144deg);
          transform: rotate(144deg);
}
.circle--slider .count5 li:nth-child(4) {
  -webkit-transform: rotate(216deg);
          transform: rotate(216deg);
}
.circle--slider .count5 li:nth-child(5) {
  -webkit-transform: rotate(-72deg);
          transform: rotate(-72deg);
}
.circle--slider .count6 li:nth-child(2) {
  -webkit-transform: rotate(60deg);
          transform: rotate(60deg);
}
.circle--slider .count6 li:nth-child(3) {
  -webkit-transform: rotate(120deg);
          transform: rotate(120deg);
}
.circle--slider .count6 li:nth-child(4) {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.circle--slider .count6 li:nth-child(5) {
  -webkit-transform: rotate(240deg);
          transform: rotate(240deg);
}
.circle--slider .count6 li:nth-child(6) {
  -webkit-transform: rotate(-60deg);
          transform: rotate(-60deg);
}
.circle--slider .count7 li:nth-child(2) {
  -webkit-transform: rotate(51.5deg);
          transform: rotate(51.5deg);
}
.circle--slider .count7 li:nth-child(3) {
  -webkit-transform: rotate(103deg);
          transform: rotate(103deg);
}
.circle--slider .count7 li:nth-child(4) {
  -webkit-transform: rotate(154.5deg);
          transform: rotate(154.5deg);
}
.circle--slider .count7 li:nth-child(5) {
  -webkit-transform: rotate(206deg);
          transform: rotate(206deg);
}
.circle--slider .count7 li:nth-child(6) {
  -webkit-transform: rotate(-103deg);
          transform: rotate(-103deg);
}
.circle--slider .count7 li:nth-child(7) {
  -webkit-transform: rotate(-51.5deg);
          transform: rotate(-51.5deg);
}
.circle--slider .count8 li:nth-child(2) {
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.circle--slider .count8 li:nth-child(3) {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
.circle--slider .count8 li:nth-child(4) {
  -webkit-transform: rotate(135deg);
          transform: rotate(135deg);
}
.circle--slider .count8 li:nth-child(5) {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.circle--slider .count8 li:nth-child(6) {
  -webkit-transform: rotate(-135deg);
          transform: rotate(-135deg);
}
.circle--slider .count8 li:nth-child(7) {
  -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg);
}
.circle--slider .count8 li:nth-child(8) {
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.circle--slider .count9 li:nth-child(2) {
  -webkit-transform: rotate(40deg);
          transform: rotate(40deg);
}
.circle--slider .count9 li:nth-child(3) {
  -webkit-transform: rotate(80deg);
          transform: rotate(80deg);
}
.circle--slider .count9 li:nth-child(4) {
  -webkit-transform: rotate(120deg);
          transform: rotate(120deg);
}
.circle--slider .count9 li:nth-child(5) {
  -webkit-transform: rotate(160deg);
          transform: rotate(160deg);
}
.circle--slider .count9 li:nth-child(6) {
  -webkit-transform: rotate(-160deg);
          transform: rotate(-160deg);
}
.circle--slider .count9 li:nth-child(7) {
  -webkit-transform: rotate(-120deg);
          transform: rotate(-120deg);
}
.circle--slider .count9 li:nth-child(8) {
  -webkit-transform: rotate(-80deg);
          transform: rotate(-80deg);
}
.circle--slider .count9 li:nth-child(9) {
  -webkit-transform: rotate(-40deg);
          transform: rotate(-40deg);
}
.circle--slider .count10 li:nth-child(2) {
  -webkit-transform: rotate(36deg);
          transform: rotate(36deg);
}
.circle--slider .count10 li:nth-child(3) {
  -webkit-transform: rotate(72deg);
          transform: rotate(72deg);
}
.circle--slider .count10 li:nth-child(4) {
  -webkit-transform: rotate(108deg);
          transform: rotate(108deg);
}
.circle--slider .count10 li:nth-child(5) {
  -webkit-transform: rotate(144deg);
          transform: rotate(144deg);
}
.circle--slider .count10 li:nth-child(6) {
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}
.circle--slider .count10 li:nth-child(7) {
  -webkit-transform: rotate(-144deg);
          transform: rotate(-144deg);
}
.circle--slider .count10 li:nth-child(8) {
  -webkit-transform: rotate(-108deg);
          transform: rotate(-108deg);
}
.circle--slider .count10 li:nth-child(9) {
  -webkit-transform: rotate(-72deg);
          transform: rotate(-72deg);
}
.circle--slider .count10 li:nth-child(10) {
  -webkit-transform: rotate(-36deg);
          transform: rotate(-36deg);
}
.circle--slider .animate-wrapper {
  width: 25%;
  height: 25%;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  border-radius: 50%;
}
.circle--slider .animate-title {
  color: #fff;
}
.circle--slider .animate-img {
  width: 25%;
  height: 25%;
  border-radius: 50%;
  overflow: hidden;
}
.circle--slider .animate-img .animate-img__in {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  border-radius: 50%;
  background-repeat: no-repeat;
  z-index: 3;
  -webkit-transform: rotate3d(0, 0, 0, 0deg) scale(0.85);
          transform: rotate3d(0, 0, 0, 0deg) scale(0.85);
  transition: .55s ease-in-out;
  width: 100%;
  height: 100%;
  opacity: 0;
  background-size: cover; 
}
.circle--slider .animate-more {
  opacity: 0;
  visibility: hidden;
  transition: all .5s .4s;
  min-width: 131px;
  overflow: hidden;
  text-align: center;
  z-index: 30;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  padding: 15px;
  height: 62px;
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
}
.circle--slider .animate.active .animate-more {
  opacity: 1;
  visibility: visible;
  -webkit-transform: scale(1);
          transform: scale(1);
}
.circle--slider .animate.active .animate-img .animate-img__in {
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1);
}
.circle--slider .prev,
.circle--slider .next {
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
  display: block;
  height: 62px;
  width: 87px;
  text-align: center;
  cursor: pointer;
}
.circle--slider .prev span,
.circle--slider .next span {
  -webkit-writing-mode: vertical-rl;
      -ms-writing-mode: tb-rl;
          writing-mode: vertical-rl;
  text-orientation: upright;
  font-weight: 700;
}
.circle--slider .prev {
  left: 250px;
}
.circle--slider .next {
  right: 250px;
}

</style>
</head>
<body>

<section class="services">
  <div class="circle--slider">
    <div class="rotate--circle">
      <ul class="circle--rotate" id="circle--rotate">
        <li class="block">
          <div class="icon"><i class="fa fa-plus"></i><span> </span></div>
        </li>
        <li class="block">
          <div class="icon"><i class="fa fa-map"></i><span> </span></div>
        </li>
        <li class="block">
          <div class="icon"><i class="fa fa-star"></i><span> </span></div>
        </li>
        <li class="block">
          <div class="icon"><i class="fa fa-cogs"></i><span> </span></div>
        </li>
        <li class="block">
          <div class="icon"><i class="fa fa-share"></i><span> </span></div>
        </li>

      </ul>
      <div class="animate-wrapper">
        <div class="animate">
          <div class="animate-img">
            <div class="animate-img__in" data-image="">
              <div class="animate-more">
                <div class="animate-title">
                  <hZ>New Order</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="animate">
          <div class="animate-img">
            <div class="animate-img__in" data-image="">
              <div class="animate-more">
                <div class="animate-title">
                  <h4>Track Orders</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="animate">
          <div class="animate-img">
            <div class="animate-img__in" data-image="">
              <div class="animate-more">
                <div class="animate-title">
                  <h4>Rating</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="animate">
          <div class="animate-img">
            <div class="animate-img__in" data-image="">
              <div class="animate-more">
                <div class="animate-title">
                  <h4>Settings</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="animate">
          <div class="animate-img">
            <div class="animate-img__in" data-image="">
              <div class="animate-more">
                <div class="animate-title">
                  <h4>Share Ideas</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="animate">
          <div class="animate-img">
            <div class="animate-img__in" data-image="">
              <div class="animate-more">
                <div class="animate-title">
                  <h4>E-commerce solutions</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="animate">
          <div class="animate-img">
            <div class="animate-img__in" data-image="">
              <div class="animate-more">
                <div class="animate-title">
                  <h4>VALID HTML & CSS</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="animate">
          <div class="animate-img">
            <div class="animate-img__in" data-image="">
              <div class="animate-more">
                <div class="animate-title">
                  <h4>Mobile Solutions</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
  (function(e) {
      e.fn.circle = function(t) {
          var n = e.extend({
              speed: "5000"
          }, t);
          return this.each(function() {
              function t() {
                  var e = i.find("li.block.active").index();
                  c.removeClass("active"), c.eq(e).addClass("active")
              }

              function o() {
                  var n;
                  i.addClass("disable-hover"), i.stop(!0, !0).animate({
                      rotatedeg: p.deg += p.step
                  }, {
                      duration: 400,
                      step: function(t) {
                          t >= 360 ? t -= 360 : t <= -360 && (t += 360), e(this).css("transform", "rotate(" + t + "deg)"), e(this).css("-webkit-transform", "rotate(" + t + "deg)")
                      },
                      complete: function() {
                          p.active = i.find("li.active").removeClass("active"), "right" == p.direction && p.step == d && (p.active.prev() && p.active.prev().length ? (n = p.active.prev().index(), p.active.prev().addClass("active")) : (p.active.siblings(":last-child").addClass("active"), n = 9)), "left" == p.direction && p.step == u && (p.active.next() && p.active.next().length ? (n = p.active.next().index(), p.active.next().addClass("active")) : (p.active.siblings(":first-child").addClass("active"), n = 0)), i.is(":animated"), i.removeClass("disable-hover"), t()
                      }
                  }, "ease")
              }

              function r() {
                  i.addClass("disable-hover"), 
                    i.stop(!0, !0).animate(
                    {
                      rotatedeg: p.deg += p.step
                    }, 
                    {
                      duration: 400,
                      step: function(t) {
                          t >= 360 ? t -= 360 : t <= -360 && (t += 360), 
                            e(this).css("transform", "rotate(" + t + "deg)"), 
                            e(this).css("-webkit-transform", "rotate(" + t + "deg)")
                      },
                      complete: function() {
                          p.active = i.find("li.active"), 
                            i.is(":animated"), 
                            i.removeClass("disable-hover")
                      }
                  }, "ease")
              }
              var i = e(this),
                  s = i.find("li").length,
                  a = i.find(" > li .icon"),
                  l = "count" + s,
                  u = 0,
                  c = i.next().find(".animate"),
                  p = {
                      duration: n.speed,
                      deg: 0,
                      step: u,
                      active: i.find("li.active"),
                      direction: "left"
                  };
              switch (s) {
                  case 10:
                      u = -36;
                      break;
                  case 9:
                      u = -40;
                      break;
                  case 8:
                      u = -45;
                      break;
                  case 7:
                      u = -51.5;
                      break;
                  case 6:
                      u = -60;
                      break;
                  case 5:
                      u = -72;
                      break;
                  case 4:
                      u = -90;
                      break;
                  case 3:
                      u = -120;
                      break;
                  case 2:
                      u = -180;
                      break;
                  case 1:
                      u = -360
              }
              i.addClass(l);
              var d = u - 2 * u;
              i.find("> li").first().addClass("active"),
                i.find("> li").first().find("a").attr("href"),
                c.eq(0).addClass("active"), 
                e(a).on("click", function() {
                  var n = e(this).parent().index() - i.find("li.active").index();
                  i.children("li").removeClass("active"), 
                    e(this).parent().addClass("active"), 
                    p.step = -n * d, n * d >= 288 && (p.step = -n * d + 360), 
                    n * d <= -288 && (p.step = -n * d - 360), 
                    r(), p.step = u, p.direction = "left", t()
              });
              var f = i.parent().find("div.next"),
                  h = i.parent().find("div.prev");
              f.on("click", function() {
                  i.is(":animated") || (p.direction = "left", p.step = u, o())
              }), h.on("click", function() {
                  i.is(":animated") || (p.direction = "right", p.step = d, o())
              })
          })
      }
  }(jQuery));


$(function () {
  //Background image
  $('div').each(function () {
      var url = $(this).attr('data-image');
      if (url) {
          $(this).css('background-image', 'url(' + url + ')');
      }
  });

  $('section').each(function () {
      var url = $(this).attr('data-image');
      if (url) {
          $(this).css('background-image', 'url(' + url + ')');
      }
  });
  
  // Service Auto height circle 
  function autoHeightCircle() {
      var circle = $('.circle--rotate'),
          circleInner = $('.animate-wrapper'), 
          circleH = circle.width(),
          circleInnerH = circleInner.width();
      circle.height(circleH);
      circleInner.height(circleInnerH);
  }

  $("#circle--rotate").circle();
  autoHeightCircle();
  $(window).resize(function () {
      autoHeightCircle();
  });
});
</script>

</body>
</html>