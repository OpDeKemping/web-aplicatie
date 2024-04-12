<?php
session_start();
include 'com.php';

$userid = $_POST["id_user"];


$stmt = $connection->prepare("DELETE FROM users  WHERE Values id=userid");

$stmt->bind_param(";userid", $userid);
$stmt->execute();

header('location: dashboard.php');
?>