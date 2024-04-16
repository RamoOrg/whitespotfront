<?php
error_reporting(0);
ob_start();
session_start();

$host= "localhost";
$username = "root";
$password = "janish11";
$dbname = "car_service";
global $conn;
$conn = new mysqli($host, $username, $password,$dbname);
if ($conn->connect_error) {
    echo"connection failed".$conn->connect_error;
    exit();
}
?>