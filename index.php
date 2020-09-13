<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Authorization, Content-Type, X-Requested-With, Accept");

include_once 'settings.php';

if (isset($_GET['api'])) {

    if (isset($_GET['signup'])) {

        include_once "signup.php";
    }

    else {

        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

else {

    header('HTTP/1.0 404 Not Found');
    exit;
}

function api_response($array) {

    // Заголовки на ответ.
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($array);
    exit;
}