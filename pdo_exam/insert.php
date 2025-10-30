<?php
// Database connection
require "dbconfig.php";

// SQL insert with prepared statement
$stmt = $conn->prepare("INSERT INTO grocery_items (item_name, category, quantity, price) 
VALUES (:name, :category, :quantity, :price)");

// Execute insert
$stmt->execute([
    ':name' => 'Banana',
    ':category' => 'Fruit',
    ':quantity' => 40,
    ':price' => 0.50
]);

echo "✅ Record Inserted!";
?>