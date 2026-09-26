<?php
include "../includes/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $admin_response = $_POST["admin_response"];

    $sql = "UPDATE messages SET admin_response = ? WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "si",
        $admin_response,
        $id
    );

    mysqli_stmt_execute($stmt);
}

$result = mysqli_query($conn, "SELECT * FROM messages ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Messages - Dream Lights Admin</title>
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

    <h2>Contact Messages</h2>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Admin Response</th>
            <th>Date</th>
        </tr>

        <?php while ($msg = mysqli_fetch_assoc($result)): ?>

        <tr>
            <td><?php echo $msg['id']; ?></td>

            <td><?php echo $msg['name']; ?></td>

            <td><?php echo $msg['email']; ?></td>

            <td><?php echo $msg['subject']; ?></td>

            <td><?php echo $msg['message']; ?></td>

            <td>

    <?php
    if ($msg['admin_response'] != "") {
        echo $msg['admin_response'];
    } else {
    ?>

        <form method="post" action="messages.php">

            <input type="hidden"
                name="id"
                value="<?php echo $msg['id']; ?>">

            <input type="text"
                name="admin_response"
                placeholder="Write response"
                required>

            <button type="submit">Send</button>

        </form>

    <?php
    }
    ?>

</td>

            <td><?php echo $msg['created_at']; ?></td>
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