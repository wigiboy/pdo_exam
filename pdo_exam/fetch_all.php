<?php
// 📊 Display all grocery items sorted by price (complex query)
require "dbconfig.php";

try {
    // Complex query: sort by category ascending then price descending
    $stmt = $conn->prepare("SELECT * FROM grocery_items ORDER BY category ASC, price DESC");
    $stmt->execute();
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("❌ Error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>All Grocery Items</title>
    <style>
        body { background: #e3f2fd; font-family: Arial; padding: 40px; }
        h2 { color: #0044cc; text-align: center; }
        table { border-collapse: collapse; width: 90%; margin: auto; background: white; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background: #0044cc; color: white; }
        tr:nth-child(even) { background: #fffde7; }
    </style>
</head>
<body>
<h2>All Grocery Items (Sorted by Category and Price)</h2>
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