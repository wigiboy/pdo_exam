<?php
// Database connection
require "dbconfig.php";

// Delete record where id = 4
$stmt = $conn->prepare("DELETE FROM grocery_items WHERE id = 4");

// Execute delete
$stmt->execute();

echo "✅ Record Deleted!";
?>