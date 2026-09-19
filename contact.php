<?php
include "includes/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $user_message = $_POST["message"];

    $sql = "INSERT INTO messages (name, email, subject, message)
            VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "ssss",
        $name,
        $email,
        $subject,
        $user_message
    );

    mysqli_stmt_execute($stmt);

    $message = "Message sent successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact - Dream Lights</title>

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


<section class="contact">

    <h2>Contact Us</h2>

    <p>Have any questions or need help? Feel free to contact us.</p>

    <div class="contact-container">

        <div class="contact-info">

            <h3>Get In Touch</h3>

            <p>📞 <strong>Phone:</strong> +91 9876543210</p>

            <p>📧 <strong>Email:</strong> dreamlights@gmail.com</p>

            <p>📍 <strong>Address:</strong> Surat, Gujarat</p>

        </div>


        <div class="contact-form">

            <h3>Send Us a Message</h3>
            <?php
            if ($message != "") {
                echo "<p class='success-message'>$message</p>";
            }
            ?>

            <form action="contact.php" method="post">

                <input type="text" name="name" placeholder="Your Name" required>

                <input type="email" name="email" placeholder="Your Email" required>

                <input type="text" name="subject" placeholder="Subject" required>

                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>

                <button type="submit">Send Message</button>

            </form>

        </div>

    </div>

</section>


<footer>
    <p>© 2026 Dream Lights. All Rights Reserved.</p>
</footer>

</body>
</html>