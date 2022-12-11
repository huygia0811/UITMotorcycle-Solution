<?php
ob_start();
session_start();
unset($_SESSION['username']);
header("location: signin.php"); 
?>