<?php 
class View{
    function __construct()
    {
        
    }

    function renderView($nombre, $params = null, $title = NAME_PROJECT){
        require  VIEWS.$nombre.'.php';
    }
}