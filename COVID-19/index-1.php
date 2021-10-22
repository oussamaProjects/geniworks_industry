<!DOCTYPE html>
<html>
<head>
  <title></title>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<meta charset="utf-8" />
    <title>Dashboard | MyDADJE</title>
    <meta name="description" content="Asset Inspection Record Dashboard | MyDADJE">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
        google: {
          "families": ["Poppins:300,400,500,600,700"]
        },
        active: function() {
          sessionStorage.fonts = true;
        }
      });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />



<link rel="shortcut icon" href="img/favicon-32x32.png" />
<style type="text/css">
  body {
  margin: 0;
  font-family: "Poppins";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529; }

[tabindex="-1"]:focus {
  outline: 0 !important; }



  * {
  box-sizing: border-box;
}

body {
  -webkit-perspective: 800px;
          perspective: 800px;
  height: 100vh;
  margin: 0;
  overflow: hidden;

  background: #101932;
  /* Old browsers */
  /* FF3.6+ */
  /* Chrome,Safari4+ */
  /* Chrome10+,Safari5.1+ */
  /* Opera 11.10+ */
  /* IE10+ */
  background: linear-gradient(135deg, #0d1429 0%, #2d78ad 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0d1429 ', endColorstr='#2d78ad',GradientType=1 );
  /* IE6-9 fallback on horizontal gradient */
}
body .container_inner {
  width: 300px;
  margin: 0 auto;
}
body .container_inner__login {
  height: 100vh;
  -webkit-perspective: 800px;
          perspective: 800px;
}
body .container_inner__login .tip {
  color: #81AECE;
  opacity: 0;
  -webkit-transition: all .4s;
  transition: all .4s;
  font-size: 10px;
  position: relative;
  font-weight: 100;
  height: 0px;
  top: -15px;
  line-height: 14px;

}
body .container_inner__login .tick {
  -webkit-transform: scale(0) translateY(-50%);
          transform: scale(0) translateY(-50%);
  -webkit-transition: all 0.35s cubic-bezier(0.65, 1.88, 0.51, 0.69);
  transition: all 0.35s cubic-bezier(0.65, 1.88, 0.51, 0.69);
  position: absolute;
  left: 0;
  top: 50%;
  right: 0;
  margin-left: 35%;
}
body .container_inner__login .tick img {
  width: 50px;
}
body .container_inner__login .hide {
  opacity: 0 !important;
}
body .container_inner__login .bulge {
  -webkit-transform: scale(1) !important;
          transform: scale(1) !important;
  top: 50px !important;
  -webkit-transition: all .4s;
  transition: all .4s;
  -webkit-animation: bulge 1s .25s forwards !important;
          animation: bulge 1s .25s forwards !important;
}
body .container_inner__login .login_check {
  font-size: 11px;
  text-align: center;
  line-height: 20px;
  color: white;
  color: #BFBFCE;
  position: absolute;
  display: none;
  left: -26px;
  top: 260px;
  height: 280px;
  width: 278px;
  margin: auto;
  right: 0;
}
body .container_inner__login .login_check img {
  opacity: 0.9;
  width: 140px;
  margin-bottom: 30px;
}
body .container_inner__login .login_check span {
  color: #00A1db;
  line-height: 20px;
}
body .container_inner__login .login {
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transition: all .2s;
  transition: all .2s;
  width: 220px;
  -webkit-transform-origin: 110px -30px;
          transform-origin: 110px -30px;
  margin: auto;
  -webkit-transform: scale(1) translateY(-50%) rotatex(360deg) rotatey(360deg);
          transform: scale(1) translateY(-50%) rotatex(360deg) rotatey(360deg);
  right: 0;
}
body .container_inner__login .login .center {
  top: 100px !important;
}
body .container_inner__login .login_profile {
  border-radius: 100px;
  height: 80px;
  width: 60px;
  margin-bottom: 40px;
  margin: 0 auto;
  position: relative;
  top: 0px;
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-animation: logo_in 1s .9s forwards;
          animation: logo_in 1s .9s forwards;
}
body .container_inner__login .login_profile img {
  position: relative;
  top: 18px;
}
body .container_inner__login .login_profile .logo {
  width: 370%;
  align-content: center;
  z-index: 2;
  margin-left: -135%;
}
body .container_inner__login .login_profile .pulse {
  width: 160px;
  position: relative;
  top: -85px;
  display: none;
  left: -42px;
  z-index: 1;
}
body .container_inner__login .login_desc {
  color: #BFBFCE;
  font-size: 10px;
  margin-top: 200px;
  -webkit-animation: pop .5s 1.3s forwards;
          animation: pop .5s 1.3s forwards;
  position: relative;
  opacity: 0;
}
body .container_inner__login .login_desc h3 {
  font-weight: 500;
}
body .container_inner__login .login_desc span {
  color: #00A1db;
  font-weight: 600;
}
body .container_inner__login .login_inputs {
  margin-top: 50px;
}
body .container_inner__login .login_inputs form {
  margin: 0;
  padding: 0;
}
body .container_inner__login .login_inputs form input, body .container_inner__login .login_inputs form select{
  width: 100%;
  padding: 10px;
  color: #141416;
  border: none;
  border-radius: 3px;
  text-align: center;
  -webkit-animation: pop .5s 1.6s forwards;
          animation: pop .5s 1.6s forwards;
  position: relative;
  opacity: 0;
  font-size: 13px;
  outline: none;
}
body .container_inner__login .login_inputs form input[type="submit"] {
  margin-top: 12px;
  cursor: pointer;
  border: 1px solid #3FA9F5;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 10px 10px;
  -webkit-animation: pop .5s 1.9s forwards;
          animation: pop .5s 1.9s forwards;
  position: relative;
  opacity: 0;
  position: relative;
  font-weight: 100;
  color: white;
  background: #3FA9F5;

  font-size: 11px;
  -webkit-transition: all .24s;
  transition: all .24s;
}
body .container_inner__login .login_inputs a {
  color: #fff;
  text-decoration: none;
  font-weight: 100;
  -webkit-animation: pop .5s 2.2s forwards;
          animation: pop .5s 2.2s forwards;
  position: relative;
  opacity: 0;
  font-size: 11px;
  display: inline-block;
  margin-top: 20px;
  -webkit-transition: all .24s;
  transition: all .24s;
}
body .container_inner__login .login_inputs a:hover {
  color: #00A1db;
}

@-webkit-keyframes brightflash {
  0% {
    background: #141416;
  }
  50% {
    background: white;
  }
  100% {
    background: #141416;
  }
}

@keyframes brightflash {
  0% {
    background: #141416;
  }
  50% {
    background: white;
  }
  100% {
    background: #141416;
  }
}
@-webkit-keyframes bulge {
  0% {
    width: 60px;
  }
  20% {
    width: 110px;
  }
  40% {
    width: 67px;
  }
  60% {
    width: 84px;
  }
  80% {
    width: 78px;
  }
  100% {
    width: 80px;
  }
}
@keyframes bulge {
  0% {
    width: 60px;
  }
  20% {
    width: 110px;
  }
  40% {
    width: 67px;
  }
  60% {
    width: 84px;
  }
  80% {
    width: 78px;
  }
  100% {
    width: 80px;
  }
}
@-webkit-keyframes logo_in {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  20% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  40% {
    -webkit-transform: scale(0.98);
            transform: scale(0.98);
  }
  60% {
    -webkit-transform: scale(1.012);
            transform: scale(1.012);
  }
  80% {
    -webkit-transform: scale(0.995);
            transform: scale(0.995);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes logo_in {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  20% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  40% {
    -webkit-transform: scale(0.98);
            transform: scale(0.98);
  }
  60% {
    -webkit-transform: scale(1.012);
            transform: scale(1.012);
  }
  80% {
    -webkit-transform: scale(0.995);
            transform: scale(0.995);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes pop {
  0% {
    opacity: 0;
    top: 4px;
  }
  100% {
    opacity: 1;
    top: 0px;
  }
}
@keyframes pop {
  0% {
    opacity: 0;
    top: 4px;
  }
  100% {
    opacity: 1;
    top: 0px;
  }
}
/*

*/
.column {
  color: #3FA9F5;
  opacity: 0.2;

  float: left;
  position: relative;
}
.column:nth-of-type(1) {
  top: -115px;
}
.column:nth-of-type(2) {
  top: -228px;
}
.column:nth-of-type(3) {
  top: -181px;
}
.column:nth-of-type(4) {
  top: -69px;
}
.column:nth-of-type(5) {
  top: -209px;
}
.column:nth-of-type(6) {
  top: -166px;
}
.column:nth-of-type(7) {
  top: -13px;
}
.column:nth-of-type(8) {
  top: -273px;
}
.column:nth-of-type(9) {
  top: -184px;
}
.column:nth-of-type(10) {
  top: -97px;
}
.column:nth-of-type(11) {
  top: -255px;
}
.column:nth-of-type(12) {
  top: -300px;
}
.column:nth-of-type(13) {
  top: -107px;
}
.column:nth-of-type(14) {
  top: -26px;
}
.column:nth-of-type(15) {
  top: -46px;
}
.column:nth-of-type(16) {
  top: -9px;
}
.column:nth-of-type(17) {
  top: -263px;
}
.column:nth-of-type(18) {
  top: -195px;
}
.column:nth-of-type(19) {
  top: -206px;
}
.column:nth-of-type(20) {
  top: -32px;
}
.column:nth-of-type(21) {
  top: -79px;
}
.column:nth-of-type(22) {
  top: -155px;
}
.column:nth-of-type(23) {
  top: -201px;
}
.column:nth-of-type(24) {
  top: -217px;
}
.column:nth-of-type(25) {
  top: -149px;
}
.column:nth-of-type(26) {
  top: -158px;
}
.column:nth-of-type(27) {
  top: -297px;
}
.column:nth-of-type(28) {
  top: -99px;
}
.column:nth-of-type(29) {
  top: -268px;
}
.column:nth-of-type(30) {
  top: -100px;
}
.column:nth-of-type(31) {
  top: -262px;
}
.column:nth-of-type(32) {
  top: -33px;
}
.column:nth-of-type(33) {
  top: -183px;
}
.column:nth-of-type(34) {
  top: -276px;
}
.column:nth-of-type(35) {
  top: -200px;
}
.column:nth-of-type(36) {
  top: -177px;
}
.column:nth-of-type(37) {
  top: -103px;
}
.column:nth-of-type(38) {
  top: -54px;
}
.column:nth-of-type(39) {
  top: -77px;
}
.column:nth-of-type(40) {
  top: -276px;
}
.column:nth-of-type(41) {
  top: -128px;
}
.column:nth-of-type(42) {
  top: -87px;
}
.column:nth-of-type(43) {
  top: -270px;
}
.column:nth-of-type(44) {
  top: -37px;
}
.column:nth-of-type(45) {
  top: -211px;
}
.column:nth-of-type(46) {
  top: -74px;
}
.column:nth-of-type(47) {
  top: -20px;
}
.column:nth-of-type(48) {
  top: -32px;
}
.column:nth-of-type(49) {
  top: -163px;
}
.column:nth-of-type(50) {
  top: -223px;
}
.column:nth-of-type(51) {
  top: -153px;
}
.column:nth-of-type(52) {
  top: -286px;
}
.column:nth-of-type(53) {
  top: -76px;
}
.column:nth-of-type(54) {
  top: -82px;
}
.column:nth-of-type(55) {
  top: -87px;
}
.column:nth-of-type(56) {
  top: -232px;
}
.column:nth-of-type(57) {
  top: -157px;
}
.column:nth-of-type(58) {
  top: -190px;
}
.column:nth-of-type(59) {
  top: -253px;
}
.column:nth-of-type(60) {
  top: -197px;
}
.column:nth-of-type(61) {
  top: -30px;
}
.column:nth-of-type(62) {
  top: -253px;
}
.column:nth-of-type(63) {
  top: -275px;
}
.column:nth-of-type(64) {
  top: -16px;
}
.column:nth-of-type(65) {
  top: -77px;
}
.column:nth-of-type(66) {
  top: -234px;
}
.column:nth-of-type(67) {
  top: -175px;
}
.column:nth-of-type(68) {
  top: -60px;
}
.column:nth-of-type(69) {
  top: -195px;
}
.column:nth-of-type(70) {
  top: -145px;
}
.column:nth-of-type(71) {
  top: -51px;
}
.column:nth-of-type(72) {
  top: -299px;
}
.column:nth-of-type(73) {
  top: -110px;
}
.column:nth-of-type(74) {
  top: -229px;
}
.column:nth-of-type(75) {
  top: -159px;
}
.column:nth-of-type(76) {
  top: -275px;
}
.column:nth-of-type(77) {
  top: -252px;
}
.column:nth-of-type(78) {
  top: -84px;
}
.column:nth-of-type(79) {
  top: -75px;
}
.column:nth-of-type(80) {
  top: -226px;
}
.column:nth-of-type(81) {
  top: -33px;
}
.column:nth-of-type(82) {
  top: -6px;
}
.column:nth-of-type(83) {
  top: -113px;
}
.column:nth-of-type(84) {
  top: -215px;
}
.column:nth-of-type(85) {
  top: -137px;
}
.column:nth-of-type(86) {
  top: -50px;
}
.column:nth-of-type(87) {
  top: -236px;
}
.column:nth-of-type(88) {
  top: -142px;
}
.column:nth-of-type(89) {
  top: -160px;
}
.column:nth-of-type(90) {
  top: -33px;
}
.column:nth-of-type(91) {
  top: -8px;
}
.column:nth-of-type(92) {
  top: -47px;
}
.column:nth-of-type(93) {
  top: -179px;
}
.column:nth-of-type(94) {
  top: -206px;
}
.column:nth-of-type(95) {
  top: -256px;
}
.column:nth-of-type(96) {
  top: -59px;
}
.column:nth-of-type(97) {
  top: -226px;
}
.column:nth-of-type(98) {
  top: -52px;
}
.column:nth-of-type(99) {
  top: -70px;
}
.column:nth-of-type(100) {
  top: -184px;
}
.column .row {
  height: 10px;
  margin-left: 130px;
  margin-top: 20px;
  font-size: 10px;
  position: relative;
  margin-bottom: -10px;
  opacity: 0;
}
.column .row:nth-of-type(1) {
  -webkit-animation: fade 4s 0.25s infinite;
  -moz-animation: fade 4s 0.25s infinite;
  -o-animation: fade 4s 0.25s infinite;
}
.column .row:nth-of-type(2) {
  -webkit-animation: fade 4s 0.5s infinite;
  -moz-animation: fade 4s 0.5s infinite;
  -o-animation: fade 4s 0.5s infinite;
}
.column .row:nth-of-type(3) {
  -webkit-animation: fade 4s 0.75s infinite;
  -moz-animation: fade 4s 0.75s infinite;
  -o-animation: fade 4s 0.75s infinite;
}
.column .row:nth-of-type(4) {
  -webkit-animation: fade 4s 1s infinite;
  -moz-animation: fade 4s 1s infinite;
  -o-animation: fade 4s 1s infinite;
}
.column .row:nth-of-type(5) {
  -webkit-animation: fade 4s 1.25s infinite;
  -moz-animation: fade 4s 1.25s infinite;
  -o-animation: fade 4s 1.25s infinite;
}
.column .row:nth-of-type(6) {
  -webkit-animation: fade 4s 1.5s infinite;
  -moz-animation: fade 4s 1.5s infinite;
  -o-animation: fade 4s 1.5s infinite;
}
.column .row:nth-of-type(7) {
  -webkit-animation: fade 4s 1.75s infinite;
  -moz-animation: fade 4s 1.75s infinite;
  -o-animation: fade 4s 1.75s infinite;
}
.column .row:nth-of-type(8) {
  -webkit-animation: fade 4s 2s infinite;
  -moz-animation: fade 4s 2s infinite;
  -o-animation: fade 4s 2s infinite;
}
.column .row:nth-of-type(9) {
  -webkit-animation: fade 4s 2.25s infinite;
  -moz-animation: fade 4s 2.25s infinite;
  -o-animation: fade 4s 2.25s infinite;
}
.column .row:nth-of-type(10) {
  -webkit-animation: fade 4s 2.5s infinite;
  -moz-animation: fade 4s 2.5s infinite;
  -o-animation: fade 4s 2.5s infinite;
}
.column .row:nth-of-type(11) {
  -webkit-animation: fade 4s 2.75s infinite;
  -moz-animation: fade 4s 2.75s infinite;
  -o-animation: fade 4s 2.75s infinite;
}
.column .row:nth-of-type(12) {
  -webkit-animation: fade 4s 3s infinite;
  -moz-animation: fade 4s 3s infinite;
  -o-animation: fade 4s 3s infinite;
}
.column .row:nth-of-type(13) {
  -webkit-animation: fade 4s 3.25s infinite;
  -moz-animation: fade 4s 3.25s infinite;
  -o-animation: fade 4s 3.25s infinite;
}
.column .row:nth-of-type(14) {
  -webkit-animation: fade 4s 3.5s infinite;
  -moz-animation: fade 4s 3.5s infinite;
  -o-animation: fade 4s 3.5s infinite;
}
.column .row:nth-of-type(15) {
  -webkit-animation: fade 4s 3.75s infinite;
  -moz-animation: fade 4s 3.75s infinite;
  -o-animation: fade 4s 3.75s infinite;
}
.column .row:nth-of-type(16) {
  -webkit-animation: fade 4s 4s infinite;
  -moz-animation: fade 4s 4s infinite;
  -o-animation: fade 4s 4s infinite;
}
.column .row:nth-of-type(17) {
  -webkit-animation: fade 4s 4.25s infinite;
  -moz-animation: fade 4s 4.25s infinite;
  -o-animation: fade 4s 4.25s infinite;
}
.column .row:nth-of-type(18) {
  -webkit-animation: fade 4s 4.5s infinite;
  -moz-animation: fade 4s 4.5s infinite;
  -o-animation: fade 4s 4.5s infinite;
}
.column .row:nth-of-type(19) {
  -webkit-animation: fade 4s 4.75s infinite;
  -moz-animation: fade 4s 4.75s infinite;
  -o-animation: fade 4s 4.75s infinite;
}
.column .row:nth-of-type(20) {
  -webkit-animation: fade 4s 5s infinite;
  -moz-animation: fade 4s 5s infinite;
  -o-animation: fade 4s 5s infinite;
}
.column .row:nth-of-type(21) {
  -webkit-animation: fade 4s 5.25s infinite;
  -moz-animation: fade 4s 5.25s infinite;
  -o-animation: fade 4s 5.25s infinite;
}
.column .row:nth-of-type(22) {
  -webkit-animation: fade 4s 5.5s infinite;
  -moz-animation: fade 4s 5.5s infinite;
  -o-animation: fade 4s 5.5s infinite;
}
.column .row:nth-of-type(23) {
  -webkit-animation: fade 4s 5.75s infinite;
  -moz-animation: fade 4s 5.75s infinite;
  -o-animation: fade 4s 5.75s infinite;
}
.column .row:nth-of-type(24) {
  -webkit-animation: fade 4s 6s infinite;
  -moz-animation: fade 4s 6s infinite;
  -o-animation: fade 4s 6s infinite;
}
.column .row:nth-of-type(25) {
  -webkit-animation: fade 4s 6.25s infinite;
  -moz-animation: fade 4s 6.25s infinite;
  -o-animation: fade 4s 6.25s infinite;
}
.column .row:nth-of-type(26) {
  -webkit-animation: fade 4s 6.5s infinite;
  -moz-animation: fade 4s 6.5s infinite;
  -o-animation: fade 4s 6.5s infinite;
}
.column .row:nth-of-type(27) {
  -webkit-animation: fade 4s 6.75s infinite;
  -moz-animation: fade 4s 6.75s infinite;
  -o-animation: fade 4s 6.75s infinite;
}
.column .row:nth-of-type(28) {
  -webkit-animation: fade 4s 7s infinite;
  -moz-animation: fade 4s 7s infinite;
  -o-animation: fade 4s 7s infinite;
}
.column .row:nth-of-type(29) {
  -webkit-animation: fade 4s 7.25s infinite;
  -moz-animation: fade 4s 7.25s infinite;
  -o-animation: fade 4s 7.25s infinite;
}
.column .row:nth-of-type(30) {
  -webkit-animation: fade 4s 7.5s infinite;
  -moz-animation: fade 4s 7.5s infinite;
  -o-animation: fade 4s 7.5s infinite;
}
.column .row:nth-of-type(31) {
  -webkit-animation: fade 4s 7.75s infinite;
  -moz-animation: fade 4s 7.75s infinite;
  -o-animation: fade 4s 7.75s infinite;
}
.column .row:nth-of-type(32) {
  -webkit-animation: fade 4s 8s infinite;
  -moz-animation: fade 4s 8s infinite;
  -o-animation: fade 4s 8s infinite;
}
.column .row:nth-of-type(33) {
  -webkit-animation: fade 4s 8.25s infinite;
  -moz-animation: fade 4s 8.25s infinite;
  -o-animation: fade 4s 8.25s infinite;
}
.column .row:nth-of-type(34) {
  -webkit-animation: fade 4s 8.5s infinite;
  -moz-animation: fade 4s 8.5s infinite;
  -o-animation: fade 4s 8.5s infinite;
}
.column .row:nth-of-type(35) {
  -webkit-animation: fade 4s 8.75s infinite;
  -moz-animation: fade 4s 8.75s infinite;
  -o-animation: fade 4s 8.75s infinite;
}
.column .row:nth-of-type(36) {
  -webkit-animation: fade 4s 9s infinite;
  -moz-animation: fade 4s 9s infinite;
  -o-animation: fade 4s 9s infinite;
}
.column .row:nth-of-type(37) {
  -webkit-animation: fade 4s 9.25s infinite;
  -moz-animation: fade 4s 9.25s infinite;
  -o-animation: fade 4s 9.25s infinite;
}
.column .row:nth-of-type(38) {
  -webkit-animation: fade 4s 9.5s infinite;
  -moz-animation: fade 4s 9.5s infinite;
  -o-animation: fade 4s 9.5s infinite;
}
.column .row:nth-of-type(39) {
  -webkit-animation: fade 4s 9.75s infinite;
  -moz-animation: fade 4s 9.75s infinite;
  -o-animation: fade 4s 9.75s infinite;
}
.column .row:nth-of-type(40) {
  -webkit-animation: fade 4s 10s infinite;
  -moz-animation: fade 4s 10s infinite;
  -o-animation: fade 4s 10s infinite;
}
.column .row:nth-of-type(41) {
  -webkit-animation: fade 4s 10.25s infinite;
  -moz-animation: fade 4s 10.25s infinite;
  -o-animation: fade 4s 10.25s infinite;
}
.column .row:nth-of-type(42) {
  -webkit-animation: fade 4s 10.5s infinite;
  -moz-animation: fade 4s 10.5s infinite;
  -o-animation: fade 4s 10.5s infinite;
}
.column .row:nth-of-type(43) {
  -webkit-animation: fade 4s 10.75s infinite;
  -moz-animation: fade 4s 10.75s infinite;
  -o-animation: fade 4s 10.75s infinite;
}
.column .row:nth-of-type(44) {
  -webkit-animation: fade 4s 11s infinite;
  -moz-animation: fade 4s 11s infinite;
  -o-animation: fade 4s 11s infinite;
}
.column .row:nth-of-type(45) {
  -webkit-animation: fade 4s 11.25s infinite;
  -moz-animation: fade 4s 11.25s infinite;
  -o-animation: fade 4s 11.25s infinite;
}
.column .row:nth-of-type(46) {
  -webkit-animation: fade 4s 11.5s infinite;
  -moz-animation: fade 4s 11.5s infinite;
  -o-animation: fade 4s 11.5s infinite;
}
.column .row:nth-of-type(47) {
  -webkit-animation: fade 4s 11.75s infinite;
  -moz-animation: fade 4s 11.75s infinite;
  -o-animation: fade 4s 11.75s infinite;
}
.column .row:nth-of-type(48) {
  -webkit-animation: fade 4s 12s infinite;
  -moz-animation: fade 4s 12s infinite;
  -o-animation: fade 4s 12s infinite;
}
.column .row:nth-of-type(49) {
  -webkit-animation: fade 4s 12.25s infinite;
  -moz-animation: fade 4s 12.25s infinite;
  -o-animation: fade 4s 12.25s infinite;
}
.column .row:nth-of-type(50) {
  -webkit-animation: fade 4s 12.5s infinite;
  -moz-animation: fade 4s 12.5s infinite;
  -o-animation: fade 4s 12.5s infinite;
}
.column .row:nth-of-type(51) {
  -webkit-animation: fade 4s 12.75s infinite;
  -moz-animation: fade 4s 12.75s infinite;
  -o-animation: fade 4s 12.75s infinite;
}
.column .row:nth-of-type(52) {
  -webkit-animation: fade 4s 13s infinite;
  -moz-animation: fade 4s 13s infinite;
  -o-animation: fade 4s 13s infinite;
}
.column .row:nth-of-type(53) {
  -webkit-animation: fade 4s 13.25s infinite;
  -moz-animation: fade 4s 13.25s infinite;
  -o-animation: fade 4s 13.25s infinite;
}
.column .row:nth-of-type(54) {
  -webkit-animation: fade 4s 13.5s infinite;
  -moz-animation: fade 4s 13.5s infinite;
  -o-animation: fade 4s 13.5s infinite;
}
.column .row:nth-of-type(55) {
  -webkit-animation: fade 4s 13.75s infinite;
  -moz-animation: fade 4s 13.75s infinite;
  -o-animation: fade 4s 13.75s infinite;
}
.column .row:nth-of-type(56) {
  -webkit-animation: fade 4s 14s infinite;
  -moz-animation: fade 4s 14s infinite;
  -o-animation: fade 4s 14s infinite;
}
.column .row:nth-of-type(57) {
  -webkit-animation: fade 4s 14.25s infinite;
  -moz-animation: fade 4s 14.25s infinite;
  -o-animation: fade 4s 14.25s infinite;
}
.column .row:nth-of-type(58) {
  -webkit-animation: fade 4s 14.5s infinite;
  -moz-animation: fade 4s 14.5s infinite;
  -o-animation: fade 4s 14.5s infinite;
}
.column .row:nth-of-type(59) {
  -webkit-animation: fade 4s 14.75s infinite;
  -moz-animation: fade 4s 14.75s infinite;
  -o-animation: fade 4s 14.75s infinite;
}
.column .row:nth-of-type(60) {
  -webkit-animation: fade 4s 15s infinite;
  -moz-animation: fade 4s 15s infinite;
  -o-animation: fade 4s 15s infinite;
}
.column .row:nth-of-type(61) {
  -webkit-animation: fade 4s 15.25s infinite;
  -moz-animation: fade 4s 15.25s infinite;
  -o-animation: fade 4s 15.25s infinite;
}
.column .row:nth-of-type(62) {
  -webkit-animation: fade 4s 15.5s infinite;
  -moz-animation: fade 4s 15.5s infinite;
  -o-animation: fade 4s 15.5s infinite;
}
.column .row:nth-of-type(63) {
  -webkit-animation: fade 4s 15.75s infinite;
  -moz-animation: fade 4s 15.75s infinite;
  -o-animation: fade 4s 15.75s infinite;
}
.column .row:nth-of-type(64) {
  -webkit-animation: fade 4s 16s infinite;
  -moz-animation: fade 4s 16s infinite;
  -o-animation: fade 4s 16s infinite;
}
.column .row:nth-of-type(65) {
  -webkit-animation: fade 4s 16.25s infinite;
  -moz-animation: fade 4s 16.25s infinite;
  -o-animation: fade 4s 16.25s infinite;
}
.column .row:nth-of-type(66) {
  -webkit-animation: fade 4s 16.5s infinite;
  -moz-animation: fade 4s 16.5s infinite;
  -o-animation: fade 4s 16.5s infinite;
}
.column .row:nth-of-type(67) {
  -webkit-animation: fade 4s 16.75s infinite;
  -moz-animation: fade 4s 16.75s infinite;
  -o-animation: fade 4s 16.75s infinite;
}
.column .row:nth-of-type(68) {
  -webkit-animation: fade 4s 17s infinite;
  -moz-animation: fade 4s 17s infinite;
  -o-animation: fade 4s 17s infinite;
}
.column .row:nth-of-type(69) {
  -webkit-animation: fade 4s 17.25s infinite;
  -moz-animation: fade 4s 17.25s infinite;
  -o-animation: fade 4s 17.25s infinite;
}
.column .row:nth-of-type(70) {
  -webkit-animation: fade 4s 17.5s infinite;
  -moz-animation: fade 4s 17.5s infinite;
  -o-animation: fade 4s 17.5s infinite;
}
.column .row:nth-of-type(71) {
  -webkit-animation: fade 4s 17.75s infinite;
  -moz-animation: fade 4s 17.75s infinite;
  -o-animation: fade 4s 17.75s infinite;
}
.column .row:nth-of-type(72) {
  -webkit-animation: fade 4s 18s infinite;
  -moz-animation: fade 4s 18s infinite;
  -o-animation: fade 4s 18s infinite;
}
.column .row:nth-of-type(73) {
  -webkit-animation: fade 4s 18.25s infinite;
  -moz-animation: fade 4s 18.25s infinite;
  -o-animation: fade 4s 18.25s infinite;
}
.column .row:nth-of-type(74) {
  -webkit-animation: fade 4s 18.5s infinite;
  -moz-animation: fade 4s 18.5s infinite;
  -o-animation: fade 4s 18.5s infinite;
}
.column .row:nth-of-type(75) {
  -webkit-animation: fade 4s 18.75s infinite;
  -moz-animation: fade 4s 18.75s infinite;
  -o-animation: fade 4s 18.75s infinite;
}
.column .row:nth-of-type(76) {
  -webkit-animation: fade 4s 19s infinite;
  -moz-animation: fade 4s 19s infinite;
  -o-animation: fade 4s 19s infinite;
}
.column .row:nth-of-type(77) {
  -webkit-animation: fade 4s 19.25s infinite;
  -moz-animation: fade 4s 19.25s infinite;
  -o-animation: fade 4s 19.25s infinite;
}
.column .row:nth-of-type(78) {
  -webkit-animation: fade 4s 19.5s infinite;
  -moz-animation: fade 4s 19.5s infinite;
  -o-animation: fade 4s 19.5s infinite;
}
.column .row:nth-of-type(79) {
  -webkit-animation: fade 4s 19.75s infinite;
  -moz-animation: fade 4s 19.75s infinite;
  -o-animation: fade 4s 19.75s infinite;
}
.column .row:nth-of-type(80) {
  -webkit-animation: fade 4s 20s infinite;
  -moz-animation: fade 4s 20s infinite;
  -o-animation: fade 4s 20s infinite;
}
.column .row:nth-of-type(81) {
  -webkit-animation: fade 4s 20.25s infinite;
  -moz-animation: fade 4s 20.25s infinite;
  -o-animation: fade 4s 20.25s infinite;
}
.column .row:nth-of-type(82) {
  -webkit-animation: fade 4s 20.5s infinite;
  -moz-animation: fade 4s 20.5s infinite;
  -o-animation: fade 4s 20.5s infinite;
}
.column .row:nth-of-type(83) {
  -webkit-animation: fade 4s 20.75s infinite;
  -moz-animation: fade 4s 20.75s infinite;
  -o-animation: fade 4s 20.75s infinite;
}
.column .row:nth-of-type(84) {
  -webkit-animation: fade 4s 21s infinite;
  -moz-animation: fade 4s 21s infinite;
  -o-animation: fade 4s 21s infinite;
}
.column .row:nth-of-type(85) {
  -webkit-animation: fade 4s 21.25s infinite;
  -moz-animation: fade 4s 21.25s infinite;
  -o-animation: fade 4s 21.25s infinite;
}
.column .row:nth-of-type(86) {
  -webkit-animation: fade 4s 21.5s infinite;
  -moz-animation: fade 4s 21.5s infinite;
  -o-animation: fade 4s 21.5s infinite;
}
.column .row:nth-of-type(87) {
  -webkit-animation: fade 4s 21.75s infinite;
  -moz-animation: fade 4s 21.75s infinite;
  -o-animation: fade 4s 21.75s infinite;
}
.column .row:nth-of-type(88) {
  -webkit-animation: fade 4s 22s infinite;
  -moz-animation: fade 4s 22s infinite;
  -o-animation: fade 4s 22s infinite;
}
.column .row:nth-of-type(89) {
  -webkit-animation: fade 4s 22.25s infinite;
  -moz-animation: fade 4s 22.25s infinite;
  -o-animation: fade 4s 22.25s infinite;
}
.column .row:nth-of-type(90) {
  -webkit-animation: fade 4s 22.5s infinite;
  -moz-animation: fade 4s 22.5s infinite;
  -o-animation: fade 4s 22.5s infinite;
}
.column .row:nth-of-type(91) {
  -webkit-animation: fade 4s 22.75s infinite;
  -moz-animation: fade 4s 22.75s infinite;
  -o-animation: fade 4s 22.75s infinite;
}
.column .row:nth-of-type(92) {
  -webkit-animation: fade 4s 23s infinite;
  -moz-animation: fade 4s 23s infinite;
  -o-animation: fade 4s 23s infinite;
}
.column .row:nth-of-type(93) {
  -webkit-animation: fade 4s 23.25s infinite;
  -moz-animation: fade 4s 23.25s infinite;
  -o-animation: fade 4s 23.25s infinite;
}
.column .row:nth-of-type(94) {
  -webkit-animation: fade 4s 23.5s infinite;
  -moz-animation: fade 4s 23.5s infinite;
  -o-animation: fade 4s 23.5s infinite;
}
.column .row:nth-of-type(95) {
  -webkit-animation: fade 4s 23.75s infinite;
  -moz-animation: fade 4s 23.75s infinite;
  -o-animation: fade 4s 23.75s infinite;
}
.column .row:nth-of-type(96) {
  -webkit-animation: fade 4s 24s infinite;
  -moz-animation: fade 4s 24s infinite;
  -o-animation: fade 4s 24s infinite;
}
.column .row:nth-of-type(97) {
  -webkit-animation: fade 4s 24.25s infinite;
  -moz-animation: fade 4s 24.25s infinite;
  -o-animation: fade 4s 24.25s infinite;
}
.column .row:nth-of-type(98) {
  -webkit-animation: fade 4s 24.5s infinite;
  -moz-animation: fade 4s 24.5s infinite;
  -o-animation: fade 4s 24.5s infinite;
}
.column .row:nth-of-type(99) {
  -webkit-animation: fade 4s 24.75s infinite;
  -moz-animation: fade 4s 24.75s infinite;
  -o-animation: fade 4s 24.75s infinite;
}
.column .row:nth-of-type(100) {
  -webkit-animation: fade 4s 25s infinite;
  -moz-animation: fade 4s 25s infinite;
  -o-animation: fade 4s 25s infinite;
}

@-webkit-keyframes fade {
  0% {
    opacity: 0;
  }
  20% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

</style>
</head>
<body>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='column'>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
  <div class='row'>
    <p>&#8487;</p>
  </div>
  <div class='row'>
    <p>&#x02135;</p>
  </div>
  <div class='row'>
    <p>&#x02041;</p>
  </div>
  <div class='row'>
    <p>&#x0210F;</p>
  </div>
  <div class='row'>
    <p>&#x0210C;</p>
  </div>
  <div class='row'>
    <p>&#x02111;;</p>
  </div>
  <div class='row'>
    <p>&#x02130;</p>
  </div>
  <div class='row'>
    <p>&#x00427;</p>
  </div>
  <div class='row'>
    <p>&#8713;</p>
  </div>
  <div class='row'>
    <p>&#8721;</p>
  </div>
  <div class='row'>
    <p>&#8776;</p>
  </div>
  <div class='row'>
    <p>&#8836;</p>
  </div>
  <div class='row'>
    <p>&#950;</p>
  </div>
  <div class='row'>
    <p>&#958;</p>
  </div>
  <div class='row'>
    <p>&#977;</p>
  </div>
</div>
<div class='container'>
  <div class='container_inner'>
    <div class='container_inner__login'>
      <div class='login'>
        <div class='login_profile'>
          <img class='logo' src='img/logo-v3.png' >
          <!--<img class='pulse' src='img/logo.png'>-->
        </div>
        <div class='login_desc'>
          <base href="https://raw-dot-custom-elements.appspot.com/LostInBrittany/granite-qrcode-scanner/1.5.1/granite-qrcode-scanner/">
<script src="../webcomponentsjs/webcomponents-lite.js"></script>
<link rel="import" href="granite-qrcode-scanner.html">
<dom-bind>
  <template>
    <granite-qrcode-scanner data="{{data}}" active continuous></granite-qrcode-scanner>
    <div align="middle">
     <h1> Scanned QR code: [[data]]</h1>
    </div>
  </template>
</dom-bind>

          
        </div>
        <div class='login_inputs'>
          <form>
            
          </form>
          
          
        </div>
      </div>
      <div class='tick'>
        <a href="" style="font-size: 24px; font-weight: 700; color: white;text-decoration: none;">GO >></a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('input[type="password"]').focus(function(){
  $('.tip').css('height','30px')
  setTimeout(function(){
    $('.tip').css('opacity','1')
  },350)
});

$('input[type="password"]').blur(function(){
  $('.tip').css('opacity','0')
  setTimeout(function(){
    $('.tip').css('height','0px')
  },350)
});



$('form').submit(function(){
  $('form,.login_desc h3,.forgotten').animate({'opacity':'0'})
  setTimeout(function(){
    $('.login_profile').addClass('bulge')
  },400);
  setTimeout(function(){
    $('.pulse').fadeIn()
    $('.login_check').fadeIn(300)
  },1350);
   setTimeout(function(){
    $('.login').css('transform','scale(0) translateY(-50%) rotatex(360deg) rotatey(360deg)')
    setTimeout(function(){
    $('.tick').css('transform','scale(1) translateY(-50%)')
  },200);
  },3650);
  return false;
})
</script>
</body>
</html>