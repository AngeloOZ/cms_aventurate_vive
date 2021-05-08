<?php 
class PageViewsController extends Controller{
    function __construct()
    {   
        parent::__construct();
    }

    function inicio(){
        // $title = ucfirst(__FUNCTION__)." - ".NAME_PROJECT;
        parent::render('pagina/index',null);
    }
    function galeria(){
        parent::render('pagina/galeria',null);
        // var_dump($GLOBALS['lang']);    
    }
    function contactos(){
        echo "<h1>Soy contactos</h1>";
    }
    function tours(){

        if(func_num_args() == 0 && false){
            echo "<h1>Soy tours</h1>";
        }else{
            // $params = func_get_args() = null;
            // echo "<h1>Soy tours a - {$params[0]} </h1>";
            parent::render('pagina/tour_especifico');
        }
    }
}