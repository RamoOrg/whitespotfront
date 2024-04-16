<?php
error_reporting(0);
ob_start();
session_start();

$host= "bajbm2cm5qj6qe8deecq-mysql.services.clever-cloud.com";
$username = "u6fntmtjdjcfrsir";
$password = "tyWgh8x4B60HzOCC5WBL";
$dbname = "bajbm2cm5qj6qe8deecq";
global $conn;
$conn = new mysqli($host, $username, $password,$dbname);
if ($conn->connect_error) {
    echo"connection failed".$conn->connect_error;
    exit();
}
?>