<?php

include_once 'settings.php';

try {
    $pdo = new PDO("mysql:host={localhost};dbname={$database}", $username, $password);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}

$pdo -> exec("Create table users (
                        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
                        first_name TEXT NOT NULL,
                        surname TEXT NOT NULL,
                        phone INT USINGNED NOT NULL,
                        password TEXT NOT NULL,
) engine = Innodb DEFAULT CHARSET=utf8;
");