<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productdb"; // tumhara database ka naam

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>