<?php
ini_set('display_errors', 1);
error_reporting(-1);
session_start();
session_destroy();
session_destroy();
$_SESSION['logged_in'] = false;

header("Location: home.php")
?>