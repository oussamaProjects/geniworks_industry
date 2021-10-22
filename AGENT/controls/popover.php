<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		a {
  cursor: pointer;
}

.visuallyhidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.content {
  padding: 200px 60px 0;
}

.popover-toggle-1 {
  padding: 10px;
}

.popover-toggle-2 {
  box-sizing: border-box;
  width: 50px;
  height: 50px;
  padding-top: 15px;
  border-radius: 50%;
  background-color: tomato;
  text-align: center;
}

.popover-toggle {
  display: inline-block;
}

.popover {
  position: absolute;
  min-width: 200px;
  max-width: 380px;
  z-index: 17;
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s 0.3s, opacity 0.3s;
}
.popover.active {
  visibility: visible;
  opacity: 1;
  transition-delay: 0s;
}

.popover-inner {
  box-sizing: border-box;
  max-width: 380px;
  padding: 12px 32px 12px 16px;
  border-radius: 2px;
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
  color: #FFF;
  background-color: #000;
}

.popover-close {
  position: absolute;
  top: -4px;
  right: -4px;
  padding: 10px;
}

.popover-arrow {
  position: absolute;
  display: block;
  border-style: solid;
  border-color: #000;
  top: 100%;
  border-bottom: none;
  border-top-width: 9px;
  border-right: 8px solid transparent;
  border-left: 8px solid transparent;
}

@media (min-width: 481px) {
  .popover-arrow {
    left: 15px !important;
  }
}
@media (max-width: 480px) {
  .popover {
    right: 15px !important;
    left: 15px !important;
  }
}

	</style>
<div class="content">
  
  <a role="button" tabindex="0" class="popover-toggle popover-toggle-1" aria-haspopup="true" aria-expanded="false">Open pop over!</a>
  <div class="popover">
    <div class="popover-inner">
      <p>lorem ipsum</p>
      <a href="#">Link</a>
      <a href="#">Link 2</a>  
      <a role="button" tabindex="0" class="tapicon-close popover-close">
        <span aria-hidden="true">X</span>
        <span class="visuallyhidden">Close popover</span>
      </a>
    </div>
    <span class="popover-arrow"></span>
  </div>

  <a role="button" tabindex="0" class="popover-toggle popover-toggle-2" aria-haspopup="true" aria-expanded="false">Wow!</a>
  <div class="popover">
    <div class="popover-inner">
      <p>lorem ipsum wow popover. dcsdcs sdcsdcsdc dcsdcsdc sdcsdcsdc xc cxc c </p>
      <a href="#">Link</a>
      <a role="button" tabindex="0" class="tapicon-close popover-close">
        <span aria-hidden="true">X</span>
        <span class="visuallyhidden">Close popover</span>
      </a>
    </div>
    <span class="popover-arrow"></span>
  </div>
</div>

<script type="text/javascript">
	$('a[role="button"]').on('keypress', function(e){

    var $this = $(this);
    if (e.keyCode === 32) { // check for Space key
        $this.trigger('click');
        return false;
    }
});

// Popover ------------------------------

function openPopover(el) {

  // close opened popovers
  closePopover($('.popover'));
  
  var $this = el;
  var $popover = $this.next('.popover');
  var position = $this.position();
  var width = $this.width();
  var height = $this.height();
  var margin_top = parseInt($this.css('marginTop'));
  var margin_left = parseInt($this.css('marginLeft'));
  var popover_height = $popover.height();

  $popover
    .addClass('active')
    .css({
      'top': position.top + margin_top - popover_height - 16, // position top - popover height - arrow
      'left': position.left + margin_left + (width/2) - 23 // position left + half of the toggle width - arrow position
    })
  
  .find('.popover-arrow')
    .css({
      'left': position.left + (width/2) - 23 // position arrow for xsmall media querie
    });
  
  $this.attr('aria-expanded', 'true');
}

function closePopover(el) {
  el.removeClass('active').prev('.popover-toggle').attr('aria-expanded', 'false');
}

$('.popover-toggle').on('click', function() {
  var el = $(this);
  var $popover = el.next('.popover');

  if ($popover.hasClass('active')) {
    closePopover($popover);
  }
  else {
    openPopover(el);
  }
});

$('.popover-close').on('click', function() {
  var el = $(this).closest('.popover');
  closePopover(el);
});
</script>
</body>
</html>