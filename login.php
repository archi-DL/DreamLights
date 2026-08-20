<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Dream Lights</title>

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


<section class="login">

    <div class="login-box">

        <h2>Login</h2>

        <p>Welcome back to Dream Lights</p>

        <form action="#" method="post">

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