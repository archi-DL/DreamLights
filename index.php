<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dream Lights</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header>

        <h1>Dream Lights</h1>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
            
            <?php if (isset($_SESSION["user_id"])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>

    </header>

    <section class="hero">

    <h2>Brighten Every Celebration</h2>

    <p>
        Beautiful Decorative Lights for Diwali,
        Birthday, Wedding, Party and Every Special Occasion.
    </p>

    <a href="#" class="btn">Shop Now</a>

</section>

<section class="categories">

    <h2>Our Categories</h2>

    <div class="category-box">

        <div class="card">
            <h3>🪔 Diwali Lights</h3>
            <p>Decorative lights for Diwali Festival.</p>
        </div>

        <div class="card">
            <h3>🎂 Birthday Lights</h3>
            <p>Beautiful lights for Birthday Parties.</p>
        </div>

        <div class="card">
            <h3>💍 Wedding Lights</h3>
            <p>Elegant lights for Wedding Decoration.</p>
        </div>

        <div class="card">
            <h3>🎉 Party Lights</h3>
            <p>Stylish lights for Every Celebration.</p>
        </div>

    </div>

</section>

<section class="products">

    <h2>Featured Products</h2>

    <div class="product-box">

        <div class="product-card">
            <img src="assets/lights/product1.jpg" alt="LED Lights">
            <h3>LED String Lights</h3>
            <p class="price">₹299</p>
            <a href="#" class="btn">Buy Now</a>
        </div>

        <div class="product-card">
            <img src="assets/lights/product2.jpg" alt="Fairy Lights">
            <h3>Fairy Lights</h3>
            <p class="price">₹399</p>
            <a href="#" class="btn">Buy Now</a>
        </div>

        <div class="product-card">
            <img src="assets/lights/product3.jpg" alt="Curtain Lights">
            <h3>Curtain Lights</h3>
            <p class="price">₹599</p>
            <a href="#" class="btn">Buy Now</a>
        </div>

        <div class="product-card">
            <img src="assets/lights/product4.jpg" alt="Wedding Lights">
            <h3>Wedding Lights</h3>
            <p class="price">₹799</p>
            <a href="#" class="btn">Buy Now</a>
        </div>

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
            <a href="#">Home</a><br>
            <a href="#">About</a><br>
            <a href="#">Shop</a><br>
            <a href="#">Contact</a>
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