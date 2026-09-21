<?php
include "../includes/db.php";

$sql = "SELECT orders.*, products.name AS product_name
        FROM orders
        LEFT JOIN products ON orders.product_id = products.id
        ORDER BY orders.order_date DESC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Orders - Dream Lights Admin</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<header>
    <h1>Dream Lights - Admin Panel</h1>

    <nav>
        <a href="index.php">Dashboard</a> |
        <a href="users.php">Users</a> |
        <a href="products.php">Products</a> |
        <a href="orders.php">Orders</a> |
        <a href="messages.php">Messages</a>
    </nav>
</header>

<section class="contact">

    <h2>Customer Orders</h2>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Order Date</th>
        </tr>

        <?php while ($order = mysqli_fetch_assoc($result)): ?>

        <tr>
            <td><?php echo $order['id']; ?></td>

            <td><?php echo $order['product_name']; ?></td>

            <td><?php echo $order['customer_name']; ?></td>

            <td><?php echo $order['customer_email']; ?></td>

            <td><?php echo $order['customer_phone']; ?></td>

            <td><?php echo $order['quantity']; ?></td>

            <td>₹<?php echo $order['total_price']; ?></td>

            <td><?php echo $order['order_date']; ?></td>
        </tr>

        <?php endwhile; ?>

    </table>

</section>

<footer>
    <p>© 2026 Dream Lights. All Rights Reserved.</p>
</footer>

</body>
</html>