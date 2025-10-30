<?php
// 🗑️ Delete a grocery item using its ID
require "dbconfig.php";

try {
    // Prepare SQL DELETE statement
    $stmt = $conn->prepare("DELETE FROM grocery_items WHERE item_id = :id");

    // Execute deletion (change ID to delete a different item)
    $stmt->execute([':id' => 4]);

    $message = "✅ Grocery item deleted successfully!";
} catch (PDOException $e) {
    $message = "❌ Error deleting record: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Grocery Item</title>
    <style>
        body { background: #e6f2ff; font-family: Arial; text-align: center; padding: 40px; }
        h2 { color: #0044cc; }
        p { background: #fff176; color: #222; padding: 10px 20px; border-radius: 10px; display: inline-block; }
    </style>
</head>
<body>
    <h2>Delete Grocery Item</h2>
    <p><?= $message ?></p>
</body>
</html>