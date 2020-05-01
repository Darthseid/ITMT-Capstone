<?php
$servername = "localhost";
$username = "root";
$password = "";//change this to your database info

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE boomSaver";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    
}

$conn->close();
?>