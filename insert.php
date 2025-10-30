<?php
// ➕ Insert a new grocery item into the database
require "dbconfig.php";

try {
    // Prepare SQL INSERT statement
    $stmt = $conn->prepare("INSERT INTO grocery_items (item_name, category, quantity, price, supplier)
                            VALUES (:name, :category, :quantity, :price, :supplier)");

    // Execute query with parameter values
    $stmt->execute([
        ':name' => 'Apples',
        ':category' => 'Fruit',
        ':quantity' => 30,
        ':price' => 1.25,
        ':supplier' => 'Fresh Farms'
    ]);

    $message = "✅ New grocery item added successfully!";
} catch (PDOException $e) {
    $message = "❌ Error inserting record: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Grocery Item</title>
    <style>
        body { background: #e6f2ff; font-family: Arial; text-align: center; padding: 40px; }
        h2 { color: #0044cc; }
        p { background: #fff176; color: #222; padding: 10px 20px; border-radius: 10px; display: inline-block; }
    </style>
</head>
<body>
    <h2>Insert Grocery Item</h2>
    <p><?= $message ?></p>
</body>
</html>