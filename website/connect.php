<?php
$host = 'localhost';         // MySQL server
$user = 'root';              // Default username in XAMPP
$pass = '';                  // Default password in XAMPP is empty
$dbname = 'shop_db';         // Your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

// echo "Connected successfully"; // Uncomment to test
?>
