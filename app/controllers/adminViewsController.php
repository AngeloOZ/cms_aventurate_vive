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
            header("location: " . URL . 'admin_login');
        }
    }
    
}
