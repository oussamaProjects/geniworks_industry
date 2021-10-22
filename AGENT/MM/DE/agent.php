<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style type="text/css">


button:focus{
  outline:none;
}

.container{
  width:100%;


  background:white;
  margin:20px auto;
  display:flex;
  flex-direction:column;
  align-items:center;
  border-radius:3px;
  overflow:hidden;
}

.header{
  width:100%;
  background-color:white;
  height:45%;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
 
}

.header-text{
  color:white;
  font-size:16px;

  line-height:1.6em;
  margin-top:15px;
}

.fab{
  font-weight:300;
  color:white;
  font-size:18px;
  border-radius:50%;
  height:50px;
  width:50px;
  border:none;
  transform:translateY(-25px);
}



.content{
  padding:10px 20px;
  width:90%;
  transform:translateY(-25px);
}







.info{
  margin-top:10px;
  display:flex;
  flex-direction:row;
}

.info-type{
  font-size:16px;
  line-height:1.6em;
  font-weight:600;

}

.info-data{
  font-size:16px;
  line-height:1.6em;
  float:right;

  
  margin-left:auto;
}

.info-input{
  font-size:16px;
  line-height:1.6em;
  
  
  border:0;
  border-bottom:1px solid rgba(0,0,0,0.4);
  
  padding:0;
  margin-left:auto;
  
  width:auto;
}

.info-input:focus{
  outline:none;
}

.info-input:valid{
  border-bottom:1px solid green;
}
.info-input:invalid{
  border-bottom:1px solid red;
}

#social-media{
  display:flex;
  flex-direction:column;
  align-items:center;
  padding-top:20px;
}

#social-media-links{
  display:flex;
  flex-direction:row;
  flex-wrap:wrap;
  align-items:center; justify-content:center;
  width:100%;
  height:100%;
  margin-top:5px;
}

.social-media-btn{
  border-radius:50%;
  height:40px;  width:40px;

  color:white;
  border:none;
  background-color:#383838;
}

.social-media-btn:hover{
  animation: pulse 1.25s cubic-bezier(0.66, 0, 0, 1)
}
.social-media-btn:focus{
  animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1)
}



#success{
  background-color:#1dc9b7;
  box-shadow:0 0 0 0 #1dc9b7;
}

#danger{
  background: radial-gradient(circle at 30% 107%, #fd397a 0%, #fd397a 5%, #fd397a 45%,#fd397a 60%,#fd397a 90%);
  margin-left:10px;
  box-shadow:0 0 0 0 #d6249f;

}



@keyframes pulse {
  to {
    box-shadow: 0 0 0 10px transparent; 
  }
}
</style>

            <div class="modal fade" id="agentpresm<?php echo $showaagent[0]?>" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-ml">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Presence Control</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
						</div>
						<div class="modal-body">
                            <div class="kt-widget-4">
                                <div class="kt-widget-4__item">
                                    <div class="kt-widget-4__item-content">
                                        <div class="kt-widget-4__item-section">
                                            <div class="kt-portlet kt-portlet--height-fluid-half kt-widget-15">
                                              
                                                    
                                                       
                                                   
                                                    <div class="carousel-inner">




                                                
                                                    <div class="carousel-item active">
                                                        <form id="pformagent<?php echo $showaagent[0];?>" method="post"> 
                                                        <div class="kt-widget-15__body">
                                                            





<style>
.profile-picture<?php echo $showaagent[0];?>{
  height:100px;
  border-radius:50%;
  width:100px;
  overflow:hidden;
  
}

.profile-picture-full{
  pointer-events:none;
}

.profile-picture-overlay<?php echo $showaagent[0];?>{
  height:100px;
  border-radius:50%;
  width:100px;
  position: absolute;
  z-index:99;
  background-color:rgba(0,0,0,0.6);
  margin-top:-20px;
  display:flex;
  align-items:center; justify-content:center;
  color:white;
  font-size:14px;
  line-height:1.6em;
  display:none;
}

.profile-picture<?php echo $showaagent[0];?>:hover~.profile-picture-overlay<?php echo $showaagent[0];?>{
  display:flex;
}
.profile-picture-overlay<?php echo $showaagent[0];?>:hover{
  display:flex;
}

.grey-overlay{
  z-index:99;
  position:fixed;
  left:0px; right:0px; top:0px; bottom:0px;
  width:100vw;
  height:100vh;
  background-color:rgba(0,0,0,0.5);
  display:flex;
  align-items:center; justify-content:center;
}

</style>
                            
                                <div class="container">
                                    <div class="header">
                                        <img class="profile-picture<?php echo $showaagent[0];?>" src="../img/agents/<?php echo $showaagent[7];?>"/>
                                        <div class="profile-picture-overlay<?php echo $showaagent[0];?>"><h>Full Size</h></div>
                                        <h class="header-text"><?php echo $showaagent[1];?> | <?php echo $showaagent[0];?></h>
                                        <input type="hidden" value="<?php echo $showaagent[1];?>" name="agent">
                                        <input type="hidden" value="<?php echo $showaagent[0];?>" name="agentid">
                                    </div>
                                    <div class="fab" type="file" tab-index="0">
                                    </div>
                                    <div class="content">
                                        <div class="info">
                                            <h class="info-type">Adress</h>
                                            <h id="info-email" class="info-data">Adress Here</h>
                                        </div>
                                        <div class="info">
                                            <h class="info-type">Phone</h>
                                            <h id="info-phone" class="info-data"><?php echo $showaagent[2];?></h>
                                        </div>
                                        <div id="social-media">
                                           
                                                <?php if ($showaagent[17]=='absent') {
                                                 ?>
                                                  <div class="info">
                                                    <?php
require('controls/zdze8efzedzdeezd/de5.php');
$selectaagent=$cdb->prepare("SELECT * FROM presence WHERE pr_agent='$showaagent[0]' ORDER BY pr_date DESC LIMIT 1");
$selectaagent->execute();
if ($selectaagent===false) {
  echo "Ops! Something Went Wrong! Contact Support Team.";
}
else{
  $resagent=$selectaagent->get_result();?>
                                               
                                            <h class="info-type" style="text-align:center; color: #FD397A;">Absence Reason </h><br>
                                             <?php while ($showagent=$resagent->fetch_row()) {?>
                                            <h id="info-phone" class="info-data" style="margin-left: 10px;"> <?php echo $showagent[6];?></h>
<?php
}}
?>                                      </div>
                                              <?php }elseif ($showaagent[17]=='present') {
                                                 ?>
                                                  <h class="info-type">Present? <span class="fa fa-hand-o-left"></span></h>
                                        <div id="social-media-links">
                                            <div class="row">
                                                <div class="col-md-12">                 
                                                        <div class="kt-widget-15__foot-toolbar"  style="text-align: center;">
                                                            <label class="kt-checkbox kt-checkbox--solid kt-checkbox--success">
                                                                <input type="radio" name="presence" required="required" checked value="present" class="example<?php echo $showaagent[0];?> tick2<?php echo $showaagent[0];?>"> Yes 
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget-15__foot-toolbar"  style="text-align: center;">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--danger">
                                                                    <input type="radio" name="presence" required="required" value="absent" class="example<?php echo $showaagent[0];?> tick1<?php echo $showaagent[0];?>"> No!
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                              <?php } elseif ($showaagent[17]=='') {
                                                 ?>
                                               <h class="info-type">Present? <span class="fa fa-hand-o-left"></span></h>
                                                <div class="col-md-12">                 
                                                        <div class="kt-widget-15__foot-toolbar" style="text-align: center;">
                                                            <label class="kt-checkbox kt-checkbox--solid kt-checkbox--success">
                                                                <input type="radio" name="presence" required="required" value="present" class="example<?php echo $showaagent[0];?> tick2<?php echo $showaagent[0];?>"> Yes 
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <div class="kt-widget-15__foot-toolbar"  style="text-align: center;">
                                                                <label class="kt-checkbox kt-checkbox--solid kt-checkbox--danger">
                                                                    <input type="radio" name="presence" required="required" value="absent" class="example<?php echo $showaagent[0];?> tick1<?php echo $showaagent[0];?>"> No!
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                          </div>
                                                        </div>
                                                </div>
                                              <?php }?>
                                                        
                                                    
                                                    <div class="kt-widget-15__foot">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                



                                                  <?php if ($showaagent[17]=='absent') {
                                                 ?>
                                                <input type="radio" hidden="hidden" name="presence" checked="checked" required="required" value="absent" class="example<?php echo $showaagent[0];?> tick1<?php echo $showaagent[0];?>"> 
                                              <?php }elseif ($showaagent[17]=='present') {
                                                 ?>
                                                  <?php

    $time = date("H");

    $timezone = date("e");

    if ($time < "12") {
      ?>
      
                                                                            <div class="input-group-append">
                                                                              <input type="time" name="presencedate" required="required" min="08:00:00" max="08:59:00" class="form-control" placeholder="Arrival Time">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar glyphicon-th"></i>
                                                                                </span>
                                                                            </div>
      <?php
    } else

    if ($time >= "12" && $time < "17") {
          ?>

                                                                            <div class="input-group-append">
                                                                              <input type="time" name="presencedate" required="required"  class="form-control" placeholder="Arrival Time" value="">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar glyphicon-th"></i>
                                                                                </span>
                                                                            </div>
          <?php
    } else

    if ($time >= "17" && $time < "23") {
?>

                                                                            <div class="input-group-append">
                                                                              <input type="time" name="presencedate" required="required" min="17:00:00" class="form-control" placeholder="Arrival Time">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar glyphicon-th"></i>
                                                                                </span>
                                                                            </div>
<?php
    }


    ?>
                                                <div id="content_more2<?php echo $showaagent[0];?>">
                                                                        <div class="input-group">
                                                                            
      <script>
          $(document).ready( function() {
              var now = new Date();
              
              var now2 = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes(), now.getSeconds());
              $('#theTime<?php echo $showaagent[0];?>')[0].valueAsDate = now2;
          });
      </script>
                                                                           
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                              <?php } elseif ($showaagent[17]=='') {
                                                 ?>
                                                <div id="content_more2<?php echo $showaagent[0];?>">
                                                                        <div class="input-group">
                                                                         <?php

    $time = date("H");

    $timezone = date("e");

    if ($time < "12") {
      ?>
      <input type="time" name="presencedate" min="08:00:00" max="08:59:00" class="form-control" placeholder="Arrival Time"  id="theTime<?php echo $showaagent[0];?>">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar glyphicon-th"></i>
                                                                                </span>
                                                                            </div>
      <?php
    } else

    if ($time >= "12" && $time < "17") {
          ?>

                                                                            <div class="input-group-append"><input type="time" name="presencedate" required="required" value="12:00" class="form-control" placeholder="Arrival Time" >
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar glyphicon-th"></i>
                                                                                </span>
                                                                            </div>
          <?php
    } else

    if ($time >= "17" && $time < "23") {
?>

                                                                            <div class="input-group-append"><input type="time" name="presencedate" value="17:01" required="required" min="17:00:00" class="form-control" placeholder="Arrival Time"  >
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar glyphicon-th"></i>
                                                                                </span>
                                                                            </div>
<?php
    }


    ?>
      <script>
          $(document).ready( function() {
              var now = new Date();
              
              var now2 = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes(), now.getSeconds());
              $('#theTime<?php echo $showaagent[0];?>')[0].valueAsDate = now2;
          });
      </script>
                                                                            
                                                                               
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                              <?php }?>






                                                                <div class="kt-widget-15__foot-info">
                                                                    <div id="content_more3<?php echo $showaagent[0];?>">
                                                                        <div class="input-group">
                                                                            <select name="proof" class="form-control" required="required">
                                                                                <option value="">Why?</option>
                                                                                <option selected value="Late">Late</option>
                                                                                <option value="sick">Sick</option>
                                                                                <option value="Annual Leaving">Annual Leaving</option>
                                                                                <option value="Injury">Injury</option>
                                                                                <option value="Not Justified">Not Justified</option>

                                                                            </select>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                            
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="kt-widget-15__foot-info">
                                                            <button type="submit" name="saveact" class="btn btn-brand btn-sm btn-bold">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grey-overlay<?php echo $showaagent[0];?>" style="display:none;">
                                        <img class="profile-picture-full<?php echo $showaagent[0];?>" src="img/agents/<?php echo $showaagent[7];?>"/>
                                    </div>
                                </div>
                            </form>
                            <div  id="results<?php echo $showaagent[0];?>"></div>
                        </div>       





<script type="text/javascript">
$("#content_more3<?php echo $showaagent[0];?>").fadeOut();

    $('.tick2<?php echo $showaagent[0];?>').change(function(e) {
    $('#content_more2<?php echo $showaagent[0];?>').toggle(this.checked);
    $('#content_more3<?php echo $showaagent[0];?>').toggle(!this.checked);
    
});
    $('.tick1<?php echo $showaagent[0];?>').change(function(e) {
    $('#content_more2<?php echo $showaagent[0];?>').toggle(!this.checked);
    $('#content_more3<?php echo $showaagent[0];?>').toggle(this.checked);
});

    $('input.example').on('change', function() {
    $('input.example').not(this).prop('checked', false); 
    $("#content_more2<?php echo $showaagent[0];?>").fadeOut(); 
    $("#content_more3<?php echo $showaagent[0];?>").fadeIn(); 
});

</script>


<script type="text/javascript">

      //  $(document).ready(function(){
      //      $("#pformagent<?php //echo $showaagent[0];?>").validate({
      //          debug: false,
      //          rules: {
      //              name: "required",
      //              email: {
      //                  required: true,
      //                  email: true
      //              }
      //          },
      //          messages: {
      //              name: "Please let us know who you are.",
      //              email: "A valid email will help us get in touch with you.",
      //          },
      //          submitHandler: function(form) {
      //              // do other stuff for a valid form
      //             $.post('process.php', $("#pformagent<?php //echo $showaagent[0];?>").serialize(), function(data) {
      //              $("#pformagent<?php // echo $showaagent[0];?>").fadeOut('fast', function(){
                        
      //              });
      //          });
      //        
      //          }
      //      });
      //  });
        </script>







                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>



																</div>
															</div>
														</div>
													</div>




<script type="text/javascript">


$("#edit-info").click(function(){
  
  var isEdit=isEditMode();
  
  if(isEdit){
    saveChanges();
  }
  else{
    editInfo();
  }
  
  changeMode(isEdit);

});

function editInfo(){  
  $(".info-data").each(function(index, data){
    var $data=$(data);
    var text = $.trim($data.text());
    var pattern=getPattern($data);
    
    $data.replaceWith("<input pattern='"+pattern+"' id='"+data.id+"' class='info-input' value='" + text + "'>   </input>");
  });
}

function saveChanges(){
  $(".info-input").each(function(index, data){
    var $data=$(data);
    var text = $.trim($data.val());
    $data.replaceWith("<h id='"+data.id+"' class='info-data'>"+ text +"</h>");
  });
}

function isEditMode(){
  
  var $icon=$("#edit-info > span");
  
  if($icon.hasClass("fa-pencil"))
  {
    return false;    
  }
  return true;
}

function changeMode(isEdit){
  var $icon=$("#edit-info > span");
  
  $icon.removeClass();
  
  if(isEdit){
    $icon.addClass("fa fa-pencil");
  }else{
    $icon.addClass("fa fa-check")
  }
}

$(".profile-picture-overlay<?php echo $showaagent[0];?>").click(function(){
  $(".grey-overlay<?php echo $showaagent[0];?>").show();
});

$(".grey-overlay<?php echo $showaagent[0];?>").click(function(){
    $(".grey-overlay<?php echo $showaagent[0];?>").hide();
});

function getPattern($element){
  var inputType=$element[0].id.split("-")[1];
  
  switch(inputType){
    case "email":
      return '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
      break;
    case "phone":
      return "/^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/";
      break;
    case "address":
      return "*";
      break;
  }
}

</script>



<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>