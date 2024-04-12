<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: login.php");
    exit();
}

if($_SESSION["rol"] < 2) {

}
?>
<form action='delete_logic.php' name="delete_logic" method="POST">
    <label> ID from user </label>
    <input type="text" name="id_user" placeholder="id:" required
    <input type="submit" value="delete_user">
</form>