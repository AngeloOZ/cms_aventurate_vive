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