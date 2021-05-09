<?php
require_once MODELS.'galeriaModels.php';
class AdminViewsController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function admin()
    {
        $state = (isset($_GET["state"])) ? $_GET["state"] : "ok";
        if ($state === "ok") {
            parent::render('admin/index');
        } else {
            header("location: " . URL . 'login_cms');
        }
    }
    function cms_login()
    {
        parent::render("admin/login");
    }
    function cms_tours()
    {
        echo strtoupper(__FUNCTION__);
    }
    function cms_galeria()
    {
        $galeria = new GaleriaModels();
        $data = $galeria->listar();
        parent::render("admin/galeria", $data);
    }
    function cms_email()
    {
        echo strtoupper(__FUNCTION__);
    }
    function cms_lockscreen(){
        echo strtoupper(__FUNCTION__);
    }
}
