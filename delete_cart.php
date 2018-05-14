<?php
session_start();
$id=$_GET['id'];
unset($_SESSION['order'][$id]);
header("location:cart.php");
?>