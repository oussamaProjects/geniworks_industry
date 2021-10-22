<style>

.split {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: strech;
}
.split p {
  flex-basis: 100%;
}
@media screen and (min-width: 767px) {
  .split p {
    flex-basis: 48%;
  }
}


.containerr {
  position: relative;
  width: 100%;
  margin: 50px 0;
}
.containerr .innerr {
  position: relative;
  width: 100%;
  max-width: 960px;
  margin: 0 auto;
  overflow: hidden;
  box-sizing: border-box;
  padding: 0px 20px;
  
}

.comparison-slider-wrapper {
  position: relative;
  width: 100%;
  margin: 20px 0;
  background-color: white;
}
.comparison-slider-wrapper .comparison-slider {
  position: relative;
  width: 100%;
  margin: 0;
  border: 5px white solid;
  box-sizing: border-box;
}
.comparison-slider-wrapper .comparison-slider > img {
  width: 100%;
  height: auto;
  display: block;
}
.comparison-slider-wrapper .comparison-slider .overlayy {
  display: none;
  position: absolute;
  width: 250px;
  bottom: 20px;
  right: 20px;
  background-color: rgba(0, 0, 0, 0.4);
  padding: 10px;
  box-sizing: border-box;
  color: #DDD;
  text-align: right;
}
@media screen and (min-width: 767px) {
  .comparison-slider-wrapper .comparison-slider .overlayy {
    display: block;
  }
}
.comparison-slider-wrapper .comparison-slider .resizee {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 50%;
  overflow: hidden;
}
.comparison-slider-wrapper .comparison-slider .resizee > img {
  display: block;
}
.comparison-slider-wrapper .comparison-slider .resizee .overlayy {
  right: auto;
  left: 20px;
  text-align: left;
}
.comparison-slider-wrapper .comparison-slider .dividerr {
  position: absolute;
  width: 2px;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  left: 50%;
  top: 0;
  bottom: 0;
  margin-left: -1px;
  cursor: ew-resizee;
}
.comparison-slider-wrapper .comparison-slider .dividerr:before {
  content: "";
  position: absolute;
  width: 20px;
  height: 20px;
  left: -9px;
  top: 50%;
  margin-top: -10px;
  background-color: white;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  transition: all 0.1s ease-in-out;
}
.comparison-slider-wrapper .comparison-slider .dividerr:after {
  content: "";
  position: absolute;
  width: 12px;
  height: 12px;
  left: -5px;
  top: 50%;
  margin-top: -6px;
  background-color: white;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  transition: all 0.1s ease-in-out;
}
.comparison-slider-wrapper .comparison-slider .dividerr.draggable:before {
  width: 30px;
  height: 30px;
  left: -14px;
  margin-top: -15px;
}
.comparison-slider-wrapper .comparison-slider .dividerr.draggable:after {
  width: 20px;
  height: 20px;
  left: -9px;
  margin-top: -10px;
  background-color: #555;
}
.comparison-slider-wrapper .caption {
  position: relative;
  width: 100%;
  padding: 10px;
  box-sizing: border-box;
  font-size: 12px;
  font-style: italic;
}



.comparison-slider-wrapper .comparison-slider .logos {
  display: none;
  position: absolute;
  width: 35%;
  top: 0px;
  right: 20px;
  padding: 0px 10px;
  box-sizing: border-box;
  opacity: 0.3;
  text-align: right;
}
@media screen and (max-width: 767px) {
  .comparison-slider-wrapper .comparison-slider .logos {
    display: block;
  }
}
@media screen and (min-width: 767px) {
  .comparison-slider-wrapper .comparison-slider .logos {
    display: block;
  }
}

</style>

  <?php
                                                        if (($showasset[7]=='done')) {



$selectafter=$cdb->prepare("SELECT * FROM after_inspection WHERE afin_inspection_id='$showasset[0]'");
$selectafter->execute();
if ($selectafter===false) {
  echo "We Have Problem! We will fix it soon.";
}

else{
  $resafter=$selectafter->get_result();

                                ?>
                                                          
<div class="containerr">
 <div class="innerr">
   
   <div class="comparison-slider-wrapper">
    
    <div class="comparison-slider">
      <div class="logos"><img src="controls/img/logo-geniworks.png"></div>
      <div class="overlayy"><strong>after</strong> .</div>
      <?php while ($showafter=$resafter->fetch_row()) {
        ?>
     <img src="controls/img/after/<?php echo $showafter[2]?>" alt="after">
    <?php }?>
    
     <div class="resizee">
       <div class="overlayy"><strong>before</strong>.</div>
      <img src="../../controls/img/assets/<?php echo $showasset[5];?>" alt="">
     </div>
    
     <div class="dividerr"></div>
    </div>
   </div>
   



 </div>
</div>
<?php }}
else{?>
                                                          
<div class="containerr">

   <div class="comparison-slider-wrapper">
    <div class="comparison-slider">

      <img src="../../controls/img/assets/<?php echo $showasset[5];?>" style="">



   </div>
 </div>
</div>
<?php }
?>

<script type="text/javascript">
$(document).ready(function () {

  // If the comparison slider is present on the page lets initialise it, this is good you will include this in the main js to prevent the code from running when not needed
  if ($(".comparison-slider")[0]) {
    let compSlider = $(".comparison-slider");

    //let's loop through the sliders and initialise each of them
    compSlider.each(function () {
      let compSliderWidth = $(this).width() + "px";
      $(this).find(".resizee img").css({ width: compSliderWidth });
      drags($(this).find(".dividerr"), $(this).find(".resizee"), $(this));
    });

    //if the user resizes the windows lets update our variables and resizee our images
    $(window).on("resizee", function () {
      let compSliderWidth = compSlider.width() + "px";
      compSlider.find(".resizee img").css({ width: compSliderWidth });
    });
  }
});

// This is where all the magic happens
// This is a modified version of the pen from Ege Görgülü - https://codepen.io/bamf/pen/jEpxOX - and you should check it out too.
function drags(dragElement, resizeElement, containerr) {

  // This creates a variable that detects if the user is using touch input insted of the mouse.
  let touched = false;
  window.addEventListener('touchstart', function () {
    touched = true;
  });
  window.addEventListener('touchend', function () {
    touched = false;
  });

  // clicp the image and move the slider on interaction with the mouse or the touch input
  dragElement.on("mousedown touchstart", function (e) {

    //add classes to the emelents - good for css animations if you need it to
    dragElement.addClass("draggable");
    resizeElement.addClass("resizable");
    //create vars
    let startX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;
    let dragWidth = dragElement.outerWidth();
    let posX = dragElement.offset().left + dragWidth - startX;
    let containerOffset = containerr.offset().left;
    let containerWidth = containerr.outerWidth();
    let minLeft = containerOffset + 10;
    let maxLeft = containerOffset + containerWidth - dragWidth - 10;

    //add event listner on the dividerr emelent
    dragElement.parents().on("mousemove touchmove", function (e) {

      // if the user is not using touch input let do preventDefault to prevent the user from slecting the images as he moves the silder arround.
      if (touched === false) {
        e.preventDefault();
      }

      let moveX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;
      let leftValue = moveX + posX - dragWidth;

      // stop the dividerr from going over the limits of the containerr
      if (leftValue < minLeft) {
        leftValue = minLeft;
      } else if (leftValue > maxLeft) {
        leftValue = maxLeft;
      }

      let widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth + "%";

      $(".draggable").css("left", widthValue).on("mouseup touchend touchcancel", function () {
        $(this).removeClass("draggable");
        resizeElement.removeClass("resizable");
      });

      $(".resizable").css("width", widthValue);

    }).on("mouseup touchend touchcancel", function () {
      dragElement.removeClass("draggable");
      resizeElement.removeClass("resizable");

    });

  }).on("mouseup touchend touchcancel", function (e) {
    // stop clicping the image and move the slider
    dragElement.removeClass("draggable");
    resizeElement.removeClass("resizable");

  });

}
</script>