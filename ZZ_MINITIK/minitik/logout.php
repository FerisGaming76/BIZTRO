<?php 
error_reporting(0); 
session_start(); 
session_unset(); 
session_destroy();
if (file_exists('offline.txt')) {unlink ('offline.ico');}
header('location:http://'.$_SERVER['HTTP_HOST']);
?>