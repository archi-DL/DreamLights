<?php
session_start();
include "includes/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

   $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) >= 1) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["name"];
            $_SESSION["user_email"] = $user["email"];

            header("Location: index.php");
            exit();
        }
        else {
            $message = "Invalid password!";
        }

    } else {
        $message = "Email not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Dream Lights</title>
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


<section class="login">

    <div class="login-box">

        <h2>Login</h2>

        <?php
        if ($message != "") {
            echo "<p class='success-message'>$message</p>";
        }
        ?>

        <p>Welcome back to Dream Lights</p>

        <form action="login.php" method="post">

            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email"
                required
            >


            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                required
            >


            <button type="submit">Login</button>

        </form>


        <p class="register-text">
            Don't have an account?
            <a href="register.php">Create Account</a>
        </p>

    </div>

</section>


<footer>
    <p>© 2026 Dream Lights. All Rights Reserved.</p>
</footer>

</body>
</html>