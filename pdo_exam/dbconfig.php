<?php
// Database connection settings
$host = "localhost";
$dbname = "grocery_db";
$username = "root"; // default XAMPP MySQL user
$password = ""; // default XAMPP MySQL password is empty

try {
    // Create PDO connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set PDO to throw exceptions for errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✅ Database connected successfully!"; // Success message
} catch(PDOException $e) {
    // Display connection error
    echo "❌ Connection failed: " . $e->getMessage();
}
?>
