<?php
require_once LIBS . 'uploadfile.php';
require_once MODELS . 'galeriaModels.php';
class AdminGaleriaController extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->objGaleriaModels = new GaleriaModels();
    }

    function index()
    {
        $consult = $this->objGaleriaModels->listar();
        parent::render('admin/galeria', $consult);
    }

    function listar()
    {
        validate_request_enviroment("GET", "admin-galeria");
        $result = $this->objGaleriaModels->listar();
        print_message_json(200, "list", ["photos", $result]);
    }

    function agregar()
    {
        validate_request_enviroment("POST", "admin-galeria");
        if (isset($_POST["input_desc_photo"])) {
            $description = filter_var($_POST["input_desc_photo"], FILTER_SANITIZE_STRING);
            $path = "path_null";
            $url = "";

            if (isset($_FILES["input_file_photo"])) {
                try {
                    $file = new UploadFile('input_file_photo', UPLOADS_FILES . 'galeria', 6, ['png', 'jpg', 'jpeg', 'gif', 'webp', 'svg']);
                    $aux_path = $file->uploadFile();
                    $path = $aux_path[0];
                    $url = UPLOADS . 'galeria/' . $aux_path[1];
                } catch (Exception $error) {
                    print_message_json(500, $error->getMessage());
                }
            } else {
                $url = filter_var($_POST['input_file_photo'], FILTER_SANITIZE_URL);
            }
            $result_save = $this->objGaleriaModels->agregar($description, $path, $url);

            if ($result_save[0] == "ok") {

                print_message_json(200, "inserted");
            } else {
                print_message_json(500, "Error interno del servidor intentelo más tarde, si el problema persiste comuniquese con soporte");
            }
        }
    }
    function editar()
    {
        validate_request_enviroment("POST", "admin-galeria");
        if (isset($_POST["input_id_photo"]) && !empty($_POST["input_id_photo"])) {
            $id = filter_var($_POST["input_id_photo"], FILTER_SANITIZE_NUMBER_INT);
            $description = filter_var($_POST["input_desc_photo"], FILTER_SANITIZE_STRING);
            $path = "path_null";
            $url = "";

            $objPhoto = new GaleriaModels();
            $lastPhoto = $objPhoto->listar($id);

            if (isset($_FILES["input_file_photo"])) {
                try {
                    $file = new UploadFile('input_file_photo', UPLOADS_FILES . 'galeria', 6, ['png', 'jpg', 'jpeg', 'gif', 'webp', 'svg']);
                    $aux_path = $file->uploadFile();
                    $path = $aux_path[0];
                    $url = UPLOADS . 'galeria/' . $aux_path[1];
                    UploadFile::deleteFile($lastPhoto["path_photo"]);
                } catch (Exception $error) {
                    print_message_json(500, $error->getMessage());
                }
            } else {
                $url = filter_var($_POST['input_file_photo'], FILTER_SANITIZE_URL);
                if ($url == $lastPhoto["url_photo"]) {
                    $path = $lastPhoto["path_photo"];
                }
            }

            $result_save = $objPhoto->editar($id, $description, $path, $url);
            if ($result_save === "ok") {
                print_message_json(200, "updated");
            } else {
                print_message_json(500, "Error interno del servidor intentelo más tarde, si el problema persiste comuniquese con soporte");
            }
        }
    }
    function eliminar()
    {
        validate_request_enviroment("GET", "admin-galeria");
        if (func_num_args() == 1) {
            $id_photo = func_get_arg(0);
            if (is_numeric($id_photo)) {
                $lastPhoto = $this->objGaleriaModels->listar($id_photo);
                $delete = $this->objGaleriaModels->eliminar($id_photo);
                if ($delete == "ok") {
                    if ($lastPhoto["path_photo"] != "path_null") {
                        try {
                            UploadFile::deleteFile($lastPhoto["path_photo"]);
                        } catch (\Throwable $th) {
                            print_message_json(203, "Foto borrada con errores");
                        }
                    }
                    print_message_json(200, "La foto fue borrada correctamente");
                } else {
                    print_message_json(500, "Hubo un error interno, intentelo más tarde");
                }
            } else {
                print_message_json(402, "El identificador de la foto no es válido");
            }
        } else {
            print_message_json(402, "El identificador de la foto no es válido");
        }
    }
}
