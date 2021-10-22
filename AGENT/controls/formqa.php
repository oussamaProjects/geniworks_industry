<!DOCTYPE html>
<html>
<head>
  <title></title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<style>
  .form {
  margin-top: 100px;
}
.form .inputs {
  height: 38px;
  width: calc(100% - 90px);
  width: -webkit-calc(100% - 90px);
}
.form .inputs input {
  display: none;
  width: 100%;
}
.form .inputs input.active {
  display: block;
}

.progress-bar {
  transition: 0.45s;
}

.message {
  display: none;
  margin-top: 100px;
}

</style>


<section class="form">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-block mx-auto bg-light shadow border pt-3 pb-2"> 
          <form class="form-inline">
            <div class="form-group mx-sm-1 mb-2 inputs">
              <input type="text" class="form-control active" id="input-1" placeholder="Your Name">
              <input type="text" class="form-control" id="input-2" placeholder="Your Email ID">
              <input type="text" class="form-control" id="input-3" placeholder="Your Contact">
              <input type="text" class="form-control" id="input-4" placeholder="Your Location">
            </div>
            <button type="submit" class="btn btn-danger mb-2 ml-3">Next</button>
          </form>
          <!--<div class="progress bordere">
            <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><small id="protxt">1/4</small></div>
          </div>-->
        </div>
    </div>
  </div>
</section>

<section class="message">
  <div class="container">
    <div class="row">
      <div class="col-md-4 d-block mx-auto bg-light shadow border py-3 text-center">
        <h1 class="text-uppercase text-danger font-weight-normal">Thank you</h1>
        <small>Our Immigration Expert Get back to you.</small>
      </div>
    </div>
  </div>
</section>

<script>
  $("document").ready(function(){
   
  formWizard();
  
  function formWizard(){
    var mainForm = $(".form"),
        successMessage = $(".message"),
        inputsHolder = $(".inputs"),
        progressBar = $(".progress-bar"),
        inputsCount = inputsHolder.children("input").length,
        progressStart = inputsHolder.find("input.active"),
        enterClicked = false;
    
    //progress(progressStart);
    
    mainForm.find("input").keypress(function(e) {
        if(e.which == 13) {
          enterClicked = true;
        }
      });
    
    $("button").click(function(){
      var target = inputsHolder.find("input.active");
      $.ajax({
        type:"GET",
        url:"https://api.meetup.com/2/cities",
        success: function(data) {
          animation(target);
        },
        dataType: 'jsonp',
      });
      return false;
    });
    
    function animation(el){
      if(el.index() == (inputsCount - 1)) {
        mainForm.fadeOut(500,function(){
          successMessage.fadeIn(500);
        });
      } else { 
        el.fadeOut(500,function(){
          el.removeClass("active");
          el.next().fadeIn(500,function(){
            el.next().addClass("active");
            if(enterClicked == true){
              el.next().focus();
              enterClicked = false;
            }
          })
        });
      }
       
      progress(el);
    }
    
    function progress(el){
      var current = el.index() + 1,
          valueUpdate = current * (100 / inputsCount);
      progressBar.width(valueUpdate+"%").attr("valuenow", valueUpdate);
      $('#protxt').innerHTML = current;
    }
  }
  
});
</script>
</body>
</html>