<?php
require_once('config.php');

try {
    // Insert sample data into the table
    $sql = "INSERT INTO users (username, email) VALUES
        ('user1', 'user1@example.com'),
        ('user2', 'user2@example.com'),
        ('user3', 'user3@example.com')";
    $conn->exec($sql);
    echo "Data inserted successfully";
} catch (PDOException $e) {
    echo "Data insertion failed: " . $e->getMessage();
}
?>
