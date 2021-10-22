<div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title">Add Tool</h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i class="ti ti-home"></i></a></li>
                                            <li class="breadcrumb-item active">Dashboard </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            
                            <div class="col-xl-6">
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                                        <div class="section-title mt-3 mb-5">
                                            <h4>Tool informations</h4>
                                        </div>
                                        <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Name</label>
                                                <div class="col-lg-9">
                                                    <input name="tname" type="text" class="form-control">
                                                    <small>
                                                        Full Brand Name.
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Price</label>
                                                <div class="col-lg-3">
                                                    <input name="price" type="text"  class="form-control">
                                                    <small>
                                                        Per Unit.
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Ref</label>
                                                <div class="col-lg-9">
                                                    <input name="tlref" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mt-3 mb-5">
                                                <label class="col-lg-5 form-control-label">Seller</label>
                                                <div class="col-lg-7">
                                                    <select name="seller" class="selectpicker show-menu-arrow show-tick" >
                                                        <option>Bricoma</option>
                                                        <option>Bricostar</option>
                                                        <option>Nordaco</option>
                                                        <option>Debboun</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mt-3 mb-5">
                                                <label class="col-lg-5 form-control-label">Quantity</label>
                                                <div class="col-lg-7">
                                                    <select name="quanti" class="selectpicker show-menu-arrow show-tick" >
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>                                                        
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row d-flex align-items-center mt-3 mb-5">
                                             <label class="col-lg-3 form-control-label">Picture</label>
                                                <div class="col-lg-9">
                                                    <input  name="pic" type="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Buy Date</label>
                                               <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <div class="input-group"> 
                                                            <input type="text"  name="buydate" class="form-control" id="date" placeholder="Select value">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" name="addtl" class="btn btn-gradient-01" type="submit">Add</button>
                                                <button class="btn btn-shadow" type="reset">Reset</button>
                                            </div>
                                         </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>

<<?php 

if (isset($_POST['addtl'])) {
	
	include('a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');
	$tname=$_POST['tname'];
	$tlref=$_POST['tlref'];
	$seller=$_POST['seller'];
	$quanti=$_POST['quanti'];
	$buydate=$_POST['buydate'];
	$price=$_POST['price'];
	$pic_name = $_FILES['pic']['name'];

	if($pic_name!='')
	{
  $upload_directory = "controls/docs/tools/"; 
  $pic=time().$pic_name;

  if(move_uploaded_file($_FILES['pic']['tmp_name'], $upload_directory.$pic)){   

	$reqa=$cdb->prepare("INSERT INTO tools VALUES('','$tname','$seller','$pic','$quanti','$tlref', NOW(),'$price','requested')");
	$reqa->execute();
	if ($reqa===false) {
		echo "add failed!".mysqli_error();
	}else{
		$resa=$reqa->get_result();
		$reqreq=$cdb->prepare("INSERT INTO requests VALUES('', 'tools', '$tname', 'requested', NOW(),'')");
		$reqreq->execute();
		if ($reqreq===false) {
			echo"failed request add".mysqli_error();
		}else{
			$reqres=$reqreq->get_result();
			echo "<meta http-equiv='refresh' content='0;tools.php?edit'>";
		}

	}
}
}
}
 ?>
