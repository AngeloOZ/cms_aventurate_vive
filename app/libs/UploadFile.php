<?php
// define('PATH', 'upload/');

class UploadFile{
    private $key; 
    private $allowedFilesTypes;
    private $fileSavePath;
    private $maxFileSizeBytes;
    private $maxFileSizeMb;
    private $fileTempName;

    function __construct($_key, $_fileSavePath = 'default', $_maxSize = 5, $_allowedFilesTypes = [])
    {
        $this->key = $_key;
        $this->fileSavePath =  $_fileSavePath.DS;
        $this->allowedFilesTypes = (!empty($_allowedFilesTypes)) ? $_allowedFilesTypes : ['png','jpg','jpeg','pdf'];
        $this->maxFileSizeBytes = $_maxSize * 1048576;
        $this->maxFileSizeMb = $_maxSize;
        $this->fileTempName = $_FILES[$_key]['tmp_name'];
        $this->valideEnvironment();
    }

    function valideEnvironment(){
        if (ini_get('file_uploads') == false) {
            throw new RuntimeException('La subida de archivos no esta habilitada consulte a soporte técnico');
        }
        if (isset($_FILES[$this->key]) === false) {
            throw new Exception ("No hay archivo(s) con ese nombre: {$this->key}");
        }
        $this->valideSavePath();
    }
    function getSizeFile(){
        return $_FILES[$this->key]['size'];
    }
    function valideSavePath(){
        if(!is_dir($this->fileSavePath)){
            if(!mkdir($this->fileSavePath, 0777, true)){
                throw new Exception("Hubo un error no se pudo crear la ruta");
            }
        }
    }
    function getExtensions(){
        return strtolower(pathinfo($_FILES[$this->key]['name'], PATHINFO_EXTENSION));
    }
    function validateSizeFile(){
        if($_FILES[$this->key]['size'] <= $this->maxFileSizeBytes){
            return $this->validateTypeFiles();
        }else{
            throw new Exception("El archivo supera el tamaño maximo de {$this->maxFileSizeMb}mb");
        }
    }
    function validateTypeFiles(){
        if(in_array($this->getExtensions(), $this->allowedFilesTypes)){
            return $this->saveFile();
        }else{
            throw new Exception("El tipo de archivo {$this->getExtensions()} no es permitido");
        }
    }
    function saveFile(){
        $name = uniqid().'.'.$this->getExtensions();
        $dir = $this->fileSavePath.$name;
        $dir = rtrim($dir,'/');
        if(move_uploaded_file($this->fileTempName, $dir)){
            return [$dir, $name, "path" => $dir, "name"=> $name];
        }else{
            throw new Exception("Hubo un error al guardar el archivo");
        }
    }
    public function uploadFile(){
        return $this->validateSizeFile();
    }
    public static function deleteFile($path = null){
        if($path !== null){
            if(unlink($path)){
                return true;
            }
            throw new Exception("No se pudo borrar el archivo intenetelo de nuevo");
        }else{
            throw new Exception("Ruta no válida");
        }
    }
    public static function deleteAllFiles($path = null){
        if($path !== null && is_dir($path)){
            $dir = rtrim($path."/*","/");
            $files = glob($dir);
            foreach($files as $key => $file){
                if(is_file($file)){
                    if(!unlink($file)) throw new Exception("No se pudo borrar el archivo intenetelo de nuevo");
                }else{
                    throw new Exception('La ruta: '.$file.' no es un archivo');
                }
            }
        }else{
            throw new InvalidArgumentException("Ruta no válida");
        }
    }
}