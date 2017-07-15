<?php
echo "<body style='background-color: black;color: lime;'>";
//Deconnection.
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
    );
    header("location:../vue/index.php");
}
session_destroy();