<?php
$dbServer = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'mobileShop';

$db = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName) or die('Connection is failed!!!');
?>