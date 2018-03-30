<?php
session_start();

include 'connection.php';
$_SESSION['flag'] = 0;


session_destroy();


header("Location:home.php");

?>