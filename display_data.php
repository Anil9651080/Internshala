<?php
require_once('config.php');

try {
    // Retrieve and display data from the table
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h2>User Data</h2>";
    echo "<ul>";
    foreach ($result as $row) {
        echo "<li>Username: " . $row['username'] . ", Email: " . $row['email'] . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "Data retrieval failed: " . $e->getMessage();
}
?>
