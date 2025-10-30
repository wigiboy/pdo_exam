<?php
// Database connection
require "dbconfig.php";

// Query database for all items
$stmt = $conn->prepare("SELECT * FROM grocery_items");
$stmt->execute();

// Store result in array
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Display data in HTML table -->
<table border="1" cellpadding="5" cellspacing="0">
<tr>
    <th>ID</th>
    <th>Item Name</th>
    <th>Category</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Date Added</th>
</tr>

<?php foreach($items as $row): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['item_name'] ?></td>
    <td><?= $row['category'] ?></td>
    <td><?= $row['quantity'] ?></td>
    <td><?= $row['price'] ?></td>
    <td><?= $row['date_added'] ?></td>
</tr>
<?php endforeach; ?>
</table>
