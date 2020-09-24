<?php

if (isset($_POST['phone']) && isset($_POST['password'])) {
    unset($_SESSION['phone']);
    unset($_SESSION['password']);
    api_response($array);
}

else {
    header('HTTP/1.0 404 Not Found');
    exit;
}