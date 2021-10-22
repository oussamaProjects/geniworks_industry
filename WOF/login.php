<!DOCTYPE html>
<!--
Item Name: dadje - Web App & Admin
Version: 1
Author: jbenplus
-->


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GENIWORKS - Login</title>
        <meta name="description" content="MyDadje By GENIWORKS">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
       <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CNoto+Sans:400,700" media="all">
       <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://rawgit.com/icebob/vue-touch-keyboard/master/dist/vue-touch-keyboard.js"></script>
<script src="https://unpkg.com/vue@2.2.1/dist/vue.min.js"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/style.min.css">
        <link rel="stylesheet" href="assets/css/animate/animate.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body class="bg-white">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/apple-touch-icon.png" alt="logo" class="loader-logo">
               <!--  <div class="spinner"></div>    -->
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 col-12 no-padding">
                    <div class="elisyam-bg background-03">
                        <div class="elisyam-overlay overlay-08"></div>
                        <div class="authentication-col-content-2 mx-auto text-center">
                            <div class="logo-centered">
                                <a href="db-default.html">
                                    <img src="assets/img/logo-geniworks-2.png" alt="logo">
                                </a>
                            </div>
                            
                            <!-- <ul class="login-nav nav nav-tabs mt-5 justify-content-center" role="tablist" id="animate-tab">
                                <li><a class="active" data-toggle="tab" href="#singin" role="tab" id="singin-tab" data-easein="zoomInUp">Sign In</a></li>
                                <li><a data-toggle="tab" href="#signup" role="tab" id="signup-tab" data-easein="zoomInRight">Sign Up</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-9 col-lg-7 col-md-7 col-sm-12 col-12 my-auto no-padding">
                    <!-- Begin Form -->
                    <div class="authentication-form-2 mx-auto">
                        <div class="tab-content" id="animate-tab-content">
                            <!-- Begin Sign In -->
                             
                            <div role="tabpanel" class="tab-pane show active" id="singin" aria-labelledby="singin-tab">
                           
                                <!--<div class="group material-input">
        							    <input name="user" readonly="readonly" @focus="show" :next="next" data-layout="default" type="text" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Username</label>
                                    </div>
                                    <div class="group material-input">
        							    <input name="pass" readonly="readonly" @focus="show" :next="next" data-layout="default" type="password" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Password</label>
                                    </div>-->
                                


<!--<form class="form" action="controls/re-index.php" method="post">
<h3>Sign In</h3>
  <div class="group">
    <input type="text" name="user"><span class="highlight"></span><span class="bar"></span>
    <label>Username</label>
  </div>
  <div class="group">
    <input type="password"  name="pass"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  <button type="submit" name="accesu" class="btn btn-lg btn-gradient-03">LOGIN
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>-->

<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>

<div id="formWrapper">

<div id="form">
<div class="logo">
<h3>Sign In</h3>
</div>

	 <script>
	 	setTimeout(function() {
    $('#ermsg').fadeOut('fast');
}, 3000);
	 </script>
<form action="controls/re-index.php" method="post">
	
	

		<div class="form-item">
			<p class="formLabel">Username</p>
			<input type="text"  name="user" id="email" class="form-style" autocomplete="off"/>
		</div>
		<div class="form-item">
			<p class="formLabel">Password</p>
			<input type="password"  name="pass" id="password" class="form-style" />
			<!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
			<!--<p><a href="#" ><small>Forgot Password ?</small></a></p>-->
		</div><div class="form-item">
		<?php
	 if(isset($_GET['msg']))
	{
		$mesg=$_GET['msg'];
		if($mesg == 1){
			?>
			<strong id="ermsg" style=" color:#2AC772; font-size:14px; ">Wrong informations!</strong>
			<?php
			}
		if($mesg == 2){
			?>
			<strong id="ermsg" style="color:#F34E51; font-size:14px;">Wrong informations!</strong>
			<?php
			}
			if($mesg == 3){
			?>
			<strong id="ermsg" style="font-family:.85em arial, sans-serif; text-transform:uppercase; color:#E7494C; font-size:14px;"> You're Loged Out!</strong>
			<?php
			}
	}
	 ?>
		
		<!--<p class="pull-left"><a href="#"><small>Register</small></a></p>-->
		<input  type="submit" name="accesu" class="login pull-right" value="Log In">
		<div class="clear-fix"></div>
		</div>
	</form>
</div>
</div>



                               <!-- <div class="container" id="ap">	<form class="container-form" action="controls/re-index.php" method="post">
                                    <div class="group material-input">
        							    <input name="user" class=" form
        							    -control" type="text" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Username</label>
                                    </div>
                                    <div class="group material-input">
        							    <input name="pass" type="password"  required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Password</label>
                                    </div>
                                    
                                    <div class="row">
                                    <div class="col text-left">
                                       
                                    </div>
                                    <div class="col text-right">
                                      
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                     <button type="submit" class="btn btn-lg btn-gradient-03" name="accesu">LOGIN</button>   
                                    
                                </div>
                                <vue-touch-keyboard id="keyboard" v-if="visible" :layout="layout" :cancel="hide" :accept="accept" :input="input"/>
                                </form> </div>-->
                            </div>
                                
                            </div>
                            <!-- End Sign In -->
                      
                       
                    </div>
                    <!-- End Form -->                        
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Row -->
        </div>
        <style>
        .container {
  margin: 0 auto;
  align-content: center;

}
        .container-form {
  margin-right: 0 auto;


}


 #keyboard {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1000;
  width: 80%;
  max-width: 1000px;
  min-width: 80%;
  margin: 0 auto;
  padding: 1em;
  background-color: #EEE;

  border-radius: 10px;
}

.vue-touch-keyboard .keyboard {
  width: 100%;
  max-width: 1080px;
  margin: 0;
}
.vue-touch-keyboard .keyboard .line {
  display: flex;
  justify-content: space-around;
}
.vue-touch-keyboard .keyboard .line:not(:last-child) {
  margin-bottom: 5px;
}
.vue-touch-keyboard .keyboard .key {
  flex: 40;
  height: 40px;
  padding: 1%;
  line-height: 40px;
  overflow: hidden;
  vertical-align: middle;
  color: #eeeeee;
  background-color: #303156;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  font-size: 16px;
  text-align: center;
  white-space: nowrap;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  cursor: pointer;
  font-weight: 400;
}
.vue-touch-keyboard .keyboard .key:not(:last-child) {
  margin-right: 5px;
}
.vue-touch-keyboard .keyboard .key.backspace {
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI0OCIgdmlld0JveD0iMCAwIDQ4IDQ4IiB3aWR0aD0iNDgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgMGg0OHY0OGgtNDh6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTQ0IDZoLTMwYy0xLjM4IDAtMi40Ny43LTMuMTkgMS43NmwtMTAuODEgMTYuMjMgMTAuODEgMTYuMjNjLjcyIDEuMDYgMS44MSAxLjc4IDMuMTkgMS43OGgzMGMyLjIxIDAgNC0xLjc5IDQtNHYtMjhjMC0yLjIxLTEuNzktNC00LTR6bS02IDI1LjE3bC0yLjgzIDIuODMtNy4xNy03LjE3LTcuMTcgNy4xNy0yLjgzLTIuODMgNy4xNy03LjE3LTcuMTctNy4xNyAyLjgzLTIuODMgNy4xNyA3LjE3IDcuMTctNy4xNyAyLjgzIDIuODMtNy4xNyA3LjE3IDcuMTcgNy4xN3oiIGZpbGw9IndoaXRlIi8+PC9zdmc+);
  background-position: 50%;
  background-repeat: no-repeat;
  background-size: 35%;
}
.vue-touch-keyboard .keyboard .key.half {
  flex: 20;
}
.vue-touch-keyboard .keyboard .key:hover {
  color: #fff;
  background-color: #00A1DB;
}
.vue-touch-keyboard .keyboard .key:active {
  -webkit-transform: scale(0.98);
          transform: scale(0.98);
  color: #3333333;
  background-color: #d4d4d4;
}
.vue-touch-keyboard .keyboard .key.activated {
  color: #eeeeee;
  background-color: #00A1DB;
}
.vue-touch-keyboard .keyboard .key.featured {
  color: #eeeeee;
  background-color: #00A1DB;
}
.vue-touch-keyboard .keyboard .key.email {
  margin-bottom: 10px;
}
.vue-touch-keyboard .keyboard .placeholder {
  flex: 20;
  height: 60px;
  line-height: 60px;
}
.vue-touch-keyboard .keyboard .placeholder:not(:last-child) {
  margin-right: 5px;
}
.vue-touch-keyboard .keyboard:after, .vue-touch-keyboard .keyboard:before {
  content: '';
  display: table;
}
.vue-touch-keyboard .keyboard:after {
  clear: both;
}
	
</style>
<script> 
const Layouts = {
  "default": {

    _meta: {
      "tab": { key: "\t", text: "Tab", width: 60, classes: "control" },
      "shiftl": { keySet: "shifted", text: "Shift", width: 100, classes: "control" },
      "shiftr": { keySet: "shifted", text: "Shift", width: 100, classes: "control" },
      "caps": { keySet: "capsed", text: "Caps lock", width: 80, classes: "control" },
      "space": { key: " ", text: "Space", width: 180 },
      "enter": { key: "\r\n", text: "Enter", width: 80, classes: "control" },
      "backspace": { func: "backspace", classes: "control backspace", width: 65 },
      "accept": { func: "accept", text: "Close", classes: "control featured" },
      "next": { func: "next", text: "Next", classes: "control featured" } },


    default: [
    "1 2 3 4 5 6 7 8 9 0 - + {backspace}",
    "{tab} q w e r t y u i o p",
    "{caps} a s d f g h j k l {enter}",
    "{shiftl} z x c v b n m {shiftr}",
    "{next} {space} {accept}"],

    shifted: [
    "{tab} Q W E R T Y U I O P | @ {backspace}",
    "{caps} A S D F G H J K L {enter}",
    "{shiftl} Z X C V B N M {shiftr}",
    "{next} {space} {accept}"],


    capsed: [
    "1 2 3 4 5 6 7 8 9 0 - {backspace}",
    "{tab} Q W E R T Y U I O P [ ] \\",
    "{caps} A S D F G H J K L {enter}",
    "{shiftl} Z X C V B N M  / {shiftr}",
    "{next} {space} {accept}"] },


  "email": {

    _meta: {
      "tab": { key: "\t", text: "Tab", width: 60 },
      "shiftl": { keySet: "shifted", text: "Shift", width: 100 },
      "shiftr": { keySet: "shifted", text: "Shift", width: 100 },
      "caps": { keySet: "capsed", text: "Caps lock", width: 80 },
      "space": { key: " ", text: "Space", width: 180 },
      "enter": { key: "\r\n", text: "Enter", width: 80 },
      "backspace": { func: "backspace", classes: "backspace", width: 65 },
      "next": { func: "next", text: "Next", classes: "featured" },
      "accept": { func: "accept", text: "Close", classes: "close featured" },
      "@": { key: "@", text: "@", classes: "email featured", width: 15 },
      "gmail": { key: "@gmail.com", text: "@gmail.com", classes: "email featured" },
      "hotmail": { key: "@hotmail.com", text: "@hotmail.com", classes: "email featured" },
      "live": { key: "@live.com", text: "@live.com", classes: "email featured" },
      "yahoo_us": { key: "@yahoo.com", text: "@yahoo.com", classes: "email featured" },
      "yahoo_br": { key: "@yahoo.com", text: "@yahoo.com.br", classes: "email featured" },
      "mac": { key: "@mac.com", text: "@mac.com", classes: "email featured" },
      "me": { key: "@me.com", text: "@me.com", classes: "email featured" } },


    default: [
    "1 2 3 4 5 6 7 8 9 0 - + {backspace}",
    "{tab} q w e r t y u i o p ",
    "{caps} a s d f g h j k l {enter}",
    "{shiftl} z x c v b n m / {shiftr}",
    "{next} {space} {accept}"],

    shifted: [
    "{tab} Q W E R T Y U I O P | _ {backspace}",
    "{caps} A S D F G H J K L {enter}",
    "{shiftl} Z X C V B N M {shiftr}",
    "{next} {space} {accept}"],


    capsed: [

    "1 2 3 4 5 6 7 8 9 0 - = {backspace}",
    "{tab} Q W E R T Y U I O P [ ] \\",
    "{caps} A S D F G H J K L ; ' {enter}",
    "{shiftl} Z X C V B N M , . / {shiftr}",
    "{next} {space} {accept}"] } };




var vm = new Vue({
  el: "#app",
  components: {
    "vue-touch-keyboard": VueTouchKeyboard.component },


  data: {
    visible: false,
    layout: Layouts.default,
    input: null,
    options: {
      useKbEvents: false } },



  methods: {
    accept(text) {
      console.log("Input text: " + text);
      this.hide();
    },

    show(e) {
      this.input = e.target;
      this.layout = Layouts[e.target.dataset.layout];

      if (!this.visible)
      this.visible = true;
    },

    hide() {
      this.visible = false;
    },

    next() {
      let inputs = document.querySelectorAll("input");
      let found = false;
      [].forEach.call(inputs, (item, i) => {
        if (!found && item == this.input && i < inputs.length - 1) {
          found = true;
          this.$nextTick(() => {
            inputs[i + 1].focus();
          });
        }
      });
      if (!found) {
        this.input.blur();
        this.hide();
      }
    } } });
</script>	

<style>

a{color:#58bff6;text-decoration: none;}
a:hover{color:#aaa; }
.pull-right{float: right;}
.pull-left{float: left;}
.clear-fix{clear:both;}
div.logo{text-align: center; margin: 20px 20px 30px 20px; fill: #566375;}
div.logo svg{
	width:180px;
	height:100px;
}
.logo-active{fill: #44aacc !important;}
#formWrapper{
	
	width:100%; 
	height:100%; 
	position: absolute; 
	top:0; 
	left:0;
	transition:all .3s ease;}
.darken-bg{ !important; transition:all .3s ease;}

div#form{
	position: absolute;
	width:360px;
	height:320px;
	height:auto;
	background-color: #fff;
	margin:auto;
	border-radius: 5px;
	padding:20px;
	left:50%;
	top:50%;
	margin-left:-180px;
	margin-top:-200px;
}
div.form-item{position: relative; display: block; margin-bottom: 20px;}
 input{transition: all .2s ease;}
 input.form-style{
	color:#8a8a8a;
	display: block;
	width: 90%;
	height: 44px;
	padding: 5px 5%;
	border:1px solid #ccc;
	-moz-border-radius: 27px;
	-webkit-border-radius: 27px;
	border-radius: 27px;
	-moz-background-clip: padding;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	background-color: #fff;
	font-family:'HelveticaNeue','Arial', sans-serif;
	font-size: 105%;
	letter-spacing: .8px;
}
div.form-item .form-style:focus{outline: none; border:1px solid #58bff6; color:#58bff6; }
div.form-item p.formLabel {
	position: absolute;
	left:26px;
	top:2px;
	transition:all .4s ease;
	color:#bbb;}
.formTop{top:-22px !important; left:26px; background-color: #fff; padding:0 5px; font-size: 14px; color:#58bff6 !important;}
.formStatus{color:#8a8a8a !important;}
input[type="submit"].login{
	float:right;
	width: 112px;
	height: 37px;
	-moz-border-radius: 19px;
	-webkit-border-radius: 19px;
	border-radius: 19px;
	-moz-background-clip: padding;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	background-color: #55b1df;
	border:1px solid #55b1df;
	border:none;
	color: #fff;
	font-weight: bold;
}
input[type="submit"].login:hover{background-color: #fff; border:1px solid #55b1df; color:#55b1df; cursor:pointer;}
input[type="submit"].login:focus{outline: none;}
</style>
<script>
	$(document).ready(function(){
	var formInputs = $('input[type="text"],input[type="password"]');
	formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');
       $('div#formWrapper').addClass('darken-bg');
       $('div.logo').addClass('logo-active');
	});
	formInputs.focusout(function() {
		if ($.trim($(this).val()).length == 0){
		$(this).parent().children('p.formLabel').removeClass('formTop');
		}
		$('div#formWrapper').removeClass('darken-bg');
		$('div.logo').removeClass('logo-active');
	});
	$('p.formLabel').click(function(){
		 $(this).parent().children('.form-style').focus();
	});
});
</script>
</script>
        <!-- End Container -->    
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="assets/js/components/tabs/animated-tabs.min.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>

