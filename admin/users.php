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
    <link rel="icon" type="image/png" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<header>
    <div class="brand">
        <img src="../assets/images/logo.png" alt="Dream Lights Logo">
        <h1>Dream Lights - Admin Panel</h1>
    </div>

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
    <div class="footer-content">

        <div class="footer-box">
            <h3>Dream Lights</h3>
            <p>Beautiful Decorative Lights for Every Celebration.</p>
        </div>

        <div class="footer-box">
            <h3>Quick Links</h3>
            <a href="index.php">Dashboard</a><br>
            <a href="users.php">Users</a><br>
            <a href="products.php">Products</a><br>
            <a href="orders.php">Orders</a><br>
            <a href="messages.php">Messages</a>
        </div>

        <div class="footer-box">
            <h3>Contact</h3>
            <p>📞 +91 9876543210</p>
            <p>📧 dreamlights@gmail.com</p>
            <p>📍 Surat, Gujarat</p>
        </div>

    </div>

    <p class="copyright">
        © 2026 Dream Lights. All Rights Reserved.
    </p>
</footer>

</body>
</html>