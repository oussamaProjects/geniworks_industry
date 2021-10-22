<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/pages/custom/general/user/profile-v1.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />      
        
        <link href="../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

        <link href="../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

        <link href="../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />

        <link href="../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

        <link href="../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

        <link href="../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

        <link href="../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />


        <link rel="shortcut icon" href="../assets/media/logos/favicon.ico" />
        
</head>
<body>
<div class = "row col-xs-10 col-sm-10 col-md-10 col-lg-10 ">


<!-- IMPORT THE MODAL FROM OTHER PAGE -->
<?php require_once('NewPage.php'); ?>

<!-- Here is the PHP variable that I need to send to the modal on the other page. -->
<?php $id_user = $carregaUsuarios["id"]; ?>    

<table id="table_id2" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th width="110px;"></th>
            <th>ID</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Data</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ( $carregaUsuarios as $carregaUsuarios ) { ?>
        <tr>
            <td width="110px;" align="center">
                <!-- BOTÃO EDITAR -->

                <!-- data-id was added in the line below -->
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editarUsuario" data-id="<?php echo $id_user; ?>" title="Editar"><i class="fa fa-pencil text-white"></i></a>

                <!-- BOTÃO VISUALIZAR -->
                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#visualizarUsuario" title="Visualizar"><i class="fa fa-search text-white"></i></a>

                <!-- BOTÃO EXCLUIR -->
                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#excluirUsuario" title="Alterar Status"><i class="fa fa-refresh text-white"></i></a>
            </td>
            <td><?php echo $carregaUsuarios["id"]; ?></td>
            <td><?php echo $carregaUsuarios["nome"]; ?></td>
            <td><?php echo $carregaUsuarios["login"]; ?></td>
            <td><?php echo $carregaUsuarios["senha"]; ?></td>
            <td>
                <?php
                    $carregaUsuarios["data"] = date("d/m/Y H:i:s", strtotime($carregaUsuarios["data"]));
                    echo $carregaUsuarios["data"]; 
                ?>              
            </td>
            <td>
                <?php 
                    if($carregaUsuarios["status"] == 0) {
                        echo "<span class='badge badge-danger'>INATIVO</span>"; 
                    }else{
                        echo "<span class='badge badge-success'>ATIVO</span>"; 
                    }
                ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>

<div id="exampleModal" class="modal fade" aria-hidden="true" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>
<script>
    $('.ItemID').click(function(){
        var ItemID=$(this).attr('data-whatever');
        $.ajax({url:"NewPage.php?ItemID="+ItemID,cache:false,success:function(result){
            $(".modal-content").html(result);
        }});
    });
</script>
<script src="../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

        <!--end:: Global Mandatory Vendors -->

        <!--begin:: Global Optional Vendors -->
        <script src="../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
        <script src="../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="../assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
        <script src="../assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
        <script src="../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
        <script src="../assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
        <script src="../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

        <!--end:: Global Optional Vendors -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="../assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts(used by this page) -->
        <script src="../assets/js/demo1/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
</body>
</html>