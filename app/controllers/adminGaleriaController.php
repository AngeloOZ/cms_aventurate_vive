<?php 
// header("Access-Control-Allow-Headers: X-MODE-REQUEST");
require_once LIBS.'uploadfile.php';
class AdminGaleriaController extends Controller{
    function agregar(){
        if(isset($_SERVER["HTTP_X_MODE_REQUEST"]) && $_SERVER["HTTP_X_MODE_REQUEST"] === "AJAX"){
            if(isset($_POST["input-desc-photo"])){
                $description = filter_var($_POST["input-desc-photo"],FILTER_SANITIZE_STRING);
                if(isset($_FILES["input_file_photo"])){
                    try{
                        $file = new UploadFile('input_file_photo', UPLOADS_FILES.'galeria', 6 , ['png', 'jpg','jpeg', 'gif', 'webp','svg']);
    
                        $ruta = $file->uploadFile();
    
                        echo json_encode(["status" => 200, "path" => UPLOADS.'galeria/'.$ruta[1], "caption" => $description,"size"=>$file->getSizeFile()]);
                    }
                    catch(Exception $er){
                        echo json_encode(["status" => 500, "message" => $er->getMessage()]);
                        http_response_code(500);
                    }
                }else{
                    $url = filter_var($_POST['input_file_photo'],FILTER_SANITIZE_URL);
                    echo json_encode(["status" => 200, "path" => $url, "caption" => $description]);
                }
            }
        }else{            
            http_response_code(400);
            die;
        }
    }
    function eliminar(){

    }
    function editar(){

    }
}