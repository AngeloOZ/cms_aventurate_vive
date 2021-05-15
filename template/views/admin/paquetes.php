<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once INCLUDES . 'header_enlaces_admin.php'; ?>
    <!-- https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <title>CMS - Paquetes</title>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- <div class="col-md-3 left_col menu_fixed"> -->
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <?php include_once MODULOS_ADMIN . 'nav_logo_cms.php'; ?>
                    <!-- menu profile quick info -->
                    <?php include_once MODULOS_ADMIN . 'nav_profile_cms.php'; ?>
                    <!-- sidebar menu -->
                    <?php include_once MODULOS_ADMIN . 'sidebar_menu_cms.php'; ?>
                    <!-- menu footer buttons -->
                    <?php include_once MODULOS_ADMIN . 'footer_menu_cms.php'; ?>
                </div>
            </div>

            <!-- top navigation -->
            <?php include_once MODULOS_ADMIN . 'navigation_top_cms.php'; ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Tables <small>Some examples to get you started</small></h3>
                            <br />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- Large modal -->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Gestor de galeria</h4>
                        </div>
                        <div class="modal-body">
                            <form id="" data-action-url="<?php echo URL; ?>" data-parsley-validate="" class="form-horizontal form-label-left" _lpchecked="1" enctype="multipart/form-data">
                                <div class="item form-group">
                                    <p>Forma de subir imagén</p>
                                    <div class="col-md-6 col-sm-6 ">
                                        <label for="upfile">Subir archivo</label>
                                        <input type="radio" name="typeUpload" id="upfile" checked class="type-up-file">
                                        <span style="margin: 0 10px;"></span>
                                        <label for="url">URL</label>
                                        <input type="radio" name="typeUpload" id="url" class="type-up-file">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="input-desc-photo">Descripción<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="input_desc_photo" name="input_desc_photo" required="required" class="form-control" placeholder="Descripción de foto">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="input_file_photo">Archivo <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="file" id="input_file_photo" name="input_file_photo" required="required" class="form-control" accept="image/*">
                                    </div>
                                </div>
                                <input type="hidden" name="input_id_photo" id="input_id_photo">
                                <div class="ln_solid"></div>
                                <div class="item form-group ">
                                    <div class="col-md-6 col-sm-6 offset-md-3 alignright">
                                        <button class="btn btn-primary" type="reset">Limpiar</button>
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="ln_solid"></div>
                            <div id="preview_photo" class="preview_photo">
                                <img id="preview_photo_img" src="" alt="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer content -->
            <?php require_once MODULOS_ADMIN.'footer_section.php'; ?>
        </div>
    </div>
    <?php include INCLUDES . 'footer_enlaces_admin.php'; ?>
    <!-- https://code.jquery.com/jquery-3.5.1.js -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ tours por página",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando _PAGE_ de _PAGES_ páginas",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "search": "Buscar:",
                    "infoFiltered": "(filtrado de _MAX_ tours)"
                }
            });
        });
    </script>

</body>

</html>