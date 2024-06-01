<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bt3_employee";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
