<?php
class Errores{
    function __construct($type_error = 404)
    {
        $this->type = $type_error;        
    }

    function loadView(){
        switch($this->type){
            case 404: 
                break;
            case 500:
                break;
            default:
                break;
        }
    }

} 