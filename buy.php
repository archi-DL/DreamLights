<?php
include "includes/db.php";

if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $product = mysqli_fetch_assoc($result);

} else {
    die("Product not found!");
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $customer_name = $_POST["customer_name"];
    $customer_email = $_POST["customer_email"];
    $customer_phone = $_POST["customer_phone"];
    $quantity = $_POST["quantity"];

    $total_price = $product["price"] * $quantity;

    $sql = "INSERT INTO orders
            (product_id, customer_name, customer_email, customer_phone, quantity, total_price)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "isssid",
        $id,
        $customer_name,
        $customer_email,
        $customer_phone,
        $quantity,
        $total_price
    );

    mysqli_stmt_execute($stmt);

    $message = "Order placed successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buy Product - Dream Lights</title>

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

    <h2><?php echo $product["name"]; ?></h2>

    <?php
        if ($message != "") {
            echo "<p class='success-message'>$message</p>";
        }
    ?>
    
    <div class="shop-card">

        <img src="<?php echo $product["image"]; ?>"
            alt="<?php echo $product["name"]; ?>">

        <h3><?php echo $product["name"]; ?></h3>

        <p><?php echo $product["description"]; ?></p>

        <h4>₹<?php echo $product["price"]; ?></h4>

        <form action="buy.php?id=<?php echo $product['id']; ?>" method="post">

            <input
                type="text"
                name="customer_name"
                placeholder="Enter your name"
                required
            >

            <input
                type="email"
                name="customer_email"
                placeholder="Enter your email"
                required
            >

            <input
                type="tel"
                name="customer_phone"
                placeholder="Enter your phone number"
                required
            >

            <input
                type="number"
                name="quantity"
                value="1"
                min="1"
                required
            >

            <button type="submit" class="btn">Place Order</button>

        </form>

    </div>

</section>

<footer>
    <p>© 2026 Dream Lights. All Rights Reserved.</p>
</footer>

</body>
</html>