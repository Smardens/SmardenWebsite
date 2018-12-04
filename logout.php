<?php
    //Clear and destroy session on log out
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: login.php");
    exit;

?>