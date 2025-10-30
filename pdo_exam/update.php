<?php
// Database connection
require "dbconfig.php";

// Update record where ID = 1
$stmt = $conn->prepare("UPDATE grocery_items 
SET price = 7.00, quantity = 99 WHERE id = 1");

// Execute update
$stmt->execute();

echo "✅ Record Updated!";
?>