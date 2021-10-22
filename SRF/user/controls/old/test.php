<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>


<div class="custom-quantity-input">
  <input type="number" min="0" width="5" name="quantity" class="" value="5">
     <a href="#" class="quantity-btn quantity-input-up">+</a>
     <a href="#" class="quantity-btn quantity-input-down">-</a>
</div>

<script>
$(document).ready(function(){
  $(".quantity-input-up").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    inpt.val(val+1);
  });
  $(".quantity-input-down").click(function(){
    var inpt = $(this).parents(".custom-quantity-input").find("[name=quantity]");
    var val = parseInt(inpt.val());
    if ( val < 0 ) inpt.val(val=0);
    if ( val == 0 ) return;
    inpt.val(val-1);
  });
});
</script>
</body>
</html>