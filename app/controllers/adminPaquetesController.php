<?php
class AdminPaquetesController extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    function index(){
        parent::render("admin/paquetes");
    }

}