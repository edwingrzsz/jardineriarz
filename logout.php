<?php
session_start();
if(!isset($_SESSION['usuario'])){ 
header('Location:index.php');
} else {
    unset($_SESSION['usuario']);
    session_unset();
    session_destroy();
    header('Location:index.php');
    exit;
}
