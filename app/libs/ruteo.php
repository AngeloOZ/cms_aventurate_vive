<?php
class Ruteo{
    private $url;
    private $controlador;
    private $method;
    private $params;

    function __construct()
    {
        $this->url = isset($_GET['url']) ? $_GET['url'] : 'inicio';
        $this->url = rtrim($this->url,'/');
        $this->url = explode('/',$this->url); 
        
        $this->init();
    }
    public function init(){
        $this->get_controlador_uri($this->url);
        $this->get_method_uri($this->url);
        $this->get_params_uri($this->url);
    }

    private function get_controlador_uri(&$url){
        $this->controlador = $url[0];
        unset($url[0]);
    }

    private function get_method_uri(&$url){
        $this->method = isset($url[1]) ? $url[1] : 'index'; 
        unset($url[1]);
    }

    private function get_params_uri($url){
        if(count($url) > 0){
            $this->params = array_values($url);
        }else{
            $this->params = [];
        }
    }

    public function get_controlador(){
        return $this->controlador;
    }
    public function get_method(){
        return $this->method;
    }
    public function get_params(){
        return $this->params;
    }

}