<?php
// 📊 Display grocery items in a formatted HTML table
require "dbconfig.php";

try {
    // Complex query: Sort by category then by price ascending
    $stmt = $conn->prepare("SELECT * FROM grocery_items ORDER BY category ASC, price ASC");
    $stmt->execute();
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("❌ Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grocery Items Table</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 20px; }
        table { border-collapse: collapse; width: 80%; margin: auto; background: white; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #0044cc; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
<h2 style="text-align:center;">🛒 Grocery Items Table</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Supplier</th>
        <th>Date Added</th>
    </tr>
    <?php foreach($items as $row): ?>
    <tr>
        <td><?= $row['item_id'] ?></td>
        <td><?= htmlspecialchars($row['item_name']) ?></td>
        <td><?= htmlspecialchars($row['category']) ?></td>
        <td><?= $row['quantity'] ?></td>
        <td>₱<?= number_format($row['price'], 2) ?></td>
        <td><?= htmlspecialchars($row['supplier']) ?></td>
        <td><?= $row['date_added'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>