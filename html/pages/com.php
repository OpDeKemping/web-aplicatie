<?php
$host = "db";
$db = "mydatabase";
$user = "user" ;
$pass = "password";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    pdo::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION,
    pdo::ATTR_DEFAULT_FETCH_MODE => pdo::FETCH_ASSOC,
    pdo::ATTR_EMULATE_PREPARES => false,
];

try {
    $conection = new pdo($dsn,$user,$pass,$options);
} catch (\PDOException $e) {
    echo "conection failed:",$e->getMessage();
}