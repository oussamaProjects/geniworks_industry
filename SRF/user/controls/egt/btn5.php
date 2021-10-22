<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=RobotoDraft:400,500,700,400italic' rel='stylesheet' type='text/css'>

<div class="row">
  <div class="progress-btn" data-progress-style="fill-back">
    <div class="btn">Button</div>
    <div class="progress"></div>
  </div>

  <div class="progress-btn" data-progress-style="fill-bottom">
    <div class="btn">Button</div>
    <div class="progress"></div>
  </div>

  <div class="progress-btn" data-progress-style="fill-top">
    <div class="btn">Button</div>
    <div class="progress"></div>
  </div>
</div>

<div class="row">
  <div class="progress-btn" data-progress-style="indefinite">
    <div class="btn">Button</div>
    <div class="progress"></div>
  </div>
  
  <div class="progress-btn" data-progress-style="indefinite-circle">
    <div class="btn">Button</div>
    <svg class="progress circle-loader" width="40" height="40" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle cx="20" cy="20" r="15">
    </svg>
  </div>
</div>
<style>
  .row {
  display: flex;
  justify-content: space-around;
  margin-top: 50px;
}
.progress-btn {
  position: relative;
  width: 150px;
  height: 50px;
  display: inline-block;
  background: #f44336;
  font-family: "RobotoDraft","Roboto",sans-serif;
  color: #fff;
  font-weight: normal;
  font-size: 20px;
  transition: all 0.4s ease;
}
.progress-btn:not(.active) {
  cursor: pointer;
}

.progress-btn .btn {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  line-height: 50px;
  text-align: center;
  z-index: 10;
  opacity: 1;
}

.progress-btn .progress {
  width: 0%;
  z-index: 5;
  background: #D32F2F;
  opacity: 0;
  transition: all 0.3s ease;
}
.progress-btn.active .progress {
  opacity: 1;
  animation: progress-anim 10s ease 0s;
}
.progress-btn[data-progress-style='indefinite'].active .progress {
  animation: progress-indefinite-anim 1s infinite linear 0s;
}
.progress-btn[data-progress-style='fill-bottom'].active .progress, .progress-btn[data-progress-style='fill-top'].active .progress {
  height: 5px;
}
.progress-btn[data-progress-style='indefinite-circle'].active .progress {
  animation: dash 2s ease infinite,
             rotate 2s linear infinite;
}

.progress-btn[data-progress-style='indefinite-circle'].active {
  width: 50px;
}

.progress-btn[data-progress-style='fill-back'] .progress {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
}
.progress-btn[data-progress-style='fill-bottom'] .progress {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 0;
}
.progress-btn[data-progress-style='fill-top'] .progress {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  height: 0;
}
.progress-btn[data-progress-style='indefinite'] .progress {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: url("data:image/svg+xml,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20width%3D'50'%20height%3D'100'%20viewBox%3D'0%200%205%2010'%3E%0A%09%3Crect%20width%3D'110%25'%20x%3D'-5%25'%20y%3D'-5%25'%20height%3D'110%25'%20fill%3D'transparent'%2F%3E%0A%09%3Cline%20x1%3D'-2'%20y1%3D'1'%20x2%3D'7'%20y2%3D'10'%20stroke%3D'%23D32F2F'%20stroke-width%3D'2'%2F%3E%0A%09%3Cline%20x1%3D'-2'%20y1%3D'6'%20x2%3D'7'%20y2%3D'15'%20stroke%3D'%23D32F2F'%20stroke-width%3D'2'%2F%3E%0A%09%3Cline%20x1%3D'-2'%20y1%3D'-4'%20x2%3D'7'%20y2%3D'5'%20stroke%3D'%23D32F2F'%20stroke-width%3D'2'%2F%3E%0A%3C%2Fsvg%3E");
}
.progress-btn[data-progress-style='indefinite-circle'] .progress {
  width: 40px;
  height: 40px;
  background: transparent;
  position: absolute;
  top: 5px;
  left: calc(50% - 20px);
}
.progress-btn[data-progress-style='indefinite-circle'].active .btn {
  opacity: 0;
}

.circle-loader {
  fill: transparent;
  stroke: #eee;
  stroke-width: 5;
}




@keyframes dash {
  0% {
    stroke-dasharray: 1,95;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 85,95;
    stroke-dashoffset: -25;
  }
  100% {
    stroke-dasharray: 85,95;
    stroke-dashoffset: -93;
  }
}

@keyframes rotate {
  0% {transform: rotate(0deg); }
  100% {transform: rotate(360deg); }
}

@keyframes progress-anim {
  0% {
    width: 0%;
  }
  5% {
    width: 0%;
  }
  10% {
    width: 15%;
  }
  30% {
    width: 40%;
  }
  50% {
    width: 55%;
  }
  80% {
    width: 100%;
  }
  95% {
    width: 100%;
  }
  100% {
    width: 0%;
  }
}

@keyframes progress-indefinite-anim {
  0% {
    background-position: 0% 0%;
  }
  100% {
    background-position: 100% 0%;
  }
}
</style>
<script src="">
  $(document).ready(function() {
  $(".progress-btn").on("click", function() {
    var progressBtn = $(this);
    
    if (!progressBtn.hasClass("active")) {
      progressBtn.addClass("active");
      setTimeout(function() {
        progressBtn.removeClass("active");
      }, 10000);
    }
  })
});
</script>