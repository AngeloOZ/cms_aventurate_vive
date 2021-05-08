<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once INCLUDES . 'header_enlaces_admin.php'; ?>

    <title>CMS - Galeria</title>
</head>

<body class="login" style="height: auto;">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="<?php echo URL.'admin'; ?>" method="POST">
                        <h1>Iniciar Sesión</h1>
                        <div>
                            <input type="email" class="form-control" placeholder="E-mail" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Contraseña" required="" />
                        </div>
                        <div>
                            <input type="submit" class="btn btn-default submit" value="Iniciar Sesión" />
                            <a class="reset_pass" href="#">Restaurar contraseña</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <div class="clearfix"></div>
                            <div>
                                <h1><i class="fa fa-paw"> </i> <?php echo NAME_PROJECT; ?></h1>
                                <p>© <?php echo Date("Y"); ?> Todos los derechos reservados.</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>