<?php
$servername = "localhost";

$database = "carRental";

$username = "root";

$password = "root";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); //ให้โชว์ข้อความนี้ขึนมา แล้วออกจากโปรแกรมไปเลยไม่ทำต่อ
}

// ตั้งให้สามารถ insert ข้อมูลเป็นภาษาไทยได้
mysqli_query($conn, "set character_set_connection=utf8mb4");
mysqli_query($conn, "set character_set_client=utf8mb4");
mysqli_query($conn, "set character_set_results=utf8mb4");
