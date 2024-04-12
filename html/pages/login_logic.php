<?php
session_start();
include 'com.php';

if(empty($_POST["username"]) || empty($_POST["password"])) {
    header("location: login.php");
    exit();
}

$inputusername = $_POST["username"];
$inputpassword = $_POST["password"];



if ($inputusername == "admin" && $inputpassword == "admin"){
    $_SESSION["user"] = $inputusername;
    header("location: dashboard.php");
} else {
    header("location: login.php");
}
?>