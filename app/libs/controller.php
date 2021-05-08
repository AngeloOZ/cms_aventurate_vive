<?php 
class Controller{

    function __construct()
    {
        $this->view = new View();
    }

    function render($route, $datos = null, $title = NAME_PROJECT){
        if($datos != null){
            $this->view->renderView($route, $datos, $title);
        }else{
            $this->view->renderView($route, null, $title);
        }
    }
}