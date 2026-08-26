<?php
include "includes/db.php";

$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shop - Dream Lights</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header>
    <h1>Dream Lights</h1>

    <nav>
        <a href="index.php">Home</a> |
        <a href="about.php">About</a> |
        <a href="shop.php">Shop</a> |
        <a href="contact.php">Contact</a> |
        <a href="login.php">Login</a>
    </nav>
</header>


<section class="shop">

    <h2>Our Lights Collection</h2>

    <div class="shop-container">

    <?php while ($product = mysqli_fetch_assoc($result)): ?>

        <div class="shop-card">

            <img src="<?php echo $product['image']; ?>"
                alt="<?php echo $product['name']; ?>">

            <h3><?php echo $product['name']; ?></h3>

            <p><?php echo $product['description']; ?></p>

            <h4>₹<?php echo $product['price']; ?></h4>

            <a href="buy.php?id=<?php echo $product['id']; ?>" class="btn">Buy Now</a>

        </div>

    <?php endwhile; ?>

    </div>

</section>


<footer>
    <p>© 2026 Dream Lights. All Rights Reserved.</p>
</footer>

</body>
</html>