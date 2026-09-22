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
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header>
    <div class="brand">
        <img src="assets/images/logo.png" alt="Dream Lights Logo">
        <h1>Dream Lights</h1>
    </div>

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
    <div class="footer-content">

        <div class="footer-box">
            <h3>Dream Lights</h3>
            <p>Beautiful Decorative Lights for Every Celebration.</p>
        </div>

        <div class="footer-box">
            <h3>Quick Links</h3>
            <a href="index.php">Home</a><br>
            <a href="about.php">About</a><br>
            <a href="shop.php">Shop</a><br>
            <a href="contact.php">Contact</a>
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