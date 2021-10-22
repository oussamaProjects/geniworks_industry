<!DOCTYPE html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src=""></script>

</head>
<body>

<div class="hue">
  <button id="butao" class="btn">Enviar</button>
</div>


<style>
@import url('https://fonts.googleapis.com/css?family=Lato');
.hue{width:100%;height:100px;background:#fff;text-align:center;}
.btn{width: 140px;}
button{
  margin: 5% 0;
  font-family: Lato;
  height: 50px;
  border-radius: 25px;
  border: 0;
  background: #00A1DB;
  color: #fff;
  text-transform: uppercase;
  font-size: 12pt;
  cursor: pointer;
  outline: none;
  transition: all 0.5s;
  border: 4px solid #00A1DB;
}
button:hover{transform:scale(1.06);opacity:0.8;}
.btn-fill{
  font-size: 0;
  width: 50px;
  background: #fff;
  border-right: 4px solid #fff;
}
.btn-load{animation: loader .7s linear infinite;}
@keyframes loader{
  0%{transform: rotateZ(0);}
  100%{transform: rotateZ(360deg);}
}

</style>
<script>
var button = document.querySelector('#butao');

button.onclick = function(){
  this.classList.add('btn-fill');
  setTimeout(function(){
    button.classList.add('btn-load');
  }, 200);
  setTimeout(function(){
    button.classList.remove('btn-fill');
    button.classList.remove('btn-load')
    button.innerHTML = "=D";
    setTimeout(function(){
      button.innerHTML = "Enviar";
    }, 2000);
  },4000);
}
</script>
</body>

</html>