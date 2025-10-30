<?php
// Database connection
require "dbconfig.php";

// SQL query to get one record (ID = 1)
$stmt = $conn->prepare("SELECT * FROM grocery_items WHERE id = 1");

// Execute query
$stmt->execute();

// Fetch one row
$item = $stmt->fetch(PDO::FETCH_ASSOC);

// Display result
echo "<pre>";
print_r($item);
echo "</pre>";
?>