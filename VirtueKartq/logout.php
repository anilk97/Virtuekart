<?php 
session_start(); 
include('dbconnection.php');
session_destroy();
header('location:index.php');
?>