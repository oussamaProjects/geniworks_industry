<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
	/* only for this Pen */




/* using a container causes the alerts to stack.  Test using Yes then No. */
.alerts-container {
	position: fixed;
	top: 1em;
	right: 2em;	
	z-index: 9999;
}
.alert {
	position: relative;
	min-width: 30em;
	text-align: center;
	display: none;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	-webkit-box-shadow: 0px 6px 20px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 6px 20px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 6px 20px 0px rgba(0,0,0,0.2);
}

/* shadow for fun */
.popover {
	-webkit-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.2);
}
</style>



<div class="d-flex justify-content-center">
	<a id="pop-modal" class="btn btn-lg btn-info" role="button" tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="right" title="<em>YES</em> <u>opens</u> <b>Modal</b>">Popover</a>
</div>

<!-- #pop-modal content -->
<div id="popModal-content" class="" hidden>
	<div class="form-group">
		<div class="row justify-content-center">
			<div class="col-xs-12 pt-3">
				<button type="button" id="no" class="btn btn-danger">NO</button>
				<button type="button" id="yes-modal" class="btn btn-success">YES</button>
			</div>
		</div>
	</div>
</div>

<!-- #pop-modal modal -->
<div id="examplePopModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Popover launched Modal</h4>
			</div>
			<div class="modal-body">
				<p>One fine body&hellip;</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- end snippet -->

<!-- alerts are for fun of it -->
<div class="alerts-container">
	
	<div class="row">
		<div id="yes-alert" class="alert alert-success text-center" role="alert">
			YEA, give it another go, come on you know you want to.
		</div>
	</div>
	
	<div class="row">
		<div id="no-alert" class="alert alert-danger text-center" role="alert">
			Really? Your missing out.
		</div>
	</div>

</div>
<script>
	// initialize this popover only with it's HTML content
		$(function() {
			//$('[data-toggle="popover"]').popover()
      $("#pop-modal").popover({
        html: true,
        content: function() {
          return $('#popModal-content').html();
        }
      });

      $(document).on('click', "#yes-modal", function() {
        $('#examplePopModal').modal('show');
      });
			//  Alerts are for the fun it and not necessary...
			$('#examplePopModal').on('hidden.bs.modal', function () {
				$('#yes-alert').fadeIn(500).delay(3000).fadeOut(500);
			});
			$(document).on('click', "#no", function() {
				$('#no-alert').fadeIn(500).delay(2000).slideUp(500);
			});
			
    });
</script>
</body>
</html>
