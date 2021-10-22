<div id="matmodal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          	<h4 class="modal-title">New Material</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form method="post" class="newwitness kt-form kt-form--label-right">
            	<div class="kt-portlet__body">
            		<div class="form-group form-group-last">
            			<div class="alert alert-secondary" role="alert">
            				<div class="alert-icon">
            					<i class="flaticon-warning kt-font-brand"></i>
            				</div>
            				<div class="alert-text">
            				You Can Define New Material With The Informations Below.
            				</div>
            			</div>
            		</div>
            		<div class="form-group ">
            			<label>Name</label>
            			<div class="kt-input-icon kt-input-icon--left">
            				<input type="text" name="mname" class="form-control" placeholder="">
            			</div>
            			<span class="form-text text-muted">Fill Complete Name</span>
            		</div>
            		<div class="form-group ">
            			<label>ID</label>
            			<div class="kt-input-icon kt-input-icon--right">
            				<input type="text" name="mid" class="form-control" placeholder="">
            			</div>
            			<span class="form-text text-muted">Fill ID </span>
            		</div>
            	</div>
            	<div class="kt-portlet__foot">
            		<div class="kt-form__actions">
            			<input type="submit"  name="addm" class="btn btn-brand" value="Add">
            		</div>
            	</div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
if (isset($_POST['addm'])) {
	include('controls/newm.php');
}
?>
    <script>
      // $(function () {

      //   $('.newwitness').on('submit', function (e) {

      //     e.preventDefault();

      //     $.ajax({
      //       type: 'post',
      //       url: 'controls/neww.php',
      //       data: $('.newwitness').serialize(),
      //       success: function () {
                
      //       }
      //     });

      //   });

      // });
    </script> 
