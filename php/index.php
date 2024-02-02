<?php
$host = 'mysql';
$port = '3306';
$db = 'test';
$user = 'root';
$pass = 'root';

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection to the database failed: " . $conn->connect_error);
}

echo "Connected to the database successfully!<br>";

// Create a table named 'example_table'
$sql = "CREATE TABLE IF NOT EXISTS example_table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'example_table' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();

