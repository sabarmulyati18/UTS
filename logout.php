<?php
session_start();
$_SESSION['sesi_id'] = "";
$_SESSION['sesi_username'] = "";
$_SESSION['sesi_nama'] = "";
if(empty($_SESSION['sesi_id'])) header("location: index.php");
?>
