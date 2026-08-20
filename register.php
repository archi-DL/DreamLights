<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Dream Lights</title>

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


<section class="register">

    <div class="register-box">

        <h2>Create Account</h2>

        <p>Join Dream Lights today</p>

        <form action="#" method="post">

            <label for="name">Full Name</label>

            <input
                type="text"
                id="name"
                name="name"
                placeholder="Enter your full name"
                required
            >


            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email"
                required
            >


            <label for="phone">Phone Number</label>

            <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="Enter your phone number"
                required
            >


            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Create a password"
                required
            >


            <label for="confirm_password">Confirm Password</label>

            <input
                type="password"
                id="confirm_password"
                name="confirm_password"
                placeholder="Confirm your password"
                required
            >


            <button type="submit">Register</button>

        </form>


        <p class="login-text">
            Already have an account?
            <a href="login.php">Login</a>
        </p>

    </div>

</section>


<footer>
    <p>© 2026 Dream Lights. All Rights Reserved.</p>
</footer>

</body>
</html>