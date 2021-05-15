<?php
class GaleriaModels extends Model{


    private $table = "jm_fotos_galeria";
    function __construct()
    {
        parent::__construct();
    }

    function listar(int $id = null){
        try {
            if($id === null){
                $query = "SELECT * FROM {$this->table}";
                $result = parent::query($query);
                return $result;
            }else{
                $query = "SELECT * FROM {$this->table} WHERE id_photo = ?";
                $result = parent::query($query,[$id]);
                return $result[0];
            }
        } catch (Exception $th) {
            return $th->getMessage();
        }

    }

    function agregar($description, $path, $url){
        try{
            $query = "INSERT INTO {$this->table}(caption_photo, path_photo, url_photo) VALUES(:caption, :path, :url)";
            $data = [
                ":caption"=>$description,
                ":path"=>$path,
                ":url"=>$url,
            ];
            $result = Model::query($query, $data);
            if($result[0]){
                return ["ok", $result[1]]; 
            }else{
                return null;
            }
        }
        catch(Exception $error){
            return $error->getMessage();
        }
    }

    function editar($id, $description, $path, $url){
        try{
            $query = "UPDATE {$this->table} SET caption_photo = :caption, path_photo = :path, url_photo = :url WHERE id_photo = :id";
            $data = [
                "id" => $id,
                ":caption" => $description,
                ":path" => $path,
                ":url" => $url,
            ];
            $result = parent::query($query, $data);
            if($result){
                return "ok"; 
            }else{
                return null;
            }
        }
        catch(Exception $error){
            return $error->getMessage();
        }
    }

    function eliminar($id){
        try {
            $query = "DELETE FROM {$this->table} WHERE id_photo = :id_photo";
            $result = parent::query($query, [":id_photo"=>$id]);
            if($result){
                return "ok";
            }else{
                return null;
            }
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }
}