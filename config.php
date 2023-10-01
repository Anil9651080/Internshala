<?php
$servername = "localhost"; // Change this if your database server is different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "internshala"; // Replace with your database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
