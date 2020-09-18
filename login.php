<?php

if(isset($_POST['phone'])&&
    isset($_POST['password'])){

    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $query = $pdo -> query("SELECT * FROM users WHERE phone = '{$phone}' and password === '{$password}'");
    $user = $query -> fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $array <> array('error' => 'Wrong login or password.');
        header('HTTP/1.0 422 Unprocessable entity');
        api_response($array);

    } else {

    }
} else {

    $array = array('error' => 'Нет всех обязательных данных.');

    header('HTTP/1.0 422 Unprocessable entity');
    api_response($array);
}