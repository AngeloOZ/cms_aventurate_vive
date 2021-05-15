<?php 

function print_message_json(int $status_code, string $message, array $other = []){
    $json = array(
        "status" => $status_code,
        "message" => $message,
    );
    if(!empty($other) && count($other) >= 2){
        $json[$other[0]] = $other[1];
    }
    echo json_encode($json);
    http_response_code($status_code);
}

function redirect_to(string $controller = "admin"){
    header("location: ".URL.$controller);
    die;
}
function validate_request_enviroment(string $method = "GET", string $controller = "admin"){
    if($_SERVER["REQUEST_METHOD"] != $method) redirect_to($controller);
    if(!isset($_SERVER["HTTP_X_MODE_REQUEST"])) redirect_to($controller);
    if($_SERVER["HTTP_X_MODE_REQUEST"] !== "AJAX") redirect_to($controller);
}