<?php
// 🔍 Fetch and display one grocery item by ID
require "dbconfig.php";

try {
    $id = 1; // change this ID to test other items

    // Prepare SQL SELECT statement
    $stmt = $conn->prepare("SELECT * FROM grocery_items WHERE item_id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $item = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("❌ Error fetching record: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fetch One Item</title>
    <style>
        body { background: #f0f8ff; font-family: Arial; text-align: center; padding: 40px; }
        h2 { color: #0044cc; }
        table { margin: auto; border-collapse: collapse; width: 50%; background: white; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #0044cc; color: #fff; }
        td { background: #fffde7; }
    </style>
</head>
<body>
    <h2>Fetch One Grocery Item (ID: <?= $id ?>)</h2>
    <?php if ($item): ?>
    <table>
        <tr><th>ID</th><th>Name</th><th>Category</th><th>Quantity</th><th>Price</th><th>Supplier</th></tr>
        <tr>
            <td><?= $item['item_id'] ?></td>
            <td><?= htmlspecialchars($item['item_name']) ?></td>
            <td><?= htmlspecialchars($item['category']) ?></td>
            <td><?= $item['quantity'] ?></td>
            <td>₱<?= number_format($item['price'], 2) ?></td>
            <td><?= htmlspecialchars($item['supplier']) ?></td>
        </tr>
    </table>
    <?php else: ?>
    <p style="background:#fff176; display:inline-block;">No record found.</p>
    <?php endif; ?>
</body>
</html>