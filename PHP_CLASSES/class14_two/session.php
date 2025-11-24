<?php
session_start();

if(!isset($_SESSION['user'])){
session_destroy();
header("location:login.php");
}

if(!isset($_COOKIE['user'])){
session_destroy();
header("location:login.php");
}
?>