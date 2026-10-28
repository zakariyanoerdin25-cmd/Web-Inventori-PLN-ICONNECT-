<?php
session_start();

// jika belum login
if(!isset($_SESSION['log'])){
    header('Location: login.php');
    exit;
}
?>