<?php
// ✏️ Update grocery item details
require "dbconfig.php";

try {
    // Prepare SQL UPDATE statement
    $stmt = $conn->prepare("UPDATE grocery_items 
                            SET price = :price, quantity = :quantity 
                            WHERE item_id = :id");

    // Execute update with parameters
    $stmt->execute([
        ':price' => 2.00,
        ':quantity' => 50,
        ':id' => 1
    ]);

    $message = "✅ Grocery item updated successfully!";
} catch (PDOException $e) {
    $message = "❌ Error updating record: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Grocery Item</title>
    <style>
        body { background: #f0f8ff; font-family: Arial; text-align: center; padding: 40px; }
        h2 { color: #0044cc; }
        p { background: #fff176; color: #222; padding: 10px 20px; border-radius: 10px; display: inline-block; }
    </style>
</head>
<body>
    <h2>Update Grocery Item</h2>
    <p><?= $message ?></p>
</body>
</html>