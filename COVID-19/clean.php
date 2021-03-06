<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
  <title></title>
  <style type="text/css">
    body {
  font-family: "Roboto";
 
}

      * {
  box-sizing: border-box;
  outline: none;
}


html {
    height: 100%;
}
body {

    background-repeat: no-repeat;
    background-attachment: fixed;
}

body {
  background: -webkit-gradient(linear, left top, left bottom, from(#0d1429), to(#2d78ad)) fixed;
}
.back {
 
  width: 100%;
  height: 100%;
}

.registration-form {


  width: 400px;
  position: absolute;
  left: 50%;
  -webkit-transform: translate(-50%, 0%);
          transform: translate(-50%, 0%);
  top: 15%;
  background: transparent;
}
.registration-form header {
  position: relative;
  z-index: 4;


  background: #ffffff;
    border-radius: 4px;
    color: #0b1521;
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    font-weight: normal;
    line-height: 20px;
    padding: 30px;
}
.registration-form header h1 {
  font-weight: 900;
  letter-spacing: 1.5px;
  color: #333;
  font-size: 23px;
  text-transform: uppercase;
  margin: 0;
}
.registration-form header p {
  word-spacing: 0px;
  color: #9facb6;
  font-size: 17px;
  margin: 0;
  margin-top: 5px;
}
.registration-form form {
  position: relative;
}
.registration-form .input-section {
  width: 100%;
  position: absolute;
  display: -webkit-box;
  display: flex;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  height: 75px;
  border-radius: 0 0 15px 15px;
  overflow: hidden;
  z-index: 2;
  box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.registration-form .input-section.folded {
  width: 95%;
  margin-top: 10px;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
.registration-form .input-section.folded input {
  background-color: #e9e2c0;
}
.registration-form .input-section.folded span {
  background-color: #e9e2c0;
}
.registration-form .input-section.folded + .folded {
  width: 90%;
  margin-top: 20px;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 0;
}
.registration-form .input-section.folded + .folded input {
  background-color: #e1bcef;
}
.registration-form .input-section.folded + .folded span {
  background-color: #e1bcef;
}
.registration-form .input-section.fold-up {
  margin-top: -75px;
}
.registration-form form input {
  background: white;
  color: #8f8fd6;
  width: 80%;
  border: 0;
  padding: 20px 40px;
  margin: 0;
}
.registration-form form input:focus {
  outline: none;
}
.registration-form form input::-webkit-input-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input::-moz-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input:-ms-input-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input::-ms-input-placeholder {
  color: #8f8fd6;
  font-weight: 100;
}
.registration-form form input::placeholder {
  color: #8f8fd6;
  font-weight: 100;
}

.animated-button {
  width: 20%;
  background-color: #d4d4ff;
}
.animated-button span {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  justify-content: space-around;
  -webkit-box-align: center;
          align-items: center;
  line-height: 75px;
  text-align: center;
  height: 75px;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.animated-button span i {
  font-size: 25px;
  color: #9999f8;
}
.animated-button .next-button {
  background: transparent;
  color: #9999f8;
  font-weight: 100;
  width: 100%;
  border: 0;
}

.next {
  margin-top: -75px;
}

.success {
  width: 100%;
  position: absolute;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  height: 75px;
  border-radius: 0 0 15px 15px;
  overflow: hidden;
  z-index: 2;
  box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  background: limegreen;
  margin-top: -75px;
}
.success p {
  color: white;
  font-weight: 900;
  letter-spacing: 2px;
  font-size: 18px;
  width: 100%;
  text-align: center;
}

  </style>
</head>
<body>
<div class="back"></div>
<div class="registration-form">
  <header>
    <h1>Sign Up</h1>
    <p>Fill in all informations</p>
  </header>
  <form>
    <div class="input-section email-section">
      <input class="email" type="email" placeholder="ENTER YOUR E-MAIL HERE" autocomplete="off"/>
      <div class="animated-button"><span class="icon-paper-plane"><i class="fa fa-envelope-o"></i></span><span class="next-button email"><i class="fa fa-arrow-up"></i></span></div>
    </div>
    <div class="input-section password-section folded">
      <input class="password" type="password" placeholder="ENTER YOUR PASSWORD HERE"/>
      <div class="animated-button"><span class="icon-lock"><i class="fa fa-lock"></i></span><span class="next-button password"><i class="fa fa-arrow-up"></i></span></div>
    </div>
    <div class="input-section repeat-password-section folded">
      <input class="repeat-password" type="password" placeholder="REPEAT YOUR PASSWORD HERE"/>
      <div class="animated-button"><span class="icon-repeat-lock"><i class="fa fa-lock"></i></span><span class="next-button repeat-password"><i class="fa fa-paper-plane"></i></span></div>
    </div>
    <div class="success"> 
      <p>ACCOUNT CREATED</p>
    </div>
  </form>
</div>

<script type="text/javascript">
  $('.email').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-paper-plane').addClass("next");
    } else {
      $('.icon-paper-plane').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.email').click(
  function(){
    console.log("Something");
    $('.email-section').addClass("fold-up");
    $('.password-section').removeClass("folded");
  }
);

$('.password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-lock').addClass("next");
    } else {
      $('.icon-lock').removeClass("next");
    }
  }
);

$('.next-button').hover(
  function(){
    $(this).css('cursor', 'pointer');
  }
);

$('.next-button.password').click(
  function(){
    console.log("Something");
    $('.password-section').addClass("fold-up");
    $('.repeat-password-section').removeClass("folded");
  }
);

$('.repeat-password').on("change keyup paste",
  function(){
    if($(this).val()){
      $('.icon-repeat-lock').addClass("next");
    } else {
      $('.icon-repeat-lock').removeClass("next");
    }
  }
);

$('.next-button.repeat-password').click(
  function(){
    console.log("Something");
    $('.repeat-password-section').addClass("fold-up");
    $('.success').css("marginTop", 0);
  }
);
</script>
</body>
</html>
