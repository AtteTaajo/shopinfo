<?php
function openDb(){
    $dp = new PDO("mysql:host=localhost;dbname=shoppinglist;charset=utf8mb4","root","");
    $dp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dp;
}

function returnError(PDOException $pdoex) {
    echo header("HTTP/1.1 500 Internal Server Error");
    $error = array("error" => $pdoex->getMessage());
    echo json_encode($error);
    exit;
}