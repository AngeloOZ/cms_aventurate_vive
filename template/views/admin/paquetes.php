<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once INCLUDES . 'header_enlaces_admin.php'; ?>
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
                            <h3>Listado de tours</h3>
                            <br><br>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="row">
                                    <button class="btn btn-primary col-md-7 alignright" data-toggle="modal" data-target=".bs-example-modal-sm">Añadir nuevo tour</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <table id="tabla-tours" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Titulo</th>
                                    <th>Descripción</th>
                                    <th>Imagen</th>
                                    <th>Url</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>Trip imbabura</td>
                                        <td>Ven y disfruta de la provincia de Imbabura fascinante y única reconocida por ser la provincia de los lagos, por su cultura y artesanías ideal para un turismo de aventura y contacto con la naturaleza y sus artesanías.</td>
                                        <td class="td-image"><img src="<?php echo UPLOADS . 'paquetes/basilica.jpg'; ?>" alt=""></td>
                                        <td class="td-url"><a href="http://localhost/aventurateyvive/tours/alskdnalsknca-vakjs-sdvnls" target="_blank" rel="noopener noreferrer">http://localhost/aventurateyvive/tours/alskdnalsknca-vakjs-sdvnls</a></td>
                                        <td class="td-actions" data-id-tours="<?php echo $i; ?>">
                                            <button class="btn btn-warning font-size-18px"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger font-size-18px"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- Small modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel2">Nuevo tour</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <form action="<?php echo URL.'admin-paquetes/registrar'; ?>" method="POST" class="container" id="form-generador-lugares">
                                    <div class="form-group">
                                        <label for="">Cuantos lugares tiene el tour</label>
                                        <input type="number" name="number_places" class="form-control" id="input-number-tours" min="1" max="10" value="0" required>
                                    </div>
                                    <div class="container" id="contenedor-atractivos"></div>
                                    <br>
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn btn-primary" value="Agregar">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /modals -->
            <!-- footer content -->
            <?php require_once MODULOS_ADMIN . 'footer_section.php'; ?>
        </div>
    </div>
    <?php include INCLUDES . 'footer_enlaces_admin.php'; ?>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabla-tours').DataTable({
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