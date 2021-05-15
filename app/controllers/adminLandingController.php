<?php 
class AdminLandingController extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        parent::render('admin/landing');
    }
}