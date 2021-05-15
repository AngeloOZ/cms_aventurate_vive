<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once INCLUDES.'header_enlaces_admin.php'; ?>

    <title>Admin - CMS</title>
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
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Home</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    Add content to the page ...
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                </div>
                            </div>
                        </div>
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
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Text in a modal</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- footer content -->
            <?php require_once MODULOS_ADMIN.'footer_section.php'; ?>
        </div>
    </div>
    <?php
    include INCLUDES . 'footer_enlaces_admin.php';
    ?>
</body>

</html>