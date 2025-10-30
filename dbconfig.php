<?php
// 🧩 Database connection configuration using PDO

$host = "localhost";
$dbname = "grocery_db"; // make sure this matches your actual database name
$username = "root";
$password = "";

try {
    // Establish connection to MySQL database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Enable error reporting
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Connection success message
    echo "✅ Database connected successfully!";
} catch (PDOException $e) {
    // Connection failed message
    echo "❌ Connection failed: " . $e->getMessage();
}
?>