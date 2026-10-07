<?php

include "../includes/db.php";

if (!isset($_GET['id'])) {
    header("Location: products.php");
    exit();
}

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
$product = mysqli_fetch_assoc($result);

if (!$product) {
    echo "Product not found.";
    exit();
}


/* Update Product */

if (isset($_POST['update_product'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "UPDATE products 
            SET name = ?, description = ?, price = ?, image = ?
            WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "ssdsi",
        $name,
        $description,
        $price,
        $image,
        $id
    );

    mysqli_stmt_execute($stmt);

    header("Location: products.php");
    exit();
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Product - Dream Lights Admin</title>

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

    <h2>Edit Product</h2>

    <form method="POST">

        <input
            type="text"
            name="name"
            value="<?php echo htmlspecialchars($product['name']); ?>"
            placeholder="Product Name"
            required
        >

        <br><br>

        <textarea
            name="description"
            placeholder="Product Description"
            required
        ><?php echo htmlspecialchars($product['description']); ?></textarea>

        <br><br>

        <input
            type="number"
            name="price"
            value="<?php echo $product['price']; ?>"
            step="0.01"
            placeholder="Price"
            required
        >

        <br><br>

        <input
            type="text"
            name="image"
            value="<?php echo htmlspecialchars($product['image']); ?>"
            placeholder="Image path"
            required
        >

        <br><br>

        <button type="submit" name="update_product">
            Update Product
        </button>

        <a href="products.php">Cancel</a>

    </form>

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
