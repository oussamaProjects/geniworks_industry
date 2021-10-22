$(function(){
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