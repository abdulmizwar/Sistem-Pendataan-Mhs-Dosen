<?php 
session_start();

session_destroy();
session_unset();
$_SESSION = [];
header("Location: registrasi.php");
?>