<?php

include 'com.php';

if(empty($_POST["username"]) || empty($_POST["password"])) {
    header("location: login.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$stmt = $connection->prepare("INSERT INTO users (username, password, email) Values(:user , :pass, :mail)");

$stmt->bind_param(";user", $username);
$stmt->bind_param(";pass", $password);
$stmt->bind_param(";mail", $email);
$stmt->execute();

header('location: login.php');
?>