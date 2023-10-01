<?php
require_once('config.php');

try {
    // Create a sample table
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL
    )";
    $conn->exec($sql);
    echo "Table created successfully";
} catch (PDOException $e) {
    echo "Table creation failed: " . $e->getMessage();
}
?>
