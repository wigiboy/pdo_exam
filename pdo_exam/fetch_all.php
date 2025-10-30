<?php
// Include database configuration file
require "dbconfig.php";

// SQL query to get all grocery items
$stmt = $conn->prepare("SELECT * FROM grocery_items");

// Execute query
$stmt->execute();

// Fetch all records as associative array
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display result for debugging
echo "<pre>";
print_r($result);
echo "</pre>";
?>