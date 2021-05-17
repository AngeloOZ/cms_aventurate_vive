<?php
class AdminPaquetesController extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    function index(){
        parent::render("admin/paquetes");
    }
    function registrar(){
        $places = array();
        for ($i=0; $i < $_POST["number_places"]; $i++) { 
            $num = $i + 1;
            $places["place_{$num}"] = intval($_POST["place_attractive"][$i]);
        }
        $data = ["action" => "registrar","num_places" => $places];
        parent::render('admin/registrar_paquete',$data);
    }
    function registarpaquete(){
        echo json_encode($_POST);
        die;
    }

}