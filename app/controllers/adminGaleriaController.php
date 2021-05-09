<?php 
require_once LIBS.'uploadfile.php';
require_once MODELS.'galeriaModels.php';
class AdminGaleriaController{

    function agregar(){
        if(isset($_SERVER["HTTP_X_MODE_REQUEST"]) && $_SERVER["HTTP_X_MODE_REQUEST"] === "AJAX"){
            if(isset($_POST["input_desc_photo"])){
                $description = filter_var($_POST["input_desc_photo"],FILTER_SANITIZE_STRING);
                $path = "path_null";
                $url = ""; 

                if(isset($_FILES["input_file_photo"])){
                    try{
                        $file = new UploadFile('input_file_photo', UPLOADS_FILES.'galeria', 6 , ['png', 'jpg','jpeg', 'gif', 'webp','svg']);
    
                        $aux_path = $file->uploadFile();
                        $path = $aux_path[0];
                        $url = UPLOADS.'galeria/'.$aux_path[1];
                    }
                    catch(Exception $error){
                        print_message_json(500, $error->getMessage());
                    }
                }else{
                    $url = filter_var($_POST['input_file_photo'],FILTER_SANITIZE_URL);
                }

                $save_photo = new GaleriaModels();
                $result_save = $save_photo->agregar($description, $path, $url);

                if($result_save[0] == "ok"){
                    print_message_json(200, "inserted", ["photo", ["id"=>$result_save[1],"url"=>$url, "caption"=>$description]]);
                }else{
                    print_message_json(500,"Error interno del servidor intentelo más tarde, si el problema persiste comuniquese con soporte");
                }  
            }
        }else{            
            http_response_code(400);
        }
    }
    function editar(){
        if(isset($_SERVER["HTTP_X_MODE_REQUEST"]) && $_SERVER["HTTP_X_MODE_REQUEST"] === "AJAX"){
            if(isset($_POST["input_id_photo"]) && !empty($_POST["input_id_photo"])){
                $id = filter_var($_POST["input_id_photo"], FILTER_SANITIZE_NUMBER_INT);
                $description = filter_var($_POST["input_desc_photo"],FILTER_SANITIZE_STRING);
                $path = "path_null";
                $url = "";
                
                $objPhoto = new GaleriaModels();
                $lastPhoto = $objPhoto->listar($id);

                if(isset($_FILES["input_file_photo"])){
                    try{
                        $file = new UploadFile('input_file_photo', UPLOADS_FILES.'galeria', 6 , ['png', 'jpg','jpeg', 'gif', 'webp','svg']);
    
                        $aux_path = $file->uploadFile();
                        $path = $aux_path[0];
                        $url = UPLOADS.'galeria/'.$aux_path[1];
                        UploadFile::deleteFile($lastPhoto["path_photo"]);
                    }
                    catch(Exception $error){
                        print_message_json(500, $error->getMessage());
                    }
                }else{
                    $url = filter_var($_POST['input_file_photo'],FILTER_SANITIZE_URL);
                    if($url == $lastPhoto["url_photo"]){
                        $path = $lastPhoto["path_photo"];
                    }
                }

                $result_save = $objPhoto->editar($id, $description, $path, $url);
                if($result_save === "ok"){
                    print_message_json(200, "updated");
                }else{
                    print_message_json(500,"Error interno del servidor intentelo más tarde, si el problema persiste comuniquese con soporte");
                }  
            }
        }else{
            http_response_code(400);
        }
    }
    function eliminar(){

    }
}