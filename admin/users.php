<?php
include "../includes/db.php";

$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Users - Dream Lights Admin</title>

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

    <h2>Registered Users</h2>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created At</th>
        </tr>

        <?php while ($user = mysqli_fetch_assoc($result)): ?>

        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['phone']; ?></td>
            <td><?php echo $user['created_at']; ?></td>
        </tr>

        <?php endwhile; ?>

    </table>

</section>

<footer>
    <p>© 2026 Dream Lights. All Rights Reserved.</p>
</footer>

</body>
</html>