<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
</head>
<body>
<style type="text/css">
	.flex-out {
    display: flex;
    border: 0.5px solid gray;
}
.flex-out > .flex-inside-1 {
    flex: 1;
    display: flex;
    flex-direction: column;

}
.flex-out > .flex-inside-2 {
    flex: 2;
    position:relative;
    overflow: hidden;
}
label[for*=btn] {
    display: block;
}

button {
    box-sizing: border-box;
    margin: 10px;
    margin-left: 30px;
    margin-right: 30px;
}

.container {
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.flex-inside-2  form {
    position: absolute;
    top:-30%;
    transform: translateY(-50%);
    transition: top .8s;
    -webkit-transition: top .8s;
    transition-timing-function: ease;
}

.hidden {
    display: none;
}

.form-group > #btn-1-form {
    top: 30%;
}



</style>
<div class="container">
<div class="flex-out">
    <div class="flex-inside-1">
        <button class='btn btn-info btn-form' id='btn-1'>btn1</button>
        <button class='btn btn-info btn-form' id='btn-2'>btn2</button>
        <button class='btn btn-info btn-form' id='btn-3'>btn3</button>
    </div>
    <div class="flex-inside-2">
        <div class="form-group">
            <form action="" class="" id="btn-1-form">
            <label for="btn1-content">Btn1 Content : </label>
            <input type="email" class='form-control' id="btn1-content">
            </form>
        <form action="" class="hidden" id="btn-2-form">
            <label for="btn2-content">Btn2 Content : </label>
            <input type="email" class='form-control' id="btn2-content">
        </form>
        <form action="" class="hidden" id="btn-3-form">
            <label for="btn3-content">Btn3 Content : </label>
            <input type="email" class='form-control' id="btn3-content">
        </form>
        </div>
    </div>
</div>    
</div>

<script type="text/javascript">
	let $currentForm = $('#btn-1-form');
let currentPosition = 1;

//eventDelegation
$('.btn-form').on('click', function() {
   let currentFormId = $currentForm.attr('id');
   let thisId = $(this).attr('id');
   if(!currentFormId.includes(thisId)) {
       $('#' + thisId + '-form').css('display', 'block').animate({
           top: "40%" 
        });
       $currentForm.css('top', "200%");
       setTimeout((function($current) {
                return function() {
                    $current.css({
                        display: "none",
                        top: "-30%"
                    });
                }
         })($currentForm), 900);
         $currentForm = $('#' + thisId + '-form');
   }
});


/*$('.btn-2').on('click', function() {
    if(!$currentForm.attr('id').includes('btn-2')) {
        $('#btn-2-form').css('display', 'block').animate({
           top: "40%" 
        });
         $currentForm.css('top', "200%");
         setTimeout((function($current) {
                return function() {
                    $current.css({
                        display: "none",
                        top: "-30%"
                    });
                }
         })($currentForm), 900);
         $currentForm = $('#btn-2-content');
    }
    //만약 클릭한 버튼과 해당 폼이 동일하지 않다면
     /*if() {
     }
});

$('.btn-1').on('click', function() {
    
})*/




</script>
</body>
</html>