<?php 
session_start(); 
$_SESSION['Id'] = '';
unset($_SESSION['Id']); 
session_destroy();
header('location:login.html'); 
?>